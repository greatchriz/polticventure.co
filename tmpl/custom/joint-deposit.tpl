{include file="header.tpl" pagetitle="Joint Deposit" pageurl="joint-deposit"}

{literal}

<div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
    <div class="col-span-12">
        <div class="card space-y-5 p-4 sm:p-5">
          <label class="block">
            <span class="font-medium text-slate-600 dark:text-navy-100">Select Author</span>
            <select class="mt-1.5 w-full tomselected ts-hidden-accessible"  placeholder="Select Author..." id="tomselect-1" tabindex="-1"><option value=""></option></select><div class="ts-wrapper mt-1.5 w-full single"><div class="ts-control"><input type="select-one" autocomplete="off" size="1" tabindex="0" role="combobox" aria-haspopup="listbox" aria-expanded="false" aria-controls="tomselect-1-ts-dropdown" id="tomselect-1-ts-control" placeholder="Select the author" aria-activedescendant="tomselect-1-opt-1"></div><div class="ts-dropdown single" style="display: none; visibility: visible;"><div role="listbox" tabindex="-1" class="ts-dropdown-content" id="tomselect-1-ts-dropdown"><div class="flex space-x-3 option active" data-selectable="" data-value="1" role="option" id="tomselect-1-opt-1" aria-selected="true">
                  <div class="avatar w-8 h-8">
                    <img class="rounded-full" src="images/avatar/avatar-20.jpg" alt="avatar">
                  </div>
                  <div class="flex flex-col">
                    <span> John Doe</span>
                    <span class="text-xs opacity-80"> Web designer</span>
                  </div>
                </div><div class="flex space-x-3 option" data-selectable="" data-value="2" role="option" id="tomselect-1-opt-2">
                  <div class="avatar w-8 h-8">
                    <img class="rounded-full" src="images/avatar/avatar-11.jpg" alt="avatar">
                  </div>
                  <div class="flex flex-col">
                    <span> Emilie Watson</span>
                    <span class="text-xs opacity-80"> Developer</span>
                  </div>
                </div><div class="flex space-x-3 option" data-selectable="" data-value="3" role="option" id="tomselect-1-opt-3">
                  <div class="avatar w-8 h-8">
                    <img class="rounded-full" src="images/avatar/avatar-7.jpg" alt="avatar">
                  </div>
                  <div class="flex flex-col">
                    <span> Nancy Clarke</span>
                    <span class="text-xs opacity-80"> Software Engineer</span>
                  </div>
                </div></div></div></div>
          </label>
          <label class="block">
            <span class="font-medium text-slate-600 dark:text-navy-100">Category</span>
            <select class="mt-1.5 w-full tomselected ts-hidden-accessible"  id="tomselect-2" tabindex="-1">
              <option value="">Select the category</option>
              <option value="digital">Digital</option>
              <option value="technology">Technology</option>
              <option value="home">Home</option>
              <option value="accessories">Accessories</option>
            </select><div class="ts-wrapper mt-1.5 w-full single"><div class="ts-control"><input type="select-one" autocomplete="off" size="1" tabindex="0" role="combobox" aria-haspopup="listbox" aria-expanded="false" aria-controls="tomselect-2-ts-dropdown" id="tomselect-2-ts-control" placeholder="Select the category" aria-activedescendant="tomselect-2-opt-4"></div><div class="ts-dropdown single" style="display: none; visibility: visible;"><div role="listbox" tabindex="-1" class="ts-dropdown-content" id="tomselect-2-ts-dropdown"><div data-selectable="" data-value="accessories" class="option active" role="option" id="tomselect-2-opt-4" aria-selected="true">Accessories</div><div data-selectable="" data-value="digital" class="option" role="option" id="tomselect-2-opt-1">Digital</div><div data-selectable="" data-value="home" class="option" role="option" id="tomselect-2-opt-3">Home</div><div data-selectable="" data-value="technology" class="option" role="option" id="tomselect-2-opt-2">Technology</div></div></div></div>
          </label>
          <label class="block">
            <span class="font-medium text-slate-600 dark:text-navy-100">Tags</span>
            <input class="mt-1.5 w-full tomselected ts-hidden-accessible" placeholder="Enter Tags"  id="tomselect-3" tabindex="-1"><div class="ts-wrapper mt-1.5 w-full multi has-options"><div class="ts-control"><input type="text" autocomplete="off" size="1" tabindex="0" role="combobox" aria-haspopup="listbox" aria-expanded="false" aria-controls="tomselect-3-ts-dropdown" id="tomselect-3-ts-control" placeholder="Enter Tags"></div><div class="ts-dropdown multi" style="display: none;"><div role="listbox" tabindex="-1" class="ts-dropdown-content" id="tomselect-3-ts-dropdown"></div></div></div>
          </label>

          <label>
            <span class="font-medium text-slate-600 dark:text-navy-100">Publish Date</span>
            <span class="relative mt-1.5 flex">
              <input  class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent flatpickr-input" placeholder="Choose date..." type="text" readonly="readonly">
              <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
              </span>
            </span>
          </label>
        </div>
      </div>
</div>


{include file="footer.tpl"}
