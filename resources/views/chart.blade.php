<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css" />''
    <title>PIE Chart</title>

    <style>
        .container {
            padding: 0;
            margin: 0;
        }

        h1 {
            color: #fff;
            background:#333;
            padding: 8px 4px;
            text-align: center;
        }
        #chart_wrap {
            position: relative;
            padding-bottom: 100%;
            height: 0;
            overflow:hidden;
        }

        #piechart {
            position: absolute;
            top: 0;
            left: 0;
            width:50%;
            height:30%;
        }
    </style>
    <!-- CSS only -->

</head>

<body>
    <div class="container">
        <h1>Dynamic Bar Charts | AJAX & JQuery</h1>
    </div>
    <div class="col-md-3">  
        <input type="text" name="start_date" id="start_date" class="form-control date_picker" placeholder="Select Date" /> 
        <select name="year" id="year" class="form-control">
            <option>Select Year</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
        </select> 
   </div>  
    
    <div id="chart_wrap">
        <div id="piechart"></div>
    </div>

</body>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script type="text/javascript">
    // google.charts.load('current', {
    //     'packages': ['corechart'], 'callback': drawChart
    // });

    google.charts.load('current', {
        packages: ['corechart']
    });
    google.charts.setOnLoadCallback(function () {
        load_data();
    });


    function drawChart(drawChart) {
        let jsonData = drawChart;
    
        let data = new google.visualization.arrayToDataTable([]);
        data.addColumn({type: 'string', label: 'Name'});
         data.addColumn({type: 'number', label: 'Sales'});
     

        $.each(jsonData, (i, jsonData) => {
            let name = jsonData.name;
            let total_sales = jsonData.total_sales;
            data.addRows([
                [name, total_sales]
            ]);
        });


        var options = {
            title: 'Sales Chart',
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }

</script>


<script>


    function load_data(year) {
        $.ajax({
                url: 'fetch_data',
                method:"POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    year:year
                },
                dataType: "JSON",
                success:function(data) {
                    drawChart(data);
                } 
            });
            console.log(`Year: ${year}`);
    }


    $(document).ready(function() {
        $('#year').change(function() {
            let year = $(this).val();
            if(year != '') {
                load_data(year);
            }
        });
    });
</script>
</html>
