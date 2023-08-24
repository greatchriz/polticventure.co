{if $userinfo.status == 'suspended'}

   {include file="account_blocked.tpl"}

{else}


{include file="header.tpl" pagetitle="Dashboard" pageurl="account"}
<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6 mt-4 sm:mt-5 sm:gap-5">
   <div class="card px-4 pb-4 sm:px-5">
      <div class="my-3 flex h-8 items-center justify-between">
        <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
          Emerging Vip
        </h2>
        
        <button
            class="btn space-x-2 rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
         >
            <svg
               xmlns="http://www.w3.org/2000/svg"
               class="h-5 w-5"
               fill="none"
               viewBox="0 0 24 24"
               stroke="currentColor"
            >
               <path
               stroke-linecap="round"
               stroke-linejoin="round"
               stroke-width="2"
               d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"
               />
            </svg>
            <span> Your Team</span>
         </button>

      </div>
      <div class="max-w-2xl">
        <div class="inline-space mt-5">
          <div class="avatar h-8 w-8">
            <img class="rounded-full" src="images/avatar/avatar-16.jpg" alt="avatar">
          </div>

          <div class="avatar h-10 w-10">
            <img class="rounded-full" src="images/avatar/avatar-10.jpg" alt="avatar">
          </div>

          <div class="avatar h-12 w-12">
            <img class="rounded-full" src="images/avatar/avatar-20.jpg" alt="avatar">
          </div>

          <div class="avatar h-16 w-16">
            <img class="rounded-full" src="images/avatar/avatar-19.jpg" alt="avatar">
          </div>

          <div class="avatar h-20 w-20">
            <img class="rounded-full" src="images/avatar/avatar-8.jpg" alt="avatar">
          </div>

          <div class="avatar h-24 w-24">
            <img class="rounded-full" src="images/avatar/avatar-5.jpg" alt="avatar">
          </div>
        </div>
      </div>
    </div>
</div>


<div class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
   <div class="col-span-12">

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