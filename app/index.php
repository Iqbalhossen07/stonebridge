<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Modern Dashboard — Stonebridge Legal</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600&family=Merriweather:wght@700;800&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: '#87550D',
                    'primary-light': '#a17b3f',
                    'primary-dark': '#6d450a',
                    'secondary': '#f3f4f6',
                    'accent': '#f59e0b',
                },
                fontFamily: {
                    heading: ['Merriweather', 'serif'],
                    body: ['Lora', 'serif'],
                },
                boxShadow: {
                    'soft-1': '0 6px 24px -8px rgba(0,0,0,.15)',
                    'soft-2': '0 12px 36px -10px rgba(0,0,0,.20)',
                    'soft-3': '0 18px 48px -12px rgba(0,0,0,.28)',
                    glow: '0 0 0 2px rgba(135,85,13,.2), 0 12px 40px -6px rgba(135,85,13,.35)'
                }
            }
        }
    }
    </script>

    <style>
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background-color: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #c4c4c4;
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background-color: #a17b3f;
    }

    .sidebar-link {
        transition: background-color 0.3s, color 0.3s, padding-left 0.3s;
    }

    .sidebar-link:hover,
    .sidebar-link.active {
        background-color: rgba(255, 255, 255, 0.05);
        color: #ffffff;
        padding-left: 1.75rem;
    }

    .sidebar-link.active {
        border-left: 4px solid #f59e0b;
    }

    #mobile-sidebar {
        transition: transform 0.3s ease-in-out;
    }
    </style>
</head>

