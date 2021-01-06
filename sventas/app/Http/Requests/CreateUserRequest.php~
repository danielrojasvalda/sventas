<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
    // 
    public function rules() {
    	return [
    		'name' => 'required|min:3';
    		'pass' => 'required',
    		'email' => 'required'
    	];    	
    }
}
