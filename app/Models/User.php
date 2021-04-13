<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class User extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates =['deleted_at'];
    protected $fillable =[
        'cin',
        'carte_sejour',
        'first_name',
        'last_name',
        'picture',
        'date_of_birth',
        'adresse',
        'phone_number',
        'email',
        'password'
    ];

    public function Restaurant(){
        return $this->hasOne("App\Models\Restaurant");
    }
}
