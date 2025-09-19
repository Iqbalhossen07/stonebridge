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
    <style>
    /* --- Timeline Section Styles --- */
    .timeline-container {
        position: relative;
        max-width: 48rem;
        /* max-w-3xl */
        margin: 0 auto;
    }

    /* The vertical line */
    .timeline-container::after {
        content: '';
        position: absolute;
        width: 3px;
        background-color: #e2e8f0;
        /* slate-200 */
        top: 0;
        bottom: 0;
        left: 50%;
        margin-left: -1.5px;
    }

    .timeline-item {
        padding: 1rem 2.5rem;
        position: relative;
        width: 50%;
    }

    /* The circle on the timeline */
    .timeline-item::after {
        content: '';
        position: absolute;
        width: 1.25rem;
        /* w-5 */
        height: 1.25rem;
        /* h-5 */
        right: -0.625rem;
        /* -(w-5/2) */
        background-color: white;
        border: 4px solid var(--tw-color-primary, #87550D);
        top: 1.5rem;
        border-radius: 9999px;
        /* rounded-full */
        z-index: 1;
    }

    .timeline-item:not(.timeline-item-right) {
        left: 0;
    }

    .timeline-item-right {
        left: 50%;
    }

    .timeline-item-right::after {
        left: -0.625rem;
    }

    .timeline-content {
        padding: 1.5rem;
        background-color: white;
        border-radius: 0.75rem;
        /* rounded-xl */
        box-shadow: 0 6px 24px -8px rgba(0, 0, 0, .15);
        /* shadow-soft-1 */
        border: 1px solid #f1f5f9;
        /* slate-100 */
        position: relative;
    }

    .timeline-item-right .timeline-content {
        text-align: left;
    }

    .timeline-item:not(.timeline-item-right) .timeline-content {
        text-align: right;
    }

    .timeline-step {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        background-color: var(--tw-color-primary, #87550D);
        color: white;
        border-radius: 9999px;
        font-size: 0.75rem;
        /* text-xs */
        font-weight: 600;
        margin-bottom: 0.75rem;
    }

    .timeline-title {
        font-family: 'Merriweather', serif;
        /* font-heading */
        font-size: 1.25rem;
        /* text-xl */
        color: #1e293b;
        /* slate-800 */
    }

    .timeline-text {
        font-size: 1rem;
        /* text-base */
        color: #475569;
        /* slate-600 */
        margin-top: 0.5rem;
    }

    /* Responsive styles for mobile */
    @media (max-width: 768px) {
        .timeline-container::after {
            left: 0.875rem;
            /* closer to the left */
        }

        .timeline-item {
            width: 100%;
            padding-left: 3rem;
            /* space for the line and dot */
            padding-right: 0;
        }

        .timeline-item-right {
            left: 0%;
        }

        .timeline-item::after,
        .timeline-item-right::after {
            left: 0.25rem;
        }

        .timeline-item:not(.timeline-item-right) .timeline-content,
        .timeline-item-right .timeline-content {
            text-align: left;
        }
    }


    .tab-button {
        width: 100%;
        text-align: left;
        padding: 0.75rem 1rem;
        border-radius: 0.5rem;
        font-weight: 600;
        color: #475569;
        transition: all 0.2s;
    }

    .tab-button.active,
    .tab-button:hover {
        background-color: var(--tw-color-primary, #87550D);
        color: white;
    }

    .tab-panel {
        animation: fadeIn 0.5s;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }


    /* --- Definitive Contact Form Input Styles --- */
    .form-input {
        display: block;
        width: 100%;
        padding: 0.75rem 1rem;
        border-radius: 0.5rem;
        /* rounded-lg */
        background-color: #ffffff;
        /* Clean white background */
        border: 1px solid #cbd5e1;
        /* Visible slate-300 border */
        transition: border-color 0.2s, box-shadow 0.2s;
        -webkit-appearance: none;
        /* Removes default OS styling on select/date */
        -moz-appearance: none;
        appearance: none;
    }

    .form-input:focus {
        outline: none;
        border-color: var(--tw-color-primary, #87550D);
        /* Primary color border on focus */
        box-shadow: 0 0 0 3px rgba(135, 85, 13, 0.2);
        /* Primary color ring on focus */
    }

    /* Add custom arrow for select dropdown */
    select.form-input {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%2364748b' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
        background-position: right 0.5rem center;
        background-repeat: no-repeat;
        background-size: 1.5em 1.5em;
        padding-right: 2.5rem;
    }
    </style>

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
        <section class="py-24 pt-32 md:pt-52 bg-slate-50 relative overflow-hidden">
            <div aria-hidden="true" class="absolute inset-0 z-0 opacity-40">
                <svg class="absolute top-0 left-0 w-full h-auto" viewBox="0 0 1440 900" fill="none"
                    xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
                    <path d="M0 200C0 200 360 400 720 200C1080 0 1440 200 1440 200V900H0V200Z"
                        fill="url(#paint0_linear_wave_psw)" />
                    <path d="M0 150C0 150 360 300 720 150C1080 0 1440 150 1440 150V900H0V150Z"
                        fill="url(#paint1_linear_wave_psw)" style="mix-blend-mode: overlay" />
                    <defs>
                        <linearGradient id="paint0_linear_wave_psw" x1="720" y1="0" x2="720" y2="900"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#87550D" stop-opacity="0.05" />
                            <stop offset="1" stop-color="#87550D" stop-opacity="0" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_wave_psw" x1="720" y1="0" x2="720" y2="900"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#87550D" stop-opacity="0.1" />
                            <stop offset="1" stop-color="#87550D" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>

            <div class="container mx-auto px-6 relative z-10 grid lg:grid-cols-2 items-center gap-12">
                <div data-aos="fade-right">
                    <p
                        class="inline-flex items-center gap-2 px-4 py-2 bg-primary/10 text-primary text-sm font-semibold rounded-full mb-6">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        UK Graduate Route (PSW)
                    </p>
                    <h1 class="font-heading text-2xl md:text-4xl text-slate-900 leading-tight mb-6">
                        Launch your UK career <br> with confidence
                    </h1>
                    <p class="max-w-xl text-slate-700 text-sm md:text-lg mb-8">
                        The Post-Study Work (Graduate Route) lets international students stay in the UK after
                        graduation to work, gain experience, and explore opportunities. Here's everything
                        you need—clear, concise, and student-friendly.
                    </p>
                    <div class="flex items-center gap-4">
                        <a href="#enquiry-form" class="btn-premium">Enquire now</a>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-6" data-aos="fade-left">
                    <div class="card-premium p-6">
                        <div class="h-10 w-10 bg-orange-100 rounded-md flex items-center justify-center mb-3">
                            <svg class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="font-heading text-xl text-slate-800 mb-1">2-3 Years</h3>
                        <p class="text-slate-600 text-sm">Stay after graduation</p>
                    </div>
                    <div class="card-premium p-6">
                        <div class="h-10 w-10 bg-orange-100 rounded-md flex items-center justify-center mb-3">
                            <svg class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 13.255A23.582 23.582 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 10h.01">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-heading text-xl text-slate-800 mb-1">Any Job</h3>
                        <p class="text-slate-600 text-sm">No sponsor required</p>
                    </div>
                    <div class="card-premium p-6">
                        <div class="h-10 w-10 bg-orange-100 rounded-md flex items-center justify-center mb-3">
                            <svg class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-heading text-xl text-slate-800 mb-1">Earn & Grow</h3>
                        <p class="text-slate-600 text-sm">Build experience</p>
                    </div>
                    <div class="card-premium p-6">
                        <div class="h-10 w-10 bg-orange-100 rounded-md flex items-center justify-center mb-3">
                            <svg class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="font-heading text-xl text-slate-800 mb-1">Simple Path</h3>
                        <p class="text-slate-600 text-sm">Clear steps to apply</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="what-is-psw" class="py-24 bg-white">
            <div class="container mx-auto px-6">
                <div class="grid lg:grid-cols-2 gap-12 items-center">

                    <div data-aos="fade-right">
                        <div class="rounded-xl overflow-hidden shadow-soft-3">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=1600&auto=format&fit=crop"
                                alt="International students celebrating graduation in the UK"
                                class="w-full h-auto object-cover">
                        </div>
                    </div>

                    <div data-aos="fade-left">
                        <h3 class="font-heading text-lg font-semibold text-primary tracking-widest uppercase mb-2">THE
                            GRADUATE ROUTE</h3>
                        <h2 class="font-heading text-2xl md:text-4xl text-slate-900 leading-tight mb-6">What is the PSW
                            Visa?</h2>
                        <div class="space-y-4 text-slate-600 leading-relaxed text-sm md:text-lg">
                            <p>
                                The Graduate Route, commonly known as the Post-Study Work (PSW) visa, allows
                                international students who have successfully completed an eligible UK degree to stay and
                                work, or look for work, for a period of two years (three years for PhD graduates) after
                                their studies.
                            </p>
                            <p>
                                This visa offers a fantastic opportunity for graduates to gain valuable work experience
                                in the UK, build professional networks, and potentially switch to a long-term work visa
                                without needing a sponsor for this initial period.
                            </p>
                            <ul class="space-y-3 pt-4">
                                <li class="flex items-start gap-3">
                                    <svg class="h-6 w-6 text-primary shrink-0 mt-1" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-slate-700">Gain valuable UK work experience.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="h-6 w-6 text-primary shrink-0 mt-1" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-slate-700">Work in almost any job at any skill level.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="h-6 w-6 text-primary shrink-0 mt-1" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-slate-700">No job offer or sponsorship required to apply.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section id="eligibility" class="relative py-24 bg-white overflow-hidden">

            <div aria-hidden="true" class="absolute inset-0 z-0">
                <svg class="absolute bottom-0 left-0 w-full h-full" viewBox="0 0 1440 600" preserveAspectRatio="none"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 600V200C240 133.333 480 66.6667 720 0C960 66.6667 1200 133.333 1440 200V600H0Z"
                        fill="url(#paint0_linear_eligibility_wave)" />
                    <defs>
                        <linearGradient id="paint0_linear_eligibility_wave" x1="720" y1="0" x2="720" y2="600"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F8FAFC" />
                            <stop offset="1" stop-color="white" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h3 class="font-heading text-lg font-semibold text-primary tracking-widest uppercase mb-2"
                        data-aos="fade-up">ELIGIBILITY</h3>
                    <h2 class="font-heading text-2xl md:text-4xl text-slate-900 leading-tight" data-aos="fade-up"
                        data-aos-delay="100">Who is eligible?</h2>
                    <p class="text-slate-600 mt-4 text-sm md:text-lg" data-aos="fade-up" data-aos-delay="200">A quick checklist to
                        confirm you can apply.</p>
                </div>

                <div class="max-w-8xl mx-auto grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-aos="fade-up"
                    data-aos-delay="300">

                    <div
                        class="bg-white p-6 rounded-2xl shadow-soft-1 border border-slate-100 flex items-start gap-4 transition-transform hover:-translate-y-1">
                        <div class="text-primary mt-1 shrink-0"><svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg></div>
                        <p class="text-slate-700 text-sm md:text-lg">Completed an eligible UK degree (e.g., Bachelor's, Master's, PhD)</p>
                    </div>
                    <div
                        class="bg-white p-6 rounded-2xl shadow-soft-1 border border-slate-100 flex items-start gap-4 transition-transform hover:-translate-y-1">
                        <div class="text-primary mt-1 shrink-0"><svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg></div>
                        <p class="text-slate-700 text-sm md:text-lg">Held a valid Student visa at the time of course completion</p>
                    </div>
                    <div
                        class="bg-white p-6 rounded-2xl shadow-soft-1 border border-slate-100 flex items-start gap-4 transition-transform hover:-translate-y-1">
                        <div class="text-primary mt-1 shrink-0"><svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg></div>
                        <p class="text-slate-700 text-sm md:text-lg">Applied from within the UK</p>
                    </div>
                    <div
                        class="bg-white p-6 rounded-2xl shadow-soft-1 border border-slate-100 flex items-start gap-4 transition-transform hover:-translate-y-1">
                        <div class="text-primary mt-1 shrink-0"><svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg></div>
                        <p class="text-slate-700 text-sm md:text-lg">University has reported your successful completion to the Home Office
                        </p>
                    </div>
                    <div
                        class="bg-white p-6 rounded-2xl shadow-soft-1 border border-slate-100 flex items-start gap-4 transition-transform hover:-translate-y-1">
                        <div class="text-primary mt-1 shrink-0"><svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg></div>
                        <p class="text-slate-700 text-sm md:text-lg">Valid passport and BRP (if applicable)</p>
                    </div>
                    <div
                        class="bg-white p-6 rounded-2xl shadow-soft-1 border border-slate-100 flex items-start gap-4 transition-transform hover:-translate-y-1">
                        <div class="text-primary mt-1 shrink-0"><svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg></div>
                        <p class="text-slate-700 text-sm md:text-lg">No requirement for job offer or minimum salary</p>
                    </div>

                </div>
            </div>
        </section>




        <section id="application-process" class="relative py-24 bg-slate-50/50 overflow-hidden">



            <div class="container mx-auto px-6 relative z-10">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h3 class="font-heading text-lg font-semibold text-primary tracking-widest uppercase mb-2">Process
                    </h3>

                    <h2 class="font-heading text-2xl md:text-4xl text-slate-900" data-aos="fade-up">Application Process
                    </h2>
                    <p class="text-sm md:text-lg text-slate-600 mt-4 " data-aos="fade-up" data-aos-delay="100">
                        A step-by-step guide to navigating your Graduate Route application with ease.
                    </p>
                </div>

                <div class="timeline-container">
                    <div class="timeline-item" data-aos="fade-right">
                        <div class="timeline-content">
                            <span class="timeline-step">Step 1</span>
                            <h3 class="timeline-title">Check Eligibility</h3>
                            <p class="timeline-text text-sm md:text-lg">Confirm you meet all the requirements, including your
                                qualification, visa status, and university's compliance.</p>
                        </div>
                    </div>

                    <div class="timeline-item timeline-item-right" data-aos="fade-left">
                        <div class="timeline-content">
                            <span class="timeline-step">Step 2</span>
                            <h3 class="timeline-title">Prepare Documents</h3>
                            <p class="timeline-text text-sm md:text-lg">Gather all necessary documents, such as your passport, BRP, and
                                Confirmation of Acceptance for Studies (CAS).</p>
                        </div>
                    </div>

                    <div class="timeline-item" data-aos="fade-right">
                        <div class="timeline-content">
                            <span class="timeline-step">Step 3</span>
                            <h3 class="timeline-title">Online Application</h3>
                            <p class="timeline-text text-sm md:text-lg">Complete the online application form on the official UK government
                                website and pay the required fees.</p>
                        </div>
                    </div>

                    <div class="timeline-item timeline-item-right" data-aos="fade-left">
                        <div class="timeline-content">
                            <span class="timeline-step">Step 4</span>
                            <h3 class="timeline-title">Biometric Appointment</h3>
                            <p class="timeline-text text-sm md:text-lg">Book and attend an appointment to provide your biometric
                                information (fingerprints and photo).</p>
                        </div>
                    </div>

                    <div class="timeline-item" data-aos="fade-right">
                        <div class="timeline-content">
                            <span class="timeline-step">Step 5</span>
                            <h3 class="timeline-title">Receive Decision</h3>
                            <p class="timeline-text text-sm md:text-lg">Wait for the Home Office to process your application. You will be
                                notified of the decision via email.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section id="documents-tabbed" class="relative py-24 bg-slate-50/50 overflow-hidden">

            <div aria-hidden="true" class="absolute inset-0 z-0 opacity-60">
                <svg class="absolute top-0 left-0 w-full h-auto" viewBox="0 0 1440 900" fill="none"
                    xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
                    <path d="M0 200C0 200 360 400 720 200C1080 0 1440 200 1440 200V900H0V200Z"
                        fill="url(#paint0_linear_wave_docs)" />
                    <path d="M0 150C0 150 360 300 720 150C1080 0 1440 150 1440 150V900H0V150Z"
                        fill="url(#paint1_linear_wave_docs)" style="mix-blend-mode: overlay" />
                    <defs>
                        <linearGradient id="paint0_linear_wave_docs" x1="720" y1="0" x2="720" y2="900"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#87550D" stop-opacity="0.05" />
                            <stop offset="1" stop-color="#87550D" stop-opacity="0" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_wave_docs" x1="720" y1="0" x2="720" y2="900"
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
                        data-aos="fade-up">CHECKLIST</h3>
                    <h2 class="font-heading text-2xl md:text-4xl text-slate-900" data-aos="fade-up"
                        data-aos-delay="100">Required Documents</h2>
                    <p class="text-sm md:text-lg text-slate-600 mt-4" data-aos="fade-up" data-aos-delay="200">
                        Tick through the essentials before you apply.
                    </p>
                </div>


                <div class="grid lg:grid-cols-3 gap-8 max-w-8xl mx-auto" data-aos="fade-up" data-aos-delay="300">

                    <div class="space-y-4">
                        <h4 class="font-heading text-xl text-slate-800 border-b pb-2">Personal Documents</h4>
                        <div class="space-y-3">
                            <label class="card-premium p-4 flex items-center gap-3 cursor-pointer select-none"><input
                                    type="checkbox"
                                    class="h-5 w-5 rounded border-slate-300 text-primary focus:ring-primary/50 shrink-0"><span
                                    class="text-slate-700 text-sm md:text-lg">Valid Passport</span></label>
                            <label class="card-premium p-4 flex items-center gap-3 cursor-pointer select-none"><input
                                    type="checkbox"
                                    class="h-5 w-5 rounded border-slate-300 text-primary focus:ring-primary/50 shrink-0"><span
                                    class="text-slate-700 text-sm md:text-lg">BRP (if issued)</span></label>
                            <label class="card-premium p-4 flex items-center gap-3 cursor-pointer select-none"><input
                                    type="checkbox"
                                    class="h-5 w-5 rounded border-slate-300 text-primary focus:ring-primary/50 shrink-0"><span
                                    class="text-slate-700 text-sm md:text-lg">TB Test (if required)</span></label>
                            <label class="card-premium p-4 flex items-center gap-3 cursor-pointer select-none"><input
                                    type="checkbox"
                                    class="h-5 w-5 rounded border-slate-300 text-primary focus:ring-primary/50 shrink-0"><span
                                    class="text-slate-700 text-sm md:text-lg">Police Registration</span></label>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <h4 class="font-heading text-xl text-slate-800 border-b pb-2">Academic Documents</h4>
                        <div class="space-y-3">
                            <label class="card-premium p-4 flex items-center gap-3 cursor-pointer select-none"><input
                                    type="checkbox"
                                    class="h-5 w-5 rounded border-slate-300 text-primary focus:ring-primary/50 shrink-0"><span
                                    class="text-slate-700 text-sm md:text-lg">Degree Confirmation</span></label>
                            <label class="card-premium p-4 flex items-center gap-3 cursor-pointer select-none"><input
                                    type="checkbox"
                                    class="h-5 w-5 rounded border-slate-300 text-primary focus:ring-primary/50 shrink-0"><span
                                    class="text-slate-700 text-sm md:text-lg">CAS Reference</span></label>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <h4 class="font-heading text-xl text-slate-800 border-b pb-2">Financial Proof</h4>
                        <div class="space-y-3">
                            <label class="card-premium p-4 flex items-center gap-3 cursor-pointer select-none"><input
                                    type="checkbox"
                                    class="h-5 w-5 rounded border-slate-300 text-primary focus:ring-primary/50 shrink-0"><span
                                    class="text-slate-700 text-sm md:text-lg">Payment Card for Fees</span></label>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section id="mistakes-tips" class="relative py-24 bg-slate-50/50 overflow-hidden">

            <div aria-hidden="true" class="absolute inset-0 z-0 opacity-60">
                <svg class="absolute top-0 left-0 w-full h-auto" viewBox="0 0 1440 900" fill="none"
                    xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
                    <path d="M0 200C0 200 360 400 720 200C1080 0 1440 200 1440 200V900H0V200Z"
                        fill="url(#paint0_linear_wave_mistakes)" />
                    <path d="M0 150C0 150 360 300 720 150C1080 0 1440 150 1440 150V900H0V150Z"
                        fill="url(#paint1_linear_wave_mistakes)" style="mix-blend-mode: overlay" />
                    <defs>
                        <linearGradient id="paint0_linear_wave_mistakes" x1="720" y1="0" x2="720" y2="900"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#87550D" stop-opacity="0.05" />
                            <stop offset="1" stop-color="#87550D" stop-opacity="0" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_wave_mistakes" x1="720" y1="0" x2="720" y2="900"
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
                        data-aos="fade-up">Guidance</h3>
                    <h2 class="font-heading text-2xl md:text-4xl text-slate-900 leading-tight" data-aos="fade-up"
                        data-aos-delay="100">Common Mistakes & Pro Tips</h2>
                    <p class="text-slate-600 mt-4 text-sm md:text-lg" data-aos="fade-up" data-aos-delay="200">
                        Navigate your application with confidence by learning from common pitfalls and expert advice.
                    </p>
                </div>

                <div class="container mx-auto grid gap-6 md:grid-cols-2">
                    <div class="rounded-xl border border-green-500/30 bg-white shadow-sm" data-aos="fade-right">
                        <div class="p-6">
                            <div class="mb-4 flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 18h6" />
                                    <path d="M10 22h4" />
                                    <path d="M2 12h3" />
                                    <path d="M19 12h3" />
                                    <path d="M12 2v4" />
                                    <path d="M5 22h14" />
                                    <path d="M8 12a4 4 0 1 1 8 0" />
                                </svg>
                                <h3 class="text-2xl">Tips</h3>
                            </div>
                            <ul class="space-y-3">
                                <li class="flex gap-3 text-sm md:text-lg"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="mt-0.5 h-5 w-5 text-green-600" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M20 7 10 17l-5-5" />
                                    </svg><span>Apply soon after results to avoid gaps.</span></li>
                                <li class="flex gap-3 text-sm md:text-lg"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="mt-0.5 h-5 w-5 text-green-600" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M20 7 10 17l-5-5" />
                                    </svg><span>Keep your contact details updated with UKVI.</span></li>
                                <li class="flex gap-3 text-sm md:text-lg"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="mt-0.5 h-5 w-5 text-green-600" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M20 7 10 17l-5-5" />
                                    </svg><span>Use the UK Immigration ID Check app if possible.</span></li>
                                <li class="flex gap-3 text-sm md:text-lg"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="mt-0.5 h-5 w-5 text-green-600" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M20 7 10 17l-5-5" />
                                    </svg><span>Save all confirmations and receipts.</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="rounded-xl border border-red-500/30 bg-white shadow-sm" data-aos="fade-left">
                        <div class="p-6">
                            <div class="mb-4 flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-red-600" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0Z" />
                                    <line x1="12" x2="12" y1="9" y2="13" />
                                    <line x1="12" x2="12.01" y1="17" y2="17" />
                                </svg>
                                <h3 class="text-2xl">Common Mistakes</h3>
                            </div>
                            <ul class="space-y-3">
                                <li class="flex gap-3 text-sm md:text-lg"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="mt-0.5 h-5 w-5 text-red-600" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0Z" />
                                        <line x1="12" x2="12" y1="9" y2="13" />
                                        <line x1="12" x2="12.01" y1="17" y2="17" />
                                    </svg><span>Applying before results are officially confirmed.</span></li>
                                <li class="flex gap-3 text-sm md:text-lg"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="mt-0.5 h-5 w-5 text-red-600" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0Z" />
                                        <line x1="12" x2="12" y1="9" y2="13" />
                                        <line x1="12" x2="12.01" y1="17" y2="17" />
                                    </svg><span>Using an outdated CAS or wrong course details.</span></li>
                                <li class="flex gap-3 text-sm md:text-lg"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="mt-0.5 h-5 w-5 text-red-600" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0Z" />
                                        <line x1="12" x2="12" y1="9" y2="13" />
                                        <line x1="12" x2="12.01" y1="17" y2="17" />
                                    </svg><span>Leaving the UK before a decision (if required to stay).</span></li>
                                <li class="flex gap-3 text-sm md:text-lg"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="mt-0.5 h-5 w-5 text-red-600" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0Z" />
                                        <line x1="12" x2="12" y1="9" y2="13" />
                                        <line x1="12" x2="12.01" y1="17" y2="17" />
                                    </svg><span>Ignoring emails from UKVI or your university.</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- faq section start -->

        <section id="faq" class="relative py-24 bg-slate-50/50 overflow-hidden">


            <div class="container mx-auto px-6 relative z-10">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h3 class="font-heading text-lg font-semibold text-primary tracking-widest uppercase mb-2"
                        data-aos="fade-up">FAQ</h3>
                    <h2 class="font-heading text-2xl md:text-4xl text-slate-900 leading-tight" data-aos="fade-up"
                        data-aos-delay="100">Frequently Asked Questions</h2>
                    <p class="text-slate-600 mt-4 text-sm md:text-lg" data-aos="fade-up" data-aos-delay="200">
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
                            <p class="px-6 pb-6 text-slate-600 leading-relaxed text-sm md:text-lg">
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
                            <p class="px-6 pb-6 text-slate-600 leading-relaxed text-sm md:text-lg">
                                Application processing times can vary depending on the type of visa and the complexity
                                of the case. Standard applications can take several weeks to a few months. We always
                                provide an estimated timeline based on the specific circumstances of your case.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section id="enquiry-form" class="relative py-24 bg-slate-50/50 overflow-hidden">
            <div aria-hidden="true" class="absolute inset-0 z-0 opacity-60">
                <svg class="absolute top-0 left-0 w-full h-auto" viewBox="0 0 1440 900" fill="none"
                    xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
                    <path d="M0 200C0 200 360 400 720 200C1080 0 1440 200 1440 200V900H0V200Z"
                        fill="url(#paint0_linear_wave_enquiry)" />
                    <path d="M0 150C0 150 360 300 720 150C1080 0 1440 150 1440 150V900H0V150Z"
                        fill="url(#paint1_linear_wave_enquiry)" style="mix-blend-mode: overlay" />
                    <defs>
                        <linearGradient id="paint0_linear_wave_enquiry" x1="720" y1="0" x2="720" y2="900"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#87550D" stop-opacity="0.05" />
                            <stop offset="1" stop-color="#87550D" stop-opacity="0" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_wave_enquiry" x1="720" y1="0" x2="720" y2="900"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#87550D" stop-opacity="0.1" />
                            <stop offset="1" stop-color="#87550D" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="max-w-4xl mx-auto bg-white p-8 md:p-12 rounded-2xl shadow-soft-2 border border-slate-200"
                    data-aos="fade-up">
                    <div class="text-center mb-10">
                        <h2 class="font-heading text-2xl md:text-4xl text-slate-900">Need Help with Your PSW
                            Application?</h2>
                        <p class="text-lg text-slate-600 mt-4">Fill out the form, and one of our specialists will get in
                            touch with you shortly.</p>
                    </div>

                    <form class="space-y-6">
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label for="fullName" class="block text-sm font-medium text-slate-700 mb-1">Full
                                    name</label>
                                <input type="text" id="fullName" class="form-input" placeholder="Your name" required>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Email</label>
                                <input type="email" id="email" class="form-input" placeholder="you@example.com"
                                    required>
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label for="phone" class="block text-sm font-medium text-slate-700 mb-1">Phone</label>
                                <input type="tel" id="phone" class="form-input" placeholder="+44" required>
                            </div>
                            <div>
                                <label for="university"
                                    class="block text-sm font-medium text-slate-700 mb-1">University</label>
                                <input type="text" id="university" class="form-input"
                                    placeholder="e.g. University of London" required>
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label for="graduationDate"
                                    class="block text-sm font-medium text-slate-700 mb-1">Graduation date</label>
                                <input type="date" id="graduationDate" class="form-input" required>
                            </div>
                            <div>
                                <label for="visaStatus" class="block text-sm font-medium text-slate-700 mb-1">Visa
                                    status</label>
                                <select id="visaStatus" class="form-input">
                                    <option>On PSW</option>
                                    <option>Student / Tier 4</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="howCanWeHelp" class="block text-sm font-medium text-slate-700 mb-1">How can we
                                help?</label>
                            <textarea id="howCanWeHelp" rows="5" class="form-input"
                                placeholder="Briefly describe your situation" required></textarea>
                        </div>
                        <div class="text-center pt-4">
                            <p class="text-xs text-slate-500 mb-4">By submitting, you agree to be contacted about your
                                enquiry.</p>
                            <button type="submit" class="btn-premium">Submit Enquiry</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </main>


    <!-- Footer -->
    <?php include('footer.php') ?>

    <script>
    // --- Safe and Scoped Tab Component Logic ---
    document.addEventListener('DOMContentLoaded', () => {
        const tabComponents = document.querySelectorAll('.tab-component');

        tabComponents.forEach(component => {
            const tabs = component.querySelectorAll('.tab-button');
            const panels = component.querySelectorAll('.tab-panel');

            if (tabs.length > 0 && panels.length > 0) {
                // Set the first tab as active by default
                tabs[0].classList.add('active');
                panels.forEach((panel, index) => {
                    if (index !== 0) {
                        panel.classList.add('hidden');
                    } else {
                        panel.classList.remove('hidden');
                    }
                });

                tabs.forEach(tab => {
                    tab.addEventListener('click', () => {
                        // Deactivate all tabs within this component
                        tabs.forEach(t => t.classList.remove('active'));
                        // Activate the clicked tab
                        tab.classList.add('active');

                        // Get the target panel ID from the data attribute
                        const targetPanelId = tab.dataset.tab;

                        // Hide all panels within this component
                        panels.forEach(p => p.classList.add('hidden'));

                        // Show the target panel
                        const targetPanel = component.querySelector(
                        `#${targetPanelId}`);
                        if (targetPanel) {
                            targetPanel.classList.remove('hidden');
                        }
                    });
                });
            }
        });
    });


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
    </script>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script src="main.js"></script>


</body>

</html>