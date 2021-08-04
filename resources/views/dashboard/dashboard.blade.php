@extends('layout/main')

@section('title', 'Dashboard')

@section('css')
<style>
    #durationchartdiv {
        width: 100%;
        height: 500px;
    }

    #piechartdiv {
        width: 100%;
        height: 500px;
    }

    #stackchartdiv {
        width: 100%;
        height: 500px;
    }
</style>
@endsection

@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>reports & statics</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <!-- <p style="font-size: 28px;">170</p> -->
                        <h3>170</h3>

                        <p>Total Laporan Kejadian Tahun ini</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-document-text"></i>
                    </div>
                    <a href="{{url('/laporan_kejadian')}}" class="small-box-footer">Detail info <i
                            class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <!-- small box -->
                <div class="small-box bg-purple">
                    <div class="inner">
                        <!-- <p style="font-size: 28px;">36</p> -->
                        <h3>36</h3>

                        <p>Total Laporan Kejadian Bulan ini</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-document-text"></i>
                    </div>
                    <a href="{{url('/laporan_kejadian')}}" class="small-box-footer">Detail info <i
                            class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <!-- <p style="font-size: 28px;">3</p> -->
                        <h3>3</h3>

                        <p>Total Laporan Kejadian Hari ini</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-document-text"></i>
                    </div>
                    <a href="{{url('/laporan_kejadian')}}" class="small-box-footer">Detail info <i
                            class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <!-- <p style="font-size: 28px;">2 Bantuan / 2 Kejadian</p> -->
                        <h3>Bantuan / 2 Kejadian</h3>

                        <p>Kirim Bantuan Hari ini</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-document-text"></i>
                    </div>
                    <a href="{{url('/rekap_bantuan')}}" class="small-box-footer">Detail info <i
                            class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row" style="margin: 0;">
            <div style="background-color: #3867d6; width: 100%; height: 4em;">
                <div class="col-md-2 col-sm-2 col-xs-2"
                    style="height: 4em; padding: 1em 0px; width: 233px; padding-left: 1em;">
                    <i class="fa fa-bar-chart" style="color: #fff;"></i>
                    <span style="color: #fff; font-size: large;">Laporan Kejadian Bulan</span>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2" style="height: 4em; padding: 10px 0px;">
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <select id="bln" name="bln" class="form-control select">
                            <option value="1">Januari</option>
                            <option value="2">Pebruari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2" style="height: 4em; padding: 1em 0px; padding-left: 3em;">
                    <span style="color: #fff; font-size: large;">Total Laporan : 36</span>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2"></div>
                <div class="col-md-2 col-sm-2 col-xs-2"
                    style="height: 4em; padding: 1em 0px; width: 370px; padding-right: 1em;">
                    <span class="pull-right" style="color: #fff; font-size: large;">Tahun</span>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2" style="height: 4em; padding: 10px 0px;">
                    <div class="col-md-5 col-sm-5 col-xs-5">
                        <select id="thn" name="thn" class="form-control select" onchange="">
                            <option>2021</option>
                            <option>2020</option>
                            <option>2019</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="btn btn-primary" data-toggle="dropdown"
                            style="width: 110px; background: #4b7bec; border-color: #4b7bec"><i class="fa fa-print">
                                &nbsp; Cetak</i> &nbsp;<span class="caret"></span> </button>
                        <ul class="dropdown-menu" role="menu" style="margin-left: 1em;">
                            <!-- <li><a id="pdf_chart_lap_harian">PDF</a></li> -->
                            <li><a href="#excel_chart_laporan_bulan">Excel</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="durationchartdiv"
                style="border: 1px solid #3867d6; background: #fff; width: 100%; height: 35em; padding: 2em 1em 1em 1em;">
            </div>
        </div>

        <div class="row" style="margin: 2em 0 0;">
            <div class="col-md-6" style="padding: 0 1em 0 0;">
                <div style="background-color: #3867d6; width: 100%; height: 4em;">
                    <div class="col-md-6 col-sm-6 col-xs-6" style="height: 4em; padding: 1em 0px; padding-left: 1em;">
                        <i class="fa fa-bar-chart" style="color: #fff;"></i>
                        <span style="color: #fff; font-size: large;">Laporan Kejadian Berdasarkan Jenis Kejadian</span>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6" style="height: 4em; padding: 0.8em 1em 0.8em 0;">
                        <button type="button" class="btn btn-primary pull-right" data-toggle="dropdown"
                            style="width: 110px; background: #4b7bec; border-color: #4b7bec"><i class="fa fa-print">
                                &nbsp; Cetak</i> &nbsp;<span class="caret"></span> </button>
                        <ul class="dropdown-menu pull-right" role="menu" style="margin-left: 1em;">
                            <li><a a href="">PDF</a></li>
                            <li><a href="">Excel</a></li>
                        </ul>
                    </div>
                </div>
                <div id="piechartdiv"
                    style="border: 1px solid #3867d6; background: #fff; width: 100%; height: 35em; padding: 2em 1em 1em 1em;">
                </div>
            </div>

            <div class="col-md-6" style="padding: 0 0 0 1em;">
                <div style="background-color: #3867d6; width: 100%; height: 4em;">
                    <div class="col-md-6 col-sm-6 col-xs-6" style="height: 4em; padding: 1em 0px; padding-left: 1em;">
                        <i class="fa fa-bar-chart" style="color: #fff;"></i>
                        <span style="color: #fff; font-size: large;">Laporan Response Time Kejadian</span>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6" style="height: 4em; padding: 0.8em 1em 0.8em 0;">
                        <button type="button" class="btn btn-primary pull-right" data-toggle="dropdown"
                            style="width: 110px; background: #4b7bec; border-color: #4b7bec"><i class="fa fa-print">
                                &nbsp; Cetak</i> &nbsp;<span class="caret"></span> </button>
                        <ul class="dropdown-menu pull-right" role="menu" style="margin-left: 1em;">
                            <li><a a href="">PDF</a></li>
                            <li><a href="">Excel</a></li>
                        </ul>
                    </div>
                </div>
                <div id="stackchartdiv"
                    style="border: 1px solid #3867d6; background: #fff; width: 100%; height: 35em; padding: 2em 1em 1em 1em;">
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection

