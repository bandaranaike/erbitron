<script lang="ts">
    import AppHead from '@/components/AppHead.svelte';
    import PublicFooter from '@/components/PublicFooter.svelte';
    import PublicHeader from '@/components/PublicHeader.svelte';
    import { Button } from '@/components/ui/button';
    import { toUrl } from '@/lib/utils';
    import { login } from '@/routes';
    import {
        Activity,
        ArrowRight,
        BadgeCheck,
        Blocks,
        BriefcaseBusiness,
        Globe,
        HeartPulse,
        Landmark,
        MonitorSmartphone,
        ShoppingCart,
        Sparkles,
        SwatchBook,
        Workflow,
    } from 'lucide-svelte/icons';

    const coreServices = [
        {
            icon: SwatchBook,
            title: 'Web Designing',
            description:
                'Modern marketing websites, landing pages, and brand-led interfaces designed to feel polished and convert with clarity.',
        },
        {
            icon: Globe,
            title: 'Web Development',
            description:
                'Fast, scalable websites and web platforms built for businesses that need reliable performance and a clean user journey.',
        },
        {
            icon: MonitorSmartphone,
            title: 'App Development',
            description:
                'Mobile and desktop applications shaped around real workflows, clear navigation, and maintainable product architecture.',
        },
        {
            icon: Blocks,
            title: 'Custom Software Solutions',
            description:
                'Purpose-built internal systems, dashboards, portals, and process automation tailored to your business operations.',
        },
    ];

    const solutionAreas = [
        {
            icon: HeartPulse,
            title: 'Hospital Applications',
            summary:
                'Patient flow, records access, appointment coordination, and operational visibility for healthcare teams.',
        },
        {
            icon: ShoppingCart,
            title: 'Online Shopping Carts',
            summary:
                'Storefronts, order management, stock visibility, payments, and customer-facing buying journeys.',
        },
        {
            icon: Landmark,
            title: 'Banking Web And App Platforms',
            summary:
                'Secure customer portals, finance dashboards, transaction flows, and polished digital banking experiences.',
        },
        {
            icon: BriefcaseBusiness,
            title: 'Business Operations Software',
            summary:
                'Admin panels, workflow tools, reporting systems, and software that reduces manual operational work.',
        },
    ];

    const deliveryPoints = [
        'Responsive websites and conversion-focused landing pages',
        'Custom web applications for business operations and customer portals',
        'Mobile app interfaces for service, commerce, and finance',
        'Desktop applications for teams that need dedicated workflows',
        'Hospital and healthcare management software experiences',
        'Shopping cart, checkout, and e-commerce administration systems',
        'Banking-inspired UI systems with trust, structure, and clarity',
        'Ongoing UI refreshes, redesigns, and software modernization work',
    ];

    const workingStyle = [
        {
            title: 'Understand the workflow',
            detail: 'We start from the real business flow, the user roles, and the screens that matter most to day-to-day work.',
        },
        {
            title: 'Design with intent',
            detail: 'Interfaces are shaped around clarity, trust, and speed, with a visual system that feels current instead of generic.',
        },
        {
            title: 'Build the right product',
            detail: 'From websites to operational platforms, each build is structured to scale cleanly and stay maintainable.',
        },
        {
            title: 'Refine for long-term use',
            detail: 'We keep the product consistent across screens, devices, and future feature growth so the experience stays strong.',
        },
    ];
</script>

<AppHead title="Erbitron | Software Solutions" />

