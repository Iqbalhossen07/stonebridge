<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>About Us — Aurelia</title>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600&family=Merriweather:wght@700;800&display=swap" rel="stylesheet" />
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
   <link rel="stylesheet" href="style.css">

</head>
<body class="bg-white text-slate-900 font-body antialiased selection:bg-primary/20 selection:text-primary">

    <header>
        </header>

    <main>
        <section class="relative pt-40 pb-24 bg-cover bg-center min-h-[400px] flex items-center justify-center" 
            style="background-image: url('https://images.unsplash.com/photo-1522071820081-009f0129c7da?q=80&w=1600&auto=format&fit=crop');">
            <div class="absolute inset-0 bg-slate-900/60 z-0"></div>
            <div class="container mx-auto px-6 relative z-10 text-center text-white">
              <div class="space-y-4" data-aos="fade-up">
                <p class="text-sm font-semibold text-slate-200">
                  <a href="index.html" class="hover:text-primary transition-colors">Home</a> &rsaquo; 
                  <span class="text-primary">About Us</span>
                </p>
                <h1 class="font-heading text-4xl md:text-5xl">Who We Are</h1>
                <p class="max-w-2xl mx-auto text-slate-300">
                  Discover our story, our values, and what makes us a trusted partner in your journey.
                </p>
              </div>
            </div>
        </section>
        
      <section id="who-we-are" class="relative py-24 bg-slate-50/50 overflow-hidden">
    
    <div aria-hidden="true" class="absolute inset-0 z-0 opacity-60">
        <svg class="absolute top-0 left-0 w-full h-auto" viewBox="0 0 1440 900" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
            <path d="M0 200C0 200 360 400 720 200C1080 0 1440 200 1440 200V900H0V200Z" fill="url(#paint0_linear_wave_who_we_are)" />
            <path d="M0 150C0 150 360 300 720 150C1080 0 1440 150 1440 150V900H0V150Z" fill="url(#paint1_linear_wave_who_we_are)" style="mix-blend-mode: overlay" />
            <defs>
                <linearGradient id="paint0_linear_wave_who_we_are" x1="720" y1="0" x2="720" y2="900" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#87550D" stop-opacity="0.05" />
                    <stop offset="1" stop-color="#87550D" stop-opacity="0" />
                </linearGradient>
                <linearGradient id="paint1_linear_wave_who_we_are" x1="720" y1="0" x2="720" y2="900" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#87550D" stop-opacity="0.1" />
                    <stop offset="1" stop-color="#87550D" stop-opacity="0" />
                </linearGradient>
            </defs>
        </svg>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            
            <div data-aos="fade-right">
                <h2 class="font-heading text-3xl md:text-4xl text-slate-900 mb-8 lg:mb-12">Who we are?</h2>
                <div class="grid grid-cols-4 gap-4">
                    <div class="flip-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="flip-card-inner">
                            <div class="flip-card-front bg-slate-100 rounded-lg shadow-sm border border-slate-200 p-4 flex flex-col justify-end items-center" style="height: 280px;">
                                <div class="absolute top-4 text-center">
                                    <span class="font-heading text-primary text-xl font-semibold">80%</span>
                                    <p class="text-sm text-slate-600 leading-tight">Client Success</p>
                                </div>
                                <div class="w-full bg-primary rounded-md" style="height: 80%;"></div>
                            </div>
                            <div class="flip-card-back bg-primary text-white rounded-lg shadow-lg border border-primary-dark p-4 flex flex-col justify-center items-center text-center">
                                <h4 class="font-heading text-xl mb-2">High Satisfaction</h4>
                                <p class="text-sm leading-relaxed">Achieving client goals is our top priority, leading to consistently high success rates.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flip-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="flip-card-inner">
                            <div class="flip-card-front bg-slate-100 rounded-lg shadow-sm border border-slate-200 p-4 flex flex-col justify-end items-center" style="height: 280px;">
                                <div class="absolute top-4 text-center">
                                    <span class="font-heading text-primary text-xl font-semibold">80%</span>
                                    <p class="text-sm text-slate-600 leading-tight">Case Resolution</p>
                                </div>
                                <div class="w-full bg-primary rounded-md" style="height: 80%;"></div>
                            </div>
                            <div class="flip-card-back bg-primary text-white rounded-lg shadow-lg border border-primary-dark p-4 flex flex-col justify-center items-center text-center">
                                <h4 class="font-heading text-xl mb-2">Efficient Solutions</h4>
                                <p class="text-sm leading-relaxed">Streamlined processes ensure quick and effective resolution for every case.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flip-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="flip-card-inner">
                            <div class="flip-card-front bg-slate-100 rounded-lg shadow-sm border border-slate-200 p-4 flex flex-col justify-end items-center" style="height: 280px;">
                                <div class="absolute top-4 text-center">
                                    <span class="font-heading text-primary text-xl font-semibold">70%</span>
                                    <p class="text-sm text-slate-600 leading-tight">Efficiency</p>
                                </div>
                                <div class="w-full bg-primary rounded-md" style="height: 70%;"></div>
                            </div>
                            <div class="flip-card-back bg-primary text-white rounded-lg shadow-lg border border-primary-dark p-4 flex flex-col justify-center items-center text-center">
                                <h4 class="font-heading text-xl mb-2">Optimized Workflows</h4>
                                <p class="text-sm leading-relaxed">Our optimized workflows maximize productivity and minimize delays.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flip-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="flip-card-inner">
                            <div class="flip-card-front bg-slate-100 rounded-lg shadow-sm border border-slate-200 p-4 flex flex-col justify-end items-center" style="height: 280px;">
                                <div class="absolute top-4 text-center">
                                    <span class="font-heading text-primary text-xl font-semibold">60%</span>
                                    <p class="text-sm text-slate-600 leading-tight">Innovation</p>
                                </div>
                                <div class="w-full bg-primary rounded-md" style="height: 60%;"></div>
                            </div>
                            <div class="flip-card-back bg-primary text-white rounded-lg shadow-lg border border-primary-dark p-4 flex flex-col justify-center items-center text-center">
                                <h4 class="font-heading text-xl mb-2">Forward Thinking</h4>
                                <p class="text-sm leading-relaxed">Embracing new technologies and strategies to stay ahead in the legal field.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div data-aos="fade-left" class="space-y-8">
                <div class="flex flex-wrap gap-x-12 gap-y-6">
                    <div class="flex items-center gap-3">
                        <p class="font-heading text-5xl text-slate-900 leading-none">25</p>
                        <p class="text-base text-slate-600 leading-tight">Years<br>Experience</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <p class="font-heading text-5xl text-slate-900 leading-none">1M</p>
                        <p class="text-base text-slate-600 leading-tight">Users<br>Satisfaction</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <p class="font-heading text-5xl text-slate-900 leading-none">10K</p>
                        <p class="text-base text-slate-600 leading-tight">Official<br>Subscribers</p>
                    </div>
                </div>
                <div class="space-y-4 text-slate-600 leading-relaxed text-lg pt-4">
                    <p>Stonebridge is a leading legal firm dedicated to providing exceptional immigration and advisory services. Founded on the principles of integrity, professionalism, and client-centricity, we have built a reputation for delivering results with a human touch.</p>
                </div>
                <div>
                    <a href="#" class="btn-premium mt-4">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</section>

        <section class="relative py-24 bg-slate-50/50">
             <div aria-hidden="true" class="absolute inset-0 z-0 opacity-60">
                </div>
            <div class="container mx-auto px-6 relative z-10">
                <div class="text-center max-w-3xl mx-auto mb-16">
                  <h2 class="font-heading text-3xl md:text-4xl text-slate-900" data-aos="fade-up">Our Core Values</h2>
                </div>
                 <div class="grid md:grid-cols-3 gap-8">
                    <div class="card-premium p-8 text-center" data-aos="fade-up">
                        <div class="h-16 w-16 mx-auto rounded-full bg-primary/10 text-primary flex items-center justify-center mb-6"><svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
                        <h4 class="font-heading text-xl text-slate-800">Integrity</h4>
                        <p class="text-slate-600 mt-2">We uphold the highest standards of honesty and ethical practice in all our dealings.</p>
                    </div>
                    <div class="card-premium p-8 text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="h-16 w-16 mx-auto rounded-full bg-primary/10 text-primary flex items-center justify-center mb-6"><svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg></div>
                        <h4 class="font-heading text-xl text-slate-800">Excellence</h4>
                        <p class="text-slate-600 mt-2">We are committed to delivering exceptional quality and achieving the best possible outcomes.</p>
                    </div>
                    <div class="card-premium p-8 text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="h-16 w-16 mx-auto rounded-full bg-primary/10 text-primary flex items-center justify-center mb-6"><svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H2m2-5h10M7 9l4-4 4 4M7 13l4 4 4-4"></path></svg></div>
                        <h4 class="font-heading text-xl text-slate-800">Client-Centric</h4>
                        <p class="text-slate-600 mt-2">Our clients are at the heart of everything we do. Your success is our success.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 bg-white">
            <div class="container mx-auto px-6">
                 <div class="text-center max-w-3xl mx-auto mb-16">
                  <h2 class="font-heading text-3xl md:text-4xl text-slate-900" data-aos="fade-up">Why Stonebridge (Our USPs)</h2>
                </div>
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="rounded-xl overflow-hidden shadow-soft-2" data-aos="fade-right">
                        <img src="https://images.unsplash.com/photo-1556761175-5973dd3474d7?q=80&w=1600&auto=format&fit=crop" alt="Trust and professionalism" class="w-full h-auto object-cover">
                    </div>
                     <div data-aos="fade-left">
                        <ul class="space-y-6">
                            <li class="flex items-start gap-4">
                                <div class="h-12 w-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center shrink-0"><svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M12 19.586V17M12 4.414V7M7 12h10"></path></svg></div>
                                <div>
                                    <h4 class="font-heading text-xl text-slate-800">Expert Guidance</h4>
                                    <p class="text-slate-600 mt-1">Benefit from the knowledge of our highly accredited and experienced legal professionals.</p>
                                </div>
                            </li>
                             <li class="flex items-start gap-4">
                                <div class="h-12 w-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center shrink-0"><svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
                                <div>
                                    <h4 class="font-heading text-xl text-slate-800">Tailored Solutions</h4>
                                    <p class="text-slate-600 mt-1">We provide personalized strategies designed to meet your specific needs and goals.</p>
                                </div>
                            </li>
                             <li class="flex items-start gap-4">
                                <div class="h-12 w-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center shrink-0"><svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg></div>
                                <div>
                                    <h4 class="font-heading text-xl text-slate-800">Proven Track Record</h4>
                                    <p class="text-slate-600 mt-1">A history of successful outcomes and satisfied clients speaks for itself.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 bg-slate-50/50">
            <div class="container mx-auto px-6">
                <div class="text-center max-w-3xl mx-auto mb-16">
                  <h2 class="font-heading text-3xl md:text-4xl text-slate-900" data-aos="fade-up">Partners & Accreditations</h2>
                   <p class="text-slate-600 mt-4" data-aos="fade-up" data-aos-delay="100">
                    We are proud to be recognized by and partnered with leading organizations in the legal and immigration sector.
                  </p>
                </div>
                <div class="flex flex-wrap justify-center items-center gap-x-16 gap-y-10">
                    <img src="https://via.placeholder.com/150x60/cccccc/808080?text=Partner+1" alt="Partner Logo" class="h-12" data-aos="fade-up" />
                    <img src="https://via.placeholder.com/150x60/cccccc/808080?text=Partner+2" alt="Partner Logo" class="h-12" data-aos="fade-up" data-aos-delay="100" />
                    <img src="https://via.placeholder.com/150x60/cccccc/808080?text=Partner+3" alt="Partner Logo" class="h-12" data-aos="fade-up" data-aos-delay="200" />
                    <img src="https://via.placeholder.com/150x60/cccccc/808080?text=Partner+4" alt="Partner Logo" class="h-12" data-aos="fade-up" data-aos-delay="300" />
                    <img src="https://via.placeholder.com/150x60/cccccc/808080?text=Partner+5" alt="Partner Logo" class="h-12" data-aos="fade-up" data-aos-delay="400" />
                </div>
            </div>
        </section>
        
    </main>

    <footer>
        </footer>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>AOS.init({ duration: 800, once: true, easing: 'ease-out-cubic' });</script>
    <script src="main.js"></script>
</body>
</html>