<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Cliente extends Authenticatable
{
    protected $table = 'bp_clientes';
    protected $primaryKey = 'codigo';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'codigo',
        'nombre',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    
    public function getAuthPassword()
    {
        return $this->password;
    }

    public $rememberTokenName = false;
}
