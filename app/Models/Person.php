<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model{

    protected $table = 'PERSONA';
    protected $primaryKey = 'persona_id';

    const CREATED_AD = 'created';
    const UPDATED_AD = 'updated';

    public function users()
    {
        return $this->hasMany('App\Models\User', 'persona_id');
    }
}