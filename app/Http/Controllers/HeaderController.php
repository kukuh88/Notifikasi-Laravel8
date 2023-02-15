<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeaderController extends Controller
{
 // HeaderController.php
public function index()
{
    $unreadNotificationsCount = Auth::user()->unreadNotifications()->count();
    $notifications = Auth::user()->unreadNotifications;
    return view('header', compact('unreadNotificationsCount', 'notifications'));
}

}
