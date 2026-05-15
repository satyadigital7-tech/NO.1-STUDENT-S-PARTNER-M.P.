<!-- Apply Now Modal -->
<div id="applyModal" class="fixed inset-0 z-[100] hidden overflow-y-auto">
    <!-- Backdrop -->
    <div class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity" onclick="closeApplyModal()"></div>
    
    <!-- Modal Content -->
    <div class="relative min-h-screen flex items-center justify-center p-4 py-8 md:py-10">
        <div class="relative bg-white w-full max-w-3xl rounded-3xl md:rounded-[2.5rem] shadow-2xl overflow-hidden transform transition-all scale-95 opacity-0 duration-300" id="modalContainer">
            <!-- Close Button -->
            <button onclick="closeApplyModal()" class="absolute top-6 right-6 w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center hover:bg-blue-50 hover:text-[#003B6D] transition-all z-10">
                <i class="fa-solid fa-xmark"></i>
            </button>

            <div class="p-6 md:p-10 lg:p-14">
                <form id="modalApplyForm" action="https://script.google.com/macros/s/AKfycbzhMRh4hDBGbrMvwIqrFEugpbJim8HWL_NMepQRGOef0nIJKwmAWNQ2IRLmes5Hlkp8/exec" method="POST" class="space-y-5 md:space-y-8">
                    
                    <!-- Full Name -->
                    <div>
                        <label class="block text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-3">Full Name</label>
                        <input type="text" name="Full Name" required class="w-full px-5 py-4 rounded-xl border border-slate-100 focus:border-[#003B6D] focus:ring-4 focus:ring-[#003B6D]/5 outline-none transition-all text-sm bg-slate-50/50" placeholder="Enter your full name">
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8">
                        <div>
                            <label class="block text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-3">Phone Number</label>
                            <input type="tel" name="phone" required class="w-full px-5 py-4 rounded-xl border border-slate-100 focus:border-[#003B6D] focus:ring-4 focus:ring-[#003B6D]/5 outline-none transition-all text-sm bg-slate-50/50" placeholder="+91">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-3">Email Address</label>
                            <input type="email" name="email" required class="w-full px-5 py-4 rounded-xl border border-slate-100 focus:border-[#003B6D] focus:ring-4 focus:ring-[#003B6D]/5 outline-none transition-all text-sm bg-slate-50/50" placeholder="example@mail.com">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 md:gap-8">
                        <div>
                            <label class="block text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-3">Program</label>
                            <input type="text" id="modal_program_input" name="program" class="w-full px-5 py-4 rounded-xl border border-slate-100 focus:border-[#003B6D] focus:ring-4 focus:ring-[#003B6D]/5 outline-none transition-all text-sm bg-slate-50/50" placeholder="e.g. B.Tech">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-3">Education Level</label>
                            <select name="education_level" class="w-full px-5 py-4 rounded-xl border border-slate-100 focus:border-[#003B6D] focus:ring-4 focus:ring-[#003B6D]/5 outline-none transition-all text-sm bg-slate-50/50 appearance-none">
                                <option value="Undergraduate (UG)">Undergraduate (UG)</option>
                                <option value="Postgraduate (PG)">Postgraduate (PG)</option>
                                <option value="Diploma">Diploma</option>
                                <option value="PhD">PhD</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-3">Location</label>
                            <select name="location" class="w-full px-5 py-4 rounded-xl border border-slate-100 focus:border-[#003B6D] focus:ring-4 focus:ring-[#003B6D]/5 outline-none transition-all text-sm bg-slate-50/50 appearance-none">
                                <option value="India">India</option>
                                <option value="Abroad">Abroad</option>
                            </select>
                        </div>
                    </div>

                    <!-- Additional Details -->
                    <div>
                        <label class="block text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-3">Additional Information</label>
                        <textarea name="Message" rows="4" class="w-full px-5 py-4 rounded-xl border border-slate-100 focus:border-[#003B6D] focus:ring-4 focus:ring-[#003B6D]/5 outline-none transition-all resize-none text-sm bg-slate-50/50" placeholder="Tell us more about your academic goals..."></textarea>
                    </div>

                    <div class="text-center pt-4 md:pt-6">
                        <button type="submit" class="w-full bg-[#003B6D] hover:bg-slate-900 text-white px-8 py-4 md:px-10 md:py-5 rounded-xl font-bold transition-all uppercase text-sm shadow-2xl shadow-blue-900/10 mb-6">
                            Submit Application
                        </button>
                        <p class="text-sm text-slate-500">
                            Need help? <a href="tel:+916265390145" class="text-[#00ADEF] font-bold hover:underline">Call us: +91 6265390145</a>
                        </p>
                    </div>
                </form>
                
                <script>
                document.getElementById('modalApplyForm').addEventListener('submit', function(e) {
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
                        form.reset();
                        submitBtn.innerText = originalText;
                        submitBtn.disabled = false;
                        if(typeof closeApplyModal === 'function') closeApplyModal();
                        if(typeof showSuccessModal === 'function') showSuccessModal();
                    })
                    .catch(error => {
                        form.reset();
                        submitBtn.innerText = originalText;
                        submitBtn.disabled = false;
                        if(typeof closeApplyModal === 'function') closeApplyModal();
                        if(typeof showSuccessModal === 'function') showSuccessModal();
                    });
                });
                </script>
            </div>
        </div>
    </div>
</div>

<script>
function openApplyModal(program) {
    const modal = document.getElementById('applyModal');
    const container = document.getElementById('modalContainer');
    const programInput = document.getElementById('modal_program_input');

    if (programInput && program) {
        programInput.value = program;
    }

    modal.classList.remove('hidden');
    setTimeout(() => {
        container.classList.remove('scale-95', 'opacity-0');
        container.classList.add('scale-100', 'opacity-100');
    }, 10);
    
    document.body.style.overflow = 'hidden';
}

function closeApplyModal() {
    const modal = document.getElementById('applyModal');
    const container = document.getElementById('modalContainer');

    container.classList.remove('scale-100', 'opacity-100');
    container.classList.add('scale-95', 'opacity-0');

    setTimeout(() => {
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }, 300);
}
</script>
