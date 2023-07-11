<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourListRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'priceFrom' => 'numeric|min:0',
            'priceTo' => 'numeric|min:0',
            'dateFrom' => 'date',
            'dateTo' => 'date',
            'sortBy' => 'string|in:starting_date,price,name,ending_date',
            'sortOrder' => 'string|in:asc,desc',
        ];
    }
    public function messages(): array
    {
        return [
            'sortBy.in' => 'The sort by field must be one of the following types: starting_date, price, name, ending_date',
            'sortOrder.in' => 'The sort order field must be one of the following types: asc, desc',
        ];
    }
}
