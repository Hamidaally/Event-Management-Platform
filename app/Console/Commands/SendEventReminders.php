<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Models\Event;
use App\Mail\EventReminder;
use App\Models\Role;
class SendEventReminders extends Command
{
    protected $signature = 'reminders:send';
    protected $description = 'Send automated event reminders to attendees';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $upcomingEvents = Event::where('date', '>', now())->get();
        $attendeeRole = Role::where('name', 'Attendee')->first();

        foreach ($upcomingEvents as $event) {
            $attendees = $event->users()->whereHas('roles', function ($query) use ($attendeeRole) {
                $query->where('name', $attendeeRole->name);
            })->get();

            foreach ($attendees as $attendee) {
                
                Mail::to($attendee->email)->send(new EventReminder($event, $attendee->name, $attendee->email));
            }
        }

        $this->info('Event reminders sent successfully.');
    }
}



