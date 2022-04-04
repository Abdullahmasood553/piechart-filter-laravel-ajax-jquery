
var segments = location.href.split('/');
if(segments[3] == 'dashboard'){
	renderDashboard();	
}

$(document).on('change', '.select_report_time_period', function(){
	if($(this).val() != 4){
		renderDashboard();
		$('.dashboard_date_filter').hide();
	}else{
		$('.dashboard_date_filter').show();
	}
})

$(document).on('change', '#start_date', function() {
	if ($(this).val()) {
		if ($('#end_date').val())
			renderDashboard();
	}
});

$(document).on('change', '#end_date', function() {
	if ($(this).val()) {
		if ($('#start_date').val())
			renderDashboard();
	}
});

function renderDashboard(){  
	$('.total_rev_dashboard').text('Loading...');
	$('.total_bookings_dashboard').text('Loading...');
	$('.active_cust_dashboard').text('Loading...');
	$('.avg_rev_cust_dashboard').text('Loading...');
	$('.opening_balance').text('Loading...');
	$('.new_sale_revenue').text('Loading...');
	$('.amount_rec_dashboard').text('Loading...');
	$('.remaining_amount_dashboard').text('Loading...');
	$('.avg_rev_day_dashboard').text('Loading...');
	$('.avg_rev_shipment_dashboard').text('Loading...');
	$('.avg_shipment_day_dashboard').text('Loading...');
	$('.avg_weight_shipment_dashboard').text('Loading...');
	$('.consignment_designation_div').empty();
	$('.day_wise_body').empty(); 
	$('.total_expense').text('Loading...');
	var cats = [];
	$.ajax({
		type: 'GET',
		url: '/get_graph_reports',
		data: {
			_token: '{!! csrf_token() !!}',
			time_period: $('.select_report_time_period').val(),
			startDate: $('#start_date').val(),
			endDate: $('#end_date').val()
		},
		success: function(response) { 
			var response = JSON.parse(response)
			//debugger;
			//console.log(response.customers_array)
			$('.total_rev_dashboard').text('Rs. ' + (response.data.total_revenue ? addCommas(parseFloat(response.data.total_revenue)) : 0));
			$('.total_bookings_dashboard').text(response.data.total_bookings ? addCommas(response.data.total_bookings) : 0);
			$('.active_cust_dashboard').text(response.data.active_customers ? addCommas(response.data.active_customers) : 0);
			var avg_rev = parseFloat(response.data.total_revenue) / parseFloat(response.data.active_customers);
			$('.avg_rev_cust_dashboard').text('Rs. ' + (avg_rev ? addCommas(avg_rev.toFixed(0)) : 0));
			$('.total_expense').text('Rs. ' + (response.data.total_expense ? addCommas(response.data.total_expense.toFixed(0)) : 0));
			
			$('.opening_bal_heading').text($('.select_report_time_period').val() == '3' ? 'Historical Balance' : 'Opening Balance');
			$('.opening_balance').text('Rs. ' + (response.opening_bal ? addCommas(response.opening_bal.toFixed(0)) : 0));
			$('.new_sale_revenue').text('Rs. ' + (response.data.total_revenue ? addCommas(parseFloat(response.data.total_revenue).toFixed(0)) : 0));
			$('.amount_rec_dashboard').text('Rs. ' + (response.data.amount_recived ? addCommas(parseFloat(response.data.amount_recived).toFixed(0)) : 0));
			
			//var remaining_amount = parseFloat(response.opening_bal) - parseFloat(response.data.amount_recived);
			//(Opening Balance + Sales Rev) - Amount Rec
			var remaining_amount = (parseFloat(response.opening_bal) + parseFloat(response.data.total_revenue)) - parseFloat(response.data.amount_recived);
			$('.remaining_amount_dashboard').text('Rs. ' + (remaining_amount ? addCommas(remaining_amount.toFixed(0)) : 0));

			var avg_rev_per_day = response.total_days.length ? parseFloat(response.data.total_revenue) / parseFloat(response.total_days.length) : 0;
			
			$('.avg_rev_day_dashboard').text('Rs. ' + addCommas(avg_rev_per_day.toFixed(0)));

			var avg_rev_shipment = parseFloat(response.data.total_revenue) / response.del_team.length;
			$('.avg_rev_shipment_dashboard').text('Rs. ' + (avg_rev_shipment ? addCommas(avg_rev_shipment.toFixed(0)) : 0));

			var avg_shipment_day = parseFloat(response.data.total_bookings) / response.total_days.length;
			$('.avg_shipment_day_dashboard').text(avg_shipment_day ? addCommas(avg_shipment_day.toFixed(1)) : 0);

			var avr_weight = (parseFloat(response.data.white_bottles) + parseFloat(response.data.blue_bottles)) / parseFloat(response.data.total_bookings) 
			$('.avg_weight_shipment_dashboard').text(avr_weight ? addCommas(avr_weight.toFixed(1)) : 0);
			
			response.zone_wise_orders.forEach(element => {
				$('.consignment_designation_div').append(`<div class="_dash-prog ">
					<h5>${element['zone_name']}</h5>
					<div class="progress-w-percent">
						<span class="progress-value">${((element['price'] / response.sum_of_top_ten_zone_price) * 100).toFixed(0)}% </span>
						<div class="progress">
							<div class="progress-bar" role="progressbar"
								style="width:${(element['price'] / response.sum_of_top_ten_zone_price) * 100}%;"
								aria-valuenow="${(element['price'] / response.sum_of_top_ten_zone_price) * 100}" aria-valuemin="0"
								aria-valuemax="100"></div>
						</div>
					</div>
				</div>`)
			})

			response.day_wise_data.forEach(element => {
				$('.day_wise_body').append(`<tr>
					<td> ${element['day']}</td>
					<td> ${addCommas(element['white_bottles'])} </td>
					<td> ${addCommas(element['blue_bottles'])} </td>
					<td> Rs.${addCommas(element['amount_rec'])} </td>
				</tr>`)
			})


			var graph_data = response.graph_data;
			let wbData = [];
			let bbData = [];
			graph_data.forEach(element => {
				cats.push(element['area']);
				wbData.push(element["wb"]);
				bbData.push(element["bb"]);
			}); 

			var dom = document.getElementById("e_chart_1");
			var myChart = echarts.init(dom);
			var app = {};
			option = null;
			var posList = [
				'left', 'right', 'top', 'bottom',
				'inside',
				'insideTop', 'insideLeft', 'insideRight', 'insideBottom',
				'insideTopLeft', 'insideTopRight', 'insideBottomLeft', 'insideBottomRight'
			];

			app.configParameters = {
				rotate: {
					min: -90,
					max: 90
				},
				align: {
					options: {
						left: 'left',
						center: 'center',
						right: 'right'
					}
				},
				verticalAlign: {
					options: {
						top: 'top',
						middle: 'middle',
						bottom: 'bottom'
					}
				},
				position: {
					options: echarts.util.reduce(posList, function (map, pos) {
						map[pos] = pos;
						return map;
					}, {})
				},
				distance: {
					min: 0,
					max: 100
				}
			};

			app.config = {
				rotate: 90,
				align: 'left',
				verticalAlign: 'middle',
				position: 'insideBottom',
				distance: 15,
				onChange: function () {
					var labelOption = {
						normal: {
							rotate: app.config.rotate,
							align: app.config.align,
							verticalAlign: app.config.verticalAlign,
							position: app.config.position,
							distance: app.config.distance
						}
					};
					myChart.setOption({
						series: [{
							label: labelOption
						}, {
							label: labelOption
						}, {
							label: labelOption
						}, {
							label: labelOption
						}]
					});
				}
			};


			var labelOption = {
				normal: {
					show: true,
					position: app.config.position,
					distance: app.config.distance,
					align: app.config.align,
					verticalAlign: app.config.verticalAlign,
					rotate: app.config.rotate,
					formatter: '{c} ',
					//formatter: '{c}  {name{a}}',
					fontSize: 10,
					rich: {
						name: {
							textBorderColor: '#fff',
						}
					}
				}
			};

			option = {
				color: ['#dfdfdf', '#0137b3'],
				tooltip: {
					trigger: 'axis',
					backgroundColor: 'rgba(33,33,33,1)',
					borderRadius: 0,
					padding: 5,
					axisPointer: {
						type: 'cross',
						label: {
							backgroundColor: 'rgba(33,33,33,1)'
						}
					},
					textStyle: {
						color: '#fff',
						fontStyle: 'normal',
						fontWeight: 'normal',
						fontFamily: "'Roboto', sans-serif",
						fontSize: 12
					}
				},
				legend: {
					data: ['Blue Bottles', 'White Bottles']
				},
				toolbox: {
					show: false,
					orient: 'vertical',
					left: 'right',
					padding: 0,
					margin: 0,
					top: 'center',
					feature: {
						mark: {
							show: true
						},
						dataView: {
							show: true,
							readOnly: true
						},
						magicType: {
							show: true,
							type: ['line', 'bar', 'stack', 'tiled']
						},
						restore: {
							show: true
						},
						saveAsImage: {
							show: false
						}
					}
				},
				grid: {
					left: '0',
					right: '0',
					top: '35px',
					bottom: '0',
					containLabel: true
				},
				calculable: true,
				type: 'value',
				axisLine: {
					show: true
				},
				xAxis: [{
						type: 'category',
						axisTick: {
							show: true
						},
						data: cats,
						axisLine: {
							show: true
						},
						axisLabel: {
							textStyle: {
								color: '#a0a0a0'
							}
						},
					}

				],

				yAxis: [{
					type: 'value',
					axisLine: {
						show: true
					},
					axisLabel: {
						textStyle: {
							color: '#a0a0a0'
						}
					},
					splitLine: {
						show: true,
					}
				}],

				series: [{
					name: 'White Bottles',
					type: 'bar',
					barGap: 0,
					label: labelOption,
					data: wbData
				}, {
					name: 'Blue Bottles',
					type: 'bar',
					label: labelOption,
					data: bbData
				}]
			};;
			if (option && typeof option === "object") {
				myChart.setOption(option, true);
			}

		}
	});
}