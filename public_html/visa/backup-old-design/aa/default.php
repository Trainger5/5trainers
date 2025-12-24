<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5Trainers Visa Consultancy- Study & Tourist Visa Experts</title>
    <!-- Load Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Load Lucide Icons for aesthetic vectors -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- Custom Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-blue': '#1a73e8', // A professional, bright blue
                        'secondary-cyan': '#00a896', // A nice complementary cyan/teal
                        'neutral-light': '#f7f9fa',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        /* Apply Inter font and smooth scrolling */
        body {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
        }
        /* Custom styles for professional buttons and sections */
        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.06);
        }
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 0, 0, 0.1);
        }
        .cta-button {
            transition: background-color 0.3s ease, transform 0.1s ease;
        }
        .cta-button:hover {
            background-color: #1664c7;
            transform: translateY(-1px);
        }
        /* Style for smooth icon integration */
        .icon-lg {
            width: 3rem;
            height: 3rem;
        }
    </style>
</head>

<body class="bg-neutral-light text-gray-800">

    <!-- Header and Navigation -->
    <header class="sticky top-0 z-50 bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <!-- Logo -->
            <a href="#home" class="text-2xl font-bold text-primary-blue tracking-wider">
                <img src="/logo.png" alt="Visa Experts" class="img-fluid">
                <!--<span class="text-secondary-cyan">Sperrow</span> Overseas-->
            </a>
            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-8 text-gray-600 font-medium">
                <a href="#home" class="hover:text-primary-blue transition duration-150">Home</a>
                <a href="#services" class="hover:text-primary-blue transition duration-150">Services</a>
                <a href="#about" class="hover:text-primary-blue transition duration-150">About Us</a>
                <a href="#contact" class="hover:text-primary-blue transition duration-150">Contact</a>
            </nav>
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden text-gray-600 p-2 rounded-lg hover:bg-gray-100 transition">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
        </div>
        <!-- Mobile Menu (Hidden by default) -->
        <div id="mobile-menu" class="hidden md:hidden bg-white px-4 pb-4">
            <a href="#home" class="block py-2 text-gray-700 hover:bg-neutral-light rounded-md" onclick="closeMenu()">Home</a>
            <a href="#services" class="block py-2 text-gray-700 hover:bg-neutral-light rounded-md" onclick="closeMenu()">Services</a>
            <a href="#about" class="block py-2 text-gray-700 hover:bg-neutral-light rounded-md" onclick="closeMenu()">About Us</a>
            <a href="#contact" class="block py-2 text-gray-700 hover:bg-neutral-light rounded-md" onclick="closeMenu()">Contact</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="bg-white py-16 md:py-24 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 mb-4 leading-tight">
                Your Trusted Path to <span class="text-primary-blue">Global Opportunities</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                Specializing in expert guidance for Study Visas and Tourist Visas. Let 5Trainers Visa Consultancy unlock your next journey abroad.
            </p>
            <a href="#contact" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-full shadow-lg text-white bg-secondary-cyan hover:bg-teal-700 cta-button">
                <i data-lucide="send-horizontal" class="w-5 h-5 mr-2"></i>
                Start Your Consultation Today
            </a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-4">Our Core Visa Services</h2>
            <p class="text-xl text-center text-gray-500 mb-12">Expert advice tailored for your international goals.</p>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Service Card: Study Visa -->
                <div class="service-card bg-white p-8 rounded-xl border border-gray-200">
                    <div class="flex items-center space-x-4 mb-4">
                        <i data-lucide="graduation-cap" class="icon-lg text-primary-blue"></i>
                        <h3 class="text-2xl font-bold text-gray-900">Study Visa Services</h3>
                    </div>
                    <p class="text-gray-600 mb-6">
                        Achieve your academic dreams in top global universities. We handle the complexities of admission and visa filing so you can focus on your future.
                    </p>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <i data-lucide="check-circle" class="w-5 h-5 text-secondary-cyan mr-2 mt-1 flex-shrink-0"></i>
                            <span>University Shortlisting & Application Assistance</span>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check-circle" class="w-5 h-5 text-secondary-cyan mr-2 mt-1 flex-shrink-0"></i>
                            <span>SOP (Statement of Purpose) and Documentation Prep</span>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check-circle" class="w-5 h-5 text-secondary-cyan mr-2 mt-1 flex-shrink-0"></i>
                            <span>Financial Guidance and Interview Preparation</span>
                        </li>
                    </ul>
                    <a href="#contact" class="mt-6 inline-block text-primary-blue font-semibold hover:underline">
                        Get Started with Your Study Visa &rarr;
                    </a>
                </div>

                <!-- Service Card: Tourist Visa -->
                <div class="service-card bg-white p-8 rounded-xl border border-gray-200">
                    <div class="flex items-center space-x-4 mb-4">
                        <i data-lucide="plane" class="icon-lg text-secondary-cyan"></i>
                        <h3 class="text-2xl font-bold text-gray-900">Tourist Visa Services</h3>
                    </div>
                    <p class="text-gray-600 mb-6">
                        Explore the world without the visa stress. We provide efficient, reliable processing for short-term visits and leisure travel.
                    </p>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <i data-lucide="check-circle" class="w-5 h-5 text-primary-blue mr-2 mt-1 flex-shrink-0"></i>
                            <span>End-to-End Application Management & Submission</span>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check-circle" class="w-5 h-5 text-primary-blue mr-2 mt-1 flex-shrink-0"></i>
                            <span>Detailed Travel Itinerary and Booking Assistance</span>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check-circle" class="w-5 h-5 text-primary-blue mr-2 mt-1 flex-shrink-0"></i>
                            <span>Sponsor Document Review and Financial Proofing</span>
                        </li>
                    </ul>
                    <a href="#contact" class="mt-6 inline-block text-secondary-cyan font-semibold hover:underline">
                        Plan Your Trip with Confidence &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="bg-neutral-light py-16 md:py-24 border-t border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-4">Why Choose 5Trainers Visa Consultancy?</h2>
            <p class="text-xl text-center text-gray-500 mb-12 max-w-4xl mx-auto">
                Our commitment is to transparency, integrity, and personalized service, ensuring a smooth visa process from start to finish.
            </p>
            
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <!-- Feature 1 -->
                <div class="p-6 bg-white rounded-xl shadow-lg border border-gray-100">
                    <i data-lucide="shield-check" class="icon-lg mx-auto text-primary-blue mb-4"></i>
                    <h4 class="text-xl font-semibold mb-2">High Success Rate</h4>
                    <p class="text-gray-600">Years of experience leading to successful visa outcomes for our clients.</p>
                </div>
                <!-- Feature 2 -->
                <div class="p-6 bg-white rounded-xl shadow-lg border border-gray-100">
                    <i data-lucide="users" class="icon-lg mx-auto text-secondary-cyan mb-4"></i>
                    <h4 class="text-xl font-semibold mb-2">Personalized Counselling</h4>
                    <p class="text-gray-600">Dedicated case managers who understand your unique profile and goals.</p>
                </div>
                <!-- Feature 3 -->
                <div class="p-6 bg-white rounded-xl shadow-lg border border-gray-100">
                    <i data-lucide="file-text" class="icon-lg mx-auto text-primary-blue mb-4"></i>
                    <h4 class="text-xl font-semibold mb-2">Transparent Process</h4>
                    <p class="text-gray-600">Clear communication and documentation checks at every stage of the application.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section / CTA -->
    <section id="contact" class="py-16 md:py-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center bg-white p-8 rounded-xl shadow-xl border border-gray-200">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Ready to Begin Your Journey?</h2>
            <p class="text-lg text-gray-600 mb-8">
                Contact 5Trainers Visa Consultancy today for a free initial assessment of your visa application eligibility.
            </p>
            
            <form action="#" method="POST" class="space-y-4 max-w-lg mx-auto">
                <div>
                    <input type="text" id="name" name="name" placeholder="Your Full Name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary-blue focus:border-primary-blue transition" required>
                </div>
                <div>
                    <input type="email" id="email" name="email" placeholder="Email Address" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary-blue focus:border-primary-blue transition" required>
                </div>
                <div>
                    <select id="visa_type" name="visa_type" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary-blue focus:border-primary-blue transition" required>
                        <option value="" disabled selected>Select Visa Type of Interest</option>
                        <option value="Study Visa">Study Visa</option>
                        <option value="Tourist Visa">Tourist Visa</option>
                        <option value="Other">Other Inquiry</option>
                    </select>
                </div>
                <div>
                    <textarea id="message" name="message" rows="4" placeholder="How can we help you?" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary-blue focus:border-primary-blue transition" required></textarea>
                </div>
                <button type="submit" class="w-full cta-button bg-primary-blue text-white py-3 rounded-full font-semibold shadow-md hover:bg-blue-700 flex items-center justify-center">
                    <i data-lucide="mail" class="w-5 h-5 mr-2"></i>
                    Submit Inquiry
                </button>
                <p id="submission-message" class="text-sm text-green-600 hidden mt-3">Thank you for your inquiry! We will contact you shortly.</p>
            </form>

            <div class="mt-12 pt-6 border-t border-gray-100">
                <p class="text-xl font-semibold mb-2">You can also reach us at:</p>
                <p class="text-lg text-gray-700 flex items-center justify-center mb-1">
                    <i data-lucide="phone" class="w-5 h-5 text-secondary-cyan mr-2"></i>
                    +91 9056637962
                </p>
                <p class="text-lg text-gray-700 flex items-center justify-center">
                    <i data-lucide="mail" class="w-5 h-5 text-secondary-cyan mr-2"></i>
                    <a href="mailto:contact.visa@5trainers.com">contact.visa@5trainers.com</a>
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center md:flex md:justify-between md:items-center">
            <div class="text-center md:text-left mb-4 md:mb-0">
                <p class="text-lg font-bold">5Trainers Visa Consultancy</p>
                <p class="text-sm text-gray-400">&copy; 2025 All rights reserved.</p>
            </div>
            <div class="flex justify-center space-x-6">
                <!-- Placeholder for social media links -->
                <a href="#" aria-label="Facebook" class="text-gray-400 hover:text-primary-blue transition"><i data-lucide="facebook" class="w-6 h-6"></i></a>
                <a href="#" aria-label="Instagram" class="text-gray-400 hover:text-primary-blue transition"><i data-lucide="instagram" class="w-6 h-6"></i></a>
                <a href="#" aria-label="LinkedIn" class="text-gray-400 hover:text-primary-blue transition"><i data-lucide="linkedin" class="w-6 h-6"></i></a>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Mobile Menu and Form Submission Mockup -->
    <script>
        // Initialize Lucide Icons
        lucide.createIcons();

        // Mobile Menu Toggle Logic
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        function toggleMenu() {
            mobileMenu.classList.toggle('hidden');
            const icon = mobileMenuButton.querySelector('i');
            if (mobileMenu.classList.contains('hidden')) {
                icon.setAttribute('data-lucide', 'menu');
            } else {
                icon.setAttribute('data-lucide', 'x');
            }
            lucide.createIcons(); // Re-render icon after change
        }

        function closeMenu() {
            mobileMenu.classList.add('hidden');
            const icon = mobileMenuButton.querySelector('i');
            icon.setAttribute('data-lucide', 'menu');
            lucide.createIcons();
        }

        mobileMenuButton.addEventListener('click', toggleMenu);

        // Simple Form Submission Mockup (prevents default submit and shows message)
        const contactForm = document.querySelector('form');
        const submissionMessage = document.getElementById('submission-message');

        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show loading state or disable button briefly (omitted for simplicity)
            
            // Simulate API response delay
            setTimeout(() => {
                contactForm.reset(); // Clear form fields
                submissionMessage.classList.remove('hidden'); // Show success message
                
                // Hide message after a few seconds
                setTimeout(() => {
                    submissionMessage.classList.add('hidden');
                }, 4000);
            }, 500);
        });
    </script>
</body>
</html>