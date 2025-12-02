<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    Tax Groups
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    Configure tax groups to handle different VAT rates and treatments. Tax groups 
                    ensure correct VAT calculation and proper categorization in your VAT return.
                </p>
            </div>

            <!-- UAE Tax Rates Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    UAE VAT Rates
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    The UAE has the following VAT treatments:
                </p>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="rounded-2xl border border-emerald-200 dark:border-emerald-800 bg-emerald-50 dark:bg-emerald-900/20 p-6">
                        <div class="text-3xl font-bold text-emerald-600 dark:text-emerald-400 mb-2">5%</div>
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Standard Rate
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Most goods and services sold in the UAE
                        </p>
                    </div>

                    <div class="rounded-2xl border border-blue-200 dark:border-blue-800 bg-blue-50 dark:bg-blue-900/20 p-6">
                        <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-2">0%</div>
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Zero Rate
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Exports, international transport, precious metals
                        </p>
                    </div>

                    <div class="rounded-2xl border border-purple-200 dark:border-purple-800 bg-purple-50 dark:bg-purple-900/20 p-6">
                        <div class="text-3xl font-bold text-purple-600 dark:text-purple-400 mb-2">Exempt</div>
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Exempt Supplies
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Financial services, residential property, bare land
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <div class="text-3xl font-bold text-slate-600 dark:text-slate-400 mb-2">N/A</div>
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Out of Scope
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Transactions not subject to UAE VAT
                        </p>
                    </div>
                </div>
            </div>

            <!-- Default Tax Groups Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Default Tax Groups
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Verasol comes pre-configured with standard UAE tax groups:
                </p>

                <div class="overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
                    <table class="w-full">
                        <thead class="bg-slate-50 dark:bg-slate-800">
                            <tr>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Tax Group</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Rate</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">VAT Box</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Standard Rate (Sales)</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">5%</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Box 1a</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Zero Rate (Sales)</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">0%</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Box 2</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Exempt (Sales)</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Exempt</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Box 3</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Standard Rate (Purchases)</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">5%</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Box 9</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Imports</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">5%</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Box 6</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Reverse Charge</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">5%</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Box 3 & 10</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Creating Tax Groups Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Creating a Tax Group
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-8">
                    To create a custom tax group:
                </p>

                <div class="space-y-6">
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">1</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Go to Tax Settings
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Navigate to <strong>Settings → Tax Groups</strong>
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">2</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Click "New Tax Group"
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Enter a name and description for the tax group
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">3</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Set the Rate
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Enter the tax percentage (5%, 0%, or specify exempt)
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">4</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Select VAT Return Box
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Choose which box on the VAT 201 form this tax group maps to
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">5</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Set Tax Accounts
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Specify the output VAT and input VAT accounts for posting
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Reverse Charge Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Reverse Charge Mechanism
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    The reverse charge mechanism applies to certain imports and services:
                </p>

                <div class="rounded-2xl bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 p-6 mb-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-blue-900 dark:text-blue-100 mb-2">
                                How Reverse Charge Works
                            </h3>
                            <p class="text-blue-800 dark:text-blue-200">
                                When you use a reverse charge tax group, Verasol automatically records 
                                both output VAT (as if you made a sale) and input VAT (as if you made 
                                a purchase). The net effect on your VAT return is often zero, but 
                                both must be reported.
                            </p>
                        </div>
                    </div>
                </div>

                <p class="text-lg text-slate-600 dark:text-slate-400">
                    Common reverse charge scenarios:
                </p>
                <ul class="mt-4 space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Services received from overseas suppliers
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Electronic services from non-UAE providers
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Certain imported goods
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Assigning Tax Groups Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Assigning Tax Groups
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Tax groups can be assigned at multiple levels:
                </p>

                <div class="grid gap-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Product/Service Level
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Set a default tax group for each product or service. This is used 
                            automatically when adding items to invoices or bills.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Customer/Vendor Level
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Set a default tax treatment for specific customers or vendors 
                            (e.g., overseas customers = zero rated).
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Transaction Level
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Override the tax group on individual line items when creating 
                            invoices or bills.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Best Practices Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Best Practices
                </h2>

                <div class="grid gap-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Use Standard Groups
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Use the pre-configured tax groups whenever possible. Only create 
                            custom groups if you have specific requirements.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Set Defaults on Products
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Configure default tax groups on your products and services to ensure 
                            consistent VAT treatment across all transactions.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Review Regularly
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Periodically review transactions to ensure the correct tax groups 
                            are being applied, especially after changes in tax legislation.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom Spacing -->
            <div class="h-20"></div>
        </div>
    </DocsLayout>
</template>
