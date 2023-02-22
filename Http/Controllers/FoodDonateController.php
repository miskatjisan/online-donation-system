<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fooddonate;
use App\Models\Volunteer;
use PDF;

class FoodDonateController extends Controller
{
    public function index()
    {
        $fooddonates = Fooddonate::orderBy('id','desc')->paginate(5);
        return view('admin.fooddonates.index', compact('fooddonates'));
    }

    public function Create(){
        return view('user.donatefood');
    }

    public function Store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'dontype' => 'required',
            'typesfood' => 'required',
            'quantity' => 'required',
            'whenmadeit' => 'required',
        ]);

        $fooddonate = new Fooddonate;
        
        $fooddonate->fname = $request->input('fname') ;
        $fooddonate->phone = $request->input('phone');
        $fooddonate->address = $request->input('address');
        $fooddonate->dontype = $request->input('dontype') ;
        $fooddonate->typesfood = $request->input('typesfood');
        $fooddonate->quantity = $request->input('quantity');
        $fooddonate->whenmadeit = $request->input('whenmadeit') ;
        $fooddonate->volunteer = $request->input('volunteer');
        
        $save = $fooddonate->save();
     
    if ($save){
            return redirect()->route('success.fooddonate')->with('success','We Recive Your donation request. Thank You For Your Donation . Click here to see your donation details');
    }
      
    }

    public function successmsg(){
        return view('user.foodsuccessmsg');
    }

   public function display(){
    $display =Fooddonate::latest()->first();
        return view('user.fooddonar', compact('display'));
   }
   public function createPDF() {
    // retreive all records from db
    $data = Fooddonate::latest()->first();
    // share data to view
    view()->share('display',$data);
    $pdf = PDF::loadView('user.fooddonar', compact('data'));
    // download PDF file with download method
    return $pdf->download('pdf_file.pdf');
  }


    public function show(Fooddonate $fooddonate)
    {
        return view('admin.fooddonates.show',compact('fooddonate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function edit(Fooddonate $fooddonate)
    {
        $volunteers = Volunteer::all();

        return view('admin.fooddonates.edit',compact('fooddonate','volunteers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentRequest  $request
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fooddonate $fooddonate)
    {
        $request->validate([
            'fname' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'dontype' => 'required',
            'typesfood' => 'required',
            'quantity' => 'required',
            'whenmadeit' => 'required',
        ]);

        $fooddonate->fill($request->post())->save();
        return redirect()->route('fooddonates.index')->with('success','Food Donate Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fooddonate $fooddonate)
    {
        $fooddonate ->delete();
        return redirect()->route('fooddonates.index')->with('success','Food Donate has been deleted successfully');
    }
}
