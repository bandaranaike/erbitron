<script lang="ts">
    import AppLogoIcon from '@/components/AppLogoIcon.svelte';
</script>

<footer class="border-t border-border/70 backdrop-blur-md bg-[#f3f5f5] dark:bg-[#06070a]">
    <div class="mx-auto max-w-7xl px-4 py-16">
        <div class="flex flex-col gap-12 md:flex-row md:justify-between">
            <div class="max-w-xl">
                <div class="flex items-center gap-4">
                    <div>
                        <img
                            src="/images/logo/full-dark-logo.png"
                            alt="Erbitron"
                            class="h-64 w-auto transition-transform group-hover:scale-105 dark:hidden"
                        />
                        <img
                            src="/images/logo/full-light-logo.png"
                            alt="Erbitron"
                            class="hidden h-64 w-auto transition-transform group-hover:scale-105 dark:block"
                        />
                    </div>
                </div>

                <p class="mt-6 text-base leading-relaxed text-muted-foreground">
                    We partner with forward-thinking companies to design, build, and scale high-performance digital products.
                </p>
            </div>

            <nav class="flex flex-col gap-3 text-sm">
                <a
                    href="#services"
                    class="text-muted-foreground transition-colors hover:text-foreground"
                >
                    Services
                </a>
                <a
                    href="#solutions"
                    class="text-muted-foreground transition-colors hover:text-foreground"
                >
                    Solutions
                </a>
                <a
                    href="#approach"
                    class="text-muted-foreground transition-colors hover:text-foreground"
                >
                    Approach
                </a>
            </nav>

            <div class="space-y-3 text-sm">
                <p class="font-medium text-foreground">Connect</p>
                <a
                    href="mailto:hello@erbitron.com"
                    class="block text-muted-foreground transition-colors hover:text-foreground"
                >
                    hello@erbitron.com
                </a>
                <a
                    href="mailto:hello@erbitron.com?subject=Project%20Inquiry"
                    class="block text-muted-foreground transition-colors hover:text-foreground"
                >
                    Start a project discussion
                </a>
            </div>
        </div>

        <div
            class="mt-10 flex flex-col gap-3 border-t border-border/70 pt-6 text-sm text-muted-foreground md:flex-row md:items-center md:justify-between"
        >
            <span>&copy; {new Date().getFullYear()} Erbitron. All rights reserved.</span>
            <span>Built for modern software delivery and UI refresh work.</span>
        </div>
    </div>
</footer>