<body class="bg-secondary font-body text-slate-800 antialiased">

    <div class="flex h-screen bg-secondary overflow-hidden">
        <aside id="desktop-sidebar" class="w-64 flex-shrink-0 bg-gray-900 text-white hidden lg:flex flex-col">
            <div class="h-20 flex items-center justify-center border-b border-white/10 bg-white">
                <img src="../img/logo.png" alt="Logo" class="w-36 ">
            </div>
            <nav class="flex-1 px-4 py-6 space-y-2">
                <a href="#" class="sidebar-link active flex items-center gap-3 px-6 py-3 rounded-lg"><i
                        class="fas fa-tachometer-alt w-5"></i><span>Dashboard</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i
                        class="fas fa-gavel w-5"></i><span>My Cases</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i
                        class="fas fa-users w-5"></i><span>Clients</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i
                        class="fas fa-calendar-alt w-5"></i><span>Appointments</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i
                        class="fas fa-envelope w-5"></i><span>Messages</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i
                        class="fas fa-cog w-5"></i><span>Settings</span></a>
            </nav>
            <div class="p-4 border-t border-white/10">
                <div class="flex items-center gap-4">
                    <img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?q=80&w=800&auto=format&fit=crop"
                        alt="User" class="w-10 h-10 rounded-full">
                    <div>
                        <p class="font-semibold text-white">David Lee</p>
                        <a href="#" class="text-xs text-gray-400 hover:underline">View Profile</a>
                    </div>
                </div>
            </div>
        </aside>

        <div id="mobile-sidebar-overlay" class="fixed inset-0 bg-black/50 z-30 lg:hidden hidden"></div>
        <aside id="mobile-sidebar"
            class="w-64 fixed inset-y-0 left-0 bg-gray-900 text-white flex flex-col z-40 transform -translate-x-full lg:hidden">
            <div class="h-20 flex items-center justify-between px-4 border-b border-white/10">
                <img src="img/logo.png" alt="Logo" class="w-32 invert brightness-0">
                <button id="close-menu" class="text-white p-2 rounded-full hover:bg-white/10"><i
                        class="fas fa-times"></i></button>
            </div>
            <nav class="flex-1 px-4 py-6 space-y-2">
                <a href="#" class="sidebar-link active flex items-center gap-3 px-6 py-3 rounded-lg"><i
                        class="fas fa-tachometer-alt w-5"></i><span>Dashboard</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i
                        class="fas fa-gavel w-5"></i><span>My Cases</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i
                        class="fas fa-users w-5"></i><span>Clients</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i
                        class="fas fa-calendar-alt w-5"></i><span>Appointments</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i
                        class="fas fa-envelope w-5"></i><span>Messages</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i
                        class="fas fa-cog w-5"></i><span>Settings</span></a>
            </nav>
        </aside>

        <div class="flex-1 flex flex-col overflow-y-auto">
            <header class="bg-white shadow-soft-1 sticky top-0 z-20">
                <div class="container mx-auto px-6 py-3 flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <button id="open-menu" class="lg:hidden text-slate-600 p-2 rounded-full hover:bg-slate-100"><i
                                class="fas fa-bars"></i></button>
                        <h1 class="font-heading text-xl md:text-2xl font-bold text-slate-800">Dashboard</h1>
                    </div>
                    <div class="flex items-center gap-3 md:gap-5">
                        <div class="relative hidden md:block">
                            <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
                            <input type="text" placeholder="Search..."
                                class="pl-11 pr-4 py-2.5 w-48 lg:w-64 border rounded-full bg-slate-50 focus:bg-white focus:ring-2 focus:ring-primary/50 focus:outline-none transition-all duration-300">
                        </div>
                        <button
                            class="text-slate-500 hover:text-primary relative p-2 rounded-full hover:bg-slate-100"><i
                                class="fas fa-bell fa-lg"></i><span
                                class="absolute top-1 right-1 h-2.5 w-2.5 border-2 border-white bg-accent rounded-full"></span></button>
                        <div class="hidden sm:block h-8 w-px bg-slate-200"></div>
                        <button class="flex items-center gap-3 group">
                            <img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?q=80&w=800&auto=format&fit=crop"
                                alt="User"
                                class="w-10 h-10 rounded-full object-cover ring-2 ring-offset-2 ring-transparent group-hover:ring-primary/50 transition-all duration-300">
                            <div class="hidden sm:block text-left">
                                <p class="font-heading text-sm font-semibold text-slate-800 whitespace-nowrap">David Lee
                                </p>
                                <p class="text-xs text-slate-500">Administrator</p>
                            </div>
                        </button>
                    </div>
                </div>
            </header>

            <main class="flex-1 p-6">

                <div class="relative bg-gradient-to-r from-primary to-primary-light text-white p-6 md:p-8 rounded-xl shadow-soft-2 mb-6 overflow-hidden"
                    data-aos="fade-down">
                    <div class="relative z-10">
                        <h2 class="font-heading text-2xl md:text-3xl font-bold">Welcome Back, David!</h2>
                        <p class="mt-2 text-white/80 max-w-2xl">Your dedication and hard work are the driving forces
                            behind our success. Keep inspiring the team!</p>

                        <div
                            class="mt-4 flex items-center gap-3 bg-black/20 backdrop-blur-sm px-4 py-2 rounded-lg w-fit">
                            <i class="far fa-calendar-alt"></i>
                            <p class="font-medium text-sm">Tuesday, September 16, 2025</p>
                        </div>
                    </div>
                    <i
                        class="fas fa-gavel absolute -bottom-4 -right-4 text-9xl text-black/10 z-0 transform -rotate-12"></i>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 mb-6">

                    <div class="bg-white p-6 rounded-xl shadow-soft-1 border-l-4 border-primary group hover:shadow-soft-2 hover:-translate-y-1.5 transition-all duration-300 cursor-pointer hover:bg-primary/5"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="flex items-center gap-5">
                            <div
                                class="h-14 w-14 bg-primary/10 text-primary rounded-full flex items-center justify-center shadow-lg shadow-primary/30 group-hover:bg-primary group-hover:text-white group-hover:shadow-primary/40 transition-all duration-300">
                                <i class="fas fa-gavel text-xl"></i>
                            </div>
                            <div>
                                <p class="text-slate-500 text-sm">Active Cases</p>
                                <p
                                    class="font-heading text-2xl font-bold group-hover:text-primary transition-colors duration-300">
                                    34</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-soft-1 border-l-4 border-accent group hover:shadow-soft-2 hover:-translate-y-1.5 transition-all duration-300 cursor-pointer hover:bg-accent/5"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="flex items-center gap-5">
                            <div
                                class="h-14 w-14 bg-accent/10 text-accent rounded-full flex items-center justify-center shadow-lg shadow-accent/30 group-hover:bg-accent group-hover:text-white group-hover:shadow-accent/40 transition-all duration-300">
                                <i class="fas fa-calendar-check text-xl"></i>
                            </div>
                            <div>
                                <p class="text-slate-500 text-sm">Pending Appointments</p>
                                <p
                                    class="font-heading text-2xl font-bold group-hover:text-accent transition-colors duration-300">
                                    12</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-soft-1 border-l-4 border-blue-500 group hover:shadow-soft-2 hover:-translate-y-1.5 transition-all duration-300 cursor-pointer hover:bg-blue-500/5"
                        data-aos="fade-up" data-aos-delay="300">
                        <div class="flex items-center gap-5">
                            <div
                                class="h-14 w-14 bg-blue-500/10 text-blue-500 rounded-full flex items-center justify-center shadow-lg shadow-blue-500/30 group-hover:bg-blue-500 group-hover:text-white group-hover:shadow-blue-500/40 transition-all duration-300">
                                <i class="fas fa-envelope-open-text text-xl"></i>
                            </div>
                            <div>
                                <p class="text-slate-500 text-sm">Unread Messages</p>
                                <p
                                    class="font-heading text-2xl font-bold group-hover:text-blue-500 transition-colors duration-300">
                                    5</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-soft-1 border-l-4 border-green-500 group hover:shadow-soft-2 hover:-translate-y-1.5 transition-all duration-300 cursor-pointer hover:bg-green-500/5"
                        data-aos="fade-up" data-aos-delay="400">
                        <div class="flex items-center gap-5">
                            <div
                                class="h-14 w-14 bg-green-500/10 text-green-500 rounded-full flex items-center justify-center shadow-lg shadow-green-500/30 group-hover:bg-green-500 group-hover:text-white group-hover:shadow-green-500/40 transition-all duration-300">
                                <i class="fas fa-users text-xl"></i>
                            </div>
                            <div>
                                <p class="text-slate-500 text-sm">Total Clients</p>
                                <p
                                    class="font-heading text-2xl font-bold group-hover:text-green-500 transition-colors duration-300">
                                    152</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-soft-1 border-l-4 border-purple-500 group hover:shadow-soft-2 hover:-translate-y-1.5 transition-all duration-300 cursor-pointer hover:bg-purple-500/5"
                        data-aos="fade-up" data-aos-delay="500">
                        <div class="flex items-center gap-5">
                            <div
                                class="h-14 w-14 bg-purple-500/10 text-purple-500 rounded-full flex items-center justify-center shadow-lg shadow-purple-500/30 group-hover:bg-purple-500 group-hover:text-white group-hover:shadow-purple-500/40 transition-all duration-300">
                                <i class="fas fa-trophy text-xl"></i>
                            </div>
                            <div>
                                <p class="text-slate-500 text-sm">Cases Won</p>
                                <p
                                    class="font-heading text-2xl font-bold group-hover:text-purple-500 transition-colors duration-300">
                                    97%</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="lg:col-span-2 bg-white p-6 rounded-xl shadow-soft-1" data-aos="fade-up"
                        data-aos-delay="500">
                        <h3 class="font-heading text-xl font-bold mb-4">Recent Cases Activity</h3>
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left">
                                <thead class="text-xs text-slate-500 uppercase bg-slate-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">Case ID</th>
                                        <th scope="col" class="px-6 py-3">Client Name</th>
                                        <th scope="col" class="px-6 py-3">Status</th>
                                        <th scope="col" class="px-6 py-3">Last Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b hover:bg-slate-50">
                                        <td class="px-6 py-4 font-medium">SBL-0125</td>
                                        <td class="px-6 py-4">John Doe</td>
                                        <td class="px-6 py-4"><span
                                                class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">Completed</span>
                                        </td>
                                        <td class="px-6 py-4">2 hours ago</td>
                                    </tr>
                                    <tr class="bg-white border-b hover:bg-slate-50">
                                        <td class="px-6 py-4 font-medium">SBL-0124</td>
                                        <td class="px-6 py-4">Jane Smith</td>
                                        <td class="px-6 py-4"><span
                                                class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">In
                                                Progress</span></td>
                                        <td class="px-6 py-4">1 day ago</td>
                                    </tr>
                                    <tr class="bg-white border-b hover:bg-slate-50">
                                        <td class="px-6 py-4 font-medium">SBL-0123</td>
                                        <td class="px-6 py-4">Mike Johnson</td>
                                        <td class="px-6 py-4"><span
                                                class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">New</span>
                                        </td>
                                        <td class="px-6 py-4">2 days ago</td>
                                    </tr>
                                    <tr class="bg-white hover:bg-slate-50">
                                        <td class="px-6 py-4 font-medium">SBL-0122</td>
                                        <td class="px-6 py-4">Emily White</td>
                                        <td class="px-6 py-4"><span
                                                class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">On
                                                Hold</span></td>
                                        <td class="px-6 py-4">4 days ago</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-soft-1" data-aos="fade-up" data-aos-delay="600">
                        <h3 class="font-heading text-xl font-bold mb-4">Upcoming Appointments</h3>
                        <div class="space-y-4">
                            <div class="flex items-start gap-4 p-4 bg-primary/5 rounded-lg">
                                <div class="text-center shrink-0">
                                    <p class="font-bold text-primary text-lg">18</p>
                                    <p class="text-xs text-slate-500">SEP</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-slate-800">Consultation with A. Khan</p>
                                    <p class="text-sm text-slate-500"><i class="far fa-clock mr-1"></i> 10:00 AM - 11:00
                                        AM</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 p-4 hover:bg-slate-50 rounded-lg">
                                <div class="text-center shrink-0">
                                    <p class="font-bold text-primary text-lg">20</p>
                                    <p class="text-xs text-slate-500">SEP</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-slate-800">Court Hearing: SBL-0119</p>
                                    <p class="text-sm text-slate-500"><i class="far fa-clock mr-1"></i> 02:30 PM</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 p-4 hover:bg-slate-50 rounded-lg">
                                <div class="text-center shrink-0">
                                    <p class="font-bold text-primary text-lg">21</p>
                                    <p class="text-xs text-slate-500">SEP</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-slate-800">Client Follow-up Call</p>
                                    <p class="text-sm text-slate-500"><i class="far fa-clock mr-1"></i> 11:30 AM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 700,
        once: true,
        easing: 'ease-out-cubic'
    });
    document.addEventListener('DOMContentLoaded', function() {
        const openMenuBtn = document.getElementById('open-menu');
        const closeMenuBtn = document.getElementById('close-menu');
        const mobileSidebar = document.getElementById('mobile-sidebar');
        const sidebarOverlay = document.getElementById('mobile-sidebar-overlay');

        function openSidebar() {
            mobileSidebar.classList.remove('-translate-x-full');
            sidebarOverlay.classList.remove('hidden');
        }

        function closeSidebar() {
            mobileSidebar.classList.add('-translate-x-full');
            sidebarOverlay.classList.add('hidden');
        }
        openMenuBtn.addEventListener('click', openSidebar);
        closeMenuBtn.addEventListener('click', closeSidebar);
        sidebarOverlay.addEventListener('click', closeSidebar);
    });
    </script>
</body>

</html>