<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuarioGrupo extends Model{

    protected $table = 'USUARIO_GRUPO';
    protected $primaryKey = 'grupo_id';

    const CREATED_AD = 'created';
    const UPDATED_AD = 'updated';

    public function users()
    {
        return $this->hasMany('App\Models\user', 'grupo_id');
    }
}