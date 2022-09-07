<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PersonalDetailsRequest;
use App\Http\Requests\EmployeeResidentialAddressRequest as ResidentialRequest;
use App\Models\Country;
use App\Models\Department;
use App\Models\Section;
use App\Models\Roster;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function personalDetailsView(){

        $countries = Country::all();
        $departments = Department::all();
        $sections = Section::all();
        $shifts = Roster::all();

        return view('dashboard.employee.personal-details')->with([
            'countries'    => $countries,
            'departments'  => $departments,
            'sections'     => $sections,
            'shifts'       => $shifts,
        ]);
    }

    public function savePersonalDetails(PersonalDetailsRequest $request){
        $employee = new Employee;
        $employee->firstname = $request->firstname;
        $employee->lastname = $request->lastname;
        $employee->other_name = $request->other_name;
        $employee->telephone_no = $request->telephone_no;
        $employee->birthdate = $request->birthdate;
        $employee->birth_place = $request->birth_place;
        $employee->hometown = $request->hometown;
        $employee->email_address = $request->email_address;
        $employee->ssnit_number = $request->ssnit_number;
        $employee->convid19_card_number = $request->convid19_card_number;
        $employee->ghana_card_number = $request->ghana_card_number;
        $image_name = $employee->ssnit_number.'.'.$request->photo->getClientOriginalExtension();
        $file_destination = public_path('images/emp_photos/');
        $photo = $request->file('photo')->move($file_destination, $image_name);
        $employee->photo = $image_name;
        $employee->save();
        $id = $employee->id;
        session(['emp_id' => $id]);
        return redirect()->route('employee-contact');
    }

    public function contactView(){
        $id = session('emp_id');
        return view('dashboard.employee.contact')->with(['id' => $id]);
    }

    public function saveContact(ResidentialRequest $request){
        dd($request);

    }
}
