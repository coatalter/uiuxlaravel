<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NexaUI — Modern Design Showcase</title>
    <meta name="description" content="A stunning modern UI/UX showcase built with Laravel, featuring glassmorphism, animations, and premium design patterns.">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">

    {{-- ============================================
         NAVIGATION
    ============================================ --}}
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="#" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary-500 to-accent-500 flex items-center justify-center shadow-lg shadow-primary-500/25 group-hover:shadow-primary-500/40 transition-shadow duration-300">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <span class="text-xl font-bold font-[Outfit] text-white">Nexa<span class="gradient-text-static">UI</span></span>
                </a>

                <!-- Nav Links -->
                <div class="hidden md:flex items-center gap-8">
                    <a href="#features" class="text-sm text-dark-400 hover:text-white transition-colors duration-300">Features</a>
                    <a href="#stats" class="text-sm text-dark-400 hover:text-white transition-colors duration-300">Stats</a>
                    <a href="#testimonials" class="text-sm text-dark-400 hover:text-white transition-colors duration-300">Testimonials</a>
                    <a href="#pricing" class="text-sm text-dark-400 hover:text-white transition-colors duration-300">Pricing</a>
                    <a href="#contact" class="text-sm text-dark-400 hover:text-white transition-colors duration-300">Contact</a>
                </div>

                <!-- CTA -->
                <div class="flex items-center gap-4">
                    <a href="#" class="hidden sm:inline-flex text-sm text-dark-300 hover:text-white transition-colors">Sign In</a>
                    <a href="#" class="inline-flex items-center px-5 py-2.5 text-sm font-semibold text-white rounded-xl bg-gradient-to-r from-primary-600 to-primary-500 hover:from-primary-500 hover:to-primary-400 shadow-lg shadow-primary-500/25 hover:shadow-primary-500/40 transition-all duration-300 hover:-translate-y-0.5">
                        Get Started
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    {{-- ============================================
         HERO SECTION
    ============================================ --}}
    <section id="hero" class="relative min-h-screen flex items-center overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0">
            <!-- Gradient Orbs -->
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-primary-600/20 rounded-full blur-[128px] animate-blob"></div>
            <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-accent-500/15 rounded-full blur-[128px] animate-blob" style="animation-delay: 2s;"></div>
            <div class="absolute bottom-1/4 left-1/3 w-96 h-96 bg-primary-400/10 rounded-full blur-[128px] animate-blob" style="animation-delay: 4s;"></div>

            <!-- Grid Pattern -->
            <div class="absolute inset-0 opacity-[0.03]" style="background-image: linear-gradient(rgba(255,255,255,.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.1) 1px, transparent 1px); background-size: 60px 60px;"></div>

            <!-- Radial Gradient Overlay -->
            <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,transparent_0%,var(--color-surface)_70%)]"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 pt-32 pb-20 w-full">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Left Content -->
                <div class="opacity-0 animate-slide-up">
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass mb-8">
                        <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                        <span class="text-sm text-dark-300">Now in v2.0 — Even more powerful</span>
                    </div>

                    <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold font-[Outfit] leading-[1.1] mb-6">
                        Build
                        <span class="gradient-text"> stunning </span>
                        digital
                        <span class="gradient-text"> experiences</span>
                    </h1>

                    <p class="text-lg text-dark-400 leading-relaxed mb-10 max-w-lg">
                        The modern design toolkit that helps you create beautiful, responsive interfaces with premium UI components, smooth animations, and pixel-perfect design.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-wrap gap-4">
                        <a href="#features" class="group inline-flex items-center px-8 py-4 text-base font-semibold text-white rounded-2xl bg-gradient-to-r from-primary-600 to-accent-600 hover:from-primary-500 hover:to-accent-500 shadow-xl shadow-primary-600/25 hover:shadow-primary-500/40 transition-all duration-300 hover:-translate-y-1">
                            Explore Features
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                        </a>
                        <a href="#" class="inline-flex items-center px-8 py-4 text-base font-semibold text-dark-300 hover:text-white rounded-2xl glass hover:bg-white/10 transition-all duration-300 hover:-translate-y-1">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Watch Demo
                        </a>
                    </div>

                    <!-- Trusted By -->
                    <div class="mt-12 pt-8 border-t border-white/5">
                        <p class="text-sm text-dark-500 mb-4">Trusted by teams at</p>
                        <div class="flex items-center gap-8 opacity-40">
                            <span class="text-lg font-bold font-[Outfit] text-dark-300">Google</span>
                            <span class="text-lg font-bold font-[Outfit] text-dark-300">Spotify</span>
                            <span class="text-lg font-bold font-[Outfit] text-dark-300">Slack</span>
                            <span class="text-lg font-bold font-[Outfit] text-dark-300 hidden sm:block">Netflix</span>
                        </div>
                    </div>
                </div>

                <!-- Right — Floating Cards -->
                <div class="relative hidden lg:block opacity-0 animate-slide-up delay-300">
                    <!-- Main Card -->
                    <div class="relative">
                        <div class="glass-strong rounded-3xl p-8 animate-float shadow-2xl shadow-primary-500/10">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                            </div>
                            <div class="space-y-3">
                                <div class="h-4 bg-gradient-to-r from-primary-500/30 to-transparent rounded-full w-3/4"></div>
                                <div class="h-4 bg-gradient-to-r from-accent-500/20 to-transparent rounded-full w-1/2"></div>
                                <div class="h-4 bg-gradient-to-r from-primary-400/15 to-transparent rounded-full w-5/6"></div>
                                <div class="h-20 mt-4 rounded-xl bg-gradient-to-br from-primary-600/20 to-accent-500/20 flex items-center justify-center">
                                    <svg class="w-10 h-10 text-primary-400/60" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                </div>
                                <div class="flex gap-2 mt-4">
                                    <div class="h-8 rounded-lg bg-primary-500/20 flex-1 flex items-center justify-center text-xs text-primary-300 font-medium">Submit</div>
                                    <div class="h-8 rounded-lg bg-white/5 flex-1 flex items-center justify-center text-xs text-dark-400 font-medium">Cancel</div>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Mini Cards -->
                        <div class="absolute -top-6 -right-6 glass rounded-2xl p-4 animate-float shadow-lg" style="animation-delay: 1s;">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div>
                                    <p class="text-xs font-semibold text-white">Task Done!</p>
                                    <p class="text-[10px] text-dark-400">Just now</p>
                                </div>
                            </div>
                        </div>

                        <div class="absolute -bottom-4 -left-8 glass rounded-2xl p-4 animate-float shadow-lg" style="animation-delay: 2s;">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary-500 to-accent-500 flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                                </div>
                                <div>
                                    <p class="text-xs text-dark-400">Revenue</p>
                                    <p class="text-sm font-bold text-white">+24.5%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 animate-bounce">
            <span class="text-xs text-dark-500">Scroll</span>
            <div class="w-6 h-10 rounded-full border-2 border-dark-600 flex items-start justify-center p-1">
                <div class="w-1.5 h-3 bg-dark-400 rounded-full animate-pulse"></div>
            </div>
        </div>
    </section>

    {{-- ============================================
         FEATURES — BENTO GRID
    ============================================ --}}
    <section id="features" class="section-padding relative" x-data="{ visible: false }" x-intersect:enter="visible = true">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass mb-6">
                    <svg class="w-4 h-4 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                    <span class="text-sm text-dark-300">Core Features</span>
                </div>
                <h2 class="text-4xl sm:text-5xl font-extrabold font-[Outfit] text-white mb-4">
                    Everything you need to
                    <span class="gradient-text">create magic</span>
                </h2>
                <p class="text-lg text-dark-400">Powerful tools and beautiful components designed to make your workflow seamless and your products stunning.</p>
            </div>

            <!-- Bento Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Feature 1 — Large -->
                <div class="lg:col-span-2 glass rounded-3xl p-8 card-hover hover:card-hover-active group"
                     x-show="visible" x-transition:enter="transition ease-out duration-700" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="flex flex-col sm:flex-row gap-6">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-primary-500 to-primary-700 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white mb-2">Responsive Design System</h3>
                            <p class="text-dark-400 leading-relaxed">Build interfaces that look stunning on every device. Our responsive grid system and adaptive components ensure pixel-perfect rendering from mobile to 4K displays.</p>
                        </div>
                    </div>
                    <div class="mt-6 h-32 rounded-2xl bg-gradient-to-r from-primary-500/10 via-accent-500/10 to-primary-500/10 flex items-center justify-center overflow-hidden relative">
                        <div class="flex gap-3">
                            <div class="w-16 h-24 rounded-xl bg-primary-500/20 border border-primary-500/20 group-hover:scale-105 transition-transform duration-500"></div>
                            <div class="w-24 h-24 rounded-xl bg-accent-500/20 border border-accent-500/20 group-hover:scale-105 transition-transform duration-500 delay-75"></div>
                            <div class="w-32 h-24 rounded-xl bg-primary-400/20 border border-primary-400/20 group-hover:scale-105 transition-transform duration-500 delay-150"></div>
                        </div>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="glass rounded-3xl p-8 card-hover hover:card-hover-active group"
                     x-show="visible" x-transition:enter="transition ease-out duration-700 delay-100" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-accent-500 to-accent-700 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Rich Color Palettes</h3>
                    <p class="text-dark-400 leading-relaxed mb-6">Curated color harmonies with WCAG accessibility compliance built-in.</p>
                    <div class="flex gap-2">
                        <div class="w-8 h-8 rounded-lg bg-primary-500 group-hover:scale-110 transition-transform duration-300"></div>
                        <div class="w-8 h-8 rounded-lg bg-accent-500 group-hover:scale-110 transition-transform duration-300 delay-75"></div>
                        <div class="w-8 h-8 rounded-lg bg-purple-500 group-hover:scale-110 transition-transform duration-300 delay-150"></div>
                        <div class="w-8 h-8 rounded-lg bg-pink-500 group-hover:scale-110 transition-transform duration-300 delay-200"></div>
                        <div class="w-8 h-8 rounded-lg bg-amber-500 group-hover:scale-110 transition-transform duration-300 delay-300"></div>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="glass rounded-3xl p-8 card-hover hover:card-hover-active group"
                     x-show="visible" x-transition:enter="transition ease-out duration-700 delay-200" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-pink-500 to-rose-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Lightning Fast</h3>
                    <p class="text-dark-400 leading-relaxed mb-6">Optimized for performance with lazy loading, code splitting, and minimal bundle size.</p>
                    <div class="flex items-center gap-3">
                        <div class="text-3xl font-bold gradient-text-static">99</div>
                        <div class="text-xs text-dark-400 leading-tight">Lighthouse<br>Performance</div>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="glass rounded-3xl p-8 card-hover hover:card-hover-active group"
                     x-show="visible" x-transition:enter="transition ease-out duration-700 delay-300" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-amber-500 to-orange-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Enterprise Security</h3>
                    <p class="text-dark-400 leading-relaxed mb-6">Built-in security features with CSRF protection, XSS prevention, and encrypted data handling.</p>
                    <div class="flex gap-1">
                        @for($i = 0; $i < 5; $i++)
                            <div class="h-2 flex-1 rounded-full {{ $i < 4 ? 'bg-gradient-to-r from-green-400 to-green-500' : 'bg-dark-700' }}"></div>
                        @endfor
                    </div>
                    <p class="text-xs text-dark-500 mt-2">Security Score: 95/100</p>
                </div>

                <!-- Feature 5 — Large -->
                <div class="lg:col-span-2 glass rounded-3xl p-8 card-hover hover:card-hover-active group"
                     x-show="visible" x-transition:enter="transition ease-out duration-700 delay-400" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="flex flex-col sm:flex-row gap-6">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white mb-2">Modular Architecture</h3>
                            <p class="text-dark-400 leading-relaxed">Use only what you need. Every component is self-contained and tree-shakeable, keeping your bundle size minimal while giving you maximum flexibility.</p>
                        </div>
                    </div>
                    <div class="mt-6 grid grid-cols-4 gap-3">
                        @foreach(['Auth', 'Forms', 'Charts', 'Tables'] as $i => $module)
                            <div class="h-16 rounded-xl glass flex items-center justify-center text-sm font-medium text-dark-300 group-hover:text-white group-hover:bg-white/10 transition-all duration-300" style="transition-delay: {{ $i * 100 }}ms">
                                {{ $module }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================
         STATS SECTION
    ============================================ --}}
    <section id="stats" class="section-padding relative overflow-hidden">
        <!-- Background Gradient -->
        <div class="absolute inset-0 bg-gradient-to-b from-surface via-primary-950/20 to-surface"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-extrabold font-[Outfit] text-white mb-4">
                    Numbers that
                    <span class="gradient-text">speak volumes</span>
                </h2>
                <p class="text-lg text-dark-400">Join thousands of developers who trust NexaUI</p>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8" x-data="statsCounter()" x-intersect:enter.once="startCount()">
                @php
                    $stats = [
                        ['value' => 50, 'suffix' => 'K+', 'label' => 'Active Users', 'icon' => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z'],
                        ['value' => 120, 'suffix' => '+', 'label' => 'Components', 'icon' => 'M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z'],
                        ['value' => 99, 'suffix' => '%', 'label' => 'Satisfaction', 'icon' => 'M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                        ['value' => 24, 'suffix' => '/7', 'label' => 'Support', 'icon' => 'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z'],
                    ];
                @endphp
                @foreach($stats as $i => $stat)
                    <div class="text-center group">
                        <div class="glass rounded-3xl p-8 card-hover hover:card-hover-active">
                            <div class="w-12 h-12 mx-auto rounded-xl bg-gradient-to-br from-primary-500/20 to-accent-500/20 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $stat['icon'] }}"/></svg>
                            </div>
                            <div class="text-4xl font-extrabold font-[Outfit] gradient-text mb-2">
                                <span x-text="Math.floor(counts[{{ $i }}])">0</span>{{ $stat['suffix'] }}
                            </div>
                            <p class="text-sm text-dark-400">{{ $stat['label'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============================================
         TESTIMONIALS
    ============================================ --}}
    <section id="testimonials" class="section-padding relative">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass mb-6">
                    <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <span class="text-sm text-dark-300">Testimonials</span>
                </div>
                <h2 class="text-4xl sm:text-5xl font-extrabold font-[Outfit] text-white mb-4">
                    Loved by
                    <span class="gradient-text">developers</span>
                </h2>
                <p class="text-lg text-dark-400">See what our community has to say about NexaUI</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" x-data="{ visible: false }" x-intersect:enter="visible = true">
                @php
                    $testimonials = [
                        ['name' => 'Sarah Johnson', 'role' => 'Lead Designer, Spotify', 'text' => 'NexaUI transformed our design workflow. The components are beautiful and the animations are incredibly smooth. Best UI kit I have ever used.', 'avatar' => 'SJ', 'color' => 'from-primary-500 to-violet-600'],
                        ['name' => 'Alex Chen', 'role' => 'CTO, TechStart', 'text' => 'The attention to detail is remarkable. Every component feels premium and the documentation is top-notch. Our team productivity increased by 40%.', 'avatar' => 'AC', 'color' => 'from-accent-500 to-cyan-600'],
                        ['name' => 'Maria Rodriguez', 'role' => 'Frontend Dev, Google', 'text' => 'I was skeptical at first, but NexaUI exceeded all expectations. The glassmorphism components and dark mode support are absolutely perfect.', 'avatar' => 'MR', 'color' => 'from-pink-500 to-rose-600'],
                    ];
                @endphp
                @foreach($testimonials as $i => $t)
                    <div class="glass rounded-3xl p-8 card-hover hover:card-hover-active"
                         x-show="visible" x-transition:enter="transition ease-out duration-700" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0"
                         style="transition-delay: {{ $i * 150 }}ms">
                        <!-- Stars -->
                        <div class="flex gap-1 mb-4">
                            @for($s = 0; $s < 5; $s++)
                                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @endfor
                        </div>
                        <p class="text-dark-300 leading-relaxed mb-6">"{{ $t['text'] }}"</p>
                        <div class="flex items-center gap-3 pt-4 border-t border-white/5">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br {{ $t['color'] }} flex items-center justify-center text-sm font-bold text-white">
                                {{ $t['avatar'] }}
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-white">{{ $t['name'] }}</p>
                                <p class="text-xs text-dark-500">{{ $t['role'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============================================
         PRICING
    ============================================ --}}
    <section id="pricing" class="section-padding relative overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-b from-surface via-primary-950/10 to-surface"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass mb-6">
                    <svg class="w-4 h-4 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span class="text-sm text-dark-300">Simple Pricing</span>
                </div>
                <h2 class="text-4xl sm:text-5xl font-extrabold font-[Outfit] text-white mb-4">
                    Choose your
                    <span class="gradient-text">plan</span>
                </h2>
                <p class="text-lg text-dark-400">Start free, upgrade when you're ready. No hidden fees.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto" x-data="{ visible: false }" x-intersect:enter="visible = true">
                @php
                    $plans = [
                        [
                            'name' => 'Starter',
                            'price' => '0',
                            'desc' => 'Perfect for trying out',
                            'features' => ['5 Components', 'Basic Animations', 'Community Support', 'MIT License'],
                            'cta' => 'Start Free',
                            'popular' => false,
                        ],
                        [
                            'name' => 'Pro',
                            'price' => '49',
                            'desc' => 'Best for professionals',
                            'features' => ['120+ Components', 'Advanced Animations', 'Priority Support', 'Figma Files', 'API Access', 'Team License'],
                            'cta' => 'Get Pro',
                            'popular' => true,
                        ],
                        [
                            'name' => 'Enterprise',
                            'price' => '199',
                            'desc' => 'For large organizations',
                            'features' => ['Everything in Pro', 'Custom Components', '24/7 Support', 'SLA', 'White-labeling', 'Dedicated Manager'],
                            'cta' => 'Contact Us',
                            'popular' => false,
                        ],
                    ];
                @endphp
                @foreach($plans as $i => $plan)
                    <div class="relative {{ $plan['popular'] ? 'md:-mt-4 md:mb-4' : '' }}"
                         x-show="visible" x-transition:enter="transition ease-out duration-700" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0"
                         style="transition-delay: {{ $i * 150 }}ms">
                        @if($plan['popular'])
                            <div class="absolute -top-4 left-1/2 -translate-x-1/2 z-10">
                                <span class="px-4 py-1.5 text-xs font-bold text-white bg-gradient-to-r from-primary-500 to-accent-500 rounded-full shadow-lg shadow-primary-500/25">Most Popular</span>
                            </div>
                        @endif
                        <div class="{{ $plan['popular'] ? 'glass-strong ring-2 ring-primary-500/30' : 'glass' }} rounded-3xl p-8 card-hover hover:card-hover-active h-full flex flex-col">
                            <h3 class="text-xl font-bold text-white mb-1">{{ $plan['name'] }}</h3>
                            <p class="text-sm text-dark-500 mb-6">{{ $plan['desc'] }}</p>
                            <div class="flex items-baseline gap-1 mb-8">
                                <span class="text-5xl font-extrabold font-[Outfit] text-white">${{ $plan['price'] }}</span>
                                <span class="text-dark-500">/mo</span>
                            </div>
                            <ul class="space-y-3 mb-8 flex-1">
                                @foreach($plan['features'] as $feature)
                                    <li class="flex items-center gap-3 text-sm text-dark-300">
                                        <svg class="w-5 h-5 text-primary-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                        {{ $feature }}
                                    </li>
                                @endforeach
                            </ul>
                            <a href="#" class="block w-full text-center py-3.5 rounded-xl font-semibold text-sm transition-all duration-300 {{ $plan['popular'] ? 'bg-gradient-to-r from-primary-600 to-accent-600 text-white hover:from-primary-500 hover:to-accent-500 shadow-lg shadow-primary-500/25 hover:shadow-primary-500/40' : 'glass text-dark-300 hover:text-white hover:bg-white/10' }}">
                                {{ $plan['cta'] }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============================================
         CTA / NEWSLETTER
    ============================================ --}}
    <section id="contact" class="section-padding relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-primary-600/15 rounded-full blur-[128px]"></div>
        </div>

        <div class="relative z-10 max-w-3xl mx-auto px-6 lg:px-8 text-center">
            <h2 class="text-4xl sm:text-5xl font-extrabold font-[Outfit] text-white mb-6">
                Ready to build something
                <span class="gradient-text">amazing</span>?
            </h2>
            <p class="text-lg text-dark-400 mb-10">Join 50,000+ developers using NexaUI. Get updates, tips, and early access to new features.</p>

            <div class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
                <div class="flex-1 relative group">
                    <input type="email" placeholder="Enter your email" class="w-full px-6 py-4 rounded-2xl glass text-white placeholder-dark-500 focus:outline-none focus:ring-2 focus:ring-primary-500/50 transition-all duration-300">
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-primary-500/20 to-accent-500/20 opacity-0 group-focus-within:opacity-100 -z-10 blur-xl transition-opacity duration-300"></div>
                </div>
                <button class="px-8 py-4 rounded-2xl bg-gradient-to-r from-primary-600 to-accent-600 hover:from-primary-500 hover:to-accent-500 text-white font-semibold shadow-xl shadow-primary-600/25 hover:shadow-primary-500/40 transition-all duration-300 hover:-translate-y-0.5 whitespace-nowrap">
                    Subscribe
                </button>
            </div>

            <p class="text-sm text-dark-600 mt-4">No spam, unsubscribe at any time. We respect your privacy.</p>
        </div>
    </section>

    {{-- ============================================
         FOOTER
    ============================================ --}}
    <footer class="border-t border-white/5 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-12">
                <!-- Brand -->
                <div class="col-span-2 md:col-span-1">
                    <a href="#" class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary-500 to-accent-500 flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <span class="text-xl font-bold font-[Outfit] text-white">Nexa<span class="gradient-text-static">UI</span></span>
                    </a>
                    <p class="text-sm text-dark-500 leading-relaxed">Building the future of web design, one component at a time.</p>
                </div>

                <!-- Links -->
                @php
                    $footerLinks = [
                        'Product' => ['Features', 'Pricing', 'Changelog', 'Docs'],
                        'Company' => ['About', 'Blog', 'Careers', 'Contact'],
                        'Legal' => ['Privacy', 'Terms', 'License', 'Security'],
                    ];
                @endphp
                @foreach($footerLinks as $title => $links)
                    <div>
                        <h4 class="text-sm font-semibold text-white mb-4">{{ $title }}</h4>
                        <ul class="space-y-3">
                            @foreach($links as $link)
                                <li><a href="#" class="text-sm text-dark-500 hover:text-dark-300 transition-colors duration-300">{{ $link }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-white/5 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-sm text-dark-600">&copy; {{ date('Y') }} NexaUI. All rights reserved.</p>
                <div class="flex items-center gap-4">
                    @foreach(['M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z', 'M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z', 'M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z'] as $socialPath)
                        <a href="#" class="text-dark-600 hover:text-dark-300 transition-colors duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="{{ $socialPath }}"/></svg>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </footer>

    {{-- ============================================
         SCRIPTS
    ============================================ --}}
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('backdrop-blur-xl', 'bg-surface/80', 'border-b', 'border-white/5');
            } else {
                navbar.classList.remove('backdrop-blur-xl', 'bg-surface/80', 'border-b', 'border-white/5');
            }
        });

        // Stats counter animation (Alpine.js component)
        function statsCounter() {
            return {
                counts: [0, 0, 0, 0],
                targets: [50, 120, 99, 24],
                startCount() {
                    this.targets.forEach((target, i) => {
                        let start = 0;
                        const duration = 2000;
                        const startTime = performance.now();

                        const animate = (currentTime) => {
                            const elapsed = currentTime - startTime;
                            const progress = Math.min(elapsed / duration, 1);
                            // Ease out cubic
                            const eased = 1 - Math.pow(1 - progress, 3);
                            this.counts[i] = Math.floor(target * eased);
                            if (progress < 1) {
                                requestAnimationFrame(animate);
                            } else {
                                this.counts[i] = target;
                            }
                        };
                        requestAnimationFrame(animate);
                    });
                }
            };
        }
    </script>
</body>
</html>
