<script lang="ts">
    import { Menu } from 'lucide-svelte/icons';
    import ThemeToggle from '@/components/ThemeToggle.svelte';
    import { Button } from '@/components/ui/button';
    import { Sheet, SheetContent, SheetTrigger } from '@/components/ui/sheet';

    let mobileOpen = $state(false);

    const mobileLinks = [
        { href: '#services', label: 'Services' },
        { href: '#solutions', label: 'Solutions' },
        { href: '#approach', label: 'Approach' },
    ];

    function closeMobileMenu(): void {
        mobileOpen = false;
    }
</script>

<header class="fixed top-0 right-0 left-0 z-50 px-3 pt-3 md:px-5">
    <Sheet bind:open={mobileOpen}>
        <div
            class="mx-auto flex max-w-7xl items-center gap-3 rounded-full border border-border/70 bg-background/86 px-4 py-4 shadow-[0_18px_50px_rgba(18,18,18,0.08)] backdrop-blur-xl md:gap-6 md:px-8 md:py-6 dark:shadow-[0_20px_55px_rgba(0,0,0,0.35)]"
        >
            <a href="/" class="group flex shrink-0 items-center">
                <img
                    src="/images/logo/dark-logo.png"
                    alt="Erbitron"
                    class="h-8 w-auto transition-transform group-hover:scale-105 md:h-10 dark:hidden"
                />
                <img
                    src="/images/logo/light-logo.png"
                    alt="Erbitron"
                    class="hidden h-8 w-auto transition-transform group-hover:scale-105 md:h-10 dark:block"
                />
            </a>

            <nav class="ml-auto hidden items-center gap-8 md:flex">
                <a
                    href="#services"
                    class="text-sm font-medium text-muted-foreground transition-colors hover:text-foreground"
                >
                    Services
                </a>
                <a
                    href="#solutions"
                    class="text-sm font-medium text-muted-foreground transition-colors hover:text-foreground"
                >
                    Solutions
                </a>
                <a
                    href="#approach"
                    class="text-sm font-medium text-muted-foreground transition-colors hover:text-foreground"
                >
                    Approach
                </a>
            </nav>

            <div class="ml-auto flex items-center gap-3 md:ml-0">
                <ThemeToggle />

                <div class="md:hidden">
                    <SheetTrigger asChild>
                        {#snippet children(props)}
                            <Button
                                variant="ghost"
                                size="icon"
                                class="rounded-full"
                                onclick={props.onclick}
                            >
                                <Menu class="h-5 w-5" />
                            </Button>
                        {/snippet}
                    </SheetTrigger>
                </div>

                <div class="hidden items-center gap-2 md:flex">
                    <a
                        href="mailto:hello@erbitron.com?subject=Project%20Inquiry"
                        class="inline-flex"
                    >
                        <Button
                            size="sm"
                            class="rounded-full bg-primary px-5 text-primary-foreground shadow-[0_14px_36px_rgba(245,116,32,0.25)] hover:bg-primary/90"
                            >Start A Project</Button
                        >
                    </a>
                </div>
            </div>
        </div>

        <SheetContent
            side="right"
            class="w-screen max-w-none gap-0 border-none bg-background/96 p-0 backdrop-blur-2xl sm:max-w-none"
        >
            <div class="flex h-full min-h-dvh flex-col">
                <div class="border-b border-border/60 px-5 py-5">
                    <a
                        href="/"
                        class="group flex w-fit items-center"
                        onclick={closeMobileMenu}
                    >
                        <img
                            src="/images/logo/dark-logo.png"
                            alt="Erbitron"
                            class="h-8 w-auto transition-transform group-hover:scale-105 dark:hidden"
                        />
                        <img
                            src="/images/logo/light-logo.png"
                            alt="Erbitron"
                            class="hidden h-8 w-auto transition-transform group-hover:scale-105 dark:block"
                        />
                    </a>
                </div>

                <nav class="flex flex-1 flex-col justify-between px-5 py-8">
                    <div class="space-y-3">
                        {#each mobileLinks as link (link.href)}
                            <a
                                href={link.href}
                                class="flex items-center justify-between rounded-3xl border border-border/60 bg-background/80 px-5 py-4 text-2xl font-semibold tracking-tight transition-colors hover:border-primary/50 hover:text-primary"
                                onclick={closeMobileMenu}
                            >
                                {link.label}
                            </a>
                        {/each}
                    </div>

                    <a
                        href="mailto:hello@erbitron.com?subject=Project%20Inquiry"
                        class="mt-8 inline-flex"
                        onclick={closeMobileMenu}
                    >
                        <Button
                            class="h-12 w-full rounded-full bg-primary text-base font-semibold hover:bg-primary/90"
                        >
                            Start A Project
                        </Button>
                    </a>
                </nav>
            </div>
        </SheetContent>
    </Sheet>
</header>
