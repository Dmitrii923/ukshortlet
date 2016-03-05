<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propertylisting extends Model
{
    use HasFactory;
    protected $table = 'propertylisting';

    public function getFavoriteCount()
    {
        $favor_count = $this->belongsTo(Favourite::class, 'propertyid')->count();
        return $favor_count;
    }

    public function getUserFavorite($user_id)
    {
        $favorite_count = $this->belongsTo(Favourite::class, 'propertyid')->where('userid', $user_id)->count();
        return $favorite_count > 0 ? 1 : 0;
    }

    public function propertyType()
    {
        return $this->belongsTo(Porpertytype::class, 'propertypeid')->first();
    }

    public function duration()
    {
        return $this->belongsTo(Adcostprice::class, 'adscostpriceid')->first();
    }
}
