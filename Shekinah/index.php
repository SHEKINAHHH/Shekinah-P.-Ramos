<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <img src="1332281.jpeg" alt="" class="hatdog">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <a href="g" class="btn btn-hello">Hello!</a>
            </div>
        </div>
    </nav>

    <!-- BSIT 4-A -->
    <div class="banner d-flex align-items-center" id="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Lorem, ipsum dolor sit amet consectetur adipisicing.</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore ab vero deleniti saepe unde
                        ducimus et aliquam fugit quidem perspiciatis.</p>
                    <a href="g" class="btn btn-hello">Hello!</a>
                </div>
            </div>
        </div>
    </div>

    <?php include 'about.php'; ?>
    
    <?php include 'services.php'; ?>

    <?php include 'reviews.php'; ?>

    <?php include 'faq.php'; ?>

    <?php include 'footer.php'; ?>


</body>

</html>