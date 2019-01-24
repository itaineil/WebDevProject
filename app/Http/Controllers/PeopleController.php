<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
use App\Person;
use DB;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

          $people = Person::orderBy('created_at','desc')->paginate(3);
          return view("pages.index_page")->with('people',$people);
    
     }
     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([

            'first_name'=>'required',
            'surname'=>'required',
            'date'=>'required',
            'weight'=>'required',
            'height'=>'required',
            'eye_color'=>'required'
        
        ]);        

        $person = new Person;
        $person->first_name = $request->input('first_name');
        $person->surname = $request->input('surname');
        $person->date = $request->input('date');
        $person->weight = $request->input('weight');
        $person->height = $request->input('height');
        $person->eye_color = $request->input('eye_color');
        $person->save();

        return redirect('/users')->with('message','User Added Successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $person = Person::find($id);
        return view('pages.show')->with('person',$person);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $person = Person::find($id);
        return view('pages.edit')->with('person',$person);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
       
        
        $request->validate([

            'first_name'=>'required',
            'surname'=>'required',
            'date'=>'required',
            'weight'=>'required',
            'height'=>'required',
            'eye_color'=>'required'
        
        ]);        
        $person = Person::find($id);
        $person->first_name = $request->first_name;
        $person->surname = $request->surname;
        $person->date = $request->date;
        $person->weight = $request->weight;
        $person->height = $request->height;
        $person->eye_color = $request->eye_color;
        $person->save();
        return redirect('/users')->with('message','User Updated Successfully');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $person = Person::find($id);
        $person->delete();
        return redirect('/users')->with('message','User Has Been Deleted');

     }

}
