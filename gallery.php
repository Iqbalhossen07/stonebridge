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
            style="background-image: url('https://images.unsplash.com/photo-1606819717115-9159c900370b?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8Z2FsbGVyeXxlbnwwfHwwfHx8MA%3D%3D');">
            <div class="absolute inset-0 bg-slate-900/60 z-0"></div>
            <div class="container mx-auto px-6 relative z-10 text-center text-white">
                <div class="space-y-4" data-aos="fade-up">
                    <p class="text-sm font-semibold text-slate-200">
                        <a href="index.html" class="hover:text-primary transition-colors">Home</a> &rsaquo;
                        <span class="text-primary">Gallery</span>
                    </p>
                    <h1 class="font-heading text-4xl md:text-5xl">Our Gallery</h1>
                    <p class="max-w-2xl mx-auto text-slate-300">
                        A curated collection of our finest projects and moments that define our passion for excellence.
                    </p>
                </div>
            </div>
        </section>

        <section id="services" class="relative py-24 bg-slate-50/50 overflow-hidden">

            <div aria-hidden="true" class="absolute inset-0 z-0 opacity-60">
                <svg class="absolute top-0 left-0 w-full h-auto" viewBox="0 0 1440 900" fill="none"
                    xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
                    <path d="M0 200C0 200 360 400 720 200C1080 0 1440 200 1440 200V900H0V200Z"
                        fill="url(#paint0_linear_wave_services)" />
                    <path d="M0 150C0 150 360 300 720 150C1080 0 1440 150 1440 150V900H0V150Z"
                        fill="url(#paint1_linear_wave_services)" style="mix-blend-mode: overlay" />
                    <defs>
                        <linearGradient id="paint0_linear_wave_services" x1="720" y1="0" x2="720" y2="900"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#87550D" stop-opacity="0.05" />
                            <stop offset="1" stop-color="#87550D" stop-opacity="0" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_wave_services" x1="720" y1="0" x2="720" y2="900"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#87550D" stop-opacity="0.1" />
                            <stop offset="1" stop-color="#87550D" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="text-center mb-16">
                    <h3 class="font-heading text-lg font-semibold text-primary tracking-widest uppercase mb-2"
                        data-aos="fade-up">Our Gallery</h3>
                    <h2 class="font-heading text-2xl md:text-4xl text-slate-900 leading-tight mb-4" data-aos="fade-up"
                        data-aos-delay="100">A Glimpse into Our Creative World</h2>
                    <p class="text-slate-600 max-w-2xl mx-auto text-lg" data-aos="fade-up" data-aos-delay="200">
                       Discover a carefully selected showcase of our premier projects and defining moments that embody our commitment to excellence.
                    <p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                    <a href="#" class="group relative block w-full h-80 overflow-hidden rounded-xl shadow-soft-2"
                        data-aos="fade-up" data-aos-delay="100">
                        <img src="img/g1.jpeg"
                            alt="Gallery Image"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                        <div
                            class="absolute inset-0 bg-primary/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <h3 class="font-heading text-2xl">Project Alpha</h3>
                            <p class="text-white/80 text-sm">Web Design</p>
                        </div>
                    </a>

                    <a href="#" class="group relative block w-full h-80 overflow-hidden rounded-xl shadow-soft-2"
                        data-aos="fade-up" data-aos-delay="200">
                        <img src="img/g2.jpeg"
                            alt="Gallery Image"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                        <div
                            class="absolute inset-0 bg-primary/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <h3 class="font-heading text-2xl">Brand Identity</h3>
                            <p class="text-white/80 text-sm">Branding</p>
                        </div>
                    </a>

                    <a href="#" class="group relative block w-full h-80 overflow-hidden rounded-xl shadow-soft-2"
                        data-aos="fade-up" data-aos-delay="300">
                        <img src="img/g3.jpeg"
                            alt="Gallery Image"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                        <div
                            class="absolute inset-0 bg-primary/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <h3 class="font-heading text-2xl">Web Platform</h3>
                            <p class="text-white/80 text-sm">Development</p>
                        </div>
                    </a>

                    <a href="#" class="group relative block w-full h-80 overflow-hidden rounded-xl shadow-soft-2"
                        data-aos="fade-up" data-aos-delay="100">
                        <img src="img/g4.jpeg"
                            alt="Gallery Image"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                        <div
                            class="absolute inset-0 bg-primary/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <h3 class="font-heading text-2xl">Mobile App</h3>
                            <p class="text-white/80 text-sm">UI/UX Design</p>
                        </div>
                    </a>

                    <a href="#" class="group relative block w-full h-80 overflow-hidden rounded-xl shadow-soft-2"
                        data-aos="fade-up" data-aos-delay="200">
                        <img src="img/g5.jpeg"
                            alt="Gallery Image"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                        <div
                            class="absolute inset-0 bg-primary/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <h3 class="font-heading text-2xl">Digital Campaign</h3>
                            <p class="text-white/80 text-sm">Marketing</p>
                        </div>
                    </a>

                    <a href="#" class="group relative block w-full h-80 overflow-hidden rounded-xl shadow-soft-2"
                        data-aos="fade-up" data-aos-delay="300">
                        <img src="img/g6.jpeg"
                            alt="Gallery Image"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                        <div
                            class="absolute inset-0 bg-primary/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <h3 class="font-heading text-2xl">E-commerce Solution</h3>
                            <p class="text-white/80 text-sm">Development</p>
                        </div>
                    </a>
                    <a href="#" class="group relative block w-full h-80 overflow-hidden rounded-xl shadow-soft-2"
                        data-aos="fade-up" data-aos-delay="300">
                        <img src="img/g7.jpeg"
                            alt="Gallery Image"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                        <div
                            class="absolute inset-0 bg-primary/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <h3 class="font-heading text-2xl">E-commerce Solution</h3>
                            <p class="text-white/80 text-sm">Development</p>
                        </div>
                    </a>
                    <a href="#" class="group relative block w-full h-80 overflow-hidden rounded-xl shadow-soft-2"
                        data-aos="fade-up" data-aos-delay="300">
                        <img src="img/g8.jpeg"
                            alt="Gallery Image"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                        <div
                            class="absolute inset-0 bg-primary/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <h3 class="font-heading text-2xl">E-commerce Solution</h3>
                            <p class="text-white/80 text-sm">Development</p>
                        </div>
                    </a>

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
