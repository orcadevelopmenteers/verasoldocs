<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    Leave Management
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    Manage employee leave requests, track balances, and ensure compliance 
                    with UAE labor law entitlements.
                </p>
            </div>

            <!-- Leave Types Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    UAE Leave Entitlements
                </h2>

                <div class="grid gap-6">
                    <div class="rounded-2xl border border-emerald-200 dark:border-emerald-800 bg-emerald-50 dark:bg-emerald-900/20 p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white">
                                Annual Leave
                            </h3>
                            <span class="text-emerald-600 dark:text-emerald-400 font-bold">30 days</span>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400">
                            Full pay after 1 year of service. 2 days/month if less than 1 year.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-blue-200 dark:border-blue-800 bg-blue-50 dark:bg-blue-900/20 p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white">
                                Sick Leave
                            </h3>
                            <span class="text-blue-600 dark:text-blue-400 font-bold">90 days</span>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400">
                            15 days full pay, 30 days half pay, 45 days unpaid per year.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-purple-200 dark:border-purple-800 bg-purple-50 dark:bg-purple-900/20 p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white">
                                Maternity Leave
                            </h3>
                            <span class="text-purple-600 dark:text-purple-400 font-bold">60 days</span>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400">
                            45 days full pay, 15 days half pay for female employees.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white">
                                Other Leave Types
                            </h3>
                        </div>
                        <ul class="text-slate-600 dark:text-slate-400 space-y-1">
                            <li>• Hajj Leave: 30 days (once during employment)</li>
                            <li>• Bereavement: 3-5 days depending on relation</li>
                            <li>• Paternity: 5 days</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Leave Request Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Processing Leave Requests
                </h2>

                <div class="space-y-6">
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">1</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Create Request
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Go to <strong>Payroll → Leave → New Request</strong>
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">2</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Select Details
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Choose employee, leave type, and date range
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">3</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Check Balance
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                System shows available balance and warns if insufficient
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">4</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Approve/Reject
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Manager reviews and approves or rejects the request
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Leave Balance Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Leave Balance Tracking
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Verasol automatically tracks:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Accrued leave based on service duration
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Leave taken and remaining balance
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Carry-forward from previous years
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Leave encashment on termination
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Bottom Spacing -->
            <div class="h-20"></div>
        </div>
    </DocsLayout>
</template>
