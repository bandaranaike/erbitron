<script lang="ts">
    import AppHead from '@/components/AppHead.svelte';
    import PublicHeader from '@/components/PublicHeader.svelte';
    import PublicFooter from '@/components/PublicFooter.svelte';
    import { Button } from '@/components/ui/button';
    import {
        Globe,
        Smartphone,
        Code2,
        Layers,
        Zap,
        Shield,
        Star,
        ArrowRight,
        Check,
        Play,
    } from 'lucide-svelte/icons';

    const services = [
        {
            icon: Globe,
            title: 'Web Development',
            description:
                'Stunning, responsive websites built with cutting-edge technologies for maximum performance.',
        },
        {
            icon: Smartphone,
            title: 'Mobile Apps',
            description:
                'Native and cross-platform mobile applications that deliver exceptional user experiences.',
        },
        {
            icon: Layers,
            title: 'Web Applications',
            description:
                'Complex, scalable web apps designed to streamline operations and drive growth.',
        },
        {
            icon: Code2,
            title: 'Custom Software',
            description:
                'Tailored software solutions crafted to meet your unique business requirements.',
        },
    ];

    const stats = [
        { value: '50+', label: 'Projects Delivered' },
        { value: '98%', label: 'Client Satisfaction' },
        { value: '24/7', label: 'Support Available' },
        { value: '5+', label: 'Years Experience' },
    ];

    const testimonials = [
        {
            name: 'Sarah Mitchell',
            role: 'CEO, TechStart Inc.',
            content:
                'Erbitron transformed our digital presence. The team delivered a stunning web app that exceeded all expectations.',
            rating: 5,
        },
        {
            name: 'James Chen',
            role: 'Founder, GrowthLabs',
            content:
                'Working with Erbitron was seamless. They understood our vision and delivered a product that truly stands out.',
            rating: 5,
        },
        {
            name: 'Maria Garcia',
            role: 'CTO, Innovate Co.',
            content:
                'The attention to detail and technical expertise at Erbitron is unmatched. Highly recommend for any project.',
            rating: 5,
        },
    ];

    const pricingPlans = [
        {
            name: 'Starter',
            description: 'Perfect for small projects',
            price: '999',
            features: [
                'Landing Page',
                'Basic SEO',
                'Mobile Responsive',
                'Contact Form',
                '2 Weeks Delivery',
            ],
        },
        {
            name: 'Professional',
            description: 'For growing businesses',
            price: '2999',
            popular: true,
            features: [
                'Custom Web Application',
                'Advanced SEO',
                'API Integration',
                'Admin Dashboard',
                '4 Weeks Delivery',
                '3 Months Support',
            ],
        },
        {
            name: 'Enterprise',
            description: 'Full-scale solutions',
            price: 'Custom',
            features: [
                'Everything in Pro',
                'Dedicated Team',
                'Advanced Analytics',
                'Custom Integrations',
                'Priority Support',
                'Ongoing Maintenance',
            ],
        },
    ];
</script>

<AppHead title="Erbitron - Digital Solutions Agency" />

