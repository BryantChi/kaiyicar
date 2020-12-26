<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class CarOptionalInfo extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'car_optional_infos';
    
}
