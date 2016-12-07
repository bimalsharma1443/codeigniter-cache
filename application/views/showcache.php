<?php

	$this->benchmark->mark('code_start');
?>
		<table>
			<thead>
				<th>Id</th>
				<th>City Name</th>
				<th>State Name</th>
				<th>Type</th>
				<th>Population</th>
				<th>Class</th>
			</thead>
			<tbody>
<?php
			if($first){	
				foreach ($first as $key => $value) {
?>
				<tr>
					<td> <?php echo $value->id ?> </td>
					<td> <?php echo $value->city_name  ?></td>
					<td> <?php echo $value->state_name ?></td>
					<td> <?php echo $value->type ?></td>
					<td> <?php echo $value->pop ?></td>			
					<td> <?php echo $value->class ?> </td>
				</tr>
<?php
				}
			}
?>	
			</tbody>
		</table>
<?php
	$this->benchmark->mark('code_end');
	echo $this->benchmark->elapsed_time('code_start', 'code_end');
?>