<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    protected $table = 'payroll';
    protected $primaryKey = 'id';
    protected $fillable = [
        'staff_name', 'designation','photo',
        'month','year',
        'salary', 'allowance', 'cost',
        'ntf', 'etf','netSalary'];
}
