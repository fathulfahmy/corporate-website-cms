<!DOCTYPE html>
<html>

<head>
    <title>{{ $details['subject'] }}</title>
</head>

<p>From: {{ $details['sender'] }}</p>
<p>{{ $details['message'] }}</p>
<p>
    Sender: {{ $details['sender'] }}
    <br>
    Email: {{ $details['email'] }}
    <br>
    Phone: {{ $details['phone'] }}
</p>
<i>Sent from IICE App</i>

</html>
