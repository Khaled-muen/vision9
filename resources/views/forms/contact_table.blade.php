<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <title>table contact</title>
</head>
<body>
    <div class="container">
        <h2>Contact Table</h2>
        <table class="table table-hover table-bordered">
            <tr class="table-success">
                <th>Name</th>
                <th>Email</th>
                <th>Image</th>
                <th>Message</th>
            </tr>
            <tr>
                <td>{{ $name }}</td>
                <td>{{ $email }}</td>
                <td><img src="{{ asset('uploads_image/'. $image) }}" alt="" style="width: 50px;height:50px;"></td>
                <td>{{ $message }}</td>
            </tr>
        </table>
    </div>
</body>
</html>
