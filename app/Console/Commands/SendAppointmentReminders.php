<?php

namespace App\Console\Commands;

use App\Mail\AppointmentReminder;
use Illuminate\Console\Command;
use App\Models\Appointment;
use Illuminate\Support\Facades\Mail;
use DateTime;

class SendAppointmentReminders extends Command
{
    protected $signature = 'send:appointment-reminders';
    protected $description = 'Send reminders 24 hours before appointments';

    public function handle()
    {
        // Get the date 24 hours from now
        $dateTime = new DateTime('+24 hours');
        $formattedDateTime = $dateTime->format('Y-m-d H:i');

        // Fetch appointments scheduled for this time
        $appointments = Appointment::where('date', $formattedDateTime)->get();

        foreach ($appointments as $appointment) {
            Mail::to($appointment->user->email)->send(new AppointmentReminder($appointment));
        }

        $this->info('Reminders sent successfully.');
    }
}

