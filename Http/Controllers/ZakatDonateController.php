<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zakatdonate;
use App\Models\Volunteer;

class ZakatDonateController extends Controller
{
    public function index()
    {
        $zakatdonates = Zakatdonate::orderBy('id','desc')->paginate(5);
        return view('admin.zakatdonates.index', compact('zakatdonates'));
    }
    public function Create(){
        return view('user.donatezakat');
    }

    public function Store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'dontype' => 'required',
            
        ]);

        $zakatdonate = new Zakatdonate;
        
        $zakatdonate->fname = $request->input('fname') ;
        $zakatdonate->phone = $request->input('phone');
        $zakatdonate->total = $request->input('total');
        $zakatdonate->address = $request->input('address');
        $zakatdonate->dontype = $request->input('dontype') ;
        $zakatdonate->Paytype = $request->input('Paytype') ;
        $zakatdonate->acctype = $request->input('acctype');
        $zakatdonate->total = $request->input('total');
        $zakatdonate->trackid = $request->input('trackid');
        $zakatdonate->volunteer = $request->input('volunteer');
        
        $save = $zakatdonate->save();
     
    if ($save){
            return redirect()->route('success.zakatdonate')->with('success','We Recive Your donation request. We will send you a confirmation massage to your phone number.');
    }
      
    }

    public function successmsg(){
        return view('user.zakatsuccessmsg');
    }

   public function display(){
    $display =Zakatdonate::latest()->first();
        return view('user.zakatdonar', compact('display'));
   }

    public function show(Zakatdonate $zakatdonate)
    {
        return view('admin.zakatdonates.show',compact('zakatdonate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function edit(Zakatdonate $zakatdonate)
    {
        $volunteers = Volunteer::all();
        return view('admin.zakatdonates.edit',compact('zakatdonate','volunteers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentRequest  $request
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zakatdonate $zakatdonate)
    {
        $request->validate([
            'fname' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'dontype' => 'required',
        ]);

        $zakatdonate->fill($request->post())->save();
        return redirect()->route('zakatdonates.index')->with('success','Zakat Donate Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zakatdonate $zakatdonate)
    {
        $zakatdonate
        ->delete();
        return redirect()->route('zakatdonates.index')->with('success','Zakat Donate has been deleted successfully');
    }
}
