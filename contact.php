<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Stonebridge Legal — Premium Studio</title>
    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600&family=Merriweather:wght@700;800&display=swap"
        rel="stylesheet" />
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
        <div
            class="absolute -top-32 -left-24 h-80 w-80 rounded-full blur-3xl opacity-50 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-primary/25 via-primary/10 to-transparent">
        </div>
        <div
            class="absolute top-40 -right-24 h-96 w-96 rounded-full blur-3xl opacity-40 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-amber-400/20 via-amber-400/0 to-transparent">
        </div>
        <div class="absolute inset-0 noise"></div>
    </div>

    <!-- Header -->
    <header class="fixed inset-x-0 top-0 z-50">
        <div class="hidden md:block text-sm py-2 bg-primary text-white">
            <div class="container mx-auto px-6 flex items-center justify-between">

                <div class="flex items-center gap-6">
                    <a href="mailto:info@stonebridgelegal.co.uk"
                        class="flex items-center gap-2 hover:opacity-80 transition-opacity">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                            </path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <span>info@stonebridgelegal.co.uk</span>
                    </a>
                    <a href="tel:+447988138221" class="flex items-center gap-2 hover:opacity-80 transition-opacity">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg>
                        <span>+447988138221</span>
                    </a>
                </div>

                <div class="flex items-center gap-4">
                    <a href="#login" class="hover:opacity-80 transition-opacity">Login</a>
                    <a href="#register"
                        class="px-3 py-1 text-xs border border-white/50 rounded-full hover:bg-white/10 transition-colors">Register</a>
                </div>

            </div>
        </div>
        <div id="navWrap" class="transition-all bg-white/70 backdrop-blur-xl border-b shadow-soft-1">
            <div class="h-0.5 bg-primary/30" id="progressBar" style="width:0%"></div>
            <nav class="container mx-auto px-6 flex items-center justify-between py-4">
                <a href="#" class="inline-flex items-center gap-2">
                    <img class="w-1/6" src="img/logo.png" alt="">
                </a>
                <ul class="hidden md:flex items-center gap-8 font-semibold">
                    <li><a href="#" class="text-sm tracking-wide hover:text-primary  transition-colors">Home</a></li>
                    <li><a href="#about" class="text-sm tracking-wide hover:text-primary  transition-colors">About</a>
                    </li>
                    <li><a href="#services"
                            class="text-sm tracking-wide hover:text-primary transition-colors">Services</a></li>
                    <li><a href="#why-us" class="text-sm tracking-wide hover:text-primary transition-colors">Why Us</a>
                    </li>
                    <li><a href="#gallery"
                            class="text-sm tracking-wide hover:text-primary transition-colors">Gallery</a></li>
                    <li><a href="#team" class="text-sm tracking-wide hover:text-primary transition-colors">Team</a></li>
                    <li><a href="#blog" class="text-sm tracking-wide hover:text-primary transition-colors">Blog</a></li>
                    <li><a href="#cta" class="text-sm tracking-wide hover:text-primary transition-colors">Contact</a>
                    </li>
                </ul>
                <div class="hidden md:flex items-center gap-3">
                    <a href="#cta" class="btn-premium">Get Started</a>
                </div>
                <button id="menuBtn" class="md:hidden p-2 rounded-md border" aria-label="Toggle menu">☰</button>
            </nav>
            <div id="mobileMenu" class="hidden md:hidden border-t bg-white/80 backdrop-blur-xl">
                <div class="container mx-auto px-6 py-4">
                    <ul class="grid gap-3">
                        <li><a href="#about" class="block px-3 py-2 rounded-md hover:bg-slate-100">About</a></li>
                        <li><a href="#services" class="block px-3 py-2 rounded-md hover:bg-slate-100">Services</a></li>
                        <li><a href="#why-us" class="block px-3 py-2 rounded-md hover:bg-slate-100">Why Us</a></li>
                        <li><a href="#gallery" class="block px-3 py-2 rounded-md hover:bg-slate-100">Gallery</a></li>
                        <li><a href="#team" class="block px-3 py-2 rounded-md hover:bg-slate-100">Team</a></li>
                        <li><a href="#blog" class="block px-3 py-2 rounded-md hover:bg-slate-100">Blog</a></li>
                        <li><a href="#cta" class="block text-center px-3 py-2 rounded-md bg-primary text-white">Get
                                Started</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

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
<footer class="relative bg-slate-900 pt-24 text-slate-300">

  
  
  <div aria-hidden="true" class="absolute top-0 inset-x-0 h-24">
    <svg class="w-full h-full" viewBox="0 0 1440 100" preserveAspectRatio="none" fill="currentColor" >
       <path class="text-slate-900" d="M0 100 C 500 100 800 0 1440 100 Z"></path>
    </svg>
  </div>

  <div class="container mx-auto px-6 relative z-10">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
      
      <div class="space-y-4">
        <a href="#" class="inline-flex items-center gap-2">
      <img class="w-1/3" src="img/logo.png" alt="">
        </a>
        <p class="text-slate-400 max-w-xs">
          Crafting modern digital experiences with elegant details and performance-first builds.
        </p>
        <div class="flex space-x-4 pt-2">
          <a href="#" aria-label="Twitter" class="social-link-footer"><svg viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor"><path d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 2.9,4.79C2.53,5.42 2.33,6.16 2.33,6.94C2.33,8.43 3.1,9.78 4.22,10.59C3.47,10.57 2.78,10.36 2.17,10.03C2.17,10.05 2.17,10.07 2.17,10.08C2.17,12.19 3.65,13.95 5.6,14.34C5.24,14.44 4.86,14.5 4.47,14.5C4.2,14.5 3.93,14.47 3.67,14.42C4.22,16.14 5.8,17.38 7.69,17.42C6.23,18.55 4.41,19.23 2.42,19.23C2.08,19.23 1.75,19.21 1.42,19.16C3.34,20.43 5.65,21.23 8.13,21.23C16,21.23 20.33,14.41 20.33,8.79C20.33,8.62 20.33,8.45 20.32,8.28C21.17,7.69 21.89,6.9 22.46,6Z"></path></svg></a>
          <a href="#" aria-label="LinkedIn" class="social-link-footer"><svg viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor"><path d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H19M18.5,18.5V13.2A3.26,3.26 0 0,0 15.24,9.94C14.39,9.94 13.4,10.43 12.9,11.2V10.13H10.13V18.5H12.9V13.57C12.9,12.8 13.54,12.17 14.31,12.17C15.08,12.17 15.72,12.8 15.72,13.57V18.5H18.5M6.88,8.56A1.68,1.68 0 0,0 8.56,6.88C8.56,6 8,5.19 6.88,5.19C5.76,5.19 5.19,6 5.19,6.88C5.19,7.77 5.76,8.56 6.88,8.56M8.27,18.5V10.13H5.5V18.5H8.27Z"></path></svg></a>
          <a href="#" aria-label="Instagram" class="social-link-footer"><svg viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor"><path d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z"></path></svg></a>
        </div>
      </div>

      <div class="lg:mx-auto">
        <h4 class="font-heading text-lg text-white mb-4">Quick Links</h4>
        <ul class="space-y-3">
          <li><a href="#about" class="footer-link">About Us</a></li>
          <li><a href="#services" class="footer-link">Services</a></li>
          <li><a href="#team" class="footer-link">Our Team</a></li>
          <li><a href="#blog" class="footer-link">Blog</a></li>
          <li><a href="#contact" class="footer-link">Contact</a></li>
        </ul>
      </div>

      <div class="lg:mx-auto">
        <h4 class="font-heading text-lg text-white mb-4">Contact Us</h4>
        <ul class="space-y-4">
          <li class="flex items-start gap-3">
            <svg class="h-5 w-5 text-primary shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            <span>123 Design Street, Suite 456, Dhaka, Bangladesh</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="h-5 w-5 text-primary shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            <a href="mailto:hello@aurelia.com" class="footer-link">hello@aurelia.com</a>
          </li>
          <li class="flex items-start gap-3">
            <svg class="h-5 w-5 text-primary shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
            <a href="tel:+8801234567890" class="footer-link">+880 123 456 7890</a>
          </li>
        </ul>
      </div>

      <div>
        <h4 class="font-heading text-lg text-white mb-4">Join Our Newsletter</h4>
        <p class="text-slate-400 mb-4">Get the latest updates on design trends and company news.</p>
        <form class="flex flex-col sm:flex-row gap-2">
          <input type="email" placeholder="Enter your email" class="w-full px-4 py-2.5 rounded-md bg-slate-800 border-slate-700 focus:ring-primary focus:border-primary text-white" required />
          <button type="submit" class="btn-premium shrink-0">Subscribe</button>
        </form>
      </div>

    </div>

    <div class="mt-16 pt-8 border-t border-slate-700 text-center sm:text-left sm:flex sm:justify-between text-slate-400 text-sm">
      <p>&copy; <span id="footerYear"></span> Stonebridge Legal. All Rights Reserved.</p>
      <div class="mt-4 sm:mt-0 space-x-6">
        <a href="#" class="footer-link">Privacy Policy</a>
        <a href="#" class="footer-link">Terms of Service</a>
      </div>
    </div>
  </div>
</footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="main.js"></script>
</body>
</html>