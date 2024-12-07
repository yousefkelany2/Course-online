<?php

namespace App\Models;

use App\Models\course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class category extends Model
{
    use HasFactory;
    protected $fillable =[
        "name"
        ];
        public function course()
        {
            return $this->hasMany(course::class);
        }
}
