<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable= ['contact_number', 'address','student_id'];

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
