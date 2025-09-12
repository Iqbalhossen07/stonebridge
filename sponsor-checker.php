<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sponsor License Checker — Stonebridge Legal</title>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600&family=Merriweather:wght@700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
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
   <link rel="stylesheet" href="style.css">
</head>
<body class="bg-slate-50 text-slate-900 font-body antialiased selection:bg-primary/20 selection:text-primary" x-data="sponsorChecker()">
    <div aria-hidden="true" class="pointer-events-none fixed inset-0 -z-10 ">
        <div class="absolute -top-32 -left-24 h-80 w-80 rounded-full blur-3xl opacity-50 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-primary/25 via-primary/10 to-transparent"></div>
        <div class="absolute top-40 -right-24 h-96 w-96 rounded-full blur-3xl opacity-40 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-amber-400/20 via-amber-400/0 to-transparent"></div>
        <div class="absolute inset-0 noise"></div>
    </div>

    <?php include('header.php') ?> 

    <main>



        <section class="relative pt-32 md:pt-48 pb-12 text-center overflow-hidden">
            <div aria-hidden="true" class="absolute inset-0 z-0 opacity-40">
                <svg class="absolute top-0 left-0 w-full h-auto" viewBox="0 0 1440 900" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"><path d="M0 200C0 200 360 400 720 200C1080 0 1440 200 1440 200V900H0V200Z" fill="url(#paint0_linear_wave_checker)" /><defs><linearGradient id="paint0_linear_wave_checker" x1="720" y1="0" x2="720" y2="900" gradientUnits="userSpaceOnUse"><stop stop-color="#87550D" stop-opacity="0.05" /><stop offset="1" stop-color="#87550D" stop-opacity="0" /></linearGradient></defs></svg>
            </div>
            <div class="container mx-auto px-6 relative z-10">
                <h1 class="font-heading text-3xl md:text-5xl text-slate-900 leading-tight" data-aos="fade-up">UK Sponsor License Checker</h1>
                <p class="mt-4 text-lg text-slate-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">Enter a company name to verify their official sponsor license status.</p>
                <div class="mt-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    <form @submit.prevent="performSearch" class="relative flex items-center">
                        <input type="text" x-model="searchQuery" @input.debounce.300ms="filterAndDisplayCompanies" placeholder="Search by company name..." class="w-full text-lg px-6 py-4 rounded-full border-2 border-slate-200 focus:ring-2 focus:ring-primary/50 focus:border-primary focus:outline-none shadow-soft-1">
                        <button type="submit" class="absolute right-2 h-12 w-12 rounded-full bg-primary text-white flex items-center justify-center hover:opacity-90 transition-opacity">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" /></svg>
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <section class="py-12">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <template x-for="stat in stats" :key="stat.key">
                        <div @click="setActiveFilter(stat.key)" 
                             class="flex items-center justify-between p-5 rounded-lg shadow-soft-1 cursor-pointer transition-all duration-300 text-white"
                             :class="{
                                'bg-gradient-to-br from-green-600 to-green-500': stat.key === 'valid',
                                'bg-gradient-to-br from-red-600 to-red-500': stat.key === 'expired',
                                'bg-gradient-to-br from-amber-600 to-amber-500': stat.key === 'pending',
                                'ring-4 ring-offset-2 ring-primary': activeFilter === stat.key,
                                'opacity-80 hover:opacity-100': activeFilter !== stat.key
                             }">
                            <div>
                                <p class="text-sm opacity-90" x-text="stat.label"></p>
                                <p class="font-heading text-2xl" x-text="stat.count"></p>
                            </div>
                            <svg class="h-8 w-8 opacity-50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
                        </div>
                    </template>
                </div>
            </div>
        </section>

        <section class="pb-24 pt-12">
            <div class="container mx-auto px-6">
                <div x-show="isLoading" class="text-center text-slate-600 py-12">Loading results...</div>
                
                <div x-show="!isLoading && displayedCompanies.length === 0" class="text-center bg-white p-8 rounded-lg shadow-soft-1">
                    <h3 class="font-heading text-xl text-slate-800">No Results Found</h3>
                    <p class="text-slate-600 mt-2">We couldn't find any companies matching your search and filter criteria.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-start" x-show="!isLoading && displayedCompanies.length > 0">
                    <template x-for="company in displayedCompanies" :key="company.name">
                        <div  @click="openDrawer(company)" 
                             class="group grid grid-rows-[1fr_auto] p-6 rounded-lg shadow-2xl hover:shadow-xl cursor-pointer transition-all duration-300 hover:shadow-soft-2 hover:-translate-y-1 border-l-4"
                             :class="{
                                'bg-green-50 border-green-500': company.status === 'Valid',
                                'bg-red-50 border-red-500': company.status === 'Expired',
                                'bg-amber-50 border-amber-500': company.status === 'Pending'
                             }">
                            <div class="flex justify-between items-start ">
                                <div>
                                    <h3 class="font-heading text-xl text-slate-900" x-text="company.name"></h3>
                                    <p class="text-slate-600" x-text="company.type"></p>
                                </div>
                                <span class="text-xs font-bold px-2 py-1 rounded-full shrink-0"
                                      :class="{
                                        'bg-green-100 text-green-800': company.status === 'Valid',
                                        'bg-red-100 text-red-800': company.status === 'Expired',
                                        'bg-amber-100 text-amber-800': company.status === 'Pending'
                                      }"
                                      x-text="company.status">
                                </span>
                            </div>
                            <div class="overflow-hidden max-h-0 opacity-0 group-hover:max-h-40 group-hover:opacity-100 transition-all duration-300 ease-in-out">
                                <div class="mt-4 pt-4 border-t border-slate-200/80 text-right ">
                                    <span class="inline-flex items-center gap-1.5 text-xs font-bold px-3 py-1.5 rounded-full"
                                          :class="{
                                            'bg-green-100 text-green-800': company.status === 'Valid',
                                            'bg-red-100 text-red-800': company.status === 'Expired',
                                            'bg-amber-100 text-amber-800': company.status === 'Pending'
                                          }">
                                        View Details
                                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </section>

     <!-- CTA -->
      <section id="cta" class="relative mt-24 mb-24 max-w-5xl mx-auto">
        <div class="absolute inset-0 -z-10 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-primary/20 via-primary/0 to-transparent"></div>
        <div class="container mx-auto px-6">
          <div class="overflow-hidden rounded-2xl p-10 md:p-14 bg-gradient-to-br from-primary to-amber-700 text-white shadow-glow">
            <div class="grid gap-6 md:grid-cols-2 md:items-center">
              <div data-aos="fade-right">
                <h3 class="font-heading text-3xl md:text-4xl">Ready to elevate your brand?</h3>
                <p class="mt-2 text-white/85 max-w-prose">Let’s craft something exceptional together—designed to perform and built to last.</p>
              </div>
              <div class="flex md:justify-end items-center" data-aos="fade-left">
                <a href="#" class="btn-premium bg-gradient-to-br from-white to-white text-primary hover:opacity-95">Start your project</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <div x-show="isDrawerOpen" @keydown.escape.window="closeDrawer()" class="fixed inset-0 z-50" style="display: none;">
        <div x-show="isDrawerOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click="closeDrawer()" class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>
        <div x-show="isDrawerOpen" x-transition:enter="transition ease-in-out duration-300" x-transition:enter-start="transform translate-x-full" x-transition:enter-end="transform translate-x-0" x-transition:leave="transition ease-in-out duration-300" x-transition:leave-start="transform translate-x-0" x-transition:leave-end="transform translate-x-full" class="fixed top-0 right-0 h-full w-full max-w-md bg-white shadow-lg flex flex-col">
            <div class="flex items-center justify-between p-6 border-b">
                <h3 class="font-heading text-2xl text-slate-900">Company Details</h3>
                <button @click="closeDrawer()" class="p-2 rounded-full hover:bg-slate-100">
                    <svg class="h-6 w-6 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
            <div class="p-6 space-y-4 overflow-y-auto">
                <div><label class="text-sm font-semibold text-slate-500">Company Name</label><p class="text-lg text-slate-800" x-text="selectedCompany.name"></p></div>
                <div><label class="text-sm font-semibold text-slate-500">License Type</label><p class="text-lg text-slate-800" x-text="selectedCompany.type"></p></div>
                <div><label class="text-sm font-semibold text-slate-500">Status</label><p class="text-lg font-bold" :class="{ 'text-green-600': selectedCompany.status === 'Valid', 'text-red-600': selectedCompany.status === 'Expired', 'text-amber-600': selectedCompany.status === 'Pending' }" x-text="selectedCompany.status"></p></div>
                <div x-show="selectedCompany.notes"><label class="text-sm font-semibold text-slate-500">Notes</label><p class="text-lg text-slate-800 bg-slate-100 p-4 rounded-md" x-text="selectedCompany.notes"></p></div>
            </div>
        </div>
    </div>

    <?php include('footer.php') ?>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        AOS.init({ duration: 800, once: true, easing: 'ease-out-cubic' });
        function sponsorChecker() {
            return {
                searchQuery: '', isLoading: false, searchPerformed: false, isDrawerOpen: false,
                selectedCompany: { name: '', type: '', status: '', notes: '' },
                activeFilter: 'valid',
                allCompanies: [
                    { name: 'Global Tech Innovators Ltd', type: 'Skilled Worker', status: 'Valid', notes: 'Tier 2 General license, valid until 2026.' },
                    { name: 'Sunrise Foods Co.', type: 'Skilled Worker, Temporary Worker', status: 'Valid', notes: '' },
                    { name: 'Healthcare Partners', type: 'Health and Care Worker', status: 'Valid', notes: '' },
                    { name: 'Bright Future Academy', type: 'Student', status: 'Valid', notes: 'Educational institute, highly trusted sponsor.' },
                    { name: 'Innovate UK Solutions', type: 'Skilled Worker', status: 'Valid', notes: 'Recently passed compliance audit.' },
                    { name: 'Quantum Leap Inc.', type: 'Skilled Worker', status: 'Valid', notes: '' },
                    { name: 'Pioneer Construction', type: 'Skilled Worker', status: 'Valid', notes: '' },
                    { name: 'Apex Consulting Group', type: 'Skilled Worker', status: 'Valid', notes: '' },
                    { name: 'Dynamic Retail Ltd', type: 'Skilled Worker', status: 'Valid', notes: '' },
                    { name: 'Starlight Hotels Group', type: 'Skilled Worker', status: 'Valid', notes: '' },
                    { name: 'Digital Solutions UK', type: 'Skilled Worker', status: 'Expired', notes: 'License expired on 15 Aug 2023. Not renewed.' },
                    { name: 'Old Town Builders', type: 'Skilled Worker', status: 'Expired', notes: 'License revoked due to compliance issues in Jan 2024.' },
                    { name: 'MediCare Staffing Ltd', type: 'Health and Care Worker', status: 'Expired', notes: 'Did not meet renewal requirements.' },
                    { name: 'Creative Minds Agency', type: 'Creative Worker', status: 'Pending', notes: 'New application submitted on 01 Sep 2023. Awaiting decision.' },
                    { name: 'New Horizon Logistics', type: 'Skilled Worker', status: 'Pending', notes: 'Sponsor license application in progress, expected approval by end of year.' },
                ],
                displayedCompanies: [],
                get stats() { return [
                        { key: 'valid', label: 'Valid Licenses', count: this.allCompanies.filter(c => c.status === 'Valid').length },
                        { key: 'expired', label: 'Expired Licenses', count: this.allCompanies.filter(c => c.status === 'Expired').length },
                        { key: 'pending', label: 'Pending Applications', count: this.allCompanies.filter(c => c.status === 'Pending').length },
                    ];
                },
                init() { this.filterAndDisplayCompanies(); },
                
                // --- UPDATED LOGIC ---
                filterAndDisplayCompanies() {
                    this.isLoading = true;
                    setTimeout(() => {
                        let tempCompanies;

                        // If there's a search query, filter the entire list
                        if (this.searchQuery.trim() !== '') {
                            tempCompanies = this.allCompanies.filter(c => 
                                c.name.toLowerCase().includes(this.searchQuery.toLowerCase())
                            );

                            // Auto-update the active filter based on search results
                            if (tempCompanies.length > 0) {
                                const firstStatus = tempCompanies[0].status;
                                const allSameStatus = tempCompanies.every(c => c.status === firstStatus);
                                if (allSameStatus) {
                                    this.activeFilter = firstStatus.toLowerCase();
                                } else {
                                    this.activeFilter = 'mixed'; // A neutral state for mixed results
                                }
                            }
                        } else {
                            // If search is empty, filter by the active tab
                            tempCompanies = this.allCompanies.filter(c => 
                                c.status.toLowerCase() === this.activeFilter.toLowerCase()
                            );
                        }
                        
                        this.displayedCompanies = tempCompanies;
                        this.isLoading = false;
                        this.searchPerformed = true;
                    }, 300);
                },

                setActiveFilter(filterKey) { 
                    this.activeFilter = filterKey; 
                    this.searchQuery = ''; // Clear search when a filter is clicked
                    this.filterAndDisplayCompanies(); 
                },
                performSearch() { this.filterAndDisplayCompanies(); },
                openDrawer(company) { this.selectedCompany = company; this.isDrawerOpen = true; },
                closeDrawer() { this.isDrawerOpen = false; }
            }
        }
    </script>
    <script src="main.js"></script>
</body>
</html>