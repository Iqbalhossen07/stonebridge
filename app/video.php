<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Manage Videos - Dashboard</title>

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

    #videoModal {
        transition: opacity 0.3s ease;
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
                        class="fas fa-blog w-5"></i><span>Blog</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i
                        class="fas fa-comment-dots w-5"></i><span>Testimonials</span></a>
                <a href="#" class="sidebar-link active flex items-center gap-3 px-6 py-3 rounded-lg"><i
                        class="fas fa-video w-5"></i><span>Videos</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i
                        class="fas fa-users w-5"></i><span>Clients</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i
                        class="fas fa-cog w-5"></i><span>Settings</span></a>
            </nav>
            <div class="p-4 border-t border-white/10">
                <div class="flex items-center gap-4"><img
                        src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?q=80&w=800&auto-format&fit=crop"
                        alt="User" class="w-10 h-10 rounded-full">
                    <div>
                        <p class="font-semibold text-white">David Lee</p><a href="#"
                            class="text-xs text-gray-400 hover:underline">View Profile</a>
                    </div>
                </div>
            </div>
        </aside>

        <div class="flex-1 flex flex-col overflow-y-auto relative">
            <header class="bg-white shadow-soft-1 sticky top-0 z-20">
                <div class="container mx-auto px-6 py-3 flex items-center justify-between">
                    <h1 class="font-heading text-xl md:text-2xl font-bold text-primary">Manage Videos</h1>
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
                <div class="flex justify-between items-center mb-6">
                    <h2 class="font-heading text-2xl font-bold">All Videos</h2>
                    <a href="#"
                        class="bg-primary hover:bg-primary-dark text-white font-bold py-2 px-4 rounded-lg flex items-center gap-2 transition-colors duration-300"><i
                            class="fas fa-plus"></i><span>Add New Video</span></a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white rounded-xl shadow-soft-1 overflow-hidden group" data-aos="fade-up">
                        <div class="relative play-video-button cursor-pointer"
                            data-video-url="https://www.youtube.com/embed/5eBoRi-362E">
                            <img src="https://img.youtube.com/vi/5eBoRi-362E/hqdefault.jpg" alt="Video Thumbnail"
                                class="w-full h-48 object-cover">
                            <div
                                class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <i class="fas fa-play-circle text-white text-5xl"></i></div>
                        </div>
                        <div class="p-5">
                            <h3 class="font-heading font-bold text-slate-800 mb-2 truncate">Skilled Worker Visa
                                Explained</h3>
                            <div class="flex items-center text-slate-500 text-sm mb-4 space-x-4"><span><i
                                        class="far fa-clock mr-1"></i> 12:45</span><span><i
                                        class="far fa-calendar-alt mr-1"></i> Sep 19, 2025</span></div>
                            <div class="border-t border-slate-200 pt-4 flex justify-end gap-3"><a href="#" title="Edit"
                                    class="h-8 w-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-green-200 hover:-translate-y-0.5 transition-all duration-300"><i
                                        class="fas fa-pencil-alt text-sm"></i></a><a href="#" title="Delete"
                                    class="h-8 w-8 rounded-full bg-red-100 text-red-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-red-200 hover:-translate-y-0.5 transition-all duration-300"><i
                                        class="fas fa-trash-alt text-sm"></i></a></div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-soft-1 overflow-hidden group" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="relative play-video-button cursor-pointer"
                            data-video-url="https://www.youtube.com/embed/W7rPtnqjU68">
                            <img src="https://img.youtube.com/vi/W7rPtnqjU68/hqdefault.jpg" alt="Video Thumbnail"
                                class="w-full h-48 object-cover">
                            <div
                                class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <i class="fas fa-play-circle text-white text-5xl"></i></div>
                        </div>
                        <div class="p-5">
                            <h3 class="font-heading font-bold text-slate-800 mb-2 truncate">Guide to EU Settlement
                                Scheme</h3>
                            <div class="flex items-center text-slate-500 text-sm mb-4 space-x-4"><span><i
                                        class="far fa-clock mr-1"></i> 08:30</span><span><i
                                        class="far fa-calendar-alt mr-1"></i> Sep 18, 2025</span></div>
                            <div class="border-t border-slate-200 pt-4 flex justify-end gap-3"><a href="#" title="Edit"
                                    class="h-8 w-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-green-200 hover:-translate-y-0.5 transition-all duration-300"><i
                                        class="fas fa-pencil-alt text-sm"></i></a><a href="#" title="Delete"
                                    class="h-8 w-8 rounded-full bg-red-100 text-red-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-red-200 hover:-translate-y-0.5 transition-all duration-300"><i
                                        class="fas fa-trash-alt text-sm"></i></a></div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-soft-1 overflow-hidden group" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="relative play-video-button cursor-pointer"
                            data-video-url="https://www.youtube.com/embed/WAoVRWcIoTY">
                            <img src="https://img.youtube.com/vi/WAoVRWcIoTY/hqdefault.jpg" alt="Video Thumbnail"
                                class="w-full h-48 object-cover">
                            <div
                                class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <i class="fas fa-play-circle text-white text-5xl"></i></div>
                        </div>
                        <div class="p-5">
                            <h3 class="font-heading font-bold text-slate-800 mb-2 truncate">Client Success Story: The
                                Ahmed Family</h3>
                            <div class="flex items-center text-slate-500 text-sm mb-4 space-x-4"><span><i
                                        class="far fa-clock mr-1"></i> 05:15</span><span><i
                                        class="far fa-calendar-alt mr-1"></i> Sep 15, 2025</span></div>
                            <div class="border-t border-slate-200 pt-4 flex justify-end gap-3"><a href="#" title="Edit"
                                    class="h-8 w-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-green-200 hover:-translate-y-0.5 transition-all duration-300"><i
                                        class="fas fa-pencil-alt text-sm"></i></a><a href="#" title="Delete"
                                    class="h-8 w-8 rounded-full bg-red-100 text-red-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-red-200 hover:-translate-y-0.5 transition-all duration-300"><i
                                        class="fas fa-trash-alt text-sm"></i></a></div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <div id="videoModal"
        class="fixed inset-0 bg-black/80 backdrop-blur-sm flex items-center justify-center p-4 z-50 hidden">
        <div class="relative w-full max-w-4xl bg-black rounded-lg shadow-2xl"><button id="closeModalBtn"
                class="absolute -top-3 -right-3 h-10 w-10 bg-white rounded-full text-slate-800 flex items-center justify-center text-2xl font-bold hover:bg-slate-200 transition-colors">&times;</button>
            <div class="aspect-video"><iframe id="videoPlayer" class="w-full h-full rounded-lg" src=""
                    title="Video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe></div>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 700,
        once: true,
        easing: 'ease-out-cubic'
    });

    // Video Modal Functionality
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('videoModal');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const videoPlayer = document.getElementById('videoPlayer');
        const playButtons = document.querySelectorAll('.play-video-button');

        function openModal(videoUrl) {
            if (modal && videoPlayer) {
                videoPlayer.src = videoUrl + '?autoplay=1';
                modal.classList.remove('hidden');
            }
        }

        function closeModal() {
            if (modal && videoPlayer) {
                modal.classList.add('hidden');
                videoPlayer.src = '';
            }
        }
        playButtons.forEach(button => {
            button.addEventListener('click', function() {
                const videoUrl = this.dataset.videoUrl;
                if (videoUrl) {
                    openModal(videoUrl);
                }
            });
        });
        if (closeModalBtn) closeModalBtn.addEventListener('click', closeModal);
        if (modal) modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeModal();
            }
        });
    });
    </script>
</body>

</html>