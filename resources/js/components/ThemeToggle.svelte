<script lang="ts">
    import { Moon, Sun } from 'lucide-svelte/icons';
    import { Button } from '@/components/ui/button';
    import { themeState, updateAppearance } from '@/lib/theme.svelte';

    const theme = themeState();
    const resolvedAppearance = $derived(theme.resolvedAppearance());

    function toggleTheme(): void {
        updateAppearance(resolvedAppearance === 'dark' ? 'light' : 'dark');
    }
</script>

<Button
    variant="outline"
    size="icon"
    class="relative h-10 w-10 rounded-full border-border/70 bg-background/85 shadow-[0_10px_30px_rgba(15,15,15,0.06)] backdrop-blur hover:bg-accent dark:shadow-none"
    onclick={toggleTheme}
    aria-label={resolvedAppearance === 'dark'
        ? 'Switch to light theme'
        : 'Switch to dark theme'}
    title={resolvedAppearance === 'dark'
        ? 'Switch to light theme'
        : 'Switch to dark theme'}
>
    <Sun
        class="h-[18px] w-[18px] rotate-0 scale-100 text-primary transition-all dark:-rotate-90 dark:scale-0"
    />
    <Moon
        class="absolute h-[18px] w-[18px] rotate-90 scale-0 text-primary transition-all dark:rotate-0 dark:scale-100"
    />
    <span class="sr-only">Toggle theme</span>
</Button>
