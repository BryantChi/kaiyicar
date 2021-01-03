<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class CarLoreInfo extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'car_lore_infos';
    
}
