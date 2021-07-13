<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class CatalogCarInfo extends Model
{
    use HasDateTimeFormatter;

    protected $table = 'catalog_car_infos';

    protected $casts = [
        'carOptionals' => 'json',
        'carImageUrl' => 'json',
    ];

}
