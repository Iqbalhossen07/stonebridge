<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Manage Services - Dashboard</title>

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
        #subservice-modal { transition: opacity 0.3s ease; }
    </style>
</head>

<body class="bg-secondary font-body text-slate-800 antialiased">
    <div class="flex h-screen bg-secondary overflow-hidden">
        <aside id="desktop-sidebar" class="w-64 flex-shrink-0 bg-gray-900 text-white hidden lg:flex flex-col">
            <div class="h-20 flex items-center justify-center border-b border-white/10"><img src="img/logo.png" alt="Logo" class="w-32 invert brightness-0"></div>
            <nav class="flex-1 px-4 py-6 space-y-2">
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-tachometer-alt w-5"></i><span>Dashboard</span></a>
                <a href="#" class="sidebar-link active flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-concierge-bell w-5"></i><span>Services</span></a>
                <a href="#" class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg"><i class="fas fa-blog w-5"></i><span>Blog</span></a>
                </nav>
            <div class="p-4 border-t border-white/10"><div class="flex items-center gap-4"><img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?q=80&w=800&auto=format&fit=crop" alt="User" class="w-10 h-10 rounded-full"><div><p class="font-semibold text-white">David Lee</p><a href="#" class="text-xs text-gray-400 hover:underline">View Profile</a></div></div></div>
        </aside>

        <div class="flex-1 flex flex-col overflow-y-auto relative">
            <header class="bg-white shadow-soft-1 sticky top-0 z-20">
                <div class="container mx-auto px-6 py-3 flex items-center justify-between">
                    <h1 class="font-heading text-xl md:text-2xl font-bold text-primary">Manage Services</h1>
                    <div class="flex items-center gap-3 md:gap-5"><button class="flex items-center gap-3 group"><img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?q=80&w=800&auto=format&fit=crop" alt="User" class="w-10 h-10 rounded-full object-cover"><div class="hidden sm:block text-left"><p class="font-heading text-sm font-semibold text-primary">David Lee</p><p class="text-xs text-slate-500">Administrator</p></div></button></div>
                </div>
            </header>

            <main class="flex-1 p-6">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="font-heading text-2xl font-bold">All Services</h2>
                    <a href="#" class="bg-primary hover:bg-primary-dark text-white font-bold py-2 px-4 rounded-lg flex items-center gap-2 transition-colors duration-300">
                        <i class="fas fa-plus"></i>
                        <span>Add New Service</span>
                    </a>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">
                    <div class="bg-white rounded-xl shadow-soft-1" data-aos="fade-up">
                        <div class="p-4 border-b bg-slate-50 rounded-t-xl flex justify-between items-center"><h3 class="font-heading text-lg font-bold text-slate-800">Sponsorship Licence</h3><div class="flex items-center gap-2"><a href="#" title="Edit Service" class="h-8 w-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center hover:bg-green-200 transition-colors"><i class="fas fa-pencil-alt text-sm"></i></a><a href="#" title="Delete Service" class="h-8 w-8 rounded-full bg-red-100 text-red-600 flex items-center justify-center hover:bg-red-200 transition-colors"><i class="fas fa-trash-alt text-sm"></i></a></div></div>
                        <div class="p-4 space-y-3">
                            <div class="flex justify-between items-center group"><p class="text-slate-600">Sponsor Licence Application</p><div class="flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity"><a href="#" title="Edit Sub-service"><i class="fas fa-pencil-alt text-sm text-slate-400 hover:text-blue-600"></i></a><a href="#" title="Delete Sub-service"><i class="fas fa-trash-alt text-sm text-slate-400 hover:text-red-600"></i></a></div></div>
                            <div class="flex justify-between items-center group"><p class="text-slate-600">Sponsor Licence Renewal</p><div class="flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity"><a href="#" title="Edit Sub-service"><i class="fas fa-pencil-alt text-sm text-slate-400 hover:text-blue-600"></i></a><a href="#" title="Delete Sub-service"><i class="fas fa-trash-alt text-sm text-slate-400 hover:text-red-600"></i></a></div></div>
                        </div>
                        <div class="p-4 border-t">
                            <button class="add-subservice-btn w-full text-center text-sm font-medium text-primary hover:text-primary-dark transition-colors" data-parent-service="Sponsorship Licence">+ Add Sub-service</button>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-soft-1" data-aos="fade-up" data-aos-delay="100">
                        <div class="p-4 border-b bg-slate-50 rounded-t-xl flex justify-between items-center"><h3 class="font-heading text-lg font-bold text-slate-800">Skilled Worker Visas</h3><div class="flex items-center gap-2"><a href="#" title="Edit Service" class="h-8 w-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center hover:bg-green-200 transition-colors"><i class="fas fa-pencil-alt text-sm"></i></a><a href="#" title="Delete Service" class="h-8 w-8 rounded-full bg-red-100 text-red-600 flex items-center justify-center hover:bg-red-200 transition-colors"><i class="fas fa-trash-alt text-sm"></i></a></div></div>
                         <div class="p-4 space-y-3">
                            <div class="flex justify-between items-center group"><p class="text-slate-600">Skilled Worker Visa</p><div class="flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity"><a href="#" title="Edit Sub-service"><i class="fas fa-pencil-alt text-sm text-slate-400 hover:text-blue-600"></i></a><a href="#" title="Delete Sub-service"><i class="fas fa-trash-alt text-sm text-slate-400 hover:text-red-600"></i></a></div></div>
                        </div>
                        <div class="p-4 border-t">
                             <button class="add-subservice-btn w-full text-center text-sm font-medium text-primary hover:text-primary-dark transition-colors" data-parent-service="Skilled Worker Visas">+ Add Sub-service</button>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    
    <div id="subservice-modal" class="fixed inset-0 bg-black/70 backdrop-blur-sm flex items-center justify-center p-4 z-50 hidden">
        <div class="bg-white rounded-xl shadow-soft-2 w-full max-w-md">
            <div class="flex justify-between items-center p-4 border-b">
                <h3 id="modal-title" class="font-heading text-xl font-bold text-slate-800">Add Sub-service</h3>
                <button id="close-modal-btn" class="h-8 w-8 rounded-full hover:bg-slate-100 flex items-center justify-center">&times;</button>
            </div>
            <form class="p-6 space-y-4">
                <input type="hidden" id="parent-service-input" name="parent-service">
                <div>
                    <label for="subservice-name" class="block text-sm font-medium text-slate-700 mb-2">Sub-service Name</label>
                    <input type="text" id="subservice-name" class="block w-full rounded-md border-slate-300 bg-white py-2 px-3 shadow-sm placeholder:text-slate-400 focus:border-primary focus:ring-1 ring-primary/50" placeholder="Enter sub-service name">
                </div>
                <div class="pt-4 flex justify-end gap-3">
                    <button type="button" id="cancel-modal-btn" class="bg-slate-200 hover:bg-slate-300 text-slate-800 font-bold py-2 px-4 rounded-lg">Cancel</button>
                    <button type="submit" class="bg-primary hover:bg-primary-dark text-white font-bold py-2 px-4 rounded-lg">Save</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 700, once: true, easing: 'ease-out-cubic' });

        // --- Modal Functionality for Adding Sub-service ---
        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('subservice-modal');
            const openModalBtns = document.querySelectorAll('.add-subservice-btn');
            const closeModalBtn = document.getElementById('close-modal-btn');
            const cancelBtn = document.getElementById('cancel-modal-btn');
            const modalTitle = document.getElementById('modal-title');
            const parentServiceInput = document.getElementById('parent-service-input');

            function showModal(parentServiceName) {
                modalTitle.textContent = `Add to "${parentServiceName}"`;
                parentServiceInput.value = parentServiceName;
                modal.classList.remove('hidden');
            }
            function hideModal() { modal.classList.add('hidden'); }

            openModalBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const parentService = this.dataset.parentService;
                    showModal(parentService);
                });
            });

            closeModalBtn.addEventListener('click', hideModal);
            cancelBtn.addEventListener('click', hideModal);
            modal.addEventListener('click', function(e) { if (e.target === modal) { hideModal(); } });
        });
    </script>
</body>
</html>