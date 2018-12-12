<?php

namespace App\Http\Controllers\Business;

use App\Models\Business;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BusinessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function registerBusinessForm()
    {
        return view('business.register-business-form');
    }

    public function dashboard()
    {
        return view('business.dashboard');
    }

    public function registerMyBusiness(Request $request)
    {
        //$formInput = $request->except('business_owner');
        $this->validator($request->all())->validate();

        //$formInput['business_owner'] = auth()->id();
        $this->create($request->all());

        return redirect()->route('dashboard');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:businesses',
            'phone'=>'required|string|max:10',
            'address'=>'required|string|max:255'
        ]);
    }


    protected function create(array $data)
    {
        return Business::create([
            'business_owner'=>$data['business_owner'],
            'name' => $data['name'],
            'email' => $data['email'],
            'phone'=>$data['phone'],
            'address' => $data['address']
        ]);
    }
}
