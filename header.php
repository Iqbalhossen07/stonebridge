<header class="fixed inset-x-0 top-0 z-50">
<div class="bg-white border-b border-slate-200">
    <div class="container mx-auto px-6 flex items-center justify-between py-3">
        <a href="index.php" class="inline-flex items-center gap-2">
            <img class="w-24" src="img/logo.png" alt="Stonebridge Legal Logo">
        </a>
        
        <div class="flex items-center gap-6">

            <div class="hidden lg:flex flex-col gap-1 items-start">
                <div class="flex items-center gap-6">
                    <a href="mailto:info@stonebridgelegal.co.uk" class="flex items-center gap-2 text-sm text-slate-600 hover:text-primary transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span>info@stonebridgelegal.co.uk</span>
                    </a>
                    <a href="tel:+447988138221" class="flex items-center gap-2 text-sm text-slate-600 hover:text-primary transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span>+447988138221</span>
                    </a>
                </div>
                <!-- <div class="flex items-center gap-2 text-sm text-slate-600 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span>123 Legal Avenue, London, UK</span>
                </div> -->
            </div>
            
            <a href="#cta" class="text-center font-semibold transition-all duration-300 ease-in-out shadow-lg hover:shadow-xl hover:-translate-y-0.5 
                                 bg-gradient-to-br from-primary to-amber-700 text-white 
                                 hover:bg-none hover:bg-white hover:text-primary 
                                 border-2 border-transparent hover:border-primary
                                 px-4 py-2 text-sm md:px-6 md:py-3 rounded-md">
                Book Appointment
            </a>

            <button id="menuBtn" class="md:hidden p-2 rounded-md border" aria-label="Toggle menu">☰</button>
        </div>
    </div>
