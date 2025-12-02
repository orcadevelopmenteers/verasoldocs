<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    Economic Substance
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    Meet UAE Economic Substance Regulations (ESR) requirements. 
                    Verasol helps you track and report the data needed for ESR compliance.
                </p>
            </div>

            <!-- What is ESR Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    What is Economic Substance?
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    UAE Economic Substance Regulations require companies conducting 
                    "Relevant Activities" to demonstrate adequate substance in the UAE.
                </p>

                <div class="rounded-2xl bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 p-6">
                    <h3 class="text-lg font-semibold text-blue-900 dark:text-blue-100 mb-3">
                        Relevant Activities
                    </h3>
                    <ul class="text-blue-800 dark:text-blue-200 space-y-1">
                        <li>• Banking, Insurance, Investment Fund Management</li>
                        <li>• Lease-Finance, Headquarters</li>
                        <li>• Shipping, Holding Company</li>
                        <li>• Intellectual Property, Distribution & Service Centres</li>
                    </ul>
                </div>
            </div>

            <!-- Substance Requirements Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Substance Requirements
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Companies must demonstrate:
                </p>

                <div class="grid gap-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Directed and Managed in UAE
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Board meetings held in UAE, strategic decisions made locally.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Adequate Employees
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Sufficient qualified full-time employees in the UAE.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Adequate Expenditure
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Operating expenses incurred in the UAE proportionate to activity.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Physical Assets
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Adequate physical assets (offices, equipment) in the UAE.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Verasol Helps Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    How Verasol Helps
                </h2>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong class="text-slate-900 dark:text-white">Employee Records:</strong> 
                            Track headcount and payroll for substance reporting
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong class="text-slate-900 dark:text-white">Expense Reports:</strong> 
                            Generate UAE operating expenditure summaries
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong class="text-slate-900 dark:text-white">Asset Register:</strong> 
                            Document physical assets located in UAE
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong class="text-slate-900 dark:text-white">Revenue Analysis:</strong> 
                            Break down income by activity type
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Filing Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    ESR Filing
                </h2>

                <div class="rounded-2xl bg-amber-50 dark:bg-amber-900/20 border border-amber-200 dark:border-amber-800 p-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-amber-900 dark:text-amber-100 mb-2">
                                Annual Notification & Report
                            </h3>
                            <p class="text-amber-800 dark:text-amber-200">
                                ESR notifications must be filed within 6 months of financial year end. 
                                The full ESR report (if required) is due within 12 months.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Spacing -->
            <div class="h-20"></div>
        </div>
    </DocsLayout>
</template>
