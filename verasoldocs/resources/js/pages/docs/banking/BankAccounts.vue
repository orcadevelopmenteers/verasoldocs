<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    Bank Accounts
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    Set up and manage your company's bank accounts in Verasol. Track balances, 
                    reconcile statements, and maintain accurate cash flow records.
                </p>
            </div>

            <!-- Adding a Bank Account Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Adding a Bank Account
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-8">
                    To add a new bank account, go to <strong>Banking → Bank Accounts → Add Account</strong>:
                </p>

                <div class="space-y-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-4">
                            Account Details
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-4">
                                <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-slate-600 dark:text-slate-400">
                                    <strong>Account Name:</strong> A descriptive name (e.g., "Emirates NBD - Main")
                                </span>
                            </li>
                            <li class="flex items-start gap-4">
                                <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-slate-600 dark:text-slate-400">
                                    <strong>Bank Name:</strong> The name of your bank
                                </span>
                            </li>
                            <li class="flex items-start gap-4">
                                <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-slate-600 dark:text-slate-400">
                                    <strong>Account Number:</strong> Your bank account number
                                </span>
                            </li>
                            <li class="flex items-start gap-4">
                                <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-slate-600 dark:text-slate-400">
                                    <strong>IBAN:</strong> International Bank Account Number (required for UAE banks)
                                </span>
                            </li>
                            <li class="flex items-start gap-4">
                                <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-slate-600 dark:text-slate-400">
                                    <strong>Currency:</strong> The account's currency (AED, USD, EUR, etc.)
                                </span>
                            </li>
                        </ul>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-4">
                            Opening Balance
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-4">
                                <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-slate-600 dark:text-slate-400">
                                    <strong>Opening Balance:</strong> The account balance as of your start date
                                </span>
                            </li>
                            <li class="flex items-start gap-4">
                                <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-slate-600 dark:text-slate-400">
                                    <strong>As of Date:</strong> The date of the opening balance
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Account Types Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Account Types
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Verasol supports different types of cash accounts:
                </p>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6 hover:border-emerald-300 dark:hover:border-emerald-700 transition-colors">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-900/30 flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Bank Account</h3>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400">
                            Current accounts, savings accounts, and business accounts at banks
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6 hover:border-emerald-300 dark:hover:border-emerald-700 transition-colors">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 rounded-xl bg-green-50 dark:bg-green-900/30 flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Petty Cash</h3>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400">
                            Cash on hand for small day-to-day expenses
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6 hover:border-emerald-300 dark:hover:border-emerald-700 transition-colors">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 rounded-xl bg-purple-50 dark:bg-purple-900/30 flex items-center justify-center">
                                <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Credit Card</h3>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400">
                            Company credit cards for tracking spending and payments
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6 hover:border-emerald-300 dark:hover:border-emerald-700 transition-colors">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 rounded-xl bg-orange-50 dark:bg-orange-900/30 flex items-center justify-center">
                                <svg class="w-6 h-6 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Foreign Currency</h3>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400">
                            USD, EUR, GBP, or other currency accounts
                        </p>
                    </div>
                </div>
            </div>

            <!-- Multi-Currency Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Multi-Currency Accounts
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    If your business operates in multiple currencies, Verasol handles this seamlessly:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Create separate accounts for each currency
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Automatic exchange rate conversion for reporting
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Track realized and unrealized exchange gains/losses
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Consolidated view of all accounts in your base currency (AED)
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Bank Reconciliation Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Bank Reconciliation
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Each bank account can be reconciled with your bank statements:
                </p>

                <div class="rounded-2xl bg-emerald-50 dark:bg-emerald-900/20 border-l-4 border-emerald-500 p-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-emerald-900 dark:text-emerald-100 mb-2">
                                AI-Powered Reconciliation
                            </h3>
                            <p class="text-emerald-800 dark:text-emerald-200">
                                Verasol's AI assistant can automatically match bank statement entries 
                                with your recorded transactions, saving hours of manual work. Simply 
                                import your statement and let AI do the matching.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bank Statement Import Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Importing Bank Statements
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Verasol supports multiple statement formats:
                </p>

                <div class="overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
                    <table class="w-full">
                        <thead class="bg-slate-50 dark:bg-slate-800">
                            <tr>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Format</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Description</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">CSV</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Standard CSV export from most banks</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Excel</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">XLS and XLSX spreadsheets</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">PDF</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Bank statement PDFs (AI extracts data)</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">MT940</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">SWIFT standard format</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Account Dashboard Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Account Dashboard
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Each bank account has its own dashboard showing:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Current Balance:</strong> Real-time account balance
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Recent Transactions:</strong> Latest deposits and withdrawals
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Pending Cheques:</strong> Post-dated cheques not yet cleared
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Reconciliation Status:</strong> Last reconciled date and any differences
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
                            Reconcile Monthly
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Reconcile each bank account at least monthly to catch any discrepancies 
                            early and ensure accurate financial records
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Use Descriptive Names
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Name accounts clearly (e.g., "ADCB Main Operations" rather than just "Bank 1") 
                            so all team members can easily identify them
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Separate Business Accounts
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Keep personal and business accounts separate. Only add business accounts 
                            to Verasol for clean financial records
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom Spacing -->
            <div class="h-20"></div>
        </div>
    </DocsLayout>
</template>
