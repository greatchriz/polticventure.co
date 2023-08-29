{include file="header.tpl" pagetitle="Emerging Vip" pageurl="emerging-vip"}
<h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
        VIP PLAN DEPOSIT Project
    </h2>
<div class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
    
    <div class="col-span-12">
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">


                {include file="cards/team_stat.tpl" value="Mallak183" title="Project Leader"}

                {include file="cards/team_stat.tpl" value="5 Investors" title="Total Number of Investors"  subvalue="-1 investor"}

                {include file="cards/team_stat.tpl" value="4 Investors" title="Total Number of Investors that paid"}

                {include file="cards/team_stat.tpl" value="$10,000" title="Amount To Be Paid by each Investor"}

                {include file="cards/team_stat.tpl" value="$50,000.00" title="Target Amount"}

                {include file="cards/team_stat.tpl" value="$30,500" title="Total Amount Paid"}

                {include file="cards/team_stat.tpl" value="29 July, 2023" title="Project Start Date"}


                {include file="cards/team_stat.tpl" value="24 Sep, 2023" title="Project Due Date"}

        </div>
    </div>
</div>

    
<div class="mt-4 sm:mt-5 lg:mt-6">

    <div class="card px-4 pb-5 sm:px-5">
        <div class="my-3 flex h-8 items-center justify-between">
          <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
            Team Members
          </h2>
       
        </div>
        <div class="space-y-4 mt-4">
            {include file="emerging-vip-member.tpl" image="images/avatar/avatar-5.jpg" username="Mallak183" date="August 25, 2023" bamount="$0.00"  pamount="$0.00"}

            {include file="emerging-vip-member.tpl" image="images/avatar/avatar-9.jpg" username="Hamedbeiramy" date="August 18, 2023" bamount="$2,800.00"  pamount="$7,200"}

            {include file="emerging-vip-member.tpl" image="images/avatar/avatar-12.jpg" username="Samadhan27" date="August 10, 2023" bamount="$4,200.00"  pamount="$5,800"}


        

        </div>
    </div>


    <div class="card px-5 py-12 sm:px-18">
        <div class="my-3 flex h-8 items-center justify-between">
            <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
              Withdrawal History
            </h2>
         
          </div>
        
        
        <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
        <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
          <table class="is-zebra w-full text-left">
            <thead>
              <tr>
                <th class="whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                  #
                </th>
                <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                  Username
                </th>
                <th class="whitespace-nowrap bg-slate-200 px-3 py-3 text-right font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                  Transaction Hash
                </th>
                <th class="whitespace-nowrap bg-slate-200 px-3 py-3 text-right font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                  Withdrawal Amount
                </th>
                <th class="whitespace-nowrap rounded-r-lg bg-slate-200 px-3 py-3 text-right font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                  Date
                </th>
              </tr>
            </thead>
            <tbody>

              {* Manabu1 *}

              {include file="emerging-vip-withdrawals.tpl" image="images/avatar/avatar-2.jpg" trx="ad0427250168e86482d79c2487f8062cefc144a6a21bfdf2b0c36d544f45afbb" username="Manabu1" date="August 29, 2023" amount="$15,000"}
              
              {* Danielgates16 *}

              {include file="emerging-vip-withdrawals.tpl" image="images/avatar/avatar-10.jpg" trx="55dea7f66386838c2f8abc5cf7ddb6906f0a04bf3230029127dc0ffa886f50ae" username="Danielgates16" date="August 27, 2023" amount="$15,000"}



              
              
              
            </tbody>
          </table>
        </div>
        <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
        
      </div>


</div>


{include file="footer.tpl"}