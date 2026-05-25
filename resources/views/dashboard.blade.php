<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Anda Expedition - Dashboard</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700&amp;family=JetBrains+Mono:wght@500&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary-fixed-dim": "#a0c9ff",
                        "surface-variant": "#dde2f3",
                        "on-surface": "#161c27",
                        "tertiary-fixed": "#dde3eb",
                        "secondary-container": "#d5e0f7",
                        "inverse-on-surface": "#ecf0ff",
                        "on-tertiary-fixed-variant": "#41474e",
                        "surface-dim": "#d4daea",
                        "surface-container": "#e8eeff",
                        "primary-fixed": "#d2e4ff",
                        "on-primary-fixed": "#001c37",
                        "secondary": "#545f72",
                        "on-primary": "#ffffff",
                        "secondary-fixed-dim": "#bcc7dd",
                        "outline": "#727780",
                        "inverse-primary": "#a0c9ff",
                        "on-secondary-fixed-variant": "#3c475a",
                        "on-primary-fixed-variant": "#07497d",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "surface-container-high": "#e3e8f9",
                        "inverse-surface": "#2a303d",
                        "on-surface-variant": "#42474f",
                        "background": "#f9f9ff",
                        "surface-tint": "#2d6197",
                        "surface-container-highest": "#dde2f3",
                        "on-tertiary-container": "#b4bbc2",
                        "secondary-fixed": "#d8e3fa",
                        "surface-container-low": "#f1f3ff",
                        "surface": "#f9f9ff",
                        "on-error-container": "#93000a",
                        "error-container": "#ffdad6",
                        "tertiary": "#2e343a",
                        "primary": "#00355f",
                        "on-error": "#ffffff",
                        "on-secondary": "#ffffff",
                        "on-background": "#161c27",
                        "tertiary-fixed-dim": "#c1c7cf",
                        "on-secondary-container": "#586377",
                        "on-tertiary-fixed": "#161c22",
                        "surface-bright": "#f9f9ff",
                        "primary-container": "#0f4c81",
                        "on-secondary-fixed": "#111c2c",
                        "tertiary-container": "#444b51",
                        "outline-variant": "#c2c7d1",
                        "on-primary-container": "#8ebdf9",
                        "error": "#ba1a1a"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "stack-xs": "4px",
                        "gutter": "24px",
                        "stack-md": "16px",
                        "base-unit": "4px",
                        "margin-mobile": "16px",
                        "stack-lg": "24px",
                        "container-max": "1440px",
                        "stack-sm": "8px",
                        "margin-desktop": "32px"
                    },
                    "fontFamily": {
                        "headline-sm": [
                            "Hanken Grotesk"
                        ],
                        "headline-lg-mobile": [
                            "Hanken Grotesk"
                        ],
                        "display-lg": [
                            "Hanken Grotesk"
                        ],
                        "body-lg": [
                            "Hanken Grotesk"
                        ],
                        "table-header": [
                            "Hanken Grotesk"
                        ],
                        "label-sm": [
                            "JetBrains Mono"
                        ],
                        "headline-md": [
                            "Hanken Grotesk"
                        ],
                        "body-md": [
                            "Hanken Grotesk"
                        ]
                    },
                    "fontSize": {
                        "headline-sm": [
                            "20px",
                            {
                                "lineHeight": "28px",
                                "fontWeight": "600"
                            }
                        ],
                        "headline-lg-mobile": [
                            "24px",
                            {
                                "lineHeight": "32px",
                                "fontWeight": "700"
                            }
                        ],
                        "display-lg": [
                            "32px",
                            {
                                "lineHeight": "40px",
                                "letterSpacing": "-0.02em",
                                "fontWeight": "700"
                            }
                        ],
                        "body-lg": [
                            "16px",
                            {
                                "lineHeight": "24px",
                                "fontWeight": "400"
                            }
                        ],
                        "table-header": [
                            "13px",
                            {
                                "lineHeight": "18px",
                                "fontWeight": "600"
                            }
                        ],
                        "label-sm": [
                            "12px",
                            {
                                "lineHeight": "16px",
                                "letterSpacing": "0.02em",
                                "fontWeight": "500"
                            }
                        ],
                        "headline-md": [
                            "24px",
                            {
                                "lineHeight": "32px",
                                "fontWeight": "600"
                            }
                        ],
                        "body-md": [
                            "14px",
                            {
                                "lineHeight": "20px",
                                "fontWeight": "400"
                            }
                        ]
                    }
                },
            },
        }
    </script>
