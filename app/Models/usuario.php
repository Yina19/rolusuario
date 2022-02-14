<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

//spatie
use Spatie\Permission\Traits\HasRoles; 

/**
 * @method static orderBy(string $string)
 */

class usuario extends Model
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $table='usuarios';
    protected $primaryKey = 'id';
    protected $fillable =  array('name','nid','email','password','id_role');

    public static function nextIndex(){
        $nId = DB::select("show table status like 'usuarios'");
        $nId = $nId[0]->Auto_increment;
        return $nId;
    }

    public function role(): hasOne{
        return $this->hasOne(roles::class,'id', 'id_role');
    }

    public function scopeSearch($query,$keyword){
        if($keyword != ""){
            $query->where("name","like","%".strtolower($keyword)."%");
        }
        return $query;
    }
}
