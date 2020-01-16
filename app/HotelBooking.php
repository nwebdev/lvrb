<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $HotelBookingID
 * @property int $HotelID
 * @property int $User_ID
 * @property string $DateOfBooking
 * @property string $TimeOfBooking
 * @property string $ConfirmDate
 * @property string $ConfirmTime
 * @property string $CancelledDateTime
 */
class HotelBooking extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'HotelBooking';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'HotelBookingID';

    /**
     * @var array
     */
    protected $fillable = ['HotelID', 'User_ID', 'DateOfBooking', 'TimeOfBooking', 'ConfirmDate', 'ConfirmTime', 'CancelledDateTime'];

}
