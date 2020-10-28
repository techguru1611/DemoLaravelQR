<!DOCTYPE html>

<html>

<head>

    <title>How to Generate QR Code in Laravel 7?</title>

</head>

<body>

    

<div class="visible-print text-center">

    <h1>Laravel 7 - QR Code Generator Example</h1>


    <div class="visible-print text-center">
    {!! QrCode::size(100)->generate(Request::user()); !!}

    <p>Scan me to get user profie.</p>
	</div>

  
</div>

    

</body>

</html>