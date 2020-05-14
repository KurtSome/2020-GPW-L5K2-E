<!DOCTYPE html >
<html >
<head>
    <title>bar chart </title>   
    <script src="build/source/echarts.js" type="text/javascript"></script>
</head>
<body>
<div id="div1" style="width:900px;height:400px;border:1px solid #dddddd;margin:10px auto;"></div>
    <?php
        // 1. Open database connection 
        $dbhost="localhost";
        $dbuser="pumeilin";
        $dbpass="e5rtxx";
        $dbname="2201713130224";
        $connection=mysqli_connect ($dbhost,$dbuser,$dbpass,$dbname);
        // Test if connection is ok .
        if (mysqli_connect_errno()){
                die("Database connectino failed:".
                   mysqli_connect_error().
                    "(". mysqli_connect_errno().")"
            );
        }
    
         $query = "SELECT idu, date, COUNT(idu) as COUNT FROM users GROUP BY date";
         $result = mysqli_query($connection, $query);
         while($row = mysqli_fetch_array($result)) {
    ?>
    
<script type="text/javascript">
        require.config({
            paths: {
                echarts: './build/dist' //Refer to the resource folder path and note the path
            }
        });
        require(
            [
                'echarts',          
                'echarts/chart/bar',    //Bar chart
                'echarts/chart/line'     // line chart
     ],
            function (ec) {
                var myChart = ec.init(document.getElementById('div1'));
                var ecConfig = require('echarts/config');
                var option = {
                    title: {
                        text: 'clients register'
                    },
                    tooltip: {
                        trigger: 'axis'
                    },
                    legend: {
                        data: ['clients register']
                    },
                    toolbox: {//Whether to display toolbox
                        show: true,
                        feature: {
                            mark: { show: true },
                            dataView: { show: true, readOnly: false },
                            magicType: { show: true, type: ['line', 'bar'] },
                            restore: { show: true },
                            saveAsImage: { show: true }
                        }
                    },
                    //calculable: true, Easy to mistake the attribute, broken line diagram, column diagram whether superposition
                    xAxis: [{
                                type: 'category',
                                data: ['<?php echo $row["date"]; ?>']
                    }],
                    yAxis: [{
                            type: 'value'
                    }],
                    series: [
                        {
                            name: 'clients register',
                            type: 'bar',
                            data: ['<?php echo $row['COUNT']; ?>']
                        }
                    ]
                };
                myChart.setOption(option);
            }
        ); 
    
    </script>
    <?php
         }
    ?>
</body>
</html>
