<?php

namespace App\Http\Controllers;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
  
    public function index()
    {
        $persons = Person::all();
        return view ('persons.index')->with('persons', $persons);
    }

    
    public function create()
    {
        return view('persons.create');
    }

   
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:persons',
            'roles' => 'required'
        ]);
        // $input = $request->all();
        // print_r($input);

        Person::create($data);
        return redirect('person')->with('flash_message', 'User Addedd!');  
    }
    // public function store(Request $request)
    // {
    //     $data = $request->validate([
    //         'title' => 'required|max:70',
    //         'description' => 'required'
    //     ]);

    //     $project = Project::create($data);

    //     return redirect('projects')->with('success', 'Project created successfully.');
    // }
    
    public function show($id)
    {
        $person = Person::find($id);
        return view('persons.show')->with('persons', $person);
    }

    
    public function edit($id)
    {
        $person = Person::find($id);
        return view('persons.edit')->with('persons', $person);
    }

  
    public function update(Request $request, $id)
    {
        $person = Person::find($id);
        // $input = $request->all();
        
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'roles' => 'required'
        ]);

        $person->update($data);
        return redirect('person')->with('flash_message', 'Person Updated!');  
    }

   
    public function destroy($id)
    {
        Person::destroy($id);
        return redirect('person')->with('flash_message', 'Person deleted!');  
    }
}