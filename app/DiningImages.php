<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $DiningImagesID
 * @property string $URL
 * @property int $DiningID
 */
class DiningImages extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'DiningImages';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'DiningImagesID';

    /**
     * @var array
     */
    protected $fillable = ['URL', 'DiningID'];

}
