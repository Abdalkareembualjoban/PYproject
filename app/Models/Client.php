<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Client extends Authenticatable
{
    use HasFactory,HasRoles;

    public function getVisibilityAttribute()
    {
        return $this->status ? 'Visible' : 'Un Visible';
    }

    public function Invoices(){
        return $this->hasMany(Invoice::class,'invoice_id');
    }
    // public function Memberships(){
    //     return $this->belongsToMany(Membership::class,Invoice::class,'membership_id','client_id');
    // }

    public function Memberships(){
        return $this->belongsToMany(Membership::class,Invoice::class,'client_id','membership_id');
    }
    
}
