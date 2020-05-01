<?php

namespace App\Observers;

use App\Country;
use App\Notifications\DataChangeEmailNotification;
use Illuminate\Support\Facades\Notification;

class CountryActionObserver
{
    public function created(Country $model)
    {
        $data  = ['action' => 'created', 'model_name' => 'Country'];
        $users = \App\User::whereHas('roles', function ($q) {return $q->where('title', 'Admin');})->get();
        Notification::send($users, new DataChangeEmailNotification($data));

    }

    public function updated(Country $model)
    {
        $data  = ['action' => 'updated', 'model_name' => 'Country'];
        $users = \App\User::whereHas('roles', function ($q) {return $q->where('title', 'Admin');})->get();
        Notification::send($users, new DataChangeEmailNotification($data));

    }

    public function deleting(Country $model)
    {
        $data  = ['action' => 'deleted', 'model_name' => 'Country'];
        $users = \App\User::whereHas('roles', function ($q) {return $q->where('title', 'Admin');})->get();
        Notification::send($users, new DataChangeEmailNotification($data));

    }
}
