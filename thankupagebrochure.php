<?php
$meta_title = "Thank You";
$meta_description = "";
$canonical_url = "https://www.5trainers.com/thanku-page.php";
?>
<?php include('header.php'); ?>

  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: "Segoe UI", sans-serif;
      /* display: flex; */
      align-items: center;
      justify-content: center;
      height: 100vh;
      background: #0f79be;
      text-align: -webkit-center;
      
    }

    .thankyou-box {
      background: #fff;
      padding: 40px 50px;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      text-align: center;
      max-width: 450px;
      animation: fadeIn 1s ease-in-out;
  
    }

    .thankyou-box h1 {
      font-size: 2.5rem;
      color: #0f79be;
      margin-bottom: 15px;
    }

    .thankyou-box p {
      font-size: 1.1rem;
      color: #555;
      margin-bottom: 25px;
    }

    .checkmark {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      border: 5px solid #0f79be;
      position: relative;
      margin: 0 auto 20px;
    }

    .checkmark::after {
      content: "";
      position: absolute;
      left: 27px;
      top: 14px;
      width: 20px;
      height: 40px;
      border-right: 5px solid #0f79be;
      border-bottom: 5px solid #0f79be;
      transform: rotate(45deg);
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>

  <div class="thankyou-box">
    <div class="checkmark"></div>
    <h1>Thank You!</h1>
    <p>Your brochure will download automatically.</p>
    <a href="index.php" style="
      display:inline-block; margin-top:20px; padding:12px 25px; 
      background:#0f79be; color:white; border-radius:30px; 
      text-decoration:none;">Back to Home</a>
  </div>

  <!-- AUTO PDF DOWNLOAD SCRIPT -->
  <?php if (isset($_GET['pdf']) && $_GET['pdf'] === 'true'): ?>
    <script>
      window.onload = function () {
        const link = document.createElement('a');
        link.href = "assets/uploads/5trainers_course.pdf";
        link.download = "assets/uploads/5trainers_course.pdf";
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
      };
    </script>
  <?php endif; ?>


<?php include('footer.php'); ?>
</body>


</html>