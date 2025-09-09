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
            style="background-image: url('https://images.unsplash.com/photo-1457369804613-52c61a468e7d?q=80&w=1600&auto=format&fit=crop');">
            <div class="absolute inset-0 bg-slate-900/60 z-0"></div>
            <div class="container mx-auto px-6 relative z-10 text-center text-white">
              <div class="space-y-4" data-aos="fade-up">
                <p class="text-sm font-semibold text-slate-200">
                  <a href="index.html" class="hover:text-primary transition-colors">Home</a> &rsaquo; 
                  <span class="text-primary">Blog</span>
                </p>
                <h1 class="font-heading text-4xl md:text-5xl">Our Blog</h1>
                <p class="max-w-2xl mx-auto text-slate-300">
                  Insights, news, and stories from our team of experts.
                </p>
              </div>
            </div>
        </section>


           <section id="blog" class="relative py-24 bg-slate-50/50 overflow-hidden">

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
                        data-aos="fade-up">From Our Blog</h3>
                    <h2 class="font-heading text-2xl md:text-4xl text-slate-900 leading-tight mb-4" data-aos="fade-up"
                        data-aos-delay="100">Latest Insights & Articles</h2>
                    <p class="text-slate-600 max-w-2xl mx-auto text-lg" data-aos="fade-up" data-aos-delay="200">
                       Stay updated with the latest industry trends, design principles, and company news.
                    <p>
                </div>

               <div class="grid lg:grid-cols-3 gap-12">
                    
                    <div class="lg:col-span-2">
                        <div class="grid sm:grid-cols-2 gap-8">
                            <article class="card-premium group" data-aos="fade-up">
                                <div class="relative overflow-hidden rounded-t-lg">
                                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=800&auto=format&fit=crop" alt="Blog post image" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105" />
                                </div>
                                <div class="p-6">
                                    <div class="text-xs text-slate-500 mb-3"><span>Sep 08, 2025</span> &bull; <span>5 min read</span></div>
                                    <h3 class="font-heading text-xl text-slate-800 mb-3 group-hover:text-primary transition-colors"><a href="#">Designing with depth</a></h3>
                                    <p class="text-slate-600 text-sm leading-relaxed mb-4">How shadows and layering can transform a flat design into a dynamic experience.</p>
                                    <a href="#" class="font-semibold text-sm text-primary hover:underline">Read More &rarr;</a>
                                </div>
                            </article>
                            <article class="card-premium group" data-aos="fade-up" data-aos-delay="100">
                                <div class="relative overflow-hidden rounded-t-lg">
                                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=800&auto=format&fit=crop" alt="Blog post image" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105" />
                                </div>
                                <div class="p-6">
                                    <div class="text-xs text-slate-500 mb-3"><span>Sep 01, 2025</span> &bull; <span>4 min read</span></div>
                                    <h3 class="font-heading text-xl text-slate-800 mb-3 group-hover:text-primary transition-colors"><a href="#">Invisible gradients</a></h3>
                                    <p class="text-slate-600 text-sm leading-relaxed mb-4">Exploring the subtle art of using gradients to guide the eye without being noticed.</p>
                                    <a href="#" class="font-semibold text-sm text-primary hover:underline">Read More &rarr;</a>
                                </div>
                            </article>
                             </div>
                        
                        <div class="flex justify-center items-center gap-2 mt-16" data-aos="fade-up">
                            <a href="#" class="h-10 w-10 flex items-center justify-center rounded-md text-slate-500 hover:bg-slate-200">&laquo;</a>
                            <a href="#" class="h-10 w-10 flex items-center justify-center rounded-md bg-primary text-white">1</a>
                            <a href="#" class="h-10 w-10 flex items-center justify-center rounded-md text-slate-700 hover:bg-slate-200">2</a>
                            <a href="#" class="h-10 w-10 flex items-center justify-center rounded-md text-slate-700 hover:bg-slate-200">3</a>
                            <a href="#" class="h-10 w-10 flex items-center justify-center rounded-md text-slate-500 hover:bg-slate-200">&raquo;</a>
                        </div>
                    </div>

                    <aside class="lg:col-span-1 space-y-8">
                        <div class="card-premium p-6" data-aos="fade-left">
                            <form class="relative">
                                <input type="search" placeholder="Search blog..." class="w-full px-4 py-2.5 rounded-md bg-slate-100 border-slate-200 focus:ring-primary focus:border-primary" />
                                <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-primary">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                </button>
                            </form>
                        </div>
                        
                        <div class="card-premium p-8" data-aos="fade-left" data-aos-delay="100">
                            <h4 class="font-heading text-2xl text-slate-800 mb-6">Categories</h4>
                            <ul class="space-y-4">
                                <li><a href="#" class="font-semibold text-slate-700 hover:text-primary transition-colors flex justify-between items-center"><span>Web Design</span> <span class="text-slate-400">(8)</span></a></li>
                                <li><a href="#" class="font-semibold text-slate-700 hover:text-primary transition-colors flex justify-between items-center"><span>Development</span> <span class="text-slate-400">(5)</span></a></li>
                                <li><a href="#" class="font-semibold text-slate-700 hover:text-primary transition-colors flex justify-between items-center"><span>Branding</span> <span class="text-slate-400">(12)</span></a></li>
                                <li><a href="#" class="font-semibold text-slate-700 hover:text-primary transition-colors flex justify-between items-center"><span>Marketing</span> <span class="text-slate-400">(3)</span></a></li>
                            </ul>
                        </div>
                    </aside>
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
