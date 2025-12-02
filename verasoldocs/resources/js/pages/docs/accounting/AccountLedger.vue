<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    Account Ledger
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    The account ledger shows all transactions for a specific account. Use it to 
                    review account activity, verify balances, and investigate discrepancies.
                </p>
            </div>

            <!-- What is Account Ledger Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    What is an Account Ledger?
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    An account ledger is a detailed record of all transactions affecting a 
                    specific account. It shows:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Every debit and credit entry
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Running balance after each transaction
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Transaction dates, references, and descriptions
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Links to original source documents
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Accessing the Ledger Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Accessing the Account Ledger
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    There are several ways to access an account ledger:
                </p>

                <div class="space-y-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            From the Menu
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Go to <strong>Accounting → Account Ledger</strong>, then select the 
                            account you want to view
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            From Chart of Accounts
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Click on any account in the Chart of Accounts to view its ledger
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            From Financial Reports
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Click any account balance in the Trial Balance, Balance Sheet, or 
                            Income Statement to drill down to its ledger
                        </p>
                    </div>
                </div>
            </div>

            <!-- Ledger Information Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Ledger Information
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Each ledger entry includes:
                </p>

                <div class="overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
                    <table class="w-full">
                        <thead class="bg-slate-50 dark:bg-slate-800">
                            <tr>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Column</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Description</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Date</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Transaction date</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Reference</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Document number (invoice, bill, journal, etc.)</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Description</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Transaction description or memo</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Debit</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Amount debited to the account</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Credit</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Amount credited to the account</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Balance</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Running balance after the transaction</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Filtering Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Filtering Ledger Entries
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Filter the ledger to find specific transactions:
                </p>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6 hover:border-emerald-300 dark:hover:border-emerald-700 transition-colors">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Date Range
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            View transactions for a specific period
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6 hover:border-emerald-300 dark:hover:border-emerald-700 transition-colors">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Transaction Type
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Filter by invoices, payments, journals, etc.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6 hover:border-emerald-300 dark:hover:border-emerald-700 transition-colors">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Reference Search
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Search by document number
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6 hover:border-emerald-300 dark:hover:border-emerald-700 transition-colors">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Amount Range
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Find transactions within a specific amount range
                        </p>
                    </div>
                </div>
            </div>

            <!-- Common Ledgers Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Common Ledgers to Review
                </h2>

                <div class="space-y-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Accounts Receivable
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Shows all customer invoices and payments. Useful for understanding 
                            how the receivables balance changed over time.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Accounts Payable
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Shows all vendor bills and payments. Track what you owe to suppliers.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Bank Account Ledger
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Shows all deposits and withdrawals. Matches your bank statement 
                            for reconciliation.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            VAT Payable
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Shows output VAT collected and input VAT claimed. Essential for 
                            VAT return verification.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Drill-Down Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Drill-Down to Source Documents
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Click any transaction in the ledger to view the original document:
                </p>

                <div class="rounded-2xl bg-emerald-50 dark:bg-emerald-900/20 border-l-4 border-emerald-500 p-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-emerald-900 dark:text-emerald-100 mb-2">
                                Full Audit Trail
                            </h3>
                            <p class="text-emerald-800 dark:text-emerald-200">
                                Every ledger entry links back to its source: the invoice, bill, payment, 
                                journal entry, or other document that created it. This provides a 
                                complete audit trail for FTA compliance.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Export Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Exporting Ledger Data
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Export ledger data for analysis or sharing:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>PDF:</strong> Formatted report for printing or email
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Excel:</strong> Spreadsheet for further analysis
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>CSV:</strong> Raw data for import into other systems
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Best Practices Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Best Practices
                </h2>

                <div class="grid gap-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Review Regularly
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Check key account ledgers monthly to catch any unusual entries early
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Verify Opening Balances
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            The opening balance at the start of each period should match the 
                            closing balance of the previous period
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Use for Discrepancy Investigation
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            When a balance seems wrong, the ledger shows exactly what transactions 
                            affected it and where to investigate
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom Spacing -->
            <div class="h-20"></div>
        </div>
    </DocsLayout>
</template>
