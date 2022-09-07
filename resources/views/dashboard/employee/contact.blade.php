@extends('layouts.index')
@section('page', 'Employee')
@section('from', 'employee')
@section('to', 'Create')
@section('content')
<div class="grid">

    <!-- Content -->
    <div class="lg:col-span-2 xl:col-span-3">
        <div class="card p-10">
            <div class="tabs wizard">
                <nav class="tab-nav sm:hidden md:flex gap-5 items-center">
                    <button class="nav-link h5 active" data-toggle="tab" data-target="#tab-1">
                        Personal
                        <small>Details</small>
                    </button>
                    <button class="nav-link h5 active" data-toggle="tab" data-target="#tab-2">
                        Contact
                        <small>Information</small>
                    </button>
                    <button class="nav-link h5" data-toggle="tab" data-target="#tab-3">
                        Family
                        <small>Information</small>
                    </button>
                    <button class="nav-link h5" data-toggle="tab" data-target="#tab-4">
                        Education
                        <small>Information</small>
                    </button>
                    <button class="nav-link h5" data-toggle="tab" data-target="#tab-5">
                        Certifications
                        <small>Obtained</small>
                    </button>
                    <button class="nav-link h5" data-toggle="tab" data-target="#tab-6">
                        Employment
                        <small>History</small>
                    </button>
                    <button class="nav-link h5" data-toggle="tab" data-target="#tab-7">
                        Reference
                        <small>Information</small>
                    </button>
                    <button class="nav-link h5" data-toggle="tab" data-target="#tab-8">
                        Other
                        <small>Details</small>
                    </button>
                </nav>
                <form action="{{route('employee-contact')}}" id="employeeForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name='emp_id' value="{{$id}}">
                    <div class="tab-content mt-5">
                        <!-- Contact Information-->
                        <div id="tab-2" class="collapse open"  style="">
                            <div class="mb-5">
                                <label class="label block mb-2" for="res_onsite">Place of Residence (On Site)</label>
                                <input id="res_onsite" type="text" name="place_of_res_onsite" class="form-control" required>
                            </div>
                            <div class="mb-5">
                                <label class="label block mb-2" for="res_address_onsite">Residential Address (On Site)</label>
                                <input id="res_address_onsite" type="text" name="res_address_onsite" class="form-control" required>
                            </div>
                            <div class="mb-5">
                                <label class="label block mb-2" for="res_onsite">Place of Residence (Off Site)</label>
                                <input id="place_of_res_offsite" type="text" name="place_of_res_offsite" class="form-control" required>
                            </div>
                            <div class="mb-5">
                                <label class="label block mb-2" for="res_address_offsite">Residential Address (Off Site)</label>
                                <input id="res_address_offsite" type="text" name="res_address_offsite" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <a href="{{route('create-employee')}}" class="btn next btn_primary uppercase" data-toggle="wizard" data-direction="prev">Previous</a>
                        <button type="submit" class="btn next btn_primary uppercase" data-toggle="wizard" data-direction="next">Next</button>
                        {{-- <div class="btn-group">
                        </div> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
