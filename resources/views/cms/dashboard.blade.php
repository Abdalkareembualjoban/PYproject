@extends('cms.parent')
@section('title','Dashboard | Incubator BICT')
@section('page-name','Dashboard')
@section('main-page','Incubator-BICT')
@section('sub-page','CMS')
@section('page-name-small','Dashboard')

@section('content')
<!--begin::Dashboard-->
<!--begin::Row-->
<div class="row">
    <div class="col-xl-4">
        <!--begin::Stats Widget 30-->
        <div class="card card-custom bg-primary card-stretch gutter-b">
            <!--begin::Body-->
            <div class="card-body">
                <span class="svg-icon svg-icon-2x svg-icon-white">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                            <path
                                d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                            <path
                                d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero"></path>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
                <span
                    class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block">{{$clientCounts}}</span>
                <span class="font-weight-bold text-white font-size-sm">Total clients</span>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Stats Widget 30-->
    </div>
    <div class="col-xl-4">
        <!--begin::Stats Widget 30-->
        <div class="card card-custom bg-success card-stretch gutter-b">
            <!--begin::Body-->
            <div class="card-body">
                <span class="svg-icon svg-icon-2x svg-icon-white">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                            <path
                                d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                            <path
                                d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero"></path>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
                <span
                    class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block">{{$TotalActiveClients}}</span>
                <span class="font-weight-bold text-white font-size-sm">Total Active clients</span>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Stats Widget 30-->
    </div>
    <div class="col-xl-4">
        <!--begin::Stats Widget 30-->
        <div class="card card-custom bg-danger card-stretch gutter-b">
            <!--begin::Body-->
            <div class="card-body">
                <span class="svg-icon svg-icon-2x svg-icon-white">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                            <path
                                d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                            <path
                                d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero"></path>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
                <span
                    class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block">{{$TotalInactiveClients}}</span>
                <span class="font-weight-bold text-white font-size-sm">Total Inactive Clients</span>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Stats Widget 30-->
    </div>
    <div class="col-xl-4">
        <!--begin::Stats Widget 30-->
        <div class="card card-custom bg-primary card-stretch gutter-b">
            <!--begin::Body-->
            <div class="card-body">
                <span class="svg-icon svg-icon-2x svg-icon-white">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                            <path
                                d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                            <path
                                d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero"></path>
                        </g>
                    </svg> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                    height="24px" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M384 128h-128V0L384 128zM256 160H384v304c0 26.51-21.49 48-48 48h-288C21.49 512 0 490.5 0 464v-416C0 21.49 21.49 0 48 0H224l.0039 128C224 145.7 238.3 160 256 160zM64 88C64 92.38 67.63 96 72 96h80C156.4 96 160 92.38 160 88v-16C160 67.63 156.4 64 152 64h-80C67.63 64 64 67.63 64 72V88zM72 160h80C156.4 160 160 156.4 160 152v-16C160 131.6 156.4 128 152 128h-80C67.63 128 64 131.6 64 136v16C64 156.4 67.63 160 72 160zM197.5 316.8L191.1 315.2C168.3 308.2 168.8 304.1 169.6 300.5c1.375-7.812 16.59-9.719 30.27-7.625c5.594 .8438 11.73 2.812 17.59 4.844c10.39 3.594 21.83-1.938 25.45-12.34c3.625-10.44-1.891-21.84-12.33-25.47c-7.219-2.484-13.11-4.078-18.56-5.273V248c0-11.03-8.953-20-20-20s-20 8.969-20 20v5.992C149.6 258.8 133.8 272.8 130.2 293.7c-7.406 42.84 33.19 54.75 50.52 59.84l5.812 1.688c29.28 8.375 28.8 11.19 27.92 16.28c-1.375 7.812-16.59 9.75-30.31 7.625c-6.938-1.031-15.81-4.219-23.66-7.031l-4.469-1.625c-10.41-3.594-21.83 1.812-25.52 12.22c-3.672 10.41 1.781 21.84 12.2 25.53l4.266 1.5c7.758 2.789 16.38 5.59 25.06 7.512V424c0 11.03 8.953 20 20 20s20-8.969 20-20v-6.254c22.36-4.793 38.21-18.53 41.83-39.43C261.3 335 219.8 323.1 197.5 316.8z"/></svg>
                    <!--end::Svg Icon-->
                </span>
                <span
                    class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block">{{$inviceCount}}</span>
                <span class="font-weight-bold text-white font-size-sm">Total Invices</span>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Stats Widget 30-->
    </div>
    <div class="col-xl-4">
        <!--begin::Stats Widget 30-->
        <div class="card card-custom bg-success card-stretch gutter-b">
            <!--begin::Body-->
            <div class="card-body">
                <span class="svg-icon svg-icon-2x svg-icon-white">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                            <path
                                d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                            <path
                                d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero"></path>
                        </g>
                    </svg> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" style="color: white" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M13.97 2.196C22.49-1.72 32.5-.3214 39.62 5.778L80 40.39L120.4 5.778C129.4-1.926 142.6-1.926 151.6 5.778L192 40.39L232.4 5.778C241.4-1.926 254.6-1.926 263.6 5.778L304 40.39L344.4 5.778C351.5-.3214 361.5-1.72 370 2.196C378.5 6.113 384 14.63 384 24V488C384 497.4 378.5 505.9 370 509.8C361.5 513.7 351.5 512.3 344.4 506.2L304 471.6L263.6 506.2C254.6 513.9 241.4 513.9 232.4 506.2L192 471.6L151.6 506.2C142.6 513.9 129.4 513.9 120.4 506.2L80 471.6L39.62 506.2C32.5 512.3 22.49 513.7 13.97 509.8C5.456 505.9 0 497.4 0 488V24C0 14.63 5.456 6.112 13.97 2.196V2.196zM96 144C87.16 144 80 151.2 80 160C80 168.8 87.16 176 96 176H288C296.8 176 304 168.8 304 160C304 151.2 296.8 144 288 144H96zM96 368H288C296.8 368 304 360.8 304 352C304 343.2 296.8 336 288 336H96C87.16 336 80 343.2 80 352C80 360.8 87.16 368 96 368zM96 240C87.16 240 80 247.2 80 256C80 264.8 87.16 272 96 272H288C296.8 272 304 264.8 304 256C304 247.2 296.8 240 288 240H96z"/></svg>
                    <!--end::Svg Icon-->
                </span>
                <span
                    class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block">{{$TotalActiveInvices}}</span>
                <span class="font-weight-bold text-white font-size-sm">Total Active Invices</span>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Stats Widget 30-->
    </div>
    <div class="col-xl-4">
        <!--begin::Stats Widget 30-->
        <div class="card card-custom bg-danger card-stretch gutter-b">
            <!--begin::Body-->
            <div class="card-body">
                <span class="svg-icon svg-icon-2x svg-icon-white">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                            <path
                                d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                            <path
                                d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero"></path>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
                <span
                    class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block">{{\App\Models\Invoice::Where('paid','=',0)->count()}}</span>
                <span class="font-weight-bold text-white font-size-sm">Total Inactive Invices</span>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Stats Widget 30-->
    </div>
    <div class="col-xl-4">
        <!--begin::Stats Widget 30-->
        <div class="card card-custom bg-success card-stretch gutter-b">
            <!--begin::Body-->
            <div class="card-body">
                <span class="svg-icon svg-icon-2x svg-icon-white">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                            <path
                                d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                            <path
                                d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero"></path>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
                <span
                    class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block">{{\App\Models\Invoice::sum('price')}}</span>
                <span class="font-weight-bold text-white font-size-sm">Total Price Invices</span>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Stats Widget 30-->
    </div>
    
