<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>View Team Member - Dashboard</title>

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
                <a href="#" class="sidebar-link active flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-users-cog w-5"></i><span>Team</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-cog w-5"></i><span>Settings</span></a>
            </nav>
            <div class="p-4 border-t border-white/10"><div class="flex items-center gap-4"><img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?q=80&w=800&auto=format&fit=crop" alt="User" class="w-10 h-10 rounded-full"><div><p class="font-semibold text-white">David Lee</p><a href="#" class="text-xs text-gray-400 hover:underline">View Profile</a></div></div></div>
        </aside>

        <div class="flex-1 flex flex-col overflow-y-auto relative">
            <header class="bg-white shadow-soft-1 sticky top-0 z-20">
                <div class="container mx-auto px-6 py-3 flex items-center justify-between">
                    <h1 class="font-heading text-xl md:text-2xl font-bold text-primary">Team Member Details</h1>
                    <div class="flex items-center gap-3 md:gap-5"><button class="flex items-center gap-3 group"><img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?q=80&w=800&auto=format&fit=crop" alt="User" class="w-10 h-10 rounded-full object-cover"><div class="hidden sm:block text-left"><p class="font-heading text-sm font-semibold text-primary">David Lee</p><p class="text-xs text-slate-500">Administrator</p></div></button></div>
                </div>
            </header>

            <main class="flex-1 p-6">
                <div class="flex justify-between items-center mb-6">
                    <a href="manage-team.html" class="text-primary hover:text-primary-dark font-medium flex items-center gap-2">
                        <i class="fas fa-arrow-left"></i>
                        <span>Back to All Members</span>
                    </a>
                    <div class="flex items-center gap-3">
                        <a href="#" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg flex items-center gap-2 transition-colors duration-300">
                            <i class="fas fa-pencil-alt"></i><span>Edit</span>
                        </a>
                        <a href="#" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg flex items-center gap-2 transition-colors duration-300">
                           <i class="fas fa-trash-alt"></i><span>Delete</span>
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-soft-1 p-6 lg:p-8">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        <div class="text-center lg:border-r lg:pr-8 border-slate-200">
                            <img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?q=80&w=800&auto=format&fit=crop" alt="Team Member" class="w-48 h-48 rounded-full mx-auto border-4 border-primary/20 shadow-md">
                            <div class="mt-6 flex justify-center items-center space-x-4">
                                <a href="#" class="h-10 w-10 rounded-full bg-slate-100 hover:bg-primary hover:text-white text-slate-500 flex items-center justify-center transition-all"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="h-10 w-10 rounded-full bg-slate-100 hover:bg-primary hover:text-white text-slate-500 flex items-center justify-center transition-all"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="h-10 w-10 rounded-full bg-slate-100 hover:bg-primary hover:text-white text-slate-500 flex items-center justify-center transition-all"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>

                        <div class="lg:col-span-2">
                            <h2 class="font-heading text-4xl font-bold text-slate-900">Amelia Stone</h2>
                            <p class="mt-1 text-lg text-primary font-medium">Solicitor, Barrister & FCILEX</p>
                            <div class="border-t my-6 border-slate-200"></div>
                            <h3 class="font-heading text-xl font-semibold text-slate-800">About Amelia</h3>
                            <div class="prose max-w-none mt-4 text-slate-600">
                                <p>Amelia is a highly respected solicitor with over 15 years of experience in UK immigration law. She is a founding partner at Stonebridge Legal and leads the corporate immigration team.</p>
                                <p>Her expertise lies in handling complex cases related to sponsorship licences, skilled worker visas, and global business mobility. She is known for her meticulous approach and dedication to achieving the best outcomes for her clients.</p>
                                <ul>
                                    <li>Member of the Law Society</li>
                                    <li>Accredited by the OISC at Level 3</li>
                                    <li>Fluent in English, French, and Spanish</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>