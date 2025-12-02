<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    Transfer Pricing
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    Document arm's length pricing for related party transactions. 
                    UAE Corporate Tax requires transfer pricing compliance for qualifying entities.
                </p>
            </div>

            <!-- What is Transfer Pricing Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    What is Transfer Pricing?
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Transfer pricing rules ensure that transactions between related parties 
                    are conducted at fair market value (arm's length price), preventing 
                    profit shifting between jurisdictions.
                </p>

                <div class="rounded-2xl bg-amber-50 dark:bg-amber-900/20 border border-amber-200 dark:border-amber-800 p-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-amber-900 dark:text-amber-100 mb-2">
                                UAE Requirement
                            </h3>
                            <p class="text-amber-800 dark:text-amber-200">
                                Companies with related party transactions exceeding AED 40 million 
                                must maintain transfer pricing documentation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Documentation Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Transfer Pricing Documentation
                </h2>

                <div class="grid gap-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Master File
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Overview of the multinational group's global business, 
                            organizational structure, and transfer pricing policies.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Local File
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Detailed information about specific related party transactions 
                            and the arm's length analysis for the UAE entity.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Verasol Features Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    How Verasol Helps
                </h2>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong class="text-slate-900 dark:text-white">Track Related Parties:</strong> 
                            Flag customers and vendors as related parties
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong class="text-slate-900 dark:text-white">Transaction Reports:</strong> 
                            Generate detailed reports of all related party transactions
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong class="text-slate-900 dark:text-white">Price Comparison:</strong> 
                            Compare related party prices to third-party transactions
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong class="text-slate-900 dark:text-white">Export Data:</strong> 
                            Provide data to your tax advisor for documentation
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Bottom Spacing -->
            <div class="h-20"></div>
        </div>
    </DocsLayout>
</template>
