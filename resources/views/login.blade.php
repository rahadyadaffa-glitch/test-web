<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Login | EventHub</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "tertiary-container": "#983c00",
                        "surface-container-highest": "#e1e3e4",
                        "secondary-fixed-dim": "#b3c7f1",
                        "on-secondary-fixed-variant": "#34476a",
                        "surface-variant": "#e1e3e4",
                        "surface-container-high": "#e7e8e9",
                        "secondary-fixed": "#d7e2ff",
                        "on-error-container": "#93000a",
                        "outline-variant": "#c2c6d4",
                        "on-primary": "#ffffff",
                        "on-tertiary-container": "#ffc2a7",
                        "inverse-primary": "#acc7ff",
                        "surface-bright": "#f8f9fa",
                        "secondary-container": "#bfd2fd",
                        "surface-container": "#edeeef",
                        "on-secondary": "#ffffff",
                        "background": "#f8f9fa",
                        "on-tertiary-fixed-variant": "#7b2f00",
                        "on-tertiary": "#ffffff",
                        "on-error": "#ffffff",
                        "inverse-on-surface": "#f0f1f2",
                        "surface-container-lowest": "#ffffff",
                        "on-primary-fixed": "#001a40",
                        "primary": "#003f87",
                        "on-surface-variant": "#424752",
                        "tertiary": "#722b00",
                        "surface": "#f8f9fa",
                        "inverse-surface": "#2e3132",
                        "on-surface": "#191c1d",
                        "on-primary-container": "#bbd0ff",
                        "primary-fixed-dim": "#acc7ff",
                        "tertiary-fixed": "#ffdbcc",
                        "outline": "#727784",
                        "surface-container-low": "#f3f4f5",
                        "on-secondary-fixed": "#041b3c",
                        "error": "#ba1a1a",
                        "on-background": "#191c1d",
                        "surface-tint": "#115cb9",
                        "tertiary-fixed-dim": "#ffb694",
                        "surface-dim": "#d9dadb",
                        "on-tertiary-fixed": "#351000",
                        "secondary": "#4c5e84",
                        "primary-fixed": "#d7e2ff",
                        "on-primary-fixed-variant": "#004491",
                        "error-container": "#ffdad6",
                        "primary-container": "#0056b3",
                        "on-secondary-container": "#475a7f"
                    },
                    fontFamily: {
                        "headline": ["Inter"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    },
                    borderRadius: {"DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem"},
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-background text-on-background antialiased overflow-hidden">
    <main class="flex min-h-screen w-full">
        <section class="hidden lg:flex lg:w-1/2 relative items-end p-12 overflow-hidden bg-primary-container">
            <div class="absolute inset-0 z-0">
                <img alt="Large convention hall" class="w-full h-full object-cover opacity-60 mix-blend-overlay scale-105" src="https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=2069&auto=format&fit=crop"/>
                <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/20 to-transparent"></div>
            </div>
            
            <div class="relative z-10 w-full max-w-lg p-8 rounded-xl bg-surface-container-lowest/10 backdrop-blur-xl border border-outline-variant/10 shadow-2xl">
                <a href="/" class="flex items-center gap-2 mb-6 hover:opacity-80 transition-opacity">
                    <span class="material-symbols-outlined text-4xl text-on-primary-container" style="font-variation-settings: 'FILL' 1;">event_seat</span>
                    <h1 class="text-3xl font-black tracking-tighter text-on-primary">EventHub</h1>
                </a>
                <h2 class="text-4xl font-bold text-on-primary leading-tight mb-4 tracking-tight">Orchestrate experiences that leave an impact.</h2>
                <p class="text-on-primary-container text-lg font-medium opacity-90 leading-relaxed">
                    Join the world's most sophisticated event professionals in building the future of physical and digital gatherings.
                </p>
                <div class="mt-12 flex items-center gap-6">
                    <div class="flex -space-x-3">
                        <img class="w-10 h-10 rounded-full border-2 border-primary" alt="User" src="https://i.pravatar.cc/100?img=11"/>
                        <img class="w-10 h-10 rounded-full border-2 border-primary" alt="User" src="https://i.pravatar.cc/100?img=47"/>
                        <img class="w-10 h-10 rounded-full border-2 border-primary" alt="User" src="https://i.pravatar.cc/100?img=12"/>
                    </div>
                    <p class="text-sm text-on-primary-container font-semibold">Over 10k+ curators managing 50k+ events</p>
                </div>
            </div>
        </section>

        <section class="w-full lg:w-1/2 flex items-center justify-center p-8 md:p-16 bg-surface relative overflow-y-auto">
            <div class="w-full max-w-md">
                <div class="lg:hidden flex items-center gap-2 mb-12">
                    <a href="/" class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-3xl text-primary" style="font-variation-settings: 'FILL' 1;">event_seat</span>
                        <span class="text-2xl font-black tracking-tighter text-primary">EventHub</span>
                    </a>
                </div>

                <div class="space-y-2 mb-8">
                    <h3 class="text-3xl font-bold text-on-surface tracking-tight">Welcome back</h3>
                    <p class="text-on-surface-variant text-sm">Please enter your credentials to access your dashboard.</p>
                </div>

                @if($errors->any())
                    <div class="mb-6 p-4 rounded-xl bg-error-container text-on-error-container text-sm font-semibold flex items-center gap-3">
                        <span class="material-symbols-outlined text-error">error</span>
                        {{ $errors->first() }}
                    </div>
                @endif

                <form method="POST" action="{{ url('/login') }}" class="space-y-6">
                    @csrf <div class="space-y-1.5">
                        <label class="label-sm block text-[10px] font-bold uppercase tracking-widest text-on-surface-variant ml-1" for="email">Email Address</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-xl">mail</span>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus placeholder="curator@eventhub.com" 
                                class="w-full pl-12 pr-4 py-3.5 bg-surface-container-high border-none rounded-xl text-on-surface placeholder:text-outline/60 focus:ring-1 focus:ring-primary focus:bg-surface-container-lowest transition-all"/>
                        </div>
                    </div>

                    <div class="space-y-1.5">
                        <div class="flex justify-between items-center px-1">
                            <label class="label-sm block text-[10px] font-bold uppercase tracking-widest text-on-surface-variant" for="password">Password</label>
                            <a class="text-[11px] font-semibold text-primary hover:text-primary-container transition-colors" href="#">Forgot Password?</a>
                        </div>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-xl">lock</span>
                            <input type="password" id="password" name="password" required placeholder="••••••••" 
                                class="w-full pl-12 pr-12 py-3.5 bg-surface-container-high border-none rounded-xl text-on-surface placeholder:text-outline/60 focus:ring-1 focus:ring-primary focus:bg-surface-container-lowest transition-all"/>
                        </div>
                    </div>

                    <button type="submit" class="w-full py-4 bg-gradient-to-br from-primary to-primary-container text-on-primary font-bold rounded-xl shadow-lg shadow-primary/20 hover:opacity-90 active:scale-[0.98] transition-all duration-200 flex justify-center items-center gap-2">
                        <span>Sign In</span>
                        <span class="material-symbols-outlined text-xl">arrow_forward</span>
                    </button>
                </form>

                <div class="mt-12 text-center">
                    <p class="text-on-surface-variant text-sm font-medium">
                        Don't have an account yet? 
                        <a href="/register" class="text-primary font-bold hover:underline ml-1">Create an account</a>
                    </p>
                </div>

                <footer class="mt-16 flex justify-center gap-6 text-[10px] font-bold uppercase tracking-[0.1em] text-outline">
                    <a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
                    <a class="hover:text-primary transition-colors" href="#">Terms of Service</a>
                    <a class="hover:text-primary transition-colors" href="#">Help Center</a>
                </footer>
            </div>
        </section>
    </main>

    <div class="fixed top-0 right-0 w-96 h-96 bg-primary/5 rounded-full blur-[100px] pointer-events-none -mr-48 -mt-48 z-[-1]"></div>
    <div class="fixed bottom-0 left-0 w-64 h-64 bg-tertiary/5 rounded-full blur-[80px] pointer-events-none -ml-32 -mb-32 z-[-1]"></div>
</body>
</html>