<div class="min-h-screen bg-background text-foreground">
    <PublicHeader />

    <section
        class="relative overflow-hidden px-4 pt-28 pb-20 md:pt-36 md:pb-24"
    >
        <div
            class="hero-noise pointer-events-none absolute inset-0 opacity-80"
        ></div>
        <div
            class="pointer-events-none absolute -top-32 left-1/2 h-[26rem] w-[26rem] -translate-x-1/2 rounded-full bg-primary/18 blur-[110px] dark:bg-primary/22"
        ></div>
        <div
            class="pointer-events-none absolute right-0 bottom-8 h-64 w-64 rounded-full bg-black/6 blur-[100px] dark:bg-black/50"
        ></div>

        <div
            class="relative mx-auto flex max-w-7xl flex-col gap-12 lg:flex-row lg:items-center lg:gap-16"
        >
            <div class="max-w-3xl flex-1">
                <div
                    class="mb-6 inline-flex items-center gap-2 rounded-full border border-primary/20 bg-white/80 px-4 py-2 text-xs font-semibold uppercase tracking-[0.24em] text-primary shadow-[0_18px_55px_rgba(245,116,32,0.12)] backdrop-blur dark:bg-black/55"
                >
                    <Sparkles class="h-3.5 w-3.5" />
                    Modern software design and development
                </div>

                <h1
                    class="max-w-4xl text-4xl font-semibold tracking-[-0.06em] text-balance md:text-6xl lg:text-7xl"
                >
                    Design-forward software for
                    <span class="text-gradient-brand"
                        >web, mobile, desktop, healthcare, commerce, and banking</span
                    >.
                </h1>

                <p
                    class="mt-6 max-w-2xl text-base leading-8 text-muted-foreground md:text-lg"
                >
                    Erbitron creates modern digital products for businesses that
                    need stronger websites, sharper interfaces, and custom
                    systems built around real work. From web designing to
                    full-scale applications, the focus stays on clarity, speed,
                    and long-term usability.
                </p>

                <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                    <a
                        href="mailto:hello@erbitron.com?subject=Project%20Inquiry"
                        class="inline-flex"
                    >
                        <Button
                            size="lg"
                            class="h-12 rounded-full bg-primary px-7 text-sm font-semibold text-primary-foreground shadow-[0_18px_60px_rgba(245,116,32,0.3)] hover:bg-primary/90"
                        >
                            Discuss Your Project
                            <ArrowRight class="h-4 w-4" />
                        </Button>
                    </a>

                    <a href="#solutions" class="inline-flex">
                        <Button
                            size="lg"
                            variant="outline"
                            class="h-12 rounded-full border-border/70 bg-background/85 px-7 text-sm font-semibold backdrop-blur hover:bg-accent"
                        >
                            View Solutions
                        </Button>
                    </a>

                    <a
                        href={toUrl(login())}
                        class="inline-flex items-center rounded-full px-2 text-sm font-medium text-muted-foreground transition-colors hover:text-foreground"
                    >
                        Client sign in
                    </a>
                </div>

                <div class="mt-10 flex flex-wrap gap-3">
                    {#each deliveryPoints.slice(0, 4) as point}
                        <div
                            class="rounded-full border border-border/70 bg-card/90 px-4 py-2 text-sm text-muted-foreground shadow-[0_12px_32px_rgba(15,15,15,0.05)] dark:shadow-none"
                        >
                            {point}
                        </div>
                    {/each}
                </div>
            </div>

            <div class="relative flex-1">
                <div class="surface-shell overflow-hidden p-4 md:p-6">
                    <div
                        class="rounded-[1.75rem] border border-white/70 bg-white/92 p-5 shadow-[0_24px_70px_rgba(22,22,22,0.12)] dark:border-white/10 dark:bg-[#111111]/92 dark:shadow-[0_32px_90px_rgba(0,0,0,0.45)]"
                    >
                        <div
                            class="flex items-center justify-between border-b border-border/70 pb-4"
                        >
                            <div class="flex items-center gap-3">
                                <div
                                    class="flex h-11 w-11 items-center justify-center rounded-2xl bg-primary text-primary-foreground shadow-[0_12px_30px_rgba(245,116,32,0.35)]"
                                >
                                    <Workflow class="h-5 w-5" />
                                </div>
                                <div>
                                    <p class="text-sm font-semibold">
                                        Solution Studio
                                    </p>
                                    <p class="text-xs text-muted-foreground">
                                        Structured around real delivery scope
                                    </p>
                                </div>
                            </div>
                            <div
                                class="rounded-full border border-primary/15 bg-primary/8 px-3 py-1 text-xs font-medium text-primary"
                            >
                                Orange-led theme
                            </div>
                        </div>

                        <div class="mt-5 grid gap-4 md:grid-cols-[1.3fr_0.9fr]">
                            <div class="surface-panel p-5">
                                <div
                                    class="flex items-center justify-between gap-3"
                                >
                                    <div>
                                        <p
                                            class="text-xs font-semibold uppercase tracking-[0.22em] text-primary"
                                        >
                                            Core Scope
                                        </p>
                                        <h2
                                            class="mt-2 text-2xl font-semibold tracking-[-0.04em]"
                                        >
                                            Software solutions shaped for
                                            business use
                                        </h2>
                                    </div>
                                    <BadgeCheck class="h-8 w-8 text-primary" />
                                </div>

                                <div class="mt-6 grid gap-3">
                                    {#each coreServices as service}
                                        <div
                                            class="rounded-[1.35rem] border border-border/70 bg-background/70 p-4 dark:bg-black/35"
                                        >
                                            <div class="flex items-start gap-3">
                                                <div
                                                    class="mt-0.5 flex h-10 w-10 shrink-0 items-center justify-center rounded-2xl bg-primary/12 text-primary"
                                                >
                                                    <service.icon
                                                        class="h-5 w-5"
                                                    />
                                                </div>
                                                <div class="space-y-1">
                                                    <h3 class="font-semibold">
                                                        {service.title}
                                                    </h3>
                                                    <p
                                                        class="text-sm leading-6 text-muted-foreground"
                                                    >
                                                        {service.description}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    {/each}
                                </div>
                            </div>

                            <div class="grid gap-4">
                                <div class="surface-panel p-5">
                                    <p
                                        class="text-xs font-semibold uppercase tracking-[0.22em] text-primary"
                                    >
                                        Coverage
                                    </p>
                                    <div class="mt-4 space-y-3">
                                        {#each solutionAreas.slice(0, 2) as area}
                                            <div
                                                class="rounded-[1.2rem] border border-border/70 bg-background/70 p-4 dark:bg-black/35"
                                            >
                                                <div
                                                    class="mb-2 flex items-center gap-3"
                                                >
                                                    <div
                                                        class="flex h-9 w-9 items-center justify-center rounded-2xl bg-primary/10 text-primary"
                                                    >
                                                        <area.icon
                                                            class="h-4.5 w-4.5"
                                                        />
                                                    </div>
                                                    <h3 class="font-semibold">
                                                        {area.title}
                                                    </h3>
                                                </div>
                                                <p
                                                    class="text-sm leading-6 text-muted-foreground"
                                                >
                                                    {area.summary}
                                                </p>
                                            </div>
                                        {/each}
                                    </div>
                                </div>

                                <div
                                    class="overflow-hidden rounded-[1.7rem] border border-primary/15 bg-primary p-5 text-primary-foreground shadow-[0_18px_50px_rgba(245,116,32,0.25)]"
                                >
                                    <p
                                        class="text-xs font-semibold uppercase tracking-[0.22em] text-white/75"
                                    >
                                        Built for modern delivery
                                    </p>
                                    <p
                                        class="mt-3 text-xl font-semibold tracking-[-0.04em]"
                                    >
                                        Cleaner UI, stronger contrast, and
                                        sharper product presentation across both
                                        light and dark themes.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="px-4 py-16 md:py-24">
        <div class="mx-auto max-w-7xl">
            <div class="max-w-3xl">
                <p
                    class="text-sm font-semibold uppercase tracking-[0.26em] text-primary"
                >
                    Services
                </p>
                <h2
                    class="mt-4 text-3xl font-semibold tracking-[-0.05em] md:text-5xl"
                >
                    Design and development services that fit how businesses
                    actually operate.
                </h2>
                <p
                    class="mt-5 max-w-2xl text-base leading-8 text-muted-foreground"
                >
                    The work spans branded websites, custom platforms,
                    operational software, and product interfaces that need to be
                    trusted by both end users and internal teams.
                </p>
            </div>

            <div class="mt-12 grid gap-5 lg:grid-cols-2">
                {#each coreServices as service}
                    <div class="surface-panel p-6 md:p-7">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-2xl bg-primary/10 text-primary"
                        >
                            <service.icon class="h-5 w-5" />
                        </div>
                        <h3
                            class="mt-6 text-2xl font-semibold tracking-[-0.04em]"
                        >
                            {service.title}
                        </h3>
                        <p class="mt-3 text-sm leading-7 text-muted-foreground">
                            {service.description}
                        </p>
                    </div>
                {/each}
            </div>
        </div>
    </section>

    <section id="solutions" class="px-4 py-16 md:py-24">
        <div class="mx-auto max-w-7xl">
            <div
                class="mb-12 flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between"
            >
                <div class="max-w-3xl">
                    <p
                        class="text-sm font-semibold uppercase tracking-[0.26em] text-primary"
                    >
                        Solution Areas
                    </p>
                    <h2
                        class="mt-4 text-3xl font-semibold tracking-[-0.05em] md:text-5xl"
                    >
                        Focused products for sectors that need structure, trust,
                        and speed.
                    </h2>
                </div>
                <p class="max-w-2xl text-sm leading-7 text-muted-foreground">
                    Each solution area is framed with the same goal: clean
                    design, understandable workflows, and a product that feels
                    reliable from the first screen.
                </p>
            </div>

            <div class="grid gap-5 md:grid-cols-2">
                {#each solutionAreas as area}
                    <div class="surface-panel p-6 md:p-7">
                        <div class="flex items-start gap-4">
                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-primary/10 text-primary"
                            >
                                <area.icon class="h-5 w-5" />
                            </div>
                            <div>
                                <h3
                                    class="text-xl font-semibold tracking-[-0.04em]"
                                >
                                    {area.title}
                                </h3>
                                <p
                                    class="mt-3 text-sm leading-7 text-muted-foreground"
                                >
                                    {area.summary}
                                </p>
                            </div>
                        </div>
                    </div>
                {/each}
            </div>
        </div>
    </section>

    <section class="px-4 py-16 md:py-24">
        <div class="mx-auto max-w-7xl">
            <div class="surface-shell p-6 md:p-8">
                <div class="grid gap-8 lg:grid-cols-[0.95fr_1.05fr] lg:gap-12">
                    <div>
                        <p
                            class="text-sm font-semibold uppercase tracking-[0.26em] text-primary"
                        >
                            Delivery Scope
                        </p>
                        <h2
                            class="mt-4 text-3xl font-semibold tracking-[-0.05em] md:text-5xl"
                        >
                            What Erbitron can deliver across your product
                            landscape.
                        </h2>
                        <p
                            class="mt-5 text-base leading-8 text-muted-foreground"
                        >
                            The scope is broad enough for redesigns, greenfield
                            products, business platforms, and specialized
                            software initiatives that need a more modern visual
                            and interaction layer.
                        </p>
                    </div>

                    <div class="grid gap-3 sm:grid-cols-2">
                        {#each deliveryPoints as point}
                            <div
                                class="rounded-[1.4rem] border border-border/70 bg-card/92 p-4 text-sm leading-6 text-muted-foreground shadow-[0_14px_34px_rgba(15,15,15,0.05)] dark:bg-card/80 dark:shadow-none"
                            >
                                <div class="mb-3 flex items-center gap-2">
                                    <Activity class="h-4 w-4 text-primary" />
                                    <span class="font-semibold text-foreground">
                                        Included
                                    </span>
                                </div>
                                {point}
                            </div>
                        {/each}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="approach" class="px-4 py-16 md:py-24">
        <div class="mx-auto max-w-7xl">
            <div class="max-w-3xl">
                <p
                    class="text-sm font-semibold uppercase tracking-[0.26em] text-primary"
                >
                    Working Style
                </p>
                <h2
                    class="mt-4 text-3xl font-semibold tracking-[-0.05em] md:text-5xl"
                >
                    A product process centered on workflow clarity and modern
                    presentation.
                </h2>
            </div>

            <div class="mt-12 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
                {#each workingStyle as step, index}
                    <div class="surface-panel p-6">
                        <div
                            class="mb-5 flex h-11 w-11 items-center justify-center rounded-2xl bg-primary text-sm font-semibold text-primary-foreground"
                        >
                            0{index + 1}
                        </div>
                        <h3 class="text-lg font-semibold tracking-[-0.03em]">
                            {step.title}
                        </h3>
                        <p class="mt-3 text-sm leading-7 text-muted-foreground">
                            {step.detail}
                        </p>
                    </div>
                {/each}
            </div>
        </div>
    </section>

    <section class="px-4 pt-10 pb-20 md:pt-14 md:pb-28">
        <div class="mx-auto max-w-7xl">
            <div
                class="overflow-hidden rounded-[2rem] border border-primary/15 bg-[linear-gradient(135deg,rgba(245,116,32,0.98),rgba(255,151,70,0.92))] px-6 py-10 text-primary-foreground shadow-[0_22px_70px_rgba(245,116,32,0.28)] md:px-10 md:py-12"
            >
                <div
                    class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between"
                >
                    <div class="max-w-3xl">
                        <p
                            class="text-sm font-semibold uppercase tracking-[0.26em] text-white/75"
                        >
                            Start a project
                        </p>
                        <h2
                            class="mt-4 text-3xl font-semibold tracking-[-0.05em] md:text-5xl"
                        >
                            Need a modern website or a custom software product
                            aligned with your business scope?
                        </h2>
                        <p
                            class="mt-4 max-w-2xl text-sm leading-7 text-white/85"
                        >
                            Erbitron can help shape the interface, the product
                            structure, and the delivery direction for your next
                            website, application, or software platform.
                        </p>
                    </div>

                    <div class="flex flex-col gap-3 sm:flex-row">
                        <a
                            href="mailto:hello@erbitron.com?subject=Project%20Inquiry"
                            class="inline-flex"
                        >
                            <Button
                                size="lg"
                                class="h-12 rounded-full bg-black px-7 text-sm font-semibold text-white shadow-none hover:bg-black/85 dark:bg-white dark:text-black dark:hover:bg-white/90"
                            >
                                Contact Erbitron
                            </Button>
                        </a>

                        <a href={toUrl(login())} class="inline-flex">
                            <Button
                                size="lg"
                                variant="outline"
                                class="h-12 rounded-full border-white/40 bg-white/10 px-7 text-sm font-semibold text-white hover:bg-white/14"
                            >
                                Client Access
                            </Button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <PublicFooter />
</div>
