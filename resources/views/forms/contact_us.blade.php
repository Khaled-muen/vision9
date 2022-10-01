<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <title>contact us</title>
</head>
<body>
    <div class="container mt-5">
        <h2>contact us</h2>
        <form action="{{ route('contact_us_data') }}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" > --}}
            {{-- {{ csrf_field() }} --}}
            <div class="my-5">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" name="name">
            </div>
            <div class="mb-5">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Email" name="email">
            </div>
            <div class="mb-5">
                <label>Upload-File</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="mb-5">
                <label>Message</label>
                <textarea name="message" rows="10" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="my-4 text-center">

                <button class="btn btn-success w-50">Send</button>
            </div>
        </form>
    </div>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
