<?php
  // Reuse footer/header asset prefix if available so paths work from / and /blog/.
  $chatbotAssetPrefix = '';
  if (isset($footerAssetPrefix)) {
    $chatbotAssetPrefix = $footerAssetPrefix;
  } elseif (isset($assetPrefix)) {
    $chatbotAssetPrefix = $assetPrefix;
  }
?>

<!-- 5Trainers Chatbot Widget -->
<div class="vt-chatbot" aria-live="polite">
  <!-- Chat bubble toggle -->
  <button class="vt-chatbot-toggle" aria-label="Chat with 5Trainers">
    <i class="fa-solid fa-comments"></i>
  </button>

  <!-- Chat window -->
  <div class="vt-chatbot-window">
    <div class="vt-chatbot-header">
      <div class="vt-chatbot-title">5Trainers Assistant</div>
      <button class="vt-chatbot-close" aria-label="Close Chat">&times;</button>
    </div>

    <div class="vt-chatbot-body">
      <div class="vt-chatbot-message vt-chatbot-message-bot">
        Hi! I’m your 5Trainers course advisor.<br />
        Choose a topic below or type your question.
      </div>

      <div class="vt-chatbot-quick">
        <button class="vt-chatbot-quick-btn" data-intent="digital marketing">
          Digital Marketing Course
        </button>
        <button class="vt-chatbot-quick-btn" data-intent="data science">
          Data Science / Analytics
        </button>
        <button class="vt-chatbot-quick-btn" data-intent="full stack">
          Full Stack Development
        </button>
        <button class="vt-chatbot-quick-btn" data-intent="cyber security">
          Cyber Security / Ethical Hacking
        </button>
        <button class="vt-chatbot-quick-btn" data-intent="counseling">
          Talk to a Counselor
        </button>
      </div>
    </div>

    <div class="vt-chatbot-footer">
      <input
        type="text"
        class="vt-chatbot-input"
        placeholder="Type your question about courses..."
      />
      <button class="vt-chatbot-send" aria-label="Send message">Send</button>
    </div>

    <div class="vt-chatbot-note">
      For quick help, you can also call or WhatsApp using the floating icons.
    </div>
  </div>
</div>

<!-- Chatbot Script -->
<script>
  (function () {
    const chatbot = document.querySelector(".vt-chatbot");
    if (!chatbot) return;

    const toggleBtn = chatbot.querySelector(".vt-chatbot-toggle");
    const windowEl = chatbot.querySelector(".vt-chatbot-window");
    const closeBtn = chatbot.querySelector(".vt-chatbot-close");
    const quickBtns = chatbot.querySelectorAll(".vt-chatbot-quick-btn");
    const inputEl = chatbot.querySelector(".vt-chatbot-input");
    const sendBtn = chatbot.querySelector(".vt-chatbot-send");
    const bodyEl = chatbot.querySelector(".vt-chatbot-body");

    function appendMessage(text, from = "user") {
      const msg = document.createElement("div");
      msg.className =
        "vt-chatbot-message " +
        (from === "bot" ? "vt-chatbot-message-bot" : "vt-chatbot-message-user");
      msg.innerHTML = text;
      bodyEl.appendChild(msg);
      bodyEl.scrollTop = bodyEl.scrollHeight;
    }

    function botReply(intentOrText) {
      let reply = "";
      const text = (intentOrText || "").toLowerCase();

      if (text.includes("digital")) {
        reply =
          "Our Digital Marketing Course covers SEO, Google Ads, Social Media Marketing, Content Marketing and more with live projects and 100% placement assistance. Share your highest qualification and whether you prefer weekday or weekend batches.";
      } else if (text.includes("data")) {
        reply =
          "Our Data Science / Analytics programs focus on Python, statistics, machine learning, dashboards and real-time projects. Tell us if you are a beginner or already from a technical background.";
      } else if (text.includes("full stack") || text.includes("web")) {
        reply =
          "Our Full Stack Development training includes HTML, CSS, JavaScript, front-end frameworks and back-end with databases, plus deployment and portfolio projects. Let us know if you are looking for online or classroom training.";
      } else if (text.includes("cyber") || text.includes("ethical")) {
        reply =
          "Our Cyber Security / Ethical Hacking course focuses on network security, penetration testing, tools and practical labs. Please share your current education so we can suggest the best track.";
      } else if (
        text.includes("counsel") ||
        text.includes("counseling") ||
        text.includes("counselling") ||
        text.includes("talk") ||
        text.includes("call")
      ) {
        reply =
          "We can connect you with a counselor for personalized guidance. Please share your name, email and phone number, or call us directly at +91 8283840606.";
      } else {
        reply =
          "Thanks for your message! Our team will review your query and contact you shortly. For urgent questions, you can call or WhatsApp us at +91 8283840606.";
      }

      appendMessage(reply, "bot");
    }

    function handleSend() {
      const text = (inputEl.value || "").trim();
      if (!text) return;
      appendMessage(text, "user");
      inputEl.value = "";
      setTimeout(() => botReply(text), 400);
    }

    function openChat() {
      windowEl.classList.add("vt-chatbot-open");
    }

    function closeChat() {
      windowEl.classList.remove("vt-chatbot-open");
    }

    toggleBtn.addEventListener("click", () => {
      const isOpen = windowEl.classList.contains("vt-chatbot-open");
      if (isOpen) {
        closeChat();
      } else {
        openChat();
      }
    });

    closeBtn.addEventListener("click", () => {
      closeChat();
    });

    sendBtn.addEventListener("click", handleSend);

    inputEl.addEventListener("keyup", (e) => {
      if (e.key === "Enter") handleSend();
    });

    quickBtns.forEach((btn) => {
      btn.addEventListener("click", () => {
        const intent = btn.getAttribute("data-intent") || "";
        appendMessage(btn.innerText, "user");
        setTimeout(() => botReply(intent), 300);
      });
    });

    // Auto-open chat window shortly after page load
    window.addEventListener("load", () => {
      setTimeout(() => {
        openChat();
      }, 2000);
    });
  })();
</script>

