<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    FTA Audit File (FAF)
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    Generate the FTA Audit File for tax audits. Verasol produces a compliant 
                    FAF that meets all Federal Tax Authority requirements.
                </p>
            </div>

            <!-- What is FAF Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    What is the FTA Audit File?
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    The FTA Audit File (FAF) is a standardized data file that the Federal Tax 
                    Authority may request during a tax audit:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Contains all sales and purchase transactions
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Includes VAT details for each transaction
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Follows specific FTA format requirements
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Must be provided within 5 business days when requested
                        </span>
                    </li>
                </ul>
            </div>

            <!-- When Required Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    When is the FAF Required?
                </h2>

                <div class="rounded-2xl bg-amber-50 dark:bg-amber-900/20 border-l-4 border-amber-500 p-6 mb-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-amber-900 dark:text-amber-100 mb-2">
                                Tax Audit Requirement
                            </h3>
                            <p class="text-amber-800 dark:text-amber-200">
                                The FTA may request the FAF as part of a tax audit. You must provide 
                                the file within 5 business days of the request. Failure to comply 
                                can result in penalties.
                            </p>
                        </div>
                    </div>
                </div>

                <p class="text-lg text-slate-600 dark:text-slate-400">
                    We recommend generating and reviewing your FAF periodically to ensure 
                    your data is complete and accurate before an audit request.
                </p>
            </div>

            <!-- Generating FAF Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Generating the FTA Audit File
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-8">
                    To generate the FAF in Verasol:
                </p>

                <div class="space-y-6">
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">1</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Go to FTA Audit File
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Navigate to <strong>VAT → FTA Audit File</strong>
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">2</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Select the Period
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Choose the date range for the audit (usually the tax period being audited)
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">3</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Review the Data
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Check the summary for any warnings or missing information
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">4</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Generate and Download
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Click "Generate FAF" to create the file in the required format
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAF Contents Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    What's Included in the FAF
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    The FTA Audit File contains the following information:
                </p>

                <div class="space-y-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-4">
                            Company Information
                        </h3>
                        <ul class="space-y-2 text-slate-600 dark:text-slate-400">
                            <li>• Company name and TRN</li>
                            <li>• Registered address</li>
                            <li>• Tax period covered</li>
                        </ul>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-4">
                            Sales Transactions
                        </h3>
                        <ul class="space-y-2 text-slate-600 dark:text-slate-400">
                            <li>• Invoice number and date</li>
                            <li>• Customer name and TRN</li>
                            <li>• Taxable amount and VAT</li>
                            <li>• VAT rate applied</li>
                        </ul>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-4">
                            Purchase Transactions
                        </h3>
                        <ul class="space-y-2 text-slate-600 dark:text-slate-400">
                            <li>• Bill/invoice number and date</li>
                            <li>• Vendor name and TRN</li>
                            <li>• Taxable amount and input VAT</li>
                            <li>• VAT recovery status</li>
                        </ul>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-4">
                            General Ledger
                        </h3>
                        <ul class="space-y-2 text-slate-600 dark:text-slate-400">
                            <li>• Chart of accounts</li>
                            <li>• Opening and closing balances</li>
                            <li>• Transaction details</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Format Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    File Format
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    The FTA specifies the exact format for the audit file:
                </p>

                <div class="rounded-2xl bg-slate-50 dark:bg-slate-800/50 p-6">
                    <div class="overflow-hidden rounded-xl border border-slate-200 dark:border-slate-700">
                        <table class="w-full">
                            <thead class="bg-slate-100 dark:bg-slate-700">
                                <tr>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-slate-900 dark:text-white">Requirement</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-slate-900 dark:text-white">Specification</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200 dark:divide-slate-700 bg-white dark:bg-slate-800">
                                <tr>
                                    <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">File Type</td>
                                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400">CSV (Comma Separated Values)</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Encoding</td>
                                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400">UTF-8</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Date Format</td>
                                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400">DD/MM/YYYY</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Decimal Separator</td>
                                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Period (.)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Data Validation Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Data Validation
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Verasol validates your data before generating the FAF:
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
                                Automatic Checks
                            </h3>
                            <p class="text-emerald-800 dark:text-emerald-200">
                                Verasol checks for missing TRNs, invalid dates, calculation errors, 
                                and other issues that could cause the FTA to reject your file or 
                                flag discrepancies.
                            </p>
                        </div>
                    </div>
                </div>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>TRN Validation:</strong> Checks all customer and vendor TRNs
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>VAT Calculation:</strong> Verifies VAT amounts match rates
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Date Range:</strong> Ensures all transactions fall within period
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Completeness:</strong> Identifies missing required fields
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
                            Generate Quarterly
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Generate the FAF after each VAT period to verify your data is complete 
                            and correct before an audit request
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Fix Issues Promptly
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Address any validation warnings immediately. Missing TRNs or incorrect 
                            VAT treatment can cause audit problems
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Keep Archives
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Store generated FAF files securely. You may need them for future 
                            reference or audit requests
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom Spacing -->
            <div class="h-20"></div>
        </div>
    </DocsLayout>
</template>
