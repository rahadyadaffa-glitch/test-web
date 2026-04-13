<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>EventHub - Elite Event Orchestration</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
        }
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-primary-container": "#bbd0ff",
                        "error": "#ba1a1a",
                        "surface-container-highest": "#e1e3e4",
                        "on-primary-fixed": "#001a40",
                        "tertiary-fixed": "#ffdbcc",
                        "background": "#f8f9fa",
                        "surface": "#f8f9fa",
                        "surface-container-low": "#f3f4f5",
                        "surface-bright": "#f8f9fa",
                        "on-secondary-fixed": "#041b3c",
                        "primary-fixed-dim": "#acc7ff",
                        "on-surface-variant": "#424752",
                        "on-tertiary-fixed-variant": "#7b2f00",
                        "outline": "#727784",
                        "error-container": "#ffdad6",
                        "surface-tint": "#115cb9",
                        "inverse-on-surface": "#f0f1f2",
                        "tertiary-container": "#983c00",
                        "secondary": "#4c5e84",
                        "on-secondary-fixed-variant": "#34476a",
                        "on-primary-fixed-variant": "#004491",
                        "tertiary-fixed-dim": "#ffb694",
                        "on-error-container": "#93000a",
                        "primary-fixed": "#d7e2ff",
                        "surface-container": "#edeeef",
                        "primary-container": "#0056b3",
                        "on-secondary": "#ffffff",
                        "tertiary": "#722b00",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-high": "#e7e8e9",
                        "secondary-fixed-dim": "#b3c7f1",
                        "secondary-container": "#bfd2fd",
                        "on-error": "#ffffff",
                        "on-tertiary-fixed": "#351000",
                        "inverse-primary": "#acc7ff",
                        "on-background": "#191c1d",
                        "secondary-fixed": "#d7e2ff",
                        "surface-dim": "#d9dadb",
                        "primary": "#003f87",
                        "inverse-surface": "#2e3132",
                        "on-tertiary-container": "#ffc2a7",
                        "on-surface": "#191c1d",
                        "outline-variant": "#c2c6d4",
                        "surface-variant": "#e1e3e4",
                        "on-secondary-container": "#475a7f",
                        "on-primary": "#ffffff",
                        "on-tertiary": "#ffffff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "fontFamily": {
                        "headline": ["Inter"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    }
                },
            }
        }
    </script>
