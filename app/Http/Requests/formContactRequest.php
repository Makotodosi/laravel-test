<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formContactRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:15',
            'email' => 'required|email',
            'theme' => 'required|max:50',
            'message' => 'required|max:500',
        ];
    }
   public function messages() {
        return [
            'name.required' => 'Поле Имя является обязательным',
            'email.required' => 'Поле Почта является обязательным',
            'email.email' => 'Введена некорректная почта',
            'theme.required' => 'Поле Тема обращения является обязательным',
            'message.required' => 'Поле Текст обращения является обязательным',
        ];
    }
}
