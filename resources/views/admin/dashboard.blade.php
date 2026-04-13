<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>EventHub Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "secondary-container": "#bfd2fd",
                        "primary-container": "#0056b3",
                        "tertiary-fixed-dim": "#ffb694",
                        "tertiary-fixed": "#ffdbcc",
                        "inverse-surface": "#2e3132",
                        "surface-container-lowest": "#ffffff",
                        "surface": "#f8f9fa",
                        "on-secondary-fixed": "#041b3c",
                        "on-tertiary-fixed": "#351000",
                        "outline-variant": "#c2c6d4",
                        "on-secondary-container": "#475a7f",
                        "on-tertiary": "#ffffff",
                        "on-error-container": "#93000a",
                        "tertiary-container": "#983c00",
                        "on-primary-fixed": "#001a40",
                        "surface-bright": "#f8f9fa",
                        "on-surface": "#191c1d",
                        "on-background": "#191c1d",
                        "on-primary-container": "#bbd0ff",
                        "surface-tint": "#115cb9",
                        "secondary-fixed-dim": "#b3c7f1",
                        "secondary-fixed": "#d7e2ff",
                        "on-primary": "#ffffff",
                        "surface-container-highest": "#e1e3e4",
                        "background": "#f8f9fa",
                        "surface-container-high": "#e7e8e9",
                        "surface-container-low": "#f3f4f5",
                        "primary-fixed": "#d7e2ff",
                        "surface-dim": "#d9dadb",
                        "primary": "#003f87",
                        "primary-fixed-dim": "#acc7ff",
                        "inverse-primary": "#acc7ff",
                        "inverse-on-surface": "#f0f1f2",
                        "secondary": "#4c5e84",
                        "on-tertiary-fixed-variant": "#7b2f00",
                        "error-container": "#ffdad6",
                        "on-secondary-fixed-variant": "#34476a",
                        "surface-container": "#edeeef",
                        "on-surface-variant": "#424752",
                        "on-primary-fixed-variant": "#004491",
                        "on-secondary": "#ffffff",
                        "on-error": "#ffffff",
                        "error": "#ba1a1a",
                        "outline": "#727784",
                        "on-tertiary-container": "#ffc2a7",
                        "tertiary": "#722b00",
                        "surface-variant": "#e1e3e4"
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
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
        }
    </style>
