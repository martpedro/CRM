<?php

namespace PromoWeb1s;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    public function perfilparent()
    {
        return $this->hasOne('PromoWeb1s\Perfil');
    }
    public function perfilsoon()
	{
		return $this->belongsTo('PromoWeb1s\Perfil', 'foreign_key', 'perfil_parent');
	}
	public function Mark()
    {
        return $this->belongsTo('PromoWeb1s\Mark');
    }
}
