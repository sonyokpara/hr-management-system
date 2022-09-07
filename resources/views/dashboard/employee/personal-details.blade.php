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
                    <button class="nav-link h5" data-toggle="tab" data-target="#tab-2">
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
                <form action="{{route('create_employee')}}" id="employeeForm" method="POST" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="tab-content mt-5">
                        <!-- Personal Information-->
                        <div id="tab-1" class="collapse open" style="">
                            <label class="label block mb-2" for="slug">Employee Photo</label>
                            <div class="flex flex-col mb-5">
                                <div class="flex items-center">
                                    <div class="mr-5 items-center w-[175px] h-[175px] border-2 border-solid border-slate-500 rounded-md p-1" id="photo-frame">
                                        <img src="{{asset('images/default-placeholder.jpg')}}"  width="170" height="170" class="rounded-md">
                                    </div>
                                    <div class="p-1 ml-2 text-slate-500">
                                        <h4>Photo Should:</h4>
                                        <ul class="list-disc">
                                            <li>Not exceed 1MB</li>
                                            <li>Be either .jpeg, .png, or .gif</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <label class="input-group font-normal mt-2" for="customFile">
                                        <div class="file-name input-addon input-addon-prepend input-group-item w-1/4 overflow-x-hidden">
                                            No file chosen</div>
                                        <input id="customFile" name="photo" type="file" class="form-control hidden">
                                        <div class="input-group-item btn btn_primary uppercase">Choose File</div>
                                    </label>
                                </div>
                            </div>
                            <div class="mb-5">
                                <label class="label block mb-2" for="firstname">First Name</label>
                                <input id="firstname" name="firstname" type="text" class="form-control">
                            </div>
                            <div class="mb-5">
                                <label class="label block mb-2" for="lastname">Last Name</label>
                                <input id="lastname" name="lastname" type="text" class="form-control">
                            </div>
                            <div class="mb-5">
                                <label class="label block mb-2" for="other_name">Other Name</label>
                                <input id="other_name" type="text" name="other_name" class="form-control" >
                            </div>
                            <div class="mb-5">
                                <label class="label block mb-2" for="dob">Date of Birth</label>
                                <input id="dob" type="date" name="birthdate" class="form-control">
                            </div>
                            <div class="mb-5">
                                <label class="label block mb-2" for="birth_place">Place of Birth</label>
                                <input id="birth_place" type="text" name="birth_place" class="form-control">
                            </div>
                            <div class="mb-5">
                                <label class="label block mb-2" for="hometown">Hometown</label>
                                <input id="hometown" type="text" name="hometown" class="form-control" required>
                            </div>
                            <div class="mb-5">
                                <label class="label block mb-2" for="telephone_no" maxlenght="10">Phone Number</label>
                                <input id="telephone_no" type="tel" name="telephone_no" class="form-control">
                            </div>
                            <div class="mb-5">
                                <label class="label block mb-2" for="email_address">Email Address</label>
                                <input id="email_address" type="tel" name="email_address" class="form-control">
                            </div>
                            <div class="mb-5">
                                <label class="label block mb-2" for="ssnit_number">SSNIT Number</label>
                                <input id="ssnit_number" type="text" name="ssnit_number" class="form-control">
                            </div>
                            <div class="mb-5">
                                <label class="label block mb-2" for="convid19_card_number">COVID-19 Card Number</label>
                                <input id="convid19_card_number" type="text" name="convid19_card_number" class="form-control">
                            </div>
                            <div class="mb-5">
                                <label class="label block mb-2" for="ghana_card_number">Ghana Card Number</label>
                                <input id="ghana_card_number" type="text" name="ghana_card_number" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <button type="sumbit" class="btn next btn_primary uppercase" data-toggle="wizard" data-direction="next">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
