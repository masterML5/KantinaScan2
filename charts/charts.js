
	
$(document).ready(function(){


	makechart();
	makechart2();
	// makechart3();
	makechart4();

	function makechart()
	{
		$.ajax({
			url:"data.php",
			method:"POST",
			data:{action:'fetch'},
			dataType:"JSON",
			success:function(data)
			{
				var language = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					language.push(data[count].language);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:language,
					datasets:[
						{
							label:'Vote',
							backgroundColor:color,
							color:'#fff',
							data:total
						}
					]
				};

				var options = {
					responsive:true,
					scales:{
						yAxes:[{
							ticks:{
								min:0
							}
						}]
					}
                   
				};

				var group_chart1 = $('#pie_chart');

				var graph1 = new Chart(group_chart1, {
					type:"pie",
					data:chart_data,
					
                   
				});

				
			}
		})
	}
	function makechart2()
	{
		$.ajax({
			url:"data.php",
			method:"POST",
			data:{action:'fetch2'},
			dataType:"JSON",
			success:function(data)
			{
				var language = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					language.push(data[count].language);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:language,
					datasets:[
						{
							label:'Vote',
							backgroundColor:color,
							color:'#fff',
							data:total
						}
					]
				};

				var options = {
					responsive:true,
					scales:{
						yAxes:[{
							ticks:{
								min:0
							}
						}]
					}
				};

			

				var group_chart2 = $('#doughnut_chart');

				var graph2 = new Chart(group_chart2, {
					type:"doughnut",
					data:chart_data
				});

				
			}
		})
	}
	// function makechart3()
	// {
	// 	$.ajax({
	// 		url:"data.php",
	// 		method:"POST",
	// 		data:{action:'fetch3'},
	// 		dataType:"JSON",
	// 		success:function(data)
	// 		{
	// 			var language = [];
	// 			var total = [];
	// 			var color = [];
				
	// 			for(var count = 0; count < data.length; count++)
	// 			{
	// 				language.push(data[count].language);
	// 				total.push(data[count].total);
	// 				color.push(data[count].color);
	// 			}
	// 			const labels = ['Januar', 'Februar', 'Mart', 'April', 'Maj', 'Jun', 'Jul', 'Avgust', 'Septembar', 'Oktorbar', 'Novembar', 'Decembar'];
	// 			var chart_data = {
	// 				labels:labels,
	// 				datasets:[
	// 					{
	// 						label:'Vote',
	// 						backgroundColor:color,
	// 						color:'#fff',
	// 						data:total
	// 					}
	// 				]
	// 			};

	// 			var options = {
	// 				responsive:true,
	// 				scales:{
	// 					x:{
	// 						type: 'time',
	// 						time: {
	// 							unit: 'month'
	// 						}
	// 					},

	// 					yAxes:[{
	// 						ticks:{
	// 							min:0
	// 						}
	// 					}]
	// 				}
	// 			};

			

	// 			var group_chart3 = $('#bar_chart2');
			
	// 			var graph3 = new Chart(group_chart3, {
	// 				type:'bar',
	// 				data:chart_data,
	// 				options:options,
			
					
	// 			});
	// 		}
	// 	})
	// }
	function makechart4()
	{
		$.ajax({
			url:"data.php",
			method:"POST",
			data:{action:'fetch4'},
			dataType:"JSON",
			success:function(data)
			{
				var language = [];
				var total = [];
				var color = [];
				
				for(var count = 0; count < data.length; count++)
				{
					language.push(data[count].language);
					total.push(data[count].total);
					color.push(data[count].color);
				}
			
				var chart_data = {
					labels:language,
					datasets:[
						{
							label:'Vote',
							backgroundColor:color,
							color:'#fff',
							data:total
						}
					]
				};

				var options = {
					responsive:true,
					scales:{
						yAxes:[{
							ticks:{
								min:0
							}
						}]
					},
                    plugins: {
            
        			}
				};

			

				var group_chart3 = $('#bar_chart');

				var graph3 = new Chart(group_chart3, {
					type:'bar',
					data:chart_data,
					options:options
				});
			}
		})
	}

});

