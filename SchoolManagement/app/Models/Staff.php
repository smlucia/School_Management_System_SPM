<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{


    protected $table = 'staff';
    protected $primaryKey = 'id';
    protected $fillable = [
    'name',
    'NIC',
    'address',
    'contact_no',
    'DOB',
    'gender',
    'Email',
    'First_appoinment_date',
    'designation',
    'type',
    'distance',
    'photo'];
}
