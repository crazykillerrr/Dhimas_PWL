<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
     use HasFactory;

    protected $table = 'user';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(UserModel::class, 'kelas-id');
    }

    public function getUser()
    {

        return $this->join('kelas', 'kelas.id', '=', 'user.kelas_id')
                    ->select('user.*', 'kelas.nama_kelas as nama_kelas')
                    ->get();
    }
}
