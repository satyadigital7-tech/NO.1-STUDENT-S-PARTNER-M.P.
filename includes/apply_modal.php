<!-- Apply Now Modal -->
<div id="applyModal" class="fixed inset-0 z-[100] hidden overflow-y-auto">
    <!-- Backdrop -->
    <div class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity" onclick="closeApplyModal()"></div>
    
    <!-- Modal Content -->
    <div class="relative min-h-screen flex items-center justify-center p-4">
        <div class="relative bg-white w-full max-w-2xl rounded-[2.5rem] shadow-2xl overflow-hidden transform transition-all scale-95 opacity-0 duration-300" id="modalContainer">
            <!-- Close Button -->
            <button onclick="closeApplyModal()" class="absolute top-6 right-6 w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center hover:bg-blue-50 hover:text-[#003B6D] transition-all z-10">
                <i class="fa-solid fa-xmark"></i>
            </button>

            <div class="p-8 lg:p-12">
                <div class="mb-10 text-center">
                    <h2 class="text-3xl font-black text-slate-900 mb-2">Apply for Admission</h2>
                    <p class="text-slate-500 text-sm">Start your journey with <span id="modalProgramName" class="text-[#003B6D] font-bold"></span></p>
                </div>

                <form id="modalApplyForm" action="https://script.google.com/macros/s/AKfycbzhMRh4hDBGbrMvwIqrFEugpbJim8HWL_NMepQRGOef0nIJKwmAWNQ2IRLmes5Hlkp8/exec" method="POST" class="space-y-6">
                    <input type="hidden" id="modal_program_input" name="program">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-2">Full Name</label>
                            <input type="text" name="Full Name" required class="w-full px-4 py-3 rounded-xl border border-slate-100 focus:border-[#003B6D] focus:ring-2 focus:ring-[#003B6D]/10 outline-none transition-all text-sm bg-slate-50/50" placeholder="Enter your name">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-2">Phone Number</label>
                            <input type="tel" name="phone" required class="w-full px-4 py-3 rounded-xl border border-slate-100 focus:border-[#003B6D] focus:ring-2 focus:ring-[#003B6D]/10 outline-none transition-all text-sm bg-slate-50/50" placeholder="+91">
                        </div>
                    </div>

                    <div>
                        <label class="block text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-2">Email Address</label>
                        <input type="email" name="email" required class="w-full px-4 py-3 rounded-xl border border-slate-100 focus:border-[#003B6D] focus:ring-2 focus:ring-[#003B6D]/10 outline-none transition-all text-sm bg-slate-50/50" placeholder="example@mail.com">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-2">Current Education</label>
                            <input type="text" name="education" class="w-full px-4 py-3 rounded-xl border border-slate-100 focus:border-[#003B6D] focus:ring-2 focus:ring-[#003B6D]/10 outline-none transition-all text-sm bg-slate-50/50" placeholder="e.g. 12th Pass">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-2">Preferred Location</label>
                            <select name="location" class="w-full px-4 py-3 rounded-xl border border-slate-100 focus:border-[#003B6D] focus:ring-2 focus:ring-[#003B6D]/10 outline-none transition-all text-sm bg-slate-50/50 appearance-none">
                                <option value="india">India</option>
                                <option value="abroad">Abroad</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-[#003B6D] hover:bg-[#002b50] text-white py-4 rounded-xl font-bold text-sm transition-all uppercase shadow-lg shadow-blue-900/10 mt-4">
                        Submit Application
                    </button>
                    
                    <p class="text-center text-[10px] text-slate-400">
                        By submitting, you agree to our privacy policy and consent to be contacted by our expert counselors.
                    </p>
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
                        alert("Application submitted successfully!");
                        form.reset();
                        submitBtn.innerText = originalText;
                        submitBtn.disabled = false;
                        if(typeof closeApplyModal === 'function') closeApplyModal();
                    })
                    .catch(error => {
                        alert("Application submitted!");
                        form.reset();
                        submitBtn.innerText = originalText;
                        submitBtn.disabled = false;
                        if(typeof closeApplyModal === 'function') closeApplyModal();
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
    const programText = document.getElementById('modalProgramName');
    const programInput = document.getElementById('modal_program_input');

    programText.innerText = program;
    programInput.value = program;

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
