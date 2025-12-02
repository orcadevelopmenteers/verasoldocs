<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <DocsLayout title="AI Best Practices">
    <div class="max-w-4xl">
      <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">AI Best Practices</h1>
      
      <p class="mt-6 text-xl leading-relaxed text-slate-600 dark:text-slate-400">
        Get the most out of the Verasol AI assistant while maintaining accuracy and safety. 
        These tips will help you work more effectively with AI.
      </p>

      <!-- Effective Prompting Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Effective Prompting</h2>

        <h3 class="mt-10 text-xl font-semibold text-slate-900 dark:text-white">Be Specific</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">The more specific your request, the better the AI can help:</p>

        <div class="mt-6 overflow-hidden rounded-xl border border-slate-200 dark:border-slate-700">
          <table class="w-full">
            <thead class="bg-slate-50 dark:bg-slate-800">
              <tr>
                <th class="px-6 py-4 text-left text-sm font-medium text-red-700 dark:text-red-400">❌ Vague</th>
                <th class="px-6 py-4 text-left text-sm font-medium text-emerald-700 dark:text-emerald-400">✅ Specific</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
              <tr>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">"Show me invoices"</td>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">"Show me unpaid invoices over 30 days old"</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">"Create a bill"</td>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">"Create a bill for AED 5,000 from Etisalat for December internet"</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">"How's the business doing?"</td>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">"What's my net profit this month vs last month?"</td>
              </tr>
            </tbody>
          </table>
        </div>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Include Context</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Provide relevant details in your request:</p>

        <ul class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Customer/Vendor names:</strong> "Create invoice for ABC Trading..."</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Amounts:</strong> "...for AED 15,000..."</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Dates:</strong> "...dated December 1st"</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Account references:</strong> "...post to Marketing Expenses"</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">VAT treatment:</strong> "...this is VAT exempt"</span>
          </li>
        </ul>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Use Natural Follow-ups</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">The AI remembers conversation context:</p>

        <div class="mt-6 rounded-xl border border-slate-200 p-6 dark:border-slate-700">
          <div class="space-y-4">
            <div class="flex items-start">
              <span class="mr-3 rounded-lg bg-blue-100 px-3 py-1 text-sm font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">You</span>
              <p class="text-slate-700 dark:text-slate-300">"Show me outstanding invoices for ABC Trading"</p>
            </div>
            <div class="flex items-start">
              <span class="mr-3 rounded-lg bg-emerald-100 px-3 py-1 text-sm font-medium text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">AI</span>
              <p class="text-slate-700 dark:text-slate-300">[Shows 3 invoices]</p>
            </div>
            <div class="flex items-start">
              <span class="mr-3 rounded-lg bg-blue-100 px-3 py-1 text-sm font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">You</span>
              <p class="text-slate-700 dark:text-slate-300">"What's the total?" ← AI understands you mean the 3 invoices</p>
            </div>
            <div class="flex items-start">
              <span class="mr-3 rounded-lg bg-blue-100 px-3 py-1 text-sm font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">You</span>
              <p class="text-slate-700 dark:text-slate-300">"Record a payment for the oldest one" ← AI knows which invoice</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Verification Habits Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Verification Habits</h2>

        <h3 class="mt-10 text-xl font-semibold text-slate-900 dark:text-white">Always Check Totals</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">When the AI provides financial summaries:</p>
        <ol class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">1</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Ask for the underlying transactions: "Show me the individual invoices"</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">2</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Cross-reference with actual reports in Verasol</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">3</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Use the AI as a starting point, not the final answer</span>
          </li>
        </ol>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Review Before Confirming</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">When creating transactions:</p>
        
        <div class="mt-8 rounded-2xl border-l-4 border-emerald-400 bg-emerald-50 p-6 dark:bg-emerald-900/20">
          <h4 class="text-lg font-semibold text-emerald-800 dark:text-emerald-300">✅ Verification Checklist</h4>
          <ul class="mt-4 space-y-2 text-emerald-700 dark:text-emerald-400">
            <li>☐ Customer/Vendor name is correct</li>
            <li>☐ Amount matches your intention</li>
            <li>☐ VAT is applied correctly</li>
            <li>☐ Date is appropriate</li>
            <li>☐ Account selection is correct</li>
            <li>☐ Description/memo is accurate</li>
          </ul>
        </div>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Start with Read-Only Tasks</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          If you're new to AI, start with queries that don't create transactions:
        </p>
        <ul class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Asking about balances</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Viewing invoice lists</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Getting report summaries</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">General accounting questions</span>
          </li>
        </ul>
      </section>

      <!-- Workflow Integration Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Workflow Integration</h2>

        <h3 class="mt-10 text-xl font-semibold text-slate-900 dark:text-white">Daily Tasks</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Great uses for AI in daily workflow:</p>
        <ul class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">"What's due today?" - Quick overview of bills and tasks</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">"Any payments received yesterday?" - Check incoming payments</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">"Which invoices should I follow up on?" - Overdue receivables</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">"What's my bank balance per the books?" - Cash position</span>
          </li>
        </ul>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Weekly/Monthly Tasks</h3>
        <ul class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">"Summarize this week's revenue" - Quick performance check</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">"What's my VAT position?" - Pre-return check</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">"Are there any unreconciled transactions?" - Month-end cleanup</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">"Show me expense breakdown by category" - Spend analysis</span>
          </li>
        </ul>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">Quick Data Entry</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">AI shines for quick, repetitive entries:</p>
        <ul class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">"Record payment received from ABC Trading, AED 5,000, check #1234"</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">"Create invoice for monthly retainer, Global Tech, AED 8,000"</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400">"Enter expense for taxi to client meeting, AED 85"</span>
          </li>
        </ul>
      </section>

      <!-- When NOT to Use AI Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">When NOT to Use AI</h2>

        <div class="mt-8 space-y-4">
          <div class="rounded-2xl border-l-4 border-red-400 bg-red-50 p-6 dark:bg-red-900/20">
            <h4 class="text-lg font-semibold text-red-800 dark:text-red-300">❌ Complex Transactions</h4>
            <p class="mt-2 text-red-700 dark:text-red-400">
              For multi-currency, inter-company, or complex allocations - use the regular interface
            </p>
          </div>
          
          <div class="rounded-2xl border-l-4 border-red-400 bg-red-50 p-6 dark:bg-red-900/20">
            <h4 class="text-lg font-semibold text-red-800 dark:text-red-300">❌ Bulk Operations</h4>
            <p class="mt-2 text-red-700 dark:text-red-400">
              Creating many transactions at once - use import/export features instead
            </p>
          </div>
          
          <div class="rounded-2xl border-l-4 border-red-400 bg-red-50 p-6 dark:bg-red-900/20">
            <h4 class="text-lg font-semibold text-red-800 dark:text-red-300">❌ Audit Preparation</h4>
            <p class="mt-2 text-red-700 dark:text-red-400">
              For audit work, use official reports - AI summaries aren't audit-grade
            </p>
          </div>
          
          <div class="rounded-2xl border-l-4 border-red-400 bg-red-50 p-6 dark:bg-red-900/20">
            <h4 class="text-lg font-semibold text-red-800 dark:text-red-300">❌ Critical Decisions</h4>
            <p class="mt-2 text-red-700 dark:text-red-400">
              Tax planning, compliance decisions - always consult professionals
            </p>
          </div>
        </div>
      </section>

      <!-- Troubleshooting Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Troubleshooting</h2>

        <h3 class="mt-10 text-xl font-semibold text-slate-900 dark:text-white">AI Gives Wrong Information</h3>
        <ol class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">1</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Ask for clarification: "Can you show me where that number comes from?"</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">2</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Rephrase your question more specifically</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">3</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Check the actual data in Verasol directly</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">4</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Start a new conversation if context is confused</span>
          </li>
        </ol>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">AI Doesn't Understand</h3>
        <ol class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">1</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Use more standard accounting terminology</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">2</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Break complex requests into smaller parts</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">3</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Provide more context about what you're trying to do</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">4</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Try rephrasing: "In other words, I want to..."</span>
          </li>
        </ol>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">AI Creates Wrong Transaction</h3>
        <ol class="mt-4 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">1</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Don't confirm/post the transaction</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">2</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Cancel or delete the draft</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">3</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Provide corrected details and try again</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">4</span>
            <span class="text-lg text-slate-600 dark:text-slate-400">Consider using the regular interface for complex transactions</span>
          </li>
        </ol>
      </section>

      <!-- Privacy & Security Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Privacy & Security</h2>

        <ul class="mt-6 space-y-3">
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Data stays secure:</strong> Your data is processed securely; conversations aren't stored by AI providers</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">API key protection:</strong> Your Anthropic API key is encrypted</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Audit logging:</strong> AI actions are logged for accountability</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
            <span class="text-lg text-slate-600 dark:text-slate-400"><strong class="text-slate-900 dark:text-white">Role-based access:</strong> AI respects user permissions</span>
          </li>
        </ul>
      </section>

      <!-- Summary Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Summary</h2>

        <div class="mt-8 grid gap-6 sm:grid-cols-3">
          <div class="rounded-2xl bg-emerald-50 p-6 dark:bg-emerald-900/20">
            <h4 class="text-lg font-semibold text-emerald-800 dark:text-emerald-300">Do</h4>
            <ul class="mt-4 space-y-2 text-emerald-700 dark:text-emerald-400">
              <li>✓ Be specific</li>
              <li>✓ Verify totals</li>
              <li>✓ Review before posting</li>
              <li>✓ Use for quick tasks</li>
            </ul>
          </div>
          <div class="rounded-2xl bg-amber-50 p-6 dark:bg-amber-900/20">
            <h4 class="text-lg font-semibold text-amber-800 dark:text-amber-300">Consider</h4>
            <ul class="mt-4 space-y-2 text-amber-700 dark:text-amber-400">
              <li>~ Context matters</li>
              <li>~ AI learns from clarity</li>
              <li>~ Balance speed vs accuracy</li>
              <li>~ Build trust gradually</li>
            </ul>
          </div>
          <div class="rounded-2xl bg-red-50 p-6 dark:bg-red-900/20">
            <h4 class="text-lg font-semibold text-red-800 dark:text-red-300">Don't</h4>
            <ul class="mt-4 space-y-2 text-red-700 dark:text-red-400">
              <li>✗ Trust blindly</li>
              <li>✗ Skip verification</li>
              <li>✗ Use for complex txns</li>
              <li>✗ Replace professionals</li>
            </ul>
          </div>
        </div>
      </section>

      <!-- Next Steps Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Next Steps</h2>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <Link href="/docs/ai-capabilities" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-lg dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">What AI Can Do</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Full list of AI capabilities</p>
          </Link>
          <Link href="/docs/ai-configuration" class="group block rounded-2xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-lg dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Configure AI</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Setup and settings</p>
          </Link>
        </div>
      </section>

      <div class="h-20"></div>
    </div>
  </DocsLayout>
</template>
