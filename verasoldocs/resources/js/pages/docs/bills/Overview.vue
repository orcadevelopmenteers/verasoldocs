<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <DocsLayout title="Managing Bills & Expenses">
    <div class="max-w-4xl">
      <!-- Page Header -->
      <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">
        Bills & Expenses
      </h1>
      
      <p class="mt-6 text-xl leading-relaxed text-slate-600 dark:text-slate-400">
        Track what you owe to suppliers and record business expenses. Verasol automates the 
        accounting entries and helps you stay on top of payments.
      </p>

      <!-- Understanding Bills vs Expenses -->
      <section class="mt-16">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Understanding Bills vs Expenses</h2>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Bills</h3>
            <p class="mt-3 text-lg text-slate-600 dark:text-slate-400">
              Used when you receive goods/services from a supplier and will pay later. Creates 
              an accounts payable entry.
            </p>
            <p class="mt-3 text-lg font-medium text-emerald-600 dark:text-emerald-400">
              Example: Rent invoice due in 30 days
            </p>
          </div>
          
          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Expenses</h3>
            <p class="mt-3 text-lg text-slate-600 dark:text-slate-400">
              Used for immediate purchases already paid for. Records directly to expense 
              account and bank/cash.
            </p>
            <p class="mt-3 text-lg font-medium text-emerald-600 dark:text-emerald-400">
              Example: Taxi fare paid by cash
            </p>
          </div>
        </div>
      </section>

      <!-- Creating a Bill -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Creating a Bill</h2>

        <ol class="mt-8 space-y-4">
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">1</span>
            <span class="pt-1 text-lg text-slate-600 dark:text-slate-400">Go to <strong class="text-slate-900 dark:text-white">Bills → Bills</strong></span>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">2</span>
            <span class="pt-1 text-lg text-slate-600 dark:text-slate-400">Click <strong class="text-slate-900 dark:text-white">"New Bill"</strong></span>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">3</span>
            <span class="pt-1 text-lg text-slate-600 dark:text-slate-400">Select or create a <strong class="text-slate-900 dark:text-white">Vendor</strong></span>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">4</span>
            <div class="pt-1 text-lg text-slate-600 dark:text-slate-400">
              <span>Enter bill details:</span>
              <ul class="mt-3 space-y-2 pl-4">
                <li class="flex items-center gap-2">
                  <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                  <strong class="text-slate-900 dark:text-white">Bill Number:</strong> Vendor's invoice number
                </li>
                <li class="flex items-center gap-2">
                  <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                  <strong class="text-slate-900 dark:text-white">Bill Date:</strong> Invoice date from vendor
                </li>
                <li class="flex items-center gap-2">
                  <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                  <strong class="text-slate-900 dark:text-white">Due Date:</strong> When payment is due
                </li>
              </ul>
            </div>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">5</span>
            <span class="pt-1 text-lg text-slate-600 dark:text-slate-400">Add line items</span>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">6</span>
            <span class="pt-1 text-lg text-slate-600 dark:text-slate-400">Save the bill</span>
          </li>
        </ol>

        <div class="mt-10">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Bill Line Items</h3>
          <ul class="mt-4 space-y-3">
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Description:</strong> What you're being charged for</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Account:</strong> Expense or asset account</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Quantity:</strong> Number of units</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Unit Price:</strong> Price per unit (excluding VAT)</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">VAT Treatment:</strong> Standard (5%), Zero-rated, Exempt</span>
            </li>
          </ul>
        </div>
      </section>

      <!-- Bill Status -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Bill Status</h2>

        <div class="mt-8 space-y-4">
          <div class="flex items-center gap-4 rounded-2xl border border-slate-200 p-5 dark:border-slate-700">
            <span class="rounded-lg bg-gray-100 px-4 py-2 text-sm font-semibold text-gray-800 dark:bg-gray-800 dark:text-gray-300">Draft</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Saved but not finalized. Can be edited or deleted.</span>
          </div>
          <div class="flex items-center gap-4 rounded-2xl border border-slate-200 p-5 dark:border-slate-700">
            <span class="rounded-lg bg-blue-100 px-4 py-2 text-sm font-semibold text-blue-800 dark:bg-blue-900 dark:text-blue-300">Awaiting Payment</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Bill is active and awaiting payment.</span>
          </div>
          <div class="flex items-center gap-4 rounded-2xl border border-slate-200 p-5 dark:border-slate-700">
            <span class="rounded-lg bg-amber-100 px-4 py-2 text-sm font-semibold text-amber-800 dark:bg-amber-900 dark:text-amber-300">Overdue</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Past due date with outstanding balance.</span>
          </div>
          <div class="flex items-center gap-4 rounded-2xl border border-slate-200 p-5 dark:border-slate-700">
            <span class="rounded-lg bg-purple-100 px-4 py-2 text-sm font-semibold text-purple-800 dark:bg-purple-900 dark:text-purple-300">Partial</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Some payment made, balance remaining.</span>
          </div>
          <div class="flex items-center gap-4 rounded-2xl border border-slate-200 p-5 dark:border-slate-700">
            <span class="rounded-lg bg-emerald-100 px-4 py-2 text-sm font-semibold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">Paid</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Fully paid.</span>
          </div>
        </div>
      </section>

      <!-- Making Payments -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Making Payments</h2>

        <div class="mt-10">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">From a Bill</h3>
          <ol class="mt-4 space-y-3">
            <li class="flex items-start gap-4">
              <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">1</span>
              <span class="pt-0.5 text-lg text-slate-600 dark:text-slate-400">Open the bill</span>
            </li>
            <li class="flex items-start gap-4">
              <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">2</span>
              <span class="pt-0.5 text-lg text-slate-600 dark:text-slate-400">Click <strong class="text-slate-900 dark:text-white">"Make Payment"</strong></span>
            </li>
            <li class="flex items-start gap-4">
              <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">3</span>
              <span class="pt-0.5 text-lg text-slate-600 dark:text-slate-400">Enter payment details</span>
            </li>
            <li class="flex items-start gap-4">
              <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">4</span>
              <span class="pt-0.5 text-lg text-slate-600 dark:text-slate-400">Save payment</span>
            </li>
          </ol>
        </div>

        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Bulk Payment</h3>
          <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Pay multiple bills at once:</p>
          <ol class="mt-4 space-y-3">
            <li class="flex items-start gap-4">
              <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">1</span>
              <span class="pt-0.5 text-lg text-slate-600 dark:text-slate-400">Go to <strong class="text-slate-900 dark:text-white">Bills → Pay Bills</strong></span>
            </li>
            <li class="flex items-start gap-4">
              <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">2</span>
              <span class="pt-0.5 text-lg text-slate-600 dark:text-slate-400">Select vendor (or view all)</span>
            </li>
            <li class="flex items-start gap-4">
              <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">3</span>
              <span class="pt-0.5 text-lg text-slate-600 dark:text-slate-400">Check bills to pay</span>
            </li>
            <li class="flex items-start gap-4">
              <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">4</span>
              <span class="pt-0.5 text-lg text-slate-600 dark:text-slate-400">Process payment</span>
            </li>
          </ol>
        </div>
      </section>

      <!-- Accounting Impact -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Accounting Impact</h2>

        <div class="mt-10">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">When Bill is Created</h3>
          <div class="mt-6 overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
            <table class="w-full">
              <thead class="bg-slate-50 dark:bg-slate-800">
                <tr>
                  <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Account</th>
                  <th class="px-6 py-4 text-right text-sm font-semibold text-slate-900 dark:text-white">Debit</th>
                  <th class="px-6 py-4 text-right text-sm font-semibold text-slate-900 dark:text-white">Credit</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                <tr>
                  <td class="px-6 py-4 text-slate-700 dark:text-slate-300">Expense Account</td>
                  <td class="px-6 py-4 text-right font-medium text-slate-900 dark:text-white">Subtotal</td>
                  <td class="px-6 py-4 text-right text-slate-600 dark:text-slate-400">-</td>
                </tr>
                <tr>
                  <td class="px-6 py-4 text-slate-700 dark:text-slate-300">VAT Receivable</td>
                  <td class="px-6 py-4 text-right font-medium text-slate-900 dark:text-white">VAT</td>
                  <td class="px-6 py-4 text-right text-slate-600 dark:text-slate-400">-</td>
                </tr>
                <tr>
                  <td class="px-6 py-4 text-slate-700 dark:text-slate-300">Accounts Payable</td>
                  <td class="px-6 py-4 text-right text-slate-600 dark:text-slate-400">-</td>
                  <td class="px-6 py-4 text-right font-medium text-slate-900 dark:text-white">Total</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">When Payment is Made</h3>
          <div class="mt-6 overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
            <table class="w-full">
              <thead class="bg-slate-50 dark:bg-slate-800">
                <tr>
                  <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Account</th>
                  <th class="px-6 py-4 text-right text-sm font-semibold text-slate-900 dark:text-white">Debit</th>
                  <th class="px-6 py-4 text-right text-sm font-semibold text-slate-900 dark:text-white">Credit</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                <tr>
                  <td class="px-6 py-4 text-slate-700 dark:text-slate-300">Accounts Payable</td>
                  <td class="px-6 py-4 text-right font-medium text-slate-900 dark:text-white">Amount</td>
                  <td class="px-6 py-4 text-right text-slate-600 dark:text-slate-400">-</td>
                </tr>
                <tr>
                  <td class="px-6 py-4 text-slate-700 dark:text-slate-300">Bank</td>
                  <td class="px-6 py-4 text-right text-slate-600 dark:text-slate-400">-</td>
                  <td class="px-6 py-4 text-right font-medium text-slate-900 dark:text-white">Amount</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>

      <!-- Best Practices -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Best Practices</h2>

        <div class="mt-8 space-y-4">
          <div class="rounded-2xl border-l-4 border-emerald-400 bg-emerald-50 p-6 dark:bg-emerald-900/20">
            <h4 class="text-lg font-semibold text-emerald-800 dark:text-emerald-300">✅ Enter Bills Promptly</h4>
            <p class="mt-2 text-lg text-emerald-700 dark:text-emerald-400">
              Record bills when received to track payables accurately and never miss payments.
            </p>
          </div>
          
          <div class="rounded-2xl border-l-4 border-emerald-400 bg-emerald-50 p-6 dark:bg-emerald-900/20">
            <h4 class="text-lg font-semibold text-emerald-800 dark:text-emerald-300">✅ Attach Receipts</h4>
            <p class="mt-2 text-lg text-emerald-700 dark:text-emerald-400">
              Always upload receipt images. Required for VAT claims and audit trail.
            </p>
          </div>
          
          <div class="rounded-2xl border-l-4 border-emerald-400 bg-emerald-50 p-6 dark:bg-emerald-900/20">
            <h4 class="text-lg font-semibold text-emerald-800 dark:text-emerald-300">✅ Verify TRN</h4>
            <p class="mt-2 text-lg text-emerald-700 dark:text-emerald-400">
              Check vendor TRN is valid before claiming input VAT. Invalid TRN = no VAT recovery.
            </p>
          </div>
          
          <div class="rounded-2xl border-l-4 border-emerald-400 bg-emerald-50 p-6 dark:bg-emerald-900/20">
            <h4 class="text-lg font-semibold text-emerald-800 dark:text-emerald-300">✅ Review Aged Payables</h4>
            <p class="mt-2 text-lg text-emerald-700 dark:text-emerald-400">
              Check weekly to catch overdue bills and maintain good vendor relationships.
            </p>
          </div>
        </div>
      </section>

      <!-- Next Steps -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Next Steps</h2>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <Link href="/docs/vendors" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Managing Vendors</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Add and manage your supplier list</p>
          </Link>
          <Link href="/docs/bank-reconciliation" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Bank Reconciliation</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Match payments with bank statements</p>
          </Link>
        </div>
      </section>

      <!-- Bottom spacing -->
      <div class="h-20"></div>
    </div>
  </DocsLayout>
</template>
