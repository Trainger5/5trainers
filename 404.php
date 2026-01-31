<?php http_response_code(404); ?>

<style>
      body {
        font-family: Arial, sans-serif;
        text-align: center;
        background: #f9f9f9;
        color: #333;
      }
      h2 {
        font-size: 2.5em;
        margin: 60px 0 20px;
        color: black;
        font-weight: bold;
        color: #000000;
      }
      p {
        font-size: 1.2em;
        margin-bottom: 20px;
        text-align: center;
        color: #0f79be;
      }
      a {
        color: #0f79be;
        text-decoration: none;
        font-weight: bold;
      }
      a:hover {
        text-decoration: underline;
      }
      .slide-text h2 {
        font-size: 57px;
      }
      .btnbtn{
        background-color: #0f79be;
    border-radius: 3px;
    padding: 0px 20px;
    /* height: 60px; */
    border: none;
    color: white;
    font-weight: 600;
    font-size: 17px;
    margin: 0px 15px;
    padding: 12px 30px;
      }
        .btnbtn:hover{
   text-decoration: none;
      }

</style>

    <section>
        <div class="custom-container width80 text-center" style="padding:100px 20px; margin-top:100px;">
            <img id="imgError" src="assets/image/error404.png" alt="404">
            <h2>Page Not Found</h2>
            <p class="text-center">We’re sorry, the page you requested could not be found</p><br>
            <a class="btnbtn" href="index.php">Back to Home</a>
           
        </div>
    </section>

