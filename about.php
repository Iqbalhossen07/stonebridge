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
    <?php include('header.php') ?>

    <main>
        <section class="relative pt-40 pb-24 bg-cover bg-center min-h-[400px] flex items-center justify-center"
            style="background-image: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YWJvdXQlMjB1c3xlbnwwfHwwfHx8MA%3D%3Dp');">
            <div class="absolute inset-0 bg-slate-900/60 z-0"></div>
            <div class="container mx-auto px-6 relative z-10 text-center text-white">
                <div class="space-y-4" data-aos="fade-up">
                    <p class="text-sm font-semibold text-slate-200">
                        <a href="index.html" class="hover:text-primary transition-colors">Home</a> ›
                        <span class="text-primary">About Us</span>
                    </p>

                    <h1 class="font-heading text-4xl md:text-5xl">About Us</h1>
                    <p class="max-w-2xl mx-auto text-slate-300">
                        Discover our story, our values, and what makes us a trusted partner in your journey.
                    </p>
                </div>
            </div>
        </section>

        <section id="our-story" class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-10 md:gap-16 items-center">

                    <div class="relative overflow-hidden rounded-2xl shadow-xl" data-aos="fade-right">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Our Story Image - Team working together"
                            class="w-full h-80 md:h-96 object-cover object-center">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                    </div>

                    <div class="space-y-6" data-aos="fade-left">
                        <h2 class="text-2xl md:text-4xl font-heading text-slate-900">Our Story: A Journey of Excellence
                            and Trust</h2>
                               <p class="text-slate-700 leading-relaxed">
                         Stonebridge Legal was founded on a simple yet powerful principle: to offer clear and compassionate guidance in the often-complex world of UK immigration. We started as a small, dedicated team with a passion for helping people navigate their legal journeys, and have since grown into a trusted name for clients both in the UK and abroad.
                        </p>
                        <p class="text-slate-700 leading-relaxed">
                            At Stonebridge Legal, our journey began with a clear vision: to provide unparalleled legal
                            guidance and support. Founded on the principles of integrity, expertise, and client-first
                            service, we've grown from a passionate team into a trusted name in the legal landscape.
                        </p>
                     
                        <div>
                            <a href="#" class="btn-premium mt-4">Discover More</a>
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

                    <div class="bg-white p-8 rounded-2xl shadow-md border border-slate-100 flex items-start gap-6 transition-all duration-300 hover:shadow-lg hover:-translate-y-1"
                        data-aos="fade-up" data-aos-delay="200">
                        <div
                            class="h-16 w-16 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-heading text-xl text-slate-800 mb-2">Smart Dispatching</h4>
                            <p class="text-slate-600 leading-relaxed text-sm">Assign jobs in one click and track their
                                progress in real time.</p>
                        </div>
                    </div>

                    <div class="bg-white p-8 rounded-2xl shadow-md border border-slate-100 flex items-start gap-6 transition-all duration-300 hover:shadow-lg hover:-translate-y-1"
                        data-aos="fade-up" data-aos-delay="300">
                        <div
                            class="h-16 w-16 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M10 12l2 2 4-4" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-heading text-xl text-slate-800 mb-2">Technician Management</h4>
                            <p class="text-slate-600 leading-relaxed text-sm">Easily assign the right tasks to the right
                                people with clear insights.</p>
                        </div>
                    </div>

                    <div class="bg-white p-8 rounded-2xl shadow-md border border-slate-100 flex items-start gap-6 transition-all duration-300 hover:shadow-lg hover:-translate-y-1"
                        data-aos="fade-up" data-aos-delay="400">
                        <div
                            class="h-16 w-16 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-heading text-xl text-slate-800 mb-2">Hassle-Free Invoicing</h4>
                            <p class="text-slate-600 leading-relaxed text-sm">Automate invoice creation and tracking for
                                seamless management.</p>
                        </div>
                    </div>

                    <div class="bg-white p-8 rounded-2xl shadow-md border border-slate-100 flex items-start gap-6 transition-all duration-300 hover:shadow-lg hover:-translate-y-1"
                        data-aos="fade-up" data-aos-delay="500">
                        <div
                            class="h-16 w-16 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-heading text-xl text-slate-800 mb-2">Live Tracking</h4>
                            <p class="text-slate-600 leading-relaxed text-sm">Get instant updates and keep full
                                visibility on every operation.</p>
                        </div>
                    </div>

                    <div class="bg-white p-8 rounded-2xl shadow-md border border-slate-100 flex items-start gap-6 transition-all duration-300 hover:shadow-lg hover:-translate-y-1"
                        data-aos="fade-up" data-aos-delay="600">
                        <div
                            class="h-16 w-16 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.125 1.125 0 01.792-.332h3.293a2.707 2.707 0 002.707-2.707V12.751c0-1.6-1.123-2.994-2.707-3.227A48.344 48.344 0 0012 9c-2.31 0-4.52.324-6.598.902-1.684.433-2.707 1.626-2.707 3.228z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-heading text-xl text-slate-800 mb-2">Customer Communication</h4>
                            <p class="text-slate-600 leading-relaxed text-sm">Keep clients informed with automated
                                updates and direct communication.</p>
                        </div>
                    </div>

                    <div class="bg-white p-8 rounded-2xl shadow-md border border-slate-100 flex items-start gap-6 transition-all duration-300 hover:shadow-lg hover:-translate-y-1"
                        data-aos="fade-up" data-aos-delay="700">
                        <div
                            class="h-16 w-16 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1.5-1.5m1.5 1.5l1.5-1.5m0 0l-1.5 1.5m1.5-1.5l1.5 1.5M3.75 5.25h16.5" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-heading text-xl text-slate-800 mb-2">Insightful Reports</h4>
                            <p class="text-slate-600 leading-relaxed text-sm">Make data-driven decisions with
                                comprehensive reports on performance.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="achievements-bars" class="relative py-24 bg-white overflow-hidden">
            <div aria-hidden="true" class="absolute inset-0 z-0 opacity-40">
                <svg class="absolute top-0 left-0 w-full h-auto" viewBox="0 0 1440 900" fill="none"
                    xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
                    <path d="M0 200C0 200 360 400 720 200C1080 0 1440 200 1440 200V900H0V200Z"
                        fill="url(#paint0_linear_wave_achievements_2)" />
                    <path d="M0 150C0 150 360 300 720 150C1080 0 1440 150 1440 150V900H0V150Z"
                        fill="url(#paint1_linear_wave_achievements_2)" style="mix-blend-mode: overlay" />
                    <defs>
                        <linearGradient id="paint0_linear_wave_achievements_2" x1="720" y1="0" x2="720" y2="900"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#87550D" stop-opacity="0.05" />
                            <stop offset="1" stop-color="#87550D" stop-opacity="0" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_wave_achievements_2" x1="720" y1="0" x2="720" y2="900"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#87550D" stop-opacity="0.1" />
                            <stop offset="1" stop-color="#87550D" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="grid lg:grid-cols-2 gap-16 items-center">

                    <div class="space-y-6" data-aos="fade-right">
                        <h2 class="font-heading text-3xl md:text-4xl text-slate-900 leading-tight">Proven Expertise,
                            Measurable Success</h2>
                        <p class="text-slate-700 leading-relaxed">
                            Our success is not just in the cases we win, but in the trust we build and the futures we
                            secure. These numbers represent our unwavering commitment to excellence and client
                            satisfaction over the years.
                        </p>
                        <p class="text-slate-700 leading-relaxed">
                            These metrics are a direct reflection of our meticulous approach, our deep understanding of
                            the law, and the dedicated effort we invest in every client's case. We believe in
                            transparency and results you can see.
                        </p>
                        <div>
                            <a href="#" class="btn-premium mt-4">Discover More</a>
                        </div>
                    </div>

                    <div class="space-y-8" data-aos="fade-left" data-aos-delay="100">
                        <div>
                            <div class="flex justify-between items-center mb-2 font-semibold text-slate-700">
                                <span>Cases Successfully Closed</span>
                                <span class="font-heading text-primary">1,500+</span>
                            </div>
                            <div class="bg-primary/10 rounded-full h-3 w-full">
                                <div class="progress-bar bg-primary rounded-full h-3" data-width="95%"
                                    style="width: 0%; transition: width 2s ease-out;"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between items-center mb-2 font-semibold text-slate-700">
                                <span>Client Satisfaction Rate</span>
                                <span class="font-heading text-primary">99%</span>
                            </div>
                            <div class="bg-primary/10 rounded-full h-3 w-full">
                                <div class="progress-bar bg-primary rounded-full h-3" data-width="99%"
                                    style="width: 0%; transition: width 2s ease-out 0.2s;"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between items-center mb-2 font-semibold text-slate-700">
                                <span>Years of Collective Experience</span>
                                <span class="font-heading text-primary">15+</span>
                            </div>
                            <div class="bg-primary/10 rounded-full h-3 w-full">
                                <div class="progress-bar bg-primary rounded-full h-3" data-width="85%"
                                    style="width: 0%; transition: width 2s ease-out 0.4s;"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between items-center mb-2 font-semibold text-slate-700">
                                <span>Awards & Recognitions</span>
                                <span class="font-heading text-primary">25+</span>
                            </div>
                            <div class="bg-primary/10 rounded-full h-3 w-full">
                                <div class="progress-bar bg-primary rounded-full h-3" data-width="90%"
                                    style="width: 0%; transition: width 2s ease-out 0.6s;"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>







        <section id="why-stonebridge" class="py-24 bg-slate-50/50">
            <div class="container mx-auto px-6">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="font-heading text-3xl md:text-4xl text-slate-900" data-aos="fade-up">Why Stonebridge?
                    </h2>
                    <p class="text-lg text-slate-600 mt-4" data-aos="fade-up" data-aos-delay="100">Discover the core
                        reasons why clients trust Stonebridge for their legal and advisory needs.</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <div class="card-premium p-8 flex flex-col items-center text-center group" data-aos="fade-up"
                        data-aos-delay="100">
                        <div
                            class="h-16 w-16 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 mb-6 shadow-sm">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M12 19.586V17M12 4.414V7M7 12h10">
                                </path>
                            </svg>
                        </div>
                        <h4 class="font-heading text-xl text-slate-800 mb-3">Expert Guidance</h4>
                        <p class="text-slate-600 leading-relaxed flex-grow">Benefit from the knowledge of our highly
                            accredited and experienced legal professionals.</p>
                    </div>

                    <div class="card-premium p-8 flex flex-col items-center text-center group" data-aos="fade-up"
                        data-aos-delay="200">
                        <div
                            class="h-16 w-16 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 mb-6 shadow-sm">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h4 class="font-heading text-xl text-slate-800 mb-3">Tailored Solutions</h4>
                        <p class="text-slate-600 leading-relaxed flex-grow">We provide personalized strategies designed
                            to meet your specific needs and goals.</p>
                    </div>

                    <div class="card-premium p-8 flex flex-col items-center text-center group" data-aos="fade-up"
                        data-aos-delay="300">
                        <div
                            class="h-16 w-16 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 mb-6 shadow-sm">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="font-heading text-xl text-slate-800 mb-3">Proven Track Record</h4>
                        <p class="text-slate-600 leading-relaxed flex-grow">A history of successful outcomes and
                            satisfied clients speaks for itself.</p>
                    </div>

                    <div class="card-premium p-8 flex flex-col items-center text-center group" data-aos="fade-up"
                        data-aos-delay="400">
                        <div
                            class="h-16 w-16 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 mb-6 shadow-sm">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H2m2-5h10M7 9l4-4 4 4M7 13l4 4 4-4"></path>
                            </svg>
                        </div>
                        <h4 class="font-heading text-xl text-slate-800 mb-3">Client-Centric Approach</h4>
                        <p class="text-slate-600 leading-relaxed flex-grow">Your success is our priority. We are
                            dedicated to providing attentive and responsive service.</p>
                    </div>

                    <div class="card-premium p-8 flex flex-col items-center text-center group" data-aos="fade-up"
                        data-aos-delay="500">
                        <div
                            class="h-16 w-16 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 mb-6 shadow-sm">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12.76V6.24M15 12.76V6.24M12 18.26V11.74M12 5.74V2.26M5 12H2M19 12h3M12 21.74V18.26M12 2v3.48">
                                </path>
                            </svg>
                        </div>
                        <h4 class="font-heading text-xl text-slate-800 mb-3">Transparent Process</h4>
                        <p class="text-slate-600 leading-relaxed flex-grow">We believe in clear communication and
                            provide honest advice every step of the way.</p>
                    </div>

                    <div class="card-premium p-8 flex flex-col items-center text-center group" data-aos="fade-up"
                        data-aos-delay="600">
                        <div
                            class="h-16 w-16 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 mb-6 shadow-sm">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="font-heading text-xl text-slate-800 mb-3">Utmost Confidentiality</h4>
                        <p class="text-slate-600 leading-relaxed flex-grow">Your privacy is paramount. We handle all
                            cases with the strictest confidentiality.</p>
                    </div>
                </div>
            </div>
        </section>

  

        <!-- faq section start -->

        <section id="faq" class="relative py-24 bg-slate-50/50 overflow-hidden">

            <div aria-hidden="true" class="absolute inset-0 z-0 opacity-60">
                <svg class="absolute top-0 left-0 w-full h-auto" viewBox="0 0 1440 900" fill="none"
                    xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
                    <path d="M0 200C0 200 360 400 720 200C1080 0 1440 200 1440 200V900H0V200Z"
                        fill="url(#paint0_linear_wave_faq)" />
                    <path d="M0 150C0 150 360 300 720 150C1080 0 1440 150 1440 150V900H0V150Z"
                        fill="url(#paint1_linear_wave_faq)" style="mix-blend-mode: overlay" />
                    <defs>
                        <linearGradient id="paint0_linear_wave_faq" x1="720" y1="0" x2="720" y2="900"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#87550D" stop-opacity="0.05" />
                            <stop offset="1" stop-color="#87550D" stop-opacity="0" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_wave_faq" x1="720" y1="0" x2="720" y2="900"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#87550D" stop-opacity="0.1" />
                            <stop offset="1" stop-color="#87550D" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h3 class="font-heading text-lg font-semibold text-primary tracking-widest uppercase mb-2"
                        data-aos="fade-up">FAQ</h3>
                    <h2 class="font-heading text-4xl md:text-5xl text-slate-900 leading-tight" data-aos="fade-up"
                        data-aos-delay="100">Frequently Asked Questions</h2>
                    <p class="text-slate-600 mt-4 text-lg" data-aos="fade-up" data-aos-delay="200">
                        Have questions? We've got answers. If you can't find what you're looking for, feel free to
                        contact us.
                    </p>
                </div>

                <div class="max-w-4xl mx-auto space-y-4" data-aos="fade-up" data-aos-delay="300">

                    <div class="faq-item bg-white border border-slate-200 rounded-xl overflow-hidden shadow-soft-1">
                        <button class="faq-trigger flex justify-between items-center w-full text-left p-6">
                            <span class="font-heading text-lg text-slate-800">What is a Sponsorship Licence?</span>
                            <div class="faq-icon h-6 w-6 text-slate-500 shrink-0">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4v16m8-8H4"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content">
                            <p class="px-6 pb-6 text-slate-600 leading-relaxed">
                                A Sponsorship Licence allows UK-based businesses to hire skilled workers from outside
                                the European Economic Area (EEA). It is a mandatory requirement set by the Home Office
                                for employers wishing to sponsor non-EEA nationals under routes like the Skilled Worker
                                visa.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item bg-white border border-slate-200 rounded-xl overflow-hidden shadow-soft-1">
                        <button class="faq-trigger flex justify-between items-center w-full text-left p-6">
                            <span class="font-heading text-lg text-slate-800">How long does an application take?</span>
                            <div class="faq-icon h-6 w-6 text-slate-500 shrink-0">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4v16m8-8H4"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content">
                            <p class="px-6 pb-6 text-slate-600 leading-relaxed">
                                Application processing times can vary depending on the type of visa and the complexity
                                of the case. Standard applications can take several weeks to a few months. We always
                                provide an estimated timeline based on the specific circumstances of your case.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- faq section end -->

      <!-- CTA -->
       <?php include('cta.php') ?>
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
                            otherItem.querySelector('.faq-content').style.maxHeight =
                                null;
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

    document.addEventListener('DOMContentLoaded', () => {
        const achievementsSection = document.getElementById('achievements-bars');
        const progressBars = document.querySelectorAll('#achievements-bars .progress-bar');

        if (achievementsSection && progressBars.length > 0) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        progressBars.forEach(bar => {
                            const targetWidth = bar.getAttribute('data-width');
                            bar.style.width = targetWidth;
                        });
                        observer.unobserve(achievementsSection); // Animate only once
                    }
                });
            }, {
                threshold: 0.5 // Trigger when 50% of the section is visible
            });

            observer.observe(achievementsSection);
        }
    });
    </script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="main.js"></script>

</body>

</html>