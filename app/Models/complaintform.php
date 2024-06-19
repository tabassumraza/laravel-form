<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class complaintform extends Model
{
    use HasFactory;
    protected $primarykey = "id";
    protected $fillable = ['fname','lname','cityname','regionname','postal','country','email','phone','date','typeOFproblem','onBehalfof','complain'];
}
