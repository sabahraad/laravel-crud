<?php

namespace App\Http\Controllers;
use App\Models\emp;
use Illuminate\Http\Request;
use PDF;
class empController extends Controller
{
    
    public function index()
    {
        $emp= emp::all();
        return view('AamarPay.index')->with('Employee',$emp);
    }

    
    public function create()
    {
        return view('Aamarpay.create');
    }

    
    public function store(Request $request)
    {
        $input=$request->all();
        emp::create($input);
        return redirect('raad');

    }

    
    public function edit($id)
    {
        $input=emp::find($id);
        return view('AamarPay.edit')->with('Employee',$input);
    }

    
    public function update(Request $request, $id)
    {
        $emp=emp::find($id);
        $input= $request->all();
        $emp->update($input);
        return redirect('raad');

    }

    
    public function destroy($id)
    {
        emp::destroy($id);
        return redirect('raad');
    }


    public function pdf(){

        $Employee= emp::all();
        $pdf=PDF::loadView('AamarPay.pdf',compact('Employee'));
        return $pdf->download('AamarPay_Employee_List.pdf');
    }


}
