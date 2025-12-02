<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <DocsLayout title="Chart of Accounts">
    <div class="max-w-4xl">
      <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">Chart of Accounts</h1>
      
      <p class="mt-6 text-xl leading-relaxed text-slate-600 dark:text-slate-400">
        The Chart of Accounts is the foundation of your accounting system. It's a complete list of all 
        accounts used to record transactions in your business.
      </p>

      <!-- Understanding Account Types -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Understanding Account Types</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Verasol organizes accounts into five main categories:</p>

        <div class="mt-8 overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
          <table class="w-full">
            <thead class="bg-slate-50 dark:bg-slate-800">
              <tr>
                <th class="px-6 py-4 text-left text-sm font-medium text-slate-900 dark:text-white">Type</th>
                <th class="px-6 py-4 text-left text-sm font-medium text-slate-900 dark:text-white">Normal Balance</th>
                <th class="px-6 py-4 text-left text-sm font-medium text-slate-900 dark:text-white">Examples</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
              <tr>
                <td class="px-6 py-4 text-sm font-medium text-slate-900 dark:text-white">Assets</td>
                <td class="px-6 py-4 text-sm text-slate-700 dark:text-slate-300">Debit</td>
                <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">Cash, Bank, Accounts Receivable, Inventory</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-sm font-medium text-slate-900 dark:text-white">Liabilities</td>
                <td class="px-6 py-4 text-sm text-slate-700 dark:text-slate-300">Credit</td>
                <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">Accounts Payable, Loans, VAT Payable</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-sm font-medium text-slate-900 dark:text-white">Equity</td>
                <td class="px-6 py-4 text-sm text-slate-700 dark:text-slate-300">Credit</td>
                <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">Capital, Retained Earnings, Drawings</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-sm font-medium text-slate-900 dark:text-white">Revenue</td>
                <td class="px-6 py-4 text-sm text-slate-700 dark:text-slate-300">Credit</td>
                <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">Sales Revenue, Service Income, Interest Income</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-sm font-medium text-slate-900 dark:text-white">Expenses</td>
                <td class="px-6 py-4 text-sm text-slate-700 dark:text-slate-300">Debit</td>
                <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">Rent, Salaries, Utilities, Marketing</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <!-- Accessing Chart of Accounts -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Accessing Chart of Accounts</h2>

        <ol class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">1</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Navigate to <strong class="text-slate-900 dark:text-white">Accounting</strong> from the sidebar</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">2</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Click on <strong class="text-slate-900 dark:text-white">Chart of Accounts</strong></span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">3</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">View all accounts organized by type</span>
          </li>
        </ol>
      </section>

      <!-- Default Accounts -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Default Accounts</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Verasol comes with a standard chart of accounts suitable for UAE businesses. These include:
        </p>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Asset Accounts</h3>
        <ul class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">1000 - Cash</strong> - Petty cash and cash on hand</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">1010 - Bank Account</strong> - Primary bank account</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">1200 - Accounts Receivable</strong> - Money owed by customers</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">1300 - Inventory</strong> - Stock for sale</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">1400 - Prepaid Expenses</strong> - Expenses paid in advance</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">1500 - Fixed Assets</strong> - Equipment, vehicles, furniture</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">1510 - Accumulated Depreciation</strong> - Contra asset account</span>
          </li>
        </ul>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Liability Accounts</h3>
        <ul class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">2000 - Accounts Payable</strong> - Money owed to suppliers</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">2100 - VAT Payable</strong> - Output VAT collected</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">2110 - VAT Receivable</strong> - Input VAT paid</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">2200 - Accrued Expenses</strong> - Expenses incurred but not yet paid</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">2300 - Loans Payable</strong> - Bank loans and financing</span>
          </li>
        </ul>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Equity Accounts</h3>
        <ul class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">3000 - Capital</strong> - Owner's investment</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">3100 - Retained Earnings</strong> - Accumulated profits</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">3200 - Drawings</strong> - Owner withdrawals</span>
          </li>
        </ul>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Revenue Accounts</h3>
        <ul class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">4000 - Sales Revenue</strong> - Income from sales</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">4100 - Service Revenue</strong> - Income from services</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">4200 - Other Income</strong> - Miscellaneous income</span>
          </li>
        </ul>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Expense Accounts</h3>
        <ul class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">5000 - Cost of Goods Sold</strong> - Direct costs of products sold</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">6000 - Salaries & Wages</strong> - Employee compensation</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">6100 - Rent Expense</strong> - Office/shop rent</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">6200 - Utilities</strong> - Electricity, water, internet</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">6300 - Office Supplies</strong> - Stationery, consumables</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">6400 - Marketing</strong> - Advertising, promotions</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">6500 - Professional Fees</strong> - Legal, accounting services</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">6600 - Bank Charges</strong> - Bank fees</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">6700 - Depreciation</strong> - Asset depreciation</span>
          </li>
        </ul>
      </section>

      <!-- Creating a New Account -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Creating a New Account</h2>

        <ol class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">1</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Go to <strong class="text-slate-900 dark:text-white">Chart of Accounts</strong></span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">2</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Click <strong class="text-slate-900 dark:text-white">"Add Account"</strong></span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">3</span>
            <div class="text-lg text-slate-600 dark:text-slate-400">
              <span>Fill in the details:</span>
              <ul class="mt-3 space-y-2">
                <li class="flex items-start">
                  <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
                  <span><strong class="text-slate-900 dark:text-white">Account Code:</strong> A unique number (e.g., 6800)</span>
                </li>
                <li class="flex items-start">
                  <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
                  <span><strong class="text-slate-900 dark:text-white">Account Name:</strong> Descriptive name</span>
                </li>
                <li class="flex items-start">
                  <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
                  <span><strong class="text-slate-900 dark:text-white">Account Type:</strong> Select from dropdown</span>
                </li>
                <li class="flex items-start">
                  <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
                  <span><strong class="text-slate-900 dark:text-white">Parent Account:</strong> Optional, for sub-accounts</span>
                </li>
                <li class="flex items-start">
                  <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
                  <span><strong class="text-slate-900 dark:text-white">Description:</strong> What this account tracks</span>
                </li>
              </ul>
            </div>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">4</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Click <strong class="text-slate-900 dark:text-white">"Save"</strong></span>
          </li>
        </ol>

        <div class="mt-8 rounded-2xl border-l-4 border-blue-400 bg-blue-50 p-6 dark:bg-blue-900/20">
          <p class="text-lg text-blue-800 dark:text-blue-300">
            <strong>💡 Tip:</strong> Use a consistent numbering scheme. For example, all expense accounts 
            start with 6XXX, so a new expense like "Travel" could be 6800.
          </p>
        </div>
      </section>

      <!-- Editing Accounts -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Editing Accounts</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">To edit an existing account:</p>

        <ol class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">1</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Find the account in the Chart of Accounts</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">2</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Click the <strong class="text-slate-900 dark:text-white">Edit</strong> (pencil) icon</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">3</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Modify the name, description, or other editable fields</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">4</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Click <strong class="text-slate-900 dark:text-white">"Save Changes"</strong></span>
          </li>
        </ol>

        <div class="mt-8 rounded-2xl border-l-4 border-amber-400 bg-amber-50 p-6 dark:bg-amber-900/20">
          <p class="text-lg text-amber-700 dark:text-amber-400">
            <strong>⚠️ Important:</strong> You cannot change the account type or code once transactions 
            have been posted to an account. This maintains the integrity of your historical records.
          </p>
        </div>
      </section>

      <!-- Deleting Accounts -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Deleting Accounts</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Accounts can only be deleted if:</p>
        <ul class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">No transactions have been posted to them</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">They are not system-required accounts</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">They have no child (sub) accounts</span>
          </li>
        </ul>

        <p class="mt-6 text-lg text-slate-600 dark:text-slate-400">To delete:</p>
        <ol class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">1</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Find the account</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">2</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Click the <strong class="text-slate-900 dark:text-white">Delete</strong> (trash) icon</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">3</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Confirm deletion</span>
          </li>
        </ol>
      </section>

      <!-- Sub-Accounts (Hierarchies) -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Sub-Accounts (Hierarchies)</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">You can create sub-accounts for more detailed tracking:</p>

        <div class="mt-8 overflow-hidden rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
          <pre class="text-sm text-slate-700 dark:text-slate-300">6000 Salaries & Wages (Parent)
  ├── 6010 Management Salaries
  ├── 6020 Staff Salaries
  └── 6030 Commissions</pre>
        </div>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">When creating a sub-account, select the parent account in the "Parent Account" field.</p>
      </section>

      <!-- Account Balances -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Account Balances</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">View current balances:</p>
        <ol class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">1</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">The Chart of Accounts shows the current balance for each account</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">2</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Click on any account to see its transaction history</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">3</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Use filters to view balances as of a specific date</span>
          </li>
        </ol>
      </section>

      <!-- Best Practices -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Best Practices</h2>

        <div class="mt-8 space-y-4">
          <div class="rounded-2xl border border-emerald-200 bg-emerald-50 p-6 dark:border-emerald-800 dark:bg-emerald-900/20">
            <h4 class="text-lg font-semibold text-emerald-800 dark:text-emerald-300">✅ Keep It Simple</h4>
            <p class="mt-2 text-slate-700 dark:text-emerald-400">
              Start with the default accounts. Only add new accounts when you have a clear need.
            </p>
          </div>
          
          <div class="rounded-2xl border border-emerald-200 bg-emerald-50 p-6 dark:border-emerald-800 dark:bg-emerald-900/20">
            <h4 class="text-lg font-semibold text-emerald-800 dark:text-emerald-300">✅ Consistent Naming</h4>
            <p class="mt-2 text-slate-700 dark:text-emerald-400">
              Use clear, descriptive names. "Marketing Expense" is better than "Misc Expense #3".
            </p>
          </div>
          
          <div class="rounded-2xl border border-emerald-200 bg-emerald-50 p-6 dark:border-emerald-800 dark:bg-emerald-900/20">
            <h4 class="text-lg font-semibold text-emerald-800 dark:text-emerald-300">✅ Plan for Reporting</h4>
            <p class="mt-2 text-slate-700 dark:text-emerald-400">
              Think about how you want to see data in reports. Create accounts that support meaningful analysis.
            </p>
          </div>
          
          <div class="rounded-2xl border border-red-200 bg-red-50 p-6 dark:border-red-800 dark:bg-red-900/20">
            <h4 class="text-lg font-semibold text-red-800 dark:text-red-300">❌ Avoid Duplicates</h4>
            <p class="mt-2 text-slate-700 dark:text-red-400">
              Don't create multiple accounts for the same thing. Check existing accounts first.
            </p>
          </div>
        </div>
      </section>

      <!-- Next Steps -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Next Steps</h2>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <Link href="/docs/journal-entries" class="block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-lg dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 dark:text-white">Journal Entries</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Learn how to create and manage journal entries</p>
          </Link>
          <Link href="/docs/opening-balances" class="block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-lg dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 dark:text-white">Opening Balances</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Set up starting balances for your accounts</p>
          </Link>
        </div>
      </section>

      <div class="h-20"></div>
    </div>
  </DocsLayout>
</template>
