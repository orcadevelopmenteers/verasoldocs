<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <DocsLayout title="Payroll Overview">
    <div class="max-w-4xl">
      <!-- Page Header -->
      <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">
        Payroll Overview
      </h1>
      
      <p class="mt-6 text-xl leading-relaxed text-slate-600 dark:text-slate-400">
        Verasol's payroll module helps you manage employee salaries, track attendance, calculate 
        benefits, and process payments in compliance with UAE labor laws.
      </p>

      <!-- Key Features -->
      <section class="mt-16">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Key Features</h2>

        <ul class="mt-6 space-y-3">
          <li class="flex items-start gap-3">
            <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Employee Management:</strong> Complete employee records</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Salary Processing:</strong> Monthly payroll runs</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Attendance Tracking:</strong> Time and attendance</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Leave Management:</strong> Annual leave, sick leave, etc.</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">End of Service:</strong> Gratuity calculations</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">WPS Compliance:</strong> Generate WPS files for banks</span>
          </li>
        </ul>
      </section>

      <!-- Getting Started -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Getting Started</h2>

        <div class="mt-10">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Enable Payroll Module</h3>
          <ol class="mt-4 space-y-3">
            <li class="flex items-start gap-4">
              <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">1</span>
              <span class="pt-0.5 text-lg text-slate-600 dark:text-slate-400">Go to <strong class="text-slate-900 dark:text-white">Settings → Modules</strong></span>
            </li>
            <li class="flex items-start gap-4">
              <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">2</span>
              <span class="pt-0.5 text-lg text-slate-600 dark:text-slate-400">Toggle <strong class="text-slate-900 dark:text-white">Payroll</strong> to enabled</span>
            </li>
            <li class="flex items-start gap-4">
              <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">3</span>
              <span class="pt-0.5 text-lg text-slate-600 dark:text-slate-400">Configure basic settings</span>
            </li>
          </ol>
        </div>

        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Set Up Payroll Accounts</h3>
          <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Ensure these accounts exist in your Chart of Accounts:</p>
          <ul class="mt-4 space-y-3">
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400">Salaries & Wages Expense</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400">Salaries Payable</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400">End of Service Provision</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
              <span class="text-lg text-slate-600 dark:text-slate-400">Leave Provision</span>
            </li>
          </ul>
        </div>
      </section>

      <!-- Adding Employees -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Adding Employees</h2>

        <ol class="mt-8 space-y-4">
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">1</span>
            <span class="pt-1 text-lg text-slate-600 dark:text-slate-400">Go to <strong class="text-slate-900 dark:text-white">Payroll → Employees</strong></span>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">2</span>
            <span class="pt-1 text-lg text-slate-600 dark:text-slate-400">Click <strong class="text-slate-900 dark:text-white">"Add Employee"</strong></span>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">3</span>
            <span class="pt-1 text-lg text-slate-600 dark:text-slate-400">Fill in required information (personal, employment, salary, bank details)</span>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">4</span>
            <span class="pt-1 text-lg text-slate-600 dark:text-slate-400">Save employee record</span>
          </li>
        </ol>

        <div class="mt-10">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Employee Information</h3>
          
          <div class="mt-6 grid gap-6 md:grid-cols-2">
            <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
              <h4 class="text-lg font-semibold text-slate-900 dark:text-white">Personal Details</h4>
              <ul class="mt-4 space-y-2 text-slate-600 dark:text-slate-400">
                <li>Full name, nationality, date of birth</li>
                <li>Emirates ID number</li>
                <li>Passport number and expiry</li>
                <li>Visa status and expiry</li>
                <li>Contact information</li>
              </ul>
            </div>

            <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
              <h4 class="text-lg font-semibold text-slate-900 dark:text-white">Employment Details</h4>
              <ul class="mt-4 space-y-2 text-slate-600 dark:text-slate-400">
                <li>Employee ID</li>
                <li>Job title and department</li>
                <li>Employment type</li>
                <li>Start date</li>
                <li>Probation period</li>
              </ul>
            </div>

            <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
              <h4 class="text-lg font-semibold text-slate-900 dark:text-white">Salary Details</h4>
              <ul class="mt-4 space-y-2 text-slate-600 dark:text-slate-400">
                <li>Basic salary</li>
                <li>Housing allowance</li>
                <li>Transport allowance</li>
                <li>Other allowances</li>
                <li>Total package</li>
              </ul>
            </div>

            <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
              <h4 class="text-lg font-semibold text-slate-900 dark:text-white">Bank Details (WPS)</h4>
              <ul class="mt-4 space-y-2 text-slate-600 dark:text-slate-400">
                <li>Bank name</li>
                <li>IBAN</li>
                <li>Account holder name</li>
                <li>Routing code</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- Payroll Components -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Payroll Components</h2>

        <div class="mt-8 overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
          <table class="w-full">
            <thead class="bg-slate-50 dark:bg-slate-800">
              <tr>
                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Component</th>
                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Type</th>
                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Description</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
              <tr>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">Basic Salary</td>
                <td class="px-6 py-4"><span class="rounded-lg bg-emerald-100 px-3 py-1 text-sm font-medium text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">Earning</span></td>
                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Fixed monthly base pay</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">Housing Allowance</td>
                <td class="px-6 py-4"><span class="rounded-lg bg-emerald-100 px-3 py-1 text-sm font-medium text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">Earning</span></td>
                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Housing benefit</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">Overtime</td>
                <td class="px-6 py-4"><span class="rounded-lg bg-emerald-100 px-3 py-1 text-sm font-medium text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">Earning</span></td>
                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Extra hours worked</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">Unpaid Leave</td>
                <td class="px-6 py-4"><span class="rounded-lg bg-red-100 px-3 py-1 text-sm font-medium text-red-800 dark:bg-red-900 dark:text-red-300">Deduction</span></td>
                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Days without pay</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">Loan Repayment</td>
                <td class="px-6 py-4"><span class="rounded-lg bg-red-100 px-3 py-1 text-sm font-medium text-red-800 dark:bg-red-900 dark:text-red-300">Deduction</span></td>
                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Employee loan recovery</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <!-- WPS -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">WPS (Wage Protection System)</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          The UAE's Wage Protection System requires salaries to be paid through approved banks. 
          Verasol generates WPS-compliant files.
        </p>

        <div class="mt-10">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Generating WPS File</h3>
          <ol class="mt-4 space-y-3">
            <li class="flex items-start gap-4">
              <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">1</span>
              <span class="pt-0.5 text-lg text-slate-600 dark:text-slate-400">Complete and approve payroll</span>
            </li>
            <li class="flex items-start gap-4">
              <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">2</span>
              <span class="pt-0.5 text-lg text-slate-600 dark:text-slate-400">Go to <strong class="text-slate-900 dark:text-white">Payroll → WPS</strong></span>
            </li>
            <li class="flex items-start gap-4">
              <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">3</span>
              <span class="pt-0.5 text-lg text-slate-600 dark:text-slate-400">Select payroll month and click <strong class="text-slate-900 dark:text-white">"Generate WPS File"</strong></span>
            </li>
            <li class="flex items-start gap-4">
              <span class="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">4</span>
              <span class="pt-0.5 text-lg text-slate-600 dark:text-slate-400">Download the SIF file and upload to your bank's portal</span>
            </li>
          </ol>
        </div>

        <div class="mt-8 rounded-2xl border-l-4 border-blue-400 bg-blue-50 p-6 dark:bg-blue-900/20">
          <p class="text-lg text-blue-800 dark:text-blue-300">
            <strong>💡 Tip:</strong> Ensure all employee bank details are correct before generating the 
            WPS file. Incorrect details will cause payment failures.
          </p>
        </div>
      </section>

      <!-- End of Service -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">End of Service Benefits</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          UAE labor law mandates end of service gratuity:
        </p>

        <div class="mt-8 overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
          <table class="w-full">
            <thead class="bg-slate-50 dark:bg-slate-800">
              <tr>
                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Service Period</th>
                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Gratuity Rate</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
              <tr>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">First 5 years</td>
                <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">21 days basic salary per year</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">After 5 years</td>
                <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">30 days basic salary per year</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <!-- Next Steps -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Next Steps</h2>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <Link href="/docs/payroll-employees" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Managing Employees</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Add and edit employee records</p>
          </Link>
          <Link href="/docs/payroll-wps" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">WPS Guide</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Wage Protection System details</p>
          </Link>
        </div>
      </section>

      <!-- Bottom spacing -->
      <div class="h-20"></div>
    </div>
  </DocsLayout>
</template>
