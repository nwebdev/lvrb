<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $DiningID
 * @property string $Name
 * @property string $Address
 * @property string $City
 * @property string $State
 * @property string $Zip
 * @property string $Country
 * @property string $Mobile
 * @property string $SortDiscription
 */
class Dinings extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Dinings';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'DiningID';

    /**
     * @var array
     */
    protected $fillable = ['Name', 'Address', 'City', 'State', 'Zip', 'Country', 'Mobile', 'SortDiscription'];

}