</head>
<body class="bg-background text-on-surface antialiased">
    <nav class="fixed top-0 w-full z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md shadow-sm dark:shadow-none">
        <div class="flex justify-between items-center px-8 py-4 max-w-7xl mx-auto">
            <div class="flex items-center gap-8">
                <a class="text-xl font-bold tracking-tighter text-blue-900 dark:text-blue-50" href="/">EventHub</a>
            </div>
            <div class="flex items-center gap-4">
                <a href="/login" class="inline-block text-slate-600 dark:text-slate-400 hover:text-blue-700 font-medium px-4 py-2 transition-colors duration-200">Login</a>
                <a href="/register" class="inline-block bg-primary-container text-on-primary px-6 py-2 rounded-xl font-semibold shadow-sm active:scale-95 transition-all hover:bg-primary">Create Account</a>
            </div>
        </div>
    </nav>

    <main>
        <section class="relative min-h-[90vh] flex items-center pt-20 overflow-hidden">
            <div class="absolute inset-0 z-0">
                <div class="absolute inset-0 bg-gradient-to-tr from-surface via-surface/90 to-primary/5"></div>
                <div class="absolute top-[-10%] right-[-10%] w-[500px] h-[500px] bg-primary/5 blur-[120px] rounded-full"></div>
                <div class="absolute bottom-[-10%] left-[-10%] w-[600px] h-[600px] bg-secondary/5 blur-[120px] rounded-full"></div>
                <img class="w-full h-full object-cover opacity-10 mix-blend-multiply" alt="Event hall" src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=2070&auto=format&fit=crop"/>
            </div>
            <div class="relative z-10 max-w-4xl mx-auto px-8 w-full text-center">
                <div class="space-y-8">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary-fixed/30 text-on-primary-fixed-variant text-xs font-bold tracking-widest uppercase mx-auto">
                        <span class="material-symbols-outlined text-[14px]">stars</span>
                        Elite Event Orchestration
                    </div>
                    <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight text-on-surface leading-[1.1]">
                        Orchestrate experiences that leave <span class="text-primary-container bg-clip-text">an impact.</span>
                    </h1>
                    <p class="text-lg md:text-xl text-on-surface-variant max-w-2xl mx-auto leading-relaxed">
                        EventHub is a professional event management platform designed to help you discover, manage, and curate world-class events and certifications.
                    </p>
                    <div class="flex flex-wrap justify-center gap-4 pt-4">
                        <a href="/register" class="bg-gradient-to-br from-primary to-primary-container text-on-primary px-8 py-4 rounded-xl font-bold text-lg shadow-xl shadow-primary/20 active:scale-95 transition-all flex items-center gap-2 justify-center">
                            Create Account
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </a>
                        <a href="/login" class="bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high px-8 py-4 rounded-xl font-bold text-lg active:scale-95 transition-all flex items-center justify-center">
                            Login
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 bg-surface-container-low">
            <div class="max-w-7xl mx-auto px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="p-10 bg-surface-container-lowest rounded-3xl flex flex-col justify-between group hover:shadow-xl transition-shadow duration-500">
                        <div class="space-y-4">
                            <span class="material-symbols-outlined text-primary text-4xl" data-weight="fill">discover_tune</span>
                            <h4 class="text-xl font-bold">Smart Discovery</h4>
                            <p class="text-on-surface-variant leading-relaxed">Advanced algorithms to find industry-specific events that match your professional trajectory and growth goals.</p>
                        </div>
                    </div>
                    <div class="p-10 bg-surface-container-lowest rounded-3xl flex flex-col justify-between group hover:shadow-xl transition-shadow duration-500">
                        <div class="space-y-4">
                            <span class="material-symbols-outlined text-primary text-4xl" data-weight="fill">dashboard_customize</span>
                            <h4 class="text-xl font-bold">Expert Curation</h4>
                            <p class="text-on-surface-variant leading-relaxed">Tools designed for perfectionists. Manage every detail of your platform presence from ticketing to custom workflows.</p>
                        </div>
                    </div>
                    <div class="p-10 bg-surface-container-lowest rounded-3xl flex flex-col justify-between group hover:shadow-xl transition-shadow duration-500">
                        <div class="space-y-4">
                            <span class="material-symbols-outlined text-primary text-4xl" data-weight="fill">award_star</span>
                            <h4 class="text-xl font-bold">World-Class Impact</h4>
                            <p class="text-on-surface-variant leading-relaxed">Issue industry-recognized certifications and credentials that carry global authority and professional weight.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="w-full border-t border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-950">
        <div class="flex flex-col md:flex-row justify-between items-center px-8 py-12 max-w-7xl mx-auto">
            <div class="mb-8 md:mb-0">
                <p class="text-lg font-bold text-blue-900 dark:text-blue-50">EventHub</p>
                <p class="text-sm font-inter text-slate-500 mt-2">© 2024 EventHub. All rights reserved.</p>
            </div>
            <div class="flex gap-8">
                <a class="text-slate-500 hover:text-slate-900 transition-opacity hover:underline decoration-blue-500 underline-offset-4 text-sm" href="#">Privacy Policy</a>
                <a class="text-slate-500 hover:text-slate-900 transition-opacity hover:underline decoration-blue-500 underline-offset-4 text-sm" href="#">Terms of Service</a>
                <a class="text-slate-500 hover:text-slate-900 transition-opacity hover:underline decoration-blue-500 underline-offset-4 text-sm" href="#">Cookies</a>
            </div>
        </div>
    </footer>
</body>
</html>