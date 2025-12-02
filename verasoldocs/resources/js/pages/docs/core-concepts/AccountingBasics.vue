<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <DocsLayout title="Understanding Accounting">
    <div class="max-w-4xl">
      <!-- Page Header -->
      <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">
        Understanding Accounting
      </h1>
      
      <p class="mt-6 text-xl leading-relaxed text-slate-600 dark:text-slate-400">
        Don't worry if you're not an accountant. This guide explains the fundamental concepts 
        you need to know to manage your business finances effectively with Verasol.
      </p>

      <!-- Why Accounting Matters -->
      <section class="mt-16">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Why Accounting Matters</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Good accounting isn't just about taxes. It helps you:
        </p>

        <ul class="mt-6 space-y-3">
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Know your profitability</strong> - Are you actually making money?</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Manage cash flow</strong> - Will you have money to pay bills next month?</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Make informed decisions</strong> - Should you hire? Expand? Cut costs?</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Stay compliant</strong> - Meet UAE tax and legal requirements</span>
          </li>
        </ul>
      </section>

      <!-- The Accounting Equation -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">The Accounting Equation</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          All accounting is based on one simple equation:
        </p>

        <div class="mt-8 rounded-2xl bg-gradient-to-r from-emerald-500 to-teal-500 p-8 text-center text-white">
          <p class="text-2xl font-bold">Assets = Liabilities + Equity</p>
        </div>

        <div class="mt-8 grid gap-6 sm:grid-cols-3">
          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Assets</h3>
            <p class="mt-2 text-slate-600 dark:text-slate-400">What your business <strong>owns</strong></p>
            <ul class="mt-4 space-y-2 text-sm text-slate-600 dark:text-slate-400">
              <li>• Cash in bank</li>
              <li>• Money customers owe you</li>
              <li>• Equipment & vehicles</li>
              <li>• Inventory</li>
            </ul>
          </div>

          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Liabilities</h3>
            <p class="mt-2 text-slate-600 dark:text-slate-400">What your business <strong>owes</strong></p>
            <ul class="mt-4 space-y-2 text-sm text-slate-600 dark:text-slate-400">
              <li>• Unpaid vendor bills</li>
              <li>• Loans & credit cards</li>
              <li>• VAT you owe the FTA</li>
              <li>• Employee salaries due</li>
            </ul>
          </div>

          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Equity</h3>
            <p class="mt-2 text-slate-600 dark:text-slate-400">What's left for <strong>owners</strong></p>
            <ul class="mt-4 space-y-2 text-sm text-slate-600 dark:text-slate-400">
              <li>• Owner's investment</li>
              <li>• Retained profits</li>
              <li>• Drawings taken out</li>
            </ul>
          </div>
        </div>
      </section>

      <!-- Income and Expenses -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Income and Expenses</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Beyond the balance sheet, you need to track what comes in and goes out:
        </p>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <div class="rounded-2xl border-l-4 border-emerald-400 bg-emerald-50 p-6 dark:bg-emerald-900/20">
            <h3 class="text-xl font-semibold text-emerald-800 dark:text-emerald-300">Income (Revenue)</h3>
            <p class="mt-2 text-emerald-700 dark:text-emerald-400">Money your business earns</p>
            <ul class="mt-4 space-y-2 text-emerald-700 dark:text-emerald-400">
              <li>• Sales of products</li>
              <li>• Service fees</li>
              <li>• Consulting income</li>
              <li>• Interest earned</li>
            </ul>
          </div>

          <div class="rounded-2xl border-l-4 border-red-400 bg-red-50 p-6 dark:bg-red-900/20">
            <h3 class="text-xl font-semibold text-red-800 dark:text-red-300">Expenses (Costs)</h3>
            <p class="mt-2 text-red-700 dark:text-red-400">Money your business spends</p>
            <ul class="mt-4 space-y-2 text-red-700 dark:text-red-400">
              <li>• Rent & utilities</li>
              <li>• Salaries & wages</li>
              <li>• Supplies & materials</li>
              <li>• Marketing costs</li>
            </ul>
          </div>
        </div>

        <div class="mt-8 rounded-2xl bg-slate-100 p-6 text-center dark:bg-slate-800">
          <p class="text-xl font-semibold text-slate-900 dark:text-white">Profit = Income − Expenses</p>
          <p class="mt-2 text-slate-600 dark:text-slate-400">This is shown on your Profit & Loss report</p>
        </div>
      </section>

      <!-- Cash vs Accrual -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Cash vs Accrual Accounting</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          There are two ways to record transactions:
        </p>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Cash Basis</h3>
            <p class="mt-2 text-slate-600 dark:text-slate-400">
              Record when money actually moves.
            </p>
            <div class="mt-4 rounded-xl bg-slate-100 p-4 dark:bg-slate-800">
              <p class="text-sm text-slate-600 dark:text-slate-400">
                <strong>Example:</strong> You invoice a customer in January, they pay in February. 
                Income is recorded in February.
              </p>
            </div>
          </div>

          <div class="rounded-2xl border-2 border-emerald-400 bg-emerald-50 p-6 dark:border-emerald-600 dark:bg-emerald-900/20">
            <div class="flex items-center gap-2">
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Accrual Basis</h3>
              <span class="rounded-full bg-emerald-500 px-2 py-0.5 text-xs font-medium text-white">Verasol Default</span>
            </div>
            <p class="mt-2 text-slate-600 dark:text-slate-400">
              Record when the transaction occurs.
            </p>
            <div class="mt-4 rounded-xl bg-white p-4 dark:bg-slate-800">
              <p class="text-sm text-slate-600 dark:text-slate-400">
                <strong>Example:</strong> You invoice a customer in January, they pay in February. 
                Income is recorded in January.
              </p>
            </div>
          </div>
        </div>

        <div class="mt-8 rounded-2xl border-l-4 border-blue-400 bg-blue-50 p-6 dark:bg-blue-900/20">
          <p class="text-lg text-blue-800 dark:text-blue-300">
            <strong>UAE Requirement:</strong> Businesses registered for VAT must use accrual accounting. 
            Verasol uses this method by default.
          </p>
        </div>
      </section>

      <!-- Key Documents -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Key Financial Documents</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Verasol generates these essential reports for you:
        </p>

        <div class="mt-8 space-y-4">
          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Profit & Loss Statement</h3>
            <p class="mt-2 text-lg text-slate-600 dark:text-slate-400">
              Shows your income minus expenses over a period. Tells you if you're profitable.
            </p>
          </div>

          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Balance Sheet</h3>
            <p class="mt-2 text-lg text-slate-600 dark:text-slate-400">
              Shows your assets, liabilities, and equity at a point in time. A snapshot of your financial health.
            </p>
          </div>

          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Cash Flow Statement</h3>
            <p class="mt-2 text-lg text-slate-600 dark:text-slate-400">
              Shows how cash moved in and out. Critical for managing day-to-day operations.
            </p>
          </div>

          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Trial Balance</h3>
            <p class="mt-2 text-lg text-slate-600 dark:text-slate-400">
              Lists all accounts and their balances. Used to verify your books are balanced.
            </p>
          </div>
        </div>
      </section>

      <!-- Don't Worry -->
      <section class="mt-20">
        <div class="rounded-2xl bg-gradient-to-r from-blue-500 to-indigo-500 p-8 text-white">
          <h2 class="text-2xl font-bold">Don't Worry - Verasol Handles the Details</h2>
          <p class="mt-4 text-lg text-blue-100">
            You don't need to memorize any of this. When you create an invoice or record a bill, 
            Verasol automatically creates the correct accounting entries behind the scenes. 
            And if you're ever unsure, just ask the AI assistant!
          </p>
        </div>
      </section>

      <!-- Next Steps -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Learn More</h2>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <Link href="/docs/double-entry" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Double-Entry Bookkeeping</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">How debits and credits work</p>
          </Link>
          <Link href="/docs/chart-of-accounts" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Chart of Accounts</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Organize your financial categories</p>
          </Link>
        </div>
      </section>

      <!-- Bottom spacing -->
      <div class="h-20"></div>
    </div>
  </DocsLayout>
</template>
