{if $userinfo.status == 'suspended'}

   {include file="account_blocked.tpl"}

{else}


{include file="header.tpl" pagetitle="Dashboard" pageurl="account"}
<div class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
   <div class="col-span-12">

      <div class="card grow items-center p-4 text-center sm:p-5 mb-3">
         <div class="avatar h-18 w-18">
           <img class="rounded-full" src="images/avatar/avatar-20.jpg" alt="avatar">
         </div>
         <div class="my-2 grow">
           <h3 class="text-base font-medium text-slate-700 dark:text-navy-100">
             (Username)
           </h3>
           <div>
             <a href="#" class="text-xs+ text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">#FinancialServices  &hairsp;</a>
             <a href="#" class="text-xs+ text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">#Investment &hairsp;</a>
             <a href="#" class="text-xs+ text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">#Technology &hairsp;</a>
           </div>
         </div>
         <div class="mt-3 flex space-x-1">

            <div class="badge bg-success text-white">Success</div>

           {* <button class="btn h-7 rounded-full bg-slate-150 px-3 text-xs+ font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
             Follow
           </button> *}
          Investor
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