</div>
<!--end::Row-->
<!--end::Dashboard-->






{{-- ************************ ************************ --}}






<!--begin::Dashboard-->
<!--begin::Row-->
<div class="row">
    <div class="col-xl-3">
        <!--begin::Stats Widget 30-->
        <div class="card card-custom bg-info card-stretch gutter-b">
            <!--begin::Body-->
            <div class="card-body">
                <span class="svg-icon svg-icon-2x svg-icon-white">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                            <path
                                d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                            <path
                                d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero"></path>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
                <span
                    class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block">{{$clientCounts}}</span>
                <span class="font-weight-bold text-white font-size-sm">Total Customers</span>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Stats Widget 30-->
    </div>
    <div class="col-xl-3">
        <!--begin::Stats Widget 29-->
        <div class="card card-custom bgi-no-repeat card-stretch gutter-b"
            style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-1.svg)">
            <!--begin::Body-->
            <div class="card-body">
                <span class="svg-icon svg-icon-info svg-icon-2x">
                    <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Shopping\Money.svg--><svg
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path
                                d="M2,6 L21,6 C21.5522847,6 22,6.44771525 22,7 L22,17 C22,17.5522847 21.5522847,18 21,18 L2,18 C1.44771525,18 1,17.5522847 1,17 L1,7 C1,6.44771525 1.44771525,6 2,6 Z M11.5,16 C13.709139,16 15.5,14.209139 15.5,12 C15.5,9.790861 13.709139,8 11.5,8 C9.290861,8 7.5,9.790861 7.5,12 C7.5,14.209139 9.290861,16 11.5,16 Z"
                                fill="#000000" opacity="0.3"
                                transform="translate(11.500000, 12.000000) rotate(-345.000000) translate(-11.500000, -12.000000) " />
                            <path
                                d="M2,6 L21,6 C21.5522847,6 22,6.44771525 22,7 L22,17 C22,17.5522847 21.5522847,18 21,18 L2,18 C1.44771525,18 1,17.5522847 1,17 L1,7 C1,6.44771525 1.44771525,6 2,6 Z M11.5,16 C13.709139,16 15.5,14.209139 15.5,12 C15.5,9.790861 13.709139,8 11.5,8 C9.290861,8 7.5,9.790861 7.5,12 C7.5,14.209139 9.290861,16 11.5,16 Z M11.5,14 C12.6045695,14 13.5,13.1045695 13.5,12 C13.5,10.8954305 12.6045695,10 11.5,10 C10.3954305,10 9.5,10.8954305 9.5,12 C9.5,13.1045695 10.3954305,14 11.5,14 Z"
                                fill="#000000" />
                        </g>
                    </svg>
                    <!--end::Svg Icon--></span>
                <!--end::Svg Icon-->
                <span
                    class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">{{$TotalActiveClients}}₪</span>
                <span class="font-weight-bold text-muted font-size-sm">Total Incomes</span>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Stats Widget 29-->
    </div>
    <div class="col-xl-3">
        <!--begin::Stats Widget 31-->
        <div class="card card-custom bg-danger card-stretch gutter-b">
            <!--begin::Body-->
            <div class="card-body">
                {{-- <span class="svg-icon svg-icon-2x svg-icon-white">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect>
                            <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"></rect>
                            <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"></rect>
                            <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"></rect>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span> --}}

                <span class="svg-icon svg-icon-white svg-icon-2x">
                    <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Shopping\Barcode.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path
                                d="M13,5 L15,5 L15,20 L13,20 L13,5 Z M5,5 L5,20 L3,20 C2.44771525,20 2,19.5522847 2,19 L2,6 C2,5.44771525 2.44771525,5 3,5 L5,5 Z M16,5 L18,5 L18,20 L16,20 L16,5 Z M20,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,19 C22,19.5522847 21.5522847,20 21,20 L20,20 L20,5 Z"
                                fill="#000000" />
                            <polygon fill="#000000" opacity="0.3" points="9 5 9 20 7 20 7 5" />
                        </g>
                    </svg>
                    <!--end::Svg Icon--></span>
                <span
                    class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block">{{$TotalInactiveClients}}</span>
                <span class="font-weight-bold text-white font-size-sm">Total Products</span>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Stats Widget 31-->
    </div>
    <div class="col-xl-3">
        <!--begin::Stats Widget 32-->
        <div class="card card-custom bg-dark card-stretch gutter-b">
            <!--begin::Body-->
            <div class="card-body">
                <span class="svg-icon svg-icon-2x svg-icon-white">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <path
                                d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                fill="#000000"></path>
                            <path
                                d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                fill="#000000" opacity="0.3"></path>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
                <span
                    class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 text-hover-primary d-block">{{$inviceCount}}</span>
                <span class="font-weight-bold text-white font-size-sm">Contact Requests</span>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Stats Widget 32-->
    </div>
</div>
<div class="row">
    {{-- <div class="col-lg-6 col-xxl-4">
        <!--begin::Mixed Widget 1-->
        <div class="card card-custom bg-gray-100 card-stretch gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0 bg-danger py-5">
                <h3 class="card-title font-weight-bolder text-white">Sales Stat</h3>
                <div class="card-toolbar">
                    <div class="dropdown dropdown-inline">
                        <a href="#" class="btn btn-transparent-white btn-sm font-weight-bolder dropdown-toggle px-5"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                            <!--begin::Navigation-->
                            <ul class="navi navi-hover">
                                <li class="navi-header pb-1">
                                    <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add
                                        new:</span>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="flaticon2-shopping-cart-1"></i>
                                        </span>
                                        <span class="navi-text">Order</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="flaticon2-calendar-8"></i>
                                        </span>
                                        <span class="navi-text">Event</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="flaticon2-graph-1"></i>
                                        </span>
                                        <span class="navi-text">Report</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="flaticon2-rocket-1"></i>
                                        </span>
                                        <span class="navi-text">Post</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="flaticon2-writing"></i>
                                        </span>
                                        <span class="navi-text">File</span>
                                    </a>
                                </li>
                            </ul>
                            <!--end::Navigation-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body p-0 position-relative overflow-hidden">
                <!--begin::Chart-->
                <div id="kt_mixed_widget_1_chart" class="card-rounded-bottom bg-danger" style="height: 200px"></div>
                <!--end::Chart-->
                <!--begin::Stats-->
                <div class="card-spacer mt-n25">
                    <!--begin::Row-->
                    <div class="row m-0">
                        <div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7">
                            <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16"
                                            rx="1.5" />
                                        <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
                                        <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
                                        <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <a href="#" class="text-warning font-weight-bold font-size-h6">Weekly
                                Sales</a>
                        </div>
                        <div class="col bg-light-primary px-6 py-8 rounded-xl mb-7">
                            <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <path
                                            d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        <path
                                            d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                            fill="#000000" fill-rule="nonzero" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <a href="#" class="text-primary font-weight-bold font-size-h6 mt-2">New
                                Users</a>
                        </div>
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row m-0">
                        <div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">
                            <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <path
                                            d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                            fill="#000000" fill-rule="nonzero" />
                                        <path
                                            d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                            fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <a href="#" class="text-danger font-weight-bold font-size-h6 mt-2">Item
                                Orders</a>
                        </div>
                        <div class="col bg-light-success px-6 py-8 rounded-xl">
                            <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path
                                            d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                                            fill="#000000" opacity="0.3" />
                                        <path
                                            d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                                            fill="#000000" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <a href="#" class="text-success font-weight-bold font-size-h6 mt-2">Bug
                                Reports</a>
                        </div>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Stats-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Mixed Widget 1-->
    </div> --}}

    <div class="col-lg-6 col-xxl-4">

    </div>
    <div class="col-xxl-12 order-2 order-xxl-1">
        <!--begin::Advance Table Widget 2-->
        <div class="card card-custom card-stretch gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label font-weight-bolder text-dark">Latest Users</span>
                    <span class="text-muted mt-3 font-weight-bold font-size-sm">Latest joined users</span>
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-2 pb-0 mt-n3">
                <div class="tab-content mt-5" id="myTabTables11">
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade" id="kt_tab_pane_11_1" role="tabpanel" aria-labelledby="kt_tab_pane_11_1">
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade" id="kt_tab_pane_11_2" role="tabpanel" aria-labelledby="kt_tab_pane_11_2">
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel"
                        aria-labelledby="kt_tab_pane_11_3">
                        <!--begin::Table-->
                        <div class="table-responsive">
                            <table class="table table-borderless table-vertical-center text-center">
                                <thead>
                                    <tr>
                                        <th class="">#</th>
                                        <th class="">User Name</th>
                                        <th class="">active or inactive</th>
                                        <th class="">Created At</th>
                                        <th class=" ">setting</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $client)
                                    <tr class=" ">
                                        <td class="pl-0 py-4">
                                            <div class="symbol symbol-50 symbol-light mr-1">
                                                <span class="symbol-label">
                                                    <img src="{{asset('cms/assets/media/svg/misc/006-plurk.svg')}}"
                                                        class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                        </td>
                                        <td class="pl-0">
                                            <a href="#"
                                                class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{$client->name}}</a>
                                            <div>
                                                <span class="font-weight-bolder">Mobile:</span>
                                                <a class="text-muted font-weight-bold text-hover-primary"
                                                    href="#">{{$client->phone_num}}</a>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <span
                                                class="badge @if($client->status) bg-success @else bg-danger @endif">{{$client->visibility}}</span>
                        
                                        </td>
                                        <td class="text-right">

                                            <div>
                                                {{-- <span class="font-weight-bolder">Registered At:</span> --}}
                                                {{-- <a class="text-muted font-weight-bold text-hover-primary"
                                                    href="#">{{$client->phone_num}}</a> --}}
                                                <span
                                                    class="text-muted font-weight-500">{{$client->created_at->format('Y-m-d')}}</span>
                                            </div>
                                        </td>
                                        {{-- <td class="text-right">
                                            <span
                                                class="label label-lg @if($user->verified) label-light-success @else label-light-danger @endif label-inline">{{$user->verified_status}}</span>
                                        </td> --}}
                                        {{-- <td class="text-right">
                                            <span
                                                class="label label-l>g @if($user->active) label-light-info @else label-light-wanining @endif label-inline">{{$user->active_status}}</span
                                        </td> --}}
                                         <td class="text-right pr-0">
                                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                fill="#000000" />
                                                            <path
                                                                d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                            <path
                                                                d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                fill="#000000" fill-rule="nonzero" />
                                                            <path
                                                                d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                        </td> 
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Tap pane-->
                </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Advance Table Widget 2-->
    </div>
