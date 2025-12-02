<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    Make Payments
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    Record payments made to your vendors. Verasol supports multiple payment 
                    methods and helps you track payment due dates to avoid late fees.
                </p>
            </div>

            <!-- Payment Methods Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Payment Methods
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-8">
                    Verasol supports various payment methods commonly used in the UAE:
                </p>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6 hover:border-emerald-300 dark:hover:border-emerald-700 transition-colors">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-900/30 flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Bank Transfer</h3>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400">
                            Online banking, wire transfers, and direct bank payments
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6 hover:border-emerald-300 dark:hover:border-emerald-700 transition-colors">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 rounded-xl bg-purple-50 dark:bg-purple-900/30 flex items-center justify-center">
                                <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Cheque</h3>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400">
                            Post-dated or current-dated cheques with integrated cheque printing
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6 hover:border-emerald-300 dark:hover:border-emerald-700 transition-colors">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 rounded-xl bg-green-50 dark:bg-green-900/30 flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Cash</h3>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400">
                            Petty cash payments for small expenses
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6 hover:border-emerald-300 dark:hover:border-emerald-700 transition-colors">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 rounded-xl bg-orange-50 dark:bg-orange-900/30 flex items-center justify-center">
                                <svg class="w-6 h-6 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Corporate Card</h3>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400">
                            Company credit card payments
                        </p>
                    </div>
                </div>
            </div>

            <!-- Recording a Payment Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Recording a Payment
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-8">
                    Follow these steps to record a vendor payment:
                </p>

                <div class="space-y-6">
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">1</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Navigate to Make Payments
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Go to <strong>Purchases → Make Payments</strong> or click "Pay" from a vendor's bill
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">2</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Select the Vendor
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Choose the vendor you're paying. Their outstanding bills will be displayed
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
                                Set the payment date, amount, method, and the bank account used for payment
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">4</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Apply to Bills
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Select which bills to pay. You can pay one bill fully or split across multiple bills
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">5</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Save and Print
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Save the payment. You can print a payment voucher for your records
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Partial Payments Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Partial Payments
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Sometimes you need to make partial payments on a bill. Verasol handles this 
                    seamlessly:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Pay any amount toward a bill – the remaining balance stays open
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Track all partial payments against each bill
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Aged payables report shows accurate remaining balances
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Advance Payments Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Advance Payments
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Pay vendors in advance before receiving the bill:
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
                                How Advance Payments Work
                            </h3>
                            <p class="text-blue-800 dark:text-blue-200">
                                When you make a payment without selecting bills, it creates a vendor 
                                prepayment. This is recorded as an advance and can be applied to future 
                                bills when they arrive.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payment Due Dates Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Managing Payment Due Dates
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Verasol helps you stay on top of payment deadlines:
                </p>

                <div class="grid gap-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Dashboard Alerts
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            See upcoming and overdue bills directly on your dashboard
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Aged Payables Report
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            View bills grouped by aging: Current, 1-30 days, 31-60 days, 61-90 days, 90+ days
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Payment Scheduling
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Plan your cash flow by seeing which bills are due in the coming weeks
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bank Reconciliation Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Bank Reconciliation
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Payments integrate with bank reconciliation:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>AI Matching:</strong> Automatically matches payments to bank statement entries
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Cheque Tracking:</strong> See when cheques clear the bank
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Transfer Reference:</strong> Use bank references for quick matching
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Voiding Payments Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Voiding a Payment
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
                                Void with Caution
                            </h3>
                            <p class="text-amber-800 dark:text-amber-200 mb-4">
                                Voiding a payment reverses all journal entries and marks the associated 
                                bills as unpaid again. This action cannot be undone.
                            </p>
                            <p class="text-amber-800 dark:text-amber-200">
                                If the payment is in a closed period, you'll need to reopen the period 
                                first or create an adjusting entry.
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
                            Pay on Time
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Use the aged payables report to prioritize payments and maintain good 
                            vendor relationships
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Use Clear References
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Include cheque numbers or transfer references to make bank reconciliation easy
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Record Immediately
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Enter payments as soon as they're made. This keeps your cash flow reports 
                            accurate and payables current
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom Spacing -->
            <div class="h-20"></div>
        </div>
    </DocsLayout>
</template>
