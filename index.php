<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section id="home" class="relative py-16 lg:py-20 overflow-hidden bg-transparent">
    <div class="container mx-auto px-6 md:px-12 lg:px-40 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="reveal-on-scroll">
                <span class="inline-block bg-cyan-50 border border-cyan-100 text-[#00ADEF] font-bold mb-6 uppercase tracking-widest text-[10px] px-4 py-1.5 rounded-full animate-pulse-soft">
                    NAAC Grade A++ Network • Regular • Distance • Online
                </span>
                <div class="flex items-center gap-4 mb-6">
                    
                    <h1 class="text-4xl lg:text-5xl font-black text-slate-900 leading-tight">
                        Learning Education Hub
                    </h1>
                </div>
                <h2 class="text-3xl font-bold text-[#003B6D] mb-8">NO.1 STUDENT'S PARTNER, M.P.</h2>
                <p class="text-slate-600 text-lg leading-relaxed mb-10 max-w-xl">
                    Admissions Open 2026-27. Expert counseling for 150+ programs across Engineering, Medical, Management, Nursing, Pharmacy, Law, Agriculture, Education, and more. Trusted guidance for India & abroad with 6+ years of experience.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="javascript:void(0)" onclick="openApplyModal('General Inquiry')" class="bg-slate-900 hover:bg-[#003B6D] text-white px-8 py-3.5 rounded font-bold transition-all shadow-lg flex items-center gap-2 uppercase text-sm">
                        Apply Now
                    </a>
                    <a href="javascript:void(0)" onclick="openApplyModal('Free Counseling')" class="bg-white border-2 border-slate-200 text-blue-600 hover:border-blue-600 px-8 py-3.5 rounded font-bold transition-all uppercase text-sm">
                        Book Free Counseling
                    </a>
                </div>
                <p class="mt-8 text-xs text-slate-400 italic">Trusted by 1,00,000+ students across India</p>
            </div>
            
            <div class="relative flex justify-center items-center reveal-on-scroll">
                <!-- Glow background -->
                <div class="absolute w-[500px] h-[500px] bg-amber-100 rounded-full blur-[100px] opacity-60"></div>
                <!-- Shield Logo -->
                <div class="relative z-10 w-full max-w-[280px] sm:max-w-xs lg:max-w-[450px] aspect-square bg-white rounded-3xl shadow-2xl flex items-center justify-center p-8 lg:p-12 border border-blue-50">
                    <img src="assets/hero.png" alt="Learning Education Hub - No.1 Student's Partner" class="w-full h-full object-contain">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-12 bg-white/30 backdrop-blur-sm border-y border-white/20">
    <div class="container mx-auto px-6 md:px-12 lg:px-40">
        <div class="text-center mb-12">
            <h3 class="text-slate-900 font-bold uppercase tracking-[0.2em] text-sm">Our Global Reach</h3>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center reveal-on-scroll">
                <div class="text-3xl lg:text-4xl font-black text-[#003B6D] mb-1">5000+</div>
                <div class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Students Trained</div>
            </div>
            <div class="text-center reveal-on-scroll" style="transition-delay: 100ms">
                <div class="text-3xl lg:text-4xl font-black text-[#003B6D] mb-1">99%</div>
                <div class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Success Rate</div>
            </div>
            <div class="text-center reveal-on-scroll" style="transition-delay: 200ms">
                <div class="text-3xl lg:text-4xl font-black text-[#003B6D] mb-1">200+</div>
                <div class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Live Projects</div>
            </div>
            <div class="text-center reveal-on-scroll" style="transition-delay: 300ms">
                <div class="text-3xl lg:text-4xl font-black text-[#003B6D] mb-1">6+</div>
                <div class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Years of Excellence</div>
            </div>
        </div>
    </div>
</section>

