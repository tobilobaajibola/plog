<!-- save image button -->
<a href="#" data-chartjs-id="smartyBarMultiple" data-file-name="smartyBarMultiple" class="btn btn-sm btn-light rounded-circle chartjs-save float-end m-0" title="Save Chart" aria-label="Save Chart">
		<i class="fi fi-arrow-download m-0"></i>
</a>

<!-- /save image button -->
<!--
		
		data-chartjs-type="line|bar" 
		data-chartjs-grid="true|false|xAxes|yAxes" 
		data-chartjs-legend="false|top|bottom|left|right" 

		Color Examples
				Red:				rgb(255, 99, 132, 1)
				Orange:		 rgb(255, 159, 64, 1)
				Yellow:		 rgb(255, 205, 86, 1)
				Green:			rgb(75, 192, 192, 1)
				Blue:			 rgb(54, 162, 235, 1)
				Purple:		 rgb(153, 102, 255, 1)
				Grey:			 rgb(201, 203, 207, 1)
				
				To set opacity, change the last value (0 - 1). 
				Example:		rgb(255, 99, 132, 0.5)
				:: Use Smarty Colorpicker :)
-->
<canvas id="smartyBarMultiple" class="chartjs" 
		data-chartjs-dots="false" 
		data-chartjs-legend="top" 
		data-chartjs-grid="true" 
		data-chartjs-tooltip="true" 

		data-chartjs-title="Multiple Bar Charts" 
		data-chartjs-xaxes-label="Month" 
		data-chartjs-yaxes-label="Visits vs Orders" 
		data-chartjs-line-width="5" 

		data-chartjs-type="bar" 
		data-chartjs-labels='["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]' 
		data-chartjs-datasets='[{																													 
				"label":										"Visits",
				"data":										 [20, 22, 24, 21, 23, 26, 24, 23, 21, 24, 23, 22],
				"backgroundColor":					"rgba(3, 169, 244, 0.7)"
		},{
				"label":										"Orders",
				"data":										 [14, 16, 16, 14, 13, 12, 14, 14, 13, 14, 12, 10],
				"backgroundColor":					"rgba(255, 193, 7, 0.61)"
		}]'
></canvas>