{include file="header.tpl" pagetitle="Add Funds" pageurl="add-funds"}



{literal}


    <form
        method="post"
        action="addfunds.php"
    >
        <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">

            <div class="col-span-12">
                <div class="card space-y-5 p-4 sm:p-5">

                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Wallet Address
                    </h2>

                    <div
                        class="alert flex items-center justify-between space-x-2 rounded-lg border border-slate-200 p-3 dark:border-navy-600">
                        <div class="flex items-center space-x-3">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-slate-300">
                                <img
                                    src="images/svg/userdetails/referral.svg"
                                    alt="Usdt"
                                >
                            </div>
                            <div>
                                <p
                                    id="clipboardContent1"
                                    class="font-medium text-slate-700 dark:text-navy-100"
                                >
                                    TDWAYWqsYpfxdxFUFAiC5oDBPhgDsFDKGF
                                </p>
                                <p class="mt-0.5 text-xs text-success line-clamp-1">
                                    USDT(TRC20)
                                </p>
                            </div>
                        </div>

                        <button
                        type="button"
                            class="btn h-6 shrink-0 rounded bg-primary px-2 text-xs text-white active:bg-primary"
                            @click="$clipboard({
        content:document.querySelector('#clipboardContent1').innerText,
        success:()=>$notification({text:'Text Copied',variant:'success'}),
        error:()=>$notification({text:'Error',variant:'error'})
    })"
                        >
                            Copy
                        </button>


                    </div>
                    <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>
                    <h3 class="text-xl font-semibold">
                        Copy the wallet address above and make the transfer of how much you want to transfer to your
                        account, then copy the transaction hash and proceed
                    </h3>




                </div>
            </div>
        </div>

        <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6 mt-12">

            <div class="col-span-12">
                <div class="card space-y-5 p-4 sm:p-5">

                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Transaction Details
                    </h2>
                    <label class="block">
                        <span>Transaction Hash:</span>
                        <input
                            class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="Transaction Hash"
                            type="text"
                            name="main_username"
                        >
                    </label>

                    <div>
                        <span>Amount</span>
                        <label class="mt-1 flex -space-x-px">
                            <div
                                class="flex items-center justify-center rounded-l-lg border border-slate-300 bg-slate-150 px-3.5 font-inter text-slate-800 dark:border-navy-450 dark:bg-navy-500 dark:text-navy-100">
                                <span>$</span>
                            </div>
                            <input
                                class="form-input w-full border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                placeholder="Enter Amount"
                                type="number"
                                name="main_amount"
                            >
                            <div
                                class="flex items-center justify-center rounded-r-lg border border-slate-300 bg-slate-150 px-3.5 font-inter text-slate-800 dark:border-navy-450 dark:bg-navy-500 dark:text-navy-100">
                                <span>.00</span>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <button
            type="submit"
            class="btn bg-gradient-to-br from-purple-500 to-indigo-600 font-medium text-white my-12"
        >
            Add Funds
        </button>
    </form>
{/literal}

{include file="footer.tpl"}
