<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    VAT Summary Report
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    Review VAT collected and paid for any period. This report provides 
                    a detailed breakdown that matches your VAT return boxes.
                </p>
            </div>

            <!-- Report Contents Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Report Contents
                </h2>

                <div class="grid gap-6">
                    <div class="rounded-2xl border border-emerald-200 dark:border-emerald-800 bg-emerald-50 dark:bg-emerald-900/20 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Output VAT (Sales)
                        </h3>
                        <ul class="text-slate-600 dark:text-slate-400 space-y-1">
                            <li>• Standard rated supplies (5%)</li>
                            <li>• Zero rated supplies</li>
                            <li>• Exempt supplies</li>
                            <li>• Reverse charge output</li>
                        </ul>
                    </div>

                    <div class="rounded-2xl border border-blue-200 dark:border-blue-800 bg-blue-50 dark:bg-blue-900/20 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Input VAT (Purchases)
                        </h3>
                        <ul class="text-slate-600 dark:text-slate-400 space-y-1">
                            <li>• Standard rated purchases</li>
                            <li>• Imports</li>
                            <li>• Reverse charge input</li>
                            <li>• Adjustments</li>
                        </ul>
                    </div>

                    <div class="rounded-2xl border border-purple-200 dark:border-purple-800 bg-purple-50 dark:bg-purple-900/20 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Net VAT
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Output VAT minus Input VAT = Amount payable to FTA (or refundable)
                        </p>
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
                                Go to <strong>Reports → VAT Summary</strong>
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">2</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Select Tax Period
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Choose your VAT period (quarterly or monthly)
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">3</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Drill Down
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Click any amount to see supporting transactions
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Reconciliation Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    VAT Reconciliation
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Before filing your VAT return:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Compare report totals with VAT return boxes
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Review transactions for correct tax group assignment
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Check for missing TRN numbers on invoices
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Export detailed report for auditor review
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Bottom Spacing -->
            <div class="h-20"></div>
        </div>
    </DocsLayout>
</template>
