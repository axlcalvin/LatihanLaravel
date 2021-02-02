<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable = ['name'];

    /**
     * Relasi ke Model Student
     * Karena Jamak usahakan namanya disesuaikan
     * Jenis Relasi One To Many atau hasMany
     */
    public function students(){
        return $this->hasMany('App\Student');
    }
}
