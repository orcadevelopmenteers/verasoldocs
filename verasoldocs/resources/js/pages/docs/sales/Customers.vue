<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <DocsLayout title="Customers">
    <div class="max-w-4xl">
      <!-- Page Header -->
      <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">
        Customers
      </h1>
      
      <p class="mt-6 text-xl leading-relaxed text-slate-600 dark:text-slate-400">
        Manage your customer database, track their transactions, and maintain accurate 
        contact information for invoicing and communication.
      </p>

      <!-- Adding a Customer -->
      <section class="mt-16">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Adding a Customer</h2>
        
        <ol class="mt-6 space-y-4">
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">1</span>
            <div>
              <p class="text-lg font-medium text-slate-900 dark:text-white">Navigate to Customers</p>
              <p class="mt-1 text-slate-600 dark:text-slate-400">Click <strong>Sales → Customers</strong> in the sidebar</p>
            </div>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">2</span>
            <div>
              <p class="text-lg font-medium text-slate-900 dark:text-white">Click "New Customer"</p>
              <p class="mt-1 text-slate-600 dark:text-slate-400">Opens the customer creation form</p>
            </div>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">3</span>
            <div>
              <p class="text-lg font-medium text-slate-900 dark:text-white">Fill in customer details</p>
              <p class="mt-1 text-slate-600 dark:text-slate-400">Enter name, contact info, and billing details</p>
            </div>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">4</span>
            <div>
              <p class="text-lg font-medium text-slate-900 dark:text-white">Save</p>
              <p class="mt-1 text-slate-600 dark:text-slate-400">Customer is now available for invoicing</p>
            </div>
          </li>
        </ol>
      </section>

      <!-- Customer Information -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Customer Information</h2>

        <div class="mt-8 space-y-6">
          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Basic Details</h3>
            <ul class="mt-4 space-y-2">
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                <span class="text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Customer Name:</strong> Company or individual name</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                <span class="text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Display Name:</strong> How they appear on invoices</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                <span class="text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Customer Type:</strong> Business or Individual</span>
              </li>
            </ul>
          </div>

          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Contact Information</h3>
            <ul class="mt-4 space-y-2">
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                <span class="text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Email:</strong> For sending invoices and statements</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                <span class="text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Phone:</strong> Primary contact number</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                <span class="text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Address:</strong> Billing and shipping addresses</span>
              </li>
            </ul>
          </div>

          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Tax & Billing</h3>
            <ul class="mt-4 space-y-2">
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                <span class="text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">TRN:</strong> Customer's Tax Registration Number (for B2B VAT)</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                <span class="text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Payment Terms:</strong> Default due date (Net 30, etc.)</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                <span class="text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Credit Limit:</strong> Optional maximum outstanding balance</span>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!-- Customer TRN -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Customer TRN for VAT</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          For UAE VAT compliance, you should record the TRN for business customers:
        </p>

        <div class="mt-8 rounded-2xl border-l-4 border-blue-400 bg-blue-50 p-6 dark:bg-blue-900/20">
          <h4 class="text-lg font-semibold text-blue-800 dark:text-blue-300">When TRN is Required</h4>
          <ul class="mt-4 space-y-2 text-blue-700 dark:text-blue-400">
            <li>• B2B sales over AED 10,000 require customer TRN on invoice</li>
            <li>• Exported services may need TRN for zero-rating</li>
            <li>• FTA audit file includes customer TRN data</li>
          </ul>
        </div>
      </section>

      <!-- Customer Dashboard -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Customer Dashboard</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Click on any customer to see their complete profile:
        </p>

        <div class="mt-8 grid gap-4 sm:grid-cols-2">
          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <div class="flex items-center gap-3">
              <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-100 dark:bg-emerald-900/30">
                <svg class="h-5 w-5 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <div>
                <p class="font-semibold text-slate-900 dark:text-white">Outstanding Balance</p>
                <p class="text-sm text-slate-600 dark:text-slate-400">Total unpaid amount</p>
              </div>
            </div>
          </div>

          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <div class="flex items-center gap-3">
              <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-100 dark:bg-blue-900/30">
                <svg class="h-5 w-5 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                </svg>
              </div>
              <div>
                <p class="font-semibold text-slate-900 dark:text-white">Invoice History</p>
                <p class="text-sm text-slate-600 dark:text-slate-400">All invoices for this customer</p>
              </div>
            </div>
          </div>

          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <div class="flex items-center gap-3">
              <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-purple-100 dark:bg-purple-900/30">
                <svg class="h-5 w-5 text-purple-600 dark:text-purple-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                </svg>
              </div>
              <div>
                <p class="font-semibold text-slate-900 dark:text-white">Payment History</p>
                <p class="text-sm text-slate-600 dark:text-slate-400">All payments received</p>
              </div>
            </div>
          </div>

          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <div class="flex items-center gap-3">
              <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-amber-100 dark:bg-amber-900/30">
                <svg class="h-5 w-5 text-amber-600 dark:text-amber-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                </svg>
              </div>
              <div>
                <p class="font-semibold text-slate-900 dark:text-white">Aging Report</p>
                <p class="text-sm text-slate-600 dark:text-slate-400">Overdue analysis</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Quick Actions -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Quick Actions</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          From the customer profile, you can:
        </p>

        <ul class="mt-6 space-y-3">
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Create Invoice</strong> - New invoice pre-filled with customer details</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Create Quotation</strong> - Send a quote before invoicing</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Receive Payment</strong> - Record payment for outstanding invoices</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Send Statement</strong> - Email account statement to customer</span>
          </li>
        </ul>
      </section>

      <!-- Importing Customers -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Importing Customers</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Migrating from another system? Import your customer list:
        </p>

        <ol class="mt-6 space-y-3">
          <li class="flex items-start gap-4">
            <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">1</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Go to <strong class="text-slate-900 dark:text-white">Sales → Customers → Import</strong></span>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">2</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Download the CSV template</span>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">3</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Fill in your customer data</span>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">4</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Upload and map columns</span>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">5</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Review and confirm import</span>
          </li>
        </ol>
      </section>

      <!-- Next Steps -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Next Steps</h2>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <Link href="/docs/quotations" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Quotations</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Send quotes to customers</p>
          </Link>
          <Link href="/docs/invoices" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Invoices</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Create and send invoices</p>
          </Link>
        </div>
      </section>

      <!-- Bottom spacing -->
      <div class="h-20"></div>
    </div>
  </DocsLayout>
</template>
