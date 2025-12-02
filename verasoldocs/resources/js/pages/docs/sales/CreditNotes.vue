<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <DocsLayout title="Credit Notes">
    <div class="max-w-4xl">
      <!-- Page Header -->
      <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">
        Credit Notes
      </h1>
      
      <p class="mt-6 text-xl leading-relaxed text-slate-600 dark:text-slate-400">
        Issue credit notes to reduce the amount a customer owes. Use them for returns, 
        discounts, or to correct invoice errors.
      </p>

      <!-- What is a Credit Note -->
      <section class="mt-16">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">What is a Credit Note?</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          A credit note (also called credit memo) is a document that reduces the amount 
          a customer owes you. It's essentially a "negative invoice."
        </p>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <div class="rounded-2xl border-l-4 border-blue-400 bg-blue-50 p-6 dark:bg-blue-900/20">
            <h3 class="text-xl font-semibold text-blue-800 dark:text-blue-300">Invoice</h3>
            <p class="mt-2 text-blue-700 dark:text-blue-400">
              Increases what customer owes
            </p>
            <p class="mt-4 text-2xl font-bold text-blue-800 dark:text-blue-300">+AED 5,000</p>
          </div>

          <div class="rounded-2xl border-l-4 border-red-400 bg-red-50 p-6 dark:bg-red-900/20">
            <h3 class="text-xl font-semibold text-red-800 dark:text-red-300">Credit Note</h3>
            <p class="mt-2 text-red-700 dark:text-red-400">
              Decreases what customer owes
            </p>
            <p class="mt-4 text-2xl font-bold text-red-800 dark:text-red-300">-AED 500</p>
          </div>
        </div>
      </section>

      <!-- When to Use -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">When to Use Credit Notes</h2>
        
        <div class="mt-8 space-y-4">
          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">🔄 Product Returns</h3>
            <p class="mt-2 text-lg text-slate-600 dark:text-slate-400">
              Customer returns goods and needs a refund or credit.
            </p>
          </div>

          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">💰 Post-Invoice Discounts</h3>
            <p class="mt-2 text-lg text-slate-600 dark:text-slate-400">
              Offering a discount after the invoice was issued.
            </p>
          </div>

          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">❌ Invoice Errors</h3>
            <p class="mt-2 text-lg text-slate-600 dark:text-slate-400">
              Correcting overcharges or billing mistakes on a sent invoice.
            </p>
          </div>

          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">📉 Service Not Delivered</h3>
            <p class="mt-2 text-lg text-slate-600 dark:text-slate-400">
              Part of a service wasn't completed as invoiced.
            </p>
          </div>
        </div>
      </section>

      <!-- Creating a Credit Note -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Creating a Credit Note</h2>
        
        <ol class="mt-6 space-y-4">
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">1</span>
            <div>
              <p class="text-lg font-medium text-slate-900 dark:text-white">Go to Sales → Credit Notes</p>
              <p class="mt-1 text-slate-600 dark:text-slate-400">Or open the original invoice and click "Create Credit Note"</p>
            </div>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">2</span>
            <div>
              <p class="text-lg font-medium text-slate-900 dark:text-white">Select Customer</p>
              <p class="mt-1 text-slate-600 dark:text-slate-400">Choose the customer receiving the credit</p>
            </div>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">3</span>
            <div>
              <p class="text-lg font-medium text-slate-900 dark:text-white">Link to Invoice (Optional)</p>
              <p class="mt-1 text-slate-600 dark:text-slate-400">Reference the original invoice for audit trail</p>
            </div>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">4</span>
            <div>
              <p class="text-lg font-medium text-slate-900 dark:text-white">Add Line Items</p>
              <p class="mt-1 text-slate-600 dark:text-slate-400">Enter items being credited with quantities and amounts</p>
            </div>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">5</span>
            <div>
              <p class="text-lg font-medium text-slate-900 dark:text-white">Enter Reason</p>
              <p class="mt-1 text-slate-600 dark:text-slate-400">Document why the credit is being issued</p>
            </div>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">6</span>
            <div>
              <p class="text-lg font-medium text-slate-900 dark:text-white">Save & Send</p>
              <p class="mt-1 text-slate-600 dark:text-slate-400">Email to customer or download PDF</p>
            </div>
          </li>
        </ol>
      </section>

      <!-- VAT on Credit Notes -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">VAT on Credit Notes</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Credit notes affect your VAT calculations:
        </p>

        <div class="mt-8 rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
          <div class="flex items-center justify-between border-b border-slate-200 pb-4 dark:border-slate-700">
            <span class="text-slate-600 dark:text-slate-400">Original Invoice</span>
            <span class="font-mono text-slate-900 dark:text-white">AED 10,500 (incl. 500 VAT)</span>
          </div>
          <div class="flex items-center justify-between border-b border-slate-200 py-4 dark:border-slate-700">
            <span class="text-slate-600 dark:text-slate-400">Credit Note</span>
            <span class="font-mono text-red-600 dark:text-red-400">-AED 2,100 (incl. 100 VAT)</span>
          </div>
          <div class="flex items-center justify-between pt-4">
            <span class="font-semibold text-slate-900 dark:text-white">Net Amount Owed</span>
            <span class="font-mono font-semibold text-slate-900 dark:text-white">AED 8,400 (incl. 400 VAT)</span>
          </div>
        </div>

        <div class="mt-8 rounded-2xl border-l-4 border-blue-400 bg-blue-50 p-6 dark:bg-blue-900/20">
          <h4 class="text-lg font-semibold text-blue-800 dark:text-blue-300">VAT Return Impact</h4>
          <p class="mt-2 text-blue-700 dark:text-blue-400">
            Credit notes reduce your output VAT. They appear as adjustments in Box 3 of your 
            UAE VAT return.
          </p>
        </div>
      </section>

      <!-- Applying Credit Notes -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Applying Credit Notes</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          After creating a credit note, you can apply it to:
        </p>

        <div class="mt-8 space-y-4">
          <div class="rounded-2xl border border-emerald-200 bg-emerald-50 p-6 dark:border-emerald-800 dark:bg-emerald-900/20">
            <h3 class="text-xl font-semibold text-emerald-800 dark:text-emerald-300">Outstanding Invoices</h3>
            <p class="mt-2 text-emerald-700 dark:text-emerald-400">
              Apply the credit against unpaid invoices to reduce the balance owed.
            </p>
          </div>

          <div class="rounded-2xl border border-blue-200 bg-blue-50 p-6 dark:border-blue-800 dark:bg-blue-900/20">
            <h3 class="text-xl font-semibold text-blue-800 dark:text-blue-300">Future Invoices</h3>
            <p class="mt-2 text-blue-700 dark:text-blue-400">
              Keep as credit on account to apply to future purchases.
            </p>
          </div>

          <div class="rounded-2xl border border-purple-200 bg-purple-50 p-6 dark:border-purple-800 dark:bg-purple-900/20">
            <h3 class="text-xl font-semibold text-purple-800 dark:text-purple-300">Refund</h3>
            <p class="mt-2 text-purple-700 dark:text-purple-400">
              Issue a cash/bank refund to the customer.
            </p>
          </div>
        </div>
      </section>

      <!-- FTA Requirements -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">FTA Requirements</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          UAE tax law requires credit notes to include:
        </p>

        <ul class="mt-6 space-y-3">
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400">The words "Tax Credit Note" prominently displayed</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400">Unique sequential number</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400">Date of issue</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400">Your TRN and customer TRN (if B2B)</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400">Reference to original invoice number</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400">Reason for credit</span>
          </li>
        </ul>

        <div class="mt-8 rounded-2xl border-l-4 border-emerald-400 bg-emerald-50 p-6 dark:bg-emerald-900/20">
          <p class="text-lg text-emerald-800 dark:text-emerald-300">
            <strong>Verasol handles this:</strong> All FTA-required fields are automatically included 
            on credit notes generated by the system.
          </p>
        </div>
      </section>

      <!-- Next Steps -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Related Topics</h2>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <Link href="/docs/invoices" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Invoices</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Creating and managing invoices</p>
          </Link>
          <Link href="/docs/receive-payments" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Receive Payments</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Recording customer payments</p>
          </Link>
        </div>
      </section>

      <!-- Bottom spacing -->
      <div class="h-20"></div>
    </div>
  </DocsLayout>
</template>
