<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    WPS (Wage Protection System)
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    Generate UAE Central Bank compliant WPS files for salary disbursement 
                    through approved banks and exchange houses.
                </p>
            </div>

            <!-- What is WPS Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    What is WPS?
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    The Wage Protection System is a mandatory electronic salary transfer 
                    system in the UAE that ensures timely payment of wages to employees.
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
                                Compliance Requirement
                            </h3>
                            <p class="text-amber-800 dark:text-amber-200">
                                All UAE companies must pay salaries through WPS. Non-compliance 
                                can result in work permit blocks and penalties from MOHRE.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Generating WPS Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Generating WPS File
                </h2>

                <div class="space-y-6">
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">1</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Process Payroll
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Ensure monthly payroll is calculated and approved
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">2</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Go to WPS Export
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Navigate to <strong>Payroll → WPS → Generate File</strong>
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">3</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Select Payroll Period
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Choose the month and select employees to include
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">4</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Download SIF File
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Generate and download the Salary Information File (SIF)
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">5</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Upload to Bank
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Submit the SIF file through your bank's corporate portal
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Employee Requirements Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Employee Data Requirements
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Each employee must have:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong class="text-slate-900 dark:text-white">Labour Card Number:</strong> 
                            14-digit MOHRE work permit number
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong class="text-slate-900 dark:text-white">Bank Account/IBAN:</strong> 
                            For bank transfer recipients
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong class="text-slate-900 dark:text-white">Agent Code:</strong> 
                            For exchange house payments
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Bottom Spacing -->
            <div class="h-20"></div>
        </div>
    </DocsLayout>
</template>
