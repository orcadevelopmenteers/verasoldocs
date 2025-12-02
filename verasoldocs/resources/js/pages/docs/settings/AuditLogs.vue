<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    Audit Logs
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    Track all user actions and system changes. Audit logs provide a complete 
                    history for compliance, troubleshooting, and accountability.
                </p>
            </div>

            <!-- What's Logged Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    What's Logged
                </h2>

                <div class="grid gap-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            User Actions
                        </h3>
                        <ul class="text-slate-600 dark:text-slate-400 space-y-1">
                            <li>• Login and logout events</li>
                            <li>• Records created, updated, or deleted</li>
                            <li>• Documents printed or exported</li>
                        </ul>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Financial Changes
                        </h3>
                        <ul class="text-slate-600 dark:text-slate-400 space-y-1">
                            <li>• Invoice and bill modifications</li>
                            <li>• Payment recordings</li>
                            <li>• Journal entry postings</li>
                        </ul>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            System Events
                        </h3>
                        <ul class="text-slate-600 dark:text-slate-400 space-y-1">
                            <li>• Settings changes</li>
                            <li>• User role modifications</li>
                            <li>• Period closings</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Viewing Logs Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Viewing Audit Logs
                </h2>

                <div class="space-y-6">
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">1</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Navigate to Audit Logs
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Go to <strong>Settings → Audit Logs</strong>
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">2</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Filter Results
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Filter by user, date range, action type, or module
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">3</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                View Details
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Click any entry to see before/after values for changes
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Log Entry Details Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Log Entry Details
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
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Timestamp</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Exact date and time of action</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">User</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Who performed the action</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Action</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Create, Update, Delete, Login, etc.</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Module</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Which part of the system</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">IP Address</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">User's network location</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Bottom Spacing -->
            <div class="h-20"></div>
        </div>
    </DocsLayout>
</template>
