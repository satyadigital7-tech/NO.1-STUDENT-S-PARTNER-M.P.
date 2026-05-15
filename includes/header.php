<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NO.1 STUDENT'S PARTNER, M.P.</title>
    <link rel="icon" type="image/jpeg" href="assets/Logo.jpeg">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Outfit', sans-serif; }
        .bg-main-gradient {
            background: linear-gradient(135deg, #f0f7ff 0%, #ffffff 50%, #e0f2fe 100%);
            background-attachment: fixed;
        }
        .bg-glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
        }
        .gradient-text {
            background: linear-gradient(135deg, #003B6D 0%, #00ADEF 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        .reveal-on-scroll {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .reveal-on-scroll.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Advanced Animations */
        @keyframes pulse-soft {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.05); opacity: 0.9; }
        }
        @keyframes shimmer {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }

        .animate-pulse-soft { animation: pulse-soft 3s ease-in-out infinite; }
        
        .btn-shimmer {
            background: linear-gradient(90deg, #003B6D 0%, #00ADEF 50%, #003B6D 100%);
            background-size: 200% 100%;
            animation: shimmer 3s infinite linear;
        }

        .hover-lift { transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
        .hover-lift:hover { transform: translateY(-8px); }

        .hover-glow:hover { box-shadow: 0 20px 25px -5px rgba(0, 59, 109, 0.1), 0 10px 10px -5px rgba(0, 59, 109, 0.04); }
        /* Hide Google Translate top bar */
        .goog-te-banner-frame.skiptranslate, .goog-te-gadget-icon {
            display: none !important;
        }
        body {
            top: 0px !important;
        }
        .goog-te-menu-value {
            display: none !important;
        }
        .goog-te-gadget {
            color: transparent !important;
        }
        .goog-te-gadget span {
            display: none !important;
        }
        .goog-text-highlight {
            background: none !important;
            box-shadow: none !important;
        }
    </style>
</head>
<body class="bg-main-gradient text-slate-900">
    <!-- Top Bar -->
    <div class="bg-[#003B6D] text-white py-2 text-[10px] md:text-xs font-medium">
        <div class="container mx-auto px-6 md:px-12 lg:px-20 flex justify-between items-center">
            <div class="flex items-center gap-4 md:gap-6">
                <a href="tel:+916265390145" class="flex items-center gap-2 hover:text-[#00ADEF] transition-colors">
                    <i class="fa-solid fa-phone"></i> <span>+91 6265390145</span>
                </a>
                <a href="mailto:no1studentspartner@gmail.com" class="hidden md:flex items-center gap-2 hover:text-[#00ADEF] transition-colors">
                    <i class="fa-solid fa-envelope"></i> <span>no1studentspartner@gmail.com</span>
                </a>
            </div>
            <div class="flex items-center gap-4">
                <a href="#" class="hover:text-[#00ADEF] transition-colors"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="hover:text-[#00ADEF] transition-colors"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://wa.me/916265390145" class="hover:text-[#00ADEF] transition-colors"><i class="fa-brands fa-whatsapp text-sm"></i></a>
            </div>
        </div>
    </div>

    <header class="sticky top-0 z-50 bg-white border-b border-slate-100 shadow-sm">
        <nav class="container mx-auto px-6 lg:px-20 py-3 flex items-center justify-between">
            <a href="index.php" class="flex items-center gap-3">
                <div class="h-10 md:h-14">
                    <img src="assets/Logo.jpeg" alt="Learning Education Hub Logo" class="h-full object-contain">
                </div>
            </a>
            
            <ul class="hidden lg:flex items-center gap-8 text-[13px] font-bold text-slate-700 uppercase">
                <li><a href="index.php" class="hover:text-[#00ADEF] transition-colors">Home</a></li>
                <li><a href="about.php" class="hover:text-[#00ADEF] transition-colors">About Us</a></li>
                <li><a href="programs.php" class="hover:text-[#00ADEF] transition-colors">Programs</a></li>
                <li><a href="contact.php" class="hover:text-[#00ADEF] transition-colors">Contact</a></li>
            </ul>

            <div class="flex items-center gap-3 md:gap-4">
                <div id="google_translate_element" class="hidden md:block"></div>
                <a href="javascript:void(0)" onclick="openApplyModal('General Inquiry')" class="bg-slate-900 hover:bg-[#003B6D] text-white px-4 md:px-6 py-2 rounded font-bold text-[10px] md:text-sm transition-all uppercase">Apply now</a>
                <button onclick="toggleMobileMenu()" class="lg:hidden text-slate-900 text-2xl focus:outline-none"><i class="fa-solid fa-bars" id="menuIcon"></i></button>
            </div>
        </nav>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="lg:hidden hidden fixed inset-0 z-[60] bg-white pt-20 px-8 transition-all duration-300 transform translate-x-full">
            <button onclick="toggleMobileMenu()" class="absolute top-6 right-6 text-2xl text-slate-900"><i class="fa-solid fa-xmark"></i></button>
            <ul class="flex flex-col gap-6 text-xl font-bold text-slate-900 uppercase">
                <li><a href="index.php" onclick="toggleMobileMenu()" class="block border-b border-slate-50 pb-4">Home</a></li>
                <li><a href="about.php" onclick="toggleMobileMenu()" class="block border-b border-slate-50 pb-4">About Us</a></li>
                <li><a href="programs.php" onclick="toggleMobileMenu()" class="block border-b border-slate-50 pb-4">Programs</a></li>
                <li><a href="contact.php" onclick="toggleMobileMenu()" class="block border-b border-slate-50 pb-4">Contact</a></li>
            </ul>
            <div class="mt-12 space-y-4">
                <p class="text-slate-400 text-xs font-bold uppercase tracking-widest">Connect With Us</p>
                <div class="flex gap-4">
                    <a href="tel:+916265390145" class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center text-xl"><i class="fa-solid fa-phone"></i></a>
                    <a href="mailto:no1studentspartner@gmail.com" class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center text-xl"><i class="fa-solid fa-envelope"></i></a>
                    <a href="https://wa.me/916265390145" class="w-12 h-12 rounded-full bg-green-100 text-green-600 flex items-center justify-center text-xl"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
        </div>

        <script>
            function toggleMobileMenu() {
                const menu = document.getElementById('mobileMenu');
                const isHidden = menu.classList.contains('hidden');
                
                if (isHidden) {
                    menu.classList.remove('hidden');
                    setTimeout(() => menu.classList.remove('translate-x-full'), 10);
                    document.body.style.overflow = 'hidden';
                } else {
                    menu.classList.add('translate-x-full');
                    setTimeout(() => menu.classList.add('hidden'), 300);
                    document.body.style.overflow = 'auto';
                }
            }
        </script>

        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en', 
                    includedLanguages: 'hi,en', 
                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                    autoDisplay: false
                }, 'google_translate_element');
            }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </header>
    <main>
