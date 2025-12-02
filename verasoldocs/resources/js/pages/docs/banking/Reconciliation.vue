<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <DocsLayout title="Bank Reconciliation">
    <div class="max-w-4xl">
      <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">Bank Reconciliation</h1>
      
      <p class="mt-6 text-xl leading-relaxed text-slate-600 dark:text-slate-400">
        Bank reconciliation is the process of matching your accounting records with your bank 
        statement to ensure all transactions are correctly recorded.
      </p>

      <!-- Why Reconcile Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Why Reconcile?</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Regular bank reconciliation helps you:</p>
        <ul class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Catch errors:</strong> Find data entry mistakes or duplicate entries</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Detect fraud:</strong> Identify unauthorized transactions</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Track outstanding items:</strong> Know what's not yet cleared</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Ensure accuracy:</strong> Verify your books match reality</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Stay audit-ready:</strong> Clean records for inspections</span>
          </li>
        </ul>
      </section>

      <!-- Accessing Bank Reconciliation Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Accessing Bank Reconciliation</h2>

        <div class="mt-6 space-y-4">
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">1</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Navigate to <strong class="text-slate-900 dark:text-white">Banking</strong> from the sidebar</span>
          </div>
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">2</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Select the bank account you want to reconcile</span>
          </div>
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">3</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Click <strong class="text-slate-900 dark:text-white">"Reconcile"</strong></span>
          </div>
        </div>
      </section>

      <!-- Importing Bank Statements Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Importing Bank Statements</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Verasol supports multiple bank statement formats:</p>

        <h3 class="mt-10 text-xl font-semibold text-slate-900 dark:text-white">Supported Formats</h3>
        <ul class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">CSV:</strong> Most common, works with all banks</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">OFX/QFX:</strong> Financial data interchange format</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Excel (XLSX):</strong> Spreadsheet format</span>
          </li>
        </ul>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Import Steps</h3>
        <div class="mt-6 space-y-4">
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">1</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Click <strong class="text-slate-900 dark:text-white">"Import Statement"</strong></span>
          </div>
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">2</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Select your bank from the dropdown (or add custom)</span>
          </div>
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">3</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Choose the statement file</span>
          </div>
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">4</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Map columns if needed (for CSV)</span>
          </div>
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">5</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Preview the transactions</span>
          </div>
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">6</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Click <strong class="text-slate-900 dark:text-white">"Import"</strong></span>
          </div>
        </div>

        <div class="mt-8 rounded-2xl border-l-4 border-blue-400 bg-blue-50 p-6 dark:bg-blue-900/20">
          <p class="text-lg text-blue-800 dark:text-blue-300">
            <strong>💡 Tip:</strong> Most UAE banks (Emirates NBD, ADCB, FAB, RAK Bank) have standard 
            formats. Select your bank to auto-configure column mapping.
          </p>
        </div>
      </section>

      <!-- The Reconciliation Process Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">The Reconciliation Process</h2>

        <h3 class="mt-10 text-xl font-semibold text-slate-900 dark:text-white">Step 1: Enter Statement Details</h3>
        <ul class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Statement Date:</strong> The ending date of your statement</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Statement Balance:</strong> The closing balance per your bank</span>
          </li>
        </ul>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Step 2: Match Transactions</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          You'll see two columns: your book transactions and bank statement transactions. 
          Match them by:
        </p>

        <div class="mt-6 space-y-4">
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">1</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1"><strong class="text-slate-900 dark:text-white">Auto-Match:</strong> Click to automatically match by amount and date</span>
          </div>
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">2</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1"><strong class="text-slate-900 dark:text-white">Manual Match:</strong> Select items from each side and click "Match"</span>
          </div>
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">3</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1"><strong class="text-slate-900 dark:text-white">Create Missing:</strong> Create transactions for items only on the statement</span>
          </div>
        </div>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Transaction States</h3>

        <div class="mt-6 space-y-3">
          <div class="flex items-center rounded-xl border border-slate-200 p-4 dark:border-slate-700">
            <span class="mr-4 h-4 w-4 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-700 dark:text-slate-300"><strong class="text-slate-900 dark:text-white">Matched:</strong> Transaction exists in both books and bank statement</span>
          </div>
          <div class="flex items-center rounded-xl border border-slate-200 p-4 dark:border-slate-700">
            <span class="mr-4 h-4 w-4 rounded-full bg-amber-500"></span>
            <span class="text-lg text-slate-700 dark:text-slate-300"><strong class="text-slate-900 dark:text-white">Suggested:</strong> AI found a potential match for review</span>
          </div>
          <div class="flex items-center rounded-xl border border-slate-200 p-4 dark:border-slate-700">
            <span class="mr-4 h-4 w-4 rounded-full bg-red-500"></span>
            <span class="text-lg text-slate-700 dark:text-slate-300"><strong class="text-slate-900 dark:text-white">Unmatched:</strong> Needs manual review or transaction creation</span>
          </div>
        </div>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Step 3: Handle Differences</h3>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Common reconciling items include:</p>

        <ul class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Outstanding checks:</strong> Checks you wrote that haven't cleared</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Deposits in transit:</strong> Deposits not yet in bank statement</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Bank charges:</strong> Fees not yet recorded in books</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Interest income:</strong> Bank interest not yet recorded</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Direct debits:</strong> Automatic payments not yet recorded</span>
          </li>
        </ul>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Step 4: Complete Reconciliation</h3>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">When the difference is zero:</p>
        <div class="mt-6 space-y-4">
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">1</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Review all matched transactions</span>
          </div>
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">2</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Click <strong class="text-slate-900 dark:text-white">"Complete Reconciliation"</strong></span>
          </div>
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">3</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Enter any notes for the record</span>
          </div>
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">4</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Confirm completion</span>
          </div>
        </div>
      </section>

      <!-- AI-Assisted Matching Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">AI-Assisted Matching</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Verasol's AI can help identify matches based on intelligent pattern recognition:
        </p>

        <ul class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Fuzzy matching:</strong> Finds matches even with slight amount differences</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Description analysis:</strong> Identifies vendors/customers from bank descriptions</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Pattern learning:</strong> Remembers how you've categorized similar transactions</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Multi-match detection:</strong> Identifies when multiple book entries match one bank entry</span>
          </li>
        </ul>

        <p class="mt-6 text-lg text-slate-600 dark:text-slate-400">To use AI matching:</p>
        <div class="mt-6 space-y-4">
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">1</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Click <strong class="text-slate-900 dark:text-white">"AI Assist"</strong> on the reconciliation screen</span>
          </div>
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">2</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Review suggested matches</span>
          </div>
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">3</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Accept or reject each suggestion</span>
          </div>
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">4</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Let AI create missing transactions with suggested categories</span>
          </div>
        </div>

        <div class="mt-8 rounded-2xl border-l-4 border-amber-400 bg-amber-50 p-6 dark:bg-amber-900/20">
          <p class="text-lg text-amber-700 dark:text-amber-400">
            <strong>⚠️ Review Required:</strong> Always review AI suggestions before accepting. 
            The AI learns from your corrections, so accurate feedback improves future suggestions.
          </p>
        </div>
      </section>

      <!-- Creating Missing Transactions Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Creating Missing Transactions</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">For bank items without matching book entries:</p>

        <div class="mt-6 space-y-4">
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">1</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Click <strong class="text-slate-900 dark:text-white">"Create Transaction"</strong> on the unmatched item</span>
          </div>
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">2</span>
            <div class="pt-1">
              <span class="text-lg text-slate-600 dark:text-slate-400">Select the transaction type:</span>
              <ul class="mt-3 space-y-2 pl-4">
                <li class="flex items-start">
                  <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
                  <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Expense:</strong> For payments (e.g., bank charges)</span>
                </li>
                <li class="flex items-start">
                  <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
                  <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Income:</strong> For receipts (e.g., interest)</span>
                </li>
                <li class="flex items-start">
                  <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
                  <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Transfer:</strong> For transfers between accounts</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">3</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Select the appropriate account</span>
          </div>
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">4</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Add description and any required details</span>
          </div>
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">5</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Save to create and match</span>
          </div>
        </div>
      </section>

      <!-- Bank Rules Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Bank Rules</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Create rules to automatically categorize recurring transactions:
        </p>

        <div class="mt-6 space-y-4">
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">1</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Go to <strong class="text-slate-900 dark:text-white">Banking → Rules</strong></span>
          </div>
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">2</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Click <strong class="text-slate-900 dark:text-white">"Add Rule"</strong></span>
          </div>
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">3</span>
            <div class="pt-1">
              <span class="text-lg text-slate-600 dark:text-slate-400">Set conditions:</span>
              <ul class="mt-3 space-y-2 pl-4">
                <li class="flex items-start">
                  <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
                  <span class="text-lg text-slate-600 dark:text-slate-400">Description contains "ETISALAT"</span>
                </li>
                <li class="flex items-start">
                  <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
                  <span class="text-lg text-slate-600 dark:text-slate-400">Amount range (optional)</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">4</span>
            <div class="pt-1">
              <span class="text-lg text-slate-600 dark:text-slate-400">Set actions:</span>
              <ul class="mt-3 space-y-2 pl-4">
                <li class="flex items-start">
                  <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
                  <span class="text-lg text-slate-600 dark:text-slate-400">Categorize as "Utilities Expense"</span>
                </li>
                <li class="flex items-start">
                  <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
                  <span class="text-lg text-slate-600 dark:text-slate-400">Apply 5% VAT</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">5</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Save the rule</span>
          </div>
        </div>

        <p class="mt-6 text-lg text-slate-600 dark:text-slate-400">Future imports will automatically apply matching rules.</p>
      </section>

      <!-- Reconciliation Reports Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Reconciliation Reports</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Access reconciliation history and reports:</p>

        <ul class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Reconciliation History:</strong> View past reconciliations</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Bank Rec Report:</strong> Formal reconciliation statement</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Outstanding Items:</strong> Uncleared checks and deposits</span>
          </li>
        </ul>
      </section>

      <!-- Troubleshooting Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Troubleshooting</h2>

        <h3 class="mt-10 text-xl font-semibold text-slate-900 dark:text-white">Balance Doesn't Match</h3>
        <ul class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Check for duplicate transactions</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Verify all bank items are matched or accounted for</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Look for transactions in the wrong period</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Confirm statement ending balance is correct</span>
          </li>
        </ul>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Missing Transactions</h3>
        <ul class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Check date range of import</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Verify file format is correct</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-2 w-2 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Re-import with correct date range</span>
          </li>
        </ul>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Duplicate Imports</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          Verasol detects potential duplicates based on date, amount, and description. 
          If duplicates slip through:
        </p>
        <div class="mt-6 space-y-4">
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">1</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Unmatch the duplicate</span>
          </div>
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">2</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Delete the duplicate bank item</span>
          </div>
          <div class="flex items-start">
            <span class="mr-4 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">3</span>
            <span class="text-lg text-slate-600 dark:text-slate-400 pt-1">Re-match the original</span>
          </div>
        </div>
      </section>

      <!-- Best Practices Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Best Practices</h2>

        <div class="mt-8 space-y-4">
          <div class="rounded-2xl border border-emerald-200 bg-emerald-50 p-6 dark:border-emerald-800 dark:bg-emerald-900/20">
            <h4 class="text-lg font-semibold text-emerald-800 dark:text-emerald-300">✅ Reconcile Regularly</h4>
            <p class="mt-2 text-lg text-emerald-700 dark:text-emerald-400">
              Monthly at minimum, weekly is better. Frequent reconciliation catches issues early.
            </p>
          </div>
          
          <div class="rounded-2xl border border-emerald-200 bg-emerald-50 p-6 dark:border-emerald-800 dark:bg-emerald-900/20">
            <h4 class="text-lg font-semibold text-emerald-800 dark:text-emerald-300">✅ Set Up Bank Rules</h4>
            <p class="mt-2 text-lg text-emerald-700 dark:text-emerald-400">
              Create rules for recurring transactions like utilities, subscriptions, and regular payments.
            </p>
          </div>
          
          <div class="rounded-2xl border border-emerald-200 bg-emerald-50 p-6 dark:border-emerald-800 dark:bg-emerald-900/20">
            <h4 class="text-lg font-semibold text-emerald-800 dark:text-emerald-300">✅ Review AI Matches</h4>
            <p class="mt-2 text-lg text-emerald-700 dark:text-emerald-400">
              AI suggestions are helpful but not infallible. Always verify before accepting.
            </p>
          </div>
          
          <div class="rounded-2xl border border-emerald-200 bg-emerald-50 p-6 dark:border-emerald-800 dark:bg-emerald-900/20">
            <h4 class="text-lg font-semibold text-emerald-800 dark:text-emerald-300">✅ Keep Notes</h4>
            <p class="mt-2 text-lg text-emerald-700 dark:text-emerald-400">
              Add notes to reconciliations explaining unusual items for future reference.
            </p>
          </div>
        </div>
      </section>

      <!-- Next Steps Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Next Steps</h2>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <Link href="/docs/bank-accounts" class="block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-lg dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 dark:text-white">Bank Accounts</h4>
            <p class="mt-2 text-lg text-slate-600 dark:text-slate-400">Managing multiple bank accounts</p>
          </Link>
          <Link href="/docs/bank-rules" class="block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-lg dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 dark:text-white">Bank Rules</h4>
            <p class="mt-2 text-lg text-slate-600 dark:text-slate-400">Automate transaction categorization</p>
          </Link>
        </div>
      </section>

      <div class="h-20"></div>
    </div>
  </DocsLayout>
</template>
