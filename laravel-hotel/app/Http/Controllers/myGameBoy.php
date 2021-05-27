<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class myGameBoy extends Controller
{
  public function home () {

    $name = 'Matthew';
    $employees= Employee::all();
    return view("pages.home", compact('name','employees'));
  }

  public function employee ($id) {

    $employee = Employee::findOrFail($id);
    return view('pages.employee', compact('employee'));
  }

  public function delete($id) {
    $employee = Employee::findOrFail($id);
    $employee -> delete();
    return redirect() -> route('home');
  }

  public function edit($id) {

    $employee = Employee::findOrFail($id);
    return view('pages.edit',compact('employee'));
  }

  public function update(Request $request, $id) {
    $validate = $request -> validate([
          'firstname' => 'required',
          'lastname' => 'required',
          'role' => 'required',
          'ral' => 'required',
      ]);

    $employee = Employee::findOrFail($id);
    $employee -> update($validate);
    return redirect() -> route('home');
  }

  public function create() {

    return view('pages.create');
  }

  public function store(Request $request) {
    
    $validate = $request -> validate([
          'firstname' => 'required',
          'lastname' => 'required',
          'role' => 'required',
          'ral' => 'required',
      ]);

    $employee = Employee::create($validate);

    return redirect() -> route('home');
  }
}
