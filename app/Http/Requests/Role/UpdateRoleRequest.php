<?php

namespace App\Http\Requests\Role;

use App\Models\ManagementAccess\Role;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

//this rule only at UpdateRequest
use Illuminate\Validation\Rule;

class UpdateRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
         //create middleware from kernel at here
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
            'title' =>['required', 'string', 'max:255', Rule::unique('role')->ignore($this->role)],
            //add validation for this role here 
        ];
    }
}
