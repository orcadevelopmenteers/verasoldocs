<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <DocsLayout title="Reports Overview">
    <div class="max-w-4xl">
      <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">Reports Overview</h1>
      
      <p class="mt-6 text-xl leading-relaxed text-slate-600 dark:text-slate-400">
        Verasol provides comprehensive financial reports to help you understand your business 
        performance, comply with regulations, and make informed decisions.
      </p>

      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Report Categories</h2>

        <div class="mt-8 grid gap-6 md:grid-cols-2">
          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Financial Statements</h3>
            <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
              <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Balance Sheet</li>
              <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Profit & Loss</li>
              <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Cash Flow Statement</li>
              <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Changes in Equity</li>
            </ul>
          </div>
          
          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Accounting Reports</h3>
            <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
              <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Trial Balance</li>
              <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>General Ledger</li>
              <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Journal Register</li>
              <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Account Transactions</li>
            </ul>
          </div>
          
          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Receivables & Payables</h3>
            <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
              <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Aging Receivables</li>
              <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Aging Payables</li>
              <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Customer Statements</li>
              <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Vendor Statements</li>
            </ul>
          </div>
          
          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Tax Reports</h3>
            <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
              <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>VAT Summary</li>
              <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>VAT Return</li>
              <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Tax Audit Report</li>
              <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Input/Output VAT</li>
            </ul>
          </div>
        </div>
      </section>

      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Accessing Reports</h2>

        <ol class="mt-6 space-y-3 text-lg text-slate-600 dark:text-slate-400">
          <li class="flex items-start"><span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">1</span>Navigate to <strong class="text-slate-900 dark:text-white">Reports</strong> from the sidebar</li>
          <li class="flex items-start"><span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">2</span>Select a report category</li>
          <li class="flex items-start"><span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">3</span>Choose the specific report</li>
          <li class="flex items-start"><span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">4</span>Set date range and filters</li>
          <li class="flex items-start"><span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">5</span>Click <strong class="text-slate-900 dark:text-white">"Generate"</strong></li>
        </ol>
      </section>

      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Financial Statements</h2>

        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Balance Sheet</h3>
          <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
            Shows your company's financial position at a specific date - what you own (assets), 
            what you owe (liabilities), and the owners' stake (equity).
          </p>
          <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span><strong class="text-slate-900 dark:text-white">Assets:</strong>&nbsp;Cash, receivables, inventory, fixed assets</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span><strong class="text-slate-900 dark:text-white">Liabilities:</strong>&nbsp;Payables, loans, VAT payable</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span><strong class="text-slate-900 dark:text-white">Equity:</strong>&nbsp;Capital, retained earnings</li>
          </ul>
        </div>

        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Profit & Loss (Income Statement)</h3>
          <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
            Shows revenue, expenses, and profitability over a period of time.
          </p>
          <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span><strong class="text-slate-900 dark:text-white">Revenue:</strong>&nbsp;Sales, service income</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span><strong class="text-slate-900 dark:text-white">Cost of Sales:</strong>&nbsp;Direct costs</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span><strong class="text-slate-900 dark:text-white">Gross Profit:</strong>&nbsp;Revenue - Cost of Sales</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span><strong class="text-slate-900 dark:text-white">Operating Expenses:</strong>&nbsp;Rent, salaries, utilities</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span><strong class="text-slate-900 dark:text-white">Net Profit/Loss:</strong>&nbsp;Gross Profit - Operating Expenses</li>
          </ul>
        </div>

        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Cash Flow Statement</h3>
          <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
            Shows how cash moved in and out of the business.
          </p>
          <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span><strong class="text-slate-900 dark:text-white">Operating Activities:</strong>&nbsp;Day-to-day business cash flows</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span><strong class="text-slate-900 dark:text-white">Investing Activities:</strong>&nbsp;Asset purchases/sales</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span><strong class="text-slate-900 dark:text-white">Financing Activities:</strong>&nbsp;Loans, capital contributions</li>
          </ul>
        </div>
      </section>

      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Accounting Reports</h2>

        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Trial Balance</h3>
          <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
            Lists all account balances at a specific date. Total debits should equal total credits.
          </p>
          <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Shows account code, name, debit balance, credit balance</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Useful for verifying books are balanced</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Starting point for financial statements</li>
          </ul>
        </div>

        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">General Ledger</h3>
          <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
            Complete transaction history for each account with running balance.
          </p>
          <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Date, description, debit, credit, balance</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Filter by account or account type</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Drill down to source transactions</li>
          </ul>
        </div>

        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Journal Register</h3>
          <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
            List of all journal entries in chronological order.
          </p>
          <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Entry number, date, description</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Status (Draft, Posted, Voided)</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Total debits and credits</li>
          </ul>
        </div>
      </section>

      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Receivables Reports</h2>

        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Aging Receivables</h3>
          <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
            Shows outstanding customer balances grouped by age:
          </p>
          <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Current (not yet due)</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>1-30 days overdue</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>31-60 days overdue</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>61-90 days overdue</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Over 90 days overdue</li>
          </ul>
        </div>

        <div class="mt-8 overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
          <table class="w-full text-base">
            <thead class="bg-slate-50 dark:bg-slate-800">
              <tr>
                <th class="px-6 py-4 text-left font-medium text-slate-900 dark:text-white">Customer</th>
                <th class="px-6 py-4 text-right font-medium text-slate-900 dark:text-white">Current</th>
                <th class="px-6 py-4 text-right font-medium text-slate-900 dark:text-white">1-30</th>
                <th class="px-6 py-4 text-right font-medium text-slate-900 dark:text-white">31-60</th>
                <th class="px-6 py-4 text-right font-medium text-slate-900 dark:text-white">61-90</th>
                <th class="px-6 py-4 text-right font-medium text-slate-900 dark:text-white">90+</th>
                <th class="px-6 py-4 text-right font-medium text-slate-900 dark:text-white">Total</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
              <tr>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">ABC Trading</td>
                <td class="px-6 py-4 text-right text-slate-700 dark:text-slate-300">5,000</td>
                <td class="px-6 py-4 text-right text-slate-700 dark:text-slate-300">2,000</td>
                <td class="px-6 py-4 text-right text-slate-700 dark:text-slate-300">-</td>
                <td class="px-6 py-4 text-right text-amber-600 dark:text-amber-400">3,500</td>
                <td class="px-6 py-4 text-right text-red-600 dark:text-red-400">1,200</td>
                <td class="px-6 py-4 text-right font-medium text-slate-900 dark:text-white">11,700</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Customer Statement</h3>
          <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
            Detailed statement for a specific customer showing all transactions and current balance.
          </p>
          <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Opening balance</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>All invoices and payments</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Running balance</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Closing balance</li>
          </ul>
        </div>
      </section>

      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">VAT Reports</h2>

        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">VAT Summary</h3>
          <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Overview of VAT position for a period:</p>
          <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Output VAT (collected on sales)</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Input VAT (paid on purchases)</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Net VAT payable/refundable</li>
          </ul>
        </div>

        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">VAT Return</h3>
          <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
            Formatted for FTA filing with all required boxes:
          </p>
          <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Box 1-4: Output VAT details</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Box 5-8: Zero-rated and exempt supplies</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Box 9-12: Input VAT details</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Box 13: Net VAT due</li>
          </ul>
        </div>

        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Tax Audit Report</h3>
          <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
            Detailed transaction listing for FTA audit purposes:
          </p>
          <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>All tax invoices issued</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>All tax invoices received</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Transaction details with TRN verification</li>
          </ul>
        </div>
      </section>

      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Exporting Reports</h2>

        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Available Formats</h3>
          <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span><strong class="text-slate-900 dark:text-white">PDF:</strong>&nbsp;For printing and formal presentation</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span><strong class="text-slate-900 dark:text-white">Excel:</strong>&nbsp;For further analysis and manipulation</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span><strong class="text-slate-900 dark:text-white">CSV:</strong>&nbsp;For data import into other systems</li>
          </ul>
        </div>

        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Exporting</h3>
          <ol class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
            <li class="flex items-start"><span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">1</span>Generate the report</li>
            <li class="flex items-start"><span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">2</span>Click <strong class="text-slate-900 dark:text-white">"Export"</strong></li>
            <li class="flex items-start"><span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">3</span>Select format</li>
            <li class="flex items-start"><span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">4</span>Download or email</li>
          </ol>
        </div>
      </section>

      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Scheduled Reports</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Set up automatic report generation and delivery:
        </p>

        <ol class="mt-6 space-y-3 text-lg text-slate-600 dark:text-slate-400">
          <li class="flex items-start"><span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">1</span>Go to <strong class="text-slate-900 dark:text-white">Reports → Scheduled</strong></li>
          <li class="flex items-start"><span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">2</span>Click <strong class="text-slate-900 dark:text-white">"Add Schedule"</strong></li>
          <li class="flex items-start"><span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">3</span>Select report type</li>
          <li class="flex items-start"><span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">4</span>Set frequency (daily, weekly, monthly)</li>
          <li class="flex items-start"><span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">5</span>Enter email recipients</li>
          <li class="flex items-start"><span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">6</span>Save schedule</li>
        </ol>
      </section>

      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Report Customization</h2>

        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Date Ranges</h3>
          <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">All reports support flexible date selection:</p>
          <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>This Month / Last Month</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>This Quarter / Last Quarter</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>This Year / Last Year</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Custom date range</li>
          </ul>
        </div>

        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Filters</h3>
          <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Common filters include:</p>
          <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Account or account type</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Customer or vendor</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Department or project</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Transaction status</li>
          </ul>
        </div>

        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Comparison</h3>
          <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Compare periods:</p>
          <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>This month vs. last month</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>This year vs. last year</li>
            <li class="flex items-start"><span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>Actual vs. budget</li>
          </ul>
        </div>
      </section>

      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Report Tips</h2>

        <div class="mt-8 space-y-4">
          <div class="rounded-2xl border border-emerald-200 bg-emerald-50 p-6 dark:border-emerald-800 dark:bg-emerald-900/20">
            <h4 class="text-lg font-semibold text-emerald-800 dark:text-emerald-300">✅ Drill Down</h4>
            <p class="mt-2 text-base text-emerald-700 dark:text-emerald-400">
              Click on any amount to see the underlying transactions. Works on most reports.
            </p>
          </div>
          
          <div class="rounded-2xl border border-emerald-200 bg-emerald-50 p-6 dark:border-emerald-800 dark:bg-emerald-900/20">
            <h4 class="text-lg font-semibold text-emerald-800 dark:text-emerald-300">✅ Save Favorites</h4>
            <p class="mt-2 text-base text-emerald-700 dark:text-emerald-400">
              Star frequently used reports for quick access from the dashboard.
            </p>
          </div>
          
          <div class="rounded-2xl border border-emerald-200 bg-emerald-50 p-6 dark:border-emerald-800 dark:bg-emerald-900/20">
            <h4 class="text-lg font-semibold text-emerald-800 dark:text-emerald-300">✅ Use AI Assistant</h4>
            <p class="mt-2 text-base text-emerald-700 dark:text-emerald-400">
              Ask the AI for quick summaries: "What's my profit this month?" or "Show me overdue invoices".
            </p>
          </div>
        </div>
      </section>

      <section class="mt-16">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Next Steps</h2>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <Link href="/docs/trial-balance" class="block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 dark:text-white">Trial Balance</h4>
            <p class="mt-2 text-base text-slate-600 dark:text-slate-400">Deep dive into trial balance report</p>
          </Link>
          <Link href="/docs/profit-loss" class="block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 dark:text-white">Profit & Loss</h4>
            <p class="mt-2 text-base text-slate-600 dark:text-slate-400">Understanding your income statement</p>
          </Link>
        </div>
      </section>

      <div class="h-20"></div>
    </div>
  </DocsLayout>
</template>
