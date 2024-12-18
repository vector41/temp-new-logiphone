<?php

namespace App\Models\LogiPhone;


use App\Libs\Common\ModelClass;
use App\Models\OriginalClass;

use Askedio\SoftCascade\Traits\SoftCascadeTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LPFavorite extends Model
{

    protected $connection = 'mysql_lp';
    protected $table = 'favorites';
    protected $primaryKey = 'id';
}
