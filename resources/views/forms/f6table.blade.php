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
    <h2>Table</h2>
    <table class="table table-hover table-bordered">
        <tr class="table-dark">
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Interests</th>
            <th>Favorite</th>
            <th>country</th>
            <th>Image</th>
        </tr>
        <tr>
            <td>{{ $name }}</td>
            <td>{{ $email }}</td>
            <td>{{ $phone }}</td>
            <td>{{ $age }}</td>
            <td>{{ $gender }}</td>
            <td>
                <ul>
                    @foreach ($interests as $value1)
                        @foreach ($value1 as $value2)
                            <li>{{ $value2 }}</li>
                        @endforeach
                    @endforeach
                    {{-- or --}}
                    {{-- @for ($i = 0; $i <= 2; ++$i)
                <li>{{ $interests[0][$i] }}</li>
                @endfor --}}
                </ul>
            </td>
            <td>{{ $favorite }}</td>
            <td>{{ $country }}</td>
            <td><img src="{{ asset('upload/' . $image) }}" alt="" class="rounded mx-auto d-block" width="100"
                    height="100"> </td>
        </tr>
    </table>
    <div class="alert alert-danger">
        <p><b>Name:</b>{{ $name }}</p>
        <p><b>Email:</b>{{ $email }}</p>
        <p><b>Phone:</b>{{ $phone }}</p>
        <p><b>Age:</b>{{ $age }}</p>
        <p><b>Gender:</b>{{ $gender }}</p>
        <p><b>interests:</b>
            <ul>
            @foreach ($interests as $value1)
                @foreach ($value1 as $value2)
                    <li>{{ $value2 }}</li>
                @endforeach
            @endforeach
            </ul>
        </p>
        <p><b>Favorite:</b>{{ $favorite }}</p>
        <p><b>country:</b>{{ $country }}</p>
        <p><b>Image: </b><img src="{{ asset('upload/' . $image) }}" alt="" width="100px" height="100px"
                class="rounded"></p>
    </div>
</body>

</html>
{{-- <img src="{{$image}}" alt="khaled-image"> --}}
