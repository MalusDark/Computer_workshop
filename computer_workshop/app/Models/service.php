<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    protected $table = 'services';
    protected $guarded = false;
    public string $serviceName;
    public string $mainInfo;
    public string $allInfo;
    public string $image;
    public int $price;
}
