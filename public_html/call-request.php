<!-- Trigger Button -->
<div class="requestCall">
  <a href="javascript:void(0)" onclick="openPopup()">Call Request</a>
</div>

<!-- Popup Form -->
<div id="popupForm" class="popup">
  <div class="popup-content">
    <span class="close" onclick="closePopup()">&times;</span>
    <?php include('course-slider-form.php'); ?>
  </div>