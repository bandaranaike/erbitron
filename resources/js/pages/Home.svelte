<script lang="ts">
    import {
        ArrowRight,
        Code2,
        Cpu,
        Database,
        HeartPulse,
        Layout,
        LineChart,
        MonitorSmartphone,
        ShoppingCart,
        Sparkles,
    } from 'lucide-svelte/icons';
    import AppHead from '@/components/AppHead.svelte';
    import AppLogoIcon from '@/components/AppLogoIcon.svelte';
    import PublicFooter from '@/components/PublicFooter.svelte';
    import PublicHeader from '@/components/PublicHeader.svelte';
    import { Badge } from '@/components/ui/badge';
    import { Button } from '@/components/ui/button';
    import { Card } from '@/components/ui/card';
    import { toUrl } from '@/lib/utils';
    import { login } from '@/routes';

    const services = [
        {
            icon: Layout,
            title: 'Digital Strategy & UI/UX',
            description:
                'We bridge the gap between business goals and user needs with high-fidelity, conversion-focused design systems.',
            features: ['Visual Identity', 'User Experience Design', 'Product Prototyping'],
        },
        {
            icon: Code2,
            title: 'Full-Stack Engineering',
            description:
                'Robust, scalable, and maintainable software built with modern technologies like Laravel, Svelte, and Node.js.',
            features: ['Custom Web Apps', 'SaaS Development', 'API Architecture'],
        },
        {
            icon: MonitorSmartphone,
            title: 'Mobile & Desktop',
            description:
                'High-performance native and cross-platform applications tailored for seamless experiences across all devices.',
            features: ['iOS & Android Apps', 'Electron Desktop Apps', 'Progressive Web Apps'],
        },
        {
            icon: Database,
            title: 'Cloud & Infrastructure',
            description:
                'Secure, automated, and globally distributed infrastructure designed to scale with your growing user base.',
            features: ['AWS/Azure/GCP', 'DevOps Automation', 'Database Optimization'],
        },
    ];

    const industries = [
        {
            icon: HeartPulse,
            name: 'Healthcare',
            description: 'HIPAA-compliant software for patient management and clinical operations.',
        },
        {
            icon: LineChart,
            name: 'FinTech',
            description: 'Secure digital banking, payment processing, and financial reporting systems.',
        },
        {
            icon: ShoppingCart,
            name: 'E-commerce',
            description: 'Scalable storefronts and complex inventory management for global retailers.',
        },
        {
            icon: Cpu,
            name: 'Enterprise AI',
            description: 'Custom AI/ML integrations and automation tools for large-scale operations.',
        },
    ];

    const steps = [
        {
            title: 'Discovery & Strategy',
            detail: 'Deep dive into your business flow and user requirements.',
        },
        {
            title: 'Design & Prototyping',
            detail: 'Crafting the visual language and interaction model.',
        },
        {
            title: 'Agile Development',
            detail: 'Building with precision, transparency, and regular updates.',
        },
        {
            title: 'Launch & Scale',
            detail: 'Deployment and continuous optimization for long-term growth.',
        },
    ];
</script>

<AppHead title="Erbitron | High-Performance Digital Products" />

