<?php

switch ($reset_usr) {
	case 'card_no':
		$reset = mysqli_query($mysqli, "UPDATE members SET KioskCardCount = '0' WHERE MemberNo = '".$_POST['number']."' ");
		$newCount = mysqli_query($mysqli, "SELECT KioskCardCount FROM members WHERE MemberNo = '".$_POST['number']."' ");
		break;

	default:
		$reset = mysqli_query($mysqli, "UPDATE members SET KioskCardCount = '0' WHERE MemberNo = '".$_POST['number']."' ");
		$newCount = mysqli_query($mysqli, "SELECT KioskCardCount FROM members WHERE MemberNo = '".$_POST['number']."' ");
		break;
}



?>