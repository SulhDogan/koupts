<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class period extends Model
{
    use HasFactory;
    protected $table = 'periods';
    protected $primaryKey = 'PeriodID';
    protected $fillable =['PeriodName'];
    public $timestamps = false;
}
