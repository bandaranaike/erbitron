<script lang="ts">
    import { Sun, Moon, Monitor } from 'lucide-svelte/icons';
    import { Button } from '@/components/ui/button';
    import {
        DropdownMenu,
        DropdownMenuContent,
        DropdownMenuTrigger,
    } from '@/components/ui/dropdown-menu';
    import { updateAppearance } from '@/lib/theme.svelte';

    function setTheme(theme: 'light' | 'dark' | 'system') {
        updateAppearance(theme);
    }
</script>

<DropdownMenu>
    <DropdownMenuTrigger asChild>
        {#snippet children(props)}
            <Button
                variant="ghost"
                size="icon"
                class="relative h-9 w-9"
                onclick={props.onclick}
                aria-expanded={props['aria-expanded']}
            >
                <Sun
                    class="h-4 w-4 rotate-0 scale-100 transition-all dark:-rotate-90 dark:scale-0"
                />
                <Moon
                    class="absolute h-4 w-4 rotate-90 scale-0 transition-all dark:rotate-0 dark:scale-100"
                />
                <span class="sr-only">Toggle theme</span>
            </Button>
        {/snippet}
    </DropdownMenuTrigger>
    <DropdownMenuContent align="end">
        <button
            type="button"
            onclick={() => setTheme('light')}
            class="flex w-full cursor-pointer select-none items-center gap-2 rounded-sm px-2 py-1.5 text-sm outline-none hover:bg-accent"
        >
            <Sun class="h-4 w-4" />
            Light
        </button>
        <button
            type="button"
            onclick={() => setTheme('dark')}
            class="flex w-full cursor-pointer select-none items-center gap-2 rounded-sm px-2 py-1.5 text-sm outline-none hover:bg-accent"
        >
            <Moon class="h-4 w-4" />
            Dark
        </button>
        <button
            type="button"
            onclick={() => setTheme('system')}
            class="flex w-full cursor-pointer select-none items-center gap-2 rounded-sm px-2 py-1.5 text-sm outline-none hover:bg-accent"
        >
            <Monitor class="h-4 w-4" />
            System
        </button>
    </DropdownMenuContent>
</DropdownMenu>
