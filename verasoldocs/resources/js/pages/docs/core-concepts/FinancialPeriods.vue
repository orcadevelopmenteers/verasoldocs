<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <DocsLayout title="Financial Year & Periods">
    <div class="max-w-4xl">
      <!-- Page Header -->
      <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">
        Financial Year & Periods
      </h1>
      
      <p class="mt-6 text-xl leading-relaxed text-slate-600 dark:text-slate-400">
        Understand how financial years work, why they matter for your business, 
        and how Verasol manages accounting periods.
      </p>

      <!-- What is a Financial Year -->
      <section class="mt-16">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">What is a Financial Year?</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          A financial year (also called fiscal year) is the 12-month period your business uses 
          for accounting and tax purposes. It doesn't have to match the calendar year.
        </p>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Calendar Year</h3>
            <p class="mt-2 text-3xl font-bold text-emerald-600 dark:text-emerald-400">Jan 1 – Dec 31</p>
            <p class="mt-4 text-slate-600 dark:text-slate-400">
              Most common choice. Simple and aligns with tax year for most UAE businesses.
            </p>
          </div>

          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Custom Year</h3>
            <p class="mt-2 text-3xl font-bold text-blue-600 dark:text-blue-400">Any 12 months</p>
            <p class="mt-4 text-slate-600 dark:text-slate-400">
              Some businesses use Apr-Mar, Jul-Jun, or other periods based on their industry.
            </p>
          </div>
        </div>
      </section>

      <!-- UAE Requirements -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">UAE Requirements</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          For UAE businesses:
        </p>

        <ul class="mt-6 space-y-3">
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">VAT Returns:</strong> Filed quarterly or monthly based on your registration</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Corporate Tax:</strong> Based on your financial year (from June 2023)</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Record Keeping:</strong> Must retain records for 5 years</span>
          </li>
        </ul>

        <div class="mt-8 rounded-2xl border-l-4 border-blue-400 bg-blue-50 p-6 dark:bg-blue-900/20">
          <p class="text-lg text-blue-800 dark:text-blue-300">
            <strong>Recommendation:</strong> Most UAE SMEs use January 1 as their financial year start. 
            This aligns with corporate tax periods and is simplest for reporting.
          </p>
        </div>
      </section>

      <!-- Accounting Periods -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Accounting Periods</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Your financial year is divided into smaller periods for reporting and management:
        </p>

        <div class="mt-8 space-y-4">
          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <div class="flex items-center justify-between">
              <div>
                <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Monthly Periods</h3>
                <p class="mt-1 text-slate-600 dark:text-slate-400">12 periods per year</p>
              </div>
              <span class="rounded-full bg-emerald-100 px-4 py-2 text-sm font-semibold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">Verasol Default</span>
            </div>
            <p class="mt-4 text-slate-600 dark:text-slate-400">
              Best for detailed tracking and monthly VAT filers. Run P&L and reports for any month.
            </p>
          </div>

          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Quarterly Periods</h3>
            <p class="mt-1 text-slate-600 dark:text-slate-400">4 periods per year (Q1, Q2, Q3, Q4)</p>
            <p class="mt-4 text-slate-600 dark:text-slate-400">
              Aligns with quarterly VAT returns. Good for quarterly business reviews.
            </p>
          </div>
        </div>
      </section>

      <!-- Period Status -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Period Status</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Each accounting period can have one of these statuses:
        </p>

        <div class="mt-8 space-y-4">
          <div class="flex items-center gap-4 rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-emerald-100 dark:bg-emerald-900/30">
              <svg class="h-6 w-6 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5V6.75a4.5 4.5 0 119 0v3.75M3.75 21.75h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H3.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
              </svg>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Open</h3>
              <p class="text-slate-600 dark:text-slate-400">Transactions can be added, edited, or deleted. Current working period.</p>
            </div>
          </div>

          <div class="flex items-center gap-4 rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-amber-100 dark:bg-amber-900/30">
              <svg class="h-6 w-6 text-amber-600 dark:text-amber-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
              </svg>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Soft Closed</h3>
              <p class="text-slate-600 dark:text-slate-400">Warning when posting to this period. Admins can still make changes.</p>
            </div>
          </div>

          <div class="flex items-center gap-4 rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-red-100 dark:bg-red-900/30">
              <svg class="h-6 w-6 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
              </svg>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Closed (Locked)</h3>
              <p class="text-slate-600 dark:text-slate-400">No changes allowed. Used for finalized periods after VAT filing or audit.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Why Close Periods -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Why Close Periods?</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Closing periods protects your financial data:
        </p>

        <ul class="mt-6 space-y-3">
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">VAT Compliance:</strong> Once you file VAT, those numbers shouldn't change</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Audit Trail:</strong> Auditors need to see historical data wasn't modified</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Error Prevention:</strong> Prevents accidental changes to finalized data</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Report Consistency:</strong> Historical reports always show the same numbers</span>
          </li>
        </ul>
      </section>

      <!-- How to Close a Period -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">How to Close a Period</h2>
        
        <ol class="mt-6 space-y-4">
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">1</span>
            <div>
              <p class="text-lg font-medium text-slate-900 dark:text-white">Complete all transactions</p>
              <p class="mt-1 text-slate-600 dark:text-slate-400">Ensure all invoices, bills, and payments for the period are entered</p>
            </div>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">2</span>
            <div>
              <p class="text-lg font-medium text-slate-900 dark:text-white">Reconcile bank accounts</p>
              <p class="mt-1 text-slate-600 dark:text-slate-400">Match all transactions with your bank statements</p>
            </div>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">3</span>
            <div>
              <p class="text-lg font-medium text-slate-900 dark:text-white">Review reports</p>
              <p class="mt-1 text-slate-600 dark:text-slate-400">Check Trial Balance, P&L, and VAT report for accuracy</p>
            </div>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">4</span>
            <div>
              <p class="text-lg font-medium text-slate-900 dark:text-white">Close the period</p>
              <p class="mt-1 text-slate-600 dark:text-slate-400">Go to Settings → Period Closing → Select period → Close</p>
            </div>
          </li>
        </ol>

        <div class="mt-8 rounded-2xl border-l-4 border-amber-400 bg-amber-50 p-6 dark:bg-amber-900/20">
          <div class="flex items-start gap-4">
            <svg class="h-6 w-6 flex-shrink-0 text-amber-600 dark:text-amber-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
            </svg>
            <div>
              <h4 class="text-lg font-semibold text-amber-800 dark:text-amber-300">Warning</h4>
              <p class="mt-2 text-lg text-amber-700 dark:text-amber-400">
                Closing a period is typically permanent. Only admins can reopen closed periods, 
                and this is logged for audit purposes.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Year-End Process -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Year-End Process</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          At the end of your financial year:
        </p>

        <ul class="mt-6 space-y-3">
          <li class="flex items-start gap-3">
            <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Close all monthly periods for the year</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Run year-end closing to transfer profit/loss to retained earnings</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Opening balances for new year are set automatically</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Income and expense accounts start fresh at zero</span>
          </li>
        </ul>
      </section>

      <!-- Next Steps -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Related Topics</h2>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <Link href="/docs/data-integrity" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Data Integrity Rules</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">How Verasol protects your data</p>
          </Link>
          <Link href="/docs/period-closing" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Period Closing</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Step-by-step closing guide</p>
          </Link>
        </div>
      </section>

      <!-- Bottom spacing -->
      <div class="h-20"></div>
    </div>
  </DocsLayout>
</template>
