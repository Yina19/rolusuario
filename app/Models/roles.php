<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

/**
 * @method static orderBy(string $string)
 */
class roles extends Model
{
    protected $table='roles';
    protected $primaryKey = 'id';
    protected $fillable =  array('name','screen_name');

    public static function nextIndex(){
        $nId = DB::select("show table status like 'roles'");
        $nId = $nId[0]->Auto_increment;
        return $nId;
    }

    public function usuarios(): hasMany{
        return $this->hasMany(usuario::class,'id_role','id');
    }

    public function scopeSearch($query,$keyword){
        if($keyword != ""){
            $query->where("screen_name","like","%".strtolower($keyword)."%");
        }
        return $query;
    }
}
