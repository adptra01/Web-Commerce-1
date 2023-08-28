<x-apps>
    <x-slot name="title">
        Dashboard
    </x-slot>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-dark">Perkiraan Pendapatan</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div>
                            {!! $chart1->container() !!}
                            {!! $chart1->script() !!}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-dark">Total Perorder</h6>
                    </div>
                    <div class="card-body">
                        <div class="chart-pie pt-4 pb-2">
                            {!! $chart2->container() !!}
                            {!! $chart2->script() !!} </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-apps>
