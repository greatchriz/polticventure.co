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
            <div class="badge space-x-2 bg-primary text-white dark:bg-accent">
               <svg
                 xmlns="http://www.w3.org/2000/svg"
                 class="h-4 w-4"
                 viewBox="0 0 20 20"
                 fill="currentColor"
               >
                 <path
                   d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                 ></path>
               </svg>
               <span>Investor</span>
             </div>

             <div class="badge space-x-2 bg-primary text-white dark:bg-accent">
               <a href="/?a=network">
                  <svg
                  class="h-4 w-4"
                     viewBox="0 0 20 20"
                     fill="none"
                     xmlns="http://www.w3.org/2000/svg"
                  >
                     <g
                        id="SVGRepo_bgCarrier"
                        stroke-width="0"
                     ></g>
                     <g
                        id="SVGRepo_tracerCarrier"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                     ></g>
                     <g id="SVGRepo_iconCarrier">
                        <path
                           d="M3 12H21M12 8V12M6.5 12V16M17.5 12V16M10.1 8H13.9C14.4601 8 14.7401 8 14.954 7.89101C15.1422 7.79513 15.2951 7.64215 15.391 7.45399C15.5 7.24008 15.5 6.96005 15.5 6.4V4.6C15.5 4.03995 15.5 3.75992 15.391 3.54601C15.2951 3.35785 15.1422 3.20487 14.954 3.10899C14.7401 3 14.4601 3 13.9 3H10.1C9.53995 3 9.25992 3 9.04601 3.10899C8.85785 3.20487 8.70487 3.35785 8.60899 3.54601C8.5 3.75992 8.5 4.03995 8.5 4.6V6.4C8.5 6.96005 8.5 7.24008 8.60899 7.45399C8.70487 7.64215 8.85785 7.79513 9.04601 7.89101C9.25992 8 9.53995 8 10.1 8ZM15.6 21H19.4C19.9601 21 20.2401 21 20.454 20.891C20.6422 20.7951 20.7951 20.6422 20.891 20.454C21 20.2401 21 19.9601 21 19.4V17.6C21 17.0399 21 16.7599 20.891 16.546C20.7951 16.3578 20.6422 16.2049 20.454 16.109C20.2401 16 19.9601 16 19.4 16H15.6C15.0399 16 14.7599 16 14.546 16.109C14.3578 16.2049 14.2049 16.3578 14.109 16.546C14 16.7599 14 17.0399 14 17.6V19.4C14 19.9601 14 20.2401 14.109 20.454C14.2049 20.6422 14.3578 20.7951 14.546 20.891C14.7599 21 15.0399 21 15.6 21ZM4.6 21H8.4C8.96005 21 9.24008 21 9.45399 20.891C9.64215 20.7951 9.79513 20.6422 9.89101 20.454C10 20.2401 10 19.9601 10 19.4V17.6C10 17.0399 10 16.7599 9.89101 16.546C9.79513 16.3578 9.64215 16.2049 9.45399 16.109C9.24008 16 8.96005 16 8.4 16H4.6C4.03995 16 3.75992 16 3.54601 16.109C3.35785 16.2049 3.20487 16.3578 3.10899 16.546C3 16.7599 3 17.0399 3 17.6V19.4C3 19.9601 3 20.2401 3.10899 20.454C3.20487 20.6422 3.35785 20.7951 3.54601 20.891C3.75992 21 4.03995 21 4.6 21Z"
                           stroke="#fffafa"
                           stroke-width="2"
                           stroke-linecap="round"
                           stroke-linejoin="round"
                        ></path>
                     </g>
                  </svg>
               

                  <span>V.I.P. (6)</span>
               </a>
            </div>  
           
           {* <button class="btn h-7 rounded-full bg-slate-150 px-3 text-xs+ font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
             Follow
           </button> *}
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