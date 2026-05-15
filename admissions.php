<?php include 'includes/header.php'; ?>

<section class="py-20 bg-transparent">
    <div class="container mx-auto px-12 lg:px-40">
        <!-- Header Section -->
        <div class="mb-20 text-center reveal-on-scroll">
            <h1 class="text-4xl lg:text-6xl font-black text-slate-900 mb-6 uppercase">Apply for Admission</h1>
            <p class="text-slate-500 text-lg max-w-3xl mx-auto leading-relaxed">
                Start your journey towards a bright future. Fill out this form and our expert counselors will contact you within 24 hours with personalized guidance.
            </p>
        </div>

        <!-- Form Section -->
        <div class="max-w-3xl mx-auto bg-white p-8 lg:p-16 rounded-[2.5rem] shadow-2xl border border-slate-50 reveal-on-scroll">
            <form id="admissionPageForm" action="https://script.google.com/macros/s/AKfycbzhMRh4hDBGbrMvwIqrFEugpbJim8HWL_NMepQRGOef0nIJKwmAWNQ2IRLmes5Hlkp8/exec" method="POST" class="space-y-8">
                <div class="grid grid-cols-1 gap-8">
                    <!-- Full Name -->
                    <div>
                        <label for="full_name" class="block text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-3">Full Name</label>
                        <input type="text" id="full_name" name="Full Name" class="w-full px-5 py-4 rounded-xl border border-slate-100 focus:border-[#003B6D] focus:ring-4 focus:ring-[#003B6D]/5 outline-none transition-all bg-slate-50/50" placeholder="Enter your full name">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Phone Number -->
                        <div>
                            <label for="phone" class="block text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-3">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-5 py-4 rounded-xl border border-slate-100 focus:border-[#003B6D] focus:ring-4 focus:ring-[#003B6D]/5 outline-none transition-all bg-slate-50/50" placeholder="+91">
                        </div>
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-3">Email Address</label>
                            <input type="email" id="email" name="email" class="w-full px-5 py-4 rounded-xl border border-slate-100 focus:border-[#003B6D] focus:ring-4 focus:ring-[#003B6D]/5 outline-none transition-all bg-slate-50/50" placeholder="example@mail.com">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Program of Interest -->
                        <div>
                            <label for="program" class="block text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-3">Program</label>
                            <input type="text" id="program" name="program" class="w-full px-5 py-4 rounded-xl border border-slate-100 focus:border-[#003B6D] focus:ring-4 focus:ring-[#003B6D]/5 outline-none transition-all bg-slate-50/50" placeholder="e.g. B.Tech" value="<?php echo isset($_GET['program']) ? htmlspecialchars(ucfirst($_GET['program'])) : ''; ?>">
                        </div>
                        <!-- Education Level -->
                        <div>
                            <label for="education_level" class="block text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-3">Education Level</label>
                            <select id="education_level" name="education_level" class="w-full px-5 py-4 rounded-xl border border-slate-100 focus:border-[#003B6D] focus:ring-4 focus:ring-[#003B6D]/5 outline-none transition-all appearance-none bg-slate-50/50">
                                <option value="ug">Undergraduate (UG)</option>
                                <option value="pg">Postgraduate (PG)</option>
                                <option value="diploma">Diploma</option>
                                <option value="phd">PhD</option>
                            </select>
                        </div>
                        <!-- Preferred Study Location -->
                        <div>
                            <label for="location" class="block text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-3">Location</label>
                            <select id="location" name="location" class="w-full px-5 py-4 rounded-xl border border-slate-100 focus:border-[#003B6D] focus:ring-4 focus:ring-[#003B6D]/5 outline-none transition-all appearance-none bg-slate-50/50">
                                <option value="india">India</option>
                                <option value="abroad">Abroad</option>
                            </select>
                        </div>
                    </div>

                    <!-- Additional Details -->
                    <div>
                        <label for="details" class="block text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-3">Additional Information</label>
                        <textarea id="details" name="Message" rows="4" class="w-full px-5 py-4 rounded-xl border border-slate-100 focus:border-[#003B6D] focus:ring-4 focus:ring-[#003B6D]/5 outline-none transition-all resize-none bg-slate-50/50" placeholder="Tell us more about your academic goals..."></textarea>
                    </div>
                </div>

                <div class="text-center pt-4">
                    <button type="submit" class="w-full bg-[#003B6D] hover:bg-slate-900 text-white px-10 py-5 rounded-xl font-bold transition-all uppercase text-sm shadow-2xl shadow-blue-900/10 mb-8">
                        Submit Application
                    </button>
                    <p class="text-sm text-slate-500">
                        Need help? <a href="tel:+916265390145" class="text-[#00ADEF] font-bold hover:underline">Call us: +91 6265390145</a>
                    </p>
                </div>
            </form>
            <script>
            document.getElementById('admissionPageForm').addEventListener('submit', function(e) {
                e.preventDefault();
                const form = e.target;
                const formData = new FormData(form);
                const data = Object.fromEntries(formData.entries());
                
                const submitBtn = form.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerText;
                submitBtn.innerText = 'Submitting...';
                submitBtn.disabled = true;

                fetch(form.action, {
                    method: 'POST',
                    body: JSON.stringify(data),
                    headers: {
                        "Content-Type": "text/plain;charset=utf-8"
                    }
                })
                .then(response => {
                    alert("Application submitted successfully!");
                    form.reset();
                    submitBtn.innerText = originalText;
                    submitBtn.disabled = false;
                })
                .catch(error => {
                    alert("Application submitted!");
                    form.reset();
                    submitBtn.innerText = originalText;
                    submitBtn.disabled = false;
                });
            });
            </script>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
