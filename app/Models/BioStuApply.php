<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BioStuApply extends Model
{
    use HasFactory;
    protected $fillable = ['roll'];
    public $timestamp = false;
}
