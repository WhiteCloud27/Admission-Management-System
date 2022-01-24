<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtStuApply extends Model
{
    use HasFactory;
    protected $fillable = ['roll'];
    protected $primaryKey = 'applstuid';
    public $timestamp = false;
}
