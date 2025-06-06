<!DOCTYPE html>
<html>
	<body>
		<div class="table-container">
			<table>
				<tr>
					<th>#</th>
					<th>PSV</th>
					<th>Date Ordered</th>
					<th>Received</th>
					<th>Signed (Recieved)</th>
					<th>Cat #</th>
					<th>Lot #</th>
					<th>Expiry</th>
					<th>CoA Save</th>
					<th>Date Opened/In-Use</th>
					<th>Signed (Opened/In-Use)</th>
					<th>Date Finished/Disposed of</th>
					<th>Signed (Diposed)</th>
					<th>Volume</th>
					<th>Status</th>
					<th>Comments</th>
				</tr>
				<?php
				foreach($data as $p)
				{
					echo "<tr>";
					echo "<td>".$p->entryIndex."</td>";
					echo "<td>".$p->PSV."</td>";
					echo "<td>".$p->orderedDate."</td>";
					echo "<td>".$p->receivedDate."</td>";
					echo "<td>".$p->receivedSignedBy."</td>";
					echo "<td>".$p->cat."</td>";
					echo "<td>".$p->lot."</td>";
					echo "<td>".$p->expiryDate."</td>";
					echo "<td>".$p->CoASave."</td>";
					echo "<td>".$p->openedDate."</td>";
					echo "<td>".$p->openedSignedBy."</td>";
					echo "<td>".$p->disposedDate."</td>";
					echo "<td>".$p->disposedSignedBy."</td>";
					echo "<td>".$p->volume."</td>";
					echo "<td>".$p->status."</td>";
					echo "<td>".$p->comments."</td>";
					echo "</tr>";
				}
				?>
			</table>
		</div>
	</body>
</html>