@section('scripts')
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

<script>
    am4core.ready(function() {

        // Themes begin
        am4core.useTheme(am4themes_animated);
        // Themes end

        // Create chart instance
        var chart = am4core.create("durationchartdiv", am4charts.XYChart);

        chart.colors.step = 2;
        chart.maskBullets = false;

        // Add data
        chart.data = [{
            "date": "2012-01-01",
            "distance": 227,
            "townName": "New York",
            "townName2": "New York",
            "townSize": 12,
            "latitude": 40.71,
            "duration": 408
        }, {
            "date": "2012-01-02",
            "distance": 371,
            "townName": "Washington",
            "townSize": 7,
            "latitude": 38.89,
            "duration": 482
        }, {
            "date": "2012-01-03",
            "distance": 433,
            "townName": "Wilmington",
            "townSize": 3,
            "latitude": 34.22,
            "duration": 562
        }, {
            "date": "2012-01-04",
            "distance": 345,
            "townName": "Jacksonville",
            "townSize": 3.5,
            "latitude": 30.35,
            "duration": 379
        }, {
            "date": "2012-01-05",
            "distance": 480,
            "townName": "Miami",
            "townName2": "Miami",
            "townSize": 5,
            "latitude": 25.83,
            "duration": 501
        }, {
            "date": "2012-01-06",
            "distance": 386,
            "townName": "Tallahassee",
            "townSize": 3.5,
            "latitude": 30.46,
            "duration": 443
        }, {
            "date": "2012-01-07",
            "distance": 348,
            "townName": "New Orleans",
            "townSize": 5,
            "latitude": 29.94,
            "duration": 405
        }, {
            "date": "2012-01-08",
            "distance": 238,
            "townName": "Houston",
            "townName2": "Houston",
            "townSize": 8,
            "latitude": 29.76,
            "duration": 309
        }, {
            "date": "2012-01-09",
            "distance": 218,
            "townName": "Dalas",
            "townSize": 8,
            "latitude": 32.8,
            "duration": 287
        }, {
            "date": "2012-01-10",
            "distance": 349,
            "townName": "Oklahoma City",
            "townSize": 5,
            "latitude": 35.49,
            "duration": 485
        }, {
            "date": "2012-01-11",
            "distance": 603,
            "townName": "Kansas City",
            "townSize": 5,
            "latitude": 39.1,
            "duration": 890
        }, {
            "date": "2012-01-12",
            "distance": 534,
            "townName": "Denver",
            "townName2": "Denver",
            "townSize": 9,
            "latitude": 39.74,
            "duration": 810
        }, {
            "date": "2012-01-13",
            "townName": "Salt Lake City",
            "townSize": 6,
            "distance": 425,
            "duration": 670,
            "latitude": 40.75,
            "dashLength": 8,
            "alpha": 0.4
        }, {
            "date": "2012-01-14",
            "latitude": 36.1,
            "duration": 470,
            "townName": "Las Vegas",
            "townName2": "Las Vegas"
        }, {
            "date": "2012-01-15"
        }, {
            "date": "2012-01-16"
        }, {
            "date": "2012-01-17"
        }];

        // Create axes
        var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
        dateAxis.renderer.grid.template.location = 0;
        dateAxis.renderer.minGridDistance = 50;
        dateAxis.renderer.grid.template.disabled = true;
        dateAxis.renderer.fullWidthTooltip = true;

        var distanceAxis = chart.yAxes.push(new am4charts.ValueAxis());
        distanceAxis.title.text = "Distance";
        //distanceAxis.renderer.grid.template.disabled = true;

        var durationAxis = chart.yAxes.push(new am4charts.DurationAxis());
        durationAxis.title.text = "Duration";
        durationAxis.baseUnit = "minute";
        //durationAxis.renderer.grid.template.disabled = true;
        durationAxis.renderer.opposite = true;
        durationAxis.syncWithAxis = distanceAxis;

        durationAxis.durationFormatter.durationFormat = "hh'h' mm'min'";

        var latitudeAxis = chart.yAxes.push(new am4charts.ValueAxis());
        latitudeAxis.renderer.grid.template.disabled = true;
        latitudeAxis.renderer.labels.template.disabled = true;
        latitudeAxis.syncWithAxis = distanceAxis;

        // Create series
        var distanceSeries = chart.series.push(new am4charts.ColumnSeries());
        distanceSeries.dataFields.valueY = "distance";
        distanceSeries.dataFields.dateX = "date";
        distanceSeries.yAxis = distanceAxis;
        distanceSeries.tooltipText = "{valueY} miles";
        distanceSeries.name = "Distance";
        distanceSeries.columns.template.fillOpacity = 0.7;
        distanceSeries.columns.template.propertyFields.strokeDasharray = "dashLength";
        distanceSeries.columns.template.propertyFields.fillOpacity = "alpha";
        distanceSeries.showOnInit = true;

        var distanceState = distanceSeries.columns.template.states.create("hover");
        distanceState.properties.fillOpacity = 0.9;

        var durationSeries = chart.series.push(new am4charts.LineSeries());
        durationSeries.dataFields.valueY = "duration";
        durationSeries.dataFields.dateX = "date";
        durationSeries.yAxis = durationAxis;
        durationSeries.name = "Duration";
        durationSeries.strokeWidth = 2;
        durationSeries.propertyFields.strokeDasharray = "dashLength";
        durationSeries.tooltipText = "{valueY.formatDuration()}";
        durationSeries.showOnInit = true;

        var durationBullet = durationSeries.bullets.push(new am4charts.Bullet());
        var durationRectangle = durationBullet.createChild(am4core.Rectangle);
        durationBullet.horizontalCenter = "middle";
        durationBullet.verticalCenter = "middle";
        durationBullet.width = 7;
        durationBullet.height = 7;
        durationRectangle.width = 7;
        durationRectangle.height = 7;

        var durationState = durationBullet.states.create("hover");
        durationState.properties.scale = 1.2;

        var latitudeSeries = chart.series.push(new am4charts.LineSeries());
        latitudeSeries.dataFields.valueY = "latitude";
        latitudeSeries.dataFields.dateX = "date";
        latitudeSeries.yAxis = latitudeAxis;
        latitudeSeries.name = "Duration";
        latitudeSeries.strokeWidth = 2;
        latitudeSeries.propertyFields.strokeDasharray = "dashLength";
        latitudeSeries.tooltipText = "Latitude: {valueY} ({townName})";
        latitudeSeries.showOnInit = true;

        var latitudeBullet = latitudeSeries.bullets.push(new am4charts.CircleBullet());
        latitudeBullet.circle.fill = am4core.color("#fff");
        latitudeBullet.circle.strokeWidth = 2;
        latitudeBullet.circle.propertyFields.radius = "townSize";

        var latitudeState = latitudeBullet.states.create("hover");
        latitudeState.properties.scale = 1.2;

        var latitudeLabel = latitudeSeries.bullets.push(new am4charts.LabelBullet());
        latitudeLabel.label.text = "{townName2}";
        latitudeLabel.label.horizontalCenter = "left";
        latitudeLabel.label.dx = 14;

        // Add legend
        chart.legend = new am4charts.Legend();

        // Add cursor
        chart.cursor = new am4charts.XYCursor();
        chart.cursor.fullWidthLineX = true;
        chart.cursor.xAxis = dateAxis;
        chart.cursor.lineX.strokeOpacity = 0;
        chart.cursor.lineX.fill = am4core.color("#000");
        chart.cursor.lineX.fillOpacity = 0.1;

    }); // end am4core.ready()
