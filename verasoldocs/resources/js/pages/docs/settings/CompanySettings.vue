<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <DocsLayout title="Company Settings">
    <div class="max-w-4xl">
      <!-- Page Header -->
      <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">
        Company Settings
      </h1>
      
      <p class="mt-6 text-xl leading-relaxed text-slate-600 dark:text-slate-400">
        Configure your company profile, regional settings, and system preferences. Some settings 
        are locked after you start using the system to maintain data integrity.
      </p>

      <!-- Accessing Settings -->
      <section class="mt-16">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Accessing Settings</h2>

        <ol class="mt-6 space-y-3">
          <li class="flex items-start gap-4">
            <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">1</span>
            <span class="pt-0.5 text-lg text-slate-600 dark:text-slate-400">Click your company name in the sidebar (bottom-left)</span>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">2</span>
            <span class="pt-0.5 text-lg text-slate-600 dark:text-slate-400">Select <strong class="text-slate-900 dark:text-white">"Settings"</strong></span>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">3</span>
            <span class="pt-0.5 text-lg text-slate-600 dark:text-slate-400">Or navigate directly to <strong class="text-slate-900 dark:text-white">Settings</strong> from the sidebar</span>
          </li>
        </ol>
      </section>

      <!-- Company Profile -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Company Profile</h2>

        <div class="mt-10">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Basic Information</h3>
          <ul class="mt-4 space-y-3">
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Company Name:</strong> Legal name of your business</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Trade Name:</strong> Operating name (if different)</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Trade License Number:</strong> Your UAE trade license</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">TRN:</strong> Tax Registration Number (required for VAT)</span>
            </li>
          </ul>
        </div>

        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Contact Details</h3>
          <ul class="mt-4 space-y-3">
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Address:</strong> Business address</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Phone:</strong> Primary contact number</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Email:</strong> Company email</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Website:</strong> Company website (optional)</span>
            </li>
          </ul>
        </div>
      </section>

      <!-- Regional Settings -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Regional Settings</h2>

        <div class="mt-10">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Currency</h3>
          <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
            Set your primary operating currency. Supported currencies include:
          </p>
          <div class="mt-4 grid grid-cols-2 gap-3 sm:grid-cols-3">
            <div class="rounded-xl bg-slate-100 px-4 py-2 text-center text-slate-700 dark:bg-slate-800 dark:text-slate-300">AED - UAE Dirham</div>
            <div class="rounded-xl bg-slate-100 px-4 py-2 text-center text-slate-700 dark:bg-slate-800 dark:text-slate-300">USD - US Dollar</div>
            <div class="rounded-xl bg-slate-100 px-4 py-2 text-center text-slate-700 dark:bg-slate-800 dark:text-slate-300">EUR - Euro</div>
            <div class="rounded-xl bg-slate-100 px-4 py-2 text-center text-slate-700 dark:bg-slate-800 dark:text-slate-300">GBP - British Pound</div>
            <div class="rounded-xl bg-slate-100 px-4 py-2 text-center text-slate-700 dark:bg-slate-800 dark:text-slate-300">SAR - Saudi Riyal</div>
            <div class="rounded-xl bg-slate-100 px-4 py-2 text-center text-slate-700 dark:bg-slate-800 dark:text-slate-300">INR - Indian Rupee</div>
          </div>
        </div>

        <div class="mt-8 rounded-2xl border-l-4 border-amber-400 bg-amber-50 p-6 dark:bg-amber-900/20">
          <div class="flex items-start gap-4">
            <svg class="h-6 w-6 flex-shrink-0 text-amber-600 dark:text-amber-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
            </svg>
            <div>
              <h4 class="text-lg font-semibold text-amber-800 dark:text-amber-300">Currency is Locked</h4>
              <p class="mt-2 text-lg text-amber-700 dark:text-amber-400">
                Currency cannot be changed after journal entries have been created. This prevents 
                data inconsistencies and maintains accurate financial records.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Module Settings -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Module Settings</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Toggle features based on your needs:</p>

        <div class="mt-8 space-y-4">
          <div class="flex items-center justify-between rounded-2xl border border-slate-200 p-5 dark:border-slate-700">
            <span class="text-lg text-slate-700 dark:text-slate-300">Invoicing</span>
            <span class="rounded-lg bg-emerald-100 px-4 py-2 text-sm font-semibold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">Always On</span>
          </div>
          <div class="flex items-center justify-between rounded-2xl border border-slate-200 p-5 dark:border-slate-700">
            <span class="text-lg text-slate-700 dark:text-slate-300">Bills & Expenses</span>
            <span class="rounded-lg bg-emerald-100 px-4 py-2 text-sm font-semibold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">Always On</span>
          </div>
          <div class="flex items-center justify-between rounded-2xl border border-slate-200 p-5 dark:border-slate-700">
            <span class="text-lg text-slate-700 dark:text-slate-300">Payroll</span>
            <span class="rounded-lg bg-blue-100 px-4 py-2 text-sm font-semibold text-blue-800 dark:bg-blue-900 dark:text-blue-300">Optional</span>
          </div>
          <div class="flex items-center justify-between rounded-2xl border border-slate-200 p-5 dark:border-slate-700">
            <span class="text-lg text-slate-700 dark:text-slate-300">Inventory</span>
            <span class="rounded-lg bg-blue-100 px-4 py-2 text-sm font-semibold text-blue-800 dark:bg-blue-900 dark:text-blue-300">Optional</span>
          </div>
          <div class="flex items-center justify-between rounded-2xl border border-slate-200 p-5 dark:border-slate-700">
            <span class="text-lg text-slate-700 dark:text-slate-300">Fixed Assets</span>
            <span class="rounded-lg bg-blue-100 px-4 py-2 text-sm font-semibold text-blue-800 dark:bg-blue-900 dark:text-blue-300">Optional</span>
          </div>
          <div class="flex items-center justify-between rounded-2xl border border-slate-200 p-5 dark:border-slate-700">
            <span class="text-lg text-slate-700 dark:text-slate-300">Projects</span>
            <span class="rounded-lg bg-blue-100 px-4 py-2 text-sm font-semibold text-blue-800 dark:bg-blue-900 dark:text-blue-300">Optional</span>
          </div>
        </div>
      </section>

      <!-- User Roles -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">User Roles</h2>

        <div class="mt-8 overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
          <table class="w-full">
            <thead class="bg-slate-50 dark:bg-slate-800">
              <tr>
                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Role</th>
                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Permissions</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
              <tr>
                <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">Owner</td>
                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Full access, billing, delete company</td>
              </tr>
              <tr>
                <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">Admin</td>
                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">All features except billing and company deletion</td>
              </tr>
              <tr>
                <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">Accountant</td>
                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">All accounting features, no settings</td>
              </tr>
              <tr>
                <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">Staff</td>
                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Create invoices/bills, view reports</td>
              </tr>
              <tr>
                <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">Read Only</td>
                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">View all, no create/edit</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <!-- Best Practices -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Best Practices</h2>

        <div class="mt-8 space-y-4">
          <div class="rounded-2xl border-l-4 border-emerald-400 bg-emerald-50 p-6 dark:bg-emerald-900/20">
            <h4 class="text-lg font-semibold text-emerald-800 dark:text-emerald-300">✅ Complete Setup First</h4>
            <p class="mt-2 text-lg text-emerald-700 dark:text-emerald-400">
              Configure all settings before creating transactions. Some settings lock after you start.
            </p>
          </div>
          
          <div class="rounded-2xl border-l-4 border-emerald-400 bg-emerald-50 p-6 dark:bg-emerald-900/20">
            <h4 class="text-lg font-semibold text-emerald-800 dark:text-emerald-300">✅ Test Email Settings</h4>
            <p class="mt-2 text-lg text-emerald-700 dark:text-emerald-400">
              Send a test invoice to yourself before sending to customers.
            </p>
          </div>
          
          <div class="rounded-2xl border-l-4 border-emerald-400 bg-emerald-50 p-6 dark:bg-emerald-900/20">
            <h4 class="text-lg font-semibold text-emerald-800 dark:text-emerald-300">✅ Review User Permissions</h4>
            <p class="mt-2 text-lg text-emerald-700 dark:text-emerald-400">
              Give users only the access they need. Use Read Only for viewers.
            </p>
          </div>
        </div>
      </section>

      <!-- Next Steps -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Next Steps</h2>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <Link href="/docs/opening-balances" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Opening Balances</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Set up your starting balances</p>
          </Link>
          <Link href="/docs/users" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">User Management</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Add and manage team members</p>
          </Link>
        </div>
      </section>

      <!-- Bottom spacing -->
      <div class="h-20"></div>
    </div>
  </DocsLayout>
</template>
