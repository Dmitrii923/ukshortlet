<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class City extends Model
{
    use HasFactory;
    protected $table = 'city';
    protected $guarded = ['id'];
    
    public function getOrderCities($default_arr = null)
    {
        $default_cities = DB::table('city')->select('*')->whereIn('cityname', $default_arr)->get();
        $cities = DB::table('city')->select('*')->whereNotIn('cityname', $default_arr)->orderBy('cityname', 'ASC')->get();
        $all = array();
        foreach($default_cities as $default)
        {
            array_push($all, $default);
        }

        foreach($cities as $city)
        {
            array_push($all, $city);
        }
        return $all;
    }

    public function getFeaturedProperties()
    {
        $featured_properties = $this->hasMany(Propertylisting::class, 'cityid')->orderBy('favorites', 'DESC')->limit(8)->get();
        return $featured_properties;
    }

    public function getPropertiesList()
    {
        $properties = $this->hasMany(Propertylisting::class, 'cityid')->where('isarchive', '1')->orderBy('propertypeid', 'ASC');
        return $properties;
    }
}
