<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <DocsLayout title="AI Limitations">
    <div class="max-w-4xl">
      <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">AI Limitations & Important Warnings</h1>
      
      <p class="mt-6 text-xl leading-relaxed text-slate-600 dark:text-slate-400">
        While the AI assistant is a powerful tool, it has significant limitations that you must understand. 
        This page explains what the AI cannot do and when you should not rely on it.
      </p>

      <div class="mt-8 rounded-2xl border-l-4 border-red-400 bg-red-50 p-6 dark:bg-red-900/20">
        <div class="flex items-center">
          <svg class="h-8 w-8 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
          </svg>
          <h2 class="ml-3 text-xl font-bold text-red-800 dark:text-red-300">AI Can Make Mistakes</h2>
        </div>
        <p class="mt-3 text-lg text-red-700 dark:text-red-400">
          The AI assistant uses language models that can generate incorrect, incomplete, or misleading 
          information. <strong>Never blindly trust AI output for financial decisions.</strong> Always 
          verify important data against your actual records.
        </p>
      </div>

      <!-- Critical Limitations Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Critical Limitations</h2>

        <h3 class="mt-10 text-xl font-semibold text-slate-900 dark:text-white">1. Not a Replacement for Professional Advice</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          The AI is <strong>not</strong> a certified accountant, tax advisor, or legal professional. 
          For important financial decisions, tax planning, or legal compliance matters, always consult 
          with qualified professionals.
        </p>

        <div class="mt-8 rounded-2xl border-l-4 border-red-400 bg-red-50 p-6 dark:bg-red-900/20">
          <h4 class="font-semibold text-red-800 dark:text-red-300">❌ Do NOT rely on AI for:</h4>
          <ul class="mt-4 space-y-3 text-lg text-red-700 dark:text-red-400">
            <li class="flex items-start">
              <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-red-500"></span>
              Tax filing decisions
            </li>
            <li class="flex items-start">
              <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-red-500"></span>
              Legal compliance advice
            </li>
            <li class="flex items-start">
              <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-red-500"></span>
              Complex VAT treatment decisions
            </li>
            <li class="flex items-start">
              <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-red-500"></span>
              Financial audit preparation
            </li>
            <li class="flex items-start">
              <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-red-500"></span>
              Business valuation
            </li>
            <li class="flex items-start">
              <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-red-500"></span>
              Investment decisions
            </li>
          </ul>
        </div>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">2. Data Accuracy Not Guaranteed</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          While the AI accesses your actual data, it may:
        </p>
        <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-slate-400"></span>
            Misinterpret data or calculations
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-slate-400"></span>
            Miss relevant transactions
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-slate-400"></span>
            Make arithmetic errors in summaries
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-slate-400"></span>
            Confuse similar customer or account names
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-slate-400"></span>
            Provide incomplete information
          </li>
        </ul>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          <strong>Always verify totals and important figures</strong> by checking the actual reports 
          and records in Verasol.
        </p>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">3. Hallucinations</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          AI models can "hallucinate" - generate plausible-sounding but completely false information. 
          The AI might:
        </p>
        <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-slate-400"></span>
            Invent customers or invoices that don't exist
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-slate-400"></span>
            Quote incorrect VAT rates or regulations
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-slate-400"></span>
            Misstate your financial position
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-slate-400"></span>
            Reference transactions that never happened
          </li>
        </ul>

        <div class="mt-8 rounded-2xl border-l-4 border-amber-400 bg-amber-50 p-6 dark:bg-amber-900/20">
          <p class="text-lg text-amber-800 dark:text-amber-400">
            <strong>💡 Tip:</strong> If something the AI says doesn't match your expectation, verify it 
            directly. Ask follow-up questions like "Show me the specific invoice number" or "Which 
            account does this appear in?"
          </p>
        </div>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">4. Time and Knowledge Cutoffs</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          The AI's knowledge has limitations:
        </p>
        <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-slate-400"></span>
            General knowledge has a training cutoff date
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-slate-400"></span>
            May not know about very recent regulation changes
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-slate-400"></span>
            Cannot access real-time external information (e.g., exchange rates)
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-slate-400"></span>
            May have outdated information about UAE tax laws
          </li>
        </ul>

        <h3 class="mt-12 text-xl font-semibold text-slate-900 dark:text-white">5. Complex Transactions</h3>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          The AI may struggle with:
        </p>
        <ul class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-slate-400"></span>
            Multi-currency transactions and conversions
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-slate-400"></span>
            Complex multi-party transactions
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-slate-400"></span>
            Partial payments across multiple invoices
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-slate-400"></span>
            Sophisticated accounting treatments
          </li>
          <li class="flex items-start">
            <span class="mr-3 mt-2 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-slate-400"></span>
            Industry-specific accounting rules
          </li>
        </ul>
      </section>

      <!-- What AI Cannot Do Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">What AI Cannot Do</h2>

        <div class="mt-8 overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
          <table class="w-full">
            <thead class="bg-slate-50 dark:bg-slate-800">
              <tr>
                <th class="px-4 py-3 text-left text-sm font-medium text-slate-900 dark:text-white">Action</th>
                <th class="px-4 py-3 text-left text-sm font-medium text-slate-900 dark:text-white">Status</th>
                <th class="px-4 py-3 text-left text-sm font-medium text-slate-900 dark:text-white">Why</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
              <tr>
                <td class="px-4 py-3 text-sm text-slate-700 dark:text-slate-300">Post journal entries</td>
                <td class="px-4 py-3 text-sm"><span class="rounded bg-red-100 px-2 py-0.5 text-xs font-medium text-red-800 dark:bg-red-900 dark:text-red-300">Cannot</span></td>
                <td class="px-4 py-3 text-sm text-slate-600 dark:text-slate-400">Posting is a manual confirmation step</td>
              </tr>
              <tr>
                <td class="px-4 py-3 text-sm text-slate-700 dark:text-slate-300">Delete records</td>
                <td class="px-4 py-3 text-sm"><span class="rounded bg-red-100 px-2 py-0.5 text-xs font-medium text-red-800 dark:bg-red-900 dark:text-red-300">Cannot</span></td>
                <td class="px-4 py-3 text-sm text-slate-600 dark:text-slate-400">Deletion requires manual confirmation</td>
              </tr>
              <tr>
                <td class="px-4 py-3 text-sm text-slate-700 dark:text-slate-300">File VAT returns</td>
                <td class="px-4 py-3 text-sm"><span class="rounded bg-red-100 px-2 py-0.5 text-xs font-medium text-red-800 dark:bg-red-900 dark:text-red-300">Cannot</span></td>
                <td class="px-4 py-3 text-sm text-slate-600 dark:text-slate-400">Must be done through FTA portal</td>
              </tr>
              <tr>
                <td class="px-4 py-3 text-sm text-slate-700 dark:text-slate-300">Access bank accounts</td>
                <td class="px-4 py-3 text-sm"><span class="rounded bg-red-100 px-2 py-0.5 text-xs font-medium text-red-800 dark:bg-red-900 dark:text-red-300">Cannot</span></td>
                <td class="px-4 py-3 text-sm text-slate-600 dark:text-slate-400">No direct bank connections</td>
              </tr>
              <tr>
                <td class="px-4 py-3 text-sm text-slate-700 dark:text-slate-300">Send actual emails</td>
                <td class="px-4 py-3 text-sm"><span class="rounded bg-amber-100 px-2 py-0.5 text-xs font-medium text-amber-800 dark:bg-amber-900 dark:text-amber-300">Limited</span></td>
                <td class="px-4 py-3 text-sm text-slate-600 dark:text-slate-400">Can draft but requires confirmation</td>
              </tr>
              <tr>
                <td class="px-4 py-3 text-sm text-slate-700 dark:text-slate-300">Make payments</td>
                <td class="px-4 py-3 text-sm"><span class="rounded bg-red-100 px-2 py-0.5 text-xs font-medium text-red-800 dark:bg-red-900 dark:text-red-300">Cannot</span></td>
                <td class="px-4 py-3 text-sm text-slate-600 dark:text-slate-400">Can only record payments already made</td>
              </tr>
              <tr>
                <td class="px-4 py-3 text-sm text-slate-700 dark:text-slate-300">Change settings</td>
                <td class="px-4 py-3 text-sm"><span class="rounded bg-red-100 px-2 py-0.5 text-xs font-medium text-red-800 dark:bg-red-900 dark:text-red-300">Cannot</span></td>
                <td class="px-4 py-3 text-sm text-slate-600 dark:text-slate-400">System settings are protected</td>
              </tr>
              <tr>
                <td class="px-4 py-3 text-sm text-slate-700 dark:text-slate-300">Close periods</td>
                <td class="px-4 py-3 text-sm"><span class="rounded bg-red-100 px-2 py-0.5 text-xs font-medium text-red-800 dark:bg-red-900 dark:text-red-300">Cannot</span></td>
                <td class="px-4 py-3 text-sm text-slate-600 dark:text-slate-400">Period closing is irreversible</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <!-- Safety Features Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Safety Features</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Verasol has built-in safety measures:</p>

        <div class="mt-8 space-y-4">
          <div class="rounded-2xl border-l-4 border-emerald-400 bg-emerald-50 p-6 dark:bg-emerald-900/20">
            <h4 class="font-semibold text-emerald-800 dark:text-emerald-300">✅ Confirmation Required</h4>
            <p class="mt-2 text-lg text-emerald-700 dark:text-emerald-400">
              The AI always asks for confirmation before creating any transactions. You see exactly what 
              will be created before it happens.
            </p>
          </div>
          
          <div class="rounded-2xl border-l-4 border-emerald-400 bg-emerald-50 p-6 dark:bg-emerald-900/20">
            <h4 class="font-semibold text-emerald-800 dark:text-emerald-300">✅ Draft Mode</h4>
            <p class="mt-2 text-lg text-emerald-700 dark:text-emerald-400">
              Transactions created by AI are initially saved as drafts. You must manually post them to 
              finalize.
            </p>
          </div>
          
          <div class="rounded-2xl border-l-4 border-emerald-400 bg-emerald-50 p-6 dark:bg-emerald-900/20">
            <h4 class="font-semibold text-emerald-800 dark:text-emerald-300">✅ Audit Trail</h4>
            <p class="mt-2 text-lg text-emerald-700 dark:text-emerald-400">
              All AI-created transactions are marked and logged, so you can always see what was created 
              via AI vs. manual entry.
            </p>
          </div>
          
          <div class="rounded-2xl border-l-4 border-emerald-400 bg-emerald-50 p-6 dark:bg-emerald-900/20">
            <h4 class="font-semibold text-emerald-800 dark:text-emerald-300">✅ Read-Only Mode Available</h4>
            <p class="mt-2 text-lg text-emerald-700 dark:text-emerald-400">
              You can configure AI to be read-only (no transaction creation) if you only want it for 
              queries and information.
            </p>
          </div>
        </div>
      </section>

      <!-- Best Practices Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Best Practices for Safe AI Use</h2>

        <ol class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/50 dark:text-emerald-400">1</span>
            <span><strong>Always verify important numbers</strong> - Check totals against actual reports</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/50 dark:text-emerald-400">2</span>
            <span><strong>Review before posting</strong> - Never auto-post AI-created transactions</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/50 dark:text-emerald-400">3</span>
            <span><strong>Question unusual responses</strong> - If it sounds wrong, it probably is</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/50 dark:text-emerald-400">4</span>
            <span><strong>Use for assistance, not decisions</strong> - AI helps; you decide</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/50 dark:text-emerald-400">5</span>
            <span><strong>Keep humans in the loop</strong> - Important matters need professional review</span>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-medium text-emerald-700 dark:bg-emerald-900/50 dark:text-emerald-400">6</span>
            <span><strong>Start small</strong> - Build trust gradually with low-risk tasks first</span>
          </li>
        </ol>
      </section>

      <!-- Reporting Issues Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Reporting Issues</h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">If you encounter an AI error or concerning behavior:</p>

        <ol class="mt-4 space-y-3 text-lg text-slate-600 dark:text-slate-400">
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-slate-100 text-sm font-medium text-slate-700 dark:bg-slate-800 dark:text-slate-400">1</span>
            Take a screenshot of the conversation
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-slate-100 text-sm font-medium text-slate-700 dark:bg-slate-800 dark:text-slate-400">2</span>
            Note what you asked and what the AI responded
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-slate-100 text-sm font-medium text-slate-700 dark:bg-slate-800 dark:text-slate-400">3</span>
            Go to <strong>Settings → Support → Report AI Issue</strong>
          </li>
          <li class="flex items-start">
            <span class="mr-3 flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-slate-100 text-sm font-medium text-slate-700 dark:bg-slate-800 dark:text-slate-400">4</span>
            Describe what went wrong
          </li>
        </ol>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Your feedback helps improve the AI for everyone.</p>
      </section>

      <!-- Next Steps Section -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Next Steps</h2>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <Link href="/docs/ai-best-practices" class="group block rounded-xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="font-semibold text-slate-900 dark:text-white">Best Practices</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Tips for effective and safe AI use</p>
          </Link>
          <Link href="/docs/ai-introduction" class="group block rounded-xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="font-semibold text-slate-900 dark:text-white">AI Introduction</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Back to AI basics</p>
          </Link>
        </div>
      </section>

      <div class="h-20"></div>
    </div>
  </DocsLayout>
</template>
