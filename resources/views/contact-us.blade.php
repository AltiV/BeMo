<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="noindex">
    <title>
        Contact Us
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <x-header />

    <div class="image-banner">
        <img src="{{url('/images/contact-us.png')}}" />
    </div>

    <div class="content">
        <h1>
            BeMo Academic Consulting Inc.
        </h1>

        <p><b><u>Toll Free</u></b>: 1-855-900-BeMo (2366)</p>
        <p><b><u>Email</u></b>: info@bemoacademicconsulting.com</p>

        @if($errors->any())
        <div class="message-text">Fields marked with * are required.</div>
        @else
        <!-- Thank you, your email has been sent. We will get back to you shortly. -->
        @endif

        <div style="text-align: center;">
            <form class="contact-form" name="contact" method="POST" action="validate">
                @csrf
                <label>NAME: *</label> <br />
                <input type="text" name="name" id="name" size="40" />
                <br />
                <br />

                <label>EMAIL ADDRESS: *</label> <br />
                <input type="text" name="email" id="email" size="40" />
                <br />
                <br />

                <label>HOW CAN WE HELP YOU? *</label> <br />
                <textarea name="content" id="content" rows="8" cols="38"></textarea>
                <br />
                <br />

                <input type="reset" value="RESET" name="reset" />
                <input type="submit" value="SUBMIT">
            </form>

            <br />
            <br />

            <p><b><u>Note</u></b>: If you are having difficulties with our contact us form above, send us an email to info@bemoacademicconsulting.com (copy & paste the email address)
            </p>
        </div>
    </div>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="main.js"></script>
</body>

</html>
