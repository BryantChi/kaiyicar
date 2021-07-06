<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class CarWitnessInfo extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'car_witness_infos';

    protected $casts = [
        'path' => 'json'
    ];

}
