<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = 'departments';
    protected $primaryKey = 'DepartmentID';
    protected $fillable =['DepartmentName','Department_FacultyID'];
    
    public $timestamps = false;

    public function faculty()
    {
        return $this->hasOne(Faculty::class, 'FacultyID', 'Department_FacultyID');
    }
}
