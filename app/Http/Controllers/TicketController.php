<?php

namespace App\Http\Controllers;

use App\Models\Ticket; 
use Illuminate\Http\Request;

class TicketController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::orderBy('id','desc')->paginate(5);
        return view('admin.ticketdonates.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Create()
    {
        return view('user.ticket');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        $ticket = new Ticket;
        
        $ticket->fname = $request->input('fname') ;
        $ticket->phone = $request->input('phone');
        $ticket->total = $request->input('total');
        $ticket->address = $request->input('address');
        $ticket->Paytype = $request->input('Paytype') ;
        $ticket->acctype = $request->input('acctype');
        $ticket->trackid = $request->input('trackid');


        $save = $ticket->save();
        
    if ($save){
            return redirect()->route('success.ticketdonate')->with('success','You successfully buy our ticket. Thank You. Click here to see your details.');
    }
    
      
    }
    public function successmsg(){
        return view('user.ticketsuccessmsg');
    }

   public function display(){
    $display =Ticket::latest()->first();
        return view('user.ticketdonar', compact('display'));
   }

    public function show(Ticket $ticket)
    {
        return view('admin.ticketdonates.show',compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        return view('admin.ticktdonates.edit',compact('ticketdonate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentRequest  $request
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
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
        $ticket->fill($request->post())->save();
        return redirect()->route('tickets.index')->with('success','Ticket Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('tickets.index')->with('success','Ticket has been deleted successfully');
    }
}
