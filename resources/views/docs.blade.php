@extends('layouts.app')

@section('title', __('front.meta.docs_title'))
@section('meta_description', __('front.meta.docs_description'))

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
                    <input class="w-full rounded-lg border border-gray-100 bg-gray-50/50 py-2 pl-9 pr-3 text-sm outline-none placeholder:text-gray-400 focus:border-brand/40 focus:ring-2 focus:ring-brand/10 transition-all" placeholder="@lang('front.docs.search_placeholder')" type="text" id="docs-search"/>
                </div>

                {{-- Nav sections --}}
                @php
                $menuSections = [
                    [
                        'id' => 'dashboard',
                        'icon' => 'dashboard',
                        'label' => __('front.docs.menu_dashboard'),
                        'children' => [
                            ['id' => 'account-dashboard', 'label' => __('front.docs.menu_account_dashboard')],
                            ['id' => 'project-dashboard', 'label' => __('front.docs.menu_project_dashboard')],
                            ['id' => 'hrm-dashboard', 'label' => __('front.docs.menu_hrm_dashboard')],
                            ['id' => 'pos-dashboard', 'label' => __('front.docs.menu_pos_dashboard')],
                            ['id' => 'crm-dashboard', 'label' => __('front.docs.menu_crm_dashboard')],
                        ]
                    ],
                    [
                        'id' => 'user-management',
                        'icon' => 'group',
                        'label' => __('front.docs.menu_user_management'),
                        'children' => [
                            ['id' => 'roles', 'label' => __('front.docs.menu_roles')],
                            ['id' => 'users', 'label' => __('front.docs.menu_users')],
                        ]
                    ],
                    [
                        'id' => 'proposal',
                        'icon' => 'description',
                        'label' => __('front.docs.menu_proposal'),
                        'children' => []
                    ],
                    [
                        'id' => 'sales-invoice',
                        'icon' => 'receipt',
                        'label' => __('front.docs.menu_sales_invoice'),
                        'children' => [
                            ['id' => 'sales-invoice-list', 'label' => __('front.docs.menu_sales_invoice_list')],
                            ['id' => 'sales-invoice-returns', 'label' => __('front.docs.menu_sales_invoice_returns')],
                        ]
                    ],
                    [
                        'id' => 'purchase',
                        'icon' => 'shopping_cart',
                        'label' => __('front.docs.menu_purchase'),
                        'children' => [
                            ['id' => 'purchase-invoice', 'label' => __('front.docs.menu_purchase_invoice')],
                            ['id' => 'purchase-returns', 'label' => __('front.docs.menu_purchase_returns')],
                            ['id' => 'warehouses', 'label' => __('front.docs.menu_warehouses')],
                            ['id' => 'purchase-transfers', 'label' => __('front.docs.menu_transfers')],
                        ]
                    ],
                    [
                        'id' => 'product-service',
                        'icon' => 'inventory_2',
                        'label' => __('front.docs.menu_product_service'),
                        'children' => [
                            ['id' => 'items', 'label' => __('front.docs.menu_items')],
                            ['id' => 'product-system-setup', 'label' => __('front.docs.menu_system_setup')],
                        ]
                    ],
                    [
                        'id' => 'project',
                        'icon' => 'assignment',
                        'label' => __('front.docs.menu_project'),
                        'children' => [
                            ['id' => 'projects-list', 'label' => __('front.docs.menu_projects_list')],
                            ['id' => 'projects-report', 'label' => __('front.docs.menu_projects_report')],
                            ['id' => 'project-system-setup', 'label' => __('front.docs.menu_system_setup')],
                        ]
                    ],
                    [
                        'id' => 'accounting',
                        'icon' => 'account_balance',
                        'label' => __('front.docs.menu_accounting'),
                        'children' => [
                            ['id' => 'customers', 'label' => __('front.docs.menu_customers')],
                            ['id' => 'vendors', 'label' => __('front.docs.menu_vendors')],
                            [
                                'id' => 'banking',
                                'label' => __('front.docs.menu_banking'),
                                'nested' => [
                                    ['id' => 'bank-accounts', 'label' => __('front.docs.menu_bank_accounts')],
                                    ['id' => 'bank-transactions', 'label' => __('front.docs.menu_bank_transactions')],
                                    ['id' => 'bank-transfers', 'label' => __('front.docs.menu_bank_transfers')],
                                ]
                            ],
                            ['id' => 'chart-of-accounts', 'label' => __('front.docs.menu_chart_of_accounts')],
                            ['id' => 'vendor-payments', 'label' => __('front.docs.menu_vendor_payments')],
                            ['id' => 'customer-payments', 'label' => __('front.docs.menu_customer_payments')],
                            ['id' => 'revenue', 'label' => __('front.docs.menu_revenue')],
                            ['id' => 'expense', 'label' => __('front.docs.menu_expense')],
                            ['id' => 'debit-notes', 'label' => __('front.docs.menu_debit_notes')],
                            ['id' => 'credit-notes', 'label' => __('front.docs.menu_credit_notes')],
                            ['id' => 'accounting-reports', 'label' => __('front.docs.menu_reports')],
                            ['id' => 'accounting-system-setup', 'label' => __('front.docs.menu_system_setup')],
                        ]
                    ],
                    [
                        'id' => 'hrm',
                        'icon' => 'badge',
                        'label' => __('front.docs.menu_hrm'),
                        'children' => [
                            ['id' => 'employees', 'label' => __('front.docs.menu_employees')],
                            ['id' => 'payslip', 'label' => __('front.docs.menu_payslip')],
                            ['id' => 'set-salary', 'label' => __('front.docs.menu_set_salary')],
                            ['id' => 'payroll', 'label' => __('front.docs.menu_payroll')],
                            ['id' => 'attendance', 'label' => __('front.docs.menu_attendance')],
                            ['id' => 'shifts', 'label' => __('front.docs.menu_shifts')],
                            ['id' => 'attendances', 'label' => __('front.docs.menu_attendances')],
                            [
                                'id' => 'leave-management',
                                'label' => __('front.docs.menu_leave_management'),
                                'nested' => [
                                    ['id' => 'leave-types', 'label' => __('front.docs.menu_leave_types')],
                                    ['id' => 'leave-applications', 'label' => __('front.docs.menu_leave_applications')],
                                    ['id' => 'leave-balance', 'label' => __('front.docs.menu_leave_balance')],
                                    ['id' => 'holidays', 'label' => __('front.docs.menu_holidays')],
                                ]
                            ],
                            ['id' => 'awards', 'label' => __('front.docs.menu_awards')],
                            ['id' => 'promotions', 'label' => __('front.docs.menu_promotions')],
                            ['id' => 'resignations', 'label' => __('front.docs.menu_resignations')],
                            ['id' => 'terminations', 'label' => __('front.docs.menu_terminations')],
                            ['id' => 'warnings', 'label' => __('front.docs.menu_warnings')],
                            ['id' => 'complaints', 'label' => __('front.docs.menu_complaints')],
                            ['id' => 'hrm-transfers', 'label' => __('front.docs.menu_hrm_transfers')],
                            ['id' => 'documents', 'label' => __('front.docs.menu_documents')],
                            ['id' => 'acknowledgments', 'label' => __('front.docs.menu_acknowledgments')],
                            ['id' => 'announcements', 'label' => __('front.docs.menu_announcements')],
                            ['id' => 'events', 'label' => __('front.docs.menu_events')],
                            ['id' => 'hrm-system-setup', 'label' => __('front.docs.menu_system_setup')],
                        ]
                    ],
                    [
                        'id' => 'pos',
                        'icon' => 'point_of_sale',
                        'label' => __('front.docs.menu_pos'),
                        'children' => [
                            ['id' => 'add-pos', 'label' => __('front.docs.menu_add_pos')],
                            ['id' => 'pos-orders', 'label' => __('front.docs.menu_pos_orders')],
                            ['id' => 'print-barcode', 'label' => __('front.docs.menu_print_barcode')],
                            ['id' => 'pos-reports', 'label' => __('front.docs.menu_reports')],
                        ]
                    ],
                    [
                        'id' => 'crm',
                        'icon' => 'favorite',
                        'label' => __('front.docs.menu_crm'),
                        'children' => [
                            ['id' => 'leads', 'label' => __('front.docs.menu_leads')],
                            ['id' => 'deals', 'label' => __('front.docs.menu_deals')],
                            ['id' => 'crm-system-setup', 'label' => __('front.docs.menu_system_setup')],
                            [
                                'id' => 'crm-reports',
                                'label' => __('front.docs.menu_crm_reports'),
                                'nested' => [
                                    ['id' => 'lead-reports', 'label' => __('front.docs.menu_lead_reports')],
                                    ['id' => 'deal-reports', 'label' => __('front.docs.menu_deal_reports')],
                                ]
                            ],
                        ]
                    ],
                    [
                        'id' => 'messenger',
                        'icon' => 'chat',
                        'label' => __('front.docs.menu_messenger'),
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
                <span class="material-symbols-outlined text-lg">menu</span> @lang('front.docs.browse_modules')
            </button>

            {{-- Mobile drawer --}}
            <div class="hidden fixed inset-0 z-[60] lg:hidden" id="mobile-sidebar-drawer">
                <div class="absolute inset-0 bg-black/20 backdrop-blur-sm" onclick="document.getElementById('mobile-sidebar-drawer').classList.add('hidden')"></div>
                <div class="absolute left-0 top-0 h-full w-72 bg-white shadow-xl p-6 overflow-y-auto sidebar-scroll">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-sm font-bold text-gray-900">@lang('front.docs.modules_heading')</h3>
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
                    <span class="material-symbols-outlined text-sm">menu_book</span> @lang('front.docs.badge')
                </div>
                <h1 class="text-4xl md:text-5xl font-extralight tracking-tight text-gray-900 mb-4">@lang('front.docs.title')</h1>
                <p class="max-w-2xl text-lg font-light leading-relaxed text-gray-500">
                    @lang('front.docs.subtitle')
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
                    'title' => __('front.docs.mod_dashboard_title'),
                    'tagline' => __('front.docs.mod_dashboard_tagline'),
                    'description' => __('front.docs.mod_dashboard_desc'),
                    'features' => [
                        ['icon' => 'monitoring', 'title' => __('front.docs.mod_dashboard_feat1_title'), 'desc' => __('front.docs.mod_dashboard_feat1_desc')],
                        ['icon' => 'assignment', 'title' => __('front.docs.mod_dashboard_feat2_title'), 'desc' => __('front.docs.mod_dashboard_feat2_desc')],
                        ['icon' => 'badge', 'title' => __('front.docs.mod_dashboard_feat3_title'), 'desc' => __('front.docs.mod_dashboard_feat3_desc')],
                        ['icon' => 'point_of_sale', 'title' => __('front.docs.mod_dashboard_feat4_title'), 'desc' => __('front.docs.mod_dashboard_feat4_desc')],
                        ['icon' => 'favorite', 'title' => __('front.docs.mod_dashboard_feat5_title'), 'desc' => __('front.docs.mod_dashboard_feat5_desc')],
                    ]
                ],
                [
                    'id' => 'user-management',
                    'icon' => 'group',
                    'title' => __('front.docs.mod_usermgmt_title'),
                    'tagline' => __('front.docs.mod_usermgmt_tagline'),
                    'description' => __('front.docs.mod_usermgmt_desc'),
                    'features' => [
                        ['icon' => 'shield_person', 'title' => __('front.docs.mod_usermgmt_feat1_title'), 'desc' => __('front.docs.mod_usermgmt_feat1_desc')],
                        ['icon' => 'person_add', 'title' => __('front.docs.mod_usermgmt_feat2_title'), 'desc' => __('front.docs.mod_usermgmt_feat2_desc')],
                        ['icon' => 'history', 'title' => __('front.docs.mod_usermgmt_feat3_title'), 'desc' => __('front.docs.mod_usermgmt_feat3_desc')],
                        ['icon' => 'switch_account', 'title' => __('front.docs.mod_usermgmt_feat4_title'), 'desc' => __('front.docs.mod_usermgmt_feat4_desc')],
                    ]
                ],
                [
                    'id' => 'proposal',
                    'icon' => 'description',
                    'title' => __('front.docs.mod_proposal_title'),
                    'tagline' => __('front.docs.mod_proposal_tagline'),
                    'description' => __('front.docs.mod_proposal_desc'),
                    'features' => [
                        ['icon' => 'calculate', 'title' => __('front.docs.mod_proposal_feat1_title'), 'desc' => __('front.docs.mod_proposal_feat1_desc')],
                        ['icon' => 'swap_horiz', 'title' => __('front.docs.mod_proposal_feat2_title'), 'desc' => __('front.docs.mod_proposal_feat2_desc')],
                        ['icon' => 'warehouse', 'title' => __('front.docs.mod_proposal_feat3_title'), 'desc' => __('front.docs.mod_proposal_feat3_desc')],
                        ['icon' => 'print', 'title' => __('front.docs.mod_proposal_feat4_title'), 'desc' => __('front.docs.mod_proposal_feat4_desc')],
                    ]
                ],
                [
                    'id' => 'sales-invoice',
                    'icon' => 'receipt',
                    'title' => __('front.docs.mod_salesinvoice_title'),
                    'tagline' => __('front.docs.mod_salesinvoice_tagline'),
                    'description' => __('front.docs.mod_salesinvoice_desc'),
                    'features' => [
                        ['icon' => 'receipt_long', 'title' => __('front.docs.mod_salesinvoice_feat1_title'), 'desc' => __('front.docs.mod_salesinvoice_feat1_desc')],
                        ['icon' => 'lock', 'title' => __('front.docs.mod_salesinvoice_feat2_title'), 'desc' => __('front.docs.mod_salesinvoice_feat2_desc')],
                        ['icon' => 'undo', 'title' => __('front.docs.mod_salesinvoice_feat3_title'), 'desc' => __('front.docs.mod_salesinvoice_feat3_desc')],
                        ['icon' => 'account_balance_wallet', 'title' => __('front.docs.mod_salesinvoice_feat4_title'), 'desc' => __('front.docs.mod_salesinvoice_feat4_desc')],
                    ]
                ],
                [
                    'id' => 'purchase',
                    'icon' => 'shopping_cart',
                    'title' => __('front.docs.mod_purchase_title'),
                    'tagline' => __('front.docs.mod_purchase_tagline'),
                    'description' => __('front.docs.mod_purchase_desc'),
                    'features' => [
                        ['icon' => 'receipt', 'title' => __('front.docs.mod_purchase_feat1_title'), 'desc' => __('front.docs.mod_purchase_feat1_desc')],
                        ['icon' => 'assignment_return', 'title' => __('front.docs.mod_purchase_feat2_title'), 'desc' => __('front.docs.mod_purchase_feat2_desc')],
                        ['icon' => 'warehouse', 'title' => __('front.docs.mod_purchase_feat3_title'), 'desc' => __('front.docs.mod_purchase_feat3_desc')],
                        ['icon' => 'local_shipping', 'title' => __('front.docs.mod_purchase_feat4_title'), 'desc' => __('front.docs.mod_purchase_feat4_desc')],
                    ]
                ],
                [
                    'id' => 'product-service',
                    'icon' => 'inventory_2',
                    'title' => __('front.docs.mod_products_title'),
                    'tagline' => __('front.docs.mod_products_tagline'),
                    'description' => __('front.docs.mod_products_desc'),
                    'features' => [
                        ['icon' => 'qr_code', 'title' => __('front.docs.mod_products_feat1_title'), 'desc' => __('front.docs.mod_products_feat1_desc')],
                        ['icon' => 'category', 'title' => __('front.docs.mod_products_feat2_title'), 'desc' => __('front.docs.mod_products_feat2_desc')],
                        ['icon' => 'percent', 'title' => __('front.docs.mod_products_feat3_title'), 'desc' => __('front.docs.mod_products_feat3_desc')],
                        ['icon' => 'straighten', 'title' => __('front.docs.mod_products_feat4_title'), 'desc' => __('front.docs.mod_products_feat4_desc')],
                    ]
                ],
                [
                    'id' => 'project',
                    'icon' => 'assignment',
                    'title' => __('front.docs.mod_project_title'),
                    'tagline' => __('front.docs.mod_project_tagline'),
                    'description' => __('front.docs.mod_project_desc'),
                    'features' => [
                        ['icon' => 'view_kanban', 'title' => __('front.docs.mod_project_feat1_title'), 'desc' => __('front.docs.mod_project_feat1_desc')],
                        ['icon' => 'calendar_month', 'title' => __('front.docs.mod_project_feat2_title'), 'desc' => __('front.docs.mod_project_feat2_desc')],
                        ['icon' => 'bug_report', 'title' => __('front.docs.mod_project_feat3_title'), 'desc' => __('front.docs.mod_project_feat3_desc')],
                        ['icon' => 'content_copy', 'title' => __('front.docs.mod_project_feat4_title'), 'desc' => __('front.docs.mod_project_feat4_desc')],
                    ]
                ],
                [
                    'id' => 'accounting',
                    'icon' => 'account_balance',
                    'title' => __('front.docs.mod_accounting_title'),
                    'tagline' => __('front.docs.mod_accounting_tagline'),
                    'description' => __('front.docs.mod_accounting_desc'),
                    'features' => [
                        ['icon' => 'account_tree', 'title' => __('front.docs.mod_accounting_feat1_title'), 'desc' => __('front.docs.mod_accounting_feat1_desc')],
                        ['icon' => 'savings', 'title' => __('front.docs.mod_accounting_feat2_title'), 'desc' => __('front.docs.mod_accounting_feat2_desc')],
                        ['icon' => 'payments', 'title' => __('front.docs.mod_accounting_feat3_title'), 'desc' => __('front.docs.mod_accounting_feat3_desc')],
                        ['icon' => 'equalizer', 'title' => __('front.docs.mod_accounting_feat4_title'), 'desc' => __('front.docs.mod_accounting_feat4_desc')],
                    ]
                ],
                [
                    'id' => 'hrm',
                    'icon' => 'badge',
                    'title' => __('front.docs.mod_hrm_title'),
                    'tagline' => __('front.docs.mod_hrm_tagline'),
                    'description' => __('front.docs.mod_hrm_desc'),
                    'features' => [
                        ['icon' => 'schedule', 'title' => __('front.docs.mod_hrm_feat1_title'), 'desc' => __('front.docs.mod_hrm_feat1_desc')],
                        ['icon' => 'payments', 'title' => __('front.docs.mod_hrm_feat2_title'), 'desc' => __('front.docs.mod_hrm_feat2_desc')],
                        ['icon' => 'event_busy', 'title' => __('front.docs.mod_hrm_feat3_title'), 'desc' => __('front.docs.mod_hrm_feat3_desc')],
                        ['icon' => 'military_tech', 'title' => __('front.docs.mod_hrm_feat4_title'), 'desc' => __('front.docs.mod_hrm_feat4_desc')],
                    ]
                ],
                [
                    'id' => 'pos',
                    'icon' => 'point_of_sale',
                    'title' => __('front.docs.mod_pos_title'),
                    'tagline' => __('front.docs.mod_pos_tagline'),
                    'description' => __('front.docs.mod_pos_desc'),
                    'features' => [
                        ['icon' => 'devices', 'title' => __('front.docs.mod_pos_feat1_title'), 'desc' => __('front.docs.mod_pos_feat1_desc')],
                        ['icon' => 'barcode', 'title' => __('front.docs.mod_pos_feat2_title'), 'desc' => __('front.docs.mod_pos_feat2_desc')],
                        ['icon' => 'sync', 'title' => __('front.docs.mod_pos_feat3_title'), 'desc' => __('front.docs.mod_pos_feat3_desc')],
                        ['icon' => 'analytics', 'title' => __('front.docs.mod_pos_feat4_title'), 'desc' => __('front.docs.mod_pos_feat4_desc')],
                    ]
                ],
                [
                    'id' => 'crm',
                    'icon' => 'favorite',
                    'title' => __('front.docs.mod_crm_title'),
                    'tagline' => __('front.docs.mod_crm_tagline'),
                    'description' => __('front.docs.mod_crm_desc'),
                    'features' => [
                        ['icon' => 'person_pin', 'title' => __('front.docs.mod_crm_feat1_title'), 'desc' => __('front.docs.mod_crm_feat1_desc')],
                        ['icon' => 'handshake', 'title' => __('front.docs.mod_crm_feat2_title'), 'desc' => __('front.docs.mod_crm_feat2_desc')],
                        ['icon' => 'conversion_path', 'title' => __('front.docs.mod_crm_feat3_title'), 'desc' => __('front.docs.mod_crm_feat3_desc')],
                        ['icon' => 'bar_chart', 'title' => __('front.docs.mod_crm_feat4_title'), 'desc' => __('front.docs.mod_crm_feat4_desc')],
                    ]
                ],
                [
                    'id' => 'messenger',
                    'icon' => 'chat',
                    'title' => __('front.docs.mod_messenger_title'),
                    'tagline' => __('front.docs.mod_messenger_tagline'),
                    'description' => __('front.docs.mod_messenger_desc'),
                    'features' => [
                        ['icon' => 'bolt', 'title' => __('front.docs.mod_messenger_feat1_title'), 'desc' => __('front.docs.mod_messenger_feat1_desc')],
                        ['icon' => 'attach_file', 'title' => __('front.docs.mod_messenger_feat2_title'), 'desc' => __('front.docs.mod_messenger_feat2_desc')],
                        ['icon' => 'visibility', 'title' => __('front.docs.mod_messenger_feat3_title'), 'desc' => __('front.docs.mod_messenger_feat3_desc')],
                        ['icon' => 'circle', 'title' => __('front.docs.mod_messenger_feat4_title'), 'desc' => __('front.docs.mod_messenger_feat4_desc')],
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
                                <span class="hidden md:inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-widest bg-gray-100 text-gray-400">@lang('front.docs.module_label_prefix') {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
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
                <h3 class="text-2xl md:text-3xl font-light text-white mb-3">@lang('front.docs.ready_title')</h3>
                <p class="text-emerald-100 font-light mb-6 max-w-md mx-auto">@lang('front.docs.ready_desc')</p>
                <a href="/register" class="inline-block bg-white text-brand font-semibold px-8 py-3 rounded-full hover:shadow-xl transition-all text-sm">@lang('front.docs.ready_cta')</a>
            </div>
        </main>

        {{-- ========================================= --}}
        {{-- RIGHT SIDEBAR (table of contents) --}}
        {{-- ========================================= --}}
        <aside class="sticky top-16 hidden h-[calc(100vh-4rem)] w-48 shrink-0 py-10 pl-4 xl:block">
            <p class="mb-4 text-[10px] font-bold uppercase tracking-widest text-gray-400">@lang('front.docs.toc_label')</p>
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
