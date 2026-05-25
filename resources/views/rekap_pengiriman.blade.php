<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Rekap Data Pengiriman - Anda Expedition</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@500&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
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
                        "error-container": "#ffdad6",
                        "surface-container-low": "#f1f3ff",
                        "tertiary": "#2e343a",
                        "on-error": "#ffffff",
                        "primary-container": "#0f4c81",
                        "surface-container": "#e8eeff",
                        "inverse-surface": "#2a303d",
                        "on-secondary": "#ffffff",
                        "outline-variant": "#c2c7d1",
                        "on-tertiary-fixed": "#161c22",
                        "on-background": "#161c27",
                        "on-secondary-fixed-variant": "#3c475a",
                        "error": "#ba1a1a",
                        "on-secondary-fixed": "#111c2c",
                        "surface-dim": "#d4daea",
                        "background": "#f9f9ff",
                        "tertiary-container": "#444b51",
                        "secondary-fixed-dim": "#bcc7dd",
                        "secondary": "#545f72",
                        "primary-fixed-dim": "#a0c9ff",
                        "on-surface-variant": "#42474f",
                        "surface-container-highest": "#dde2f3",
                        "tertiary-fixed": "#dde3eb",
                        "on-error-container": "#93000a",
                        "on-surface": "#161c27",
                        "outline": "#727780",
                        "on-primary-fixed-variant": "#07497d",
                        "tertiary-fixed-dim": "#c1c7cf",
                        "surface": "#f9f9ff",
                        "inverse-primary": "#a0c9ff",
                        "surface-container-high": "#e3e8f9",
                        "surface-bright": "#f9f9ff",
                        "on-primary": "#ffffff",
                        "primary": "#00355f",
                        "inverse-on-surface": "#ecf0ff",
                        "on-primary-fixed": "#001c37",
                        "on-tertiary": "#ffffff",
                        "secondary-fixed": "#d8e3fa",
                        "surface-tint": "#2d6197",
                        "primary-fixed": "#d2e4ff",
                        "on-secondary-container": "#586377",
                        "secondary-container": "#d5e0f7",
                        "on-tertiary-container": "#b4bbc2",
                        "on-tertiary-fixed-variant": "#41474e",
                        "on-primary-container": "#8ebdf9",
                        "surface-container-lowest": "#ffffff",
                        "surface-variant": "#dde2f3"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "base-unit": "4px",
                        "stack-lg": "24px",
                        "container-max": "1440px",
                        "gutter": "24px",
                        "margin-desktop": "32px",
                        "stack-sm": "8px",
                        "margin-mobile": "16px",
                        "stack-xs": "4px",
                        "stack-md": "16px"
                    },
                    "fontFamily": {
                        "display-lg": ["Hanken Grotesk"],
                        "label-sm": ["JetBrains Mono"],
                        "table-header": ["Hanken Grotesk"],
                        "headline-md": ["Hanken Grotesk"],
                        "headline-lg-mobile": ["Hanken Grotesk"],
                        "body-md": ["Hanken Grotesk"],
                        "body-lg": ["Hanken Grotesk"],
                        "headline-sm": ["Hanken Grotesk"]
                    },
                    "fontSize": {
                        "display-lg": ["32px", {
                            "lineHeight": "40px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "label-sm": ["12px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.02em",
                            "fontWeight": "500"
                        }],
                        "table-header": ["13px", {
                            "lineHeight": "18px",
                            "fontWeight": "600"
                        }],
                        "headline-md": ["24px", {
                            "lineHeight": "32px",
                            "fontWeight": "600"
                        }],
                        "headline-lg-mobile": ["24px", {
                            "lineHeight": "32px",
                            "fontWeight": "700"
                        }],
                        "body-md": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "400"
                        }],
                        "body-lg": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
                        }],
                        "headline-sm": ["20px", {
                            "lineHeight": "28px",
                            "fontWeight": "600"
                        }]
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-family: 'Material Symbols Outlined';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            -webkit-font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
        }
    </style>
</head>

