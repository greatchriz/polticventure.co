
   
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
                                  Account Suspension Notice
                                </h2>
                                <p class="mt-2">
                                  We regret to inform you that your account has been temporarily suspended due to a violation of our terms and conditions. Our investigation has revealed that your account was migrated to the VIP Investor status by unauthorized means, specifically through the assistance of our customer support agent, Brian.

                                  The VIP Investor status is reserved for users who meet specific criteria and fulfill certain requirements, which are in place to maintain fairness and transparency within our platform. Unfortunately, it has come to our attention that your account was upgraded without meeting these prerequisites.
                                  
                                  This unauthorized action undermines the integrity of our platform and goes against our commitment to maintaining a level playing field for all users. We take such matters seriously and have initiated an investigation into the incident. During this time, your account will remain temporarily suspended.
                                  
                                  Please note that the suspension is not a punitive measure against you, but rather a necessary step to ensure the integrity of our services. We apologize for any inconvenience this may cause you.
                                  
                                  Our team is actively working to resolve this matter and investigate the involvement of our customer support agent, Brian. Rest assured, appropriate actions will be taken to address this situation and prevent similar incidents from occurring in the future.
                                  
                                  We kindly request your patience and understanding as we work through this issue. If you have any further questions or concerns, please do not hesitate to contact our support team at <a href="mailto:polticventure@polticventure.co">Support@polticventure.co</a>.
                                  
                                  Thank you for your cooperation.
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