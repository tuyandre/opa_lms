<html>
<head>
    <meta charset="utf-8">
    <title>Order Payment Status</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3 class="text-center" style="margin-top: 30px;">
                Order Payment Status</h3>
            <div class="card" style="margin-top: 60px;">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {!! $message !!}
                    </div>
                    <?php Session::forget('success');?>
                @endif

                @if ($message = Session::get('error'))
                    <div class="alert alert-danger" role="alert">
                        {!! $message !!}
                    </div>
                    <?php Session::forget('error');?>
                @endif
            </div>
        </div>
    </div>
</div>
</body>
</html>
