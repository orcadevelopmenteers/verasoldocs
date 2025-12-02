<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    Cash Flow Report
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    Track money flowing in and out of your business. The cash flow report 
                    helps you understand liquidity and plan for future cash needs.
                </p>
            </div>

            <!-- Cash Flow Categories Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Cash Flow Categories
                </h2>

                <div class="grid gap-6">
                    <div class="rounded-2xl border border-emerald-200 dark:border-emerald-800 bg-emerald-50 dark:bg-emerald-900/20 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Operating Activities
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400 mb-3">
                            Cash from day-to-day business operations:
                        </p>
                        <ul class="text-slate-600 dark:text-slate-400 space-y-1 text-sm">
                            <li>• Customer payments received</li>
                            <li>• Supplier payments made</li>
                            <li>• Salaries and wages paid</li>
                            <li>• Operating expenses</li>
                        </ul>
                    </div>

                    <div class="rounded-2xl border border-blue-200 dark:border-blue-800 bg-blue-50 dark:bg-blue-900/20 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Investing Activities
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400 mb-3">
                            Cash for long-term assets:
                        </p>
                        <ul class="text-slate-600 dark:text-slate-400 space-y-1 text-sm">
                            <li>• Purchase of equipment/assets</li>
                            <li>• Sale of fixed assets</li>
                            <li>• Investment purchases/sales</li>
                        </ul>
                    </div>

                    <div class="rounded-2xl border border-purple-200 dark:border-purple-800 bg-purple-50 dark:bg-purple-900/20 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Financing Activities
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400 mb-3">
                            Cash from funding sources:
                        </p>
                        <ul class="text-slate-600 dark:text-slate-400 space-y-1 text-sm">
                            <li>• Loan proceeds received</li>
                            <li>• Loan repayments made</li>
                            <li>• Owner capital contributions</li>
                            <li>• Dividends paid</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Running Report Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Running the Report
                </h2>

                <div class="space-y-6">
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">1</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Navigate to Reports
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Go to <strong>Reports → Cash Flow Statement</strong>
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">2</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Select Date Range
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Choose the period (month, quarter, or year)
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">3</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Generate Report
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                View on screen or export to PDF/Excel
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Understanding Results Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Understanding Results
                </h2>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong class="text-slate-900 dark:text-white">Positive cash flow:</strong> 
                            More money coming in than going out
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong class="text-slate-900 dark:text-white">Negative cash flow:</strong> 
                            May indicate need for financing or cost reduction
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong class="text-slate-900 dark:text-white">Ending balance:</strong> 
                            Should match your bank accounts total
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Bottom Spacing -->
            <div class="h-20"></div>
        </div>
    </DocsLayout>
</template>
