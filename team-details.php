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
        <div class="container mx-auto px-6 py-24">
            <div class="lg:grid lg:grid-cols-3 gap-12">
                
                <div class="lg:col-span-1 space-y-8" data-aos="fade-right">
                    <div class="card-premium p-8 text-center">  <img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?q=80&w=250&auto=format&fit=crop" alt="Sunojoy Kumar Roy" class="h-40 w-40 rounded-full object-cover mx-auto mb-6" />
                        <h2 class="font-heading text-3xl text-slate-900 mb-2">Sunojoy Kumar Roy</h2>
                        <p class="text-primary font-semibold mb-6">Solicitor, Barrister & FCILEx</p>
                        
                        <div class="space-y-4 mb-8">
                            <a href="mailto:sunojoy_roy@yahoo.co.uk" class="flex items-center justify-center gap-3 text-slate-600 hover:text-primary transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                <span>sunojoy_roy@yahoo.co.uk</span>
                            </a>
                            <a href="tel:+447985936220" class="flex items-center justify-center gap-3 text-slate-600 hover:text-primary transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                <span>+447985936220</span>
                            </a>
                        </div>
                        <a href="#" class="btn-premium">Book a Consultation</a>
                    </div>
                </div>

                <div class="lg:col-span-2 space-y-12 mt-12 lg:mt-0" data-aos="fade-left">
                    <div class="card-premium p-8">  <h3 class="font-heading text-3xl text-slate-900 mb-6">Biography</h3>
                        <div class="space-y-4 text-slate-700 leading-relaxed">
                            <p><strong>Sunojoy Kumar Roy – Immigration Expert & Legal Specialist</strong></p>
                            <p>Sunojoy Kumar Roy is a distinguished immigration expert with over a decade of experience in UK immigration law. A highly qualified legal professional, he is a <strong>Solicitor of England and Wales</strong>, a <strong>Barrister (Called in 2013)</strong>, and a <strong>Chartered Executive Lawyer</strong>. His extensive credentials also include being a <strong>Level 3 Immigration Adviser</strong>, the highest accreditation granted by the Immigration Advice Authority (IAA), which enables him to provide the highest level of immigration advice and representation.</p>
                            <p>Mr. Roy has an exceptional track record in handling a broad spectrum of immigration matters. He possesses full rights of audience before the Immigration Tribunal, allowing him to represent clients in complex appeals. His expertise spans <strong>asylum cases, British citizenship applications, detention matters, human rights claims, and business migration</strong>, offering strategic and results-driven legal solutions.</p>
                            <p>With a commitment to excellence and a deep understanding of UK immigration policies, Sunojoy Kumar Roy has successfully assisted individuals and businesses in navigating the complexities of immigration law. His dedication to safeguarding clients' rights and securing favourable outcomes has established him as a trusted and highly sought-after legal professional in the field of immigration law.</p>
                        </div>
                    </div>

                    <div class="card-premium p-8">  <h3 class="font-heading text-3xl text-slate-900 mb-6">Research</h3>
                        <div class="space-y-4 text-slate-700 leading-relaxed">
                            <p>Sunojoy Kumar Roy's research focuses on the evolving landscape of UK immigration law, with a particular emphasis on the impact of policy changes on vulnerable populations and the challenges faced by businesses in sponsoring international talent. His recent publications include studies on the effectiveness of asylum appeal mechanisms and the economic contributions of skilled migrants to the UK economy.</p>
                            <p>He is also actively involved in legal advocacy groups, contributing to policy discussions and legal reforms aimed at creating a more equitable and efficient immigration system. His work combines rigorous academic analysis with practical insights drawn from his extensive casework experience.</p>
                        </div>
                    </div>

                    <div class="card-premium p-8">  <h3 class="font-heading text-3xl text-slate-900 mb-6">Qualification</h3>
                        <div class="space-y-4 text-slate-700 leading-relaxed">
                            <p><strong>Sunojoy Kumar Roy holds multiple distinguished legal qualifications and accreditations: He is a Solicitor, Barrister, and Chartered Legal Executive (FCILEx), as well as an Advocate of the Supreme Court of Bangladesh.</strong></p>
                            <p>His academic credentials include:</p>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>LL.B (Hons.) and LL.M from Dhaka University</li>
                                <li>LL.B (Hons.) from University of Northumbria, Newcastle, UK</li>
                                <li>Legal Practice Course (LPC) from the University of Law, UK</li>
                                <li>Master of Laws (LL.M.) in Failed Law from the University of Law, UK</li>
                                <li>Bar Professional Training Course (BPTC), BPP City University, London</li>
                            </ul>
                            <p>He was called to the Bar in 2013 and is a member of Lincoln's Inn.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


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
