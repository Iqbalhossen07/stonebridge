<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Manage Events - Dashboard</title>

    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600&family=Merriweather:wght@700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <script src="https://cdn.tailwindcss.com"></script>
     <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: '#87550D',
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
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background-color: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background-color: #c4c4c4; border-radius: 10px; }
        .sidebar-link { transition: background-color 0.3s, color 0.3s, padding-left 0.3s; }
        .sidebar-link:hover, .sidebar-link.active { background-color: rgba(255, 255, 255, 0.05); color: #ffffff; padding-left: 1.75rem; }
        .sidebar-link.active { border-left: 4px solid #f59e0b; }
    </style>
</head>

<body class="bg-secondary font-body text-slate-800 antialiased">
    <div class="flex h-screen bg-secondary overflow-hidden">
        <aside id="desktop-sidebar" class="w-64 flex-shrink-0 bg-gray-900 text-white hidden lg:flex flex-col">
            <div class="h-20 flex items-center justify-center border-b border-white/10"><img src="img/logo.png" alt="Logo" class="w-32 invert brightness-0"></div>
            <nav class="flex-1 px-4 py-6 space-y-2">
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-tachometer-alt w-5"></i><span>Dashboard</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-blog w-5"></i><span>Blog</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-comment-dots w-5"></i><span>Testimonials</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-video w-5"></i><span>Videos</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-images w-5"></i><span>Gallery</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-users-cog w-5"></i><span>Team</span></a>
                <a href="#" class="sidebar-link active flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-calendar-alt w-5"></i><span>Events</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-cog w-5"></i><span>Settings</span></a>
            </nav>
            <div class="p-4 border-t border-white/10"><div class="flex items-center gap-4"><img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?q=80&w=800&auto=format&fit=crop" alt="User" class="w-10 h-10 rounded-full"><div><p class="font-semibold text-white">David Lee</p><a href="#" class="text-xs text-gray-400 hover:underline">View Profile</a></div></div></div>
        </aside>

        <div class="flex-1 flex flex-col overflow-y-auto relative">
            <header class="bg-white shadow-soft-1 sticky top-0 z-20">
                <div class="container mx-auto px-6 py-3 flex items-center justify-between">
                    <h1 class="font-heading text-xl md:text-2xl font-bold text-primary">Manage Events</h1>
                    <div class="flex items-center gap-3 md:gap-5"><button class="flex items-center gap-3 group"><img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?q=80&w=800&auto=format&fit=crop" alt="User" class="w-10 h-10 rounded-full object-cover"><div class="hidden sm:block text-left"><p class="font-heading text-sm font-semibold text-primary">David Lee</p><p class="text-xs text-slate-500">Administrator</p></div></button></div>
                </div>
            </header>

            <main class="flex-1 p-6">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="font-heading text-2xl font-bold">All Events</h2>
                    <a href="#" class="bg-primary hover:bg-primary-dark text-white font-bold py-2 px-4 rounded-lg flex items-center gap-2 transition-colors duration-300">
                        <i class="fas fa-plus"></i>
                        <span>Add New Event</span>
                    </a>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="bg-white rounded-xl shadow-soft-1 flex overflow-hidden hover:shadow-soft-2 hover:-translate-y-1 transition-all duration-300" data-aos="fade-up">
                        <div class="relative flex-shrink-0 w-32 sm:w-40"><img src="https://images.unsplash.com/photo-1505373877841-8c25f7d46678?q=80&w=2070&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover" alt="Webinar Image"><div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div><div class="absolute bottom-0 left-0 p-3 text-white"><p class="font-heading text-3xl font-bold leading-none">25</p><p class="text-sm font-semibold uppercase">Sep</p></div></div>
                        <div class="flex-1 flex items-center justify-between p-4 pl-5">
                            <div class="flex-1"><h3 class="font-heading text-lg font-bold text-slate-800">Free Legal Advice Webinar</h3><div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4 text-sm text-slate-500 mt-1"><span><i class="far fa-clock mr-1"></i> 03:00 PM</span><span><i class="fas fa-map-marker-alt mr-1"></i> Online (Zoom)</span></div><div class="mt-2 md:hidden"><span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-1 rounded-full">Upcoming</span></div></div>
                            <div class="hidden md:block mx-4"><span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-1 rounded-full">Upcoming</span></div>
                            <div class="flex items-center gap-2"><a href="#" title="Edit" class="h-9 w-9 rounded-full bg-green-100 text-green-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-green-200 hover:-translate-y-0.5 transition-all duration-300"><i class="fas fa-pencil-alt text-sm"></i></a><a href="#" title="Delete" class="h-9 w-9 rounded-full bg-red-100 text-red-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-red-200 hover:-translate-y-0.5 transition-all duration-300"><i class="fas fa-trash-alt text-sm"></i></a></div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-soft-1 flex overflow-hidden hover:shadow-soft-2 hover:-translate-y-1 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                        <div class="relative flex-shrink-0 w-32 sm:w-40"><img src="https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=2070&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover" alt="Team Meeting"><div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div><div class="absolute bottom-0 left-0 p-3 text-white"><p class="font-heading text-3xl font-bold leading-none text-accent">19</p><p class="text-sm font-semibold uppercase text-accent/80">Sep</p></div></div>
                        <div class="flex-1 flex items-center justify-between p-4 pl-5">
                            <div class="flex-1"><h3 class="font-heading text-lg font-bold text-slate-800">Weekly Team Sync-up</h3><div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4 text-sm text-slate-500 mt-1"><span><i class="far fa-clock mr-1"></i> 12:49 PM</span><span><i class="fas fa-map-marker-alt mr-1"></i> Narsingdi, Bangladesh</span></div><div class="mt-2 md:hidden"><span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-1 rounded-full">Upcoming</span></div></div>
                            <div class="hidden md:block mx-4"><span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-1 rounded-full">Upcoming</span></div>
                            <div class="flex items-center gap-2"><a href="#" title="Edit" class="h-9 w-9 rounded-full bg-green-100 text-green-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-green-200 hover:-translate-y-0.5 transition-all duration-300"><i class="fas fa-pencil-alt text-sm"></i></a><a href="#" title="Delete" class="h-9 w-9 rounded-full bg-red-100 text-red-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-red-200 hover:-translate-y-0.5 transition-all duration-300"><i class="fas fa-trash-alt text-sm"></i></a></div>
                        </div>
                    </div>

                    <div class="bg-white/80 rounded-xl shadow-soft-1 flex overflow-hidden opacity-80" data-aos="fade-up" data-aos-delay="200">
                        <div class="relative flex-shrink-0 w-32 sm:w-40"><img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=2070&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover" alt="Seminar Image"><div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div><div class="absolute bottom-0 left-0 p-3 text-white"><p class="font-heading text-3xl font-bold leading-none">10</p><p class="text-sm font-semibold uppercase">Sep</p></div></div>
                        <div class="flex-1 flex items-center justify-between p-4 pl-5">
                            <div class="flex-1"><h3 class="font-heading text-lg font-bold text-slate-600">Immigration Law Seminar</h3><div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4 text-sm text-slate-500 mt-1"><span><i class="far fa-clock mr-1"></i> 10:00 AM</span><span><i class="fas fa-map-marker-alt mr-1"></i> Dhaka Office</span></div><div class="mt-2 md:hidden"><span class="bg-slate-200 text-slate-800 text-xs font-medium px-2.5 py-1 rounded-full">Past</span></div></div>
                            <div class="hidden md:block mx-4"><span class="bg-slate-200 text-slate-800 text-xs font-medium px-2.5 py-1 rounded-full">Past</span></div>
                            <div class="flex items-center gap-2"><a href="#" title="View Details" class="h-9 w-9 rounded-full bg-slate-200 text-slate-600 flex items-center justify-center shadow-md"><i class="fas fa-eye text-sm"></i></a></div>
                        </div>
                    </div>

                     <div class="bg-white/80 rounded-xl shadow-soft-1 flex overflow-hidden opacity-80" data-aos="fade-up" data-aos-delay="300">
                        <div class="relative flex-shrink-0 w-32 sm:w-40"><img src="https://images.unsplash.com/photo-1561489396-888724a1543d?q=80&w=2070&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover" alt="Canceled Event"><div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div><div class="absolute bottom-0 left-0 p-3 text-white"><p class="font-heading text-3xl font-bold leading-none line-through">05</p><p class="text-sm font-semibold uppercase">Oct</p></div></div>
                        <div class="flex-1 flex items-center justify-between p-4 pl-5">
                            <div class="flex-1"><h3 class="font-heading text-lg font-bold text-slate-600 line-through">Client Appreciation Day</h3><div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4 text-sm text-slate-500 mt-1"><span><i class="far fa-clock mr-1"></i> All Day</span><span><i class="fas fa-map-marker-alt mr-1"></i> Main Office</span></div><div class="mt-2 md:hidden"><span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-1 rounded-full">Canceled</span></div></div>
                            <div class="hidden md:block mx-4"><span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-1 rounded-full">Canceled</span></div>
                            <div class="flex items-center gap-2"><a href="#" title="View Details" class="h-9 w-9 rounded-full bg-slate-200 text-slate-600 flex items-center justify-center shadow-md"><i class="fas fa-eye text-sm"></i></a></div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 700, once: true, easing: 'ease-out-cubic' });
    </script>
</body>
</html>