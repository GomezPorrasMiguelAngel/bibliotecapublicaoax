<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TelegramController extends Controller
{
    public function updatedActivity()
    {
        $activity = \Telegram::getUpdates();
        dd($activity);
    }
}
?>