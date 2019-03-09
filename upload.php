<?php
	error_reporting(0);
	if(is_array($_FILES)){
		include_once("connection.php");
		
			foreach($_POST['OptionsRadio1'] as $status){
				$Marital_Status = $status;
			}
			
			foreach($_POST['OptionsRadio4'] as $pratising){
				$Practicing_Roman = $pratising;
			}
			
			foreach($_POST['OptionsRadio6'] as $memany){
				$Member_of_any = $memany;
			}	
			
			function insertdata($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
			}
			
			$EMPLOYID = insertdata($_POST['EMPLOYID']);
			$title = insertdata($_POST['title']);
			$sname = insertdata($_POST['sname']);
			$fname = insertdata($_POST['fname']);
			$othernames = insertdata($_POST['othernames']);
			$fullname = $title." ".$sname." ".$fname." ".$othernames;
			$d_birth = insertdata($_POST['d_birth']);
			$placebirth = insertdata($_POST['placebirth']);
			$region = insertdata($_POST['region']);	
			$region2 = insertdata($_POST['region2']);				
			$Church = insertdata($_POST['church']);
			$occupation = insertdata($_POST['occupation']);
			$Address1 = insertdata($_POST['Address1']);
			$Address2 = insertdata($_POST['Address2']);
			$Address3 = insertdata($_POST['Address3']);			
			$residentAddress = $Address1."/".$Address2."/".$Address3;
			$hseno = insertdata($_POST['hseno']);
			$strtno = insertdata($_POST['strtno']);
			$cittwn = insertdata($_POST['cittwn']);
			$cellgrp = insertdata($_POST['cellgrp']);
			$contact_1 = insertdata($_POST['contact_1']);
			$contact_2 = insertdata($_POST['contact_2']);
			$tEmail1 = insertdata($_POST['tEmail1']);					
			$image = $_FILES['InputFile']['name'];
			
			
			$tmpimage = $_FILES['InputFile']['tmp_name'];
			$source ="images/";
			$target_file = $source.basename($image);	
		
		
			$ext = strtolower(substr($image, strripos($image, '.')+1));
			$filename = round(microtime(true)).mt_rand().'.'.$ext;
		
			$sql = "SELECT * FROM `biodata` WHERE `Mem_Id` = '$EMPLOYID'";
			$query = mysqli_query($Connection,$sql);
			$result = mysqli_num_rows($query);
			if($result > 0){
				$row = mysqli_fetch_array($query);
				$imageee = $row['p_pic'];
				if($image ==""){
					if($title =="" || $sname =="" || $fname=="" || $d_birth =="" || $cellgrp=="" || $contact_1 =="" ){
						if($contact_1 ==""){
							echo"errorcont";
						}if($title ==""){
							echo"errortitl";
						}if($sname ==""){
							echo"errorsnam";
						}if($fname ==""){
							echo"errorfnam";
						}if($d_birth ==""){
							echo"errordbrth";
						}if($cellgrp ==""){
							echo"errorcellgrp";
						}
						echo"emptyimageerror";
						exit;
					}
					
					$sqle = "UPDATE `biodata` SET fullname = '$fullname', `Mem_Id` = '$EMPLOYID', `title`  = '$title', `sname`  = '$sname', `fname`  = '$fname', `oname`  = '$othernames', `d_birth`  = '$d_birth', `p_birth`  = '$placebirth', `region`  = '$region', `m_status`  = '$Marital_Status', `p_catholic`  = '$Practicing_Roman', `parish`  = '$Church', `occupation`  = '$occupation', `f_org`  = '$Member_of_any', `address`  = '$residentAddress', `hse_no`  = '$hseno', `street_name`  = '$strtno', `city`  = '$cittwn', `region_1`  = '$region2', `cell_group`  = '$cellgrp', `contact_1`  = '$contact_1', `contact_2`  = '$contact_2', `email_add`  = '$tEmail1' WHERE `Mem_Id` = '$EMPLOYID'";
					$querye = mysqli_query($Connection,$sqle);
						if($querye){
							$fnsql="UPDATE `fullname` SET `Fullname` = '$fullname' WHERE `Mem_Id(fk)` = '$EMPLOYID'";
							$fnquery = mysqli_query($Connection,$fnsql);
							if($fnquery){
								echo"successfully";
							}else{
								echo"failed";
							}
						}else{
							echo "failed";
						}
				}else{
					if($image =="" || $title =="" || $sname =="" || $fname=="" || $d_birth =="" || $cellgrp=="" || $contact_1 =="" ){
						if($contact_1 ==""){
							echo"errorcont";
						}if($image ==""){
							echo"imageError";
						}if($title ==""){
							echo"errortitl";
						}if($sname ==""){
							echo"errorsnam";
						}if($fname ==""){
							echo"errorfnam";
						}if($d_birth ==""){
							echo"errordbrth";
						}if($cellgrp ==""){
							echo"errorcellgrp";
						}
						exit;
					}
					if(move_uploaded_file($tmpimage,$source.$filename)){
						unlink("images/".$imageee);
						$sql2 = "UPDATE `biodata` SET fullname = '$fullname', `Mem_Id` = '$EMPLOYID', `title`  = '$title', `sname`  = '$sname', `fname`  = '$fname', `oname`  = '$othernames', `d_birth`  = '$d_birth', `p_birth`  = '$placebirth', `region`  = '$region', `m_status`  = '$Marital_Status', `p_catholic`  = '$Practicing_Roman', `parish`  = '$Church', `occupation`  = '$occupation', `f_org`  = '$Member_of_any', `address`  = '$residentAddress', `hse_no`  = '$hseno', `street_name`  = '$strtno', `city`  = '$cittwn', `region_1`  = '$region2', `cell_group`  = '$cellgrp', `contact_1`  = '$contact_1', `contact_2`  = '$contact_2', `email_add`  = '$tEmail1',`p_pic`  = '$filename' WHERE `Mem_Id` = '$EMPLOYID'";
						$query2 = mysqli_query($Connection,$sql2);
						if($query2){
							$fnsql="UPDATE `fullname` SET `Fullname` = '$fullname' WHERE `Mem_Id` = '$EMPLOYID'";
							$fnquery = mysqli_query($Connection,$fnsql);
							if($fnquery){
								echo"successfully";
							}else{
								echo"failed";
							}
						}else{
							echo "failed";
						}
					}
				}
			}else{
				if($image =="" || $title =="" || $sname =="" || $fname=="" || $d_birth =="" || $cellgrp=="" || $contact_1 =="" ){
					if($contact_1 ==""){
						echo"errorcont";
					}if($image ==""){
						echo"imageError";
					}if($title ==""){
						echo"errortitl";
					}if($sname ==""){
						echo"errorsnam";
					}if($fname ==""){
						echo"errorfnam";
					}if($d_birth ==""){
						echo"errordbrth";
					}if($cellgrp ==""){
						echo"errorcellgrp";
					}
					exit;
				}
				if(move_uploaded_file($tmpimage,$source.$filename)){
					$sql3 = "INSERT INTO `biodata`(fullname,`Mem_Id`, `title`, `sname`, `fname`, `oname`,`d_birth`, `p_birth`, `region`, `m_status`, `p_catholic`, `parish`, `occupation`, `f_org`, 
					`address`, `hse_no`, `street_name`, `city`, `region_1`, `cell_group`, `contact_1`, `contact_2`, `email_add`, `t_area`, `p_pic`)
					VALUES 
					('$fullname','$EMPLOYID','$title','$sname','$fname','$othernames','$d_birth','$placebirth ','$region','$Marital_Status','$Practicing_Roman','$Church','$occupation','$Member_of_any',
					'$residentAddress','$hseno','$strtno','$cittwn','$region2','$cellgrp','$contact_1','$contact_2','$tEmail1','','$filename')";
					$query3 = mysqli_query($Connection,$sql3);
					if($query3){
						$fnsql="INSERT INTO `fullname`(`Fullname`, `Mem_Id`) 
						VALUES ('$fullname','$EMPLOYID')";
						$fnquery = mysqli_query($Connection,$fnsql);
						if($fnquery){
							echo"successfully";
						}else{
							echo"failed";
						}
					}else{
						echo "failed";
					}
				}
			}
			
			
	}	
?>