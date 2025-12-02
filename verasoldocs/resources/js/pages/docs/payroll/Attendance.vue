<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    Attendance
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    Track employee attendance, working hours, and overtime. Attendance data 
                    integrates with payroll for accurate salary calculations.
                </p>
            </div>

            <!-- Tracking Methods Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Attendance Tracking Methods
                </h2>

                <div class="grid gap-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Manual Entry
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            HR staff enters attendance records directly into the system 
                            based on sign-in sheets or timecards.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Biometric Import
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Import attendance data from biometric devices (fingerprint, 
                            face recognition) via Excel or CSV files.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Bulk Upload
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Upload monthly attendance for multiple employees at once 
                            using the provided template.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Recording Attendance Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Recording Attendance
                </h2>

                <div class="space-y-6">
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">1</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Select Period
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Choose the month and year for attendance entry
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">2</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Enter Days Worked
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Record present days, absent days, and half-days for each employee
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">3</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Add Overtime
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Record overtime hours worked (normal OT, weekend OT, holiday OT)
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">4</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Submit for Payroll
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Lock attendance for the period before processing payroll
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Overtime Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Overtime Calculations
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    UAE labor law overtime rates:
                </p>

                <div class="overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
                    <table class="w-full">
                        <thead class="bg-slate-50 dark:bg-slate-800">
                            <tr>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Type</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Rate</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Normal Overtime</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">125% (1.25x hourly rate)</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Night Overtime (9pm-4am)</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">150% (1.5x hourly rate)</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Weekend/Holiday</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">150% (1.5x hourly rate)</td>
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
