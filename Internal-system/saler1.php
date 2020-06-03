 <?php
  
    
    $e = date("Y") . "-1-1";      $x= date("Y") . "-1-31";
    $ea = date("Y") . "-2-1";     $xa=date("Y-2-d", strtotime(date("Y-3-1") .  "-1 day"));
    $eb=date("Y-3-1");            $xb=date("Y-3-31");
    $ec=date("Y-4-1");            $xc=date("Y-4-30");
    $ed=date("Y-5-1");            $xd=date("Y-5-31");
    $ee=date("Y-6-1");            $xe=date("Y-6-30");
    $ef=date("Y-7-1");            $xf=date("Y-7-31");
    $eg=date("Y-8-1");            $xg=date("Y-8-31");
    $eh=date("Y-9-1");           $xh=date("Y-9-30");
$ei=date("Y-10-1");               $xi=date("Y-10-31");
$ej=date("Y-11-1");          $xj=date("Y-11-30");
$ek=date("Y-12-1");           $xk=date("Y-12-31");





        $sql = "SELECT * FROM (order_item inner join item on item.item_no=order_item.item_no)inner join order_form on order_form.order_no=order_item.order_no where item_name = 'Sandwich'and (order_date between '$e' and '$x')" ;
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $a=0;      
    while($row = $result->fetch_assoc()) {  
            $a=$a+$row['order_item_number'];
        
    }  
} else {
    $a=0;

    
} 
   $sql = "SELECT * FROM (order_item inner join item on item.item_no=order_item.item_no)inner join order_form on order_form.order_no=order_item.order_no where item_name = 'Fresh Fruit Salad'and (order_date between '$e' and '$x')" ;
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $c=0;      
    while($row = $result->fetch_assoc()) {  
            $c=$c+$row['order_item_number'];
        
    }  
} else {
    $c=0;
    
    
} 
  
        $sql = "SELECT * FROM (order_item inner join item on item.item_no=order_item.item_no)inner join order_form on order_form.order_no=order_item.order_no where item_name = 'Sandwich'and (order_date between '$ea' and '$xa')" ;
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $aa=0;      
    while($row = $result->fetch_assoc()) {  
            $aa=$a+$row['order_item_number'];
        
    }  
} else {
    $aa=0;

    
}         
        
    $sql = "SELECT * FROM (order_item inner join item on item.item_no=order_item.item_no)inner join order_form on order_form.order_no=order_item.order_no where item_name = 'Fresh Fruit Salad'and (order_date between '$ea' and '$xa')" ;
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $ca=0;      
    while($row = $result->fetch_assoc()) {  
            $ca=$c+$row['order_item_number'];
        
    }  
} else {
    $ca=0;
    
    
} 




        $sql = "SELECT * FROM (order_item inner join item on item.item_no=order_item.item_no)inner join order_form on order_form.order_no=order_item.order_no where item_name = 'Sandwich'and (order_date between '$eb' and '$xb')" ;
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $ab=0;      
    while($row = $result->fetch_assoc()) {  
            $ab=$ab+$row['order_item_number'];
        
    }  
} else {
    $ab=0;

    
} 


        $sql = "SELECT * FROM (order_item inner join item on item.item_no=order_item.item_no)inner join order_form on order_form.order_no=order_item.order_no where item_name = 'Fresh Fruit Salad'and (order_date between '$eb' and '$xb')" ;
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $cb=0;      
    while($row = $result->fetch_assoc()) {  
            $cb=$cb+$row['order_item_number'];
        
    }  
} else {
    $cb=0;

    
} 



        $sql = "SELECT * FROM (order_item inner join item on item.item_no=order_item.item_no)inner join order_form on order_form.order_no=order_item.order_no where item_name = 'Sandwich'and (order_date between '$ec' and '$xc')" ;
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $ac=0;      
    while($row = $result->fetch_assoc()) {  
            $ac=$ac+$row['order_item_number'];
        
    }  
} else {
    $ac=0;

    
} 


        $sql = "SELECT * FROM (order_item inner join item on item.item_no=order_item.item_no)inner join order_form on order_form.order_no=order_item.order_no where item_name = 'Fresh Fruit Salad'and (order_date between '$ec' and '$xc')" ;
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $cc=0;      
    while($row = $result->fetch_assoc()) {  
            $cc=$cc+$row['order_item_number'];
        
    }  
} else {
    $cc=0;

    
} 



        $sql = "SELECT * FROM (order_item inner join item on item.item_no=order_item.item_no)inner join order_form on order_form.order_no=order_item.order_no where item_name = 'Sandwich'and (order_date between '$ed' and '$xd')" ;
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $ad=0;      
    while($row = $result->fetch_assoc()) {  
            $ad=$ad+$row['order_item_number'];
        
    }  
} else {
    $ad=0;

    
} 


        $sql = "SELECT * FROM (order_item inner join item on item.item_no=order_item.item_no)inner join order_form on order_form.order_no=order_item.order_no where item_name = 'Fresh Fruit Salad'and (order_date between '$ed' and '$xd')" ;
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $cd=0;      
    while($row = $result->fetch_assoc()) {  
            $cd=$cd+$row['order_item_number'];
        
    }  
} else {
    $cd=0;

    
} 




        $sql = "SELECT * FROM (order_item inner join item on item.item_no=order_item.item_no)inner join order_form on order_form.order_no=order_item.order_no where item_name = 'Sandwich'and (order_date between '$ee' and '$xe')" ;
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $ae=0;      
    while($row = $result->fetch_assoc()) {  
            $ae=$ae+$row['order_item_number'];
        
    }  
} else {
    $ae=0;

    
} 


        $sql = "SELECT * FROM (order_item inner join item on item.item_no=order_item.item_no)inner join order_form on order_form.order_no=order_item.order_no where item_name = 'Fresh Fruit Salad'and (order_date between '$ee' and '$xe')" ;
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $ce=0;      
    while($row = $result->fetch_assoc()) {  
            $ce=$ce+$row['order_item_number'];
        
    }  
} else {
    $ce=0;

    
} 


        $sql = "SELECT * FROM (order_item inner join item on item.item_no=order_item.item_no)inner join order_form on order_form.order_no=order_item.order_no where item_name = 'Sandwich'and (order_date between '$ef' and '$xf')" ;
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $af=0;      
    while($row = $result->fetch_assoc()) {  
            $af=$af+$row['order_item_number'];
        
    }  
} else {
    $af=0;

    
} 


        $sql = "SELECT * FROM (order_item inner join item on item.item_no=order_item.item_no)inner join order_form on order_form.order_no=order_item.order_no where item_name = 'Fresh Fruit Salad'and (order_date between '$ef' and '$xf')" ;
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $cf=0;      
    while($row = $result->fetch_assoc()) {  
            $cf=$cf+$row['order_item_number'];
        
    }  
} else {
    $cf=0;

    
} 



        $sql = "SELECT * FROM (order_item inner join item on item.item_no=order_item.item_no)inner join order_form on order_form.order_no=order_item.order_no where item_name = 'Sandwich'and (order_date between '$eg' and '$xg')" ;
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $ag=0;      
    while($row = $result->fetch_assoc()) {  
            $ag=$ag+$row['order_item_number'];
        
    }  
} else {
    $ag=0;

    
} 


        $sql = "SELECT * FROM (order_item inner join item on item.item_no=order_item.item_no)inner join order_form on order_form.order_no=order_item.order_no where item_name = 'Fresh Fruit Salad'and (order_date between '$eg' and '$xg')" ;
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $cg=0;      
    while($row = $result->fetch_assoc()) {  
            $cg=$cg+$row['order_item_number'];
        
    }  
} else {
    $cg=0;

    
} 



        $sql = "SELECT * FROM (order_item inner join item on item.item_no=order_item.item_no)inner join order_form on order_form.order_no=order_item.order_no where item_name = 'Sandwich'and (order_date between '$eh' and '$xh')" ;
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $ah=0;      
    while($row = $result->fetch_assoc()) {  
            $ah=$ah+$row['order_item_number'];
        
    }  
} else {
    $ah=0;

    
} 


        $sql = "SELECT * FROM (order_item inner join item on item.item_no=order_item.item_no)inner join order_form on order_form.order_no=order_item.order_no where item_name = 'Fresh Fruit Salad'and (order_date between '$eh' and '$xh')" ;
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $ch=0;      
    while($row = $result->fetch_assoc()) {  
            $ch=$ch+$row['order_item_number'];
        
    }  
} else {
    $ch=0;

    
} 





        $sql = "SELECT * FROM (order_item inner join item on item.item_no=order_item.item_no)inner join order_form on order_form.order_no=order_item.order_no where item_name = 'Sandwich'and (order_date between '$ei' and '$xi')" ;
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $ai=0;      
    while($row = $result->fetch_assoc()) {  
            $ai=$ai+$row['order_item_number'];
        
    }  
} else {
    $ai=0;

    
} 


        $sql = "SELECT * FROM (order_item inner join item on item.item_no=order_item.item_no)inner join order_form on order_form.order_no=order_item.order_no where item_name = 'Fresh Fruit Salad'and (order_date between '$ei' and '$xi')" ;
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $ci=0;      
    while($row = $result->fetch_assoc()) {  
            $ci=$ci+$row['order_item_number'];
        
    }  
} else {
    $ci=0;

    
} 


        $sql = "SELECT * FROM (order_item inner join item on item.item_no=order_item.item_no)inner join order_form on order_form.order_no=order_item.order_no where item_name = 'Sandwich'and (order_date between '$ej' and '$xj')" ;
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $aj=0;      
    while($row = $result->fetch_assoc()) {  
            $aj=$aj+$row['order_item_number'];
        
    }  
} else {
    $aj=0;

    
} 


        $sql = "SELECT * FROM (order_item inner join item on item.item_no=order_item.item_no)inner join order_form on order_form.order_no=order_item.order_no where item_name = 'Fresh Fruit Salad'and (order_date between '$ej' and '$xj')" ;
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $cj=0;      
    while($row = $result->fetch_assoc()) {  
            $cj=$cj+$row['order_item_number'];
        
    }  
} else {
    $cj=0;

    
}

        $sql = "SELECT * FROM (order_item inner join item on item.item_no=order_item.item_no)inner join order_form on order_form.order_no=order_item.order_no where item_name = 'Sandwich'and (order_date between '$ek' and '$xk')" ;
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $ak=0;      
    while($row = $result->fetch_assoc()) {  
            $ak=$ak+$row['order_item_number'];
        
    }  
} else {
    $ak=0;

    
} 


        $sql = "SELECT * FROM (order_item inner join item on item.item_no=order_item.item_no)inner join order_form on order_form.order_no=order_item.order_no where item_name = 'Fresh Fruit Salad'and (order_date between '$ek' and '$xk')" ;
        $result = mysqli_query($connection,$sql);
   
