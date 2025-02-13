<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo - Activity 1</title>

        <!-- commenting because practicing non-CDN/local-based bootstrap o(*￣▽￣*)ブ -->
        <!-- Latest compiled and minified CSS -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->

        <!-- Optional theme -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->

        <!-- Latest compiled and minified JavaScript -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->

        <link rel= "stylesheet" href="css/bootstrap.min.css">
        <script src="js\jquery.js"></script>
        <script src="js\bootstrap.js"></script>

    </head>

    <body class>
        <h1>Activity 1</h1>

         <!-- 🍓BOOTSTRAP TABLE -->
        <div class="container-fluid">
            <table class="table">
                <tr class="danger">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Remarks</th>
                </tr>
                <tr>
                    <td>22-1234-56</td>
                    <td>Himiko Toga</td>
                    <td>Passed</td>
                </tr>
                <tr>
                    <td>22-2345-67</td>
                    <td>Shoto Todoroki</td>
                    <td>Passed</td>
                </tr>
                <tr>
                    <td>22-3456-78</td>
                    <td>Katsuki Bakugo</td>
                    <td>Passed</td>
                </tr>
            </table>

            <table class="table table-striped"> <!-- will add alternate color -->
                <tr class="info">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Remarks</th>
                </tr>
                <tr>
                    <td>22-1234-56</td>
                    <td>Himiko Toga</td>
                    <td>Passed</td>
                </tr>
                <tr>
                    <td>22-2345-67</td>
                    <td>Shoto Todoroki</td>
                    <td>Passed</td>
                </tr>
                <tr>
                    <td>22-3456-78</td>
                    <td>Katsuki Bakugo</td>
                    <td>Passed</td>
                </tr>
            </table>

            <table class="table table-condensed"> <!-- will compress display -->
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Remarks</th>
                </tr>
                <tr>
                    <td>22-1234-56</td>
                    <td>Himiko Toga</td>
                    <td class="success">Passed</td>
                </tr>
                <tr>
                    <td>22-2345-67</td>
                    <td>Shoto Todoroki</td>
                    <td class="success">Passed</td>
                </tr>
                <tr>
                    <td>22-3456-78</td>
                    <td>Katsuki Bakugo</td>
                    <td class="danger">Failed</td>
                </tr>
            </table>

            <table class="table table-hover"> <!-- creates row hover -->
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Remarks</th>
                </tr>
                <tr>
                    <td>22-1234-56</td>
                    <td>Himiko Toga</td>
                    <td>Passed</td>
                </tr>
                <tr>
                    <td>22-2345-67</td>
                    <td>Shoto Todoroki</td>
                    <td>Passed</td>
                </tr>
                <tr>
                    <td>22-3456-78</td>
                    <td>Katsuki Bakugo</td>
                    <td>Passed</td>
                </tr>
            </table>

            <table class="table table-bordered"> <!-- creates table border line -->
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Remarks</th>
                </tr>
                <tr>
                    <td>22-1234-56</td>
                    <td>Himiko Toga</td>
                    <td>Passed</td>
                </tr>
                <tr>
                    <td>22-2345-67</td>
                    <td>Shoto Todoroki</td>
                    <td>Passed</td>
                </tr>
                <tr>
                    <td>22-3456-78</td>
                    <td>Katsuki Bakugo</td>
                    <td>Passed</td>
                </tr>
            </table>

            <table class="table table-hover table-bordered"> <!-- hover and bordered (you can combine table classes) -->
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Remarks</th>
                </tr>
                <tr>
                    <td>22-1234-56</td>
                    <td>Himiko Toga</td>
                    <td>Passed</td>
                </tr>
                <tr>
                    <td>22-2345-67</td>
                    <td>Shoto Todoroki</td>
                    <td>Passed</td>
                </tr>
                <tr>
                    <td>22-3456-78</td>
                    <td>Katsuki Bakugo</td>
                    <td>Passed</td>
                </tr>
            </table>
        </div>
        <hr/>
        <br/>

        <!-- 🍓TEXT STYLE -->
        <div class="container">
            <p class="text-success bg-success">Success</p>
            <p class="text-danger bg-danger">Danger</p>
            <p class="text-info bg-info">Info</p>
            <p class="text-primary bg-primary">Primary</p>
            <p class="text-muted bg-muted">Muted</p>
            <p class="text-warning bg-warning">Warning</p>

            <p class="lead">Information Technology</p>
            <p class="small">Information Technology</p>
            <p class="text-center">Information Technology</p>
            <p class="text-right">Information Technology</p>

            <p class="text-uppercase">Information Technology</p>
            <p class="text-lowercase">Information Technology</p>
        </div>
        <hr/>
        <br/>


        <!-- 🍓GRID SYSTEM -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1" style="background: green;">grid</div>
                <div class="col-md-1" style="background: red;">grid</div>
                <div class="col-md-5" style="background: blue;">grid</div>           
            </div>

            <div class="row">
                <div class="col-md-6" style="background: yellow;">grid</div>
            </div>
        </div>
        <hr/>
        <br/>


        <!-- 🍓CONTAINER -->
        <div class="container-fluid"> <!-- has smaller margin than container class -->
            <header class="jumbotron">
                <h1>This is a container-fluid class</h1>
            </header>
        </div>
        <hr/>
        <br/>

        <div class="container">
            <header class="jumbotron">
                <h1>This is a container class</h1>
            </header>
        </div>
        <hr/>
        <br/>

        <div class="jumbotron">
            <h1>Hello! This is jumbotron class.</h1>
        </div>
    </body>
</html>