</script>

<!-- Pie Chart code -->
<script>
    am4core.ready(function() {

        // Themes begin
        am4core.useTheme(am4themes_animated);
        // Themes end

        // Create chart instance
        var chart = am4core.create("piechartdiv", am4charts.PieChart);

        // Add and configure Series
        var pieSeries = chart.series.push(new am4charts.PieSeries());
        pieSeries.dataFields.value = "litres";
        pieSeries.dataFields.category = "country";

        // Let's cut a hole in our Pie chart the size of 30% the radius
        chart.innerRadius = am4core.percent(30);

        // Put a thick white border around each Slice
        pieSeries.slices.template.stroke = am4core.color("#fff");
        pieSeries.slices.template.strokeWidth = 2;
        pieSeries.slices.template.strokeOpacity = 1;
        pieSeries.slices.template
            // change the cursor on hover to make it apparent the object can be interacted with
            .cursorOverStyle = [{
                "property": "cursor",
                "value": "pointer"
            }];

        pieSeries.alignLabels = false;
        pieSeries.labels.template.bent = true;
        pieSeries.labels.template.radius = 3;
        pieSeries.labels.template.padding(0, 0, 0, 0);

        pieSeries.ticks.template.disabled = true;

        // Create a base filter effect (as if it's not there) for the hover to return to
        var shadow = pieSeries.slices.template.filters.push(new am4core.DropShadowFilter);
        shadow.opacity = 0;

        // Create hover state
        var hoverState = pieSeries.slices.template.states.getKey("hover"); // normally we have to create the hover state, in this case it already exists

        // Slightly shift the shadow and make it more prominent on hover
        var hoverShadow = hoverState.filters.push(new am4core.DropShadowFilter);
        hoverShadow.opacity = 0.7;
        hoverShadow.blur = 5;

        // Add a legend
        chart.legend = new am4charts.Legend();

        chart.data = [{
            "country": "Lithuania",
            "litres": 501.9
        }, {
            "country": "Germany",
            "litres": 165.8
        }, {
            "country": "Australia",
            "litres": 139.9
        }, {
            "country": "Austria",
            "litres": 128.3
        }, {
            "country": "UK",
            "litres": 99
        }, {
            "country": "Belgium",
            "litres": 60
        }];

    }); // end am4core.ready()
