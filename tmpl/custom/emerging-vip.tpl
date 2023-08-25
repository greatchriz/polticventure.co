{include file="header.tpl" pagetitle="Emerging Vip" pageurl="emerging-vip"}
<h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
        VIP PLAN DEPOSIT Project
    </h2>
<div class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
    
    <div class="col-span-12">
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">


                {include file="cards/team_stat.tpl" value="Mallak183" title="Project Leader"}

                {include file="cards/team_stat.tpl" value="9 Investors" title="Total Number of Investors"}

                {include file="cards/team_stat.tpl" value="3 Investorss" title="Total Amount Paid"}

                {include file="cards/team_stat.tpl" value="$50,000.00" title="Target Amount"}

                {include file="cards/team_stat.tpl" value="$29,000" title="Total Amount Paid"}

                {include file="cards/team_stat.tpl" value="29 July, 2023" title="Project Start Date"}


                {include file="cards/team_stat.tpl" value="24 Sep, 2023" title="Project Due Date"}

        </div>
    </div>
</div>

{literal}
    
<div class="mt-4 sm:mt-5 lg:mt-6">
    <div class="flex items-center justify-between">
        <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
            Latest Activities
        </h2>
        <div class="flex">
            <div
                class="flex items-center"
                x-data="{isInputActive:false}"
            >
                <label class="block">
                    <input
                        x-effect="isInputActive === true &amp;&amp; $nextTick(() => { $el.focus()});"
                        :class="isInputActive ? 'w-32 lg:w-48' : 'w-0'"
                        class="form-input bg-transparent px-1 text-right transition-all duration-100 placeholder:text-slate-500 dark:placeholder:text-navy-200 w-0"
                        placeholder="Search here..."
                        type="text"
                    >
                </label>
                <button
                    @click="isInputActive = !isInputActive"
                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4.5 w-4.5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                        ></path>
                    </svg>
                </button>
            </div>
            <div
                x-data="usePopper({placement:'bottom-end',offset:4})"
                @click.outside="isShowPopper &amp;&amp; (isShowPopper = false)"
                class="inline-flex"
            >
                <button
                    x-ref="popperRef"
                    @click="isShowPopper = !isShowPopper"
                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4.5 w-4.5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"
                        ></path>
                    </svg>
                </button>
                <div
                    x-ref="popperRoot"
                    class="popper-root"
                    :class="isShowPopper &amp;&amp; 'show'"
                    style="position: fixed; inset: 0px 0px auto auto; margin: 0px; transform: translate(-706.667px, 403.333px);"
                    data-popper-placement="bottom-end"
                >
                    <div
                        class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                        <ul>
                            <li>
                                <a
                                    href="#"
                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                >Action</a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                >Another Action</a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                >Something else</a>
                            </li>
                        </ul>
                        <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                        <ul>
                            <li>
                                <a
                                    href="#"
                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                >Separated Link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card px-4 pb-5 sm:px-5">
        <div class="my-3 flex h-8 items-center justify-between">
          <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
            Transactions
          </h2>
          <a href="#" class="border-b border-dotted border-current pb-0.5 text-xs+ font-medium text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70 dark:text-accent-light dark:hover:text-accent-light/70 dark:focus:text-accent-light/70">
            View All
          </a>
        </div>
        <div class="space-y-4">
            {include file="emerging-vip-member.tpl" image="images/avatar/avatar-5.jpg" username="Mallak183" date="August 25, 2023" bamount="$0.00"  pamount="$0.00"}

            {include file="emerging-vip-member.tpl" image="images/avatar/avatar-9.jpg" username="Mallak183" date="August 18, 2023" bamount="$2,800.00"  pamount="$7,200"}

            {include file="emerging-vip-member.tpl" image="images/avatar/avatar-12.jpg" username="Mallak183" date="August 10, 2023" bamount="$4,200.00"  pamount="$5,800"}

            {include file="emerging-vip-member.tpl" image="images/avatar/avatar-10.jpg" username="Mallak183" date="August 6, 2023" bamount="$1,500.00"  pamount="$8,500"}

            {include file="emerging-vip-member.tpl" image="images/avatar/avatar-2.jpg" username="Mallak183" date="July 31, 2023" bamount="$2,500.00"  pamount="$7,500"}


        

        </div>
      </div>


</div>
{/literal}


{include file="footer.tpl"}
