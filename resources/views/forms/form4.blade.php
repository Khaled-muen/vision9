<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<body>
    {{-- the way number 1 to validate --}}
    {{-- @dump($errors)
    @dump($errors->any()) --}}
    {{-- @dump($errors->all())
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
    @endif --}}

    <div class="container mt-5">
        <h2>Form4</h2>
        <form action="{{ route('form4_data') }}"method="POST">
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
            {{-- {{csrf_field()}} --}}
            @csrf
            <div class="mt-5">
                <label>Name</label>.
                <input type="text" name="name" class="regstier form-control @error('name') is-invalid @enderror"
                    placeholder="Name" value="{{ old('name') }}">
                @error('name')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <div class="mt-5">
                <label>Email</label>
                <input type="text" name="email" class="regstier form-control @error('email') is-invalid @enderror"
                    placeholder="Email" value="{{ old('email') }}">
                @error('email')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <div class="mt-5">
                <label>Age</label>
                <input type="number" name="age" class="regstier form-control @error('age') is-invalid @enderror"
                    placeholder="Age" value="{{ old('age') }}">
                @error('age')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <button class="btn btn-primary mt-5 px-5">send</button>
        </form>
    </div>
</body>

</html>
