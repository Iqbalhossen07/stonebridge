<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>PSW Graduate Route – Landing Page</title>
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Merriweather:wght@400;700;900&display=swap" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            heading: ['Merriweather', 'serif'],
            body: ['Lora', 'serif'],
          },
          colors: {
            primary: {
              DEFAULT: '#87550D'
            }
          },
          container: { center: true, padding: '2rem' }
        }
      }
    }
  </script>
  <style>
    html { scroll-behavior: smooth; }
    body { font-family: Lora, serif; }
    h1,h2,h3,h4,h5,h6 { font-family: Merriweather, serif; }
    section[id] { scroll-margin-top: 6rem; }
  </style>
</head>
<body class="bg-white text-zinc-900">
  <!-- Header -->
  <header class="sticky top-0 z-50 w-full border-b bg-white/80 backdrop-blur supports-[backdrop-filter]:bg-white/60">
    <div class="container mx-auto flex h-16 items-center justify-between">
      <a href="#top" class="flex items-center gap-2">
        <span class="grid h-8 w-8 place-items-center rounded-md bg-primary/10 ring-1 ring-primary/30">
          <span class="h-3 w-3 rounded-sm bg-primary inline-block"></span>
        </span>
        <span class="font-heading text-lg tracking-tight text-primary">PSW Graduate Route</span>
      </a>
      <nav class="hidden md:flex items-center gap-6 text-sm" id="nav">
        <a href="#what-is" class="text-zinc-700/70 hover:text-zinc-900">What is PSW</a>
        <a href="#eligibility" class="text-zinc-700/70 hover:text-zinc-900">Eligibility</a>
        <a href="#timeline" class="text-zinc-700/70 hover:text-zinc-900">Timeline</a>
        <a href="#documents" class="text-zinc-700/70 hover:text-zinc-900">Documents</a>
        <a href="#tips" class="text-zinc-700/70 hover:text-zinc-900">Tips</a>
        <a href="#faqs" class="text-zinc-700/70 hover:text-zinc-900">FAQs</a>
      </nav>
      <a href="#enquiry" class="rounded-md bg-primary px-4 py-2 text-white hover:bg-[#74460b]">Enquire Now</a>
    </div>
  </header>

  <!-- Breadcrumbs -->
  <div class="container mx-auto pt-4 text-sm text-zinc-600" id="top">
    <nav class="flex items-center gap-2" aria-label="Breadcrumb">
      <a href="#top" class="hover:underline">Home</a>
      <span>/</span>
      <span class="text-zinc-900">PSW Graduate Route</span>
    </nav>
  </div>

  <!-- Hero -->
  <section class="bg-gradient-to-b from-[#87550D0D] via-white to-white py-10 md:py-16">
    <div class="container mx-auto grid gap-8 md:grid-cols-2 md:gap-12">
      <div class="space-y-6">
        <span class="inline-flex items-center gap-2 rounded-full bg-primary/10 px-3 py-1 text-xs font-medium text-primary ring-1 ring-primary/30">
          <!-- graduation-cap icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m22 10-10-5-10 5 10 5 10-5Z"/><path d="M6 12v5c3 1 9 1 12 0v-5"/></svg>
          UK Graduate Route (PSW)
        </span>
        <h1 class="text-4xl md:text-5xl leading-tight tracking-tight">Launch your UK career with confidence</h1>
        <p class="max-w-prose text-lg text-zinc-600">The Post-Study Work (Graduate Route) lets international students stay in the UK after graduation to work, gain experience, and explore opportunities. Here's everything you need—clear, concise, and student-friendly.</p>
        <div class="flex flex-wrap items-center gap-3">
          <a href="#enquiry" class="rounded-md bg-primary px-5 py-2.5 text-white hover:bg-[#74460b]">Enquire Now</a>
          <a href="#what-is" class="text-primary hover:underline">Learn more</a>
        </div>
      </div>
      <div class="relative">
        <div class="absolute -inset-6 rounded-3xl bg-primary/5 blur-2xl" aria-hidden="true"></div>
        <div class="relative overflow-hidden rounded-xl border border-primary/20 bg-white shadow-sm">
          <div class="grid grid-cols-2 gap-4 p-6">
            <div class="rounded-xl border bg-white p-4 shadow-sm">
              <div class="mb-2 inline-flex items-center gap-2 text-sm font-medium text-zinc-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m22 10-10-5-10 5 10 5 10-5Z"/><path d="M6 12v5c3 1 9 1 12 0v-5"/></svg>
                <span>2–3 Years</span>
              </div>
              <p class="text-sm text-zinc-600">Stay after graduation</p>
            </div>
            <div class="rounded-xl border bg-white p-4 shadow-sm">
              <div class="mb-2 inline-flex items-center gap-2 text-sm font-medium text-zinc-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M3.6 9h16.8"/><path d="M3.6 15h16.8"/></svg>
                <span>Any Job</span>
              </div>
              <p class="text-sm text-zinc-600">No sponsor required</p>
            </div>
            <div class="rounded-xl border bg-white p-4 shadow-sm">
              <div class="mb-2 inline-flex items-center gap-2 text-sm font-medium text-zinc-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 12v4a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-4"/><path d="M2 12l10-6 10 6"/></svg>
                <span>Earn & Grow</span>
              </div>
              <p class="text-sm text-zinc-600">Build experience</p>
            </div>
            <div class="rounded-xl border bg-white p-4 shadow-sm">
              <div class="mb-2 inline-flex items-center gap-2 text-sm font-medium text-zinc-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7 10 17l-5-5"/></svg>
                <span>Simple Path</span>
              </div>
              <p class="text-sm text-zinc-600">Clear steps to apply</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- What is PSW -->
  <section id="what-is" class="py-12 md:py-16">
    <div class="container mx-auto grid gap-8 md:grid-cols-5">
      <div class="md:col-span-2">
        <h2 class="text-3xl tracking-tight">What is PSW?</h2>
        <p class="mt-3 max-w-prose text-zinc-600">The Graduate Route (PSW) allows eligible international students who have completed a UK degree to remain in the UK for up to 2 years (3 years for PhD) to work or look for work at any skill level.</p>
      </div>
      <div class="md:col-span-3 grid gap-4 sm:grid-cols-2">
        <div class="flex items-center gap-2 rounded-full border bg-white px-3 py-2 text-sm shadow-sm"><span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m22 10-10-5-10 5 10 5 10-5Z"/><path d="M6 12v5c3 1 9 1 12 0v-5"/></svg></span><span>Must have successfully completed a UK degree</span></div>
        <div class="flex items-center gap-2 rounded-full border bg-white px-3 py-2 text-sm shadow-sm"><span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg></span><span>Apply after receiving final course results</span></div>
        <div class="flex items-center gap-2 rounded-full border bg-white px-3 py-2 text-sm shadow-sm"><span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M3.6 9h16.8"/><path d="M3.6 15h16.8"/></svg></span><span>No job offer or sponsorship needed</span></div>
        <div class="flex items-center gap-2 rounded-full border bg-white px-3 py-2 text-sm shadow-sm"><span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7 10 17l-5-5"/></svg></span><span>Can switch to Skilled Worker later</span></div>
      </div>
    </div>
  </section>

  <!-- Eligibility -->
  <section id="eligibility" class="bg-zinc-50 py-12 md:py-16">
    <div class="container mx-auto">
      <div class="mb-8">
        <h2 class="text-3xl tracking-tight">Eligibility Criteria</h2>
        <p class="text-zinc-600">Check if you meet the essentials.</p>
      </div>
      <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
        <div class="group rounded-xl border bg-white p-5 shadow-sm"><div class="mb-3 inline-flex items-center gap-2 text-primary"><span class="grid h-8 w-8 place-items-center rounded-lg bg-primary/10 ring-1 ring-primary/20"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m22 10-10-5-10 5 10 5 10-5Z"/><path d="M6 12v5c3 1 9 1 12 0v-5"/></svg></span><h3 class="text-lg font-semibold text-zinc-900">UK degree awarded</h3></div><p class="text-sm text-zinc-600">Completed an eligible course at a licensed provider.</p></div>
        <div class="group rounded-xl border bg-white p-5 shadow-sm"><div class="mb-3 inline-flex items-center gap-2 text-primary"><span class="grid h-8 w-8 place-items-center rounded-lg bg-primary/10 ring-1 ring-primary/20"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4"/><path d="M21 12A9 9 0 1 1 3 12a9 9 0 0 1 18 0Z"/></svg></span><h3 class="text-lg font-semibold text-zinc-900">Valid student visa</h3></div><p class="text-sm text-zinc-600">Held a Student (Tier 4) visa at the time of application.</p></div>
        <div class="group rounded-xl border bg-white p-5 shadow-sm"><div class="mb-3 inline-flex items-center gap-2 text-primary"><span class="grid h-8 w-8 place-items-center rounded-lg bg-primary/10 ring-1 ring-primary/20"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16l4-2 4 2 4-2 4 2V8Z"/></svg></span><h3 class="text-lg font-semibold text-zinc-900">CAS & BRP details</h3></div><p class="text-sm text-zinc-600">Have your Confirmation of Acceptance and BRP/Share Code.</p></div>
        <div class="group rounded-xl border bg-white p-5 shadow-sm"><div class="mb-3 inline-flex items-center gap-2 text-primary"><span class="grid h-8 w-8 place-items-center rounded-lg bg-primary/10 ring-1 ring-primary/20"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 4.97-4.03 9-9 9S3 14.97 3 10 7.03 1 12 1s9 4.03 9 9Z"/></svg></span><h3 class="text-lg font-semibold text-zinc-900">In the UK</h3></div><p class="text-sm text-zinc-600">You must apply from inside the UK.</p></div>
        <div class="group rounded-xl border bg-white p-5 shadow-sm"><div class="mb-3 inline-flex items-center gap-2 text-primary"><span class="grid h-8 w-8 place-items-center rounded-lg bg-primary/10 ring-1 ring-primary/20"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="14" rx="2"/><path d="M2 10h20"/></svg></span><h3 class="text-lg font-semibold text-zinc-900">Application fee & IHS</h3></div><p class="text-sm text-zinc-600">Pay the visa fee and Immigration Health Surcharge.</p></div>
        <div class="group rounded-xl border bg-white p-5 shadow-sm"><div class="mb-3 inline-flex items-center gap-2 text-primary"><span class="grid h-8 w-8 place-items-center rounded-lg bg-primary/10 ring-1 ring-primary/20"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7 10 17l-5-5"/></svg></span><h3 class="text-lg font-semibold text-zinc-900">No refusals for deception</h3></div><p class="text-sm text-zinc-600">Clean immigration record for a smooth process.</p></div>
      </div>
    </div>
  </section>

  <!-- Timeline -->
  <section id="timeline" class="py-12 md:py-16">
    <div class="container mx-auto">
      <div class="mb-8"><h2 class="text-3xl tracking-tight">Application Timeline</h2><p class="text-zinc-600">Follow these steps from results to approval.</p></div>
      <ol class="relative border-s border-zinc-200 ps-6">
        <li class="mb-8 ms-4"><span class="absolute -start-1.5 mt-1.5 h-3 w-3 rounded-full border-2 border-primary bg-white"></span><h3 class="font-semibold">1. Confirm results</h3><p class="text-zinc-600">Wait until your university confirms your final course results.</p></li>
        <li class="mb-8 ms-4"><span class="absolute -start-1.5 mt-1.5 h-3 w-3 rounded-full border-2 border-primary bg-white"></span><h3 class="font-semibold">2. Prepare documents</h3><p class="text-zinc-600">Gather BRP/share code, passport, CAS/letter from your university.</p></li>
        <li class="mb-8 ms-4"><span class="absolute -start-1.5 mt-1.5 h-3 w-3 rounded-full border-2 border-primary bg-white"></span><h3 class="font-semibold">3. Apply online</h3><p class="text-zinc-600">Complete the application form and pay the fee + IHS.</p></li>
        <li class="mb-8 ms-4"><span class="absolute -start-1.5 mt-1.5 h-3 w-3 rounded-full border-2 border-primary bg-white"></span><h3 class="font-semibold">4. Biometrics / ID check</h3><p class="text-zinc-600">Use the UKVI app or attend a visa centre if requested.</p></li>
        <li class="mb-2 ms-4"><span class="absolute -start-1.5 mt-1.5 h-3 w-3 rounded-full border-2 border-primary bg-white"></span><h3 class="font-semibold">5. Decision & status</h3><p class="text-zinc-600">Track your application and receive your digital immigration status.</p></li>
      </ol>
    </div>
  </section>

  <!-- Documents -->
  <section id="documents" class="bg-zinc-50 py-12 md:py-16">
    <div class="container mx-auto grid gap-8 md:grid-cols-5">
      <div class="md:col-span-2"><h2 class="text-3xl tracking-tight">Required Documents</h2><p class="text-zinc-600">Keep this checklist handy before you apply.</p></div>
      <div class="md:col-span-3 grid gap-3">
        <div class="flex items-start gap-3 rounded-lg border bg-white p-4 shadow-sm"><svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-5 w-5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 2v4a2 2 0 0 0 2 2h4"/><path d="M18 2H8a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2Z"/></svg><p class="font-medium">Passport (valid)</p></div>
        <div class="flex items-start gap-3 rounded-lg border bg-white p-4 shadow-sm"><svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-5 w-5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="3" x2="21" y1="10" y2="10"/></svg><p class="font-medium">BRP or digital immigration status</p></div>
        <div class="flex items-start gap-3 rounded-lg border bg-white p-4 shadow-sm"><svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-5 w-5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16l4-2 4 2 4-2 4 2V8Z"/></svg><p class="font-medium">CAS number or university completion letter</p></div>
        <div class="flex items-start gap-3 rounded-lg border bg-white p-4 shadow-sm"><svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-5 w-5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="14" rx="2"/><path d="M2 10h20"/></svg><p class="font-medium">Payment card for fee & IHS</p></div>
        <div class="flex items-start gap-3 rounded-lg border bg-white p-4 shadow-sm"><svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-5 w-5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 2H5a2 2 0 0 0-2 2v16"/><path d="m7 22 3-3 3 3V2"/></svg><p class="font-medium">TB test certificate (if applicable)</p></div>
        <div class="flex items-start gap-3 rounded-lg border bg-white p-4 shadow-sm"><svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-5 w-5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 8v8"/><path d="M8 12h8"/><circle cx="12" cy="12" r="10"/></svg><p class="font-medium">Police registration (if applicable)</p></div>
      </div>
    </div>
  </section>

  <!-- Tips & Mistakes -->
  <section id="tips" class="py-12 md:py-16">
    <div class="container mx-auto grid gap-6 md:grid-cols-2">
      <div class="rounded-xl border border-green-500/30 bg-white shadow-sm">
        <div class="p-6">
          <div class="mb-4 flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18h6"/><path d="M10 22h4"/><path d="M2 12h3"/><path d="M19 12h3"/><path d="M12 2v4"/><path d="M5 22h14"/><path d="M8 12a4 4 0 1 1 8 0"/></svg><h3 class="text-2xl">Tips</h3></div>
          <ul class="space-y-3">
            <li class="flex gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-5 w-5 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7 10 17l-5-5"/></svg><span>Apply soon after results to avoid gaps.</span></li>
            <li class="flex gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-5 w-5 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7 10 17l-5-5"/></svg><span>Keep your contact details updated with UKVI.</span></li>
            <li class="flex gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-5 w-5 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7 10 17l-5-5"/></svg><span>Use the UK Immigration ID Check app if possible.</span></li>
            <li class="flex gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-5 w-5 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7 10 17l-5-5"/></svg><span>Save all confirmations and receipts.</span></li>
          </ul>
        </div>
      </div>
      <div class="rounded-xl border border-red-500/30 bg-white shadow-sm">
        <div class="p-6">
          <div class="mb-4 flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0Z"/><line x1="12" x2="12" y1="9" y2="13"/><line x1="12" x2="12.01" y1="17" y2="17"/></svg><h3 class="text-2xl">Common Mistakes</h3></div>
          <ul class="space-y-3">
            <li class="flex gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-5 w-5 text-red-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0Z"/><line x1="12" x2="12" y1="9" y2="13"/><line x1="12" x2="12.01" y1="17" y2="17"/></svg><span>Applying before results are officially confirmed.</span></li>
            <li class="flex gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-5 w-5 text-red-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0Z"/><line x1="12" x2="12" y1="9" y2="13"/><line x1="12" x2="12.01" y1="17" y2="17"/></svg><span>Using an outdated CAS or wrong course details.</span></li>
            <li class="flex gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-5 w-5 text-red-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0Z"/><line x1="12" x2="12" y1="9" y2="13"/><line x1="12" x2="12.01" y1="17" y2="17"/></svg><span>Leaving the UK before a decision (if required to stay).</span></li>
            <li class="flex gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-5 w-5 text-red-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0Z"/><line x1="12" x2="12" y1="9" y2="13"/><line x1="12" x2="12.01" y1="17" y2="17"/></svg><span>Ignoring emails from UKVI or your university.</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQs -->
  <section id="faqs" class="bg-zinc-50 py-12 md:py-16">
    <div class="container mx-auto">
      <div class="mb-6"><h2 class="text-3xl tracking-tight">FAQs</h2><p class="text-zinc-600">Quick answers to popular questions.</p></div>
      <div class="divide-y rounded-xl border bg-white shadow-sm">
        <details class="group p-6" open>
          <summary class="flex cursor-pointer list-none items-center justify-between font-medium">Do I need a job offer to apply?<span class="transition group-open:rotate-180">▾</span></summary>
          <p class="mt-3 text-zinc-600">No. The Graduate Route does not require a job offer or sponsor. You can work at any skill level.</p>
        </details>
        <details class="group p-6">
          <summary class="flex cursor-pointer list-none items-center justify-between font-medium">How long can I stay?<span class="transition group-open:rotate-180">▾</span></summary>
          <p class="mt-3 text-zinc-600">2 years after completing an eligible degree (3 years for PhD graduates).</p>
        </details>
        <details class="group p-6">
          <summary class="flex cursor-pointer list-none items-center justify-between font-medium">Can I switch to a Skilled Worker visa?<span class="transition group-open:rotate-180">▾</span></summary>
          <p class="mt-3 text-zinc-600">Yes. You may switch when you meet the Skilled Worker requirements and have a sponsoring employer.</p>
        </details>
        <details class="group p-6">
          <summary class="flex cursor-pointer list-none items-center justify-between font-medium">Can I be self-employed?<span class="transition group-open:rotate-180">▾</span></summary>
          <p class="mt-3 text-zinc-600">Yes, within certain limits. Ensure you comply with UKVI rules for self-employment and taxes.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- Enquiry -->
  <section id="enquiry" class="py-12 md:py-16">
    <div class="container mx-auto grid gap-8 md:grid-cols-5">
      <div class="md:col-span-2">
        <h2 class="text-3xl tracking-tight">PSW Enquiry</h2>
        <p class="text-zinc-600">Get personalised guidance for your Graduate Route application.</p>
        <div class="mt-6 grid gap-3 text-sm">
          <div class="flex items-center gap-2 text-zinc-800"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.79 19.79 0 0 1 11 19a19.5 19.5 0 0 1-7-7 19.79 19.79 0 0 1-2.92-8.82A2 2 0 0 1 3.11 1h3a2 2 0 0 1 2 1.72c.12.89.3 1.76.54 2.61a2 2 0 0 1-.45 2.11L7 8a16 16 0 0 0 9 9l.56-.56a2 2 0 0 1 2.11-.45c.85.24 1.72.42 2.61.54A2 2 0 0 1 22 16.92Z"/></svg><span>+44 20 0000 0000</span></div>
          <div class="flex items-center gap-2 text-zinc-800"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m22 6-10 7L2 6"/><rect width="20" height="16" x="2" y="4" rx="2"/></svg><span>admissions@example.com</span></div>
        </div>
      </div>
      <div class="md:col-span-3">
        <div class="rounded-xl border border-primary/20 bg-white shadow-sm">
          <form class="grid gap-4 p-6" id="enquiry-form">
            <div class="grid gap-4 sm:grid-cols-2">
              <label class="grid gap-2">
                <span class="text-sm">Full name</span>
                <input name="name" required placeholder="Your name" class="w-full rounded-md border px-3 py-2 outline-none focus:ring-2 focus:ring-primary" />
              </label>
              <label class="grid gap-2">
                <span class="text-sm">Email</span>
                <input type="email" name="email" required placeholder="you@example.com" class="w-full rounded-md border px-3 py-2 outline-none focus:ring-2 focus:ring-primary" />
              </label>
              <label class="grid gap-2">
                <span class="text-sm">Phone</span>
                <input name="phone" placeholder="+44" class="w-full rounded-md border px-3 py-2 outline-none focus:ring-2 focus:ring-primary" />
              </label>
              <label class="grid gap-2">
                <span class="text-sm">University</span>
                <input name="university" placeholder="e.g. University of London" class="w-full rounded-md border px-3 py-2 outline-none focus:ring-2 focus:ring-primary" />
              </label>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
              <label class="grid gap-2">
                <span class="text-sm">Graduation date</span>
                <input type="month" name="graduation" class="w-full rounded-md border px-3 py-2 outline-none focus:ring-2 focus:ring-primary" />
              </label>
              <label class="grid gap-2">
                <span class="text-sm">Visa status</span>
                <select name="status" class="w-full rounded-md border bg-white px-3 py-2 outline-none focus:ring-2 focus:ring-primary">
                  <option value="" disabled selected>Select status</option>
                  <option value="student">Student (Tier 4)</option>
                  <option value="psw">On PSW</option>
                  <option value="other">Other</option>
                </select>
              </label>
            </div>
            <label class="grid gap-2">
              <span class="text-sm">How can we help?</span>
              <textarea name="message" rows="4" placeholder="Briefly describe your situation" class="w-full rounded-md border px-3 py-2 outline-none focus:ring-2 focus:ring-primary"></textarea>
            </label>
            <div class="flex items-center justify-between gap-4">
              <p class="text-xs text-zinc-600">By submitting, you agree to be contacted about your enquiry.</p>
              <button class="rounded-md bg-primary px-5 py-2.5 text-white hover:bg-[#74460b]" type="submit">Submit Enquiry</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="border-t bg-white">
    <div class="container mx-auto grid gap-6 py-10 md:grid-cols-2">
      <div>
        <a href="#top" class="inline-flex items-center gap-2">
          <span class="grid h-8 w-8 place-items-center rounded-md bg-primary/10 ring-1 ring-primary/30"><span class="h-3 w-3 rounded-sm bg-primary inline-block"></span></span>
          <span class="font-heading text-lg tracking-tight text-primary">PSW Graduate Route</span>
        </a>
        <p class="mt-3 max-w-prose text-sm text-zinc-600">Empowering international graduates with clear guidance to successfully obtain their Post-Study Work visa.</p>
      </div>
      <nav class="flex items-end md:justify-end"><div class="flex gap-6 text-sm"><a href="#what-is" class="text-zinc-700/70 hover:text-zinc-900">About</a><a href="#faqs" class="text-zinc-700/70 hover:text-zinc-900">FAQs</a><a href="#enquiry" class="text-zinc-700/70 hover:text-zinc-900">Enquiry</a></div></nav>
    </div>
    <div class="border-t py-4">
      <div class="container mx-auto flex items-center justify-between text-xs text-zinc-600">
        <p>© <span id="year"></span> PSW Graduate Route. All rights reserved.</p>
        <p class="hidden sm:block">Built for students. Stay compliant, stay confident.</p>
      </div>
    </div>
  </footer>

  <script>
    // Year
    document.getElementById('year').textContent = new Date().getFullYear();

    // Scroll spy: highlight active nav link
    const sectionIds = ['what-is','eligibility','timeline','documents','tips','faqs','enquiry'];
    const navLinks = Array.from(document.querySelectorAll('#nav a'));
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          const id = e.target.id;
          navLinks.forEach(a => a.classList.remove('text-primary','font-semibold'));
          const active = document.querySelector(`#nav a[href="#$ {id}"]`.replace(' $ ','').replace(' {','{')) || document.querySelector(`#nav a[href="#${id}"]`);
          if (active) { active.classList.add('text-primary','font-semibold'); }
        }
      });
    }, { threshold: 0.6, rootMargin: '-20% 0px -60% 0px' });
    sectionIds.forEach(id => { const el = document.getElementById(id); if (el) observer.observe(el); });

    // Enquiry form submit (demo only)
    document.getElementById('enquiry-form').addEventListener('submit', function (e) {
      e.preventDefault();
      const form = e.currentTarget;
      const data = new FormData(form);
      const name = data.get('name') || 'student';
      alert(`Thanks, ${name}! We'll get back to you shortly.`);
      form.reset();
    });
  </script>
</body>
</html>
