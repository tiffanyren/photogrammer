<!DOCTYPE html>
<html lang="en">

<head>

<?php include("basicheader.php")?>

    <!-- CSS
  ================================================== -->
    <link href="css/listing.css" rel="stylesheet">

    <!-- JS
	================================================== -->
    <script src="js/listing.js"></script>

</head>

<?php
require("db.php"); //connection to db code



?>

<body>

<?php include("headerbar.php"); ?>

    <!-- Primary Page Layout
	================================================== -->
    <!-- all content goes in here -->

    <section class="container_listing">
        <div class="container_imgs">
            <img src="img/kyle-ryan-nIujk826wE0-unsplash.jpg" alt="cambie street bridge 1">
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.23434921963!2d-123.11694808493088!3d49.27195647933017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673d84fa50ce5%3A0x8c08cde62bb386e1!2sCambie%20Bridge!5e0!3m2!1sen!2sca!4v1573248078400!5m2!1sen!2sca" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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