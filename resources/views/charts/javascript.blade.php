<script>
    $(document).ready(function() {
        $('#charts').addClass('active');
    });
    
</script>


<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    let pendapatan = {!! json_encode($total_harga)!!};
    let bulan = {!! json_encode($bulan) !!};
// console.log(bulan);
    let positif = {!! $pen['penambahan']['positif'] !!};
    let dirawat = {!! $pen['penambahan']['dirawat'] !!};
    let sembuh = {!! $pen['penambahan']['sembuh'] !!};
    let meninggal = {!! $pen['penambahan']['meninggal'] !!};
    
    let provinsi = {!! json_encode($prov) !!};
    let kasus = {!! json_encode($kasus) !!};
    
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

// penambahan kasus 
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

// Data setiap propinsi
Highcharts.chart('propinsi', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Major trophies for some English teams',
        align: 'left'
    },
    xAxis: {
        // categories: ['Arsenal', 'Chelsea', 'Liverpool', 'Manchester United']
        categories: provinsi
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Count trophies'
        },
        stackLabels: {
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: ( // theme
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || 'gray',
                textOutline: 'none'
            }
        }
    },
    legend: {
        align: 'left',
        x: 70,
        verticalAlign: 'top',
        y: 70,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || 'white',
        borderColor: '#CCC',
        borderWidth: 1,
        shadow: false
    },
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: true
            }
        }
    },
    series: [{
        name: 'Kasus',
        data: kasus
    }]
});

// var json = `{ "foo": 1, "bar": 2, "baz": 3 }`;
// var obj = JSON.parse(json);
// var values = Object.keys(obj).map(function (key) { return obj[key]; });

// var initialArr = [{"provinsi":"DKI JAKARTA","kasus":1425915,"dirawat":9170,"sembuh":1401186,"meninggal":15559},{"provinsi":"JAWA BARAT","kasus":1179690,"dirawat":6442,"sembuh":1157286,"meninggal":15962},{"provinsi":"JAWA TENGAH","kasus":637982,"dirawat":1584,"sembuh":602855,"meninggal":33543},{"provinsi":"JAWA TIMUR","kasus":604991,"dirawat":914,"sembuh":572269,"meninggal":31808},{"provinsi":"BANTEN","kasus":337052,"dirawat":1655,"sembuh":332447,"meninggal":2950},{"provinsi":"DAERAH ISTIMEWA YOGYAKARTA","kasus":224741,"dirawat":662,"sembuh":218146,"meninggal":5933},{"provinsi":"KALIMANTAN TIMUR","kasus":209483,"dirawat":304,"sembuh":203446,"meninggal":5733},{"provinsi":"BALI","kasus":167212,"dirawat":309,"sembuh":162166,"meninggal":4737},{"provinsi":"SUMATERA UTARA","kasus":159433,"dirawat":435,"sembuh":155702,"meninggal":3296},{"provinsi":"RIAU","kasus":152886,"dirawat":153,"sembuh":148266,"meninggal":4467},{"provinsi":"SULAWESI SELATAN","kasus":144792,"dirawat":250,"sembuh":142045,"meninggal":2497},{"provinsi":"SUMATERA BARAT","kasus":104796,"dirawat":210,"sembuh":102207,"meninggal":2379},{"provinsi":"NUSA TENGGARA TIMUR","kasus":94711,"dirawat":265,"sembuh":92917,"meninggal":1529},{"provinsi":"KALIMANTAN SELATAN","kasus":87563,"dirawat":73,"sembuh":84905,"meninggal":2585},{"provinsi":"SUMATERA SELATAN","kasus":82437,"dirawat":259,"sembuh":78796,"meninggal":3382},{"provinsi":"LAMPUNG","kasus":75754,"dirawat":201,"sembuh":71357,"meninggal":4196},{"provinsi":"KEPULAUAN RIAU","kasus":70984,"dirawat":103,"sembuh":68991,"meninggal":1890},{"provinsi":"KEPULAUAN BANGKA BELITUNG","kasus":66309,"dirawat":118,"sembuh":64575,"meninggal":1616},{"provinsi":"KALIMANTAN BARAT","kasus":65773,"dirawat":138,"sembuh":64503,"meninggal":1132},{"provinsi":"SULAWESI TENGAH","kasus":61309,"dirawat":173,"sembuh":59402,"meninggal":1734},{"provinsi":"KALIMANTAN TENGAH","kasus":58322,"dirawat":50,"sembuh":56706,"meninggal":1566},{"provinsi":"SULAWESI UTARA","kasus":53205,"dirawat":428,"sembuh":51557,"meninggal":1220},{"provinsi":"PAPUA","kasus":50095,"dirawat":201,"sembuh":49314,"meninggal":580},{"provinsi":"KALIMANTAN UTARA","kasus":45452,"dirawat":33,"sembuh":44559,"meninggal":860},{"provinsi":"ACEH","kasus":44190,"dirawat":123,"sembuh":41837,"meninggal":2230},{"provinsi":"JAMBI","kasus":38734,"dirawat":75,"sembuh":37766,"meninggal":893},{"provinsi":"NUSA TENGGARA BARAT","kasus":36278,"dirawat":29,"sembuh":35347,"meninggal":902},{"provinsi":"PAPUA BARAT","kasus":32326,"dirawat":127,"sembuh":31813,"meninggal":386},{"provinsi":"BENGKULU","kasus":29248,"dirawat":60,"sembuh":28665,"meninggal":523},{"provinsi":"SULAWESI TENGGARA","kasus":25747,"dirawat":67,"sembuh":25110,"meninggal":570},{"provinsi":"MALUKU","kasus":18762,"dirawat":25,"sembuh":18437,"meninggal":300},{"provinsi":"SULAWESI BARAT","kasus":15622,"dirawat":20,"sembuh":15207,"meninggal":395},{"provinsi":"MALUKU UTARA","kasus":14604,"dirawat":15,"sembuh":14255,"meninggal":334},{"provinsi":"GORONTALO","kasus":13961,"dirawat":41,"sembuh":13433,"meninggal":487}];
// var resArr = initialArr.map(function(x){
// var coba = x[Object.keys(x)[0]];
// });




</script>

