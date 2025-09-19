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
    /* Custom CSS for 3D Flip Cards */
    .flip-card {
        background-color: transparent;
        height: 320px;
        /* Increased height to accommodate short description */
        perspective: 1000px;
    }

    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        transition: transform 0.7s;
        transform-style: preserve-3d;
    }

    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front,
    .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        /* Safari */
        backface-visibility: hidden;
        border-radius: 0.75rem;
        /* rounded-xl */
        overflow: hidden;
    }

    .flip-card-back {
        transform: rotateY(180deg);
        background-image: linear-gradient(to bottom right, #87550D, #9e6b1a);
        /* Primary Gradient */
        color: white;
        display: flex;
        /* Centering content */
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 1.5rem;
        /* p-6 */
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

        <section class="relative pt-40 pb-24 bg-cover bg-center min-h-[400px] flex items-center justify-center"
            style="background-image: url('https://images.unsplash.com/photo-1526587501326-890fb3e7bc25?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
            <div class="absolute inset-0 bg-slate-900/60 z-0"></div>
            <div class="container mx-auto px-6 relative z-10 text-center text-white">
                <div class="space-y-4" data-aos="fade-up">
                    <p class="text-sm font-semibold text-slate-200">
                        <a href="index.php" class="hover:text-primary transition-colors">Home</a> &rsaquo;
                        <span class="text-primary">Asylum</span>
                    </p>
                    <h1 class="font-heading text-2xl md:text-4xl">Asylum in the UK</h1>
                    <p class="max-w-2xl mx-auto text-slate-300 text-sm md:text-lg">
                        Seeking protection and a new beginning. We are here to guide you through every step of the
                        asylum process with expertise and compassion.
                    </p>
                </div>
            </div>
        </section>
        <!-- <section id="hero-asylum" class="w-full relative pt-32 md:pt-48 pb-24 bg-slate-50/50 overflow-hidden">
            <div aria-hidden="true" class="absolute inset-0 z-0 opacity-60">
                <svg class="absolute top-0 left-0 w-full h-auto" viewBox="0 0 1440 900" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
                    <path d="M0 200C0 200 360 400 720 200C1080 0 1440 200 1440 200V900H0V200Z" fill="url(#paint0_linear_wave_asylum)" />
                    <defs>
                        <linearGradient id="paint0_linear_wave_asylum" x1="720" y1="0" x2="720" y2="900" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#87550D" stop-opacity="0.05" />
                            <stop offset="1" stop-color="#87550D" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="container mx-auto px-6 relative z-10 text-center">
                <h1 class="font-heading text-3xl md:text-5xl text-slate-900 leading-tight" data-aos="fade-up">Asylum in the UK</h1>
                <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                    Seeking protection and a new beginning. We are here to guide you through every step of the asylum process with expertise and compassion.
                </p>
            </div>
        </section> -->

        <section id="what-is-asylum" class="w-full py-24 overflow-hidden">
            <div class="container mx-auto px-6">
                <div class="grid lg:grid-cols-2 gap-12 items-center">

                    <div data-aos="fade-right">
                        <div
                            class="relative w-full h-[450px] rounded-xl overflow-hidden shadow-soft-2 border border-slate-200">
                            <img src="https://images.unsplash.com/photo-1706879007686-fab3c5da3941?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Seeking refuge" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 p-6 text-white">
                                <h3 class="font-heading text-2xl">A Path to Safety</h3>
                                <p class="mt-1 opacity-90">Providing hope and legal support for those in need.</p>
                            </div>
                        </div>
                    </div>

                    <div data-aos="fade-left">
                        <div class="flex border-b border-slate-200 mb-6">
                            <button data-tab-target="#what"
                                class="tab-button active font-heading text-lg px-6 py-3 border-b-2 transition-colors duration-300 focus:outline-none">
                                What is Asylum?
                            </button>
                            <button data-tab-target="#who"
                                class="tab-button font-heading text-lg px-6 py-3 border-b-2 transition-colors duration-300 focus:outline-none">
                                Who Can Claim?
                            </button>
                        </div>

                        <div>
                            <div id="what" class="tab-panel">
                                <p class="text-sm md:text-lg text-slate-600 leading-relaxed">Asylum is a form of protection granted
                                    by a country to someone who has left their home country as a refugee. Under the 1951
                                    Refugee Convention, it is designed for those who have a well-founded fear of
                                    persecution and are unable or unwilling to seek protection from their own state.</p>
                            </div>
                            <div id="who" class="tab-panel hidden">
                                <p class="text-sm md:text-lg text-slate-600 leading-relaxed">You can claim asylum in the UK if you
                                    fear persecution in your home country because of your:</p>
                                <ul class="mt-4 space-y-3">
                                    <li class="flex items-center gap-3 text-sm md:text-lg"><svg class="h-6 w-6 text-primary shrink-0"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg><span>Race or Religion</span></li>
                                    <li class="flex items-center gap-3 text-sm md:text-lg"><svg class="h-6 w-6 text-primary shrink-0"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg><span>Nationality or Political Opinion</span></li>
                                    <li class="flex items-center gap-3 text-sm md:text-lg"><svg class="h-6 w-6 text-primary shrink-0"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg><span>Membership of a particular social group</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="mt-8 pt-6 border-t border-slate-200">
                            <h4 class="font-heading text-xl text-slate-800 mb-4">Key Principles of an Asylum Claim</h4>
                            <div class="space-y-3 text-slate-600">
                                <p><strong class="font-semibold text-slate-700 text-sm md:text-lg">Credibility:</strong> Your account must
                                    be believable and consistent.</p>
                                <p><strong class="font-semibold text-slate-700 text-sm md:text-lg">Evidence:</strong> Providing evidence
                                    strengthens your claim significantly.</p>
                                <p><strong class="font-semibold text-slate-700 text-sm md:text-lg">Timeliness:</strong> It is crucial to
                                    claim asylum as soon as it is safe to do so.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section id="process" class="w-full relative py-24 bg-slate-50/50 overflow-hidden">
            <div aria-hidden="true" class="absolute inset-0 z-0 opacity-60">
                <svg class="absolute top-0 left-0 w-full h-auto" viewBox="0 0 1440 900" fill="none"
                    xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
                    <path d="M0 200C0 200 360 400 720 200C1080 0 1440 200 1440 200V900H0V200Z"
                        fill="url(#paint0_linear_wave_asylum)" />
                    <defs>
                        <linearGradient id="paint0_linear_wave_asylum" x1="720" y1="0" x2="720" y2="900"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#87550D" stop-opacity="0.05" />
                            <stop offset="1" stop-color="#87550D" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="container mx-auto px-6">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="font-heading text-2xl md:text-4xl text-slate-900" data-aos="fade-up">The Asylum
                        Application Process</h2>
                    <p class="text-sm md:text-lg text-slate-600 mt-4" data-aos="fade-up" data-aos-delay="100">A clear, step-by-step
                        guide to navigating your asylum claim from start to finish.</p>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="card-premium p-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="font-heading text-lg text-slate-800">Screening</h3>
                            <span class="text-xs font-medium bg-blue-100 text-blue-800 px-2 py-1 rounded-full">Step
                                1</span>
                        </div>
                        <p class="text-slate-600 text-sm mb-4">Initial registration of your asylum claim. Personal
                            details and biometrics are collected.</p>
                        <div class="text-sm"><span class="font-semibold text-slate-700">Status:</span> <span
                                class="text-slate-500">To Be Completed</span></div>
                    </div>
                    <div class="card-premium p-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="font-heading text-lg text-slate-800">Interview</h3>
                            <span class="text-xs font-medium bg-amber-100 text-amber-800 px-2 py-1 rounded-full">Step
                                2</span>
                        </div>
                        <p class="text-slate-600 text-sm mb-4">A detailed, in-depth discussion with a caseworker
                            regarding your reasons for claiming asylum.</p>
                        <div class="text-sm"><span class="font-semibold text-slate-700">Status:</span> <span
                                class="text-slate-500">Pending</span></div>
                    </div>
                    <div class="card-premium p-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="font-heading text-lg text-slate-800">Decision</h3>
                            <span class="text-xs font-medium bg-gray-100 text-gray-800 px-2 py-1 rounded-full">Step
                                3</span>
                        </div>
                        <p class="text-slate-600 text-sm mb-4">The Home Office evaluates your case and provides a
                            written outcome on your application.</p>
                        <div class="text-sm"><span class="font-semibold text-slate-700">Status:</span> <span
                                class="text-slate-500">Awaiting Outcome</span></div>
                    </div>
                </div>
            </div>
        </section>




        <section id="rights-support" class="w-full py-24">
            <div class="container mx-auto px-6">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="font-heading text-3xl md:text-4xl text-slate-900" data-aos="fade-up">Your Rights &
                        Support</h2>
                    <p class="text-sm md:text-lg text-slate-600 mt-4" data-aos="fade-up" data-aos-delay="100">While your asylum
                        claim is being considered, you have certain fundamental rights and may be eligible for support
                        from the UK government.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                    <div class="flip-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="flip-card-inner">
                            <div
                                class="flip-card-front card-premium p-6 flex flex-col items-center justify-center text-center">
                                <div
                                    class="h-20 w-20 rounded-full bg-primary/10 text-primary flex items-center justify-center mb-4">
                                    <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                    </svg>
                                </div>
                                <h3 class="font-heading text-xl text-slate-800">Right to Stay</h3>
                                <p class="text-slate-600 text-sm mt-2">You have the right to remain in the UK while your
                                    asylum application is processed.</p>
                            </div>
                            <div class="flip-card-back">
                                <h4 class="font-heading text-lg mb-2">Right to Stay</h4>
                                <p class="text-white/90">You have the right to remain in the UK while your asylum
                                    application is being processed. You should not be removed from the country until a
                                    final decision has been made on your case.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flip-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="flip-card-inner">
                            <div
                                class="flip-card-front card-premium p-6 flex flex-col items-center justify-center text-center">
                                <div
                                    class="h-20 w-20 rounded-full bg-primary/10 text-primary flex items-center justify-center mb-4">
                                    <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504 1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                </div>
                                <h3 class="font-heading text-xl text-slate-800">Accommodation</h3>
                                <p class="text-slate-600 text-sm mt-2">If you have nowhere to live and cannot afford
                                    housing, you can apply for accommodation.</p>
                            </div>
                            <div class="flip-card-back">
                                <h4 class="font-heading text-lg mb-2">Accommodation</h4>
                                <p class="text-white/90">If you have nowhere to live and cannot afford housing, you can
                                    apply for asylum accommodation. This is often provided in a shared house outside of
                                    London.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flip-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="flip-card-inner">
                            <div
                                class="flip-card-front card-premium p-6 flex flex-col items-center justify-center text-center">
                                <div
                                    class="h-20 w-20 rounded-full bg-primary/10 text-primary flex items-center justify-center mb-4">
                                    <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.75A.75.75 0 012.25 4.5h.75m0 0h.75A.75.75 0 014.5 5.25v.75m0 0h-.75A.75.75 0 013 6v.75m0 0v.75A.75.75 0 013.75 8.25h.75m0 0h.75a.75.75 0 01.75.75v.75m0 0h-.75a.75.75 0 01-.75-.75V8.25m0 0V7.5A.75.75 0 013.75 6.75h.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <h3 class="font-heading text-xl text-slate-800">Financial Support</h3>
                                <p class="text-slate-600 text-sm mt-2">You may be eligible for a small weekly cash
                                    allowance to cover essential living costs.</p>
                            </div>
                            <div class="flip-card-back">
                                <h4 class="font-heading text-lg mb-2">Financial Support</h4>
                                <p class="text-white/90">If you are unable to support yourself, you may be eligible for
                                    a small weekly cash allowance to cover essential living costs like food and
                                    toiletries.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flip-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="flip-card-inner">
                            <div
                                class="flip-card-front card-premium p-6 flex flex-col items-center justify-center text-center">
                                <div
                                    class="h-20 w-20 rounded-full bg-primary/10 text-primary flex items-center justify-center mb-4">
                                    <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>
                                <h3 class="font-heading text-xl text-slate-800">Healthcare Access</h3>
                                <p class="text-slate-600 text-sm mt-2">Asylum seekers are entitled to free healthcare
                                    from the National Health Service (NHS).</p>
                            </div>
                            <div class="flip-card-back">
                                <h4 class="font-heading text-lg mb-2">Healthcare Access</h4>
                                <p class="text-white/90">As an asylum seeker, you are entitled to free healthcare from
                                    the National Health Service (NHS), including registering with a doctor (GP) and
                                    hospital treatment.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flip-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="flip-card-inner">
                            <div
                                class="flip-card-front card-premium p-6 flex flex-col items-center justify-center text-center">
                                <div
                                    class="h-20 w-20 rounded-full bg-primary/10 text-primary flex items-center justify-center mb-4">
                                    <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.242-6.75.721M18.75 4.97c.344.135.68.28.994.432M18.75 4.97V6.75A48.418 48.418 0 0112 8.25c-2.291 0-4.545.242-6.75.721V4.97M5.25 4.97c-.344.135-.68.28-.994.432M5.25 4.97V6.75A48.418 48.418 0 0012 8.25c2.291 0 4.545.242 6.75.721V4.97m11.25 1.5c.344.135.68.28.994.432M20.25 6.75V4.97a48.418 48.418 0 00-6.75-.721c-2.291 0-4.545.242-6.75.721V6.75M3.75 6.75c-.344.135-.68.28-.994.432M3.75 6.75V4.97a48.418 48.418 0 016.75-.721c2.291 0 4.545.242 6.75.721V6.75" />
                                    </svg>
                                </div>
                                <h3 class="font-heading text-xl text-slate-800">Legal Aid</h3>
                                <p class="text-slate-600 text-sm mt-2">You may be eligible for Legal Aid to help with
                                    the costs of a legal representative.</p>
                            </div>
                            <div class="flip-card-back">
                                <h4 class="font-heading text-lg mb-2">Legal Aid</h4>
                                <p class="text-white/90">You may be eligible for Legal Aid to help with the costs of a
                                    legal representative for your asylum claim. This provides access to expert advice
                                    regardless of your financial situation.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flip-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="flip-card-inner">
                            <div
                                class="flip-card-front card-premium p-6 flex flex-col items-center justify-center text-center">
                                <div
                                    class="h-20 w-20 rounded-full bg-primary/10 text-primary flex items-center justify-center mb-4">
                                    <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                                    </svg>
                                </div>
                                <h3 class="font-heading text-xl text-slate-800">Education for Children</h3>
                                <p class="text-slate-600 text-sm mt-2">Children aged 5-17 have the right to attend state
                                    school for free.</p>
                            </div>
                            <div class="flip-card-back">
                                <h4 class="font-heading text-lg mb-2">Education for Children</h4>
                                <p class="text-white/90">If you have children aged between 5 and 17, they have the right
                                    to attend state school for free while your asylum claim is being processed.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="documents" class="relative w-full py-24 bg-slate-50/50 overflow-hidden">

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
                <div class="grid lg:grid-cols-12 gap-x-12 gap-y-8 items-start">

                    <div class="lg:col-span-4 lg:sticky lg:top-32" data-aos="fade-right">
                        <div class="space-y-4">
                            <h2 class="font-heading text-2xl md:text-4xl text-slate-900 leading-tight">Required
                                Documents & Evidence</h2>
                            <p class="text-slate-600 text-sm md:text-lg">A strong claim is supported by credible evidence. Gather as much
                                proof as possible to support your case.</p>

                            <div class="p-4">
                                <svg class="w-full h-auto text-primary" viewBox="0 0 200 200" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M70 30H150C155.523 30 160 34.4772 160 40V170C160 175.523 155.523 180 150 180H50C44.4772 180 40 175.523 40 170V70L70 30Z"
                                        stroke="currentColor" stroke-width="4" stroke-linejoin="round" opacity="0.2" />
                                    <path
                                        d="M60 20H140C145.523 20 150 24.4772 150 30V160C150 165.523 145.523 170 140 170H40C34.4772 170 30 165.523 30 160V60L60 20Z"
                                        stroke="currentColor" stroke-width="4" stroke-linejoin="round" opacity="0.5" />
                                    <path
                                        d="M50 10H130C135.523 10 140 14.4772 140 20V150C140 155.523 135.523 160 130 160H30C24.4772 160 20 155.523 20 150V50L50 10Z"
                                        fill="white" stroke="currentColor" stroke-width="4" stroke-linejoin="round" />
                                    <path d="M50 10V50H20" stroke="currentColor" stroke-width="4"
                                        stroke-linejoin="round" />
                                    <path d="M40 90H120" stroke="currentColor" stroke-width="4"
                                        stroke-linecap="round" />
                                    <path d="M40 110H120" stroke="currentColor" stroke-width="4"
                                        stroke-linecap="round" />
                                    <path d="M40 130H80" stroke="currentColor" stroke-width="4"
                                        stroke-linecap="round" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-8">
                        <div class="space-y-8">
                            <div data-aos="fade-up" class="card-premium p-8">
                                <div class="flex items-center gap-4 mb-6">
                                    <div
                                        class="h-12 w-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center shrink-0">
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg>
                                    </div>
                                    <h3 class="font-heading text:xl md:text-2xl text-slate-800">Personal & Identity Documents</h3>
                                </div>
                                <ul class="space-y-4">
                                    <li
                                        class="flex items-start gap-3 pb-4 border-b border-slate-200/80 last:border-b-0 text-sm md:text-lg">
                                        <svg class="h-6 w-6 text-primary shrink-0 mt-0.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg><span>Passport and any other travel documents.</span></li>
                                    <li
                                        class="flex items-start gap-3 pb-4 border-b border-slate-200/80 last:border-b-0 text-sm md:text-lg">
                                        <svg class="h-6 w-6 text-primary shrink-0 mt-0.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg><span>National identity cards.</span></li>
                                    <li
                                        class="flex items-start gap-3 pb-4 border-b border-slate-200/80 last:border-b-0 text-sm md:text-lg">
                                        <svg class="h-6 w-6 text-primary shrink-0 mt-0.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg><span>Birth and marriage certificates.</span></li>
                                    <li
                                        class="flex items-start gap-3 pb-4 border-b border-slate-200/80 last:border-b-0 text-sm md:text-lg">
                                        <svg class="h-6 w-6 text-primary shrink-0 mt-0.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg><span>Police registration certificates.</span></li>
                                </ul>
                            </div>
                            <div data-aos="fade-up" class="card-premium p-8">
                                <div class="flex items-center gap-4 mb-6">
                                    <div
                                        class="h-12 w-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center shrink-0">
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                        </svg>
                                    </div>
                                    <h3 class="font-heading text-xl md:text-2xl text-slate-800">Evidence of Persecution</h3>
                                </div>
                                <ul class="space-y-4">
                                    <li
                                        class="flex items-start gap-3 pb-4 border-b border-slate-200/80 last:border-b-0 text-sm md:text-lg">
                                        <svg class="h-6 w-6 text-primary shrink-0 mt-0.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg><span>Witness statements from people who know your situation.</span></li>
                                    <li
                                        class="flex items-start gap-3 pb-4 border-b border-slate-200/80 last:border-b-0 text-sm md:text-lg">
                                        <svg class="h-6 w-6 text-primary shrink-0 mt-0.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg><span>Police or court documents from your home country.</span></li>
                                    <li
                                        class="flex items-start gap-3 pb-4 border-b border-slate-200/80 last:border-b-0 text-sm md:text-lg">
                                        <svg class="h-6 w-6 text-primary shrink-0 mt-0.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg><span>Medical reports detailing injuries from persecution.</span></li>
                                    <li
                                        class="flex items-start gap-3 pb-4 border-b border-slate-200/80 last:border-b-0 text-sm md:text-lg">
                                        <svg class="h-6 w-6 text-primary shrink-0 mt-0.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg><span>Threatening letters, emails, or messages.</span></li>
                                </ul>
                            </div>
                            <div data-aos="fade-up" class="card-premium p-8">
                                <div class="flex items-center gap-4 mb-6">
                                    <div
                                        class="h-12 w-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center shrink-0">
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1.5-1.5m1.5 1.5l1.5-1.5m0 0l-1.5 1.5m1.5-1.5l1.5 1.5M3.75 5.25h16.5" />
                                        </svg>
                                    </div>
                                    <h3 class="font-heading text:xl md:text-2xl text-slate-800">Proof of Background</h3>
                                </div>
                                <ul class="space-y-4">
                                    <li
                                        class="flex items-start gap-3 pb-4 border-b border-slate-200/80 last:border-b-0 text-sm md:text-lg">
                                        <svg class="h-6 w-6 text-primary shrink-0 mt-0.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg><span>Membership cards for political parties, unions, or other
                                            organisations.</span></li>
                                    <li
                                        class="flex items-start gap-3 pb-4 border-b border-slate-200/80 last:border-b-0 text-sm md:text-lg">
                                        <svg class="h-6 w-6 text-primary shrink-0 mt-0.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg><span>Proof of your employment or education.</span></li>
                                    <li
                                        class="flex items-start gap-3 pb-4 border-b border-slate-200/80 last:border-b-0 text-sm md:text-lg">
                                        <svg class="h-6 w-6 text-primary shrink-0 mt-0.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg><span>Documents showing your religious affiliation.</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="appeal-summary" class="w-full py-24 bg-slate-50/50 overflow-hidden">



            <div class="container mx-auto px-6 relative z-10">
                <div class="text-center max-w-3xl mx-auto mb-20">
                    <h2 class="font-heading text-2xl md:text-4xl text-slate-900" data-aos="fade-up">The Path Forward
                        After a Refusal</h2>
                    <p class="text-sm md:text-lg text-slate-600 mt-4" data-aos="fade-up" data-aos-delay="100">A refusal is not the
                        final verdict. Understanding the appeal process is your next critical step.</p>
                </div>

                <div class="relative">
                    <div class="hidden md:block absolute top-12 left-0 w-full border-t-2 border-dashed border-slate-300"
                        aria-hidden="true"></div>

                    <div class="grid md:grid-cols-4 gap-12 md:gap-8">

                        <div class="relative text-center" data-aos="fade-up" data-aos-delay="200">
                            <div
                                class="h-24 w-24 mx-auto rounded-full bg-white shadow-soft-1 border-2 border-primary/20 flex items-center justify-center relative z-10">
                                <svg class="h-10 w-10 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.25 3.75v1.5a2.25 2.25 0 01-2.25 2.25H4.5m8.25-6V3.75c0-1.657-1.343-3-3-3H6.75A3.375 3.375 0 003.375 4.5v15.75c0 1.848 1.492 3.375 3.375 3.375h10.5a3.375 3.375 0 003.375-3.375V11.25" />
                                </svg>
                            </div>
                            <div
                                class="bg-white rounded-xl shadow-soft-1 -mt-12 p-6 pt-16 transition-all duration-300 hover:shadow-soft-2 hover:bg-primary/5">
                                <h3 class="font-heading text-xl text-slate-800">Legal Review</h3>
                                <p class="text-sm text-slate-600 mt-2 text-sm md:text-lg">Immediately have our expert lawyers analyze your
                                    refusal letter to identify grounds for appeal.</p>
                            </div>
                        </div>

                        <div class="relative text-center" data-aos="fade-up" data-aos-delay="300">
                            <div
                                class="h-24 w-24 mx-auto rounded-full bg-white shadow-soft-1 border-2 border-primary/20 flex items-center justify-center relative z-10">
                                <svg class="h-10 w-10 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div
                                class="bg-white rounded-xl shadow-soft-1 -mt-12 p-6 pt-16 transition-all duration-300 hover:shadow-soft-2 hover:bg-primary/5">
                                <h3 class="font-heading text-xl text-slate-800">Observe Deadlines</h3>
                                <p class="text-sm text-slate-600 mt-2 text-sm md:text-lg">There are strict time limits (usually 14 days) to
                                    submit your appeal, so acting fast is essential.</p>
                            </div>
                        </div>

                        <div class="relative text-center" data-aos="fade-up" data-aos-delay="400">
                            <div
                                class="h-24 w-24 mx-auto rounded-full bg-white shadow-soft-1 border-2 border-primary/20 flex items-center justify-center relative z-10">
                                <svg class="h-10 w-10 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15m0-3l-3-3m0 0l-3 3m3-3v11.25" />
                                </svg>
                            </div>
                            <div
                                class="bg-white rounded-xl shadow-soft-1 -mt-12 p-6 pt-16 transition-all duration-300 hover:shadow-soft-2 hover:bg-primary/5">
                                <h3 class="font-heading text-xl text-slate-800">Submit Appeal</h3>
                                <p class="text-sm text-slate-600 mt-2">We will prepare and lodge a comprehensive appeal
                                    on your behalf with the First-tier Tribunal.</p>
                            </div>
                        </div>

                        <div class="relative text-center" data-aos="fade-up" data-aos-delay="500">
                            <div
                                class="h-24 w-24 mx-auto rounded-full bg-white shadow-soft-1 border-2 border-primary/20 flex items-center justify-center relative z-10">
                                <svg class="h-10 w-10 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.242-6.75.721" />
                                </svg>
                            </div>
                            <div
                                class="bg-white rounded-xl shadow-soft-1 -mt-12 p-6 pt-16 transition-all duration-300 hover:shadow-soft-2 hover:bg-primary/5">
                                <h3 class="font-heading text-xl text-slate-800">Tribunal Hearing</h3>
                                <p class="text-sm text-slate-600 mt-2">An independent judge will hear your case. We will
                                    represent you to argue for the decision to be overturned.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="faqs" class="w-full py-24 bg-white overflow-hidden">
            <div class="container mx-auto px-6">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="font-heading text-2xl md:text-4xl text-slate-900" data-aos="fade-up">Frequently Asked
                        Questions</h2>
                    <p class="text-sm md:text-lg text-slate-600 mt-4" data-aos="fade-up" data-aos-delay="100">Find quick answers to
                        the most common questions about asylum claims and the appeal process.</p>
                </div>

                <div class="max-w-4xl mx-auto" id="faq-accordion">

                    <div class="accordion-item border-b border-slate-200 py-4" data-aos="fade-up" data-aos-delay="200">
                        <button class="accordion-trigger flex justify-between items-center w-full text-left">
                            <span class="font-heading text-lg text-slate-800 flex items-center gap-3">
                                <svg class="h-6 w-6 text-primary shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712M9.879 16.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712M6.75 1.562v4.5c0 1.12.915 2.025 2.046 2.025C10.254 8.087 11.17 7.182 11.17 6.062v-4.5m-6.75 9V1.562M18.75 9v4.5c0 1.12-.915 2.025-2.046 2.025C13.746 15.587 12.83 14.682 12.83 13.562v-4.5m-6.75 9V9M3.75 22.5h16.5a.75.75 0 000-1.5H3.75a.75.75 0 000 1.5z" />
                                </svg>
                                <span>What is asylum and who can apply?</span>
                            </span>
                            <svg class="accordion-icon h-6 w-6 text-slate-500 shrink-0 transition-transform duration-300"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="accordion-content text-slate-600 pt-4 pl-9 text-sm md:text-lg">
                            <p>Asylum is protection granted by a nation to someone who has left their native country as
                                a political refugee. You can apply if you fear persecution in your home country based on
                                race, religion, nationality, political opinion, or membership in a particular social
                                group.</p>
                        </div>
                    </div>

                    <div class="accordion-item border-b border-slate-200 py-4" data-aos="fade-up" data-aos-delay="300">
                        <button class="accordion-trigger flex justify-between items-center w-full text-left">
                            <span class="font-heading text-lg text-slate-800 flex items-center gap-3">
                                <svg class="h-6 w-6 text-primary shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712M9.879 16.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712M6.75 1.562v4.5c0 1.12.915 2.025 2.046 2.025C10.254 8.087 11.17 7.182 11.17 6.062v-4.5m-6.75 9V1.562M18.75 9v4.5c0 1.12-.915 2.025-2.046 2.025C13.746 15.587 12.83 14.682 12.83 13.562v-4.5m-6.75 9V9M3.75 22.5h16.5a.75.75 0 000-1.5H3.75a.75.75 0 000 1.5z" />
                                </svg>
                                <span>What documents do I need for an asylum claim?</span>
                            </span>
                            <svg class="accordion-icon h-6 w-6 text-slate-500 shrink-0 transition-transform duration-300"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="accordion-content text-slate-600 pt-4 pl-9 text-sm md:text-lg">
                            <p>You'll need identity documents (passport, national ID), evidence of persecution (police
                                reports, medical records, witness statements), and proof of your background or
                                affiliations (membership cards, employment records).</p>
                        </div>
                    </div>

                    <div class="accordion-item border-b border-slate-200 py-4" data-aos="fade-up" data-aos-delay="400">
                        <button class="accordion-trigger flex justify-between items-center w-full text-left">
                            <span class="font-heading text-lg text-slate-800 flex items-center gap-3">
                                <svg class="h-6 w-6 text-primary shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712M9.879 16.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712M6.75 1.562v4.5c0 1.12-.915 2.025 2.046 2.025C10.254 8.087 11.17 7.182 11.17 6.062v-4.5m-6.75 9V1.562M18.75 9v4.5c0 1.12-.915 2.025-2.046 2.025C13.746 15.587 12.83 14.682 12.83 13.562v-4.5m-6.75 9V9M3.75 22.5h16.5a.75.75 0 000-1.5H3.75a.75.75 0 000 1.5z" />
                                </svg>
                                <span>What happens if my asylum claim is refused?</span>
                            </span>
                            <svg class="accordion-icon h-6 w-6 text-slate-500 shrink-0 transition-transform duration-300"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="accordion-content text-slate-600 pt-4 pl-9 text-sm md:text-lg">
                            <p>If refused, you usually have the right to appeal the decision to the First-tier Tribunal.
                                It's crucial to seek legal advice immediately as there are strict time limits.</p>
                        </div>
                    </div>

                    <div class="accordion-item border-b border-slate-200 py-4" data-aos="fade-up" data-aos-delay="500">
                        <button class="accordion-trigger flex justify-between items-center w-full text-left">
                            <span class="font-heading text-lg text-slate-800 flex items-center gap-3">
                                <svg class="h-6 w-6 text-primary shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712M9.879 16.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712M6.75 1.562v4.5c0 1.12-.915 2.025 2.046 2.025C10.254 8.087 11.17 7.182 11.17 6.062v-4.5m-6.75 9V1.562M18.75 9v4.5c0 1.12-.915 2.025-2.046 2.025C13.746 15.587 12.83 14.682 12.83 13.562v-4.5m-6.75 9V9M3.75 22.5h16.5a.75.75 0 000-1.5H3.75a.75.75 0 000 1.5z" />
                                </svg>
                                <span>How long does the asylum appeal process take?</span>
                            </span>
                            <svg class="accordion-icon h-6 w-6 text-slate-500 shrink-0 transition-transform duration-300"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="accordion-content text-slate-600 pt-4 pl-9 text-sm md:text-lg">
                            <p>The duration varies significantly based on individual circumstances, tribunal workload,
                                and the complexity of your case. It can range from several months to over a year.</p>
                        </div>
                    </div>

                    <div class="accordion-item border-b border-slate-200 py-4" data-aos="fade-up" data-aos-delay="600">
                        <button class="accordion-trigger flex justify-between items-center w-full text-left">
                            <span class="font-heading text-lg text-slate-800 flex items-center gap-3">
                                <svg class="h-6 w-6 text-primary shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712M9.879 16.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712M6.75 1.562v4.5c0 1.12-.915 2.025-2.046 2.025C10.254 8.087 11.17 7.182 11.17 6.062v-4.5m-6.75 9V1.562M18.75 9v4.5c0 1.12-.915 2.025-2.046 2.025C13.746 15.587 12.83 14.682 12.83 13.562v-4.5m-6.75 9V9M3.75 22.5h16.5a.75.75 0 000-1.5H3.75a.75.75 0 000 1.5z" />
                                </svg>
                                <span>Can I work while my asylum appeal is pending?</span>
                            </span>
                            <svg class="accordion-icon h-6 w-6 text-slate-500 shrink-0 transition-transform duration-300"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="accordion-content text-slate-600 pt-4 pl-9 text-sm md:text-lg">
                            <p>Generally, asylum seekers are not permitted to work. However, if your appeal has been
                                pending for more than 12 months through no fault of your own, you might be eligible to
                                apply for permission to work in jobs on the Shortage Occupation List.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section id="asylum-enquiry" class="relative w-full py-24 bg-primary/5 overflow-hidden">

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
                <div class="grid lg:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">

                    <div data-aos="fade-right">
                        <h2 class="font-heading text-2xl md:text-4xl text-slate-900 leading-tight">Need Urgent Help with
                            Your Asylum Claim?</h2>
                        <p class="text-sm md:text-lg text-slate-700 mt-4">Don't navigate the complex asylum process alone. Our
                            expert legal team is here to provide dedicated support, clear guidance, and strong
                            representation.</p>
                        <p class="text-sm md:text-lg text-slate-700 mt-4">Fill out the form to schedule a confidential
                            consultation. We are committed to protecting your rights and securing your future.</p>

                        <div class="mt-8 space-y-4">
                            <div class="flex items-center gap-3 text-slate-800">
                                <svg class="h-6 w-6 text-primary shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.396a2.25 2.25 0 00-1.026-1.956L18 10.5h-.086a2.25 2.25 0 00-2.203 1.092l-.645 1.077a49.105 49.105 0 01-3.618-2.659 49.105 49.105 0 01-2.659-3.618l1.077-.645a2.25 2.25 0 001.092-2.203V4.5a2.25 2.25 0 00-2.25-2.25h-1.396a2.25 2.25 0 00-1.956 1.026L5.63 7.954C3.804 10.323 2.25 13.911 2.25 17.5V18a.75.75 0 00.75.75h.096A8.73 8.73 0 015.58 18h12.84a8.73 8.73 0 012.533.75H21.75a.75.75 0 00.75-.75v-1.5c0-8.284-6.716-15-15-15H6.75a.75.75 0 00-.75.75v.096A8.73 8.73 0 015.58 6h-1.74a.75.75 0 00-.75.75z" />
                                </svg>
                                <span>+44 7988 138221</span>
                            </div>
                            <div class="flex items-center gap-3 text-slate-800">
                                <svg class="h-6 w-6 text-primary shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.902L12 11.625l-7.189-3.68a2.25 2.25 0 01-1.07-1.902V6.75" />
                                </svg>
                                <span>info@stonebridgelegal.co.uk</span>
                            </div>
                        </div>
                    </div>

                    <div data-aos="fade-left" class="card-premium p-8 lg:p-10">
                        <h3 class="font-heading text-2xl text-slate-900 mb-6">Send Us Your Enquiry</h3>
                        <form action="#" method="POST" class="space-y-6">
                            <div>
                                <label for="name" class="sr-only">Your Name</label>
                                <input type="text" id="name" name="name" placeholder="Your Name"
                                    class="w-full bg-white border-b-2 border-slate-300 focus:border-primary focus:outline-none py-3 px-2 text-lg text-slate-900 placeholder-slate-500 transition-all duration-300">
                            </div>
                            <div>
                                <label for="email" class="sr-only">Your Email</label>
                                <input type="email" id="email" name="email" placeholder="Your Email"
                                    class="w-full bg-white border-b-2 border-slate-300 focus:border-primary focus:outline-none py-3 px-2 text-lg text-slate-900 placeholder-slate-500 transition-all duration-300">
                            </div>
                            <div>
                                <label for="phone" class="sr-only">Your Phone (Optional)</label>
                                <input type="tel" id="phone" name="phone" placeholder="Your Phone (Optional)"
                                    class="w-full bg-white border-b-2 border-slate-300 focus:border-primary focus:outline-none py-3 px-2 text-lg text-slate-900 placeholder-slate-500 transition-all duration-300">
                            </div>
                            <div>
                                <label for="message" class="sr-only">Your Message</label>
                                <textarea id="message" name="message" rows="5"
                                    placeholder="Tell us about your situation..."
                                    class="w-full bg-white border-b-2 border-slate-300 focus:border-primary focus:outline-none py-3 px-2 text-lg text-slate-900 placeholder-slate-500 transition-all duration-300"></textarea>
                            </div>
                            <div class="pt-4">
                                <button type="submit" class="btn-premium w-full">Send Message</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>


    </main>
    <?php include('footer.php') ?>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
    // Initialize AOS Animation Library
    AOS.init({
        duration: 800,
        once: true,
        easing: 'ease-out-cubic'
    });

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
</body>

</html>