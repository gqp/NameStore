<?php

namespace App\Http\Controllers;
 
 use App\Name;
 use App\Http\Requests;
 use App\Http\Requests\ValidateName;
 use App\Http\Controllers\Controller;

class NameController extends Controller
{
    
    /**
     * Grab all names and pass it to the view.
     */
    public function index()
    {
    	$names = Name::all();

    	return view('names/names')->with('names', $names);
    }

    /**
     * Save entered string to database
     */
    public function store(ValidateName $request)
    {

            $name = new Name;
            $name->name = $request->get('name');

            $name->save();

            return redirect('/');
    }
}
