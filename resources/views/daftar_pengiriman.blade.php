<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Daftar Data Pengiriman - Anda Expedition</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&amp;family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&amp;display=swap"
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
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .material-symbols-outlined[data-weight="fill"] {
            font-variation-settings: 'FILL' 1;
        }
    </style>
</head>

<body class="bg-background text-on-surface font-body-md text-body-md min-h-screen flex">
    <!-- SideNavBar (Hidden on Mobile, Flex on MD) -->
    <aside
        class="w-64 h-screen fixed left-0 top-0 border-r border-outline-variant bg-surface-container-low flex-col py-stack-lg px-stack-md hidden md:flex z-50">
        <div class="mb-stack-lg flex items-center gap-stack-sm">
            <div class="w-8 h-8 rounded bg-primary text-on-primary flex items-center justify-center font-bold">AE</div>
            <div>
                <h1 class="font-headline-sm text-headline-sm font-bold text-primary">Anda Expedition</h1>
                <p class="font-label-sm text-label-sm text-on-surface-variant">Logistics System</p>
            </div>
        </div>
        <nav class="flex-1 space-y-stack-xs">
            <a class="flex items-center gap-stack-sm p-stack-sm text-on-surface-variant hover:bg-surface-container-highest transition-all rounded-lg cursor-pointer active:scale-95 duration-150"
                href="{{ route('dashboard') }}">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                Dashboard
            </a>
            <a class="flex items-center gap-stack-sm p-stack-sm bg-secondary-container text-on-secondary-container font-semibold rounded-lg cursor-pointer active:scale-95 duration-150"
                href="{{ route('pengiriman.index') }}">
                <span class="material-symbols-outlined" data-icon="local_shipping">local_shipping</span>
                Shipping Data
            </a>
            <a class="flex items-center gap-stack-sm p-stack-sm text-on-surface-variant hover:bg-surface-container-highest transition-all rounded-lg cursor-pointer active:scale-95 duration-150"
                href="{{ route('rekap') }}">
                <span class="material-symbols-outlined" data-icon="assessment">assessment</span>
                Reports
            </a>
        </nav>
        <div class="mt-auto space-y-stack-xs border-t border-outline-variant pt-stack-sm">
            <a class="flex items-center gap-stack-sm p-stack-sm text-on-surface-variant hover:bg-surface-container-highest transition-all rounded-lg cursor-pointer active:scale-95 duration-150"
                href="{{ route('logout') }}">
                <span class="material-symbols-outlined" data-icon="logout">logout</span>
                Logout
            </a>
        </div>
    </aside>
    <!-- Main Content Area -->
    <div class="flex-1 md:ml-64 flex flex-col min-h-screen">
        <!-- TopNavBar (Mobile Nav & Header) -->
        <header
            class="w-full h-16 border-b border-outline-variant bg-surface-container-lowest flex justify-between items-center px-margin-mobile md:px-margin-desktop sticky top-0 z-40">
            <!-- Mobile Menu Toggle -->
            <button class="md:hidden p-stack-xs text-on-surface-variant hover:bg-surface-container-low rounded">
                <span class="material-symbols-outlined">menu</span>
            </button>
            <!-- Search (Left Aligned on Desktop) -->
            <div
                class="hidden md:flex items-center bg-surface-container-low rounded-full px-4 py-2 w-96 border border-outline-variant focus-within:border-primary focus-within:ring-1 focus-within:ring-primary transition-colors">
                <span class="material-symbols-outlined text-on-surface-variant mr-2 text-sm">search</span>
                <input
                    class="bg-transparent border-none focus:ring-0 text-body-md w-full p-0 text-on-surface placeholder-on-surface-variant"
                    placeholder="Search resi, pengirim, penerima..." type="text" />
            </div>
            <!-- Mobile Brand (Visible only on mobile) -->
            <div class="md:hidden font-headline-sm text-headline-sm font-bold text-primary">Anda Expedition</div>
            <!-- Trailing Actions -->
            <div class="flex items-center gap-stack-md">
                <button
                    class="p-stack-xs text-on-surface-variant hover:bg-surface-container-low rounded-full cursor-pointer active:opacity-80 transition-colors">
                    <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                </button>
                <button
                    class="p-stack-xs text-on-surface-variant hover:bg-surface-container-low rounded-full cursor-pointer active:opacity-80 transition-colors hidden md:block">
                    <span class="material-symbols-outlined" data-icon="help">help</span>
                </button>
                <div
                    class="w-8 h-8 rounded-full bg-secondary-container flex items-center justify-center border border-outline-variant cursor-pointer">
                    <span class="font-label-sm text-label-sm text-on-secondary-container">AD</span>
                </div>
            </div>
        </header>
        <!-- Main Canvas -->
        <main class="flex-1 p-margin-mobile md:p-margin-desktop max-w-container-max mx-auto w-full">
            <!-- Page Header -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-stack-lg gap-stack-md">
                <div>
                    <h2 class="font-headline-md text-headline-md text-on-surface">Daftar Data Pengiriman</h2>
                    <p class="text-on-surface-variant font-body-md text-body-md mt-1">Manage and track all logistics
                        shipments.</p>
                </div>
                <a href="{{ route('pengiriman.create') }}"
                    class="bg-primary text-on-primary px-4 py-2 rounded flex items-center gap-2 hover:bg-primary/90 transition-colors cursor-pointer w-full md:w-auto justify-center">
                    <span class="material-symbols-outlined text-sm">add</span>
                    Tambah Pengiriman
                </a>
            </div>
            
            @if(session('success'))
            <div class="mb-stack-lg p-stack-md bg-secondary-container text-on-secondary-container rounded-lg border border-primary/20 flex items-center gap-2">
                <span class="material-symbols-outlined">check_circle</span>
                <span class="font-body-md">{{ session('success') }}</span>
            </div>
            @endif
            <!-- Mobile Search Bar (Only visible on mobile) -->
            <div class="md:hidden mb-stack-lg">
                <div
                    class="flex items-center bg-surface-container-lowest rounded-lg px-3 py-2 border border-outline-variant focus-within:border-primary">
                    <span class="material-symbols-outlined text-on-surface-variant mr-2 text-sm">search</span>
                    <input class="bg-transparent border-none focus:ring-0 text-body-md w-full p-0"
                        placeholder="Search..." type="text" />
                </div>
            </div>
            <!-- Filters & Controls (Bento Style Layout) -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-stack-md mb-stack-lg">
                <!-- Status Filter -->
                <div
                    class="bg-surface-container-lowest border border-outline-variant rounded-xl p-stack-md col-span-1 md:col-span-2 flex flex-col justify-center">
                    <label class="font-label-sm text-label-sm text-on-surface-variant mb-2 block">Filter by
                        Status</label>
                    <div class="flex gap-2 flex-wrap">
                        <button
                            class="px-3 py-1 rounded-full border border-primary bg-primary-container text-on-primary-container font-label-sm text-label-sm">Semua</button>
                        <button
                            class="px-3 py-1 rounded-full border border-outline-variant text-on-surface-variant hover:bg-surface-container-low font-label-sm text-label-sm">Tertunda</button>
                        <button
                            class="px-3 py-1 rounded-full border border-outline-variant text-on-surface-variant hover:bg-surface-container-low font-label-sm text-label-sm">Diproses</button>
                        <button
                            class="px-3 py-1 rounded-full border border-outline-variant text-on-surface-variant hover:bg-surface-container-low font-label-sm text-label-sm">Terkirim</button>
                    </div>
                </div>
                <!-- Date Range Filter -->
                <div
                    class="bg-surface-container-lowest border border-outline-variant rounded-xl p-stack-md col-span-1 md:col-span-2 flex flex-col justify-center">
                    <label class="font-label-sm text-label-sm text-on-surface-variant mb-2 block">Date Range</label>
                    <div class="flex items-center gap-2">
                        <div
                            class="flex-1 bg-surface-container-low border border-outline-variant rounded p-2 flex items-center">
                            <span
                                class="material-symbols-outlined text-on-surface-variant text-sm mr-2">calendar_today</span>
                            <span class="text-sm text-on-surface">Oct 1, 2023</span>
                        </div>
                        <span class="text-on-surface-variant">-</span>
                        <div
                            class="flex-1 bg-surface-container-low border border-outline-variant rounded p-2 flex items-center">
                            <span
                                class="material-symbols-outlined text-on-surface-variant text-sm mr-2">calendar_today</span>
                            <span class="text-sm text-on-surface">Oct 31, 2023</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Data Table Container -->
            <div class="bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden shadow-sm">
                <!-- Desktop Table View -->
                <div class="hidden md:block overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead class="bg-surface-container-low border-b border-outline-variant">
                            <tr>
                                <th
                                    class="py-3 px-4 font-table-header text-table-header text-on-surface-variant uppercase tracking-wider">
                                    Tanggal</th>
                                <th
                                    class="py-3 px-4 font-table-header text-table-header text-on-surface-variant uppercase tracking-wider">
                                    No. Resi</th>
                                <th
                                    class="py-3 px-4 font-table-header text-table-header text-on-surface-variant uppercase tracking-wider">
                                    Pengirim</th>
                                <th
                                    class="py-3 px-4 font-table-header text-table-header text-on-surface-variant uppercase tracking-wider">
                                    Penerima</th>
                                <th
                                    class="py-3 px-4 font-table-header text-table-header text-on-surface-variant uppercase tracking-wider">
                                    Status</th>
                                <th
                                    class="py-3 px-4 font-table-header text-table-header text-on-surface-variant uppercase tracking-wider text-right">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant">
                            @forelse($pengirimans as $p)
                                <tr class="hover:bg-surface-container-low/50 transition-colors group">
                                    <td class="py-3 px-4 text-on-surface font-body-md text-body-md whitespace-nowrap">
                                        {{ $p->created_at->format('d M Y') }}</td>
                                    <td class="py-3 px-4 font-label-sm text-label-sm text-on-surface">
                                        {{ $p->no_resi }}</td>
                                    <td class="py-3 px-4">
                                        <div class="font-body-md text-body-md text-on-surface">{{ $p->nama_pengirim }}
                                        </div>
                                        <div class="text-xs text-on-surface-variant truncate w-40">
                                            {{ $p->alamat_pengirim }}</div>
                                    </td>
                                    <td class="py-3 px-4">
                                        <div class="font-body-md text-body-md text-on-surface">{{ $p->nama_penerima }}
                                        </div>
                                        <div class="text-xs text-on-surface-variant truncate w-40">
                                            {{ $p->alamat_penerima }}</div>
                                    </td>
                                    <td class="py-3 px-4">
                                        <span
                                            class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-surface-container-highest text-on-surface-variant capitalize">
                                            <span class="w-1.5 h-1.5 rounded-full bg-outline mr-1.5"></span>
                                            {{ match($p->status) { 'pending' => 'Tertunda', 'processing' => 'Diproses', 'shipped' => 'Dikirim', 'delivered' => 'Terkirim', default => $p->status } }}
                                        </span>
                                    </td>
                                    <td class="py-3 px-4 text-right">
                                        <a href="{{ route('pengiriman.edit', $p->id) }}"
                                            class="text-primary hover:text-primary-fixed-dim p-1 opacity-0 group-hover:opacity-100 transition-opacity"
                                            title="Edit">
                                            <span class="material-symbols-outlined text-sm">edit</span>
                                        </a>
                                        <button
                                            onclick="showDetail(this)"
                                            data-resi="{{ $p->no_resi }}"
                                            data-detail="{{ $p->detail_barang }}"
                                            class="text-on-surface-variant hover:text-on-surface p-1 opacity-0 group-hover:opacity-100 transition-opacity"
                                            title="View Details">
                                            <span class="material-symbols-outlined text-sm">visibility</span>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-4">Belum ada data pengiriman.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- Mobile List View -->
                <div class="md:hidden divide-y divide-outline-variant">
                    @forelse($pengirimans as $p)
                        <div class="p-stack-md bg-surface-container-lowest">
                            <div class="flex justify-between items-start mb-2">
                                <span class="font-label-sm text-label-sm text-primary">{{ $p->no_resi }}</span>
                                <span
                                    class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-secondary-container text-on-secondary-container capitalize">{{ match($p->status) { 'pending' => 'Tertunda', 'processing' => 'Diproses', 'shipped' => 'Dikirim', 'delivered' => 'Terkirim', default => $p->status } }}</span>
                            </div>
                            <div class="text-xs text-on-surface-variant mb-3">{{ $p->created_at->format('d M Y') }}
                            </div>
                            <div class="grid grid-cols-2 gap-4 mb-3">
                                <div>
                                    <div class="text-xs text-on-surface-variant uppercase tracking-wide">Pengirim</div>
                                    <div class="font-body-md text-body-md text-on-surface">{{ $p->nama_pengirim }}
                                    </div>
                                </div>
                                <div>
                                    <div class="text-xs text-on-surface-variant uppercase tracking-wide">Penerima</div>
                                    <div class="font-body-md text-body-md text-on-surface">{{ $p->nama_penerima }}
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end gap-2 mt-2 pt-2 border-t border-outline-variant/50">
                                <button
                                    onclick="showDetail(this)"
                                    data-resi="{{ $p->no_resi }}"
                                    data-detail="{{ $p->detail_barang }}"
                                    class="text-on-surface-variant p-2 hover:bg-surface-container-low rounded"><span
                                        class="material-symbols-outlined text-sm">visibility</span></button>
                                <a href="{{ route('pengiriman.edit', $p->id) }}" class="text-primary p-2 hover:bg-surface-container-low rounded"><span
                                        class="material-symbols-outlined text-sm">edit</span></a>
                            </div>
                        </div>
                    @empty
                        <div class="p-4 text-center text-sm text-on-surface-variant">Belum ada data pengiriman.</div>
                    @endforelse
                </div>
                <!-- Pagination Footer -->
                <div
                    class="bg-surface-container-lowest border-t border-outline-variant p-stack-sm flex items-center justify-between">
                    <span class="text-sm text-on-surface-variant">Showing 1 to 10 of 24 entries</span>
                    <div class="flex items-center gap-1">
                        <button
                            class="p-1 rounded text-on-surface-variant hover:bg-surface-container-low disabled:opacity-50"
                            disabled="">
                            <span class="material-symbols-outlined text-sm">chevron_left</span>
                        </button>
                        <button
                            class="w-8 h-8 rounded bg-primary-container text-on-primary-container font-medium text-sm flex items-center justify-center">1</button>
                        <button
                            class="w-8 h-8 rounded hover:bg-surface-container-low text-on-surface font-medium text-sm flex items-center justify-center">2</button>
                        <button
                            class="w-8 h-8 rounded hover:bg-surface-container-low text-on-surface font-medium text-sm flex items-center justify-center">3</button>
                        <button class="p-1 rounded text-on-surface-variant hover:bg-surface-container-low">
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Detail Barang Dialog -->
    <dialog id="detailDialog" class="p-0 border-0 rounded-xl bg-surface shadow-md backdrop:bg-on-background/50 backdrop:backdrop-blur-sm max-w-md w-full fixed inset-0 m-auto">
        <div class="p-stack-md border-b border-outline-variant flex justify-between items-center bg-surface-container-low rounded-t-xl">
            <h3 class="font-headline-sm text-headline-sm text-on-surface">Detail Barang</h3>
            <button onclick="document.getElementById('detailDialog').close()" class="p-1 text-on-surface-variant hover:text-on-surface rounded hover:bg-surface-variant transition-colors"><span class="material-symbols-outlined text-[20px]">close</span></button>
        </div>
        <div class="p-stack-lg flex flex-col gap-stack-md leading-relaxed">
            <div>
                <span class="block text-xs uppercase text-primary font-semibold tracking-wider mb-2">Resi Pengiriman</span>
                <p id="dialog-resi" class="text-body-md font-body-md text-on-background font-medium">-</p>
            </div>
            <div>
                <span class="block text-xs uppercase text-primary font-semibold tracking-wider mb-2">Deskripsi Lengkap</span>
                <p id="dialog-detail" class="text-body-md font-body-md text-on-surface-variant bg-surface-container-lowest p-3 border border-outline-variant rounded-md min-h-[100px] whitespace-pre-wrap leading-6">-</p>
            </div>
        </div>
    </dialog>

    <script>
        function showDetail(btn) {
            const resi = btn.getAttribute('data-resi');
            const detail = btn.getAttribute('data-detail');
            document.getElementById('dialog-resi').innerText = resi || '-';
            // Set text content to avoid injection and preserve line breaks with whitespace-pre-wrap
            document.getElementById('dialog-detail').textContent = detail || 'Tidak ada detail barang.';
            document.getElementById('detailDialog').showModal();
        }
    </script>
</body>

</html>
