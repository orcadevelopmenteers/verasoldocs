<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    Gratuity (End of Service)
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    Calculate end-of-service gratuity according to UAE Labor Law. 
                    Verasol automatically tracks accrued gratuity and calculates final settlements.
                </p>
            </div>

            <!-- Gratuity Rules Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    UAE Gratuity Calculation
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Gratuity is based on basic salary and years of service:
                </p>

                <div class="overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
                    <table class="w-full">
                        <thead class="bg-slate-50 dark:bg-slate-800">
                            <tr>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Service Period</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Rate</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">First 5 years</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">21 days basic salary per year</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">After 5 years</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">30 days basic salary per year</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="rounded-2xl bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 p-6 mt-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-blue-900 dark:text-blue-100 mb-2">
                                Maximum Cap
                            </h3>
                            <p class="text-blue-800 dark:text-blue-200">
                                Total gratuity cannot exceed 2 years' worth of basic salary.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Eligibility Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Eligibility
                </h2>

                <div class="grid gap-6">
                    <div class="rounded-2xl border border-emerald-200 dark:border-emerald-800 bg-emerald-50 dark:bg-emerald-900/20 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Full Gratuity
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Employees who complete 1+ years and are terminated by employer, 
                            or resign after 5+ years of service.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-amber-200 dark:border-amber-800 bg-amber-50 dark:bg-amber-900/20 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Partial Gratuity (Resignation)
                        </h3>
                        <ul class="text-slate-600 dark:text-slate-400 space-y-1">
                            <li>• 1-3 years: 1/3 of gratuity</li>
                            <li>• 3-5 years: 2/3 of gratuity</li>
                            <li>• 5+ years: Full gratuity</li>
                        </ul>
                    </div>

                    <div class="rounded-2xl border border-red-200 dark:border-red-800 bg-red-50 dark:bg-red-900/20 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            No Gratuity
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Employees terminated for gross misconduct (Article 120) or 
                            who complete less than 1 year of service.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Calculating in Verasol Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Calculating Gratuity
                </h2>

                <div class="space-y-6">
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">1</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Go to Final Settlement
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Navigate to <strong>Payroll → Final Settlement</strong>
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">2</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Select Employee
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Choose the departing employee and termination type
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">3</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Review Calculation
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                System auto-calculates gratuity, leave encashment, and deductions
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">4</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Process Payment
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Generate settlement and record payment
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
