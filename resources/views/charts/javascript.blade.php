<script>
    $(document).ready(function() {
        $('#charts').addClass('active');
    });
    
</script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    let pendapatan = {!! json_encode($total_harga)!!};
    let bulan = {!! json_encode($bulan) !!};

    Highcharts.chart('grafik', {
        title : {
            text: 'Grafik Pendapatan Bulanan'
        },
        xAxis : {
            categories : bulan
        },
        yAxis : {
            title: {
                text : 'Nominal Pendapatan Bulanan'
            }
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [
            {
                name: 'Nominal Pendapatan',
                data: pendapatan
            }
        ]
    });
</script>