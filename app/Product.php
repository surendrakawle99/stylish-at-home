<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = array();

    public function getData()
    {
        return static::select('products.*','services.service_title')->leftJoin('services','service_id','services.id')->orderBy('created_at','desc')->get();
    }
    public static function getParentData()
    {
        return static::get();
    }

    public function storeData($input)
    {
    	return static::create($input);
    }

    public function findData($id)
    {
        return static::find($id);
    }

    public function updateData($id, $input)
    {
        return static::find($id)->update($input);
    }

    public function deleteData($id)
    {
        return static::find($id)->delete();
    }
}
