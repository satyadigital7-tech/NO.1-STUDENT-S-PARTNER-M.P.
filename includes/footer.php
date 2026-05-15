    </main>

    <?php include 'includes/apply_modal.php'; ?>

    <footer class="bg-slate-900 text-slate-300 pt-20 pb-10">
        <div class="container mx-auto px-8 lg:px-20">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                <!-- Brand -->
                <div class="space-y-6">
                    <div class="flex items-center gap-2">
                        <div class="h-12">
                            <img src="assets/Logo.jpeg" alt="Learning Education Hub Logo" class="h-full object-contain">
                        </div>
                    </div>
                    <p class="text-sm leading-relaxed">
                        Learning Education Hub is dedicated to providing quality education and support to students across various streams. We are your No.1 partner in academic excellence.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-[#00ADEF] transition-colors"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-[#00ADEF] transition-colors"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-[#00ADEF] transition-colors"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-[#00ADEF] transition-colors"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-white font-bold mb-8">Quick Links</h4>
                    <ul class="space-y-4 text-sm">
                        <li><a href="index.php" class="hover:text-[#00ADEF] transition-colors">Home</a></li>
                        <li><a href="about.php" class="hover:text-[#00ADEF] transition-colors">About Us</a></li>
                        <li><a href="programs.php" class="hover:text-[#00ADEF] transition-colors">Programs</a></li>
                        <li><a href="#admissions" class="hover:text-[#00ADEF] transition-colors">Admissions</a></li>
                        <li><a href="#contact" class="hover:text-[#00ADEF] transition-colors">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-white font-bold mb-8">Contact Info</h4>
                    <ul class="space-y-6 text-sm">
                        <li class="flex gap-4">
                            <i class="fa-solid fa-location-dot text-[#00ADEF] mt-1"></i>
                            <span>Sonar Tower, 131/61, Opposite Mahendra Coaching,<br>Near Pragati Petrol Pump, Zone-II, MP Nagar,<br>Bhopal (M.P.) - 462011</span>
                        </li>
                        <li class="flex gap-4">
                            <i class="fa-solid fa-phone text-[#00ADEF] mt-1"></i>
                            <span>+91 6265390145</span>
                        </li>
                        <li class="flex gap-4">
                            <i class="fa-solid fa-envelope text-[#00ADEF] mt-1"></i>
                            <span>no1studentspartner@gmail.com</span>
                        </li>
                    </ul>
                </div>

                <!-- Location Map -->
                <div>
                    <h4 class="text-white font-bold mb-8">Our Location</h4>
                    <div class="rounded-2xl overflow-hidden h-48 bg-slate-800 grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.321685375532!2d77.42858157531776!3d23.231405979025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c426372d8e063%3A0x89793f0b2f7a4d53!2sMP%20Nagar%2C%20Bhopal%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1715610000000!5m2!1sen!2sin" 
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>

            <div class="pt-8 border-t border-slate-800 flex flex-col md:flex-row justify-between items-center gap-4 text-xs">
                <p>&copy; 2024 Learning Education Hub — NO.1 STUDENT'S PARTNER, M.P. All Rights Reserved.</p>
                <div class="flex gap-6">
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Scroll Animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.reveal-on-scroll').forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>
