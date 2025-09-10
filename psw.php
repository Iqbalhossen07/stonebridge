<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PSW (Graduate Route) — Standalone</title>
    <meta name="description" content="PSW (Graduate Route) landing page with TailwindCSS: overview, eligibility, process, documents checklist, tips, FAQs, and enquiry form." />

    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              brand: '#87550D',
              brandfg: '#ffffff',
            },
            fontFamily: {
              heading: ['Merriweather', 'serif'],
              body: ['Lora', 'serif'],
            },
            borderRadius: {
              md: '10px',
            },
          },
        },
      };
    </script>
    <style>
      html{scroll-behavior:smooth}
      body{font-family: "Lora", serif}
      h1,h2,h3,h4,h5,h6{font-family: "Merriweather", serif}
      ::selection{background: rgba(135,85,13,.15)}
    </style>
  </head>
  <body class="bg-white text-zinc-900">
    <header class="sticky top-0 z-50 border-b bg-white/80 backdrop-blur">
      <div class="mx-auto max-w-6xl h-16 px-4 flex items-center justify-between">
        <a href="#" class="flex items-center gap-2 font-bold tracking-tight">
          <span class="h-8 w-8 grid place-content-center rounded-md bg-brand/10 ring-1 ring-brand/20 text-brand">PSW</span>
          <span class="text-lg">Graduate Route</span>
        </a>
        <nav class="hidden md:flex items-center gap-6 text-sm">
          <a href="#what-is-psw" class="hover:text-brand">About</a>
          <a href="#eligibility" class="hover:text-brand">Eligibility</a>
          <a href="#process" class="hover:text-brand">Process</a>
          <a href="#documents" class="hover:text-brand">Documents</a>
          <a href="#faqs" class="hover:text-brand">FAQs</a>
        </nav>
        <div class="flex items-center gap-2">
          <button id="menuBtn" class="md:hidden rounded-md border px-3 py-2 text-sm">Menu</button>
          <a href="#enquiry" class="hidden sm:inline-flex items-center rounded-md bg-brand px-4 py-2 text-white">PSW Enquiry</a>
        </div>
      </div>
      <div id="mobileMenu" class="md:hidden hidden border-t bg-white">
        <div class="mx-auto max-w-6xl px-4 py-3 flex flex-col gap-3 text-sm">
          <a href="#what-is-psw" class="hover:text-brand">About</a>
          <a href="#eligibility" class="hover:text-brand">Eligibility</a>
          <a href="#process" class="hover:text-brand">Process</a>
          <a href="#documents" class="hover:text-brand">Documents</a>
          <a href="#faqs" class="hover:text-brand">FAQs</a>
          <a href="#enquiry" class="inline-flex w-max rounded-md bg-brand px-3 py-2 text-white">PSW Enquiry</a>
        </div>
      </div>
    </header>

    <!-- Hero -->
    <section class="relative overflow-hidden bg-gradient-to-br from-brand/5 via-amber-50 to-white">
      <div class="absolute inset-0 pointer-events-none" style="-webkit-mask-image:radial-gradient(ellipse at center, black, transparent 70%);mask-image:radial-gradient(ellipse at center, black, transparent 70%)">
        <div class="absolute -top-24 -right-24 h-72 w-72 rounded-full bg-brand/10 blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 h-72 w-72 rounded-full bg-brand/10 blur-3xl"></div>
      </div>
      <div class="mx-auto max-w-6xl px-4 pt-8">
        <nav class="text-sm text-zinc-500 flex items-center gap-2" aria-label="Breadcrumb">
          <a href="#" class="hover:text-zinc-700">Home</a>
          <svg viewBox="0 0 20 20" class="h-4 w-4"><path fill="currentColor" d="M7 5l5 5-5 5"/></svg>
          <span class="text-zinc-700">PSW (Graduate Route)</span>
        </nav>
      </div>
      <div class="mx-auto max-w-6xl grid items-center gap-10 px-4 py-12 sm:py-16 md:grid-cols-2">
        <div>
          <p class="inline-flex items-center gap-2 rounded-full border bg-white/60 px-3 py-1 text-sm backdrop-blur">
            <svg class="h-4 w-4 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 22H2"/><path d="M7 22V12"/><path d="M17 22V12"/><path d="M2 7l10-5 10 5"/><path d="M2 7l10 5 10-5"/><path d="M12 12v10"/></svg>
            Post‑Study Work in the UK
          </p>
          <h1 class="mt-4 text-4xl sm:text-5xl md:text-6xl font-black leading-tight">
            PSW Graduate Route
            <span class="block text-brand">Work after your degree</span>
          </h1>
          <p class="mt-4 text-lg text-zinc-600">Stay in the UK and kick‑start your career. A simple, student‑friendly guide to eligibility, documents, timeline, and FAQs.</p>
          <div class="mt-6 flex flex-wrap items-center gap-3">
            <a href="#enquiry" class="inline-flex items-center rounded-md bg-brand px-6 py-3 text-white">Get PSW Help</a>
            <a href="#what-is-psw" class="inline-flex items-center gap-1 text-brand hover:underline">Learn more <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg></a>
          </div>
          <div class="mt-8 grid grid-cols-2 gap-3 sm:grid-cols-3">
            <div class="flex items-center gap-3 rounded-lg border bg-white p-4 shadow-sm">
              <div class="rounded-md bg-brand/10 p-2 text-brand">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
              </div>
              <div>
                <p class="text-xs uppercase tracking-wide text-zinc-500">Validity</p>
                <p class="text-lg font-bold">2 years</p>
              </div>
            </div>
            <div class="flex items-center gap-3 rounded-lg border bg-white p-4 shadow-sm">
              <div class="rounded-md bg-brand/10 p-2 text-brand">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
              </div>
              <div>
                <p class="text-xs uppercase tracking-wide text-zinc-500">Switchable</p>
                <p class="text-lg font-bold">Yes</p>
              </div>
            </div>
            <div class="flex items-center gap-3 rounded-lg border bg-white p-4 shadow-sm">
              <div class="rounded-md bg-brand/10 p-2 text-brand">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              </div>
              <div>
                <p class="text-xs uppercase tracking-wide text-zinc-500">Processing</p>
                <p class="text-lg font-bold">~8 weeks</p>
              </div>
            </div>
          </div>
        </div>
        <div class="relative">
          <div class="mx-auto aspect-[4/3] w-full max-w-lg rounded-2xl border bg-gradient-to-br from-white to-amber-50 p-6 shadow-xl">
            <div class="grid h-full place-items-center rounded-xl border border-dashed bg-white/60 p-6 text-center">
              <div class="max-w-xs">
                <svg class="mx-auto mb-4 h-12 w-12 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 22H2"/><path d="M7 22V12"/><path d="M17 22V12"/><path d="M2 7l10-5 10 5"/><path d="M2 7l10 5 10-5"/><path d="M12 12v10"/></svg>
                <p class="text-lg font-bold">Ready for the next step?</p>
                <p class="mt-2 text-zinc-600">Explore eligibility, documents, and apply with confidence.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- What is PSW -->
    <section id="what-is-psw" class="mx-auto max-w-6xl grid gap-8 px-4 py-16 md:grid-cols-2 scroll-mt-24">
      <div class="max-w-3xl">
        <p class="mb-2 text-sm tracking-wide uppercase text-brand/80">Overview</p>
        <h2 class="text-3xl sm:text-4xl leading-tight font-black">What is the PSW (Graduate Route)?</h2>
        <p class="mt-3 text-lg text-zinc-600">The Graduate Route lets international students who have completed an eligible UK degree stay and work (or look for work) for up to 2 years (3 years for PhD). No sponsorship required.</p>
      </div>
      <div class="grid content-center gap-4">
        <div class="rounded-xl border bg-white p-6 shadow-sm">
          <div class="flex items-start gap-3">
            <div class="rounded-md bg-brand/10 p-2 text-brand">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
            </div>
            <div>
              <p class="font-semibold">Why it matters</p>
              <p class="mt-1 text-zinc-600">Build UK work experience, switch to a Skilled Worker visa later, and explore opportunities across sectors.</p>
            </div>
          </div>
        </div>
        <div class="rounded-xl border bg-white p-6 shadow-sm">
          <div class="flex items-start gap-3">
            <div class="rounded-md bg-brand/10 p-2 text-brand">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
            </div>
            <div>
              <p class="font-semibold">Simple requirements</p>
              <p class="mt-1 text-zinc-600">You must complete an eligible course with a Student visa and apply from within the UK.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Eligibility -->
    <section id="eligibility" class="bg-gradient-to-b from-white to-amber-50/30 py-16 scroll-mt-24">
      <div class="mx-auto max-w-6xl px-4">
        <div class="max-w-3xl">
          <p class="mb-2 text-sm tracking-wide uppercase text-brand/80">Eligibility</p>
          <h2 class="text-3xl sm:text-4xl leading-tight font-black">Who is eligible?</h2>
          <p class="mt-3 text-lg text-zinc-600">A quick checklist to confirm you can apply.</p>
        </div>
        <div class="mt-8 grid gap-4 md:grid-cols-2">
          <div class="flex items-start gap-3 rounded-xl border bg-white p-4 shadow-sm"><svg class="mt-0.5 h-5 w-5 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg><p>Completed an eligible UK degree (e.g., Bachelor’s, Master’s, PhD)</p></div>
          <div class="flex items-start gap-3 rounded-xl border bg-white p-4 shadow-sm"><svg class="mt-0.5 h-5 w-5 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg><p>Held a valid Student visa at the time of course completion</p></div>
          <div class="flex items-start gap-3 rounded-xl border bg-white p-4 shadow-sm"><svg class="mt-0.5 h-5 w-5 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg><p>Applied from within the UK</p></div>
          <div class="flex items-start gap-3 rounded-xl border bg-white p-4 shadow-sm"><svg class="mt-0.5 h-5 w-5 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg><p>University has reported your successful completion to the Home Office</p></div>
          <div class="flex items-start gap-3 rounded-xl border bg-white p-4 shadow-sm"><svg class="mt-0.5 h-5 w-5 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg><p>Valid passport and BRP (if applicable)</p></div>
          <div class="flex items-start gap-3 rounded-xl border bg-white p-4 shadow-sm"><svg class="mt-0.5 h-5 w-5 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg><p>No requirement for job offer or minimum salary</p></div>
        </div>
      </div>
    </section>

    <!-- Process Timeline -->
    <section id="process" class="mx-auto max-w-6xl px-4 py-16 scroll-mt-24">
      <div class="max-w-3xl">
        <p class="mb-2 text-sm tracking-wide uppercase text-brand/80">Application Process</p>
        <h2 class="text-3xl sm:text-4xl leading-tight font-black">How to apply</h2>
        <p class="mt-3 text-lg text-zinc-600">Follow these steps from course completion to decision.</p>
      </div>
      <ol id="timeline" class="mt-10 grid gap-6 md:grid-cols-4">
        <li class="relative">
          <button class="step flex w-full items-start gap-3 text-left" data-step="0">
            <div class="badge grid h-10 w-10 place-items-center rounded-full font-bold bg-brand text-white">1</div>
            <div>
              <p class="font-semibold">Confirm eligibility</p>
              <p class="mt-1 text-zinc-600">Check your course completion and university report.</p>
            </div>
          </button>
          <div class="bar mt-4 hidden h-1 w-full rounded bg-brand/20 md:block"><div class="fill h-1 rounded bg-brand" style="width:50%"></div></div>
        </li>
        <li class="relative">
          <button class="step flex w-full items-start gap-3 text-left" data-step="1">
            <div class="badge grid h-10 w-10 place-items-center rounded-full font-bold bg-brand/10 text-brand">2</div>
            <div>
              <p class="font-semibold">Prepare documents</p>
              <p class="mt-1 text-zinc-600">Gather passport, BRP, CAS/degree confirmation, bank details.</p>
            </div>
          </button>
          <div class="bar mt-4 hidden h-1 w-full rounded bg-brand/20 md:block"><div class="fill h-1 rounded bg-brand" style="width:0%"></div></div>
        </li>
        <li class="relative">
          <button class="step flex w-full items-start gap-3 text-left" data-step="2">
            <div class="badge grid h-10 w-10 place-items-center rounded-full font-bold bg-brand/10 text-brand">3</div>
            <div>
              <p class="font-semibold">Apply online + pay</p>
              <p class="mt-1 text-zinc-600">Complete application, pay fee + IHS surcharge, book biometrics if asked.</p>
            </div>
          </button>
          <div class="bar mt-4 hidden h-1 w-full rounded bg-brand/20 md:block"><div class="fill h-1 rounded bg-brand" style="width:0%"></div></div>
        </li>
        <li class="relative">
          <button class="step flex w-full items-start gap-3 text-left" data-step="3">
            <div class="badge grid h-10 w-10 place-items-center rounded-full font-bold bg-brand/10 text-brand">4</div>
            <div>
              <p class="font-semibold">Decision & BRP</p>
              <p class="mt-1 text-zinc-600">Receive eVisa/BRP; start or continue working without sponsorship.</p>
            </div>
          </button>
        </li>
      </ol>
    </section>

    <!-- Documents Checklist -->
    <section id="documents" class="bg-white py-16 scroll-mt-24">
      <div class="mx-auto max-w-6xl px-4">
        <div class="max-w-3xl">
          <p class="mb-2 text-sm tracking-wide uppercase text-brand/80">Checklist</p>
          <h2 class="text-3xl sm:text-4xl leading-tight font-black">Required documents</h2>
          <p class="mt-3 text-lg text-zinc-600">Tick through the essentials before you apply.</p>
        </div>
        <form id="docsForm" class="mt-6 grid gap-3 md:grid-cols-2 lg:grid-cols-3">
          <label class="flex items-center gap-3 rounded-lg border bg-white p-3 shadow-sm"><input type="checkbox" data-doc="Passport" class="h-4 w-4 rounded border-zinc-300 text-brand focus:ring-brand"/><span>Passport</span></label>
          <label class="flex items-center gap-3 rounded-lg border bg-white p-3 shadow-sm"><input type="checkbox" data-doc="BRP (if issued)" class="h-4 w-4 rounded border-zinc-300 text-brand focus:ring-brand"/><span>BRP (if issued)</span></label>
          <label class="flex items-center gap-3 rounded-lg border bg-white p-3 shadow-sm"><input type="checkbox" data-doc="Confirmation of degree completion" class="h-4 w-4 rounded border-zinc-300 text-brand focus:ring-brand"/><span>Confirmation of degree completion</span></label>
          <label class="flex items-center gap-3 rounded-lg border bg-white p-3 shadow-sm"><input type="checkbox" data-doc="Current address in the UK" class="h-4 w-4 rounded border-zinc-300 text-brand focus:ring-brand"/><span>Current address in the UK</span></label>
          <label class="flex items-center gap-3 rounded-lg border bg-white p-3 shadow-sm"><input type="checkbox" data-doc="Payment card for fees" class="h-4 w-4 rounded border-zinc-300 text-brand focus:ring-brand"/><span>Payment card for fees</span></label>
          <label class="flex items-center gap-3 rounded-lg border bg-white p-3 shadow-sm"><input type="checkbox" data-doc="TB test (if required)" class="h-4 w-4 rounded border-zinc-300 text-brand focus:ring-brand"/><span>TB test (if required)</span></label>
          <label class="flex items-center gap-3 rounded-lg border bg-white p-3 shadow-sm"><input type="checkbox" data-doc="Police registration (if applicable)" class="h-4 w-4 rounded border-zinc-300 text-brand focus:ring-brand"/><span>Police registration (if applicable)</span></label>
          <label class="flex items-center gap-3 rounded-lg border bg-white p-3 shadow-sm"><input type="checkbox" data-doc="CAS or university reference" class="h-4 w-4 rounded border-zinc-300 text-brand focus:ring-brand"/><span>CAS or university reference</span></label>
          <label class="flex items-center gap-3 rounded-lg border bg-white p-3 shadow-sm"><input type="checkbox" data-doc="Biometrics appointment (if asked)" class="h-4 w-4 rounded border-zinc-300 text-brand focus:ring-brand"/><span>Biometrics appointment (if asked)</span></label>
        </form>
      </div>
    </section>

    <!-- Tips -->
    <section id="tips" class="bg-gradient-to-b from-amber-50/30 to-white py-16 scroll-mt-24">
      <div class="mx-auto max-w-6xl px-4">
        <div class="max-w-3xl">
          <p class="mb-2 text-sm tracking-wide uppercase text-brand/80">Tips</p>
          <h2 class="text-3xl sm:text-4xl leading-tight font-black">Common mistakes to avoid</h2>
          <p class="mt-3 text-lg text-zinc-600">Practical pointers for a smooth application.</p>
        </div>
        <div class="mt-8 grid gap-4 md:grid-cols-3">
          <div class="rounded-xl border bg-white p-6 shadow-sm">
            <div class="mb-3 inline-flex rounded-md bg-brand/10 p-2 text-brand">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            </div>
            <p class="font-semibold">Applying too early</p>
            <p class="mt-1 text-zinc-600">Wait until your university has reported successful completion.</p>
          </div>
          <div class="rounded-xl border bg-white p-6 shadow-sm">
            <div class="mb-3 inline-flex rounded-md bg-brand/10 p-2 text-brand">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
            </div>
            <p class="font-semibold">Wrong visa route</p>
            <p class="mt-1 text-zinc-600">Apply under Graduate Route, not Skilled Worker (yet).</p>
          </div>
          <div class="rounded-xl border bg-white p-6 shadow-sm">
            <div class="mb-3 inline-flex rounded-md bg-brand/10 p-2 text-brand">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
            </div>
            <p class="font-semibold">Missing docs</p>
            <p class="mt-1 text-zinc-600">Double‑check passport/BRP and university confirmation.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQs -->
    <section id="faqs" class="mx-auto max-w-6xl px-4 py-16 scroll-mt-24">
      <div class="max-w-3xl">
        <p class="mb-2 text-sm tracking-wide uppercase text-brand/80">FAQs</p>
        <h2 class="text-3xl sm:text-4xl leading-tight font-black">Frequently asked questions</h2>
      </div>
      <div class="mt-6 rounded-xl border bg-white p-2 sm:p-4">
        <details class="group border-b last:border-none">
          <summary class="flex cursor-pointer list-none items-center justify-between py-4 font-medium">
            Can I switch to the Skilled Worker visa later?
            <span class="ml-4 text-zinc-500 group-open:rotate-180 transition-transform">⌄</span>
          </summary>
          <div class="pb-4 pt-0 text-zinc-700">Yes. Many graduates switch once they have an eligible job offer from a sponsor.</div>
        </details>
        <details class="group border-b last:border-none">
          <summary class="flex cursor-pointer list-none items-center justify-between py-4 font-medium">
            Do I need a job offer to apply?
            <span class="ml-4 text-zinc-500 group-open:rotate-180 transition-transform">⌄</span>
          </summary>
          <div class="pb-4 pt-0 text-zinc-700">No, a job offer is not required for the Graduate Route.</div>
        </details>
        <details class="group border-b last:border-none">
          <summary class="flex cursor-pointer list-none items-center justify-between py-4 font-medium">
            How long can I stay?
            <span class="ml-4 text-zinc-500 group-open:rotate-180 transition-transform">⌄</span>
          </summary>
          <div class="pb-4 pt-0 text-zinc-700">2 years for most graduates; 3 years if you completed a PhD or doctoral qualification.</div>
        </details>
        <details class="group">
          <summary class="flex cursor-pointer list-none items-center justify-between py-4 font-medium">
            Can I bring dependants?
            <span class="ml-4 text-zinc-500 group-open:rotate-180 transition-transform">⌄</span>
          </summary>
          <div class="pb-4 pt-0 text-zinc-700">Dependants are only eligible if they were your dependants on your Student visa.</div>
        </details>
      </div>
    </section>

    <!-- Enquiry Form -->
    <section id="enquiry" class="bg-amber-50/40 py-16 scroll-mt-24">
      <div class="mx-auto max-w-6xl px-4">
        <div class="max-w-3xl">
          <p class="mb-2 text-sm tracking-wide uppercase text-brand/80">Need help?</p>
          <h2 class="text-3xl sm:text-4xl leading-tight font-black">PSW Enquiry Form</h2>
          <p class="mt-3 text-lg text-zinc-600">Ask a question about your situation and we’ll get back to you.</p>
        </div>
        <form id="enquiryForm" class="mt-8 grid gap-6 rounded-2xl border bg-white p-6 shadow-sm md:grid-cols-2">
          <div class="grid gap-2">
            <label for="name" class="text-sm font-medium">Full name</label>
            <input id="name" name="name" class="h-10 rounded-md border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-brand" placeholder="Your name" required />
          </div>
          <div class="grid gap-2">
            <label for="email" class="text-sm font-medium">Email</label>
            <input id="email" name="email" type="email" class="h-10 rounded-md border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-brand" placeholder="you@example.com" required />
          </div>
          <div class="grid gap-2">
            <label for="phone" class="text-sm font-medium">Phone</label>
            <input id="phone" name="phone" type="tel" class="h-10 rounded-md border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-brand" placeholder="+44" />
          </div>
          <div class="grid gap-2 md:col-span-2">
            <label for="message" class="text-sm font-medium">Your question</label>
            <textarea id="message" name="message" rows="5" class="min-h-[120px] rounded-md border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-brand" placeholder="Briefly describe your situation..." required></textarea>
          </div>
          <div class="md:col-span-2 flex items-center justify-between">
            <p class="text-sm text-zinc-600">We aim to respond within 2 working days.</p>
            <button class="inline-flex items-center rounded-md bg-brand px-5 py-2 text-white" type="submit">Submit enquiry</button>
          </div>
          <div id="enquiryThanks" class="md:col-span-2 hidden rounded-md border border-brand/30 bg-brand/5 p-3 text-sm text-zinc-800">Thanks! Your enquiry has been received.</div>
        </form>
      </div>
    </section>

    <footer class="border-t bg-white">
      <div class="mx-auto max-w-6xl px-4 py-8 text-sm text-zinc-500 flex flex-col sm:flex-row items-center justify-between gap-4">
        <p>© <span id="year"></span> PSW Graduate Route</p>
        <p class="opacity-80">Built for international students</p>
      </div>
    </footer>

    <script>
      // Mobile menu
      document.getElementById('menuBtn').addEventListener('click', function(){
        document.getElementById('mobileMenu').classList.toggle('hidden');
      });

      // Year
      document.getElementById('year').textContent = new Date().getFullYear();

      // Timeline interactions
      const steps = Array.from(document.querySelectorAll('#timeline .step'));
      const updateTimeline = (active) => {
        steps.forEach((btn, idx) => {
          const badge = btn.querySelector('.badge');
          if(idx <= active){
            badge.classList.remove('bg-brand/10','text-brand');
            badge.classList.add('bg-brand','text-white');
          } else {
            badge.classList.add('bg-brand/10','text-brand');
            badge.classList.remove('bg-brand','text-white');
          }
          const bar = btn.parentElement.querySelector('.bar .fill');
          if(bar){
            bar.style.width = idx < active ? '100%' : idx === active ? '50%' : '0%';
          }
        });
      };
      steps.forEach((btn)=>{
        btn.addEventListener('click',()=>{
          updateTimeline(parseInt(btn.dataset.step,10));
        });
      });

      // Checklist persistence
      const STORAGE_KEY = 'psw-docs-standalone';
      const inputs = Array.from(document.querySelectorAll('#documents input[type="checkbox"]'));
      const saved = JSON.parse(localStorage.getItem(STORAGE_KEY) || '{}');
      inputs.forEach((el)=>{
        const key = el.dataset.doc;
        if(saved[key]){
          el.checked = true;
          el.nextElementSibling.classList.add('line-through','text-zinc-500');
        }
        el.addEventListener('change',()=>{
          saved[key] = el.checked;
          localStorage.setItem(STORAGE_KEY, JSON.stringify(saved));
          el.nextElementSibling.classList.toggle('line-through', el.checked);
          el.nextElementSibling.classList.toggle('text-zinc-500', el.checked);
        });
      });

      // Enquiry submission (demo)
      document.getElementById('enquiryForm').addEventListener('submit', function(e){
        e.preventDefault();
        document.getElementById('enquiryThanks').classList.remove('hidden');
        setTimeout(()=>document.getElementById('enquiryThanks').classList.add('hidden'), 3000);
        this.reset();
      });
    </script>
  </body>
</html>
