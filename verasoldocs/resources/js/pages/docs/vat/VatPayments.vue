<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    VAT Payments
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    Record VAT payments made to the Federal Tax Authority and track your 
                    VAT liability. Verasol helps you stay on top of payment deadlines.
                </p>
            </div>

            <!-- When to Pay Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    When to Pay VAT
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    VAT payment is due at the same time as filing:
                </p>

                <div class="rounded-2xl bg-amber-50 dark:bg-amber-900/20 border-l-4 border-amber-500 p-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-amber-900 dark:text-amber-100 mb-2">
                                28-Day Deadline
                            </h3>
                            <p class="text-amber-800 dark:text-amber-200">
                                VAT must be paid within 28 days after the end of the tax period. 
                                Late payment incurs a 2% penalty immediately, plus 4% monthly on 
                                the unpaid amount (up to 300% maximum).
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payment Methods Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    FTA Payment Methods
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    The FTA accepts payment through several channels:
                </p>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            e-Dirham Card
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Pay directly through the EmaraTax portal using e-Dirham
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Bank Transfer (GIBAN)
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Transfer to your unique FTA GIBAN account number
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Credit/Debit Card
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Pay online through the FTA portal (fees may apply)
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Exchange Houses
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Pay at authorized exchange houses across the UAE
                        </p>
                    </div>
                </div>
            </div>

            <!-- Recording Payment Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Recording VAT Payment in Verasol
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-8">
                    After paying the FTA, record the payment in Verasol:
                </p>

                <div class="space-y-6">
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">1</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Go to VAT Payments
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Navigate to <strong>VAT → VAT Payments → Record Payment</strong>
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">2</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Select the VAT Return
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Choose which VAT return period this payment is for
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">3</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Enter Payment Details
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Enter the payment date, amount, and bank account used
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">4</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Add Reference
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Include the FTA transaction reference for your records
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accounting Treatment Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Accounting Treatment
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    When you record a VAT payment, Verasol creates the following journal entry:
                </p>

                <div class="rounded-2xl bg-slate-50 dark:bg-slate-800/50 p-6">
                    <div class="overflow-hidden rounded-xl border border-slate-200 dark:border-slate-700">
                        <table class="w-full">
                            <thead class="bg-slate-100 dark:bg-slate-700">
                                <tr>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-slate-900 dark:text-white">Account</th>
                                    <th class="px-6 py-3 text-right text-sm font-semibold text-slate-900 dark:text-white">Debit</th>
                                    <th class="px-6 py-3 text-right text-sm font-semibold text-slate-900 dark:text-white">Credit</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200 dark:divide-slate-700 bg-white dark:bg-slate-800">
                                <tr>
                                    <td class="px-6 py-4 text-slate-900 dark:text-white">VAT Payable</td>
                                    <td class="px-6 py-4 text-right text-slate-600 dark:text-slate-400">10,000</td>
                                    <td class="px-6 py-4 text-right text-slate-600 dark:text-slate-400">-</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-slate-900 dark:text-white">Bank Account</td>
                                    <td class="px-6 py-4 text-right text-slate-600 dark:text-slate-400">-</td>
                                    <td class="px-6 py-4 text-right text-slate-600 dark:text-slate-400">10,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- VAT Refunds Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    VAT Refunds
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    If your input VAT exceeds output VAT, you may be entitled to a refund:
                </p>

                <div class="rounded-2xl bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 p-6 mb-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-blue-900 dark:text-blue-100 mb-2">
                                Refund or Carry Forward
                            </h3>
                            <p class="text-blue-800 dark:text-blue-200">
                                You can either request a refund from the FTA or carry the credit 
                                forward to offset against future VAT liabilities.
                            </p>
                        </div>
                    </div>
                </div>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Request Refund:</strong> Submit a refund application through EmaraTax
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Carry Forward:</strong> Credit is automatically applied to future periods
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Record Receipt:</strong> When refund is received, record it in Verasol
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Payment History Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Payment History
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    View all your VAT payment history in one place:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            See all payments made for each VAT period
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Track outstanding balances and credits
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Export payment history for audits
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Penalties Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Recording Penalties
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    If you incur late payment penalties:
                </p>

                <div class="rounded-2xl bg-red-50 dark:bg-red-900/20 border-l-4 border-red-500 p-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-red-900 dark:text-red-100 mb-2">
                                Penalty Recording
                            </h3>
                            <p class="text-red-800 dark:text-red-200">
                                Record VAT penalties as an expense (not deductible for tax purposes). 
                                Verasol tracks penalties separately so they don't affect your VAT 
                                calculations.
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
                            Pay Before Deadline
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Pay a few days early to allow for bank processing time and avoid 
                            late payment penalties
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Use GIBAN for Large Payments
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Bank transfer to your GIBAN is most reliable for large amounts
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Keep Payment Receipts
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Save the FTA payment confirmation and bank statement as proof of payment
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom Spacing -->
            <div class="h-20"></div>
        </div>
    </DocsLayout>
</template>
