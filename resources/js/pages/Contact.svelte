<script lang="ts">
    import { useForm } from '@inertiajs/svelte';
    import {
        ArrowRight,
        CheckCircle2,
        Mail,
        MessageSquare,
        Phone,
        Send,
        UserRound
    } from 'lucide-svelte/icons';
    import { store } from '@/actions/App/Http/Controllers/ContactController';
    import AppHead from '@/components/AppHead.svelte';
    import InputError from '@/components/InputError.svelte';
    import PublicFooter from '@/components/PublicFooter.svelte';
    import PublicHeader from '@/components/PublicHeader.svelte';
    import { Badge } from '@/components/ui/badge';
    import { Button } from '@/components/ui/button';
    import { Input } from '@/components/ui/input';
    import { toUrl } from '@/lib/utils';

    type ContactForm = {
        name: string;
        email: string;
        phone: string;
        message: string;
    };

    let {
        flash = { success: null }
    }: {
        flash?: {
            success?: string | null;
        };
    } = $props();

    const form = useForm<ContactForm>({
        name: '',
        email: '',
        phone: '',
        message: ''
    });

    let localErrors = $state<Partial<Record<keyof ContactForm, string>>>({});

    function clearField(field: keyof ContactForm): void {
        const nextErrors = { ...localErrors };
        delete nextErrors[field];
        localErrors = nextErrors;
        form.clearErrors(field);
    }

    function updateField(field: keyof ContactForm, event: Event): void {
        form[field] = (event.currentTarget as HTMLInputElement).value;
        clearField(field);
    }

    function errorFor(field: keyof ContactForm): string {
        const serverError = form.errors[field];

        if (Array.isArray(serverError)) {
            return localErrors[field] ?? serverError[0] ?? '';
        }

        return localErrors[field] ?? serverError ?? '';
    }

    function hasValidEmail(email: string): boolean {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    function validate(): boolean {
        const errors: Partial<Record<keyof ContactForm, string>> = {};
        const name = form.name.trim();
        const email = form.email.trim();
        const phone = form.phone.trim();
        const message = form.message.trim();

        if (!name) {
            errors.name = 'Please enter your name.';
        }

        if (!email && !phone) {
            errors.email = 'Please provide an email address or phone number.';
            errors.phone = 'Please provide a phone number or email address.';
        }

        if (email && !hasValidEmail(email)) {
            errors.email = 'Please enter a valid email address.';
        }

        if (!message) {
            errors.message = 'Please tell us how we can help.';
        }

        localErrors = errors;

        return Object.keys(errors).length === 0;
    }

    function submit(event: SubmitEvent): void {
        event.preventDefault();
        form.clearErrors();

        if (!validate()) {
            return;
        }

        form.post(toUrl(store()), {
            preserveScroll: true,
            onSuccess: () => {
                localErrors = {};
                form.reset();
            }
        });
    }
</script>

<AppHead title="Contact Erbitron | Start Your Project" />

<div class="min-h-screen bg-background text-foreground selection:bg-primary/20">
    <PublicHeader />

    <main class="relative overflow-hidden px-4 pt-36 pb-24 md:pt-48 md:pb-32">
        <div class="hero-noise pointer-events-none absolute inset-0 opacity-35"></div>
        <div class="pointer-events-none absolute -top-32 left-1/2 h-150 w-150 -translate-x-1/2 rounded-full bg-primary/12 blur-[120px] dark:bg-primary/10"></div>
        <div class="pointer-events-none absolute right-0 bottom-0 h-120 w-120 rounded-full bg-primary/7 blur-[110px]"></div>

        <div class="relative mx-auto grid max-w-7xl gap-10 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
            <section class="pt-4 lg:sticky lg:top-36">
                <Badge
                    variant="outline"
                    class="mb-5 rounded-full border-primary/30 px-4 py-1 text-primary"
                >
                    Contact
                </Badge>

                <h1 class="max-w-3xl text-5xl font-bold tracking-tight text-balance md:text-7xl">
                    Tell us what you want to <span class="text-gradient-brand">build</span>.
                </h1>

                <p class="mt-6 max-w-2xl text-lg leading-relaxed text-muted-foreground md:text-xl">
                    Share the challenge, product idea, or workflow you want to improve. We will review the details and respond with the next practical step.
                </p>

                <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-1">
                    <div class="surface-panel flex items-start gap-4 p-5">
                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-primary/10 text-primary">
                            <Mail class="h-5 w-5" />
                        </div>
                        <div>
                            <p class="font-semibold">Email</p>
                            <a
                                href="mailto:erbitronsoftware@gmail.com"
                                class="mt-1 block text-sm text-muted-foreground transition-colors hover:text-foreground"
                            >
                                erbitronsoftware@gmail.com
                            </a>
                        </div>
                    </div>

                    <div class="surface-panel flex items-start gap-4 p-5">
                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-primary/10 text-primary">
                            <Phone class="h-5 w-5" />
                        </div>
                        <div>
                            <p class="font-semibold">Phone</p>
                            <a
                                href="tel:+94718708718"
                                class="mt-1 block text-sm text-muted-foreground transition-colors hover:text-foreground"
                            >
                                +94 718 708 718
                            </a>
                        </div>
                    </div>

                    <div class="surface-panel flex items-start gap-4 p-5">
                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-primary/10 text-primary">
                            <MessageSquare class="h-5 w-5" />
                        </div>
                        <div>
                            <p class="font-semibold">Project inquiries</p>
                            <p class="mt-1 text-sm leading-relaxed text-muted-foreground">
                                Custom software, SaaS products, web apps, automation, and UI refresh work.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="surface-shell p-5 md:p-8">
                {#if flash.success}
                    <div class="mb-6 flex items-start gap-3 rounded-3xl border border-primary/25 bg-primary/10 p-4 text-primary">
                        <CheckCircle2 class="mt-0.5 h-5 w-5 shrink-0" />
                        <p class="text-sm font-medium">{flash.success}</p>
                    </div>
                {/if}

                <form class="grid gap-5" novalidate onsubmit={submit}>
                    <div class="grid gap-5 md:grid-cols-2">
                        <label class="grid gap-2">
                            <span class="flex items-center gap-2 text-sm font-semibold">
                                <UserRound class="h-4 w-4 text-primary" />
                                Name
                            </span>
                            <Input
                                name="name"
                                value={form.name}
                                oninput={(event: Event) => updateField('name', event)}
                                autocomplete="name"
                                class="h-12 rounded-2xl bg-background/80 px-4"
                                aria-invalid={!!errorFor('name')}
                            />
                            <InputError message={errorFor('name')} />
                        </label>

                        <label class="grid gap-2">
                            <span class="flex items-center gap-2 text-sm font-semibold">
                                <Mail class="h-4 w-4 text-primary" />
                                Email
                            </span>
                            <Input
                                type="text"
                                name="email"
                                value={form.email}
                                oninput={(event: Event) => updateField('email', event)}
                                autocomplete="email"
                                inputmode="email"
                                class="h-12 rounded-2xl bg-background/80 px-4"
                                aria-invalid={!!errorFor('email')}
                            />
                            <InputError message={errorFor('email')} />
                        </label>
                    </div>

                    <label class="grid gap-2">
                        <span class="flex items-center gap-2 text-sm font-semibold">
                            <Phone class="h-4 w-4 text-primary" />
                            Phone
                        </span>
                        <Input
                            type="text"
                            name="phone"
                            value={form.phone}
                            oninput={(event: Event) => updateField('phone', event)}
                            autocomplete="tel"
                            inputmode="tel"
                            class="h-12 rounded-2xl bg-background/80 px-4"
                            aria-invalid={!!errorFor('phone')}
                        />
                        <InputError message={errorFor('phone')} />
                    </label>

                    <label class="grid gap-2">
                        <span class="flex items-center gap-2 text-sm font-semibold">
                            <MessageSquare class="h-4 w-4 text-primary" />
                            Message
                        </span>
                        <textarea
                            name="message"
                            bind:value={form.message}
                            oninput={() => clearField('message')}
                            rows="8"
                            class="min-h-44 w-full resize-y rounded-3xl border border-input bg-background/80 px-4 py-3 text-sm shadow-sm transition-colors placeholder:text-muted-foreground focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 focus-visible:outline-none"
                            aria-invalid={!!errorFor('message')}
                        ></textarea>
                        <InputError message={errorFor('message')} />
                    </label>

                    <div class="flex flex-col gap-4 pt-2 sm:flex-row sm:items-center sm:justify-between">
                        <p class="text-sm leading-relaxed text-muted-foreground">
                            Name and message are required. Add either an email address or phone number so we can respond.
                        </p>

                        <Button
                            type="submit"
                            size="lg"
                            disabled={form.processing}
                            class="h-13 shrink-0 rounded-full bg-primary px-8 text-base font-bold text-primary-foreground shadow-2xl shadow-primary/20 hover:bg-primary/90"
                        >
                            {form.processing ? 'Sending...' : 'Send inquiry'}
                            {#if form.processing}
                                <ArrowRight class="h-5 w-5" />
                            {:else}
                                <Send class="h-5 w-5" />
                            {/if}
                        </Button>
                    </div>
                </form>
            </section>
        </div>
    </main>

    <PublicFooter />
</div>
