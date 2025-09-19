<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Eligible Occupations - Dashboard</title>

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
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-calendar-alt w-5"></i><span>Events</span></a>
                <a href="#" class="sidebar-link active flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-briefcase w-5"></i><span>Occupations</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-cog w-5"></i><span>Settings</span></a>
            </nav>
            <div class="p-4 border-t border-white/10"><div class="flex items-center gap-4"><img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?q=80&w=800&auto=format&fit=crop" alt="User" class="w-10 h-10 rounded-full"><div><p class="font-semibold text-white">David Lee</p><a href="#" class="text-xs text-gray-400 hover:underline">View Profile</a></div></div></div>
        </aside>

        <div class="flex-1 flex flex-col overflow-y-auto relative">
            <header class="bg-white shadow-soft-1 sticky top-0 z-20">
                <div class="container mx-auto px-6 py-3 flex items-center justify-between">
                    <h1 class="font-heading text-xl md:text-2xl font-bold text-primary">Eligible Occupations</h1>
                    <div class="flex items-center gap-3 md:gap-5"><button class="flex items-center gap-3 group"><img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?q=80&w=800&auto=format&fit=crop" alt="User" class="w-10 h-10 rounded-full object-cover"><div class="hidden sm:block text-left"><p class="font-heading text-sm font-semibold text-primary">David Lee</p><p class="text-xs text-slate-500">Administrator</p></div></button></div>
                </div>
            </header>

            <main class="flex-1 p-6">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="font-heading text-2xl font-bold">Occupation List</h2>
                    <a href="#" class="bg-primary hover:bg-primary-dark text-white font-bold py-2 px-4 rounded-lg flex items-center gap-2 transition-colors duration-300">
                        <i class="fas fa-plus"></i>
                        <span>Add New Occupation</span>
                    </a>
                </div>

                <div class="bg-white rounded-xl shadow-soft-1 overflow-x-auto">
                    <table class="w-full text-sm text-left text-slate-600">
                        <thead class="text-xs text-slate-500 uppercase">
                            <tr>
                                <th scope="col" class="px-6 py-4">Code</th>
                                <th scope="col" class="px-6 py-4">Job Type</th>
                                <th scope="col" class="px-6 py-4">Related Job Titles</th>
                                <th scope="col" class="px-6 py-4">Eligible</th>
                                <th scope="col" class="px-6 py-4">Standard Going Rate</th>
                                <th scope="col" class="px-6 py-4">Lower Going Rate</th>
                                <th scope="col" class="px-6 py-4 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-t border-slate-200">
                                <td class="px-6 py-4 font-medium text-slate-800">1111</td>
                                <td class="px-6 py-4 font-medium text-slate-800">Chief executives and senior officials</td>
                                <td class="px-6 py-4">
                                    <p>- Chairman</p>
                                    <p>- Chief executive</p>
                                    <p>- Diplomat</p>
                                    <p>- Vice President</p>
                                </td>
                                <td class="px-6 py-4"><span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-1 rounded-md">Yes</span></td>
                                <td class="px-6 py-4">£84,100 (£43.13 per hour)</td>
                                <td class="px-6 py-4">£54,700 (£28.05 per hour)</td>
                                <td class="px-6 py-4 text-right space-x-3">
                                    <a href="#" class="font-medium text-blue-600 hover:underline"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="font-medium text-red-600 hover:underline"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr class="border-t border-slate-200">
                                <td class="px-6 py-4 font-medium text-slate-800">1121</td>
                                <td class="px-6 py-4 font-medium text-slate-800">Production managers and directors in manufacturing</td>
                                <td class="px-6 py-4">
                                    <p>- Engineering manager</p>
                                    <p>- Managing director (engineering)</p>
                                    <p>- Operations manager (manufacturing)</p>
                                </td>
                                <td class="px-6 py-4"><span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-1 rounded-md">Yes</span></td>
                                <td class="px-6 py-4">£51,500 (£26.41 per hour)</td>
                                <td class="px-6 py-4">£37,100 (£19.03 per hour)</td>
                                <td class="px-6 py-4 text-right space-x-3">
                                    <a href="#" class="font-medium text-blue-600 hover:underline"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="font-medium text-red-600 hover:underline"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                             <tr class="border-t border-slate-200">
                                <td class="px-6 py-4 font-medium text-slate-800">2112</td>
                                <td class="px-6 py-4 font-medium text-slate-800">Biological scientists and biochemists</td>
                                <td class="px-6 py-4">
                                    <p>- Biologist</p>
                                    <p>- Botanist</p>
                                    <p>- Microbiologist</p>
                                    <p>- Zoologist</p>
                                </td>
                                <td class="px-6 py-4"><span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-1 rounded-md">Yes</span></td>
                                <td class="px-6 py-4">£35,900 (£18.41 per hour)</td>
                                <td class="px-6 py-4">£28,720 (£14.73 per hour)</td>
                                <td class="px-6 py-4 text-right space-x-3">
                                    <a href="#" class="font-medium text-blue-600 hover:underline"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="font-medium text-red-600 hover:underline"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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