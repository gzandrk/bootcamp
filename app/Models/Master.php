<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    use HasFactory;

    protected $table = 'master';

    protected $fillable = [
        'user_id',
        'email',
        'nama',
        'gender',
        'tanggal_lahir',
        'alamat',
        'no_hp',
        'status_pekerjaan',
        'instansi',
        'program_id',
        'info',
        'motivasi',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