<!-- Programs Section -->
<section id="programs" class="py-24 bg-slate-50/50">
    <div class="container mx-auto px-6 md:px-12 lg:px-40">
        <div class="text-center max-w-3xl mx-auto mb-16 reveal-on-scroll">
            <h2 class="text-3xl font-black text-slate-900 mb-4 uppercase tracking-tight">Explore 150+ Programs Across All Streams</h2>
            <p class="text-slate-500 text-sm">Find the perfect academic path for your future career.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Engineering Card -->
            <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-xl hover-lift reveal-on-scroll">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-2xl font-black text-slate-900">Engineering</h3>
                    <div class="flex flex-wrap gap-1 justify-end">
                        <span class="bg-slate-100 text-[10px] font-bold px-2 py-1 rounded">Regular</span>
                        <span class="bg-slate-50 text-[10px] font-bold px-2 py-1 rounded">Distance</span>
                        <span class="bg-slate-50 text-[10px] font-bold px-2 py-1 rounded">Online</span>
                    </div>
                </div>
                <p class="text-xs text-blue-400 mb-6">Duration: 3-4 years | Annual Fees: ₹60,000 - ₹2,50,000/year</p>
                
                <div class="mb-8">
                    <h4 class="font-bold text-slate-900 text-sm mb-3">Popular Courses</h4>
                    <ul class="space-y-2 text-xs text-slate-500">
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> B.Tech (CSE, ECE, Mechanical, Civil)</li>
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> M.Tech (Specializations)</li>
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> Polytechnic Diploma</li>
                        <li class="flex items-center gap-2 font-medium">+1 more</li>
                    </ul>
                </div>

                <div class="pt-6 border-t border-slate-50 space-y-4">
                    <div class="flex justify-between text-[11px]">
                        <span class="text-slate-400">Eligibility:</span>
                        <span class="font-bold text-slate-700">10+2 with PCM / Diploma</span>
                    </div>
                    <div class="flex justify-between items-center text-[11px]">
                        <span class="text-slate-400">Accreditation:</span>
                        <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full font-bold">NAAC Grade A++</span>
                    </div>
                </div>

                <a href="javascript:void(0)" onclick="openApplyModal('Engineering')" class="block mt-8 text-[#00ADEF] font-bold text-sm border-b border-transparent hover:border-[#00ADEF] transition-all w-fit">Apply for Engineering</a>
            </div>

            <!-- Pharmacy Card -->
            <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-xl hover-lift reveal-on-scroll" style="transition-delay: 100ms">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-2xl font-black text-slate-900">Pharmacy</h3>
                    <div class="flex flex-wrap gap-1 justify-end">
                        <span class="bg-slate-100 text-[10px] font-bold px-2 py-1 rounded">Regular</span>
                        <span class="bg-slate-50 text-[10px] font-bold px-2 py-1 rounded">Distance</span>
                        <span class="bg-slate-50 text-[10px] font-bold px-2 py-1 rounded">Online</span>
                    </div>
                </div>
                <p class="text-xs text-blue-400 mb-6">Duration: 2-4 years | Annual Fees: ₹45,000 - ₹1,80,000/year</p>
                
                <div class="mb-8">
                    <h4 class="font-bold text-slate-900 text-sm mb-3">Popular Courses</h4>
                    <ul class="space-y-2 text-xs text-slate-500">
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> D.Pharm</li>
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> B.Pharm</li>
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> M.Pharm</li>
                        <li class="flex items-center gap-2 font-medium">+1 more</li>
                    </ul>
                </div>

                <div class="pt-6 border-t border-slate-50 space-y-4">
                    <div class="flex justify-between text-[11px]">
                        <span class="text-slate-400">Eligibility:</span>
                        <span class="font-bold text-slate-700">10+2 with PCB/PCM</span>
                    </div>
                    <div class="flex justify-between items-center text-[11px]">
                        <span class="text-slate-400">Accreditation:</span>
                        <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full font-bold">NAAC Grade A++</span>
                    </div>
                </div>

                <a href="javascript:void(0)" onclick="openApplyModal('Pharmacy')" class="block mt-8 text-[#00ADEF] font-bold text-sm border-b border-transparent hover:border-[#00ADEF] transition-all w-fit">Apply for Pharmacy</a>
            </div>

            <!-- Management Card -->
            <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-xl hover-lift reveal-on-scroll" style="transition-delay: 200ms">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-2xl font-black text-slate-900">Management</h3>
                    <div class="flex flex-wrap gap-1 justify-end">
                        <span class="bg-slate-100 text-[10px] font-bold px-2 py-1 rounded">Regular</span>
                        <span class="bg-slate-50 text-[10px] font-bold px-2 py-1 rounded">Distance</span>
                        <span class="bg-slate-50 text-[10px] font-bold px-2 py-1 rounded">Online</span>
                    </div>
                </div>
                <p class="text-xs text-blue-400 mb-6">Duration: 3-2 years | Annual Fees: ₹50,000 - ₹3,00,000/year</p>
                
                <div class="mb-8">
                    <h4 class="font-bold text-slate-900 text-sm mb-3">Popular Courses</h4>
                    <ul class="space-y-2 text-xs text-slate-500">
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> BBA</li>
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> MBA (Finance, Marketing, HR, Operations)</li>
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> PGDM</li>
                    </ul>
                </div>

                <div class="pt-6 border-t border-slate-50 space-y-4">
                    <div class="flex justify-between text-[11px]">
                        <span class="text-slate-400">Eligibility:</span>
                        <span class="font-bold text-slate-700">10+2 / Graduation</span>
                    </div>
                    <div class="flex justify-between items-center text-[11px]">
                        <span class="text-slate-400">Accreditation:</span>
                        <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full font-bold">NAAC Grade A++</span>
                    </div>
                </div>

                <a href="javascript:void(0)" onclick="openApplyModal('Management')" class="block mt-8 text-[#00ADEF] font-bold text-sm border-b border-transparent hover:border-[#00ADEF] transition-all w-fit">Apply for Management</a>
            </div>
        </div>
        
        <div class="mt-16 text-center reveal-on-scroll">
            <a href="programs.php" class="text-[#003B6D] font-black uppercase text-sm border-b-2 border-[#003B6D] pb-1 hover:text-slate-900 hover:border-slate-900 transition-all">View All 150+ Programs</a>
        </div>
    </div>
