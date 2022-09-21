<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>form1</title>
</head>

<body style="background-image:url({{asset('site3asset/assets/img/bg.png')}});  background-attachment:fixed; background-size: 100% 100%;">
    <h2 class="text-center">FORM1</h2>
    <div class="row mx-5">
    <div class="container mb-5 col-6 mx-4 ">
        <form action="{{ route('form_data') }}" method="POST" >
            @csrf
            {{-- <script>alert('hello')</script> --}}
            <div class="mb-5"><span> Name</span><input type="text" class="form-control" placeholder="Full-Name" name="Name"></div>
            <div class="mb-5 mt-5"><span> Email </span><input type="email" class="form-control" placeholder="Email" name="Email"></div>
            <button class="btn btn-primary px-5 mt-5">Send</button>
        </form>
    </div>
    <div class="col-4"> <img src="{{ asset('site3asset/assets/img/person.jpg') }}" alt="" class="img-fluid
        .img-thumbnail rounded-pill"></div>
</div>
@extends('site3.master')
@section('styles')
<style>
    h2{
        color:#797e92;
    }
    .bg-primary {
        background: #1d4373 !important;
    }
    .btn-primary{
        background: #1d4373 !important;
        color:white;
        border: #1d4373;
    }
    input{
        background:#4b77878a !important;
    }
    input::placeholder{
        color: white !important;
    }
    span{
        color: #1d4373;
    }
</style>
@stop
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
