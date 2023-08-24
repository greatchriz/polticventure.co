<div class="rounded-lg border border-slate-150 p-3 dark:border-navy-700 bg-slate-150">
    <div class="flex justify-between space-x-1">
        <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
            {$value}
        </p>
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 shrink-0 text-primary dark:text-accent"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="1.5"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"
            ></path>
        </svg>
    </div>
    <p class="mt-1 text-xs+ line-clamp-1">{$title}</p>
</div>