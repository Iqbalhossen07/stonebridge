<!doctype html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Stonebridge Legal — Premium Studio</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600&family=Merriweather:wght@700;800&display=swap" rel="stylesheet" />
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <!-- Tailwind CDN -->
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
    <!-- Background FX -->
    <div aria-hidden="true" class="pointer-events-none fixed inset-0 -z-10 ">
      <div class="absolute -top-32 -left-24 h-80 w-80 rounded-full blur-3xl opacity-50 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-primary/25 via-primary/10 to-transparent"></div>
      <div class="absolute top-40 -right-24 h-96 w-96 rounded-full blur-3xl opacity-40 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-amber-400/20 via-amber-400/0 to-transparent"></div>
      <div class="absolute inset-0 noise"></div>
    </div>

    <!-- Header -->
    <?php include('header.php') ?> 

    <main>
      <!-- Hero -->
       <section id="#" class="relative pt-32 md:pt-40 pb-24 overflow-hidden">
    <div aria-hidden="true" class="absolute inset-0 z-0 opacity-60">
        <svg class="absolute top-0 left-0 w-full h-auto" viewBox="0 0 1440 900" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
            <path d="M0 200C0 200 360 400 720 200C1080 0 1440 200 1440 200V900H0V200Z" fill="url(#paint0_linear_wave)" />
            <path d="M0 150C0 150 360 300 720 150C1080 0 1440 150 1440 150V900H0V150Z" fill="url(#paint1_linear_wave)" style="mix-blend-mode: overlay" />
            <defs>
                <linearGradient id="paint0_linear_wave" x1="720" y1="0" x2="720" y2="900" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#87550D" stop-opacity="0.05" />
                    <stop offset="1" stop-color="#87550D" stop-opacity="0" />
                </linearGradient>
                <linearGradient id="paint1_linear_wave" x1="720" y1="0" x2="720" y2="900" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#87550D" stop-opacity="0.1" />
                    <stop offset="1" stop-color="#87550D" stop-opacity="0" />
                </linearGradient>
            </defs>
        </svg>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="grid gap-12 lg:grid-cols-2 items-start">
            <div data-aos="fade-right" class="space-y-6 lg:text-left text-center">
                <span class="inline-flex items-center px-3 py-1 rounded-full bg-primary/10 text-primary text-xs border border-primary/20">Premium Lawyer Studio</span>
                <h1 class="font-heading text-2xl leading-tight md:text-4xl lg:text-4xl">Enabling improvement through targeted digital proficiency.</h1>
                <p class="text-slate-600 max-w-2xl mx-auto lg:mx-0 text-lg text-justify">We Develop Contemporary Interfaces Employing Subtle Shadows, Gentle Gradients, and Seamless Animations, Constructed for Optimal Performance and Engineered to Impress. Each Element is Meticulously Crafted to Ensure Precision and Elegance. Our Solutions Uphold the Highest Standards of Functionality and Aesthetic Excellence.</p>
                
                <div class="flex flex-col sm:flex-row gap-3 pt-2 justify-center lg:justify-start">
                    <a href="#cta" class="btn-premium px-6 py-3 rounded-md">Get Started</a>
                    <a href="#services" class="inline-flex items-center justify-center px-5 py-3 rounded-md border hover:bg-slate-100">Our Services</a>
                </div>
                
                <div class="grid gap-6 sm:grid-cols-2 mt-12">
                    
                    <div class="card-premium p-6 flex items-start gap-4 text-left" data-aos="zoom-in" data-aos-delay="100">
                        <div class="h-12 w-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center shadow-md ring-1 ring-primary/20 shrink-0">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                        </div>
                        <div>
                            <h3 class="font-heading text-lg text-slate-800">Right to Work</h3>
                            <p class="text-sm text-slate-600 mt-1">Verify eligibility and ensure with UK employment laws.</p>
                        </div>
                    </div>
                    
                    <div class="card-premium p-6 flex items-start gap-4 text-left" data-aos="zoom-in" data-aos-delay="200">
                        <div class="h-12 w-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center shadow-md ring-1 ring-primary/20 shrink-0">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </div>
                        <div>
                            <h3 class="font-heading text-lg text-slate-800">HRMS</h3>
                            <p class="text-sm text-slate-600 mt-1">Streamline HR processes with our advanced management system.</p>
                        </div>
                    </div>
                    
                    <div class="card-premium p-6 flex items-start gap-4 text-left" data-aos="zoom-in" data-aos-delay="300">
                        <div class="h-12 w-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center shadow-md ring-1 ring-primary/20 shrink-0">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path><path d="M2 20h.01"></path><path d="M7 8H5l2 2-2 2h2"></path></svg>
                        </div>
                        <div>
                            <h3 class="font-heading text-lg text-slate-800">Skilled Worker Visa</h3>
                            <p class="text-sm text-slate-600 mt-1">Navigate the application process with expert guidance.</p>
                        </div>
                    </div>
                    
                    <div class="card-premium p-6 flex items-start gap-4 text-left" data-aos="zoom-in" data-aos-delay="400">
                        <div class="h-12 w-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center shadow-md ring-1 ring-primary/20 shrink-0">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                        </div>
                        <div>
                            <h3 class="font-heading text-lg text-slate-800">Asylum</h3>
                            <p class="text-sm text-slate-600 mt-1">Comprehensive support for asylum seekers and refugees.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos="fade-left" class="relative flex justify-center lg:justify-end lg:mt-0 mt-12">
                <div class="absolute top-4 left-0 bg-white/80 backdrop-blur-md p-3 rounded-lg shadow-soft-1 border border-slate-200 flex items-center gap-2 animate-float-slow z-20">
                    <span class="h-4 w-4 rounded-full bg-green-500 block"></span>
                    <span class="text-sm font-medium text-slate-700">Live Demo</span>
                </div>

                <div class="relative w-full max-w-2xl aspect-[4/3] bg-slate-200 rounded-xl flex items-center justify-center shadow-xl shadow-black/20 ring-1 ring-black/10">
                    <iframe id="heroVideoFrame" class="absolute inset-0 w-full h-full rounded-xl" src="https://www.youtube.com/embed/leic90VQwMM?si=5V-ZTJSpGY1SiA_i" title="Promo Video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="absolute bottom-8 right-0 bg-white/80 backdrop-blur-md p-3 rounded-lg shadow-soft-1 border border-slate-200 flex items-center gap-2 animate-float-fast z-20">
                    <span class="text-sm font-medium text-slate-700">New Feature!</span>
                    <span class="h-4 w-4 rounded-full bg-blue-500 block"></span>
                </div>
            </div>
        </div>
    </div>
       </section>




      <!-- About -->
        <section id="about" class="py-24 bg-gradient-to-br from-slate-50/50 to-amber-50/50 overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="grid items-center gap-12 lg:grid-cols-2">
            
            <div data-aos="fade-right" class="space-y-8 max-w-2xl mx-auto lg:mx-0">
                <div class="relative w-full rounded-xl overflow-hidden shadow-soft-3 ring-1 ring-black/10">
                <div id="imageCarousel" class="relative h-[360px] md:h-[400px] w-full">
                    <img src="https://images.unsplash.com/photo-1754531976828-69e42ce4e0d9?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="About gallery image 3" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 ease-in-out carousel-image" alt="About gallery image 1" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 ease-in-out carousel-image active" />
                    <img src="https://images.unsplash.com/photo-1601513042740-3f9041642307?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="About gallery image 2" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 ease-in-out carousel-image" />
                    <img src="https://images.unsplash.com/photo-1622675363311-3e1904dc1885?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="About gallery image 3" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 ease-in-out carousel-image" />

                    <button aria-label="Previous image" class="carousel-arrow absolute left-4 top-1/2 -translate-y-1/2 bg-white/70 backdrop-blur-md rounded-full p-2 text-slate-800 hover:bg-white transition-colors duration-300 shadow-md z-10" onclick="changeSlide(-1)">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </button>
                    <button aria-label="Next image" class="carousel-arrow absolute right-4 top-1/2 -translate-y-1/2 bg-white/70 backdrop-blur-md rounded-full p-2 text-slate-800 hover:bg-white transition-colors duration-300 shadow-md z-10" onclick="changeSlide(1)">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </button>
                </div>
                <div id="carouselIndicators" class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2 z-10">
                    <button aria-label="Slide 1" class="carousel-indicator h-3 w-3 rounded-full bg-slate-300 hover:bg-slate-400 active-indicator"></button>
                    <button aria-label="Slide 2" class="carousel-indicator h-3 w-3 rounded-full bg-slate-300 hover:bg-slate-400"></button>
                    <button aria-label="Slide 3" class="carousel-indicator h-3 w-3 rounded-full bg-slate-300 hover:bg-slate-400"></button>
                </div>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                    <div class="card-premium p-4 text-center">
                        <div class="font-heading text-3xl text-primary">10+</div>
                        <p class="text-sm text-slate-600 mt-1">Years Experience</p>
                    </div>
                    <div class="card-premium p-4 text-center">
                        <div class="font-heading text-3xl text-primary">150+</div>
                        <p class="text-sm text-slate-600 mt-1">Cases Done</p>
                    </div>
                    <div class="card-premium p-4 text-center col-span-2 sm:col-span-1">
                        <div class="font-heading text-3xl text-primary">99%</div>
                        <p class="text-sm text-slate-600 mt-1">Happy Clients</p>
                    </div>
                </div>
            </div>
            
            <div data-aos="fade-left" class="space-y-6 lg:text-left text-center shadow-sm p-4">
                <h3 class="font-heading text-lg font-semibold text-primary tracking-widest uppercase">About Us</h3>
                <h2 class="font-heading text-2xl md:text-4xl text-slate-900 leading-tight">A Trusted Firm with a Legacy of Success</h2>
                <p class="text-slate-700 max-w-prose mx-auto lg:mx-0 text-lg leading-relaxed text-justify">
              We are independent immigration advisors based in Stratford, London, with extensive experience assisting clients across the UK and internationally. Our qualified lawyers, regulated by the Office of Immigration Advice Authority (IAA), provide expert guidance on all aspects of UK Immigration Law, including visa applications and appeals.
                </p>
                <ul class="space-y-3 pt-4 text-left mx-auto lg:mx-0 max-w-2xl">
                <li class="flex items-start gap-3 ">
                    <svg class="h-6 w-6 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span class="text-slate-700 text-lg">Reliable Advice.No Hidden Costs</span>
                </li>
                <li class="flex items-start gap-3 ">
                    <svg class="h-6 w-6 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span class="text-slate-700 text-lg">Expert Legal Service.Highly Recommended</span>
                </li>
                <li class="flex items-start gap-3 ">
                    <svg class="h-6 w-6 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span class="text-slate-700 text-lg">Fast Support.High Court Performance</span>
                </li>
                </ul>
                <div class="pt-6">
                    <a href="#team" class="btn-premium">Meet Our Team</a>
                </div>
            </div>
            </div>
        </div>
        </section>


      <!-- Services -->
        <section id="services" class="relative py-24 overflow-hidden">
    <div aria-hidden="true" class="absolute inset-0 z-0 opacity-60">
        <svg class="absolute top-0 left-0 w-full h-auto" viewBox="0 0 1440 900" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
            <path d="M0 200C0 200 360 400 720 200C1080 0 1440 200 1440 200V900H0V200Z" fill="url(#paint0_linear_wave_services)" />
            <path d="M0 150C0 150 360 300 720 150C1080 0 1440 150 1440 150V900H0V150Z" fill="url(#paint1_linear_wave_services)" style="mix-blend-mode: overlay" />
            <defs>
                <linearGradient id="paint0_linear_wave_services" x1="720" y1="0" x2="720" y2="900" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#87550D" stop-opacity="0.05" />
                    <stop offset="1" stop-color="#87550D" stop-opacity="0" />
                </linearGradient>
                <linearGradient id="paint1_linear_wave_services" x1="720" y1="0" x2="720" y2="900" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#87550D" stop-opacity="0.1" />
                    <stop offset="1" stop-color="#87550D" stop-opacity="0" />
                </linearGradient>
            </defs>
        </svg>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16">
            <h3 class="font-heading text-lg font-semibold text-primary tracking-widest uppercase mb-2" data-aos="fade-up">Our Services</h3>
            <h2 class="font-heading text-3xl md:text-4xl text-slate-900 leading-tight mb-4" data-aos="fade-up" data-aos-delay="100">Complete Immigration Services</h2>
            <p class="text-slate-600 max-w-2xl mx-auto text-lg" data-aos="fade-up" data-aos-delay="200">
                From sponsorship licenses to visa applications, we handle every aspect of your immigration needs.
            </p>
        </div>

        <div id="services-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-8xl mx-auto">
            
            <div class="card-premium p-6" data-aos="fade-up" data-aos-delay="300">
                <h3 class="font-heading text-xl text-slate-800 mb-4">Sponsorship Licence</h3>
                <div class="flex items-center gap-4">
                    <div class="h-16 w-16 bg-orange-100 rounded-lg flex items-center justify-center p-2 shadow-sm ring-1 ring-orange-200 shrink-0">
                        <img src="img/Sponsorship Licence.webp" alt="Sponsorship Licence Icon" class="h-full w-full object-contain" />
                    </div>
                    <ul class="space-y-2 text-slate-700">
                        <li class="flex items-center gap-2">
                            <svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <a href="#" class="hover:text-primary transition-colors">Sponsor Licence Application</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <a href="#" class="hover:text-primary transition-colors">Sponsor Licence Renewal</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <a href="#" class="hover:text-primary transition-colors">Licence Suspension Support</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card-premium p-6" data-aos="fade-up" data-aos-delay="400">
                <h3 class="font-heading text-xl text-slate-800 mb-4">Immigration Compliance</h3>
                <div class="flex items-center gap-4">
                    <div class="h-16 w-16 bg-orange-100 rounded-lg flex items-center justify-center p-2 shadow-sm ring-1 ring-orange-200 shrink-0">
                        <img src="img/Immigration Compliance.webp" alt="Immigration Compliance Icon" class="h-full w-full object-contain" />
                    </div>
                    <ul class="space-y-2 text-slate-700">
                        <li class="flex items-center gap-2">
                            <svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <a href="#" class="hover:text-primary transition-colors">Civil Penalty Appeals</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <a href="#" class="hover:text-primary transition-colors">Right to Work Checks</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <a href="#" class="hover:text-primary transition-colors">HO Compliance Visit</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card-premium p-6" data-aos="fade-up" data-aos-delay="500">
                <h3 class="font-heading text-xl text-slate-800 mb-4">Skilled Worker Visas</h3>
                <div class="flex items-center gap-4">
                    <div class="h-16 w-16 bg-orange-100 rounded-lg flex items-center justify-center p-2 shadow-sm ring-1 ring-orange-200 shrink-0">
                        <img src="img/Skilled Worker.webp" alt="Skilled Worker Visas Icon" class="h-full w-full object-contain" />
                    </div>
                    <ul class="space-y-2 text-slate-700">
                        <li class="flex items-center gap-2">
                            <svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <a href="#" class="hover:text-primary transition-colors">Skilled Worker Visa</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <a href="#" class="hover:text-primary transition-colors">Health & Care Visa</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <a href="#" class="hover:text-primary transition-colors">Minister of Religion Visa</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="card-premium p-6" data-aos="fade-up" data-aos-delay="300">
                <h3 class="font-heading text-xl text-slate-800 mb-4">Temporary (Tier 5) Visas</h3>
                <div class="flex items-center gap-4">
                    <div class="h-16 w-16 bg-orange-100 rounded-lg flex items-center justify-center p-2 shadow-sm ring-1 ring-orange-200 shrink-0">
                        <img src="img/Temporary.webp" alt="Sponsorship Licence Icon" class="h-full w-full object-contain" />
                    </div>
                    <ul class="space-y-2 text-slate-700">
                        <li class="flex items-center gap-2">
                            <svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <a href="#" class="hover:text-primary transition-colors">Sponsor Licence Application</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <a href="#" class="hover:text-primary transition-colors">Sponsor Licence Renewal</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <a href="#" class="hover:text-primary transition-colors">Licence Suspension Support</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card-premium p-6" data-aos="fade-up" data-aos-delay="400">
                <h3 class="font-heading text-xl text-slate-800 mb-4">Partner and family Visas</h3>
                <div class="flex items-center gap-4">
                    <div class="h-16 w-16 bg-orange-100 rounded-lg flex items-center justify-center p-2 shadow-sm ring-1 ring-orange-200 shrink-0">
                        <img src="img/Partner and family.webp" alt="Immigration Compliance Icon" class="h-full w-full object-contain" />
                    </div>
                    <ul class="space-y-2 text-slate-700">
                        <li class="flex items-center gap-2">
                            <svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <a href="#" class="hover:text-primary transition-colors">Civil Penalty Appeals</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <a href="#" class="hover:text-primary transition-colors">Right to Work Checks</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <a href="#" class="hover:text-primary transition-colors">HO Compliance Visit</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card-premium p-6" data-aos="fade-up" data-aos-delay="500">
                <h3 class="font-heading text-xl text-slate-800 mb-4">Global Business Mobility</h3>
                <div class="flex items-center gap-4">
                    <div class="h-16 w-16 bg-orange-100 rounded-lg flex items-center justify-center p-2 shadow-sm ring-1 ring-orange-200 shrink-0">
                        <img src="img/Global Business.webp" alt="Skilled Worker Visas Icon" class="h-full w-full object-contain" />
                    </div>
                    <ul class="space-y-2 text-slate-700">
                        <li class="flex items-center gap-2">
                            <svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <a href="#" class="hover:text-primary transition-colors">Skilled Worker Visa</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <a href="#" class="hover:text-primary transition-colors">Health & Care Visa</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <a href="#" class="hover:text-primary transition-colors">Minister of Religion Visa</a>
                        </li>
                    </ul>
                </div>
            </div>
            
             <div class="card-premium p-6 hidden" data-aos="fade-up">
                <h3 class="font-heading text-xl text-slate-800 mb-4">Standard Visitor Visa</h3>
                <div class="flex items-center gap-4">
                    <div class="h-16 w-16 bg-orange-100 rounded-lg flex items-center justify-center p-2 shadow-sm ring-1 ring-orange-200 shrink-0">
                        <img src="img/Standard Visitor Visa.webp" alt="Standard Visitor Visa Icon" class="h-full w-full object-contain" />
                    </div>
                    <ul class="space-y-2 text-slate-700">
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">Tourist Visa</a></li>
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">Business Visit</a></li>
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">UK Fiancé Visa</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-premium p-6 hidden" data-aos="fade-up">
                <h3 class="font-heading text-xl text-slate-800 mb-4">Study Visas</h3>
                <div class="flex items-center gap-4">
                    <div class="h-16 w-16 bg-orange-100 rounded-lg flex items-center justify-center p-2 shadow-sm ring-1 ring-orange-200 shrink-0">
                        <img src="img/Study Visas.webp" alt="Study Visas Icon" class="h-full w-full object-contain" />
                    </div>
                    <ul class="space-y-2 text-slate-700">
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">Student Visa</a></li>
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">Child Student Visa</a></li>
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">Graduate Visa</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-premium p-6 hidden" data-aos="fade-up">
                <h3 class="font-heading text-xl text-slate-800 mb-4">Business Visas</h3>
                <div class="flex items-center gap-4">
                    <div class="h-16 w-16 bg-orange-100 rounded-lg flex items-center justify-center p-2 shadow-sm ring-1 ring-orange-200 shrink-0">
                        <img src="img/Business Visas.webp" alt="Business Visas Icon" class="h-full w-full object-contain" />
                    </div>
                    <ul class="space-y-2 text-slate-700">
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">Self-Sponsorship in UK</a></li>
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">Innovator Founder Visa</a></li>
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">Turkish Businessperson Visa</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-premium p-6 hidden" data-aos="fade-up">
                <h3 class="font-heading text-xl text-slate-800 mb-4">Scale Up Visa</h3>
                <div class="flex items-center gap-4">
                    <div class="h-16 w-16 bg-orange-100 rounded-lg flex items-center justify-center p-2 shadow-sm ring-1 ring-orange-200 shrink-0">
                        <img src="img/Scale Up Visa.webp" alt="Scale Up Visa Icon" class="h-full w-full object-contain" />
                    </div>
                    <ul class="space-y-2 text-slate-700">
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">Scale-up Visa</a></li>
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">Scale-up Sponsor Licence</a></li>
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">Scale up Business</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-premium p-6 hidden" data-aos="fade-up">
                <h3 class="font-heading text-xl text-slate-800 mb-4">UKVI Compliant HR Software</h3>
                <div class="flex items-center gap-4">
                    <div class="h-16 w-16 bg-orange-100 rounded-lg flex items-center justify-center p-2 shadow-sm ring-1 ring-orange-200 shrink-0">
                        <img src="img/UKVI Compliant HR Software.webp" alt="UKVI HR Software Icon" class="h-full w-full object-contain" />
                    </div>
                    <ul class="space-y-2 text-slate-700">
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">Compliant HR Software</a></li>
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">Sponsorship Duties</a></li>
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">HO Compliance Audit in UK</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-premium p-6 hidden" data-aos="fade-up">
                <h3 class="font-heading text-xl text-slate-800 mb-4">EU Settlement Scheme</h3>
                <div class="flex items-center gap-4">
                    <div class="h-16 w-16 bg-orange-100 rounded-lg flex items-center justify-center p-2 shadow-sm ring-1 ring-orange-200 shrink-0">
                        <img src="img/EU Settlement Scheme.webp" alt="EU Settlement Scheme Icon" class="h-full w-full object-contain" />
                    </div>
                    <ul class="space-y-2 text-slate-700">
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">EU Pre-Settled Status</a></li>
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">EU Settled Status</a></li>
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">EU Family Permit</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-premium p-6 hidden" data-aos="fade-up">
                <h3 class="font-heading text-xl text-slate-800 mb-4">UK Settlement Scheme</h3>
                <div class="flex items-center gap-4">
                    <div class="h-16 w-16 bg-orange-100 rounded-lg flex items-center justify-center p-2 shadow-sm ring-1 ring-orange-200 shrink-0">
                        <img src="img/UK Settlement Scheme.webp" alt="UK Settlement Scheme Icon" class="h-full w-full object-contain" />
                    </div>
                    <ul class="space-y-2 text-slate-700">
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">20 Year Private Life Route</a></li>
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">ILR (5 year route)</a></li>
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">ILR (10 year route)</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-premium p-6 hidden" data-aos="fade-up">
                <h3 class="font-heading text-xl text-slate-800 mb-4">British Citizenship</h3>
                <div class="flex items-center gap-4">
                    <div class="h-16 w-16 bg-orange-100 rounded-lg flex items-center justify-center p-2 shadow-sm ring-1 ring-orange-200 shrink-0">
                        <img src="img/British Citizenship.webp" alt="British Citizenship Icon" class="h-full w-full object-contain" />
                    </div>
                    <ul class="space-y-2 text-slate-700">
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">Naturalisation</a></li>
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">BNO Status</a></li>
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">Registration</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-premium p-6 hidden" data-aos="fade-up">
                <h3 class="font-heading text-xl text-slate-800 mb-4">Immigration Appeals (Signposting)</h3>
                <div class="flex items-center gap-4">
                    <div class="h-16 w-16 bg-orange-100 rounded-lg flex items-center justify-center p-2 shadow-sm ring-1 ring-orange-200 shrink-0">
                        <img src="img/Immigration Appeals.webp" alt="Immigration Appeals Icon" class="h-full w-full object-contain" />
                    </div>
                    <ul class="space-y-2 text-slate-700">
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">Judicial Review</a></li>
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">Administrative Review</a></li>
                        <li class="flex items-center gap-2"><svg class="h-5 w-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><a href="#" class="hover:text-primary transition-colors">Appeal To The Tribunal</a></li>
                    </ul>
                </div>
            </div>

      
        </div>

        <div class="text-center mt-16" data-aos="fade-up" data-aos-delay="600">
            <a href="#" id="viewMoreBtn" class="btn-premium px-8 py-4 text-lg rounded-md transform hover:-translate-y-1 transition-transform duration-300 ease-out inline-block">
                View All Our Services
            </a>
        </div>
    </div>
