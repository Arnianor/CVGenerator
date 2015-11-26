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
			'firstName'              => 'required|alpha',
			'lastName'               => 'required|alpha',
			'birthDate'              => 'required|date|before:today',
			'street'                 => 'alpha',
			'streetNumber'           => 'integer|min:1',
			'postalCode'             => 'alpha_num',
			'locality'               => 'alpha',
			'country'                => 'alpha',
			'mail'                   => 'required|email',
			'telephone'              => 'string|numeric',
			'portable'               => 'string|numeric',
			'function'               => 'alpha_dash',
			'enterprise'             => 'alpha_dash',
			'enterpriseStreet'       => 'alpha_dash',
			'enterpriseStreetNumber' => 'integer|min:1',
			'enterprisePostalCode'   => 'alpha_dash',
			'enterpriseLocality'     => 'alpha_dash',
			'enterpriseCountry'      => 'alpha_dash',
			'enterpriseBeginDate'    => 'date|after:birthDate',
			'enterpriseEndDate'      => 'date|after:enterpriseBeginDate',
			'degree'                 => 'alpha',
			'school'                 => 'alpha_dash',
			'schoolStreet'           => 'alpha_dash',
			'schoolStreetNumber'     => 'integer|min:1',
			'schoolPostalCode'       => 'alpha_dash',
			'schoolLocality'         => 'alpha',
			'schoolCountry'          => 'alpha',
			'degreeBeginDate'        => 'date|after:birthDate',
			'degreeEndDate'          => 'date|after:degreeBeginDate',
			'language'               => 'alpha',
			'languageDegree'         => 'alpha',
			'languageLevel'          => 'alpha_num',
        ];
    }
}
