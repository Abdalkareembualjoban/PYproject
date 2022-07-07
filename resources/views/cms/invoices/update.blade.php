@extends('cms.parent');


@section('page-name','nas');
@section('main-page','nasser');
@section('sub-page','naa');
@section('page-name-small','Update');

@section('styles')
    
@endsection

@section('content')

<!--begin::Container-->
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Update Invoice</h3>
                {{-- <div class="card-toolbar">
                        <div class="example-tools justify-content-center">
                            <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                        </div>
                    </div> --}}
            </div>
            <!--begin::Form-->
            <form id="create-form">
                @csrf
                <div class="card-body">
                    <div class="separator separator-dashed my-10"></div>
                    <h3 class="text-dark font-weight-bold mb-10">Basic Info</h3>
                    

                    <div class="row">
                         <div class="form-group col-4">
                            <label for="username ">Membershipe Name</label>
                            <div class="col-9">
                                <select class="form-control selectpicker" data-size="7" id="client_id"
                                title="Choose one of the following..." tabindex="null" data-live-search="true">
                               @foreach($clients as $client)
                                <option value="{{$client->id}}" @if ($invoiceclient->id == $client->id) selected 
                                    @endif>{{$client->name}}</option>
                                @endforeach
                            </select>
                                <span class="form-text text-muted">Please enter your client id</span>
                            </div>
                        </div>
                        
                    
                        <div class="form-group col-4">
                            <label for="membership_type ">Membership name</label>
                            <div class="col-9">
                                <select class="form-control selectpicker" data-size="7" id="membership_id"
                                title="Choose one of the following..." tabindex="null" data-live-search="true">
                               @foreach($memberships as $membership)
                                <option value="{{$membership->id}}"  @if ($invoicemembership->id == $membership->id) selected 
                                    @endif>{{$membership->username}}</option>
                                @endforeach
                            
                            </select>
                                <span class="form-text text-muted">Please enter your Membership id</span>
                            </div>
                        </div>
                
                        <div class="form-group col-4">
                            <label for="membership_start_date ">Membership start date</label>
                            <input type="date" class="form-control" id="membership_start_date" value="{{$invoice->membership_start_date}}" placeholder="Enter Membership start date">
                        </div>

                        <div class="form-group col-4">
                            <label for="membership_end_date ">Membership end date</label>
                            <input type="date" class="form-control" id="membership_end_date" value="{{$invoice->membership_end_date}}" placeholder="Enter Membership end date">
                        </div>

                        <div class="form-group col-4">
                            <label for="days_complete ">Days complete</label>
                            <input type="integer" class="form-control" id="days_complete" value="{{$invoice->days_complete}}" placeholder="Enter days_complete">
                        </div>

                        <div class="form-group col-4">
                            <label for="days_remaining ">Days remaining</label>
                            <input type="integer" class="form-control" id="days_remaining" value="{{$invoice->days_remaining}}" placeholder="Enter days_remaining">
                        </div>

                        <div class="form-group col-4">
                            <label for="days_remaining ">invoice paid</label>
                            <span class="switch switch-outline switch-icon switch-success">
                                <label>
                                    <input type="checkbox" checked="checked" id="paid">
                                    <span></span>
                                </label>
                            </span>
                        </div>                                            
                    </div>
                </div>
           
                <div class="card-footer">
                    <div class="row">
                        <div class="col-3">

                        </div>
                        <div class="col-9">
                            <button type="button" onclick="Updat({{$invoice->id}})" class="btn btn-primary mr-2">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
    </div>
</div>
<!--end::Container-->
    
@endsection

@section('scripts')

<script>
function Updat(id){
    axios.put('/cms/admin/invoices/'+id, {
        client_id: document.getElementById('client_id').value,
        membership_id: document.getElementById('membership_id').value,
        membership_start_date: document.getElementById('membership_start_date').value,
        membership_end_date: document.getElementById('membership_end_date').value,
        days_complete: document.getElementById('days_complete').value,
        days_remaining: document.getElementById('days_remaining').value,
        invoice_paid: document.getElementById('paid').checked,
    })
    .then(function (response) {
        console.log(response);
        toastr.success(response.data.message);
    })
    .catch(function (error) {
        console.log(error);
        toastr.error(error.response.data.message);
    });
}
</script>
    
@endsection
