<script setup lang="ts">
import { ref, computed, onMounted, watch } from 'vue'
import { Head, Link, usePage } from '@inertiajs/vue3'
import { useColorMode } from '@vueuse/core'

const props = defineProps<{
  title?: string
}>()

const page = usePage()
const mode = useColorMode()
const sidebarOpen = ref(false)
const searchQuery = ref('')
const searchOpen = ref(false)

const navigation = [
  {
    title: 'Getting Started',
    items: [
      { name: 'Introduction', href: '/docs/introduction' },
      { name: 'Quick Start Guide', href: '/docs/quick-start' },
      { name: 'System Requirements', href: '/docs/requirements' },
      { name: 'First-Time Setup', href: '/docs/first-time-setup' },
    ]
  },
  {
    title: 'Core Concepts',
    items: [
      { name: 'Understanding Accounting', href: '/docs/accounting-basics' },
      { name: 'Chart of Accounts', href: '/docs/chart-of-accounts' },
      { name: 'Double-Entry Bookkeeping', href: '/docs/double-entry' },
      { name: 'Financial Year & Periods', href: '/docs/financial-periods' },
      { name: 'Data Integrity Rules', href: '/docs/data-integrity' },
    ]
  },
  {
    title: 'Sales & Receivables',
    items: [
      { name: 'Customers', href: '/docs/customers' },
      { name: 'Quotations', href: '/docs/quotations' },
      { name: 'Invoices', href: '/docs/invoices' },
      { name: 'Credit Notes', href: '/docs/credit-notes' },
      { name: 'Receive Payments', href: '/docs/receive-payments' },
    ]
  },
  {
    title: 'Purchases & Payables',
    items: [
      { name: 'Vendors', href: '/docs/vendors' },
      { name: 'Bills', href: '/docs/bills' },
      { name: 'Debit Notes', href: '/docs/debit-notes' },
      { name: 'Make Payments', href: '/docs/make-payments' },
    ]
  },
  {
    title: 'Banking',
    items: [
      { name: 'Bank Accounts', href: '/docs/bank-accounts' },
      { name: 'Fund Transfers', href: '/docs/fund-transfers' },
      { name: 'Bank Reconciliation', href: '/docs/bank-reconciliation' },
      { name: 'Cheque Printing', href: '/docs/cheque-printing' },
    ]
  },
  {
    title: 'Accounting',
    items: [
      { name: 'Journal Entries', href: '/docs/journal-entries' },
      { name: 'Account Ledger', href: '/docs/account-ledger' },
      { name: 'Period Closing', href: '/docs/period-closing' },
      { name: 'Opening Balances', href: '/docs/opening-balances' },
    ]
  },
  {
    title: 'VAT & Compliance',
    items: [
      { name: 'UAE VAT Overview', href: '/docs/uae-vat' },
      { name: 'VAT Returns', href: '/docs/vat-returns' },
      { name: 'VAT Payments', href: '/docs/vat-payments' },
      { name: 'FTA Audit File', href: '/docs/fta-audit-file' },
      { name: 'Tax Groups', href: '/docs/tax-groups' },
    ]
  },
  {
    title: 'Inventory (Optional)',
    items: [
      { name: 'Items & Products', href: '/docs/items' },
      { name: 'Warehouses', href: '/docs/warehouses' },
      { name: 'Stock Movements', href: '/docs/stock-movements' },
      { name: 'Stock Adjustments', href: '/docs/stock-adjustments' },
    ]
  },
  {
    title: 'Payroll & HR (Optional)',
    items: [
      { name: 'Employees', href: '/docs/employees' },
      { name: 'Departments & Designations', href: '/docs/departments' },
      { name: 'Attendance', href: '/docs/attendance' },
      { name: 'Leave Management', href: '/docs/leave-management' },
      { name: 'Payroll Processing', href: '/docs/payroll-processing' },
      { name: 'WPS Compliance', href: '/docs/wps' },
      { name: 'Gratuity & Settlements', href: '/docs/gratuity' },
    ]
  },
  {
    title: 'Reports',
    items: [
      { name: 'Trial Balance', href: '/docs/trial-balance' },
      { name: 'Profit & Loss', href: '/docs/profit-loss' },
      { name: 'Balance Sheet', href: '/docs/balance-sheet' },
      { name: 'Cash Flow', href: '/docs/cash-flow' },
      { name: 'Aged Receivables', href: '/docs/aged-receivables' },
      { name: 'Aged Payables', href: '/docs/aged-payables' },
      { name: 'VAT Summary', href: '/docs/vat-summary-report' },
    ]
  },
  {
    title: 'AI Assistant',
    items: [
      { name: 'Introduction to AI', href: '/docs/ai-introduction' },
      { name: 'What AI Can Do', href: '/docs/ai-capabilities' },
      { name: 'AI Limitations', href: '/docs/ai-limitations' },
      { name: 'Best Practices', href: '/docs/ai-best-practices' },
      { name: 'AI Configuration', href: '/docs/ai-configuration' },
    ]
  },
  {
    title: 'Settings & Administration',
    items: [
      { name: 'Company Settings', href: '/docs/company-settings' },
      { name: 'User Management', href: '/docs/user-management' },
      { name: 'Roles & Permissions', href: '/docs/roles-permissions' },
      { name: 'Optional Modules', href: '/docs/modules' },
      { name: 'Audit Logs', href: '/docs/audit-logs' },
    ]
  },
  {
    title: 'International Business',
    items: [
      { name: 'Related Parties', href: '/docs/related-parties' },
      { name: 'Transfer Pricing', href: '/docs/transfer-pricing' },
      { name: 'Economic Substance', href: '/docs/economic-substance' },
    ]
  },
  {
    title: 'Troubleshooting',
    items: [
      { name: 'Common Issues', href: '/docs/common-issues' },
      { name: 'Error Messages', href: '/docs/error-messages' },
      { name: 'FAQ', href: '/docs/faq' },
      { name: 'Getting Help', href: '/docs/getting-help' },
    ]
  },
]

