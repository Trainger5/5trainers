<?php http_response_code(404); ?>
<?php
$meta_title = "Page Not Found | 5trainers";
$meta_description = "";
$canonical_url = "https://www.5trainers.com/404.php";
?>
    <?php include('header.php'); ?>

    <section>
        <div class="custom-container width80 text-center" style="padding:100px 20px; margin-top:100px;">
            <img id="imgError" src="assets/image/error404.png" alt="404">
            <h2>Page Not Found</h2>
            <p class="text-center">We’re sorry, the page you requested could not be found</p><br>
            <li class="brochure"><a href="/">Back to Home</a></li>
           
        </div>
    </section>

    <?php include('footer.php'); ?>
