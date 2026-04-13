<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>EventHub | Browse Events</title>
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
        .glass-panel {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
    </style>
</head>
<body class="bg-surface text-on-surface">
    <aside class="hidden md:flex flex-col h-screen w-64 fixed left-0 top-0 bg-slate-50 border-r border-slate-200/50 py-6 px-4 gap-4 z-50">
        <div class="flex items-center gap-3 mb-6 px-2">
            <div class="w-10 h-10 rounded-lg bg-primary-container flex items-center justify-center">
                <span class="material-symbols-outlined text-on-primary" style='font-variation-settings: "FILL" 1;'>event</span>
            </div>
            <div>
                <h1 class="text-lg font-bold text-blue-800">EventHub</h1>
                <p class="text-[10px] uppercase font-bold tracking-widest text-slate-400">User Portal</p>
            </div>
        </div>
        <nav class="space-y-1">
            <a class="flex items-center gap-3 py-3 px-4 bg-blue-50 text-blue-700 font-bold rounded-lg transition-all duration-200" href="#">
                <span class="material-symbols-outlined">search</span>
                <span class="text-sm font-label uppercase font-bold tracking-wider">Browse Events</span>
            </a>
            <a class="flex items-center gap-3 py-3 px-4 text-slate-600 hover:text-blue-600 hover:bg-slate-200/50 rounded-lg transition-all duration-200" href="#">
                <span class="material-symbols-outlined">calendar_today</span>
                <span class="text-sm font-label uppercase font-bold tracking-wider">My Events</span>
            </a>
            <a class="flex items-center gap-3 py-3 px-4 text-slate-600 hover:text-blue-600 hover:bg-slate-200/50 rounded-lg transition-all duration-200" href="#">
                <span class="material-symbols-outlined">verified</span>
                <span class="text-sm font-label uppercase font-bold tracking-wider">Certificates</span>
            </a>
        </nav>
        <div class="mt-auto space-y-1">
            <div class="h-px bg-slate-200/50 mb-4 mx-4"></div>
            <a class="flex items-center gap-3 py-3 px-4 text-slate-600 hover:text-blue-600 hover:bg-slate-200/50 rounded-lg transition-all duration-200" href="#">
                <span class="material-symbols-outlined">settings</span>
                <span class="text-sm font-label uppercase font-bold tracking-wider">Settings</span>
            </a>
            <a class="flex items-center gap-3 py-3 px-4 text-slate-600 hover:text-blue-600 hover:bg-slate-200/50 rounded-lg transition-all duration-200" href="#">
                <span class="material-symbols-outlined">help</span>
                <span class="text-sm font-label uppercase font-bold tracking-wider">Support</span>
            </a>
        </div>
    </aside>

    <main class="md:ml-64 min-h-screen">
        <header class="w-full top-0 sticky z-40 bg-white shadow-sm flex justify-between items-center px-6 h-16 max-w-full">
            <div class="flex items-center gap-6 flex-1">
                <div class="relative w-full max-w-md group">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors">search</span>
                    <input class="w-full bg-slate-100 border-none rounded-lg py-2 pl-10 pr-4 text-sm focus:ring-1 focus:ring-primary focus:bg-white transition-all duration-200" placeholder="Search events, workshops, conferences..." type="text"/>
                </div>
            </div>
            
            <div class="flex items-center gap-4">
                <button class="w-10 h-10 flex items-center justify-center text-slate-600 hover:bg-slate-50 rounded-full transition-colors active:scale-95">
                    <span class="material-symbols-outlined">notifications</span>
                </button>
                
                <span class="text-sm font-bold text-slate-700 hidden sm:block">Halo, {{ Auth::user()->name }}</span>
                
                <form method="POST" action="{{ route('logout') }}" class="m-0">
                    @csrf
                    <button type="submit" class="flex items-center gap-2 bg-red-50 text-red-600 hover:bg-red-100 px-4 py-2 rounded-lg font-bold text-sm transition-colors active:scale-95">
                        <span class="material-symbols-outlined text-[18px]">logout</span>
                        <span class="hidden sm:inline">Logout</span>
                    </button>
                </form>
            </div>
        </header>

        <div class="p-8 space-y-12">
            <section class="relative h-[480px] w-full rounded-xl overflow-hidden shadow-sm group">
                <img alt="Featured Event Hero" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=2070&auto=format&fit=crop"/>
                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 via-blue-900/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-12 w-full md:w-2/3 space-y-6">
                    <div class="inline-flex items-center px-3 py-1 bg-primary text-white rounded-full text-xs font-bold tracking-widest uppercase">
                        Featured Event
                    </div>
                    <h2 class="text-4xl md:text-5xl font-extrabold text-white leading-tight tracking-tight">Global Innovation Summit 2024: The Future of Neural Networks</h2>
                    <p class="text-lg text-blue-100/90 max-w-xl font-medium leading-relaxed">Join 50,000+ pioneers as we explore the ethical and industrial shifts of generative intelligence in the heart of San Francisco.</p>
                    <div class="flex gap-4">
                        <button class="bg-gradient-to-br from-primary to-primary-container text-white px-8 py-3 rounded-lg font-bold shadow-lg hover:shadow-primary/20 transition-all active:scale-95">
                            Register Now
                        </button>
                        <button class="bg-white/10 backdrop-blur-md text-white border border-white/20 px-8 py-3 rounded-lg font-bold hover:bg-white/20 transition-all active:scale-95">
                            View Details
                        </button>
                    </div>
                </div>
            </section>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
                <aside class="lg:col-span-3 space-y-8">
                    <div>
                        <h3 class="text-xs font-bold uppercase tracking-[0.2em] text-on-surface-variant mb-6">Filter by Category</h3>
                        <div class="space-y-2">
                            <label class="flex items-center gap-3 p-3 bg-surface-container-low rounded-lg border border-transparent hover:border-primary/20 cursor-pointer transition-all">
                                <input checked="" class="rounded text-primary focus:ring-primary h-4 w-4 bg-surface" type="checkbox"/>
                                <span class="text-sm font-medium text-on-surface">Technology</span>
                                <span class="ml-auto text-xs font-bold text-slate-400">12</span>
                            </label>
                            <label class="flex items-center gap-3 p-3 bg-white rounded-lg border border-transparent hover:border-primary/20 cursor-pointer transition-all">
                                <input class="rounded text-primary focus:ring-primary h-4 w-4 bg-surface" type="checkbox"/>
                                <span class="text-sm font-medium text-on-surface">Art & Design</span>
                                <span class="ml-auto text-xs font-bold text-slate-400">8</span>
                            </label>
                            <label class="flex items-center gap-3 p-3 bg-white rounded-lg border border-transparent hover:border-primary/20 cursor-pointer transition-all">
                                <input class="rounded text-primary focus:ring-primary h-4 w-4 bg-surface" type="checkbox"/>
                                <span class="text-sm font-medium text-on-surface">Business</span>
                                <span class="ml-auto text-xs font-bold text-slate-400">24</span>
                            </label>
                            <label class="flex items-center gap-3 p-3 bg-white rounded-lg border border-transparent hover:border-primary/20 cursor-pointer transition-all">
                                <input class="rounded text-primary focus:ring-primary h-4 w-4 bg-surface" type="checkbox"/>
                                <span class="text-sm font-medium text-on-surface">Education</span>
                                <span class="ml-auto text-xs font-bold text-slate-400">15</span>
                            </label>
                        </div>
                    </div>
                </aside>

                <div class="lg:col-span-9">
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h2 class="text-3xl font-extrabold text-on-surface tracking-tight">Upcoming Events</h2>
                            <p class="text-on-surface-variant text-sm mt-1">Discover trending experiences curated for you</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Sort By:</span>
                            <select class="bg-transparent border-none text-sm font-bold text-primary focus:ring-0 cursor-pointer">
                                <option>Date (Soonest)</option>
                                <option>Popularity</option>
                                <option>Price: Low to High</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                        <article class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/15 flex flex-col overflow-hidden hover:shadow-md transition-shadow group">
                            <div class="h-48 relative overflow-hidden">
                                <img alt="Tech Workshop" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?q=80&w=2070&auto=format&fit=crop"/>
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 bg-primary-fixed text-on-primary-fixed-variant text-[10px] font-bold uppercase rounded-full tracking-wider">Live</span>
                                </div>
                            </div>
                            <div class="p-6 flex-1 flex flex-col space-y-4">
                                <div class="space-y-1">
                                    <h3 class="text-lg font-bold text-on-surface leading-snug">SaaS Product Strategy Workshop</h3>
                                    <div class="flex items-center gap-2 text-on-surface-variant text-xs">
                                        <span class="material-symbols-outlined text-[16px]">calendar_month</span>
                                        <span>Oct 12, 2024 • 09:00 AM</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-on-surface-variant text-xs">
                                        <span class="material-symbols-outlined text-[16px]">location_on</span>
                                        <span>London, UK • Digital Hub</span>
                                    </div>
                                </div>
                                <div class="pt-4 mt-auto">
                                    <button class="w-full py-2.5 bg-secondary-container text-on-secondary-container rounded-lg font-bold text-sm hover:bg-primary hover:text-white transition-all">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </article>

                        <article class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/15 flex flex-col overflow-hidden hover:shadow-md transition-shadow group">
                            <div class="h-48 relative overflow-hidden">
                                <img alt="Art Exhibition" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1531058020387-3be344556be6?q=80&w=2070&auto=format&fit=crop"/>
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 bg-tertiary-container text-on-tertiary-container text-[10px] font-bold uppercase rounded-full tracking-wider">Draft</span>
                                </div>
                            </div>
                            <div class="p-6 flex-1 flex flex-col space-y-4">
                                <div class="space-y-1">
                                    <h3 class="text-lg font-bold text-on-surface leading-snug">Metamorphosis: Modern Art Gala</h3>
                                    <div class="flex items-center gap-2 text-on-surface-variant text-xs">
                                        <span class="material-symbols-outlined text-[16px]">calendar_month</span>
                                        <span>Nov 05, 2024 • 06:00 PM</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-on-surface-variant text-xs">
                                        <span class="material-symbols-outlined text-[16px]">location_on</span>
                                        <span>Paris, FR • Musee d'Orsay</span>
                                    </div>
                                </div>
                                <div class="pt-4 mt-auto">
                                    <button class="w-full py-2.5 bg-secondary-container text-on-secondary-container rounded-lg font-bold text-sm hover:bg-primary hover:text-white transition-all">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </article>

                        <article class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/15 flex flex-col overflow-hidden hover:shadow-md transition-shadow group">
                            <div class="h-48 relative overflow-hidden">
                                <img alt="Education Summit" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=2070&auto=format&fit=crop"/>
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 bg-primary-fixed text-on-primary-fixed-variant text-[10px] font-bold uppercase rounded-full tracking-wider">Live</span>
                                </div>
                            </div>
                            <div class="p-6 flex-1 flex flex-col space-y-4">
                                <div class="space-y-1">
                                    <h3 class="text-lg font-bold text-on-surface leading-snug">EdTech 2024: Classroom Evolution</h3>
                                    <div class="flex items-center gap-2 text-on-surface-variant text-xs">
                                        <span class="material-symbols-outlined text-[16px]">calendar_month</span>
                                        <span>Oct 28, 2024 • 10:00 AM</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-on-surface-variant text-xs">
                                        <span class="material-symbols-outlined text-[16px]">location_on</span>
                                        <span>Virtual • MetaVerse Hall</span>
                                    </div>
                                </div>
                                <div class="pt-4 mt-auto">
                                    <button class="w-full py-2.5 bg-secondary-container text-on-secondary-container rounded-lg font-bold text-sm hover:bg-primary hover:text-white transition-all">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="mt-12 pt-8 flex items-center justify-between border-t border-slate-200/50">
                        <button class="flex items-center gap-2 text-sm font-bold text-slate-400 hover:text-primary transition-colors disabled:opacity-50" disabled="">
                            <span class="material-symbols-outlined">arrow_back</span>
                            Previous
                        </button>
                        <div class="flex gap-2">
                            <button class="w-10 h-10 rounded-lg bg-primary text-white font-bold text-sm">1</button>
                            <button class="w-10 h-10 rounded-lg hover:bg-slate-200 text-on-surface font-bold text-sm">2</button>
                            <button class="w-10 h-10 rounded-lg hover:bg-slate-200 text-on-surface font-bold text-sm">3</button>
                        </div>
                        <button class="flex items-center gap-2 text-sm font-bold text-on-surface hover:text-primary transition-colors">
                            Next
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <nav class="md:hidden fixed bottom-0 left-0 right-0 h-16 bg-white shadow-[0_-4px_20px_rgba(0,0,0,0.05)] z-50 flex items-center justify-around px-4">
        <a class="flex flex-col items-center text-primary" href="#">
            <span class="material-symbols-outlined" style='font-variation-settings: "FILL" 1;'>search</span>
            <span class="text-[10px] font-bold uppercase tracking-tighter">Browse</span>
        </a>
        <a class="flex flex-col items-center text-slate-400" href="#">
            <span class="material-symbols-outlined">calendar_today</span>
            <span class="text-[10px] font-bold uppercase tracking-tighter">My Events</span>
        </a>
        <a class="flex flex-col items-center text-slate-400" href="#">
            <span class="material-symbols-outlined">verified</span>
            <span class="text-[10px] font-bold uppercase tracking-tighter">Certs</span>
        </a>
        <form method="POST" action="{{ route('logout') }}" class="flex flex-col items-center">
            @csrf
            <button type="submit" class="flex flex-col items-center text-red-500">
                <span class="material-symbols-outlined">logout</span>
                <span class="text-[10px] font-bold uppercase tracking-tighter">Logout</span>
            </button>
        </form>
    </nav>
</body>
</html>