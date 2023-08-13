
   
    {include file="header.tpl"}
    {literal}
       
           
                      <div class="mt-5" x-data="{showModal:true}">
                 
                        <template x-teleport="#x-teleport-target">
                          <div
                            class="fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5"
                            x-show="showModal"
                            role="dialog"
                            @keydown.window.escape="showModal = false"
                          >
                            <div
                              class="absolute inset-0 bg-slate-900/60 transition-opacity duration-300"
                              @click="showModal = false"
                              x-show="showModal"
                              x-transition:enter="ease-out"
                              x-transition:enter-start="opacity-0"
                              x-transition:enter-end="opacity-100"
                              x-transition:leave="ease-in"
                              x-transition:leave-start="opacity-100"
                              x-transition:leave-end="opacity-0"
                            ></div>
                            <div
                              class="scrollbar-sm relative flex max-w-lg flex-col overflow-y-auto rounded-lg bg-white px-4 py-10 text-center transition-opacity duration-300 dark:bg-navy-700 sm:px-5"
                              x-show="showModal"
                              x-transition:enter="ease-out"
                              x-transition:enter-start="opacity-0"
                              x-transition:enter-end="opacity-100"
                              x-transition:leave="ease-in"
                              x-transition:leave-start="opacity-100"
                              x-transition:leave-end="opacity-0"
                            >
                            <svg width="64px" height="64px" viewBox="0 0 24 24" class="mx-auto inline h-28 w-28 shrink-0 text-danger" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.624"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#FF5724" stroke-width="1.656"></circle> <path d="M12 7V13" stroke="#FF5724" stroke-width="1.656" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#FF5724"></circle> </g></svg>
        
                              <div class="mt-4">
                                <h2 class="text-2xl text-slate-700 dark:text-navy-100">
                                  Success Message
                                </h2>
                                <p class="mt-2">
                                  Lorem ipsum dolor sit amet, consectetur adipisicing
                                  elit. Consequuntur dignissimos soluta totam?
                                </p>
                                <a href="/?a=account"
                                  class="btn mt-6 bg-error font-medium text-white hover:bg-error-focus focus:bg-error-focus active:bg-error-focus/90"
                                >
                                  Close
                              </a>
                              </div>
                            </div>
                          </div>
                        </template>
                      </div>
                 
                {/literal}
            {include file="footer.tpl"}