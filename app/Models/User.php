<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model{

    protected $table = 'USUARIO';
    protected $primaryKey = 'usuario_id';

    const CREATED_AD = 'created';
    const UPDATED_AD = 'updated';

    public function usuarioGrupo()
    {
        return $this->belongsTo('App\Models\UsuarioGrupo', 'grupo_id');
    }

    public function person()
    {
        return $this->belongsTo('App\Models\Person', 'persona_id');
    }
    
}