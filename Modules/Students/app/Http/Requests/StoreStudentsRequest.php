<?php

namespace Modules\Students\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreStudentsRequest extends FormRequest
{
    /**
     * Xác định user có quyền thực hiện request này không.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Validation rules cho việc tạo mới Students.
     * TODO: Thêm rules cần thiết.
     */
    public function rules(): array
    {
        return [
            //
        ];
    }

    /**
     * Custom messages cho validation errors.
     */
    public function messages(): array
    {
        return [
            //
        ];
    }

    /**
     * Override: trả về JSON thay vì redirect khi validation fail (API-only).
     */
    protected function failedValidation(Validator $validator): void
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => 'Dữ liệu không hợp lệ.',
            'errors'  => $validator->errors(),
        ], 422));
    }
}
