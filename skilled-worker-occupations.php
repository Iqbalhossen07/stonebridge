<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Skilled Worker Visa: Eligible Occupations — Stonebridge Legal</title>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600&family=Merriweather:wght@700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
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
    <div aria-hidden="true" class="pointer-events-none fixed inset-0 -z-10 ">
        <div class="absolute -top-32 -left-24 h-80 w-80 rounded-full blur-3xl opacity-50 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-primary/25 via-primary/10 to-transparent"></div>
        <div class="absolute top-40 -right-24 h-96 w-96 rounded-full blur-3xl opacity-40 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-amber-400/20 via-amber-400/0 to-transparent"></div>
        <div class="absolute inset-0 noise"></div>
    </div>

    <?php include('header.php') ?> 

    <main x-data="occupationData()">
      

          <section class="relative pt-40 pb-24 bg-cover bg-center min-h-[400px] flex items-center justify-center"
            style="background-image: url('https://images.unsplash.com/photo-1733819109723-92a56f6872a5?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
            <div class="absolute inset-0 bg-slate-900/60 z-0"></div>
            <div class="container mx-auto px-6 relative z-10 text-center text-white">
                <div class="space-y-4" data-aos="fade-up">
                    <p class="text-sm font-semibold text-slate-200">
                        <a href="index.html" class="hover:text-primary transition-colors">Home</a> &rsaquo;
                        <span class="text-primary"> Eligible Occupation
                        </span>
                    </p>
                    <h1 class="font-heading text-4xl md:text-5xl"> Eligible Occupation
                    </h1>
                    <p class="max-w-2xl mx-auto text-slate-300">
                           Find out which jobs are eligible for the Skilled Worker visa. Search for your job title or code below.
                    </p>
                </div>
            </div>
        </section>

        <section class="py-24">
            <div class="container mx-auto px-6">
                
                <div class="max-w-2xl mx-auto mb-12" data-aos="fade-up">
                    <input type="text" x-model="searchQuery" placeholder="Search for your eligible occupations and codes..." class="w-full text-lg px-6 py-4 rounded-lg border border-slate-200 focus:ring-2 focus:ring-primary/50 focus:border-primary focus:outline-none shadow-soft-1">
                </div>

                <div class="bg-white rounded-2xl shadow-soft-2 border border-slate-200/80 overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead class="bg-slate-100">
                                <tr>
                                    <th class="p-4 font-semibold text-slate-700 text-left">CODE</th>
                                    <th class="p-4 font-semibold text-slate-700 text-left">JOB TYPE</th>
                                    <th class="p-4 font-semibold text-slate-700 text-left">RELATED JOB TITLES</th>
                                    <th class="p-4 font-semibold text-slate-700 text-center">ELIGIBLE</th>
                                    <th class="p-4 font-semibold text-slate-700 text-left">STANDARD GOING RATE</th>
                                    <th class="p-4 font-semibold text-slate-700 text-left">LOWER GOING RATE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template x-if="filteredOccupations.length === 0">
                                    <tr>
                                        <td colspan="6" class="text-center p-8 text-slate-500">No matching occupations found.</td>
                                    </tr>
                                </template>
                                <template x-for="occ in filteredOccupations" :key="occ.code">
                                    <tr class="border-b border-slate-100 last:border-b-0 hover:bg-primary/5">
                                        <td class="p-4 font-semibold text-primary" x-text="occ.code"></td>
                                        <td class="p-4 font-semibold text-slate-800" x-text="occ.jobType"></td>
                                        <td class="p-4 text-slate-600">
                                            <ul class="space-y-1">
                                                <template x-for="title in occ.relatedTitles" :key="title">
                                                    <li x-text="'- ' + title"></li>
                                                </template>
                                            </ul>
                                        </td>
                                        <td class="p-4 text-center">
                                            <span class="inline-block px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800" x-text="occ.eligible"></span>
                                        </td>
                                        <td class="p-4 text-slate-800" x-text="occ.standardRate"></td>
                                        <td class="p-4 text-slate-600" x-text="occ.lowerRate"></td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <?php include('footer.php') ?>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        AOS.init({ duration: 800, once: true, easing: 'ease-out-cubic' });

        function occupationData() {
            return {
                searchQuery: '',
                occupations: [
                    { code: '1111', jobType: 'Chief executives and senior officials', relatedTitles: ['Chairman', 'Chief executive', 'Diplomat', 'Vice President'], eligible: 'Yes', standardRate: '£84,100 (£43.13 per hour)', lowerRate: '£54,700 (£28.05 per hour)' },
                    { code: '1121', jobType: 'Production managers and directors in manufacturing', relatedTitles: ['Engineering manager', 'Managing director (engineering)', 'Operations manager (manufacturing)'], eligible: 'Yes', standardRate: '£51,500 (£26.41 per hour)', lowerRate: '£37,100 (£19.03 per hour)' },
                    { code: '1122', jobType: 'Production managers and directors in construction', relatedTitles: ['Building services manager', 'Construction manager', 'Director (building construction)'], eligible: 'Yes', standardRate: '£50,100 (£25.69 per hour)', lowerRate: '£38,200 (£19.59 per hour)' },
                    { code: '2112', jobType: 'Biological scientists and biochemists', relatedTitles: ['Biologist', 'Botanist', 'Microbiologist', 'Zoologist'], eligible: 'Yes', standardRate: '£35,900 (£18.41 per hour)', lowerRate: '£28,720 (£14.73 per hour)' },
                    { code: '2121', jobType: 'IT project and programme managers', relatedTitles: ['IT manager', 'Project leader (software design)', 'Telecoms manager'], eligible: 'Yes', standardRate: '£50,900 (£26.10 per hour)', lowerRate: '£36,600 (£18.77 per hour)' },
                    { code: '2122', jobType: 'IT business analysts, architects and systems designers', relatedTitles: ['Business analyst (IT)', 'Data analyst', 'Systems consultant'], eligible: 'Yes', standardRate: '£45,200 (£23.18 per hour)', lowerRate: '£32,500 (£16.67 per hour)' },
                    { code: '2123', jobType: 'Programmers and software development professionals', relatedTitles: ['Analyst programmer', 'Database developer', 'Software engineer', 'Web designer'], eligible: 'Yes', standardRate: '£40,000 (£20.51 per hour)', lowerRate: '£28,800 (£14.77 per hour)' },
                    { code: '2421', jobType: 'Chartered and certified accountants', relatedTitles: ['Auditor (qualified)', 'Company accountant', 'Financial controller'], eligible: 'Yes', standardRate: '£39,000 (£20.00 per hour)', lowerRate: '£28,000 (£14.36 per hour)' },
                    { code: '3534', jobType: 'Finance and investment analysts and advisers', relatedTitles: ['Financial adviser', 'Investment analyst', 'Pensions consultant'], eligible: 'Yes', standardRate: '£36,700 (£18.82 per hour)', lowerRate: '£27,300 (£14.00 per hour)' },
                    // You can add more data here from the official list
                ],
                get filteredOccupations() {
                    if (this.searchQuery.trim() === '') {
                        return this.occupations;
                    }
                    const searchTerm = this.searchQuery.toLowerCase();
                    return this.occupations.filter(occ => {
                        const relatedTitlesString = occ.relatedTitles.join(' ').toLowerCase();
                        return occ.code.includes(searchTerm) ||
                               occ.jobType.toLowerCase().includes(searchTerm) ||
                               relatedTitlesString.includes(searchTerm);
                    });
                }
            }
        }
    </script>
    <script src="main.js"></script>
</body>
</html>