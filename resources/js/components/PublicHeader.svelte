<script lang="ts">
    import { Menu } from 'lucide-svelte/icons';
    import { Button } from '@/components/ui/button';
    import { Sheet, SheetContent, SheetTrigger } from '@/components/ui/sheet';
    import ThemeToggle from '@/components/ThemeToggle.svelte';

    let mobileOpen = $state(false);
</script>

<header
    class="fixed top-0 left-0 right-0 z-50 border-b border-border/50 bg-background/80 backdrop-blur-xl"
>
    <div class="mx-auto flex h-16 max-w-6xl items-center justify-between px-4">
        <a href="/" class="flex items-center gap-2">
            <div
                class="flex h-9 w-9 items-center justify-center rounded-lg bg-gradient-to-br from-primary to-cyan-500"
            >
                <span class="text-sm font-bold text-white">E</span>
            </div>
            <span class="text-xl font-bold">Erbitron</span>
        </a>

        <nav class="hidden items-center gap-8 md:flex">
            <a
                href="#services"
                class="text-sm font-medium text-muted-foreground transition-colors hover:text-foreground"
            >
                Services
            </a>
            <a
                href="#why-us"
                class="text-sm font-medium text-muted-foreground transition-colors hover:text-foreground"
            >
                Why Us
            </a>
            <a
                href="#testimonials"
                class="text-sm font-medium text-muted-foreground transition-colors hover:text-foreground"
            >
                Testimonials
            </a>
            <a
                href="#pricing"
                class="text-sm font-medium text-muted-foreground transition-colors hover:text-foreground"
            >
                Pricing
            </a>
        </nav>

        <div class="flex items-center gap-2">
            <ThemeToggle />
            <div class="hidden items-center gap-2 md:flex">
                <Button variant="ghost" size="sm">Sign In</Button>
                <Button
                    size="sm"
                    class="bg-gradient-to-r from-primary to-cyan-500 hover:opacity-90"
                    >Get Started</Button
                >
            </div>
        </div>

        <div class="md:hidden">
            <Sheet bind:open={mobileOpen}>
                <SheetTrigger asChild>
                    {#snippet children(props)}
                        <Button
                            variant="ghost"
                            size="icon"
                            onclick={props.onclick}
                        >
                            <Menu class="h-5 w-5" />
                        </Button>
                    {/snippet}
                </SheetTrigger>
                <SheetContent side="right">
                    <nav class="flex flex-col gap-4 pt-6">
                        <a
                            href="#services"
                            class="text-sm font-medium transition-colors hover:text-primary"
                            onclick={() => (mobileOpen = false)}
                        >
                            Services
                        </a>
                        <a
                            href="#why-us"
                            class="text-sm font-medium transition-colors hover:text-primary"
                            onclick={() => (mobileOpen = false)}
                        >
                            Why Us
                        </a>
                        <a
                            href="#testimonials"
                            class="text-sm font-medium transition-colors hover:text-primary"
                            onclick={() => (mobileOpen = false)}
                        >
                            Testimonials
                        </a>
                        <a
                            href="#pricing"
                            class="text-sm font-medium transition-colors hover:text-primary"
                            onclick={() => (mobileOpen = false)}
                        >
                            Pricing
                        </a>
                        <hr class="my-2" />
                        <Button variant="outline" class="w-full justify-start"
                            >Sign In</Button
                        >
                        <Button
                            class="w-full bg-gradient-to-r from-primary to-cyan-500"
                            >Get Started</Button
                        >
                    </nav>
                </SheetContent>
            </Sheet>
        </div>
    </div>
</header>
