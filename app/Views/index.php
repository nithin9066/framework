<?= $this->extend('Layout/layout') ?>
<?= $this->section('head-scripts') ?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Particulate Matter (PM2.5)', 8],
            ['Particulate Matter (PM10)', 15]
        ]);

        var options = {
            title: '',
            colors: ['#3979FF', '#FF6C6C'],
            legend: { position: 'none' },
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="py-5">
    <ul class="pb-5">
        <li>
            <i
                class="fa-solid px-2 text-sm fa-palette bg-gradient-to-r from-sky-400 to-blue-600 bg-clip-text text-lg font-semibold text-transparent"></i>
            The below report helps to provide a full understanding of the batch’s lifecycle,characteristics, and any
            specific conditions or
            processes it went through.
        </li>
    </ul>

    <div class="flex h-20 w-full items-center justify-center rounded-lg bg-[#3979FF] text-white font-bold">
        <p class="text-xl">ERP SYSTEM (Enterprise Resource Planning)</p>
    </div>

    <div class="grid grid-cols-3 gap-2 py-5">
        <div class="p-5 col-span-2 rounded-xl bg-[#CDE3F8]">
            <div class="pb-2">
                <h6 class="mb-2 font-semibold text-black text-xl">Batch Information</h6>
                <small>Summery</small>
            </div>
            <div class="grid grid-cols-4 gap-2 rounded-xl">
                <div class="rounded-lg bg-white shadow-lg p-4 space-y-2">
                    <div class="flex justify-between flex-col space-x-1">
                        <div>
                            <svg width="30" height="30" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="20" cy="20" r="20" fill="#3979FF" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M13 11C11.8954 11 11 11.8954 11 13V27C11 28.1046 11.8954 29 13 29H27C28.1046 29 29 28.1046 29 27V13C29 11.8954 28.1046 11 27 11H13ZM16 21C16 20.4477 15.5523 20 15 20C14.4477 20 14 20.4477 14 21V25C14 25.5523 14.4477 26 15 26C15.5523 26 16 25.5523 16 25V21ZM20 17C20.5523 17 21 17.4477 21 18V25C21 25.5523 20.5523 26 20 26C19.4477 26 19 25.5523 19 25V18C19 17.4477 19.4477 17 20 17ZM26 15C26 14.4477 25.5523 14 25 14C24.4477 14 24 14.4477 24 15V25C24 25.5523 24.4477 26 25 26C25.5523 26 26 25.5523 26 25V15Z"
                                    fill="white" />
                            </svg>
                        </div>

                    </div>
                    <p class="dark:text-navy-100 text-anywhere text-black">
                        Batch Number
                    </p>
                    <p class="mt-1 text-xs+ text-anywhere text-[#3979FF]">OPV-B12345</p>
                </div>
                <div class="rounded-lg bg-white shadow-lg p-4 space-y-2">
                    <div class="flex justify-between flex-col space-x-1">
                        <div>
                            <svg width="30" height="30" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="20" cy="20" r="20" fill="#3979FF" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 14C12 11.7909 13.7909 10 16 10H22V14C22 16.2091 23.7909 18 26 18H28V26C28 28.2091 26.2091 30 24 30H16C13.7909 30 12 28.2091 12 26V14ZM16 19C15.4477 19 15 19.4477 15 20C15 20.5523 15.4477 21 16 21H18C18.5523 21 19 20.5523 19 20C19 19.4477 18.5523 19 18 19H16ZM16 23C15.4477 23 15 23.4477 15 24C15 24.5523 15.4477 25 16 25H20C20.5523 25 21 24.5523 21 24C21 23.4477 20.5523 23 20 23H16ZM24.6818 12.1988L24.5509 14.1629C24.5106 14.7666 25.0115 15.2674 25.6152 15.2272L27.5792 15.0962C28.4365 15.0391 28.8274 13.9989 28.2198 13.3913L26.3867 11.5582C25.7792 10.9507 24.7389 11.3415 24.6818 12.1988Z"
                                    fill="white" />
                            </svg>

                        </div>

                    </div>
                    <p class="dark:text-navy-100 text-anywhere text-black">
                        Dosage form
                    </p>
                    <p class="mt-1 text-xs+ text-anywhere text-[#3979FF]">Injectable Concentrate for Infusion</p>
                </div>
                <div class="rounded-lg bg-white shadow-lg p-4 space-y-2">
                    <div class="flex justify-between flex-col space-x-1">
                        <div>
                            <svg width="30" height="30" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="20" cy="20" r="20" fill="#3979FF" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.6261 13.2653L21.3263 13.7367C20.8222 13.8087 20.4103 14.049 20.1162 14.3811L12.4167 22.0806C11.6357 22.8616 11.6357 24.1279 12.4167 24.909L15.2452 27.7374C16.0263 28.5185 17.2925 28.5185 18.0736 27.7374L25.773 20.038C26.1051 19.7439 26.3454 19.332 26.4174 18.8279L26.8888 15.528C27.0775 14.2081 25.946 13.0767 24.6261 13.2653ZM22.3162 17.8379C22.7067 18.2284 23.3399 18.2285 23.7305 17.8379C24.121 17.4474 24.1209 16.8142 23.7305 16.4237C23.34 16.0332 22.7068 16.0332 22.3162 16.4237C21.9257 16.8142 21.9257 17.4474 22.3162 17.8379Z"
                                    fill="white" />
                            </svg>

                        </div>

                    </div>
                    <p class="dark:text-navy-100 text-anywhere text-black">
                        Strength/Potency
                    </p>
                    <p class="mt-1 text-xs+ text-anywhere text-[#3979FF]">10mg/mL</p>
                    <small>(Available in 40mg, 100mg, 120mg, 240mg Vials)</small>
                </div>
                <div class="rounded-lg bg-white shadow-lg p-4 space-y-2">
                    <div class="flex justify-between flex-col space-x-1">
                        <div>
                            <svg width="30" height="30" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="20" cy="20" r="20" fill="#3979FF" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M22 16C22 18.2091 20.2091 20 18 20C15.7909 20 14 18.2091 14 16C14 13.7909 15.7909 12 18 12C20.2091 12 22 13.7909 22 16ZM18 21C14.134 21 11 23.2386 11 26C11 27.1046 11.8954 28 13 28H23C24.1046 28 25 27.1046 25 26C25 23.2386 21.866 21 18 21ZM26 14C26.5523 14 27 14.4477 27 15V16H28C28.5523 16 29 16.4477 29 17C29 17.5523 28.5523 18 28 18H27V19C27 19.5523 26.5523 20 26 20C25.4477 20 25 19.5523 25 19V18H24C23.4477 18 23 17.5523 23 17C23 16.4477 23.4477 16 24 16H25V15C25 14.4477 25.4477 14 26 14Z"
                                    fill="white" />
                            </svg>

                        </div>

                    </div>
                    <p class="dark:text-navy-100 text-anywhere text-black">
                        Package size & type
                    </p>
                    <p class="mt-1 text-xs+ text-anywhere text-[#3979FF]">Available in 4ml, 10ml, 12ml, 24ml Vials</p>
                </div>
                <div class="rounded-lg bg-white shadow-lg p-4 space-y-2">
                    <div class="flex justify-between flex-col space-x-1">
                        <div>
                            <svg width="30" height="30" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="20" cy="20" r="20" fill="#3979FF" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M22 16C22 18.2091 20.2091 20 18 20C15.7909 20 14 18.2091 14 16C14 13.7909 15.7909 12 18 12C20.2091 12 22 13.7909 22 16ZM18 21C14.134 21 11 23.2386 11 26C11 27.1046 11.8954 28 13 28H23C24.1046 28 25 27.1046 25 26C25 23.2386 21.866 21 18 21ZM26 14C26.5523 14 27 14.4477 27 15V16H28C28.5523 16 29 16.4477 29 17C29 17.5523 28.5523 18 28 18H27V19C27 19.5523 26.5523 20 26 20C25.4477 20 25 19.5523 25 19V18H24C23.4477 18 23 17.5523 23 17C23 16.4477 23.4477 16 24 16H25V15C25 14.4477 25.4477 14 26 14Z"
                                    fill="white" />
                            </svg>
                        </div>
                    </div>
                    <p class="dark:text-navy-100 text-anywhere text-black">
                        Batch Expiry date
                    </p>
                    <p class="mt-1 text-xs+ text-anywhere text-[#3979FF]">31/12/2024</p>
                </div>
            </div>
        </div>
        <div class="p-5 rounded-xl bg-[#FFE7E7]">
            <div class="pb-2">
                <h6 class="mb-2 font-semibold text-black text-xl">Packaging Information</h6>
                <small>Summery</small>
            </div>
            <div class="grid grid-cols-2 gap-2 rounded-xl">
                <div class="rounded-lg bg-white shadow-lg p-4 space-y-2">
                    <div class="flex justify-between flex-col space-x-1">
                        <div>
                            <svg width="30" height="30" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="20" cy="20" r="20" fill="#FF6C6C" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M13 11C11.8954 11 11 11.8954 11 13V27C11 28.1046 11.8954 29 13 29H27C28.1046 29 29 28.1046 29 27V13C29 11.8954 28.1046 11 27 11H13ZM16 21C16 20.4477 15.5523 20 15 20C14.4477 20 14 20.4477 14 21V25C14 25.5523 14.4477 26 15 26C15.5523 26 16 25.5523 16 25V21ZM20 17C20.5523 17 21 17.4477 21 18V25C21 25.5523 20.5523 26 20 26C19.4477 26 19 25.5523 19 25V18C19 17.4477 19.4477 17 20 17ZM26 15C26 14.4477 25.5523 14 25 14C24.4477 14 24 14.4477 24 15V25C24 25.5523 24.4477 26 25 26C25.5523 26 26 25.5523 26 25V15Z"
                                    fill="white" />
                            </svg>
                        </div>

                    </div>
                    <p class="dark:text-navy-100 text-anywhere text-black">
                        Packaging Batch Quantity
                    </p>
                    <p class="mt-1 text-xs+ text-anywhere text-[#3979FF]">5000</p>
                </div>
                <div class="rounded-lg bg-white shadow-lg p-4 space-y-2">
                    <div class="flex justify-between flex-col space-x-1">
                        <div>
                            <svg width="30" height="30" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="20" cy="20" r="20" fill="#FF6C6C" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 14C12 11.7909 13.7909 10 16 10H22V14C22 16.2091 23.7909 18 26 18H28V26C28 28.2091 26.2091 30 24 30H16C13.7909 30 12 28.2091 12 26V14ZM16 19C15.4477 19 15 19.4477 15 20C15 20.5523 15.4477 21 16 21H18C18.5523 21 19 20.5523 19 20C19 19.4477 18.5523 19 18 19H16ZM16 23C15.4477 23 15 23.4477 15 24C15 24.5523 15.4477 25 16 25H20C20.5523 25 21 24.5523 21 24C21 23.4477 20.5523 23 20 23H16ZM24.6818 12.1988L24.5509 14.1629C24.5106 14.7666 25.0115 15.2674 25.6152 15.2272L27.5792 15.0962C28.4365 15.0391 28.8274 13.9989 28.2198 13.3913L26.3867 11.5582C25.7792 10.9507 24.7389 11.3415 24.6818 12.1988Z"
                                    fill="white" />
                            </svg>

                        </div>

                    </div>
                    <p class="dark:text-navy-100 text-anywhere text-black">
                        Carton Count
                    </p>
                    <p class="mt-1 text-xs+ text-anywhere text-[#3979FF]">1000</p>
                </div>
                <div class="rounded-lg bg-white shadow-lg p-4 space-y-2">
                    <div class="flex justify-between flex-col space-x-1">
                        <div>
                            <svg width="30" height="30" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="20" cy="20" r="20" fill="#FF6C6C" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.6261 13.2653L21.3263 13.7367C20.8222 13.8087 20.4103 14.049 20.1162 14.3811L12.4167 22.0806C11.6357 22.8616 11.6357 24.1279 12.4167 24.909L15.2452 27.7374C16.0263 28.5185 17.2925 28.5185 18.0736 27.7374L25.773 20.038C26.1051 19.7439 26.3454 19.332 26.4174 18.8279L26.8888 15.528C27.0775 14.2081 25.946 13.0767 24.6261 13.2653ZM22.3162 17.8379C22.7067 18.2284 23.3399 18.2285 23.7305 17.8379C24.121 17.4474 24.1209 16.8142 23.7305 16.4237C23.34 16.0332 22.7068 16.0332 22.3162 16.4237C21.9257 16.8142 21.9257 17.4474 22.3162 17.8379Z"
                                    fill="white" />
                            </svg>

                        </div>

                    </div>
                    <p class="dark:text-navy-100 text-anywhere text-black">
                        End User Country
                    </p>
                    <p class="mt-1 text-xs+ text-anywhere text-[#3979FF]">United States</p>
                </div>
            </div>
        </div>
    </div>

    <div class="p-5 rounded-xl bg-[#E6E6E6]">
        <div class="pb-2">
            <h6 class="mb-2 font-semibold text-black text-xl">Material Information</h6>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <div class="p-3 rounded-xl bg-white grid grid-cols-5 place-items-center shadow-lg text-black"><span
                    class="col-span-2">Packaged Material Name</span> <span class="">:</span> <span
                    class="text-[#3979FF] col-span-2">Opdivo (Nivolumab)</span></div>
            <div class="p-3 rounded-xl bg-white grid grid-cols-5 place-items-center shadow-lg text-black"><span
                    class="col-span-2">Packaged Material Number</span> <span class="">:</span> <span
                    class="text-[#3979FF] col-span-2">OPV1234</span></div>
            <div class="p-3 rounded-xl bg-white grid grid-cols-5 place-items-center shadow-lg text-black"><span
                    class="col-span-2">Assembled Material Name</span> <span class="">:</span> <span
                    class="text-[#3979FF] col-span-2">Opdivo Concentrate for Infusion</span></div>
            <div class="p-3 rounded-xl bg-white grid grid-cols-5 place-items-center shadow-lg text-black"><span
                    class="col-span-2">Assembled Material Number</span> <span class="">:</span> <span
                    class="text-[#3979FF] col-span-2">OPVASB5678</span></div>
            <div class="p-3 rounded-xl bg-white grid grid-cols-5 place-items-center shadow-lg text-black"><span
                    class="col-span-2">Assembly Batch Number</span> <span class="">:</span> <span
                    class="text-[#3979FF] col-span-2">OPVASB-B2345</span></div>
            <div class="p-3 rounded-xl bg-white grid grid-cols-5 place-items-center shadow-lg text-black"><span
                    class="col-span-2">Filling Batch Number</span> <span class="">:</span> <span
                    class="text-[#3979FF] col-span-2">OPVFILL-B3456</span></div>
            <div class="p-3 rounded-xl bg-white grid grid-cols-5 place-items-center shadow-lg text-black"><span
                    class="col-span-2">Filling Material Name</span> <span class="">:</span> <span
                    class="text-[#3979FF] col-span-2">Nivolumab Active Substance and Other Ingredients</span></div>
            <div class="p-3 rounded-xl bg-white grid grid-cols-5 place-items-center shadow-lg text-black"><span
                    class="col-span-2">Filling Material Number</span> <span class="">:</span> <span
                    class="text-[#3979FF] col-span-2">OPVFILL1234</span></div>
        </div>
    </div>
    <div class="flex mt-5 h-20 w-full items-center justify-center rounded-lg bg-[#3979FF] text-white font-bold">
        <p class="text-xl">Deviation Management System</p>
    </div>
    <div class="mt-5">
        <div class="flex items-center justify-between bg-white rounded-lg p-3 shadow">
            <h2 class="text-xl font-semibold tracking-wide text-black line-clamp-1 dark:text-navy-100">
                Deviations and Investigations
            </h2>
            <div class="flex">
                <div class="flex items-center" x-data="{isInputActive:false}">
                    <label class="block">
                        <input x-effect="isInputActive === true &amp;&amp; $nextTick(() => { $el.focus()});"
                            :class="isInputActive ? 'w-32 lg:w-48' : 'w-0'"
                            class="form-input bg-transparent px-1 text-right transition-all duration-100 placeholder:text-slate-500 dark:placeholder:text-navy-200 w-0"
                            placeholder="Search here..." type="text">
                    </label>
                    <button @click="isInputActive = !isInputActive"
                        class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </div>
                <div x-data="usePopper({placement:'bottom-end',offset:4})"
                    @click.outside="isShowPopper &amp;&amp; (isShowPopper = false)" class="inline-flex">
                    <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                        class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                            </path>
                        </svg>
                    </button>
                    <div x-ref="popperRoot" class="popper-root" :class="isShowPopper &amp;&amp; 'show'"
                        style="position: fixed; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-24px, 176px, 0px);"
                        data-popper-placement="bottom-end">
                        <div
                            class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                            <ul>
                                <li>
                                    <a href="#"
                                        class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another
                                        Action</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something
                                        else</a>
                                </li>
                            </ul>
                            <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                            <ul>
                                <li>
                                    <a href="#"
                                        class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated
                                        Link</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="is-scrollbar-hidden min-w-full overflow-x-auto" x-data="pages.tables.initExample1">
                <table class="is-hoverable w-full text-left">
                    <thead>
                        <tr>
                            <th
                                class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                Deviation ID
                            </th>
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                Deviation Category
                            </th>
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                Investigation Status
                            </th>
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                Corrective Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">DV1234</td>
                            <td
                                class="whitespace-nowrap px-3 py-3 font-medium dark:text-navy-100 lg:px-5">
                                Process Deviation
                            </td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">Completed</td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">Training Provided to Staff</td>
                        </tr>
                        <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">DV1235</td>
                            <td
                                class="whitespace-nowrap px-3 py-3 font-medium dark:text-navy-100 lg:px-5">
                                Equipment Failure
                            </td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">Under Investigation</td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">Equipment Maintenance Scheduled</td>
                        </tr>
                        <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">DV1236</td>
                            <td
                                class="whitespace-nowrap px-3 py-3 font-medium dark:text-navy-100 lg:px-5">
                                Documentation Error
                            </td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">Completed</td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">Staff retraining on documentation protocol
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div
                class="flex flex-col justify-between space-y-4 px-4 py-4 sm:flex-row sm:items-center sm:space-y-0 sm:px-5">
                <div class="flex items-center space-x-2 text-xs+">
                    <span>Show</span>
                    <label class="block">
                        <select
                            class="form-select rounded-full border border-slate-300 bg-white px-2 py-1 pr-6 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent">
                            <option>10</option>
                            <option>30</option>
                            <option>50</option>
                        </select>
                    </label>
                    <span>entries</span>
                </div>

                <ol class="pagination">
                    <li class="rounded-l-lg bg-slate-150 dark:bg-navy-500">
                        <a href="#"
                            class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:text-navy-200 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="bg-slate-150 dark:bg-navy-500">
                        <a href="#"
                            class="flex h-8 min-w-[2rem] items-center justify-center rounded-lg px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">1</a>
                    </li>
                    <li class="bg-slate-150 dark:bg-navy-500">
                        <a href="#"
                            class="flex h-8 min-w-[2rem] items-center justify-center rounded-lg bg-primary px-3 leading-tight text-white transition-colors hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">2</a>
                    </li>
                    <li class="bg-slate-150 dark:bg-navy-500">
                        <a href="#"
                            class="flex h-8 min-w-[2rem] items-center justify-center rounded-lg px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">3</a>
                    </li>
                    <li class="bg-slate-150 dark:bg-navy-500">
                        <a href="#"
                            class="flex h-8 min-w-[2rem] items-center justify-center rounded-lg px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">4</a>
                    </li>
                    <li class="bg-slate-150 dark:bg-navy-500">
                        <a href="#"
                            class="flex h-8 min-w-[2rem] items-center justify-center rounded-lg px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">5</a>
                    </li>
                    <li class="rounded-r-lg bg-slate-150 dark:bg-navy-500">
                        <a href="#"
                            class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:text-navy-200 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </li>
                </ol>

                <div class="text-xs+">1 - 10 of 10 entries</div>
            </div>
        </div>
    </div>
    <div class="flex mt-5 h-20 w-full items-center justify-center rounded-lg bg-[#3979FF] text-white font-bold">
        <p class="text-xl">MES System</p>
    </div>
    <div class="mt-5">
        <div class="flex items-center justify-between bg-white rounded-lg p-3 shadow">
            <h2 class="text-xl font-semibold tracking-wide text-black line-clamp-1 dark:text-navy-100">
                MES System (Manufacturing Execution System)
            </h2>
            <div class="flex">
                <div class="flex items-center" x-data="{isInputActive:false}">
                    <label class="block">
                        <input x-effect="isInputActive === true &amp;&amp; $nextTick(() => { $el.focus()});"
                            :class="isInputActive ? 'w-32 lg:w-48' : 'w-0'"
                            class="form-input bg-transparent px-1 text-right transition-all duration-100 placeholder:text-slate-500 dark:placeholder:text-navy-200 w-0"
                            placeholder="Search here..." type="text">
                    </label>
                    <button @click="isInputActive = !isInputActive"
                        class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </div>
                <div x-data="usePopper({placement:'bottom-end',offset:4})"
                    @click.outside="isShowPopper &amp;&amp; (isShowPopper = false)" class="inline-flex">
                    <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                        class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                            </path>
                        </svg>
                    </button>
                    <div x-ref="popperRoot" class="popper-root" :class="isShowPopper &amp;&amp; 'show'"
                        style="position: fixed; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-24px, 176px, 0px);"
                        data-popper-placement="bottom-end">
                        <div
                            class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                            <ul>
                                <li>
                                    <a href="#"
                                        class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another
                                        Action</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something
                                        else</a>
                                </li>
                            </ul>
                            <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                            <ul>
                                <li>
                                    <a href="#"
                                        class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated
                                        Link</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="is-scrollbar-hidden min-w-full overflow-x-auto" x-data="pages.tables.initExample1">
                <table class="is-hoverable w-full text-left">
                    <thead>
                        <tr>
                            <th
                                class="whitespace-nowrap rounded-tl-lg bg-[#CDE3F8] px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                Batch number
                            </th>
                            <th
                                class="whitespace-nowrap bg-[#CDE3F8] px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                Date of manufacture
                            </th>
                            <th
                                class="whitespace-nowrap bg-[#CDE3F8] px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                Process Order Number
                            </th>
                            <th
                                class="whitespace-nowrap bg-[#CDE3F8] px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                Machine Alarms
                            </th>
                            <th
                                class="whitespace-nowrap bg-[#CDE3F8] px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                Packaging Location
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">OPV-MES1234</td>
                            <td
                                class="whitespace-nowrap px-3 py-3 font-medium dark:text-navy-100 lg:px-5">
                                1st January 2023
                            </td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">PON1234</td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">None</td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">BMS Plant, New York</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div
                class="flex flex-col justify-between space-y-4 px-4 py-4 sm:flex-row sm:items-center sm:space-y-0 sm:px-5">
                <div class="flex items-center space-x-2 text-xs+">
                    <span>Show</span>
                    <label class="block">
                        <select
                            class="form-select rounded-full border border-slate-300 bg-white px-2 py-1 pr-6 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent">
                            <option>10</option>
                            <option>30</option>
                            <option>50</option>
                        </select>
                    </label>
                    <span>entries</span>
                </div>

                <ol class="pagination">
                    <li class="rounded-l-lg bg-slate-150 dark:bg-navy-500">
                        <a href="#"
                            class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:text-navy-200 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="bg-slate-150 dark:bg-navy-500">
                        <a href="#"
                            class="flex h-8 min-w-[2rem] items-center justify-center rounded-lg px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">1</a>
                    </li>
                    <li class="bg-slate-150 dark:bg-navy-500">
                        <a href="#"
                            class="flex h-8 min-w-[2rem] items-center justify-center rounded-lg bg-primary px-3 leading-tight text-white transition-colors hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">2</a>
                    </li>
                    <li class="bg-slate-150 dark:bg-navy-500">
                        <a href="#"
                            class="flex h-8 min-w-[2rem] items-center justify-center rounded-lg px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">3</a>
                    </li>
                    <li class="bg-slate-150 dark:bg-navy-500">
                        <a href="#"
                            class="flex h-8 min-w-[2rem] items-center justify-center rounded-lg px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">4</a>
                    </li>
                    <li class="bg-slate-150 dark:bg-navy-500">
                        <a href="#"
                            class="flex h-8 min-w-[2rem] items-center justify-center rounded-lg px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">5</a>
                    </li>
                    <li class="rounded-r-lg bg-slate-150 dark:bg-navy-500">
                        <a href="#"
                            class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:text-navy-200 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </li>
                </ol>

                <div class="text-xs+">1 - 10 of 10 entries</div>
            </div>
        </div>
    </div>
    <div class="flex mt-5 h-20 w-full items-center justify-center rounded-lg bg-[#3979FF] text-white font-bold">
        <p class="text-xl">Lab Management System</p>
    </div>
    <div class="grid grid-cols-2 gap-4 mt-5">
        <div class="ax-transparent-gridline ax-rounded-b-lg bg-white p-5 rounded-xl shadow-sm">
            <h6 class="font-bold tracking-wide text-black line-clamp-1 dark:text-navy-100">
                Batch Analysis
            </h6>
            <div class="border-b pb-3"
                x-init="$nextTick(() => { $el._x_chart = new ApexCharts($el,pages.charts.analyticsBandwidth); $el._x_chart.render() });">
            </div>
            <div class="grid grid-cols-2 gap-4 mt-3">
                <div class="grid grid-cols-3 gap-4">
                    <div class="flex justify-end">
                        <svg width="38" height="14" viewBox="0 0 38 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.47607 7.19232H35.9523" stroke="#0080DA" stroke-width="3"
                                stroke-linecap="round" />
                            <ellipse cx="19.2142" cy="7.19228" rx="7.92857" ry="6.57692" fill="#0080DA" />
                        </svg>
                    </div>
                    <div class="flex flex-col col-span-2 text-black">
                        <span>Assay</span>
                        <span>99.5% (Compliant)</span>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <div class="flex justify-end">
                        <svg width="38" height="14" viewBox="0 0 38 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.42822 6.73077H35.9044" stroke="#FF6C6C" stroke-width="3"
                                stroke-linecap="round" />
                            <ellipse cx="19.1664" cy="6.73073" rx="7.92857" ry="6.57692" fill="#FF6C6C" />
                        </svg>

                    </div>
                    <div class="flex flex-col col-span-2 text-black">
                        <span>Impurities</span>
                        <span>0.2% (Compliant)</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-5 rounded-xl bg-[#E6E6E6]">
            <div class="pb-5">
                <h6 class="font-bold text-black">Quality Control Testing</h6>
            </div>
            <div class="grid gap-4">
                <div class="px-5 py-12 rounded-xl bg-white grid grid-cols-5 place-items-center text-black"><span
                        class="col-span-2">Appearance</span> <span>:</span> <span class="text-[#3979FF] col-span-2">White
                        crystalline powder (Compliant)</span></div>
                <div class="px-5 py-12 rounded-xl bg-white grid grid-cols-5 place-items-center text-black"><span
                        class="col-span-2">Dissolution</span> <span>:</span> <span class="text-[#3979FF] col-span-2">98%
                        (Compliant)</span></div>

            </div>
        </div>

        <div class="p-5 rounded-xl bg-[#CDE3F8]">
            <div class="pb-5">
                <h6 class="font-bold text-black">Cold Chain Monitoring</h6>
            </div>
            <div class="space-y-3">
                <div class="grid grid-cols-5 gap-4">
                    <div class="col-span-2 text-black">
                        Min Temperature
                    </div>
                    <div class="col-span-2">
                        <div class="progress mt-3 h-1.5 bg-slate-150 dark:bg-navy-500">
                            <div style="width: 5%;"
                                class="is-active relative overflow-hidden rounded-full bg-[#3979FF]">
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="w-full badge px-0 bg-white/60 text-black dark:bg-black/15">
                            2°C%
                        </div>
                    </div>

                </div>
                <div class="grid grid-cols-5 gap-4">
                    <div class="col-span-2 text-black">
                        Max Temperature
                    </div>
                    <div class="col-span-2">
                        <div class="progress mt-3 h-1.5 bg-slate-150 dark:bg-navy-500">
                            <div style="width: 8%;"
                                class="is-active relative overflow-hidden rounded-full bg-[#3979FF]">
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="w-full badge px-0 bg-white/60 text-black dark:bg-black/15">
                            8°C%
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-5 gap-4">
                    <div class="col-span-2 text-black">
                        Duration
                    </div>
                    <div class="col-span-2">
                        <div class="progress mt-3 h-1.5 bg-slate-150 dark:bg-navy-500">
                            <div style="width: 20%;"
                                class="is-active relative overflow-hidden rounded-full bg-[#3979FF]">
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="w-full badge px-0 bg-white/60 text-black dark:bg-black/15">
                            72 hr
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-5 gap-4">
                    <div class="col-span-2 text-black">
                        Extra time in packing/assembly
                    </div>
                    <div class="col-span-2">
                        <div class="progress mt-3 h-1.5 bg-slate-150 dark:bg-navy-500">
                            <div style="width: 80%;"
                                class="is-active relative overflow-hidden rounded-full bg-[#3979FF]">
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="w-full badge px-0 bg-white/60 text-black dark:bg-black/15">
                            2 hr 5 min
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-5 gap-4">
                    <div class="col-span-2 text-black">
                        Time outside cold
                    </div>
                    <div class="col-span-2">
                        <div class="progress mt-3 h-1.5 bg-slate-150 dark:bg-navy-500">
                            <div style="width: 80%;"
                                class="is-active relative overflow-hidden rounded-full bg-[#3979FF]"></div>
                        </div>
                    </div>
                    <div class="">
                        <div class="w-full badge px-0 bg-white/60 text-black dark:bg-black/15">
                            12 hr
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="p-5 rounded-xl bg-[#FFE7E7]">
                <div class="pb-5">
                    <h6 class="font-bold text-black">Temperature Data Analysis</h6>
                </div>
                <div class="space-y-3">
                    <div class="grid grid-cols-5 gap-4">
                        <div class="col-span-2 text-black">
                            Average Temperature
                        </div>
                        <div class="col-span-2">
                            <div class="progress mt-3 h-1.5 bg-slate-150 dark:bg-navy-500">
                                <div style="width: 5%;"
                                    class="is-active relative overflow-hidden rounded-full bg-[#FF6C6C]"></div>
                            </div>
                        </div>
                        <div class="">
                            <div class="w-full badge px-0 bg-white/60 text-black dark:bg-black/15">
                                4.5°C
                            </div>
                        </div>

                    </div>
                    <div class="grid grid-cols-5 gap-4">
                        <div class="col-span-2 text-black">
                            Temperature Excursions
                        </div>
                        <div class="col-span-2">
                            <div class="progress mt-3 h-1.5 bg-slate-150 dark:bg-navy-500">
                                <div style="width: 8%;"
                                    class="is-active relative overflow-hidden rounded-full bg-[#FF6C6C]"></div>
                            </div>
                        </div>
                        <div class="">
                            <div class="w-full badge px-0 bg-white/60 text-black dark:bg-black/15">
                                0
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-[#FFE7E7] px-4 py-3 rounded-lg mt-5">
                <p class="text-black">Temperature Graph : <span class="text-blue-700">[Insert temperature graph image or
                        link here]</span></p>
            </div>
        </div>
    </div>
    <div class="flex mt-5 h-20 w-full items-center justify-center rounded-lg bg-[#3979FF] text-white font-bold">
        <p class="text-xl">Environment Management System</p>
    </div>

    <div class="grid grid-cols-2 gap-4 mt-5">
        <div class="ax-transparent-gridline ax-rounded-b-lg p-5 rounded-xl bg-white shadow-sm">
            <h6 class="font-bold tracking-wide text-black line-clamp-1 dark:text-navy-100">
                Air Quality Monitoring
            </h6>
            <div id="piechart" class="grid place-items-center"></div>
            <div class="grid grid-cols-2 gap-4 mt-3">
                <div class="grid grid-cols-5 gap-4">
                    <div class="flex justify-end">
                        <svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.280273" y="0.687729" width="18.0593" height="15.3295" rx="6" fill="#3979FF" />
                        </svg>
                    </div>
                    <div class="flex flex-col col-span-4">
                        <span class="text-black">Particulate Matter (PM2.5)</span>
                        <span class="text-blue-500">8 µg/m³ (Compliant)</span>
                    </div>
                </div>
                <div class="grid grid-cols-5 gap-4">
                    <div class="flex justify-end">
                        <svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.409668 6.68758C0.409668 3.37387 3.09596 0.687576 6.40967 0.687576H12.469C15.7827 0.687576 18.469 3.37387 18.469 6.68758V10.0171C18.469 13.3308 15.7827 16.0171 12.469 16.0171H6.40967C3.09596 16.0171 0.409668 13.3308 0.409668 10.0171V6.68758Z"
                                fill="#FF6C6C" />
                        </svg>
                    </div>
                    <div class="flex flex-col col-span-4">
                        <span class="text-black">Particulate Matter (PM10)</span>
                        <span class="text-blue-500">15 µg/m³ (Compliant)</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-5 rounded-xl bg-[#FFE7E7]">
            <div class="pb-5">
                <h6 class="font-bold text-black">Quality Control Testing</h6>
            </div>
            <div class="grid gap-4">
                <div class="p-5 bg-white/80 rounded-xl text-black">pH : <span class="text-primary"></span></div>
                <div class="p-5 bg-white/80 rounded-xl text-black">Chemical Oxygen Demand (COD) : <span
                        class="text-[#3979FF]">20 mg/L</span></div>
                <div class="p-5 bg-white/80 rounded-xl text-black">Biochemical Oxygen Demand (BOD) : <span
                        class="text-[#3979FF]">20 mg/L</span></div>
            </div>
        </div>
        <div class="p-5 rounded-xl col-span-2 bg-[#CDE3F8]">
            <div class="pb-5">
                <h6 class="font-bold text-black">Waste Management</h6>
            </div>
            <div class="space-y-5">
                <div class="p-5 bg-white/80 rounded-xl grid grid-cols-5"><span
                        class="col-span-2 text-black">Hazardous Waste Disposal</span><span>:</span> <span
                        class="text-[#3979FF] col-span-2">As per BMS protocol</span></div>
                <div class="p-5 bg-white/80 rounded-xl grid grid-cols-5"><span
                        class="col-span-2 text-black">Non-hazardous Waste Disposal</span> <span>:</span><span
                        class="text-[#3979FF] col-span-2">As per BMS protocol</span></div>
                <div class="p-5 bg-white/80 rounded-xl grid grid-cols-5"><span
                        class="col-span-2 text-black">Recycling Program</span> <span>:</span><span
                        class="text-success col-span-2">Active</span></div>
            </div>
        </div>
    </div>

    <div class="flex mt-5 h-20 w-full items-center justify-center rounded-lg bg-[#3979FF] text-white font-bold">
        <p class="text-xl">Marketing Authorization Holder</p>
    </div>
    <div class="space-y-5 mt-5 bg-[#CDE3F8] p-5 rounded-lg grid grid-cols-2 gap-4">
        <div class="p-5 bg-white/80 rounded-xl grid grid-cols-4 items-center" style="margin: 0;">
            <span class="text-black">Name : </span>
            <span class="text-[#3979FF] col-span-3">Bristol-Myers Squibb Pharma EEIG </span>
        </div>
        <div class="p-5 bg-white/80 rounded-xl grid grid-cols-4 items-center" style="margin: 0;">
            <span class="text-black">Address : </span>
            <span class="text-[#3979FF] col-span-3">Plaza 254, Blanchardstown Corporate Park 2, Dublin 15, D15 T867, Ireland</span>
        </div>
    </div>

    <div class="flex mt-5 h-20 w-full items-center justify-center rounded-lg bg-[#3979FF] text-white font-bold">
        <p class="text-xl">Manufacturer</p>
    </div>
    <div class="space-y-5 mt-5 bg-[#FFE7E7] p-5 rounded-lg grid grid-cols-2 gap-4">
        <div class="p-5 bg-white/80 rounded-xl grid grid-cols-4 items-center" style="margin: 0;">
            <span class="text-black">Name : </span>
            <span class="text-[#3979FF] col-span-3">Swords Laboratories Unlimited Company t/a Bristol-Myers Squibb Cruiserath Biologics</span>
        </div>
        <div class="p-5 bg-white/80 rounded-xl grid grid-cols-5 items-center" style="margin: 0;">
            <span class="text-black">Address : </span>
            <span class="text-[#3979FF] col-span-3">Cruiserath Road, Mulhuddart, Dublin 15, D15 H6EF, Ireland</span>
        </div>
    </div>

    <div class="bg-[#E6E6E6] p-6 font-semibold text-black rounded-lg mt-5">
        *Other Sources of Information: <a class="text-[#3979FF]" target="_blank" href="http://www.ema.europa.eu/">Click Here</a>
    </div>

    <div class="flex mt-5 h-20 w-full items-center justify-center rounded-lg bg-[#3979FF] text-white font-bold">
        <p class="text-xl">Certification</p>
    </div>
    <div class="grid grid-cols-5 gap-5 mt-5 bg-slate-200 p-5 rounded-xl text-black font-bold">
        <div>
            Certification Statement:
        </div>
        <div class="col-span-4">
            I hereby certify that the batch has been manufactured, tested, and released in compliance with all
            applicable regulations and guidelines.
        </div>
        <div>
            Name and position/title of person authorizing the batch release:
        </div>
        <div class="col-span-4">
            John Doe, <span class="text-red-700">Quality Assurance Manager</span>
        </div>
        <div>
            Signature of person authorizing the batch release:
        </div>
        <div class="col-span-4 text-[#3979FF]">
            [Insert signature image or placeholder]
        </div>
        <div>
            Date of signature:
        </div>
        <div class="col-span-4">
            2023-04-21
        </div>
    </div>
    
</div>

<?= $this->endSection() ?>