<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Onboard;
use App\Http\Controllers;

class OnboardController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $onboardclient= new Onboard;
        $onboardclient->id=$request->cid;
        $onboardclient->name=$request->cname;
        $onboardclient->space=$request->work;
        $onboardclient->budget=$request->cbudget;
        // return view('/welcome');

        $onboardclient->save();

        return view('/clients2');

    }
}
