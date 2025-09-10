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
        <section class="relative pt-40 pb-24 bg-cover bg-center min-h-[400px] flex items-center justify-center" 
            style="background-image: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YWJvdXQlMjB1c3xlbnwwfHwwfHx8MA%3D%3Dp');">
            <div class="absolute inset-0 bg-slate-900/60 z-0"></div>
            <div class="container mx-auto px-6 relative z-10 text-center text-white">
              <div class="space-y-4" data-aos="fade-up">
              
                <h1 class="font-heading text-4xl md:text-5xl">About Us</h1>
                <p class="max-w-2xl mx-auto text-slate-300">
                  Discover our story, our values, and what makes us a trusted partner in your journey.
                </p>
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


           <section id="operations-optimize" class="py-24 bg-slate-50">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="font-heading text-3xl md:text-4xl text-slate-900 leading-tight" data-aos="fade-up">
                Our Core Values
            </h2>
            <p class="text-lg text-slate-600 mt-4" data-aos="fade-up" data-aos-delay="100">
                RoadSyster simplifies the critical workflows of your business.
            </p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            
            <div class="bg-white p-8 rounded-2xl shadow-md border border-slate-100 flex items-start gap-6 transition-all duration-300 hover:shadow-lg hover:-translate-y-1" data-aos="fade-up" data-aos-delay="200">
                <div class="h-16 w-16 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <div>
                    <h4 class="font-heading text-xl text-slate-800 mb-2">Smart Dispatching</h4>
                    <p class="text-slate-600 leading-relaxed text-sm">Assign jobs in one click and track their progress in real time.</p>
                </div>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-md border border-slate-100 flex items-start gap-6 transition-all duration-300 hover:shadow-lg hover:-translate-y-1" data-aos="fade-up" data-aos-delay="300">
                <div class="h-16 w-16 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M10 12l2 2 4-4" />
                    </svg>
                </div>
                <div>
                    <h4 class="font-heading text-xl text-slate-800 mb-2">Technician Management</h4>
                    <p class="text-slate-600 leading-relaxed text-sm">Easily assign the right tasks to the right people with clear insights.</p>
                </div>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-md border border-slate-100 flex items-start gap-6 transition-all duration-300 hover:shadow-lg hover:-translate-y-1" data-aos="fade-up" data-aos-delay="400">
                <div class="h-16 w-16 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
                   <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <div>
                    <h4 class="font-heading text-xl text-slate-800 mb-2">Hassle-Free Invoicing</h4>
                    <p class="text-slate-600 leading-relaxed text-sm">Automate invoice creation and tracking for seamless management.</p>
                </div>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-md border border-slate-100 flex items-start gap-6 transition-all duration-300 hover:shadow-lg hover:-translate-y-1" data-aos="fade-up" data-aos-delay="500">
                <div class="h-16 w-16 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <div>
                    <h4 class="font-heading text-xl text-slate-800 mb-2">Live Tracking</h4>
                    <p class="text-slate-600 leading-relaxed text-sm">Get instant updates and keep full visibility on every operation.</p>
                </div>
            </div>

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

 
        
        <section id="why-stonebridge" class="py-24 bg-slate-50/50">
            <div class="container mx-auto px-6">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="font-heading text-3xl md:text-4xl text-slate-900" data-aos="fade-up">Why Stonebridge?</h2>
                    <p class="text-lg text-slate-600 mt-4" data-aos="fade-up" data-aos-delay="100">Discover the core reasons why clients trust Stonebridge for their legal and advisory needs.</p>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <div class="card-premium p-8 flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="100">
                        <div class="h-16 w-16 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 mb-6 shadow-sm">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M12 19.586V17M12 4.414V7M7 12h10"></path></svg>
                        </div>
                        <h4 class="font-heading text-xl text-slate-800 mb-3">Expert Guidance</h4>
                        <p class="text-slate-600 leading-relaxed flex-grow">Benefit from the knowledge of our highly accredited and experienced legal professionals.</p>
                    </div>

                    <div class="card-premium p-8 flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="200">
                        <div class="h-16 w-16 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 mb-6 shadow-sm">
                        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <h4 class="font-heading text-xl text-slate-800 mb-3">Tailored Solutions</h4>
                        <p class="text-slate-600 leading-relaxed flex-grow">We provide personalized strategies designed to meet your specific needs and goals.</p>
                    </div>

                    <div class="card-premium p-8 flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="300">
                        <div class="h-16 w-16 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 mb-6 shadow-sm">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <h4 class="font-heading text-xl text-slate-800 mb-3">Proven Track Record</h4>
                        <p class="text-slate-600 leading-relaxed flex-grow">A history of successful outcomes and satisfied clients speaks for itself.</p>
                    </div>

                    <div class="card-premium p-8 flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="400">
                        <div class="h-16 w-16 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 mb-6 shadow-sm">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H2m2-5h10M7 9l4-4 4 4M7 13l4 4 4-4"></path></svg>
                        </div>
                        <h4 class="font-heading text-xl text-slate-800 mb-3">Client-Centric Approach</h4>
                        <p class="text-slate-600 leading-relaxed flex-grow">Your success is our priority. We are dedicated to providing attentive and responsive service.</p>
                    </div>

                    <div class="card-premium p-8 flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="500">
                        <div class="h-16 w-16 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 mb-6 shadow-sm">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12.76V6.24M15 12.76V6.24M12 18.26V11.74M12 5.74V2.26M5 12H2M19 12h3M12 21.74V18.26M12 2v3.48"></path></svg>
                        </div>
                        <h4 class="font-heading text-xl text-slate-800 mb-3">Transparent Process</h4>
                        <p class="text-slate-600 leading-relaxed flex-grow">We believe in clear communication and provide honest advice every step of the way.</p>
                    </div>

                    <div class="card-premium p-8 flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="600">
                        <div class="h-16 w-16 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 mb-6 shadow-sm">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        </div>
                        <h4 class="font-heading text-xl text-slate-800 mb-3">Utmost Confidentiality</h4>
                        <p class="text-slate-600 leading-relaxed flex-grow">Your privacy is paramount. We handle all cases with the strictest confidentiality.</p>
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

        <!-- faq section start -->

        <section id="faq" class="relative py-24 bg-slate-50/50 overflow-hidden">
  
  <div aria-hidden="true" class="absolute inset-0 z-0 opacity-60">
    <svg class="absolute top-0 left-0 w-full h-auto" viewBox="0 0 1440 900" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
      <path d="M0 200C0 200 360 400 720 200C1080 0 1440 200 1440 200V900H0V200Z" fill="url(#paint0_linear_wave_faq)" />
      <path d="M0 150C0 150 360 300 720 150C1080 0 1440 150 1440 150V900H0V150Z" fill="url(#paint1_linear_wave_faq)" style="mix-blend-mode: overlay" />
      <defs>
        <linearGradient id="paint0_linear_wave_faq" x1="720" y1="0" x2="720" y2="900" gradientUnits="userSpaceOnUse">
          <stop stop-color="#87550D" stop-opacity="0.05" />
          <stop offset="1" stop-color="#87550D" stop-opacity="0" />
        </linearGradient>
        <linearGradient id="paint1_linear_wave_faq" x1="720" y1="0" x2="720" y2="900" gradientUnits="userSpaceOnUse">
          <stop stop-color="#87550D" stop-opacity="0.1" />
          <stop offset="1" stop-color="#87550D" stop-opacity="0" />
        </linearGradient>
      </defs>
    </svg>
  </div>

  <div class="container mx-auto px-6 relative z-10">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <h3 class="font-heading text-lg font-semibold text-primary tracking-widest uppercase mb-2" data-aos="fade-up">FAQ</h3>
      <h2 class="font-heading text-4xl md:text-5xl text-slate-900 leading-tight" data-aos="fade-up" data-aos-delay="100">Frequently Asked Questions</h2>
      <p class="text-slate-600 mt-4 text-lg" data-aos="fade-up" data-aos-delay="200">
        Have questions? We've got answers. If you can't find what you're looking for, feel free to contact us.
      </p>
    </div>

    <div class="max-w-4xl mx-auto space-y-4" data-aos="fade-up" data-aos-delay="300">
      
      <div class="faq-item bg-white border border-slate-200 rounded-xl overflow-hidden shadow-soft-1">
        <button class="faq-trigger flex justify-between items-center w-full text-left p-6">
          <span class="font-heading text-lg text-slate-800">What is a Sponsorship Licence?</span>
          <div class="faq-icon h-6 w-6 text-slate-500 shrink-0">
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
          </div>
        </button>
        <div class="faq-content">
          <p class="px-6 pb-6 text-slate-600 leading-relaxed">
            A Sponsorship Licence allows UK-based businesses to hire skilled workers from outside the European Economic Area (EEA). It is a mandatory requirement set by the Home Office for employers wishing to sponsor non-EEA nationals under routes like the Skilled Worker visa.
          </p>
        </div>
      </div>

      <div class="faq-item bg-white border border-slate-200 rounded-xl overflow-hidden shadow-soft-1">
        <button class="faq-trigger flex justify-between items-center w-full text-left p-6">
          <span class="font-heading text-lg text-slate-800">How long does an application take?</span>
          <div class="faq-icon h-6 w-6 text-slate-500 shrink-0">
             <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
          </div>
        </button>
        <div class="faq-content">
          <p class="px-6 pb-6 text-slate-600 leading-relaxed">
            Application processing times can vary depending on the type of visa and the complexity of the case. Standard applications can take several weeks to a few months. We always provide an estimated timeline based on the specific circumstances of your case.
          </p>
        </div>
      </div>
      
      </div>
  </div>
</section>
        <!-- faq section end -->
        
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
<script>
    // --- FAQ Accordion Logic ---
       document.addEventListener('DOMContentLoaded', () => {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const trigger = item.querySelector('.faq-trigger');
        if (trigger) {
            trigger.addEventListener('click', () => {
                const content = item.querySelector('.faq-content');
                const currentlyActive = item.classList.contains('active');

                // Close all other items
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                        otherItem.querySelector('.faq-content').style.maxHeight = null;
                    }
                });

                // Toggle the clicked item
                if (currentlyActive) {
                    item.classList.remove('active');
                    content.style.maxHeight = null;
                } else {
                    item.classList.add('active');
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        }
    });
});
</script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="main.js"></script>

  </body>
</html>
