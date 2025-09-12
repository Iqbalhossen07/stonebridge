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
<section id="what-is-asylum" class="w-full py-24 overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            
            <div data-aos="fade-right">
                <div class="relative w-full h-[450px] rounded-xl overflow-hidden shadow-soft-2 border border-slate-200">
                    <img src="https://images.unsplash.com/photo-1593113646773-463c64a8a8d1?q=80&w=1974" alt="Seeking refuge" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6 text-white">
                        <h3 class="font-heading text-2xl">A Path to Safety</h3>
                        <p class="mt-1 opacity-90">Providing hope and legal support for those in need.</p>
                    </div>
                </div>
            </div>

            <div data-aos="fade-left">
                <div class="flex border-b border-slate-200 mb-6">
                    <button data-tab-target="#what" class="tab-button active font-heading text-lg px-6 py-3 border-b-2 transition-colors duration-300 focus:outline-none">
                        What is Asylum?
                    </button>
                    <button data-tab-target="#who" class="tab-button font-heading text-lg px-6 py-3 border-b-2 transition-colors duration-300 focus:outline-none">
                        Who Can Claim?
                    </button>
                </div>

                <div>
                    <div id="what" class="tab-panel">
                        <p class="text-lg text-slate-600 leading-relaxed">Asylum is a form of protection granted by a country to someone who has left their home country as a refugee. Under the 1951 Refugee Convention, it is designed for those who have a well-founded fear of persecution and are unable or unwilling to seek protection from their own state.</p>
                    </div>
                    <div id="who" class="tab-panel hidden">
                        <p class="text-lg text-slate-600 leading-relaxed">You can claim asylum in the UK if you fear persecution in your home country because of your:</p>
                        <ul class="mt-4 space-y-3">
                            <li class="flex items-center gap-3"><svg class="h-6 w-6 text-primary shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg><span>Race or Religion</span></li>
                            <li class="flex items-center gap-3"><svg class="h-6 w-6 text-primary shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg><span>Nationality or Political Opinion</span></li>
                            <li class="flex items-center gap-3"><svg class="h-6 w-6 text-primary shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg><span>Membership of a particular social group</span></li>
                        </ul>
                    </div>
                </div>

                <div class="mt-8 pt-6 border-t border-slate-200">
                     <h4 class="font-heading text-xl text-slate-800 mb-4">Key Principles of an Asylum Claim</h4>
                     <div class="space-y-3 text-slate-600">
                        <p><strong class="font-semibold text-slate-700">Credibility:</strong> Your account must be believable and consistent.</p>
                        <p><strong class="font-semibold text-slate-700">Evidence:</strong> Providing evidence strengthens your claim significantly.</p>
                        <p><strong class="font-semibold text-slate-700">Timeliness:</strong> It is crucial to claim asylum as soon as it is safe to do so.</p>
                     </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    // Initialize AOS Animation Library
    AOS.init({ duration: 800, once: true, easing: 'ease-out-cubic' });

    document.addEventListener('DOMContentLoaded', () => {
        
        // --- Tab Functionality ---
        const tabButtons = document.querySelectorAll('.tab-button');
        const tabPanels = document.querySelectorAll('.tab-panel');

        if (tabButtons.length > 0 && tabPanels.length > 0) {
            tabButtons[0].classList.add('border-primary', 'text-primary');
            tabButtons[0].classList.remove('text-slate-500');

            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const targetPanelId = button.getAttribute('data-tab-target');

                    tabButtons.forEach(btn => {
                        btn.classList.remove('border-primary', 'text-primary');
                        btn.classList.add('border-transparent', 'text-slate-500');
                    });

                    button.classList.add('border-primary', 'text-primary');
                    button.classList.remove('border-transparent', 'text-slate-500');
                    
                    tabPanels.forEach(panel => {
                        panel.classList.add('hidden');
                    });

                    const targetPanel = document.querySelector(targetPanelId);
                    if (targetPanel) {
                        targetPanel.classList.remove('hidden');
                    }
                });
            });
        }

        // --- FAQ Accordion Functionality ---
        const faqAccordion = document.getElementById('faq-accordion');
        if (faqAccordion) {
            const accordionItems = faqAccordion.querySelectorAll('.accordion-item');
            accordionItems.forEach(item => {
                const trigger = item.querySelector('.accordion-trigger');
                const content = item.querySelector('.accordion-content');
                const icon = item.querySelector('.accordion-icon');

                if (trigger && content && icon) {
                    content.style.maxHeight = '0';
                    content.style.overflow = 'hidden';
                    content.style.transition = 'max-height 0.3s ease-out';

                    trigger.addEventListener('click', () => {
                        const isActive = item.classList.toggle('active');
                        if (isActive) {
                            content.style.maxHeight = content.scrollHeight + 'px';
                            icon.style.transform = 'rotate(180deg)';
                        } else {
                            content.style.maxHeight = '0';
                            icon.style.transform = 'rotate(0deg)';
                        }
                    });
                }
            });
        }
    });
</script>
<script src="main.js"></script>