
<div class="flex cursor-pointer items-center justify-between">
    <div class="flex items-center space-x-3">
      <div class="avatar">
        <img class="rounded-full" src="{$image}" alt="avatar">
      </div>
      <div>
        <p class="text-slate-700 dark:text-navy-100">
          {$username}
        </p>
        <p class="text-xs text-slate-400 line-clamp-1 dark:text-navy-200">
          {$date}
        </p>
      </div>
    </div>
    
    <p class="font-medium text-success">Paid: {$pamount}</p>
    <p class="font-medium text-error">balance: {$bamount}</p>
  </div>