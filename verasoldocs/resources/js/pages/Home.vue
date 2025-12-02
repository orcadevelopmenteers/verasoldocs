<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3'

const features = [
  {
    icon: '📊',
    title: 'Complete Accounting',
    description: 'Full double-entry bookkeeping with chart of accounts, journal entries, and financial statements.'
  },
  {
    icon: '🧾',
    title: 'Invoicing & Billing',
    description: 'Create professional invoices, manage bills, track payments, and handle credit notes.'
  },
  {
    icon: '🏦',
    title: 'Bank Reconciliation',
    description: 'Import bank statements and reconcile transactions with AI-powered matching.'
  },
  {
    icon: '📋',
    title: 'UAE VAT Compliant',
    description: 'Built for UAE businesses with VAT returns, FTA audit files, and TRN validation.'
  },
  {
    icon: '👥',
    title: 'Payroll & HR',
    description: 'Optional module for employee management, payroll processing, and WPS compliance.'
  },
  {
    icon: '🤖',
    title: 'AI Assistant',
    description: 'Get help with accounting tasks, create transactions, and analyze your business data.'
  },
]

const quickLinks = [
  { title: 'Quick Start Guide', href: '/docs/quick-start', description: 'Get up and running in 5 minutes' },
  { title: 'Create Your First Invoice', href: '/docs/invoices', description: 'Learn how to create and send invoices' },
  { title: 'Bank Reconciliation', href: '/docs/bank-reconciliation', description: 'Match transactions with your bank' },
  { title: 'AI Assistant Guide', href: '/docs/ai-introduction', description: 'Learn what AI can do for you' },
]
</script>

<template>
  <Head title="Verasol Documentation - UAE Accounting Software" />
  
  <div class="min-h-screen bg-gradient-to-b from-slate-50 to-white dark:from-slate-950 dark:to-slate-900">
    <!-- Header -->
    <header class="border-b border-slate-200 bg-white/80 backdrop-blur-sm dark:border-slate-800 dark:bg-slate-950/80">
      <div class="container mx-auto flex h-16 items-center justify-between px-4 sm:px-6 lg:px-8">
        <Link href="/" class="flex items-center space-x-2">
          <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-gradient-to-br from-emerald-500 to-teal-600">
            <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
          </div>
          <span class="text-xl font-bold text-slate-900 dark:text-white">Verasol</span>
          <span class="rounded-full bg-slate-100 px-2 py-0.5 text-xs font-medium text-slate-600 dark:bg-slate-800 dark:text-slate-400">Documentation</span>
        </Link>
        
        <div class="flex items-center space-x-4">
          <a 
            href="https://app.verasol.ai" 
            target="_blank"
            class="inline-flex items-center space-x-1 rounded-lg bg-emerald-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-emerald-700"
          >
            <span>Go to App</span>
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
            </svg>
          </a>
        </div>
      </div>
    </header>

    <!-- Hero -->
    <section class="container mx-auto px-4 py-16 text-center sm:px-6 sm:py-24 lg:px-8">
      <h1 class="text-4xl font-bold tracking-tight text-slate-900 sm:text-5xl lg:text-6xl dark:text-white">
        Verasol Documentation
      </h1>
      <p class="mx-auto mt-6 max-w-2xl text-lg text-slate-600 dark:text-slate-400">
        Everything you need to know about using Verasol - the modern accounting software built for UAE businesses.
        From getting started to advanced features, we've got you covered.
      </p>
      
      <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
        <Link
          href="/docs/quick-start"
          class="inline-flex items-center rounded-lg bg-emerald-600 px-6 py-3 text-base font-medium text-white shadow-sm transition hover:bg-emerald-700"
        >
          Get Started
          <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
          </svg>
        </Link>
        <Link
          href="/docs/introduction"
          class="inline-flex items-center rounded-lg border border-slate-300 bg-white px-6 py-3 text-base font-medium text-slate-700 shadow-sm transition hover:bg-slate-50 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-300 dark:hover:bg-slate-700"
        >
          Read Introduction
        </Link>
      </div>
    </section>

    <!-- Features Grid -->
    <section class="container mx-auto px-4 py-16 sm:px-6 lg:px-8">
      <h2 class="text-center text-2xl font-bold text-slate-900 dark:text-white">What's Inside</h2>
      <p class="mx-auto mt-4 max-w-2xl text-center text-slate-600 dark:text-slate-400">
        Verasol is a comprehensive accounting solution with everything you need to manage your business finances.
      </p>
      
      <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <div 
          v-for="feature in features" 
          :key="feature.title"
          class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm transition hover:shadow-md dark:border-slate-800 dark:bg-slate-900"
        >
          <div class="text-3xl">{{ feature.icon }}</div>
          <h3 class="mt-4 text-lg font-semibold text-slate-900 dark:text-white">{{ feature.title }}</h3>
          <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">{{ feature.description }}</p>
        </div>
      </div>
    </section>

    <!-- Quick Links -->
    <section class="container mx-auto px-4 py-16 sm:px-6 lg:px-8">
      <h2 class="text-center text-2xl font-bold text-slate-900 dark:text-white">Popular Topics</h2>
      
      <div class="mt-12 grid gap-6 sm:grid-cols-2">
        <Link
          v-for="link in quickLinks"
          :key="link.href"
          :href="link.href"
          class="group flex items-start rounded-xl border border-slate-200 bg-white p-6 shadow-sm transition hover:border-emerald-300 hover:shadow-md dark:border-slate-800 dark:bg-slate-900 dark:hover:border-emerald-700"
        >
          <div class="flex-1">
            <h3 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">
              {{ link.title }}
            </h3>
            <p class="mt-1 text-sm text-slate-600 dark:text-slate-400">{{ link.description }}</p>
          </div>
          <svg class="h-6 w-6 text-slate-400 transition group-hover:translate-x-1 group-hover:text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
          </svg>
        </Link>
      </div>
    </section>

    <!-- Footer -->
    <footer class="border-t border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-950">
      <div class="container mx-auto px-4 py-12 sm:px-6 lg:px-8">
        <div class="flex flex-col items-center justify-between gap-4 sm:flex-row">
          <div class="flex items-center space-x-2">
            <div class="flex h-6 w-6 items-center justify-center rounded bg-gradient-to-br from-emerald-500 to-teal-600">
              <svg class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
              </svg>
            </div>
            <span class="text-sm text-slate-600 dark:text-slate-400">© 2025 Verasol by 375 Group. All rights reserved.</span>
          </div>
          <div class="flex items-center space-x-6 text-sm">
            <a href="https://verasol.ai" target="_blank" class="text-slate-600 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white">Website</a>
            <a href="https://app.verasol.ai" target="_blank" class="text-slate-600 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white">Application</a>
            <a href="mailto:support@verasol.ai" class="text-slate-600 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white">Support</a>
          </div>
        </div>
      </div>
    </footer>
  </div>
</template>
