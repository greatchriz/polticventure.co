{include file="header.tpl" pagetitle="Account Upgrade" pageurl="upgrade"}



{literal}

    <form
        method=post
        action="contact.php"
    >
        <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">

            <div class="col-span-12">
                <div class="card space-y-5 p-4 sm:p-5">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Investor Information
                    </h2>
                    <label class="block">
                        <span>Your Full Name:</span>
                        <input class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Your Full Name" type="text" name="fullname">
                    </label>

                    <label class="relative flex">
                      

                        <input
                            x-init="$el._x_flatpickr = flatpickr($el)"
                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="Date of birth"
                            type="date"
                            name="main_date"
                            
                        />
                        <span
                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 transition-colors duration-200"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.5"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                                />
                            </svg>
                        </span>
                    </label>
                    <label class="block">
                        <span class="">Image of the front part of Your Driver's licence:</span>

                        <div class="mt-1.5 filepond fp-bordered">
                            <input type="file"  x-init="$el._x_filepond = FilePond.create($el)" multiple />
                        </div>
                    </label>

                    <label class="block">
                        <span class="">Image of the back part of Your Driver's licence:</span>

                        <div class="mt-1.5 filepond fp-bordered">
                            <input type="file"  x-init="$el._x_filepond = FilePond.create($el)" multiple />
                        </div>
                    </label>


                </div>
            </div>
        </div>

        <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">

            <div class="col-span-12">
                <div class="card space-y-5 p-4 sm:p-5">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Payment Information
                    </h2>

                    <div class="alert flex items-center justify-between space-x-2 rounded-lg border border-slate-200 p-3 dark:border-navy-600">
                        <div class="flex items-center space-x-3">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-slate-300">
                                <img src="images/svg/userdetails/referral.svg" alt="Referral Link">
                            </div>
                            <div>
                                <p id="clipboardContent1" class="font-medium text-slate-700 dark:text-navy-100">
                                https://polticventure.co/?ref=a
                                </p>
                                <p class="mt-0.5 text-xs text-success line-clamp-1">
                                    Referral Link
                                </p>
                            </div>
                        </div>
                        
                            <button class="btn h-6 shrink-0 rounded bg-primary px-2 text-xs text-white active:bg-primary" @click="$clipboard({
                            content:document.querySelector('#clipboardContent1').innerText,
                            success:()=>$notification({text:'Text Copied',variant:'success'}),
                            error:()=>$notification({text:'Error',variant:'error'})
                        })">
                                Copy
                            </button>
                        
                
                    </div>

                </div>
            </div>
        </div>

        <button
        type="submit"
        class="btn bg-gradient-to-br from-purple-500 to-indigo-600 font-medium text-white my-4"
    >
        Submit
    </button>
</form>
{/literal}

{include file="footer.tpl"}