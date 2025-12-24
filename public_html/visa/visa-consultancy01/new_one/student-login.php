<?php
$pageTitle = 'Student Login | 5Trainers Visa Consultancy';
$pageDescription = 'Student login area for 5Trainers Visa Consultancy – access updates, documents and counselling notes.';
$currentPage = 'login';
include 'header.php';
?>

<div class="student-content">
    <div class="container">
    <div class="hero-layout">
        <div class="hero-text">
            <div class="title-section" data-animate>
                <h1 class="main-title">Student Login</h1>
                <p class="hero-subtitle">
                    Secure access for registered students to track applications and view important updates.
                </p>
            </div>
        </div>
        <!-- <div class="hero-visual" data-animate>
            <div class="hero-visual-card">
                <img src="assets/img/Visa Consultancy.png" alt="Visa consultancy dashboard illustration">
                <div class="hero-tag-floating">
                    <i class="fas fa-lock"></i>
                    <span>Secure area</span>
                </div>
                <div class="hero-stat">
                    <span>Existing students</span>
                    <strong>Login here</strong>
                </div>
            </div>
        </div> -->
    </div>
    </div>
</div>

<section class="content-section alt">
    <div class="container">
        <div class="contact-card" data-animate>
            <h3>Login Panel</h3>
            <form>
                <label for="login-email">Email Address</label>
                <input type="email" id="login-email" name="login-email" placeholder="you@example.com">

                <label for="login-password">Password</label>
                <input type="password" id="login-password" name="login-password" placeholder="Enter your password">

                <button type="submit" class="auth-btn create-account-btn">
                    <i class="fas fa-sign-in-alt"></i>
                    Login
                </button>
            </form>
            <p class="footer-small" style="margin-top:8px;">
                This is a front-end template. Integrate with your authentication system or LMS for real logins.
            </p>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
