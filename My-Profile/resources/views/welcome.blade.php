<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Yoseph Zosimus Sakera</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <script src="https://cdn.tailwindcss.com"></script>
        @endif

        <style>
            body {
                font-family: 'Instrument Sans', sans-serif;
                background-color: #080a09;
                color: #ffffff;
            }
            .glass-card {
                background: rgba(255, 255, 255, 0.02);
                border: 1px solid rgba(255, 255, 255, 0.05);
                backdrop-filter: blur(12px);
            }
            .glow-bg {
                position: absolute;
                width: 800px;
                height: 800px;
                background: radial-gradient(circle, rgba(16,185,129,0.12) 0%, rgba(0,0,0,0) 65%);
                top: -300px;
                left: -200px;
                z-index: -1;
                pointer-events: none;
            }
            .glow-bg-right {
                position: absolute;
                width: 600px;
                height: 600px;
                background: radial-gradient(circle, rgba(16,185,129,0.08) 0%, rgba(0,0,0,0) 65%);
                bottom: 0;
                right: -200px;
                z-index: -1;
                pointer-events: none;
            }
        </style>
    </head>
    <body class="relative overflow-x-hidden antialiased selection:bg-emerald-500 selection:text-white">
        <div class="glow-bg"></div>
        <div class="glow-bg-right"></div>

        <header class="max-w-7xl mx-auto px-6 py-6 flex items-center justify-between z-10 relative">
            <div class="text-2xl font-bold tracking-tight">yoseph<span class="text-emerald-500">.</span></div>

            <nav class="hidden md:flex space-x-8 text-sm font-medium text-gray-400">
                <a href="#" class="text-white transition">Home</a>
                <a href="#skills" class="hover:text-white transition">Skills</a>
                <a href="#experience" class="hover:text-white transition">Experience</a>
                <a href="#portfolio" class="hover:text-white transition">Portfolio</a>
            </nav>

            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=joysakera01@gmail.com" target="_blank" class="bg-white text-black px-6 py-2.5 rounded-full text-sm font-semibold hover:bg-gray-200 transition">
                Contact Me
            </a>
        </header>

        <main class="max-w-7xl mx-auto px-6 pt-16 pb-24 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">

                <div class="md:col-span-5 space-y-6">
                    <h1 class="text-5xl md:text-7xl font-bold leading-tight tracking-tight">Hi! Yoseph</h1>

                    <div class="flex items-center space-x-4">
                        <div class="h-px w-12 bg-gray-600"></div>
                        <span class="text-lg text-gray-300 font-medium">Fullstack Developer</span>
                    </div>

                    <p class="text-gray-400 leading-relaxed text-base max-w-md">
                        Fresh graduate in Computer Science with experience in web development and system building, focusing on improving operational efficiency through technology. Strong analytical and problem-solving abilities.
                    </p>

                    <div class="flex items-center space-x-4 pt-6">
                        <a href="https://wa.me/6281238036180" target="_blank" class="bg-white text-black px-6 py-3 rounded-full text-sm font-semibold hover:bg-gray-200 transition flex items-center space-x-2">
                            <span>Let's Talk</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                        <a href="{{ asset('assets/Yoseph_Zosimus_Sakera_CV.pdf') }}" download="CV_Yoseph_Zosimus_Sakera.pdf" class="border border-gray-600 text-white px-6 py-3 rounded-full text-sm font-semibold hover:bg-gray-800 transition flex items-center space-x-2">
                            <span>Download CV</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                        </a>
                    </div>
                </div>

                <div class="md:col-span-4 relative flex justify-center">
                    <div class="absolute inset-0 bg-emerald-600/20 blur-3xl rounded-full z-0"></div>
                    <img src="{{ asset('images/profile.jpg') }}" alt="Yoseph Zosimus Sakera" class="relative z-10 w-full max-w-[340px] rounded-4xl object-cover shadow-2xl border border-white/5 grayscale-20% hover:grayscale-0 transition duration-500" style="aspect-ratio: 3/4;">
                </div>

                <div class="md:col-span-3 flex flex-col space-y-10 md:pl-12">
                    <div>
                        <h2 class="text-4xl font-bold">1+</h2>
                        <p class="text-sm text-gray-500 mt-2 font-medium">Years of experience</p>
                    </div>
                    <div>
                        <h2 class="text-4xl font-bold">3.47</h2>
                        <p class="text-sm text-gray-500 mt-2 font-medium">GPA at BINUS University</p>
                    </div>
                    <div>
                        <h2 class="text-4xl font-bold">PHP/SQL</h2>
                        <p class="text-sm text-gray-500 mt-2 font-medium">Core Stack Technologies</p>
                    </div>
                </div>
            </div>
        </main>

        <section id="skills" class="max-w-7xl mx-auto px-6 py-24 border-t border-white/5 relative z-10">
            <div class="flex items-center space-x-4 mb-6">
                <div class="h-px w-12 bg-gray-600"></div>
                <span class="text-sm text-gray-400 uppercase tracking-widest font-medium">My Skills</span>
            </div>

            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 gap-6">
                <h2 class="text-3xl md:text-5xl font-bold max-w-md leading-tight">WHAT I'M<br>OFFERING</h2>
                <a href="#portfolio" class="bg-white text-black px-6 py-2.5 rounded-full text-sm font-semibold hover:bg-gray-200 transition">
                    View Portfolio
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="glass-card p-10 rounded-4xl hover:bg-white/5 transition duration-300 cursor-pointer group">
                    <div class="w-14 h-14 bg-white/5 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition duration-300">
                        <svg class="w-7 h-7 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Backend Development</h3>
                    <p class="text-sm text-gray-400 mb-8 leading-relaxed">System analysis and robust database management utilizing PHP, Laravel, and MySQL to support business processes.</p>
                </div>

                <div class="glass-card p-10 rounded-4xl hover:bg-white/5 transition duration-300 cursor-pointer group">
                    <div class="w-14 h-14 bg-white/5 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition duration-300">
                        <svg class="w-7 h-7 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Frontend Development</h3>
                    <p class="text-sm text-gray-400 mb-8 leading-relaxed">Developing interactive and responsive applications using HTML, CSS, JavaScript, Tailwind CSS, and Bootstrap framework.</p>
                </div>

                <div class="glass-card p-10 rounded-4xl hover:bg-white/5 transition duration-300 cursor-pointer group">
                    <div class="w-14 h-14 bg-white/5 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition duration-300">
                        <svg class="w-7 h-7 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Tools & Design</h3>
                    <p class="text-sm text-gray-400 mb-8 leading-relaxed">Proficient in version control documentation (Git) and crafting visual layouts using modern design tools like Figma and Canva.</p>
                </div>
            </div>
        </section>

        <section id="experience" class="max-w-7xl mx-auto px-6 py-24 border-t border-white/5 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Experience</h2>
                <p class="text-gray-400 max-w-xl mx-auto">A look into my recent professional journey, system development projects, and organizational management roles.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="glass-card p-8 rounded-4xl">
                    <div class="flex justify-between items-start mb-6">
                        <span class="text-xs font-bold bg-emerald-500/20 text-emerald-400 px-4 py-1.5 rounded-full uppercase tracking-wider">Feb 2024 - Feb 2025</span>
                        <span class="text-white bg-white/10 px-3 py-1 text-xs rounded-md">Internship</span>
                    </div>

                    <div class="flex items-center space-x-4 mb-6">
                        <div class="w-14 h-14 bg-white/5 rounded-full flex items-center justify-center shrink-0 overflow-hidden border border-white/10 p-1">
                            <img src="{{ asset('images/sidigs-logo.png') }}" alt="SIDIGS" class="w-full h-full object-contain rounded-full">
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-1">Fullstack Developer</h3>
                            <p class="text-emerald-400 font-medium text-sm">SIDIGS</p>
                        </div>
                    </div>

                    <ul class="text-sm text-gray-300 space-y-3 list-none">
                        <li class="flex items-start"><span class="text-emerald-500 mr-2 mt-0.5">▹</span> Developed a student website for managing laundry and UKS.</li>
                        <li class="flex items-start"><span class="text-emerald-500 mr-2 mt-0.5">▹</span> Developed a teacher website for exporting weekly, monthly, and yearly reports to PDF or Excel.</li>
                        <li class="flex items-start"><span class="text-emerald-500 mr-2 mt-0.5">▹</span> Maintained and added new features to the main SIDIGS website using PHP and MySQL.</li>
                    </ul>
                </div>

                <div class="glass-card p-8 rounded-4xl">
                    <div class="flex justify-between items-start mb-6">
                        <span class="text-xs font-bold bg-white/10 text-white px-4 py-1.5 rounded-full uppercase tracking-wider">Feb 2023 - Feb 2024</span>
                        <span class="text-white bg-white/10 px-3 py-1 text-xs rounded-md">Organization</span>
                    </div>

                    <div class="flex items-center space-x-4 mb-6">
                        <div class="w-14 h-14 bg-white/5 rounded-full flex items-center justify-center shrink-0 overflow-hidden border border-white/10 p-1">
                            <img src="{{ asset('images/panorama-logo.png') }}" alt="Panorama BINUS" class="w-full h-full object-contain rounded-full">
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-1">Treasurer</h3>
                            <p class="text-gray-400 font-medium text-sm">Panorama BINUS</p>
                        </div>
                    </div>

                    <ul class="text-sm text-gray-300 space-y-3 list-none">
                        <li class="flex items-start"><span class="text-gray-500 mr-2 mt-0.5">▹</span> Managed and monitored cash flow accurately and transparently.</li>
                        <li class="flex items-start"><span class="text-gray-500 mr-2 mt-0.5">▹</span> Developed and allocated budgets to efficiently support programs and daily operations.</li>
                        <li class="flex items-start"><span class="text-gray-500 mr-2 mt-0.5">▹</span> Generated periodic comprehensive monthly and end-of-term financial reports.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="portfolio" class="max-w-7xl mx-auto px-6 py-24 border-t border-white/5 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">My Featured <span class="text-emerald-500">Project</span></h2>
                <p class="text-gray-400 max-w-xl mx-auto text-sm">A comprehensive look at my most recent full-stack development work.</p>
            </div>

            <div class="glass-card rounded-4xl p-6 md:p-10 max-w-4xl mx-auto flex flex-col md:flex-row gap-8 items-center">
                <div class="w-full md:w-1/2 aspect-video bg-white/5 rounded-xl overflow-hidden relative group border border-white/10">
                    <img src="{{ asset('images/kost-lolita.png') }}" alt="Preview Web Kost Lolita" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">

                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
                        <span class="text-white text-sm font-semibold tracking-widest uppercase border border-white px-4 py-2 rounded-full backdrop-blur-sm">Live Preview</span>
                    </div>
                </div>

                <div class="w-full md:w-1/2 space-y-4">
                    <span class="text-xs font-bold bg-emerald-500/20 text-emerald-400 px-4 py-1.5 rounded-full uppercase tracking-wider inline-block">Fullstack Web App</span>
                    <h3 class="text-3xl font-bold">Web Kost Lolita</h3>
                    <p class="text-gray-400 leading-relaxed">
                        A complete web application designed for Kost (boarding house) management. The system is equipped with robust features including automated financial recording and seamless payment gateway integration to facilitate secure and easy transactions.
                    </p>
                    <div class="pt-4 flex items-center space-x-4">
                        <a href="https://github.com/SlayerrR18/kost-lolita.git" target="_blank" class="bg-white text-black px-6 py-2.5 rounded-full text-sm font-semibold hover:bg-gray-200 transition flex items-center space-x-2">
                            <span>View Source on GitHub</span>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <footer class="max-w-7xl mx-auto px-6 py-16 border-t border-white/5 text-center relative z-10">
            <h2 class="text-3xl font-bold mb-4">Let's Connect</h2>
            <p class="text-gray-400 mb-10 max-w-md mx-auto">Feel free to reach out for collaborations, project inquiries, or just to say hi.</p>

            <div class="flex flex-wrap justify-center items-center gap-4 md:gap-8 mb-12">
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=joysakera01@gmail.com" target="_blank" class="flex flex-col items-center group">
                    <div class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center mb-3 group-hover:bg-emerald-500/20 group-hover:text-emerald-400 group-hover:border-emerald-500/30 transition duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <span class="text-sm text-gray-400 group-hover:text-white transition">Email</span>
                </a>

                <a href="https://wa.me/6281238036180" target="_blank" class="flex flex-col items-center group">
                    <div class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center mb-3 group-hover:bg-[#25D366]/20 group-hover:text-[#25D366] group-hover:border-[#25D366]/30 transition duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.099.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 1.856.001 3.598.723 4.907 2.034 1.31 1.311 2.031 3.054 2.03 4.908-.001 3.825-3.113 6.938-6.937 6.938z"></path></svg>
                    </div>
                    <span class="text-sm text-gray-400 group-hover:text-white transition">WhatsApp</span>
                </a>

                <a href="https://instagram.com/joy_sakera" target="_blank" class="flex flex-col items-center group">
                    <div class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center mb-3 group-hover:bg-[#E1306C]/20 group-hover:text-[#E1306C] group-hover:border-[#E1306C]/30 transition duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"></path></svg>
                    </div>
                    <span class="text-sm text-gray-400 group-hover:text-white transition">Instagram</span>
                </a>

                <a href="https://www.linkedin.com/in/yoseph-zosimus-sakera-46890a294" target="_blank" class="flex flex-col items-center group">
                    <div class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center mb-3 group-hover:bg-[#0A66C2]/20 group-hover:text-[#0A66C2] group-hover:border-[#0A66C2]/30 transition duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"></path></svg>
                    </div>
                    <span class="text-sm text-gray-400 group-hover:text-white transition">LinkedIn</span>
                </a>

                <a href="https://github.com/SlayerrR18" target="_blank" class="flex flex-col items-center group">
                    <div class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center mb-3 group-hover:bg-white/20 group-hover:text-white group-hover:border-white/40 transition duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                    </div>
                    <span class="text-sm text-gray-400 group-hover:text-white transition">GitHub</span>
                </a>
            </div>

            <p class="text-xs text-gray-600 mt-6">&copy; {{ date('Y') }} Yoseph Zosimus Sakera. All rights reserved.</p>
        </footer>

    </body>
</html>
