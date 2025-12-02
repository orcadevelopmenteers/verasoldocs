<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
</script>

<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Page Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">
                    Debit Notes
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                    A debit note is issued to a vendor when you return goods or when a vendor 
                    overcharged you. It reduces the amount you owe and adjusts your input VAT 
                    accordingly.
                </p>
            </div>

            <!-- What is a Debit Note Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    What is a Debit Note?
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    A debit note is the purchase-side equivalent of a credit note. While you 
                    issue credit notes to your customers, you issue debit notes to your vendors:
                </p>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="rounded-2xl bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 p-6">
                        <h3 class="text-lg font-semibold text-blue-900 dark:text-blue-100 mb-3">
                            Credit Note (Sales)
                        </h3>
                        <p class="text-blue-800 dark:text-blue-200">
                            You issue to customers to reduce what they owe you
                        </p>
                    </div>

                    <div class="rounded-2xl bg-emerald-50 dark:bg-emerald-900/20 border border-emerald-200 dark:border-emerald-800 p-6">
                        <h3 class="text-lg font-semibold text-emerald-900 dark:text-emerald-100 mb-3">
                            Debit Note (Purchases)
                        </h3>
                        <p class="text-emerald-800 dark:text-emerald-200">
                            You issue to vendors to reduce what you owe them
                        </p>
                    </div>
                </div>
            </div>

            <!-- When to Issue Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    When to Issue a Debit Note
                </h2>

                <div class="space-y-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-xl bg-red-50 dark:bg-red-900/30 flex items-center justify-center">
                                <svg class="w-5 h-5 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 15v-1a4 4 0 00-4-4H8m0 0l3 3m-3-3l3-3m9 14V5a2 2 0 00-2-2H6a2 2 0 00-2 2v16l4-2 4 2 4-2 4 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                    Returning Goods
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400">
                                    When you return defective, damaged, or unwanted goods to a vendor
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-xl bg-amber-50 dark:bg-amber-900/30 flex items-center justify-center">
                                <svg class="w-5 h-5 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                    Price Correction
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400">
                                    When the vendor overcharged you and agrees to a price reduction
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-xl bg-purple-50 dark:bg-purple-900/30 flex items-center justify-center">
                                <svg class="w-5 h-5 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                    Quantity Shortage
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400">
                                    When you received fewer items than what was invoiced
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-xl bg-green-50 dark:bg-green-900/30 flex items-center justify-center">
                                <svg class="w-5 h-5 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                    Volume Discount
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400">
                                    When you qualify for a retrospective discount after meeting purchase targets
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Creating a Debit Note Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Creating a Debit Note
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-8">
                    Follow these steps to create a debit note:
                </p>

                <div class="space-y-6">
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">1</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Navigate to Debit Notes
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Go to <strong>Purchases → Debit Notes → New Debit Note</strong>
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">2</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Select the Vendor
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Choose the vendor you're issuing the debit note to
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">3</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Reference the Original Bill
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Select the original purchase bill this debit note relates to. This links 
                                the documents for audit purposes.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">4</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Add Line Items
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Enter the items being returned or the amount being credited. Include the 
                                same VAT rate as the original purchase.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center">
                            <span class="text-lg font-bold text-emerald-600 dark:text-emerald-400">5</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                                Add the Reason
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400">
                                Enter a clear reason for the debit note. This is important for FTA 
                                compliance and audit trails.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- VAT Impact Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    VAT Impact
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Debit notes affect your VAT return in the following way:
                </p>

                <div class="rounded-2xl bg-amber-50 dark:bg-amber-900/20 border-l-4 border-amber-500 p-6 mb-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-amber-900 dark:text-amber-100 mb-2">
                                Input VAT Adjustment
                            </h3>
                            <p class="text-amber-800 dark:text-amber-200">
                                When you issue a debit note, it <strong>reduces</strong> your input VAT. 
                                This is because you're no longer paying for those goods/services, so you 
                                can't claim the VAT back.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
                    <table class="w-full">
                        <thead class="bg-slate-50 dark:bg-slate-800">
                            <tr>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Scenario</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Effect on Input VAT</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white">Original Bill: AED 1,050 (incl. 5% VAT)</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">+50 AED Input VAT claimed</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-900 dark:text-white">Debit Note: AED 210 (incl. 5% VAT)</td>
                                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">-10 AED Input VAT adjustment</td>
                            </tr>
                            <tr class="bg-emerald-50 dark:bg-emerald-900/20">
                                <td class="px-6 py-4 text-emerald-900 dark:text-emerald-100 font-semibold">Net Effect</td>
                                <td class="px-6 py-4 text-emerald-700 dark:text-emerald-300 font-semibold">+40 AED Net Input VAT</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Applying to Bills Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Applying Debit Notes to Bills
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    Once created, a debit note creates a credit balance with the vendor. You can apply 
                    this credit in several ways:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Apply to Outstanding Bills:</strong> Offset against unpaid bills from the same vendor
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Future Bills:</strong> Keep as credit to use against future purchases
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            <strong>Request Refund:</strong> If the vendor refunds the amount, record a 
                            payment receipt
                        </span>
                    </li>
                </ul>
            </div>

            <!-- FTA Requirements Section -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    FTA Requirements
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                    While debit notes are issued by you (the buyer), the vendor should acknowledge them. 
                    For FTA audit purposes, ensure you:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Reference the original bill/invoice number
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Include a clear reason for the debit note
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Match the VAT rate to the original transaction
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-2 h-2 mt-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-lg text-slate-600 dark:text-slate-400">
                            Keep written confirmation from the vendor (email acceptance is sufficient)
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Bottom Spacing -->
            <div class="h-20"></div>
        </div>
    </DocsLayout>
</template>
