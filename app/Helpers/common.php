<?php

use App\Models\MstUser;
use Carbon\Carbon;

if (!function_exists('statusName')) {
    function statusName($status)
    {
        if ($status == 1)
            return 'Active';
        else
            return 'Inactive';
    }
}