</head>
<body class="bg-surface font-body text-on-surface antialiased">
    <header class="fixed top-0 w-full z-40 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md shadow-sm h-16 flex justify-between items-center px-6">
        <div class="flex items-center gap-8 pl-64">
            <span class="text-xl font-bold tracking-tight text-blue-900 dark:text-blue-100"></span>
            <div class="hidden md:flex items-center bg-slate-100 dark:bg-slate-800 rounded-lg px-3 py-1.5 gap-2 w-64">
                <span class="material-symbols-outlined text-slate-500 text-sm">search</span>
                <input class="bg-transparent border-none focus:ring-0 text-sm w-full placeholder:text-slate-400" placeholder="Search commands..." type="text"/>
            </div>
        </div>
        
        <div class="flex items-center gap-4">
            <button class="p-2 text-slate-500 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors rounded-full active:scale-95 duration-150 relative">
                <span class="material-symbols-outlined">notifications</span>
                @if($totalPendingEvents > 0)
                    <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full animate-pulse"></span>
                @endif
            </button>
            <button class="p-2 text-slate-500 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors rounded-full active:scale-95 duration-150">
                <span class="material-symbols-outlined">settings</span>
            </button>
            
            <div class="hidden md:flex flex-col text-right ml-4">
                <span class="text-sm font-bold text-slate-800">{{ Auth::guard('admin')->user()->username ?? 'Admin' }}</span>
                <span class="text-[10px] uppercase font-bold tracking-wider text-slate-400">{{ Auth::guard('admin')->user()->role_type ?? 'Staff' }}</span>
            </div>

            <div class="h-8 w-8 rounded-full overflow-hidden ml-2 ring-2 ring-primary/10">
                <img alt="Administrator profile" src="https://ui-avatars.com/api/?name={{ urlencode(Auth::guard('admin')->user()->username ?? 'Admin') }}&background=0D8ABC&color=fff"/>
            </div>
        </div>
    </header>

    <aside class="h-screen w-64 fixed left-0 top-0 overflow-y-auto bg-slate-50 dark:bg-slate-950 flex flex-col gap-2 p-4 pt-20 z-50 border-r border-slate-200">
        <div class="px-4 py-4 mb-2 relative z-50 -mt-16">
            <h2 class="text-xl font-extrabold text-blue-700 dark:text-blue-400 leading-none tracking-tight">EventHub Admin</h2>
            <p class="text-slate-400 text-[10px] font-bold uppercase tracking-[0.15em] mt-1.5">The Executive Curator</p>
        </div>
        
        <nav class="flex flex-col gap-2 mt-4 px-2">
            <a class="flex items-center gap-4 px-4 py-3.5 bg-white dark:bg-slate-800 text-blue-600 dark:text-blue-400 shadow-[0_2px_10px_rgba(0,0,0,0.04)] rounded-xl transition-all duration-200" href="{{ route('admin.dashboard') }}">
                <span class="material-symbols-outlined text-[22px]" style="font-variation-settings: 'FILL' 1;">grid_view</span>
                <span class="font-inter tracking-wide text-[15px] font-bold">Dashboard</span>
            </a>
            
            <a class="flex items-center gap-4 px-4 py-3.5 text-slate-500 dark:text-slate-400 hover:text-slate-800 dark:hover:text-slate-200 hover:bg-slate-100/50 rounded-xl transition-all duration-200" href="{{ route('admin.events.index') }}">
                <span class="material-symbols-outlined text-[22px]">calendar_today</span>
                <span class="font-inter tracking-wide text-[15px] font-semibold">Events</span>
            </a>

            <a class="flex items-center gap-4 px-4 py-3.5 text-slate-500 dark:text-slate-400 hover:text-slate-800 dark:hover:text-slate-200 hover:bg-slate-100/50 rounded-xl transition-all duration-200" href="#">
                <span class="material-symbols-outlined text-[22px]">groups</span>
                <span class="font-inter tracking-wide text-[15px] font-semibold">Attendees</span>
            </a>

            <a class="flex items-center gap-4 px-4 py-3.5 text-slate-500 dark:text-slate-400 hover:text-slate-800 dark:hover:text-slate-200 hover:bg-slate-100/50 rounded-xl transition-all duration-200" href="#">
                <span class="material-symbols-outlined text-[22px]">workspace_premium</span>
                <span class="font-inter tracking-wide text-[15px] font-semibold">Certificate Studio</span>
            </a>
        </nav>
        
        <div class="mt-auto pt-10">
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-slate-800 transition-all" href="#">
                <span class="material-symbols-outlined text-[22px]">help_outline</span>
                <span class="font-inter tracking-wide text-sm font-semibold">Help Center</span>
            </a>
            
            <form method="POST" action="{{ route('admin.logout') }}" class="w-full mt-2">
                @csrf
                <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 text-red-600 bg-red-50 hover:bg-red-100 rounded-xl font-bold transition-all duration-200">
                    <span class="material-symbols-outlined text-[22px]">logout</span>
                    <span class="font-inter tracking-wide text-sm uppercase">Secure Logout</span>
                </button>
            </form>
        </div>
    </aside>
    <main class="ml-64 pt-20 p-8 min-h-screen">
        <div class="max-w-7xl mx-auto space-y-8">
            <header class="flex flex-col gap-1">
                <h1 class="text-[2rem] font-bold tracking-tight text-on-surface">Administrative Overview</h1>
                <p class="text-on-surface-variant text-sm">Curation analytics and lifecycle monitoring.</p>
            </header>

            <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-surface-container-lowest rounded-xl p-6 relative overflow-hidden group shadow-sm border border-slate-100">
                    <div class="absolute right-0 top-0 w-24 h-24 bg-primary/5 rounded-bl-full transform transition-transform group-hover:scale-110"></div>
                    <div class="space-y-4 relative z-10">
                        <span class="text-[0.6875rem] font-bold uppercase tracking-wider text-on-surface-variant">Approved Events</span>
                        <div class="flex items-baseline gap-2">
                            <span class="text-4xl font-extrabold text-primary">{{ $totalApprovedEvents }}</span>
                        </div>
                    </div>
                </div>
                
                <div class="bg-amber-50 rounded-xl p-6 relative overflow-hidden group shadow-sm border border-amber-100">
                    <div class="absolute right-0 top-0 w-24 h-24 bg-amber-500/10 rounded-bl-full transform transition-transform group-hover:scale-110"></div>
                    <div class="space-y-4 relative z-10">
                        <span class="text-[0.6875rem] font-bold uppercase tracking-wider text-amber-700">Pending Review</span>
                        <div class="flex items-baseline gap-2">
                            <span class="text-4xl font-extrabold text-amber-600">{{ $totalPendingEvents }}</span>
                            <span class="text-xs font-medium text-amber-700">Needs your attention</span>
                        </div>
                    </div>
                </div>
                
                <div class="bg-surface-container-lowest rounded-xl p-6 relative overflow-hidden group shadow-sm border border-slate-100">
                    <div class="absolute right-0 top-0 w-24 h-24 bg-primary-container/5 rounded-bl-full transform transition-transform group-hover:scale-110"></div>
                    <div class="space-y-4 relative z-10">
                        <span class="text-[0.6875rem] font-bold uppercase tracking-wider text-on-surface-variant">Registered Users</span>
                        <div class="flex items-baseline gap-2">
                            <span class="text-4xl font-extrabold text-on-surface">{{ $totalUsers }}</span>
                            <span class="text-xs font-medium text-on-surface-variant">Event Organizers & Attendees</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                <div class="bg-surface-container-lowest rounded-xl overflow-hidden lg:col-span-12 shadow-sm border border-slate-100">
                    <div class="p-6 flex justify-between items-center bg-slate-50/50 border-b border-slate-100">
                        <h3 class="text-lg font-bold tracking-tight">Recent Event Submissions</h3>
                        <a href="{{ route('admin.events.index') }}" class="text-primary text-sm font-semibold hover:underline flex items-center gap-1">
                            View All <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                    </div>
                    
                    <div class="divide-y divide-outline-variant/15 px-6 pb-6">
                        
                        @forelse($pendingEvents as $event)
                        <div class="py-5 flex items-center gap-6 group hover:bg-slate-50 transition-colors -mx-6 px-6">
                            <div class="w-16 h-16 rounded-lg overflow-hidden flex-shrink-0 bg-slate-200 relative">
                                <img alt="{{ $event->title }}" class="w-full h-full object-cover opacity-80" src="https://source.unsplash.com/1600x900/?seminar,technology&sig={{ $event->id }}"/>
                            </div>
                            <div class="flex-grow">
                                <div class="flex items-center gap-3 mb-1">
                                    <h4 class="font-bold text-on-surface">{{ $event->title }}</h4>
                                    <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wider bg-amber-100 text-amber-800">Pending Review</span>
                                </div>
                                <div class="flex items-center gap-4 text-xs text-slate-500 font-medium mt-2">
                                    <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">person</span> By: {{ $event->user->name ?? 'Unknown User' }}</span>
                                    <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">schedule</span> Submitted {{ $event->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="py-8 text-center text-slate-500 text-sm">
                            Hooray! No pending events to review at the moment.
                        </div>
                        @endforelse

                        @foreach($approvedEvents as $event)
                        <div class="py-5 flex items-center gap-6 group cursor-pointer hover:bg-slate-50 transition-colors -mx-6 px-6">
                            <div class="w-16 h-16 rounded-lg overflow-hidden flex-shrink-0 bg-slate-200">
                                <img alt="{{ $event->title }}" class="w-full h-full object-cover" src="https://source.unsplash.com/1600x900/?event,conference&sig={{ $event->id + 100 }}"/>
                            </div>
                            <div class="flex-grow">
                                <div class="flex items-center gap-3 mb-1">
                                    <h4 class="font-bold text-on-surface group-hover:text-primary transition-colors">{{ $event->title }}</h4>
                                    <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wider bg-green-100 text-green-800">Approved</span>
                                </div>
                                <div class="flex items-center gap-4 text-xs text-slate-500 font-medium">
                                    <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">calendar_month</span> {{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }}</span>
                                    <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">location_on</span> {{ $event->location }}</span>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-sm font-bold text-slate-800">{{ $event->quota }}</div>
                                <div class="text-[10px] text-slate-500 uppercase tracking-wider font-semibold mt-0.5">Quota Limit</div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </section>

            <section class="bg-blue-50/50 rounded-xl p-8 border border-blue-100">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                    <div>
                        <h2 class="text-xl font-bold text-blue-900">Event Curation Queue</h2>
                        <p class="text-blue-700/70 text-sm mt-1 font-medium">You have {{ $totalPendingEvents }} new events waiting for your approval.</p>
                    </div>
                    <div class="flex gap-3">
                        <a href="{{ route('admin.events.index') }}" class="px-6 py-2.5 bg-blue-700 text-white rounded-lg font-bold text-sm shadow-md hover:bg-blue-800 hover:shadow-lg active:scale-95 transition-all flex items-center gap-2 inline-block">
                            <span class="material-symbols-outlined text-[18px]">rule</span>
                            Review Pending Events
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>
</html>