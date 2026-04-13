<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>EventHub | Events Management</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "secondary-fixed-dim": "#b3c7f1", "on-primary-fixed-variant": "#004491", "on-secondary": "#ffffff", "surface-container-lowest": "#ffffff", "inverse-surface": "#2e3132", "primary-fixed-dim": "#acc7ff", "on-tertiary-container": "#ffc2a7", "tertiary-fixed-dim": "#ffb694", "surface-dim": "#d9dadb", "on-primary-container": "#bbd0ff", "surface-tint": "#115cb9", "secondary": "#4c5e84", "error": "#ba1a1a", "on-background": "#191c1d", "on-surface": "#191c1d", "on-tertiary-fixed": "#351000", "background": "#f8f9fa", "surface-container": "#edeeef", "primary-fixed": "#d7e2ff", "primary-container": "#0056b3", "outline-variant": "#c2c6d4", "on-secondary-fixed-variant": "#34476a", "on-surface-variant": "#424752", "surface-container-highest": "#e1e3e4", "surface-container-low": "#f3f4f5", "error-container": "#ffdad6", "secondary-fixed": "#d7e2ff", "surface-variant": "#e1e3e4", "outline": "#727784", "on-error-container": "#93000a", "surface": "#f8f9fa", "on-tertiary": "#ffffff", "on-error": "#ffffff", "on-primary-fixed": "#001a40", "on-secondary-fixed": "#041b3c", "tertiary-container": "#983c00", "secondary-container": "#bfd2fd", "surface-container-high": "#e7e8e9", "inverse-primary": "#acc7ff", "tertiary": "#722b00", "primary": "#0056b3", "on-secondary-container": "#475a7f", "inverse-on-surface": "#f0f1f2", "surface-bright": "#f8f9fa", "tertiary-fixed": "#ffdbcc", "on-tertiary-fixed-variant": "#7b2f00", "on-primary": "#ffffff"
                    },
                    fontFamily: { "headline": ["Inter"], "body": ["Inter"], "label": ["Inter"] },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "1rem"},
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        body { font-family: 'Inter', sans-serif; }
        .glass-effect { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(12px); }
    </style>
