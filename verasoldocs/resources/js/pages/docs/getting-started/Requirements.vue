<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <DocsLayout title="System Requirements">
    <div class="max-w-4xl">
      <!-- Page Header -->
      <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">
        System Requirements
      </h1>
      
      <p class="mt-6 text-xl leading-relaxed text-slate-600 dark:text-slate-400">
        Verasol is a cloud-based application that runs entirely in your web browser. 
        Here's what you need to get started.
      </p>

      <!-- Browser Requirements -->
      <section class="mt-16">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Supported Browsers</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Verasol works best on modern, up-to-date browsers. We recommend:
        </p>

        <div class="mt-8 grid gap-4 sm:grid-cols-2">
          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <div class="flex items-center gap-4">
              <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100 dark:bg-blue-900/30">
                <svg class="h-6 w-6 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                </svg>
              </div>
              <div>
                <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Google Chrome</h3>
                <p class="text-slate-600 dark:text-slate-400">Version 90 or later</p>
              </div>
            </div>
          </div>

          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <div class="flex items-center gap-4">
              <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-100 dark:bg-orange-900/30">
                <svg class="h-6 w-6 text-orange-600 dark:text-orange-400" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                </svg>
              </div>
              <div>
                <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Mozilla Firefox</h3>
                <p class="text-slate-600 dark:text-slate-400">Version 88 or later</p>
              </div>
            </div>
          </div>

          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <div class="flex items-center gap-4">
              <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100 dark:bg-blue-900/30">
                <svg class="h-6 w-6 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M3 3h18v18H3V3zm16.5 16.5v-15h-15v15h15z"/>
                </svg>
              </div>
              <div>
                <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Microsoft Edge</h3>
                <p class="text-slate-600 dark:text-slate-400">Version 90 or later</p>
              </div>
            </div>
          </div>

          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <div class="flex items-center gap-4">
              <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100 dark:bg-blue-900/30">
                <svg class="h-6 w-6 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z"/>
                </svg>
              </div>
              <div>
                <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Safari</h3>
                <p class="text-slate-600 dark:text-slate-400">Version 14 or later</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Internet Connection -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Internet Connection</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          A stable internet connection is required to use Verasol. We recommend:
        </p>

        <ul class="mt-6 space-y-3">
          <li class="flex items-start gap-3">
            <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Minimum:</strong> 2 Mbps download / 1 Mbps upload</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Recommended:</strong> 10 Mbps download / 5 Mbps upload</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">For AI features:</strong> Faster connection recommended for real-time responses</span>
          </li>
        </ul>
      </section>

      <!-- Screen Resolution -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Screen Resolution</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Verasol is fully responsive and works on various screen sizes:
        </p>

        <ul class="mt-6 space-y-3">
          <li class="flex items-start gap-3">
            <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Desktop:</strong> 1280x720 minimum, 1920x1080 recommended</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Tablet:</strong> 768x1024 (iPad) or similar</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Mobile:</strong> 375x667 minimum (limited functionality)</span>
          </li>
        </ul>

        <div class="mt-8 rounded-2xl border-l-4 border-blue-400 bg-blue-50 p-6 dark:bg-blue-900/20">
          <p class="text-lg text-blue-800 dark:text-blue-300">
            <strong>Best Experience:</strong> For accounting tasks like reconciliation and report viewing, 
            we recommend using a desktop or laptop with a larger screen.
          </p>
        </div>
      </section>

      <!-- No Installation Required -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">No Installation Required</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Verasol is 100% cloud-based. This means:
        </p>

        <ul class="mt-6 space-y-3">
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400">No software to download or install</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400">Automatic updates - always use the latest version</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400">Access from any device with a browser</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400">Your data is securely stored in the cloud</span>
          </li>
        </ul>
      </section>

      <!-- AI Assistant Requirements -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">AI Assistant Requirements</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          The AI accounting assistant is included with your Verasol subscription at no extra cost:
        </p>

        <ul class="mt-6 space-y-3">
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Fully Included:</strong> AI features are free with your monthly subscription</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">No API Keys Needed:</strong> We handle all the AI infrastructure for you</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Unlimited Usage:</strong> Ask as many questions as you need</span>
          </li>
        </ul>

        <div class="mt-8 rounded-2xl border-l-4 border-emerald-400 bg-emerald-50 p-6 dark:bg-emerald-900/20">
          <p class="text-lg text-emerald-800 dark:text-emerald-300">
            <strong>Simple Pricing:</strong> One monthly subscription includes everything - accounting features, AI assistant, and all future updates.
          </p>
        </div>
      </section>

      <!-- Next Steps -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Next Steps</h2>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <Link href="/docs/first-time-setup" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">First-Time Setup</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Set up your company and start using Verasol</p>
          </Link>
          <Link href="/docs/quick-start" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Quick Start Guide</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Get up and running in 5 minutes</p>
          </Link>
        </div>
      </section>

      <!-- Bottom spacing -->
      <div class="h-20"></div>
    </div>
  </DocsLayout>
</template>
