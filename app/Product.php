<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Product extends Model
{
    //
    protected $table      = 'products'; //若想修改資料庫資料表的前置名稱(預設是資料表名稱)，可在這修改 20190814 vicky
    protected $primaryKey = 'id'; //若想修改資料庫資料表primary key 名稱(預設是id)，可在這修改 20190814 vicky

    public function getImageUrlAttribute()
    {
        return Storage::disk('public')->url($this->attributes['image']);
    }
}
