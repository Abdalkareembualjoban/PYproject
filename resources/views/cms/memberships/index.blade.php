@extends('cms.parent');

@section('title','View Memberships')
@section('page-name','nas');
@section('main-page','nasser');
@section('sub-page','naa');
@section('page-name-small','create');

@section('styles')
    
@endsection

@section('content')

<!--begin::Advance Table Widget 5-->
<section class="content">
    <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Responsive Hover Table</h3>
                        

                        <div class="card-tools">
                            
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Membershipe Name</th>
                                    <th>Membership type</th>
                                    <th>Membership price</th>
                                    {{-- <th>Membership start date</th> --}}
                                    <th>Duration days</th>
                                    {{-- <th>Membership end date</th>
                                    <th>Days complete</th>
                                    <th>Days remaining</th>
                                    <th>status Membership</th> --}}
                                    <th>Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- <span class="tag tag-success">Approved</span> --}}
                                @foreach ($memberships as $membership)
                                <tr>
                                    <td>{{$membership->id}}</td>
                                    <td>{{$membership->username}}</td>
                                    <td>{{$membership->membership_type}}</td>
                                    <td>{{$membership->membership_price}}</td>
                                    {{-- <td>{{$membership->membership_start_date}}</td> --}}
                                    <td>{{$membership->duration_days}}</td>
                                    {{-- <td>{{$membership->membership_end_date}}</td>
                                    <td>{{$membership->days_complete}}</td>
                                    <td>{{$membership->days_remaining}}</td> --}}
                                    
                                    {{-- <td><span
                                            class="badge @if($membership->status) bg-success @else bg-danger @endif">{{$membership->visibility}}</span>
                                    </td> --}}
                                
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('memberships.edit',$membership->id)}}" class="btn btn-info">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="#" onclick="confirmDestroy('{{$membership->id}}',this)"
                                                class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!--end::Advance Table Widget 5-->
    
@endsection

@section('scripts')
{{-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> --}}


<script>
    // function performDestroy(id, ref){
    //     axios.delete('/cms/admin/admins/'+id)
    //         .then(function (response) {
    //             // handle success
    //             console.log(response);
    //             ref.closest('tr').remove();
    //     toastr.success(response.data.message);
    //         })
    //         .catch(function (error) {
    //             // handle error
    //             console.log(error);
    //     toastr.error(error.response.data.message);
    //         })
    //  }

    function performDestroy(id, ref){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                destroy(id, ref);
            }
        });
     }

     function destroy(id, ref) {
         //JS - Axios
        axios.delete('/cms/admin/memberships/'+id)
            .then(function (response) {
                // handle success
                console.log(response);
                ref.closest('tr').remove();
                showMessage(response.data);
            })
            .catch(function (error) {
                // handle error
                console.log(error);
                showMessage(error.response.data);
            })
     }

     function showMessage(data) {
        Swal.fire({
            icon: data.icon,
            title: data.title,
            showConfirmButton: false,
            timer: 1500
        });
     }
</script>
    
@endsection
