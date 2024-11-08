<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Google_Client;
use Google_Service_Calendar;
use Google_Service_Calendar_Event;
use Illuminate\Support\Facades\Auth;

class GoogleCalendarController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        // Get the user's Google information
        $googleUser = Socialite::driver('google')->user();

        // Store Google access token
        $googleClient = new Google_Client();
        $googleClient->setAccessToken($googleUser->token);

        // Create Google Calendar Service
        $service = new Google_Service_Calendar($googleClient);

        // Create the event
        $event = new Google_Service_Calendar_Event([
            'summary' => 'Appointment with ' . Auth::user()->name,
            'location' => 'Your address here',
            'description' => 'Appointment details',
            'start' => [
                'dateTime' => '2024-12-12T10:00:00-07:00',
                'timeZone' => 'America/Los_Angeles',
            ],
            'end' => [
                'dateTime' => '2024-12-12T11:00:00-07:00',
                'timeZone' => 'America/Los_Angeles',
            ],
            'attendees' => [
                ['email' => Auth::user()->email],
            ],
        ]);

        // Insert the event into the calendar
        $calendarId = 'primary';
        $service->events->insert($calendarId, $event);

        return redirect()->route('appointments.index')->with('success', 'Appointment added to Google Calendar!');
    }
}
