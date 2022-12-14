<script>
    $(document).ready(function() {
        $('#charts').addClass('active');
    });
    
</script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    let pendapatan = {!! json_encode($total_harga)!!};
    let bulan = {!! json_encode($bulan) !!};

    let positif = {!! $pen['penambahan']['positif'] !!}
    let dirawat = {!! $pen['penambahan']['dirawat'] !!}
    let sembuh = {!! $pen['penambahan']['sembuh'] !!}
    let meninggal = {!! $pen['penambahan']['meninggal'] !!}
    
    console.log(positif);

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

    Highcharts.chart('penambahan', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Penambahan Kasus'
    },
    xAxis: {
        categories: ['Penambahan Kasus']
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Positif',
        data: [positif]
    }, {
        name: 'Dirawat',
        data: [dirawat]
    }, {
        name: 'Sembuh',
        data: [sembuh]
    }, {
        name: 'Meninggal',
        data: [meninggal]
    }
]
});
</script>