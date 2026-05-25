<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Kelola Data Pengiriman - Anda Expedition</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700&amp;family=JetBrains+Mono:wght@500&amp;display=swap"
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
</head>

<body class="bg-background text-on-background font-body-md min-h-screen flex antialiased">
    <!-- SideNavBar (Desktop) -->
    <nav
        class="hidden md:flex flex-col py-stack-lg px-stack-md h-full w-64 h-screen fixed left-0 top-0 border-r border-outline-variant bg-surface-container-low z-50">
        <div class="flex items-center gap-stack-sm mb-stack-lg px-stack-sm">
            <span class="material-symbols-outlined text-[32px] text-primary" data-weight="fill">local_shipping</span>
            <div>
                <h1 class="font-headline-sm text-headline-sm font-bold text-primary">Anda Expedition</h1>
                <p class="font-label-sm text-label-sm text-on-surface-variant uppercase">Logistics System</p>
            </div>
        </div>
        <ul class="flex flex-col gap-stack-xs flex-grow">
            <li>
                <a class="flex items-center gap-stack-sm px-stack-md py-stack-sm rounded text-on-surface-variant hover:bg-surface-container-highest transition-all"
                    href="{{ route('dashboard') }}">
                    <span class="material-symbols-outlined">dashboard</span>
                    <span class="font-body-md text-body-md">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="flex items-center gap-stack-sm px-stack-md py-stack-sm bg-secondary-container text-on-secondary-container font-semibold rounded-lg"
                    href="{{ route('pengiriman.index') }}">
                    <span class="material-symbols-outlined">local_shipping</span>
                    <span class="font-body-md text-body-md">Shipping Data</span>
                </a>
            </li>
            <li>
                <a class="flex items-center gap-stack-sm px-stack-md py-stack-sm rounded text-on-surface-variant hover:bg-surface-container-highest transition-all {{ request()->routeIs('pengiriman.create') ? 'bg-secondary-container text-on-secondary-container' : '' }}"
                    href="{{ route('pengiriman.create') }}">
                    <span class="material-symbols-outlined">local_shipping</span>
                    <span class="font-body-md text-body-md">Tambah Pengiriman</span>
                </a>
            </li>
            <li>
                <a class="flex items-center gap-stack-sm px-stack-md py-stack-sm rounded text-on-surface-variant hover:bg-surface-container-highest transition-all"
                    href="{{ route('rekap') }}">
                    <span class="material-symbols-outlined" data-icon="assessment">assessment</span>
                    <span class="font-body-md text-body-md">Reports</span>
                </a>
            </li>
        </ul>
        <ul class="flex flex-col gap-stack-xs mt-auto pt-stack-md border-t border-outline-variant">
            <li>
                <a class="flex items-center gap-stack-sm px-stack-md py-stack-sm rounded text-on-surface-variant hover:bg-surface-container-highest transition-all text-error"
                    href="{{ route('logout') }}">
                    <span class="material-symbols-outlined">logout</span>
                    <span class="font-body-md text-body-md">Logout</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- Main Content Area -->
    <main class="flex-grow flex flex-col md:ml-64 w-full bg-background min-h-screen">
        <!-- TopNavBar -->
        <header
            class="flex justify-between items-center px-margin-desktop w-full sticky top-0 z-40 bg-surface-container-lowest w-full h-16 border-b border-outline-variant">
            <div class="flex items-center gap-stack-md md:hidden">
                <button
                    class="text-on-surface-variant p-stack-xs rounded hover:bg-surface-container-low transition-colors">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <h1 class="font-headline-sm text-headline-sm font-bold text-primary">Anda Expedition</h1>
            </div>
            <!-- Search placeholder for desktop flex centering if needed, or left aligned -->
            <div
                class="hidden md:flex items-center bg-surface-container-low rounded px-stack-md py-stack-xs w-96 border border-outline-variant focus-within:border-primary focus-within:ring-1 focus-within:ring-primary transition-all">
                <span class="material-symbols-outlined text-on-surface-variant mr-stack-sm">search</span>
                <input
                    class="bg-transparent border-none focus:ring-0 w-full font-body-md text-body-md text-on-surface placeholder-on-surface-variant/70"
                    placeholder="Search tracking number or sender..." type="text" />
            </div>
            <div class="flex items-center gap-stack-md">
                <button
                    class="text-on-surface-variant p-stack-xs rounded hover:bg-surface-container-low transition-colors relative">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="absolute top-1 right-1 w-2 h-2 bg-error rounded-full"></span>
                </button>
                <button
                    class="text-on-surface-variant p-stack-xs rounded hover:bg-surface-container-low transition-colors">
                    <span class="material-symbols-outlined">help</span>
                </button>
                <div
                    class="w-8 h-8 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-bold text-body-md cursor-pointer ml-stack-sm overflow-hidden border border-outline-variant">
                    <img alt="Admin profile" class="w-full h-full object-cover"
                        data-alt="A professional headshot of an administrative professional in a corporate setting. Clean, bright lighting. Wearing a neat collar shirt. Neutral background. Modern logistics company aesthetic."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAzppW9UJ2E2LwQ-V1cr8HHBGMvOm9ui6xpBA90kD6odp07lsG6BpcodEXNdSm9Y8YO2doNCZpl3od-ZY7xGEM6h-JmPmFs1gJNqSpp6eqKMpnUwb1JHQ3vKU7LfUaOwj6cUmXGXKda-b6LhZLHnJN1fbKYPHl9S09wVk4yAhz7aMalG7qsvfC-Qz9gtvsF77SUCYtFZb0dG6_z0UJNtAwEMqi_c1YbqV6yodqP6po7kDcBKFbHGdVbzIsY_BBpM65bP-ediYab7w" />
                </div>
            </div>
        </header>
        <!-- Page Content -->
        <div class="p-margin-mobile md:p-margin-desktop max-w-container-max mx-auto w-full flex-grow flex flex-col">
            <div class="mb-stack-lg flex items-center gap-stack-sm">
                <a class="text-on-surface-variant hover:text-primary transition-colors flex items-center"
                    href="{{ route('pengiriman.index') }}">
                    <span class="material-symbols-outlined">arrow_back</span>
                </a>
                <h2 class="font-headline-md text-headline-md text-on-background">Kelola Data Pengiriman</h2>
            </div>
            @if ($errors->any())
                <div
                    class="bg-error-container text-on-error-container p-stack-md rounded-lg mb-stack-lg border border-error/50">
                    <ul class="list-disc pl-stack-lg">
                        @foreach ($errors->all() as $error)
                            <li class="font-body-md text-body-md">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div
                class="bg-surface-container-lowest border border-outline-variant rounded-xl p-stack-lg shadow-sm flex-grow mb-stack-lg">
                <form action="{{ route('pengiriman.store') }}" method="POST"
                    class="grid grid-cols-1 md:grid-cols-2 gap-x-gutter gap-y-stack-lg">
                    @csrf
                    <!-- Sender Section -->
                    <div class="space-y-stack-md">
                        <h3
                            class="font-headline-sm text-headline-sm text-primary flex items-center gap-stack-sm border-b border-outline-variant pb-stack-xs">
                            <span class="material-symbols-outlined">person</span>
                            Informasi Pengirim
                        </h3>
                        <div class="flex flex-col gap-stack-xs">
                            <label
                                class="font-label-sm text-label-sm text-on-surface-variant uppercase flex items-center"
                                for="nama_pengirim">
                                Nama Pengirim <span class="text-error ml-1">*</span>
                            </label>
                            <input
                                class="w-full bg-surface border border-outline-variant rounded px-stack-sm py-2 font-body-md text-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary transition-all outline-none"
                                id="nama_pengirim" name="nama_pengirim" placeholder="Masukkan nama pengirim"
                                required="" type="text" />
                        </div>
                        <div class="flex flex-col gap-stack-xs">
                            <label
                                class="font-label-sm text-label-sm text-on-surface-variant uppercase flex items-center"
                                for="alamat_pengirim">
                                Alamat Pengirim <span class="text-error ml-1">*</span>
                            </label>
                            <textarea
                                class="w-full bg-surface border border-outline-variant rounded px-stack-sm py-2 font-body-md text-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary transition-all outline-none resize-none"
                                id="alamat_pengirim" name="alamat_pengirim" placeholder="Masukkan alamat lengkap pengirim" required=""
                                rows="3"></textarea>
                        </div>
                    </div>
                    <!-- Receiver Section -->
                    <div class="space-y-stack-md">
                        <h3
                            class="font-headline-sm text-headline-sm text-primary flex items-center gap-stack-sm border-b border-outline-variant pb-stack-xs">
                            <span class="material-symbols-outlined">person_pin_circle</span>
                            Informasi Penerima
                        </h3>
                        <div class="flex flex-col gap-stack-xs">
                            <label
                                class="font-label-sm text-label-sm text-on-surface-variant uppercase flex items-center"
                                for="nama_penerima">
                                Nama Penerima <span class="text-error ml-1">*</span>
                            </label>
                            <input
                                class="w-full bg-surface border border-outline-variant rounded px-stack-sm py-2 font-body-md text-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary transition-all outline-none"
                                id="nama_penerima" name="nama_penerima" placeholder="Masukkan nama penerima"
                                required="" type="text" />
                        </div>
                        <div class="flex flex-col gap-stack-xs">
                            <label
                                class="font-label-sm text-label-sm text-on-surface-variant uppercase flex items-center"
                                for="alamat_penerima">
                                Alamat Penerima <span class="text-error ml-1">*</span>
                            </label>
                            <textarea
                                class="w-full bg-surface border border-outline-variant rounded px-stack-sm py-2 font-body-md text-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary transition-all outline-none resize-none"
                                id="alamat_penerima" name="alamat_penerima" placeholder="Masukkan alamat lengkap penerima" required=""
                                rows="3"></textarea>
                        </div>
                    </div>
                    <!-- Shipment Details Section -->
                    <div class="md:col-span-2 space-y-stack-md mt-stack-md">
                        <h3
                            class="font-headline-sm text-headline-sm text-primary flex items-center gap-stack-sm border-b border-outline-variant pb-stack-xs">
                            <span class="material-symbols-outlined">inventory_2</span>
                            Detail Pengiriman
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-gutter gap-y-stack-md">
                            <div class="flex flex-col gap-stack-xs">
                                <label
                                    class="font-label-sm text-label-sm text-on-surface-variant uppercase flex items-center"
                                    for="detail_barang">
                                    Detail Barang <span class="text-error ml-1">*</span>
                                </label>
                                <textarea
                                    class="w-full bg-surface border border-outline-variant rounded px-stack-sm py-2 font-body-md text-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary transition-all outline-none resize-none"
                                    id="detail_barang" name="detail_barang" placeholder="Deskripsikan barang yang dikirim (jenis, berat, dimensi...)"
                                    required="" rows="4"></textarea>
                            </div>
                            <div class="flex flex-col gap-stack-md">
                                <div class="flex flex-col gap-stack-xs">
                                    <label
                                        class="font-label-sm text-label-sm text-on-surface-variant uppercase flex items-center"
                                        for="status">
                                        Status Pengiriman <span class="text-error ml-1">*</span>
                                    </label>
                                    <div class="relative">
                                        <select
                                            class="w-full bg-surface border border-outline-variant rounded px-stack-sm py-2 font-body-md text-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary transition-all outline-none appearance-none cursor-pointer"
                                            id="status" name="status" required="">
                                            <option disabled="" selected="" value="">Pilih Status
                                            </option>
                                            <option value="pending">Pending</option>
                                            <option value="processing">Diproses</option>
                                            <option value="shipped">Dikirim</option>
                                            <option value="delivered">Terkirim</option>
                                        </select>
                                        <span
                                            class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-on-surface-variant pointer-events-none">expand_more</span>
                                    </div>
                                </div>
                                <!-- Optional: Resi tracking code field if needed, keeping it minimal for now based on prompt -->
                                <div
                                    class="p-stack-md bg-surface-container-low border border-outline-variant rounded flex items-start gap-stack-sm mt-auto">
                                    <span class="material-symbols-outlined text-primary">info</span>
                                    <p class="font-body-md text-body-md text-on-surface-variant text-sm">Pastikan semua
                                        data terisi dengan benar.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Form Actions -->
                    <div
                        class="md:col-span-2 flex justify-end gap-stack-md mt-stack-lg pt-stack-md border-t border-outline-variant">
                        <a href="{{ route('pengiriman.index') }}"
                            class="px-stack-lg py-2 font-label-sm text-label-sm uppercase rounded border border-outline-variant text-on-surface-variant hover:bg-surface-container-low transition-colors inline-block text-center"
                            type="button">
                            Batal
                        </a>
                        <button
                            class="px-stack-lg py-2 font-label-sm text-label-sm uppercase rounded bg-primary text-on-primary hover:bg-primary/90 transition-colors shadow-sm"
                            type="submit">
                            Simpan Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>
