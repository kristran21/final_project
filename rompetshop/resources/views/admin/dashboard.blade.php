@extends('admin_layout')
@section('admin_content')
<div class="container px-4 mx-auto">
    <div class="p-6 m-20 bg-white rounded shadow">
        <div>
            {{-- <ul id="chart-button">
                <li><a href="{{route('front..admin.dashboard_user')}}" type="button" class="btn btn-primary">User</a></li>
                <li> <a href="{{route('front..admin.dashboard_order')}}" type="button" class="btn btn-success">Order</a></li>
            </ul> --}}
        </div>
        <div id="container" data-user="{{ $UserChart }}"></div>
    </div>

</div>

{{ Html::script('https://code.jquery.com/jquery-3.1.1.min.js') }}
{{ Html::script('https://code.highcharts.com/highcharts.js') }}
{{ Html::script('https://code.highcharts.com/modules/exporting.js') }}
{{ Html::script('https://code.highcharts.com/modules/export-data.js') }}
<script>
    $(document).ready(function(){
    var productBuy = $('#container').data('user');
    var chartData = [];
    productBuy.forEach(function(element){
        var ele = {name : element.name, y : parseFloat(element.y) };
        chartData.push(ele);
    });
    console.log(chartData);
    Highcharts.chart('container', {
        chart: {
          plotBackgroundColor: null,
          plotBorderWidth: null,
          plotShadow: false,
          type: 'pie'
        },
        title: {
          text: 'Daily order'
        },
        tooltip: {
          pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
          pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
              enabled: false
            },
            showInLegend: true
          }
        },
        series: [{
          name: 'Brands',
          colorByPoint: true,
          data: chartData,
        }]
    });    
});
</script>
@endsection