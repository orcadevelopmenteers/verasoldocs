<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    Managing Vendors
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    Vendors (suppliers) are the businesses and individuals you purchase goods and 
                    services from. Proper vendor management ensures accurate expense tracking and 
                    smooth payment processing.
                </p>
            </div>

            <!-- Creating a Vendor Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Creating a Vendor
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-8">
                    To add a new vendor, go to <strong>Purchases → Vendors → New Vendor</strong> 
                    and fill in the following information:
                </p>

                <div class="space-y-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-4">
                            Basic Information
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-4">
                                <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-slate-600 dark:text-slate-400">
                                    <strong>Vendor Name:</strong> The official business name
                                </span>
                            </li>
                            <li class="flex items-start gap-4">
                                <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-slate-600 dark:text-slate-400">
                                    <strong>Display Name:</strong> Short name for internal use
                                </span>
                            </li>
                            <li class="flex items-start gap-4">
                                <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-slate-600 dark:text-slate-400">
                                    <strong>Vendor Type:</strong> Supplier, Service Provider, Contractor, etc.
                                </span>
                            </li>
                        </ul>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-4">
                            Contact Details
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-4">
                                <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-slate-600 dark:text-slate-400">
                                    <strong>Email:</strong> Primary contact email
                                </span>
                            </li>
                            <li class="flex items-start gap-4">
                                <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-slate-600 dark:text-slate-400">
                                    <strong>Phone:</strong> Contact phone number
                                </span>
                            </li>
                            <li class="flex items-start gap-4">
                                <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-slate-600 dark:text-slate-400">
                                    <strong>Address:</strong> Business address for correspondence
                                </span>
                            </li>
                        </ul>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-4">
                            Tax Information
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-4">
                                <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-slate-600 dark:text-slate-400">
                                    <strong>TRN (Tax Registration Number):</strong> Required for VAT-registered vendors
                                </span>
                            </li>
                            <li class="flex items-start gap-4">
                                <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-slate-600 dark:text-slate-400">
                                    <strong>Tax Treatment:</strong> Standard rated, Zero rated, Exempt, or Out of scope
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- TRN Validation Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    TRN Validation
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Verasol validates UAE Tax Registration Numbers automatically:
                </p>

                <div class="rounded-2xl bg-emerald-50 dark:bg-emerald-900/20 border-l-4 border-emerald-500 p-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-emerald-900 dark:text-emerald-100 mb-2">
                                FTA Compliance
                            </h3>
                            <p class="text-emerald-800 dark:text-emerald-200">
                                Valid vendor TRNs are essential for claiming input VAT. Verasol checks 
                                the TRN format (15 digits starting with 100) and warns you if a TRN 
                                appears invalid.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payment Terms Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Payment Terms
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Set default payment terms for each vendor to track due dates automatically:
                </p>

                <div class="overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
                    <table class="w-full">
                        <thead class="bg-slate-50 dark:bg-slate-800">
                            <tr>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Term</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Description</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Due on Receipt</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Payment due immediately</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Net 15</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Payment due within 15 days</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Net 30</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Payment due within 30 days</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Net 60</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Payment due within 60 days</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Custom</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Define your own payment terms</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Bank Details Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Vendor Bank Details
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Store vendor bank information for quick payment processing:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Bank Name:</strong> Name of the vendor's bank
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Account Name:</strong> Name on the bank account
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Account Number:</strong> Bank account number
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>IBAN:</strong> International Bank Account Number (for UAE banks)
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>SWIFT Code:</strong> For international transfers
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Vendor Categories Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Vendor Categories
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Organize vendors into categories for better expense analysis:
                </p>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6 hover:border-emerald-300 dark:hover:border-emerald-700 transition-colors">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Raw Materials
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Suppliers of materials used in production
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6 hover:border-emerald-300 dark:hover:border-emerald-700 transition-colors">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Services
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Professional services, consultants, contractors
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6 hover:border-emerald-300 dark:hover:border-emerald-700 transition-colors">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Utilities
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            DEWA, Etisalat, du, and other utilities
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6 hover:border-emerald-300 dark:hover:border-emerald-700 transition-colors">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Government
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Government fees, licenses, permits
                        </p>
                    </div>
                </div>
            </div>

            <!-- Vendor Statement Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Vendor Statements
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Generate vendor statements to reconcile your records with theirs:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            View all transactions with a vendor for any date range
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            See running balance of amounts owed
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Export to PDF for sharing with the vendor
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Compare against vendor's statement to find discrepancies
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Import Vendors Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Importing Vendors
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Bulk import vendors from a CSV or Excel file:
                </p>

                <div class="rounded-2xl bg-slate-50 dark:bg-slate-800/50 p-6">
                    <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-4">
                        Required CSV Columns
                    </h3>
                    <div class="font-mono text-sm text-slate-600 dark:text-slate-400 bg-white dark:bg-slate-900 rounded-xl p-4 overflow-x-auto">
                        vendor_name, display_name, email, phone, trn, address, payment_terms
                    </div>
                    <p class="text-slate-500 dark:text-slate-500 mt-4 text-sm">
                        Download the template from the Import Vendors screen for the complete format.
                    </p>
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
                            Always Verify TRN
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Before entering a vendor's TRN, verify it on the FTA portal. Invalid TRNs 
                            can result in rejected input VAT claims.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Keep Contact Info Updated
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Maintain current email addresses and phone numbers. This helps when you 
                            need to send payment confirmations or request documents.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Regular Statement Reconciliation
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Reconcile vendor statements monthly to catch any discrepancies early, 
                            such as missing invoices or duplicate payments.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom Spacing -->
            <div class="h-20"></div>
        </div>
    </DocsLayout>
</template>
