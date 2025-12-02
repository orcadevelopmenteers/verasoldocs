<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-4">
                    Error Messages
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400">
                    Complete reference of error messages you may encounter in Verasol, with explanations and solutions.
                </p>
            </div>

            <!-- How to Use This Guide -->
            <div class="bg-blue-50 dark:bg-blue-900/20 border-l-4 border-blue-500 rounded-r-2xl p-6 mb-12">
                <h3 class="text-lg font-semibold text-blue-800 dark:text-blue-200 mb-2">
                    How to Use This Guide
                </h3>
                <p class="text-blue-700 dark:text-blue-300">
                    Use <strong>Ctrl+F</strong> (or Cmd+F on Mac) to search for your specific error message. Each entry includes the error code, meaning, and step-by-step resolution.
                </p>
            </div>

            <!-- Validation Errors -->
            <section class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Validation Errors (VAL)
                </h2>

                <div class="space-y-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <div class="flex items-start gap-4">
                            <span class="bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 text-sm font-mono px-3 py-1 rounded-full">VAL001</span>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">
                                    Required field is empty
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400 mb-3">
                                    A mandatory field has not been filled in.
                                </p>
                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                                    <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Solution:</p>
                                    <p class="text-slate-600 dark:text-slate-400">Look for fields marked with a red asterisk (*) and ensure all are completed before saving.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <div class="flex items-start gap-4">
                            <span class="bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 text-sm font-mono px-3 py-1 rounded-full">VAL002</span>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">
                                    Invalid email format
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400 mb-3">
                                    The email address entered is not in a valid format.
                                </p>
                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                                    <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Solution:</p>
                                    <p class="text-slate-600 dark:text-slate-400">Ensure the email follows the format: name@domain.com. Check for spaces or special characters.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <div class="flex items-start gap-4">
                            <span class="bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 text-sm font-mono px-3 py-1 rounded-full">VAL003</span>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">
                                    Invalid TRN format
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400 mb-3">
                                    Tax Registration Number does not match UAE FTA format.
                                </p>
                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                                    <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Solution:</p>
                                    <p class="text-slate-600 dark:text-slate-400">UAE TRN must be exactly 15 digits starting with 100. Example: 100123456789012</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <div class="flex items-start gap-4">
                            <span class="bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 text-sm font-mono px-3 py-1 rounded-full">VAL004</span>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">
                                    Date is outside allowed range
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400 mb-3">
                                    The transaction date falls outside the open financial period.
                                </p>
                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                                    <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Solution:</p>
                                    <p class="text-slate-600 dark:text-slate-400">Use a date within the current open period, or ask an administrator to reopen the required period.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <div class="flex items-start gap-4">
                            <span class="bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 text-sm font-mono px-3 py-1 rounded-full">VAL005</span>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">
                                    Amount cannot be negative
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400 mb-3">
                                    A negative value was entered where only positive amounts are allowed.
                                </p>
                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                                    <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Solution:</p>
                                    <p class="text-slate-600 dark:text-slate-400">Remove the minus sign. For reversals, use Credit Notes or Debit Notes instead of negative amounts.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Transaction Errors -->
            <section class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Transaction Errors (TXN)
                </h2>

                <div class="space-y-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <div class="flex items-start gap-4">
                            <span class="bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 text-sm font-mono px-3 py-1 rounded-full">TXN001</span>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">
                                    Duplicate document number
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400 mb-3">
                                    A transaction with this reference number already exists.
                                </p>
                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                                    <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Solution:</p>
                                    <p class="text-slate-600 dark:text-slate-400">Use auto-numbering, or enter a unique reference. Check existing transactions to avoid duplicates.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <div class="flex items-start gap-4">
                            <span class="bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 text-sm font-mono px-3 py-1 rounded-full">TXN002</span>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">
                                    Journal entry not balanced
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400 mb-3">
                                    Debits and credits in the journal entry do not equal.
                                </p>
                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                                    <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Solution:</p>
                                    <p class="text-slate-600 dark:text-slate-400">Review all line items. Total debits must equal total credits. Check the difference shown and adjust accordingly.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <div class="flex items-start gap-4">
                            <span class="bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 text-sm font-mono px-3 py-1 rounded-full">TXN003</span>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">
                                    Cannot modify posted transaction
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400 mb-3">
                                    Attempting to edit a transaction that has already been finalized.
                                </p>
                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                                    <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Solution:</p>
                                    <p class="text-slate-600 dark:text-slate-400">Posted transactions are locked for audit compliance. Create a reversing entry or use Credit/Debit Notes for corrections.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <div class="flex items-start gap-4">
                            <span class="bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 text-sm font-mono px-3 py-1 rounded-full">TXN004</span>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">
                                    Payment exceeds outstanding balance
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400 mb-3">
                                    The payment amount is greater than the amount due on the invoice.
                                </p>
                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                                    <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Solution:</p>
                                    <p class="text-slate-600 dark:text-slate-400">Reduce the payment amount to match or be less than the outstanding balance. For overpayments, create an advance payment instead.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <div class="flex items-start gap-4">
                            <span class="bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 text-sm font-mono px-3 py-1 rounded-full">TXN005</span>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">
                                    Insufficient stock quantity
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400 mb-3">
                                    Trying to sell or transfer more items than available in stock.
                                </p>
                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                                    <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Solution:</p>
                                    <p class="text-slate-600 dark:text-slate-400">Check current stock levels in Inventory → Stock Report. Either reduce quantity or process a purchase to replenish stock first.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Access Errors -->
            <section class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Access & Permission Errors (ACC)
                </h2>

                <div class="space-y-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <div class="flex items-start gap-4">
                            <span class="bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-sm font-mono px-3 py-1 rounded-full">ACC001</span>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">
                                    Access denied
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400 mb-3">
                                    You don't have permission to access this resource.
                                </p>
                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                                    <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Solution:</p>
                                    <p class="text-slate-600 dark:text-slate-400">Contact your administrator to request access. Provide the specific module or action you need.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <div class="flex items-start gap-4">
                            <span class="bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-sm font-mono px-3 py-1 rounded-full">ACC002</span>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">
                                    Session expired
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400 mb-3">
                                    Your login session has timed out for security.
                                </p>
                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                                    <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Solution:</p>
                                    <p class="text-slate-600 dark:text-slate-400">Log in again. Use "Remember Me" for longer sessions. Save work frequently if working on complex entries.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <div class="flex items-start gap-4">
                            <span class="bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-sm font-mono px-3 py-1 rounded-full">ACC003</span>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">
                                    Account locked
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400 mb-3">
                                    Too many failed login attempts have locked your account.
                                </p>
                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                                    <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Solution:</p>
                                    <p class="text-slate-600 dark:text-slate-400">Wait 30 minutes for automatic unlock, or contact your administrator to unlock immediately.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- System Errors -->
            <section class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    System Errors (SYS)
                </h2>

                <div class="space-y-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <div class="flex items-start gap-4">
                            <span class="bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-slate-300 text-sm font-mono px-3 py-1 rounded-full">SYS001</span>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">
                                    Connection timeout
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400 mb-3">
                                    Unable to connect to the server within the expected time.
                                </p>
                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                                    <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Solution:</p>
                                    <p class="text-slate-600 dark:text-slate-400">Check your internet connection. Refresh the page and try again. If issue persists, check Verasol status page.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <div class="flex items-start gap-4">
                            <span class="bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-slate-300 text-sm font-mono px-3 py-1 rounded-full">SYS002</span>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">
                                    Internal server error
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400 mb-3">
                                    An unexpected error occurred on the server.
                                </p>
                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                                    <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Solution:</p>
                                    <p class="text-slate-600 dark:text-slate-400">Wait a few moments and try again. If the error continues, note the error ID (if shown) and contact support.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <div class="flex items-start gap-4">
                            <span class="bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-slate-300 text-sm font-mono px-3 py-1 rounded-full">SYS003</span>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">
                                    Service temporarily unavailable
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400 mb-3">
                                    The system is undergoing maintenance or experiencing high load.
                                </p>
                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                                    <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Solution:</p>
                                    <p class="text-slate-600 dark:text-slate-400">Check the Verasol status page for scheduled maintenance. Try again in a few minutes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- VAT Errors -->
            <section class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    VAT & Compliance Errors (VAT)
                </h2>

                <div class="space-y-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <div class="flex items-start gap-4">
                            <span class="bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 text-sm font-mono px-3 py-1 rounded-full">VAT001</span>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">
                                    Missing TRN for taxable supply
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400 mb-3">
                                    VAT is being charged but customer/vendor TRN is not provided.
                                </p>
                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                                    <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Solution:</p>
                                    <p class="text-slate-600 dark:text-slate-400">Add the customer/vendor TRN in their profile. For amounts under AED 10,000, TRN may not be required.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <div class="flex items-start gap-4">
                            <span class="bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 text-sm font-mono px-3 py-1 rounded-full">VAT002</span>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">
                                    VAT period already filed
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400 mb-3">
                                    Attempting to create transactions in a period where VAT return is already submitted.
                                </p>
                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                                    <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Solution:</p>
                                    <p class="text-slate-600 dark:text-slate-400">Record the transaction in the current open period. For adjustments to filed periods, they will appear in the next VAT return.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <div class="flex items-start gap-4">
                            <span class="bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 text-sm font-mono px-3 py-1 rounded-full">VAT003</span>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">
                                    Invalid tax code combination
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400 mb-3">
                                    The selected tax treatment is not valid for this transaction type.
                                </p>
                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                                    <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Solution:</p>
                                    <p class="text-slate-600 dark:text-slate-400">Review the tax group settings. Example: Export invoices should use 0% rate, not exempt or out-of-scope.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Need More Help -->
            <div class="mt-16 bg-slate-50 dark:bg-slate-800/50 rounded-2xl p-8 text-center">
                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-3">
                    Error Not Listed Here?
                </h3>
                <p class="text-lg text-slate-600 dark:text-slate-400 mb-6">
                    If you encounter an error not covered in this guide, our support team is ready to help.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="/docs/getting-help" class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-600 text-white font-medium rounded-xl hover:bg-emerald-700 transition-colors">
                        Contact Support
                    </a>
                    <a href="/docs/faq" class="inline-flex items-center gap-2 px-6 py-3 border border-slate-300 dark:border-slate-600 text-slate-700 dark:text-slate-300 font-medium rounded-xl hover:bg-slate-100 dark:hover:bg-slate-700 transition-colors">
                        Check FAQ
                    </a>
                </div>
            </div>

            <!-- Bottom spacing -->
            <div class="h-20"></div>
        </div>
    </DocsLayout>
</template>

<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue';
</script>
