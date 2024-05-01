<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="../Data/Untitled (1).png">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museum Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
    </style>
</head>
<body>
    <header class="bg-dark text-white py-4">
        <div class="container">
            <h1 class="mb-0">Helwan welcomes u :3</h1>
            <nav>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="../Views/Events.html" class="text-white">Exhibitions & Events</a></li>
                    <li class="list-inline-item"><a href="#" class="text-white">Collection</a></li>
                    <li class="list-inline-item"><a href="#" class="text-white">Learn</a></li>
                    <li class="list-inline-item"><a href="#" class="text-white">Membership</a></li>
                    <li class="list-inline-item"><a href="#" class="text-white">Facilities</a></li>
                    <li class="list-inline-item"><a href="UserProfile.php" class="text-white">User Profile</a></li>
                    <li class="list-inline-item"><a href="Login.html" class="text-white">Login</a></li>
                    <li class="list-inline-item"><a href="#" class="text-white">Sign out</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="py-4">
        <div class="container">
            <h2 class="text-center">Welcome to Helwan Museum</h2>
            <h4 class="text-center">Experience cultures across the globe, from the dawn of human history to the present</h4>
            <a href="../Views/Visit Book.html" class="btn btn-primary btn-lg d-block mx-auto mt-4">Plan Your Visit</a>
        </div>
    </section>
    <section class="py-4 bg-light">
        <div class="container">
            <h3>Discover two million years of human history and culture</h3>
            <p>Opening hours:</p>
            <?php
                require '../Models/Museum.php';
                $newMuseum = new Museum();
                $newMuseum->getTime();
            ?>
            <br><br><br>
            <p>Current status:</p>
            <?php
                $newMuseum = new Museum();
                $newMuseum->getStatus();
            ?>
        </div>
    </section>
    <section class="py-4">
        <div class="container">
            <h3>Discover our Collection <a href="#" class="btn btn-outline-primary">here</a></h3>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <img src="../Data/0bcfa379-776f-4405-81b7-3f8e969ae931.jpg" class="img-fluid" alt="Image 1">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="../Data/0bcfa379-776f-4405-81b7-3f8e969ae931.jpg" class="img-fluid" alt="Image 2">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="../Data/0bcfa379-776f-4405-81b7-3f8e969ae931.jpg" class="img-fluid" alt="Image 3">
                </div>
            </div>
        </div>
    </section>
    <section class="py-4 bg-light">
        <div class="container">
            <h3>Featured Exhibitions</h3>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="../Data/1127958.jpg" class="card-img-top" alt="Exhibition Image">
                        <div class="card-body">
                            <h5 class="card-title">Greek civilization</h5>
                            <p class="card-text">Dive into ancient Greece's captivating mythology and history.
                                Explore heroes and iconic tales like Zeus and Hercules. Immerse yourself in art
                                , artifacts, and the spirit of the Acropolis and Olympic Games. Experience the timeless allure of this legendary civilization.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="../Data/625824.jpg" class="card-img-top" alt="Exhibition Image">
                        <div class="card-body">
                            <h5 class="card-title">Ancient Egyptian civilization</h5>
                            <p class="card-text">Journey to ancient Egypt and discover the mystique of the Pharaohs.
                                Marvel at the grand pyramids, temples, and treasures like those of Tutankhamun.
                                Delve into mummification rituals, hieroglyphs, and the enduring legacy of a civilization that continues to fascinate.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-4">
        <div class="container">
            <h3>Upcoming Events</h3>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">Event 1</a>
                <a href="#" class="list-group-item list-group-item-action">Event 2</a>
                <a href="#" class="list-group-item list-group-item-action">Event 3</a>
            </div>
        </div>
    </section>
    <section class="py-4">
        <div class="container">
            <h3>Get Involved</h3>
            <p>Information about how visitors can get involved with the museum, such as volunteering or membership</p>
            <a href="#" class="btn btn-primary">Learn More</a>
        </div>
    </section>
        <section class="py-4">
        <ul>
            <li><a href="#">About us</a></li>
            <li><a href="ContactUs.html">Contact us</a></li>
            <li><a href="MuseumMap.html">Muesum map</a></li>
            <li><a href="#">Hire a Guide</a></li>
        </ul>
    </section>
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <p class="mb-0">&copy; 2024 Helwan Museum All rights reserved.</p>
        </div>
    </footer>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
