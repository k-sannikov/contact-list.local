<?php

namespace App\Http\Requests;

use App\Model\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $contact = Contact::find($this->route('contact'));
        if (isset($contact)) {
            if (Auth::id() !== $contact->user_id) {
                return false;
            }
        }
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
            'surname' => 'required|max:100',
            'name' => 'required|max:100',
            'patronymic' => 'max:100',
            'organization' => 'max:255',
            'INN' => 'max:12',
            'department' => 'max:255',
            'position' => 'max:255',
            'phone_work' => 'required|phone_number|max:12',
            'phone_mobile' => 'phone_number|max:12',
            'email' => 'email_check|max:255',
        ];
    }

    /**
     * Получить сообщения об ошибках для определения правил проверки
     *
     *@return array
     */
    public function messages()
    {
        return [
            'surname.required' => 'Необходимо заполнить поле Фамилия',
            'name.required' => 'Необходимо заполнить поле Имя',
            'phone_work.required' => 'Необходимо заполнить поле Рабочий телефон',
            'surname.max' => 'Фамилия должна быть не более :max символов',
            'name.max' => 'Имя должно быть не более :max символов',
            'patronymic.max' => 'Отчество должно быть не более :max символов',
            'organization.max' => 'Наименование организации должно быть не более :max символов',
            'INN.max' => 'ИНН должен быть не более :max символов',
            'department.max' => 'Наименование отдела должно быть не более :max символов',
            'position.max' => 'Наименование должности должно быть не более :max символов',
            'phone_work.max' => 'Рабочий телефон должен быть не более :max символов',
            'phone_mobile.max' => 'Мобильный телефон должен быть не более :max символов',
            'email.max' => 'Адрес электронной почты должен быть не более :max символов',
            'phone_work.phone_number' => 'Номер рабочего телефона должен соответствовать формату +00000000000',
            'phone_mobile.phone_number' => 'Номер мобильного телефона должен соответствовать формату +00000000000',
            'email.email_check' => 'Адрес электронный почты должен соответствовать формату example@example.com',
        ];
    }
}
