<script lang="ts">
    let {
        class: className = '',
        ...rest
    }: {
        class?: string;
        [key: string]: unknown;
    } = $props();
</script>

<svg
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 40 40"
    class={className}
    {...rest}
>
    <!-- Modern E + B Monogram -->
    <path
        fill="currentColor"
        fill-rule="evenodd"
        clip-rule="evenodd"
        d="M8 6C8 4.89543 8.89543 4 10 4H26C31.5228 4 36 8.47715 36 14C36 17.1591 34.5348 19.9754 32.2515 21.8016C34.5348 23.6278 36 26.4441 36 29.6032C36 35.126 31.5228 39.6032 26 39.6032H10C8.89543 39.6032 8 38.7078 8 37.6032V6ZM14 10V18H26C28.2091 18 30 16.2091 30 14C30 11.7909 28.2091 10 26 10H14ZM14 24V33.6032H26C28.2091 33.6032 30 31.8141 30 29.6032C30 27.3923 28.2091 25.6032 26 25.6032H14V24Z"
    />
    <!-- Accent line to emphasize the 'E' -->
    <path
        fill="currentColor"
        opacity="0.3"
        d="M8 20H22V24H8V20Z"
    />
</svg>
