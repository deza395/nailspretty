<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    /* autorizacion del usuario autentificado para guardar el servicio */
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

        $service=$this->route()->parameter('service');
        $rules= [
            'name'=>'required',
            'slug'=>'required:services,slug,',
            'status'=>'required|in:1,2',
            'file'=>'image'
        ];
        if($service){
            $rules['slug']='required:services,slug,'.$service->id;
        }
        if($this->status==2){
            $rules=array_merge($rules,[
                'category_id'=>'required',
                'body'=>'required',
            ]);
        }
        return $rules;
    }
}
