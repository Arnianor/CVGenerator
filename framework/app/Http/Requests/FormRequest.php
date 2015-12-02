<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FormRequest extends Request
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
            'sex'                    => 'required',
			'firstName'              => 'required|string',
			'lastName'               => 'required|string',
			'birthDate'              => 'required|date|before:today',
			'photo'                  => 'image',
			'street'                 => 'string',
			'streetNumber'           => 'integer|min:1',
			'postalCode'             => 'alpha_num',
			'locality'               => 'string',
			'country'                => 'string',
			'mail'                   => 'required|email',
			'telephone'              => 'string|numeric',
			'portable'               => 'string|numeric',
			'function'               => 'string',
			'enterprise'             => 'string',
			'enterpriseStreet'       => 'string',
			'enterpriseStreetNumber' => 'integer|min:1',
			'enterprisePostalCode'   => 'alpha_num',
			'enterpriseLocality'     => 'string',
			'enterpriseCountry'      => 'string',
			'enterpriseBeginDate'    => 'date|after:birthDate',
			'enterpriseEndDate'      => 'date|after:enterpriseBeginDate',
			'degree'                 => 'string',
			'school'                 => 'string',
			'schoolStreet'           => 'string',
			'schoolStreetNumber'     => 'integer|min:1',
			'schoolPostalCode'       => 'alpha_num',
			'schoolLocality'         => 'string',
			'schoolCountry'          => 'string',
			'degreeBeginDate'        => 'date|after:birthDate',
			'degreeEndDate'          => 'date|after:degreeBeginDate',
			'language'               => 'string',
			'languageDegree'         => 'string',
			'languageLevel'          => 'alpha_num',
			'hobbies'                => 'string'
        ];
    }
}
