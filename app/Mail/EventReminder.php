<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Event;

class EventReminder extends Mailable
{
    use Queueable, SerializesModels;
    public $event;
    public $attendeeName;
    public $attendeeEmail;

    /**
     * Create a new message instance.
     *
     * @param Event $event
     * @param string $attendeeName
     * @param string $attendeeEmail
     * @return void
     */
    public function __construct(Event $event, $attendeeName, $attendeeEmail)
    {
        $this->event = $event;
        $this->attendeeName = $attendeeName;
        $this->attendeeEmail = $attendeeEmail;
    

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Event Reminder: ' . $this->event->title)
        ->markdown('emails.event.reminder')
        ->with([
            'event' => $this->event,
            'attendeeName' => $this->attendeeName,
            'attendeeEmail' => $this->attendeeEmail,
        ]);

    }
}
