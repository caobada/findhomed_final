<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use Sluggable;
    //

    public $remember_token = false;
    protected $table = "Home";
    protected $primaryKey = 'home_id';

    public function hometype(){
    	return $this->belongsTo('App\HomeType','type_id','id');
    }
    public function districted(){
    	return $this->belongsTo('App\District','district','districtid');
    }
    public function province(){
    	return $this->belongsTo('App\Province','city','provinceid');
    }
    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
