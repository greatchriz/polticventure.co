<html lang="en" class="" style="--vh: 12.530000000000001px;">

<head>
    <!-- Meta tags  -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>Polticventure | We maximize your profit</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">

    <!-- CSS Assets -->
    <link rel="stylesheet" href="css/app.css">

    <!-- Javascript Assets -->
    <script src="js/app.js" defer=""></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <script>
        /**
         * THIS SCRIPT REQUIRED FOR PREVENT FLICKERING IN SOME BROWSERS
         */
        localStorage.getItem("_x_darkMode_on") === "true" &&
            document.documentElement.classList.add("dark");
    </script>
</head>

<body x-data="" x-bind="$store.global.documentBody" class="is-header-blur navigation:sideblock">
    <!-- App preloader-->


    <!-- Page Wrapper -->
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900">

        <!-- Sidebar -->
        <!-- Sidebar -->
        <div class="sidebar sidebar-panel print:hidden">
            <div class="flex h-full grow flex-col border-r border-slate-150 bg-white dark:border-navy-700 dark:bg-navy-750">
                <div class="flex items-center justify-between px-3 pt-4">
                    <!-- Application Logo -->
                    <div class="flex">
                        <a href="/">
                            <img class="w-36 transition-transform duration-500 ease-in-out hover:rotate-[360deg]" src="assets/images/logo-dark.png" alt="logo">
                        </a>
                    </div>
                    <button @click="$store.global.isSidebarExpanded = false" class="btn h-7 w-7 rounded-full p-0 text-primary hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-accent-light/80 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 xl:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                </div>


                <div x-data="{expandedItem:'menu-item-3'}" class="mt-5 h-[calc(100%-4.5rem)] overflow-x-hidden pb-6" x-init="$el._x_simplebar = new SimpleBar($el);" data-simplebar="init">
                    <div class="simplebar-wrapper" style="margin: 0px 0px -24px;">
                        <div class="simplebar-height-auto-observer-wrapper">
                            <div class="simplebar-height-auto-observer"></div>
                        </div>
                        <div class="simplebar-mask">
                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden;">
                                    <div class="simplebar-content" style="padding: 0px 0px 24px;">


                                        <ul class="flex flex-1 flex-col px-4 font-inter">

                                            <li onclick="handleClick(event)" class="flex items-center bg-primary/10 rounded-lg cursor-pointer" style="margin-bottom: 10px; margin-top: 10px;">
                                                <a href="?a=account" class="flex h-11 w-11 items-center justify-center text-primary outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-navy-600 dark:text-accent-light dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">

                                                    <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                        <path fill="currentColor" fill-opacity=".3" d="M5 14.059c0-1.01 0-1.514.222-1.945.221-.43.632-.724 1.453-1.31l4.163-2.974c.56-.4.842-.601 1.162-.601.32 0 .601.2 1.162.601l4.163 2.974c.821.586 1.232.88 1.453 1.31.222.43.222.935.222 1.945V19c0 .943 0 1.414-.293 1.707C18.414 21 17.943 21 17 21H7c-.943 0-1.414 0-1.707-.293C5 20.414 5 19.943 5 19v-4.94Z"></path>
                                                        <path fill="currentColor" d="M3 12.387c0 .267 0 .4.084.441.084.041.19-.04.4-.204l7.288-5.669c.59-.459.885-.688 1.228-.688.343 0 .638.23 1.228.688l7.288 5.669c.21.163.316.245.4.204.084-.04.084-.174.084-.441v-.409c0-.48 0-.72-.102-.928-.101-.208-.291-.355-.67-.65l-7-5.445c-.59-.459-.885-.688-1.228-.688-.343 0-.638.23-1.228.688l-7 5.445c-.379.295-.569.442-.67.65-.102.208-.102.448-.102.928v.409Z"></path>
                                                        <path fill="currentColor" d="M11.5 15.5h1A1.5 1.5 0 0 1 14 17v3.5h-4V17a1.5 1.5 0 0 1 1.5-1.5Z"></path>
                                                        <path fill="currentColor" d="M17.5 5h-1a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5Z"></path>
                                                    </svg>


                                                </a>
                                                <p style="margin-left: 20px;">
                                                    Dashboard
                                                </p>

                                            </li>



                                            <li onclick="handleClick(event)" class="flex items-center bg-primary/10 rounded-lg cursor-pointer" style="margin-bottom: 10px; margin-top: 10px;">
                                                <a href="?a=joint-deposit" class="flex h-11 w-11 items-center justify-center text-primary outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-navy-600 dark:text-accent-light dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">

                                                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g opacity="0.4">
                                                                <path d="M9.5 13.7502C9.5 14.7202 10.25 15.5002 11.17 15.5002H13.05C13.85 15.5002 14.5 14.8202 14.5 13.9702C14.5 13.0602 14.1 12.7302 13.51 12.5202L10.5 11.4702C9.91 11.2602 9.51001 10.9402 9.51001 10.0202C9.51001 9.18023 10.16 8.49023 10.96 8.49023H12.84C13.76 8.49023 14.51 9.27023 14.51 10.2402" stroke="#4f46e5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M12 7.5V16.5" stroke="#4f46e5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                            <path d="M22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2" stroke="#4f46e5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M22 6V2H18" stroke="#4f46e5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M17 7L22 2" stroke="#4f46e5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>


                                                </a>
                                                <p style="margin-left: 20px;">
                                                    Joint Deposit
                                                </p>

                                            </li>


                                            <li onclick="handleClick(event)" class="flex items-center bg-primary/10 rounded-lg cursor-pointer" style="margin-bottom: 10px; margin-top: 10px;">
                                                <a href="?a=deposit" class="flex h-11 w-11 items-center justify-center text-primary outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-navy-600 dark:text-accent-light dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">

                                                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g opacity="0.4">
                                                                <path d="M9.5 13.7502C9.5 14.7202 10.25 15.5002 11.17 15.5002H13.05C13.85 15.5002 14.5 14.8202 14.5 13.9702C14.5 13.0602 14.1 12.7302 13.51 12.5202L10.5 11.4702C9.91 11.2602 9.51001 10.9402 9.51001 10.0202C9.51001 9.18023 10.16 8.49023 10.96 8.49023H12.84C13.76 8.49023 14.51 9.27023 14.51 10.2402" stroke="#4f46e5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M12 7.5V16.5" stroke="#4f46e5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                            <path d="M22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2" stroke="#4f46e5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M22 6V2H18" stroke="#4f46e5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M17 7L22 2" stroke="#4f46e5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>


                                                </a>
                                                <p style="margin-left: 20px;">
                                                    Deposit
                                                </p>

                                            </li>


                                            <li onclick="handleClick(event)" class="flex items-center bg-primary/10 rounded-lg cursor-pointer" style="margin-bottom: 10px; margin-top: 10px;">
                                                <a href="?a=deposit_list" class="flex h-11 w-11 items-center justify-center text-primary outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-navy-600 dark:text-accent-light dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">

                                                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5 7C5 6.44772 5.44772 6 6 6H18C18.5523 6 19 6.44772 19 7C19 7.55228 18.5523 8 18 8H6C5.44772 8 5 7.55228 5 7ZM5 12C5 11.4477 5.44772 11 6 11H18C18.5523 11 19 11.4477 19 12C19 12.5523 18.5523 13 18 13H6C5.44772 13 5 12.5523 5 12ZM5 17C5 16.4477 5.44772 16 6 16H18C18.5523 16 19 16.4477 19 17C19 17.5523 18.5523 18 18 18H6C5.44772 18 5 17.5523 5 17Z" fill="#4f46e5"></path>
                                                        </g>
                                                    </svg>


                                                </a>
                                                <p style="margin-left: 20px;">
                                                    Deposit List
                                                </p>

                                            </li>


                                            <li onclick="handleClick(event)" class="flex items-center bg-primary/10 rounded-lg cursor-pointer" style="margin-bottom: 10px; margin-top: 10px;">
                                                <a href="?a=deposit_history" class="flex h-11 w-11 items-center justify-center text-primary outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-navy-600 dark:text-accent-light dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">

                                                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Menu / Menu_Alt_04">
                                                                <path id="Vector" d="M5 17H19M5 12H19M5 7H13" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </g>
                                                    </svg>


                                                </a>
                                                <p style="margin-left: 20px;">
                                                    Deposit History
                                                </p>

                                            </li>



                                            <li onclick="handleClick(event)" class="flex items-center bg-primary/10 rounded-lg cursor-pointer" style="margin-bottom: 10px; margin-top: 10px;">
                                                <a href="?a=history&amp;type=earning" class="flex h-11 w-11 items-center justify-center text-primary outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-navy-600 dark:text-accent-light dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">

                                                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Menu / Menu_Alt_04">
                                                                <path id="Vector" d="M5 17H19M5 12H19M5 7H13" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </g>
                                                    </svg>


                                                </a>
                                                <p style="margin-left: 20px;">
                                                    Earning History
                                                </p>

                                            </li>




                                            <li onclick="handleClick(event)" class="flex items-center bg-primary/10 rounded-lg cursor-pointer" style="margin-bottom: 10px; margin-top: 10px;">
                                                <a href="?a=withdraw" class="flex h-11 w-11 items-center justify-center text-primary outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-navy-600 dark:text-accent-light dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">

                                                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g opacity="0.4">
                                                                <path d="M9.5 13.7502C9.5 14.7202 10.25 15.5002 11.17 15.5002H13.05C13.85 15.5002 14.5 14.8202 14.5 13.9702C14.5 13.0602 14.1 12.7302 13.51 12.5202L10.5 11.4702C9.91 11.2602 9.51001 10.9402 9.51001 10.0202C9.51001 9.18023 10.16 8.49023 10.96 8.49023H12.84C13.76 8.49023 14.51 9.27023 14.51 10.2402" stroke="#4f46e5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M12 7.5V16.5" stroke="#4f46e5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                            <path d="M22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2" stroke="#4f46e5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M17 3V7H21" stroke="#4f46e5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M22 2L17 7" stroke="#4f46e5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>


                                                </a>
                                                <p style="margin-left: 20px;">
                                                    Withdraw
                                                </p>

                                            </li>


                                            <li onclick="handleClick(event)" class="flex items-center bg-primary/10 rounded-lg cursor-pointer" style="margin-bottom: 10px; margin-top: 10px;">
                                                <a href="?a=withdraw_history" class="flex h-11 w-11 items-center justify-center text-primary outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-navy-600 dark:text-accent-light dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">

                                                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Menu / Menu_Alt_04">
                                                                <path id="Vector" d="M5 17H19M5 12H19M5 7H13" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </g>
                                                    </svg>


                                                </a>
                                                <p style="margin-left: 20px;">
                                                    Withdraw History
                                                </p>

                                            </li>



                                            <li onclick="handleClick(event)" class="flex items-center bg-primary/10 rounded-lg cursor-pointer" style="margin-bottom: 10px; margin-top: 10px;">
                                                <a href="?a=referals" class="flex h-11 w-11 items-center justify-center text-primary outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-navy-600 dark:text-accent-light dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">

                                                    <svg class="h-7 w-7" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <style type="text/css">
                                                                .st0 {
                                                                    fill: #4f46e5;
                                                                }
                                                            </style>
                                                            <g>
                                                                <path class="st0" d="M256.001,118.244c32.648,0,59.126-26.47,59.126-59.118S288.65,0,256.001,0s-59.118,26.477-59.118,59.126 S223.353,118.244,256.001,118.244z"></path>
                                                                <path class="st0" d="M256.001,228.204c40.613,0,82.205-14.063,75.715-52.998c-2.643-15.812-15.718-37.977-25.65-47.901 c-1.286-1.278-7.108-1.612-8.69-0.632c-12.052,7.434-26.202,11.768-41.376,11.768c-15.166,0-29.316-4.334-41.367-11.768 c-1.583-0.98-7.406-0.646-8.691,0.632c-9.924,9.924-23.014,32.089-25.65,47.901C173.803,214.142,215.396,228.204,256.001,228.204z"></path>
                                                                <path class="st0" d="M95.685,402.046c32.648,0,59.126-26.47,59.126-59.118c0-32.656-26.477-59.126-59.126-59.126 s-59.119,26.47-59.119,59.126C36.567,375.576,63.037,402.046,95.685,402.046z"></path>
                                                                <path class="st0" d="M145.75,411.114c-1.285-1.293-7.107-1.612-8.69-0.639c-12.059,7.434-26.201,11.762-41.375,11.762 c-15.173,0-29.316-4.327-41.368-11.762c-1.583-0.972-7.413-0.654-8.697,0.639c-9.925,9.917-23.007,32.082-25.642,47.894 C13.487,497.944,55.08,512,95.685,512c40.613,0,82.206-14.056,75.714-52.992C168.758,443.196,155.675,421.031,145.75,411.114z"></path>
                                                                <path class="st0" d="M416.314,402.046c32.648,0,59.118-26.47,59.118-59.118c0-32.656-26.47-59.126-59.118-59.126 s-59.126,26.47-59.126,59.126C357.189,375.576,383.666,402.046,416.314,402.046z"></path>
                                                                <path class="st0" d="M492.022,459.008c-2.636-15.812-15.718-37.977-25.642-47.894c-1.286-1.293-7.115-1.612-8.698-0.639 c-12.052,7.434-26.194,11.762-41.368,11.762c-15.173,0-29.316-4.327-41.375-11.762c-1.583-0.972-7.405-0.654-8.69,0.639 c-9.924,9.917-23.003,32.082-25.646,47.894C334.113,497.944,375.701,512,416.314,512C456.92,512,498.512,497.944,492.022,459.008z"></path>
                                                                <path class="st0" d="M336.24,370.973l-70.488-40.692v-81.385c0-5.387-4.363-9.75-9.75-9.75c-5.38,0-9.743,4.363-9.743,9.75v81.385 l-70.488,40.692c-4.66,2.693-6.265,8.662-3.572,13.322c2.694,4.662,8.661,6.258,13.322,3.572l70.48-40.7l70.488,40.692 c4.661,2.694,10.622,1.097,13.315-3.565C342.498,379.635,340.9,373.666,336.24,370.973z"></path>
                                                            </g>
                                                        </g>
                                                    </svg>


                                                </a>
                                                <p style="margin-left: 20px;">
                                                    Referrals
                                                </p>

                                            </li>

                                            <li onclick="handleClick(event)" class="flex items-center bg-primary/10 rounded-lg cursor-pointer" style="margin-bottom: 10px; margin-top: 10px;">
                                                <a href="?a=history&amp;type=commissions" class="flex h-11 w-11 items-center justify-center text-primary outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-navy-600 dark:text-accent-light dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">

                                                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Menu / Menu_Alt_04">
                                                                <path id="Vector" d="M5 17H19M5 12H19M5 7H13" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </g>
                                                    </svg>


                                                </a>
                                                <p style="margin-left: 20px;">
                                                    Referrals History
                                                </p>

                                            </li>


                                            <!--edit_account-->
                                            <li onclick="handleClick(event)" class="flex items-center bg-primary/10 rounded-lg cursor-pointer" style="margin-bottom: 10px; margin-top: 10px;">
                                                <a href="?a=edit_account" class="flex h-11 w-11 items-center justify-center text-primary outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-navy-600 dark:text-accent-light dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">

                                                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z" stroke="#4f46e5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M19.2101 15.74L15.67 19.2801C15.53 19.4201 15.4 19.68 15.37 19.87L15.18 21.22C15.11 21.71 15.45 22.05 15.94 21.98L17.29 21.79C17.48 21.76 17.75 21.63 17.88 21.49L21.42 17.95C22.03 17.34 22.32 16.63 21.42 15.73C20.53 14.84 19.8201 15.13 19.2101 15.74Z" stroke="#4f46e5" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M18.7001 16.25C19.0001 17.33 19.84 18.17 20.92 18.47" stroke="#4f46e5" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M3.40991 22C3.40991 18.13 7.25994 15 11.9999 15C13.0399 15 14.0399 15.15 14.9699 15.43" stroke="#4f46e5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>


                                                </a>
                                                <p style="margin-left: 20px;">
                                                    Edit Account
                                                </p>

                                            </li>


                                            <!--logout-->
                                            <li onclick="handleClick(event)" class="flex items-center bg-primary/10 rounded-lg cursor-pointer" style="margin-bottom: 10px; margin-top: 10px;">
                                                <a href="?a=logout" class="flex h-11 w-11 items-center justify-center text-primary outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-navy-600 dark:text-accent-light dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">

                                                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M21 12L13 12" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M18 15L20.913 12.087V12.087C20.961 12.039 20.961 11.961 20.913 11.913V11.913L18 9" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M16 5V4.5V4.5C16 3.67157 15.3284 3 14.5 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H14.5C15.3284 21 16 20.3284 16 19.5V19.5V19" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>


                                                </a>
                                                <p style="margin-left: 20px;">
                                                    Logout
                                                </p>

                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="simplebar-placeholder" style="width: 259px; height: 792px;"></div>
                    </div>
                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                    </div>
                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                        <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- App Header Wrapper-->
        <nav class="header before:bg-white dark:before:bg-navy-750 print:hidden">
            <!-- App Header  -->
            <div class="header-container relative flex w-full bg-white dark:bg-navy-700 print:hidden">
                <!-- Header Items -->
                <div class="flex w-full items-center justify-between">
                    <!-- Left: Sidebar Toggle Button -->
                    <div class="h-7 w-7">
                        <button class="menu-toggle ml-0.5 flex h-7 w-7 flex-col justify-center space-y-1.5 text-primary outline-none focus:outline-none dark:text-accent-light/80" :class="$store.global.isSidebarExpanded &amp;&amp; 'active'" @click="$store.global.isSidebarExpanded = !$store.global.isSidebarExpanded">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>

                    <!-- Right: Header buttons -->

                </div>
            </div>
        </nav>


        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div class="mt-5 flex items-center justify-between">
                <h3 class="text-lg font-medium text-slate-700 line-clamp-1 dark:text-navy-50">
                    Workspaces Overview
                </h3>
                <div class="flex">
                    <button class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </button>
                    <button class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="mt-4 sm:mt-5 lg:mt-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                        Monitoring Workspaces
                    </h2>
                    <div class="flex">
                        <div class="flex items-center" x-data="{isInputActive:false}">
                            <label class="block">
                                <input x-effect="isInputActive === true &amp;&amp; $nextTick(() => { $el.focus()});" :class="isInputActive ? 'w-32 lg:w-48' : 'w-0'" class="form-input bg-transparent px-1 text-right transition-all duration-100 placeholder:text-slate-500 dark:placeholder:text-navy-200 w-0" placeholder="Search here..." type="text">
                            </label>
                            <button @click="isInputActive = !isInputActive" class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </button>
                        </div>
                        <div x-data="usePopper({placement:'bottom-end',offset:4})" @click.outside="isShowPopper &amp;&amp; (isShowPopper = false)" class="inline-flex">
                            <button x-ref="popperRef" @click="isShowPopper = !isShowPopper" class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                                </svg>
                            </button>
                            <div x-ref="popperRoot" class="popper-root" :class="isShowPopper &amp;&amp; 'show'" style="position: fixed; inset: 0px 0px auto auto; margin: 0px; transform: translate(-16px, 172px);" data-popper-placement="bottom-end">
                                <div class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                    <ul>
                                        <li>
                                            <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another Action</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something else</a>
                                        </li>
                                    </ul>
                                    <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                    <ul>
                                        <li>
                                            <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated Link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
        // Replace with your database credentials
        $servername = "localhost";
        $username = "dexfpheh_dexfintech";
        $password = "g?S,B?L[Q_QX";
        $dbname = "dexfpheh_contact";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch data from the joint_deposit table
        $sql = "SELECT * FROM joint_deposit";
        $result = mysqli_query($conn, $sql);
        // Check if there are any rows returned
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo " we are here";
 
            }
        } else {
            echo "we are not here";
        }

                  // Close the database connection
        mysqli_close($conn);
        ?>

            </div>
        </main>
    </div>
    <!-- 
    This is a place for Alpine.js Teleport feature 
    @see https://alpinejs.dev/directives/teleport
  -->
    <div id="x-teleport-target"></div>



    <script>
        window.addEventListener("DOMContentLoaded", () => Alpine.start());
    </script>
    <script>
        function handleClick(event) {
            const anchor = event.currentTarget.querySelector('a');
            anchor.click();
        }
    </script>




    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg>
</body>

</html>

<main class="main-content w-full px-[var(--margin-x)] pb-8">
    <div class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
        <div class="card col-span-12 px-4 pb-5 sm:px-5">