</div>

    <div id="navWrap" class="bg-primary shadow-md">
        <nav class="hidden md:flex container mx-auto items-center justify-center py-2">
            <ul class="flex items-center gap-6 font-semibold relative">
                <li><a href="index.php" class="text-sm tracking-wide text-white hover:text-amber-300 transition-colors">Home</a></li>
                <li class="relative group">
                    <a href="about.php" class="text-sm tracking-wide text-white hover:text-amber-300 transition-colors flex items-center gap-1">
                        About <svg class="h-4 w-4 transition-transform duration-300 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                    <div class="absolute top-full left-0 w-48 bg-white shadow-soft-2 rounded-lg border mt-2 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-10">
                        <a href="about.php" class="block px-4 py-2 text-sm text-slate-700 hover:bg-primary/5 hover:text-primary">About Us</a>
                        <a href="team.php" class="block px-4 py-2 text-sm text-slate-700 hover:bg-primary/5 hover:text-primary">Our Team</a>
                    </div>
                </li>
                
                <li class="group static">
                    <a href="services.html" class="text-sm tracking-wide text-white hover:text-amber-300 transition-colors flex items-center gap-1">
                        Services <svg class="h-4 w-4 transition-transform duration-300 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                    <div class="mega-menu absolute top-full left-1/2 -translate-x-1/2 w-screen max-w-7xl bg-white shadow-soft-2 rounded-lg border mt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-20">
                         <div class="p-8 grid grid-cols-5 gap-8">
            <div class="space-y-6">
                <div>
                    <h4 class="font-semibold text-slate-800 mb-3">Sponsorship Licence</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="mega-menu-link">Sponsor Licence Application</a></li>
                        <li><a href="#" class="mega-menu-link">Sponsor Licence Renewal</a></li>
                        <li><a href="#" class="mega-menu-link">Sponsor Licence Suspension</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-slate-800 mb-3">Global Business Mobility</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="mega-menu-link">Graduate Trainee Visa</a></li>
                        <li><a href="#" class="mega-menu-link">UK Expansion Worker visa</a></li>
                        <li><a href="#" class="mega-menu-link">Specialist Worker Visa</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-slate-800 mb-3">UKVI Compliant HR Software</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="mega-menu-link">Compliant HR Software</a></li>
                        <li><a href="#" class="mega-menu-link">Sponsorship Duties</a></li>
                        <li><a href="#" class="mega-menu-link">HO Compliance Audit in UK</a></li>
                    </ul>
                </div>
            </div>
            <div class="space-y-6">
                <div>
                    <h4 class="font-semibold text-slate-800 mb-3">Immigration Compliance</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="mega-menu-link">Civil Penalty</a></li>
                        <li><a href="#" class="mega-menu-link">HO Compliance Visit</a></li>
                        <li><a href="#" class="mega-menu-link">Right to Work Check</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-slate-800 mb-3">Standard Visitor Visa</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="mega-menu-link">Tourist Visa</a></li>
                        <li><a href="#" class="mega-menu-link">Business Visit</a></li>
                        <li><a href="#" class="mega-menu-link">UK Fiancé Visa</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-slate-800 mb-3">EU Settlement Scheme</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="mega-menu-link">EU Pre-Settled Status</a></li>
                        <li><a href="#" class="mega-menu-link">EU Settled Status</a></li>
                        <li><a href="#" class="mega-menu-link">EU Family Permit</a></li>
                    </ul>
                </div>
            </div>
            <div class="space-y-6">
                <div>
                    <h4 class="font-semibold text-slate-800 mb-3">Skilled Worker Visas</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="mega-menu-link">Skilled Worker Visa</a></li>
                        <li><a href="#" class="mega-menu-link">Minister of Religion Visa</a></li>
                        <li><a href="#" class="mega-menu-link">Health Care Visa</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-slate-800 mb-3">Study Visas</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="mega-menu-link">Student Visa</a></li>
                        <li><a href="#" class="mega-menu-link">Child Student Visa</a></li>
                        <li><a href="#" class="mega-menu-link">Graduate Visa</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-slate-800 mb-3">UK Settlement Scheme</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="mega-menu-link">20 Year Private Life Route</a></li>
                        <li><a href="#" class="mega-menu-link">ILR (5 year route)</a></li>
                        <li><a href="#" class="mega-menu-link">ILR (10 year route)</a></li>
                    </ul>
                </div>
            </div>
            <div class="space-y-6">
                <div>
                    <h4 class="font-semibold text-slate-800 mb-3">Temporary (Tier 5) Visas</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="mega-menu-link">Religious Worker Visa</a></li>
                        <li><a href="#" class="mega-menu-link">Creative Worker Visa</a></li>
                        <li><a href="#" class="mega-menu-link">Charity Worker Visa</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-slate-800 mb-3">Business Visas</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="mega-menu-link">Self-Sponsorship in UK</a></li>
                        <li><a href="#" class="mega-menu-link">Innovator Founder Visa</a></li>
                        <li><a href="#" class="mega-menu-link">Turkish Businessperson Visa</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-slate-800 mb-3">British Citizenship</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="mega-menu-link">Naturalisation</a></li>
                        <li><a href="#" class="mega-menu-link">BNO Status</a></li>
                        <li><a href="#" class="mega-menu-link">Registration</a></li>
                    </ul>
                </div>
            </div>
            <div class="space-y-6">
                <div>
                    <h4 class="font-semibold text-slate-800 mb-3">Partner and family Visas</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="mega-menu-link">Spouse Visa</a></li>
                        <li><a href="#" class="mega-menu-link">Dependent Visa</a></li>
                        <li><a href="#" class="mega-menu-link">Unmarried Partner Visa</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-slate-800 mb-3">Scale Up Visa</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="mega-menu-link">Scale-up Visa</a></li>
                        <li><a href="#" class="mega-menu-link">Scale-up Sponsor Licence</a></li>
                        <li><a href="#" class="mega-menu-link">Scale up Business</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-slate-800 mb-3">Immigration Appeals</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="mega-menu-link">Judicial Review</a></li>
                        <li><a href="#" class="mega-menu-link">Administrative Review</a></li>
                        <li><a href="#" class="mega-menu-link">Appeal To The Tribunal</a></li>
                    </ul>
                </div>
            </div>
        </div>
                    </div>
                </li>

                <li><a href="self-sponsorship.php" class="text-sm tracking-wide text-white hover:text-amber-300 transition-colors">Self-Sponsorship</a></li>
                <li><a href="psw.php" class="text-sm tracking-wide text-white hover:text-amber-300 transition-colors">PSW</a></li>
                <li><a href="asylum.php" class="text-sm tracking-wide text-white hover:text-amber-300 transition-colors">Asylum</a></li>
                <li><a href="sponsor-checker.php" class="text-sm tracking-wide text-white hover:text-amber-300 transition-colors">Sponsor Checker</a></li>
                <li><a href="skilled-worker-occupations.php" class="text-sm tracking-wide text-white hover:text-amber-300 transition-colors">Eligible Occupation</a></li>
                <li class="relative group">
                    <a href="events.php" class="text-sm tracking-wide text-white hover:text-amber-300 transition-colors flex items-center gap-1">
                        Events <svg class="h-4 w-4 transition-transform duration-300 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                    <div class="absolute top-full left-0 w-48 bg-white shadow-soft-2 rounded-lg border mt-2 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-10">
                        <a href="events.php" class="block px-4 py-2 text-sm text-slate-700 hover:bg-primary/5 hover:text-primary">Events</a>
                        <a href="gallery.php" class="block px-4 py-2 text-sm text-slate-700 hover:bg-primary/5 hover:text-primary">Gallery</a>
                        <a href="blog.php" class="block px-4 py-2 text-sm text-slate-700 hover:bg-primary/5 hover:text-primary">Blog</a>
                        <a href="contact.php" class="block px-4 py-2 text-sm text-slate-700 hover:bg-primary/5 hover:text-primary">Contact</a>
                    </div>
                </li>
                <li><a href="resources.php" class="text-sm tracking-wide text-white hover:text-amber-300 transition-colors">Resources</a></li>
            </ul>
        </nav>
        
        <div id="mobileMenu" class="hidden md:hidden border-t bg-white/95 backdrop-blur-xl max-h-[calc(100vh-80px)] overflow-y-auto">
            <div class="container mx-auto px-6 py-4">
                 <ul class="grid gap-3">
                    <li><a href="index.php" class="block px-3 py-2 rounded-md hover:bg-slate-100">Home</a></li>
                    <li class="mobile-accordion">
                        <button class="mobile-accordion-trigger w-full flex justify-between items-center px-3 py-2 rounded-md hover:bg-slate-100"><span class="font-semibold">About</span><svg class="h-4 w-4 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                        <div class="mobile-accordion-content pl-6 pt-2"><ul class="grid gap-1 text-slate-700"><li><a href="about.php" class="block py-1 hover:text-primary">About Us</a></li><li><a href="team.php" class="block py-1 hover:text-primary">Our Team</a></li></ul></div>
                    </li>
                    <li class="mobile-accordion">
                        <button class="mobile-accordion-trigger w-full flex justify-between items-center px-3 py-2 rounded-md hover:bg-slate-100"><span class="font-semibold">Services</span><svg class="h-4 w-4 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                        <div class="mobile-accordion-content pl-4 pt-2">
                            <ul class="grid gap-1 text-slate-700">
                                <li class="mobile-sub-accordion"><button class="mobile-sub-accordion-trigger w-full flex justify-between items-center py-1 text-left font-medium"><span>Sponsorship Licence</span><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button><div class="mobile-sub-accordion-content"><ul class="text-sm"><li><a href="#">Sponsor Licence Application</a></li><li><a href="#">Sponsor Licence Renewal</a></li><li><a href="#">Sponsor Licence Suspension</a></li></ul></div></li>
                                <li class="mobile-sub-accordion"><button class="mobile-sub-accordion-trigger w-full flex justify-between items-center py-1 text-left font-medium"><span>Immigration Compliance</span><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button><div class="mobile-sub-accordion-content"><ul class="text-sm"><li><a href="#">Civil Penalty</a></li><li><a href="#">HO Compliance Visit</a></li><li><a href="#">Right to Work Check</a></li></ul></div></li>
                                <li class="mobile-sub-accordion"><button class="mobile-sub-accordion-trigger w-full flex justify-between items-center py-1 text-left font-medium"><span>Skilled Worker Visas</span><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button><div class="mobile-sub-accordion-content"><ul class="text-sm"><li><a href="#">Skilled Worker Visa</a></li><li><a href="#">Minister of Religion Visa</a></li><li><a href="#">Health Care Visa</a></li></ul></div></li>
                                <li class="mobile-sub-accordion"><button class="mobile-sub-accordion-trigger w-full flex justify-between items-center py-1 text-left font-medium"><span>Temporary (Tier 5) Visas</span><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button><div class="mobile-sub-accordion-content"><ul class="text-sm"><li><a href="#">Religious Worker Visa</a></li><li><a href="#">Creative Worker Visa</a></li><li><a href="#">Charity Worker Visa</a></li></ul></div></li>
                                <li class="mobile-sub-accordion"><button class="mobile-sub-accordion-trigger w-full flex justify-between items-center py-1 text-left font-medium"><span>Partner and family Visas</span><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button><div class="mobile-sub-accordion-content"><ul class="text-sm"><li><a href="#">Spouse Visa</a></li><li><a href="#">Dependent Visa</a></li><li><a href="#">Unmarried Partner Visa</a></li></ul></div></li>
                                <li><a href="services.php" class="block py-1 mt-2 font-semibold text-primary">View All Services &rarr;</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="self-sponsorship.php" class="block px-3 py-2 rounded-md hover:bg-slate-100">Self-Sponsorship</a></li>
                    <li><a href="psw.php" class="block px-3 py-2 rounded-md hover:bg-slate-100">PSW</a></li>
                    <li><a href="asylum.php" class="block px-3 py-2 rounded-md hover:bg-slate-100">Asylum</a></li>
                    <li><a href="sponsor-checker.php" class="block px-3 py-2 rounded-md hover:bg-slate-100">Sponsor Checker</a></li>
                    <li><a href="skilled-worker-occupations.php" class="block px-3 py-2 rounded-md hover:bg-slate-100">Eligible Occupation</a></li>
                    <li class="mobile-accordion">
                        <button class="mobile-accordion-trigger w-full flex justify-between items-center px-3 py-2 rounded-md hover:bg-slate-100"><span class="font-semibold">Events</span><svg class="h-4 w-4 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                        <div class="mobile-accordion-content pl-6 pt-2"><ul class="grid gap-1 text-slate-700"><li><a href="events.php" class="block py-1 hover:text-primary">Events</a></li><li><a href="gallery.php" class="block py-1 hover:text-primary">Gallery</a></li><li><a href="blog.php" class="block py-1 hover:text-primary">Blog</a></li><li><a href="contact.php" class="block py-1 hover:text-primary">Contact</a></li></ul></div>
                    </li>
                    <li><a href="contact.php" class="block px-3 py-2 rounded-md hover:bg-slate-100">Contact</a></li>
                </ul>
            </div>
            </div>
    </div>
</header>