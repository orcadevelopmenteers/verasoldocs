<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <DocsLayout title="AI Capabilities">
    <div class="max-w-4xl">
      <!-- Page Header -->
      <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">
        What AI Can Do
      </h1>
      
      <p class="mt-6 text-xl leading-relaxed text-slate-600 dark:text-slate-400">
        The Verasol AI assistant can help with a wide range of accounting tasks. Here's a comprehensive 
        list of what you can ask the AI to do.
      </p>

      <!-- Section: Reading Data -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">
          Reading Data & Reports
        </h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          The AI can access and summarize your business data:
        </p>

        <!-- Financial Summaries -->
        <div class="mt-10">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Financial Summaries</h3>
          <ul class="mt-4 space-y-3">
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"What's my current cash position?"</span>
            </li>
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"Show me this month's revenue"</span>
            </li>
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"What's my gross profit margin?"</span>
            </li>
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"How much do I owe in accounts payable?"</span>
            </li>
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"What are my total expenses for Q3?"</span>
            </li>
          </ul>
        </div>

        <!-- Receivables & Payables -->
        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Receivables & Payables</h3>
          <ul class="mt-4 space-y-3">
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"List all overdue invoices"</span>
            </li>
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"Which customers owe me money?"</span>
            </li>
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"What bills are due this week?"</span>
            </li>
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"Show me aging receivables"</span>
            </li>
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"Who hasn't paid in over 60 days?"</span>
            </li>
          </ul>
        </div>

        <!-- Customer & Vendor -->
        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Customer & Vendor Information</h3>
          <ul class="mt-4 space-y-3">
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"Find customer ABC Trading"</span>
            </li>
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"What's the balance for Emirates Supplies?"</span>
            </li>
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"Show me all invoices for Dubai Tech"</span>
            </li>
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"What's my total business with Global Corp?"</span>
            </li>
          </ul>
        </div>
      </section>

      <!-- Section: Creating Transactions -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">
          Creating Transactions
        </h2>

        <!-- Warning Box -->
        <div class="mt-8 rounded-2xl border-l-4 border-amber-400 bg-amber-50 p-6 dark:bg-amber-900/20">
          <p class="text-lg text-amber-800 dark:text-amber-400">
            <strong>⚠️ Review Required:</strong> The AI will always show you what it's about to create 
            and ask for confirmation before making changes. Always review the details carefully.
          </p>
        </div>

        <!-- Invoices -->
        <div class="mt-10">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Invoices</h3>
          <ul class="mt-4 space-y-3">
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"Create an invoice for [customer] for [amount]"</span>
            </li>
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"Invoice ABC Trading AED 5,000 for consulting services"</span>
            </li>
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"Create a new invoice with 3 line items..."</span>
            </li>
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"Generate invoice for maintenance contract renewal"</span>
            </li>
          </ul>
        </div>

        <!-- Bills & Expenses -->
        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Bills & Expenses</h3>
          <ul class="mt-4 space-y-3">
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"Record a bill from Office Supplies Co for AED 800"</span>
            </li>
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"Enter an expense for office rent"</span>
            </li>
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"Add electricity bill for December"</span>
            </li>
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"Create expense entry for travel costs"</span>
            </li>
          </ul>
        </div>

        <!-- Journal Entries -->
        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Journal Entries</h3>
          <ul class="mt-4 space-y-3">
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"Create a journal entry for depreciation"</span>
            </li>
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"Record accrued salaries for December"</span>
            </li>
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"Make adjusting entry for prepaid expenses"</span>
            </li>
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"Enter month-end accruals"</span>
            </li>
          </ul>
        </div>

        <!-- Payments -->
        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Payments</h3>
          <ul class="mt-4 space-y-3">
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"Record payment received from [customer]"</span>
            </li>
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"Apply payment of AED 10,000 to Invoice INV-2024-0089"</span>
            </li>
            <li class="flex items-center gap-3">
              <span class="rounded-lg bg-slate-100 px-3 py-1.5 font-mono text-sm text-slate-700 dark:bg-slate-800 dark:text-slate-300">"Record check payment to supplier"</span>
            </li>
          </ul>
        </div>
      </section>

      <!-- Section: More Capabilities -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">
          More Capabilities
        </h2>

        <div class="mt-10 grid gap-10 md:grid-cols-2">
          <div>
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Bank Reconciliation</h3>
            <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                "Help me reconcile my bank statement"
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                "Match this transaction to a bill"
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                "What are my unreconciled transactions?"
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                "Show reconciliation status"
              </li>
            </ul>
          </div>

          <div>
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">VAT & Compliance</h3>
            <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                "Calculate my VAT liability for this quarter"
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                "Show me VAT summary"
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                "When is my VAT return due?"
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                "Explain UAE VAT rules for [situation]"
              </li>
            </ul>
          </div>

          <div>
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Reports & Analysis</h3>
            <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                "Generate trial balance"
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                "Show me profit and loss for this year"
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                "Compare this month vs last month"
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                "Analyze expense trends"
              </li>
            </ul>
          </div>

          <div>
            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Payroll Queries</h3>
            <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                "Show payroll summary for December"
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                "What's the total salary expense?"
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                "List employee leave balances"
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-emerald-500"></span>
                "Calculate end of service for [employee]"
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!-- Section: Natural Language -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">
          Natural Language Understanding
        </h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          The AI understands natural language, so you don't need to use exact phrases:
        </p>

        <div class="mt-8 overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
          <table class="w-full">
            <thead class="bg-slate-50 dark:bg-slate-800">
              <tr>
                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">What You Say</th>
                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">AI Understands</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
              <tr>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">"How much is ABC Trading good for?"</td>
                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Outstanding balance for customer ABC Trading</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">"Bill Dubai Tech 10k for web work"</td>
                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Create invoice for Dubai Tech, AED 10,000 for web services</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">"Who owes me?"</td>
                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">List customers with outstanding receivables</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-slate-700 dark:text-slate-300">"Am I profitable?"</td>
                <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Calculate net profit/loss</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <!-- Section: Context-Aware -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">
          Context-Aware Assistance
        </h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          The AI remembers context within a conversation, so you can have natural follow-up questions:
        </p>

        <div class="mt-8 space-y-4 rounded-2xl border border-slate-200 bg-slate-50 p-8 dark:border-slate-700 dark:bg-slate-800/50">
          <div class="flex items-start gap-4">
            <span class="rounded-lg bg-blue-100 px-3 py-1.5 text-sm font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">You</span>
            <p class="text-lg text-slate-700 dark:text-slate-300">"Show me invoices for ABC Trading"</p>
          </div>
          <div class="flex items-start gap-4">
            <span class="rounded-lg bg-emerald-100 px-3 py-1.5 text-sm font-medium text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">AI</span>
            <p class="text-lg italic text-slate-600 dark:text-slate-400">[Lists invoices for ABC Trading]</p>
          </div>
          <div class="flex items-start gap-4">
            <span class="rounded-lg bg-blue-100 px-3 py-1.5 text-sm font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">You</span>
            <p class="text-lg text-slate-700 dark:text-slate-300">"Which ones are overdue?"</p>
          </div>
          <div class="flex items-start gap-4">
            <span class="rounded-lg bg-emerald-100 px-3 py-1.5 text-sm font-medium text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">AI</span>
            <p class="text-lg italic text-slate-600 dark:text-slate-400">[Filters to show only overdue invoices for ABC Trading]</p>
          </div>
          <div class="flex items-start gap-4">
            <span class="rounded-lg bg-blue-100 px-3 py-1.5 text-sm font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">You</span>
            <p class="text-lg text-slate-700 dark:text-slate-300">"Send them a reminder email"</p>
          </div>
        </div>
      </section>

      <!-- Next Steps -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Next Steps</h2>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <Link href="/docs/ai-limitations" class="group block rounded-xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">AI Limitations</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Important limitations and what AI can't do</p>
          </Link>
          <Link href="/docs/ai-best-practices" class="group block rounded-xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Best Practices</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Tips for effective AI interactions</p>
          </Link>
        </div>
      </section>

      <!-- Bottom spacing -->
      <div class="h-20"></div>
    </div>
  </DocsLayout>
</template>
