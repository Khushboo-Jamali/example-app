<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
// use Aap\Http\Controllers\appendController;

class appendController extends Controller
{
  public function append()
  {
    return view('Append.form');
  }

  public function insert(Request $res)
  {

    $model = new Student();
    $model->email = $res->email;
    $model->password = $res->psw;
    if ($model->save()) {
      return redirect('showdata');
    }
  }

  public function showdata()
  {
    $students = Student::all();
    $data = compact('students');
    return view('Append.showdata')->with($data);
  }
  public function delete($id)
  {
    $students = Student::find($id);
    $students->delete();
    return back();
  }
  public function edit($id)
  {
    $student = Student::find($id);
    $data = compact('student');
    return view('Append.update')->with($data);
  }
  public function update(Request $res, $id)
  {
    $model = new Student();
    $student = Student::find($id);
    $student->email = $res->email;
    $student->password = $res->psw;
    if ($student->save()) {
      return redirect('showdata');
    }
  }
}
