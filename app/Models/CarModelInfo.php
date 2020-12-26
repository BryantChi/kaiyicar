<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class CarModelInfo extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'car_model_infos';
    
}
