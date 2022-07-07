<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Invoice;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //
    public function index(){ 
        // **************** clients ****************//
        $clientCount = Client::count();
        $client = Client::paginate(5);
        $TotalActiveClients = Client::where('status','=',1)->count();
        $TotalInactiveClients = Client::where('status','=',0)->count();

        // **************** Invoices ****************//
        $inviceCount = Invoice::count();
        $TotalActiveInvices = Invoice::where('paid','=',1)->count();
        $TotalInactiveInvices = Invoice::where('paid','=',0)->count();
        // $TotalPriceInvices = Invoice::sum('price');'TotalPriceInvices'=>$TotalPriceInvices

        
        return response()->view('cms.dashboard',['clientCounts'=>$clientCount,'TotalInactiveClients'=>$TotalInactiveClients,
        'TotalActiveClients'=>$TotalActiveClients,'clients'=>$client,
        'inviceCount'=>$inviceCount,'TotalActiveInvices'=>$TotalActiveInvices,'TotalInactiveInvices'=>$TotalInactiveInvices,
        
    ]);
    }



    // public function clients() {
    //     $clientCounts = Client::count();
    //     return view('cms.dashboard', ['clientCounts'=>$clientCounts]);
    // }
    
}
