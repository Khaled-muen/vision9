<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>table</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Table</h2>
        <table class="table table-hover table-bordered mt-5">
            <tr class="table-success">
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
            </tr>
            <tr>
                <td>{{ $name }}</td>
                <td>{{ $email }}</td>
                <td>{{ $age }}</td>
            </tr>
        </table>
        <div class="alert alert-danger">
            <p><b>Name:</b>{{ $name }}</p>
            <p><b>Email:</b>{{ $email }}</p>
            <p><b>Age:</b>{{ $age }}</p>
        </div>
    </div>
</body>

</html>
