<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class CarTypeInfo extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'car_type_infos';
    
}
