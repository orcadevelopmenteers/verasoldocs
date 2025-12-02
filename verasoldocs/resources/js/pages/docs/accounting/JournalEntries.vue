<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <DocsLayout title="Journal Entries">
    <div class="max-w-4xl">
      <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">Journal Entries</h1>
      
      <p class="mt-6 text-xl leading-relaxed text-slate-600 dark:text-slate-400">
        Journal entries are the fundamental building blocks of accounting. Every financial transaction 
        is recorded as a journal entry with debits and credits that must balance.
      </p>

      <!-- Understanding Journal Entries -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Understanding Journal Entries</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Every journal entry consists of:</p>
        <ul class="mt-4 space-y-3">
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span><strong class="text-slate-900 dark:text-white">Date:</strong> When the transaction occurred</span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span><strong class="text-slate-900 dark:text-white">Debits:</strong> Accounts receiving value (left side)</span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span><strong class="text-slate-900 dark:text-white">Credits:</strong> Accounts giving value (right side)</span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span><strong class="text-slate-900 dark:text-white">Description:</strong> What the transaction is for</span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span><strong class="text-slate-900 dark:text-white">Reference:</strong> Optional reference number</span>
          </li>
        </ul>

        <div class="mt-8 rounded-2xl bg-blue-50 p-6 dark:bg-blue-900/20">
          <p class="text-lg text-blue-800 dark:text-blue-300">
            <strong>💡 Golden Rule:</strong> Total debits must always equal total credits. This is the 
            foundation of double-entry bookkeeping.
          </p>
        </div>
      </section>

      <!-- Accessing Journal Entries -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Accessing Journal Entries</h2>

        <ol class="mt-6 space-y-4">
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">1</span>
            <span>Go to <strong class="text-slate-900 dark:text-white">Accounting</strong> → <strong class="text-slate-900 dark:text-white">Journal Entries</strong></span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">2</span>
            <span>View all entries with their status (Draft, Posted, Voided)</span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">3</span>
            <span>Use filters to find specific entries</span>
          </li>
        </ol>
      </section>

      <!-- Creating a Journal Entry -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Creating a Journal Entry</h2>

        <ol class="mt-6 space-y-4">
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">1</span>
            <span>Click <strong class="text-slate-900 dark:text-white">"New Journal Entry"</strong></span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">2</span>
            <span>Enter the <strong class="text-slate-900 dark:text-white">Date</strong> of the transaction</span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">3</span>
            <span>Add <strong class="text-slate-900 dark:text-white">Reference</strong> (optional)</span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">4</span>
            <div>
              <span>Add line items:</span>
              <ul class="ml-6 mt-3 space-y-2">
                <li class="flex items-start">
                  <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-slate-400"></span>
                  <span>Select <strong class="text-slate-900 dark:text-white">Account</strong></span>
                </li>
                <li class="flex items-start">
                  <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-slate-400"></span>
                  <span>Enter <strong class="text-slate-900 dark:text-white">Debit</strong> or <strong class="text-slate-900 dark:text-white">Credit</strong> amount</span>
                </li>
                <li class="flex items-start">
                  <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-slate-400"></span>
                  <span>Add <strong class="text-slate-900 dark:text-white">Description</strong> for each line</span>
                </li>
              </ul>
            </div>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">5</span>
            <span>Ensure debits equal credits (shown at bottom)</span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">6</span>
            <span>Add an overall <strong class="text-slate-900 dark:text-white">Memo</strong></span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">7</span>
            <span>Click <strong class="text-slate-900 dark:text-white">"Save as Draft"</strong> or <strong class="text-slate-900 dark:text-white">"Post"</strong></span>
          </li>
        </ol>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Example: Recording a Sale</h3>

        <div class="mt-6 overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
          <div class="border-b border-slate-200 bg-slate-50 px-6 py-4 dark:border-slate-700 dark:bg-slate-800">
            <span class="text-base font-medium text-slate-900 dark:text-white">Cash sale of AED 1,000 + VAT 50</span>
          </div>
          <table class="w-full">
            <thead class="bg-slate-100 dark:bg-slate-800/50">
              <tr>
                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Account</th>
                <th class="px-6 py-4 text-right text-sm font-semibold text-slate-900 dark:text-white">Debit</th>
                <th class="px-6 py-4 text-right text-sm font-semibold text-slate-900 dark:text-white">Credit</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
              <tr>
                <td class="px-6 py-4 text-base text-slate-700 dark:text-slate-300">Cash</td>
                <td class="px-6 py-4 text-right text-base text-slate-700 dark:text-slate-300">1,050.00</td>
                <td class="px-6 py-4 text-right text-base text-slate-700 dark:text-slate-300">-</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-base text-slate-700 dark:text-slate-300">Sales Revenue</td>
                <td class="px-6 py-4 text-right text-base text-slate-700 dark:text-slate-300">-</td>
                <td class="px-6 py-4 text-right text-base text-slate-700 dark:text-slate-300">1,000.00</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-base text-slate-700 dark:text-slate-300">VAT Payable</td>
                <td class="px-6 py-4 text-right text-base text-slate-700 dark:text-slate-300">-</td>
                <td class="px-6 py-4 text-right text-base text-slate-700 dark:text-slate-300">50.00</td>
              </tr>
              <tr class="bg-slate-50 dark:bg-slate-800/30">
                <td class="px-6 py-4 text-base font-semibold text-slate-900 dark:text-white">Total</td>
                <td class="px-6 py-4 text-right text-base font-semibold text-slate-900 dark:text-white">1,050.00</td>
                <td class="px-6 py-4 text-right text-base font-semibold text-slate-900 dark:text-white">1,050.00</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <!-- Journal Entry Status -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Journal Entry Status</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Entries can have three statuses:</p>

        <div class="mt-6 space-y-4">
          <div class="flex items-start rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <span class="mr-4 rounded-lg bg-gray-100 px-3 py-1.5 text-sm font-medium text-gray-800 dark:bg-gray-800 dark:text-gray-300">Draft</span>
            <div>
              <p class="text-lg text-slate-700 dark:text-slate-300">
                Entry is saved but not finalized. Can be edited or deleted. Does not affect reports or balances.
              </p>
            </div>
          </div>
          
          <div class="flex items-start rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <span class="mr-4 rounded-lg bg-emerald-100 px-3 py-1.5 text-sm font-medium text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">Posted</span>
            <div>
              <p class="text-lg text-slate-700 dark:text-slate-300">
                Entry is finalized and affects account balances. Cannot be edited. Must be voided if incorrect.
              </p>
            </div>
          </div>
          
          <div class="flex items-start rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <span class="mr-4 rounded-lg bg-red-100 px-3 py-1.5 text-sm font-medium text-red-800 dark:bg-red-900 dark:text-red-300">Voided</span>
            <div>
              <p class="text-lg text-slate-700 dark:text-slate-300">
                Entry has been cancelled. Original entry remains for audit trail but is reversed from balances.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Posting Journal Entries -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Posting Journal Entries</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">To post a draft entry:</p>
        <ol class="mt-6 space-y-4">
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">1</span>
            <span>Open the journal entry</span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">2</span>
            <span>Review all details carefully</span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">3</span>
            <span>Click <strong class="text-slate-900 dark:text-white">"Post Entry"</strong></span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">4</span>
            <span>Confirm the action</span>
          </li>
        </ol>

        <div class="mt-8 rounded-2xl border-l-4 border-amber-400 bg-amber-50 p-6 dark:bg-amber-900/20">
          <p class="text-lg text-amber-700 dark:text-amber-400">
            <strong>⚠️ Important:</strong> Once posted, a journal entry cannot be edited. If you discover 
            an error, you must void the entry and create a new one.
          </p>
        </div>
      </section>

      <!-- Voiding Journal Entries -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Voiding Journal Entries</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">To void a posted entry:</p>
        <ol class="mt-6 space-y-4">
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">1</span>
            <span>Open the posted journal entry</span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">2</span>
            <span>Click <strong class="text-slate-900 dark:text-white">"Void Entry"</strong></span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">3</span>
            <span>Enter a reason for voiding</span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">4</span>
            <span>Confirm the action</span>
          </li>
        </ol>

        <p class="mt-6 text-lg text-slate-600 dark:text-slate-400">Voiding creates a reverse entry that cancels out the original, maintaining your audit trail.</p>
      </section>

      <!-- Reversing Entries -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Reversing Entries</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Reversing entries are useful for accruals and prepayments. They automatically reverse on a 
          specified future date.
        </p>

        <ol class="mt-6 space-y-4">
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">1</span>
            <span>Create a journal entry as normal</span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">2</span>
            <span>Check <strong class="text-slate-900 dark:text-white">"Auto-reverse"</strong></span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">3</span>
            <span>Set the <strong class="text-slate-900 dark:text-white">Reversal Date</strong></span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">4</span>
            <span>Post the entry</span>
          </li>
        </ol>

        <p class="mt-6 text-lg text-slate-600 dark:text-slate-400">
          On the reversal date, the system automatically creates an opposite entry to reverse the original.
        </p>
      </section>

      <!-- Common Journal Entry Types -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Common Journal Entry Types</h2>

        <h3 class="mt-10 text-xl font-semibold text-slate-900 dark:text-white">Accrued Expenses</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Recording expenses incurred but not yet paid:</p>
        <div class="mt-4 overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
          <table class="w-full">
            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
              <tr>
                <td class="px-6 py-4 text-base text-slate-700 dark:text-slate-300">Salaries Expense</td>
                <td class="px-6 py-4 text-right text-base font-medium text-slate-700 dark:text-slate-300">Debit</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-base text-slate-700 dark:text-slate-300">Accrued Salaries</td>
                <td class="px-6 py-4 text-right text-base font-medium text-slate-700 dark:text-slate-300">Credit</td>
              </tr>
            </tbody>
          </table>
        </div>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Prepaid Expenses</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Recording expenses paid in advance:</p>
        <div class="mt-4 overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
          <table class="w-full">
            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
              <tr>
                <td class="px-6 py-4 text-base text-slate-700 dark:text-slate-300">Prepaid Insurance</td>
                <td class="px-6 py-4 text-right text-base font-medium text-slate-700 dark:text-slate-300">Debit</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-base text-slate-700 dark:text-slate-300">Bank</td>
                <td class="px-6 py-4 text-right text-base font-medium text-slate-700 dark:text-slate-300">Credit</td>
              </tr>
            </tbody>
          </table>
        </div>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Depreciation</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Recording monthly depreciation:</p>
        <div class="mt-4 overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
          <table class="w-full">
            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
              <tr>
                <td class="px-6 py-4 text-base text-slate-700 dark:text-slate-300">Depreciation Expense</td>
                <td class="px-6 py-4 text-right text-base font-medium text-slate-700 dark:text-slate-300">Debit</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-base text-slate-700 dark:text-slate-300">Accumulated Depreciation</td>
                <td class="px-6 py-4 text-right text-base font-medium text-slate-700 dark:text-slate-300">Credit</td>
              </tr>
            </tbody>
          </table>
        </div>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Write-offs</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Writing off bad debt:</p>
        <div class="mt-4 overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
          <table class="w-full">
            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
              <tr>
                <td class="px-6 py-4 text-base text-slate-700 dark:text-slate-300">Bad Debt Expense</td>
                <td class="px-6 py-4 text-right text-base font-medium text-slate-700 dark:text-slate-300">Debit</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-base text-slate-700 dark:text-slate-300">Accounts Receivable</td>
                <td class="px-6 py-4 text-right text-base font-medium text-slate-700 dark:text-slate-300">Credit</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <!-- Closed Periods -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Closed Periods</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Journal entries cannot be created or modified in closed periods. If you need to make adjustments 
          to a closed period:
        </p>

        <ol class="mt-6 space-y-4">
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">1</span>
            <span>Go to <strong class="text-slate-900 dark:text-white">Settings → Period Closing</strong></span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">2</span>
            <span>Reopen the period (requires admin permission)</span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">3</span>
            <span>Make your adjustments</span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">4</span>
            <span>Close the period again</span>
          </li>
        </ol>

        <div class="mt-8 rounded-2xl border-l-4 border-red-400 bg-red-50 p-6 dark:bg-red-900/20">
          <p class="text-lg text-red-700 dark:text-red-400">
            <strong>⚠️ Warning:</strong> Reopening closed periods should be done only when absolutely 
            necessary. It can affect published financial statements and VAT returns.
          </p>
        </div>
      </section>

      <!-- Importing Journal Entries -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Importing Journal Entries</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">For bulk entry, you can import journal entries from a CSV file:</p>

        <ol class="mt-6 space-y-4">
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">1</span>
            <span>Go to <strong class="text-slate-900 dark:text-white">Journal Entries</strong></span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">2</span>
            <span>Click <strong class="text-slate-900 dark:text-white">"Import"</strong></span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">3</span>
            <span>Download the template file</span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">4</span>
            <span>Fill in your data</span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">5</span>
            <span>Upload the completed file</span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-4 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">6</span>
            <span>Review and confirm the import</span>
          </li>
        </ol>
      </section>

      <!-- Best Practices -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Best Practices</h2>

        <ul class="mt-6 space-y-3">
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span><strong class="text-slate-900 dark:text-white">Post regularly:</strong> Don't let drafts pile up</span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span><strong class="text-slate-900 dark:text-white">Use clear descriptions:</strong> Future you will thank present you</span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span><strong class="text-slate-900 dark:text-white">Reference source documents:</strong> Link to invoices, receipts, etc.</span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span><strong class="text-slate-900 dark:text-white">Review before posting:</strong> Posted entries can't be edited</span>
          </li>
          <li class="flex items-start text-lg text-slate-600 dark:text-slate-400">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span><strong class="text-slate-900 dark:text-white">Use recurring entries:</strong> For monthly entries like rent or depreciation</span>
          </li>
        </ul>
      </section>

      <!-- Next Steps -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Next Steps</h2>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <Link href="/docs/chart-of-accounts" class="block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-lg dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 dark:text-white">Chart of Accounts</h4>
            <p class="mt-2 text-base text-slate-600 dark:text-slate-400">Learn about account structure</p>
          </Link>
          <Link href="/docs/trial-balance" class="block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-lg dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 dark:text-white">Trial Balance</h4>
            <p class="mt-2 text-base text-slate-600 dark:text-slate-400">View account balances</p>
          </Link>
        </div>
      </section>

      <div class="h-20"></div>
    </div>
  </DocsLayout>
</template>
