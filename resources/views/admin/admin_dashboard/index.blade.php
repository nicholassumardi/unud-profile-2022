@extends('admin/layouts/app')
@section('content')

<div class="page-heading">
    <h3>Dashboard</h3>
</div>
<div class="col-12 col-lg-12">
    <div class="row">
        <div class="col-6 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon green">
                                <i class="iconly-boldPaper"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Active News</h6>
                            <h6 class="font-extrabold mb-0">{{$activeNewsCount}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon red">
                                <i class="iconly-boldPaper"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Inactive News</h6>
                            <h6 class="font-extrabold mb-0">{{$inactiveNewsCount}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @php
    $dataBulan = [];
    @endphp
    @foreach ($dataNews as $key=>$data)
    @php
    array_push($dataBulan, strval($data));
    @endphp

    @endforeach

</div>

<section class="section">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Bar Chart</h4>
            </div>
            <div class="card-body">
                <canvas id="bar"></canvas>
            </div>
        </div>
    </div>
</section>

@endsection
@push('js')
<script type="text/javascript">
    var jArray = <?php echo json_encode($dataBulan); ?>;
    var ctxBar = document.getElementById("bar").getContext("2d");
    var myBar = new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug","Sep","Okt","Nov","Des",],
            datasets: [{
                label: 'News',
                backgroundColor: [chartColors.blue, chartColors.blue, chartColors.blue, chartColors.blue, chartColors.blue, chartColors.blue, chartColors.blue, chartColors.blue, chartColors.blue, chartColors.blue, chartColors.blue, chartColors.blue],
                data: [
                    <?php foreach($dataNews as $key =>$data){ ?>

                        {{$dataBulan[$key-1]}},

                        <?php } ?>
                ]
            }]
        },
        options: {
            responsive: true,
            barRoundness: 1,
            title: {
                display: true,
                text: "News in {{date("Y")}}"
            },
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        suggestedMax: 40 + 20,
                        padding: 10,
                    },
                    gridLines: {
                        drawBorder: false,
                    }
                }],
                xAxes: [{
                    gridLines: {
                        display: false,
                        drawBorder: false
                    }
                }]
            }
        }
    });
</script>
@endpush