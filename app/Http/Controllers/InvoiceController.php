<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Invoice;
use App\Models\Membership;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InvoiceController extends Controller
{

    // public function __construct()
    // {
    //     $this->authorizeResource(Invoice::class,'invoice');
    // }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        // $data = Invoice::all();
        $my_inovies = Invoice::where('client_id','=', Auth()->id())->get();
        if (Auth()->user()->hasRole('supper_admin')) {
            $my_inovies = Invoice::get();
            
            }

        return response()->view('cms.invoices.index',['invoices'=>$my_inovies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $clients = Client::get();
        $memberships = Membership::get();
        return response()->view('cms.invoices.create' , ['clients'=>$clients,'memberships'=>$memberships]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator($request->all(), [
            'client_id' => 'required|integer',
            'membership_id' => 'required|integer',
            'membership_start_date' => 'required|date',
            'membership_end_date' => 'required|date',
            'price' => 'required|integer',
            'days_complete' => 'required|integer|min:1|max:45',
            'days_remaining' => 'required|integer|max:100',
            'invoice_paid' => 'required|boolean',
            
        ]);
        if (!$validator->fails()) {
            $invoice = new Invoice();
            $invoice->client_id = $request->input('client_id');
            $invoice->membership_id = $request->input('membership_id');
            $invoice->membership_start_date = $request->input('membership_start_date');
            $invoice->membership_end_date = $request->input('membership_end_date');
            $invoice->price = $request->input('price');
            $invoice->days_complete = $request->input('days_complete');
            $invoice->days_remaining = $request->input('days_remaining');
            $invoice->paid = $request->input('invoice_paid');
            $isSaved = $invoice->save();
            return response()->json([
                'message' => $isSaved ? 'Created Successfully' : 'Create failed'
            ], $isSaved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
        $client = Client::get();
        $membership = Membership::get();
        $invoiceclient = $invoice->client()->first();
        $invoicemembership = $invoice->membership()->first();
        return response()->view('cms.invoices.update',['invoice'=>$invoice,'clients'=>$client,'invoiceclient'=>$invoiceclient,
        'memberships'=>$membership,'invoicemembership'=>$invoicemembership]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
        {
            //
            $validator = Validator($request->all(), [
                'client_id' => 'required|integer',
                'membership_id' => 'required|integer',
                'membership_start_date' => 'required|date',
                'membership_end_date' => 'required|date',
                'days_complete' => 'required|integer|min:1|max:45',
                'days_remaining' => 'required|integer|max:100',
                'invoice_paid' => 'required|boolean',
                
            ]);
            if (!$validator->fails()) {
                $invoice->client_id = $request->input('client_id');
                $invoice->membership_id = $request->input('membership_id');
                $invoice->membership_start_date = $request->input('membership_start_date');
                $invoice->membership_end_date = $request->input('membership_end_date');
                $invoice->days_complete = $request->input('days_complete');
                $invoice->days_remaining = $request->input('days_remaining');
                $invoice->paid = $request->input('invoice_paid');
                $isUpdateed = $invoice->save();
                return response()->json([
                    'message' => $isUpdateed ? 'Created Successfully' : 'Create failed'
                ], $isUpdateed ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
            } else {
                return response()->json([
                    'message' => $validator->getMessageBag()->first()
                ], Response::HTTP_BAD_REQUEST);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
        $deleted = $invoice->delete();
        return response()->json([
            // 'message' => $deleted ? 'Deleted successfully' : 'Deleted failed'
            'title' => $deleted ? 'Deleted successfully' : "Delete failed",
            'icon' => $deleted ? 'success' : "error",
        ], $deleted ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }
}