</head>

<body class="bg-background text-on-background font-body-md min-h-screen flex">
    <!-- SideNavBar -->
    <nav
        class="hidden lg:flex flex-col w-64 h-screen sticky left-0 top-0 p-stack-md bg-surface-container dark:bg-surface-container-highest border-r border-outline-variant dark:border-outline">
        <div class="mb-stack-lg flex items-center gap-stack-sm px-stack-sm">
            <span class="material-symbols-outlined text-primary text-[32px]"
                style="font-variation-settings: 'FILL' 1;">package</span>
            <div>
                <h1 class="text-headline-sm font-headline-sm font-bold text-primary dark:text-inverse-primary">Anda
                    Expedition</h1>
                <p class="text-label-sm font-label-sm text-on-surface-variant">Logistics System</p>
            </div>
        </div>
        <ul class="flex flex-col gap-stack-xs flex-grow">
            <!-- Active Tab: Dashboard -->
            <li>
                <a class="flex items-center gap-stack-sm px-stack-md py-stack-sm rounded-lg bg-secondary-container dark:bg-secondary text-on-secondary-container dark:text-on-secondary font-bold hover:bg-surface-variant dark:hover:bg-inverse-surface transition-all duration-200 opacity-80 scale-[0.98]"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="dashboard" data-weight="fill"
                        style="font-variation-settings: 'FILL' 1;">dashboard</span>
                    <span class="text-label-sm font-label-sm">Dashboard</span>
                </a>
            </li>
            <!-- Inactive Tabs -->
            <li>
                <a class="flex items-center gap-stack-sm px-stack-md py-stack-sm rounded-lg text-on-surface-variant dark:text-surface-variant hover:bg-surface-variant/50 hover:text-primary transition-all duration-200"
                    href="{{ route('pengiriman.index') }}"><span class="material-symbols-outlined"
                        data-icon="local_shipping">local_shipping</span><span
                        class="text-label-sm font-label-sm">Shipping Data</span></a>
            </li>
            <li>
                <a class="flex items-center gap-stack-sm px-stack-md py-stack-sm rounded-lg text-on-surface-variant dark:text-surface-variant hover:bg-surface-variant/50 hover:text-primary transition-all duration-200"
                    href="{{ route('rekap') }}"><span class="material-symbols-outlined" data-icon="assessment">assessment</span><span
                        class="text-label-sm font-label-sm">Reports</span></a>
            </li>
        </ul>
        <div class="mt-auto border-t border-outline-variant pt-stack-sm">
            <ul class="flex flex-col gap-stack-xs">
                <li>
                    <a class="flex items-center gap-stack-sm px-stack-md py-stack-sm rounded-lg text-error hover:bg-error/10 transition-all duration-200"
                        href="{{ route('logout') }}"><span class="material-symbols-outlined"
                            data-icon="logout">logout</span><span
                            class="text-label-sm font-label-sm font-bold">Logout</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col min-w-0">
        <!-- TopNavBar -->
        <header
            class="flex justify-between items-center w-full px-margin-desktop h-16 sticky top-0 z-50 bg-surface dark:bg-inverse-surface border-b border-outline-variant dark:border-outline lg:hidden lg:flex">
            <div
                class="hidden lg:flex flex-1 max-w-md items-center bg-surface-container-low px-stack-md py-1.5 rounded-full border border-outline-variant">
                <span class="material-symbols-outlined text-on-surface-variant text-[20px]">search</span><input
                    class="bg-transparent border-none focus:ring-0 text-body-md w-full placeholder:text-on-surface-variant/60"
                    placeholder="Search reports..." type="text" />
            </div>
            <div class="flex items-center gap-stack-sm">
                <span class="material-symbols-outlined text-primary text-[24px]"
                    style="font-variation-settings: 'FILL' 1;">package</span>
                <span class="text-headline-sm font-headline-sm font-bold text-primary dark:text-inverse-primary">Anda
                    Expedition</span>
            </div>
            <!-- Mobile Nav Toggle (Placeholder) -->
            <button class="lg:hidden text-on-surface-variant hover:text-primary transition-colors duration-200">
                <span class="material-symbols-outlined">menu</span>
            </button>
            <!-- Desktop Actions (Hidden on Mobile) -->
            <div class="lg:flex items-center gap-stack-md"><button
                    class="text-on-surface-variant hover:bg-surface-container-low p-2 rounded-full transition-colors duration-200 relative"><span
                        class="material-symbols-outlined" data-icon="notifications">notifications</span><span
                        class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full border border-surface"></span></button><button
                    class="text-on-surface-variant hover:bg-surface-container-low p-2 rounded-full transition-colors duration-200"><span
                        class="material-symbols-outlined" data-icon="help">help</span></button>
                <div
                    class="w-8 h-8 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-bold text-[12px] cursor-pointer hover:opacity-80 transition-opacity">
                    AD</div>
            </div>
        </header>
        <!-- Main Canvas -->
        <main
            class="flex-1 overflow-auto p-margin-mobile md:p-margin-desktop w-full max-w-container-max mx-auto space-y-gutter">
            <!-- Welcome Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-stack-md">
                <div>
                    <h2 class="text-display-lg font-display-lg text-primary">Overview</h2>
                    <p class="text-body-lg font-body-lg text-on-surface-variant mt-stack-xs">Welcome back, Admin. Here
                        is today's shipping summary.</p>
                </div>
                <div class="flex gap-stack-sm">
                    <a href="{{ route('rekap') }}"
                        class="px-stack-md py-[10px] rounded-lg border border-outline text-primary font-label-sm text-label-sm font-bold hover:bg-surface-container-low transition-colors flex items-center gap-stack-xs inline-flex">
                        <span class="material-symbols-outlined text-[18px]">download</span>
                        Generate Rekap
                    </a>
                    <a href="{{ route('pengiriman.create') }}"
                        class="px-stack-md py-[10px] rounded-lg bg-primary text-on-primary font-label-sm text-label-sm font-bold hover:bg-primary-container transition-colors flex items-center gap-stack-xs shadow-sm inline-flex">
                        <span class="material-symbols-outlined text-[18px]">add</span>
                        Tambah Pengiriman
                    </a>
                </div>
            </div>
            <!-- Summary Cards (Bento Grid Style) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
                <!-- Total -->
                <div
                    class="bg-surface-container-lowest border border-outline-variant p-stack-md rounded-xl flex flex-col justify-between h-[120px]">
                    <div class="flex justify-between items-start">
                        <p class="text-label-sm font-label-sm text-on-surface-variant uppercase tracking-wider">Total
                            Shipments</p>
                        <span class="material-symbols-outlined text-primary opacity-50">all_inbox</span>
                    </div>
                    <div class="flex items-baseline gap-stack-sm">
                        <span class="text-display-lg font-display-lg text-on-surface">{{ number_format($total) }}</span>
                        <span class="text-label-sm font-label-sm text-surface-tint flex items-center"><span
                                class="material-symbols-outlined text-[14px]">trending_up</span> +12%</span>
                    </div>
                </div>
                <!-- Pending -->
                <div
                    class="bg-surface-container-lowest border border-outline-variant p-stack-md rounded-xl flex flex-col justify-between h-[120px]">
                    <div class="flex justify-between items-start">
                        <p class="text-label-sm font-label-sm text-on-surface-variant uppercase tracking-wider">Tertunda
                        </p>
                        <span class="material-symbols-outlined text-secondary opacity-50">pending_actions</span>
                    </div>
                    <div class="flex items-baseline gap-stack-sm">
                        <span class="text-display-lg font-display-lg text-on-surface">{{ number_format($pending) }}</span>
                        <span class="text-label-sm font-label-sm text-error flex items-center"><span
                                class="material-symbols-outlined text-[14px]">trending_down</span> -3%</span>
                    </div>
                </div>
                <!-- In Transit -->
                <div
                    class="bg-surface-container-lowest border border-outline-variant p-stack-md rounded-xl flex flex-col justify-between h-[120px]">
                    <div class="flex justify-between items-start">
                        <p class="text-label-sm font-label-sm text-on-surface-variant uppercase tracking-wider">Diproses
                            </p>
                        <span class="material-symbols-outlined text-primary-container opacity-50">local_shipping</span>
                    </div>
                    <div class="flex items-baseline gap-stack-sm">
                        <span class="text-display-lg font-display-lg text-on-surface">{{ number_format($transit) }}</span>
                        <span class="text-label-sm font-label-sm text-surface-tint flex items-center"><span
                                class="material-symbols-outlined text-[14px]">trending_up</span> +5%</span>
                    </div>
                </div>
                <!-- Delivered -->
                <div
                    class="bg-surface-container-lowest border border-outline-variant p-stack-md rounded-xl flex flex-col justify-between h-[120px]">
                    <div class="flex justify-between items-start">
                        <p class="text-label-sm font-label-sm text-on-surface-variant uppercase tracking-wider">
                            Terkirim</p>
                        <span class="material-symbols-outlined text-secondary-container opacity-50">task_alt</span>
                    </div>
                    <div class="flex items-baseline gap-stack-sm">
                        <span class="text-display-lg font-display-lg text-on-surface">{{ number_format($delivered) }}</span>
                        <span class="text-label-sm font-label-sm text-surface-tint flex items-center"><span
                                class="material-symbols-outlined text-[14px]">trending_up</span> +8%</span>
                    </div>
                </div>
            </div>
            <!-- Content Grid (Chart + Table) -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
                <!-- Chart Area -->
                <div
                    class="lg:col-span-1 bg-surface-container-lowest border border-outline-variant rounded-xl p-stack-md flex flex-col">
                    <div class="flex justify-between items-center mb-stack-md">
                        <h3 class="text-headline-sm font-headline-sm text-on-surface">Volume (7 Days)</h3>
                        <button class="text-on-surface-variant hover:text-primary"><span
                                class="material-symbols-outlined">more_vert</span></button>
                    </div>
                    <!-- Simplified CSS Bar Chart Placeholder to avoid complex JS/SVG in output -->
                    <div class="flex-1 flex items-end justify-between gap-stack-xs h-[200px] mt-auto">
                        <div
                            class="w-full bg-surface-container h-full relative rounded-sm flex items-end justify-center group">
                            <div
                                class="w-full bg-primary/20 h-[40%] rounded-sm group-hover:bg-primary/40 transition-colors">
                            </div>
                            <span
                                class="absolute -bottom-6 text-label-sm font-label-sm text-on-surface-variant">M</span>
                        </div>
                        <div
                            class="w-full bg-surface-container h-full relative rounded-sm flex items-end justify-center group">
                            <div
                                class="w-full bg-primary/20 h-[60%] rounded-sm group-hover:bg-primary/40 transition-colors">
                            </div>
                            <span
                                class="absolute -bottom-6 text-label-sm font-label-sm text-on-surface-variant">T</span>
                        </div>
                        <div
                            class="w-full bg-surface-container h-full relative rounded-sm flex items-end justify-center group">
                            <div class="w-full bg-primary h-[85%] rounded-sm"></div>
                            <span
                                class="absolute -bottom-6 text-label-sm font-label-sm text-on-surface-variant font-bold">W</span>
                        </div>
                        <div
                            class="w-full bg-surface-container h-full relative rounded-sm flex items-end justify-center group">
                            <div
                                class="w-full bg-primary/20 h-[50%] rounded-sm group-hover:bg-primary/40 transition-colors">
                            </div>
                            <span
                                class="absolute -bottom-6 text-label-sm font-label-sm text-on-surface-variant">T</span>
                        </div>
                        <div
                            class="w-full bg-surface-container h-full relative rounded-sm flex items-end justify-center group">
                            <div
                                class="w-full bg-primary/20 h-[70%] rounded-sm group-hover:bg-primary/40 transition-colors">
                            </div>
                            <span
                                class="absolute -bottom-6 text-label-sm font-label-sm text-on-surface-variant">F</span>
                        </div>
                        <div
                            class="w-full bg-surface-container h-full relative rounded-sm flex items-end justify-center group">
                            <div
                                class="w-full bg-primary/20 h-[30%] rounded-sm group-hover:bg-primary/40 transition-colors">
                            </div>
                            <span
                                class="absolute -bottom-6 text-label-sm font-label-sm text-on-surface-variant">S</span>
                        </div>
                        <div
                            class="w-full bg-surface-container h-full relative rounded-sm flex items-end justify-center group">
                            <div
                                class="w-full bg-primary/20 h-[45%] rounded-sm group-hover:bg-primary/40 transition-colors">
                            </div>
                            <span
                                class="absolute -bottom-6 text-label-sm font-label-sm text-on-surface-variant">S</span>
                        </div>
                    </div>
                </div>
                <!-- Recent Shipments Table -->
                <div
                    class="lg:col-span-2 bg-surface-container-lowest border border-outline-variant rounded-xl flex flex-col overflow-hidden">
                    <div
                        class="p-stack-md border-b border-outline-variant flex justify-between items-center bg-surface-container-low">
                        <h3 class="text-headline-sm font-headline-sm text-on-surface">Recent Activity</h3>
                        <a class="text-label-sm font-label-sm text-primary font-bold hover:underline"
                            href="#">View All</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr
                                    class="bg-surface text-on-surface-variant text-table-header font-table-header border-b border-outline-variant">
                                    <th class="py-stack-sm px-stack-md font-semibold">Resi Number</th>
                                    <th class="py-stack-sm px-stack-md font-semibold">Date</th>
                                    <th class="py-stack-sm px-stack-md font-semibold">Destination</th>
                                    <th class="py-stack-sm px-stack-md font-semibold">Status</th>
                                    <th class="py-stack-sm px-stack-md text-right font-semibold">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-body-md font-body-md">
                                @forelse($recent as $r)
                                <tr class="border-b border-outline-variant hover:bg-surface-container-low transition-colors">
                                    <td class="py-stack-sm px-stack-md font-label-sm text-label-sm">{{ $r->no_resi }}</td>
                                    <td class="py-stack-sm px-stack-md text-on-surface-variant">{{ $r->created_at->format('M d, H:i') }}</td>
                                    <td class="py-stack-sm px-stack-md">{{ $r->alamat_penerima }}</td>
                                    <td class="py-stack-sm px-stack-md">
                                        <span class="inline-flex items-center px-2 py-1 rounded bg-secondary-container text-on-secondary-container text-[11px] font-bold uppercase tracking-wider">{{ match($r->status) { 'pending' => 'Tertunda', 'processing' => 'Diproses', 'shipped' => 'Dikirim', 'delivered' => 'Terkirim', default => $r->status } }}</span>
                                    </td>
                                    <td class="py-stack-sm px-stack-md text-right">
                                        <button class="text-primary hover:text-primary-container"><span class="material-symbols-outlined text-[20px]">visibility</span></button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="py-stack-sm px-stack-md text-center text-on-surface-variant">Belum ada pengiriman baru.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
