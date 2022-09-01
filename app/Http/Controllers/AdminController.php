<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin-panel.index2');
    }

    public function addEmployee()
    {
        return view('admin-panel.add-employee');
    }

    public function regEmployee (Request $request)
    {   
        $emp = new Employee;
        $emp->name   = $request->name;
        $emp->emp_id = $request->emp_id;
        $emp->email  = $request->email;
        $emp->dept   = $request->dept;
        $emp->phone  = $request->phone;
        $emp->save();
        return redirect()->back()->with('success', 'Registration successfully complete!');
    }

    public function employeeList()
    {
        $emp = Employee::all();
        // dd($emp->toArray());
        return response()->json(['data' => $emp]);
    }
}
