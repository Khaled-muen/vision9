<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>welocme</title>
</head>
<body style="background: #eee; font-family:Arial, Helvetica, sans-serif; font-size:15px">
    <div style="width:600;border:2px solid #979797; background-color:#fff; padding:30px; margin:0 auto;">
    <h2 style="text-transform:capitalize">Welcome Mr.{{$data['name']}}</h2>
    <p style="text-transform:capitalize">Hope this email finds you well</p>
    <br>
    <p>There is new contact-us email with the following data :</p>

    <p><b>Name:</b> {{$data['name']}}</p>
    <p><b>Mail:</b> {{$data['email']}}</p>
    <p><b>comment:</b> {{$data['message']}}</p>

    <br>
    <br>

    <p>Best Regards</p>
    <p>Khaled.M.Algalel</p>
    </div>
</body>
</html>
