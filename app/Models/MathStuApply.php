<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MathStuApply extends Model
{
    use HasFactory;
    protected $fillable = ['roll','done'];
    protected $primaryKey = 'applstuid';
    public $timestamp = false;
}