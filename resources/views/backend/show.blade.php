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

        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container">
                <!--begin::Layout-->
                <div class="d-flex flex-column flex-lg-row">
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid mb-10 mb-lg-0">
                        <!--begin::Card-->
                        <div class="card">
                            <!--begin::Card body-->
                            <div class="card-body p-12">
                                <!--begin::Form-->
                                
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-start flex-xxl-row">

                                        <!--begin::Input group-->
                                        <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Enter invoice number">
                                            <span class="fs-2x fw-bolder text-gray-800">Doctor Detail</span>
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Top-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-10"></div>
                                    <!--end::Separator-->
                                    <!--begin::Wrapper-->
                                    <div class="mb-0">
                                        <!--begin::Row-->
                                        <div class="row gx-10 mb-5">
                                            <!--begin::Col-->
                                            <div class="col-lg-12 text-center">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Image</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <img src="{{asset($doctor_detail->image)}}" width="80px" height="80px" />
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Name</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    {{$doctor_detail->full_name}}
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Email</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    {{$doctor_detail->email}}
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Gender</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    {{$doctor_detail->gender}}
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Phone Number </label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    {{$doctor_detail->phone}}
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Title</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    {{$doctor_detail->title ?? ''}}
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-12">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Description</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    {{$doctor_detail->description}}
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Country</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    {{$doctor_detail->country->country_name ?? ''}}
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">City</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    {{$doctor_detail->city}}
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Address</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    {{$doctor_detail->address}}
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Experience</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    {{$doctor_detail->experience}}
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Specialtie</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    {{$doctor_detail->sepcial->name}}
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Hospital</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    {{$doctor_detail->hospital->name}}
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                            <hr class="mt-5 mb-5">
                                            <!--end::Col-->
                                            <!--begin::Form-->
                                            <form action="{{ route('doctor_detail.store-education') }}" method="post" >
                                            @csrf
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-column align-items-start flex-xxl-row">
            
                                                    <!--begin::Input group-->
                                                    <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Enter invoice number">
                                                        <span class="fs-2x fw-bolder text-gray-800">Add Education</span>
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Top-->
                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-10"></div>
                                                <!--end::Separator-->
                                                <!--begin::Wrapper-->
                                                <div class="mb-0">
                                                    <!--begin::Row-->
                                                    <div class="row gx-10 mb-5"  id="dynamic_field">
                                                        <!--begin::Col-->
                                                        <div class="col-lg-6">
                                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">College/University Name</label>
                                                            <!--begin::Input group-->
                                                            <div class="mb-5">
                                                                <input type="text" class="form-control form-control-solid" name="college_name"  placeholder="Enter College/University Name" />
                                                                <div style="color:red;">{{$errors->first('college_name')}}</div> <br>
                                                            </div>
                                                            <!--end::Input group-->
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-6">
                                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Department</label>
                                                            <!--begin::Input group-->
                                                            <div class="mb-5">
                                                                <input type="text" class="form-control form-control-solid"" placeholder="Enter Department" name="degree">
                                                                <div style="color:red;">{{$errors->first('degree')}}</div> <br>
                                                            </div>
                                                            <!--end::Input group-->
                                                        </div>
                                                        <!--end::Col-->
            
                                                        <!--begin::Col-->
                                                        <div class="col-lg-6">
                                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">From Date </label>
                                                            <!--begin::Input group-->
                                                            <div class="mb-5">
                                                                <input type="date" class="form-control form-control-solid" name="from_year">
                                                                <div style="color:red;">{{$errors->first('from_year')}}</div> <br>
                                                            </div>
                                                            <!--end::Input group-->
                                                        </div>
                                                        <!--end::Col-->
            
                                                        <!--begin::Col-->
                                                        <div class="col-lg-6">
                                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">End Date</label>
                                                            <!--begin::Input group-->
                                                            <div class="mb-5">
                                                                <input type="date" class="form-control form-control-solid" name="to_year">
                                                                <div style="color:red;">{{$errors->first('to_year')}}</div> <br>
                                                            </div>
                                                            <!--end::Input group-->
                                                        </div>
                                                        <!--end::Col-->

                                                        <button type="button" name="add" id="add" class="col-lg-11 btn btn-success updateBtn">Add More</button>

                                                        <button type="submit" class="col-lg-11 btn btn-primary updateBtn">
                                                            Save
                                                        </button>
                                                        <!--end::Col-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </form>
                                            <!--end::Form-->

                                            <hr class="mt-5 mb-5">
                                            <!--end::Col-->
                                            <!--begin::Form-->
                                            <form action="{{ route('doctor_detail.store-education') }}" method="post" >
                                            @csrf
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-column align-items-start flex-xxl-row">
            
                                                    <!--begin::Input group-->
                                                    <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Enter invoice number">
                                                        <span class="fs-2x fw-bolder text-gray-800">Add Experience</span>
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Top-->
                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-10"></div>
                                                <!--end::Separator-->
                                                <!--begin::Wrapper-->
                                                <div class="mb-0">
                                                    <!--begin::Row-->
                                                    <div class="row gx-10 mb-5">
                                                        <!--begin::Col-->
                                                        <div class="col-lg-6">
                                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Company Name</label>
                                                            <!--begin::Input group-->
                                                            <div class="mb-5">
                                                                <input type="text" class="form-control form-control-solid" name="company_name"  placeholder="Enter Company Name" />
                                                                <div style="color:red;">{{$errors->first('company_name')}}</div> <br>
                                                            </div>
                                                            <!--end::Input group-->
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-6">
                                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Designation</label>
                                                            <!--begin::Input group-->
                                                            <div class="mb-5">
                                                                <input type="text" class="form-control form-control-solid" name="designation"  placeholder="Enter Designation" />
                                                                <div style="color:red;">{{$errors->first('designation')}}</div> <br>
                                                            </div>
                                                            <!--end::Input group-->
                                                        </div>
                                                        <!--end::Col-->
            
                                                        <!--begin::Col-->
                                                        <div class="col-lg-6">
                                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">From Date </label>
                                                            <!--begin::Input group-->
                                                            <div class="mb-5">
                                                                <input type="date" class="form-control form-control-solid" name="from_year">
                                                                <div style="color:red;">{{$errors->first('from_year')}}</div> <br>
                                                            </div>
                                                            <!--end::Input group-->
                                                        </div>
                                                        <!--end::Col-->
            
                                                        <!--begin::Col-->
                                                        <div class="col-lg-6">
                                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">End Date</label>
                                                            <!--begin::Input group-->
                                                            <div class="mb-5">
                                                                <input type="date" class="form-control form-control-solid" name="to_year">
                                                                <div style="color:red;">{{$errors->first('to_year')}}</div> <br>
                                                            </div>
                                                            <!--end::Input group-->
                                                        </div>
                                                        <!--end::Col-->

                                                        <button type="submit" class="col-lg-12 btn btn-primary updateBtn">
                                                            Save
                                                        </button>
                                                        <!--end::Col-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </form>
                                            <!--end::Form-->

                                            
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Wrapper-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Layout-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content--> 
@endsection

@section('script')
<script>
    $(document).ready(function(){      
      var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  


      $('#add').click(function(){
           i++;  
           $('#dynamic_field').append('<input type="text" class="form-control form-control-solid" name="college_name"  placeholder="Enter College/University Name" /><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button>');  
      });  


      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });
    });
</script>
@endsection
