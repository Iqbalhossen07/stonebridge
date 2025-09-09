<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Events — Aurelia</title>
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
            style="background-image: url('https://images.unsplash.com/photo-1511795409834-ef04bbd61622?q=80&w=1600&auto=format&fit=crop');">
            <div class="absolute inset-0 bg-slate-900/60 z-0"></div>
            <div class="container mx-auto px-6 relative z-10 text-center text-white">
              <div class="space-y-4" data-aos="fade-up">
                <p class="text-sm font-semibold text-slate-200">
                  <a href="index.html" class="hover:text-primary transition-colors">Home</a> &rsaquo; 
                  <span class="text-primary">Events</span>
                </p>
                <h1 class="font-heading text-4xl md:text-5xl">Upcoming Events</h1>
                <p class="max-w-2xl mx-auto text-slate-300">
                  Join us for our upcoming seminars, workshops, and community gatherings.
                </p>
              </div>
            </div>
        </section>

        <section class="relative py-24 bg-slate-50/50">
            <div aria-hidden="true" class="absolute inset-0 z-0 opacity-60">
                </div>
            
            <div class="container mx-auto px-6 relative z-10">
                <div class="grid md:grid-cols-3 gap-8 max-w-8xl mx-auto">
                    
                    <article class="card-premium group" data-aos="fade-up">
                        <div class="relative overflow-hidden rounded-t-lg">
                            <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=800&auto=format&fit=crop" alt="Event image" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-105" />
                        </div>
                        <div class="p-6">
                            <div class="text-sm text-primary font-semibold mb-3">
                                <span>October 25, 2025</span> &bull; <span>10:00 AM - 1:00 PM</span>
                            </div>
                            <h3 class="font-heading text-2xl text-slate-800 mb-3 group-hover:text-primary transition-colors">
                                <a href="event-details.html">Navigating Skilled Worker Visas</a>
                            </h3>
                            <p class="text-slate-600 text-base leading-relaxed mb-6">
                                A comprehensive seminar on the requirements and application process for the UK Skilled Worker visa route.
                            </p>
                            <a href="event-details.html" class="font-semibold text-sm text-primary hover:underline">View Details &rarr;</a>
                        </div>
                    </article>

                    <article class="card-premium group" data-aos="fade-up" data-aos-delay="100">
                         <div class="relative overflow-hidden rounded-t-lg">
                            <img src="https://images.unsplash.com/photo-1560523159-4a9692d222ef?q=80&w=800&auto=format&fit=crop" alt="Event image" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-105" />
                        </div>
                        <div class="p-6">
                            <div class="text-sm text-primary font-semibold mb-3">
                                <span>November 12, 2025</span> &bull; <span>2:00 PM - 4:00 PM</span>
                            </div>
                            <h3 class="font-heading text-2xl text-slate-800 mb-3 group-hover:text-primary transition-colors">
                                <a href="event-details.html">Understanding Your Right to Work</a>
                            </h3>
                            <p class="text-slate-600 text-base leading-relaxed mb-6">
                                An interactive workshop for employers on conducting compliant Right to Work checks and avoiding civil penalties.
                            </p>
                            <a href="event-details.html" class="font-semibold text-sm text-primary hover:underline">View Details &rarr;</a>
                        </div>
                    </article>
                    <article class="card-premium group" data-aos="fade-up" data-aos-delay="100">
                         <div class="relative overflow-hidden rounded-t-lg">
                            <img src="https://images.unsplash.com/photo-1560523159-4a9692d222ef?q=80&w=800&auto=format&fit=crop" alt="Event image" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-105" />
                        </div>
                        <div class="p-6">
                            <div class="text-sm text-primary font-semibold mb-3">
                                <span>November 12, 2025</span> &bull; <span>2:00 PM - 4:00 PM</span>
                            </div>
                            <h3 class="font-heading text-2xl text-slate-800 mb-3 group-hover:text-primary transition-colors">
                                <a href="event-details.html">Understanding Your Right to Work</a>
                            </h3>
                            <p class="text-slate-600 text-base leading-relaxed mb-6">
                                An interactive workshop for employers on conducting compliant Right to Work checks and avoiding civil penalties.
                            </p>
                            <a href="event-details.html" class="font-semibold text-sm text-primary hover:underline">View Details &rarr;</a>
                        </div>
                    </article>

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