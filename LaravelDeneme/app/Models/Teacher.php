<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'teachers';
    protected $primaryKey = 'TeacherRegistrationNumber';
    protected $fillable =['TeacherRegistrationNumber','TeacherName','TeacherSurname','TeacherPassword','TeacherDegree','TeacherEmail','Teacher_DepartmentID'];
    
    public $timestamps = false;
    public function department()
    {
        return $this->hasOne(Department::class, 'DepartmentID', 'Teacher_DepartmentID');
    }
}
