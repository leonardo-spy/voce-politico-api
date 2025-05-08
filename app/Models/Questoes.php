<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questoes extends Model
{
    use HasFactory;
    
    protected $fillable = ['desc_questao', 'econ', 'dipl', 'govt','scty'];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];

}
