<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'user_id',
        'surname',
        'patronymic',
        'organization',
        'INN',
        'department',
        'position',
        'phone_work',
        'phone_mobile',
        'email'];
}
