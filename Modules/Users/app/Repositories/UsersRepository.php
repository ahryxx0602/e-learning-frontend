<?php

namespace Modules\Users\Repositories;

use App\Repositories\BaseRepository;
use Modules\Users\Models\Users;

/**
 * Class UsersRepository
 *
 * Eloquent implementation cho UsersRepositoryInterface.
 * Extends BaseRepository (đã có sẵn 9 methods chuẩn + clamp perPage, soft-delete support).
 * Thêm các method riêng cho Users tại đây.
 */
class UsersRepository extends BaseRepository implements UsersRepositoryInterface
{
    public function __construct(Users $model)
    {
        parent::__construct($model);
    }
}
