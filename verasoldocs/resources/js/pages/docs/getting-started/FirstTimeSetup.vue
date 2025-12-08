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

      <!-- Step 2: Quick Onboarding -->
      <section class="mt-16">
        <div class="flex items-center gap-4">
          <span class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-600 text-lg font-bold text-white">2</span>
          <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Quick Onboarding Wizard</h2>
        </div>
        
        <div class="ml-14 mt-6">
          <p class="text-lg text-slate-600 dark:text-slate-400">
            After signing in for the first time, Verasol guides you through a 2-step onboarding process:
          </p>

          <div class="mt-8 space-y-6">
            <!-- User Type Selection -->
            <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
              <h4 class="text-lg font-semibold text-slate-900 dark:text-white">Step 1: Choose Your User Type</h4>
              <p class="mt-2 text-slate-600 dark:text-slate-400">Select how you'll use Verasol:</p>
              
              <div class="mt-4 grid gap-4 sm:grid-cols-2">
                <div class="rounded-xl border-2 border-emerald-200 bg-emerald-50 p-4 dark:border-emerald-800 dark:bg-emerald-900/20">
                  <div class="flex items-center gap-3">
                    <svg class="h-8 w-8 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                    </svg>
                    <div>
                      <p class="font-semibold text-slate-900 dark:text-white">Business Owner</p>
                      <p class="text-sm text-slate-600 dark:text-slate-400">Managing my own company</p>
                    </div>
                  </div>
                  <ul class="mt-3 space-y-1 text-sm text-slate-600 dark:text-slate-400">
                    <li>• Creates your company automatically</li>
                    <li>• Manage one business</li>
                  </ul>
                </div>

                <div class="rounded-xl border-2 border-blue-200 bg-blue-50 p-4 dark:border-blue-800 dark:bg-blue-900/20">
                  <div class="flex items-center gap-3">
                    <svg class="h-8 w-8 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                    </svg>
                    <div>
                      <p class="font-semibold text-slate-900 dark:text-white">Accountant/Firm</p>
                      <p class="text-sm text-slate-600 dark:text-slate-400">Managing multiple clients</p>
                    </div>
                  </div>
                  <ul class="mt-3 space-y-1 text-sm text-slate-600 dark:text-slate-400">
                    <li>• Add client companies later</li>
                    <li>• Manage multiple businesses</li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- Quick Setup -->
            <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
              <h4 class="text-lg font-semibold text-slate-900 dark:text-white">Step 2: Basic Information</h4>
              <p class="mt-2 text-slate-600 dark:text-slate-400">Enter minimal details to get started quickly:</p>
              
              <ul class="mt-4 space-y-2">
                <li class="flex items-start gap-3">
                  <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                  <span class="text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Company/Firm Name:</strong> Legal name for billing</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                  <span class="text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">TRN (Optional):</strong> 15-digit Tax Registration Number</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                  <span class="text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Financial Year Start:</strong> January (default) or custom</span>
                </li>
              </ul>

              <div class="mt-4 rounded-xl bg-slate-50 p-4 dark:bg-slate-800/50">
                <p class="text-sm text-slate-600 dark:text-slate-400">
                  <strong class="text-slate-900 dark:text-white">Business owners:</strong> A company is automatically created with these details<br>
                  <strong class="text-slate-900 dark:text-white">Accountants:</strong> This sets up your billing profile; add clients after onboarding
                </p>
              </div>
            </div>
          </div>

          <div class="mt-8 rounded-2xl border-l-4 border-emerald-400 bg-emerald-50 p-6 dark:bg-emerald-900/20">
            <div class="flex items-start gap-4">
              <svg class="h-6 w-6 flex-shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <div>
                <h4 class="text-lg font-semibold text-emerald-800 dark:text-emerald-300">Quick & Simple</h4>
                <p class="mt-2 text-lg text-emerald-700 dark:text-emerald-400">
                  The onboarding takes less than 60 seconds. You can add more details later from Settings.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Step 3: System Readiness Check -->
      <section class="mt-16">
        <div class="flex items-center gap-4">
          <span class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-600 text-lg font-bold text-white">3</span>
          <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Complete Your Profile</h2>
        </div>
        
        <div class="ml-14 mt-6">
          <p class="text-lg text-slate-600 dark:text-slate-400">
            After onboarding, Verasol shows a <strong class="text-slate-900 dark:text-white">System Readiness Card</strong> on your dashboard.
            This helps you understand what information is required for various modules to work correctly.
          </p>

          <div class="mt-8 space-y-6">
            <!-- Required for Professional Invoices -->
            <div class="rounded-2xl border-l-4 border-amber-400 bg-amber-50 p-6 dark:bg-amber-900/20">
              <h4 class="text-lg font-semibold text-amber-800 dark:text-amber-300">
                <svg class="mr-2 inline-block h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                </svg>
                Required for Valid Invoices
              </h4>
              <p class="mt-3 text-amber-700 dark:text-amber-400">
                To generate professional, compliant invoices, you must provide:
              </p>
              <ul class="mt-3 space-y-2">
                <li class="flex items-start gap-3">
                  <span class="mt-0.5 text-amber-600 dark:text-amber-400">✓</span>
                  <span class="text-amber-700 dark:text-amber-400"><strong>Company Address:</strong> Required on all UAE invoices</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="mt-0.5 text-amber-600 dark:text-amber-400">✓</span>
                  <span class="text-amber-700 dark:text-amber-400"><strong>TRN:</strong> Mandatory if you're VAT-registered (15 digits)</span>
                </li>
              </ul>
            </div>

            <!-- Recommended Information -->
            <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
              <h4 class="text-lg font-semibold text-slate-900 dark:text-white">Recommended for Professional Appearance</h4>
              <ul class="mt-4 space-y-3">
                <li class="flex items-start gap-3">
                  <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-blue-500"></span>
                  <div class="text-slate-600 dark:text-slate-400">
                    <strong class="text-slate-900 dark:text-white">Company Logo:</strong>
                    <span class="block text-sm mt-1">Shows on invoices, quotes, and all documents</span>
                  </div>
                </li>
                <li class="flex items-start gap-3">
                  <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-blue-500"></span>
                  <div class="text-slate-600 dark:text-slate-400">
                    <strong class="text-slate-900 dark:text-white">Trade License Number:</strong>
                    <span class="block text-sm mt-1">Some clients may require this</span>
                  </div>
                </li>
                <li class="flex items-start gap-3">
                  <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-blue-500"></span>
                  <div class="text-slate-600 dark:text-slate-400">
                    <strong class="text-slate-900 dark:text-white">Phone & Website:</strong>
                    <span class="block text-sm mt-1">Contact information for customers</span>
                  </div>
                </li>
              </ul>
            </div>

            <!-- How to Complete Profile -->
            <div class="rounded-2xl bg-slate-50 p-6 dark:bg-slate-800/50">
              <h4 class="font-semibold text-slate-900 dark:text-white">📍 Where to add this information:</h4>
              <p class="mt-2 text-slate-600 dark:text-slate-400">
                Navigate to <strong>Settings → Company Info</strong> and fill in the missing details. 
                The system readiness card will disappear once all required fields are complete.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Step 4: VAT Setup -->
      <section class="mt-16">
        <div class="flex items-center gap-4">
          <span class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-600 text-lg font-bold text-white">4</span>
          <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Configure VAT (If Applicable)</h2>
        </div>
        
        <div class="ml-14 mt-6">
          <p class="text-lg text-slate-600 dark:text-slate-400">
            If your business is VAT-registered in the UAE:
          </p>

          <ul class="mt-6 space-y-3">
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400">Enter your <strong class="text-slate-900 dark:text-white">Tax Registration Number (TRN)</strong> (if not added during onboarding)</span>
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

      <!-- Step 4: Configure VAT Settings -->
      <section class="mt-16">
        <div class="flex items-center gap-4">
          <span class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-600 text-lg font-bold text-white">4</span>
          <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Configure VAT Settings</h2>
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

      <!-- Step 5: Review Chart of Accounts -->
      <section class="mt-16">
        <div class="flex items-center gap-4">
          <span class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-600 text-lg font-bold text-white">5</span>
          <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Review Chart of Accounts</h2>
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

      <!-- Step 6: Enter Opening Balances -->
      <section class="mt-16">
        <div class="flex items-center gap-4">
          <span class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-600 text-lg font-bold text-white">6</span>
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
