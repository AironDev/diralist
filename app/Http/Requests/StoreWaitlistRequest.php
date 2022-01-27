<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;




class StoreWaitlistRequest extends Controller
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function __construct(Request $request)
   {
      $this->validate(
         $request, [
            'email' => 'email|unique:waitlists',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'nullable',
            'notes' => 'nullable',
            'type' => 'integer',
        ]
      );

      parent::__construct($request);
   }
}

