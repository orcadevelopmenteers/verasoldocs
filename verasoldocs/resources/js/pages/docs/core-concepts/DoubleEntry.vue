<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <DocsLayout title="Double-Entry Bookkeeping">
    <div class="max-w-4xl">
      <!-- Page Header -->
      <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">
        Double-Entry Bookkeeping
      </h1>
      
      <p class="mt-6 text-xl leading-relaxed text-slate-600 dark:text-slate-400">
        Every transaction affects at least two accounts. This system, used for over 500 years, 
        ensures your books always balance and errors are easy to catch.
      </p>

      <!-- The Golden Rule -->
      <section class="mt-16">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">The Golden Rule</h2>
        
        <div class="mt-8 rounded-2xl bg-gradient-to-r from-emerald-500 to-teal-500 p-8 text-center text-white">
          <p class="text-2xl font-bold">For every Debit, there must be an equal Credit</p>
          <p class="mt-2 text-emerald-100">Total Debits = Total Credits (Always!)</p>
        </div>

        <p class="mt-8 text-lg text-slate-600 dark:text-slate-400">
          This is what keeps your accounting balanced. If debits don't equal credits, 
          something is wrong.
        </p>
      </section>

      <!-- Debits and Credits -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Understanding Debits & Credits</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Forget what you know from banking. In accounting, debit and credit simply mean left and right:
        </p>

        <div class="mt-8 overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
          <table class="w-full">
            <thead class="bg-slate-50 dark:bg-slate-800">
              <tr>
                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Account Type</th>
                <th class="px-6 py-4 text-center text-sm font-semibold text-slate-900 dark:text-white">Debit (Dr)</th>
                <th class="px-6 py-4 text-center text-sm font-semibold text-slate-900 dark:text-white">Credit (Cr)</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
              <tr>
                <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">Assets</td>
                <td class="px-6 py-4 text-center text-emerald-600 dark:text-emerald-400">↑ Increase</td>
                <td class="px-6 py-4 text-center text-red-600 dark:text-red-400">↓ Decrease</td>
              </tr>
              <tr>
                <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">Liabilities</td>
                <td class="px-6 py-4 text-center text-red-600 dark:text-red-400">↓ Decrease</td>
                <td class="px-6 py-4 text-center text-emerald-600 dark:text-emerald-400">↑ Increase</td>
              </tr>
              <tr>
                <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">Equity</td>
                <td class="px-6 py-4 text-center text-red-600 dark:text-red-400">↓ Decrease</td>
                <td class="px-6 py-4 text-center text-emerald-600 dark:text-emerald-400">↑ Increase</td>
              </tr>
              <tr>
                <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">Income</td>
                <td class="px-6 py-4 text-center text-red-600 dark:text-red-400">↓ Decrease</td>
                <td class="px-6 py-4 text-center text-emerald-600 dark:text-emerald-400">↑ Increase</td>
              </tr>
              <tr>
                <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">Expenses</td>
                <td class="px-6 py-4 text-center text-emerald-600 dark:text-emerald-400">↑ Increase</td>
                <td class="px-6 py-4 text-center text-red-600 dark:text-red-400">↓ Decrease</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="mt-8 rounded-2xl border-l-4 border-blue-400 bg-blue-50 p-6 dark:bg-blue-900/20">
          <p class="text-lg text-blue-800 dark:text-blue-300">
            <strong>Memory Trick:</strong> Assets and Expenses increase with debits (they're on the left side of the equation). 
            Everything else increases with credits.
          </p>
        </div>
      </section>

      <!-- Real Examples -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Real-World Examples</h2>

        <!-- Example 1 -->
        <div class="mt-10">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Example 1: You receive payment from a customer</h3>
          <p class="mt-2 text-lg text-slate-600 dark:text-slate-400">Customer pays AED 5,000 for an invoice</p>
          
          <div class="mt-6 overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
            <table class="w-full">
              <thead class="bg-slate-50 dark:bg-slate-800">
                <tr>
                  <th class="px-6 py-3 text-left text-sm font-semibold text-slate-900 dark:text-white">Account</th>
                  <th class="px-6 py-3 text-right text-sm font-semibold text-slate-900 dark:text-white">Debit</th>
                  <th class="px-6 py-3 text-right text-sm font-semibold text-slate-900 dark:text-white">Credit</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                <tr>
                  <td class="px-6 py-3 text-slate-900 dark:text-white">Bank Account (Asset ↑)</td>
                  <td class="px-6 py-3 text-right font-mono text-emerald-600 dark:text-emerald-400">5,000</td>
                  <td class="px-6 py-3 text-right text-slate-400">-</td>
                </tr>
                <tr>
                  <td class="px-6 py-3 text-slate-900 dark:text-white">Accounts Receivable (Asset ↓)</td>
                  <td class="px-6 py-3 text-right text-slate-400">-</td>
                  <td class="px-6 py-3 text-right font-mono text-emerald-600 dark:text-emerald-400">5,000</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p class="mt-4 text-slate-600 dark:text-slate-400">
            ✓ Cash goes up, amount owed by customer goes down. Balanced!
          </p>
        </div>

        <!-- Example 2 -->
        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Example 2: You pay rent</h3>
          <p class="mt-2 text-lg text-slate-600 dark:text-slate-400">Monthly office rent of AED 3,000</p>
          
          <div class="mt-6 overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
            <table class="w-full">
              <thead class="bg-slate-50 dark:bg-slate-800">
                <tr>
                  <th class="px-6 py-3 text-left text-sm font-semibold text-slate-900 dark:text-white">Account</th>
                  <th class="px-6 py-3 text-right text-sm font-semibold text-slate-900 dark:text-white">Debit</th>
                  <th class="px-6 py-3 text-right text-sm font-semibold text-slate-900 dark:text-white">Credit</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                <tr>
                  <td class="px-6 py-3 text-slate-900 dark:text-white">Rent Expense (Expense ↑)</td>
                  <td class="px-6 py-3 text-right font-mono text-emerald-600 dark:text-emerald-400">3,000</td>
                  <td class="px-6 py-3 text-right text-slate-400">-</td>
                </tr>
                <tr>
                  <td class="px-6 py-3 text-slate-900 dark:text-white">Bank Account (Asset ↓)</td>
                  <td class="px-6 py-3 text-right text-slate-400">-</td>
                  <td class="px-6 py-3 text-right font-mono text-emerald-600 dark:text-emerald-400">3,000</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p class="mt-4 text-slate-600 dark:text-slate-400">
            ✓ Expense recorded, cash reduced. Balanced!
          </p>
        </div>

        <!-- Example 3 -->
        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Example 3: You make a sale with VAT</h3>
          <p class="mt-2 text-lg text-slate-600 dark:text-slate-400">Invoice for AED 10,000 + 5% VAT (AED 500)</p>
          
          <div class="mt-6 overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
            <table class="w-full">
              <thead class="bg-slate-50 dark:bg-slate-800">
                <tr>
                  <th class="px-6 py-3 text-left text-sm font-semibold text-slate-900 dark:text-white">Account</th>
                  <th class="px-6 py-3 text-right text-sm font-semibold text-slate-900 dark:text-white">Debit</th>
                  <th class="px-6 py-3 text-right text-sm font-semibold text-slate-900 dark:text-white">Credit</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                <tr>
                  <td class="px-6 py-3 text-slate-900 dark:text-white">Accounts Receivable (Asset ↑)</td>
                  <td class="px-6 py-3 text-right font-mono text-emerald-600 dark:text-emerald-400">10,500</td>
                  <td class="px-6 py-3 text-right text-slate-400">-</td>
                </tr>
                <tr>
                  <td class="px-6 py-3 text-slate-900 dark:text-white">Sales Revenue (Income ↑)</td>
                  <td class="px-6 py-3 text-right text-slate-400">-</td>
                  <td class="px-6 py-3 text-right font-mono text-emerald-600 dark:text-emerald-400">10,000</td>
                </tr>
                <tr>
                  <td class="px-6 py-3 text-slate-900 dark:text-white">VAT Payable (Liability ↑)</td>
                  <td class="px-6 py-3 text-right text-slate-400">-</td>
                  <td class="px-6 py-3 text-right font-mono text-emerald-600 dark:text-emerald-400">500</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p class="mt-4 text-slate-600 dark:text-slate-400">
            ✓ Three accounts affected, but debits (10,500) = credits (10,000 + 500). Balanced!
          </p>
        </div>
      </section>

      <!-- Verasol Handles It -->
      <section class="mt-20">
        <div class="rounded-2xl bg-gradient-to-r from-emerald-500 to-teal-500 p-8 text-white">
          <h2 class="text-2xl font-bold">Good News: Verasol Does This Automatically</h2>
          <p class="mt-4 text-lg text-emerald-100">
            When you create an invoice, record a payment, or enter a bill, Verasol automatically 
            generates the correct double-entry transactions. You focus on your business - 
            we handle the accounting.
          </p>
          <div class="mt-6 flex flex-wrap gap-4">
            <div class="rounded-xl bg-white/20 px-4 py-2">
              <span class="font-medium">Create Invoice</span> → Auto journal entry
            </div>
            <div class="rounded-xl bg-white/20 px-4 py-2">
              <span class="font-medium">Record Payment</span> → Auto journal entry
            </div>
            <div class="rounded-xl bg-white/20 px-4 py-2">
              <span class="font-medium">Enter Bill</span> → Auto journal entry
            </div>
          </div>
        </div>
      </section>

      <!-- When You Need Manual Entries -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">When You Need Manual Journal Entries</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Sometimes you'll need to create manual entries for:
        </p>

        <ul class="mt-6 space-y-3">
          <li class="flex items-start gap-3">
            <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Depreciation of fixed assets</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Accruals and prepayments</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Corrections and adjustments</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Year-end closing entries</span>
          </li>
        </ul>

        <div class="mt-8 rounded-2xl border-l-4 border-blue-400 bg-blue-50 p-6 dark:bg-blue-900/20">
          <p class="text-lg text-blue-800 dark:text-blue-300">
            <strong>Tip:</strong> Ask the AI assistant to help create manual journal entries. 
            Just describe what you need, and it will suggest the correct debits and credits.
          </p>
        </div>
      </section>

      <!-- Next Steps -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Continue Learning</h2>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <Link href="/docs/chart-of-accounts" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Chart of Accounts</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Organize your account categories</p>
          </Link>
          <Link href="/docs/journal-entries" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Journal Entries</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Create manual entries when needed</p>
          </Link>
        </div>
      </section>

      <!-- Bottom spacing -->
      <div class="h-20"></div>
    </div>
  </DocsLayout>
</template>
