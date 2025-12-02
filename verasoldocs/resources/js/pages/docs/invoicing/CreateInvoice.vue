<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <DocsLayout title="Creating Invoices">
    <div class="max-w-4xl">
      <!-- Page Header -->
      <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">
        Creating Invoices
      </h1>
      
      <p class="mt-6 text-xl leading-relaxed text-slate-600 dark:text-slate-400">
        Create professional, UAE VAT-compliant invoices for your customers. Verasol automates 
        the accounting entries so you can focus on your business.
      </p>

      <!-- Quick Start -->
      <section class="mt-16">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Quick Start</h2>

        <ol class="mt-6 space-y-4">
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">1</span>
            <span class="pt-1 text-lg text-slate-600 dark:text-slate-400">Go to <strong class="text-slate-900 dark:text-white">Invoicing → Invoices</strong></span>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">2</span>
            <span class="pt-1 text-lg text-slate-600 dark:text-slate-400">Click <strong class="text-slate-900 dark:text-white">"New Invoice"</strong></span>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">3</span>
            <span class="pt-1 text-lg text-slate-600 dark:text-slate-400">Select or create a <strong class="text-slate-900 dark:text-white">Customer</strong></span>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">4</span>
            <span class="pt-1 text-lg text-slate-600 dark:text-slate-400">Add line items</span>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">5</span>
            <span class="pt-1 text-lg text-slate-600 dark:text-slate-400">Review and save</span>
          </li>
        </ol>
      </section>

      <!-- Invoice Details -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Invoice Details</h2>

        <div class="mt-10">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Header Information</h3>
          <ul class="mt-4 space-y-3">
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Customer:</strong> Select existing or create new customer</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Invoice Date:</strong> When the invoice is issued</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Due Date:</strong> Payment deadline (auto-calculated from payment terms)</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Invoice Number:</strong> Auto-generated or custom (must be sequential)</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Reference:</strong> Optional PO number or reference</span>
            </li>
          </ul>
        </div>

        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Line Items</h3>
          <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">For each line item, specify:</p>
          <ul class="mt-4 space-y-3">
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Item/Description:</strong> What you're charging for</span>
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
              <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">VAT Treatment:</strong> Standard (5%), Zero-rated, or Exempt</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Account:</strong> Revenue account for posting</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Discount:</strong> Optional line discount</span>
            </li>
          </ul>
        </div>

        <!-- Example Invoice Line -->
        <div class="mt-10 rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
          <h4 class="text-lg font-semibold text-slate-900 dark:text-white">Example Invoice Line</h4>
          <div class="mt-4 overflow-x-auto">
            <table class="w-full">
              <thead class="border-b border-slate-200 dark:border-slate-700">
                <tr>
                  <th class="pb-3 text-left text-sm font-semibold text-slate-700 dark:text-slate-300">Description</th>
                  <th class="pb-3 text-right text-sm font-semibold text-slate-700 dark:text-slate-300">Qty</th>
                  <th class="pb-3 text-right text-sm font-semibold text-slate-700 dark:text-slate-300">Rate</th>
                  <th class="pb-3 text-right text-sm font-semibold text-slate-700 dark:text-slate-300">VAT</th>
                  <th class="pb-3 text-right text-sm font-semibold text-slate-700 dark:text-slate-300">Amount</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-3 text-slate-700 dark:text-slate-300">Consulting Services - Dec 2024</td>
                  <td class="py-3 text-right text-slate-700 dark:text-slate-300">10 hrs</td>
                  <td class="py-3 text-right text-slate-700 dark:text-slate-300">500.00</td>
                  <td class="py-3 text-right text-slate-700 dark:text-slate-300">250.00</td>
                  <td class="py-3 text-right font-semibold text-slate-900 dark:text-white">5,250.00</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Totals</h3>
          <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">The invoice automatically calculates:</p>
          <ul class="mt-4 space-y-3">
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Subtotal:</strong> Sum of line items before VAT</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">VAT (5%):</strong> Total VAT amount</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Total:</strong> Final amount due</span>
            </li>
          </ul>
        </div>
      </section>

      <!-- Invoice Status -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Invoice Status</h2>

        <div class="mt-8 space-y-4">
          <div class="flex items-center gap-4 rounded-2xl border border-slate-200 p-5 dark:border-slate-700">
            <span class="rounded-lg bg-gray-100 px-4 py-2 text-sm font-semibold text-gray-800 dark:bg-gray-800 dark:text-gray-300">Draft</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Saved but not sent. Can be edited or deleted.</span>
          </div>
          <div class="flex items-center gap-4 rounded-2xl border border-slate-200 p-5 dark:border-slate-700">
            <span class="rounded-lg bg-blue-100 px-4 py-2 text-sm font-semibold text-blue-800 dark:bg-blue-900 dark:text-blue-300">Sent</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Invoice has been sent to customer. Awaiting payment.</span>
          </div>
          <div class="flex items-center gap-4 rounded-2xl border border-slate-200 p-5 dark:border-slate-700">
            <span class="rounded-lg bg-amber-100 px-4 py-2 text-sm font-semibold text-amber-800 dark:bg-amber-900 dark:text-amber-300">Overdue</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Past due date with outstanding balance.</span>
          </div>
          <div class="flex items-center gap-4 rounded-2xl border border-slate-200 p-5 dark:border-slate-700">
            <span class="rounded-lg bg-emerald-100 px-4 py-2 text-sm font-semibold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">Paid</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Full payment received.</span>
          </div>
          <div class="flex items-center gap-4 rounded-2xl border border-slate-200 p-5 dark:border-slate-700">
            <span class="rounded-lg bg-purple-100 px-4 py-2 text-sm font-semibold text-purple-800 dark:bg-purple-900 dark:text-purple-300">Partial</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Some payment received, balance remaining.</span>
          </div>
          <div class="flex items-center gap-4 rounded-2xl border border-slate-200 p-5 dark:border-slate-700">
            <span class="rounded-lg bg-red-100 px-4 py-2 text-sm font-semibold text-red-800 dark:bg-red-900 dark:text-red-300">Void</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Invoice cancelled. Original retained for audit trail.</span>
          </div>
        </div>
      </section>

      <!-- Sending Invoices -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Sending Invoices</h2>

        <div class="mt-10">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Email</h3>
          <ol class="mt-4 space-y-3">
            <li class="flex items-start gap-4">
              <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">1</span>
              <span class="pt-0.5 text-lg text-slate-600 dark:text-slate-400">Open the invoice</span>
            </li>
            <li class="flex items-start gap-4">
              <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">2</span>
              <span class="pt-0.5 text-lg text-slate-600 dark:text-slate-400">Click <strong class="text-slate-900 dark:text-white">"Send"</strong></span>
            </li>
            <li class="flex items-start gap-4">
              <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">3</span>
              <span class="pt-0.5 text-lg text-slate-600 dark:text-slate-400">Review email details (recipient, subject, message)</span>
            </li>
            <li class="flex items-start gap-4">
              <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">4</span>
              <span class="pt-0.5 text-lg text-slate-600 dark:text-slate-400">Click <strong class="text-slate-900 dark:text-white">"Send Email"</strong></span>
            </li>
          </ol>
          <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">The invoice is attached as a PDF. You can customize the email template in Settings.</p>
        </div>

        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">PDF Download</h3>
          <ol class="mt-4 space-y-3">
            <li class="flex items-start gap-4">
              <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">1</span>
              <span class="pt-0.5 text-lg text-slate-600 dark:text-slate-400">Open the invoice</span>
            </li>
            <li class="flex items-start gap-4">
              <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">2</span>
              <span class="pt-0.5 text-lg text-slate-600 dark:text-slate-400">Click <strong class="text-slate-900 dark:text-white">"Download PDF"</strong></span>
            </li>
            <li class="flex items-start gap-4">
              <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">3</span>
              <span class="pt-0.5 text-lg text-slate-600 dark:text-slate-400">Save or print the document</span>
            </li>
          </ol>
        </div>
      </section>

      <!-- Recording Payments -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Recording Payments</h2>

        <div class="mt-10">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">From Invoice</h3>
          <ol class="mt-4 space-y-4">
            <li class="flex items-start gap-4">
              <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">1</span>
              <span class="pt-1 text-lg text-slate-600 dark:text-slate-400">Open the invoice</span>
            </li>
            <li class="flex items-start gap-4">
              <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">2</span>
              <span class="pt-1 text-lg text-slate-600 dark:text-slate-400">Click <strong class="text-slate-900 dark:text-white">"Record Payment"</strong></span>
            </li>
            <li class="flex items-start gap-4">
              <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">3</span>
              <div class="pt-1 text-lg text-slate-600 dark:text-slate-400">
                <span>Enter payment details:</span>
                <ul class="mt-3 space-y-2 pl-4">
                  <li class="flex items-center gap-2">
                    <span class="h-1.5 w-1.5 rounded-full bg-slate-400"></span>
                    Amount received
                  </li>
                  <li class="flex items-center gap-2">
                    <span class="h-1.5 w-1.5 rounded-full bg-slate-400"></span>
                    Payment date
                  </li>
                  <li class="flex items-center gap-2">
                    <span class="h-1.5 w-1.5 rounded-full bg-slate-400"></span>
                    Payment method (cash, check, transfer)
                  </li>
                  <li class="flex items-center gap-2">
                    <span class="h-1.5 w-1.5 rounded-full bg-slate-400"></span>
                    Bank account
                  </li>
                  <li class="flex items-center gap-2">
                    <span class="h-1.5 w-1.5 rounded-full bg-slate-400"></span>
                    Reference (check number, transfer ID)
                  </li>
                </ul>
              </div>
            </li>
            <li class="flex items-start gap-4">
              <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">4</span>
              <span class="pt-1 text-lg text-slate-600 dark:text-slate-400">Save payment</span>
            </li>
          </ol>
        </div>

        <div class="mt-10 rounded-2xl border-l-4 border-blue-400 bg-blue-50 p-6 dark:bg-blue-900/20">
          <p class="text-lg text-blue-800 dark:text-blue-300">
            <strong>💡 Tip:</strong> For payments that cover multiple invoices, use "Receive Payment" 
            to apply one payment across several invoices.
          </p>
        </div>
      </section>

      <!-- Accounting Impact -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Accounting Impact</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">When an invoice is saved (not draft), Verasol creates:</p>

        <div class="mt-8 overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
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
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">Accounts Receivable</td>
                <td class="px-6 py-4 text-right font-medium text-slate-900 dark:text-white">Total</td>
                <td class="px-6 py-4 text-right text-slate-600 dark:text-slate-400">-</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">Sales Revenue</td>
                <td class="px-6 py-4 text-right text-slate-600 dark:text-slate-400">-</td>
                <td class="px-6 py-4 text-right font-medium text-slate-900 dark:text-white">Subtotal</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">VAT Payable</td>
                <td class="px-6 py-4 text-right text-slate-600 dark:text-slate-400">-</td>
                <td class="px-6 py-4 text-right font-medium text-slate-900 dark:text-white">VAT</td>
              </tr>
            </tbody>
          </table>
        </div>

        <p class="mt-8 text-lg text-slate-600 dark:text-slate-400">When payment is received:</p>

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
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">Bank</td>
                <td class="px-6 py-4 text-right font-medium text-slate-900 dark:text-white">Amount</td>
                <td class="px-6 py-4 text-right text-slate-600 dark:text-slate-400">-</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">Accounts Receivable</td>
                <td class="px-6 py-4 text-right text-slate-600 dark:text-slate-400">-</td>
                <td class="px-6 py-4 text-right font-medium text-slate-900 dark:text-white">Amount</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <!-- Next Steps -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Next Steps</h2>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <Link href="/docs/customers" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Managing Customers</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Add and manage your customer list</p>
          </Link>
          <Link href="/docs/credit-notes" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Credit Notes</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Handle refunds and corrections</p>
          </Link>
        </div>
      </section>

      <!-- Bottom spacing -->
      <div class="h-20"></div>
    </div>
  </DocsLayout>
</template>
