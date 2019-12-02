<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EmployeesController extends Controller
{
    public function employees()
    {
    	
    	$employees =DB::table('employees')->get();
 
    	return view('employees',['employees' => $employees]);
 
    }
    public function Add()
    {
        return view('Add');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'fullname' => 'required',
            'nik' => 'required',
            'email' => 'required'
        ]);
        
        DB::table('employees')->insert([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'nik' => $request->nik,
            'email' => $request->email
        ]);
        return redirect('/employees');
    }
    public function edit($id)
    {
        $employees = DB::table('employees')->where('id',$id)->first();
        return view('edit',['employees' => $employees]);
    }
    public function update($id, Request $request)
    {
        $this->validate($request,[
            'username' => 'required',
            'fullname' => 'required',
            'nik' => 'required',
            'email' => 'required'
        ]);
        $employees = employees::find($id);
        $employees->username = $request->username;
        $employees->fullname = $request->fullname;
        $employees->nik = $request->nik;
        $employees->email = $request->email;
        $employees->save();
        return redirect('/employees');
    }
    public function delete($id)
    {
        DB::table('employees')->where('id',$id)->delete();
        return redirect('/employees');
    }
}
