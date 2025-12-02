<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <DocsLayout title="First-Time Setup">
    <div class="max-w-4xl">
      <!-- Page Header -->
      <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">
        First-Time Setup
      </h1>
      
      <p class="mt-6 text-xl leading-relaxed text-slate-600 dark:text-slate-400">
        Get your Verasol account configured and ready for use. This guide walks you through 
        the essential setup steps to start managing your finances.
      </p>

      <!-- Step 1: Create Account -->
      <section class="mt-16">
        <div class="flex items-center gap-4">
          <span class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-600 text-lg font-bold text-white">1</span>
          <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Create Your Account</h2>
        </div>
        
        <div class="ml-14 mt-6">
          <ol class="space-y-4">
            <li class="flex items-start gap-3">
              <span class="mt-0.5 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-slate-200 text-sm font-medium text-slate-700 dark:bg-slate-700 dark:text-slate-300">a</span>
              <span class="text-lg text-slate-600 dark:text-slate-400">Visit <strong class="text-slate-900 dark:text-white">app.verasol.ai</strong></span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-0.5 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-slate-200 text-sm font-medium text-slate-700 dark:bg-slate-700 dark:text-slate-300">b</span>
              <span class="text-lg text-slate-600 dark:text-slate-400">Click <strong class="text-slate-900 dark:text-white">"Start Free Trial"</strong> or <strong class="text-slate-900 dark:text-white">"Sign Up"</strong></span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-0.5 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-slate-200 text-sm font-medium text-slate-700 dark:bg-slate-700 dark:text-slate-300">c</span>
              <span class="text-lg text-slate-600 dark:text-slate-400">Enter your email address and create a password</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-0.5 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-slate-200 text-sm font-medium text-slate-700 dark:bg-slate-700 dark:text-slate-300">d</span>
              <span class="text-lg text-slate-600 dark:text-slate-400">Verify your email by clicking the link we send you</span>
            </li>
          </ol>
        </div>
      </section>

      <!-- Step 2: Company Setup -->
      <section class="mt-16">
        <div class="flex items-center gap-4">
          <span class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-600 text-lg font-bold text-white">2</span>
          <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Set Up Your Company</h2>
        </div>
        
        <div class="ml-14 mt-6">
          <p class="text-lg text-slate-600 dark:text-slate-400">
            After logging in, you'll be guided through the company setup wizard:
          </p>

          <div class="mt-8 space-y-6">
            <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
              <h4 class="text-lg font-semibold text-slate-900 dark:text-white">Company Details</h4>
              <ul class="mt-4 space-y-2">
                <li class="flex items-start gap-3">
                  <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                  <span class="text-slate-600 dark:text-slate-400">Company legal name</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                  <span class="text-slate-600 dark:text-slate-400">Trade license number</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                  <span class="text-slate-600 dark:text-slate-400">Business address</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                  <span class="text-slate-600 dark:text-slate-400">Contact information</span>
                </li>
              </ul>
            </div>

            <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
              <h4 class="text-lg font-semibold text-slate-900 dark:text-white">Regional Settings</h4>
              <ul class="mt-4 space-y-2">
                <li class="flex items-start gap-3">
                  <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                  <span class="text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Currency:</strong> AED, USD, EUR, etc.</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                  <span class="text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Financial Year Start:</strong> Usually January 1st</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                  <span class="text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Date Format:</strong> DD/MM/YYYY or MM/DD/YYYY</span>
                </li>
              </ul>
            </div>
          </div>

          <div class="mt-8 rounded-2xl border-l-4 border-amber-400 bg-amber-50 p-6 dark:bg-amber-900/20">
            <div class="flex items-start gap-4">
              <svg class="h-6 w-6 flex-shrink-0 text-amber-600 dark:text-amber-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
              </svg>
              <div>
                <h4 class="text-lg font-semibold text-amber-800 dark:text-amber-300">Important</h4>
                <p class="mt-2 text-lg text-amber-700 dark:text-amber-400">
                  Currency and Financial Year Start cannot be changed after you create journal entries. 
                  Choose carefully!
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Step 3: VAT Setup -->
      <section class="mt-16">
        <div class="flex items-center gap-4">
          <span class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-600 text-lg font-bold text-white">3</span>
          <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Configure VAT (If Applicable)</h2>
        </div>
        
        <div class="ml-14 mt-6">
          <p class="text-lg text-slate-600 dark:text-slate-400">
            If your business is VAT-registered in the UAE:
          </p>

          <ul class="mt-6 space-y-3">
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400">Enter your <strong class="text-slate-900 dark:text-white">Tax Registration Number (TRN)</strong></span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400">Set your <strong class="text-slate-900 dark:text-white">VAT filing period</strong> (Monthly or Quarterly)</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400">Verify the default <strong class="text-slate-900 dark:text-white">5% VAT rate</strong> is applied</span>
            </li>
          </ul>

          <p class="mt-6 text-lg text-slate-600 dark:text-slate-400">
            Not VAT-registered? You can skip this step and enable it later when needed.
          </p>
        </div>
      </section>

      <!-- Step 4: Chart of Accounts -->
      <section class="mt-16">
        <div class="flex items-center gap-4">
          <span class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-600 text-lg font-bold text-white">4</span>
          <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Review Chart of Accounts</h2>
        </div>
        
        <div class="ml-14 mt-6">
          <p class="text-lg text-slate-600 dark:text-slate-400">
            Verasol creates a standard chart of accounts for you. Review and customize if needed:
          </p>

          <div class="mt-8 overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
            <table class="w-full">
              <thead class="bg-slate-50 dark:bg-slate-800">
                <tr>
                  <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Category</th>
                  <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Examples</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                <tr>
                  <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">Assets</td>
                  <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Cash, Bank, Accounts Receivable</td>
                </tr>
                <tr>
                  <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">Liabilities</td>
                  <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Accounts Payable, VAT Payable, Loans</td>
                </tr>
                <tr>
                  <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">Equity</td>
                  <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Owner's Capital, Retained Earnings</td>
                </tr>
                <tr>
                  <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">Revenue</td>
                  <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Sales, Service Income</td>
                </tr>
                <tr>
                  <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">Expenses</td>
                  <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Rent, Salaries, Utilities</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="mt-8 rounded-2xl border-l-4 border-blue-400 bg-blue-50 p-6 dark:bg-blue-900/20">
            <p class="text-lg text-blue-800 dark:text-blue-300">
              <strong>Tip:</strong> You can add custom accounts anytime. Start with the defaults and customize as your needs grow.
            </p>
          </div>
        </div>
      </section>

      <!-- Step 5: Opening Balances -->
      <section class="mt-16">
        <div class="flex items-center gap-4">
          <span class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-600 text-lg font-bold text-white">5</span>
          <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Enter Opening Balances</h2>
        </div>
        
        <div class="ml-14 mt-6">
          <p class="text-lg text-slate-600 dark:text-slate-400">
            If you're migrating from another system, enter your starting balances:
          </p>

          <ul class="mt-6 space-y-3">
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400">Bank account balances</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400">Outstanding customer invoices</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400">Unpaid vendor bills</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400">Fixed asset values</span>
            </li>
          </ul>

          <p class="mt-6 text-lg text-slate-600 dark:text-slate-400">
            Starting fresh? You can skip this step and begin with zero balances.
          </p>
        </div>
      </section>

      <!-- You're Ready -->
      <section class="mt-20">
        <div class="rounded-2xl bg-gradient-to-r from-emerald-500 to-teal-500 p-8 text-white">
          <h2 class="text-2xl font-bold">🎉 You're Ready!</h2>
          <p class="mt-4 text-lg text-emerald-100">
            Your Verasol account is set up and ready to use. Start by creating your first invoice 
            or recording your first expense.
          </p>
          <div class="mt-6 flex flex-wrap gap-4">
            <Link href="/docs/invoices" class="rounded-xl bg-white px-6 py-3 font-semibold text-emerald-600 transition hover:bg-emerald-50">
              Create First Invoice
            </Link>
            <Link href="/docs/ai-introduction" class="rounded-xl bg-emerald-600 px-6 py-3 font-semibold text-white transition hover:bg-emerald-700">
              Try AI Assistant
            </Link>
          </div>
        </div>
      </section>

      <!-- Next Steps -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Next Steps</h2>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <Link href="/docs/quick-start" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Quick Start Guide</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">5-minute overview of key features</p>
          </Link>
          <Link href="/docs/chart-of-accounts" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Chart of Accounts</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Customize your account structure</p>
          </Link>
        </div>
      </section>

      <!-- Bottom spacing -->
      <div class="h-20"></div>
    </div>
  </DocsLayout>
</template>
