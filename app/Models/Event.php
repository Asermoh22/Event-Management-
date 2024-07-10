<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable=[
        'title','place','event_date','event_time','event_endtime'
    ];
    protected $casts = [
        'event_date' => 'date',
        'event_time' => 'datetime:H:i',
        'event_endtime' => 'datetime:H:i',
    ];
}
