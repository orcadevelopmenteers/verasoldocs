<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    Fund Transfers
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    Transfer funds between your bank accounts. Verasol tracks inter-account 
                    transfers to ensure your cash position is always accurate.
                </p>
            </div>

            <!-- Why Use Fund Transfers Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Why Use Fund Transfers?
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Fund transfers record the movement of money between your own accounts:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Moving money from savings to current account
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Replenishing petty cash from a bank account
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Transferring between banks (e.g., ENBD to ADCB)
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Currency exchange between foreign currency accounts
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Creating a Transfer Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Creating a Fund Transfer
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-8">
                    To record a fund transfer, go to <strong>Banking → Fund Transfers → New Transfer</strong>:
                </p>

                <div class="space-y-6">
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">1</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Select Source Account
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Choose the account you're transferring money FROM
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">2</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Select Destination Account
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Choose the account you're transferring money TO
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">3</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Enter Transfer Amount
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Enter the amount being transferred
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">4</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Set Transfer Date
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Enter the date the transfer was made
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">5</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Add Reference (Optional)
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Add a bank reference number for reconciliation
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- How It Works Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    How It Works
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    When you create a fund transfer, Verasol automatically:
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
                                Double-Entry Accounting
                            </h3>
                            <p class="text-blue-800 dark:text-blue-200">
                                Creates a journal entry that debits the destination account and credits 
                                the source account. This ensures your total cash remains correct while 
                                properly tracking the movement between accounts.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Currency Transfers Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Multi-Currency Transfers
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    When transferring between accounts with different currencies:
                </p>

                <div class="space-y-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Exchange Rate
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Enter the exchange rate used for the conversion. Verasol will calculate 
                            the amounts in both currencies automatically.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Exchange Gain/Loss
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Any difference between the historical rate and the transfer rate is 
                            automatically recorded as an exchange gain or loss.
                        </p>
                    </div>
                </div>

                <div class="mt-6 rounded-2xl bg-slate-50 dark:bg-slate-800/50 p-6">
                    <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-4">
                        Example: USD to AED Transfer
                    </h3>
                    <div class="font-mono text-sm text-slate-600 dark:text-slate-400 bg-white dark:bg-slate-900 rounded-xl p-4">
                        <div>Transfer: $10,000 USD → AED Account</div>
                        <div>Exchange Rate: 3.6725</div>
                        <div>Amount Received: AED 36,725</div>
                    </div>
                </div>
            </div>

            <!-- Bank Charges Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Recording Bank Charges
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    If the bank charges a fee for the transfer:
                </p>

                <div class="rounded-2xl bg-amber-50 dark:bg-amber-900/20 border-l-4 border-amber-500 p-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-amber-900 dark:text-amber-100 mb-2">
                                Recording Transfer Fees
                            </h3>
                            <p class="text-amber-800 dark:text-amber-200">
                                Bank charges should be recorded separately as an expense. You can do this 
                                during bank reconciliation or by creating a separate expense entry. Don't 
                                reduce the transfer amount – record the full transfer and the charge separately.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Reconciliation Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Bank Reconciliation
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Fund transfers appear in bank reconciliation for both accounts:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Source Account:</strong> Shows as a withdrawal/debit
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Destination Account:</strong> Shows as a deposit/credit
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>AI Matching:</strong> Verasol's AI recognizes inter-account transfers and matches them automatically
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
                            Record Transfers Promptly
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Record transfers as they happen to keep your account balances accurate
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Use Bank References
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Include the bank's transaction reference number to make reconciliation easier
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Verify Both Accounts
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            After recording a transfer, check that both the source and destination 
                            account balances are correct
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom Spacing -->
            <div class="h-20"></div>
        </div>
    </DocsLayout>
</template>
