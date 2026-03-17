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
        $perPage = (int) $request->query('per_page', 15);
        $data = $this->repository->paginate($perPage);

        return $this->paginated($data);
    }

    /**
     * Tạo mới Users.
     */
    public function store(StoreUsersRequest $request): JsonResponse
    {
        $data = $this->repository->create($request->validated());

        return $this->success($data, 'Users đã được tạo thành công.', 201);
    }

    /**
     * Chi tiết Users.
     */
    public function show(int $id): JsonResponse
    {
        $data = $this->repository->findOrFail($id);

        return $this->success($data);
    }

    /**
     * Cập nhật Users.
     */
    public function update(UpdateUsersRequest $request, int $id): JsonResponse
    {
        $data = $this->repository->update($id, $request->validated());

        return $this->success($data, 'Users đã được cập nhật thành công.');
    }

    /**
     * Xoá Users.
     */
    public function destroy(int $id): JsonResponse
    {
        $this->repository->delete($id);

        return $this->success(null, 'Users đã được xoá thành công.');
    }
}
