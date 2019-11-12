<?php $data = mysqli_fetch_assoc($result); ?>
    <section class="container_listing">
        <div class="container_imgs">
         <img src=<?php echo $data["$columnDisplay[2]"]?>>
        </div>
        <div class="container_desc">
            <div class="sticky">
                <h1><?php echo $data["$columnDisplay[0]"]?></h1>
                <h2><?php echo $data["$columnDisplay[3]"]?></h2>
                <a class="button_desc" onclick="showOverview()">
                    <h3>▸ Overview</h3>
                </a>
                <div id="overview">
                    <p><?php echo $data["$columnDisplay[5]"]?></p>
                </div>
                <a class="button_desc" onclick="showMoreInfo()">
                    <h3>▸ More Information</h3>
                </a>
                <div id="moreInfo">
                <iframe src="<?php echo $data["$columnDisplay[6]"]?>" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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