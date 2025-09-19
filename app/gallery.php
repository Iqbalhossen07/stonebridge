<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Manage Gallery - Dashboard</title>

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
        #image-upload-modal { transition: opacity 0.3s ease; }
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
                <a href="#" class="sidebar-link active flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-images w-5"></i><span>Gallery</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-users w-5"></i><span>Clients</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-cog w-5"></i><span>Settings</span></a>
            </nav>
            <div class="p-4 border-t border-white/10"><div class="flex items-center gap-4"><img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?q=80&w=800&auto=format&fit=crop" alt="User" class="w-10 h-10 rounded-full"><div><p class="font-semibold text-white">David Lee</p><a href="#" class="text-xs text-gray-400 hover:underline">View Profile</a></div></div></div>
        </aside>

        <div class="flex-1 flex flex-col overflow-y-auto relative">
            <header class="bg-white shadow-soft-1 sticky top-0 z-20">
                <div class="container mx-auto px-6 py-3 flex items-center justify-between">
                    <h1 class="font-heading text-xl md:text-2xl font-bold text-primary">Manage Gallery</h1>
                    <div class="flex items-center gap-3 md:gap-5"><button class="flex items-center gap-3 group"><img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?q=80&w=800&auto=format&fit=crop" alt="User" class="w-10 h-10 rounded-full object-cover"><div class="hidden sm:block text-left"><p class="font-heading text-sm font-semibold text-primary">David Lee</p><p class="text-xs text-slate-500">Administrator</p></div></button></div>
                </div>
            </header>

            <main class="flex-1 p-6">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="font-heading text-2xl font-bold">All Images</h2>
                    <button id="open-modal-btn" class="bg-primary hover:bg-primary-dark text-white font-bold py-2 px-4 rounded-lg flex items-center gap-2 transition-colors duration-300">
                        <i class="fas fa-plus"></i>
                        <span>Add New Image</span>
                    </button>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
                    <div class="group relative rounded-lg overflow-hidden" data-aos="fade-up">
                        <img src="https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?q=80&w=1887&auto=format&fit=crop" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-4">
                            <button class="h-10 w-10 rounded-full bg-red-600/80 hover:bg-red-600 text-white flex items-center justify-center shadow-md"><i class="fas fa-trash-alt text-sm"></i></button>
                        </div>
                    </div>
                    <div class="group relative rounded-lg overflow-hidden" data-aos="fade-up" data-aos-delay="50">
                        <img src="https://images.unsplash.com/photo-1470770841072-f978cf4d019e?q=80&w=2070&auto=format&fit=crop" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-4"><button class="h-10 w-10 rounded-full bg-red-600/80 hover:bg-red-600 text-white flex items-center justify-center shadow-md"><i class="fas fa-trash-alt text-sm"></i></button></div>
                    </div>
                    <div class="group relative rounded-lg overflow-hidden" data-aos="fade-up" data-aos-delay="50">
                        <img src="https://images.unsplash.com/photo-1470770841072-f978cf4d019e?q=80&w=2070&auto=format&fit=crop" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-4"><button class="h-10 w-10 rounded-full bg-red-600/80 hover:bg-red-600 text-white flex items-center justify-center shadow-md"><i class="fas fa-trash-alt text-sm"></i></button></div>
                    </div>
                    <div class="group relative rounded-lg overflow-hidden" data-aos="fade-up" data-aos-delay="50">
                        <img src="https://images.unsplash.com/photo-1470770841072-f978cf4d019e?q=80&w=2070&auto=format&fit=crop" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-4"><button class="h-10 w-10 rounded-full bg-red-600/80 hover:bg-red-600 text-white flex items-center justify-center shadow-md"><i class="fas fa-trash-alt text-sm"></i></button></div>
                    </div>
                    </div>
            </main>
        </div>
    </div>
    
    <div id="image-upload-modal" class="fixed inset-0 bg-black/70 backdrop-blur-sm flex items-center justify-center p-4 z-50 hidden">
        <div class="bg-white rounded-xl shadow-soft-2 w-full max-w-lg" data-aos="fade-up">
            <div class="flex justify-between items-center p-4 border-b">
                <h3 class="font-heading text-xl font-bold text-slate-800">Add New Image to Gallery</h3>
                <button id="close-modal-btn" class="h-8 w-8 rounded-full hover:bg-slate-100 flex items-center justify-center">&times;</button>
            </div>
            <form class="p-6 space-y-4">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Image Preview & Upload</label>
                    <div id="image-upload-box" class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-slate-300 border-dashed rounded-lg">
                        <div class="space-y-1 text-center">
                            <img id="image-preview" src="" alt="Image preview" class="hidden w-40 h-40 object-cover mx-auto mb-4 rounded-md">
                            <div id="upload-placeholder">
                                <i class="fas fa-cloud-upload-alt text-4xl text-slate-400"></i>
                                <div class="flex text-sm text-slate-600"><label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-primary hover:text-primary-dark"><span>Upload a file</span><input id="file-upload" name="file-upload" type="file" class="sr-only"></label><p class="pl-1">or drag and drop</p></div>
                                <p class="text-xs text-slate-500">PNG, JPG, GIF up to 10MB</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="image-caption" class="block text-sm font-medium text-slate-700 mb-2">Image Caption (Optional)</label>
                    <input type="text" id="image-caption" class="block w-full rounded-md border-slate-300 shadow-sm focus:border-primary focus:ring-1 ring-primary/50" placeholder="e.g., Office Opening Ceremony">
                </div>
                <div class="pt-4 flex justify-end gap-3">
                    <button type="button" id="cancel-btn" class="bg-slate-200 hover:bg-slate-300 text-slate-800 font-bold py-2 px-4 rounded-lg">Cancel</button>
                    <button type="submit" class="bg-primary hover:bg-primary-dark text-white font-bold py-2 px-4 rounded-lg">Upload Image</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 700, once: true, easing: 'ease-out-cubic' });

        // --- Modal & Image Preview Functionality ---
        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('image-upload-modal');
            const openModalBtn = document.getElementById('open-modal-btn');
            const closeModalBtn = document.getElementById('close-modal-btn');
            const cancelBtn = document.getElementById('cancel-btn');
            
            const fileUpload = document.getElementById('file-upload');
            const imagePreview = document.getElementById('image-preview');
            const uploadPlaceholder = document.getElementById('upload-placeholder');

            function showModal() { modal.classList.remove('hidden'); }
            function hideModal() { modal.classList.add('hidden'); }

            openModalBtn.addEventListener('click', showModal);
            closeModalBtn.addEventListener('click', hideModal);
            cancelBtn.addEventListener('click', hideModal);
            modal.addEventListener('click', function(e) { if (e.target === modal) { hideModal(); } });
            
            fileUpload.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        imagePreview.src = event.target.result;
                        imagePreview.classList.remove('hidden');
                        uploadPlaceholder.classList.add('hidden');
                    }
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
</body>
</html>