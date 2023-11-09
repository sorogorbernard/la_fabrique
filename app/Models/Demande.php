<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;

    protected $guarded =[

    ];

    // pour les references de l'utilisateur. on peus maintenant acceder aux autres champs
    public function User(){
return $this->belongsTo(User::class, 'users_id');
    }

    public function Soutenance()
    {
        return $this->hasMany(Soutenance::class);
    }

}
