<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

/*
|--------------------------------------------------------------------------
| Documentation Routes
|--------------------------------------------------------------------------
*/

// Home / Landing Page
Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

// Getting Started
Route::get('/docs/introduction', function () {
    return Inertia::render('docs/Introduction');
})->name('docs.introduction');

Route::get('/docs/quick-start', function () {
    return Inertia::render('docs/QuickStart');
})->name('docs.quick-start');

Route::get('/docs/requirements', function () {
    return Inertia::render('docs/getting-started/Requirements');
})->name('docs.requirements');

Route::get('/docs/first-time-setup', function () {
    return Inertia::render('docs/getting-started/FirstTimeSetup');
})->name('docs.first-time-setup');

// Core Concepts
Route::get('/docs/accounting-basics', function () {
    return Inertia::render('docs/core-concepts/AccountingBasics');
})->name('docs.accounting-basics');

Route::get('/docs/double-entry', function () {
    return Inertia::render('docs/core-concepts/DoubleEntry');
})->name('docs.double-entry');

Route::get('/docs/financial-periods', function () {
    return Inertia::render('docs/core-concepts/FinancialPeriods');
})->name('docs.financial-periods');

Route::get('/docs/data-integrity', function () {
    return Inertia::render('docs/core-concepts/DataIntegrity');
})->name('docs.data-integrity');

// Sales & Receivables
Route::get('/docs/customers', function () {
    return Inertia::render('docs/sales/Customers');
})->name('docs.customers');

Route::get('/docs/quotations', function () {
    return Inertia::render('docs/sales/Quotations');
})->name('docs.quotations');

Route::get('/docs/credit-notes', function () {
    return Inertia::render('docs/sales/CreditNotes');
})->name('docs.credit-notes');

Route::get('/docs/receive-payments', function () {
    return Inertia::render('docs/sales/ReceivePayments');
})->name('docs.receive-payments');

Route::get('/docs/vendors', function () {
    return Inertia::render('docs/purchases/Vendors');
})->name('docs.vendors');

Route::get('/docs/debit-notes', function () {
    return Inertia::render('docs/purchases/DebitNotes');
})->name('docs.debit-notes');

Route::get('/docs/make-payments', function () {
    return Inertia::render('docs/purchases/MakePayments');
})->name('docs.make-payments');

Route::get('/docs/bank-accounts', function () {
    return Inertia::render('docs/banking/BankAccounts');
})->name('docs.bank-accounts');

Route::get('/docs/fund-transfers', function () {
    return Inertia::render('docs/banking/FundTransfers');
})->name('docs.fund-transfers');

Route::get('/docs/cheque-printing', function () {
    return Inertia::render('docs/banking/ChequePrinting');
})->name('docs.cheque-printing');

Route::get('/docs/account-ledger', function () {
    return Inertia::render('docs/accounting/AccountLedger');
})->name('docs.account-ledger');

Route::get('/docs/period-closing', function () {
    return Inertia::render('docs/accounting/PeriodClosing');
})->name('docs.period-closing');

Route::get('/docs/opening-balances', function () {
    return Inertia::render('docs/accounting/OpeningBalances');
})->name('docs.opening-balances');

Route::get('/docs/vat-returns', function () {
    return Inertia::render('docs/vat/VatReturns');
})->name('docs.vat-returns');

Route::get('/docs/vat-payments', function () {
    return Inertia::render('docs/vat/VatPayments');
})->name('docs.vat-payments');

Route::get('/docs/fta-audit-file', function () {
    return Inertia::render('docs/vat/FtaAuditFile');
})->name('docs.fta-audit-file');

Route::get('/docs/tax-groups', function () {
    return Inertia::render('docs/vat/TaxGroups');
})->name('docs.tax-groups');

// Inventory Documentation
Route::get('/docs/items', function () {
    return Inertia::render('docs/inventory/Items');
})->name('docs.items');

Route::get('/docs/warehouses', function () {
    return Inertia::render('docs/inventory/Warehouses');
})->name('docs.warehouses');

Route::get('/docs/stock-movements', function () {
    return Inertia::render('docs/inventory/StockMovements');
})->name('docs.stock-movements');

Route::get('/docs/stock-adjustments', function () {
    return Inertia::render('docs/inventory/StockAdjustments');
})->name('docs.stock-adjustments');

// Payroll Documentation
Route::get('/docs/departments', function () {
    return Inertia::render('docs/payroll/Departments');
})->name('docs.departments');

Route::get('/docs/attendance', function () {
    return Inertia::render('docs/payroll/Attendance');
})->name('docs.attendance');

Route::get('/docs/leave-management', function () {
    return Inertia::render('docs/payroll/LeaveManagement');
})->name('docs.leave-management');

Route::get('/docs/wps', function () {
    return Inertia::render('docs/payroll/Wps');
})->name('docs.wps');

Route::get('/docs/gratuity', function () {
    return Inertia::render('docs/payroll/Gratuity');
})->name('docs.gratuity');

// Reports Documentation
Route::get('/docs/cash-flow', function () {
    return Inertia::render('docs/reports/CashFlow');
})->name('docs.cash-flow');

Route::get('/docs/aged-receivables', function () {
    return Inertia::render('docs/reports/AgedReceivables');
})->name('docs.aged-receivables');

