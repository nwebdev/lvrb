<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $DiningBookingID
 * @property int $DiningID
 * @property int $User_ID
 * @property string $DateOfBooking
 * @property string $TimeOfBooking
 * @property string $ConfirmDate
 * @property string $ConfirmTime
 * @property string $CancelledDateTime
 */
class DiningBooking extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'DiningBooking';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'DiningBookingID';

    /**
     * @var array
     */
    protected $fillable = ['DiningID', 'User_ID', 'DateOfBooking', 'TimeOfBooking', 'ConfirmDate', 'ConfirmTime', 'CancelledDateTime'];

}
