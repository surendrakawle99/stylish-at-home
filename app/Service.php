<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Stylish;

class Service extends Model
{
    protected $table = 'services';
    protected $guarded = array();

    public function stylish()
    {
        return $this->belongsToMany(Stylish::class);
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
