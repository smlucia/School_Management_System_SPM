<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'id';
    protected $fillable = [
        'event_name', 'e_status',
        'e_date','e_time',
        'coordinator', 'type',
        'location','tot_expence',
        'photo'];
}