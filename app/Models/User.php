<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

  protected $fillable = [
    'name',
    'email',
    'password',
    'role',
    'alamat',
    'no_ktp',
    'no_hp',
    'no_rm',
    'poli',
];
public function jadwalPeriksas()
{
    return $this->hasMany(JadwalPeriksa::class, 'id_dokter');
}

public function janjiPeriksas()
{
    return $this->hasMany(JanjiPeriksa::class, 'id_pasien');
}

}
