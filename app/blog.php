<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Manage Blog - Dashboard</title>

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

    .blog-card {
        background-color: white;
    }

    @media (min-width: 768px) {
        .blog-card {
            background-color: rgba(255, 255, 255, 0.80);
            backdrop-filter: blur(10px);
        }
    }
    </style>
</head>

<body class="bg-secondary font-body text-slate-800 antialiased">

    <div class="flex h-screen bg-secondary overflow-hidden">
        <aside id="desktop-sidebar" class="w-64 flex-shrink-0 bg-gray-900 text-white hidden lg:flex flex-col">
            <div class="h-20 flex items-center justify-center border-b border-white/10"><img src="img/logo.png"
                    alt="Logo" class="w-32 invert brightness-0"></div>
            <nav class="flex-1 px-4 py-6 space-y-2">
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i
                        class="fas fa-tachometer-alt w-5"></i><span>Dashboard</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i
                        class="fas fa-gavel w-5"></i><span>My Cases</span></a>
                <a href="#" class="sidebar-link active flex items-center gap-3 px-6 py-3 rounded-lg"><i
                        class="fas fa-blog w-5"></i><span>Blog</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i
                        class="fas fa-users w-5"></i><span>Clients</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i
                        class="fas fa-calendar-alt w-5"></i><span>Appointments</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i
                        class="fas fa-cog w-5"></i><span>Settings</span></a>
            </nav>
            <div class="p-4 border-t border-white/10">
                <div class="flex items-center gap-4"><img
                        src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?q=80&w=800&auto=format&fit=crop"
                        alt="User" class="w-10 h-10 rounded-full">
                    <div>
                        <p class="font-semibold text-white">David Lee</p><a href="#"
                            class="text-xs text-gray-400 hover:underline">View Profile</a>
                    </div>
                </div>
            </div>
        </aside>

        <div class="flex-1 flex flex-col overflow-y-auto relative">
            <div aria-hidden="true" class="absolute inset-0 -z-10 overflow-hidden pointer-events-none"><svg
                    class="absolute top-0 left-0 w-full h-auto text-primary" viewBox="0 0 1440 900" fill="none"
                    xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
                    <path d="M0 200C0 200 360 400 720 200C1080 0 1440 200 1440 200V900H0V200Z" fill="url(#p0)" />
                    <path d="M0 150C0 150 360 300 720 150C1080 0 1440 150 1440 150V900H0V150Z" fill="url(#p1)"
                        style="mix-blend-mode: overlay" />
                    <defs>
                        <linearGradient id="p0" x1="720" y1="0" x2="720" y2="900" gradientUnits="userSpaceOnUse">
                            <stop stop-color="currentColor" stop-opacity="0.05" />
                            <stop offset="1" stop-color="currentColor" stop-opacity="0" />
                        </linearGradient>
                        <linearGradient id="p1" x1="720" y1="0" x2="720" y2="900" gradientUnits="userSpaceOnUse">
                            <stop stop-color="currentColor" stop-opacity="0.04" />
                            <stop offset="1" stop-color="currentColor" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg></div>

            <header class="bg-white/80 backdrop-blur-sm shadow-soft-1 sticky top-0 z-20">
                <div class="container mx-auto px-6 py-3 flex items-center justify-between">
                    <div class="flex items-center gap-4"><button id="open-menu"
                            class="lg:hidden text-slate-600 p-2 rounded-full hover:bg-slate-100"><i
                                class="fas fa-bars"></i></button>
                        <h1 class="font-heading text-xl md:text-2xl font-bold text-primary">Manage Blog</h1>
                    </div>
                    <div class="flex items-center gap-3 md:gap-5"><button
                            class="text-slate-500 hover:text-primary relative p-2 rounded-full hover:bg-slate-100"><i
                                class="fas fa-bell fa-lg"></i><span
                                class="absolute top-1 right-1 h-2.5 w-2.5 border-2 border-white bg-accent rounded-full"></span></button>
                        <div class="hidden sm:block h-8 w-px bg-slate-200"></div><button
                            class="flex items-center gap-3 group"><img
                                src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?q=80&w=800&auto=format&fit=crop"
                                alt="User" class="w-10 h-10 rounded-full object-cover">
                            <div class="hidden sm:block text-left">
                                <p class="font-heading text-sm font-semibold text-primary">David Lee</p>
                                <p class="text-xs text-slate-500">Administrator</p>
                            </div>
                        </button>
                    </div>
                </div>
            </header>

            <main class="flex-1 p-6">
                <div class="flex justify-between items-center mb-6" data-aos="fade-down">
                    <h2 class="font-heading text-2xl font-bold">All Blog Posts</h2>
                    <a href="#"
                        class="bg-primary hover:bg-primary-dark text-white font-bold py-2 px-4 rounded-lg flex items-center gap-2 transition-colors duration-300"><i
                            class="fas fa-plus"></i><span>Add New Post</span></a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">

                    <div class="blog-card rounded-xl shadow-soft-1 overflow-hidden group transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="100">
                        <img src="https://images.unsplash.com/photo-1542435503-956c469947f6?q=80&w=2070&auto=format&fit=crop"
                            alt="Blog Post Image"
                            class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="p-5 flex flex-col flex-1">
                            <h3 class="font-heading text-lg font-bold text-primary mb-2"><a href="#"
                                    class="text-primary hover:text-primary-dark transition-colors">Understanding the Skilled Worker
                                    Visa</a></h3>
                            <div class="flex items-center text-slate-500 text-sm mb-4 space-x-4"><span><i
                                        class="fas fa-user mr-1 text-xs"></i>David Lee</span><span><i
                                        class="far fa-calendar-alt mr-1 text-xs"></i>Sep 15, 2025</span></div>
                            <p class="text-slate-600 text-sm mb-4 flex-grow line-clamp-2">A comprehensive guide to the
                                UK's Skilled Worker Visa, including detailed eligibility criteria, the complete
                                step-by-step application process, and a full checklist of required documents...</p>
                            <div class="border-t border-slate-200 mt-auto pt-4 flex justify-end gap-3"><a href="#"
                                    title="View Post"
                                    class="h-8 w-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-blue-200 hover:-translate-y-0.5 transition-all duration-300"><i
                                        class="fas fa-eye text-sm"></i></a><a href="#" title="Edit Post"
                                    class="h-8 w-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-green-200 hover:-translate-y-0.5 transition-all duration-300"><i
                                        class="fas fa-pencil-alt text-sm"></i></a><a href="#" title="Delete Post"
                                    class="h-8 w-8 rounded-full bg-red-100 text-red-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-red-200 hover:-translate-y-0.5 transition-all duration-300"><i
                                        class="fas fa-trash-alt text-sm"></i></a></div>
                        </div>
                    </div>
                    <div class="blog-card rounded-xl shadow-soft-1 overflow-hidden group transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="100">
                        <img src="https://images.unsplash.com/photo-1542435503-956c469947f6?q=80&w=2070&auto=format&fit=crop"
                            alt="Blog Post Image"
                            class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="p-5 flex flex-col flex-1">
                            <h3 class="font-heading text-lg font-bold text-primary mb-2"><a href="#"
                                    class="text-primary hover:text-primary-dark transition-colors">Understanding the Skilled Worker
                                    Visa</a></h3>
                            <div class="flex items-center text-slate-500 text-sm mb-4 space-x-4"><span><i
                                        class="fas fa-user mr-1 text-xs"></i>David Lee</span><span><i
                                        class="far fa-calendar-alt mr-1 text-xs"></i>Sep 15, 2025</span></div>
                            <p class="text-slate-600 text-sm mb-4 flex-grow line-clamp-2">A comprehensive guide to the
                                UK's Skilled Worker Visa, including detailed eligibility criteria, the complete
                                step-by-step application process, and a full checklist of required documents...</p>
                            <div class="border-t border-slate-200 mt-auto pt-4 flex justify-end gap-3"><a href="#"
                                    title="View Post"
                                    class="h-8 w-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-blue-200 hover:-translate-y-0.5 transition-all duration-300"><i
                                        class="fas fa-eye text-sm"></i></a><a href="#" title="Edit Post"
                                    class="h-8 w-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-green-200 hover:-translate-y-0.5 transition-all duration-300"><i
                                        class="fas fa-pencil-alt text-sm"></i></a><a href="#" title="Delete Post"
                                    class="h-8 w-8 rounded-full bg-red-100 text-red-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-red-200 hover:-translate-y-0.5 transition-all duration-300"><i
                                        class="fas fa-trash-alt text-sm"></i></a></div>
                        </div>
                    </div>

                    <div class="blog-card rounded-xl shadow-soft-1 overflow-hidden group transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="200">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=2070&auto=format&fit=crop"
                            alt="Blog Post Image"
                            class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="p-5 flex flex-col flex-1">
                            <h3 class="font-heading text-lg font-bold text-primary mb-2"><a href="#"
                                    class="hover:text-primary-dark transition-colors">Navigating the EU Settlement
                                    Scheme</a></h3>
                            <div class="flex items-center text-slate-500 text-sm mb-4 space-x-4"><span><i
                                        class="fas fa-user mr-1 text-xs"></i>Amelia Stone</span><span><i
                                        class="far fa-calendar-alt mr-1 text-xs"></i>Sep 12, 2025</span></div>
                            <p class="text-slate-600 text-sm mb-4 flex-grow line-clamp-2">An essential and detailed
                                guide for EU citizens and their families on applying to the EU Settlement Scheme. This
                                article covers all the critical steps you need to take before the deadline approaches.
                            </p>
                            <div class="border-t border-slate-200 mt-auto pt-4 flex justify-end gap-3"><a href="#"
                                    title="View Post"
                                    class="h-8 w-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-blue-200 hover:-translate-y-0.5 transition-all duration-300"><i
                                        class="fas fa-eye text-sm"></i></a><a href="#" title="Edit Post"
                                    class="h-8 w-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-green-200 hover:-translate-y-0.5 transition-all duration-300"><i
                                        class="fas fa-pencil-alt text-sm"></i></a><a href="#" title="Delete Post"
                                    class="h-8 w-8 rounded-full bg-red-100 text-red-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-red-200 hover:-translate-y-0.5 transition-all duration-300"><i
                                        class="fas fa-trash-alt text-sm"></i></a></div>
                        </div>
                    </div>

                    <div class="blog-card rounded-xl shadow-soft-1 overflow-hidden group transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="300">
                        <img src="https://images.unsplash.com/photo-1462826303086-32d472c1dd77?q=80&w=2070&auto=format&fit=crop"
                            alt="Blog Post Image"
                            class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="p-5 flex flex-col flex-1">
                            <h3 class="font-heading text-lg font-bold text-primary mb-2"><a href="#"
                                    class="hover:text-primary-dark transition-colors">Importance of a Sponsorship
                                    Licence</a></h3>
                            <div class="flex items-center text-slate-500 text-sm mb-4 space-x-4"><span><i
                                        class="fas fa-user mr-1 text-xs"></i>David Lee</span><span><i
                                        class="far fa-calendar-alt mr-1 text-xs"></i>Sep 10, 2025</span></div>
                            <p class="text-slate-600 text-sm mb-4 flex-grow line-clamp-2">Employers seeking to hire
                                foreign workers must understand all the requirements and significant benefits of
                                obtaining a UK Sponsorship Licence. This article breaks down the process.</p>
                            <div class="border-t border-slate-200 mt-auto pt-4 flex justify-end gap-3"><a href="#"
                                    title="View Post"
                                    class="h-8 w-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-blue-200 hover:-translate-y-0.5 transition-all duration-300"><i
                                        class="fas fa-eye text-sm"></i></a><a href="#" title="Edit Post"
                                    class="h-8 w-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-green-200 hover:-translate-y-0.5 transition-all duration-300"><i
                                        class="fas fa-pencil-alt text-sm"></i></a><a href="#" title="Delete Post"
                                    class="h-8 w-8 rounded-full bg-red-100 text-red-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-red-200 hover:-translate-y-0.5 transition-all duration-300"><i
                                        class="fas fa-trash-alt text-sm"></i></a></div>
                        </div>
                    </div>
                </div>

                <nav class="flex items-center justify-between pt-4" aria-label="Blog Pagination" data-aos="fade-up"
                    data-aos-delay="400">
                    <span class="text-sm font-normal text-slate-500">Showing <span
                            class="font-semibold text-slate-900">1-3</span> of <span
                            class="font-semibold text-slate-900">100</span></span>
                    <ul class="inline-flex -space-x-px text-sm h-8">
                        <li><a href="#"
                                class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-slate-500 bg-white border border-slate-300 rounded-l-lg hover:bg-slate-100 hover:text-slate-700">Previous</a>
                        </li>
                        <li><a href="#"
                                class="flex items-center justify-center px-3 h-8 leading-tight text-slate-500 bg-white border border-slate-300 hover:bg-slate-100 hover:text-slate-700">1</a>
                        </li>
                        <li><a href="#" aria-current="page"
                                class="flex items-center justify-center px-3 h-8 text-primary bg-primary/10 border border-primary hover:bg-primary/20 hover:text-primary-dark">2</a>
                        </li>
                        <li><a href="#"
                                class="flex items-center justify-center px-3 h-8 leading-tight text-slate-500 bg-white border border-slate-300 hover:bg-slate-100 hover:text-slate-700">3</a>
                        </li>
                        <li><a href="#"
                                class="flex items-center justify-center px-3 h-8 leading-tight text-slate-500 bg-white border border-slate-300 rounded-r-lg hover:bg-slate-100 hover:text-slate-700">Next</a>
                        </li>
                    </ul>
                </nav>
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
    </script>
</body>

</html>