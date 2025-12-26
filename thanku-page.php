<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank You</title>
    <link rel="shortcut icon" href="assets/image/favicon32.png">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: "Segoe UI", sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background: #2D849E;
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
      color: #2D849E;
      margin-bottom: 15px;
    }

    .thankyou-box p {
      font-size: 1.1rem;
      color: #555;
      margin-bottom: 25px;
    }

    .thankyou-box a {
      display: inline-block;
      padding: 12px 25px;
      background: #2D849E;
      color: #fff;
      font-size: 1rem;
      border-radius: 30px;
      text-decoration: none;
      transition: 0.3s;
    }

    .thankyou-box a:hover {
      background: #2D849E;
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

    /* Simple checkmark circle */
    .checkmark {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      display: inline-block;
      border: 5px solid #2D849E;
      position: relative;
      margin-bottom: 20px;
    }

    .checkmark::after {
      content: "";
      position: absolute;
      left: 27px;
      top: 14px;
      width: 20px;
      height: 40px;
      border-right: 5px solid #2D849E;
      border-bottom: 5px solid #2D849E;
      transform: rotate(45deg);
    }
  </style>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17301291955"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'AW-17301291955');
  </script>
  <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-K3N4DF4B');</script>
  <!-- End Google Tag Manager -->

</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K3N4DF4B" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="thankyou-box">
    <div class="checkmark"></div>
    <h1>Thank You!</h1>
    <p>Your submission has been received successfully. We’ll get back to you soon.</p>
    <a href="index.php">Go Back Home</a>
  </div>
</body>

</html>