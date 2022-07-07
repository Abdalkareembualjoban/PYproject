@extends('cms.parent');

@section('title','Update Membership')
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
                <h3 class="card-title">Update New Membership</h3>
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
                        <label class="col-3 col-form-label">Full Name:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="name" value="{{$admin->name}}" placeholder="Enter full name" />
                            <span class="form-text text-muted">Please enter your full name</span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Mobile:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="tel" class="form-control" id="phone_num" value="{{$admin->phone_num}}" placeholder="Enter mobile" />
                            <span class="form-text text-muted">Please enter your mobile number</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Email address:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="email" class="form-control" id="email" value="{{$admin->email}}" placeholder="Enter email" />
                            <span class="form-text text-muted">We'll never share your email with anyone else</span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Full Name:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="address" value="{{$admin->address}}" placeholder="Enter full name" />
                            <span class="form-text text-muted">Please enter your full name</span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Full Name:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="identification_num" value="{{$admin->identification_num}}" placeholder="Enter full name" />
                            <span class="form-text text-muted">Please enter your full name</span>
                        </div>
                    </div> --}}

                    <div class="row">
                        <div class="form-group col-4">
                            <label for="username ">Membershipe Name</label>
                            <input type="text" class="form-control" id="username" value="{{$membership->username}}" placeholder="Enter Membershipe Name">
                        </div>
    
                        <div class="form-group col-4">
                            <label for="membership_type ">Membership type</label>
                            <input type="text" class="form-control" id="membership_type" value="{{$membership->membership_type}}" placeholder="Enter Membership type">
                        </div>
    
                        <div class="form-group col-4">
                            <label for="membership_price ">Membership price</label>
                            <input type="integer" class="form-control" id="membership_price" value="{{$membership->membership_price}}" placeholder="Enter membership price">
                        </div>
                        

                        <div class="form-group col-4">
                            <label for="membership_start_date ">Membership start date</label>
                            <input type="date" class="form-control" id="membership_start_date" value="{{$membership->membership_start_date}}" placeholder="Enter Membership start date">
                        </div>
                        
                        <div class="form-group col-4">
                            <label for="duration_days ">Duration days</label>
                            <input type="integer" class="form-control" id="duration_days" value="{{$membership->duration_days}}" placeholder="Enter duration days ">
                        </div>
                        

                        <div class="form-group col-4">
                            <label for="membership_end_date ">Membership end date</label>
                            <input type="date" class="form-control" id="membership_end_date" value="{{$membership->membership_end_date}}" placeholder="Enter Membership end date">
                        </div>
                        
                        <div class="form-group col-4">
                            <label for="days_complete ">Days complete</label>
                            <input type="integer" class="form-control" id="days_complete" value="{{$membership->days_complete}}" placeholder="Enter days_complete">
                        </div>

                        <div class="form-group col-4">
                            <label for="days_remaining ">Days remaining</label>
                            <input type="integer" class="form-control" id="days_remaining" value="{{$membership->days_remaining}}" placeholder="Enter days_remaining">
                        </div>

                        <div class="form-group col-4">
                            <label for="days_remaining ">status Membership</label>
                            <span class="switch switch-outline switch-icon switch-success">
                                <label>
                                    <input type="checkbox" id="status" @if($membership->status) checked @endif>
                                    <span></span>
                                </label>
                            </span>
                        </div>

                    
                    </div>


                    {{-- <div class="form-group row">
                        <label class="col-3 col-form-label">Active Account</label>
                        <div class="col-3">
                            <span class="switch switch-outline switch-icon switch-success">
                                <label>
                                    <input type="checkbox" checked="checked" id="active">
                                    <span></span>
                                </label>
                            </span>
                        </div>
                    </div> --}}
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-3">

                        </div>
                        <div class="col-9">
                            <button type="button" onclick="Updat({{$membership->id}})" class="btn btn-primary mr-2">Submit</button>
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
    axios.put('/cms/admin/memberships/'+id, {
        username: document.getElementById('username').value,
        membership_type: document.getElementById('membership_type').value,
        membership_price: document.getElementById('membership_price').value,
        membership_start_date: document.getElementById('membership_start_date').value,
        duration_days: document.getElementById('duration_days').value,
        membership_end_date: document.getElementById('membership_end_date').value,
        days_complete: document.getElementById('days_complete').value,
        days_remaining: document.getElementById('days_remaining').value,
        membership_status: document.getElementById('status').checked,
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
