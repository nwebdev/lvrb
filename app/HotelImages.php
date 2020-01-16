<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $DiningImagesID
 * @property string $URL
 * @property int $HotelID
 */
class HotelImages extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'HotelImages';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'DiningImagesID';

    /**
     * @var array
     */
    protected $fillable = ['URL', 'HotelID'];

}
