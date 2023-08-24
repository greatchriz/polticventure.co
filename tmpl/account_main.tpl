{if $userinfo.status == 'suspended'}

   {include file="account_blocked.tpl"}

{else}


{include file="header.tpl" pagetitle="Dashboard" pageurl="account"}
<div class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
   <div class="col-span-12">

      <div class="mt-3 flex flex-col justify-between space-y-4">
         <div class="card p-4">
         <p class="font-medium text-slate-700 dark:text-navy-100">
            Social Media Marketing
         </p>
         <p class="mt-1 text-xs+">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
         </p>
         <div class="mt-4 flex flex-wrap -space-x-2">
            <div class="avatar h-7 w-7 hover:z-10">
               <img class="rounded-full ring ring-white dark:ring-navy-700" src="images/avatar/avatar-16.jpg" alt="avatar">
            </div>

            <div class="avatar h-7 w-7 hover:z-10">
               <div class="is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
               jd
               </div>
            </div>

            <div class="avatar h-7 w-7 hover:z-10">
               <img class="rounded-full ring ring-white dark:ring-navy-700" src="images/avatar/avatar-20.jpg" alt="avatar">
            </div>

            <div class="avatar h-7 w-7 hover:z-10">
               <img class="rounded-full ring ring-white dark:ring-navy-700" src="images/avatar/avatar-19.jpg" alt="avatar">
            </div>
         </div>
         <div class="mt-2 flex items-end justify-between">
            <p class="flex items-center space-x-2 text-slate-400 dark:text-navy-300">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5 text-slate-400 dark:text-navy-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
               </svg>
               <span class="text-xs">25 May, 2022</span>
            </p>
            <button class="btn h-7 w-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 hover:shadow-lg hover:shadow-slate-200/50 focus:bg-slate-200 focus:shadow-lg focus:shadow-slate-200/50 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:hover:shadow-navy-450/50 dark:focus:bg-navy-450 dark:focus:shadow-navy-450/50 dark:active:bg-navy-450/90">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12"></path>
               </svg>
            </button>
         </div>
         </div>
      </div>

      {include file="cards/balance.tpl"
         total_balance="{$currency_sign}{$ab_formated.total}" 
         total_deposits="{$currency_sign}{$ab_formated.deposit}" 
         total_withdrawals="{$currency_sign}{$ab_formated.withdrawal}" 
      }


      {* {include file="cards/accounts.tpl" ps=$ps} *}

      {include file="cards/user_details.tpl"
         info="{$userinfo}"
      }

      {include file="cards/watchlist.tpl"}

      {include file="cards/chart.tpl"}

   </div>
</div>

{include file="footer.tpl"}
{/if}





