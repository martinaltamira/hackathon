<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Hackaton extends Model
{
    use HasFactory;
    //
    protected $table = "hackatons";
    protected $primaryKey = "id";
    protected $fillable = [
        'name',
        'place',
        'date'
    ];


    public function developers(){
        return $this->belongsToMany(Developer::class)
            ->select('name', 'gender', 'email')
            ->where('puesto', '<=', 10)
            ->withPivot('puesto');
    }


}
