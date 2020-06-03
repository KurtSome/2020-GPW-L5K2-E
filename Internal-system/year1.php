 <?php
  
    
    $fuckingdate = date("Y",strtotime("-1 years")) . "-1-1";
    $fuck = date("Y",strtotime("-1 years")) . "-12-31";
        $g=date("Y-1-1");
        $h=date("Y-m-d");
       
       
        $sql = "SELECT * FROM (order_item inner join item on item.item_no=order_item.item_no)inner join order_form on order_form.order_no=order_item.order_no WHERE order_date BETWEEN '$fuckingdate' AND '$fuck'" ;
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $b=0;      
    while($row = $result->fetch_assoc()) {  
            $b=$b+($row['item_price']*$row['order_item_number']);
        
    }  
} else {
    $b=0;

    
} 
 $sql = "SELECT * FROM (order_item inner join item on item.item_no=order_item.item_no)inner join order_form on order_form.order_no=order_item.order_no WHERE order_date BETWEEN '$g' AND '$h'" ;
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $ab=0;      
    while($row = $result->fetch_assoc()) {  
            $ab=$ab+($row['item_price']*$row['order_item_number']);
        
    }  
} else {
    $ab=0;
    
    
} 
          
        
        
    $sql = "select * FROM employee INNER JOIN salary on employee.emp_id=salary.emp_id WHERE salary.date BETWEEN '$fuckingdate' AND '$fuck'";    
    $result = mysqli_query($connection,$sql);    
if ($result->num_rows > 0) { $a=0;      
    while($row = $result->fetch_assoc()) {  
            $a=$a+$row['salary'];  
    }  
} else {  
   $a=0;
    
        
}

 $sql = "select * FROM employee INNER JOIN salary on employee.emp_id=salary.emp_id WHERE salary.date BETWEEN '$g' AND '$h'";    
    $result = mysqli_query($connection,$sql);    
if ($result->num_rows > 0) { $aa=0;      
    while($row = $result->fetch_assoc()) {  
            $aa=$aa+$row['salary'];  
    }  
} else {  
    $aa=0;
    
        
}
       
        



        
        $sql = "SELECT * FROM supplier_item   WHERE supplier_item.sup_date BETWEEN '$fuckingdate' AND '$fuck'";  
$result =  mysqli_query($connection, $sql);  
   
if ($result->num_rows > 0) {   $e=0;
    
     
    while($row = $result->fetch_assoc()) {$e = $e + $row["sup_total_price"]; 
        
        
        
    }  
} else {  
   $e=0;  
}

  $sql = "SELECT * FROM supplier_item  WHERE supplier_item.sup_date BETWEEN '$g' AND '$h'";  
$result =  mysqli_query($connection, $sql);  
   
if ($result->num_rows > 0) {   $ae=0;
    
     
    while($row = $result->fetch_assoc()) {$ae = $ae +$row["sup_total_price"]; 
        
        
        
    }  
} else {  
    $ae=0;
}
 

        $sql = "select * FROM costs WHERE cost_date BETWEEN '$fuckingdate' AND '$fuck'";
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $d=0;      
    while($row = $result->fetch_assoc()) {  
            $d=$d+$row['cost_water']+$row['cost_electricity'];  
    }  
} else {  
   $d=0;}

  $sql = "select * FROM costs WHERE cost_date BETWEEN '$g' AND '$h'";
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $ad=0;      
    while($row = $result->fetch_assoc()) {  
            $ad=$ad+$row['cost_water']+$row['cost_electricity'];  
    }  
} else {  
    $ad=0;}

      
 $percent=$b * 0.05;
 $apercent=$ab * 0.05;
$p=$b-$a-$e-$d-$percent;
$ap=$ab-$aa-$ae-$ad-$apercent;
$cost=$a+$e+$d+$percent;
$acost=$aa+$ae+$ad+$apercent;

        
   echo"
   <script>
		var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var color = Chart.helpers.color;
		var horizontalBarChartData = {
			labels: ['OperateIncome', 'Totalcost', 'Profit', 'Salary', 'Raw materials', 'Others', 'Tax'],
			datasets: [{
				label: '2019',
				backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
				borderColor: window.chartColors.red,
				borderWidth: 1,
				data: [
                        $b,
                        $cost,
                        $p,
					    $a,
						$e,
						
						$d,
                        $percent
				]
			}, {
				label: '2020',
				backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
				borderColor: window.chartColors.blue,
				data: [
                       $ab,
                        $acost,
                        $ap,
					    $aa,
						$ae,
				
						$ad,
                        $apercent
				]
			}]

		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myHorizontalBar = new Chart(ctx, {
				type: 'horizontalBar',
				data: horizontalBarChartData,
				options: {
					// Elements options apply to all of the options unless overridden in a dataset
					// In this case, we are setting the border of each horizontal bar to be 2px wide
					elements: {
						rectangle: {
							borderWidth: 2,
						}
					},
					responsive: true,
					legend: {
						position: 'right',
					},
					title: {
						display: true,
						text: 'Operate income chart'
					}
				}
			});

		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			var zero = Math.random() < 0.2 ? true : false;
			horizontalBarChartData.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return zero ? 0.0 : randomScalingFactor();
				});

			});
			window.myHorizontalBar.update();
		});

		var colorNames = Object.keys(window.chartColors);

		document.getElementById('addDataset').addEventListener('click', function() {
			var colorName = colorNames[horizontalBarChartData.datasets.length % colorNames.length];
			var dsColor = window.chartColors[colorName];
			var newDataset = {
				label: 'Dataset ' + (horizontalBarChartData.datasets.length + 1),
				backgroundColor: color(dsColor).alpha(0.5).rgbString(),
				borderColor: dsColor,
				data: []
			};

			for (var index = 0; index < horizontalBarChartData.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());
			}

			horizontalBarChartData.datasets.push(newDataset);
			window.myHorizontalBar.update();
		});

		document.getElementById('addData').addEventListener('click', function() {
			if (horizontalBarChartData.datasets.length > 0) {
				var month = MONTHS[horizontalBarChartData.labels.length % MONTHS.length];
				horizontalBarChartData.labels.push(month);

				for (var index = 0; index < horizontalBarChartData.datasets.length; ++index) {
					horizontalBarChartData.datasets[index].data.push(randomScalingFactor());
				}

				window.myHorizontalBar.update();
			}
		});

		document.getElementById('removeDataset').addEventListener('click', function() {
			horizontalBarChartData.datasets.pop();
			window.myHorizontalBar.update();
		});

		document.getElementById('removeData').addEventListener('click', function() {
			horizontalBarChartData.labels.splice(-1, 1); // remove the label first

			horizontalBarChartData.datasets.forEach(function(dataset) {
				dataset.data.pop();
			});

			window.myHorizontalBar.update();
		});
	</script> 
    
   
 
  "  
       ;  
            
            mysqli_close($connection);
        ?>
    