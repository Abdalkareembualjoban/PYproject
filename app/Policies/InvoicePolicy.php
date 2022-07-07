<?php

namespace App\Policies;

use App\Models\Invoice;
use Illuminate\Auth\Access\HandlesAuthorization;

class InvoicePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny($userId)
    {
        //
        return auth('admin')->check() && auth('admin')->user()->hasPermissionTo('Read-Invoices') 
        ? $this->allow() : $this->deny('لا يوجد لك صلاحية الإستخدام');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  $userId  $user
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view($userId, Invoice $invoice)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  $userId  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create($userId)
    {
        //
        return auth('admin')->check() && auth('admin')->user()->hasPermissionTo('Create-Invoice')
         ? $this->allow() : $this->deny(' لا تمتلك صلاحية إضافة فاتورة ');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  $userId  $user
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update($userId, Invoice $invoice)
    {
        //
        return auth('admin')->check() && auth('admin')->user()->hasPermissionTo('Update-Invoice') 
        ? $this->allow() : $this->deny(' لا تمتلك صلاحية تعديل فاتورة ');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  $userId  $user
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete($userId, Invoice $invoice)
    {
        //
        return auth('admin')->check() && auth('admin')->user()->hasPermissionTo('Delete-Invoice') 
        ? $this->allow() : $this->deny(' لا تمتلك صلاحية حذف فاتورة ');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  $userId  $user
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore($userId, Invoice $invoice)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  $userId  $user
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete($userId, Invoice $invoice)
    {
        //
    }
}
