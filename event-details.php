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

    <main >

     <section class="relative pt-40 pb-24 bg-cover bg-center min-h-[400px] flex items-center justify-center" 
            style="background-image: url('https://images.unsplash.com/photo-1511795409834-ef04bbd61622?q=80&w=1600&auto=format&fit=crop');">
            <div class="absolute inset-0 bg-slate-900/60 z-0"></div>
            <div class="container mx-auto px-6 relative z-10 text-center text-white">
              <div class="space-y-4" data-aos="fade-up">
               
                <h1 class="font-heading text-4xl md:text-5xl">Events Details</h1>
                <p class="max-w-2xl mx-auto text-slate-300">
                  Join us for our upcoming seminars, workshops, and community gatherings.
                </p>
              </div>
            </div>
        </section>

        <section class="py-24">
            <div class="container mx-auto px-6">
                <div class="grid lg:grid-cols-3 gap-12">
                    
                    <article class="lg:col-span-2 article-content">
                        <div class="rounded-xl overflow-hidden shadow-soft-2 mb-8" data-aos="fade-up">
                            <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=1600&auto=format&fit=crop" alt="Event image" class="w-full h-96" />
                        </div>
                        <h1 class="font-heading text-2xl md:text-4xl text-slate-900 leading-tight mb-6" data-aos="fade-up">
                            Navigating Skilled Worker Visas
                        </h1>
                        <div class="space-y-6 text-slate-700 text-lg leading-relaxed" data-aos="fade-up">
                           <h2>About The Event</h2>
                           <p>Join our expert-led seminar designed for UK employers and HR professionals. This event provides a comprehensive overview of the requirements, application process, and compliance duties associated with the Skilled Worker visa route. Stay informed and ensure your business can attract and retain top international talent.</p>
                           <h3>What You Will Learn:</h3>
                           <ul>
                               <li>Key eligibility criteria for both sponsors and applicants.</li>
                               <li>Step-by-step guidance on the sponsorship application process.</li>
                               <li>Understanding Certificates of Sponsorship (CoS).</li>
                               <li>Post-licence compliance and duties to avoid penalties.</li>
                               <li>Q&A session with our accredited immigration experts.</li>
                           </ul>
                        </div>
                    </article>

                    <aside class="lg:col-span-1 space-y-8 lg:sticky top-32">
                        <div class="card-premium p-8" data-aos="fade-left">
                            <h4 class="font-heading text-2xl text-slate-800 mb-6">Event Details</h4>
                            <ul class="space-y-4 text-slate-700">
                                <li class="flex items-start gap-3"><svg class="h-6 w-6 text-primary shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg><div><strong>Date:</strong> October 25, 2025</div></li>
                                <li class="flex items-start gap-3"><svg class="h-6 w-6 text-primary shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><div><strong>Time:</strong> 10:00 AM - 1:00 PM</div></li>
                                <li class="flex items-start gap-3"><svg class="h-6 w-6 text-primary shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg><div><strong>Location:</strong> Aurelia Convention Hall, Dhaka</div></li>
                            </ul>
                            <div class="mt-8 space-y-3">
                                <a href="#" class="btn-premium w-full">Register Now</a>
                                <div class="relative">
                                    <button id="addToCalendarBtn" class="w-full inline-flex items-center justify-center px-5 py-3 rounded-md border hover:bg-slate-100">
                                        Add to Calendar
                                        <svg class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                    </button>
                                    <div id="calendarDropdown" class="absolute bottom-full left-0 w-full mb-2 bg-white rounded-lg shadow-soft-2 border hidden">
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100">Google Calendar</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100">Outlook Calendar</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100">Download .ICS File</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-xl overflow-hidden shadow-soft-2" data-aos="fade-left" data-aos-delay="100">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.825121415127!2d90.50882501540307!3d23.99999998446864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3754326166a98297%3A0x231a5f67a3f8d8c!2sNarsingdi!5e0!3m2!1sen!2sbd!4v1694186588661!5m2!1sen!2sbd" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
