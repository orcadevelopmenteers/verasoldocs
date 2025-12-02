<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    Warehouses
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    Manage multiple storage locations and track inventory across warehouses. 
                    Transfer stock between locations and monitor quantities per warehouse.
                </p>
            </div>

            <!-- Multi-Warehouse Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Multi-Warehouse Management
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Verasol supports unlimited warehouses, allowing you to:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Track stock quantities at each location separately
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Transfer inventory between warehouses
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Assign specific warehouses to sales or purchase transactions
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            View consolidated stock across all locations
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Creating Warehouse Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Creating a Warehouse
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-8">
                    To create a new warehouse:
                </p>

                <div class="space-y-6">
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">1</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Navigate to Warehouses
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Go to <strong>Inventory → Warehouses</strong>
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">2</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Enter Details
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Provide warehouse name, code, and physical address
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">3</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Set as Default (Optional)
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Mark as default warehouse for new transactions
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Warehouse Fields Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Warehouse Information
                </h2>

                <div class="overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
                    <table class="w-full">
                        <thead class="bg-slate-50 dark:bg-slate-800">
                            <tr>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Field</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Description</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Name</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Display name for the warehouse</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Code</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Short code for quick reference (e.g., WH-DXB)</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Address</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Physical location of the warehouse</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Contact</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Manager or contact person details</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Is Default</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Pre-selected warehouse for new transactions</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Stock by Warehouse Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Viewing Stock by Warehouse
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Access warehouse-specific stock information:
                </p>

                <div class="grid gap-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Warehouse Stock Report
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            View all items and quantities at a specific warehouse location.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Item Availability
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Check stock levels for a specific item across all warehouses.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom Spacing -->
            <div class="h-20"></div>
        </div>
    </DocsLayout>
</template>