</section>

<!-- Why Choose us -->
<section id="about" class="py-16 bg-transparent">
    <div class="container mx-auto px-6 md:px-12 lg:px-40">
        <div class="text-center mb-16 reveal-on-scroll">
            <h2 class="text-3xl font-black text-slate-900 uppercase mb-4">Why Choose Learning Education Hub?</h2>
            <p class="text-slate-500 text-sm">Empowering students through specialized support and excellence.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-slate-50 p-8 rounded-xl hover-lift hover-glow transition-all reveal-on-scroll">
                <div class="text-4xl font-black text-blue-100 mb-4">01</div>
                <h4 class="text-xl font-bold text-slate-900 mb-4">Expert Guidance</h4>
                <p class="text-slate-500 text-sm leading-relaxed">Dedicated faculty and industry experts to guide you through every step of your career.</p>
            </div>
            <div class="bg-slate-50 p-8 rounded-xl reveal-on-scroll" style="transition-delay: 100ms">
                <div class="text-4xl font-black text-blue-100 mb-4">02</div>
                <h4 class="text-xl font-bold text-slate-900 mb-4">Personalized Support</h4>
                <p class="text-slate-500 text-sm leading-relaxed">One-on-one sessions to understand your goals and provide tailored solutions.</p>
            </div>
            <div class="bg-slate-50 p-8 rounded-xl reveal-on-scroll" style="transition-delay: 200ms">
                <div class="text-4xl font-black text-blue-100 mb-4">03</div>
                <h4 class="text-xl font-bold text-slate-900 mb-4">Industry Connections</h4>
                <p class="text-slate-500 text-sm leading-relaxed">Network with top companies and organizations for better placement opportunities.</p>
            </div>
        </div>
        
        <div class="mt-16 text-center reveal-on-scroll">
            <a href="about.php" class="bg-[#003B6D] text-white px-10 py-3.5 rounded-xl font-bold text-sm hover:bg-[#00ADEF] transition-all shadow-lg uppercase">Learn More About Us</a>
        </div>
    </div>
