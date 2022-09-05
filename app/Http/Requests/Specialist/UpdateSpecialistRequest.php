<?php

namespace App\Http\Requests\Specialist;

use App\Models\MasterData\Specialist;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;


//this rule only at UpdateRequest
use Illuminate\Validation\Rule;


class UpdateSpecialistRequest extends FormRequest
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
            'name' =>['required', 'string','max:255', Rule::unique('specialist')
                        ->ignore($this->specialist)],

            'price' =>['required', 'string', 'max:255'],

                    //add validation for this role here
        ];
    }
}
