<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class AuthenticateInfo extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'authenticate_infos';

    protected $casts = [
        // 'authenticate_path' => 'json',
    ];

}
