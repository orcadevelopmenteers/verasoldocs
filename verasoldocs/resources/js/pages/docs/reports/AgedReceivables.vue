<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    Aged Receivables
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    Track outstanding customer invoices by age. This report helps you 
                    identify overdue payments and manage collections effectively.
                </p>
            </div>

            <!-- Aging Buckets Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Aging Buckets
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Outstanding amounts are categorized by days overdue:
                </p>

                <div class="overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
                    <table class="w-full">
                        <thead class="bg-slate-50 dark:bg-slate-800">
                            <tr>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Bucket</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Current</td>
                                <td class="px-6 py-4 text-emerald-600 dark:text-emerald-400">Not yet due</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">1-30 Days</td>
                                <td class="px-6 py-4 text-amber-600 dark:text-amber-400">Recently overdue</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">31-60 Days</td>
                                <td class="px-6 py-4 text-orange-600 dark:text-orange-400">Follow up required</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">61-90 Days</td>
                                <td class="px-6 py-4 text-red-600 dark:text-red-400">Escalate collection</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">90+ Days</td>
                                <td class="px-6 py-4 text-red-700 dark:text-red-500">Consider bad debt</td>
                            </tr>
                        </tbody>
                    </table>
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
                                Go to <strong>Reports → Aged Receivables</strong>
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">2</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Select As-of Date
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Choose the date for aging calculation (usually today)
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">3</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Filter (Optional)
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Filter by customer, salesperson, or amount range
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Using the Report Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Using the Report
                </h2>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Click on customer name to see invoice details
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Send payment reminders directly from the report
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Export to Excel for detailed analysis
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Schedule automatic weekly reports
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Bottom Spacing -->
            <div class="h-20"></div>
        </div>
    </DocsLayout>
</template>
