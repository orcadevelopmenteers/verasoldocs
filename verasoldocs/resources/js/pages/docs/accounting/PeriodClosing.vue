<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    Period Closing
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    Close accounting periods to lock financial data and prevent unauthorized 
                    changes. This is essential for accurate reporting and FTA audit compliance.
                </p>
            </div>

            <!-- Why Close Periods Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Why Close Periods?
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Closing accounting periods serves several important purposes:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Data Integrity:</strong> Prevents accidental or intentional changes to historical data
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Audit Trail:</strong> Maintains a clean record for FTA audits
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Reporting Accuracy:</strong> Ensures financial statements remain consistent
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>VAT Compliance:</strong> Locks VAT return periods after filing
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Period Types Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Period Types
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Verasol supports different period types:
                </p>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Monthly Periods
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Close each month after reconciling bank accounts and reviewing transactions
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Quarterly Periods
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Aligns with VAT return periods for most UAE businesses
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Annual Period
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Year-end closing that carries forward balances to the new year
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            VAT Periods
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Automatically closed when VAT return is marked as filed
                        </p>
                    </div>
                </div>
            </div>

            <!-- Closing Process Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Closing a Period
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-8">
                    Follow these steps to close an accounting period:
                </p>

                <div class="space-y-6">
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">1</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Complete All Transactions
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Ensure all invoices, bills, payments, and adjustments for the period 
                                have been entered
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">2</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Reconcile Bank Accounts
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Complete bank reconciliation for all accounts to verify cash balances
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">3</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Review Trial Balance
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Check that debits equal credits and balances look reasonable
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">4</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Generate Financial Reports
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Run the Income Statement and Balance Sheet to verify accuracy
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">5</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Close the Period
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Go to <strong>Accounting → Period Closing</strong> and click "Close Period"
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- What Happens Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    What Happens When You Close a Period
                </h2>

                <div class="rounded-2xl bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 p-6 mb-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-blue-900 dark:text-blue-100 mb-2">
                                Period is Locked
                            </h3>
                            <p class="text-blue-800 dark:text-blue-200">
                                Once closed, no transactions can be created, edited, or deleted with 
                                dates in that period. This protects your financial data from changes.
                            </p>
                        </div>
                    </div>
                </div>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            All users are prevented from modifying closed period data
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Reports for closed periods remain consistent
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Audit log records who closed the period and when
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Year-End Closing Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Year-End Closing
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Annual closing includes additional steps:
                </p>

                <div class="space-y-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Profit/Loss Transfer
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Net income or loss is transferred to Retained Earnings in equity
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Income/Expense Reset
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Revenue and expense accounts are reset to zero for the new year
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Opening Balances
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Asset, liability, and equity balances carry forward to the new year
                        </p>
                    </div>
                </div>
            </div>

            <!-- Reopening Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Reopening a Closed Period
                </h2>

                <div class="rounded-2xl bg-amber-50 dark:bg-amber-900/20 border-l-4 border-amber-500 p-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-amber-900 dark:text-amber-100 mb-2">
                                Administrator Only
                            </h3>
                            <p class="text-amber-800 dark:text-amber-200 mb-4">
                                Only users with Administrator role can reopen closed periods. This 
                                should only be done when absolutely necessary, such as correcting 
                                significant errors discovered after closing.
                            </p>
                            <p class="text-amber-800 dark:text-amber-200">
                                All period reopening actions are logged in the audit trail with the 
                                reason provided.
                            </p>
                        </div>
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
                            Close Monthly
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Close periods monthly, ideally within the first week of the following 
                            month, to maintain data integrity
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Review Before Closing
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Always review reports before closing. It's easier to fix errors before 
                            the period is locked
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Close After VAT Filing
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Close the VAT period only after filing your VAT return to ensure the 
                            filed figures match your records
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom Spacing -->
            <div class="h-20"></div>
        </div>
    </DocsLayout>
</template>
