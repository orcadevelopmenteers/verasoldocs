<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    VAT Returns
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    Prepare and file your UAE VAT returns with confidence. Verasol automatically 
                    calculates all VAT figures and generates the FTA-compliant VAT 201 form.
                </p>
            </div>

            <!-- UAE VAT Overview Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    UAE VAT Overview
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    VAT in the UAE is administered by the Federal Tax Authority (FTA):
                </p>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Standard Rate
                        </h3>
                        <p class="text-3xl font-bold text-emerald-600 dark:text-emerald-400 mb-2">5%</p>
                        <p class="text-slate-600 dark:text-slate-400">
                            Applied to most goods and services
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Filing Frequency
                        </h3>
                        <p class="text-3xl font-bold text-emerald-600 dark:text-emerald-400 mb-2">Quarterly</p>
                        <p class="text-slate-600 dark:text-slate-400">
                            Most businesses (monthly for large businesses)
                        </p>
                    </div>
                </div>
            </div>

            <!-- VAT Return Preparation Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Preparing Your VAT Return
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-8">
                    Verasol makes VAT return preparation simple:
                </p>

                <div class="space-y-6">
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">1</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Navigate to VAT Returns
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Go to <strong>VAT → VAT Returns</strong> and select "Prepare New Return"
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
                                Choose the VAT period to prepare (quarterly or monthly based on your registration)
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">3</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Review Calculated Figures
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Verasol automatically calculates all amounts from your transactions
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">4</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Drill Down to Verify
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Click any figure to see the underlying transactions that make up that amount
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">5</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Generate VAT 201 Form
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Export the FTA-formatted VAT 201 form ready for submission
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- VAT 201 Boxes Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    VAT 201 Form Boxes
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Verasol populates all boxes of the VAT 201 form:
                </p>

                <div class="overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
                    <table class="w-full">
                        <thead class="bg-slate-50 dark:bg-slate-800">
                            <tr>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Box</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Description</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">1a</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Standard rated supplies in UAE</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">1b</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Tax Refunds for Tourists</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">2</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Zero-rated supplies</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">3</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Exempt supplies</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">4</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Goods imported into UAE</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">5</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Adjustments to goods imported</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">6</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Standard rated expenses</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">7</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Supplies subject to reverse charge</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- AI Assistance Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    AI-Powered VAT Review
                </h2>

                <div class="rounded-2xl bg-emerald-50 dark:bg-emerald-900/20 border-l-4 border-emerald-500 p-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-emerald-900 dark:text-emerald-100 mb-2">
                                Smart VAT Analysis
                            </h3>
                            <p class="text-emerald-800 dark:text-emerald-200">
                                Verasol's AI assistant can review your VAT return and flag potential 
                                issues: missing TRNs, unusual patterns, possible misclassifications, 
                                and more. Ask the AI to "review my VAT return" before filing.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filing Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Filing Your Return
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    After preparing your return in Verasol:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Export the VAT 201 summary report
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Log in to the FTA portal (EmaraTax)
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Enter the figures from Verasol into the FTA form
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Submit and pay any VAT due
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Mark the return as filed in Verasol to lock the period
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Deadlines Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Filing Deadlines
                </h2>

                <div class="rounded-2xl bg-amber-50 dark:bg-amber-900/20 border-l-4 border-amber-500 p-6 mb-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-amber-900 dark:text-amber-100 mb-2">
                                28 Days After Period End
                            </h3>
                            <p class="text-amber-800 dark:text-amber-200">
                                VAT returns must be filed and paid within 28 days after the end of 
                                the tax period. Late filing incurs penalties of AED 1,000 for the 
                                first offense and AED 2,000 for repeat offenses within 24 months.
                            </p>
                        </div>
                    </div>
                </div>

                <p class="text-lg text-slate-600 dark:text-slate-400">
                    Verasol displays upcoming filing deadlines on your dashboard.
                </p>
            </div>

            <!-- Amendments Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Amending a Filed Return
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    If you need to correct a previously filed return:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Submit a voluntary disclosure to the FTA if the error exceeds AED 10,000
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Errors under AED 10,000 can be adjusted in the next VAT return
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Verasol tracks adjustments and includes them in the appropriate boxes
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
                            Prepare Early
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Start preparing your return a week before the deadline. This gives 
                            time to investigate any discrepancies.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Verify TRNs
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Ensure all vendor TRNs are valid. Invalid TRNs can result in 
                            disallowed input VAT claims.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Keep Supporting Documents
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Maintain all tax invoices and supporting documents for at least 
                            5 years as required by FTA.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom Spacing -->
            <div class="h-20"></div>
        </div>
    </DocsLayout>
</template>
