<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    Receive Payments
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    Record customer payments against invoices efficiently. Verasol supports 
                    multiple payment methods, partial payments, and automatic bank reconciliation.
                </p>
            </div>

            <!-- Payment Methods Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Supported Payment Methods
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
                            Direct bank transfers, wire transfers, and online banking payments
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
                            Cash payments received at your office or point of sale
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
                            Post-dated or current-dated cheques with tracking
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6 hover:border-emerald-300 dark:hover:border-emerald-700 transition-colors">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 rounded-xl bg-orange-50 dark:bg-orange-900/30 flex items-center justify-center">
                                <svg class="w-6 h-6 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Card Payment</h3>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400">
                            Credit and debit card payments through POS or online
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
                    Follow these steps to record a customer payment:
                </p>

                <div class="space-y-6">
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">1</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Navigate to Receive Payments
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Go to <strong>Sales → Receive Payments</strong> or click the "Receive Payment" 
                                button from a customer's account.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">2</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Select the Customer
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Choose the customer making the payment. Their outstanding invoices will 
                                automatically be displayed.
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
                                Enter the payment date, amount received, payment method, and the bank 
                                account where the payment was deposited.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">4</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Apply to Invoices
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Select which invoices to apply the payment to. You can apply the full 
                                amount to one invoice or split across multiple invoices.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">5</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Save the Payment
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Review the payment details and click Save. A receipt will be generated 
                                that you can print or email to the customer.
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
                    Sometimes customers pay less than the full invoice amount. Verasol handles 
                    partial payments seamlessly:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Apply any amount to an invoice – the remaining balance stays open
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Track partial payment history on each invoice
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Aged receivables report shows remaining balances accurately
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Easy to record multiple partial payments over time
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
                    Record payments received before an invoice is issued:
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
                                When you receive a payment without selecting any invoices, it creates a 
                                customer credit. This credit can later be applied to future invoices 
                                automatically or manually.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payment Reference Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Payment Reference & Tracking
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Keep track of payments with proper references:
                </p>

                <div class="overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
                    <table class="w-full">
                        <thead class="bg-slate-50 dark:bg-slate-800">
                            <tr>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Field</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Purpose</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Receipt Number</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Auto-generated unique identifier</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Payment Reference</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Customer's reference (cheque number, transfer ID)</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Bank Reference</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Bank statement reference for reconciliation</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Notes</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Internal notes and payment details</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Bank Reconciliation Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Integration with Bank Reconciliation
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Payments integrate seamlessly with Verasol's bank reconciliation:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>AI-Powered Matching:</strong> Automatically matches payments to bank statement entries
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Reference Matching:</strong> Uses payment reference to find corresponding bank entries
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>One-Click Reconcile:</strong> Confirm matches directly from the reconciliation screen
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Voiding Payments Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Voiding a Payment
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    If a payment was recorded incorrectly or a cheque bounced:
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
                                Important Note
                            </h3>
                            <p class="text-amber-800 dark:text-amber-200 mb-4">
                                Voiding a payment cannot be undone. The system will automatically reverse 
                                the journal entries and mark the related invoices as unpaid again.
                            </p>
                            <p class="text-amber-800 dark:text-amber-200">
                                If the period is closed, you'll need to reopen it first or create an 
                                adjusting entry in the current period.
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
                            Record Payments Daily
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Enter payments as they come in. This keeps your cash flow reports accurate 
                            and makes bank reconciliation easier.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Use Consistent References
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Always include the customer's payment reference (cheque number, transfer ID). 
                            This speeds up bank reconciliation significantly.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Send Payment Receipts
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Use the email feature to send payment receipts to customers. This provides 
                            a professional confirmation and reduces payment disputes.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom Spacing -->
            <div class="h-20"></div>
        </div>
    </DocsLayout>
</template>
