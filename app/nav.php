 <aside id="desktop-sidebar" class="w-64 flex-shrink-0 bg-gray-900 text-white hidden lg:flex flex-col">
     <div class="h-20 flex items-center justify-center border-b border-white/10 bg-white">
         <img src="../img/logo.png" alt="Logo" class="w-36 ">
     </div>
     <?php
// Get the current page's filename
$current_page = basename($_SERVER['PHP_SELF']);
?>

     <nav class="flex-1 px-4 py-6 space-y-2">

         <a href="index.php"
             class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg <?php if ($current_page == 'index.php') echo 'active'; ?>">
             <i class="fas fa-tachometer-alt w-5"></i>
             <span>Dashboard</span>
         </a>

         <a href="blog.php"
             class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg <?php if ($current_page == 'blog.php') echo 'active'; ?>">
            <i class="fas fa-blog w-5"></i>
             <span>Blog</span>
         </a>

         <a href="clients.php"
             class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg <?php if ($current_page == 'clients.php') echo 'active'; ?>">
             <i class="fas fa-users w-5"></i>
             <span>Clients</span>
         </a>

         <a href="testimonial.php"
             class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg <?php if ($current_page == 'testimonial.php') echo 'active'; ?>">
             <i class="fas fa-comment-dots w-5"></i>
             <span>Testimonial</span>
         </a>

         <a href="messages.php"
             class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg <?php if ($current_page == 'messages.php') echo 'active'; ?>">
             <i class="fas fa-envelope w-5"></i>
             <span>Messages</span>
         </a>

         <a href="team.php"
             class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg <?php if ($current_page == 'team.php') echo 'active'; ?>">
            <i class="fas fa-users-cog w-5"></i>
             <span>Team</span>
         </a>
         <a href="gallery.php"
             class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg <?php if ($current_page == 'gallery.php') echo 'active'; ?>">
            <i class="fas fa-images w-5"></i>
             <span>Gallery</span>
         </a>
         <a href="video.php"
             class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg <?php if ($current_page == 'video.php') echo 'active'; ?>">
          <i
                        class="fas fa-video w-5"></i>
             <span>Videos</span>
         </a>
         <a href="event.php"
             class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg <?php if ($current_page == 'event.php') echo 'active'; ?>">
       <i class="fas fa-calendar-alt w-5"></i>
             <span>Event</span>
         </a>

     </nav>
     <div class="p-4 border-t border-white/10">
         <a href="logout.php"
             class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg <?php if ($current_page == 'logout.php') echo 'active'; ?>">
             <i class="fas fa-sign-out-alt w-5"></i>
             <span>Logout</span>
         </a>

     </div>
 </aside>

 <div id="mobile-sidebar-overlay" class="fixed inset-0 bg-black/50 z-30 lg:hidden hidden"></div>
 <aside id="mobile-sidebar"
     class="w-64 fixed inset-y-0 left-0 bg-gray-900 text-white flex flex-col z-40 transform -translate-x-full lg:hidden">
     <div class="h-20 flex items-center justify-between px-4 border-b border-white/10">
         <img src="img/logo.png" alt="Logo" class="w-32 invert brightness-0">
         <button id="close-menu" class="text-white p-2 rounded-full hover:bg-white/10">
             <i class="fas fa-times"></i>
         </button>
     </div>
     <nav class="flex-1 px-4 py-6 space-y-2">

         <a href="index.php"
             class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg <?php if ($current_page == 'index.php') echo 'active'; ?>">
             <i class="fas fa-tachometer-alt w-5"></i>
             <span>Dashboard</span>
         </a>

         <a href="cases.php"
             class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg <?php if ($current_page == 'cases.php') echo 'active'; ?>">
             <i class="fas fa-gavel w-5"></i>
             <span>My Cases</span>
         </a>

         <a href="clients.php"
             class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg <?php if ($current_page == 'clients.php') echo 'active'; ?>">
             <i class="fas fa-users w-5"></i>
             <span>Clients</span>
         </a>

         <a href="appointments.php"
             class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg <?php if ($current_page == 'appointments.php') echo 'active'; ?>">
             <i class="fas fa-calendar-alt w-5"></i>
             <span>Appointments</span>
         </a>

         <a href="messages.php"
             class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg <?php if ($current_page == 'messages.php') echo 'active'; ?>">
             <i class="fas fa-envelope w-5"></i>
             <span>Messages</span>
         </a>

         <a href="settings.php"
             class="sidebar-link flex items-center gap-3 px-6 py-3 rounded-lg <?php if ($current_page == 'settings.php') echo 'active'; ?>">
             <i class="fas fa-cog w-5"></i>
             <span>Settings</span>
         </a>

     </nav>
 </aside>

 <div class="flex-1 flex flex-col overflow-y-auto">
     <header class="bg-white shadow-soft-1 sticky top-0 z-20">
         <div class="container mx-auto px-6 py-3 flex items-center justify-between">
             <div class="flex items-center gap-4">
                 <button id="open-menu" class="lg:hidden text-slate-600 p-2 rounded-full hover:bg-slate-100"><i
                         class="fas fa-bars"></i></button>
                 <h1 class="font-heading text-xl md:text-2xl font-bold text-slate-800">Dashboard</h1>
             </div>
             <div class="flex items-center gap-3 md:gap-5">
                 <div class="relative hidden md:block">
                     <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
                     <input type="text" placeholder="Search..."
                         class="pl-11 pr-4 py-2.5 w-48 lg:w-64 border rounded-full bg-slate-50 focus:bg-white focus:ring-2 focus:ring-primary/50 focus:outline-none transition-all duration-300">
                 </div>
                 <button class="text-slate-500 hover:text-primary relative p-2 rounded-full hover:bg-slate-100"><i
                         class="fas fa-bell fa-lg"></i><span
                         class="absolute top-1 right-1 h-2.5 w-2.5 border-2 border-white bg-accent rounded-full"></span></button>
                 <div class="hidden sm:block h-8 w-px bg-slate-200"></div>
                 <button class="flex items-center gap-3 group">
                     <img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?q=80&w=800&auto=format&fit=crop"
                         alt="User"
                         class="w-10 h-10 rounded-full object-cover ring-2 ring-offset-2 ring-transparent group-hover:ring-primary/50 transition-all duration-300">
                     <div class="hidden sm:block text-left">
                         <p class="font-heading text-sm font-semibold text-slate-800 whitespace-nowrap">David Lee
                         </p>
                         <p class="text-xs text-slate-500">Administrator</p>
                     </div>
                 </button>
             </div>
         </div>
     </header>