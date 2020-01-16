<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $HotelID
 * @property string $Name
 * @property string $Address
 * @property string $City
 * @property string $State
 * @property string $Zip
 * @property string $Country
 * @property string $Mobile
 * @property string $SortDiscription
 */
class Hotels extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Hotels';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'HotelID';

    /**
     * @var array
     */
    protected $fillable = ['Name', 'Address', 'City', 'State', 'Zip', 'Country', 'Mobile', 'SortDiscription'];

}
