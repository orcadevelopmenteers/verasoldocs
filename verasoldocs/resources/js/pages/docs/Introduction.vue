<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <DocsLayout title="Introduction">
    <div class="max-w-4xl">
      <!-- Page Header -->
      <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">
        Introduction to Verasol
      </h1>
      
      <p class="mt-6 text-xl leading-relaxed text-slate-600 dark:text-slate-400">
        Verasol is a modern, cloud-based accounting software designed specifically for businesses 
        operating in the UAE. It combines powerful accounting features with an intuitive interface 
        and AI-powered assistance to make financial management effortless.
      </p>

      <!-- Highlight Box -->
      <div class="mt-10 rounded-2xl bg-emerald-50 p-8 dark:bg-emerald-900/20">
        <div class="flex items-start gap-4">
          <div class="flex-shrink-0 rounded-full bg-emerald-100 p-3 dark:bg-emerald-800">
            <svg class="h-6 w-6 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <div>
            <h3 class="text-lg font-semibold text-emerald-900 dark:text-emerald-300">Built for UAE</h3>
            <p class="mt-2 text-emerald-800 dark:text-emerald-400">
              Verasol is fully compliant with UAE VAT regulations, supports FTA audit file generation, 
              and includes WPS-ready payroll processing.
            </p>
          </div>
        </div>
      </div>

      <!-- Section: Who is Verasol For? -->
      <section class="mt-16">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">
          Who is Verasol For?
        </h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Verasol is ideal for:
        </p>
        
        <ul class="mt-6 space-y-4">
          <li class="flex items-start gap-3">
            <span class="mt-1.5 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-slate-700 dark:text-slate-300">
              <strong class="text-slate-900 dark:text-white">Small and Medium Businesses (SMBs)</strong> — 
              Manage your finances without the complexity of enterprise software
            </span>
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-1.5 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-slate-700 dark:text-slate-300">
              <strong class="text-slate-900 dark:text-white">Startups</strong> — 
              Get proper accounting from day one with minimal learning curve
            </span>
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-1.5 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-slate-700 dark:text-slate-300">
              <strong class="text-slate-900 dark:text-white">Freelancers & Consultants</strong> — 
              Track invoices, expenses, and VAT obligations
            </span>
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-1.5 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-slate-700 dark:text-slate-300">
              <strong class="text-slate-900 dark:text-white">Accountants</strong> — 
              Manage multiple client companies from a single dashboard
            </span>
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-1.5 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-slate-700 dark:text-slate-300">
              <strong class="text-slate-900 dark:text-white">UAE Free Zone Companies</strong> — 
              Handle unique compliance requirements including economic substance
            </span>
          </li>
        </ul>
      </section>

      <!-- Section: Key Features -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">
          Key Features
        </h2>

        <div class="mt-8 space-y-10">
          <div>
            <h3 class="flex items-center gap-3 text-xl font-semibold text-slate-900 dark:text-white">
              <span class="text-2xl">📊</span> Complete Accounting
            </h3>
            <p class="mt-3 text-lg leading-relaxed text-slate-600 dark:text-slate-400">
              Full double-entry bookkeeping with a flexible chart of accounts. Create journal entries, 
              track account balances, and generate financial statements that comply with IFRS standards.
            </p>
          </div>

          <div>
            <h3 class="flex items-center gap-3 text-xl font-semibold text-slate-900 dark:text-white">
              <span class="text-2xl">🧾</span> Sales & Purchases
            </h3>
            <p class="mt-3 text-lg leading-relaxed text-slate-600 dark:text-slate-400">
              Create professional invoices and quotations. Record vendor bills and track payments. 
              Automated VAT calculations on every transaction.
            </p>
          </div>

          <div>
            <h3 class="flex items-center gap-3 text-xl font-semibold text-slate-900 dark:text-white">
              <span class="text-2xl">🏦</span> Banking
            </h3>
            <p class="mt-3 text-lg leading-relaxed text-slate-600 dark:text-slate-400">
              Connect multiple bank accounts. Import bank statements and use AI-powered reconciliation 
              to match transactions automatically. Print cheques with customizable templates.
            </p>
          </div>

          <div>
            <h3 class="flex items-center gap-3 text-xl font-semibold text-slate-900 dark:text-white">
              <span class="text-2xl">📋</span> UAE VAT Compliance
            </h3>
            <p class="mt-3 text-lg leading-relaxed text-slate-600 dark:text-slate-400">
              Built-in VAT return preparation, FTA audit file (FAF) generation, and real-time TRN validation. 
              Never miss a filing deadline with automated reminders.
            </p>
          </div>

          <div>
            <h3 class="flex items-center gap-3 text-xl font-semibold text-slate-900 dark:text-white">
              <span class="text-2xl">🤖</span> AI Assistant
            </h3>
            <p class="mt-3 text-lg leading-relaxed text-slate-600 dark:text-slate-400">
              Get help with accounting tasks using natural language. The AI can create invoices, 
              look up customer balances, generate reports, and answer questions about your business data.
            </p>
          </div>

          <div>
            <h3 class="flex items-center gap-3 text-xl font-semibold text-slate-900 dark:text-white">
              <span class="text-2xl">📈</span> Reporting
            </h3>
            <p class="mt-3 text-lg leading-relaxed text-slate-600 dark:text-slate-400">
              Generate comprehensive financial reports including Trial Balance, Profit & Loss, 
              Balance Sheet, Cash Flow, and aging reports. Export to Excel or PDF.
            </p>
          </div>
        </div>
      </section>

      <!-- Section: Optional Modules -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">
          Optional Modules
        </h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Verasol uses a modular architecture. Enable only what you need to keep the interface 
          clean and focused:
        </p>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <div class="rounded-xl border border-slate-200 p-6 dark:border-slate-700">
            <div class="text-3xl">📦</div>
            <h4 class="mt-4 text-lg font-semibold text-slate-900 dark:text-white">Inventory</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">
              Track stock levels, manage warehouses, and handle stock movements
            </p>
          </div>
          
          <div class="rounded-xl border border-slate-200 p-6 dark:border-slate-700">
            <div class="text-3xl">👥</div>
            <h4 class="mt-4 text-lg font-semibold text-slate-900 dark:text-white">Payroll & HR</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">
              Employee management, attendance, leaves, and WPS-compliant payroll
            </p>
          </div>
          
          <div class="rounded-xl border border-slate-200 p-6 dark:border-slate-700">
            <div class="text-3xl">🌍</div>
            <h4 class="mt-4 text-lg font-semibold text-slate-900 dark:text-white">International Business</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">
              Related party transactions, transfer pricing, and economic substance
            </p>
          </div>
          
          <div class="rounded-xl border border-slate-200 p-6 dark:border-slate-700">
            <div class="text-3xl">🏗️</div>
            <h4 class="mt-4 text-lg font-semibold text-slate-900 dark:text-white">Fixed Assets</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">
              Asset register, depreciation schedules, and disposal tracking
            </p>
          </div>
        </div>
      </section>

      <!-- Section: Security -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">
          Security & Data Protection
        </h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Your financial data is critical. Verasol ensures:
        </p>

        <ul class="mt-6 space-y-4">
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-slate-700 dark:text-slate-300">
              <strong class="text-slate-900 dark:text-white">Encrypted Data</strong> — 
              All data is encrypted at rest and in transit
            </span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-slate-700 dark:text-slate-300">
              <strong class="text-slate-900 dark:text-white">Role-Based Access</strong> — 
              Control who can view and edit what
            </span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-slate-700 dark:text-slate-300">
              <strong class="text-slate-900 dark:text-white">Audit Trail</strong> — 
              Every change is logged with user and timestamp
            </span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-slate-700 dark:text-slate-300">
              <strong class="text-slate-900 dark:text-white">Regular Backups</strong> — 
              Automatic daily backups with point-in-time recovery
            </span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-slate-700 dark:text-slate-300">
              <strong class="text-slate-900 dark:text-white">UAE Data Residency</strong> — 
              Data stored in UAE-based data centers
            </span>
          </li>
        </ul>
      </section>

      <!-- Section: Getting Help -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">
          Getting Help
        </h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          If you need assistance:
        </p>

        <ul class="mt-6 space-y-4">
          <li class="flex items-start gap-3">
            <span class="mt-1.5 h-2 w-2 flex-shrink-0 rounded-full bg-slate-400"></span>
            <span class="text-slate-700 dark:text-slate-300">
              Browse this documentation for detailed guides
            </span>
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-1.5 h-2 w-2 flex-shrink-0 rounded-full bg-slate-400"></span>
            <span class="text-slate-700 dark:text-slate-300">
              Use the AI Assistant within the app for quick answers
            </span>
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-1.5 h-2 w-2 flex-shrink-0 rounded-full bg-slate-400"></span>
            <span class="text-slate-700 dark:text-slate-300">
              Email <a href="mailto:support@verasol.ai" class="text-emerald-600 hover:underline dark:text-emerald-400">support@verasol.ai</a> for technical support
            </span>
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-1.5 h-2 w-2 flex-shrink-0 rounded-full bg-slate-400"></span>
            <span class="text-slate-700 dark:text-slate-300">
              Check the <Link href="/docs/faq" class="text-emerald-600 hover:underline dark:text-emerald-400">FAQ</Link> for common questions
            </span>
          </li>
        </ul>
      </section>

      <!-- CTA -->
      <div class="mt-16 flex gap-4">
        <Link
          href="/docs/quick-start"
          class="inline-flex items-center rounded-xl bg-emerald-600 px-6 py-3 text-base font-semibold text-white shadow-lg transition hover:bg-emerald-700"
        >
          Quick Start Guide
          <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
          </svg>
        </Link>
      </div>

      <!-- Bottom spacing -->
      <div class="h-16"></div>
    </div>
  </DocsLayout>
</template>
