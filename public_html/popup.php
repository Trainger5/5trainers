

  <!-- Popup Container -->
  <div id="popup" class="popup homepopup">
    <div class="popup-content">
      <span class="close-btn" onclick="closePopup()">&times;</span>
      <img src="assets/image/offers/rakhi.jpg" class="img-fluid" alt="">
    </div>
  </div>



  <script>
    // Show popup when page loads
    window.onload = function () {
      document.getElementById("popup").style.display = "flex";
    };

    // Close popup
    function closePopup() {
      document.getElementById("popup").style.display = "none";
    }
  </script>
