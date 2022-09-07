<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'other_name',
        'telephone_no',
        'birthdate',
        'birth_place',
        'hometown',
        'email_address',
        'ssnit_number',
        'convid19_card_number',
        'ghana_card_number',
        'staff_id',
        'tag_id',
        'job_title',
        'employment_date',
        'birthdate',
        'department_id',
        'section_id',
        'ssnit_number',
        'ghana_card_number',
        'convid19_card_number',
        'driving_license',
        'edu_qualification',
        'min_com_cert',
        'shift',
        'place_of_res_onsite',
        'res_address_onsite',
        'place_of_res_offsite',
        'res_address_offsite',
        'rank',
        'status',
        'tier2_number',
        'provident_fund_contributor',
        'unionized',
        'branch_union',
        'pmsu'
    ];
}
