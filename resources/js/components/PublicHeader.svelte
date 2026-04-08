<script lang="ts">
    import { Menu } from 'lucide-svelte/icons';
    import AppLogoIcon from '@/components/AppLogoIcon.svelte';
    import ThemeToggle from '@/components/ThemeToggle.svelte';
    import { Button } from '@/components/ui/button';
    import { Sheet, SheetContent, SheetTrigger } from '@/components/ui/sheet';
    import { toUrl } from '@/lib/utils';
    import { login } from '@/routes';

    let mobileOpen = $state(false);
</script>

<header class="fixed top-0 right-0 left-0 z-50 px-3 pt-3 md:px-5">
    <div
        class="mx-auto py-6 flex max-w-7xl items-center justify-between rounded-full border border-border/70 bg-background/86 px-8 shadow-[0_18px_50px_rgba(18,18,18,0.08)] backdrop-blur-xl dark:shadow-[0_20px_55px_rgba(0,0,0,0.35)]"
    >
        <a href="/" class="flex items-center group">
            <img
                src="/images/logo/dark-logo.png"
                alt="Erbitron"
                class="h-10 w-auto transition-transform group-hover:scale-105 dark:hidden"
            />
            <img
                src="/images/logo/light-logo.png"
                alt="Erbitron"
                class="hidden h-10 w-auto transition-transform group-hover:scale-105 dark:block"
            />
        </a>

        <nav class="hidden items-center gap-8 md:flex">
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

        <div class="flex items-center gap-2">
            <ThemeToggle />
            <div class="hidden items-center gap-2 md:flex">
                <a href={toUrl(login())} class="inline-flex">
                    <Button variant="ghost" size="sm" class="rounded-full"
                        >Sign In</Button
                    >
                </a>
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
                <SheetContent
                    side="right"
                    class="border-l-border/70 bg-background"
                >
                    <nav class="flex flex-col gap-4 pt-6">
                        <a
                            href="#services"
                            class="text-sm font-medium transition-colors hover:text-primary"
                            onclick={() => (mobileOpen = false)}
                        >
                            Services
                        </a>
                        <a
                            href="#solutions"
                            class="text-sm font-medium transition-colors hover:text-primary"
                            onclick={() => (mobileOpen = false)}
                        >
                            Solutions
                        </a>
                        <a
                            href="#approach"
                            class="text-sm font-medium transition-colors hover:text-primary"
                            onclick={() => (mobileOpen = false)}
                        >
                            Approach
                        </a>
                        <hr class="my-2" />
                        <a href={toUrl(login())} class="inline-flex">
                            <Button
                                variant="outline"
                                class="w-full justify-start rounded-full"
                                >Sign In</Button
                            >
                        </a>
                        <a
                            href="mailto:hello@erbitron.com?subject=Project%20Inquiry"
                            class="inline-flex"
                        >
                            <Button
                                class="w-full rounded-full bg-primary hover:bg-primary/90"
                                >Start A Project</Button
                            >
                        </a>
                    </nav>
                </SheetContent>
            </Sheet>
        </div>
    </div>
</header>
