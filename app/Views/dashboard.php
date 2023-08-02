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
                <?php foreach ($data['Batch Information'] as $batchInfo) { ?>
                <div class="rounded-lg bg-white shadow-lg p-4 space-y-2">
                    <div class="flex justify-between flex-col space-x-1">
                        <!-- <div>
                            <svg width="30" height="30" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="20" cy="20" r="20" fill="#3979FF" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M13 11C11.8954 11 11 11.8954 11 13V27C11 28.1046 11.8954 29 13 29H27C28.1046 29 29 28.1046 29 27V13C29 11.8954 28.1046 11 27 11H13ZM16 21C16 20.4477 15.5523 20 15 20C14.4477 20 14 20.4477 14 21V25C14 25.5523 14.4477 26 15 26C15.5523 26 16 25.5523 16 25V21ZM20 17C20.5523 17 21 17.4477 21 18V25C21 25.5523 20.5523 26 20 26C19.4477 26 19 25.5523 19 25V18C19 17.4477 19.4477 17 20 17ZM26 15C26 14.4477 25.5523 14 25 14C24.4477 14 24 14.4477 24 15V25C24 25.5523 24.4477 26 25 26C25.5523 26 26 25.5523 26 25V15Z"
                                    fill="white" />
                            </svg>
                        </div> -->

                    </div>
                    <p class="dark:text-navy-100 text-anywhere text-black">
                        <?= $batchInfo->sub_cat_name ?>
                    </p>
                    <p class="mt-1 text-xs+ text-anywhere text-[#3979FF]">
                        <?= $batchInfo->input_type == 'boolean' ? ($batchInfo->param_value == 1 ? "<span class='text-green-600'>Active</span>" : "<span class='text-red-600'>Inactive</span>") : $batchInfo->param_value.' '. $batchInfo->value_type ?>
                    </p>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="p-5 rounded-xl bg-[#FFE7E7]">
            <div class="pb-2">
                <h6 class="mb-2 font-semibold text-black text-xl">Packaging Information</h6>
                <small>Summery</small>
            </div>
            <div class="grid grid-cols-2 gap-2 rounded-xl">
                <?php foreach ($data['Packaging Information'] as $packageInfo) { ?>
                <div class="rounded-lg bg-white shadow-lg p-4 space-y-2">
                    <div class="flex justify-between flex-col space-x-1">
                        <!-- <div>
                            <svg width="30" height="30" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="20" cy="20" r="20" fill="#FF6C6C" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M13 11C11.8954 11 11 11.8954 11 13V27C11 28.1046 11.8954 29 13 29H27C28.1046 29 29 28.1046 29 27V13C29 11.8954 28.1046 11 27 11H13ZM16 21C16 20.4477 15.5523 20 15 20C14.4477 20 14 20.4477 14 21V25C14 25.5523 14.4477 26 15 26C15.5523 26 16 25.5523 16 25V21ZM20 17C20.5523 17 21 17.4477 21 18V25C21 25.5523 20.5523 26 20 26C19.4477 26 19 25.5523 19 25V18C19 17.4477 19.4477 17 20 17ZM26 15C26 14.4477 25.5523 14 25 14C24.4477 14 24 14.4477 24 15V25C24 25.5523 24.4477 26 25 26C25.5523 26 26 25.5523 26 25V15Z"
                                    fill="white" />
                            </svg>
                        </div> -->

                    </div>
                    <p class="dark:text-navy-100 text-anywhere text-black">
                        <?= $packageInfo->sub_cat_name ?>
                    </p>
                    <p class="mt-1 text-xs+ text-anywhere text-[#3979FF]">
                        <?= $packageInfo->input_type == 'boolean' ? ($packageInfo->param_value == 1 ? "<span class='text-green-600'>Active</span>" : "<span class='text-red-600'>Inactive</span>") : $packageInfo->param_value.' '. $packageInfo->value_type ?>
                    </p>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="p-5 rounded-xl bg-[#E6E6E6]">
        <div class="pb-2">
            <h6 class="mb-2 font-semibold text-black text-xl">Material Information</h6>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <?php foreach ($data['Material Information'] as $materialInfo) { ?>
            <div class="p-3 rounded-xl bg-white grid grid-cols-5 place-items-center shadow-lg text-black"><span
                    class="col-span-2">
                    <?= $materialInfo->sub_cat_name ?>
                </span> <span class="">:</span> <span class="text-[#3979FF] col-span-2">
                    <?= $materialInfo->input_type == 'boolean' ? ($materialInfo->param_value == 1 ? "<span class='text-green-600'>Active</span>" : "<span class='text-red-600'>Inactive</span>") : $materialInfo->param_value.' '. $materialInfo->value_type ?>
                </span>
            </div>
            <?php } ?>
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
                        <?php foreach ($deviations as $deviation) { ?>
                        <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                <?= $deviation->deviation_id ?>
                            </td>
                            <td class="whitespace-nowrap px-3 py-3 font-medium dark:text-navy-100 lg:px-5">
                                <?= $deviation->deviation_category ?>
                            </td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                <?= $deviation->investigation_status ?>
                            </td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                <?= $deviation->corrective_actions ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="px-5">
                <?=  isset($pager) ? $pager->links('deviationPager') : '' ?>
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
                        <?php foreach ($mesSystems as $mesSystem) { ?>
                        <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                <?= $mesSystem->batch_number ?>
                            </td>
                            <td class="whitespace-nowrap px-3 py-3 font-medium dark:text-navy-100 lg:px-5">
                                <?= $mesSystem->date_of_manufacture ?>
                            </td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                <?= $mesSystem->process_order_number ?>
                            </td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                <?= $mesSystem->machine_alarms ?>
                            </td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                <?= $mesSystem->packaging_location ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="px-5">
                <?=  isset($pager) ? $pager->links('mesSystemsPager') : '' ?>
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
            <?php foreach ($data['Lab Quality Control Testing'] as $labQCT) { ?>
                <div class="px-5 py-12 rounded-xl bg-white grid grid-cols-5 place-items-center text-black"><span
                        class="col-span-2"><?= $labQCT->sub_cat_name ?></span> <span>:</span> <span class="text-[#3979FF] col-span-2">
                        <?= $labQCT->input_type == 'boolean' ? ($labQCT->param_value == 1 ? "<span class='text-green-600'>Active</span>" : "<span class='text-red-600'>Inactive</span>") : $labQCT->param_value.' '. $labQCT->value_type ?>
                    </span>
                </div>
            <?php } ?>


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
            <?php foreach ($data['Env Quality Control Testing'] as $envQCT) { ?>
                <div class="p-5 bg-white/80 rounded-xl text-black"><?= $envQCT->sub_cat_name ?> : <span class="text-primary">
                    <?= $envQCT->input_type == 'boolean' ? ($envQCT->param_value == 1 ? "<span class='text-green-600'>Active</span>" : "<span class='text-red-600'>Inactive</span>") : $envQCT->param_value.' '. $envQCT->value_type ?>
                    </span>
                </div>
            <?php } ?>
            
            </div>
        </div>
        <div class="p-5 rounded-xl col-span-2 bg-[#CDE3F8]">
            <div class="pb-5">
                <h6 class="font-bold text-black">Waste Management</h6>
            </div>
            <div class="space-y-5">
            <?php foreach ($data['Waste Management'] as $waste) { ?>

                <div class="p-5 bg-white/80 rounded-xl grid grid-cols-5">
                    <span class="col-span-2 text-black"><?= $waste->sub_cat_name ?></span>
                    <span>:</span> 
                    <span class="text-[#3979FF] col-span-2">
                        <?= $waste->input_type == 'boolean' ? ($waste->param_value == 1 ? '<span class="text-green-600">Active</span>' : '<span class="text-red-600">Inactive</span>') : $waste->param_value.' '. $waste->value_type ?>
                    </span>
                </div>
            <?php } ?>
            
            </div>
        </div>
    </div>

    <div class="flex mt-5 h-20 w-full items-center justify-center rounded-lg bg-[#3979FF] text-white font-bold">
        <p class="text-xl">Marketing Authorization Holder</p>
    </div>
    <div class="space-y-5 mt-5 bg-[#CDE3F8] p-5 rounded-lg grid grid-cols-2 gap-4">
        <?php foreach ($data['Marketing Authorization Holder'] as $authHolder) { ?>

        <div class="p-5 bg-white/80 rounded-xl grid grid-cols-4 items-center" style="margin: 0;">
            <span class="text-black"><?= $authHolder->sub_cat_name ?> : </span>
            <span class="text-[#3979FF] col-span-3">
                <?= $authHolder->input_type == 'boolean' ? ($authHolder->param_value == 1 ? "<span class='text-green-600'>Active</span>" : "<span class='text-red-600'>Inactive</span>") : $authHolder->param_value.' '. $authHolder->value_type ?>
            </span>
        </div>
        <?php } ?>

    </div>

    <div class="flex mt-5 h-20 w-full items-center justify-center rounded-lg bg-[#3979FF] text-white font-bold">
        <p class="text-xl">Manufacturer</p>
    </div>
    <div class="space-y-5 mt-5 bg-[#FFE7E7] p-5 rounded-lg grid grid-cols-2 gap-4">

            <?php foreach ($data['Manufacturer'] as $manufacture) { ?>
                <div class="p-5 bg-white/80 rounded-xl flex flex-row gap-3 items-center" style="margin: 0;">
                    <span class="text-black"><?= $manufacture->sub_cat_name ?>:  </span>
                    <span class="text-[#3979FF] col-span-3">
                        <?= $manufacture->input_type != 'link' ? $manufacture->param_value : '<a class="text-[#3979FF]" target="_blank" href="'.$manufacture->param_value.' '. $manufacture->value_type.'">Click Here</a>' ?>
                    </span>
                </div>
            <?php } ?>
    </div>

    <!-- <div class="bg-[#E6E6E6] p-6 font-semibold text-black rounded-lg mt-5">
        *Other Sources of Information:
        <a class="text-[#3979FF]" target="_blank" href="#">Click Here</a>
    </div> -->

    <div class="flex mt-5 h-20 w-full items-center justify-center rounded-lg bg-[#3979FF] text-white font-bold">
        <p class="text-xl">Certification</p>
    </div>
    <div class="grid grid-cols-5 gap-5 mt-5 bg-slate-200 p-5 rounded-tl-xl rounded-tr-xl text-black font-bold">
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
    <div class="my-5 text-center">
        <a href="<?= base_url('export-report?batch_id=' . 1) ?>"
            class="px-5 py-3 bg-[#3979FF] text-white font-bold rounded-md text-lg">Export Report</a>
    </div>
</div>

<?= $this->endSection() ?>