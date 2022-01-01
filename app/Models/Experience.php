<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'company' , 'location' , 'job_title' , 'start_at',
        'end_at' , 'description' , 'user_id'

    ];
    public function user(){

    return $this->belongsTo(Experience::class);

    }

}
