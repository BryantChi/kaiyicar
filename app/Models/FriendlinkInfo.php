<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class FriendlinkInfo extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'friendlink_infos';
    
}
