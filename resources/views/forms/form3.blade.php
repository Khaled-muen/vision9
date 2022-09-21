<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <title>Form 3</title>
</head>

<body>
    <div class="container">
        <form>
            @csrf
            <h2>Contact Us</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first">First Name</label>
                        <input type="text" class="form-control" placeholder="" id="first">
                    </div>
                </div>
                <!--  col-md-6   -->

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="last">Last Name</label>
                        <input type="text" class="form-control" placeholder="" id="last">
                    </div>
                </div>
                <!--  col-md-6   -->
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" class="form-control" placeholder="" id="company">
                    </div>


                </div>
                <!--  col-md-6   -->

                <div class="col-md-6">

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" placeholder="phone">
                    </div>
                </div>
                <!--  col-md-6   -->
            </div>
            <!--  row   -->


            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="email">
                    </div>
                </div>
                <!--  col-md-6   -->

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="url">Your Website <small>Please include http://</small></label>
                        <input type="url" class="form-control" id="url" placeholder="url">
                    </div>

                </div>
                <!--  col-md-6   -->
            </div>
            <!--  row   -->


            <label for="contact-preference">When is the best time of day to reach you?</label>
            <div class="radio">
                <label>
                    <input type="radio" name="contact-preference" id="contact-preference" value="am"
                        checked>Morning
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="contact-preference" id="contact-preference" value="pm"
                        checked>Evening
                </label>
            </div>

            <label for="newsletter">Would you like to recieve our email newsletter?</label>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="Sure!" id="newsletter"> Sure!
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>

</html>
