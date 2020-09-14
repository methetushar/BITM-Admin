<?php

/**
 * @Oshit Sutra Dhar
 */

namespace App\Model;

use Auth;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class CollaborativePayment extends Model
{
    use LogsActivity;
    protected $guarded = [];





    //--------------------------------------------------------
    // LOG ACTIVITY
    //--------------------------------------------------------
    protected static $logAttributes = ['*'];
    protected static $logName = 'CollaborativePayment';
    public function getDescriptionForEvent(string $eventName): string
    {
        $name = Auth::guard('admin')->user()->name;
        return "{$name} have {$eventName} the CollaborativePayment";
    }
}
