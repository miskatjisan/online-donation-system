<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moneydonate;

class MoneyDonateController extends Controller
{
    public function index()
    {
        $moneydonates = Moneydonate::orderBy('id','desc')->paginate(5);
        return view('admin.moneydonates.index', compact('moneydonates'));
    }
    public function Create(){
        return view('user.donatemoney');
    }

    public function Store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'phone' => 'required',
            'total' => 'required',
            'address' => 'required',
            'Paytype' => 'required',
            'acctype' => 'required',
            'trackid' => 'required',
            
        ]);

        $moneydonate = new Moneydonate;
        
        $moneydonate->fname = $request->input('fname') ;
        $moneydonate->phone = $request->input('phone');
        $moneydonate->total = $request->input('total');
        $moneydonate->address = $request->input('address');
        $moneydonate->Paytype = $request->input('Paytype') ;
        $moneydonate->acctype = $request->input('acctype');
        $moneydonate->trackid = $request->input('trackid');


        $save = $moneydonate->save();
        
    if ($save){
            return redirect()->route('success.moneydonate')->with('success','We Recive Your donation. Thank You For Your Donation. Click here to see your donation details.');
    }
    
      
    }
    public function successmsg(){
        return view('user.moneysuccessmsg');
    }

   public function display(){
    $display =Moneydonate::latest()->first();
        return view('user.moneydonar', compact('display'));
   }

    public function show(Moneydonate $moneydonate)
    {
        return view('admin.moneydonates.show',compact('moneydonate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function edit(Moneydonate $moneydonate)
    {
        return view('admin.moneydonates.edit',compact('moneydonate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentRequest  $request
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Moneydonate $moneydonate)
    {
        $request->validate([
            'fname' => 'required',
            'phone' => 'required',
            'total' => 'required',
            'address' => 'required',
            'Paytype' => 'required',
            'acctype' => 'required',
            'trackid' => 'required',
        ]);
        $moneydonate->fill($request->post())->save();
        return redirect()->route('moneydonates.index')->with('success','Money Donate Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Moneydonate $moneydonate)
    {
        $moneydonate->delete();
        return redirect()->route('moneydonates.index')->with('success','Money Donate has been deleted successfully');
    }
}
