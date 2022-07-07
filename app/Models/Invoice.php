<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Invoice extends Model
{
    use HasFactory, HasRoles;

    public function getpaidVisibilityAttribute()
    {
        return $this->paid ? 'paid' : 'Unpaid';
    }

    // public function InvoiceClient(){
    //     return $this->belongsTo(Client::class);
    // }
    public function client(){
        return $this->belongsTo(Client::class , 'client_id');
    }

    public function membership(){
        return $this->belongsTo(Membership::class, 'membership_id');
    }

    
}
