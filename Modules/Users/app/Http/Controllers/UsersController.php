<?php

namespace Modules\Users\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Users\Http\Requests\StoreUsersRequest;
use Modules\Users\Http\Requests\UpdateUsersRequest;
use Modules\Users\Repositories\UsersRepositoryInterface;

class UsersController extends Controller
{
    use ApiResponse;

    protected UsersRepositoryInterface $repository;

    public function __construct(UsersRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Danh sách Users (có phân trang).
     */
    public function index(Request $request): JsonResponse
    {
        $perPage = (int)$request->query('per_page', 15);
        $data = $this->repository->paginate($perPage);

        return $this->paginated($data);
    }

    /**
     * Tạo mới User + gán role.
     */
    public function store(StoreUsersRequest $request): JsonResponse
    {
        $user = $this->repository->create($request->validated());

        if ($request->filled('role')) {
            $user->assignRole($request->role);
        }

        $user->load('roles');

        return $this->success($user, 'User đã được tạo thành công.', 201);
    }

    /**
     * Chi tiết User.
     */
    public function show(int $id): JsonResponse
    {
        $user = $this->repository->findOrFail($id);
        $user->load('roles', 'permissions');

        return $this->success($user);
    }

    /**
     * Cập nhật User + đổi role.
     */
    public function update(UpdateUsersRequest $request, int $id): JsonResponse
    {
        $user = $this->repository->update($id, $request->validated());

        if ($request->filled('role')) {
            $user->syncRoles([$request->role]);
        }

        $user->load('roles');

        return $this->success($user, 'User đã được cập nhật thành công.');
    }

    /**
     * Xoá User (soft delete).
     */
    public function destroy(int $id): JsonResponse
    {
        $this->repository->delete($id);

        return $this->success(null, 'User đã được xoá thành công.');
    }

    /**
     * Gán role cho User.
     */
    public function assignRole(Request $request, int $id): JsonResponse
    {
        $request->validate([
            'role' => 'required|string|exists:roles,name',
        ]);

        $user = $this->repository->findOrFail($id);
        $user->assignRole($request->role);
        $user->load('roles');

        return $this->success($user, 'Gán role thành công.');
    }

    /**
     * Thu hồi role của User.
     */
    public function revokeRole(Request $request, int $id): JsonResponse
    {
        $request->validate([
            'role' => 'required|string|exists:roles,name',
        ]);

        $user = $this->repository->findOrFail($id);
        $user->removeRole($request->role);
        $user->load('roles');

        return $this->success($user, 'Thu hồi role thành công.');
    }
}
