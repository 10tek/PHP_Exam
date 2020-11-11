<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest {

    public function rules() {
        return [
            'name' => 'required|max:255',
            'code' => 'required|max:255',
            'description' => 'required|max:255',
        ];
    }
}
