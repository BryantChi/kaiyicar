<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class CatalogCarInfo extends Model implements Sortable
{
    use HasDateTimeFormatter;
    use SortableTrait;
    protected $table = 'catalog_car_infos';

    protected $casts = [
        'carOptionals' => 'json',
        'carImageUrl' => 'json',
    ];

}
