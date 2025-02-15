<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo - Activity 2</title>

    <!-- commenting because practicing non-CDN/local-based bootstrap o(*￣▽￣*)ブ -->
    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->

    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->

    <!-- Latest compiled and minified JavaScript -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


</head>

<body>
    <h1>Activity 2</h1>

    <!-- 🍓BADGE AND LABELS -->
    <div class="container-fluid">
        <a href="#">Message<span class="badge">10</span></a><br>
        <a href="#">Notification<span class="badge">10</span></a>
        <button class="btn btn-primary">Click to see Notifications<span class="badge">500</span></button>
        
        <div class="page-header">
            <h3>Download<span class="label label-default">Version 10.1.0</span></h3>
        </div>
    </div>
    <br>
    <hr>

    <!-- 🍓ALERT CLASS -->
    <div class="container-fluid">
        <div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert">&times;</a>Record already exist!</div>
        <div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&times;</a>Record already exist!</div>
        <div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert">&times;</a>Record already exist!</div>
        <div class="alert alert-info"><a href="#" class="close" data-dismiss="alert">&times;</a>Record already exist!</div>
    </div>
    <br>
    <hr>

    <!-- 🍓PAGE HEADER AND WELL CLASS -->
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Heading in Jumbotron</h1>

        </div>
            <h1>Heading withouth Jumbotron</h1>

        <div class="page-header">
            <h1>Welcome</h1>
        </div>

        <p class="well well-sm">This is the well</p> <!-- small jumbotron -->
        <p class="well">This is the well</p>
        <p class="well well-lg">This is the well</p>
    </div>
    <br>
    <hr>

    <!-- 🍓GLYPHICON -->
    <!-- visit this site: https://getbootstrap.com/docs/3.3/components/ -->
    <div class="container-fluid">
        <span class="glyphicon glyphicon-trash"></span>: Trash Can<br>
        <span class="glyphicon glyphicon-camera"></span>: Camera<br>
        <button class="btn btn-success"><span class="glyphicon glyphicon-search"></span> Find</button><br>
    </div>
    <br>
    <hr>

    <!-- 🍓DROPDOWN CLASS -->
    <div class="container-fluid">
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                College <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">CCS</a></li>
                <li><a href="#">CET</a></li>
                <li><a href="#">CBA</a></li>

                <li class="divider"></li> <!-- creates line divider -->
                <li class="dropdown-header">Exit</li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>

        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                College <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="#">CCS</a></li>
                <li><a href="#">CET</a></li>
                <li><a href="#">CBA</a></li>

                <li class="divider"></li> <!-- creates line divider -->
                <li class="dropdown-header">Exit</li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>

        <div class="dropup">
            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                College <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">CCS</a></li>
                <li><a href="#">CET</a></li>
                <li><a href="#">CBA</a></li>

                <li class="divider"></li> <!-- creates line divider -->
                <li class="dropdown-header">Exit</li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
    </div>

    <!-- 🍓BUTTON -->
    <hr>
    <br>
    <div class="container-fluid">
        <button class="btn btn-default">Click Me</button>
        <button class="btn btn-primary btn-xs">Click Me</button>
        <button class="btn btn-info btn-lg">Click Me</button>
        <button class="btn btn-success btn-md">Click Me</button>
        <button class="btn btn-warning">Click Me</button>
        <button class="btn btn-danger btn-sm">Click Me</button>
        <button class="btn btn-link">Click Me</button>

        <button class="btn btn-danger btn-block">Click Me</button>
        <button class="btn btn-danger disabled">Click Me</button>
        <button class="btn btn-danger active">Click Me</button>

        <!-- 🍓BUTTON GROUP CLASS -->
        <div class="btn-group">
            <button class="btn btn-info">Home</button>
            <button class="btn btn-info">About Us</button>
            <button class="btn btn-info">Contact Us</button>
            <button class="btn btn-info">Products</button>
        </div>

        <div class="btn-group-vertical">
            <button class="btn btn-info">Home</button>
            <button class="btn btn-info">About Us</button>
            <button class="btn btn-info">Contact Us</button>
            <button class="btn btn-info">Products</button>
        </div>

        <div class="btn-group btn-group-justified">
            <div class="btn-group">
                <button class="btn btn-success">Home</button>
            </div>

            <div class="btn-group">
                <button class="btn btn-success">About Us</button>
            </div>

            <div class="btn-group">
                <button class="btn btn-success">Contact Us</button>
            </div>

            <div class="btn-group">
                <button class="btn btn-success">Products</button>
            </div>
        </div>
    </div>

    <!-- 🍓IMAGE -->
    <hr>
    <br>
    <div class="container-fluid">
        <img src="image\lemon.jpg">
        <img src="image\lemon.jpg" class="img-rounded">
        <img src="image\lemon.jpg" class="img-circle">
        <img src="image\lemon.jpg" class="img-thumbnail">
    </div>
</body>

</html>