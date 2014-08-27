<?php

	$display = mysqli_query($mysqli, "SELECT * FROM members WHERE MemberNo = '".$usr_srch."' ");

	// array to store the key & value pair returned by the query
	$valArr = array();

// key is the sentry db field name value is the text you'd like to display in the table header
$headArr = array("MemberNo"=>"Uni ID", "CardNo"=>"Uni Card No", "MemID"=>"MemID", "GroupName"=>"Group Name", "IssueLevel"=>"IssueLevel", "Category1"=>"PType", "Category2"=>"ST/Stu", "Category3"=>"FAC/ASSOC", "Category4"=>"Category4", "ExpiryDate"=>"ExpiryDate", "NoCardVisits"=>"NoCardVisits", "Comment"=>"Comment", "EntryMessage"=>"EntryMessage", "DisplayOnce"=>"DisplayOnce", "Visits"=>"Visits", "TotalTime"=>"TotalTime", "LastEventTime"=>"LastEventTime", "LastEventType"=>"LastEventType", "LastEventZone"=>"LastEventZone", "LastEventAddress"=>"LastEventAddress", "Ticked"=>"Ticked", "Origin"=>"Origin", "EmailAddr"=>"EmailAddr", "MobileNo"=>"MobileNo", "Aux"=>"Aux", "KioskCardCount"=>"KioskCardCount", "KioskCardNo"=>"KioskCardNo", "KioskCardExpiry"=>"KioskCardExpiry", "KioskCardEntries"=>"KioskCardEntries");

// array of keys which contain values to ignore when creating the table
$noiseArr = array("Ticked", "Origin", "TotalTime", "GroupName", "Category2", "Category3", "Category4", "DisplayOnce", "Visits", "NoCardVisits", "MemID", "IssueLevel", "Comment", "EntryMessage", "MobileNo", "Aux");

// new array for rewritten keys
$print = array();

function printData($h, $n, $v){
	foreach($n as $val){
		if(array_key_exists($val, $v)){
			unset($v[$val]);
		}
	}
	foreach($v as $key => $val){
		if(array_key_exists($key, $h)){
			$key = $h[$key];
			$print[$key] = $val;
		}
	}

	echo '<table class="pure-table">';
	echo '<thead><tr>';

	foreach($print as $key => $val){
		echo '<th>'.$key.'</th>';
	}

	echo '</tr>';
	echo '<tbody>
    		<tr>';

	foreach($print as $key => $val){
		echo '<td>'.$val.'</td>';
	}

	echo '	</tr>
		 </tbody>';
	echo '</table>';

}
	while($obj = mysqli_fetch_object($display)){

		foreach($obj as $key => $value){
			$valArr[$key] = $value;
		}

	}

printData($headArr, $noiseArr, $valArr);

echo '<form method="post" action="index.php">

			<input type="hidden" name="usr_srch" value="">
			<div class="pure-controls l-box">
				<input type="submit" value="Clear" class="pure-button pure-button-primary" />
			</div>

	</form>';

?>