</head>
<body class="bg-surface text-on-surface antialiased">
    <aside class="h-screen w-64 fixed left-0 top-0 bg-slate-50 dark:bg-slate-950 flex flex-col border-r-0 p-4 gap-2 z-50">
        <div class="flex items-center gap-3 px-2 py-4 mb-6">
            <div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center text-on-primary">
                <span class="material-symbols-outlined" data-weight="fill" style="font-variation-settings: 'FILL' 1;">event</span>
            </div>
            <div>
                <h1 class="text-lg font-bold text-blue-900 dark:text-white leading-none">EventHub</h1>
                <p class="text-[10px] text-slate-500 font-label tracking-widest uppercase mt-1">Executive Curator</p>
            </div>
        </div>
        <nav class="flex flex-col gap-1">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800/80 transition-all rounded-lg font-inter tracking-tight">
                <span class="material-symbols-outlined">dashboard</span>
                <span>Dashboard</span>
            </a>
            <a href="{{ route('admin.events.index') }}" class="flex items-center gap-3 px-3 py-2 bg-white dark:bg-slate-800 text-primary dark:text-blue-400 shadow-sm rounded-lg font-bold transition-all font-inter tracking-tight">
                <span class="material-symbols-outlined">event</span>
                <span>Events</span>
            </a>
            <a href="#" class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800/80 transition-all rounded-lg font-inter tracking-tight">
                <span class="material-symbols-outlined">group</span>
                <span>Attendees</span>
            </a>
            <a href="#" class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800/80 transition-all rounded-lg font-inter tracking-tight">
                <span class="material-symbols-outlined">workspace_premium</span>
                <span>Certificate Studio</span>
            </a>
        </nav>
        <div class="mt-auto flex flex-col gap-1">
            <a href="#" class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800/80 transition-all rounded-lg font-inter tracking-tight">
                <span class="material-symbols-outlined">help</span>
                <span>Help Center</span>
            </a>
            <form method="POST" action="{{ route('admin.logout') }}" class="w-full">
                @csrf
                <button type="submit" class="w-full flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800/80 transition-all rounded-lg font-inter tracking-tight">
                    <span class="material-symbols-outlined">logout</span>
                    <span>Logout</span>
                </button>
            </form>
        </div>
    </aside>

    <main class="ml-64 min-h-screen">
        <header class="flex justify-between items-center px-6 h-16 w-full ml-auto bg-white dark:bg-slate-900 border-b-0 sticky top-0 z-40 glass-effect">
            <div class="flex items-center gap-4 flex-1">
                <div class="relative w-full max-w-md">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">search</span>
                    <input class="w-full bg-slate-50 dark:bg-slate-800 border-none rounded-xl pl-10 pr-4 py-2 text-sm focus:ring-2 focus:ring-primary/20 transition-all" placeholder="Search events, venues, or organizers..." type="text">
                </div>
            </div>
            <div class="flex items-center gap-4">
                <button class="p-2 text-slate-500 hover:text-primary transition-colors">
                    <span class="material-symbols-outlined">notifications</span>
                </button>
                <div class="h-8 w-[1px] bg-slate-200 mx-2"></div>
                <div class="flex items-center gap-3">
                    <div class="text-right hidden sm:block">
                        <p class="text-xs font-bold text-on-surface">{{ Auth::guard('admin')->user()->username ?? 'Administrator' }}</p>
                        <p class="text-[10px] text-slate-500 uppercase tracking-tighter">{{ Auth::guard('admin')->user()->role_type ?? 'Admin' }}</p>
                    </div>
                    <img alt="Admin Profile" class="w-9 h-9 rounded-full object-cover ring-2 ring-slate-100" src="https://ui-avatars.com/api/?name={{ urlencode(Auth::guard('admin')->user()->username ?? 'A') }}&background=0056b3&color=fff">
                </div>
            </div>
        </header>

        <div class="p-8 max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10">
                <div>
                    <h2 class="text-3xl font-headline font-extrabold tracking-tight text-on-surface mb-2">Events Management</h2>
                    <p class="text-on-surface-variant max-w-lg">Audit and manage the global portfolio of user-submitted events. Review pending requests and manage broadcasts.</p>
                </div>
                <div class="flex items-center gap-3">
                    <button class="bg-surface-container-high text-on-surface-variant px-5 py-2.5 rounded-xl font-semibold flex items-center gap-2 hover:bg-surface-container-highest transition-colors">
                        <span class="material-symbols-outlined text-lg">filter_list</span>
                        <span>Filters</span>
                    </button>
                    <button class="bg-gradient-to-br from-primary to-primary-container text-on-primary px-6 py-2.5 rounded-xl font-bold shadow-lg flex items-center gap-2 hover:shadow-xl transition-all active:scale-95">
                        <span class="material-symbols-outlined text-lg">broadcast_on_home</span>
                        <span>Add Broadcast</span>
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-6 mb-10 md:grid-cols-3">
                <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm border border-slate-100/50">
                    <p class="text-[10px] font-label font-bold text-slate-500 uppercase tracking-widest mb-4">Active Global Events</p>
                    <div class="flex items-end justify-between">
                        <h3 class="text-3xl font-black text-primary">{{ $activeEventsCount }}</h3>
                        <div class="bg-primary-fixed px-2 py-1 rounded text-primary text-[10px] font-bold">Approved</div>
                    </div>
                </div>
                <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm border border-slate-100/50">
                    <p class="text-[10px] font-label font-bold text-slate-500 uppercase tracking-widest mb-4">Total Participants</p>
                    <div class="flex items-end justify-between">
                        <h3 class="text-3xl font-black text-on-surface">{{ number_format($totalParticipants) }}</h3>
                        <span class="material-symbols-outlined text-primary">group</span>
                    </div>
                </div>
                <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm border border-slate-100/50">
                    <p class="text-[10px] font-label font-bold text-slate-500 uppercase tracking-widest mb-4">Pending Approvals</p>
                    <div class="flex items-end justify-between">
                        <h3 class="text-3xl font-black text-amber-600">{{ $pendingCount }}</h3>
                        <p class="text-[10px] text-slate-400 tracking-tight">Requires Attention</p>
                    </div>
                </div>
            </div>

            <div class="bg-surface-container-lowest rounded-3xl shadow-sm overflow-hidden border border-slate-100/50">
                <div class="p-6 flex items-center justify-between border-b border-slate-50">
                    <div class="flex items-center gap-4">
                        <button class="text-sm font-bold text-primary border-b-2 border-primary pb-1">Queue Overview</button>
                        <button class="text-sm font-medium text-slate-400 hover:text-slate-600 pb-1">Pending</button>
                        <button class="text-sm font-medium text-slate-400 hover:text-slate-600 pb-1">Approved</button>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-xs text-slate-400">Showing {{ $events->firstItem() ?? 0 }}-{{ $events->lastItem() ?? 0 }} of {{ $events->total() }} submissions</span>
                    </div>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-surface-container-low">
                                <th class="px-6 py-4 text-[10px] font-label font-black uppercase tracking-wider text-on-surface-variant">Title</th>
                                <th class="px-6 py-4 text-[10px] font-label font-black uppercase tracking-wider text-on-surface-variant">Location</th>
                                <th class="px-6 py-4 text-[10px] font-label font-black uppercase tracking-wider text-on-surface-variant">Date</th>
                                <th class="px-6 py-4 text-[10px] font-label font-black uppercase tracking-wider text-on-surface-variant">Approval Status</th>
                                <th class="px-6 py-4 text-[10px] font-label font-black uppercase tracking-wider text-on-surface-variant text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50">
                            
                            @forelse($events as $event)
                            <tr class="group hover:bg-slate-50/50 transition-colors">
                                <td class="px-6 py-5">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg overflow-hidden flex-shrink-0 bg-slate-200">
                                            <img alt="Event" class="w-full h-full object-cover" src="https://source.unsplash.com/800x800/?event,conference&sig={{ $event->id }}">
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-on-surface leading-tight">{{ $event->title }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-5">
                                    <div class="flex items-center gap-2 text-on-surface-variant">
                                        <span class="material-symbols-outlined text-sm text-primary">location_on</span>
                                        <span class="text-xs font-medium">{{ $event->location }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-5">
                                    <p class="text-xs font-semibold text-on-surface">{{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }}</p>
                                    <p class="text-[10px] text-slate-400">{{ \Carbon\Carbon::parse($event->event_date)->format('h:i A') }}</p>
                                </td>
                                <td class="px-6 py-5">
                                    @if($event->status == 'approved')
                                        <span class="px-2.5 py-1 rounded-full bg-green-100 text-green-700 text-[10px] font-bold">Approved</span>
                                    @elseif($event->status == 'pending')
                                        <span class="px-2.5 py-1 rounded-full bg-amber-100 text-amber-700 text-[10px] font-bold">Pending</span>
                                    @else
                                        <span class="px-2.5 py-1 rounded-full bg-red-100 text-red-700 text-[10px] font-bold">Rejected</span>
                                    @endif
                                </td>
                                <td class="px-6 py-5 text-right">
                                    @if($event->status == 'approved')
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="p-2 text-slate-400 hover:text-primary transition-all"><span class="material-symbols-outlined text-lg">visibility</span></button>
                                            <button class="p-2 text-slate-400 hover:text-primary transition-all"><span class="material-symbols-outlined text-lg">edit</span></button>
                                        </div>
                                    @elseif($event->status == 'pending')
                                        <div class="flex items-center justify-end">
                                            <button class="bg-primary text-on-primary px-4 py-1.5 rounded-lg text-xs font-bold shadow-sm hover:shadow-md hover:bg-primary-container transition-all flex items-center gap-1.5">
                                                <span class="material-symbols-outlined text-sm">rate_review</span> Review
                                            </button>
                                        </div>
                                    @else
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="p-2 text-slate-400 hover:text-primary transition-all"><span class="material-symbols-outlined text-lg">history</span></button>
                                            <button class="p-2 text-slate-400 hover:text-error transition-all"><span class="material-symbols-outlined text-lg">delete</span></button>
                                        </div>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="px-6 py-10 text-center text-slate-500 font-medium">No events found in the system.</td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
                
                <div class="p-6 border-t border-slate-50 bg-slate-50/30">
                    {{ $events->links('pagination::tailwind') }}
                </div>
            </div>

            <footer class="mt-12 py-6 border-t border-slate-200 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-[10px] font-label font-bold text-slate-400 uppercase tracking-widest">© 2026 EventHub Global Systems Inc. Confidential Terminal.</p>
                <div class="flex items-center gap-6">
                    <a class="text-[10px] font-label font-bold text-slate-500 hover:text-primary uppercase tracking-widest transition-colors" href="#">Privacy Policy</a>
                    <a class="text-[10px] font-label font-bold text-slate-500 hover:text-primary uppercase tracking-widest transition-colors" href="#">System Status</a>
                </div>
            </footer>
        </div>
    </main>
</body>
</html>