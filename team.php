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
            style="background-image: url('https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?q=80&w=1600&auto=format&fit=crop');">
            <div class="absolute inset-0 bg-slate-900/60 z-0"></div>
            <div class="container mx-auto px-6 relative z-10 text-center text-white">
              <div class="space-y-4" data-aos="fade-up">
                <p class="text-sm font-semibold text-slate-200">
                  <a href="index.html" class="hover:text-primary transition-colors">Home</a> &rsaquo; 
                  <span class="text-primary">Our Team</span>
                </p>
                <h1 class="font-heading text-4xl md:text-5xl">Meet Our Experts</h1>
                <p class="max-w-2xl mx-auto text-slate-300">
                  The passionate minds dedicated to bringing your vision to life with creativity and precision.
                </p>
              </div>
            </div>
        </section>

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
                   <a href="team-details.php" class="font-semibold text-sm text-primary hover:underline">View Profile &rarr;</a>
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
                   <a href="team-details.php" class="font-semibold text-sm text-primary hover:underline">View Profile &rarr;</a>
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
                   <a href="team-details.php" class="font-semibold text-sm text-primary hover:underline">View Profile &rarr;</a>
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
                   <a href="team-details.php" class="font-semibold text-sm text-primary hover:underline">View Profile &rarr;</a>
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
