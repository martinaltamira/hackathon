<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;
    //
    protected $table = "depelopers";
    protected $primaryKey = "id";

    protected $fillable = [
        'name',
        'gender',
        'email',
        'location'
    ];

    public function hackaton(){
        return $this->belongsTo(Hackaton::class)
            ->select('name', 'place', 'date')
            ->withPivot('puesto');
    }
}
