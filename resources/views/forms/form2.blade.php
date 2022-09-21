<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form 2</title>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Form 2</h2>
        <form action="{{ route('form2_data') }}"method="POST">
            {{-- 1. <input name="_token" value="{{ csrf_token()}}"type="hidden"> --}}
            {{-- 2. {{ csrf_field() }} --}}
            @csrf
            <div class="mb-5">
                <label class=" form-label">Frist-Name</label>
                <input type="text" name="f_name" class="form-control w-50"><br>
            </div>
            <div class="mb-5">
                <label class="form-label">Last-Name</label>
                <input type="text" name="l_name" class="form-control w-50"><br>
            </div>
            <div class="mb-5">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control w-50"><br>
            </div>
            <div class="text-center">
            <button class="btn btn-success px-5">send</button>

            </div>
        </form>
    </div>
</body>

</html>
