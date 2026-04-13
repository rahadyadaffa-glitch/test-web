<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Register - EventHub</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "surface-container-high": "#e7e8e9",
                        "secondary": "#4c5e84",
                        "on-surface-variant": "#424752",
                        "surface-bright": "#f8f9fa",
                        "secondary-container": "#bfd2fd",
                        "tertiary-fixed-dim": "#ffb694",
                        "tertiary-fixed": "#ffdbcc",
                        "primary-fixed-dim": "#acc7ff",
                        "surface-container": "#edeeef",
                        "inverse-on-surface": "#f0f1f2",
                        "on-background": "#191c1d",
                        "surface-container-highest": "#e1e3e4",
                        "on-primary-fixed": "#001a40",
                        "error": "#ba1a1a",
                        "outline": "#727784",
                        "on-primary-fixed-variant": "#004491",
                        "on-tertiary-container": "#ffc2a7",
                        "on-surface": "#191c1d",
                        "surface": "#f8f9fa",
                        "error-container": "#ffdad6",
                        "primary": "#003f87",
                        "on-primary-container": "#bbd0ff",
                        "secondary-fixed-dim": "#b3c7f1",
                        "background": "#f8f9fa",
                        "tertiary-container": "#983c00",
                        "secondary-fixed": "#d7e2ff",
                        "primary-fixed": "#d7e2ff",
                        "on-secondary": "#ffffff",
                        "on-secondary-container": "#475a7f",
                        "surface-container-lowest": "#ffffff",
                        "outline-variant": "#c2c6d4",
                        "inverse-primary": "#acc7ff",
                        "inverse-surface": "#2e3132",
                        "surface-tint": "#115cb9",
                        "on-tertiary-fixed-variant": "#7b2f00",
                        "on-error": "#ffffff",
                        "surface-variant": "#e1e3e4",
                        "primary-container": "#0056b3",
                        "on-tertiary": "#ffffff",
                        "on-error-container": "#93000a",
                        "on-secondary-fixed-variant": "#34476a",
                        "on-primary": "#ffffff",
                        "on-secondary-fixed": "#041b3c",
                        "surface-container-low": "#f3f4f5",
                        "tertiary": "#722b00",
                        "surface-dim": "#d9dadb",
                        "on-tertiary-fixed": "#351000"
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
        .glass-effect {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
    </style>
</head>
<body class="bg-surface font-body text-on-surface antialiased min-h-screen flex items-center justify-center p-4">
    <main class="w-full max-w-[1200px] grid grid-cols-1 md:grid-cols-2 bg-surface-container-lowest rounded-xl shadow-[0px_10px_30px_rgba(25,28,29,0.06)] overflow-hidden">
        
        <div class="hidden md:block relative bg-primary-container p-12 flex flex-col justify-between overflow-hidden">
            <div class="absolute inset-0 opacity-20">
                <img class="w-full h-full object-cover" alt="Modern professional conference hall" src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?q=80&w=2012&auto=format&fit=crop"/>
            </div>
            <div class="absolute inset-0 bg-gradient-to-br from-primary via-primary-container/80 to-transparent"></div>
            <div class="relative z-10">
                <a href="/" class="flex items-center gap-2 mb-8 hover:opacity-80 transition-opacity">
                    <span class="material-symbols-outlined text-on-primary text-3xl" style="font-variation-settings: 'FILL' 1;">event_available</span>
                    <span class="text-xl font-bold tracking-tighter text-on-primary">EventHub</span>
                </a>
                <h1 class="text-4xl font-headline font-extrabold text-on-primary tracking-tight leading-tight mb-4">
                    Master the Art <br/>of Orchestration.
                </h1>
                <p class="text-on-primary-container body-md max-w-sm opacity-90">
                    Join the elite circle of event curators and transform your logistical challenges into seamless executive experiences.
                </p>
            </div>
            <div class="relative z-10 glass-effect p-6 rounded-xl border border-outline-variant/10">
                <p class="text-primary font-semibold mb-2">"The ultimate tool for precision."</p>
                <div class="flex items-center gap-3">
                    <img class="w-10 h-10 rounded-full object-cover" alt="Executive" src="https://i.pravatar.cc/150?img=11"/>
                    <div>
                        <p class="text-on-surface font-bold text-sm">Marcus Chen</p>
                        <p class="text-on-surface-variant text-xs label-sm">EXECUTIVE PRODUCER</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-8 md:p-16 flex flex-col justify-center overflow-y-auto">
            <div class="mb-8">
                <a href="/" class="md:hidden flex items-center gap-2 mb-8">
                    <span class="material-symbols-outlined text-primary text-3xl" style="font-variation-settings: 'FILL' 1;">event_available</span>
                    <span class="text-xl font-bold tracking-tighter text-primary">EventHub</span>
                </a>
                <h2 class="text-3xl font-headline font-bold text-on-surface tracking-tight">Create your account</h2>
                <p class="text-on-surface-variant mt-2">Professional access to EventHub Curator Suite.</p>
            </div>

            @if($errors->any())
                <div class="mb-6 p-4 rounded-xl bg-error-container text-on-error-container text-sm font-semibold">
                    <ul class="list-disc list-inside">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ url('/register') }}" class="space-y-6">
                @csrf <div class="space-y-4">
                    <div>
                        <label class="block label-sm font-bold tracking-wider text-on-surface-variant mb-2" for="name">FULL NAME</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus placeholder="John Doe" 
                            class="w-full bg-surface-container-low border-none rounded-md py-3 px-4 focus:ring-1 focus:ring-primary focus:bg-surface-container-lowest transition-all placeholder:text-outline/50"/>
                    </div>

                    <div>
                        <label class="block label-sm font-bold tracking-wider text-on-surface-variant mb-2" for="email">EMAIL ADDRESS</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="executive@eventhub.com" 
                            class="w-full bg-surface-container-low border-none rounded-md py-3 px-4 focus:ring-1 focus:ring-primary focus:bg-surface-container-lowest transition-all placeholder:text-outline/50"/>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block label-sm font-bold tracking-wider text-on-surface-variant mb-2" for="password">PASSWORD</label>
                            <input type="password" id="password" name="password" required placeholder="••••••••" 
                                class="w-full bg-surface-container-low border-none rounded-md py-3 px-4 focus:ring-1 focus:ring-primary focus:bg-surface-container-lowest transition-all placeholder:text-outline/50"/>
                        </div>
                        <div>
                            <label class="block label-sm font-bold tracking-wider text-on-surface-variant mb-2" for="password_confirmation">CONFIRM PASSWORD</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="••••••••" 
                                class="w-full bg-surface-container-low border-none rounded-md py-3 px-4 focus:ring-1 focus:ring-primary focus:bg-surface-container-lowest transition-all placeholder:text-outline/50"/>
                        </div>
                    </div>
                </div>

                <div class="flex items-start gap-3 py-2">
                    <input class="mt-1 rounded-sm border-outline-variant text-primary focus:ring-primary" id="terms" type="checkbox" required/>
                    <label class="text-sm text-on-surface-variant leading-relaxed" for="terms">
                        By creating an account, you agree to our <a class="text-primary font-medium hover:underline" href="#">Terms of Service</a> and <a class="text-primary font-medium hover:underline" href="#">Privacy Policy</a>.
                    </label>
                </div>

                <button type="submit" class="w-full py-4 bg-gradient-to-br from-primary to-primary-container text-on-primary font-bold rounded-md shadow-lg shadow-primary/20 hover:opacity-90 active:scale-[0.98] transition-all">
                    Register Account
                </button>

                <div class="text-center pt-6">
                    <p class="text-on-surface-variant">
                        Already have an account? 
                        <a href="/login" class="text-primary font-bold hover:underline">Sign In</a>
                    </p>
                </div>
            </form>
        </div>
    </main>
    <footer class="fixed bottom-6 text-on-surface-variant/40 label-sm tracking-widest uppercase">
        © 2024 EventHub Management System • The Executive Curator
    </footer>
</body>
</html>