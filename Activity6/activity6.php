<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity6 - Scroll Spy</title>
    
    <!-- Bootstrap 3 CDN -->
    <!-- This is a Bootstrap 3 syntax huhuhu, so we are gonna use ver 3 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <style>
        
        section {
            position: relative;
            width: 100vw;
            height: 100vh;
            padding-top: 50px;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        #home .overlay {
            background: rgba(231, 185, 12, 0.5);
        }

        #tralalero .overlay {
            background: rgba(133, 110, 12, 0.5);
        }

        #burbaloni .overlay {
            background: rgba(195, 204, 120, 0.5);
        }

        #trulimero .overlay {
            background: rgba(93, 98, 25, 0.5);
        }


        h1 {
            position: relative;
            z-index: 2;
            color: white; /* white text para readable */
            text-align: center;
            margin-top: 20%;
            font-size: 4rem;
        }

    </style>

</head>

<body data-spy="scroll" data-target=".navbar">
    <nav class="navbar navbar-default navbar-fixed-top">
        <ul class="nav navbar-nav">
            <li><a href="#home">Los Lirilitos Dicen Larila</a></li>
            <li><a href="#tralalero">Tralalero Dicen Tralala</a></li>
            <li><a href="#burbaloni">Burbaloni Luliloli</a></li>
            <li><a href="#trulimero">Trulimero Trulicina</a></li>
        </ul>
    </nav>

    <nav class="navbar navbar-inverse navbar-fixed-bottom">
        <ul class="nav navbar-nav">
            <li><a href="#home">Los Lirilitos Dicen Larila</a></li>
            <li><a href="#tralalero">Tralalero Dicen Tralala</a></li>
            <li><a href="#burbaloni">Burbaloni Luliloli</a></li>
            <li><a href="#trulimero">Trulimero Trulicina</a></li>
        </ul>
    </nav>
    
    <section id="home" style="background-image: url('https://i.ytimg.com/vi/e4iT8YVkmfE/maxresdefault.jpg')">
        <div class="overlay"></div>
        <h1>Los Lirilitos Dicen Larila</h1>
    </section>

    <section id="tralalero" style="background-image: url('https://i.ytimg.com/vi/y11L5z9vTOo/maxresdefault.jpg')">
        <div class="overlay"></div>
        <h1>Tralalero Dicen Tralala</h1>
    </section>

    <section id="burbaloni" style="background-image: url('https://th.bing.com/th/id/OIP.mftMpYfAS2VHwIfvdTU2GgFWFV?rs=1&pid=ImgDetMain')">
        <div class="overlay"></div>
        <h1>Burbaloni Luliloli</h1>
    </section>

    <section id="trulimero" style="background-image: url('https://i.pinimg.com/originals/2b/58/71/2b58714a3b04ccfb5ee012ac70416356.jpg')">
        <div class="overlay"></div>
        <h1>Trulimero Trulicina</h1>
    </section>

    <!-- Bootstrap JS Bundle CDN (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

