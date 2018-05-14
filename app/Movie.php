<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Movie extends Model
{
    public function determineMessage($movieYear)
    {
        $passedYears = $this->yearsSince($movieYear);
        
        if ($passedYears > 1) {
            $messageYear = "$passedYears years ago";
        } else {
            $messageYear = "$passedYears year ago";
        }
        return $messageYear;
    }

    public function yearsSince($movieYear)
    {
        $currentYear = Carbon::now()->formatLocalized('%Y');
        $yearsPassed = $currentYear-$movieYear;
        return $yearsPassed;
    }
}
