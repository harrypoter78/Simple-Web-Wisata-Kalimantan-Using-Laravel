<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Destination extends Model
{
    use HasFactory;

    public $primaryKey = 'destination_id';
    protected $fillable = [
        'destination_name',
        'destination_description',
        'destination_location',
        'destination_day_temp',
        'destination_night_temp',
        'destination_rating',
        'destination_image',
        'destination_category',
    ];

    static function getAlamDestination(){
        $return=DB::table('destinations')
        ->where('destinations.destination_category','=','alam');
        return $return;
    }
    static function getKotaDestination(){
        $return=DB::table('destinations')
        ->where('destinations.destination_category','=','kota');
        return $return;
    }
}
