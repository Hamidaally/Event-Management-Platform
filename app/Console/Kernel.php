<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Notifications\Notification;
use App\Notifications\EventNotification;
use App\Models\Event;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
<<<<<<< HEAD
        // $schedule->command('inspire')->hourly();
    $schedule->call(function () {
        $events = Event::where('date', '<=', now()->addDays(1))->get();

        foreach ($events as $event) {
           $user = $event->user;
            $user->notify( new EventNotification($event));
        }
    })->daily(); // You can adjust the schedule as needed
}
    
=======
         $schedule->command('reminders:send')->everyTwoMinutes();
    }
>>>>>>> 88f6a61b8bf5a7f691ee02f306206a53222ffe6e

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }

}
