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
            <div class="d-flex align-items-center">
                <form class="d-flex col" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav col">
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#products">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button">
                        <img src="images/Hamburger-Menu-1--Streamline-Core-Remix.svg.png" width="30px" height="30px" alt="" srcset="">
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.php">Profile</a>
                        <a class="dropdown-item" href="education.php">Education</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div id="profile" class="container-fluid">
        <div class="d-flex flex-row justify-content-center py-4">
            <div class="">
                <div class="d-flex flex-col">
                    <img width="70px" height="70px" src="images/material-symbols_face.png" alt="" srcset="">
                    <div class="me-5 pe-5">
                        <p class="text-light">John Doe</p>
                        <div class="bg-green">penjual</div>
                        <p class="text-light">Penjual berbagai makanan mulai dari dessert, fast food hingga fruits yang sehat tetapi juga nikmat</p>
                    </div>
                </div>
            </div>
            <div class="">
                <div>
                    <button class="btn-1 rounded">Settings</button>
                </div>
                <div class="mt-4">
                    <button class="btn-2 shadow rounded">Edit Profile</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="d-flex flex-row justify-content-center py-4">
            <div class="">
                <div class="d-flex flex-col">
                    <img width="200px" height="200px" style="object-fit: cover; margin:20px" src="images/person-1.png" alt="" srcset="">
                    <div class="me-5 pe-5">
                        <h3>About Me</h3>
                        <div class="ps-4">
                            <p><strong>Name:</strong>John Doe</p>
                            <p><strong>Gender:</strong>Laki-laki</p>
                            <p><strong>Reward:</strong>2000 pts</p>
                            <p><strong>Mitra:</strong>Rumah Makan XX</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ms-5 pe-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.0858429058563!2d144.96315791531716!3d-37.81362797975181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d43f1c79d81%3A0x2a4a3ff9caa2aa5a!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1591166819876!5m2!1sen!2sau" width="600" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe>
            </div>
        </div>
        <hr>
        <div class="row gap-3 m-5">
            <div class="col d-flex p-2 rounded" style="border: solid 1px #FFCC72;">
                <div>
                    <img width="100px" height="100px" src="images/cake-54 2.png" alt="" srcset="">
                </div>
                <div>
                    <h3>DESERT</h3>
                    <P>Makanan dengan kelembutan dan kemanisan </P>
                    <span>Delicious</span>
                    <span>Sweet</span>
                    <div>
                        <div></div>
                        John Doe
                    </div>
                </div>
            </div>
            <div class="col d-flex p-2 rounded" style="border: solid 1px #FFCC72;">
                <div>
                    <img width="100px" height="100px" src="images/cake-54 2.png" alt="" srcset="">
                </div>
                <div>
                    <h3>FAST FOOD</h3>
                    <P>Makanan yang mengenyangkan dan cepat disajikan</P>
                    <span>Tasty</span>
                    <span>Flavour</span>
                    <div>
                        <div></div>
                        John Doe
                    </div>
                </div>
            </div>
            <div class="col d-flex p-2 rounded" style="border: solid 1px #FFCC72;">
                <div>
                    <img width="100px" height="100px" src="images/cake-54 2.png" alt="" srcset="">
                </div>
                <div>
                    <h3>FRUITS</h3>
                    <P>Makanan yang sehat dan enak </P>
                    <span>Healty</span>
                    <span>Comfortable</span>
                    <div>
                        <div></div>
                        John Doe
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>