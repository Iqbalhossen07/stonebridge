<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>View Post - Dashboard</title>

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
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-gavel w-5"></i><span>My Cases</span></a>
                <a href="#" class="sidebar-link active flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-blog w-5"></i><span>Blog</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-users w-5"></i><span>Clients</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-calendar-alt w-5"></i><span>Appointments</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-cog w-5"></i><span>Settings</span></a>
            </nav>
            <div class="p-4 border-t border-white/10"><div class="flex items-center gap-4"><img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?q=80&w=800&auto=format&fit=crop" alt="User" class="w-10 h-10 rounded-full"><div><p class="font-semibold text-white">David Lee</p><a href="#" class="text-xs text-gray-400 hover:underline">View Profile</a></div></div></div>
        </aside>

        <div class="flex-1 flex flex-col overflow-y-auto relative">
            <header class="bg-white shadow-soft-1 sticky top-0 z-20">
                <div class="container mx-auto px-6 py-3 flex items-center justify-between">
                    <h1 class="font-heading text-xl md:text-2xl font-bold text-primary">View Blog Post</h1>
                    <div class="flex items-center gap-3 md:gap-5">
                        <button class="flex items-center gap-3 group"><img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?q=80&w=800&auto=format&fit=crop" alt="User" class="w-10 h-10 rounded-full object-cover"><div class="hidden sm:block text-left"><p class="font-heading text-sm font-semibold text-primary">David Lee</p><p class="text-xs text-slate-500">Administrator</p></div></button>
                    </div>
                </div>
            </header>

            <main class="flex-1 p-6">
                <div class="flex justify-between items-center mb-6" data-aos="fade-down">
                    <a href="manage-blog.html" class="text-primary hover:text-primary-dark font-medium flex items-center gap-2">
                        <i class="fas fa-arrow-left"></i>
                        <span>Back to All Posts</span>
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
                
                <div class="bg-white rounded-xl shadow-soft-1 p-6 lg:p-8" data-aos="fade-up">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        <div class="lg:col-span-2">
                            <h2 class="font-heading text-3xl lg:text-4xl font-bold text-slate-900 leading-tight">
                                Understanding the Skilled Worker Visa
                            </h2>
                            <div class="prose prose-lg max-w-none mt-6 prose-h3:font-heading prose-h3:text-slate-800 prose-a:text-primary hover:prose-a:text-primary-dark">
                                <p>The Skilled Worker visa route is the primary way for overseas nationals to come to the UK for work. It replaced the Tier 2 (General) visa route. Understanding its complexities is crucial for both employers and potential employees. This guide will walk you through the essential aspects of the Skilled Worker visa.</p>
                                <h3>Eligibility Requirements</h3>
                                <p>To qualify for a Skilled Worker visa, applicants must meet a specific set of requirements and score a total of 70 points on the points-based system. The mandatory criteria that provide 50 points are:</p>
                                <ul>
                                    <li><strong>Job Offer:</strong> You must have a job offer from a Home Office-licensed sponsor.</li>
                                    <li><strong>Skill Level:</strong> The job must be at an appropriate skill level of RQF 3 or above (equivalent to A-level).</li>
                                    <li><strong>English Language:</strong> You must prove you can speak, read, write, and understand English to a certain level.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div>
                                <h3 class="text-sm font-semibold text-slate-500 uppercase tracking-wider mb-3">Featured Image</h3>
                                <img src="https://images.unsplash.com/photo-1542435503-956c469947f6?q=80&w=2070&auto=format&fit=crop" alt="Featured Image" class="w-full h-auto rounded-lg shadow-md">
                            </div>
                            <div class="border-t border-slate-200 pt-6">
                                <h3 class="text-sm font-semibold text-slate-500 uppercase tracking-wider mb-3">Post Details</h3>
                                <div class="space-y-3 text-slate-700">
                                    <p><strong>Author:</strong> David Lee</p>
                                    <p><strong>Publish Date:</strong> September 15, 2025</p>
                                    <p><strong>Category:</strong> Immigration Law</p>
                                    <p><strong>Tags:</strong> <span class="bg-slate-100 text-sm px-2 py-1 rounded-md">#visa</span> <span class="bg-slate-100 text-sm px-2 py-1 rounded-md">#settlement</span></p>
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
        AOS.init({ duration: 700, once: true, easing: 'ease-out-cubic' });
    </script>
</body>
</html>