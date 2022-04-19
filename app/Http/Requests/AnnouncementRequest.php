<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnouncementRequest extends FormRequest
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
    public function rules()     {         
        return [             
            'title' => 'required|min:3',                           
            'description'=> 'required|max:100',             
            'price'=> 'required|numeric',             
                     
        ];     
    }     
    public function messages(){         
        return [             
            'title.required' => "C'è bisogno del titolo",                         
            'description.required' => "Devi inserire una descrizione",             
            'price.required' => "Manca il prezzo" ,              
            'title.min' => "Il titolo deve essere lungo di 3 caratteri",                      
            'description.max' => "La descrizione non può superare i 100 caratteri",             
            'price.numeric' => "Il prezzo deve essere un numero",              
        ];
    }
}

