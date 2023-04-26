<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\HoursStartValidate;
use App\Rules\HoursEndValidate;

class GiraRequest extends FormRequest
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
            'HoraS' => ['required', new HoursStartValidate],
            'HoraR' => ['required', new HoursEndValidate],
        ];
        if ($this->isMethod('post')) {
            return $this->createRules();
        } elseif ($this->isMethod('put')) {
            return $this->updateRules();
        }
    }

    /**
     * Define validation rules to store method for resource creation
     *
     * @return array
     */
    public function createRules(): array
    {
        return [
        ];
    }

    /**
     * Define validation rules to update method for resource update
     *
     * @return array
     */
    public function updateRules(): array
    {
        return [

        ];
    }
    public function messages(){
        return [

            'HoraS.*' => "Seleccione un hora de salida",
            'HoraR.*' => "Seleccione una hora de regreso",
            

        ];
    }



}
