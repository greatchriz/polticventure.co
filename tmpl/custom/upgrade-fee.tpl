{include file="header.tpl" pagetitle="Upgrade Fee" pageurl="upgrade-fee"}

{if $userinfo.home_phone == 1}
    <div class="mt-4 sm:mt-5 lg:mt-6">


        <div class="mt-3 grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
    
    
            <div class="card space-y-6 p-4 sm:px-5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-lg font-semibold uppercase text-primary dark:text-accent-light">Upgrade Fee
                        </p>
                    </div>
    
                </div>
                <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>
                <p class="text-sm uppercase font-bold text-primary">Current Status</p>
                <div>
    
                    <p class="text-base font-medium text-warning">Pending</p>
                </div>
                <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>
                <p class="text-sm uppercase font-bold text-primary">Deposit Detail</p>
    
                <div class="flex grow justify-between space-x-2">
                    <div>
                        <p class="text-xs+ text-slate-400 dark:text-navy-300">
                            Total Amount
                        </p>
                        <p class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                            $500.00
                        </p>
                    </div>
                    <div>
                        <p class="text-xs+ text-slate-400 dark:text-navy-300">
                            Paid Amount
                        </p>
                        <p class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                            $50.00
                        </p>
                    </div>
                    <div>
                        <p class="text-xs+ text-slate-400 dark:text-navy-300">
                            Remaining Balance
                        </p>
                        <p class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                            $450.00
                        </p>
                    </div>
                </div>
    
                <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>
                <p class="text-sm uppercase font-bold text-primary">14 aug, 2023</p>
    
    
    
                <div class="space-y-3">
                    <div class="flex justify-between">
                        <p class="text-sm uppercase text-slate-400 dark:text-navy-300 font-bold">Username</p>
    
                        <p class="text-sm uppercase text-slate-400 dark:text-navy-300 font-bold">Deposit Amount</p>
    
                        <p class="text-sm uppercase text-slate-400 dark:text-navy-300 font-bold">Status</p>
    
                    </div>
                    <div class="flex items-center justify-between">
    
    
    
    
    
                        <div class="font-inter">
                            <span class="text-right font-medium text-slate-700 dark:text-navy-100">Mallak183</span>
                        </div>
                        <div class="font-inter">
                            <span class="text-right font-medium text-slate-700 dark:text-navy-100">$50.00</span>
                        </div>
                        <div class="font-inter">
                            <span class="text-right font-medium text-success dark:text-warning">Completed</span>
                        </div>
                    </div>
    
                </div>
                <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>
                {* <p class="text-sm uppercase font-bold text-primary">Second Investor</p>
    
    
    
                <div class="space-y-3">
                    <div class="flex justify-between">
                        <p class="text-sm uppercase text-slate-400 dark:text-navy-300 font-bold">Username</p>
    
                        <p class="text-sm uppercase text-slate-400 dark:text-navy-300 font-bold">Deposit Amount</p>
    
                        <p class="text-sm uppercase text-slate-400 dark:text-navy-300 font-bold">Status</p>
    
                    </div>
                    <div class="flex items-center justify-between">
    
    
    
    
    
                        <div class="font-inter">
                            <span class="text-right font-medium text-slate-700 dark:text-navy-100">Dreahimself08</span>
                        </div>
                        <div class="font-inter">
                            <span class="text-right font-medium text-slate-700 dark:text-navy-100">$300.00</span>
                        </div>
                        <div class="font-inter">
                            <span class="text-right font-medium text-success dark:text-success">Completed</span>
                        </div>
                    </div>
    
                </div> *}
    
    
    
    
            </div>
    
        </div>
    
    
        <!-- content goes here -->
    </div>
    
    
      
    
    {else}
    
        <div class="max-w-md p-6 text-center">
            <div class="w-full">
              <img
                class="w-full"
                src="images/illustrations/error-401.svg"
                alt="image"
              />
            </div>
            <p class="pt-4 text-7xl font-bold text-primary dark:text-accent">
              401
            </p>
            <p
              class="pt-4 text-xl font-semibold text-slate-800 dark:text-navy-50"
            >
              You are not authorized
            </p>
            <p class="pt-2 text-slate-500 dark:text-navy-200">
              You are missing the required rights to be able to access this page
            </p>
  
            <button
              class="btn mt-8 h-11 bg-primary text-base font-medium text-white hover:bg-primary-focus hover:shadow-lg hover:shadow-primary/50 focus:bg-primary-focus focus:shadow-lg focus:shadow-primary/50 active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:hover:shadow-accent/50 dark:focus:bg-accent-focus dark:focus:shadow-accent/50 dark:active:bg-accent/90"
            >
              Back To Home
            </button>
          </div>

{/if}

{include file="footer.tpl"}
