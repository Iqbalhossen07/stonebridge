<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Manage Testimonials - Dashboard</title>

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
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-gavel w-5"></i><span>Cases</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-blog w-5"></i><span>Blog</span></a>
                <a href="#" class="sidebar-link active flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-comment-dots w-5"></i><span>Testimonials</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-users w-5"></i><span>Clients</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-cog w-5"></i><span>Settings</span></a>
            </nav>
            <div class="p-4 border-t border-white/10"><div class="flex items-center gap-4"><img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?q=80&w=800&auto=format&fit=crop" alt="User" class="w-10 h-10 rounded-full"><div><p class="font-semibold text-white">David Lee</p><a href="#" class="text-xs text-gray-400 hover:underline">View Profile</a></div></div></div>
        </aside>

        <div class="flex-1 flex flex-col overflow-y-auto relative">
            <header class="bg-white shadow-soft-1 sticky top-0 z-20">
                <div class="container mx-auto px-6 py-3 flex items-center justify-between">
                    <h1 class="font-heading text-xl md:text-2xl font-bold text-primary">Manage Testimonials</h1>
                    <div class="flex items-center gap-3 md:gap-5"><button class="flex items-center gap-3 group"><img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?q=80&w=800&auto=format&fit=crop" alt="User" class="w-10 h-10 rounded-full object-cover"><div class="hidden sm:block text-left"><p class="font-heading text-sm font-semibold text-primary">David Lee</p><p class="text-xs text-slate-500">Administrator</p></div></button></div>
                </div>
            </header>

            <main class="flex-1 p-6">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="font-heading text-2xl font-bold">All Testimonials</h2>
                    <a href="#" class="bg-primary hover:bg-primary-dark text-white font-bold py-2 px-4 rounded-lg flex items-center gap-2 transition-colors duration-300">
                        <i class="fas fa-plus"></i>
                        <span>Add New</span>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white rounded-xl shadow-soft-1 p-6 flex flex-col" data-aos="fade-up">
                        <div class="flex items-center gap-4 mb-4">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-14 h-14 rounded-full" alt="Author">
                            <div>
                                <h3 class="font-heading font-bold text-slate-800">Sheldon Jackson</h3>
                                <p class="text-sm text-slate-500">Software Engineer</p>
                            </div>
                        </div>
                        <div class="text-accent mb-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <p class="text-slate-600 line-clamp-4 flex-grow mb-4">"Sonjoy dada you are such a very nice person. Who help me not only in my legal issues also help me to control my emotions, how to deal with my mental situation. Dada love you."</p>
                        <div class="border-t border-slate-200 pt-4 flex items-center justify-between">
                            <div><span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-1 rounded-full">Published</span></div>
                            <div class="flex items-center gap-2">
                                <a href="#" title="Edit" class="h-8 w-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-green-200 hover:-translate-y-0.5 transition-all duration-300"><i class="fas fa-pencil-alt text-sm"></i></a>
                                <a href="#" title="Delete" class="h-8 w-8 rounded-full bg-red-100 text-red-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-red-200 hover:-translate-y-0.5 transition-all duration-300"><i class="fas fa-trash-alt text-sm"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-soft-1 p-6 flex flex-col" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex items-center gap-4 mb-4">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" class="w-14 h-14 rounded-full" alt="Author">
                            <div>
                                <h3 class="font-heading font-bold text-slate-800">Sarah Johnson</h3>
                                <p class="text-sm text-slate-500">Marketing Specialist</p>
                            </div>
                        </div>
                        <div class="text-accent mb-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                        <p class="text-slate-600 line-clamp-4 flex-grow mb-4">"The doctors here are incredibly knowledgeable and caring. I always feel heard and understood during my appointments. Highly recommend to anyone looking for top-notch medical care."</p>
                        <div class="border-t border-slate-200 pt-4 flex items-center justify-between">
                            <div><span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-1 rounded-full">Pending</span></div>
                            <div class="flex items-center gap-2">
                                <a href="#" title="Edit" class="h-8 w-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-green-200 hover:-translate-y-0.5 transition-all duration-300"><i class="fas fa-pencil-alt text-sm"></i></a>
                                <a href="#" title="Delete" class="h-8 w-8 rounded-full bg-red-100 text-red-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-red-200 hover:-translate-y-0.5 transition-all duration-300"><i class="fas fa-trash-alt text-sm"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-soft-1 p-6 flex flex-col" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex items-center gap-4 mb-4">
                            <img src="https://randomuser.me/api/portraits/men/44.jpg" class="w-14 h-14 rounded-full" alt="Author">
                            <div>
                                <h3 class="font-heading font-bold text-slate-800">Jason Doe</h3>
                                <p class="text-sm text-slate-500">Product Manager</p>
                            </div>
                        </div>
                        <div class="text-accent mb-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <p class="text-slate-600 line-clamp-4 flex-grow mb-4">"When I came in this country, facing so many problems, I didn't know what to do. At that time I found sonjoy dada. A man who has such a big heart."</p>
                        <div class="border-t border-slate-200 pt-4 flex items-center justify-between">
                            <div><span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-1 rounded-full">Published</span></div>
                            <div class="flex items-center gap-2">
                                <a href="#" title="Edit" class="h-8 w-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-green-200 hover:-translate-y-0.5 transition-all duration-300"><i class="fas fa-pencil-alt text-sm"></i></a>
                                <a href="#" title="Delete" class="h-8 w-8 rounded-full bg-red-100 text-red-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-red-200 hover:-translate-y-0.5 transition-all duration-300"><i class="fas fa-trash-alt text-sm"></i></a>
                            </div>
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