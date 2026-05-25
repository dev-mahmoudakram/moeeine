<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'         => ['required', 'string', 'min:2', 'max:100'],
            'phone'        => ['required', 'string', 'regex:/^\+?[0-9]{7,20}$/'],
            'service_type' => ['required', 'string', 'max:150'],
            'city'         => ['required', 'string', 'max:50'],
            'date'         => ['nullable', 'date', 'after_or_equal:today'],
            'notes'        => ['nullable', 'string', 'max:1000'],
        ];
    }

    public function messages(): array
    {
        if (app()->getLocale() === 'ar') {
            return [
                'name.required'        => 'الاسم الكامل مطلوب.',
                'name.min'             => 'الاسم يجب أن يكون حرفين على الأقل.',
                'name.max'             => 'الاسم يجب أن يكون أقل من 100 حرف.',
                'phone.required'       => 'رقم الجوال مطلوب.',
                'phone.regex'          => 'يرجى إدخال رقم جوال صحيح (أرقام فقط).',
                'service_type.required'=> 'يرجى اختيار نوع الخدمة.',
                'city.required'        => 'يرجى اختيار المدينة.',
                'date.after_or_equal'  => 'يجب أن يكون التاريخ اليوم أو في المستقبل.',
                'notes.max'            => 'الملاحظات يجب أن تكون أقل من 1000 حرف.',
            ];
        }

        return [
            'name.required'        => 'Full name is required.',
            'name.min'             => 'Name must be at least 2 characters.',
            'name.max'             => 'Name must not exceed 100 characters.',
            'phone.required'       => 'Mobile number is required.',
            'phone.regex'          => 'Please enter a valid phone number (digits only).',
            'service_type.required'=> 'Please select a service type.',
            'city.required'        => 'Please select a city.',
            'date.after_or_equal'  => 'Date must be today or a future date.',
            'notes.max'            => 'Notes must not exceed 1000 characters.',
        ];
    }
}