</section>

<!-- Admission Process -->
<section id="admissions" class="py-16 bg-transparent">
    <div class="container mx-auto px-6 md:px-12 lg:px-40">
        <div class="text-center mb-20 reveal-on-scroll">
            <h2 class="text-4xl font-black text-slate-900 mb-4">Simple 5-Step Admission Process</h2>
            <p class="text-slate-500 font-medium">From initial consultation to final admission - we guide you through every step</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4 mb-16 reveal-on-scroll">
            <!-- Step 1 -->
            <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:border-[#003B6D] transition-all flex flex-col items-start text-left shadow-sm">
                <div class="w-8 h-8 rounded-full bg-[#003B6D] text-white flex items-center justify-center text-sm font-bold mb-6">1</div>
                <h4 class="font-bold text-slate-900 mb-3 text-lg leading-tight">Free Consultation</h4>
                <p class="text-slate-500 text-xs leading-relaxed">Share your academic background, interests, and career goals with our expert counselors.</p>
            </div>

            <!-- Step 2 -->
            <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:border-[#003B6D] transition-all flex flex-col items-start text-left shadow-sm" style="transition-delay: 50ms">
                <div class="w-8 h-8 rounded-full bg-[#003B6D] text-white flex items-center justify-center text-sm font-bold mb-6">2</div>
                <h4 class="font-bold text-slate-900 mb-3 text-lg leading-tight">Program Selection</h4>
                <p class="text-slate-500 text-xs leading-relaxed">Get personalized recommendations based on eligibility, budget, and career prospects.</p>
            </div>

            <!-- Step 3 -->
            <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:border-[#003B6D] transition-all flex flex-col items-start text-left shadow-sm" style="transition-delay: 100ms">
                <div class="w-8 h-8 rounded-full bg-[#003B6D] text-white flex items-center justify-center text-sm font-bold mb-6">3</div>
                <h4 class="font-bold text-slate-900 mb-3 text-lg leading-tight">Documentation Support</h4>
                <p class="text-slate-500 text-xs leading-relaxed">Complete assistance with document preparation, verification, and application forms.</p>
            </div>

            <!-- Step 4 -->
            <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:border-[#003B6D] transition-all flex flex-col items-start text-left shadow-sm" style="transition-delay: 150ms">
                <div class="w-8 h-8 rounded-full bg-[#003B6D] text-white flex items-center justify-center text-sm font-bold mb-6">4</div>
                <h4 class="font-bold text-slate-900 mb-3 text-lg leading-tight">Application Submission</h4>
                <p class="text-slate-500 text-xs leading-relaxed">We handle the entire application process with multiple universities on your behalf.</p>
            </div>

            <!-- Step 5 -->
            <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:border-[#003B6D] transition-all flex flex-col items-start text-left shadow-sm" style="transition-delay: 200ms">
                <div class="w-8 h-8 rounded-full bg-[#003B6D] text-white flex items-center justify-center text-sm font-bold mb-6">5</div>
                <h4 class="font-bold text-slate-900 mb-3 text-lg leading-tight">Admission Confirmation</h4>
                <p class="text-slate-500 text-xs leading-relaxed">Receive admission offers, complete fee payment, and secure your seat in your chosen program.</p>
            </div>
        </div>

        <div class="flex flex-wrap justify-center gap-4 reveal-on-scroll">
            <a href="javascript:void(0)" onclick="openApplyModal('General Inquiry')" class="bg-slate-900 text-white px-10 py-3.5 rounded-xl font-bold text-sm hover:bg-[#003B6D] transition-all">Apply Now</a>
            <a href="tel:+916265390145" class="bg-white text-slate-900 border border-slate-200 px-10 py-3.5 rounded-xl font-bold text-sm hover:border-[#003B6D] transition-all">Call Us</a>
            <a href="https://wa.me/916265390145" class="bg-white text-slate-900 border border-slate-200 px-10 py-3.5 rounded-xl font-bold text-sm hover:border-[#003B6D] transition-all">Chat on WhatsApp</a>
        </div>
    </div>
</section>

<!-- University Partners Section -->
<section id="partners" class="py-16 bg-transparent">
    <div class="container mx-auto px-6 md:px-12 lg:px-40">
        <div class="text-center mb-16 reveal-on-scroll">
            <h2 class="text-4xl font-black text-slate-900 mb-4">Our University Partners</h2>
            <p class="text-slate-500 font-medium">Direct partnerships with NAAC Grade A++ universities across India</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 reveal-on-scroll">
            <!-- Partner 1 -->
            <div class="p-8 rounded-3xl border border-slate-100 hover-lift hover-glow transition-all flex flex-col justify-between bg-white shadow-sm">
                <div>
                    <h4 class="font-bold text-slate-900 mb-2 leading-tight">Rajiv Gandhi Proudyogiki Vishwavidyalaya</h4>
                    <p class="text-slate-400 text-xs flex items-center gap-1 mb-4">
                        <i class="fa-solid fa-location-dot"></i> Bhopal, MP
                    </p>
                </div>
                <div class="flex items-center justify-between mt-4">
                    <span class="text-[10px] font-bold text-slate-400 uppercase">State University</span>
                    <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full text-[10px] font-bold">NAAC A++</span>
                </div>
            </div>

            <!-- Partner 2 -->
            <div class="p-8 rounded-3xl border border-slate-100 hover-lift hover-glow transition-all flex flex-col justify-between bg-white shadow-sm">
                <div>
                    <h4 class="font-bold text-slate-900 mb-2 leading-tight">Barkatullah University</h4>
                    <p class="text-slate-400 text-xs flex items-center gap-1 mb-4">
                        <i class="fa-solid fa-location-dot"></i> Bhopal, MP
                    </p>
                </div>
                <div class="flex items-center justify-between mt-4">
                    <span class="text-[10px] font-bold text-slate-400 uppercase">State University</span>
                    <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full text-[10px] font-bold">NAAC A+</span>
                </div>
            </div>

            <!-- Partner 3 -->
            <div class="p-8 rounded-3xl border border-slate-100 hover-lift hover-glow transition-all flex flex-col justify-between bg-white shadow-sm">
                <div>
                    <h4 class="font-bold text-slate-900 mb-2 leading-tight">Devi Ahilya Vishwavidyalaya</h4>
                    <p class="text-slate-400 text-xs flex items-center gap-1 mb-4">
                        <i class="fa-solid fa-location-dot"></i> Indore, MP
                    </p>
                </div>
                <div class="flex items-center justify-between mt-4">
                    <span class="text-[10px] font-bold text-slate-400 uppercase">State University</span>
                    <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full text-[10px] font-bold">NAAC A++</span>
                </div>
            </div>

            <!-- Partner 4 -->
            <div class="p-8 rounded-3xl border border-slate-100 hover-lift hover-glow transition-all flex flex-col justify-between bg-white shadow-sm">
                <div>
                    <h4 class="font-bold text-slate-900 mb-2 leading-tight">Jiwaji University</h4>
                    <p class="text-slate-400 text-xs flex items-center gap-1 mb-4">
                        <i class="fa-solid fa-location-dot"></i> Gwalior, MP
                    </p>
                </div>
                <div class="flex items-center justify-between mt-4">
                    <span class="text-[10px] font-bold text-slate-400 uppercase">State University</span>
                    <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full text-[10px] font-bold">NAAC A+</span>
                </div>
            </div>

            <!-- Partner 5 -->
            <div class="p-8 rounded-3xl border border-slate-100 hover-lift hover-glow transition-all flex flex-col justify-between bg-white shadow-sm">
                <div>
                    <h4 class="font-bold text-slate-900 mb-2 leading-tight">Dr. APJ Abdul Kalam Technical University</h4>
                    <p class="text-slate-400 text-xs flex items-center gap-1 mb-4">
                        <i class="fa-solid fa-location-dot"></i> Lucknow, UP
                    </p>
                </div>
                <div class="flex items-center justify-between mt-4">
                    <span class="text-[10px] font-bold text-slate-400 uppercase">State University</span>
                    <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full text-[10px] font-bold">NAAC A++</span>
                </div>
            </div>

            <!-- Partner 6 -->
            <div class="p-8 rounded-3xl border border-slate-100 hover-lift hover-glow transition-all flex flex-col justify-between bg-white shadow-sm">
                <div>
                    <h4 class="font-bold text-slate-900 mb-2 leading-tight">Chhatrapati Shahu Ji Maharaj University</h4>
                    <p class="text-slate-400 text-xs flex items-center gap-1 mb-4">
                        <i class="fa-solid fa-location-dot"></i> Kanpur, UP
                    </p>
                </div>
                <div class="flex items-center justify-between mt-4">
                    <span class="text-[10px] font-bold text-slate-400 uppercase">State University</span>
                    <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full text-[10px] font-bold">NAAC A+</span>
                </div>
            </div>

            <!-- Partner 7 -->
            <div class="p-8 rounded-3xl border border-slate-100 hover-lift hover-glow transition-all flex flex-col justify-between bg-white shadow-sm">
                <div>
                    <h4 class="font-bold text-slate-900 mb-2 leading-tight">Kurukshetra University</h4>
                    <p class="text-slate-400 text-xs flex items-center gap-1 mb-4">
                        <i class="fa-solid fa-location-dot"></i> Kurukshetra, Haryana
                    </p>
                </div>
                <div class="flex items-center justify-between mt-4">
                    <span class="text-[10px] font-bold text-slate-400 uppercase">State University</span>
                    <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full text-[10px] font-bold">NAAC A++</span>
                </div>
            </div>

            <!-- Partner 8 -->
            <div class="p-8 rounded-3xl border border-slate-100 hover-lift hover-glow transition-all flex flex-col justify-between bg-white shadow-sm">
                <div>
                    <h4 class="font-bold text-slate-900 mb-2 leading-tight">Maharshi Dayanand University</h4>
                    <p class="text-slate-400 text-xs flex items-center gap-1 mb-4">
                        <i class="fa-solid fa-location-dot"></i> Rohtak, Haryana
                    </p>
                </div>
                <div class="flex items-center justify-between mt-4">
                    <span class="text-[10px] font-bold text-slate-400 uppercase">State University</span>
                    <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full text-[10px] font-bold">NAAC A+</span>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories -->
<section class="py-16 bg-transparent">
    <div class="container mx-auto px-6 md:px-12 lg:px-40">
        <div class="text-center mb-16 reveal-on-scroll">
            <h2 class="text-3xl font-black text-slate-900 uppercase mb-4">Student Success Stories</h2>
            <p class="text-slate-500 text-sm">Hear from our students who have achieved their dreams with NO.1 STUDENT'S PARTNER, M.P.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-3xl border border-slate-100 hover-lift hover-glow transition-all reveal-on-scroll">
                <div class="flex items-center gap-4 mb-6">
                    <img src="assets/rahul.png" alt="Student" class="w-14 h-14 rounded-full object-crop border-2 border-white shadow-sm">
                    <div>
                        <h4 class="font-bold text-slate-900">Rahul Sharma</h4>
                        <p class="text-[10px] font-bold text-[#003B6D] uppercase tracking-widest">B.Tech - CSE</p>
                    </div>
                </div>
                <p class="text-slate-600 text-sm leading-relaxed italic">"NO.1 STUDENT'S PARTNER, M.P. provided me with the guidance I needed to secure a position at a top tech company. The counseling was life-changing."</p>
            </div>

            <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm reveal-on-scroll" style="transition-delay: 100ms">
                <div class="flex items-center gap-4 mb-6">
                    <img src="assets/priya.png" alt="Student" class="w-14 h-14 rounded-full object-crop border-2 border-white shadow-sm">
                    <div>
                        <h4 class="font-bold text-slate-900">Priya Patel</h4>
                        <p class="text-[10px] font-bold text-blue-600 uppercase tracking-widest">MBBS Student</p>
                    </div>
                </div>
                <p class="text-slate-600 text-sm leading-relaxed italic">"The document support made my admission process stress-free. I highly recommend NO.1 STUDENT'S PARTNER, M.P. for medical aspirants."</p>
            </div>

            <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm reveal-on-scroll" style="transition-delay: 200ms">
                <div class="flex items-center gap-4 mb-6">
                    <img src="assets/amit.png" alt="Student" class="w-14 h-14 rounded-full object-crop border-2 border-white shadow-sm">
                    <div>
                        <h4 class="font-bold text-slate-900">Amit Verma</h4>
                        <p class="text-[10px] font-bold text-amber-600 uppercase tracking-widest">BA LLB</p>
                    </div>
                </div>
                <p class="text-slate-600 text-sm leading-relaxed italic">"Expert guidance at every step. NO.1 STUDENT'S PARTNER, M.P. truly cares about student success and holistic development."</p>
            </div>
        </div>
    </div>
</section>



<!-- Admissions CTA Section -->
<section class="py-16 bg-transparent">
    <div class="container mx-auto px-6 md:px-12 lg:px-40">
        <div class="bg-blue-50 rounded-[2rem] md:rounded-[3rem] p-8 md:p-12 lg:p-20 relative overflow-hidden flex flex-col lg:flex-row items-center gap-12 border border-blue-100/50 reveal-on-scroll">
            <div class="lg:w-3/5 relative z-10">
                <h2 class="text-4xl lg:text-5xl font-black text-slate-900 mb-6 leading-tight">Admissions Open for 2026-27 Academic Session</h2>
                <p class="text-slate-600 text-lg leading-relaxed mb-10 max-w-xl">
                    Don't miss out on your dream program. With limited seats and increasing competition, early application is crucial. Our expert counselors are ready to guide you through the entire process - from program selection to final admission.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="javascript:void(0)" onclick="openApplyModal('General Inquiry')" class="bg-slate-900 text-white px-10 py-4 rounded-xl font-bold text-sm hover:bg-[#003B6D] transition-all shadow-lg btn-shimmer">Apply Now</a>
                    <a href="tel:+916265390145" class="bg-white text-slate-900 px-10 py-4 rounded-xl font-bold text-sm hover:border-[#003B6D] border border-slate-200 transition-all shadow-sm">Talk to Counselor</a>
                </div>
            </div>
            <div class="lg:w-2/5 flex justify-center">
                <div class="w-full aspect-square bg-gradient-to-br from-blue-200 to-cyan-100 rounded-[2.5rem] shadow-inner relative group">
                    <div class="absolute inset-0 flex items-center justify-center p-12">
                        <i class="fa-solid fa-user-graduate text-[120px] text-white/50 group-hover:scale-110 transition-transform duration-500"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section id="faq" class="py-16 bg-transparent">
    <div class="container mx-auto px-6 md:px-12 lg:px-40">
        <div class="text-center mb-20 reveal-on-scroll">
            <h2 class="text-4xl font-black text-slate-900 mb-4">Frequently Asked Questions</h2>
            <p class="text-slate-500 font-medium">Clear your doubts about our process and services</p>
        </div>

        <div class="max-w-4xl mx-auto space-y-4">
            <!-- FAQ 1 -->
            <div class="bg-white rounded-2xl border border-slate-100 overflow-hidden reveal-on-scroll">
                <button class="w-full p-6 text-left flex justify-between items-center hover:bg-slate-50 transition-colors group" onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('i').classList.toggle('rotate-180')">
                    <span class="font-bold text-slate-900">What is the counseling fee structure at Learning Education Hub?</span>
                    <i class="fa-solid fa-chevron-down text-slate-400 group-hover:text-[#00ADEF] transition-all"></i>
                </button>
                <div class="px-6 pb-6 text-slate-500 text-sm leading-relaxed hidden">
                    We offer a tiered fee structure based on the complexity and level of support required. Our initial consultation is free of charge, during which we'll provide a detailed quote for the complete admission guidance package.
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="bg-white rounded-2xl border border-slate-100 overflow-hidden reveal-on-scroll" style="transition-delay: 50ms">
                <button class="w-full p-6 text-left flex justify-between items-center hover:bg-slate-50 transition-colors group" onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('i').classList.toggle('rotate-180')">
                    <span class="font-bold text-slate-900">Do you provide scholarships or financial assistance?</span>
                    <i class="fa-solid fa-chevron-down text-slate-400 group-hover:text-[#00ADEF] transition-all"></i>
                </button>
                <div class="px-6 pb-6 text-slate-500 text-sm leading-relaxed hidden">
                    Yes, we help students identify and apply for various merit-based and need-based scholarships. We also guide families through the process of securing education loans with our partner financial institutions.
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="bg-white rounded-2xl border border-slate-100 overflow-hidden reveal-on-scroll" style="transition-delay: 100ms">
                <button class="w-full p-6 text-left flex justify-between items-center hover:bg-slate-50 transition-colors group" onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('i').classList.toggle('rotate-180')">
                    <span class="font-bold text-slate-900">What documents are required for admission counseling?</span>
                    <i class="fa-solid fa-chevron-down text-slate-400 group-hover:text-[#00ADEF] transition-all"></i>
                </button>
                <div class="px-6 pb-6 text-slate-500 text-sm leading-relaxed hidden">
                    Typically, you'll need your 10th and 12th marksheets, identity proof (Aadhar Card), transfer certificate, and competitive exam scores (like NEET, JEE, CLAT, etc.) if applicable.
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="bg-white rounded-2xl border border-slate-100 overflow-hidden reveal-on-scroll" style="transition-delay: 150ms">
                <button class="w-full p-6 text-left flex justify-between items-center hover:bg-slate-50 transition-colors group" onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('i').classList.toggle('rotate-180')">
                    <span class="font-bold text-slate-900">Do you guarantee admission in preferred colleges?</span>
                    <i class="fa-solid fa-chevron-down text-slate-400 group-hover:text-[#00ADEF] transition-all"></i>
                </button>
                <div class="px-6 pb-6 text-slate-500 text-sm leading-relaxed hidden">
                    While we cannot "guarantee" admission as it depends on individual merits and college selection criteria, our 98% success rate reflects our ability to place students in the best possible institutions based on their profiles.
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="bg-white rounded-2xl border border-slate-100 overflow-hidden reveal-on-scroll" style="transition-delay: 200ms">
                <button class="w-full p-6 text-left flex justify-between items-center hover:bg-slate-50 transition-colors group" onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('i').classList.toggle('rotate-180')">
                    <span class="font-bold text-slate-900">Is online counseling available for outstation students?</span>
                    <i class="fa-solid fa-chevron-down text-slate-400 group-hover:text-[#00ADEF] transition-all"></i>
                </button>
                <div class="px-6 pb-6 text-slate-500 text-sm leading-relaxed hidden">
                    Absolutely! We provide comprehensive virtual counseling via Zoom, Google Meet, and WhatsApp to support students from all parts of the country without requiring physical travel.
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
