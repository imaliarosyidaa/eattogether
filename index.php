<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar bg-light navbar-expand-sm px-5 py-3 shadow-sm">
        <div class="container-fluid">
            <div><img src="images/logo.png" alt="" srcset=""> Eat Thogether</div>
            <div class="row">
                <ul class="navbar-nav col">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#products">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <form class="d-flex col" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="row container p-5">
        <div class="col-md-6">
            <div id="card" class="card p-5">
                <h2>Welcome Back!</h2>
                <p>Enter your Credentials to access your account</p>
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password">
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember for 30 days</label>
                        </div>
                        <a href="#" class="text-decoration-none">Forgot password?</a>
                    </div>
                    <div class="d-grid">
                        <button type="button" class="btn btn-primary"><a href="home.php" style="text-decoration: none; color: white">Signup</a></button>
                    </div>
                </form>
                <div class="d-grid gap-2 mt-4">
                    <button class="btn btn-outline-danger" type="button">Sign in with Google</button>
                    <button class="btn btn-outline-secondary" type="button">Sign in with Apple</button>
                </div>
                <div class="text-center mt-3">
                    <p>Don't have an account? <a href="signup.php" class="text-decoration-none">Sign up</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img width="600px" height="600px" src="images/eating-salad-12 2.png" alt="" srcset="">
        </div>
    </div>
</body>

</html>