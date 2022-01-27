<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Waitlist;
use App\Http\Requests\StoreWaitlistRequest;


class WaitlistController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // index
    public function index(){
        $list = Waitlist::all();
        return response()->json([
            'message' => 'Waitlist retrieved successfully',
            'status' => 'success',
            'data' => $list
        ]);
    }

    // single
    public function find (){

    }

    // store
    public function store(Request $request){
        
        $this->validate(
         $request, [
            'email' => 'email|unique:waitlists',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'nullable',
            'notes' => 'nullable',
            'type' => 'integer',
        ]);

        $list = Waitlist::create($request->all());
        return response()->json([
            'message' => 'Waitlist created successfully',
            'status' => 'success',
            'data' => $list
        ]);
    }
}
