<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Reminder</title>
</head>
<body>
    <h1>Event Reminder</h1>
    <p>Hello {{ $attendeeName }},</p>
    
    <p>This is a reminder for the upcoming event:</p>
    
    <h2>{{ $event->title }}</h2>
    <p>Date: {{ $event->date->format('F j, Y') }}</p>
    <p>Time: {{ $event->time }}</p>
    <p>Location: {{ $event->location }}</p>
    
    <p>Don't forget to attend this exciting event. We look forward to seeing you there!</p>
    
    <p>Thank you,</p>
    <p>Your Event Management Team</p>
</body>
</html>
