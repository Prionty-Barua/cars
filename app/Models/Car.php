<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primarykey = 'id';

    protected $fillable = ['name','founded','description'];

    // protected $timestamps = true;
}
