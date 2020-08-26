<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StylishService extends Model
{
    protected $table = 'stylish_service';
    public $timestamps = false;
    protected $guarded = array();

    public function getData($id)
    {
        return static::where('stylish_id',$id)->get();
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
