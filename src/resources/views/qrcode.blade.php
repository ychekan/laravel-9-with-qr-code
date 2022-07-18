<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>How to Generate QR Code in Laravel 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<div class="container mt-4">
    <div class="card my-5">
        <div class="card-header">
            <h2>Simple QR Code</h2>
        </div>
        <div class="card-body">
            {!! QrCode::size(300)->generate('https://techvblogs.com/blog/generate-qr-code-laravel-9') !!}
        </div>
    </div>
    <div class="card my-5">
        <div class="card-header">
            <h2>Color QR Code</h2>
        </div>
        <div class="card-body">
            {!! QrCode::size(300)->backgroundColor(255,90,0)->generate('https://techvblogs.com/blog/generate-qr-code-laravel-9') !!}
        </div>
    </div>
    <div class="card my-5">
        <div class="card-header">
            <h2>Only email QR Code</h2>
        </div>
        <div class="card-body">
            {!! QrCode::size(300)->email('foo@bar.com'); !!}
        </div>
    </div>

    <div class="card my-5">
        <div class="card-header">
            <h2>Email Subject with Body - QR Code</h2>
        </div>
        <div class="card-body">
            {!! QrCode::size(300)->email('foo@bar.com', 'This is the subject.', 'This is the message body.'); !!}
        </div>
    </div>

    <div class="card my-5">
        <div class="card-header">
            <h2>Geo QR Code</h2>
        </div>
        <div class="card-body">
            {!! QrCode::size(300)->geo(37.822214, -122.481769); !!}
        </div>
    </div>

    <div class="card my-5">
        <div class="card-header">
            <h2>Phone number - QR Code</h2>
        </div>
        <div class="card-body">
            {!! QrCode::size(300)->phoneNumber('555-555-5555'); !!}
        </div>
    </div>

    <div class="card my-5">
        <div class="card-header">
            <h2>Sms without text - QR Code</h2>
        </div>
        <div class="card-body">
            {!! QrCode::size(300)->SMS('555-555-5555'); !!}
        </div>
    </div>

    <div class="card my-5">
        <div class="card-header">
            <h2>Sms with text - QR Code</h2>
        </div>
        <div class="card-body">
            {!! QrCode::size(300)->generate('SMSTO:+380666666666:Text sms'); !!}
        </div>
    </div>

    <div class="card my-5">
        <div class="card-header">
            <h2>Wi-Fi - QR Code</h2>
        </div>
        <div class="card-body">
            {!!
                QrCode::size(300)->wiFi([
                    'ssid' => 'Network Name',
                    'encryption' => 'WPA',
                    'password' => 'myPassword'
                ]);
            !!}
        </div>
    </div>
</div>
</body>
</html>
