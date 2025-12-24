<?php
// Common header include
// Expected variables per page:
// $pageTitle, $pageDescription, $currentPage
//
// Countries list for dropdown
$countriesList = [
    'australia' => 'Australia',
    'canada' => 'Canada',
    'united-kingdom' => 'United Kingdom',
    'new-zealand' => 'New Zealand',
    'united-states' => 'United States',
    'europe'=> 'Europe',
    'singapore' => 'Singapore',
    // 'new-zealand' => 'New Zealand',
    // 'germany' => 'Germany',
    // 'france' => 'France',
    // 'italy' => 'Italy',
    // 'spain' => 'Spain',
    // 'netherlands' => 'Netherlands',
    // 'ireland' => 'Ireland',
    // 'sweden' => 'Sweden',
    // 'norway' => 'Norway',
    // 'denmark' => 'Denmark',
    // 'finland' => 'Finland',
    // 'switzerland' => 'Switzerland',
    // 'austria' => 'Austria',
    // 'belgium' => 'Belgium',
    // 'poland' => 'Poland',
    // 'czech-republic' => 'Czech Republic',
    // 'hungary' => 'Hungary',
    // 'portugal' => 'Portugal',
    // 'greece' => 'Greece',
    // 'luxembourg' => 'Luxembourg',
    // 'malta' => 'Malta',
    // 'singapore' => 'Singapore',
    // 'malaysia' => 'Malaysia',
    // 'japan' => 'Japan',
    // 'south-korea' => 'South Korea',
    // 'uae' => 'United Arab Emirates',
    // 'qatar' => 'Qatar',
    // 'oman' => 'Oman',
    // 'bahrain' => 'Bahrain',
    // 'kuwait' => 'Kuwait',
    // 'south-africa' => 'South Africa',
    // 'mauritius' => 'Mauritius',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : '5Trainers Visa Consultancy | Immigration & Study'; ?></title>
    <meta name="description" content="<?php echo isset($pageDescription) ? htmlspecialchars($pageDescription) : '5Trainers Visa Consultancy – IELTS, Immigration, PTE, Visa, Work Permit & PR Centre in Mohali, Punjab (India).'; ?>">
    <link rel="shortcut icon" href="assets/img/favicon32.png">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="" crossorigin="anonymous">

    <style>
        /* Basic Mobile Responsive */
.main-menu {
    display: flex;
    gap: 20px;
    align-items: center;
}

.nav-toggle {
    display: none;
    background: none;
    border: none;
    font-size: 26px;
    cursor: pointer;
}

/* Dropdown Styling */
.nav-dropdown {
    position: relative;
}

.nav-dropdown .dropdown-menu {
    display: none;
    position: absolute;
    background: #fff;
    padding: 10px 0;
    border: 1px solid #ddd;
    z-index: 999;
    top: 29px;
}

.nav-dropdown:hover .dropdown-menu {
    display: block;
}

/* MOBILE VIEW */
@media (max-width: 992px) {

    .nav-toggle {
        display: block;
    }

    .main-menu {
    display: none;
    flex-direction: column;
    width: 35%;
    background: #fff;
    padding: 20px 0;
    margin-top: 10px;
    position: absolute;
    top: 70px;
    right: 0px;

}

    .main-menu.active {
        display: flex;
    }

    .nav-dropdown .dropdown-menu {
        position: static;
        border: none;
        padding-left: 20px; 
    }

    .nav-dropdown:hover .dropdown-menu {
        display: none;
    }

    .nav-dropdown.open .dropdown-menu {
        display: block;
    }

}
/*loader*/
@keyframes spin3D {
  from {
    transform: rotate3d(.5, .5, .5, 360deg);
  }
  to {
    transform: rotate3d(0deg);
  }
}

.load {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #1d2630;
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 9999;
}

.spinner-box {
  width: 300px;
  height: 300px;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: transparent;
}

.sun {
  width: 35px;
  height: 35px;
  border-radius: 50%;
  background-color: #ffab91;
}

.leo {
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
}

.blue-orbit {
  width: 165px;
  height: 165px;
  border: 2px solid #91daffa5;
  animation: spin3D 3s linear .2s infinite;
}

.green-orbit {
  width: 120px;
  height: 120px;
  border: 2px solid #91ffbfa5;
  animation: spin3D 2s linear 0s infinite;
}

.red-orbit {
  width: 90px;
  height: 90px;
  border: 2px solid #ffca91a5;
  animation: spin3D 1s linear 0s infinite;
}

.white-orbit {
  width: 60px;
  height: 60px;
  border: 2px solid #ffffff;
  animation: spin3D 5s linear 0s infinite;
}

.w1 {
  transform: rotate3D(1, 1, 1, 90deg);
}

.w2 {
  transform: rotate3D(1, 2, .5, 90deg);
}

.w3 {
  transform: rotate3D(.5, 1, 2, 90deg);
}

    </style>
</head>
<body>

<!-- <header id="top">
    <div class="container">
        <div class="top-nav">
            <a href="index.php" class="brand" aria-label="5Trainers Visa Consultancy Home">
                <div class="brand-logo">
                    <img src="assets/img/5trainers-logo.png" alt="5Trainers Visa Consultancy logo">
                </div>
            </a>
            
            <nav class="main-menu">
                <a href="index.php" class="<?php echo (isset($currentPage) && $currentPage === 'home') ? 'active' : ''; ?>">Home</a>
                <a href="about.php" class="<?php echo (isset($currentPage) && $currentPage === 'about') ? 'active' : ''; ?>">About</a>
                <a href="registration.php" class="<?php echo (isset($currentPage) && $currentPage === 'registration') ? 'active' : ''; ?>">Registration</a>

                <div class="nav-dropdown <?php echo (isset($currentPage) && ( $currentPage === 'services' || strpos($currentPage, 'service-') === 0)) ? 'active' : ''; ?>">
                    <a href="services.php" class="dropdown-toggle <?php echo (isset($currentPage) && ( $currentPage === 'services' || strpos($currentPage, 'service-') === 0)) ? 'active' : ''; ?>">
                        Services <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a href="services-ielts.php" class="<?php echo (isset($currentPage) && $currentPage === 'service-ielts') ? 'active' : ''; ?>">IELTS (Academic/General)</a>
                        <a href="services-pte.php" class="<?php echo (isset($currentPage) && $currentPage === 'service-pte') ? 'active' : ''; ?>">Pearson Test of English</a>
                        <a href="services-general-english.php" class="<?php echo (isset($currentPage) && $currentPage === 'service-general-english') ? 'active' : ''; ?>">General English</a>
                        <a href="services-study-visa.php" class="<?php echo (isset($currentPage) && $currentPage === 'service-study-visa') ? 'active' : ''; ?>">Study Visa</a>
                        <a href="services-tourist-visa.php" class="<?php echo (isset($currentPage) && $currentPage === 'service-tourist-visa') ? 'active' : ''; ?>">Tourist Visa</a>
                        <a href="services-spouse-visa.php" class="<?php echo (isset($currentPage) && $currentPage === 'service-spouse-visa') ? 'active' : ''; ?>">Spouse Visa</a>
                    </div>
                </div>

                <div class="nav-dropdown <?php echo (isset($currentPage) && $currentPage === 'countries') ? 'active' : ''; ?>">
                    <a href="countries.php" class="dropdown-toggle">
                        Countries <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu countries-menu">
                        <?php foreach ($countriesList as $slug => $label): ?>
                            <a href="<?php echo 'country-' . $slug . '.php'; ?>"><?php echo htmlspecialchars($label); ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <a href="blog.php" class="<?php echo (isset($currentPage) && $currentPage === 'blog') ? 'active' : ''; ?>">Blog &amp; Results</a>
                <a href="contact.php" class="<?php echo (isset($currentPage) && $currentPage === 'contact') ? 'active' : ''; ?>">Contact</a>
                <a href="student-login.php" class="<?php echo (isset($currentPage) && $currentPage === 'login') ? 'active' : ''; ?>">Student Login</a>
            </nav>

        </div>
</div>
</header> -->
<!--Loader-->
<div class="load" id="loader">
  <div class="spinner-box">
    <div class="blue-orbit leo"></div>
    <div class="green-orbit leo"></div>
    <div class="red-orbit leo"></div>
    <div class="white-orbit w1 leo"></div>
    <div class="white-orbit w2 leo"></div>
    <div class="white-orbit w3 leo"></div>
  </div>
</div>

<header id="top"  id="content">
    <div class="container">
        <div class="top-nav">

            <!-- Logo -->
            <a href="index.php" class="brand" aria-label="5Trainers Visa Consultancy Home">
                <div class="brand-logo">
                    <img src="assets/img/5trainers-logo.png" alt="5Trainers Visa Consultancy logo">
                </div>
            </a>

            <!-- Mobile Toggle Button -->
            <button class="nav-toggle" aria-label="Toggle Navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Main Navigation -->
            <nav class="main-menu">

                <a href="index.php" class="<?php echo ($currentPage === 'home') ? 'active' : ''; ?>">Home</a>
                <a href="about.php" class="<?php echo ($currentPage === 'about') ? 'active' : ''; ?>">About</a>
                <a href="registration.php" class="<?php echo ($currentPage === 'registration') ? 'active' : ''; ?>">Registration</a>

                <!-- Services Dropdown -->
                <div class="nav-dropdown <?php echo (strpos($currentPage,'service')===0 || $currentPage==='services') ? 'active' : ''; ?>">
                    <a href="services.php" class="dropdown-toggle">
                        Services <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a href="services-ielts.php" class="<?php echo ($currentPage === 'service-ielts') ? 'active' : ''; ?>">IELTS (Academic/General)</a>
                        <a href="services-pte.php" class="<?php echo ($currentPage === 'service-pte') ? 'active' : ''; ?>">Pearson Test of English</a>
                        <a href="services-general-english.php" class="<?php echo ($currentPage === 'service-general-english') ? 'active' : ''; ?>">General English</a>
                        <a href="services-study-visa.php" class="<?php echo ($currentPage === 'service-study-visa') ? 'active' : ''; ?>">Study Visa</a>
                        <a href="services-tourist-visa.php" class="<?php echo ($currentPage === 'service-tourist-visa') ? 'active' : ''; ?>">Tourist Visa</a>
                        <a href="services-spouse-visa.php" class="<?php echo ($currentPage === 'service-spouse') ? 'active' : ''; ?>">Spouse Visa</a>
                    </div>
                </div>

                <!-- Countries Dropdown -->
                <div class="nav-dropdown">
                    <a href="countries.php" class="dropdown-toggle">
                        Countries <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu countries-menu">
                        <?php foreach ($countriesList as $slug => $label): ?>
                            <a href="<?php echo 'country-'.$slug.'.php'; ?>">
                                <?php echo htmlspecialchars($label); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <a href="blog.php" class="<?php echo ($currentPage === 'blog') ? 'active' : ''; ?>">Blog &amp; Results</a>
                <a href="contact.php" class="<?php echo ($currentPage === 'contact') ? 'active' : ''; ?>">Contact</a>
                <a href="student-login.php" class="<?php echo ($currentPage === 'login') ? 'active' : ''; ?>">Student Login</a>
            </nav>
        </div>
    </div>
</header>

<script>
document.querySelector('.nav-toggle').addEventListener('click', function () {
    document.querySelector('.main-menu').classList.toggle('active');
});

// Mobile dropdowns
document.querySelectorAll('.nav-dropdown .dropdown-toggle').forEach(toggle => {
    toggle.addEventListener('click', function (e) {
        if (window.innerWidth <= 900) {
            e.preventDefault();
            this.parentElement.classList.toggle('open');
        }
    });
});

window.onload = function () {
  setTimeout(() => {
    document.getElementById("loader").style.display = "none";
    document.getElementById("content").style.display = "block";
  }, 1000); // 2000ms = 2 seconds
};
</script>


</body>
</html>