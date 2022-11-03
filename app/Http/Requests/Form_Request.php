<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Form_Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nameOfProduct' => 'required',
            'unitOfMeasurement' => 'required',
            'productPrice' => 'required|numeric',
            'numberOfProducts' => 'required|numeric',
        ];
    }

    public function messages() {
        return [
            'nameOfProduct.required' => 'Ошибка: Поле "Наименование продукции" является обязательным',
            'unitOfMeasurement.required' => 'Ошибка: Поле "Ед. измерения" является обязательным',
            'productPrice.required' => 'Ошибка: Поле "Цена" является обязательным',
            'numberOfProducts.required' => 'Ошибка: Поле "Кол-во продукции" является обязательным',
            'productPrice.numeric' => 'Ошибка: Поле "Цена" является числовым',
            'numberOfProducts.numeric' => 'Ошибка: Поле "Кол-во продукции" является числовым',
        ];
    }
}
