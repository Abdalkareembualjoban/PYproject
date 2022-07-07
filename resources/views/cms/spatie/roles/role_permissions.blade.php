@extends('cms.parent')
@section('title','Role & Permissions')
@section('page-name','All Admins')
@section('main-page','Human Resources')
@section('sub-page','Admins')
@section('page-name-small','All Admins')

@section('styles')
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{asset('css2/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
@endsection

@section('content')

<div class="card card-custom gutter-b">
    <!--begin::Header-->
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">{{$role->name}} Permissions</span>
            <span class="text-muted mt-3 font-weight-bold font-size-sm">Manage role permissions</span>
        </h3>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-0">
        <!--begin::Table-->
        <div class="table-responsive">
            <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_2">
                <thead>
                    <tr class="text-uppercase">
                        <th style="min-width: 150px">name</th>
                        <th style="min-width: 120px">Auth Type</th>
                        <th style="min-width: 80px">Granted</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                    <tr>
                        <td class="pl-0">
                            <a href="#"
                                class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{$permission->name}}</a>
                        </td>
                        <td class="pl-0">
                            <span href="#"
                                class="text-dark-50 font-weight-bolder text-hover-primary font-size-lg">{{($permission->guard_name)}}</span>
                        </td>
                        <td class="pl-0">
                            <div class="checkbox-inline">
                                <label class="checkbox checkbox-success">
                                    <input type="checkbox" name="permission_{{$permission->id}}"
                                        @if($permission->assigned)
                                    checked="checked"
                                    @endif onclick="updateRolePermission('{{$role->id}}','{{$permission->id}}')">
                                    <span></span>Granted</label>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!--end::Table-->
    </div>
    <!--end::Body-->
</div>

@endsection

@section('scripts')
<script>
    function updateRolePermission(roleId, permissionId) {
        axios.put('/cms/admin/roles/'+roleId+'/permissions',{
            permission_id: permissionId
        }).then(function (response) {
            // handle success
            console.log(response);
            toastr.success(response.data.message);
        }).catch(function (error) {
            // handle error
            console.log(error);
            toastr.error(error.response.data.message);
        })
     }
</script>
@endsection