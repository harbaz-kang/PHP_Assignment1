<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Netflix Sign-In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="custom-style.css">
</head>
<body>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="netflixlogo.png" alt="Netflix logo" height="30"></a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="viewdata.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adddata.php">SIGN IN</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<main>
    <div class="container mt-5">
        <h1>Data Retrieved</h1>
        <?php include 'savedata.php'?>
    </div>
</main>
<footer class="bg-dark text-light py-3">
    <div class="container text-center">
        <p>2024 Netflix. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
