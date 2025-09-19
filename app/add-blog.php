<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Add New Post - Dashboard</title>

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

    .form-card {
        background-color: white;
    }

    @media (min-width: 768px) {
        .form-card {
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
                        <h1 class="font-heading text-xl md:text-2xl font-bold text-primary">Add New Post</h1>
                    </div>
                    <div class="flex items-center gap-3 md:gap-5"><button class="flex items-center gap-3 group"><img
                                src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?q=80&w=800&auto=format&fit=crop"
                                alt="User" class="w-10 h-10 rounded-full object-cover">
                            <div class="hidden sm:block text-left">
                                <p class="font-heading text-sm font-semibold text-primary">David Lee</p>
                                <p class="text-xs text-slate-500">Administrator</p>
                            </div>
                        </button></div>
                </div>
            </header>

            <main class="flex-1 p-6">
                <div class="form-card rounded-xl shadow-soft-1 p-6 lg:p-8">
                    <form action="#" method="POST" class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                        <div class="lg:col-span-2 space-y-6">
                            <div>
                                <label for="post-title" class="block text-sm font-medium text-slate-700 mb-1">Post
                                    Title</label>
                                <input type="text" id="post-title"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"
                                    placeholder="Enter post title...">
          
                            </div>
                            <div>
                                <label for="post-content" class="block text-sm font-medium text-slate-700 mb-1">Post
                                    Content</label>
                                <textarea id="post-content" rows="12"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"
                                    placeholder="Write your blog post here..."></textarea>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1">Featured Image</label>
                                <div id="image-upload-box"
                                    class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-slate-300 border-dashed rounded-lg bg-slate-50">
                                    <div class="space-y-1 text-center">
                                        <i class="fas fa-cloud-upload-alt text-4xl text-slate-400"></i>
                                        <div class="flex text-sm text-slate-600">
                                            <label for="file-upload"
                                                class="relative cursor-pointer bg-transparent rounded-md font-medium text-primary hover:text-primary-dark focus-within:outline-none">
                                                <span>Upload a file</span>
                                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs text-slate-500" id="file-name">PNG, JPG, GIF up to 10MB</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label for="post-category"
                                    class="block text-sm font-medium text-slate-700 mb-1">Category</label>
                                <select id="post-category"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
                                    <option>Immigration Law</option>
                                    <option>EU Law</option>
                                    <option>Business Immigration</option>
                                    <option>Legal News</option>
                                </select>
                            </div>
                            <div>
                                <label for="post-tags"
                                    class="block text-sm font-medium text-slate-700 mb-1">Tags</label>
                                <input type="text" id="post-tags"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"
                                    placeholder="e.g., visa, settlement, law">
                            </div>
                            <div class="border-t border-slate-200 pt-6 flex items-center justify-end gap-3">
                                <button type="button"
                                    class="bg-slate-200 hover:bg-slate-300 text-slate-800 font-bold py-2 px-4 rounded-lg transition-colors duration-300">Save
                                    Draft</button>
                                <button type="submit"
                                    class="bg-primary hover:bg-primary-dark text-white font-bold py-2 px-4 rounded-lg transition-colors duration-300">Publish</button>
                            </div>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>

    <script>
    const fileUpload = document.getElementById('file-upload');
    const fileNameDisplay = document.getElementById('file-name');
    if (fileUpload) {
        fileUpload.addEventListener('change', (e) => {
            if (e.target.files.length > 0) {
                fileNameDisplay.textContent = e.target.files[0].name;
            } else {
                fileNameDisplay.textContent = 'PNG, JPG, GIF up to 10MB';
            }
        });
    }
    </script>
</body>

</html>