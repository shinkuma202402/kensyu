<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserKensyu extends Model
{
    use HasFactory;
    protected $table = 'user_kensyu';
    protected $fillable = [
        'user_type',
        'login_id',
        'password',
        'name_sei',
        'name_mei',
        'name_sei_kana',
        'name_mei_kana',
        'zip1',
        'zip2',
        'Personal_prefecture',
        'shikugun',
        'address1',
        'address2',
        'mail_address',
        'mail_address2',
        'tel',
        'fax',
    ];
}
