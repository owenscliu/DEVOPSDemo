<html>
	<head>
	<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>

<div id="app">
	<?php 
		echo "<h1 style='color:green'>Hello Owen, welcome to your task list management system (demo), thanks for invitation!<h1>" ?>
	<table class="table">
	<h3>{{today}} </h3>	
	<thead>
		<tr>
			<th colspan="1">#</th>
			<th colspan="4">Task</th>
			<th colspan="2">Platform</th>
			<th colspan="2">Start Date</th>
			<th colspan="2">End Date</th>
			<th colspan="2">Estimated duration</th>
		</tr>
	</thead>
	<tbody>
		<tr v-for="(x,y) in tasklist">
			<td colspan="1"> {{y+1}}</td>
			<td colspan="4"> {{x.t}}</td>
			<td colspan="2"> {{x.p}}</td>
			<td colspan="2"> {{x.s}}</td>
			<td colspan="2"> {{x.e}}</td>
			<td colspan="2"> {{x.d}}</td>
		</tr>
	</tbody>
	</table>
</div>
<script>
	var app = new Vue({
		
		el: '#app',
		data: {
			today : moment(new Date()).format('L'),
			message: 'Hello Hello',
			tasklist: [
				newTask("Overview Devops","Jenkins","12/20/2021","12/20/2021","0.5"),
				newTask("Overview Jenkins","Jenkins","12/20/2021","newchanges","n/a"),
				newTask("Connecting Jenkins","Jenkins","12/20/2021","12/20?","0"),
				newTask("new task 2","Jenkins","12/20/2021","",""),
				newTask("new task 3","Jenkins","12/20/2021","",""),
				newTask("Documentation: Jenkins functions","Jenkins","12/20/2021","",""),
				newTask("Documentation: Sonar cube integration","Jenkins","12/20/2021","","")
			]
		}
	})
	function newTask(target, platform, startDate, endDate, duration){
		return {t:target, p:platform, s:startDate, e:endDate, d:duration};
	}
</script>

</html>