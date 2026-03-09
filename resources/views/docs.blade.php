@extends('layouts.app')

@section('title', 'Documentation — Bojeri ERP Platform')
@section('meta_description', 'Comprehensive documentation for all 16 Bojeri ERP modules. Learn Accounting, HRM, CRM, POS, Projects, and more.')

@section('content')
<div class="pt-16">
    <div class="mx-auto flex w-full max-w-[1440px] flex-1 px-6 lg:px-12">

        {{-- ========================================= --}}
        {{-- LEFT SIDEBAR --}}
        {{-- ========================================= --}}
        <aside class="sticky top-16 hidden h-[calc(100vh-4rem)] w-64 shrink-0 border-r border-gray-100 py-8 pr-4 lg:block" id="docs-sidebar">
            <div class="sidebar-scroll h-full overflow-y-auto pr-2">

                {{-- Search --}}
                <div class="relative mb-6">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-300 text-lg">search</span>
                    <input class="w-full rounded-lg border border-gray-100 bg-gray-50/50 py-2 pl-9 pr-3 text-sm outline-none placeholder:text-gray-400 focus:border-brand/40 focus:ring-2 focus:ring-brand/10 transition-all" placeholder="Search docs..." type="text" id="docs-search"/>
                </div>

                {{-- Nav sections --}}
                @php
                $menuSections = [
                    [
                        'id' => 'dashboard',
                        'icon' => 'dashboard',
                        'label' => 'Dashboard',
                        'children' => [
                            ['id' => 'account-dashboard', 'label' => 'Account Dashboard'],
                            ['id' => 'project-dashboard', 'label' => 'Project Dashboard'],
                            ['id' => 'hrm-dashboard', 'label' => 'HRM Dashboard'],
                            ['id' => 'pos-dashboard', 'label' => 'POS Dashboard'],
                            ['id' => 'crm-dashboard', 'label' => 'CRM Dashboard'],
                        ]
                    ],
                    [
                        'id' => 'user-management',
                        'icon' => 'group',
                        'label' => 'User Management',
                        'children' => [
                            ['id' => 'roles', 'label' => 'Roles'],
                            ['id' => 'users', 'label' => 'Users'],
                        ]
                    ],
                    [
                        'id' => 'proposal',
                        'icon' => 'description',
                        'label' => 'Proposal',
                        'children' => []
                    ],
                    [
                        'id' => 'sales-invoice',
                        'icon' => 'receipt',
                        'label' => 'Sales Invoice',
                        'children' => [
                            ['id' => 'sales-invoice-list', 'label' => 'Sales Invoice'],
                            ['id' => 'sales-invoice-returns', 'label' => 'Sales Invoice Returns'],
                        ]
                    ],
                    [
                        'id' => 'purchase',
                        'icon' => 'shopping_cart',
                        'label' => 'Purchase',
                        'children' => [
                            ['id' => 'purchase-invoice', 'label' => 'Purchase Invoice'],
                            ['id' => 'purchase-returns', 'label' => 'Purchase Returns'],
                            ['id' => 'warehouses', 'label' => 'Warehouses'],
                            ['id' => 'purchase-transfers', 'label' => 'Transfers'],
                        ]
                    ],
                    [
                        'id' => 'product-service',
                        'icon' => 'inventory_2',
                        'label' => 'Product & Service',
                        'children' => [
                            ['id' => 'items', 'label' => 'Items'],
                            ['id' => 'product-system-setup', 'label' => 'System Setup'],
                        ]
                    ],
                    [
                        'id' => 'project',
                        'icon' => 'assignment',
                        'label' => 'Project',
                        'children' => [
                            ['id' => 'projects-list', 'label' => 'Projects'],
                            ['id' => 'projects-report', 'label' => 'Projects Report'],
                            ['id' => 'project-system-setup', 'label' => 'System Setup'],
                        ]
                    ],
                    [
                        'id' => 'accounting',
                        'icon' => 'account_balance',
                        'label' => 'Accounting',
                        'children' => [
                            ['id' => 'customers', 'label' => 'Customers'],
                            ['id' => 'vendors', 'label' => 'Vendors'],
                            [
                                'id' => 'banking',
                                'label' => 'Banking',
                                'nested' => [
                                    ['id' => 'bank-accounts', 'label' => 'Bank Accounts'],
                                    ['id' => 'bank-transactions', 'label' => 'Bank Transactions'],
                                    ['id' => 'bank-transfers', 'label' => 'Bank Transfers'],
                                ]
                            ],
                            ['id' => 'chart-of-accounts', 'label' => 'Chart Of Accounts'],
                            ['id' => 'vendor-payments', 'label' => 'Vendor Payments'],
                            ['id' => 'customer-payments', 'label' => 'Customer Payments'],
                            ['id' => 'revenue', 'label' => 'Revenue'],
                            ['id' => 'expense', 'label' => 'Expense'],
                            ['id' => 'debit-notes', 'label' => 'Debit Notes'],
                            ['id' => 'credit-notes', 'label' => 'Credit Notes'],
                            ['id' => 'accounting-reports', 'label' => 'Reports'],
                            ['id' => 'accounting-system-setup', 'label' => 'System Setup'],
                        ]
                    ],
                    [
                        'id' => 'hrm',
                        'icon' => 'badge',
                        'label' => 'HRM',
                        'children' => [
                            ['id' => 'employees', 'label' => 'Employees'],
                            ['id' => 'payslip', 'label' => 'Payslip'],
                            ['id' => 'set-salary', 'label' => 'Set Salary'],
                            ['id' => 'payroll', 'label' => 'Payroll'],
                            ['id' => 'attendance', 'label' => 'Attendance'],
                            ['id' => 'shifts', 'label' => 'Shifts'],
                            ['id' => 'attendances', 'label' => 'Attendances'],
                            [
                                'id' => 'leave-management',
                                'label' => 'Leave Management',
                                'nested' => [
                                    ['id' => 'leave-types', 'label' => 'Leave Types'],
                                    ['id' => 'leave-applications', 'label' => 'Leave Applications'],
                                    ['id' => 'leave-balance', 'label' => 'Leave Balance'],
                                    ['id' => 'holidays', 'label' => 'Holidays'],
                                ]
                            ],
                            ['id' => 'awards', 'label' => 'Awards'],
                            ['id' => 'promotions', 'label' => 'Promotions'],
                            ['id' => 'resignations', 'label' => 'Resignations'],
                            ['id' => 'terminations', 'label' => 'Terminations'],
                            ['id' => 'warnings', 'label' => 'Warnings'],
                            ['id' => 'complaints', 'label' => 'Complaints'],
                            ['id' => 'hrm-transfers', 'label' => 'Transfers'],
                            ['id' => 'documents', 'label' => 'Documents'],
                            ['id' => 'acknowledgments', 'label' => 'Acknowledgments'],
                            ['id' => 'announcements', 'label' => 'Announcements'],
                            ['id' => 'events', 'label' => 'Events'],
                            ['id' => 'hrm-system-setup', 'label' => 'System Setup'],
                        ]
                    ],
                    [
                        'id' => 'pos',
                        'icon' => 'point_of_sale',
                        'label' => 'POS',
                        'children' => [
                            ['id' => 'add-pos', 'label' => 'Add POS'],
                            ['id' => 'pos-orders', 'label' => 'POS Orders'],
                            ['id' => 'print-barcode', 'label' => 'Print Barcode'],
                            ['id' => 'pos-reports', 'label' => 'Reports'],
                        ]
                    ],
                    [
                        'id' => 'crm',
                        'icon' => 'favorite',
                        'label' => 'CRM',
                        'children' => [
                            ['id' => 'leads', 'label' => 'Leads'],
                            ['id' => 'deals', 'label' => 'Deals'],
                            ['id' => 'crm-system-setup', 'label' => 'System Setup'],
                            [
                                'id' => 'crm-reports',
                                'label' => 'Reports',
                                'nested' => [
                                    ['id' => 'lead-reports', 'label' => 'Lead Reports'],
                                    ['id' => 'deal-reports', 'label' => 'Deal Reports'],
                                ]
                            ],
                        ]
                    ],
                    [
                        'id' => 'media-library',
                        'icon' => 'image',
                        'label' => 'Media Library',
                        'children' => []
                    ],
                    [
                        'id' => 'messenger',
                        'icon' => 'chat',
                        'label' => 'Messenger',
                        'children' => []
                    ],
                    [
                        'id' => 'helpdesk',
                        'icon' => 'help_center',
                        'label' => 'Helpdesk',
                        'children' => []
                    ],
                    [
                        'id' => 'plan',
                        'icon' => 'credit_card',
                        'label' => 'Plan',
                        'children' => [
                            ['id' => 'setup-subscription-plan', 'label' => 'Setup Subscription Plan'],
                            ['id' => 'bank-transfer-requests', 'label' => 'Bank Transfer Requests'],
                            ['id' => 'orders', 'label' => 'Orders'],
                        ]
                    ],
                    [
                        'id' => 'settings',
                        'icon' => 'settings',
                        'label' => 'Settings',
                        'children' => []
                    ],
                ];
                @endphp

                @foreach($menuSections as $section)
                <div class="mb-1">
                    @if(count($section['children']) > 0)
                    {{-- Parent with children: collapsible --}}
                    <button
                        class="sidebar-toggle flex w-full items-center justify-between rounded-lg px-3 py-2 text-[13px] font-medium text-gray-700 hover:bg-gray-50 hover:text-brand transition-all"
                        data-target="sidebar-{{ $section['id'] }}"
                        onclick="toggleSidebar(this)"
                    >
                        <span class="flex items-center gap-2.5">
                            <span class="material-symbols-outlined text-[18px] text-gray-400">{{ $section['icon'] }}</span>
                            {{ $section['label'] }}
                        </span>
                        <span class="material-symbols-outlined text-[16px] text-gray-300 chevron-icon transition-transform duration-200">chevron_right</span>
                    </button>
                    <div class="sidebar-children hidden ml-[18px] mt-0.5 border-l border-gray-100 pl-3" id="sidebar-{{ $section['id'] }}">
                        @foreach($section['children'] as $child)
                            @if(isset($child['nested']))
                            {{-- Nested sub-menu --}}
                            <button
                                class="sidebar-toggle flex w-full items-center justify-between rounded-md px-2.5 py-1.5 text-[12px] text-gray-500 hover:bg-gray-50 hover:text-brand transition-all"
                                data-target="sidebar-{{ $child['id'] }}"
                                onclick="toggleSidebar(this)"
                            >
                                <span>{{ $child['label'] }}</span>
                                <span class="material-symbols-outlined text-[14px] text-gray-300 chevron-icon transition-transform duration-200">chevron_right</span>
                            </button>
                            <div class="sidebar-children hidden ml-2.5 mt-0.5 border-l border-gray-100 pl-2.5" id="sidebar-{{ $child['id'] }}">
                                @foreach($child['nested'] as $nested)
                                <a class="block rounded-md px-2.5 py-1.5 text-[12px] text-gray-400 hover:text-brand hover:bg-gray-50 transition-all" href="#{{ $nested['id'] }}">{{ $nested['label'] }}</a>
                                @endforeach
                            </div>
                            @else
                            <a class="block rounded-md px-2.5 py-1.5 text-[12px] text-gray-500 hover:text-brand hover:bg-gray-50 transition-all" href="#{{ $child['id'] }}">{{ $child['label'] }}</a>
                            @endif
                        @endforeach
                    </div>
                    @else
                    {{-- Leaf node: no children --}}
                    <a
                        class="flex items-center gap-2.5 rounded-lg px-3 py-2 text-[13px] font-medium text-gray-700 hover:bg-gray-50 hover:text-brand transition-all"
                        href="#{{ $section['id'] }}"
                    >
                        <span class="material-symbols-outlined text-[18px] text-gray-400">{{ $section['icon'] }}</span>
                        {{ $section['label'] }}
                    </a>
                    @endif
                </div>
                @endforeach
            </div>
        </aside>

        {{-- ========================================= --}}
        {{-- MAIN CONTENT --}}
        {{-- ========================================= --}}
        <main class="flex-1 py-10 lg:pl-12">

            {{-- Mobile sidebar toggle --}}
            <button class="mb-6 flex items-center gap-2 rounded-lg border border-gray-200 px-4 py-2 text-sm font-medium text-gray-600 lg:hidden" id="mobile-sidebar-toggle" onclick="document.getElementById('mobile-sidebar-drawer').classList.toggle('hidden')">
                <span class="material-symbols-outlined text-lg">menu</span> Browse Modules
            </button>

            {{-- Mobile drawer --}}
            <div class="hidden fixed inset-0 z-[60] lg:hidden" id="mobile-sidebar-drawer">
                <div class="absolute inset-0 bg-black/20 backdrop-blur-sm" onclick="document.getElementById('mobile-sidebar-drawer').classList.add('hidden')"></div>
                <div class="absolute left-0 top-0 h-full w-72 bg-white shadow-xl p-6 overflow-y-auto sidebar-scroll">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-sm font-bold text-gray-900">Modules</h3>
                        <button onclick="document.getElementById('mobile-sidebar-drawer').classList.add('hidden')" class="text-gray-400 hover:text-gray-600">
                            <span class="material-symbols-outlined">close</span>
                        </button>
                    </div>
                    {{-- Duplicate nav for mobile --}}
                    @foreach($menuSections as $section)
                    <div class="mb-1">
                        @if(count($section['children']) > 0)
                        <button class="sidebar-toggle flex w-full items-center justify-between rounded-lg px-3 py-2 text-[13px] font-medium text-gray-700 hover:bg-gray-50" data-target="mobile-sidebar-{{ $section['id'] }}" onclick="toggleSidebar(this)">
                            <span class="flex items-center gap-2.5"><span class="material-symbols-outlined text-[18px] text-gray-400">{{ $section['icon'] }}</span>{{ $section['label'] }}</span>
                            <span class="material-symbols-outlined text-[16px] text-gray-300 chevron-icon transition-transform duration-200">chevron_right</span>
                        </button>
                        <div class="sidebar-children hidden ml-[18px] mt-0.5 border-l border-gray-100 pl-3" id="mobile-sidebar-{{ $section['id'] }}">
                            @foreach($section['children'] as $child)
                                @if(isset($child['nested']))
                                <button class="sidebar-toggle flex w-full items-center justify-between rounded-md px-2.5 py-1.5 text-[12px] text-gray-500 hover:bg-gray-50" data-target="mobile-sidebar-{{ $child['id'] }}" onclick="toggleSidebar(this)">
                                    <span>{{ $child['label'] }}</span>
                                    <span class="material-symbols-outlined text-[14px] text-gray-300 chevron-icon transition-transform duration-200">chevron_right</span>
                                </button>
                                <div class="sidebar-children hidden ml-2.5 mt-0.5 border-l border-gray-100 pl-2.5" id="mobile-sidebar-{{ $child['id'] }}">
                                    @foreach($child['nested'] as $nested)
                                    <a class="block rounded-md px-2.5 py-1.5 text-[12px] text-gray-400 hover:text-brand" href="#{{ $nested['id'] }}" onclick="document.getElementById('mobile-sidebar-drawer').classList.add('hidden')">{{ $nested['label'] }}</a>
                                    @endforeach
                                </div>
                                @else
                                <a class="block rounded-md px-2.5 py-1.5 text-[12px] text-gray-500 hover:text-brand" href="#{{ $child['id'] }}" onclick="document.getElementById('mobile-sidebar-drawer').classList.add('hidden')">{{ $child['label'] }}</a>
                                @endif
                            @endforeach
                        </div>
                        @else
                        <a class="flex items-center gap-2.5 rounded-lg px-3 py-2 text-[13px] font-medium text-gray-700 hover:bg-gray-50" href="#{{ $section['id'] }}" onclick="document.getElementById('mobile-sidebar-drawer').classList.add('hidden')">
                            <span class="material-symbols-outlined text-[18px] text-gray-400">{{ $section['icon'] }}</span>{{ $section['label'] }}
                        </a>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Header --}}
            <div class="mb-16">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-brand/20 bg-brand/5 text-brand text-[10px] font-bold tracking-widest uppercase mb-6">
                    <span class="material-symbols-outlined text-sm">menu_book</span> 16 MODULES
                </div>
                <h1 class="text-4xl md:text-5xl font-extralight tracking-tight text-gray-900 mb-4">Documentation</h1>
                <p class="max-w-2xl text-lg font-light leading-relaxed text-gray-500">
                    Everything you need to know about every Bojeri module — from setup to daily use. Click any module below or browse the sidebar.
                </p>
            </div>

            {{-- ======================================= --}}
            {{-- MODULE SECTIONS --}}
            {{-- ======================================= --}}

            @php
            $modules = [
                [
                    'id' => 'dashboard',
                    'icon' => 'dashboard',
                    'title' => 'Dashboard',
                    'tagline' => 'Your business at a glance — real-time data, role-specific views.',
                    'description' => 'The Dashboard gives every team member a personalized command center. Five dedicated dashboards — Account, Project, HRM, POS, and CRM — surface the metrics that matter most to each role. Finance sees revenue and expenses; HR sees attendance and leave requests; Sales sees pipeline and deal values.',
                    'features' => [
                        ['icon' => 'monitoring', 'title' => 'Account Dashboard', 'desc' => 'Revenue, expenses, invoices, and financial KPIs at a glance.'],
                        ['icon' => 'assignment', 'title' => 'Project Dashboard', 'desc' => 'Active projects, task progress, milestones, and deadlines.'],
                        ['icon' => 'badge', 'title' => 'HRM Dashboard', 'desc' => 'Attendance, leave stats, payroll summaries, and team status.'],
                        ['icon' => 'point_of_sale', 'title' => 'POS Dashboard', 'desc' => 'Daily sales, top products, and POS transaction analytics.'],
                        ['icon' => 'favorite', 'title' => 'CRM Dashboard', 'desc' => 'Lead pipeline, deal values, conversion rates, and source tracking.'],
                    ]
                ],
                [
                    'id' => 'user-management',
                    'icon' => 'group',
                    'title' => 'User Management',
                    'tagline' => 'The right people, the right access — every time.',
                    'description' => 'Create team members with defined roles and granular permissions. Start by setting up Roles — each role gets a custom name and a precise set of permissions chosen from your active modules. Then create Users and assign them a role. Every user action is gated by Spatie permission checks.',
                    'features' => [
                        ['icon' => 'shield_person', 'title' => 'Role Builder', 'desc' => 'Create unlimited custom roles with per-permission control from every module.'],
                        ['icon' => 'person_add', 'title' => 'User Creation', 'desc' => 'Add users with name, email, phone, password, and role in one form.'],
                        ['icon' => 'history', 'title' => 'Login History', 'desc' => 'View every login with IP, browser, timestamp, and role filters.'],
                        ['icon' => 'switch_account', 'title' => 'Impersonation', 'desc' => 'Log in as any user to troubleshoot issues — without their password.'],
                    ]
                ],
                [
                    'id' => 'proposal',
                    'icon' => 'description',
                    'title' => 'Proposals',
                    'tagline' => 'Turn quotes into commitments — then into invoices — in clicks, not days.',
                    'description' => 'Create proposals by selecting a customer, choosing products from your warehouse inventory, and adding line items with quantities, prices, discounts, and taxes. Track proposals through Draft → Sent → Accepted → Rejected. Convert accepted proposals directly into Sales Invoices with a single click.',
                    'features' => [
                        ['icon' => 'calculate', 'title' => 'Auto-Calculate Totals', 'desc' => 'Per-line discounts, multi-rate taxes, and running subtotals computed instantly.'],
                        ['icon' => 'swap_horiz', 'title' => 'One-Click Conversion', 'desc' => 'Convert accepted proposals directly into Sales Invoices with all data preserved.'],
                        ['icon' => 'warehouse', 'title' => 'Warehouse Integration', 'desc' => 'Pull products with live stock quantities so you never quote items you can\'t deliver.'],
                        ['icon' => 'print', 'title' => 'Print View', 'desc' => 'Clean, professional print layout for client-ready proposals.'],
                    ]
                ],
                [
                    'id' => 'sales-invoice',
                    'icon' => 'receipt',
                    'title' => 'Sales Invoice',
                    'tagline' => 'From draft to paid — track every dollar with precision.',
                    'description' => 'Create Sales Invoices with multi-line items, per-item discounts, and multiple tax rates. Invoices follow a Draft → Posted lifecycle with edit protection on posted invoices. Track balance amounts and manage Sales Invoice Returns with their own approval workflow.',
                    'features' => [
                        ['icon' => 'receipt_long', 'title' => 'Invoice Builder', 'desc' => 'Multi-line invoices with products, quantities, prices, taxes, and discounts.'],
                        ['icon' => 'lock', 'title' => 'Data Integrity', 'desc' => 'Posted invoices are locked — no accidental edits to financial records.'],
                        ['icon' => 'undo', 'title' => 'Sales Returns', 'desc' => 'Linked returns with item-level detail and Draft → Approved → Completed flow.'],
                        ['icon' => 'account_balance_wallet', 'title' => 'Balance Tracking', 'desc' => 'Total vs. balance fields show outstanding payments instantly.'],
                    ]
                ],
                [
                    'id' => 'purchase',
                    'icon' => 'shopping_cart',
                    'title' => 'Purchase',
                    'tagline' => 'Control what comes in — every vendor, every warehouse, every return.',
                    'description' => 'Cover the full procurement cycle: Purchase Invoices with multi-line items and Draft → Posted lifecycle, Purchase Returns with auto debit notes, Warehouse management with named locations, and inter-warehouse Stock Transfers with approval workflows.',
                    'features' => [
                        ['icon' => 'receipt', 'title' => 'Purchase Invoices', 'desc' => 'Record vendor purchases with multi-line items, taxes, and discounts.'],
                        ['icon' => 'assignment_return', 'title' => 'Purchase Returns', 'desc' => 'Linked returns with per-item quantities, reasons, and auto debit notes.'],
                        ['icon' => 'warehouse', 'title' => 'Warehouses', 'desc' => 'Named storage locations with address, phone, and active/inactive status.'],
                        ['icon' => 'local_shipping', 'title' => 'Stock Transfers', 'desc' => 'Move stock between warehouses with approval workflows and quantity tracking.'],
                    ]
                ],
                [
                    'id' => 'product-service',
                    'icon' => 'inventory_2',
                    'title' => 'Products & Services',
                    'tagline' => 'Your complete catalog — organized, priced, and ready to sell.',
                    'description' => 'The foundation that powers your invoices, proposals, POS transactions, and purchase orders. Create items with SKU, dual pricing (sale & purchase), categories, tax rates, measurement units, and per-warehouse stock tracking.',
                    'features' => [
                        ['icon' => 'qr_code', 'title' => 'Item Profiles', 'desc' => 'Name, SKU, description, sale price, purchase price, unit, and product type.'],
                        ['icon' => 'category', 'title' => 'Category Management', 'desc' => 'Organize items into categories for structured browsing and filtering.'],
                        ['icon' => 'percent', 'title' => 'Tax Configuration', 'desc' => 'Create named taxes with rates that auto-apply to every transaction.'],
                        ['icon' => 'straighten', 'title' => 'Unit Management', 'desc' => 'Define custom measurement units — pieces, kg, liters, hours.'],
                    ]
                ],
                [
                    'id' => 'project',
                    'icon' => 'assignment',
                    'title' => 'Projects',
                    'tagline' => 'Plan, track, and deliver — every task, every milestone, every team member.',
                    'description' => 'Full project lifecycle management with tasks, subtasks, milestones, Kanban boards, Calendar views, a dedicated Bug tracker, file uploads, activity logs, and cross-project Reports. Invite team members and clients for visibility.',
                    'features' => [
                        ['icon' => 'view_kanban', 'title' => 'Kanban Board', 'desc' => 'Visual drag-and-drop task management with custom stage workflows.'],
                        ['icon' => 'calendar_month', 'title' => 'Calendar View', 'desc' => 'Timeline-based task visualization for deadline tracking.'],
                        ['icon' => 'bug_report', 'title' => 'Bug Tracker', 'desc' => 'Dedicated bug tracking with priorities, stages, and comment threads.'],
                        ['icon' => 'content_copy', 'title' => 'Project Duplication', 'desc' => 'Clone project structure for recurring project types.'],
                    ]
                ],
                [
                    'id' => 'accounting',
                    'icon' => 'account_balance',
                    'title' => 'Accounting',
                    'tagline' => 'Your books, balanced — customers, vendors, banking, and reports in one place.',
                    'description' => 'Full double-entry bookkeeping directly in your ERP. Chart of Accounts, Revenue & Expense tracking, Customer & Vendor Payments, Banking (accounts, transactions, transfers), Credit & Debit Notes, and Financial Reports — all connected to your invoicing and purchasing modules.',
                    'features' => [
                        ['icon' => 'account_tree', 'title' => 'Chart of Accounts', 'desc' => 'Full double-entry structure with Assets, Liabilities, Equity, Revenue, Expenses.'],
                        ['icon' => 'savings', 'title' => 'Banking', 'desc' => 'Multiple bank accounts, transaction recording, and inter-account transfers.'],
                        ['icon' => 'payments', 'title' => 'Payments', 'desc' => 'Customer and vendor payments tracked against outstanding invoices.'],
                        ['icon' => 'equalizer', 'title' => 'Financial Reports', 'desc' => 'Profit & loss, balance sheets, and transaction summaries in one click.'],
                    ]
                ],
                [
                    'id' => 'hrm',
                    'icon' => 'badge',
                    'title' => 'HRM',
                    'tagline' => 'Your team, managed — attendance, payroll, leave, and lifecycle.',
                    'description' => 'Complete human resource management: Employees, Shifts, Clock in/out with IP restriction, automatic overtime calculations, Leave Management (types, applications, balance, holidays), Payroll & Payslips, Awards, Promotions, Resignations, Terminations, Warnings, Complaints, Documents, Announcements, and Events.',
                    'features' => [
                        ['icon' => 'schedule', 'title' => 'Attendance & Shifts', 'desc' => 'Clock in/out with IP restriction, shift-aware tracking, and overtime calculations.'],
                        ['icon' => 'payments', 'title' => 'Payroll & Payslips', 'desc' => 'Generate payroll from attendance data with automated allowance and deduction calculations.'],
                        ['icon' => 'event_busy', 'title' => 'Leave Management', 'desc' => 'Leave types, applications, balance tracking, and holiday calendars.'],
                        ['icon' => 'military_tech', 'title' => 'Employee Lifecycle', 'desc' => 'Awards, promotions, resignations, terminations, transfers, and complaints.'],
                    ]
                ],
                [
                    'id' => 'pos',
                    'icon' => 'point_of_sale',
                    'title' => 'POS',
                    'tagline' => 'Sell in person, sync to your books — every transaction, every barcode.',
                    'description' => 'Browser-based point-of-sale terminal. Search or scan products, process sales with auto-calculated taxes, generate POS Orders with complete records, print barcodes for physical inventory, and view sales analytics — all connected to your product catalog and warehouse stock.',
                    'features' => [
                        ['icon' => 'devices', 'title' => 'Browser-Based Terminal', 'desc' => 'Sell from any browser — no special hardware required.'],
                        ['icon' => 'barcode', 'title' => 'Barcode Printing', 'desc' => 'Generate and print barcodes for physical inventory.'],
                        ['icon' => 'sync', 'title' => 'Inventory Sync', 'desc' => 'Every sale updates warehouse stock levels in real time.'],
                        ['icon' => 'analytics', 'title' => 'Sales Reports', 'desc' => 'Daily, weekly, and monthly sales analytics and breakdowns.'],
                    ]
                ],
                [
                    'id' => 'crm',
                    'icon' => 'favorite',
                    'title' => 'CRM',
                    'tagline' => 'Every lead tracked, every deal closed — your sales pipeline, connected.',
                    'description' => 'Lead and deal management with custom pipeline stages, multi-user assignments, source tracking, and conversion analytics. Leads convert to deals with full history preservation. CRM data feeds directly into invoicing and reporting.',
                    'features' => [
                        ['icon' => 'person_pin', 'title' => 'Lead Management', 'desc' => 'Track leads with source, stage, value, and multi-member assignments.'],
                        ['icon' => 'handshake', 'title' => 'Deal Pipeline', 'desc' => 'Custom stages, close dates, values, and progress tracking per deal.'],
                        ['icon' => 'conversion_path', 'title' => 'Lead-to-Deal Conversion', 'desc' => 'Convert qualified leads into deals with full history preservation.'],
                        ['icon' => 'bar_chart', 'title' => 'CRM Reports', 'desc' => 'Lead and deal reports with conversion rates and pipeline analytics.'],
                    ]
                ],
                [
                    'id' => 'media-library',
                    'icon' => 'image',
                    'title' => 'Media Library',
                    'tagline' => 'Every file, organized and accessible — your team\'s shared workspace for media.',
                    'description' => 'Centralized file management with batch uploads, directory organization, and granular access controls. Supports local, AWS S3, and Wasabi storage backends. Powered by Spatie MediaLibrary for enterprise-grade file handling.',
                    'features' => [
                        ['icon' => 'upload_file', 'title' => 'Batch Upload', 'desc' => 'Upload multiple files at once with drag-and-drop support.'],
                        ['icon' => 'folder', 'title' => 'Directory Management', 'desc' => 'Create, rename, and nest directories for organized file storage.'],
                        ['icon' => 'cloud', 'title' => 'Multiple Backends', 'desc' => 'Store files on local disk, AWS S3, or Wasabi cloud storage.'],
                        ['icon' => 'lock', 'title' => 'Access Controls', 'desc' => 'Own vs. all media permissions with separate download controls.'],
                    ]
                ],
                [
                    'id' => 'messenger',
                    'icon' => 'chat',
                    'title' => 'Messenger',
                    'tagline' => 'Instant team communication — right inside your workspace.',
                    'description' => 'Real-time messaging powered by Pusher. Send text and files, see read receipts, edit or delete messages, favorite contacts, and pin conversations. Online presence indicators show who\'s active right now.',
                    'features' => [
                        ['icon' => 'bolt', 'title' => 'Real-Time Delivery', 'desc' => 'Instant message delivery via Pusher WebSockets — no page refreshes.'],
                        ['icon' => 'attach_file', 'title' => 'File Sharing', 'desc' => 'Send documents, images, and files within conversations.'],
                        ['icon' => 'visibility', 'title' => 'Read Receipts', 'desc' => 'Seen/unseen indicators on every message.'],
                        ['icon' => 'circle', 'title' => 'Online Presence', 'desc' => 'Live indicators showing who\'s online right now.'],
                    ]
                ],
                [
                    'id' => 'helpdesk',
                    'icon' => 'help_center',
                    'title' => 'Helpdesk',
                    'tagline' => 'Every request tracked, every issue resolved — support that never drops the ball.',
                    'description' => 'Complete ticketing system with priorities, color-coded categories, threaded replies with file attachments, internal notes, and resolution time tracking. Tickets follow Open → In Progress → Resolved → Closed lifecycle.',
                    'features' => [
                        ['icon' => 'confirmation_number', 'title' => 'Ticket System', 'desc' => 'Create tickets with title, description, priority, and category.'],
                        ['icon' => 'forum', 'title' => 'Threaded Replies', 'desc' => 'Text responses and file attachments directly on each ticket.'],
                        ['icon' => 'visibility_off', 'title' => 'Internal Notes', 'desc' => 'Private replies visible only to support staff — not the requester.'],
                        ['icon' => 'timer', 'title' => 'SLA Tracking', 'desc' => 'Automatic resolution timestamps for measuring response times.'],
                    ]
                ],
                [
                    'id' => 'plan',
                    'icon' => 'credit_card',
                    'title' => 'Subscriptions',
                    'tagline' => 'Flexible plans, transparent billing — grow your platform with confidence.',
                    'description' => 'Create subscription plans with monthly/annual pricing, user limits, storage quotas, and selectable feature modules. Accept payments via Stripe, PayPal, or Bank Transfer. Apply coupon codes with percentage or fixed discounts, usage limits, and expiry dates.',
                    'features' => [
                        ['icon' => 'tune', 'title' => 'Plan Builder', 'desc' => 'Create plans with pricing, user limits, storage quotas, and module access.'],
                        ['icon' => 'payment', 'title' => 'Payment Gateways', 'desc' => 'Accept payments via Stripe, PayPal, or bank transfer with approval workflow.'],
                        ['icon' => 'local_offer', 'title' => 'Coupon System', 'desc' => 'Discount codes with type, limits, thresholds, and expiry dates.'],
                        ['icon' => 'rocket_launch', 'title' => 'Free Trials', 'desc' => 'Let prospects explore the platform before committing.'],
                    ]
                ],
                [
                    'id' => 'settings',
                    'icon' => 'settings',
                    'title' => 'Settings',
                    'tagline' => 'Configure everything — your brand, your email, your storage, your way.',
                    'description' => 'Your platform\'s control center. Brand settings, currency configuration, SMTP email, cloud storage backends, cookie consent, Pusher config, email templates, notification templates, multi-language management with per-package translations, and SEO settings.',
                    'features' => [
                        ['icon' => 'palette', 'title' => 'Brand & Theme', 'desc' => 'Company name, logo, favicon, theme mode, and color scheme.'],
                        ['icon' => 'email', 'title' => 'Email Configuration', 'desc' => 'SMTP settings with provider selection and live test email.'],
                        ['icon' => 'translate', 'title' => 'Language Management', 'desc' => 'Create languages, edit translations, and manage per-package strings.'],
                        ['icon' => 'travel_explore', 'title' => 'SEO Settings', 'desc' => 'Meta tags and SEO configuration for all public-facing pages.'],
                    ]
                ],
            ];
            @endphp

            <div class="space-y-24">
                @foreach($modules as $index => $mod)
                <section class="scroll-mt-24" id="{{ $mod['id'] }}">
                    {{-- Module header --}}
                    <div class="flex items-start gap-4 mb-6">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-brand/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-brand text-2xl">{{ $mod['icon'] }}</span>
                        </div>
                        <div>
                            <div class="flex items-center gap-3">
                                <h2 class="text-2xl md:text-3xl font-light text-gray-900">{{ $mod['title'] }}</h2>
                                <span class="hidden md:inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-widest bg-gray-100 text-gray-400">Module {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            </div>
                            <p class="text-brand text-sm font-medium mt-1">{{ $mod['tagline'] }}</p>
                        </div>
                    </div>

                    {{-- Description --}}
                    <p class="text-gray-500 font-light leading-relaxed mb-8 max-w-3xl">{{ $mod['description'] }}</p>

                    {{-- Feature cards --}}
                    <div class="grid sm:grid-cols-2 gap-4">
                        @foreach($mod['features'] as $feat)
                        <div class="group rounded-xl border border-gray-100 p-5 hover:border-brand/20 hover:shadow-md transition-all duration-300">
                            <div class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-brand text-xl mt-0.5">{{ $feat['icon'] }}</span>
                                <div>
                                    <h4 class="text-sm font-semibold text-gray-900 mb-1">{{ $feat['title'] }}</h4>
                                    <p class="text-xs text-gray-500 font-light leading-relaxed">{{ $feat['desc'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    @if($index < count($modules) - 1)
                    <div class="h-px bg-gray-100 mt-16"></div>
                    @endif
                </section>
                @endforeach
            </div>

            {{-- Bottom CTA --}}
            <div class="mt-24 rounded-2xl bg-gradient-to-br from-brand to-emerald-600 p-10 md:p-14 text-center relative overflow-hidden">
                <div class="absolute -right-12 -top-12 w-48 h-48 bg-white/10 rounded-full blur-3xl"></div>
                <h3 class="text-2xl md:text-3xl font-light text-white mb-3">Ready to explore?</h3>
                <p class="text-emerald-100 font-light mb-6 max-w-md mx-auto">Start your free trial and get access to all 16 modules.</p>
                <a href="/register" class="inline-block bg-white text-brand font-semibold px-8 py-3 rounded-full hover:shadow-xl transition-all text-sm">Start Free Trial</a>
            </div>
        </main>

        {{-- ========================================= --}}
        {{-- RIGHT SIDEBAR (table of contents) --}}
        {{-- ========================================= --}}
        <aside class="sticky top-16 hidden h-[calc(100vh-4rem)] w-48 shrink-0 py-10 pl-4 xl:block">
            <p class="mb-4 text-[10px] font-bold uppercase tracking-widest text-gray-400">Modules</p>
            <nav class="sidebar-scroll h-[calc(100%-2rem)] overflow-y-auto flex flex-col gap-1 border-l border-gray-100" id="toc-nav">
                @foreach($modules as $index => $mod)
                <a class="toc-link relative -left-px block border-l border-transparent pl-3 text-[11px] text-gray-400 hover:border-brand hover:text-brand transition-all py-1" href="#{{ $mod['id'] }}">
                    {{ $mod['title'] }}
                </a>
                @endforeach
            </nav>
        </aside>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // =============================================
    // Sidebar toggle (collapsible menus)
    // =============================================
    function toggleSidebar(btn) {
        const targetId = btn.getAttribute('data-target');
        const target = document.getElementById(targetId);
        if (!target) return;

        const isHidden = target.classList.contains('hidden');
        const chevron = btn.querySelector('.chevron-icon');

        if (isHidden) {
            target.classList.remove('hidden');
            if (chevron) chevron.style.transform = 'rotate(90deg)';
            btn.classList.add('text-brand');
        } else {
            target.classList.add('hidden');
            if (chevron) chevron.style.transform = 'rotate(0deg)';
            btn.classList.remove('text-brand');
        }
    }

    // =============================================
    // Scroll spy for right-sidebar TOC
    // =============================================
    document.addEventListener('DOMContentLoaded', function () {
        const tocLinks = document.querySelectorAll('.toc-link');
        const sections = [];

        tocLinks.forEach(link => {
            const id = link.getAttribute('href').replace('#', '');
            const section = document.getElementById(id);
            if (section) sections.push({ el: section, link: link });
        });

        function updateActiveToc() {
            let current = null;
            const scrollY = window.scrollY + 120;

            for (let i = sections.length - 1; i >= 0; i--) {
                if (sections[i].el.offsetTop <= scrollY) {
                    current = sections[i];
                    break;
                }
            }

            tocLinks.forEach(l => {
                l.classList.remove('border-brand', 'text-brand', 'font-medium');
                l.classList.add('border-transparent', 'text-gray-400');
            });

            if (current) {
                current.link.classList.add('border-brand', 'text-brand', 'font-medium');
                current.link.classList.remove('border-transparent', 'text-gray-400');
            }
        }

        window.addEventListener('scroll', updateActiveToc, { passive: true });
        updateActiveToc();
    });

    // =============================================
    // Simple search filter for sidebar
    // =============================================
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('docs-search');
        if (!searchInput) return;

        searchInput.addEventListener('input', function () {
            const query = this.value.toLowerCase().trim();
            const sidebar = document.getElementById('docs-sidebar');
            if (!sidebar) return;

            const items = sidebar.querySelectorAll('.mb-1');
            items.forEach(item => {
                const text = item.textContent.toLowerCase();
                if (query === '' || text.includes(query)) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
</script>
@endpush