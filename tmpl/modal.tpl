
   
    {include file="header.tpl"}
    {literal}
                <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
                  <!-- Basic Modal -->
                  <div class="card px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                      <h2
                        class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
                      >
                        Basic Modal
                      </h2>
                      <label class="inline-flex items-center space-x-2">
                        <span class="text-xs text-slate-400 dark:text-navy-300"
                          >Code</span
                        >
                        <input
                          @change="helpers.toggleCode"
                          class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                          type="checkbox"
                        />
                      </label>
                    </div>
                    <div>
                      <p class="max-w-xl">
                        The Modal component inform users about a specific task and may
                        contain critical information, require decisions, or involve
                        multiple tasks.
                      </p>
                      <div class="mt-5" x-data="{showModal:true}">
                        <button
                          @click="showModal = true"
                          class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                        >
                          Basic Modal
                        </button>
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
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="mx-auto inline h-28 w-28 shrink-0 text-success"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                              >
                                <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                />
                              </svg>
        
                              <div class="mt-4">
                                <h2 class="text-2xl text-slate-700 dark:text-navy-100">
                                  Success Message
                                </h2>
                                <p class="mt-2">
                                  Lorem ipsum dolor sit amet, consectetur adipisicing
                                  elit. Consequuntur dignissimos soluta totam?
                                </p>
                                <a href="/?a=account"
                                  class="btn mt-6 bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90"
                                >
                                  Close
                              </a>
                              </div>
                            </div>
                          </div>
                        </template>
                      </div>
                    </div>
                    <div class="code-wrapper hidden pt-4">
                      <pre
                        class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                        x-init="hljs.highlightElement($el)"
                      >
                        <code class="language-html" x-ignore>  
          &lt;div x-data=&quot;{showModal:false}&quot;&gt;&#13;&#10;    &lt;button&#13;&#10;      @click=&quot;showModal = true&quot;&#13;&#10;      class=&quot;btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90&quot;&#13;&#10;    &gt;&#13;&#10;      Basic Modal&#13;&#10;    &lt;/button&gt;&#13;&#10;    &lt;template x-teleport=&quot;#x-teleport-target&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        class=&quot;fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5&quot;&#13;&#10;        x-show=&quot;showModal&quot;&#13;&#10;        role=&quot;dialog&quot;&#13;&#10;        @keydown.window.escape=&quot;showModal = false&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&#13;&#10;          class=&quot;absolute inset-0 bg-slate-900/60 transition-opacity duration-300&quot;&#13;&#10;          @click=&quot;showModal = false&quot;&#13;&#10;          x-show=&quot;showModal&quot;&#13;&#10;          x-transition:enter=&quot;ease-out&quot;&#13;&#10;          x-transition:enter-start=&quot;opacity-0&quot;&#13;&#10;          x-transition:enter-end=&quot;opacity-100&quot;&#13;&#10;          x-transition:leave=&quot;ease-in&quot;&#13;&#10;          x-transition:leave-start=&quot;opacity-100&quot;&#13;&#10;          x-transition:leave-end=&quot;opacity-0&quot;&#13;&#10;        &gt;&lt;/div&gt;&#13;&#10;        &lt;div&#13;&#10;          class=&quot;relative max-w-lg rounded-lg bg-white px-4 py-10 text-center transition-opacity duration-300 dark:bg-navy-700 sm:px-5&quot;&#13;&#10;          x-show=&quot;showModal&quot;&#13;&#10;          x-transition:enter=&quot;ease-out&quot;&#13;&#10;          x-transition:enter-start=&quot;opacity-0&quot;&#13;&#10;          x-transition:enter-end=&quot;opacity-100&quot;&#13;&#10;          x-transition:leave=&quot;ease-in&quot;&#13;&#10;          x-transition:leave-start=&quot;opacity-100&quot;&#13;&#10;          x-transition:leave-end=&quot;opacity-0&quot;&#13;&#10;        &gt;&#13;&#10;          &lt;svg&#13;&#10;            xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;            class=&quot;inline h-28 w-28 text-success&quot;&#13;&#10;            fill=&quot;none&quot;&#13;&#10;            viewBox=&quot;0 0 24 24&quot;&#13;&#10;            stroke=&quot;currentColor&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;path&#13;&#10;              stroke-linecap=&quot;round&quot;&#13;&#10;              stroke-linejoin=&quot;round&quot;&#13;&#10;              stroke-width=&quot;2&quot;&#13;&#10;              d=&quot;M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z&quot;&#13;&#10;            &gt;&lt;/path&gt;&#13;&#10;          &lt;/svg&gt;&#13;&#10;&#13;&#10;          &lt;div class=&quot;mt-4&quot;&gt;&#13;&#10;            &lt;h2 class=&quot;text-2xl text-slate-700 dark:text-navy-100&quot;&gt;&#13;&#10;              Success Message&#13;&#10;            &lt;/h2&gt;&#13;&#10;            &lt;p class=&quot;mt-2&quot;&gt;&#13;&#10;              Lorem ipsum dolor sit amet, consectetur adipisicing elit.&#13;&#10;              Consequuntur dignissimos soluta totam?&#13;&#10;            &lt;/p&gt;&#13;&#10;            &lt;button&#13;&#10;              @click=&quot;showModal = false&quot;&#13;&#10;              class=&quot;btn mt-6 bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90&quot;&#13;&#10;            &gt;&#13;&#10;              Close&#13;&#10;            &lt;/button&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/template&gt;&#13;&#10;  &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
        
                  
                </div>
                {/literal}
            {include file="footer.tpl"}