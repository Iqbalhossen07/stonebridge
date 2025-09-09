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
            style="background-image: url('https://images.unsplash.com/photo-1596524430615-b46475ddff6e?q=80&w=1600&auto=format&fit=crop');">
            <div class="absolute inset-0 bg-slate-900/60 z-0"></div>
            <div class="container mx-auto px-6 relative z-10 text-center text-white">
              <div class="space-y-4" data-aos="fade-up">
                <p class="text-sm font-semibold text-slate-200">
                  <a href="index.html" class="hover:text-primary transition-colors">Home</a> › 
                  <span class="text-primary">Contact Us</span>
                </p>
                <h1 class="font-heading text-4xl md:text-5xl">Get In Touch</h1>
                <p class="max-w-2xl mx-auto text-slate-300">
                  We're here to help. Contact us by phone, email or through our form below.
                </p>
              </div>
            </div>
        </section>

        <section class="py-24 bg-slate-50/50">
            <div class="container mx-auto px-6">
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="card-premium p-8 text-center" data-aos="fade-up">
                        <div class="h-16 w-16 mx-auto rounded-full bg-primary/10 text-primary flex items-center justify-center mb-6"><svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg></div>
                        <h4 class="font-heading text-xl text-slate-800">Our Address</h4>
                        <p class="text-slate-600 mt-2">123 Design Street, Suite 456<br>Dhaka, Bangladesh</p>
                    </div>
                    <div class="card-premium p-8 text-center" data-aos="fade-up" data-aos-delay="100">
                         <div class="h-16 w-16 mx-auto rounded-full bg-primary/10 text-primary flex items-center justify-center mb-6"><svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg></div>
                        <h4 class="font-heading text-xl text-slate-800">Email Us</h4>
                        <a href="mailto:hello@aurelia.com" class="text-slate-600 mt-2 block hover:text-primary">hello@aurelia.com</a>
                    </div>
                    <div class="card-premium p-8 text-center" data-aos="fade-up" data-aos-delay="200">
                         <div class="h-16 w-16 mx-auto rounded-full bg-primary/10 text-primary flex items-center justify-center mb-6"><svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg></div>
                        <h4 class="font-heading text-xl text-slate-800">Call Us</h4>
                        <a href="tel:+8801234567890" class="text-slate-600 mt-2 block hover:text-primary">+880 123 456 7890</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 bg-white">
            <div class="container mx-auto px-6">
                <div class="grid lg:grid-cols-2 gap-12">
                    <div data-aos="fade-right">
    <h3 class="font-heading text-3xl text-slate-800 mb-6">Send us a message</h3>
    <form class="space-y-6">
        <div class="grid sm:grid-cols-2 gap-6">
            <div>
                <label for="firstName" class="block text-sm font-medium text-slate-700 mb-1">First Name</label>
                <input 
                    type="text" 
                    id="firstName" 
                    placeholder="Your First Name" required
                    style="display: block; width: 100%; padding: 0.75rem 1rem; border-radius: 0.5rem; border: 1px solid transparent; background-color: #f1f5f9; transition: all 0.2s ease-in-out;"
                    onfocus="handleInputFocus(this)"
                    onblur="handleInputBlur(this)">
            </div>
            <div>
                <label for="lastName" class="block text-sm font-medium text-slate-700 mb-1">Last Name</label>
                <input 
                    type="text" 
                    id="lastName" 
                    placeholder="Your Last Name" required
                    style="display: block; width: 100%; padding: 0.75rem 1rem; border-radius: 0.5rem; border: 1px solid transparent; background-color: #f1f5f9; transition: all 0.2s ease-in-out;"
                    onfocus="handleInputFocus(this)"
                    onblur="handleInputBlur(this)">
            </div>
        </div>
         <div>
            <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Email</label>
            <input 
                type="email" 
                id="email" 
                placeholder="Your Email Address" required
                style="display: block; width: 100%; padding: 0.75rem 1rem; border-radius: 0.5rem; border: 1px solid transparent; background-color: #f1f5f9; transition: all 0.2s ease-in-out;"
                onfocus="handleInputFocus(this)"
                onblur="handleInputBlur(this)">
        </div>
         <div>
            <label for="message" class="block text-sm font-medium text-slate-700 mb-1">Message</label>
            <textarea 
                id="message" 
                rows="5" 
                placeholder="Your Message" required
                style="display: block; width: 100%; padding: 0.75rem 1rem; border-radius: 0.5rem; border: 1px solid transparent; background-color: #f1f5f9; transition: all 0.2s ease-in-out;"
                onfocus="handleInputFocus(this)"
                onblur="handleInputBlur(this)"></textarea>
        </div>
        <div>
            <button type="submit" class="btn-premium w-full sm:w-auto">Send Message</button>
        </div>
    </form>
</div>
                    <div class="rounded-xl overflow-hidden shadow-soft-2" data-aos="fade-left">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.825121415127!2d90.50882501540307!3d23.99999998446864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3754326166a98297%3A0x231a5f67a3f8d8c!2sNarsingdi!5e0!3m2!1sen!2sbd!4v1694186588661!5m2!1sen!2sbd" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