<div class="min-h-screen bg-background text-foreground">
    <PublicHeader />

    <!-- Hero Section -->
    <section
        class="relative overflow-hidden px-4 pt-32 pb-20 md:pt-44 md:pb-32"
    >
        <div class="absolute inset-0 overflow-hidden">
            <div
                class="absolute left-1/4 top-1/4 h-[500px] w-[500px] rounded-full bg-primary/20 blur-[100px] dark:bg-primary/30"
            ></div>
            <div
                class="absolute right-1/4 top-1/3 h-[400px] w-[400px] rounded-full bg-cyan-500/20 blur-[100px] dark:bg-cyan-500/30"
            ></div>
            <div
                class="absolute bottom-1/4 left-1/2 h-[300px] w-[300px] rounded-full bg-blue-500/10 blur-[80px]"
            ></div>
        </div>

        <div class="relative z-10 mx-auto max-w-6xl">
            <div class="text-center">
                <div
                    class="mb-6 inline-flex items-center gap-2 rounded-full border border-border bg-card/50 px-4 py-1.5 text-sm backdrop-blur"
                >
                    <span
                        class="h-2 w-2 rounded-full bg-green-500 animate-pulse"
                    ></span>
                    <span class="text-muted-foreground"
                        >Now accepting new projects</span
                    >
                </div>

                <h1
                    class="mb-6 text-4xl font-bold leading-tight tracking-tight md:text-6xl lg:text-7xl"
                >
                    We build digital<br />
                    <span class="text-gradient-full">experiences</span><br />
                    that convert
                </h1>

                <p
                    class="mx-auto mb-10 max-w-2xl text-lg text-muted-foreground md:text-xl"
                >
                    Award-winning digital agency specializing in websites, web
                    apps, mobile apps, and custom software solutions.
                </p>

                <div
                    class="flex flex-col items-center justify-center gap-4 sm:flex-row"
                >
                    <Button
                        size="lg"
                        class="h-12 gap-2 bg-gradient-to-r from-primary to-cyan-500 hover:opacity-90"
                    >
                        Start Your Project
                        <ArrowRight class="h-4 w-4" />
                    </Button>
                    <Button size="lg" variant="outline" class="h-12 gap-2">
                        <Play class="h-4 w-4" />
                        Watch Showreel
                    </Button>
                </div>
            </div>

            <!-- Hero Visual -->
            <div class="relative mt-16">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent z-10"
                ></div>
                <div
                    class="relative overflow-hidden rounded-2xl border border-border bg-card"
                >
                    <div
                        class="flex items-center gap-2 border-b border-border px-4 py-3"
                    >
                        <div class="flex gap-2">
                            <div
                                class="h-3 w-3 rounded-full bg-red-500/80"
                            ></div>
                            <div
                                class="h-3 w-3 rounded-full bg-yellow-500/80"
                            ></div>
                            <div
                                class="h-3 w-3 rounded-full bg-green-500/80"
                            ></div>
                        </div>
                        <div
                            class="flex-1 text-center text-xs text-muted-foreground"
                        >
                            dashboard.erbitron.com
                        </div>
                    </div>
                    <div class="aspect-[16/9] p-8">
                        <div class="grid h-full grid-cols-3 gap-4">
                            <div
                                class="rounded-xl bg-gradient-to-br from-primary/20 to-primary/5 border border-primary/20"
                            ></div>
                            <div
                                class="rounded-xl bg-gradient-to-br from-cyan-500/20 to-cyan-500/5 border border-cyan-500/20"
                            ></div>
                            <div
                                class="rounded-xl bg-gradient-to-br from-blue-500/20 to-blue-500/5 border border-blue-500/20"
                            ></div>
                            <div
                                class="col-span-2 rounded-xl bg-muted border border-border"
                            ></div>
                            <div
                                class="rounded-xl bg-gradient-to-br from-primary/20 to-cyan-500/20 border border-border"
                            ></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="px-4 py-16 md:py-20">
        <div class="mx-auto max-w-6xl">
            <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
                {#each stats as stat}
                    <div class="text-center">
                        <div
                            class="mb-2 text-3xl font-bold md:text-5xl text-gradient-full"
                        >
                            {stat.value}
                        </div>
                        <div class="text-sm text-muted-foreground">
                            {stat.label}
                        </div>
                    </div>
                {/each}
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="px-4 py-20 md:py-32">
        <div class="mx-auto max-w-6xl">
            <div class="mb-16 text-center">
                <h2 class="mb-4 text-3xl font-bold md:text-5xl">
                    What We Build
                </h2>
                <p class="mx-auto max-w-2xl text-muted-foreground">
                    From concept to launch, we deliver exceptional digital
                    products that drive results.
                </p>
            </div>

            <div class="grid gap-6 md:grid-cols-2">
                {#each services as feature}
                    <div
                        class="group relative rounded-2xl border border-border bg-card p-8 transition-all hover:border-primary/50 hover:shadow-lg hover:shadow-primary/5"
                    >
                        <div
                            class="mb-6 inline-flex rounded-xl bg-gradient-to-br from-primary/10 to-cyan-500/10 p-4"
                        >
                            <feature.icon class="h-8 w-8 text-primary" />
                        </div>
                        <h3 class="mb-3 text-xl font-semibold">
                            {feature.title}
                        </h3>
                        <p class="text-muted-foreground">
                            {feature.description}
                        </p>
                    </div>
                {/each}
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why-us" class="px-4 py-20 md:py-32">
        <div class="mx-auto max-w-6xl">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                <div>
                    <h2 class="mb-6 text-3xl font-bold md:text-5xl">
                        Why choose <span class="text-gradient-full"
                            >Erbitron</span
                        >?
                    </h2>
                    <p class="mb-8 text-lg text-muted-foreground">
                        We combine technical expertise with creative vision to
                        deliver solutions that truly stand out in the digital
                        landscape.
                    </p>

                    <div class="space-y-4">
                        {#each [{ icon: Zap, title: 'Lightning Fast', desc: 'Optimized performance for the best user experience' }, { icon: Shield, title: 'Secure & Reliable', desc: 'Enterprise-grade security built into every project' }, { icon: Star, title: 'Premium Quality', desc: 'Pixel-perfect designs with attention to every detail' }] as item}
                            <div
                                class="flex gap-4 rounded-xl border border-border bg-card p-4"
                            >
                                <div
                                    class="rounded-lg bg-gradient-to-br from-primary/10 to-cyan-500/10 p-3"
                                >
                                    <item.icon class="h-5 w-5 text-primary" />
                                </div>
                                <div>
                                    <h4 class="font-medium">{item.title}</h4>
                                    <p class="text-sm text-muted-foreground">
                                        {item.desc}
                                    </p>
                                </div>
                            </div>
                        {/each}
                    </div>
                </div>

                <div class="relative">
                    <div
                        class="absolute -inset-4 bg-gradient-to-r from-primary/10 via-cyan-500/10 to-blue-500/10 blur-3xl rounded-3xl"
                    ></div>
                    <div
                        class="relative rounded-2xl border border-border bg-card p-8"
                    >
                        <div class="space-y-4">
                            {#each Array(4) as _}
                                <div class="flex items-center gap-4">
                                    <div
                                        class="h-12 w-12 rounded-lg bg-muted"
                                    ></div>
                                    <div class="flex-1 space-y-2">
                                        <div
                                            class="h-3 w-3/4 rounded bg-muted"
                                        ></div>
                                        <div
                                            class="h-2 w-1/2 rounded bg-muted/50"
                                        ></div>
                                    </div>
                                </div>
                            {/each}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="px-4 py-20 md:py-32">
        <div class="mx-auto max-w-6xl">
            <div class="mb-16 text-center">
                <h2 class="mb-4 text-3xl font-bold md:text-5xl">
                    Client Stories
                </h2>
                <p class="mx-auto max-w-2xl text-muted-foreground">
                    Don't just take our word for it. Here's what our clients
                    have to say.
                </p>
            </div>

            <div class="grid gap-6 md:grid-cols-3">
                {#each testimonials as testimonial}
                    <div class="rounded-2xl border border-border bg-card p-6">
                        <div class="mb-4 flex gap-1">
                            {#each Array(testimonial.rating) as _}
                                <Star
                                    class="h-4 w-4 fill-yellow-400 text-yellow-400"
                                />
                            {/each}
                        </div>
                        <p class="mb-6 text-muted-foreground">
                            "{testimonial.content}"
                        </p>
                        <div class="flex items-center gap-3">
                            <div
                                class="h-10 w-10 rounded-full bg-gradient-to-br from-primary to-cyan-500"
                            ></div>
                            <div>
                                <div class="font-medium">
                                    {testimonial.name}
                                </div>
                                <div class="text-sm text-muted-foreground">
                                    {testimonial.role}
                                </div>
                            </div>
                        </div>
                    </div>
                {/each}
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="px-4 py-20 md:py-32">
        <div class="mx-auto max-w-6xl">
            <div class="mb-16 text-center">
                <h2 class="mb-4 text-3xl font-bold md:text-5xl">
                    Simple Pricing
                </h2>
                <p class="mx-auto max-w-2xl text-muted-foreground">
                    Transparent pricing with no hidden fees. Choose the plan
                    that fits your needs.
                </p>
            </div>

            <div class="grid gap-6 md:grid-cols-3">
                {#each pricingPlans as plan}
                    <div
                        class="relative rounded-2xl border {plan.popular
                            ? 'border-primary bg-gradient-to-b from-primary/10 to-transparent'
                            : 'border-border bg-card'} p-8"
                    >
                        {#if plan.popular}
                            <div
                                class="absolute -top-3 left-1/2 -translate-x-1/2 rounded-full bg-gradient-to-r from-primary to-cyan-500 px-4 py-1 text-xs font-medium text-white"
                            >
                                Most Popular
                            </div>
                        {/if}

                        <div class="mb-6">
                            <h3 class="text-xl font-semibold">{plan.name}</h3>
                            <p class="text-sm text-muted-foreground">
                                {plan.description}
                            </p>
                        </div>

                        <div class="mb-6">
                            {#if plan.price === 'Custom'}
                                <span class="text-4xl font-bold">Custom</span>
                            {:else}
                                <span class="text-4xl font-bold"
                                    >${plan.price}</span
                                >
                                <span class="text-muted-foreground"
                                    >/project</span
                                >
                            {/if}
                        </div>

                        <ul class="mb-8 space-y-3">
                            {#each plan.features as feature}
                                <li
                                    class="flex items-center gap-2 text-sm text-muted-foreground"
                                >
                                    <Check class="h-4 w-4 text-primary" />
                                    {feature}
                                </li>
                            {/each}
                        </ul>

                        <Button
                            class="w-full {plan.popular
                                ? 'bg-gradient-to-r from-primary to-cyan-500 hover:opacity-90'
                                : ''}"
                        >
                            Get Started
                        </Button>
                    </div>
                {/each}
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="px-4 py-20 md:py-32">
        <div class="mx-auto max-w-4xl">
            <div class="relative overflow-hidden rounded-3xl">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-primary via-cyan-500 to-blue-500"
                ></div>
                <div
                    class="absolute inset-0 opacity-50"
                    style="background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmZmZmYiIGZpbGwtb3BhY2l0eT0iMC4wNSI+PGNpcmNsZSBjeD0iMzAiIGN5PSIzMCIgcj0iMiIvPjwvZz48L2c+PC9zdmc+');"
                ></div>

                <div
                    class="relative px-8 py-16 text-center text-white md:px-16 md:py-24"
                >
                    <h2 class="mb-4 text-3xl font-bold md:text-4xl">
                        Ready to bring your idea to life?
                    </h2>
                    <p class="mx-auto mb-8 max-w-xl text-lg text-white/80">
                        Let's discuss your project and create something amazing
                        together.
                    </p>
                    <Button
                        size="lg"
                        class="h-14 gap-2 bg-white text-primary hover:bg-white/90"
                    >
                        Start Your Project
                        <ArrowRight class="h-5 w-5" />
                    </Button>
                </div>
            </div>
        </div>
    </section>

    <PublicFooter />
</div>
