<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>form5</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Form 5 Upload</h2>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
        @endif
        <form action="{{ route('form5_data') }}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- <input type="hidden" value="{{ csrf_token()}} name="_token""> --}}
            {{--{{csrf_field()}}  --}}
            <div class="my-5">
                <label class="mb-2">Upload Image</label>
                <input type="file" name="image" class="form-control  @error('image')is-invalid @enderror">
                @error('image')
                    <small class="invalid-feedback">{{$message}}</small>
                @enderror
            </div>
            <button class="btn btn-success px-5">send</button>
        </form>
    </div>
</body>

</html>
