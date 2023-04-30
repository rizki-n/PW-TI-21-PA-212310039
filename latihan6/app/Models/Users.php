<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasFactory;

    protected $table = 'Users';

    protected $fillable = [
        'id', 
        'email', 
        'fullname', 
        'address', 
        'birthdate', 
        'gender', 
        'phone'
    ];

    public function storeData($data){
        $result = Users::create($data);
        return $result;
    }
}