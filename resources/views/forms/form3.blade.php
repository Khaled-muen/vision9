<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
    <title>Document</title>
</head>
<style>
    .contact-clean {
        background: #f1f7fc;
        padding: 80px 0;
    }

    @media (max-width:767px) {
        .contact-clean {
            padding: 20px 0;
        }
    }

    .contact-clean form {
        max-width: 480px;
        width: 90%;
        margin: 0 auto;
        background-color: #ffffff;
        padding: 40px;
        border-radius: 4px;
        color: #505e6c;
        box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
    }

    @media (max-width:767px) {
        .contact-clean form {
            padding: 30px;
        }
    }

    .contact-clean h2 {
        margin-top: 5px;
        font-weight: bold;
        font-size: 28px;
        margin-bottom: 36px;
        color: inherit;
    }

    .contact-clean .form-group:last-child {
        margin-bottom: 5px;
    }

    .contact-clean form .form-control {
        background: #fff;
        border-radius: 2px;
        box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.05);
        outline: none;
        color: inherit;
        padding-left: 12px;
        height: 42px;
    }

    .contact-clean form .form-control:focus {
        border: 1px solid #b2b2b2;
    }

    .contact-clean form textarea.form-control {
        min-height: 100px;
        max-height: 260px;
        padding-top: 10px;
        resize: vertical;
    }

    .contact-clean form .btn {
        padding: 16px 32px;
        border: none;
        background: none;
        box-shadow: none;
        text-shadow: none;
        opacity: 0.9;
        text-transform: uppercase;
        font-weight: bold;
        font-size: 13px;
        letter-spacing: 0.4px;
        line-height: 1;
        outline: none !important;
    }

    .contact-clean form .btn:hover {
        opacity: 1;
    }

    .contact-clean form .btn:active {
        transform: translateY(1px);
    }

    .contact-clean form .btn-primary {
        background-color: #055ada !important;
        margin-top: 15px;
        color: #fff;
    }
</style>
<body>
    <div class="contact-clean">
        <form action="{{ route('form3_data') }}"method="POST">
            {{-- <input type="text"disabled name="_token" value="{{ csrf_token() }}">
            {{ csrf_field() }} --}}
            @csrf
            <h2 class="text-center">Contact us</h2>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
            <div class="form-group"><input class="form-control" type="email" name="email"
                    placeholder="Email"></div>
            <div class="form-group">
                <textarea class="form-control" rows="14" name="message" placeholder="Message"></textarea>
            </div>
            <div class="form-group"><button class="btn btn-primary" type="submit">send</button></div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/esm/popper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>

</html>