<div class="min-h-screen bg-background text-foreground selection:bg-primary/20">
    <PublicHeader />

    <!-- Hero Section -->
    <section class="relative flex min-h-[90vh] items-center justify-center overflow-hidden px-4 pt-32 pb-20 md:pt-48 md:pb-32">
        <div class="hero-noise pointer-events-none absolute inset-0 opacity-40"></div>
        <div class="pointer-events-none absolute -top-40 left-1/2 h-[40rem] w-[40rem] -translate-x-1/2 rounded-full bg-primary/15 blur-[120px] dark:bg-primary/10"></div>
        <div class="pointer-events-none absolute -bottom-40 left-0 h-[30rem] w-[30rem] rounded-full bg-primary/5 blur-[100px] dark:bg-primary/5"></div>

        <div class="relative mx-auto max-w-7xl text-center">
            <div class="mb-8 flex justify-center">
                <div class="inline-flex items-center gap-2 rounded-full border border-primary/20 bg-primary/5 px-4 py-1.5 text-xs font-semibold tracking-wide text-primary backdrop-blur-sm">
                    <Sparkles class="h-3.5 w-3.5 animate-pulse" />
                    <span>Redefining Software Engineering</span>
                </div>
            </div>

            <h1 class="mx-auto max-w-5xl text-5xl font-bold tracking-tight text-balance md:text-7xl lg:text-8xl">
                We build the <span class="text-gradient-brand">software</span> that builds your business.
            </h1>

            <p class="mx-auto mt-8 max-w-2xl text-lg leading-relaxed text-muted-foreground md:text-xl">
                Erbitron is a full-cycle software agency. We partner with forward-thinking companies to design, build, and scale high-performance digital products.
            </p>

            <div class="mt-12 flex flex-col items-center justify-center gap-4 sm:flex-row">
                <a href="mailto:hello@erbitron.com?subject=Project%20Inquiry" class="w-full sm:w-auto">
                    <Button size="lg" class="h-14 w-full rounded-full bg-primary px-10 text-base font-bold text-primary-foreground shadow-2xl shadow-primary/25 hover:bg-primary/90 sm:w-auto">
                        Discuss Your Project
                        <ArrowRight class="ml-2 h-5 w-5" />
                    </Button>
                </a>
                <a href="#services" class="w-full sm:w-auto">
                    <Button size="lg" variant="outline" class="h-14 w-full rounded-full border-border/60 bg-background/50 px-10 text-base font-semibold backdrop-blur-md hover:bg-accent sm:w-auto">
                        Explore Our Work
                    </Button>
                </a>
            </div>

            <div class="mt-20 grid grid-cols-2 gap-8 border-t border-border/40 pt-10 md:grid-cols-4 md:gap-12">
                <div class="flex flex-col items-center gap-2">
                    <span class="text-3xl font-bold tracking-tight md:text-4xl">100%</span>
                    <span class="text-xs font-semibold uppercase tracking-widest text-muted-foreground">Native Code</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <span class="text-3xl font-bold tracking-tight md:text-4xl">24/7</span>
                    <span class="text-xs font-semibold uppercase tracking-widest text-muted-foreground">Expert Support</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <span class="text-3xl font-bold tracking-tight md:text-4xl">50+</span>
                    <span class="text-xs font-semibold uppercase tracking-widest text-muted-foreground">Global Products</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <span class="text-3xl font-bold tracking-tight md:text-4xl">5.0</span>
                    <span class="text-xs font-semibold uppercase tracking-widest text-muted-foreground">Clutch Rating</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="relative overflow-hidden px-4 py-24 md:py-32">
        <div class="mx-auto max-w-7xl">
            <div class="mb-16 max-w-3xl">
                <Badge variant="outline" class="mb-4 rounded-full border-primary/30 px-4 py-1 text-primary">Capabilities</Badge>
                <h2 class="text-4xl font-bold tracking-tight md:text-6xl">Full-service digital engineering tailored for scale.</h2>
                <p class="mt-6 text-lg leading-relaxed text-muted-foreground">
                    From initial concept to production-ready applications, we provide the technical expertise and design-forward thinking needed to dominate your market.
                </p>
            </div>

            <div class="grid gap-6 md:grid-cols-2">
                {#each services as service (service.title)}
                    <div class="surface-panel group relative flex flex-col p-8 transition-all hover:border-primary/30 hover:shadow-2xl hover:shadow-primary/5">
                        <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-primary/10 text-primary transition-colors group-hover:bg-primary group-hover:text-primary-foreground">
                            <service.icon class="h-7 w-7" />
                        </div>
                        <h3 class="text-2xl font-bold tracking-tight">{service.title}</h3>
                        <p class="mt-4 flex-grow text-muted-foreground leading-relaxed">{service.description}</p>
                        
                        <div class="mt-8 flex flex-wrap gap-2">
                            {#each service.features as feature (feature)}
                                <span class="rounded-full bg-secondary/50 px-3 py-1 text-xs font-medium text-foreground/80 dark:bg-secondary/20">
                                    {feature}
                                </span>
                            {/each}
                        </div>
                    </div>
                {/each}
            </div>
        </div>
    </section>

    <!-- Industry Expertise -->
    <section id="solutions" class="bg-secondary/30 px-4 py-24 md:py-32 dark:bg-secondary/5">
        <div class="mx-auto max-w-7xl">
            <div class="flex flex-col gap-12 lg:flex-row lg:items-center">
                <div class="flex-1">
                    <Badge variant="outline" class="mb-4 rounded-full border-primary/30 px-4 py-1 text-primary text-sm">Industry Focus</Badge>
                    <h2 class="text-4xl font-bold tracking-tight md:text-6xl">Specialized solutions for complex sectors.</h2>
                    <p class="mt-6 text-lg leading-relaxed text-muted-foreground">
                        We don't just build software; we build deep industry expertise into every line of code. Our solutions are designed to meet the unique challenges of modern regulated environments.
                    </p>
                    <div class="mt-10">
                        <Button variant="link" class="p-0 text-primary font-bold text-lg hover:no-underline group">
                            Learn more about our solutions
                            <ArrowRight class="ml-2 h-5 w-5 transition-transform group-hover:translate-x-1" />
                        </Button>
                    </div>
                </div>
                
                <div class="flex-1 grid gap-4 sm:grid-cols-2">
                    {#each industries as industry (industry.name)}
                        <Card class="border-border/60 bg-background/50 p-6 shadow-none backdrop-blur-sm">
                            <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-xl bg-primary/10 text-primary">
                                <industry.icon class="h-5 w-5" />
                            </div>
                            <h4 class="text-xl font-bold">{industry.name}</h4>
                            <p class="mt-2 text-sm text-muted-foreground leading-relaxed">{industry.description}</p>
                        </Card>
                    {/each}
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="approach" class="px-4 py-24 md:py-32">
        <div class="mx-auto max-w-7xl text-center">
            <Badge variant="outline" class="mb-4 rounded-full border-primary/30 px-4 py-1 text-primary">Methodology</Badge>
            <h2 class="mx-auto max-w-3xl text-4xl font-bold tracking-tight md:text-6xl">The Erbitron Process</h2>
            <p class="mx-auto mt-6 max-w-2xl text-lg text-muted-foreground">
                A structured, transparent approach designed for speed and reliability.
            </p>

            <div class="mt-20 grid gap-8 md:grid-cols-4">
                {#each steps as step, i (step.title)}
                    <div class="relative flex flex-col items-center">
                        <div class="mb-6 flex h-16 w-16 items-center justify-center rounded-full bg-primary text-2xl font-bold text-primary-foreground shadow-xl shadow-primary/20">
                            {i + 1}
                        </div>
                        {#if i < steps.length - 1}
                            <div class="absolute top-8 left-[calc(50%+2rem)] hidden h-0.5 w-[calc(100%-4rem)] bg-border md:block"></div>
                        {/if}
                        <h3 class="text-xl font-bold">{step.title}</h3>
                        <p class="mt-3 text-sm text-muted-foreground leading-relaxed">{step.detail}</p>
                    </div>
                {/each}
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="px-4 pb-32">
        <div class="mx-auto max-w-7xl">
            <div class="relative overflow-hidden rounded-[2.5rem] bg-foreground px-6 py-20 text-background md:px-20 md:py-28 dark:bg-card">
                <div class="hero-noise pointer-events-none absolute inset-0 opacity-10"></div>
                <div class="pointer-events-none absolute -right-40 -top-40 h-[40rem] w-[40rem] rounded-full bg-primary/20 blur-[120px]"></div>
                
                <div class="relative z-10 flex flex-col items-center text-center">
                    <div class="mb-8 flex h-12 items-center justify-center">
                        <img
                            src="/images/logo/dark-logo.png"
                            alt="Erbitron"
                            class="h-12 w-auto dark:hidden"
                        />
                        <img
                            src="/images/logo/light-logo.png"
                            alt="Erbitron"
                            class="hidden h-12 w-auto dark:block"
                        />
                    </div>
                    <h2 class="max-w-3xl text-4xl font-bold tracking-tight md:text-6xl lg:text-7xl">Ready to build something <span class="text-primary">extraordinary</span>?</h2>
                    <p class="mt-8 max-w-2xl text-lg text-muted-foreground md:text-xl">
                        Whether you're a startup or an enterprise, we have the team and the tools to bring your digital vision to life.
                    </p>
                    <div class="mt-12 flex flex-col gap-4 sm:flex-row">
                        <a href="mailto:hello@erbitron.com?subject=Project%20Inquiry">
                            <Button size="lg" class="h-14 rounded-full bg-primary px-10 text-base font-bold text-primary-foreground hover:bg-primary/90">
                                Start Your Project Today
                            </Button>
                        </a>
                        <a href={toUrl(login())}>
                            <Button size="lg" variant="outline" class="h-14 rounded-full border-background/20 bg-background/5 px-10 text-base font-semibold hover:bg-background/10">
                                Client Dashboard
                            </Button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <PublicFooter />
</div>
