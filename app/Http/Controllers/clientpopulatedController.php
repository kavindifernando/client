<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\clientpopulated;
use App\Http\Controllers;

class clientpopulatedController extends Controller
{
  /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data= clientpopulated::all();
        return view('/clientpopulated')->with('clients',$data);
    }
    
}
