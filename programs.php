<?php include 'includes/header.php'; ?>

<!-- Programs Hero Section -->
<section class="relative py-20 overflow-hidden bg-transparent">
    <div class="container mx-auto px-6 md:px-12 lg:px-40 relative z-10 text-center">
        <h1 class="text-4xl lg:text-6xl font-black text-slate-900 mb-6 uppercase">Explore 150+ Programs</h1>
        <p class="text-slate-500 text-lg max-w-3xl mx-auto leading-relaxed">
            Choose from a wide variety of courses across Engineering, Medical, Management, and more. Your journey to professional excellence starts here.
        </p>
    </div>
</section>

<!-- Search/Filter Section (Optional but good for premium feel) -->
<section class="pb-10">
    <div class="container mx-auto px-6 md:px-12 lg:px-40">
        <div class="flex flex-wrap justify-center gap-4">
            <button onclick="filterPrograms('all')" class="category-btn px-6 py-2 rounded-full bg-[#003B6D] text-white font-bold text-sm transition-all active">All Programs</button>
            <button onclick="filterPrograms('engineering')" class="category-btn px-6 py-2 rounded-full bg-white border border-slate-200 text-slate-600 font-bold text-sm hover:border-[#003B6D] transition-all">Engineering</button>
            <button onclick="filterPrograms('medical')" class="category-btn px-6 py-2 rounded-full bg-white border border-slate-200 text-slate-600 font-bold text-sm hover:border-[#003B6D] transition-all">Medical</button>
            <button onclick="filterPrograms('management')" class="category-btn px-6 py-2 rounded-full bg-white border border-slate-200 text-slate-600 font-bold text-sm hover:border-[#003B6D] transition-all">Management</button>
            <button onclick="filterPrograms('pharmacy')" class="category-btn px-6 py-2 rounded-full bg-white border border-slate-200 text-slate-600 font-bold text-sm hover:border-[#003B6D] transition-all">Pharmacy</button>
            <button onclick="filterPrograms('computer')" class="category-btn px-6 py-2 rounded-full bg-white border border-slate-200 text-slate-600 font-bold text-sm hover:border-[#003B6D] transition-all">Computer Application</button>
            <button onclick="filterPrograms('science')" class="category-btn px-6 py-2 rounded-full bg-white border border-slate-200 text-slate-600 font-bold text-sm hover:border-[#003B6D] transition-all">Science</button>
            <button onclick="filterPrograms('commerce')" class="category-btn px-6 py-2 rounded-full bg-white border border-slate-200 text-slate-600 font-bold text-sm hover:border-[#003B6D] transition-all">Commerce</button>
            <button onclick="filterPrograms('arts')" class="category-btn px-6 py-2 rounded-full bg-white border border-slate-200 text-slate-600 font-bold text-sm hover:border-[#003B6D] transition-all">Arts & Humanities</button>
            <button onclick="filterPrograms('hotel')" class="category-btn px-6 py-2 rounded-full bg-white border border-slate-200 text-slate-600 font-bold text-sm hover:border-[#003B6D] transition-all">Hotel Management</button>
            <button onclick="filterPrograms('education')" class="category-btn px-6 py-2 rounded-full bg-white border border-slate-200 text-slate-600 font-bold text-sm hover:border-[#003B6D] transition-all">Education</button>
            <button onclick="filterPrograms('paramedical')" class="category-btn px-6 py-2 rounded-full bg-white border border-slate-200 text-slate-600 font-bold text-sm hover:border-[#003B6D] transition-all">Paramedical</button>
            <button onclick="filterPrograms('law')" class="category-btn px-6 py-2 rounded-full bg-white border border-slate-200 text-slate-600 font-bold text-sm hover:border-[#003B6D] transition-all">Law</button>
            <button onclick="filterPrograms('nursing')" class="category-btn px-6 py-2 rounded-full bg-white border border-slate-200 text-slate-600 font-bold text-sm hover:border-[#003B6D] transition-all">Nursing</button>
        </div>
    </div>
