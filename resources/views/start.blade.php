<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="{!! asset('template') !!}/img/logo.png">
        <link href="{!! asset('template') !!}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="{!! asset('template') !!}/css/sb-admin-2.min.css" rel="stylesheet">
        <title>Blog</title>
    </head>
    <body>
        <style>
            .btn.btn-wf{
                background-color: #00acac;
                color: #fff;
            }
            .my-style{
                margin-top: 25vh !important;
            }
        </style>
            <img src="{!! asset('template') !!}/img/login-bg.jpeg" class="text-left" width="60%" height="100%">
            <div class="text-center float-right mr-5 mt-5 my-style">
                <h1>Blog</h1><br><br>
                <a href="<?= route('dashboard') ?>" type="button" class="btn btn-wf form-control">Start</a>
            </div>
        <script src="{!! asset('template') !!}/vendor/jquery/jquery.min.js"></script>
        <script src="{!! asset('template') !!}/img/login-bg.png"></script>
        <script src="{!! asset('template') !!}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{!! asset('template') !!}/js/sb-admin-2.min.js"></script>
        <script src="{!! asset('template') !!}/bootbox/bootbox.min.js"></script>
        <script src="{!! asset('template') !!}/bootbox/bootbox.all.min.js"></script>
        <script src="{!! asset('template') !!}/js/datatable.js"></script>
        <script src="{!! asset('template') !!}/js/jquery.js"></script>
        <script src="{!! asset('template') !!}/js/sweet.js"></script>
    </body>
</html>