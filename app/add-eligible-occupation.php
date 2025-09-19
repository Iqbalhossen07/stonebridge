<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Add New Occupation - Dashboard</title>

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
        .input-final {
            @apply block w-full rounded-md border-slate-300 bg-white py-2 px-3 shadow-sm placeholder:text-slate-400;
        }
        .input-final:focus {
            @apply border-primary ring-1 ring-primary/50;
        }
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
                    <h1 class="font-heading text-xl md:text-2xl font-bold text-primary">Add New Occupation</h1>
                    <div class="flex items-center gap-3 md:gap-5"><button class="flex items-center gap-3 group"><img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?q=80&w=800&auto=format&fit=crop" alt="User" class="w-10 h-10 rounded-full object-cover"><div class="hidden sm:block text-left"><p class="font-heading text-sm font-semibold text-primary">David Lee</p><p class="text-xs text-slate-500">Administrator</p></div></button></div>
                </div>
            </header>

            <main class="flex-1 p-6">
                <div class="bg-white rounded-xl shadow-soft-1 p-6 lg:p-8 max-w-4xl mx-auto">
                    <form action="#" method="POST" class="space-y-6">
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                             <div>
                                <label for="occupation-code" class="block text-sm font-medium text-slate-700 mb-2">Code</label>
                                <input type="text" id="occupation-code" class="input-final" placeholder="e.g., 1111">
                            </div>
                            <div>
                                <label for="job-type" class="block text-sm font-medium text-slate-700 mb-2">Job Type</label>
                                <input type="text" id="job-type" class="input-final" placeholder="e.g., Chief executives and senior officials">
                            </div>
                        </div>

                        <div>
                            <label for="related-titles" class="block text-sm font-medium text-slate-700 mb-2">Related Job Titles</label>
                            <textarea id="related-titles" rows="4" class="input-final" placeholder="Enter each title on a new line..."></textarea>
                            <p class="mt-2 text-xs text-slate-500">Tip: Start each title with a hyphen (-) for better formatting.</p>
                        </div>
                        
                        <div>
                            <label for="eligible-status" class="block text-sm font-medium text-slate-700 mb-2">Eligible Status</label>
                            <select id="eligible-status" class="input-final">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="standard-rate" class="block text-sm font-medium text-slate-700 mb-2">Standard Going Rate</label>
                                <input type="text" id="standard-rate" class="input-final" placeholder="e.g., £84,100 (£43.13 per hour)">
                            </div>
                            <div>
                                <label for="lower-rate" class="block text-sm font-medium text-slate-700 mb-2">Lower Going Rate</label>
                                <input type="text" id="lower-rate" class="input-final" placeholder="e.g., £54,700 (£28.05 per hour)">
                            </div>
                        </div>

                        <div class="pt-5 flex items-center justify-end gap-3">
                            <a href="manage-occupations.html" class="bg-slate-200 hover:bg-slate-300 text-slate-800 font-bold py-2 px-4 rounded-lg transition-colors duration-300">Cancel</a>
                            <button type="submit" class="bg-primary hover:bg-primary-dark text-white font-bold py-2 px-4 rounded-lg transition-colors duration-300">Add Occupation</button>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>
</body>
</html>