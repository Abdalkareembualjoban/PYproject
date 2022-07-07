@extends('cms.parent');

@section('title','Create Admin')
@section('page-name','nas');
@section('main-page','nasser');
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
                <h3 class="card-title">Create New Admin</h3>
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
                    <h3 class="text-dark font-weight-bold mb-10">Role</h3>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Role:<span class="text-danger">*</span></label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="dropdown bootstrap-select form-control dropup">
                                <select class="form-control selectpicker" data-size="7" id="role_id"
                                    title="Choose one of the following..." tabindex="null" data-live-search="true">
                                    @foreach ($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span class="form-text text-muted">Please select store role</span>
                        </div>
                    </div>

                    <div class="separator separator-dashed my-10"></div>
                    <h3 class="text-dark font-weight-bold mb-10">Basic Info</h3>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Full Name:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="name" placeholder="Enter full name" />
                            <span class="form-text text-muted">Please enter your full name</span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Mobile:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="tel" class="form-control" id="phone_num" placeholder="Enter mobile" />
                            <span class="form-text text-muted">Please enter your mobile number</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Email address:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="email" class="form-control" id="email" placeholder="Enter email" />
                            <span class="form-text text-muted">We'll never share your email with anyone else</span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Full address:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="address" placeholder="Enter full address" />
                            <span class="form-text text-muted">Please enter your full address</span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Full identification num:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="identification_num" placeholder="Enter full identification num" />
                            <span class="form-text text-muted">Please enter your full identification num</span>
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
    axios.post('/cms/admin/admins', {
        role_id: document.getElementById('role_id').value,
        name: document.getElementById('name').value,
        phone_num: document.getElementById('phone_num').value,
        email: document.getElementById('email').value,
        address: document.getElementById('address').value,
        identification_num: document.getElementById('identification_num').value,
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
