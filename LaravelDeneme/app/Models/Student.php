<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $primaryKey = 'StudentNumber';
    protected $fillable =['StudentNumber','StudentPassword','StudentName','StudentSurname','Student_DepartmentID','StudentClass','StudentPhoto','StudentPhone','StudentEMail'];
    
    public $timestamps = false;
    public function department()
    {
        return $this->hasOne(Department::class, 'DepartmentID', 'Student_DepartmentID');
    }
}
