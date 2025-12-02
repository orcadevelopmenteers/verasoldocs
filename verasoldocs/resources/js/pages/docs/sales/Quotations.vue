<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <DocsLayout title="Quotations">
    <div class="max-w-4xl">
      <!-- Page Header -->
      <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">
        Quotations
      </h1>
      
      <p class="mt-6 text-xl leading-relaxed text-slate-600 dark:text-slate-400">
        Create professional quotes for your customers. When accepted, convert them 
        to invoices with a single click.
      </p>

      <!-- Creating a Quotation -->
      <section class="mt-16">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Creating a Quotation</h2>
        
        <ol class="mt-6 space-y-4">
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">1</span>
            <div>
              <p class="text-lg font-medium text-slate-900 dark:text-white">Go to Sales → Quotations</p>
              <p class="mt-1 text-slate-600 dark:text-slate-400">Or click "New Quotation" from a customer profile</p>
            </div>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">2</span>
            <div>
              <p class="text-lg font-medium text-slate-900 dark:text-white">Select Customer</p>
              <p class="mt-1 text-slate-600 dark:text-slate-400">Choose from existing customers or add a new one</p>
            </div>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">3</span>
            <div>
              <p class="text-lg font-medium text-slate-900 dark:text-white">Add Line Items</p>
              <p class="mt-1 text-slate-600 dark:text-slate-400">Products, services, descriptions, quantities, and prices</p>
            </div>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">4</span>
            <div>
              <p class="text-lg font-medium text-slate-900 dark:text-white">Set Validity Period</p>
              <p class="mt-1 text-slate-600 dark:text-slate-400">How long the quote remains valid (e.g., 30 days)</p>
            </div>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">5</span>
            <div>
              <p class="text-lg font-medium text-slate-900 dark:text-white">Save & Send</p>
              <p class="mt-1 text-slate-600 dark:text-slate-400">Email directly to the customer or download as PDF</p>
            </div>
          </li>
        </ol>
      </section>

      <!-- Quotation Details -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Quotation Details</h2>

        <div class="mt-8 space-y-6">
          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Header Information</h3>
            <ul class="mt-4 space-y-2">
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                <span class="text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Quote Number:</strong> Auto-generated (QT-2024-0001)</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                <span class="text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Quote Date:</strong> When the quote is issued</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                <span class="text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Valid Until:</strong> Expiry date for the quote</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                <span class="text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Reference:</strong> Optional customer PO or reference</span>
              </li>
            </ul>
          </div>

          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Line Items</h3>
            <ul class="mt-4 space-y-2">
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                <span class="text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Description:</strong> What you're quoting for</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                <span class="text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Quantity:</strong> Number of units</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                <span class="text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Unit Price:</strong> Price per unit</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                <span class="text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">VAT:</strong> Tax rate (5% standard, 0% exempt)</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                <span class="text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Discount:</strong> Optional line or total discount</span>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!-- Quotation Status -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Quotation Status</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Track the lifecycle of each quotation:
        </p>

        <div class="mt-8 space-y-4">
          <div class="flex items-center gap-4 rounded-2xl border border-slate-200 p-5 dark:border-slate-700">
            <span class="rounded-lg bg-slate-100 px-4 py-2 text-sm font-semibold text-slate-700 dark:bg-slate-800 dark:text-slate-300">Draft</span>
            <span class="text-slate-600 dark:text-slate-400">Being prepared, not yet sent</span>
          </div>
          <div class="flex items-center gap-4 rounded-2xl border border-slate-200 p-5 dark:border-slate-700">
            <span class="rounded-lg bg-blue-100 px-4 py-2 text-sm font-semibold text-blue-700 dark:bg-blue-900 dark:text-blue-300">Sent</span>
            <span class="text-slate-600 dark:text-slate-400">Delivered to customer, awaiting response</span>
          </div>
          <div class="flex items-center gap-4 rounded-2xl border border-slate-200 p-5 dark:border-slate-700">
            <span class="rounded-lg bg-emerald-100 px-4 py-2 text-sm font-semibold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">Accepted</span>
            <span class="text-slate-600 dark:text-slate-400">Customer approved, ready to convert to invoice</span>
          </div>
          <div class="flex items-center gap-4 rounded-2xl border border-slate-200 p-5 dark:border-slate-700">
            <span class="rounded-lg bg-red-100 px-4 py-2 text-sm font-semibold text-red-700 dark:bg-red-900 dark:text-red-300">Declined</span>
            <span class="text-slate-600 dark:text-slate-400">Customer rejected the quote</span>
          </div>
          <div class="flex items-center gap-4 rounded-2xl border border-slate-200 p-5 dark:border-slate-700">
            <span class="rounded-lg bg-amber-100 px-4 py-2 text-sm font-semibold text-amber-700 dark:bg-amber-900 dark:text-amber-300">Expired</span>
            <span class="text-slate-600 dark:text-slate-400">Valid date passed without response</span>
          </div>
          <div class="flex items-center gap-4 rounded-2xl border border-slate-200 p-5 dark:border-slate-700">
            <span class="rounded-lg bg-purple-100 px-4 py-2 text-sm font-semibold text-purple-700 dark:bg-purple-900 dark:text-purple-300">Invoiced</span>
            <span class="text-slate-600 dark:text-slate-400">Converted to an invoice</span>
          </div>
        </div>
      </section>

      <!-- Converting to Invoice -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Converting to Invoice</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          When a customer accepts your quote:
        </p>

        <ol class="mt-6 space-y-3">
          <li class="flex items-start gap-4">
            <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">1</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Open the accepted quotation</span>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">2</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Click <strong class="text-slate-900 dark:text-white">"Convert to Invoice"</strong></span>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">3</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Review the invoice details (all data transfers automatically)</span>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">4</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Save and send the invoice</span>
          </li>
        </ol>

        <div class="mt-8 rounded-2xl border-l-4 border-emerald-400 bg-emerald-50 p-6 dark:bg-emerald-900/20">
          <p class="text-lg text-emerald-800 dark:text-emerald-300">
            <strong>Automatic Link:</strong> The invoice maintains a reference to the original quote, 
            making it easy to track the full sales cycle.
          </p>
        </div>
      </section>

      <!-- Tips -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Best Practices</h2>
        
        <div class="mt-8 space-y-4">
          <div class="rounded-2xl border-l-4 border-blue-400 bg-blue-50 p-6 dark:bg-blue-900/20">
            <h4 class="text-lg font-semibold text-blue-800 dark:text-blue-300">✓ Be Specific</h4>
            <p class="mt-2 text-blue-700 dark:text-blue-400">
              Include detailed descriptions so customers know exactly what they're getting.
            </p>
          </div>
          
          <div class="rounded-2xl border-l-4 border-blue-400 bg-blue-50 p-6 dark:bg-blue-900/20">
            <h4 class="text-lg font-semibold text-blue-800 dark:text-blue-300">✓ Set Reasonable Validity</h4>
            <p class="mt-2 text-blue-700 dark:text-blue-400">
              15-30 days is typical. Too long may lead to pricing issues; too short may pressure customers.
            </p>
          </div>
          
          <div class="rounded-2xl border-l-4 border-blue-400 bg-blue-50 p-6 dark:bg-blue-900/20">
            <h4 class="text-lg font-semibold text-blue-800 dark:text-blue-300">✓ Include Terms</h4>
            <p class="mt-2 text-blue-700 dark:text-blue-400">
              Add payment terms, delivery conditions, and any important notes in the footer.
            </p>
          </div>
        </div>
      </section>

      <!-- Next Steps -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Next Steps</h2>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <Link href="/docs/invoices" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Invoices</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Create and manage invoices</p>
          </Link>
          <Link href="/docs/receive-payments" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Receive Payments</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Record customer payments</p>
          </Link>
        </div>
      </section>

      <!-- Bottom spacing -->
      <div class="h-20"></div>
    </div>
  </DocsLayout>
</template>
