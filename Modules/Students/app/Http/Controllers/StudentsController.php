<?php

namespace Modules\Students\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Students\Http\Requests\StoreStudentsRequest;
use Modules\Students\Http\Requests\UpdateStudentsRequest;
use Modules\Students\Repositories\StudentsRepositoryInterface;

class StudentsController extends Controller
{
    use ApiResponse;

    protected StudentsRepositoryInterface $repository;

    public function __construct(StudentsRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Danh sách Students (có phân trang).
     */
    public function index(Request $request): JsonResponse
    {
        $perPage = (int) $request->query('per_page', 15);
        $data = $this->repository->paginate($perPage);

        return $this->paginated($data);
    }

    /**
     * Tạo mới Students.
     */
    public function store(StoreStudentsRequest $request): JsonResponse
    {
        $data = $this->repository->create($request->validated());

        return $this->success($data, 'Students đã được tạo thành công.', 201);
    }

    /**
     * Chi tiết Students.
     */
    public function show(int $id): JsonResponse
    {
        $data = $this->repository->findOrFail($id);

        return $this->success($data);
    }

    /**
     * Cập nhật Students.
     */
    public function update(UpdateStudentsRequest $request, int $id): JsonResponse
    {
        $data = $this->repository->update($id, $request->validated());

        return $this->success($data, 'Students đã được cập nhật thành công.');
    }

    /**
     * Xoá Students.
     */
    public function destroy(int $id): JsonResponse
    {
        $this->repository->delete($id);

        return $this->success(null, 'Students đã được xoá thành công.');
    }
}