</div>
<!--end::Row-->
<!--begin::Row-->
<div class="row">
    <div class="col-lg-12">
        <!--begin::Advance Table Widget 4-->
        <div class="card card-custom card-stretch gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0 py-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label font-weight-bolder text-dark">Latest invoices</span>
                    <span class="text-muted mt-3 font-weight-bold font-size-sm">Latest requested orders & details</span>
                </h3>
                <div class="card-toolbar">
                    <a href="{{route('invoices.create')}}" class="btn btn-info font-weight-bolder font-size-sm mr-3">New invoicrs</a>
                    <a href="#" class="btn btn-danger font-weight-bolder font-size-sm">Create</a>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-0 pb-3">
                <div class="tab-content">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                            <thead>
                                <tr class="text-left text-uppercase">
                                    <th style="min-width: 250px" class="pl-7">
                                        <span class="text-dark-75">products</span>
                                    </th>
                                    <th style="min-width: 100px">earnings</th>
                                    <th style="min-width: 100px">comission</th>
                                    <th style="min-width: 100px">company</th>
                                    <th style="min-width: 130px">rating</th>
                                    <th style="min-width: 80px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- <tr>
                                    <td class="pl-0 py-8">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50 symbol-light mr-4">
                                                <span class="symbol-label">
                                                    <img src="{{asset('assets/media/svg/avatars/001-boy.svg')}}"
                                class="h-75 align-self-end" alt="" />
                                </span>
                    </div>
                    <div>
                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Brad
                            Simmons</a>
                        <span class="text-muted font-weight-bold d-block">HTML,
                            JS, ReactJS</span>
                    </div>
                </div>
                </td>
                <td>
                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$8,000,000</span>
                    <span class="text-muted font-weight-bold">In
                        Proccess</span>
                </td>
                <td>
                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$520</span>
                    <span class="text-muted font-weight-bold">Paid</span>
                </td>
                <td>
                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Intertico</span>
                    <span class="text-muted font-weight-bold">Web, UI/UX
                        Design</span>
                </td>
                <td>
                    <img src="{{asset('assets/media/logos/stars.png')}}" alt="image" style="width: 5.5rem" />
                    <span class="text-muted font-weight-bold d-block font-size-sm">Best
                        Rated</span>
                </td>
                <td class="pr-0 text-right">
                    <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View
                        Offer</a>
                </td>
                </tr> --}}
                </tbody>
                </table>
            </div>
            <!--end::Table-->
        </div>
    </div>
    <!--end::Body-->
</div>
<!--end::Advance Table Widget 4-->
</div>
</div>
<!--end::Row-->
<!--end::Dashboard-->
@endsection