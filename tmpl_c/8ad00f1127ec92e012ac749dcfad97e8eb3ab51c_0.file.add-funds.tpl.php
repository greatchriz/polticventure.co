<?php /* Smarty version 3.1.27, created on 2023-08-08 23:34:14
         compiled from "/home/dexfpheh/polticventure.co/tmpl/custom/add-funds.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:56801652064d2d0f6c1c158_97602477%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ad00f1127ec92e012ac749dcfad97e8eb3ab51c' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/custom/add-funds.tpl',
      1 => 1691535957,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56801652064d2d0f6c1c158_97602477',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64d2d0f6c30a09_06920470',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64d2d0f6c30a09_06920470')) {
function content_64d2d0f6c30a09_06920470 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '56801652064d2d0f6c1c158_97602477';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagetitle'=>"Add Funds",'pageurl'=>"add-funds"), 0);
?>







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
                                <svg width="32px" height="32px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="none" fill-rule="evenodd"> <circle cx="16" cy="16" r="16" fill="#26A17B"></circle> <path fill="#FFF" d="M17.922 17.383v-.002c-.11.008-.677.042-1.942.042-1.01 0-1.721-.03-1.971-.042v.003c-3.888-.171-6.79-.848-6.79-1.658 0-.809 2.902-1.486 6.79-1.66v2.644c.254.018.982.061 1.988.061 1.207 0 1.812-.05 1.925-.06v-2.643c3.88.173 6.775.85 6.775 1.658 0 .81-2.895 1.485-6.775 1.657m0-3.59v-2.366h5.414V7.819H8.595v3.608h5.414v2.365c-4.4.202-7.709 1.074-7.709 2.118 0 1.044 3.309 1.915 7.709 2.118v7.582h3.913v-7.584c4.393-.202 7.694-1.073 7.694-2.116 0-1.043-3.301-1.914-7.694-2.117"></path> </g> </g></svg>
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
                            name="transaction_hash"
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
                                name="amount"
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


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>