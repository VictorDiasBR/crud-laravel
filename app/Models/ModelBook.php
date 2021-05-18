<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
   protected $table= 'book';
   protected $fillable=['titulo','id_user'];

   public function relUsers(){

    return $this->hasOne('app\user','id','id_user');
}
}
