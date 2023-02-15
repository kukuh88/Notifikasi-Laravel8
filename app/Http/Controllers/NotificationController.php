<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
    $notifications = auth()->user()->unreadNotifications;
    return view('notifications.index', compact('notifications'));
    }
    // NotificationsController.php
// public function index()
// {
//     $notifications = Notification::all();
//     return view('notifications', compact('notifications'));
// }


}