</section>

<!-- Programs Grid -->
<section class="py-16 bg-transparent">
    <div class="container mx-auto px-6 md:px-12 lg:px-40">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Engineering Card -->
            <div class="program-card bg-white p-8 rounded-3xl border border-slate-100 shadow-xl hover-lift reveal-on-scroll" data-category="engineering">
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
            <div class="program-card bg-white p-8 rounded-3xl border border-slate-100 shadow-xl hover-lift reveal-on-scroll" data-category="pharmacy" style="transition-delay: 50ms">
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
            <div class="program-card bg-white p-8 rounded-3xl border border-slate-100 shadow-xl hover-lift reveal-on-scroll" data-category="management" style="transition-delay: 100ms">
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

            <!-- Medical Card -->
            <div class="program-card bg-white p-8 rounded-3xl border border-slate-100 shadow-xl hover-lift reveal-on-scroll" data-category="medical">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-2xl font-black text-slate-900">Medical</h3>
                    <div class="flex flex-wrap gap-1 justify-end">
                        <span class="bg-slate-100 text-[10px] font-bold px-2 py-1 rounded">Regular</span>
                    </div>
                </div>
                <p class="text-xs text-blue-400 mb-6">Duration: 4.5-5.5 years | Annual Fees: ₹5,00,000 - ₹15,00,000/year</p>
                
                <div class="mb-8">
                    <h4 class="font-bold text-slate-900 text-sm mb-3">Popular Courses</h4>
                    <ul class="space-y-2 text-xs text-slate-500">
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> MBBS</li>
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> BDS</li>
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> BAMS / BHMS</li>
                    </ul>
                </div>

                <div class="pt-6 border-t border-slate-50 space-y-4">
                    <div class="flex justify-between text-[11px]">
                        <span class="text-slate-400">Eligibility:</span>
                        <span class="font-bold text-slate-700">NEET Qualified</span>
                    </div>
                    <div class="flex justify-between items-center text-[11px]">
                        <span class="text-slate-400">Accreditation:</span>
                        <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full font-bold">NMC / DCI Approved</span>
                    </div>
                </div>

                <a href="javascript:void(0)" onclick="openApplyModal('Medical')" class="block mt-8 text-[#00ADEF] font-bold text-sm border-b border-transparent hover:border-[#00ADEF] transition-all w-fit">Apply for Medical</a>
            </div>

            <!-- Law Card -->
            <div class="program-card bg-white p-8 rounded-3xl border border-slate-100 shadow-xl hover-lift reveal-on-scroll" data-category="law">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-2xl font-black text-slate-900">Law</h3>
                    <div class="flex flex-wrap gap-1 justify-end">
                        <span class="bg-slate-100 text-[10px] font-bold px-2 py-1 rounded">Regular</span>
                        <span class="bg-slate-50 text-[10px] font-bold px-2 py-1 rounded">Distance</span>
                    </div>
                </div>
                <p class="text-xs text-blue-400 mb-6">Duration: 3-5 years | Annual Fees: ₹30,000 - ₹1,20,000/year</p>
                
                <div class="mb-8">
                    <h4 class="font-bold text-slate-900 text-sm mb-3">Popular Courses</h4>
                    <ul class="space-y-2 text-xs text-slate-500">
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> BA LLB / BBA LLB</li>
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> LLB (3 Years)</li>
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> LLM</li>
                    </ul>
                </div>

                <div class="pt-6 border-t border-slate-50 space-y-4">
                    <div class="flex justify-between text-[11px]">
                        <span class="text-slate-400">Eligibility:</span>
                        <span class="font-bold text-slate-700">10+2 / Graduation</span>
                    </div>
                    <div class="flex justify-between items-center text-[11px]">
                        <span class="text-slate-400">Accreditation:</span>
                        <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full font-bold">BCI Approved</span>
                    </div>
                </div>

                <a href="javascript:void(0)" onclick="openApplyModal('Law')" class="block mt-8 text-[#00ADEF] font-bold text-sm border-b border-transparent hover:border-[#00ADEF] transition-all w-fit">Apply for Law</a>
            </div>

            <!-- Nursing/Paramedical Card -->
            <div class="program-card bg-white p-8 rounded-3xl border border-slate-100 shadow-xl hover-lift reveal-on-scroll" data-category="nursing">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-2xl font-black text-slate-900">Nursing</h3>
                    <div class="flex flex-wrap gap-1 justify-end">
                        <span class="bg-slate-100 text-[10px] font-bold px-2 py-1 rounded">Regular</span>
                    </div>
                </div>
                <p class="text-xs text-blue-400 mb-6">Duration: 2-4 years | Annual Fees: ₹60,000 - ₹1,50,000/year</p>
                
                <div class="mb-8">
                    <h4 class="font-bold text-slate-900 text-sm mb-3">Popular Courses</h4>
                    <ul class="space-y-2 text-xs text-slate-500">
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> B.Sc Nursing</li>
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> GNM / ANM</li>
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> BMLT / DMLT</li>
                    </ul>
                </div>

                <div class="pt-6 border-t border-slate-50 space-y-4">
                    <div class="flex justify-between text-[11px]">
                        <span class="text-slate-400">Eligibility:</span>
                        <span class="font-bold text-slate-700">10+2 with PCB</span>
                    </div>
                    <div class="flex justify-between items-center text-[11px]">
                        <span class="text-slate-400">Accreditation:</span>
                        <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full font-bold">INC Approved</span>
                    </div>
                </div>

                <a href="javascript:void(0)" onclick="openApplyModal('Nursing')" class="block mt-8 text-[#00ADEF] font-bold text-sm border-b border-transparent hover:border-[#00ADEF] transition-all w-fit">Apply for Nursing</a>
            </div>

            <!-- Computer Application Card -->
            <div class="program-card bg-white p-8 rounded-3xl border border-slate-100 shadow-xl hover-lift reveal-on-scroll" data-category="computer">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-2xl font-black text-slate-900">Computer Application</h3>
                    <div class="flex flex-wrap gap-1 justify-end">
                        <span class="bg-slate-100 text-[10px] font-bold px-2 py-1 rounded">Regular</span>
                        <span class="bg-slate-50 text-[10px] font-bold px-2 py-1 rounded">Distance</span>
                        <span class="bg-slate-50 text-[10px] font-bold px-2 py-1 rounded">Online</span>
                    </div>
                </div>
                <p class="text-xs text-blue-400 mb-6">Duration: 2-3 years | Annual Fees: ₹35,000 - ₹1,80,000/year</p>
                <div class="mb-8">
                    <h4 class="font-bold text-slate-900 text-sm mb-3">Popular Courses</h4>
                    <ul class="space-y-2 text-xs text-slate-500">
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> BCA</li>
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> MCA</li>
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> PGDCA</li>
                        <li class="flex items-center gap-2 font-medium">+1 more</li>
                    </ul>
                </div>
                <div class="pt-6 border-t border-slate-50 space-y-4">
                    <div class="flex justify-between text-[11px]">
                        <span class="text-slate-400">Eligibility:</span>
                        <span class="font-bold text-slate-700">10+2 with Math</span>
                    </div>
                    <div class="flex justify-between items-center text-[11px]">
                        <span class="text-slate-400">Accreditation:</span>
                        <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full font-bold">NAAC Grade A++</span>
                    </div>
                </div>
                <a href="javascript:void(0)" onclick="openApplyModal('Computer Application')" class="block mt-8 text-[#00ADEF] font-bold text-sm border-b border-transparent hover:border-[#00ADEF] transition-all w-fit">Apply for Computer Application</a>
            </div>

            <!-- Science Card -->
            <div class="program-card bg-white p-8 rounded-3xl border border-slate-100 shadow-xl hover-lift reveal-on-scroll" data-category="science">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-2xl font-black text-slate-900">Science</h3>
                    <div class="flex flex-wrap gap-1 justify-end">
                        <span class="bg-slate-100 text-[10px] font-bold px-2 py-1 rounded">Regular</span>
                        <span class="bg-slate-50 text-[10px] font-bold px-2 py-1 rounded">Distance</span>
                        <span class="bg-slate-50 text-[10px] font-bold px-2 py-1 rounded">Online</span>
                    </div>
                </div>
                <p class="text-xs text-blue-400 mb-6">Duration: 2-3 years | Annual Fees: ₹25,000 - ₹1,00,000/year</p>
                <div class="mb-8">
                    <h4 class="font-bold text-slate-900 text-sm mb-3">Popular Courses</h4>
                    <ul class="space-y-2 text-xs text-slate-500">
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> B.Sc (PCM, PCB, Chemistry)</li>
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> M.Sc</li>
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> Ph.D.</li>
                        <li class="flex items-center gap-2 font-medium">+1 more</li>
                    </ul>
                </div>
                <div class="pt-6 border-t border-slate-50 space-y-4">
                    <div class="flex justify-between text-[11px]">
                        <span class="text-slate-400">Eligibility:</span>
                        <span class="font-bold text-slate-700">10+2 with Science</span>
                    </div>
                    <div class="flex justify-between items-center text-[11px]">
                        <span class="text-slate-400">Accreditation:</span>
                        <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full font-bold">NAAC Grade A++</span>
                    </div>
                </div>
                <a href="javascript:void(0)" onclick="openApplyModal('Science')" class="block mt-8 text-[#00ADEF] font-bold text-sm border-b border-transparent hover:border-[#00ADEF] transition-all w-fit">Apply for Science</a>
            </div>

            <!-- Commerce Card -->
            <div class="program-card bg-white p-8 rounded-3xl border border-slate-100 shadow-xl hover-lift reveal-on-scroll" data-category="commerce">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-2xl font-black text-slate-900">Commerce</h3>
                    <div class="flex flex-wrap gap-1 justify-end">
                        <span class="bg-slate-100 text-[10px] font-bold px-2 py-1 rounded">Regular</span>
                        <span class="bg-slate-50 text-[10px] font-bold px-2 py-1 rounded">Distance</span>
                        <span class="bg-slate-50 text-[10px] font-bold px-2 py-1 rounded">Online</span>
                    </div>
                </div>
                <p class="text-xs text-blue-400 mb-6">Duration: 2-3 years | Annual Fees: ₹20,000 - ₹80,000/year</p>
                <div class="mb-8">
                    <h4 class="font-bold text-slate-900 text-sm mb-3">Popular Courses</h4>
                    <ul class="space-y-2 text-xs text-slate-500">
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> B.Com</li>
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> M.Com</li>
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> B.Com (Hons)</li>
                        <li class="flex items-center gap-2 font-medium">+1 more</li>
                    </ul>
                </div>
                <div class="pt-6 border-t border-slate-50 space-y-4">
                    <div class="flex justify-between text-[11px]">
                        <span class="text-slate-400">Eligibility:</span>
                        <span class="font-bold text-slate-700">10+2 any stream</span>
                    </div>
                    <div class="flex justify-between items-center text-[11px]">
                        <span class="text-slate-400">Accreditation:</span>
                        <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full font-bold">NAAC Grade A++</span>
                    </div>
                </div>
                <a href="javascript:void(0)" onclick="openApplyModal('Commerce')" class="block mt-8 text-[#00ADEF] font-bold text-sm border-b border-transparent hover:border-[#00ADEF] transition-all w-fit">Apply for Commerce</a>
            </div>

            <!-- Arts & Humanities Card -->
            <div class="program-card bg-white p-8 rounded-3xl border border-slate-100 shadow-xl hover-lift reveal-on-scroll" data-category="arts">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-2xl font-black text-slate-900">Arts & Humanities</h3>
                    <div class="flex flex-wrap gap-1 justify-end">
                        <span class="bg-slate-100 text-[10px] font-bold px-2 py-1 rounded">Regular</span>
                        <span class="bg-slate-50 text-[10px] font-bold px-2 py-1 rounded">Distance</span>
                        <span class="bg-slate-50 text-[10px] font-bold px-2 py-1 rounded">Online</span>
                    </div>
                </div>
                <p class="text-xs text-blue-400 mb-6">Duration: 2-3 years | Annual Fees: ₹18,000 - ₹75,000/year</p>
                <div class="mb-8">
                    <h4 class="font-bold text-slate-900 text-sm mb-3">Popular Courses</h4>
                    <ul class="space-y-2 text-xs text-slate-500">
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> BA (English, Hindi, History, Political Science)</li>
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> MA</li>
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> Ph.D.</li>
                    </ul>
                </div>
                <div class="pt-6 border-t border-slate-50 space-y-4">
                    <div class="flex justify-between text-[11px]">
                        <span class="text-slate-400">Eligibility:</span>
                        <span class="font-bold text-slate-700">10+2 any stream</span>
                    </div>
                    <div class="flex justify-between items-center text-[11px]">
                        <span class="text-slate-400">Accreditation:</span>
                        <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full font-bold">NAAC Grade A++</span>
                    </div>
                </div>
                <a href="javascript:void(0)" onclick="openApplyModal('Arts & Humanities')" class="block mt-8 text-[#00ADEF] font-bold text-sm border-b border-transparent hover:border-[#00ADEF] transition-all w-fit">Apply for Arts & Humanities</a>
            </div>

            <!-- Hotel Management Card -->
            <div class="program-card bg-white p-8 rounded-3xl border border-slate-100 shadow-xl hover-lift reveal-on-scroll" data-category="hotel">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-2xl font-black text-slate-900">Hotel Management</h3>
                    <div class="flex flex-wrap gap-1 justify-end">
                        <span class="bg-slate-100 text-[10px] font-bold px-2 py-1 rounded">Regular</span>
                        <span class="bg-slate-50 text-[10px] font-bold px-2 py-1 rounded">Distance</span>
                        <span class="bg-slate-50 text-[10px] font-bold px-2 py-1 rounded">Online</span>
                    </div>
                </div>
                <p class="text-xs text-blue-400 mb-6">Duration: 3-4 years | Annual Fees: ₹60,000 - ₹2,00,000/year</p>
                <div class="mb-8">
                    <h4 class="font-bold text-slate-900 text-sm mb-3">Popular Courses</h4>
                    <ul class="space-y-2 text-xs text-slate-500">
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> BHM</li>
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> Diploma in Hotel Management</li>
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> MBA Tourism</li>
                    </ul>
                </div>
                <div class="pt-6 border-t border-slate-50 space-y-4">
                    <div class="flex justify-between text-[11px]">
                        <span class="text-slate-400">Eligibility:</span>
                        <span class="font-bold text-slate-700">10+2 any stream</span>
                    </div>
                    <div class="flex justify-between items-center text-[11px]">
                        <span class="text-slate-400">Accreditation:</span>
                        <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full font-bold">NAAC Grade A++</span>
                    </div>
                </div>
                <a href="javascript:void(0)" onclick="openApplyModal('Hotel Management')" class="block mt-8 text-[#00ADEF] font-bold text-sm border-b border-transparent hover:border-[#00ADEF] transition-all w-fit">Apply for Hotel Management</a>
            </div>

            <!-- Education Card -->
            <div class="program-card bg-white p-8 rounded-3xl border border-slate-100 shadow-xl hover-lift reveal-on-scroll" data-category="education">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-2xl font-black text-slate-900">Education</h3>
                    <div class="flex flex-wrap gap-1 justify-end">
                        <span class="bg-slate-100 text-[10px] font-bold px-2 py-1 rounded">Regular</span>
                        <span class="bg-slate-50 text-[10px] font-bold px-2 py-1 rounded">Distance</span>
                        <span class="bg-slate-50 text-[10px] font-bold px-2 py-1 rounded">Online</span>
                    </div>
                </div>
                <p class="text-xs text-blue-400 mb-6">Duration: 2-4 years | Annual Fees: ₹25,000 - ₹1,20,000/year</p>
                <div class="mb-8">
                    <h4 class="font-bold text-slate-900 text-sm mb-3">Popular Courses</h4>
                    <ul class="space-y-2 text-xs text-slate-500">
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> D.Ed</li>
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> B.Ed</li>
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> M.Ed</li>
                        <li class="flex items-center gap-2 font-medium">+2 more</li>
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
                <a href="javascript:void(0)" onclick="openApplyModal('Education')" class="block mt-8 text-[#00ADEF] font-bold text-sm border-b border-transparent hover:border-[#00ADEF] transition-all w-fit">Apply for Education</a>
            </div>

            <!-- Paramedical Card -->
            <div class="program-card bg-white p-8 rounded-3xl border border-slate-100 shadow-xl hover-lift reveal-on-scroll" data-category="paramedical">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-2xl font-black text-slate-900">Paramedical</h3>
                    <div class="flex flex-wrap gap-1 justify-end">
                        <span class="bg-slate-100 text-[10px] font-bold px-2 py-1 rounded">Regular</span>
                        <span class="bg-slate-50 text-[10px] font-bold px-2 py-1 rounded">Distance</span>
                        <span class="bg-slate-50 text-[10px] font-bold px-2 py-1 rounded">Online</span>
                    </div>
                </div>
                <p class="text-xs text-blue-400 mb-6">Duration: 2-4 years | Annual Fees: ₹40,000 - ₹1,50,000/year</p>
                <div class="mb-8">
                    <h4 class="font-bold text-slate-900 text-sm mb-3">Popular Courses</h4>
                    <ul class="space-y-2 text-xs text-slate-500">
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> DMLT</li>
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> BMLT</li>
                        <li class="flex items-center gap-2"><div class="w-1 h-1 bg-blue-400 rounded-full"></div> B.Sc Radiology</li>
                        <li class="flex items-center gap-2 font-medium">+1 more</li>
                    </ul>
                </div>
                <div class="pt-6 border-t border-slate-50 space-y-4">
                    <div class="flex justify-between text-[11px]">
                        <span class="text-slate-400">Eligibility:</span>
                        <span class="font-bold text-slate-700">10+2 with PCB</span>
                    </div>
                    <div class="flex justify-between items-center text-[11px]">
                        <span class="text-slate-400">Accreditation:</span>
                        <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full font-bold">NAAC Grade A++</span>
                    </div>
                </div>
                <a href="javascript:void(0)" onclick="openApplyModal('Paramedical')" class="block mt-8 text-[#00ADEF] font-bold text-sm border-b border-transparent hover:border-[#00ADEF] transition-all w-fit">Apply for Paramedical</a>
            </div>

        </div>
    </div>
</section>

<script>
function filterPrograms(category) {
    const cards = document.querySelectorAll('.program-card');
    const buttons = document.querySelectorAll('.category-btn');

    // Update buttons
    buttons.forEach(btn => {
        btn.classList.remove('bg-[#003B6D]', 'text-white', 'active');
        btn.classList.add('bg-white', 'text-slate-600', 'border-slate-200');
        
        if (btn.innerText.toLowerCase().includes(category) || (category === 'all' && btn.innerText.includes('All'))) {
            btn.classList.remove('bg-white', 'text-slate-600', 'border-slate-200');
            btn.classList.add('bg-[#003B6D]', 'text-white', 'active');
        }
    });

    // Filter cards
    cards.forEach(card => {
        card.style.transition = 'all 0.4s ease';
        if (category === 'all' || card.getAttribute('data-category') === category) {
            card.style.display = 'block';
            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'scale(1)';
            }, 10);
        } else {
            card.style.opacity = '0';
            card.style.transform = 'scale(0.95)';
            setTimeout(() => {
                card.style.display = 'none';
            }, 400);
        }
    });
}
</script>

<?php include 'includes/footer.php'; ?>
