<script>
  async function sendPushNotification() {
    try {
      const response = await fetch('https://pushads123.com/api/customer/notify', {
        method: 'POST',
        headers: {
          'Authorization': '02d486fe-1adf-45e9-9198-e407799a9cbf', // Your API key
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          title: 'Hello World!',
          body: 'Your first push notification',
          url: 'https://5trainers.com',
          icon: 'https://institute.5trainers.com/assets/image/favicon32.png'
        })
      });

      const result = await response.json();
      console.log('Notification sent:', result);
    } catch (error) {
      console.error('Error sending notification:', error);
    }
  }

  // Call it automatically on page load (only once)
  document.addEventListener('DOMContentLoaded', () => {
    if (!localStorage.getItem('pushSent')) {
      sendPushNotification();
      localStorage.setItem('pushSent', 'true'); // Prevents sending again
    }
  });
</script>