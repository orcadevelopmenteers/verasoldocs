<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <DocsLayout title="UAE VAT Overview">
    <div class="max-w-4xl">
      <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">UAE VAT Overview</h1>
      
      <p class="mt-6 text-xl leading-relaxed text-slate-600 dark:text-slate-400">
        Verasol is designed for UAE VAT compliance. This guide covers the basics of UAE VAT and 
        how Verasol helps you stay compliant.
      </p>

      <div class="mt-8 rounded-2xl border-l-4 border-amber-400 bg-amber-50 p-6 dark:bg-amber-900/20">
        <div class="flex items-start">
          <div class="flex-shrink-0">
            <svg class="h-6 w-6 text-amber-600 dark:text-amber-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
            </svg>
          </div>
          <div class="ml-3">
            <h3 class="text-sm font-medium text-amber-800 dark:text-amber-300">Disclaimer</h3>
            <p class="mt-2 text-sm text-amber-700 dark:text-amber-400">
              This guide is for informational purposes only. Tax laws change, and every business has 
              unique circumstances. Always consult with a qualified tax advisor for specific advice.
            </p>
          </div>
        </div>
      </div>

      <!-- UAE VAT Basics Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">UAE VAT Basics</h2>

        <h3 class="mt-10 text-xl font-semibold text-slate-900 dark:text-white">What is VAT?</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Value Added Tax (VAT) is a consumption tax applied to most goods and services. The UAE 
          introduced VAT at 5% on January 1, 2018, administered by the Federal Tax Authority (FTA).
        </p>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Who Must Register?</h3>
        <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span><strong class="text-slate-900 dark:text-white">Mandatory registration:</strong> Taxable supplies over AED 375,000 per year</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span><strong class="text-slate-900 dark:text-white">Voluntary registration:</strong> Taxable supplies over AED 187,500 per year</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span><strong class="text-slate-900 dark:text-white">Non-resident businesses:</strong> Must register if making taxable supplies in UAE</span>
          </li>
        </ul>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">VAT Rates</h3>
        <div class="mt-8 overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
          <table class="w-full">
            <thead class="bg-slate-50 dark:bg-slate-800">
              <tr>
                <th class="px-6 py-4 text-left text-sm font-medium text-slate-900 dark:text-white">Rate</th>
                <th class="px-6 py-4 text-left text-sm font-medium text-slate-900 dark:text-white">Applies To</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
              <tr>
                <td class="px-6 py-4 text-sm font-medium text-emerald-600 dark:text-emerald-400">5%</td>
                <td class="px-6 py-4 text-sm text-slate-700 dark:text-slate-300">Standard rate - most goods and services</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-sm font-medium text-blue-600 dark:text-blue-400">0%</td>
                <td class="px-6 py-4 text-sm text-slate-700 dark:text-slate-300">Zero-rated - exports, international transport, certain healthcare/education</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-sm font-medium text-slate-600 dark:text-slate-400">Exempt</td>
                <td class="px-6 py-4 text-sm text-slate-700 dark:text-slate-300">Exempt - local passenger transport, certain financial services, residential rent</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <!-- Key Concepts Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Key Concepts</h2>

        <h3 class="mt-10 text-xl font-semibold text-slate-900 dark:text-white">Output VAT</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          VAT you charge on your sales. This is collected from customers and paid to the FTA.
        </p>
        <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span>Recorded in "VAT Payable" account</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span>Added to invoice amounts</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span>Appears in Box 3 of VAT return</span>
          </li>
        </ul>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Input VAT</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          VAT you pay on business purchases. This can be recovered from the FTA.
        </p>
        <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span>Recorded in "VAT Receivable" account</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span>Must have valid tax invoice to claim</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span>Appears in Box 9 of VAT return</span>
          </li>
        </ul>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Net VAT</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Output VAT minus Input VAT = Net VAT payable (or refundable if negative)
        </p>
      </section>

      <!-- VAT in Verasol Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">VAT in Verasol</h2>

        <h3 class="mt-10 text-xl font-semibold text-slate-900 dark:text-white">Setting Up VAT</h3>
        <ol class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">1</span>
            <span>Go to <strong class="text-slate-900 dark:text-white">Settings → Company</strong></span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">2</span>
            <span>Enter your <strong class="text-slate-900 dark:text-white">TRN</strong> (Tax Registration Number)</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">3</span>
            <span>Enable <strong class="text-slate-900 dark:text-white">VAT Tracking</strong></span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">4</span>
            <span>Set your <strong class="text-slate-900 dark:text-white">VAT Period</strong> (monthly, quarterly)</span>
          </li>
        </ol>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">VAT on Transactions</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">When creating invoices or bills:</p>
        <ol class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">1</span>
            <span>
              Select the appropriate <strong class="text-slate-900 dark:text-white">VAT Treatment</strong>:
              <ul class="ml-6 mt-2 space-y-1">
                <li>• Standard (5%)</li>
                <li>• Zero-rated</li>
                <li>• Exempt</li>
                <li>• Out of scope</li>
              </ul>
            </span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">2</span>
            <span>VAT is automatically calculated</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">3</span>
            <span>Tax amount appears on the invoice</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">4</span>
            <span>Journal entries are created automatically</span>
          </li>
        </ol>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">VAT Accounts</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Verasol uses these accounts for VAT:</p>
        <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span><strong class="text-slate-900 dark:text-white">VAT Payable (2100):</strong> Output VAT collected on sales</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span><strong class="text-slate-900 dark:text-white">VAT Receivable (2110):</strong> Input VAT paid on purchases</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span><strong class="text-slate-900 dark:text-white">VAT Payable - RCM (2120):</strong> Reverse charge mechanism liability</span>
          </li>
        </ul>
      </section>

      <!-- Tax Invoices Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Tax Invoices</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">UAE tax invoices must include:</p>

        <div class="mt-8 space-y-6">
          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h4 class="text-lg font-semibold text-slate-900 dark:text-white">Required for All Tax Invoices</h4>
            <ul class="mt-4 space-y-2 text-slate-700 dark:text-slate-300">
              <li class="flex items-center"><span class="mr-2 text-emerald-500">☑</span> The words "Tax Invoice" clearly displayed</li>
              <li class="flex items-center"><span class="mr-2 text-emerald-500">☑</span> Supplier name, address, and TRN</li>
              <li class="flex items-center"><span class="mr-2 text-emerald-500">☑</span> Customer name, address, and TRN (if registered)</li>
              <li class="flex items-center"><span class="mr-2 text-emerald-500">☑</span> Sequential invoice number</li>
              <li class="flex items-center"><span class="mr-2 text-emerald-500">☑</span> Date of issue</li>
              <li class="flex items-center"><span class="mr-2 text-emerald-500">☑</span> Description of goods/services</li>
              <li class="flex items-center"><span class="mr-2 text-emerald-500">☑</span> Quantity and unit price</li>
              <li class="flex items-center"><span class="mr-2 text-emerald-500">☑</span> VAT rate and amount</li>
              <li class="flex items-center"><span class="mr-2 text-emerald-500">☑</span> Total amount payable</li>
            </ul>
          </div>
          
          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h4 class="text-lg font-semibold text-slate-900 dark:text-white">Simplified Tax Invoice (under AED 10,000)</h4>
            <ul class="mt-4 space-y-2 text-slate-700 dark:text-slate-300">
              <li class="flex items-center"><span class="mr-2 text-emerald-500">☑</span> Supplier name, address, and TRN</li>
              <li class="flex items-center"><span class="mr-2 text-emerald-500">☑</span> Date of issue</li>
              <li class="flex items-center"><span class="mr-2 text-emerald-500">☑</span> Description of goods/services</li>
              <li class="flex items-center"><span class="mr-2 text-emerald-500">☑</span> Total amount including VAT</li>
            </ul>
          </div>
        </div>

        <p class="mt-6 text-lg text-slate-600 dark:text-slate-400">Verasol automatically generates compliant tax invoices with all required fields.</p>
      </section>

      <!-- VAT Returns Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">VAT Returns</h2>

        <h3 class="mt-10 text-xl font-semibold text-slate-900 dark:text-white">Filing Periods</h3>
        <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span><strong class="text-slate-900 dark:text-white">Quarterly:</strong> Most businesses (3-month periods)</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span><strong class="text-slate-900 dark:text-white">Monthly:</strong> Large businesses (over AED 150 million annually)</span>
          </li>
        </ul>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Due Dates</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">VAT returns must be filed within 28 days after the end of the tax period.</p>

        <div class="mt-8 overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
          <table class="w-full">
            <thead class="bg-slate-50 dark:bg-slate-800">
              <tr>
                <th class="px-6 py-4 text-left text-sm font-medium text-slate-900 dark:text-white">Period</th>
                <th class="px-6 py-4 text-left text-sm font-medium text-slate-900 dark:text-white">Due Date</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
              <tr>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">Q1 (Jan-Mar)</td>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">April 28</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">Q2 (Apr-Jun)</td>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">July 28</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">Q3 (Jul-Sep)</td>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">October 28</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">Q4 (Oct-Dec)</td>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">January 28</td>
              </tr>
            </tbody>
          </table>
        </div>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Generating VAT Returns in Verasol</h3>
        <ol class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">1</span>
            <span>Go to <strong class="text-slate-900 dark:text-white">VAT → VAT Returns</strong></span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">2</span>
            <span>Select the tax period</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">3</span>
            <span>Click <strong class="text-slate-900 dark:text-white">"Generate Return"</strong></span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">4</span>
            <span>Review all boxes</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">5</span>
            <span>Export for FTA submission</span>
          </li>
        </ol>
      </section>

      <!-- Common VAT Scenarios Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Common VAT Scenarios</h2>

        <h3 class="mt-10 text-xl font-semibold text-slate-900 dark:text-white">Exports (Zero-Rated)</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Sales to customers outside the UAE are zero-rated:</p>
        <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span>Mark the invoice as "Zero-rated - Export"</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span>Keep proof of export (shipping documents)</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span>No VAT charged to customer</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span>Input VAT still recoverable</span>
          </li>
        </ul>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Reverse Charge</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">When importing services from outside UAE:</p>
        <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span>You must account for VAT as if you were the supplier</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span>Record both output and input VAT</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span>Net effect is usually zero (if fully recoverable)</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span>Use "Reverse Charge" option in Verasol</span>
          </li>
        </ul>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Exempt Supplies</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Some supplies are exempt from VAT:</p>
        <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span>Residential property rent</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span>Local passenger transport</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span>Certain financial services</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span>Life insurance</span>
          </li>
        </ul>
        <div class="mt-6 rounded-2xl border-l-4 border-blue-400 bg-blue-50 p-4 dark:bg-blue-900/20">
          <p class="text-blue-800 dark:text-blue-300">
            <strong>Note:</strong> Input VAT on purchases related to exempt supplies is NOT recoverable.
          </p>
        </div>
      </section>

      <!-- Record Keeping Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Record Keeping</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">UAE VAT law requires keeping records for 5 years, including:</p>
        <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span>All tax invoices issued and received</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span>Accounting records</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span>VAT returns filed</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span>Import/export documentation</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span>Contracts and agreements</span>
          </li>
        </ul>

        <p class="mt-6 text-lg text-slate-600 dark:text-slate-400">Verasol stores all records digitally with secure backup.</p>
      </section>

      <!-- Penalties Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Penalties</h2>

        <div class="mt-8 overflow-hidden rounded-2xl border border-red-200 dark:border-red-800">
          <table class="w-full">
            <thead class="bg-red-50 dark:bg-red-900/30">
              <tr>
                <th class="px-6 py-4 text-left text-sm font-medium text-red-800 dark:text-red-300">Violation</th>
                <th class="px-6 py-4 text-left text-sm font-medium text-red-800 dark:text-red-300">Penalty</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-red-200 dark:divide-red-800">
              <tr>
                <td class="px-6 py-4 text-red-700 dark:text-red-400">Late registration</td>
                <td class="px-6 py-4 text-red-700 dark:text-red-400">AED 20,000</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-red-700 dark:text-red-400">Late filing</td>
                <td class="px-6 py-4 text-red-700 dark:text-red-400">AED 1,000 (first), AED 2,000 (repeat)</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-red-700 dark:text-red-400">Late payment</td>
                <td class="px-6 py-4 text-red-700 dark:text-red-400">2% immediately + 4% after 7 days + 1%/month</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-red-700 dark:text-red-400">Incorrect return</td>
                <td class="px-6 py-4 text-red-700 dark:text-red-400">AED 3,000 (first), AED 5,000 (repeat)</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <!-- Next Steps Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Next Steps</h2>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <Link href="/docs/vat-returns" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-lg dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">VAT Returns</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Generate and file VAT returns</p>
          </Link>
          <Link href="/docs/vat-reports" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-lg dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">VAT Reports</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Audit reports and analysis</p>
          </Link>
        </div>
      </section>

      <div class="h-20"></div>
    </div>
  </DocsLayout>
</template>