Route::get('/docs/aged-payables', function () {
    return Inertia::render('docs/reports/AgedPayables');
})->name('docs.aged-payables');

Route::get('/docs/vat-summary', function () {
    return Inertia::render('docs/reports/VatSummary');
})->name('docs.vat-summary');

// Settings Documentation
Route::get('/docs/user-management', function () {
    return Inertia::render('docs/settings/UserManagement');
})->name('docs.user-management');

Route::get('/docs/roles-permissions', function () {
    return Inertia::render('docs/settings/RolesPermissions');
})->name('docs.roles-permissions');

Route::get('/docs/modules', function () {
    return Inertia::render('docs/settings/Modules');
})->name('docs.modules');

Route::get('/docs/audit-logs', function () {
    return Inertia::render('docs/settings/AuditLogs');
})->name('docs.audit-logs');

// International Documentation
Route::get('/docs/related-parties', function () {
    return Inertia::render('docs/international/RelatedParties');
})->name('docs.related-parties');

Route::get('/docs/transfer-pricing', function () {
    return Inertia::render('docs/international/TransferPricing');
})->name('docs.transfer-pricing');

Route::get('/docs/economic-substance', function () {
    return Inertia::render('docs/international/EconomicSubstance');
})->name('docs.economic-substance');

// AI Assistant Documentation
Route::get('/docs/ai-introduction', function () {
    return Inertia::render('docs/ai/Introduction');
})->name('docs.ai.introduction');

Route::get('/docs/ai-capabilities', function () {
    return Inertia::render('docs/ai/Capabilities');
})->name('docs.ai.capabilities');

Route::get('/docs/ai-limitations', function () {
    return Inertia::render('docs/ai/Limitations');
})->name('docs.ai.limitations');

Route::get('/docs/ai-best-practices', function () {
    return Inertia::render('docs/ai/BestPractices');
})->name('docs.ai.best-practices');

// Accounting Documentation
Route::get('/docs/chart-of-accounts', function () {
    return Inertia::render('docs/accounting/ChartOfAccounts');
})->name('docs.chart-of-accounts');

Route::get('/docs/journal-entries', function () {
    return Inertia::render('docs/accounting/JournalEntries');
})->name('docs.journal-entries');

// Banking Documentation
Route::get('/docs/bank-reconciliation', function () {
    return Inertia::render('docs/banking/Reconciliation');
})->name('docs.bank-reconciliation');

// VAT Documentation
Route::get('/docs/vat-overview', function () {
    return Inertia::render('docs/vat/Overview');
})->name('docs.vat-overview');

// Invoicing Documentation
Route::get('/docs/create-invoice', function () {
    return Inertia::render('docs/invoicing/CreateInvoice');
})->name('docs.create-invoice');

Route::get('/docs/invoices', function () {
    return Inertia::render('docs/invoicing/CreateInvoice');
})->name('docs.invoices');

// Bills & Expenses Documentation
Route::get('/docs/bills', function () {
    return Inertia::render('docs/bills/Overview');
})->name('docs.bills');

// Payroll Documentation
Route::get('/docs/payroll-overview', function () {
    return Inertia::render('docs/payroll/Overview');
})->name('docs.payroll-overview');

// Reports Documentation
Route::get('/docs/reports-overview', function () {
    return Inertia::render('docs/reports/Overview');
})->name('docs.reports-overview');

// Settings Documentation
Route::get('/docs/company-settings', function () {
    return Inertia::render('docs/settings/CompanySettings');
})->name('docs.company-settings');

/*
|--------------------------------------------------------------------------
| Route Aliases - Navigation Links
|--------------------------------------------------------------------------
| These map navigation links to existing pages or placeholder pages
*/

// Navigation aliases for AI section
Route::get('/docs/ai-configuration', function () {
    return Inertia::render('docs/ai/Introduction');
})->name('docs.ai.configuration');

// Navigation aliases for VAT section
Route::get('/docs/uae-vat', function () {
    return Inertia::render('docs/vat/Overview');
})->name('docs.uae-vat');

Route::get('/docs/vat-returns', function () {
    return Inertia::render('docs/vat/Overview');
})->name('docs.vat-returns');

// Navigation aliases for Payroll section
Route::get('/docs/payroll-processing', function () {
    return Inertia::render('docs/payroll/Overview');
})->name('docs.payroll-processing');

Route::get('/docs/employees', function () {
    return Inertia::render('docs/payroll/Overview');
})->name('docs.employees');

// Navigation aliases for Reports section
Route::get('/docs/trial-balance', function () {
    return Inertia::render('docs/reports/Overview');
})->name('docs.trial-balance');

Route::get('/docs/profit-loss', function () {
    return Inertia::render('docs/reports/Overview');
})->name('docs.profit-loss');

Route::get('/docs/balance-sheet', function () {
    return Inertia::render('docs/reports/Overview');
})->name('docs.balance-sheet');

// Navigation aliases for Accounting section
Route::get('/docs/opening-balances', function () {
    return Inertia::render('docs/accounting/ChartOfAccounts');
})->name('docs.opening-balances');

// Navigation aliases for Banking section
Route::get('/docs/bank-accounts', function () {
    return Inertia::render('docs/banking/Reconciliation');
})->name('docs.bank-accounts');

/*
|--------------------------------------------------------------------------
| Auth Routes (if needed later)
|--------------------------------------------------------------------------
*/

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