</section>







      <!-- Gallery -->
        <section id="gallery" class="relative py-24 bg-slate-50/50 overflow-hidden">
        
        <div aria-hidden="true" class="absolute inset-0 z-0 opacity-60">
            <svg class="absolute top-0 left-0 w-full h-auto" viewBox="0 0 1440 900" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
            <path d="M0 200C0 200 360 400 720 200C1080 0 1440 200 1440 200V900H0V200Z" fill="url(#paint0_linear_wave_gallery)" />
            <path d="M0 150C0 150 360 300 720 150C1080 0 1440 150 1440 150V900H0V150Z" fill="url(#paint1_linear_wave_gallery)" style="mix-blend-mode: overlay" />
            <defs>
                <linearGradient id="paint0_linear_wave_gallery" x1="720" y1="0" x2="720" y2="900" gradientUnits="userSpaceOnUse">
                <stop stop-color="#87550D" stop-opacity="0.05" />
                <stop offset="1" stop-color="#87550D" stop-opacity="0" />
                </linearGradient>
                <linearGradient id="paint1_linear_wave_gallery" x1="720" y1="0" x2="720" y2="900" gradientUnits="userSpaceOnUse">
                <stop stop-color="#87550D" stop-opacity="0.1" />
                <stop offset="1" stop-color="#87550D" stop-opacity="0" />
                </linearGradient>
            </defs>
            </svg>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
            <h3 class="font-heading text-lg font-semibold text-primary tracking-widest uppercase mb-2" data-aos="fade-up">Our Gallery</h3>
            <h2 class="font-heading text-2xl md:text-4xl text-slate-900 leading-tight" data-aos="fade-up" data-aos-delay="100">A Glimpse into Our Creative World</h2>
            <p class="text-slate-600 mt-4 text-lg" data-aos="fade-up" data-aos-delay="200">
              Discover a carefully selected showcase of our premier projects and defining moments that embody our commitment to excellence.
            </p>
            </div>

            <div class="scroller" data-speed="slow" data-aos="fade-up" data-aos-delay="300">
            <ul class="tag-list scroller__inner">
                <li>
                <div class="gallery-card group">
                    <img src="img/g1.jpeg" alt="Gallery Image 1" />
                    <!-- <div class="gallery-overlay"><h3>Project Alpha</h3></div> -->
                </div>
                </li>
                <li>
                <div class="gallery-card group">
                    <img src="img/g2.jpeg" alt="Gallery Image 2" />
                </div>
                </li>
                <li>
                <div class="gallery-card group">
                    <img src="img/g3.jpeg" alt="Gallery Image 3" />
                </div>
                </li>
                <li>
                <div class="gallery-card group">
                    <img src="img/g4.jpeg" alt="Gallery Image 4" />
                </div>
                </li>
                <li>
                <div class="gallery-card group">
                    <img src="img/g5.jpeg" alt="Gallery Image 5" />
                </div>
                </li>
                <li>
                <div class="gallery-card group">
                    <img src="img/g6.jpeg" alt="Gallery Image 6" />
                </div>
                </li>
                <li>
                <div class="gallery-card group">
                    <img src="img/g7.jpeg" alt="Gallery Image 6" />
                </div>
                </li>
                <li>
                <div class="gallery-card group">
                    <img src="img/g8.jpeg" alt="Gallery Image 6" />
                </div>
                </li>
                </ul>
            </div>
        </div>
        </section>




      <!-- Video Section -->
      <section id="videos" class="relative py-24 bg-slate-50/50 overflow-hidden">
        
        <div aria-hidden="true" class="absolute inset-0 z-0 opacity-60">
          </div>

        <div class="container mx-auto px-6 relative z-10">
          <div class="text-center max-w-3xl mx-auto mb-16">
            <h3 class="font-heading text-lg font-semibold text-primary tracking-widest uppercase mb-2" data-aos="fade-up">Videos</h3>
            <h2 class="font-heading text-2xl md:text-4xl text-slate-900 leading-tight" data-aos="fade-up" data-aos-delay="100">Our Work in Motion</h2>
            <p class="text-slate-600 mt-4 text-lg" data-aos="fade-up" data-aos-delay="200">
              Witness the conversion of concepts into reality through our curated collection of case studies, tutorials, and brand narratives.
            </p>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-8xl mx-auto">
            
            <div class="video-card-container group shadow-2xl" data-video-url="https://www.youtube.com/embed/OEfoLIVuoq4?si=hcBVG7Grub2OpjbL" data-aos="fade-up" data-aos-delay="300">
              <div class="video-card-content">
                <div class="video-thumbnail-wrapper relative overflow-hidden rounded-t-lg h-56 bg-black flex items-center justify-center p-4">
                  <img class="video-thumbnail absolute inset-0 w-full h-full object-cover opacity-70 transition-transform duration-300 group-hover:scale-105" alt="Video Thumbnail" />
                  <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                      <div class="h-16 w-16 bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center text-white transition-transform duration-300 group-hover:scale-110">
                          <svg class="w-8 h-8 ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M5 3l14 9-14 9V3z"></path></svg>
                      </div>
                  </div>
                </div>
                <div class="p-5">
                  <h4 class="font-heading text-xl text-slate-800 group-hover:text-primary transition-colors">Designing with Depth</h4>
                  <p class="text-slate-600 text-sm mt-1">A case study on creating stunning 3D visuals.</p>
                </div>
              </div>
            </div>

            <div class="video-card-container group shadow-2xl" data-video-url="https://www.youtube.com/embed/W7rPtnqjU68?si=4-jkVpkYbtJPohnE" data-aos="fade-up" data-aos-delay="400">
              <div class="video-card-content">
                <div class="video-thumbnail-wrapper relative overflow-hidden rounded-t-lg h-56 bg-black flex items-center justify-center p-4">
                  <img class="video-thumbnail absolute inset-0 w-full h-full object-cover opacity-70 transition-transform duration-300 group-hover:scale-105" alt="Video Thumbnail" />
                  <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                      <div class="h-16 w-16 bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center text-white transition-transform duration-300 group-hover:scale-110">
                          <svg class="w-8 h-8 ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M5 3l14 9-14 9V3z"></path></svg>
                      </div>
                  </div>
                </div>
                <div class="p-5">
                  <h4 class="font-heading text-xl text-slate-800 group-hover:text-primary transition-colors">The Art of Branding</h4>
                  <p class="text-slate-600 text-sm mt-1">Exploring the core principles of a successful brand.</p>
                </div>
              </div>
            </div>
            
            <div class="video-card-container group shadow-2xl" data-video-url="https://www.youtube.com/embed/WAoVRWcIoTY?si=opFroeIDsnWzqjN-" data-aos="fade-up" data-aos-delay="500">
              <div class="video-card-content">
                <div class="video-thumbnail-wrapper relative overflow-hidden rounded-t-lg h-56 bg-black flex items-center justify-center p-4">
                  <img class="video-thumbnail absolute inset-0 w-full h-full object-cover opacity-70 transition-transform duration-300 group-hover:scale-105" alt="Video Thumbnail" />
                  <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                      <div class="h-16 w-16 bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center text-white transition-transform duration-300 group-hover:scale-110">
                          <svg class="w-8 h-8 ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M5 3l14 9-14 9V3z"></path></svg>
                      </div>
                  </div>
                </div>
                <div class="p-5">
                  <h4 class="font-heading text-xl text-slate-800 group-hover:text-primary transition-colors">Motion Graphics Tutorial</h4>
                  <p class="text-slate-600 text-sm mt-1">A beginner's guide to creating engaging animations.</p>
                </div>
              </div>
            </div>

            <div class="video-card-container group shadow-2xl" data-video-url="https://www.youtube.com/embed/_J6FMVFjznw?si=RcEJWTxV7caq_Oqk" data-aos="fade-up" data-aos-delay="600">
              <div class="video-card-content">
                <div class="video-thumbnail-wrapper relative overflow-hidden rounded-t-lg h-56 bg-black flex items-center justify-center p-4">
                  <img class="video-thumbnail absolute inset-0 w-full h-full object-cover opacity-70 transition-transform duration-300 group-hover:scale-105" alt="Video Thumbnail" />
                  <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                      <div class="h-16 w-16 bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center text-white transition-transform duration-300 group-hover:scale-110">
                          <svg class="w-8 h-8 ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M5 3l14 9-14 9V3z"></path></svg>
                      </div>
                  </div>
                </div>
                <div class="p-5">
                  <h4 class="font-heading text-xl text-slate-800 group-hover:text-primary transition-colors">Our Company Culture</h4>
                  <p class="text-slate-600 text-sm mt-1">A look inside the team that makes it all happen.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="text-center mt-16">
            <a href="#all-videos" class="btn-premium px-8 py-4 text-lg rounded-md" data-aos="fade-up">View All Videos</a>
          </div>
        </div>
      </section>

      <div id="videoModal" class="fixed inset-0 bg-black/80 backdrop-blur-sm flex items-center justify-center p-4 z-50 hidden video-modal-container">
        <div class="relative w-full max-w-4xl bg-black rounded-lg shadow-2xl">
          <button id="closeModal" class="absolute -top-4 -right-4 h-10 w-10 bg-white rounded-full text-slate-800 flex items-center justify-center">&times;</button>
          <div class="aspect-video">
            <iframe id="youtubePlayer" class="w-full h-full rounded-lg" src="" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>







      <!-- Team -->
      <section id="team" class="relative py-24 bg-slate-50/50 overflow-hidden">
  
        <div aria-hidden="true" class="absolute inset-0 z-0 opacity-60">
          <svg class="absolute top-0 left-0 w-full h-auto" viewBox="0 0 1440 900" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
            <path d="M0 200C0 200 360 400 720 200C1080 0 1440 200 1440 200V900H0V200Z" fill="url(#paint0_linear_wave_team)" />
            <path d="M0 150C0 150 360 300 720 150C1080 0 1440 150 1440 150V900H0V150Z" fill="url(#paint1_linear_wave_team)" style="mix-blend-mode: overlay" />
            <defs>
              <linearGradient id="paint0_linear_wave_team" x1="720" y1="0" x2="720" y2="900" gradientUnits="userSpaceOnUse">
                <stop stop-color="#87550D" stop-opacity="0.05" />
                <stop offset="1" stop-color="#87550D" stop-opacity="0" />
              </linearGradient>
              <linearGradient id="paint1_linear_wave_team" x1="720" y1="0" x2="720" y2="900" gradientUnits="userSpaceOnUse">
                <stop stop-color="#87550D" stop-opacity="0.1" />
                <stop offset="1" stop-color="#87550D" stop-opacity="0" />
              </linearGradient>
            </defs>
          </svg>
        </div>

        <div class="container mx-auto px-6 relative z-10">
          <div class="text-center max-w-3xl mx-auto mb-16">
            <h3 class="font-heading text-lg font-semibold text-primary tracking-widest uppercase mb-2" data-aos="fade-up">Our Team</h3>
            <h2 class="font-heading text-2xl md:text-4xl text-slate-900 leading-tight" data-aos="fade-up" data-aos-delay="100">The Experts Behind Our Success</h2>
            <p class="text-slate-600 mt-4 text-lg" data-aos="fade-up" data-aos-delay="200">
            Introducing the dedicated professionals committed to transforming your vision into reality with ingenuity and meticulous attention.
            </p>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <div class="team-card group" data-aos="fade-up" data-aos-delay="300">
              <div class="team-card-inner">
                <div class="relative overflow-hidden rounded-t-lg">
                  <img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?q=80&w=800&auto=format&fit=crop" alt="Team Member 1" class="w-full h-72 object-cover transition-transform duration-300 group-hover:scale-105" />
                </div>
                <div class="p-5 text-center">
                  <h4 class="font-heading text-xl text-slate-800">Amelia Stone</h4>
                  <p class="text-primary text-sm mt-1">Solicitor, Barrister & FCILEX</p>
                </div>
              </div>
              <div class="social-panel">
                  <a href="#" aria-label="Twitter" class="social-link"><svg viewBox="0 0 24 24" class="h-6 w-6" fill="currentColor"><path d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 2.9,4.79C2.53,5.42 2.33,6.16 2.33,6.94C2.33,8.43 3.1,9.78 4.22,10.59C3.47,10.57 2.78,10.36 2.17,10.03C2.17,10.05 2.17,10.07 2.17,10.08C2.17,12.19 3.65,13.95 5.6,14.34C5.24,14.44 4.86,14.5 4.47,14.5C4.2,14.5 3.93,14.47 3.67,14.42C4.22,16.14 5.8,17.38 7.69,17.42C6.23,18.55 4.41,19.23 2.42,19.23C2.08,19.23 1.75,19.21 1.42,19.16C3.34,20.43 5.65,21.23 8.13,21.23C16,21.23 20.33,14.41 20.33,8.79C20.33,8.62 20.33,8.45 20.32,8.28C21.17,7.69 21.89,6.9 22.46,6Z"></path></svg></a>
                  <a href="#" aria-label="LinkedIn" class="social-link"><svg viewBox="0 0 24 24" class="h-6 w-6" fill="currentColor"><path d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H19M18.5,18.5V13.2A3.26,3.26 0 0,0 15.24,9.94C14.39,9.94 13.4,10.43 12.9,11.2V10.13H10.13V18.5H12.9V13.57C12.9,12.8 13.54,12.17 14.31,12.17C15.08,12.17 15.72,12.8 15.72,13.57V18.5H18.5M6.88,8.56A1.68,1.68 0 0,0 8.56,6.88C8.56,6 8,5.19 6.88,5.19C5.76,5.19 5.19,6 5.19,6.88C5.19,7.77 5.76,8.56 6.88,8.56M8.27,18.5V10.13H5.5V18.5H8.27Z"></path></svg></a>
              </div>
            </div>

            <div class="team-card group" data-aos="fade-up" data-aos-delay="400">
              <div class="team-card-inner">
                <div class="relative overflow-hidden rounded-t-lg">
                  <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?q=80&w=800&auto=format&fit=crop" alt="Team Member 2" class="w-full h-72 object-cover transition-transform duration-300 group-hover:scale-105" />
                </div>
                <div class="p-5 text-center">
                  <h4 class="font-heading text-xl text-slate-800">Liam Hart</h4>
                  <p class="text-primary text-sm mt-1">Practice Manager</p>
                </div>
              </div>
              <div class="social-panel">
                  <a href="#" aria-label="Twitter" class="social-link"><svg viewBox="0 0 24 24" class="h-6 w-6" fill="currentColor"><path d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 2.9,4.79C2.53,5.42 2.33,6.16 2.33,6.94C2.33,8.43 3.1,9.78 4.22,10.59C3.47,10.57 2.78,10.36 2.17,10.03C2.17,10.05 2.17,10.07 2.17,10.08C2.17,12.19 3.65,13.95 5.6,14.34C5.24,14.44 4.86,14.5 4.47,14.5C4.2,14.5 3.93,14.47 3.67,14.42C4.22,16.14 5.8,17.38 7.69,17.42C6.23,18.55 4.41,19.23 2.42,19.23C2.08,19.23 1.75,19.21 1.42,19.16C3.34,20.43 5.65,21.23 8.13,21.23C16,21.23 20.33,14.41 20.33,8.79C20.33,8.62 20.33,8.45 20.32,8.28C21.17,7.69 21.89,6.9 22.46,6Z"></path></svg></a>
                  <a href="#" aria-label="LinkedIn" class="social-link"><svg viewBox="0 0 24 24" class="h-6 w-6" fill="currentColor"><path d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H19M18.5,18.5V13.2A3.26,3.26 0 0,0 15.24,9.94C14.39,9.94 13.4,10.43 12.9,11.2V10.13H10.13V18.5H12.9V13.57C12.9,12.8 13.54,12.17 14.31,12.17C15.08,12.17 15.72,12.8 15.72,13.57V18.5H18.5M6.88,8.56A1.68,1.68 0 0,0 8.56,6.88C8.56,6 8,5.19 6.88,5.19C5.76,5.19 5.19,6 5.19,6.88C5.19,7.77 5.76,8.56 6.88,8.56M8.27,18.5V10.13H5.5V18.5H8.27Z"></path></svg></a>
              </div>
            </div>

            <div class="team-card group" data-aos="fade-up" data-aos-delay="500">
              <div class="team-card-inner">
                <div class="relative overflow-hidden rounded-t-lg">
                  <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=800&auto=format&fit=crop" alt="Team Member 3" class="w-full h-72 object-cover transition-transform duration-300 group-hover:scale-105" />
                </div>
                <div class="p-5 text-center">
                  <h4 class="font-heading text-xl text-slate-800">Olivia Chen</h4>
                  <p class="text-primary text-sm mt-1">Admin Assistant</p>
                </div>
              </div>
              <div class="social-panel">
                  <a href="#" aria-label="Twitter" class="social-link"><svg viewBox="0 0 24 24" class="h-6 w-6" fill="currentColor"><path d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 2.9,4.79C2.53,5.42 2.33,6.16 2.33,6.94C2.33,8.43 3.1,9.78 4.22,10.59C3.47,10.57 2.78,10.36 2.17,10.03C2.17,10.05 2.17,10.07 2.17,10.08C2.17,12.19 3.65,13.95 5.6,14.34C5.24,14.44 4.86,14.5 4.47,14.5C4.2,14.5 3.93,14.47 3.67,14.42C4.22,16.14 5.8,17.38 7.69,17.42C6.23,18.55 4.41,19.23 2.42,19.23C2.08,19.23 1.75,19.21 1.42,19.16C3.34,20.43 5.65,21.23 8.13,21.23C16,21.23 20.33,14.41 20.33,8.79C20.33,8.62 20.33,8.45 20.32,8.28C21.17,7.69 21.89,6.9 22.46,6Z"></path></svg></a>
                  <a href="#" aria-label="LinkedIn" class="social-link"><svg viewBox="0 0 24 24" class="h-6 w-6" fill="currentColor"><path d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H19M18.5,18.5V13.2A3.26,3.26 0 0,0 15.24,9.94C14.39,9.94 13.4,10.43 12.9,11.2V10.13H10.13V18.5H12.9V13.57C12.9,12.8 13.54,12.17 14.31,12.17C15.08,12.17 15.72,12.8 15.72,13.57V18.5H18.5M6.88,8.56A1.68,1.68 0 0,0 8.56,6.88C8.56,6 8,5.19 6.88,5.19C5.76,5.19 5.19,6 5.19,6.88C5.19,7.77 5.76,8.56 6.88,8.56M8.27,18.5V10.13H5.5V18.5H8.27Z"></path></svg></a>
              </div>
            </div>

            <div class="team-card group" data-aos="fade-up" data-aos-delay="600">
              <div class="team-card-inner">
                <div class="relative overflow-hidden rounded-t-lg">
                  <img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?q=80&w=800&auto=format&fit=crop" alt="Team Member 4" class="w-full h-72 object-cover transition-transform duration-300 group-hover:scale-105" />
                </div>
                <div class="p-5 text-center">
                  <h4 class="font-heading text-xl text-slate-800">David Lee</h4>
                  <p class="text-primary text-sm mt-1">Accounts Manager</p>
                </div>
              </div>
              <div class="social-panel">
                  <a href="#" aria-label="Twitter" class="social-link"><svg viewBox="0 0 24 24" class="h-6 w-6" fill="currentColor"><path d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 2.9,4.79C2.53,5.42 2.33,6.16 2.33,6.94C2.33,8.43 3.1,9.78 4.22,10.59C3.47,10.57 2.78,10.36 2.17,10.03C2.17,10.05 2.17,10.07 2.17,10.08C2.17,12.19 3.65,13.95 5.6,14.34C5.24,14.44 4.86,14.5 4.47,14.5C4.2,14.5 3.93,14.47 3.67,14.42C4.22,16.14 5.8,17.38 7.69,17.42C6.23,18.55 4.41,19.23 2.42,19.23C2.08,19.23 1.75,19.21 1.42,19.16C3.34,20.43 5.65,21.23 8.13,21.23C16,21.23 20.33,14.41 20.33,8.79C20.33,8.62 20.33,8.45 20.32,8.28C21.17,7.69 21.89,6.9 22.46,6Z"></path></svg></a>
                  <a href="#" aria-label="LinkedIn" class="social-link"><svg viewBox="0 0 24 24" class="h-6 w-6" fill="currentColor"><path d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H19M18.5,18.5V13.2A3.26,3.26 0 0,0 15.24,9.94C14.39,9.94 13.4,10.43 12.9,11.2V10.13H10.13V18.5H12.9V13.57C12.9,12.8 13.54,12.17 14.31,12.17C15.08,12.17 15.72,12.8 15.72,13.57V18.5H18.5M6.88,8.56A1.68,1.68 0 0,0 8.56,6.88C8.56,6 8,5.19 6.88,5.19C5.76,5.19 5.19,6 5.19,6.88C5.19,7.77 5.76,8.56 6.88,8.56M8.27,18.5V10.13H5.5V18.5H8.27Z"></path></svg></a>
              </div>
            </div>

          </div>
        </div>
      </section>



      <!-- Testimonials -->
    <section id="testimonials" class="relative py-24 bg-slate-50/50 overflow-hidden">
      


      <div class="container mx-auto px-6 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
          <h3 class="font-heading text-lg font-semibold text-primary tracking-widest uppercase mb-2" data-aos="fade-up">Hear From Our Happy Patients</h3>
          <h2 class="font-heading text-2xl md:text-4xl text-slate-900 leading-tight" data-aos="fade-up" data-aos-delay="100">What Our Patients Are Saying</h2>
        </div>

        <div class="relative max-w-6xl mx-auto">
          <div id="testimonialCarouselWrapper" class="overflow-hidden">
              <div id="testimonialCarousel" class="flex transition-transform duration-500 ease-in-out">
                
                <div class="testimonial-card flex-shrink-0 w-full md:w-1/2 p-4">
                  <div class="h-full bg-white rounded-xl shadow-lg p-8 flex flex-col justify-between">
                    <div>
                      <p class="text-slate-700 text-lg leading-relaxed mb-6">
                        "Sonjoy dada you are such a very nice person.Who help me not only in my legal issues also help me to control my emotions.How to deal with my mental situation. Dada love you. Like a guardian you guide me to sortout my problems."
                      </p>
                    </div>
                    <div class="flex items-center justify-between mt-auto">
                      <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Sheldon Jackson" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                          <h5 class="font-heading text-lg text-slate-800">Sheldon Jackson</h5>
                          <p class="text-slate-500 text-sm">Software Engineer</p>
                        </div>
                      </div>
                      <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google Logo" class="h-8 opacity-70">
                    </div>
                  </div>
                </div>
        
                <div class="testimonial-card flex-shrink-0 w-full md:w-1/2 p-4">
                  <div class="h-full bg-white rounded-xl shadow-lg p-8 flex flex-col justify-between">
                    <div>
                      <p class="text-slate-700 text-lg leading-relaxed mb-6">
                        "Sonjoy dada you are such a very nice person. When i came in this country, facing so many problems ,donâ€™t no what to do at that time i find sonjoy dada .A man who have such a big heart ."
                      </p>
                    </div>
                    <div class="flex items-center justify-between mt-auto">
                      <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/44.jpg" alt="Jason Doe" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                          <h5 class="font-heading text-lg text-slate-800">Jason Doe</h5>
                          <p class="text-slate-500 text-sm">Product Manager</p>
                        </div>
                      </div>
                      <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google Logo" class="h-8 opacity-70">
                    </div>
                  </div>
                </div>
        
                <div class="testimonial-card flex-shrink-0 w-full md:w-1/2 p-4">
                  <div class="h-full bg-white rounded-xl shadow-lg p-8 flex flex-col justify-between">
                    <div>
                      <p class="text-slate-700 text-lg leading-relaxed mb-6">
                        "The doctors here are incredibly knowledgeable and caring. I always feel heard and understood during my appointments. Highly recommend MediCare Plus to anyone looking for top-notch medical care."
                      </p>
                    </div>
                    <div class="flex items-center justify-between mt-auto">
                      <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/67.jpg" alt="Sarah Johnson" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                          <h5 class="font-heading text-lg text-slate-800">Sarah Johnson</h5>
                          <p class="text-slate-500 text-sm">Marketing Specialist</p>
                        </div>
                      </div>
                      <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google Logo" class="h-8 opacity-70">
                    </div>
                  </div>
                </div>
        
                <div class="testimonial-card flex-shrink-0 w-full md:w-1/2 p-4">
                  <div class="h-full bg-white rounded-xl shadow-lg p-8 flex flex-col justify-between">
                    <div>
                      <p class="text-slate-700 text-lg leading-relaxed mb-6">
                        "From scheduling to follow-ups, everything is seamless. The staff is friendly, efficient, and truly cares about patient well-being. A truly exceptional healthcare experience."
                      </p>
                    </div>
                    <div class="flex items-center justify-between mt-auto">
                      <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/80.jpg" alt="Emily White" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                          <h5 class="font-heading text-lg text-slate-800">Emily White</h5>
                          <p class="text-slate-500 text-sm">Architect</p>
                        </div>
                      </div>
                      <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google Logo" class="h-8 opacity-70">
                    </div>
                  </div>
                </div>
        
              </div>
          </div>

          <button id="prevTestimonial" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-slate-800 text-white p-3 rounded-full shadow-lg hover:bg-slate-700 transition hidden md:block">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
          </button>
          <button id="nextTestimonial" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-slate-800 text-white p-3 rounded-full shadow-lg hover:bg-slate-700 transition hidden md:block">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
          </button>

          <div id="testimonialDots" class="flex justify-center mt-8 space-x-2"></div>
        </div>
      </div>
    </section>





      <!-- Blog -->
     <section id="blog" class="relative py-24 bg-slate-50/50 overflow-hidden">
  
  <div aria-hidden="true" class="absolute inset-0 z-0 opacity-60">
    <svg class="absolute top-0 left-0 w-full h-auto" viewBox="0 0 1440 900" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
      <path d="M0 200C0 200 360 400 720 200C1080 0 1440 200 1440 200V900H0V200Z" fill="url(#paint0_linear_wave_blog)" />
      <path d="M0 150C0 150 360 300 720 150C1080 0 1440 150 1440 150V900H0V150Z" fill="url(#paint1_linear_wave_blog)" style="mix-blend-mode: overlay" />
      <defs>
        <linearGradient id="paint0_linear_wave_blog" x1="720" y1="0" x2="720" y2="900" gradientUnits="userSpaceOnUse">
          <stop stop-color="#87550D" stop-opacity="0.05" />
          <stop offset="1" stop-color="#87550D" stop-opacity="0" />
        </linearGradient>
        <linearGradient id="paint1_linear_wave_blog" x1="720" y1="0" x2="720" y2="900" gradientUnits="userSpaceOnUse">
          <stop stop-color="#87550D" stop-opacity="0.1" />
          <stop offset="1" stop-color="#87550D" stop-opacity="0" />
        </linearGradient>
      </defs>
    </svg>
  </div>

  <div class="container mx-auto px-6 relative z-10">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <h3 class="font-heading text-lg font-semibold text-primary tracking-widest uppercase mb-2" data-aos="fade-up">From Our Blog</h3>
      <h2 class="font-heading text-2xl md:text-4xl text-slate-900 leading-tight" data-aos="fade-up" data-aos-delay="100">Latest Insights & Articles</h2>
      <p class="text-slate-600 mt-4 text-lg" data-aos="fade-up" data-aos-delay="200">
        Stay updated with the latest industry trends, design principles, and company news.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      
      <article class="card-premium group" data-aos="fade-up" data-aos-delay="300">
        <div class="relative overflow-hidden rounded-t-lg">
          <img src="https://images.unsplash.com/photo-1624555130581-1d9cca783bc0?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDF8fHxlbnwwfHx8fHw%3D" alt="Blog post image 1" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105" />
        </div>
        <div class="p-6">
          <div class="text-xs text-slate-500 mb-3">
            <span>Sep 08, 2025</span> &bull; <span>5 min read</span>
          </div>
          <h3 class="font-heading text-xl text-slate-800 mb-3 group-hover:text-primary transition-colors">
            <a href="#">Designing with depth</a>
          </h3>
          <p class="text-slate-600 text-sm leading-relaxed mb-4">
            How shadows and layering can transform a flat design into a dynamic experience.
          </p>
          <a href="#" class="font-semibold text-sm text-primary hover:underline">Read More &rarr;</a>
        </div>
      </article>

      <article class="card-premium group" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden rounded-t-lg">
          <img src="https://images.unsplash.com/photo-1681949287382-052ea3954a51?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDl8fHxlbnwwfHx8fHw%3D" alt="Blog post image 2" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105" />
        </div>
        <div class="p-6">
          <div class="text-xs text-slate-500 mb-3">
            <span>Sep 01, 2025</span> &bull; <span>4 min read</span>
          </div>
          <h3 class="font-heading text-xl text-slate-800 mb-3 group-hover:text-primary transition-colors">
            <a href="#">Invisible gradients</a>
          </h3>
          <p class="text-slate-600 text-sm leading-relaxed mb-4">
            Exploring the subtle art of using gradients to guide the eye without being noticed.
          </p>
          <a href="#" class="font-semibold text-sm text-primary hover:underline">Read More &rarr;</a>
        </div>
      </article>

      <article class="card-premium group" data-aos="fade-up" data-aos-delay="500">
        <div class="relative overflow-hidden rounded-t-lg">
          <img src="https://images.unsplash.com/photo-1739298061707-cefee19941b7?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDEwfHx8ZW58MHx8fHx8" alt="Blog post image 3" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105" />
        </div>
        <div class="p-6">
          <div class="text-xs text-slate-500 mb-3">
            <span>Aug 25, 2025</span> &bull; <span>6 min read</span>
          </div>
          <h3 class="font-heading text-xl text-slate-800 mb-3 group-hover:text-primary transition-colors">
            <a href="#">Motion that whispers</a>
          </h3>
          <p class="text-slate-600 text-sm leading-relaxed mb-4">
            How to use subtle animations to enhance user experience instead of distracting.
          </p>
          <a href="#" class="font-semibold text-sm text-primary hover:underline">Read More &rarr;</a>
        </div>
      </article>
      
      <article class="card-premium group" data-aos="fade-up" data-aos-delay="600">
        <div class="relative overflow-hidden rounded-t-lg">
          <img src="https://images.unsplash.com/photo-1676277758170-2cb1c5d94a9f?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE4fHx8ZW58MHx8fHx8" alt="Blog post image 4" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105" />
        </div>
        <div class="p-6">
          <div class="text-xs text-slate-500 mb-3">
            <span>Aug 18, 2025</span> &bull; <span>3 min read</span>
          </div>
          <h3 class="font-heading text-xl text-slate-800 mb-3 group-hover:text-primary transition-colors">
            <a href="#">Accessible Design</a>
          </h3>
          <p class="text-slate-600 text-sm leading-relaxed mb-4">
            Simple steps to make your web projects inclusive for everyone.
          </p>
          <a href="#" class="font-semibold text-sm text-primary hover:underline">Read More &rarr;</a>
        </div>
      </article>

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

    <!-- Footer -->
    <?php include('footer.php') ?>


    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="main.js"></script>
  </body>
</html>
