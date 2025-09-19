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
            style="background-image: url('https://images.unsplash.com/photo-1606819717115-9159c900370b?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8Z2FsbGVyeXxlbnwwfHwwfHx8MA%3D%3D');">
            <div class="absolute inset-0 bg-slate-900/60 z-0"></div>
            <div class="container mx-auto px-6 relative z-10 text-center text-white">
                <div class="space-y-4" data-aos="fade-up">
                    <p class="text-sm font-semibold text-slate-200">
                        <a href="index.php" class="hover:text-primary transition-colors">Home</a> &rsaquo;
                        <span class="text-primary">Video</span>
                    </p>
                    <h1 class="font-heading text-4xl md:text-5xl">Our Video</h1>
                    <p class="max-w-2xl mx-auto text-slate-300">
                        A curated collection of our finest projects and moments that define our passion for excellence.
                    </p>
                </div>
            </div>
        </section>




        <!-- Video Section -->
        <section id="videos" class="relative py-24 bg-slate-50/50 overflow-hidden">

            <div aria-hidden="true" class="absolute inset-0 z-0 opacity-60">
                <svg class="absolute top-0 left-0 w-full h-auto" viewBox="0 0 1440 900" fill="none"
                    xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
                    <path d="M0 200C0 200 360 400 720 200C1080 0 1440 200 1440 200V900H0V200Z"
                        fill="url(#paint0_linear_wave_services)" />
                    <path d="M0 150C0 150 360 300 720 150C1080 0 1440 150 1440 150V900H0V150Z"
                        fill="url(#paint1_linear_wave_services)" style="mix-blend-mode: overlay" />
                    <defs>
                        <linearGradient id="paint0_linear_wave_services" x1="720" y1="0" x2="720" y2="900"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#87550D" stop-opacity="0.05" />
                            <stop offset="1" stop-color="#87550D" stop-opacity="0" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_wave_services" x1="720" y1="0" x2="720" y2="900"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#87550D" stop-opacity="0.1" />
                            <stop offset="1" stop-color="#87550D" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="text-center max-w-3xl mx-auto mb-16">
            
                    <h2 class="font-heading text-2xl md:text-4xl text-slate-900 leading-tight" data-aos="fade-up"
                        data-aos-delay="100">Our Work in Motion</h2>
                    <p class="text-slate-600 mt-4 text-sm md:text-lg" data-aos="fade-up" data-aos-delay="200">
                        Witness the conversion of concepts into reality through our curated collection of case studies,
                        tutorials, and brand narratives.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-8xl mx-auto">

                    <div class="video-card-container group shadow-2xl"
                        data-video-url="https://www.youtube.com/embed/OEfoLIVuoq4?si=hcBVG7Grub2OpjbL"
                        data-aos="fade-up" data-aos-delay="300">
                        <div class="video-card-content">
                            <div
                                class="video-thumbnail-wrapper relative overflow-hidden rounded-t-lg h-56 bg-black flex items-center justify-center p-4">
                                <img class="video-thumbnail absolute inset-0 w-full h-full object-cover opacity-70 transition-transform duration-300 group-hover:scale-105"
                                    alt="Video Thumbnail" />
                                <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                                    <div
                                        class="h-16 w-16 bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center text-white transition-transform duration-300 group-hover:scale-110">
                                        <svg class="w-8 h-8 ml-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M5 3l14 9-14 9V3z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5">
                                <h4
                                    class="font-heading text-xl text-slate-800 group-hover:text-primary transition-colors">
                                    Designing with Depth</h4>
                                <p class="text-slate-600 text-sm mt-1">A case study on creating stunning 3D visuals.</p>
                            </div>
                        </div>
                    </div>

                    <div class="video-card-container group shadow-2xl"
                        data-video-url="https://www.youtube.com/embed/W7rPtnqjU68?si=4-jkVpkYbtJPohnE"
                        data-aos="fade-up" data-aos-delay="400">
                        <div class="video-card-content">
                            <div
                                class="video-thumbnail-wrapper relative overflow-hidden rounded-t-lg h-56 bg-black flex items-center justify-center p-4">
                                <img class="video-thumbnail absolute inset-0 w-full h-full object-cover opacity-70 transition-transform duration-300 group-hover:scale-105"
                                    alt="Video Thumbnail" />
                                <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                                    <div
                                        class="h-16 w-16 bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center text-white transition-transform duration-300 group-hover:scale-110">
                                        <svg class="w-8 h-8 ml-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M5 3l14 9-14 9V3z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5">
                                <h4
                                    class="font-heading text-xl text-slate-800 group-hover:text-primary transition-colors">
                                    The Art of Branding</h4>
                                <p class="text-slate-600 text-sm mt-1">Exploring the core principles of a successful
                                    brand.</p>
                            </div>
                        </div>
                    </div>

                    <div class="video-card-container group shadow-2xl"
                        data-video-url="https://www.youtube.com/embed/WAoVRWcIoTY?si=opFroeIDsnWzqjN-"
                        data-aos="fade-up" data-aos-delay="500">
                        <div class="video-card-content">
                            <div
                                class="video-thumbnail-wrapper relative overflow-hidden rounded-t-lg h-56 bg-black flex items-center justify-center p-4">
                                <img class="video-thumbnail absolute inset-0 w-full h-full object-cover opacity-70 transition-transform duration-300 group-hover:scale-105"
                                    alt="Video Thumbnail" />
                                <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                                    <div
                                        class="h-16 w-16 bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center text-white transition-transform duration-300 group-hover:scale-110">
                                        <svg class="w-8 h-8 ml-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M5 3l14 9-14 9V3z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5">
                                <h4
                                    class="font-heading text-xl text-slate-800 group-hover:text-primary transition-colors">
                                    Motion Graphics Tutorial</h4>
                                <p class="text-slate-600 text-sm mt-1">A beginner's guide to creating engaging
                                    animations.</p>
                            </div>
                        </div>
                    </div>

                    <div class="video-card-container group shadow-2xl"
                        data-video-url="https://www.youtube.com/embed/_J6FMVFjznw?si=RcEJWTxV7caq_Oqk"
                        data-aos="fade-up" data-aos-delay="600">
                        <div class="video-card-content">
                            <div
                                class="video-thumbnail-wrapper relative overflow-hidden rounded-t-lg h-56 bg-black flex items-center justify-center p-4">
                                <img class="video-thumbnail absolute inset-0 w-full h-full object-cover opacity-70 transition-transform duration-300 group-hover:scale-105"
                                    alt="Video Thumbnail" />
                                <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                                    <div
                                        class="h-16 w-16 bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center text-white transition-transform duration-300 group-hover:scale-110">
                                        <svg class="w-8 h-8 ml-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M5 3l14 9-14 9V3z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5">
                                <h4
                                    class="font-heading text-xl text-slate-800 group-hover:text-primary transition-colors">
                                    Our Company Culture</h4>
                                <p class="text-slate-600 text-sm mt-1">A look inside the team that makes it all happen.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <div id="videoModal"
            class="fixed inset-0 bg-black/80 backdrop-blur-sm flex items-center justify-center p-4 z-50 hidden video-modal-container">
            <div class="relative w-full max-w-4xl bg-black rounded-lg shadow-2xl">
                <button id="closeModal"
                    class="absolute -top-4 -right-4 h-10 w-10 bg-white rounded-full text-slate-800 flex items-center justify-center">&times;</button>
                <div class="aspect-video">
                    <iframe id="youtubePlayer" class="w-full h-full rounded-lg" src="" title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>




        <!-- CTA -->
        <?php include('cta.php') ?>
    </main>

    <!-- Footer -->
    <?php include('footer.php') ?>


    <!-- Scripts -->


    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="main.js"></script>
</body>

</html>