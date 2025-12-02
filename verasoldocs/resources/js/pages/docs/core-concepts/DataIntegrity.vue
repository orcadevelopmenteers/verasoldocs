<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <DocsLayout title="Data Integrity Rules">
    <div class="max-w-4xl">
      <!-- Page Header -->
      <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">
        Data Integrity Rules
      </h1>
      
      <p class="mt-6 text-xl leading-relaxed text-slate-600 dark:text-slate-400">
        Verasol enforces strict rules to ensure your financial data remains accurate, consistent, 
        and audit-ready. These protections are built into the system by design.
      </p>

      <!-- Why Data Integrity Matters -->
      <section class="mt-16">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Why Data Integrity Matters</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Financial data must be trustworthy. Once you file a VAT return or submit financial 
          statements, those numbers need to stay consistent. Verasol protects you from:
        </p>

        <ul class="mt-6 space-y-3">
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400">Accidental changes to historical data</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400">Inconsistent records that don't balance</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400">Audit failures due to modified transactions</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400">VAT discrepancies between returns and records</span>
          </li>
        </ul>
      </section>

      <!-- Locked Settings -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Settings That Lock</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Certain settings become permanent once you start using the system:
        </p>

        <div class="mt-8 space-y-4">
          <div class="rounded-2xl border-l-4 border-red-400 bg-red-50 p-6 dark:bg-red-900/20">
            <div class="flex items-start gap-4">
              <svg class="h-6 w-6 flex-shrink-0 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
              </svg>
              <div>
                <h3 class="text-lg font-semibold text-red-800 dark:text-red-300">Currency</h3>
                <p class="mt-2 text-red-700 dark:text-red-400">
                  <strong>Locks when:</strong> First journal entry is created<br/>
                  <strong>Why:</strong> Changing currency after transactions exist would corrupt all monetary values
                </p>
              </div>
            </div>
          </div>

          <div class="rounded-2xl border-l-4 border-red-400 bg-red-50 p-6 dark:bg-red-900/20">
            <div class="flex items-start gap-4">
              <svg class="h-6 w-6 flex-shrink-0 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
              </svg>
              <div>
                <h3 class="text-lg font-semibold text-red-800 dark:text-red-300">Financial Year Start</h3>
                <p class="mt-2 text-red-700 dark:text-red-400">
                  <strong>Locks when:</strong> First journal entry is created<br/>
                  <strong>Why:</strong> Changing this would break period assignments and year-end processes
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-8 rounded-2xl border-l-4 border-blue-400 bg-blue-50 p-6 dark:bg-blue-900/20">
          <p class="text-lg text-blue-800 dark:text-blue-300">
            <strong>Tip:</strong> Before creating your first invoice or bill, double-check your currency 
            and financial year settings in Company Settings.
          </p>
        </div>
      </section>

      <!-- Closed Period Protection -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Closed Period Protection</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          When a period is closed, Verasol enforces these rules:
        </p>

        <div class="mt-8 overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
          <table class="w-full">
            <thead class="bg-slate-50 dark:bg-slate-800">
              <tr>
                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Action</th>
                <th class="px-6 py-4 text-center text-sm font-semibold text-slate-900 dark:text-white">Open Period</th>
                <th class="px-6 py-4 text-center text-sm font-semibold text-slate-900 dark:text-white">Closed Period</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
              <tr>
                <td class="px-6 py-4 text-slate-900 dark:text-white">Create transactions</td>
                <td class="px-6 py-4 text-center text-emerald-600 dark:text-emerald-400">✓ Allowed</td>
                <td class="px-6 py-4 text-center text-red-600 dark:text-red-400">✗ Blocked</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-slate-900 dark:text-white">Edit transactions</td>
                <td class="px-6 py-4 text-center text-emerald-600 dark:text-emerald-400">✓ Allowed</td>
                <td class="px-6 py-4 text-center text-red-600 dark:text-red-400">✗ Blocked</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-slate-900 dark:text-white">Delete transactions</td>
                <td class="px-6 py-4 text-center text-emerald-600 dark:text-emerald-400">✓ Allowed</td>
                <td class="px-6 py-4 text-center text-red-600 dark:text-red-400">✗ Blocked</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-slate-900 dark:text-white">View transactions</td>
                <td class="px-6 py-4 text-center text-emerald-600 dark:text-emerald-400">✓ Allowed</td>
                <td class="px-6 py-4 text-center text-emerald-600 dark:text-emerald-400">✓ Allowed</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-slate-900 dark:text-white">Run reports</td>
                <td class="px-6 py-4 text-center text-emerald-600 dark:text-emerald-400">✓ Allowed</td>
                <td class="px-6 py-4 text-center text-emerald-600 dark:text-emerald-400">✓ Allowed</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <!-- Transaction Integrity -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Transaction Integrity</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Every transaction in Verasol follows these rules:
        </p>

        <div class="mt-8 space-y-4">
          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Double-Entry Balance</h3>
            <p class="mt-2 text-lg text-slate-600 dark:text-slate-400">
              Every journal entry must have equal debits and credits. The system will not save 
              unbalanced entries.
            </p>
          </div>

          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Sequential Numbering</h3>
            <p class="mt-2 text-lg text-slate-600 dark:text-slate-400">
              Invoice and bill numbers are assigned sequentially and cannot be changed. 
              Gaps in numbering are tracked for audit purposes.
            </p>
          </div>

          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Audit Trail</h3>
            <p class="mt-2 text-lg text-slate-600 dark:text-slate-400">
              All changes are logged with timestamp, user, and before/after values. 
              Nothing is truly deleted - voided transactions are marked but preserved.
            </p>
          </div>

          <div class="rounded-2xl border border-slate-200 p-6 dark:border-slate-700">
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Linked Transaction Protection</h3>
            <p class="mt-2 text-lg text-slate-600 dark:text-slate-400">
              You cannot delete an invoice that has payments applied. Payments must be 
              removed first to maintain referential integrity.
            </p>
          </div>
        </div>
      </section>

      <!-- Account Protection -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Account Protection</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Chart of Accounts has special protections:
        </p>

        <ul class="mt-6 space-y-3">
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">System accounts</strong> cannot be deleted (e.g., Accounts Receivable, VAT Payable)</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Accounts with transactions</strong> cannot be deleted, only archived</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Account types</strong> cannot be changed after transactions are posted</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Account codes</strong> must be unique and follow the numbering structure</span>
          </li>
        </ul>
      </section>

      <!-- What If I Need to Fix Something? -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">What If I Need to Fix Something?</h2>
        
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Mistakes happen. Here's how to handle corrections properly:
        </p>

        <div class="mt-8 space-y-6">
          <div class="rounded-2xl border border-emerald-200 bg-emerald-50 p-6 dark:border-emerald-800 dark:bg-emerald-900/20">
            <h3 class="text-xl font-semibold text-emerald-800 dark:text-emerald-300">In Open Periods</h3>
            <p class="mt-2 text-lg text-emerald-700 dark:text-emerald-400">
              Edit or delete the transaction directly. Changes are logged but allowed.
            </p>
          </div>

          <div class="rounded-2xl border border-amber-200 bg-amber-50 p-6 dark:border-amber-800 dark:bg-amber-900/20">
            <h3 class="text-xl font-semibold text-amber-800 dark:text-amber-300">In Closed Periods</h3>
            <p class="mt-2 text-lg text-amber-700 dark:text-amber-400">
              Create an <strong>adjusting entry</strong> in the current period. This is the proper 
              accounting way to correct historical errors without modifying filed records.
            </p>
          </div>

          <div class="rounded-2xl border border-blue-200 bg-blue-50 p-6 dark:border-blue-800 dark:bg-blue-900/20">
            <h3 class="text-xl font-semibold text-blue-800 dark:text-blue-300">For Invoices & Bills</h3>
            <p class="mt-2 text-lg text-blue-700 dark:text-blue-400">
              Issue a <strong>credit note</strong> (for invoices) or <strong>debit note</strong> (for bills) 
              to reverse incorrect amounts. This maintains proper documentation.
            </p>
          </div>
        </div>

        <div class="mt-8 rounded-2xl border-l-4 border-blue-400 bg-blue-50 p-6 dark:bg-blue-900/20">
          <p class="text-lg text-blue-800 dark:text-blue-300">
            <strong>Ask the AI:</strong> Describe your correction need to the AI assistant. 
            It will suggest the proper adjusting entries to fix the issue correctly.
          </p>
        </div>
      </section>

      <!-- Next Steps -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Related Topics</h2>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <Link href="/docs/financial-periods" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Financial Periods</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Period management and closing</p>
          </Link>
          <Link href="/docs/audit-logs" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Audit Logs</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Track all changes in the system</p>
          </Link>
        </div>
      </section>

      <!-- Bottom spacing -->
      <div class="h-20"></div>
    </div>
  </DocsLayout>
</template>
