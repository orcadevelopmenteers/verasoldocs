<script setup lang="ts">
import DocsLayout from '@/layouts/DocsLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <DocsLayout title="AI Assistant Introduction">
    <div class="max-w-4xl">
      <!-- Page Header -->
      <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">
        AI Assistant
      </h1>
      
      <p class="mt-6 text-xl leading-relaxed text-slate-600 dark:text-slate-400">
        Verasol includes a powerful AI assistant that helps you with accounting tasks using natural language. 
        Ask questions, create transactions, and get insights about your business — all through conversation.
      </p>

      <!-- Warning Box -->
      <div class="mt-10 rounded-2xl border-l-4 border-amber-400 bg-amber-50 p-8 dark:bg-amber-900/20">
        <div class="flex items-start gap-4">
          <div class="flex-shrink-0 rounded-full bg-amber-100 p-2 dark:bg-amber-800">
            <svg class="h-5 w-5 text-amber-600 dark:text-amber-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
            </svg>
          </div>
          <div>
            <h3 class="text-lg font-semibold text-amber-900 dark:text-amber-300">Important Disclaimer</h3>
            <p class="mt-2 text-amber-800 dark:text-amber-400">
              The AI assistant is a powerful tool, but it can make mistakes. Always review AI-generated 
              transactions before posting them. The AI should assist your work, not replace your judgment.
              See <Link href="/docs/ai-limitations" class="underline hover:no-underline">AI Limitations</Link> for details.
            </p>
          </div>
        </div>
      </div>

      <!-- Section: Accessing -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">
          Accessing the AI Assistant
        </h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          There are two ways to access the AI assistant:
        </p>

        <ol class="mt-8 space-y-6">
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">1</span>
            <div>
              <strong class="text-lg text-slate-900 dark:text-white">Chat Button</strong>
              <p class="mt-1 text-slate-600 dark:text-slate-400">Click the AI chat icon in the bottom-right corner of any page</p>
            </div>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">2</span>
            <div>
              <strong class="text-lg text-slate-900 dark:text-white">AI Page</strong>
              <p class="mt-1 text-slate-600 dark:text-slate-400">Navigate to <strong>AI Assistant</strong> from the sidebar for a full-screen experience</p>
            </div>
          </li>
        </ol>
      </section>

      <!-- Section: How It Works -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">
          How It Works
        </h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          The AI assistant uses advanced language models (powered by Anthropic Claude) to understand your requests 
          and interact with your Verasol data. It can:
        </p>

        <ul class="mt-8 space-y-4">
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-700 dark:text-slate-300">Read your existing data (customers, invoices, balances, etc.)</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-700 dark:text-slate-300">Create new transactions on your behalf</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-700 dark:text-slate-300">Answer questions about accounting and UAE regulations</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="mt-1 h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-lg text-slate-700 dark:text-slate-300">Generate reports and summaries</span>
          </li>
        </ul>
      </section>

      <!-- Section: Example Conversations -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">
          Example Conversations
        </h2>

        <!-- Example 1 -->
        <div class="mt-10">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Getting Information</h3>
          
          <div class="mt-6 space-y-4 rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-700 dark:bg-slate-800/50">
            <div class="flex items-start gap-3">
              <span class="rounded-lg bg-blue-100 px-3 py-1.5 text-sm font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">You</span>
              <p class="text-lg text-slate-700 dark:text-slate-300">"What's my total outstanding receivables?"</p>
            </div>
            <div class="flex items-start gap-3">
              <span class="rounded-lg bg-emerald-100 px-3 py-1.5 text-sm font-medium text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">AI</span>
              <p class="text-lg text-slate-700 dark:text-slate-300">"Your total outstanding receivables are AED 45,230.00 across 12 unpaid invoices. The oldest is from ABC Trading (INV-2024-0089) for AED 12,500 which is 45 days overdue."</p>
            </div>
          </div>
        </div>

        <!-- Example 2 -->
        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Creating Transactions</h3>
          
          <div class="mt-6 space-y-4 rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-700 dark:bg-slate-800/50">
            <div class="flex items-start gap-3">
              <span class="rounded-lg bg-blue-100 px-3 py-1.5 text-sm font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">You</span>
              <p class="text-lg text-slate-700 dark:text-slate-300">"Create an invoice for Global Tech for consulting services, AED 15,000 plus VAT"</p>
            </div>
            <div class="flex items-start gap-3">
              <span class="rounded-lg bg-emerald-100 px-3 py-1.5 text-sm font-medium text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">AI</span>
              <div class="text-lg text-slate-700 dark:text-slate-300">
                <p>I'll create an invoice for Global Tech LLC:</p>
                <ul class="mt-3 ml-4 space-y-1">
                  <li>• Consulting Services: AED 15,000.00</li>
                  <li>• VAT (5%): AED 750.00</li>
                  <li>• Total: AED 15,750.00</li>
                </ul>
                <p class="mt-3">Should I proceed with creating this invoice?</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Example 3 -->
        <div class="mt-12">
          <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Getting Help</h3>
          
          <div class="mt-6 space-y-4 rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-700 dark:bg-slate-800/50">
            <div class="flex items-start gap-3">
              <span class="rounded-lg bg-blue-100 px-3 py-1.5 text-sm font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">You</span>
              <p class="text-lg text-slate-700 dark:text-slate-300">"When is my next VAT return due?"</p>
            </div>
            <div class="flex items-start gap-3">
              <span class="rounded-lg bg-emerald-100 px-3 py-1.5 text-sm font-medium text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">AI</span>
              <p class="text-lg text-slate-700 dark:text-slate-300">"Your next VAT return for Q4 2024 (October-December) is due by January 28, 2025. Based on your current records, your estimated VAT payable is AED 8,450.00."</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: Enabling AI -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">
          Enabling the AI Assistant
        </h2>

        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
          The AI assistant requires an API key from Anthropic. To enable it:
        </p>

        <ol class="mt-8 space-y-4">
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-slate-200 text-sm font-medium text-slate-700 dark:bg-slate-700 dark:text-slate-300">1</span>
            <span class="text-lg text-slate-700 dark:text-slate-300">Go to <strong class="text-slate-900 dark:text-white">Settings → AI Assistant</strong></span>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-slate-200 text-sm font-medium text-slate-700 dark:bg-slate-700 dark:text-slate-300">2</span>
            <span class="text-lg text-slate-700 dark:text-slate-300">Toggle <strong class="text-slate-900 dark:text-white">"Enable AI Assistant"</strong> to on</span>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-slate-200 text-sm font-medium text-slate-700 dark:bg-slate-700 dark:text-slate-300">3</span>
            <span class="text-lg text-slate-700 dark:text-slate-300">Enter your Anthropic API key (get one from <a href="https://console.anthropic.com" target="_blank" class="text-emerald-600 hover:underline dark:text-emerald-400">console.anthropic.com</a>)</span>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-slate-200 text-sm font-medium text-slate-700 dark:bg-slate-700 dark:text-slate-300">4</span>
            <span class="text-lg text-slate-700 dark:text-slate-300">Click <strong class="text-slate-900 dark:text-white">"Test Connection"</strong> to verify</span>
          </li>
          <li class="flex items-start gap-4">
            <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-slate-200 text-sm font-medium text-slate-700 dark:bg-slate-700 dark:text-slate-300">5</span>
            <span class="text-lg text-slate-700 dark:text-slate-300">Save your settings</span>
          </li>
        </ol>

        <!-- Tip -->
        <div class="mt-10 rounded-xl bg-blue-50 p-6 dark:bg-blue-900/20">
          <p class="text-blue-800 dark:text-blue-300">
            <strong>💡 About API Keys:</strong> Your API key is stored securely and encrypted. 
            API usage costs are billed directly by Anthropic to your account. Typical usage costs 
            a few cents per conversation.
          </p>
        </div>
      </section>

      <!-- Next Steps -->
      <section class="mt-20">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Next Steps</h2>

        <div class="mt-8 grid gap-6 sm:grid-cols-2">
          <Link href="/docs/ai-capabilities" class="group block rounded-xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">What AI Can Do</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Complete list of AI capabilities and commands</p>
          </Link>
          <Link href="/docs/ai-limitations" class="group block rounded-xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">AI Limitations</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Important limitations and when not to trust AI</p>
          </Link>
          <Link href="/docs/ai-best-practices" class="group block rounded-xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Best Practices</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Tips for getting the best results from AI</p>
          </Link>
          <Link href="/docs/ai-configuration" class="group block rounded-xl border border-slate-200 p-6 transition hover:border-emerald-300 hover:shadow-md dark:border-slate-700 dark:hover:border-emerald-700">
            <h4 class="text-lg font-semibold text-slate-900 group-hover:text-emerald-600 dark:text-white dark:group-hover:text-emerald-400">Configuration</h4>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Set up and manage AI settings</p>
          </Link>
        </div>
      </section>

      <!-- Bottom spacing -->
      <div class="h-20"></div>
    </div>
  </DocsLayout>
</template>
