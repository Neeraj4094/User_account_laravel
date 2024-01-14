<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Usermodel extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "users";
    protected $primarykey = "id";

    // public function getUpdatedatAttribute($data){
    //     return date('d-M-Y H:i:s',strtotime($data));
    // }
}