const currentPath = computed(() => page.url)

const isActive = (href: string) => {
  return currentPath.value === href || currentPath.value.startsWith(href + '/')
}

const toggleDarkMode = () => {
  mode.value = mode.value === 'dark' ? 'light' : 'dark'
}

// Close sidebar on route change
watch(() => page.url, () => {
  sidebarOpen.value = false
})

// Keyboard shortcut for search
onMounted(() => {
  document.addEventListener('keydown', (e) => {
    if ((e.metaKey || e.ctrlKey) && e.key === 'k') {
      e.preventDefault()
      searchOpen.value = true
    }
    if (e.key === 'Escape') {
      searchOpen.value = false
    }
  })
})
</script>

<template>
  <Head :title="title ? `${title} - Verasol Documentation` : 'Verasol Documentation'" />
  
  <div class="min-h-screen bg-white dark:bg-slate-950">
    <!-- Top Navigation -->
    <header class="sticky top-0 z-50 w-full border-b border-slate-200 bg-white/95 backdrop-blur supports-[backdrop-filter]:bg-white/60 dark:border-slate-800 dark:bg-slate-950/95">
      <div class="container flex h-16 items-center px-4 sm:px-6 lg:px-8">
        <!-- Mobile menu button -->
        <button 
          @click="sidebarOpen = !sidebarOpen"
          class="mr-4 inline-flex items-center justify-center rounded-md p-2 text-slate-500 hover:bg-slate-100 hover:text-slate-600 lg:hidden dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-slate-300"
        >
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>

        <!-- Logo -->
        <Link href="/" class="flex items-center space-x-2">
          <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-gradient-to-br from-emerald-500 to-teal-600">
            <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
          </div>
          <span class="text-xl font-bold text-slate-900 dark:text-white">Verasol</span>
          <span class="hidden rounded-full bg-slate-100 px-2 py-0.5 text-xs font-medium text-slate-600 sm:inline-block dark:bg-slate-800 dark:text-slate-400">Docs</span>
        </Link>

        <!-- Search -->
        <div class="ml-auto flex items-center space-x-4">
          <button
            @click="searchOpen = true"
            class="hidden items-center space-x-2 rounded-lg border border-slate-200 bg-slate-50 px-3 py-1.5 text-sm text-slate-500 transition hover:border-slate-300 hover:bg-slate-100 sm:flex dark:border-slate-700 dark:bg-slate-800 dark:text-slate-400 dark:hover:border-slate-600 dark:hover:bg-slate-700"
          >
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
            <span>Search...</span>
            <kbd class="hidden rounded border border-slate-300 bg-white px-1.5 py-0.5 text-xs font-medium text-slate-500 lg:inline-block dark:border-slate-600 dark:bg-slate-700 dark:text-slate-400">⌘K</kbd>
          </button>

          <!-- GitHub -->
          <a 
            href="https://app.verasol.ai" 
            target="_blank"
            class="inline-flex items-center space-x-1 text-sm font-medium text-slate-600 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white"
          >
            <span>Go to App</span>
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
            </svg>
          </a>

          <!-- Dark mode toggle -->
          <button
            @click="toggleDarkMode"
            class="rounded-lg p-2 text-slate-500 hover:bg-slate-100 hover:text-slate-600 dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-slate-300"
          >
            <svg v-if="mode === 'dark'" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
            </svg>
            <svg v-else class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
            </svg>
          </button>
        </div>
      </div>
    </header>

    <div class="container flex">
      <!-- Sidebar -->
      <aside 
        :class="[
          'fixed inset-y-0 left-0 z-40 w-72 transform overflow-y-auto border-r border-slate-200 bg-white pt-20 transition-transform duration-200 ease-in-out lg:static lg:translate-x-0 lg:pt-0 dark:border-slate-800 dark:bg-slate-950',
          sidebarOpen ? 'translate-x-0' : '-translate-x-full'
        ]"
      >
        <div class="sticky top-16 h-[calc(100vh-4rem)] overflow-y-auto px-4 py-6">
          <nav class="space-y-6">
            <div v-for="section in navigation" :key="section.title">
              <h3 class="mb-2 text-sm font-semibold text-slate-900 dark:text-white">{{ section.title }}</h3>
              <ul class="space-y-1">
                <li v-for="item in section.items" :key="item.href">
                  <Link
                    :href="item.href"
                    :class="[
                      'block rounded-lg px-3 py-2 text-sm transition',
                      isActive(item.href)
                        ? 'bg-emerald-50 font-medium text-emerald-700 dark:bg-emerald-900/20 dark:text-emerald-400'
                        : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900 dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-slate-300'
                    ]"
                  >
                    {{ item.name }}
                  </Link>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </aside>

      <!-- Overlay for mobile -->
      <div 
        v-if="sidebarOpen"
        @click="sidebarOpen = false"
        class="fixed inset-0 z-30 bg-slate-900/50 lg:hidden"
      />

      <!-- Main content -->
      <main class="min-w-0 flex-1 px-4 py-8 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-3xl">
          <slot />
        </div>
      </main>

      <!-- Table of Contents (right sidebar) -->
      <aside class="hidden w-64 xl:block">
        <div class="sticky top-20 py-8 pl-8">
          <slot name="toc" />
        </div>
      </aside>
    </div>

    <!-- Search Modal -->
    <Teleport to="body">
      <div v-if="searchOpen" class="fixed inset-0 z-50 overflow-y-auto p-4 sm:p-6 md:p-20">
        <div @click="searchOpen = false" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm" />
        <div class="relative mx-auto max-w-xl rounded-xl bg-white shadow-2xl ring-1 ring-slate-900/5 dark:bg-slate-900 dark:ring-slate-800">
          <div class="flex items-center border-b border-slate-200 px-4 dark:border-slate-800">
            <svg class="h-5 w-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
            <input
              v-model="searchQuery"
              type="text"
              placeholder="Search documentation..."
              class="h-14 flex-1 bg-transparent px-4 text-slate-900 placeholder-slate-400 focus:outline-none dark:text-white"
              autofocus
            />
            <kbd class="rounded border border-slate-300 bg-slate-50 px-2 py-1 text-xs font-medium text-slate-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-400">ESC</kbd>
          </div>
          <div class="max-h-96 overflow-y-auto p-4">
            <p class="text-center text-sm text-slate-500 dark:text-slate-400">Start typing to search...</p>
          </div>
        </div>
      </div>
    </Teleport>
  </div>
</template>
