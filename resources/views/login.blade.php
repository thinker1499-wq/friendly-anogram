<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Login - Anda Expedition</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@500&amp;display=swap"
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
                        "headline-sm": ["Hanken Grotesk"],
                        "headline-lg-mobile": ["Hanken Grotesk"],
                        "display-lg": ["Hanken Grotesk"],
                        "body-lg": ["Hanken Grotesk"],
                        "table-header": ["Hanken Grotesk"],
                        "label-sm": ["JetBrains Mono"],
                        "headline-md": ["Hanken Grotesk"],
                        "body-md": ["Hanken Grotesk"]
                    },
                    "fontSize": {
                        "headline-sm": ["20px", {
                            "lineHeight": "28px",
                            "fontWeight": "600"
                        }],
                        "headline-lg-mobile": ["24px", {
                            "lineHeight": "32px",
                            "fontWeight": "700"
                        }],
                        "display-lg": ["32px", {
                            "lineHeight": "40px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "body-lg": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
                        }],
                        "table-header": ["13px", {
                            "lineHeight": "18px",
                            "fontWeight": "600"
                        }],
                        "label-sm": ["12px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.02em",
                            "fontWeight": "500"
                        }],
                        "headline-md": ["24px", {
                            "lineHeight": "32px",
                            "fontWeight": "600"
                        }],
                        "body-md": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "400"
                        }]
                    }
                },
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body
    class="bg-background min-h-screen flex items-center justify-center font-body-md text-on-background relative overflow-hidden h-screen">
    <!-- Decorative Background Elements -->
    <div class="absolute inset-0 z-0 pointer-events-none flex items-center justify-center">
        <div
            class="absolute top-[-10%] left-[-10%] w-[50vw] h-[50vw] rounded-full bg-primary-fixed-dim opacity-10 blur-3xl">
        </div>
        <div
            class="absolute bottom-[-10%] right-[-10%] w-[40vw] h-[40vw] rounded-full bg-secondary-container opacity-20 blur-3xl">
        </div>
    </div>
    <!-- Login Container -->
    <main class="relative z-10 w-full max-w-[420px] px-margin-mobile md:px-0">
        <!-- Brand Header -->
        <div class="text-center mb-stack-lg">
            <div
                class="inline-flex items-center justify-center w-12 h-12 rounded-lg bg-primary mb-stack-sm shadow-sm border border-outline-variant/20">
                <span class="material-symbols-outlined text-on-primary text-[28px]"
                    style="font-variation-settings: 'FILL' 1;">sailing</span>
            </div>
            <h1 class="text-headline-md font-headline-md text-on-surface tracking-tight">Anda Expedition</h1>
            <p class="text-body-md font-body-md text-on-surface-variant mt-stack-xs">Logistics Management System</p>
        </div>
        <!-- Login Card -->
        <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-stack-lg shadow-sm">
            @if ($errors->any())
                <div class="mb-4 p-3 rounded-lg bg-error-container text-on-error-container text-sm">
                    {{ $errors->first() }}
                </div>
            @endif
            <form action="{{ route('login') }}" class="space-y-stack-md" method="POST">
                @csrf
                <!-- Email Field -->
                <div>
                    <label class="block text-label-sm font-label-sm text-on-surface mb-stack-xs"
                        for="email">Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-outline text-[20px]">person</span>
                        </div>
                        <input
                            class="block w-full pl-10 pr-3 py-2 border border-outline-variant rounded-lg bg-surface text-body-md font-body-md text-on-surface focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary transition-colors placeholder:text-outline/70"
                            id="email" name="email" placeholder="admin@anda.com" required="" type="email"
                            value="{{ old('email') }}" />
                    </div>
                </div>
                <!-- Password Field -->
                <div>
                    <label class="block text-label-sm font-label-sm text-on-surface mb-stack-xs"
                        for="password">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-outline text-[20px]">lock</span>
                        </div>
                        <input
                            class="block w-full pl-10 pr-10 py-2 border border-outline-variant rounded-lg bg-surface text-body-md font-body-md text-on-surface focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary transition-colors placeholder:text-outline/70"
                            id="password" name="password" placeholder="••••••••" required="" type="password" />
                        <button
                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-outline hover:text-on-surface transition-colors focus:outline-none"
                            type="button">
                            <span class="material-symbols-outlined text-[20px]">visibility_off</span>
                        </button>
                    </div>
                </div>
                <!-- Options Row -->
                <div class="flex items-center justify-between pt-stack-xs">
                    <div class="flex items-center">
                        <input
                            class="h-4 w-4 rounded border-outline-variant text-primary focus:ring-primary bg-surface transition-colors cursor-pointer"
                            id="remember-me" name="remember-me" type="checkbox" />
                        <label class="ml-2 block text-label-sm font-label-sm text-on-surface-variant cursor-pointer"
                            for="remember-me">
                            Remember me
                        </label>
                    </div>
                    <div class="text-sm">
                        <a class="text-label-sm font-label-sm text-primary hover:text-primary-container transition-colors"
                            href="#">
                            Forgot password?
                        </a>
                    </div>
                </div>
                <!-- Submit Button -->
                <div class="pt-stack-sm">
                    <button
                        class="w-full flex justify-center items-center py-2.5 px-4 border border-transparent rounded-lg shadow-sm text-body-lg font-body-lg font-medium text-on-primary bg-primary hover:bg-primary-container focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-colors duration-200"
                        type="submit">
                        Login
                        <span class="material-symbols-outlined ml-2 text-[20px]">arrow_forward</span>
                    </button>
                </div>
            </form>
            <!-- Support Link -->
            <div class="mt-stack-lg pt-stack-md border-t border-outline-variant/30 text-center space-y-2">
                <p class="text-label-sm font-label-sm text-on-surface-variant">
                    Don't have an account? <a
                        class="text-primary hover:text-primary-container transition-colors font-bold"
                        href="{{ route('register') }}">Sign Up</a>
                </p>
                <p class="text-label-sm font-label-sm text-on-surface-variant">
                    Need assistance? <a class="text-primary hover:text-primary-container transition-colors"
                        href="#">Contact IT Support</a>
                </p>
            </div>
        </div>
        <!-- Footer Meta -->
        <div class="mt-stack-lg text-center">
            <p class="text-label-sm font-label-sm text-outline">
                © 2024 Anda Expedition. System v2.4.1
            </p>
        </div>
    </main>
</body>

</html>
