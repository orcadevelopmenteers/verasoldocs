<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    Cheque Printing
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    Print cheques directly from Verasol with customizable templates for UAE banks. 
                    Streamline your payment process and maintain accurate cheque records.
                </p>
            </div>

            <!-- Setup Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Setting Up Cheque Printing
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-8">
                    Before printing cheques, configure your cheque template:
                </p>

                <div class="space-y-6">
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">1</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Go to Cheque Settings
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Navigate to <strong>Settings → Cheque Templates</strong>
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">2</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Select Your Bank
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Choose your bank from the list. Verasol has pre-configured templates 
                                for major UAE banks including ENBD, ADCB, FAB, Mashreq, and others.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">3</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Adjust Field Positions
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Fine-tune the position of date, payee name, amount (words), and amount (figures) 
                                to match your cheque book exactly.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">4</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Test Print
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Print a test cheque on plain paper and hold it over a real cheque to 
                                verify alignment.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Supported Banks Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Supported UAE Banks
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Pre-configured templates are available for:
                </p>

                <div class="grid md:grid-cols-3 gap-4">
                    <div class="rounded-xl border border-slate-200 dark:border-slate-700 p-4 text-center">
                        <span class="text-slate-900 dark:text-white font-medium">Emirates NBD</span>
                    </div>
                    <div class="rounded-xl border border-slate-200 dark:border-slate-700 p-4 text-center">
                        <span class="text-slate-900 dark:text-white font-medium">ADCB</span>
                    </div>
                    <div class="rounded-xl border border-slate-200 dark:border-slate-700 p-4 text-center">
                        <span class="text-slate-900 dark:text-white font-medium">First Abu Dhabi Bank</span>
                    </div>
                    <div class="rounded-xl border border-slate-200 dark:border-slate-700 p-4 text-center">
                        <span class="text-slate-900 dark:text-white font-medium">Mashreq Bank</span>
                    </div>
                    <div class="rounded-xl border border-slate-200 dark:border-slate-700 p-4 text-center">
                        <span class="text-slate-900 dark:text-white font-medium">Dubai Islamic Bank</span>
                    </div>
                    <div class="rounded-xl border border-slate-200 dark:border-slate-700 p-4 text-center">
                        <span class="text-slate-900 dark:text-white font-medium">RAK Bank</span>
                    </div>
                    <div class="rounded-xl border border-slate-200 dark:border-slate-700 p-4 text-center">
                        <span class="text-slate-900 dark:text-white font-medium">Commercial Bank of Dubai</span>
                    </div>
                    <div class="rounded-xl border border-slate-200 dark:border-slate-700 p-4 text-center">
                        <span class="text-slate-900 dark:text-white font-medium">HSBC</span>
                    </div>
                    <div class="rounded-xl border border-slate-200 dark:border-slate-700 p-4 text-center">
                        <span class="text-slate-900 dark:text-white font-medium">Custom Template</span>
                    </div>
                </div>
            </div>

            <!-- Printing a Cheque Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Printing a Cheque
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Cheques can be printed when making vendor payments:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Create a payment in <strong>Purchases → Make Payments</strong>
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Select "Cheque" as the payment method
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Enter the cheque number (or let Verasol auto-generate)
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Save the payment, then click "Print Cheque"
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Cheque Details Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    What Gets Printed
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Verasol prints the following on your cheque:
                </p>

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
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Date</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Payment date or post-dated date</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Pay To</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Vendor's name as registered</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Amount in Words</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Auto-converted (e.g., "Ten Thousand Dirhams Only")</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Amount in Figures</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Numeric amount with currency</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white font-medium">Account Payee</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Optional "A/C Payee Only" crossing</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Post-Dated Cheques Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Post-Dated Cheques (PDC)
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Verasol fully supports post-dated cheques:
                </p>

                <div class="rounded-2xl bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 p-6 mb-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-blue-900 dark:text-blue-100 mb-2">
                                PDC Tracking
                            </h3>
                            <p class="text-blue-800 dark:text-blue-200">
                                Post-dated cheques are tracked separately and don't affect your bank 
                                balance until the cheque date. Dashboard alerts remind you when PDCs 
                                are about to mature.
                            </p>
                        </div>
                    </div>
                </div>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            View all outstanding PDCs in the PDC Register
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Filter by maturity date to plan cash flow
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Mark cheques as cleared during bank reconciliation
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Cheque Register Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Cheque Register
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Track all cheques in one place:
                </p>

                <div class="grid gap-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Issued Cheques
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            View all cheques issued with status: Issued, Cleared, Cancelled, or Bounced
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Received Cheques
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Track customer cheques received with deposit and clearance status
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Cheque Number Tracking
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Auto-increment cheque numbers to ensure no gaps or duplicates
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bounced Cheques Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Handling Bounced Cheques
                </h2>

                <div class="rounded-2xl bg-amber-50 dark:bg-amber-900/20 border-l-4 border-amber-500 p-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-amber-900 dark:text-amber-100 mb-2">
                                When a Cheque Bounces
                            </h3>
                            <p class="text-amber-800 dark:text-amber-200 mb-4">
                                If a cheque bounces (issued or received), mark it as "Bounced" in the 
                                cheque register. Verasol will automatically:
                            </p>
                            <ul class="space-y-2 text-amber-800 dark:text-amber-200">
                                <li>• Reverse the original payment entry</li>
                                <li>• Reopen the related invoice/bill</li>
                                <li>• Record any bank charges if specified</li>
                            </ul>
                        </div>
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
                            Test Print First
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Always test your template on plain paper before printing on actual cheques
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Keep Cheque Numbers Sequential
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Enter the starting cheque number for each cheque book to maintain proper tracking
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                            Review Before Printing
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Double-check vendor name, amount, and date before printing – mistakes 
                            on cheques can be costly
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom Spacing -->
            <div class="h-20"></div>
        </div>
    </DocsLayout>
</template>
