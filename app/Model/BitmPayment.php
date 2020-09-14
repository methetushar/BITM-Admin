<?php

/**
 * @Oshit Sutra Dhar
 */

namespace App\Model;

use Auth;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class BitmPayment extends Model
{
    use LogsActivity;
    protected $guarded = [];





    //--------------------------------------------------------
    // LOG ACTIVITY
    //--------------------------------------------------------
    protected static $logAttributes = ['*'];
    protected static $logName = 'BitmPayment';
    public function getDescriptionForEvent(string $eventName): string
    {
        $name = Auth::guard('admin')->user()->name;
        return "{$name} have {$eventName} the BitmPayment";
    }
}
