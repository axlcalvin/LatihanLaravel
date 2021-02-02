<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['code', 'name', 'gender', 'birth_place', 'birth_date', 'faculty_id'];

    /**
     * Relasi ke Model Student
     * Karena Jamak usahakan namanya disesuaikan
     * Jenis Relasi One To One atau hasOne / BelongsTo karena relasi kebalikan
     */
    public function faculty(){
        return $this->belongsTo('App\Faculty');
    }
}
