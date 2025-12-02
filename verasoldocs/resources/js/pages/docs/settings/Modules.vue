<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    Modules
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    Enable or disable Verasol modules based on your business needs. 
                    Only pay for what you use and keep the interface clean.
                </p>
            </div>

            <!-- Available Modules Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Available Modules
                </h2>

                <div class="grid gap-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white">
                                Core Accounting
                            </h3>
                            <span class="text-xs font-medium px-2 py-1 rounded-full bg-emerald-100 text-emerald-700 dark:bg-emerald-900/50 dark:text-emerald-400">
                                Always On
                            </span>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400">
                            Chart of accounts, journal entries, and financial reports.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Sales & Receivables
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Customers, quotations, invoices, and payment collection.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Purchases & Payables
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Vendors, purchase orders, bills, and payment processing.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Inventory
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Items, warehouses, stock tracking, and adjustments.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Payroll
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Employees, attendance, salary processing, and WPS.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Fixed Assets
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Asset register, depreciation, and disposal tracking.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Enabling Modules Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Enabling a Module
                </h2>

                <div class="space-y-6">
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">1</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Go to Modules
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Navigate to <strong>Settings → Modules</strong>
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">2</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Toggle Module
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Click the toggle to enable or disable a module
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">3</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Refresh
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Menu updates automatically to show/hide module options
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Note Section -->
            <div class="mt-20">
                <div class="rounded-2xl bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 p-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-blue-900 dark:text-blue-100 mb-2">
                                Data Preservation
                            </h3>
                            <p class="text-blue-800 dark:text-blue-200">
                                Disabling a module hides it from the menu but does not delete 
                                any data. Re-enable anytime to access your records.
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
