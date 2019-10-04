<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <title>The Instagrammer</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/listing.css" rel="stylesheet">

    <!-- Favicons
	================================================== -->
    <link rel="shortcut icon" href="">

    <!-- JS
	================================================== -->
    <script src="js/listing.js"></script>

</head>

<body>

    <section class="container_nav">
        <div class="nav_left">
            <a href="index.php" id="site-title">The Photogrammer</a>
        </div>
        <div class="nav_right">
            <nav>
                <a href="browse.php">Browse</a>
                <a href="login.php">My Account</a>
            </nav>
        </div>
    </section>

    <!-- Primary Page Layout
	================================================== -->
    <!-- all content goes in here -->

    <section class="container_listing">
        <div class="container_imgs">
            <img src="img/kyle-ryan-nIujk826wE0-unsplash.jpg" alt="cambie street bridge 1">
            <img src="img/nathan-shurr-lJhWhFnGHK8-unsplash.jpg" alt="cambie street bridge 2">
        </div>
        <div class="container_desc">
            <div class="sticky">
                <h1>Cambie Street Bridge</h1>
                <h2>Vancouver, BC</h2>
                <a class="button_desc" onclick="showOverview()">
                    <h3>▸ Overview</h3>
                </a>
                <div id="overview">
                    <p>Right over False Creek, the Cambie Street Bridge provides a beautiful view of downtown, Science
                        World, Fairview, and Burrard Street Bridge.</p>
                </div>
                <a class="button_desc" onclick="showMoreInfo()">
                    <h3>▸ More Information</h3>
                </a>
                <div id="moreInfo">
                    <li>Location</li>
                    <li>Large Pedestrian Walking Area</li>
                    <li>Biking Lane</li>
                </div>
            </div>
        </div>
        <div class="container_review">
            <h2>Review 1 of 1</h2>
            <h3>Great angles to take photos</h3>
            <h3>★★★★★</h3>
            <p>I loved taking photos against the buildings and sunset here! It was very beautiful and I was able to
                catch the reflections of the buildings, which added a new source of light into the photos.</p>
            <div class="container_helpful">
                <h4>Was this review helpful?</h4>
                <button type="submit">Yes</button>
                <button type="reset">No</button>
            </div>
        </div>
    </section>


</body>

</html>