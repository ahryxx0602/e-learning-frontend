<?php

namespace Modules\Users\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class BulkRestoreUsersRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'ids'   => 'required|array|min:1',
            'ids.*' => 'required|integer',
        ];
    }

    public function messages(): array
    {
        return [
            'ids.required'  => 'Danh sách ID không được để trống.',
            'ids.array'     => 'ids phải là mảng.',
            'ids.min'       => 'Phải chọn ít nhất 1 user.',
            'ids.*.integer' => 'ID phải là số nguyên.',
        ];
    }

    protected function failedValidation(Validator $validator): void
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => 'Dữ liệu không hợp lệ.',
            'errors'  => $validator->errors(),
        ], 422));
    }
}
