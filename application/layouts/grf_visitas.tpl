<script>
$(function () {
    $('#container').highcharts({
        title: {
            text: '',
            x: -20 //center
        },
        credits: {
        	enabled: false
        },
        subtitle: {
            text: '',
            x: -20
        },
        xAxis: {
            categories: [{$dia}]
        },
        yAxis: {
            title: {
                text: ''
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: true
            }
        },
        series: [{
            name: 'Visitas',
            data: [{$visits}]
        }, {
            name: 'Page views',
            data: [{$page}]
        }]
    });
});
</script>