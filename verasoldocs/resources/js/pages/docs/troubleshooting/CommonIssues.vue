<template>
    <DocsLayout>
        <div class="max-w-4xl">
            <!-- Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-4">
                    Common Issues
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400">
                    Solutions to frequently encountered problems in Verasol. Find quick fixes for the most common issues users face.
                </p>
            </div>

            <!-- Login & Access Issues -->
            <section class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Login & Access Issues
                </h2>

                <div class="space-y-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-3">
                            Cannot Login - Invalid Credentials
                        </h3>
                        <p class="text-lg text-slate-600 dark:text-slate-400 mb-4">
                            Getting "Invalid credentials" error even with correct password.
                        </p>
                        <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                            <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Solutions:</p>
                            <ul class="space-y-2 text-slate-600 dark:text-slate-400">
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Check Caps Lock - passwords are case-sensitive</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Clear browser cache and cookies</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Try a different browser or incognito mode</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Use "Forgot Password" to reset your password</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Contact your administrator - account may be locked</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-3">
                            Session Expired Frequently
                        </h3>
                        <p class="text-lg text-slate-600 dark:text-slate-400 mb-4">
                            Getting logged out too frequently or session timeout errors.
                        </p>
                        <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                            <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Solutions:</p>
                            <ul class="space-y-2 text-slate-600 dark:text-slate-400">
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Enable "Remember Me" when logging in</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Check browser settings - ensure cookies are allowed</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Disable VPN or proxy that may interfere with sessions</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Admin can increase session timeout in Settings → Security</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-3">
                            Access Denied to Module
                        </h3>
                        <p class="text-lg text-slate-600 dark:text-slate-400 mb-4">
                            Cannot access certain modules or features.
                        </p>
                        <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                            <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Solutions:</p>
                            <ul class="space-y-2 text-slate-600 dark:text-slate-400">
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Your role may not have permissions - contact administrator</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Module may not be enabled - check Settings → Modules</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Subscription may not include this feature</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Invoice & Billing Issues -->
            <section class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Invoice & Billing Issues
                </h2>

                <div class="space-y-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-3">
                            Invoice Number Already Exists
                        </h3>
                        <p class="text-lg text-slate-600 dark:text-slate-400 mb-4">
                            Error when creating invoice - number already in use.
                        </p>
                        <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                            <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Solutions:</p>
                            <ul class="space-y-2 text-slate-600 dark:text-slate-400">
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Use auto-generated numbers instead of manual entry</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Check Settings → Invoice Settings for numbering sequence</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Reset the sequence number if needed (admin only)</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-3">
                            Cannot Edit Posted Invoice
                        </h3>
                        <p class="text-lg text-slate-600 dark:text-slate-400 mb-4">
                            Need to modify an invoice that's already been posted.
                        </p>
                        <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                            <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Solutions:</p>
                            <ul class="space-y-2 text-slate-600 dark:text-slate-400">
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Issue a Credit Note to reverse the original invoice</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Create a new correct invoice</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>For minor fixes, use the "Adjustment" feature if available</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-4 bg-amber-50 dark:bg-amber-900/20 border-l-4 border-amber-500 p-4 rounded-r-xl">
                            <p class="text-amber-800 dark:text-amber-200">
                                <strong>Note:</strong> Posted invoices cannot be edited to maintain audit trail integrity. This is by design for UAE compliance.
                            </p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-3">
                            VAT Not Calculating Correctly
                        </h3>
                        <p class="text-lg text-slate-600 dark:text-slate-400 mb-4">
                            VAT amount seems incorrect on invoices.
                        </p>
                        <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                            <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Check these settings:</p>
                            <ul class="space-y-2 text-slate-600 dark:text-slate-400">
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Verify tax group assigned to items (5% standard, 0% exempt, etc.)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Check if prices are set as inclusive or exclusive of VAT</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Review customer tax settings (domestic vs export)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Verify rounding settings in Company Settings</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Data & Reporting Issues -->
            <section class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Data & Reporting Issues
                </h2>

                <div class="space-y-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-3">
                            Trial Balance Not Balancing
                        </h3>
                        <p class="text-lg text-slate-600 dark:text-slate-400 mb-4">
                            Debits and credits don't match in Trial Balance report.
                        </p>
                        <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                            <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Investigation steps:</p>
                            <ul class="space-y-2 text-slate-600 dark:text-slate-400">
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">1.</span>
                                    <span>Run the Data Integrity Check in Settings → Maintenance</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">2.</span>
                                    <span>Check opening balances - they must be balanced</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">3.</span>
                                    <span>Look for suspended/incomplete journal entries</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">4.</span>
                                    <span>Contact support if issue persists after checks</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-3">
                            Report Shows Wrong Data
                        </h3>
                        <p class="text-lg text-slate-600 dark:text-slate-400 mb-4">
                            Reports don't match expected figures or source data.
                        </p>
                        <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                            <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Common causes:</p>
                            <ul class="space-y-2 text-slate-600 dark:text-slate-400">
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Date range filter not set correctly</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Branch/location filter excluding some data</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Draft vs Posted transactions - check filter settings</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Accrual vs Cash basis reporting selected</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-3">
                            Cannot Export to Excel/PDF
                        </h3>
                        <p class="text-lg text-slate-600 dark:text-slate-400 mb-4">
                            Export button not working or file not downloading.
                        </p>
                        <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                            <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Try these fixes:</p>
                            <ul class="space-y-2 text-slate-600 dark:text-slate-400">
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Allow pop-ups for Verasol in browser settings</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Check downloads folder - file may have downloaded</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Try a different browser (Chrome recommended)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Reduce date range if report is very large</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Performance Issues -->
            <section class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">
                    Performance Issues
                </h2>

                <div class="space-y-6">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-3">
                            Slow Loading Pages
                        </h3>
                        <p class="text-lg text-slate-600 dark:text-slate-400 mb-4">
                            Application feels sluggish or pages take long to load.
                        </p>
                        <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                            <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Performance tips:</p>
                            <ul class="space-y-2 text-slate-600 dark:text-slate-400">
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Clear browser cache and reload</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Use Chrome or Edge for best performance</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Reduce items per page in list views</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Use filters to narrow down large data sets</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Check your internet connection speed</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-3">
                            Timeout Errors
                        </h3>
                        <p class="text-lg text-slate-600 dark:text-slate-400 mb-4">
                            Getting timeout or connection errors during operations.
                        </p>
                        <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-4">
                            <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Solutions:</p>
                            <ul class="space-y-2 text-slate-600 dark:text-slate-400">
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Wait a moment and retry the operation</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Break large imports into smaller batches</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Avoid peak hours for heavy operations</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">•</span>
                                    <span>Check Verasol status page for any outages</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Quick Fixes Callout -->
            <div class="mt-16 bg-emerald-50 dark:bg-emerald-900/20 border-l-4 border-emerald-500 rounded-r-2xl p-6">
                <h3 class="text-lg font-semibold text-emerald-800 dark:text-emerald-200 mb-2">
                    Universal Quick Fixes
                </h3>
                <p class="text-emerald-700 dark:text-emerald-300 mb-4">
                    These steps resolve most common issues:
                </p>
                <ol class="space-y-2 text-emerald-700 dark:text-emerald-300">
                    <li class="flex items-start gap-2">
                        <span class="font-semibold">1.</span>
                        <span>Refresh the page (Ctrl+F5 for hard refresh)</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="font-semibold">2.</span>
                        <span>Clear browser cache and cookies</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="font-semibold">3.</span>
                        <span>Log out completely and log back in</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="font-semibold">4.</span>
                        <span>Try a different browser or incognito mode</span>
                    </li>
                </ol>
            </div>

            <!-- Bottom spacing -->
            <div class="h-20"></div>
        </div>
    </DocsLayout>
</template>

<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue';
</script>