<body class="bg-background text-on-background min-h-screen flex">
    <!-- SideNavBar (Desktop) -->
    <nav
        class="hidden md:flex flex-col py-stack-lg px-stack-md h-full w-64 h-screen fixed left-0 top-0 border-r border-outline-variant bg-surface-container-low z-50">
        <div class="mb-stack-lg flex items-center gap-3 px-3">
            <div
                class="w-10 h-10 rounded-lg bg-primary text-on-primary flex items-center justify-center font-bold text-lg">
                A</div>
            <div>
                <h1 class="font-headline-sm text-headline-sm font-bold text-primary">Anda Expedition</h1>
                <p class="font-label-sm text-label-sm text-on-surface-variant">Logistics System</p>
            </div>
        </div>
        <div class="flex-1 space-y-1">
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container-highest transition-all cursor-pointer active:scale-95 duration-150 font-body-md text-body-md"
                href="{{ route('dashboard') }}">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                Dashboard
            </a>
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container-highest transition-all cursor-pointer active:scale-95 duration-150 font-body-md text-body-md"
                href="{{ route('pengiriman.index') }}">
                <span class="material-symbols-outlined" data-icon="local_shipping">local_shipping</span>
                Shipping Data
            </a>
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-secondary-container text-on-secondary-container font-semibold transition-all cursor-pointer active:scale-95 duration-150 font-body-md text-body-md"
                href="{{ route('rekap') }}">
                <span class="material-symbols-outlined" data-icon="assessment" data-weight="fill"
                    style="font-variation-settings: 'FILL' 1;">assessment</span>
                Reports
            </a>
        </div>
        <div class="mt-auto space-y-1 pt-4 border-t border-outline-variant">
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-error hover:bg-error-container transition-all cursor-pointer active:scale-95 duration-150 font-body-md text-body-md"
                href="{{ route('logout') }}">
                <span class="material-symbols-outlined" data-icon="logout">logout</span>
                Logout
            </a>
        </div>
    </nav>
    <!-- Main Content Area -->
    <main class="flex-1 md:ml-64 flex flex-col min-h-screen">
        <!-- TopNavBar -->
        <header
            class="flex justify-between items-center px-margin-desktop w-full sticky top-0 z-40 bg-surface-container-lowest h-16 border-b border-outline-variant">
            <div class="flex items-center gap-4">
                <button
                    class="md:hidden p-2 text-on-surface-variant hover:bg-surface-container-low rounded-full transition-colors">
                    <span class="material-symbols-outlined" data-icon="menu">menu</span>
                </button>
                <div class="hidden md:flex relative w-64 lg:w-96">
                    <span
                        class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-sm">search</span>
                    <input
                        class="w-full pl-10 pr-4 py-2 bg-surface-container-highest border-transparent rounded-lg font-body-md text-body-md focus:border-primary focus:ring-1 focus:ring-primary text-on-surface placeholder:text-on-surface-variant transition-colors"
                        placeholder="Search reports..." type="text" />
                </div>
            </div>
            <div class="flex items-center gap-2">
                <button
                    class="p-2 text-on-surface-variant hover:bg-surface-container-low rounded-full transition-colors cursor-pointer active:opacity-80">
                    <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                </button>
                <button
                    class="p-2 text-on-surface-variant hover:bg-surface-container-low rounded-full transition-colors cursor-pointer active:opacity-80">
                    <span class="material-symbols-outlined" data-icon="help">help</span>
                </button>
                <div
                    class="w-8 h-8 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center ml-2 cursor-pointer border border-outline-variant">
                    <span class="font-label-sm text-label-sm font-bold">AD</span>
                </div>
            </div>
        </header>
        <!-- Page Content -->
        <div class="p-margin-mobile md:p-margin-desktop flex-1 max-w-container-max mx-auto w-full">
            <div class="mb-stack-lg">
                <h2 class="font-display-lg text-display-lg text-on-background mb-2">Rekap Data Pengiriman</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant">Generate and download shipping reports
                    based on date ranges.</p>
            </div>
            <!-- Report Filter & Generation Area -->
            <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-stack-lg mb-stack-lg">
                <h3 class="font-headline-sm text-headline-sm text-on-background mb-stack-md">Filter Laporan</h3>
                <div class="flex flex-col md:flex-row gap-gutter items-end">
                    <div class="flex-1 w-full">
                        <label class="block font-label-sm text-label-sm text-on-surface-variant mb-stack-xs">Mulai
                            Tanggal</label>
                        <div class="relative">
                            <input
                                class="w-full pl-3 pr-10 py-2.5 bg-surface border border-outline-variant rounded-lg font-body-md text-body-md focus:border-primary focus:ring-1 focus:ring-primary text-on-surface transition-colors"
                                type="date" />
                        </div>
                    </div>
                    <div class="flex-1 w-full">
                        <label class="block font-label-sm text-label-sm text-on-surface-variant mb-stack-xs">Sampai
                            Tanggal</label>
                        <div class="relative">
                            <input
                                class="w-full pl-3 pr-10 py-2.5 bg-surface border border-outline-variant rounded-lg font-body-md text-body-md focus:border-primary focus:ring-1 focus:ring-primary text-on-surface transition-colors"
                                type="date" />
                        </div>
                    </div>
                    <div class="flex-1 w-full">
                        <label class="block font-label-sm text-label-sm text-on-surface-variant mb-stack-xs">Status
                            Pengiriman (Optional)</label>
                        <select
                            class="w-full pl-3 pr-10 py-2.5 bg-surface border border-outline-variant rounded-lg font-body-md text-body-md focus:border-primary focus:ring-1 focus:ring-primary text-on-surface transition-colors appearance-none">
                            <option value="">Semua Status</option>
                            <option value="delivered">Delivered</option>
                            <option value="transit">In Transit</option>
                            <option value="pending">Pending</option>
                        </select>
                    </div>
                    <button
                        class="w-full md:w-auto px-6 py-2.5 bg-primary text-on-primary font-body-md text-body-md font-semibold rounded-lg hover:bg-on-primary-fixed transition-colors flex items-center justify-center gap-2 h-[42px]">
                        <span class="material-symbols-outlined text-[20px]" data-icon="analytics">analytics</span>
                        Generate Rekap
                    </button>
                </div>
            </div>
            <!-- Report Preview / Results -->
            <div
                class="bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden flex flex-col">
                <!-- Toolbar -->
                <div
                    class="p-stack-md border-b border-outline-variant bg-surface-container-low flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                    <div>
                        <h3 class="font-headline-sm text-headline-sm text-on-background">Preview Rekapitulasi</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-1">Menampilkan {{ count($pengirimans) }} data pengiriman</p>
                    </div>
                    <div class="flex gap-2 w-full sm:w-auto">
                        <button onclick="window.print()"
                            class="flex-1 sm:flex-none px-4 py-2 bg-surface text-primary border border-primary font-body-md text-body-md font-semibold rounded-lg hover:bg-surface-container transition-colors flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined text-[18px]"
                                data-icon="picture_as_pdf">picture_as_pdf</span>
                            PDF
                        </button>
                        <button
                            class="flex-1 sm:flex-none px-4 py-2 bg-surface border border-outline text-on-surface font-body-md text-body-md font-semibold rounded-lg hover:bg-surface-container-highest transition-colors flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined text-[18px]"
                                data-icon="table_view">table_view</span>
                            Excel
                        </button>
                    </div>
                </div>
                <!-- Table Preview -->
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead class="bg-surface-container sticky top-0">
                            <tr>
                                <th
                                    class="p-3 font-table-header text-table-header text-on-surface-variant border-b border-outline-variant whitespace-nowrap">
                                    Tanggal</th>
                                <th
                                    class="p-3 font-table-header text-table-header text-on-surface-variant border-b border-outline-variant whitespace-nowrap">
                                    No. Resi</th>
                                <th
                                    class="p-3 font-table-header text-table-header text-on-surface-variant border-b border-outline-variant whitespace-nowrap">
                                    Pengirim</th>
                                <th
                                    class="p-3 font-table-header text-table-header text-on-surface-variant border-b border-outline-variant whitespace-nowrap">
                                    Penerima</th>
                                <th
                                    class="p-3 font-table-header text-table-header text-on-surface-variant border-b border-outline-variant whitespace-nowrap text-right">
                                    Berat (Kg)</th>
                                <th
                                    class="p-3 font-table-header text-table-header text-on-surface-variant border-b border-outline-variant whitespace-nowrap text-right">
                                    Total Biaya</th>
                                <th
                                    class="p-3 font-table-header text-table-header text-on-surface-variant border-b border-outline-variant whitespace-nowrap text-center">
                                    Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant">
                            @forelse($pengirimans as $p)
                            <!-- Rows -->
                            <tr class="hover:bg-surface-container-low transition-colors">
                                <td class="p-3 font-body-md text-body-md text-on-background whitespace-nowrap">{{ $p->created_at->format('d M Y') }}</td>
                                <td class="p-3 font-label-sm text-label-sm text-primary whitespace-nowrap">{{ $p->no_resi }}</td>
                                <td class="p-3 font-body-md text-body-md text-on-background truncate max-w-[150px]">{{ $p->nama_pengirim }}</td>
                                <td class="p-3 font-body-md text-body-md text-on-background truncate max-w-[150px]">{{ $p->nama_penerima }}</td>
                                <td class="p-3 font-body-md text-body-md text-on-background text-right">-</td>
                                <td class="p-3 font-body-md text-body-md text-on-background text-right">-</td>
                                <td class="p-3 text-center">
                                    <span class="inline-flex items-center px-2 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-[10px] uppercase tracking-wider">{{ match($p->status) { 'pending' => 'Tertunda', 'processing' => 'Diproses', 'shipped' => 'Dikirim', 'delivered' => 'Terkirim', default => $p->status } }}</span>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="p-3 text-center font-body-md text-body-md text-on-surface-variant">Belum ada data pengiriman.</td>
                            </tr>
                            @endforelse
                        </tbody>
                        <tfoot class="bg-surface-container-highest border-t-2 border-outline">
                            <tr>
                                <td class="p-3 font-table-header text-table-header text-on-background text-right"
                                    colspan="4">Total Shipments:</td>
                                <td class="p-3 font-table-header text-table-header text-on-background text-right">-</td>
                                <td class="p-3 font-table-header text-table-header text-on-background text-right">-</td>
                                <td class="p-3 font-table-header text-table-header text-on-background text-center">{{ count($pengirimans) }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
