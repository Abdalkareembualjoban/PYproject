<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    public function getVisibilityAttribute()
    {
        return $this->status ? 'Visible' : 'Un Visible';
    }


    public function Invoices(){
        return $this->hasMany(Invoice::class,'invoice_id');
    }

    // public function Clients(){
    //     return $this->belongsToMany(Client::class,Invoice::class,'client_id','membership_id');
    // }
    public function Clients(){
        return $this->belongsToMany(Client::class,Invoice::class,'membership_id','client_id');
    }


}