</script>

<!-- Stack Chart code -->
<script>
    am4core.ready(function() {

        // Themes begin
        am4core.useTheme(am4themes_animated);
        // Themes end

        // Create chart instance
        var chart = am4core.create("stackchartdiv", am4charts.XYChart);

        // Add data
        chart.data = [{
            "year": "2016",
            "europe": 2.5,
            "namerica": 2.5,
            "asia": 2.1,
            "lamerica": 0.3,
            "meast": 0.2,
            "africa": 0.1
        }, {
            "year": "2017",
            "europe": 2.6,
            "namerica": 2.7,
            "asia": 2.2,
            "lamerica": 0.3,
            "meast": 0.3,
            "africa": 0.1
        }, {
            "year": "2018",
            "europe": 2.8,
            "namerica": 2.9,
            "asia": 2.4,
            "lamerica": 0.3,
            "meast": 0.3,
            "africa": 0.1
        }];

        // Create axes
        var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
        categoryAxis.dataFields.category = "year";
        categoryAxis.renderer.grid.template.location = 0;


        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
        valueAxis.renderer.inside = true;
        valueAxis.renderer.labels.template.disabled = true;
        valueAxis.min = 0;

        // Create series
        function createSeries(field, name) {

            // Set up series
            var series = chart.series.push(new am4charts.ColumnSeries());
            series.name = name;
            series.dataFields.valueY = field;
            series.dataFields.categoryX = "year";
            series.sequencedInterpolation = true;

            // Make it stacked
            series.stacked = true;

            // Configure columns
            series.columns.template.width = am4core.percent(60);
            series.columns.template.tooltipText = "[bold]{name}[/]\n[font-size:14px]{categoryX}: {valueY}";

            // Add label
            var labelBullet = series.bullets.push(new am4charts.LabelBullet());
            labelBullet.label.text = "{valueY}";
            labelBullet.locationY = 0.5;
            labelBullet.label.hideOversized = true;

            return series;
        }

        createSeries("europe", "Europe");
        createSeries("namerica", "North America");
        createSeries("asia", "Asia-Pacific");
        createSeries("lamerica", "Latin America");
        createSeries("meast", "Middle-East");
        createSeries("africa", "Africa");

        // Legend
        chart.legend = new am4charts.Legend();

    }); // end am4core.ready()
</script>

@endsection
