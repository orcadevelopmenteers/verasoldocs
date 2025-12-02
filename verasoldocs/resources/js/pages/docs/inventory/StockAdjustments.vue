<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    Stock Adjustments
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    Adjust inventory quantities when physical counts differ from system records. 
                    Stock adjustments ensure accuracy in inventory valuation and reporting.
                </p>
            </div>

            <!-- When to Adjust Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    When to Use Stock Adjustments
                </h2>

                <div class="grid gap-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Physical Count Differences
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            After a physical inventory count reveals discrepancies between 
                            actual and recorded quantities.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Damaged or Expired Goods
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Items that are no longer sellable due to damage, expiration, 
                            or obsolescence.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Theft or Loss
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Unaccounted inventory losses that need to be written off 
                            from the system.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Initial Stock Entry
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Recording opening stock when first setting up inventory 
                            in Verasol.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Creating Adjustment Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Creating a Stock Adjustment
                </h2>

                <div class="space-y-6">
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">1</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Navigate to Adjustments
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Go to <strong>Inventory → Stock Adjustment → New Adjustment</strong>
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">2</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Select Warehouse
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Choose the warehouse where the adjustment applies
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">3</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Add Items
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Select items and enter the adjustment quantity (positive to add, negative to reduce)
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">4</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Provide Reason
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Select or enter the reason for adjustment (required for audit trail)
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">5</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Submit Adjustment
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Review and confirm to update inventory and create journal entries
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accounting Impact Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Accounting Impact
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Stock adjustments automatically create journal entries:
                </p>

                <div class="rounded-2xl border border-amber-200 dark:border-amber-800 bg-amber-50 dark:bg-amber-900/20 p-6">
                    <h3 class="text-lg font-semibold text-amber-900 dark:text-amber-100 mb-3">
                        Negative Adjustment (Write-off)
                    </h3>
                    <p class="text-amber-800 dark:text-amber-200 mb-4">
                        Reduces inventory value and records expense:
                    </p>
                    <div class="font-mono text-sm text-amber-800 dark:text-amber-200">
                        <div>Dr. Inventory Adjustment Expense</div>
                        <div class="ml-4">Cr. Inventory Asset</div>
                    </div>
                </div>

                <div class="rounded-2xl border border-emerald-200 dark:border-emerald-800 bg-emerald-50 dark:bg-emerald-900/20 p-6 mt-6">
                    <h3 class="text-lg font-semibold text-emerald-900 dark:text-emerald-100 mb-3">
                        Positive Adjustment
                    </h3>
                    <p class="text-emerald-800 dark:text-emerald-200 mb-4">
                        Increases inventory value:
                    </p>
                    <div class="font-mono text-sm text-emerald-800 dark:text-emerald-200">
                        <div>Dr. Inventory Asset</div>
                        <div class="ml-4">Cr. Inventory Adjustment Account</div>
                    </div>
                </div>
            </div>

            <!-- Bottom Spacing -->
            <div class="h-20"></div>
        </div>
    </DocsLayout>
</template>
