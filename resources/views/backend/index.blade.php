@extends('layouts.Backend.master')
@section('css')
@include('layouts.sweetalert.sweetalert_css')
<style type="text/css">
    .select2-container .select2-selection--single{
        height: 40px;
    }
</style>
@endsection
@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Doctors" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Plus.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                        <rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000)" x="4" y="11" width="16" height="2" rx="1" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->Add Doctor
                            </button>
                            <!--end::Add user-->
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Group actions-->
                        <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                            <div class="fw-bolder me-5">
                                <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected
                            </div>
                            <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
                        </div>
                        
                        <!--begin::Modal - Add Doctor-->
                        <div class="modal fade" id="kt_modal_add_user" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header" id="kt_modal_add_user_header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bolder">Add Doctor</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" data-kt-users-modal-action="close">
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                                        <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                                                        <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <!--end::Modal header-->
                                    <!--begin::Modal body-->
                                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                        <!--begin::Form-->
                                        <form id="kt_modal_add_user_form" class="form" method="post" action="{{route('doctors.store')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Doctor Name</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="full_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name" required />
                                                    <!--end::Input-->
                                                </div>

                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Email</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="email" name="email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" required />
                                                    <!--end::Input-->
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Phone</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="phone" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Enter Phone" required />
                                                    <!--end::Input-->
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Title</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="title" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Enter Title"  required/>
                                                    <!--end::Input-->
                                                </div>

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7 d-none">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Country</label>
                                                    <select name="country_id" class="form-control form-control-solid mb-3 mb-lg-0 " required>
                                                        <option value="">Select Country</option>
                                                        @foreach($countries as $contry)
                                                        <option value="{{$contry->id}}"@if($contry->id=='191'){{'selected'}}@endif>{{$contry->country_name}}</option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">City</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select name="city" class="js-example-basic-single form-control form-control-solid mb-3 mb-lg-0 selectpicker" id="select-country" data-live-search="true" required>
                                                    <option value="">Select City</option>
                                                    @foreach($cities as $ct)
                                                    <option value="{{$ct['name_en']}}" data-tokens="{{$ct['name_en']}}">{{$ct['name_en']}}</option>
                                                    @endforeach
                                                    </select>
                                                   
                                                    <!-- <input type="text" name="city" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Enter City" required /> -->
                                                    <!--end::Input-->
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Full Address</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="address" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Enter Full Address" required />
                                                    <!--end::Input-->
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Speciality</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select class="form-control form-control-solid mb-3 mb-lg-0" name="specialtie_id">
                                                        <option value="">Select Specialty</option>
                                                        @foreach($Specialty as $sp)
                                                        <option value="{{$sp->id}}">{{$sp->name}}</option>
                                                        @endforeach
                                                    </select>

                                                    <!--end::Input-->
                                                </div>
                                                 <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Years of experience</label>
                                                     <input type="number" min="0" max="40" name="experience" class="form-control form-control-solid mb-3 mb-lg-0" required />
                                                </div>
                                               
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="fw-bold fs-6 mb-2">Hospital</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select class="form-control form-control-solid mb-3 mb-lg-0" name="hospital_id">
                                                        <option value="">Select Hospital</option>
                                                        @foreach($hospitals as $hos)
                                                        <option value="{{$hos->id}}">{{$hos->name}}</option>
                                                        @endforeach
                                                    </select>

                                                    <!--end::Input-->
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <label class="required fw-bold fs-6 mb-2">Gender</label>

                                                    <label class="radio-inline">
                                                      <input type="radio" name="gender" value="male" required>Male
                                                    </label>
                                                    <label class="radio-inline">
                                                      <input type="radio" name="gender" value="female" required>Female
                                                    </label>
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Description</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <textarea name="description" class="form-control form-control-solid mb-3 mb-lg-0" rows="3" required></textarea>

                                                    <!--end::Input-->
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Image</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="file" name="image" class="form-control form-control-solid mb-3 mb-lg-0" accept="image/*" required />
                                                    <!--end::Input-->
                                                </div>

                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Scroll-->
                                            <!--begin::Actions-->
                                            <div class="text-center pt-15">
                                                <button type="reset" class="btn btn-white me-3" data-kt-users-modal-action="cancel">Discard</button>
                                                <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                                    <span class="indicator-label">Submit</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Modal body-->
                                </div>
                                <!--end::Modal content-->
                            </div>
                            <!--end::Modal dialog-->
                        </div>
                        <!--end::Modal - Add task-->


                        <!-- edit modal doctor -->
                        <div class="modal fade" id="kt_modal_edit_user" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header" id="kt_modal_add_user_header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bolder">Edit Doctor</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" data-kt-users-modal-action="close">
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                                        <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                                                        <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <!--end::Modal header-->
                                    <!--begin::Modal body-->
                                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                        <!--begin::Form-->
                                        <form id="kt_modal_edit_user_form" class="form" method="post" action="{{route('doctors.store')}}" enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Doctor Name</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="full_name" id="edit_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name" required />
                                                    <!--end::Input-->
                                                </div>

                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Email</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="email" name="email" id="edit_email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" required />
                                                    <!--end::Input-->
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Phone</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="phone" id="editphone" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Enter Phone" required />
                                                    <!--end::Input-->
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Title</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="title" id="edit_title" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Enter Title"  required/>
                                                    <!--end::Input-->
                                                </div>

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Country</label>
                                                    <select name="country_id" id="edit_country_id" class="form-control form-control-solid mb-3 mb-lg-0" required>
                                                        <option value="">Select Country</option>
                                                        @foreach($countries as $contry)
                                                        <option value="{{$contry->id}}">{{$contry->country_name}}</option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">City</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="city" id="edit_city" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Enter City" required />
                                                    <!--end::Input-->
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Full Address</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="address" id="edit_full_address" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Enter Full Address" required />
                                                    <!--end::Input-->
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Speciality</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select class="form-control form-control-solid mb-3 mb-lg-0" name="specialtie_id" id="edit_specialtie_id">
                                                        <option value="">Select Specialty</option>
                                                        @foreach($Specialty as $sp)
                                                        <option value="{{$sp->id}}">{{$sp->name}}</option>
                                                        @endforeach
                                                    </select>

                                                    <!--end::Input-->
                                                </div>
                                                 <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Years of experience</label>
                                                     <input type="number" min="0" max="40" name="experience" id="editexp" class="form-control form-control-solid mb-3 mb-lg-0" required />
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="fw-bold fs-6 mb-2">Hospital</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select class="form-control form-control-solid mb-3 mb-lg-0" name="hospital_id" id="edit_hospital_id">
                                                        <option value="">Select Hospital</option>
                                                        @foreach($hospitals as $hos)
                                                        <option value="{{$hos->id}}">{{$hos->name}}</option>
                                                        @endforeach
                                                    </select>

                                                    <!--end::Input-->
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <label class="required fw-bold fs-6 mb-2">Gender</label>

                                                    <label class="radio-inline">
                                                      <input type="radio" name="gender" id="edit_gender_male" value="male" required>Male
                                                    </label>
                                                    <label class="radio-inline">
                                                      <input type="radio" name="gender" id="edit_gender_female" value="female" required>Female
                                                    </label>
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Description</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <textarea name="description" id="edit_description" class="form-control form-control-solid mb-3 mb-lg-0" rows="3" required></textarea>

                                                    <!--end::Input-->
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Image</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="file" name="image" class="form-control form-control-solid mb-3 mb-lg-0" accept="image/*"/>
                                                    <!--end::Input-->
                                                </div>

                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Scroll-->
                                            <!--begin::Actions-->
                                            <div class="text-center pt-15">
                                                <button type="reset" class="btn btn-white me-3" data-kt-users-modal-action="cancel">Discard</button>
                                                <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                                    <span class="indicator-label">Update</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Modal body-->
                                </div>
                                <!--end::Modal content-->
                            </div>
                            <!--end::Modal dialog-->
                        </div>

                        <!-- end -->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">

                                <th class="min-w-100px">Doctor Name</th>
                                <th class="min-w-100px">Email</th>
                                <th class="min-w-100px">Country</th>
                                <th class="min-w-100px">City</th>
                                <th class="min-w-100px">Address</th>
                                <th class="min-w-100px">Speciality</th>
                                <th class="min-w-100px">Image</th>
                                <th class="text-end min-w-100px">Actions</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="text-gray-600 fw-bold">
                            <!--begin::Table row-->
                            @foreach($doctors as $doc)
                            <tr>
                                <td>{{$doc->full_name}}</td>
                                <td>{{$doc->email}}</td>
                                <td>{{$doc->country->country_name}}</td>
                                <td>{{$doc->city}}</td>
                                <td>{{$doc->address}}</td>
                                <td>{{$doc->sepcial->name}}</td>
                                <td><img src="{{asset($doc->image)}}" width="60px" height="60px" /></td>
                                <td class="text-end">
                                    <a href="{{route('doctors.show',$doc->id)}}" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit">
                                        <i class="la la-eye"></i>
                                    

                                    <a href="#" onclick="edit_hospital('{{json_encode($doc)}}')" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                    <form style="width:20%;float:left" id="form_{{$doc->id}}" action="{{route('doctors.destroy',$doc)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" id="{{$doc->id}}" class="confirm"><span class=" text-danger fa fa-trash"></span></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<!--end::Content-->
@endsection
@section('script')
@include('layouts.sweetalert.sweetalert_js')
<script type="text/javascript">
    // In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
<script type="text/javascript">
    function edit_hospital(data){
         var data=JSON.parse(data);
         $("#kt_modal_edit_user_form").attr('action', 'doctors/' + data.id);
         $("#edit_name").val(data.full_name);
         $("#edit_email").val(data.email);
         $("#editphone").val(data.phone);
         $("#edit_title").val(data.title);
         $("#edit_country_id").val(data.country_id);
         $("#edit_city").val(data.city);
         $("#edit_full_address").val(data.address);
         $("#edit_specialtie_id").val(data.specialtie_id);
         $("#editexp").val(data.experience);
         $("#edit_hospital_id").val(data.hospital_id);
         if(data.gender == 'male')
         {
            $("#edit_gender_male").prop('checked','true');
         }
         if(data.gender == null){
            $("#edit_gender_female").prop('checked','true');
         }
         $("#edit_description").val(data.description);
         $("#kt_modal_edit_user").modal('show');
    }
</script>
@endsection