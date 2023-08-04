{include file="header.tpl" pagetitle="Joint Deposit List" pageurl="joint-deposit-list"}

<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
    <div class="card rounded-lg px-4 py-4 sm:px-5">
        <label class="inline-flex items-center space-x-2">
            <input
                class="form-radio is-basic h-5 w-5 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                name="h_id"
                type="radio"
                value="1"
                checked=""
            >
            <p>Investor</p>
        </label>
        <div class="mt-4 h-px  bg-slate-200 dark:bg-navy-500"></div>


        <div class="pt-2 mt-2">

            <div class="flex justify-between items-center">
                <p class="font-semibold text-slate-600">Rate </p>
                <p>1.50% / daily</p>
            </div>

            <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>


            <div class="flex justify-between items-center">
                <p class="font-semibold text-slate-600">Minimum -Maximum Inv. Amount</p>
                <p>$200.00 - $4999.00</p>
            </div>

            <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>


            <div class="flex justify-between items-center">
                <p class="font-semibold text-slate-600">R.O.I.</p>
                <p>1.50%</p>
            </div>
            <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>

            <div class="flex justify-between items-center">
                <p class="font-semibold text-slate-600">Duration</p>
                <p>7 DAYS</p>
            </div>

            <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>

            <div class="flex justify-between items-center">
                <p class="font-semibold text-slate-600">Referral Bonus</p>
                <p>10% on First Deposit</p>
            </div>

        </div>
    </div>
</div>
{include file="footer.tpl"}