if ($result->num_rows > 0) { $ck=0;      
    while($row = $result->fetch_assoc()) {  
            $ck=$ck+$row['order_item_number'];
        
    }  
} else {
    $ck=0;

    
} 
        
   echo"
   <script>
		var lineChartData = {
			labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
			datasets: [{
				label: 'Sandwich',
				borderColor: window.chartColors.red,
				backgroundColor: window.chartColors.red,
				fill: false,
				data: [
					$a,
                    $aa,
					$ab,
					$ac,
					$ad,
					$ae,
					$af,
					$ag,
                    $ah,
                    $ai,
                    $aj,
                    $ak
				],
				yAxisID: 'y-axis-1',
			}, {
				label: 'Fresh Fruit Salad',
				borderColor: window.chartColors.blue,
				backgroundColor: window.chartColors.blue,
				fill: false,
				data: [
					$c,
                    $ca,
					$cb,
					$cc,
					$cd,
					$ce,
					$cf,
					$cg,
                    $ch,
                    $ci,
                    $cj,
                    $ck,
                    
				],
				yAxisID: 'y-axis-2'
			}]
		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myLine = Chart.Line(ctx, {
				data: lineChartData,
				options: {
					responsive: true,
					hoverMode: 'index',
					stacked: false,
					title: {
						display: true,
						text: 'Sale report in this year(number)'
					},
					scales: {
						yAxes: [{
							type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
							display: true,
							position: 'left',
							id: 'y-axis-1',
						}, {
							type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
							display: true,
							position: 'right',
							id: 'y-axis-2',

							// grid line settings
							gridLines: {
								drawOnChartArea: false, // only want the grid lines for one axis to show up
							},
						}],
					}
				}
			});
		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			lineChartData.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return randomScalingFactor();
				});
			});

			window.myLine.update();
		});
	</script>
   
   
   
   
   
 "
       ;  
            
            mysqli_close($connection);
        ?>
    