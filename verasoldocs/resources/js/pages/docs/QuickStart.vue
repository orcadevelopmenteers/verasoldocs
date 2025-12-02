<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <DocsLayout title="Quick Start Guide">
    <div class="max-w-4xl">
      <!-- Page Header -->
      <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">
        Quick Start Guide
      </h1>
      
      <p class="mt-6 text-xl leading-relaxed text-slate-600 dark:text-slate-400">
        Get your Verasol account set up and create your first invoice in under 10 minutes. 
        This guide walks you through the essential first steps.
      </p>

      <!-- Warning Box -->
      <div class="mt-10 rounded-2xl border-l-4 border-amber-400 bg-amber-50 p-8 dark:bg-amber-900/20">
        <div class="flex items-start gap-4">
          <div class="flex-shrink-0 rounded-full bg-amber-100 p-2 dark:bg-amber-800">
            <svg class="h-5 w-5 text-amber-600 dark:text-amber-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
            </svg>
          </div>
          <div>
            <h3 class="text-lg font-semibold text-amber-900 dark:text-amber-300">Before You Start</h3>
            <p class="mt-2 text-amber-800 dark:text-amber-400">
              Have your company details ready: Trade License number, TRN (if VAT registered), 
              and bank account information.
            </p>
          </div>
        </div>
      </div>

      <!-- Step 1 -->
      <section class="mt-20">
        <div class="flex items-center gap-4">
          <span class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-100 text-lg font-bold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">1</span>
          <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Create Your Account</h2>
        </div>

        <ol class="mt-8 space-y-4 pl-14">
          <li class="flex items-start gap-3">
            <span class="flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-slate-200 text-xs font-medium text-slate-700 dark:bg-slate-700 dark:text-slate-300">1</span>
            <span class="text-lg text-slate-700 dark:text-slate-300">
              Go to <a href="https://app.verasol.ai" target="_blank" class="text-emerald-600 hover:underline dark:text-emerald-400">app.verasol.ai</a>
            </span>
          </li>
          <li class="flex items-start gap-3">
            <span class="flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-slate-200 text-xs font-medium text-slate-700 dark:bg-slate-700 dark:text-slate-300">2</span>
            <span class="text-lg text-slate-700 dark:text-slate-300">
              Click <strong class="text-slate-900 dark:text-white">"Get Started"</strong> or <strong class="text-slate-900 dark:text-white">"Register"</strong>
            </span>
          </li>
          <li class="flex items-start gap-3">
            <span class="flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-slate-200 text-xs font-medium text-slate-700 dark:bg-slate-700 dark:text-slate-300">3</span>
            <span class="text-lg text-slate-700 dark:text-slate-300">
              Enter your email address and create a secure password
            </span>
          </li>
          <li class="flex items-start gap-3">
            <span class="flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-slate-200 text-xs font-medium text-slate-700 dark:bg-slate-700 dark:text-slate-300">4</span>
            <span class="text-lg text-slate-700 dark:text-slate-300">
              Verify your email by clicking the link sent to your inbox
            </span>
          </li>
        </ol>
      </section>

      <!-- Step 2 -->
      <section class="mt-20">
        <div class="flex items-center gap-4">
          <span class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-100 text-lg font-bold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">2</span>
          <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Set Up Your Company</h2>
        </div>

        <p class="mt-6 pl-14 text-lg text-slate-600 dark:text-slate-400">
          After logging in, you'll be guided through company setup:
        </p>

        <!-- Basic Information -->
        <div class="mt-10 pl-14">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Basic Information</h3>
          
          <ul class="mt-6 space-y-4">
            <li class="flex items-start gap-3">
              <span class="mt-1.5 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-700 dark:text-slate-300">
                <strong class="text-slate-900 dark:text-white">Company Name</strong> — 
                Your business name as it appears on invoices
              </span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-1.5 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-700 dark:text-slate-300">
                <strong class="text-slate-900 dark:text-white">Legal Name</strong> — 
                Official registered name (if different)
              </span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-1.5 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-700 dark:text-slate-300">
                <strong class="text-slate-900 dark:text-white">Business Type</strong> — 
                Sole Proprietorship, LLC, etc.
              </span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-1.5 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-700 dark:text-slate-300">
                <strong class="text-slate-900 dark:text-white">Address</strong> — 
                Your registered business address
              </span>
            </li>
          </ul>
        </div>

        <!-- Tax Information -->
        <div class="mt-12 pl-14">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Tax Information</h3>
          
          <ul class="mt-6 space-y-4">
            <li class="flex items-start gap-3">
              <span class="mt-1.5 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-700 dark:text-slate-300">
                <strong class="text-slate-900 dark:text-white">TRN</strong> — 
                Your Tax Registration Number (if VAT registered)
              </span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-1.5 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-700 dark:text-slate-300">
                <strong class="text-slate-900 dark:text-white">Trade License Number</strong> — 
                Your UAE trade license
              </span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-1.5 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-700 dark:text-slate-300">
                <strong class="text-slate-900 dark:text-white">VAT Registration Date</strong> — 
                When you became VAT registered
              </span>
            </li>
          </ul>

          <!-- Tip -->
          <div class="mt-8 rounded-xl bg-blue-50 p-6 dark:bg-blue-900/20">
            <p class="text-blue-800 dark:text-blue-300">
              <strong>💡 Tip:</strong> You can skip the TRN if you're not VAT registered. 
              Verasol will still track all your finances — you just won't see VAT calculations.
            </p>
          </div>
        </div>

        <!-- Financial Settings -->
        <div class="mt-12 pl-14">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Financial Settings</h3>
          
          <ul class="mt-6 space-y-4">
            <li class="flex items-start gap-3">
              <span class="mt-1.5 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-700 dark:text-slate-300">
                <strong class="text-slate-900 dark:text-white">Currency</strong> — 
                Primary currency (AED, USD, EUR, etc.)
              </span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-1.5 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-700 dark:text-slate-300">
                <strong class="text-slate-900 dark:text-white">Financial Year</strong> — 
                When your financial year starts (usually January or April)
              </span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-1.5 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-700 dark:text-slate-300">
                <strong class="text-slate-900 dark:text-white">Timezone</strong> — 
                For accurate date/time recording
              </span>
            </li>
          </ul>

          <!-- Warning -->
          <div class="mt-8 rounded-xl border border-red-200 bg-red-50 p-6 dark:border-red-800 dark:bg-red-900/20">
            <p class="text-red-800 dark:text-red-300">
              <strong>⚠️ Important:</strong> Currency cannot be changed after you create your first transaction. 
              Make sure to select the correct currency during setup.
            </p>
          </div>
        </div>
      </section>

      <!-- Step 3 -->
      <section class="mt-20">
        <div class="flex items-center gap-4">
          <span class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-100 text-lg font-bold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">3</span>
          <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Add Your First Customer</h2>
        </div>

        <ol class="mt-8 space-y-4 pl-14">
          <li class="flex items-start gap-3">
            <span class="flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-slate-200 text-xs font-medium text-slate-700 dark:bg-slate-700 dark:text-slate-300">1</span>
            <span class="text-lg text-slate-700 dark:text-slate-300">
              Navigate to <strong class="text-slate-900 dark:text-white">Sales → Customers</strong> from the sidebar
            </span>
          </li>
          <li class="flex items-start gap-3">
            <span class="flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-slate-200 text-xs font-medium text-slate-700 dark:bg-slate-700 dark:text-slate-300">2</span>
            <span class="text-lg text-slate-700 dark:text-slate-300">
              Click <strong class="text-slate-900 dark:text-white">"Add Customer"</strong>
            </span>
          </li>
          <li class="flex items-start gap-3">
            <span class="flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-slate-200 text-xs font-medium text-slate-700 dark:bg-slate-700 dark:text-slate-300">3</span>
            <div class="text-lg text-slate-700 dark:text-slate-300">
              <span>Enter customer details:</span>
              <ul class="mt-4 space-y-2 pl-4">
                <li class="flex items-center gap-2">
                  <span class="h-1.5 w-1.5 rounded-full bg-slate-400"></span>
                  Company name or individual name
                </li>
                <li class="flex items-center gap-2">
                  <span class="h-1.5 w-1.5 rounded-full bg-slate-400"></span>
                  Email address (for sending invoices)
                </li>
                <li class="flex items-center gap-2">
                  <span class="h-1.5 w-1.5 rounded-full bg-slate-400"></span>
                  TRN (if they're VAT registered)
                </li>
                <li class="flex items-center gap-2">
                  <span class="h-1.5 w-1.5 rounded-full bg-slate-400"></span>
                  Billing address
                </li>
              </ul>
            </div>
          </li>
          <li class="flex items-start gap-3">
            <span class="flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-slate-200 text-xs font-medium text-slate-700 dark:bg-slate-700 dark:text-slate-300">4</span>
            <span class="text-lg text-slate-700 dark:text-slate-300">
              Click <strong class="text-slate-900 dark:text-white">"Save Customer"</strong>
            </span>
          </li>
        </ol>
      </section>

      <!-- Step 4 -->
      <section class="mt-20">
        <div class="flex items-center gap-4">
          <span class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-100 text-lg font-bold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">4</span>
          <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Create Your First Invoice</h2>
        </div>

        <ol class="mt-8 space-y-4 pl-14">
          <li class="flex items-start gap-3">
            <span class="flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-slate-200 text-xs font-medium text-slate-700 dark:bg-slate-700 dark:text-slate-300">1</span>
            <span class="text-lg text-slate-700 dark:text-slate-300">
              Navigate to <strong class="text-slate-900 dark:text-white">Sales → Invoices</strong>
            </span>
          </li>
          <li class="flex items-start gap-3">
            <span class="flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-slate-200 text-xs font-medium text-slate-700 dark:bg-slate-700 dark:text-slate-300">2</span>
            <span class="text-lg text-slate-700 dark:text-slate-300">
              Click <strong class="text-slate-900 dark:text-white">"New Invoice"</strong>
            </span>
          </li>
          <li class="flex items-start gap-3">
            <span class="flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-slate-200 text-xs font-medium text-slate-700 dark:bg-slate-700 dark:text-slate-300">3</span>
            <span class="text-lg text-slate-700 dark:text-slate-300">
              Select the customer you just created
            </span>
          </li>
          <li class="flex items-start gap-3">
            <span class="flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-slate-200 text-xs font-medium text-slate-700 dark:bg-slate-700 dark:text-slate-300">4</span>
            <div class="text-lg text-slate-700 dark:text-slate-300">
              <span>Add line items:</span>
              <ul class="mt-4 space-y-2 pl-4">
                <li class="flex items-center gap-2">
                  <span class="h-1.5 w-1.5 rounded-full bg-slate-400"></span>
                  Description of goods/services
                </li>
                <li class="flex items-center gap-2">
                  <span class="h-1.5 w-1.5 rounded-full bg-slate-400"></span>
                  Quantity and unit price
                </li>
                <li class="flex items-center gap-2">
                  <span class="h-1.5 w-1.5 rounded-full bg-slate-400"></span>
                  VAT rate (5% standard, 0% exempt/zero-rated)
                </li>
              </ul>
            </div>
          </li>
          <li class="flex items-start gap-3">
            <span class="flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-slate-200 text-xs font-medium text-slate-700 dark:bg-slate-700 dark:text-slate-300">5</span>
            <span class="text-lg text-slate-700 dark:text-slate-300">
              Review the totals (Subtotal, VAT, Grand Total)
            </span>
          </li>
          <li class="flex items-start gap-3">
            <span class="flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-slate-200 text-xs font-medium text-slate-700 dark:bg-slate-700 dark:text-slate-300">6</span>
            <span class="text-lg text-slate-700 dark:text-slate-300">
              Click <strong class="text-slate-900 dark:text-white">"Save & Post"</strong> to finalize
            </span>
          </li>
        </ol>

        <!-- Success -->
        <div class="mt-10 pl-14">
          <div class="rounded-xl bg-emerald-50 p-6 dark:bg-emerald-900/20">
            <p class="text-lg text-emerald-800 dark:text-emerald-300">
              <strong>✅ That's it!</strong> You've created your first invoice. You can now download it as PDF, 
              email it directly to your customer, or record payments against it.
            </p>
          </div>
        </div>
      </section>

      <!-- What's Next -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">What's Next?</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Now that you have the basics set up, explore these features:
        </p>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <Link href="/docs/bank-accounts" class="group block rounded-xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Add Bank Accounts</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Set up your bank accounts for payments and reconciliation</p>
          </Link>
          <Link href="/docs/bills" class="group block rounded-xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Record Expenses</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Add vendor bills and track your business expenses</p>
          </Link>
          <Link href="/docs/chart-of-accounts" class="group block rounded-xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Customize Accounts</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Modify your chart of accounts for your business</p>
          </Link>
          <Link href="/docs/ai-introduction" class="group block rounded-xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Try the AI Assistant</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Learn how AI can help with your accounting tasks</p>
          </Link>
        </div>
      </section>

      <!-- Need Help -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Need Help?</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          If you get stuck at any point, click the <strong class="text-slate-900 dark:text-white">AI Assistant</strong> button 
          in the bottom-right corner of the app. You can ask questions like:
        </p>

        <ul class="mt-6 space-y-3">
          <li class="flex items-center gap-3">
            <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"How do I add a customer?"</span>
          </li>
          <li class="flex items-center gap-3">
            <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"Create an invoice for ABC Company for AED 5,000"</span>
          </li>
          <li class="flex items-center gap-3">
            <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"What's my outstanding receivables?"</span>
          </li>
        </ul>

        <p class="mt-8 text-lg text-slate-600 dark:text-slate-400">
          For more detailed help, continue reading through this documentation or 
          email <a href="mailto:support@verasol.ai" class="text-emerald-600 hover:underline dark:text-emerald-400">support@verasol.ai</a>.
        </p>
      </section>

      <!-- Bottom spacing -->
      <div class="h-20"></div>
    </div>
  </DocsLayout>
</template>
