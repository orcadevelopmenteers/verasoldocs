<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    Opening Balances
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    Set up opening balances when migrating to Verasol from another system. 
                    This ensures your financial records are complete and accurate from day one.
                </p>
            </div>

            <!-- When to Enter Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    When to Enter Opening Balances
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    You need to enter opening balances when:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>New to Verasol:</strong> Migrating from another accounting system
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Starting Fresh:</strong> Beginning accounting for an existing business
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>New Financial Year:</strong> If not closing the previous year in Verasol
                        </span>
                    </li>
                </ul>
            </div>

            <!-- What to Enter Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    What Balances to Enter
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Enter opening balances for all Balance Sheet accounts:
                </p>

                <div class="space-y-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-4">
                            Assets
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-4">
                                <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-slate-600 dark:text-slate-400">
                                    Bank account balances
                                </span>
                            </li>
                            <li class="flex items-start gap-4">
                                <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-slate-600 dark:text-slate-400">
                                    Accounts receivable (customer balances)
                                </span>
                            </li>
                            <li class="flex items-start gap-4">
                                <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-slate-600 dark:text-slate-400">
                                    Inventory value
                                </span>
                            </li>
                            <li class="flex items-start gap-4">
                                <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-slate-600 dark:text-slate-400">
                                    Fixed assets and accumulated depreciation
                                </span>
                            </li>
                        </ul>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-4">
                            Liabilities
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-4">
                                <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-slate-600 dark:text-slate-400">
                                    Accounts payable (vendor balances)
                                </span>
                            </li>
                            <li class="flex items-start gap-4">
                                <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-slate-600 dark:text-slate-400">
                                    VAT payable/receivable
                                </span>
                            </li>
                            <li class="flex items-start gap-4">
                                <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-slate-600 dark:text-slate-400">
                                    Loans and credit facilities
                                </span>
                            </li>
                            <li class="flex items-start gap-4">
                                <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-slate-600 dark:text-slate-400">
                                    Accrued expenses
                                </span>
                            </li>
                        </ul>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-4">
                            Equity
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-4">
                                <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-slate-600 dark:text-slate-400">
                                    Share capital
                                </span>
                            </li>
                            <li class="flex items-start gap-4">
                                <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-slate-600 dark:text-slate-400">
                                    Retained earnings
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Entry Methods Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    How to Enter Opening Balances
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Verasol offers multiple ways to enter opening balances:
                </p>

                <div class="grid gap-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Opening Balance Wizard
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400 mb-4">
                            Go to <strong>Accounting → Opening Balances</strong> for a guided 
                            step-by-step process. This is the easiest method for most users.
                        </p>
                        <ul class="space-y-2 text-slate-600 dark:text-slate-400">
                            <li>• Enter each account balance one by one</li>
                            <li>• System validates that debits equal credits</li>
                            <li>• Automatically creates the opening balance journal</li>
                        </ul>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Import from Excel
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400 mb-4">
                            Upload opening balances in bulk using an Excel template.
                        </p>
                        <ul class="space-y-2 text-slate-600 dark:text-slate-400">
                            <li>• Download the template with your chart of accounts</li>
                            <li>• Fill in the balances</li>
                            <li>• Upload and verify</li>
                        </ul>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Individual Entries
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            For customer and vendor balances, you can enter opening invoices/bills 
                            individually to maintain detailed aging information.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Customer/Vendor Balances Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Customer & Vendor Opening Balances
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    For detailed aging, enter individual opening invoices/bills:
                </p>

                <div class="rounded-2xl bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 p-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-blue-900 dark:text-blue-100 mb-2">
                                Why Enter Individual Invoices?
                            </h3>
                            <p class="text-blue-800 dark:text-blue-200">
                                Entering each outstanding invoice separately preserves the aging 
                                information. This means your Aged Receivables and Aged Payables 
                                reports will be accurate from day one.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bank Balances Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Bank Account Opening Balances
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Enter bank opening balances when setting up each bank account:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Go to <strong>Banking → Bank Accounts</strong>
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Enter the opening balance and "as of" date
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Use the balance from your bank statement on your go-live date
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Validation Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Validating Opening Balances
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Verasol validates your opening balances automatically:
                </p>

                <div class="rounded-2xl bg-emerald-50 dark:bg-emerald-900/20 border-l-4 border-emerald-500 p-6 mb-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-emerald-900 dark:text-emerald-100 mb-2">
                                Balance Check
                            </h3>
                            <p class="text-emerald-800 dark:text-emerald-200">
                                Total debits must equal total credits. If they don't match, the 
                                difference is placed in a "Opening Balance Equity" account which 
                                you should clear before going live.
                            </p>
                        </div>
                    </div>
                </div>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Trial Balance:</strong> Run a trial balance to verify totals
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Balance Sheet:</strong> Compare to your previous system
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Bank Reconciliation:</strong> Verify bank balances match
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Common Issues Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Common Issues
                </h2>

                <div class="space-y-6">
                    <div class="rounded-2xl bg-amber-50 dark:bg-amber-900/20 border-l-4 border-amber-500 p-6">
                        <h3 class="text-lg font-semibold text-amber-900 dark:text-amber-100 mb-2">
                            Opening Balance Equity Not Zero
                        </h3>
                        <p class="text-amber-800 dark:text-amber-200">
                            If this account has a balance, your debits and credits don't match. 
                            Review your entries or check if you missed an account.
                        </p>
                    </div>

                    <div class="rounded-2xl bg-amber-50 dark:bg-amber-900/20 border-l-4 border-amber-500 p-6">
                        <h3 class="text-lg font-semibold text-amber-900 dark:text-amber-100 mb-2">
                            Bank Balance Doesn't Match Statement
                        </h3>
                        <p class="text-amber-800 dark:text-amber-200">
                            You may have uncleared transactions. Enter outstanding cheques and 
                            deposits in transit separately, or adjust your opening date.
                        </p>
                    </div>

                    <div class="rounded-2xl bg-amber-50 dark:bg-amber-900/20 border-l-4 border-amber-500 p-6">
                        <h3 class="text-lg font-semibold text-amber-900 dark:text-amber-100 mb-2">
                            Customer/Vendor Totals Don't Match
                        </h3>
                        <p class="text-amber-800 dark:text-amber-200">
                            Compare your individual entries to the control account total. There 
                            may be missing invoices or duplicate entries.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Best Practices Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Best Practices
                </h2>

                <div class="grid gap-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Choose a Clean Date
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Start at the beginning of a month or financial year. This makes 
                            reconciliation much easier.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Verify Against Source
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Compare your opening balances to the closing balances from your 
                            previous system or audited financial statements.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Enter Customer/Vendor Details
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            For better aging reports, enter individual outstanding invoices 
                            with their original dates rather than a lump sum.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom Spacing -->
            <div class="h-20"></div>
        </div>
    </DocsLayout>
</template>
