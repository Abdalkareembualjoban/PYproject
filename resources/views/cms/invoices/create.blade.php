@extends('cms.parent');

@section('title','Create invoice')
@section('page-name','nas');
@section('main-page','invoice');
@section('sub-page','naa');
@section('page-name-small','create');

@section('styles')
    
@endsection

@section('content')

<!--begin::Container-->
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Create New Invoice</h3>
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
                    
                    {{-- <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Client Name:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <select class="form-control selectpicker" data-size="7" id="client_id"
                            title="Choose one of the following..." tabindex="null" data-live-search="true">
                           @foreach($clients as $client)
                            <option value="{{$client->id}}">{{$client->name}}</option>
                            @endforeach
                        
                        </select>
                            <span class="form-text text-muted">Please enter your admin id</span>
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">memberships name:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <select class="form-control selectpicker" data-size="7" id="membership_id"
                            title="Choose one of the following..." tabindex="null" data-live-search="true">
                           @foreach($memberships as $membership)
                            <option value="{{$membership->id}}">{{$membership->username}}</option>
                            @endforeach
                        
                        </select>
                            <span class="form-text text-muted">Please enter your admin id</span>
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Paying Off:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="date" class="form-control" id="paying_off" placeholder="Enter full name" />
                            <span class="form-text text-muted">Please enter your paying_off</span>
                        </div>
                    </div> --}}



                    <div class="row">
                        <div class="form-group col-4">
                            <label for="username ">Client Name</label>
                            <div class="col-9">
                                <select class="form-control selectpicker" data-size="7" id="client_id"
                                title="Choose one of the following..." tabindex="null" data-live-search="true">
                               @foreach($clients as $client)
                                <option value="{{$client->id}}">{{$client->name}}</option>
                                @endforeach
                            
                            </select>
                                {{-- <input type="integer" class="form-control" id="course_category_id" placeholder="Enter course category id" /> --}}
                                <span class="form-text text-muted">Please enter your client id</span>
                            </div>
                        </div>
                    
                        <div class="form-group col-4">
                            <label for="membership_type ">Membership name</label>
                            <div class="col-9">
                                <select class="form-control selectpicker" data-size="7" id="membership_id"
                                title="Choose one of the following..." tabindex="null" data-live-search="true">
                               @foreach($memberships as $membership)
                                <option value="{{$membership->id}}">{{$membership->username}}</option>
                                @endforeach
                            
                            </select>
                                <span class="form-text text-muted">Please enter your Membership id</span>
                            </div>
                        </div>
                
                        <div class="form-group col-4">
                            <label for="membership_start_date ">Membership start date</label>
                            <input type="date" class="form-control" id="membership_start_date" placeholder="Enter Membership start date">
                        </div>

                        <div class="form-group col-4">
                            <label for="membership_end_date ">Membership end date</label>
                            <input type="date" class="form-control" id="membership_end_date" placeholder="Enter Membership end date">
                        </div>

                        {{-- <div class="form-group col-4">
                            <label for="membership_type ">Membership name</label>
                            <div class="col-9">
                                <select class="form-control selectpicker" data-size="7" id="price"
                                title="Choose one of the following..." tabindex="null" data-live-search="true">
                               @foreach($memberships as $membership)
                                <option value="{{$membership->id}}">{{$membership->membership_price}}</option>
                                @endforeach
                            
                            </select>
                                <span class="form-text text-muted">Please enter your Membership id</span>
                            </div>
                        </div> --}}

                        <div class="form-group col-4">
                            <label for="days_complete ">Price</label>
                            <input type="integer" class="form-control" id="price" placeholder="Enter days_complete">
                        </div>

                        <div class="form-group col-4">
                            <label for="days_complete ">Days complete</label>
                            <input type="integer" class="form-control" id="days_complete" placeholder="Enter days_complete">
                        </div>

                        <div class="form-group col-4">
                            <label for="days_remaining ">Days remaining</label>
                            <input type="integer" class="form-control" id="days_remaining" placeholder="Enter days_remaining">
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

                        {{-- <div class="form-group col-4">
                            <label for="membership_price ">paying off</label>
                            <div class="col-9">
                                <input type="date" class="form-control" id="paying_off" placeholder="Enter full name" />
                                <span class="form-text text-muted">Please enter your paying_off</span>
                            </div>
                        </div> --}}
                        
                    </div>
                </div>


                



                <div class="card-footer">
                    <div class="row">
                        <div class="col-3">

                        </div>
                        <div class="col-9">
                            <button type="button" onclick="performStore()" class="btn btn-primary mr-2">Submit</button>
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
function performStore(){
    axios.post('/cms/admin/invoices', {
        
        client_id: document.getElementById('client_id').value,
        membership_id: document.getElementById('membership_id').value,
        // paying_off: document.getElementById('paying_off').value,
        membership_start_date: document.getElementById('membership_start_date').value,
        membership_end_date: document.getElementById('membership_end_date').value,
        price: document.getElementById('price').value,
        days_complete: document.getElementById('days_complete').value,
        days_remaining: document.getElementById('days_remaining').value,
        invoice_paid: document.getElementById('paid').checked,
    })
    .then(function (response) {
        console.log(response);
        document.getElementById('create-form').reset();
        toastr.success(response.data.message);
    })
    .catch(function (error) {
        console.log(error);
        toastr.error(error.response.data.message);
    });
}
</script>
    
@endsection
