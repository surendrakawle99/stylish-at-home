<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stylish extends Model
{
    protected $table = 'stylish';
    protected $guarded = array();

    public function services()
    {
        return $this->belongsToMany(Service::class,'stylish_service')
        ->withPivot(['id','service_description','service_cost']);
    }
    
    public function location()
    {
        return $this->belongsToMany(Location::class,'stylish_location');
    }

    public function getData()
    {
        return static::orderBy('created_at','desc')->get();
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
