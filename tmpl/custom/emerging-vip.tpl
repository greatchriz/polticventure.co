{include file="header.tpl" pagetitle="Emerging Vip" pageurl="emerging-vip"}
<div class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
    <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
        VIP PLAN DEPOSIT Project
    </h2>
    <div class="col-span-12">
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">

            <div class="grid grid-cols-2 gap-4 sm:order-first sm:grid-cols-4 sm:gap-5 lg:gap-6">

               {include file="cards/team_stat.tpl" value="$50,000.00" title="Target Amount"}

               {include file="cards/team_stat.tpl" value="$29,000" title="Amount Paid"}


               {include file="cards/team_stat.tpl" value="9 Members" title="Total Members"}


               {include file="cards/team_stat.tpl" value="Mallak183" title="Project Leader"}

               {include file="cards/team_stat.tpl" value="24 Sep, 2023" title="Project Due Date"}

               {* {include file="cards/team_stat.tpl" value="" title="24 Sep, 2023"} *}

            </div>

        </div>
    </div>
</div>
<div class="mt-4 sm:mt-5 lg:mt-6">
    <div class="flex items-center justify-between">
        <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
            Employees &amp; Personnel
        </h2>
        {literal}
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
                        style="position: fixed; inset: 0px 0px auto auto; margin: 0px; transform: translate(-23.3333px, 335.556px);"
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
        {/literal}
    </div>
    <div class="mt-3 grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6">
        <div class="card space-y-9 p-4 sm:p-5">
            <div class="flex justify-between">
                <div class="flex items-center space-x-3">
                    <div class="avatar">
                        <img
                            class="mask is-squircle"
                            src="images/avatar/avatar-5.jpg"
                            alt="image"
                        >
                    </div>
                    <div>
                        <p class="font-medium text-slate-700 dark:text-navy-100">
                            Travis Fuller
                        </p>
                        <p class="text-xs text-slate-400 dark:text-navy-300">
                            Employee
                        </p>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <div class="relative cursor-pointer">
                        <button
                            class="btn h-7 w-7 bg-primary/10 p-0 text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25"
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
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"
                                ></path>
                            </svg>
                        </button>
                        <div
                            class="absolute top-0 right-0 -m-1 flex h-4 min-w-[1rem] items-center justify-center rounded-full bg-primary px-1 text-tiny font-medium leading-none text-white dark:bg-accent">
                            2
                        </div>
                    </div>
                    <div class="relative cursor-pointer">
                        <button
                            class="btn h-7 w-7 bg-primary/10 p-0 text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25"
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
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                ></path>
                            </svg>
                        </button>
                        <div
                            class="absolute top-0 right-0 -m-1 flex h-4 min-w-[1rem] items-center justify-center rounded-full bg-primary px-1 text-tiny font-medium leading-none text-white dark:bg-accent">
                            4
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between space-x-2">
                <div>
                    <p class="text-xs+">Sells</p>
                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                        2 348
                    </p>
                </div>
                <div>
                    <p class="text-xs+">Target</p>
                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                        3 000
                    </p>
                </div>
                <div>
                    <p class="text-xs+">Clients</p>
                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                        78
                    </p>
                </div>
            </div>
            <div class="grow">
                <div class="flex w-full space-x-1">
                    <div
                        x-tooltip="'Phone Calls'"
                        class="h-2 w-4/12 rounded-full bg-primary dark:bg-accent"
                    ></div>
                    <div
                        x-tooltip="'Chats Messages'"
                        class="h-2 w-3/12 rounded-full bg-success"
                    ></div>
                    <div
                        x-tooltip="'Emails'"
                        class="h-2 w-5/12 rounded-full bg-info"
                    ></div>
                </div>
                <div class="mt-2 flex flex-wrap">
                    <div class="mr-4 mb-1 inline-flex items-center space-x-2 font-inter">
                        <div class="h-2 w-2 rounded-full bg-primary dark:bg-accent"></div>
                        <div class="flex space-x-1 text-xs leading-6">
                            <span class="font-medium text-slate-700 dark:text-navy-100">Calls</span>
                            <span>33%</span>
                        </div>
                    </div>
                    <div class="mr-4 mb-1 inline-flex items-center space-x-2 font-inter">
                        <div class="h-2 w-2 rounded-full bg-success"></div>
                        <div class="flex space-x-1 text-xs">
                            <span class="font-medium text-slate-700 dark:text-navy-100">Chat Messages</span>
                            <span>17%</span>
                        </div>
                    </div>
                    <div class="mb-1 inline-flex items-center space-x-2 font-inter">
                        <div class="h-2 w-2 rounded-full bg-info"></div>
                        <div class="flex space-x-1 text-xs">
                            <span class="font-medium text-slate-700 dark:text-navy-100">Emails</span>
                            <span>50%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="flex space-x-2">
                    <img
                        x-tooltip="'Award Level 1'"
                        class="h-6 w-6"
                        src="images/awards/award-19.svg"
                        alt="avatar"
                    >
                    <img
                        x-tooltip="'Award Level 2'"
                        class="h-6 w-6"
                        src="images/awards/award-2.svg"
                        alt="avatar"
                    >
                    <img
                        x-tooltip="'Award Level 3'"
                        class="h-6 w-6"
                        src="images/awards/award-5.svg"
                        alt="avatar"
                    >
                </div>
                <button
                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                        ></path>
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                        ></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="card space-y-9 p-4 sm:p-5">
            <div class="flex justify-between">
                <div class="flex items-center space-x-3">
                    <div class="avatar">
                        <img
                            class="mask is-squircle"
                            src="images/avatar/avatar-18.jpg"
                            alt="image"
                        >
                    </div>
                    <div>
                        <p class="font-medium text-slate-700 dark:text-navy-100">
                            Konnor Guzman
                        </p>
                        <p class="text-xs text-slate-400 dark:text-navy-300">
                            Employee
                        </p>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <div class="relative cursor-pointer">
                        <button
                            class="btn h-7 w-7 bg-primary/10 p-0 text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25"
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
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"
                                ></path>
                            </svg>
                        </button>
                    </div>
                    <div class="relative cursor-pointer">
                        <button
                            class="btn h-7 w-7 bg-primary/10 p-0 text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25"
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
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                ></path>
                            </svg>
                        </button>
                        <div
                            class="absolute top-0 right-0 -m-1 flex h-4 min-w-[1rem] items-center justify-center rounded-full bg-primary px-1 text-tiny font-medium leading-none text-white dark:bg-accent">
                            3
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between space-x-2">
                <div>
                    <p class="text-xs+">Sells</p>
                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                        1 451
                    </p>
                </div>
                <div>
                    <p class="text-xs+">Target</p>
                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                        2 000
                    </p>
                </div>
                <div>
                    <p class="text-xs+">Clients</p>
                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                        54
                    </p>
                </div>
            </div>
            <div class="grow">
                <div class="flex w-full space-x-1">
                    <div
                        x-tooltip="'Phone Calls'"
                        class="h-2 w-3/12 rounded-full bg-primary dark:bg-accent"
                    ></div>
                    <div
                        x-tooltip="'Chats Messages'"
                        class="h-2 w-7/12 rounded-full bg-success"
                    ></div>
                    <div
                        x-tooltip="'Emails'"
                        class="h-2 w-2/12 rounded-full bg-info"
                    ></div>
                </div>
                <div class="mt-2 flex flex-wrap">
                    <div class="mr-4 mb-1 inline-flex items-center space-x-2 font-inter">
                        <div class="h-2 w-2 rounded-full bg-primary dark:bg-accent"></div>
                        <div class="flex space-x-1 text-xs leading-6">
                            <span class="font-medium text-slate-700 dark:text-navy-100">Calls</span>
                            <span>24%</span>
                        </div>
                    </div>
                    <div class="mr-4 mb-1 inline-flex items-center space-x-2 font-inter">
                        <div class="h-2 w-2 rounded-full bg-success"></div>
                        <div class="flex space-x-1 text-xs">
                            <span class="font-medium text-slate-700 dark:text-navy-100">Chat Messages</span>
                            <span>56%</span>
                        </div>
                    </div>
                    <div class="mb-1 inline-flex items-center space-x-2 font-inter">
                        <div class="h-2 w-2 rounded-full bg-info"></div>
                        <div class="flex space-x-1 text-xs">
                            <span class="font-medium text-slate-700 dark:text-navy-100">Emails</span>
                            <span>20%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="flex space-x-2">
                    <img
                        x-tooltip="'Award Level 1'"
                        class="h-6 w-6"
                        src="images/awards/award-1.svg"
                        alt="avatar"
                    >
                    <img
                        x-tooltip="'Award Level 2'"
                        class="h-6 w-6"
                        src="images/awards/award-6.svg"
                        alt="avatar"
                    >
                    <img
                        x-tooltip="'Award Level 3'"
                        class="h-6 w-6"
                        src="images/awards/award-9.svg"
                        alt="avatar"
                    >
                </div>
                <button
                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                        ></path>
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                        ></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="card space-y-9 p-4 sm:p-5">
            <div class="flex justify-between">
                <div class="flex items-center space-x-3">
                    <div class="avatar">
                        <img
                            class="mask is-squircle"
                            src="images/avatar/avatar-6.jpg"
                            alt="image"
                        >
                    </div>
                    <div>
                        <p class="font-medium text-slate-700 dark:text-navy-100">
                            Alfredo Elliott
                        </p>
                        <p class="text-xs text-slate-400 dark:text-navy-300">
                            Contractors
                        </p>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <div class="relative cursor-pointer">
                        <button
                            class="btn h-7 w-7 bg-primary/10 p-0 text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25"
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
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"
                                ></path>
                            </svg>
                        </button>
                        <div
                            class="absolute top-0 right-0 -m-1 flex h-4 min-w-[1rem] items-center justify-center rounded-full bg-primary px-1 text-tiny font-medium leading-none text-white dark:bg-accent">
                            4
                        </div>
                    </div>
                    <div class="relative cursor-pointer">
                        <button
                            class="btn h-7 w-7 bg-primary/10 p-0 text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25"
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
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                ></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex justify-between space-x-2">
                <div>
                    <p class="text-xs+">Sells</p>
                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                        423
                    </p>
                </div>
                <div>
                    <p class="text-xs+">Target</p>
                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                        500
                    </p>
                </div>
                <div>
                    <p class="text-xs+">Clients</p>
                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                        16
                    </p>
                </div>
            </div>
            <div class="grow">
                <div class="flex w-full space-x-1">
                    <div
                        x-tooltip="'Phone Calls'"
                        class="h-2 w-8/12 rounded-full bg-primary dark:bg-accent"
                    ></div>
                    <div
                        x-tooltip="'Chats Messages'"
                        class="h-2 w-2/12 rounded-full bg-success"
                    ></div>
                    <div
                        x-tooltip="'Emails'"
                        class="h-2 w-2/12 rounded-full bg-info"
                    ></div>
                </div>
                <div class="mt-2 flex flex-wrap">
                    <div class="mr-4 mb-1 inline-flex items-center space-x-2 font-inter">
                        <div class="h-2 w-2 rounded-full bg-primary dark:bg-accent"></div>
                        <div class="flex space-x-1 text-xs leading-6">
                            <span class="font-medium text-slate-700 dark:text-navy-100">Calls</span>
                            <span>60%</span>
                        </div>
                    </div>
                    <div class="mr-4 mb-1 inline-flex items-center space-x-2 font-inter">
                        <div class="h-2 w-2 rounded-full bg-success"></div>
                        <div class="flex space-x-1 text-xs">
                            <span class="font-medium text-slate-700 dark:text-navy-100">Chat Messages</span>
                            <span>23%</span>
                        </div>
                    </div>
                    <div class="mb-1 inline-flex items-center space-x-2 font-inter">
                        <div class="h-2 w-2 rounded-full bg-info"></div>
                        <div class="flex space-x-1 text-xs">
                            <span class="font-medium text-slate-700 dark:text-navy-100">Emails</span>
                            <span>17%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="flex space-x-2">
                    <img
                        x-tooltip="'Award Level 2'"
                        class="h-6 w-6"
                        src="images/awards/award-14.svg"
                        alt="avatar"
                    >
                    <img
                        x-tooltip="'Award Level 3'"
                        class="h-6 w-6"
                        src="images/awards/award-13.svg"
                        alt="avatar"
                    >
                </div>
                <button
                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                        ></path>
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                        ></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="card space-y-9 p-4 sm:p-5">
            <div class="flex justify-between">
                <div class="flex items-center space-x-3">
                    <div class="avatar">
                        <img
                            class="mask is-squircle"
                            src="images/avatar/avatar-11.jpg"
                            alt="image"
                        >
                    </div>
                    <div>
                        <p class="font-medium text-slate-700 dark:text-navy-100">
                            Samantha Shelton
                        </p>
                        <p class="text-xs text-slate-400 dark:text-navy-300">
                            Contractors
                        </p>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <div class="relative cursor-pointer">
                        <button
                            class="btn h-7 w-7 bg-primary/10 p-0 text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25"
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
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"
                                ></path>
                            </svg>
                        </button>
                        <div
                            class="absolute top-0 right-0 -m-1 flex h-4 min-w-[1rem] items-center justify-center rounded-full bg-primary px-1 text-tiny font-medium leading-none text-white dark:bg-accent">
                            2
                        </div>
                    </div>
                    <div class="relative cursor-pointer">
                        <button
                            class="btn h-7 w-7 bg-primary/10 p-0 text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25"
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
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                ></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex justify-between space-x-2">
                <div>
                    <p class="text-xs+">Sells</p>
                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                        579
                    </p>
                </div>
                <div>
                    <p class="text-xs+">Target</p>
                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                        800
                    </p>
                </div>
                <div>
                    <p class="text-xs+">Clients</p>
                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                        24
                    </p>
                </div>
            </div>
            <div class="grow">
                <div class="flex w-full space-x-1">
                    <div
                        x-tooltip="'Phone Calls'"
                        class="h-2 w-4/12 rounded-full bg-primary dark:bg-accent"
                    ></div>
                    <div
                        x-tooltip="'Chats Messages'"
                        class="h-2 w-4/12 rounded-full bg-success"
                    ></div>
                    <div
                        x-tooltip="'Emails'"
                        class="h-2 w-4/12 rounded-full bg-info"
                    ></div>
                </div>
                <div class="mt-2 flex flex-wrap">
                    <div class="mr-4 mb-1 inline-flex items-center space-x-2 font-inter">
                        <div class="h-2 w-2 rounded-full bg-primary dark:bg-accent"></div>
                        <div class="flex space-x-1 text-xs leading-6">
                            <span class="font-medium text-slate-700 dark:text-navy-100">Calls</span>
                            <span>30%</span>
                        </div>
                    </div>
                    <div class="mr-4 mb-1 inline-flex items-center space-x-2 font-inter">
                        <div class="h-2 w-2 rounded-full bg-success"></div>
                        <div class="flex space-x-1 text-xs">
                            <span class="font-medium text-slate-700 dark:text-navy-100">Chat Messages</span>
                            <span>36%</span>
                        </div>
                    </div>
                    <div class="mb-1 inline-flex items-center space-x-2 font-inter">
                        <div class="h-2 w-2 rounded-full bg-info"></div>
                        <div class="flex space-x-1 text-xs">
                            <span class="font-medium text-slate-700 dark:text-navy-100">Emails</span>
                            <span>34%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="flex space-x-2">
                    <img
                        x-tooltip="'Award Level 2'"
                        class="h-6 w-6"
                        src="images/awards/award-15.svg"
                        alt="avatar"
                    >
                    <img
                        x-tooltip="'Award Level 3'"
                        class="h-6 w-6"
                        src="images/awards/award-13.svg"
                        alt="avatar"
                    >
                </div>
                <button
                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                        ></path>
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                        ></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="card space-y-9 p-4 sm:p-5">
            <div class="flex justify-between">
                <div class="flex items-center space-x-3">
                    <div class="avatar">
                        <img
                            class="mask is-squircle"
                            src="images/avatar/avatar-19.jpg"
                            alt="image"
                        >
                    </div>
                    <div>
                        <p class="font-medium text-slate-700 dark:text-navy-100">
                            Derrick Simmons
                        </p>
                        <p class="text-xs text-slate-400 dark:text-navy-300">
                            Employee
                        </p>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <div class="relative cursor-pointer">
                        <button
                            class="btn h-7 w-7 bg-primary/10 p-0 text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25"
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
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"
                                ></path>
                            </svg>
                        </button>
                    </div>
                    <div class="relative cursor-pointer">
                        <button
                            class="btn h-7 w-7 bg-primary/10 p-0 text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25"
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
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                ></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex justify-between space-x-2">
                <div>
                    <p class="text-xs+">Sells</p>
                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                        6 541
                    </p>
                </div>
                <div>
                    <p class="text-xs+">Target</p>
                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                        8 000
                    </p>
                </div>
                <div>
                    <p class="text-xs+">Clients</p>
                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                        145
                    </p>
                </div>
            </div>
            <div class="grow">
                <div class="flex w-full space-x-1">
                    <div
                        x-tooltip="'Phone Calls'"
                        class="h-2 w-6/12 rounded-full bg-primary dark:bg-accent"
                    ></div>
                    <div
                        x-tooltip="'Chats Messages'"
                        class="h-2 w-4/12 rounded-full bg-success"
                    ></div>
                    <div
                        x-tooltip="'Emails'"
                        class="h-2 w-2/12 rounded-full bg-info"
                    ></div>
                </div>
                <div class="mt-2 flex flex-wrap">
                    <div class="mr-4 mb-1 inline-flex items-center space-x-2 font-inter">
                        <div class="h-2 w-2 rounded-full bg-primary dark:bg-accent"></div>
                        <div class="flex space-x-1 text-xs leading-6">
                            <span class="font-medium text-slate-700 dark:text-navy-100">Calls</span>
                            <span>55%</span>
                        </div>
                    </div>
                    <div class="mr-4 mb-1 inline-flex items-center space-x-2 font-inter">
                        <div class="h-2 w-2 rounded-full bg-success"></div>
                        <div class="flex space-x-1 text-xs">
                            <span class="font-medium text-slate-700 dark:text-navy-100">Chat Messages</span>
                            <span>30%</span>
                        </div>
                    </div>
                    <div class="mb-1 inline-flex items-center space-x-2 font-inter">
                        <div class="h-2 w-2 rounded-full bg-info"></div>
                        <div class="flex space-x-1 text-xs">
                            <span class="font-medium text-slate-700 dark:text-navy-100">Emails</span>
                            <span>15%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="flex space-x-2">
                    <img
                        x-tooltip="'Award Level 2'"
                        class="h-6 w-6"
                        src="images/awards/award-15.svg"
                        alt="avatar"
                    >
                    <img
                        x-tooltip="'Award Level 3'"
                        class="h-6 w-6"
                        src="images/awards/award-5.svg"
                        alt="avatar"
                    >
                    <img
                        x-tooltip="'Award Level 3'"
                        class="h-6 w-6"
                        src="images/awards/award-25.svg"
                        alt="avatar"
                    >
                </div>
                <button
                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                        ></path>
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                        ></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="card space-y-9 p-4 sm:p-5">
            <div class="flex justify-between">
                <div class="flex items-center space-x-3">
                    <div class="avatar">
                        <img
                            class="mask is-squircle"
                            src="images/avatar/avatar-7.jpg"
                            alt="image"
                        >
                    </div>
                    <div>
                        <p class="font-medium text-slate-700 dark:text-navy-100">
                            Katrina West
                        </p>
                        <p class="text-xs text-slate-400 dark:text-navy-300">
                            Employee
                        </p>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <div class="relative cursor-pointer">
                        <button
                            class="btn h-7 w-7 bg-primary/10 p-0 text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25"
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
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"
                                ></path>
                            </svg>
                        </button>
                        <div
                            class="absolute top-0 right-0 -m-1 flex h-4 min-w-[1rem] items-center justify-center rounded-full bg-primary px-1 text-tiny font-medium leading-none text-white dark:bg-accent">
                            1
                        </div>
                    </div>
                    <div class="relative cursor-pointer">
                        <button
                            class="btn h-7 w-7 bg-primary/10 p-0 text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25"
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
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                ></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex justify-between space-x-2">
                <div>
                    <p class="text-xs+">Sells</p>
                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                        3 481
                    </p>
                </div>
                <div>
                    <p class="text-xs+">Target</p>
                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                        5 000
                    </p>
                </div>
                <div>
                    <p class="text-xs+">Clients</p>
                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                        96
                    </p>
                </div>
            </div>

            <div class="grow">
                <div class="flex w-full space-x-1">
                    <div
                        x-tooltip="'Phone Calls'"
                        class="h-2 w-1/12 rounded-full bg-primary dark:bg-accent"
                    ></div>
                    <div
                        x-tooltip="'Chats Messages'"
                        class="h-2 w-5/12 rounded-full bg-success"
                    ></div>
                    <div
                        x-tooltip="'Emails'"
                        class="h-2 w-6/12 rounded-full bg-info"
                    ></div>
                </div>
                <div class="mt-2 flex flex-wrap">
                    <div class="mr-4 mb-1 inline-flex items-center space-x-2 font-inter">
                        <div class="h-2 w-2 rounded-full bg-primary dark:bg-accent"></div>
                        <div class="flex space-x-1 text-xs leading-6">
                            <span class="font-medium text-slate-700 dark:text-navy-100">Calls</span>
                            <span>9%</span>
                        </div>
                    </div>
                    <div class="mr-4 mb-1 inline-flex items-center space-x-2 font-inter">
                        <div class="h-2 w-2 rounded-full bg-success"></div>
                        <div class="flex space-x-1 text-xs">
                            <span class="font-medium text-slate-700 dark:text-navy-100">Chat Messages</span>
                            <span>41%</span>
                        </div>
                    </div>
                    <div class="mb-1 inline-flex items-center space-x-2 font-inter">
                        <div class="h-2 w-2 rounded-full bg-info"></div>
                        <div class="flex space-x-1 text-xs">
                            <span class="font-medium text-slate-700 dark:text-navy-100">Emails</span>
                            <span>50%</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-between">
                <div class="flex space-x-2">
                    <img
                        x-tooltip="'Award Level 2'"
                        class="h-6 w-6"
                        src="images/awards/award-1.svg"
                        alt="avatar"
                    >
                    <img
                        x-tooltip="'Award Level 3'"
                        class="h-6 w-6"
                        src="images/awards/award-24.svg"
                        alt="avatar"
                    >
                    <img
                        x-tooltip="'Award Level 3'"
                        class="h-6 w-6"
                        src="images/awards/award-30.svg"
                        alt="avatar"
                    >
                </div>
                <button
                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                        ></path>
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                        ></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
{include file="footer.tpl"}
