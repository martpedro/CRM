<?php

namespace PromoWeb1s;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    public function Perfiles()
    {
        return $this->hasMany('PromoWeb1s\Perfil');
    }
}
