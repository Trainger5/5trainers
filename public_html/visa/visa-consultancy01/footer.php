<style>
    /* Floating Call & WhatsApp buttons – 5Trainers Visa Consultancy */
.floating-contact {
  position: fixed;
  bottom: 18px;
  left: 18px;
  display: flex;
  flex-direction: column;
  gap: 10px;
  z-index: 9999;
}

/* Base pill buttons */
.floating-btn {
  width: 52px;
  height: 52px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  text-decoration: none;
  box-shadow: 0 14px 35px rgba(15, 23, 42, 0.45);
  transition: transform 0.18s ease, box-shadow 0.18s ease, opacity 0.18s ease;
  opacity: 0.96;
}

/* Call button – adjust to your brand primary color */
.floating-btn-call {
  background: #1d3557; /* change this to your primary theme color if needed */
  color: #ffffff;
}

/* WhatsApp button – classic WhatsApp green */
.floating-btn-whatsapp {
  background: #25d366;
  color: #ffffff;
}

/* Icon inside the bubble */
.floating-icon {
  font-size: 22px;
  line-height: 1;
}

/* Hover states */
.floating-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 18px 45px rgba(15, 23, 42, 0.65);
  opacity: 1;
}

/* Slightly smaller on very small screens */
@media (max-width: 480px) {
  .floating-btn {
    width: 46px;
    height: 46px;
  }

  .floating-icon {
    font-size: 20px;
  }

  .floating-contact {
    bottom: 14px;
    right: 14px;
  }
}
.floating-btn i {
  font-size: 22px;
}

</style>

<footer>

    <div class="container">
        <div class="footer-columns">
            <div class="footer-brand-block">
                <div class="footer-logo">
                    <!--<img src="assets/img/logo-main.png" alt="5Trainers Visa Consultancy" />-->
                    <img src="assets/img/5trainers-logo.png" alt="5Trainers Visa Consultancy" />
                </div>
                <p class="footer-description" style="color:#3f51b5">
                    5Trainers Visa Consultancy helps students and families with IELTS &amp; PTE coaching, study visas and travel guidance for top destinations like Canada, Australia, the UK, the USA and more.
                </p>
                <div class="footer-location" style="color:#3f51b5; margin-top:20px">
                                <i class="fas fa-location-dot" style="font-size:20px; margin-right:10px; color:#3f51b5"></i>
                                <span>Victory Tower Phase 8B, Industrial Area, Sector 74, Mohali, Punjab 140308</span>
                            </div>
                <p style="margin-top:20px"><spna><i class="fa-solid fa-phone" style="font-size:20px; margin-right:10px; color:#3f51b5"></i></spna><a class="d-block" href="tel:+918283840606" style=" color:#3f51b5;text-decoration: none;">+91 8283840606</a></p>
                <p style="margin-top:20px"><spna><i class="fa-solid fa-envelope" style="font-size:20px; margin-right:10px; color:#3f51b5"></i></spna><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=info@5trainers.com" target="_blank"  style=" color:#3f51b5; text-decoration: none;">info@5trainers.com</a></p>
            </div>

            <div class="footer-links-block" style="padding-top:15px;">
                <h4>Useful Links</h4>
                <ul class="footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="registration.php">Registration</a></li>
                    <li><a href="countries.php">Countries</a></li>
                    <li><a href="blog.php">Blog &amp; Results</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="student-login.php">Student Login</a></li>
                </ul>
            </div>

            <div class="footer-links-block" style="padding-top:15px;">
                <h4>Services</h4>
                <ul class="footer-links">
                    <li><a href="services-ielts.php">IELTS (Academic/General)</a></li>
                    <li><a href="services-pte.php">Pearson Test of English</a></li>
                    <li><a href="services-general-english.php">General English</a></li>
                    <li><a href="services-study-visa.php">Study Visa</a></li>
                    <li><a href="services-tourist-visa.php">Tourist Visa</a></li>
                    <li><a href="services-spouse-visa.php">Spouse Visa</a></li>
                </ul>
            </div>
        </div>
        <!---->
            <div style="display:flex; justify-content:center; margin-top:40px">
            <a href="https://www.facebook.com/profile.php?id=61576550454616" target="_blank" style="margin:0px 20px; font-size: 25px; color: #3f51b5;" ><span><i class="fa-brands fa-square-facebook"></i></span></a>
            <a href="https://twitter.com/5trainers"  target="_blank" style="margin:0px 20px; font-size: 25px;    color: #3f51b5;" ><span><i class="fa-brands fa-square-twitter"></i></span></a>
            <a href="https://www.linkedin.com/company/5trainer"  target="_blank" style="margin:0px 20px; font-size: 25px; color: #3f51b5;" ><span><i class="fa-brands fa-linkedin"></i></span></a>
            <a href="https://www.instagram.com/5_trainers/"  target="_blank" style="margin:0px 20px; font-size: 25px; color: #3f51b5;" ><span><i class="fa-brands fa-square-instagram"></i></span></a>
            <a href="https://www.youtube.com/@5Trainers"  target="_blank" style="margin:0px 20px; font-size: 25px; color: #3f51b5;" ><span><i class="fa-brands fa-square-youtube"></i></span></a>
          </div>

        <p class="footer-text">
            © 2025 5Trainers Visa Consultancy – Best IELTS, Immigration, P.T.E., Visa Centre in Mohali, Punjab (India).
        </p>
        <p class="footer-small">
            Designed with a modern, responsive layout to serve students and families planning to study or settle abroad.
        </p>
        <div style="text-align:center; margin-top:40px; ">
            <a class="swipe-up" href="#top" style="padding: 5px 10px;">
            <!--<span>Back to top</span>-->
            <i class="fas fa-arrow-up" style="font-size:35px"></i>
        </a>
        </div>
        <!--<a class="swipe-up" href="#top">-->
        <!--    <span>Back to top</span>-->
        <!--    <i class="fas fa-arrow-up"></i>-->
        <!--</a>-->
    </div>

</footer>

<!-- Floating Call & WhatsApp Buttons -->
<div class="floating-contact">
<a href="tel:+911234567890" class="floating-btn floating-btn-call" aria-label="Call Us">
  <i class="fa fa-phone"></i>
</a>
<a href="https://wa.me/911234567890?text=Hi%20I%27m%20interested%20in%20Visa%20Consultancy%20services"
   class="floating-btn floating-btn-whatsapp"
   target="_blank"
   rel="noopener"
   aria-label="Chat on WhatsApp">
  <i class="fa-brands fa-whatsapp"></i>
</a>
</div>
<!--floating icons code ends-->

<script src="assets/script.js"></script>
</body>
</html>
