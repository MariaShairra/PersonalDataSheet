
<html>
	<head>
		<title>JETS TECH COMPANY</title>
		<style>
	
		input[type=text], select {
		  height: 40px;
		  padding: 5px 18px;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		  margin-top:5px;
		}
		
		input[type=date], select {
		 
		  height: 40px;
		  padding: 5px 5px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}
		
		input[type=checkbox], select
		{
			 -webkit-appearance: none;
			 -moz-appearance: none;
			 appearance: none;
			 display: inline-block;
			 position: relative;
			 background-color: DarkSlateGrey;
			 color: pink;
			 top: 5px;
			 height: 20px;
			 width: 20px;
			 border: 1;
			 cursor: pointer;     
			 margin-right: 7px;
			 outline: none;
		}
		input[type=checkbox]:checked::before
		{
			 position: absolute;
			 font: 13px/1 'Open Sans', sans-serif;
			 left: 11px;
			 top: 5px;
			 content: '&#9745';
			 transform: rotate(40deg);
		}
		input[type=checkbox]:checked::after
		{
			 content: "";
			  position: absolute;
			  display: none;
			  background-color: #2196F3;
		}
		
		input[type=checkbox]:hover
		{
			 background-color:black;
		}
		input[type=submit] {
		  width: 50%;
		  height: 7%;
		  background-color: black;
		  color: white;
		  padding: 7px 10px;
		  margin: 8px 0;
		  border: none;
		  border-radius: 4px;
		  cursor: pointer;
		  margin-left: 23%
		}

		input[type=submit]:hover {
		  background-color: DarkSlateGrey;
		}
		
		#texts{
		  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		  border-collapse: collapse;
		  font-size:8pt;
		  text-align: center-left;
		}

		#texts td, #texts th {
		  border: 1px solid #ddd;
		  padding: 4px;
		}

		#texts tr{background-color: #f2f2f2;}

		#texts tr:hover {background-color: #ddd;}

		#texts th {
		  padding-top: 7px;
		  padding-bottom: 7px;
		  background-color: DarkSlateGrey;
		  color: white;
		}


	
	</style>
	</head>
	
	<body  style="background-color:gray">
		<div style = "background-color: black; position: fixed; margin-left: -8px; margin-top: -8px">
			<a href ="Lab01_Homepage.php"><img src="1.2.jpg" style = "width: 100px; height: 100x; padding-left: 10px; float: left"></a>
			<li style = "text-align: right; overflow: hidden; list-style-type: none; padding: 35px 40px 20px 0px; font-family: Bahnschrift;  margin-top: -8px; margin-left: 1270px">
			<a onmouseover="this.style.color='lightgray';" onmouseout="this.style.color='white';" style = "text-decoration: none; color: white" href="Lab01_Homepage.php">HOME</a></li>
		</div>
			
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" name="myform" style="text-align: center-left; margin-left: 3%; margin-right: 3%; background-color:#e6eef1; font-family:Trebuchet MS;font-size: 18px; border: 3px solid DimGrey; border-radius: 2px; padding: 80px 40px 10px 40px;">
	<h1><i>PERSONAL DATA SHEET</i></h1>
	<h6>&#9888WARNING: Any misrepresentation made in the Personal Data Sheet and the Work Experience Sheet shall cause filing of administrative case/s against the person concerned.</h6>
	
	
		
		<fieldset style = "margin-top: 20px;background-color: lightgray">
			 I. PERSONAL INFORMATION <br> 
			</fieldset>
		<fieldset><p style="font-family:Trebuchet MS;font-size: 18px;">
			2. SURNAME &nbsp <input type="text" name="sn" style="width:1010px" required =""><br> 
			FIRST NAME &ensp;  <input type="text" name="fn" style="width:650px" required =""> &nbsp <input type="text" name="extension" placeholder="NAME EXTENSION(JR.,SR.)" style="width:345px"><br> 
			MIDDLE NAME <input type="text" name="mn" style="width:1010px"><br></p>
		</fieldset>
		
		
		
		<div style="display: flex;">
			<div style="flex: 33.33%; ">
				<p><fieldset> 3. DATE OF BIRTH &ensp;<input type="date" name="birth" style=" width: 390px;" required =""> <br> </fieldset>
				
				<fieldset> 4. PLACE OF BIRTH <input type="text" name="pb" style="width:390px"><br> </fieldset>
			
				<fieldset> 5. SEX &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
							<input type="radio" name="sex" value="male"> Male &emsp;&emsp;&emsp;&emsp;&emsp;
							<input type="radio" name="sex" value="Female"> Female<br></fieldset>
							
				<fieldset> 6. CIVIL STATUS &nbsp;&emsp;
							<input type="radio" name="cs" value="single"> Single &emsp;&emsp;&emsp;&emsp;&ensp;
							<input type="radio" name="cs" value="married"> Married<br>
							&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
							<input type="radio" name="cs" value="widowed">Widowed&emsp;&emsp;&emsp;&ensp;&nbsp;
							<input type="radio" name="cs" value="separated"> Separated<br>
							&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
							<input type="radio" name="cs" value="others">Other/s</fieldset>
				
				<fieldset> 7. HEIGHT(m.) &emsp;&emsp;<input type="text" name="height" style="width:390px"><br> </fieldset>
				<fieldset> 8. WEIGHT(kg.)&emsp;&emsp;<input type="text" name="weight" style="width:385px"><br></fieldset>
				<fieldset> 9. BLOOD TYPE &emsp;&emsp;<input type="text" name="blood" style="width:385px"><br></fieldset>
				<fieldset> 10. GSIS ID NO. &emsp;&emsp;<input type="text" name="gsis" style="width:380px"><br> </fieldset>
				<fieldset> 11. PAG-IBIG ID NO. <input type="text" name="pag-ibig" style="width:385px"><br> </fieldset>
				<fieldset> 12. PHILHEALTH ID NO. <input type="text" name="phil" style="width:355px"><br> </fieldset>
				<fieldset> 13. SSS NO.&emsp;&emsp;&emsp;&emsp;<input type="text" name="sss" style="width:378px"><br> </fieldset>
				<fieldset> 14. TIN NO.&emsp;&emsp;&emsp;&emsp;<input type="text" name="tin" style="width:380px"><br> </fieldset>
				<fieldset> 15. AGENCY EMPLOYEE NO. <input type="text" name="agency" style="width:320px"></fieldset> </p>
			</div>
			<div style="flex: 33.33%; ">
				<p><fieldset><div style="display: flex;">
								<div style="flex: 25.33%; ">16. CITIZENSHIP <br><br><p style="font-size:10pt">(if holder of dual citizenship, 
																		please indicate the details) </p></div>
											<div style="flex: 33.33%; ">
												<input type="radio" name="ct" value="Filipino" > Filipino
												<input type="radio" name="ct" value="Dual Citizenship" >Dual Citizenship<br> <br>
												<input type="radio" name="dual" value="By Birth" >By Birth
												<input type="radio" name="dual" value="By Naturalization" >By Naturalization<br><br>
												Pls. indicate country: <input type="text" name="country" style="width:290px"><br>
											</div>
							 </div></fieldset>
				<fieldset> 17. RESIDENTIAL ADDRESS<br> <input type="text" name="residential1" placeholder="House/Block/Lot No." style="width:270px">
											<input type="text" name="residential2" placeholder="Street"style="width:270px"><br>
											<input type="text" name="residential3" placeholder="Subdivision/Village" style="width:270px">
											<input type="text" name="residential4" placeholder="Barangay" style="width:270px"><br>
											<input type="text" name="residential5" placeholder="City/Municipality" style="width:270px">
											<input type="text" name="residential6" placeholder="Province" style="width:270px"><br>
											ZIP CODE <input type="text" name="zip"  style="width:465px"> <br><br></fieldset>
				<fieldset> 18. PERMANENT ADDRESS <br><input type="text" name="permanent1" placeholder="House/Block/Lot No." style="width:270px">
											<input type="text" name="permanent2" placeholder="Street" style="width:270px"><br>
											<input type="text" name="permanent3" placeholder="Subdivision/Village" style="width:270px">
											<input type="text" name="permanent4" placeholder="Barangay" style="width:270px"><br>
											<input type="text" name="permanent5" placeholder="City/Municipality" style="width:270px">
											<input type="text" name="permanent6" placeholder="Province" style="width:270px"><br>
											ZIP CODE <input type="text" name="zip2" style="width:465px"><br><br></fieldset>
				<fieldset> 19. TELEPHONE NO.  <input type="text" name="telephone" style="width:375px"><br> </fieldset>
				<fieldset> 20. MOBILE NO. &emsp;&emsp; <input type="text" name="mobile" style="width:365px"><br></fieldset>
				<fieldset> 21. EMAIL ADDRESS&emsp; <input type="text" name="email" style="width:365px"></p></fieldset>
			</div>
		</div>	
			
		<fieldset style = "margin-top: 20px;background-color: lightgray">
			II. FAMILY BACKGROUND
			</fieldset>
			
			<fieldset>
			<div style="display: flex;">
				<div style="flex: 50.33%; ">
					<fieldset>
						22. SPOUSE SURNAME: <input type="text" name="ssname" style = "background-color: white; width:440px"><br> &nbsp &nbsp &nbsp
							FIRST NAME:&emsp; &emsp;  <input type="text"  name="sfname" style = "background-color: white; width:280px">
									<input type="text" placeholder="NAME EXTENSION(JR., SR.)"  name="snext" style = "background-color: white; width:160px"><br> &nbsp &nbsp &nbsp
							MIDDLE NAME: &emsp;&ensp;<input type="text"  size="36" name="smname" style = "background-color: white; width:440px">
					</fieldset>
					<fieldset>
							OCCUPATION: <input type="text" name="socc" style = "background-color: white;width:510px">
					</fieldset>
					<fieldset>
							EMPLOYER/BUSINESS NAME: <input type="text"  name="sbussname" style = "background-color: white; width:394px">
					</fieldset>
					<fieldset>
							BUSINESS ADDRESS: <input type="text" name="sbussadd" style = "background-color: white; width:460px">
					</fieldset>
					<fieldset>
							TELEPHONE NO.: <input type="text"  name="stelephone" style = "background-color: white; width:480px">
					</fieldset>
					<fieldset>
						24. FATHER'S SURNAME: <input type="text"  name="fsname" style = "background-color: white;width:430px"><br> &nbsp &nbsp &nbsp
							FIRST NAME: <input type="text"  name="ffname" style = "background-color: white; width:290px"> &nbsp
							 <input type="text" placeholder="NAME EXTENSION (JR., SR.):"  name="fnext" style = "background-color: white; width:180px"><br> &nbsp &nbsp &nbsp
							MIDDLE NAME: <input type="text" name="fmname" style = "background-color: white; width:470px">
					</fieldset>
					<fieldset>
						24. MOTHER'S MAIDEN NAME: <input type="text" name="mmaidname" style = "background-color: white; width:380px"><br> &nbsp &nbsp &nbsp
							SURNAME: <input type="text" name="msname" style = "background-color: white; width:500px"><br> &nbsp &nbsp &nbsp
							FIRST NAME: <input type="text" name="mfname" style = "background-color: white; width:480px"><br> &nbsp &nbsp &nbsp
							MIDDLE NAME: <input type="text" name="mmname" style = "background-color: white; width:465px">
					</fieldset>
				
				</div >
				<div style="flex: 33.33%; ">
					<fieldset>
							<p style="font-size:12pt">23. NAME OF CHILDREN: &emsp; &emsp; &emsp;&emsp; &emsp;DATE OF BIRTH:<br> (Write full name and list all)</p>
							
			
							<input type="text" name="child1" style = "background-color: white; width:260px">&ensp; <input type="date" name="bday1" style="width:150px"><br>
							
							<input type="text" name="child2" style = "background-color: white; width:260px">&ensp; <input type="date" name="bday2" style="width:150px"><br>
							
							<input type="text" name="child3" style = "background-color: white; width:260px">&ensp; <input type="date" name="bday3" style="width:150px" ><br>
							
							<input type="text" name="child4" style = "background-color: white; width:260px">&ensp; <input type="date" name="bday4" style="width:150px"><br>
							
							<input type="text" name="child5" style = "background-color: white; width:260px">&ensp; <input type="date" name="bday5" style="width:150px"><br>
							
							<input type="text" name="child6" style = "background-color: white; width:260px">&ensp; <input type="date" name="bday6" style="width:150px"><br>
							
							<input type="text" name="child7" style = "background-color: white; width:260px">&ensp; <input type="date" name="bday7" style="width:150px"><br>
							
							<input type="text" name="child8" style = "background-color: white; width:260px">&ensp; <input type="date" name="bday8" style="width:150px"><br>
							
							<input type="text" name="child9" style = "background-color: white; width:260px">&ensp; <input type="date" name="bday9" style="width:150px"><br>
							
							<input type="text" name="child10" style = "background-color: white; width:260px">&ensp; <input type="date" name="bday10"style="width:150px"><br>
							
							<input type="text" name="child11" style = "background-color: white; width:260px">&ensp; <input type="date" name="bday11" style="width:150px"><br>
							
							<input type="text" name="child12" style = "background-color: white; width:260px">&ensp; <input type="date" name="bday12"style="width:150px">
					</fieldset>
				</div>
			</div>
			</fieldset>
				
		<fieldset style = "margin-top: 20px;background-color: lightgray">
			<h4> III. EDUCATIONAL BACKGROUND </h4>
			</fieldset>
		<fieldset>
		<table id="texts">
		  <tr>
			<th>26. LEVEL</th>
			<th>NAME OF SCHOOL <br>(Write in full)</th>
			<th>BASIC EDUCATION /<br>DEGREE/COURSE<br>(Write in full)</th>
			<th>PERIOD OF ATTENDANCE            <br>From &ensp;&ensp; To</th></th>
			<th>HIGHEST LEVEL/ <br>UNITS EARNED <br>(If not graduated)</th>
			<th>YEAR <br> GRADUATED</th>
			<th>SCHOLARSHIP/<br> ACADEMIC HONORS <br>RECEIVED</th>
		  </tr>
		  <tr>
			<td>ELEMENTARY</td>
			<td><input type="text" name="elnameofschool"></td>
			<td><input type="text" name="elbasiceduc" style="width:170px"></td>
			<td><input type="text" name="elfrom" style="width:30px; padding:1px;" >&ensp; &ensp; <input type="text" name="elto" style="width:30px; padding:1px;" ></td>
			<td><input type="text" name="elhighest"></td>
			<td><input type="text" name="elgraduated" style="width:100px"></td>
			<td><input type="text" name="elscholarship"></td>
		  </tr>
		  <tr>
			<td>SECONDARY</td>
			<td><input type="text" name="hsnameofschool"></td>
			<td><input type="text" name="hsbasiceduc" style="width:170px"></td>
			<td><input type="text" name="hsfrom" style="width:30px; padding:1px;">&ensp; &ensp; <input type="text" name="hsto" style="width:30px; padding:1px;"></td>
			<td><input type="text" name="hshighest"></td>
			<td><input type="text" name="hsgraduated" style="width:100px"></td>
			<td><input type="text" name="hsscholarship"></td>
		  </tr>
		  <tr>
			<td>VOCATIONAL/ TRADE COURSE</td>
			<td><input type="text" name="vnameofschool"></td>
			<td><input type="text" name="vbasiceduc" style="width:170px"></td>
			<td><input type="text" name="vfrom"style="width:30px; padding:1px;">&ensp; &ensp; <input type="text" name="vto" style="width:30px; padding:1px;"></td>
			<td><input type="text" name="vhighest"></td>
			<td><input type="text" name="vgraduated" style="width:100px"></td>
			<td><input type="text" name="vscholarship"></td>
		  </tr>
		  <tr>
			<td>COLLEGE</td>
			<td><input type="text" name="cnameofschool"></td>
			<td><input type="text" name="cbasiceduc" style="width:170px"></td>
			<td><input type="text" name="cfrom" style="width:30px; padding:1px;">&ensp; &ensp; <input type="text" name="cto" style="width:30px; padding:1px;"></td>
			<td><input type="text" name="chighest"></td>
			<td><input type="text" name="cgraduated" style="width:100px"></td>
			<td><input type="text" name="cscholarship"></td>
		  </tr>
		  <tr>
			<td>GRADUATED STUDIES</td>
			<td><input type="text" name="gnameofschool"></td>
			<td><input type="text" name="gbasiceduc" style="width:170px"></td>
			<td><input type="text" name="gfrom" style="width:30px; padding:1px;">&ensp; &ensp; <input type="text" name="gto" style="width:30px; padding:1px;"></td>
			<td><input type="text" name="ghighest"></td>
			<td><input type="text" name="ggraduated" style="width:100px"></td>
			<td><input type="text" name="gscholarship"></td>
		  </tr>
		</table>
		</fieldset>
	<input type="Submit" name="button" value="Submit"> 
	</form>

	</body>

	<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
connect();
}
function connect(){
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "pdatasheet";
	
	$Surname= $_POST['sn'];
	$Firstname= $_POST['fn'];
	$Middlename= $_POST['mn'];
	$NameExtension= $_POST['extension'];
	$DateOfBirth= $_POST['birth'];
	$PlaceOfBirth= $_POST['pb'];
	$Sex= $_POST['sex'];
	$CivilStatus= $_POST['cs'];
	$Height= $_POST['height'];
	$Weight= $_POST['weight'];
	$BloodType= $_POST['blood'];
	$GSIS= $_POST['gsis'];
	$PAGIBIG= $_POST['pag-ibig'];
	$PHILHEALTH= $_POST['phil'];
	$SSS= $_POST['sss'];
	$TIN= $_POST['tin'];
	$AgencyEmployment= $_POST['agency'];
	$Citizenship= $_POST['ct'];
	$DualC= $_POST['dual'];
	$Country= $_POST['country'];
	$Rhouse= $_POST['residential1'];
	$Rstreet= $_POST['residential2'];
	$Rsubd= $_POST['residential3'];
	$Rbrgy= $_POST['residential4'];
	$Rcity= $_POST['residential5'];
	$Rprovince= $_POST['residential6'];
	$RZipCode= $_POST['zip'];
	$Phouse= $_POST['permanent1'];
	$Pstreet= $_POST['permanent2'];
	$Psubd= $_POST['permanent3'];
	$Pbrgy= $_POST['permanent4'];
	$Pcity= $_POST['permanent5'];
	$Pprovince= $_POST['permanent6'];
	$PZipCode= $_POST['zip2'];
	$Telephone= $_POST['telephone'];
	$Mobile= $_POST['mobile'];
	$Email= $_POST['email'];
	$SSurname= $_POST['ssname'];
	$SFirstname= $_POST['sfname'];
	$SMiddlename= $_POST['smname'];
	$SNameExtension= $_POST['snext'];
	$SOccupation= $_POST['socc'];
	$SEmployer= $_POST['sbussname'];
	$SBAddress= $_POST['sbussadd'];
	$STelephone= $_POST['stelephone'];
	$Childname1= $_POST['child1'];
	$Childname2= $_POST['child2'];
	$Childname3= $_POST['child3'];
	$Childname4= $_POST['child4'];
	$Childname5= $_POST['child5'];
	$Childname6= $_POST['child6'];
	$Childname7= $_POST['child7'];
	$Childname8= $_POST['child8'];
	$Childname9= $_POST['child9'];
	$Childname10= $_POST['child10'];
	$Childname11= $_POST['child11'];
	$Childname12= $_POST['child12'];
	$Childbirth1= $_POST['bday1'];
	$Childbirth2= $_POST['bday2'];
	$Childbirth3= $_POST['bday3'];
	$Childbirth4= $_POST['bday4'];
	$Childbirth5= $_POST['bday5'];
	$Childbirth6= $_POST['bday6'];
	$Childbirth7= $_POST['bday7'];
	$Childbirth8= $_POST['bday8'];
	$Childbirth9= $_POST['bday9'];
	$Childbirth10= $_POST['bday10'];
	$Childbirth11= $_POST['bday11'];
	$Childbirth12= $_POST['bday12'];
	$FSurname= $_POST['fsname'];
	$FFirstname= $_POST['ffname'];
	$FMiddlename= $_POST['fmname'];
	$FNameExtension= $_POST['fnext'];
	$MMaidenname= $_POST['mmaidname'];
	$MSurname= $_POST['msname'];
	$MFirstname= $_POST['mfname'];
	$MMiddlename= $_POST['mmname'];
	$ENameOfSchool= $_POST['elnameofschool'];
	$EBasic= $_POST['elbasiceduc'];
	$EPeriodFrom= $_POST['elfrom'];
	$EPeriodTo= $_POST['elto'];
	$EHighestLevel= $_POST['elhighest'];
	$EYearGraduated= $_POST['elgraduated'];
	$EScholarshipHonor= $_POST['elscholarship'];
	$HSNameOfSchool= $_POST['hsnameofschool'];
	$HSbasic= $_POST['hsbasiceduc'];
	$HSPeriodFrom= $_POST['hsfrom'];
	$HSPeriodTo= $_POST['hsto'];
	$HSHighestLevel= $_POST['hshighest'];
	$HSYearGraduated= $_POST['hsgraduated'];
	$HScholarshipHonor= $_POST['hsscholarship'];
	$VNameOfSchool= $_POST['vnameofschool'];
	$VBasic= $_POST['vbasiceduc'];
	$VPeriodFrom= $_POST['vfrom'];
	$VPeriodTo= $_POST['vto'];
	$VHighestLevel= $_POST['vhighest'];
	$VYearGraduated= $_POST['vgraduated'];
	$VScholarshipHonor= $_POST['vscholarship'];
	$CNameOfSchool= $_POST['cnameofschool'];
	$CBasic= $_POST['cbasiceduc'];
	$CPeriodFrom= $_POST['cfrom'];
	$CPeriodTo= $_POST['cto'];
	$CHighestLevel= $_POST['chighest'];
	$CYearGraduated= $_POST['cgraduated'];
	$CScholarshipHonor= $_POST['cscholarship'];
	$GNameOfSchool= $_POST['gnameofschool'];
	$GBasic= $_POST['gbasiceduc'];
	$GPeriodFrom= $_POST['gfrom'];
	$GPeriodTo= $_POST['gto'];
	$GHighestLevel= $_POST['ghighest'];
	$GYearGraduated= $_POST['ggraduated'];
	$GScholarshipHonor= $_POST['gscholarship'];
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if(mysqli_connect_error())
		die("Connection failed".mysqli_connect_error());
	
	$sql1 = "INSERT INTO list VALUES ( 
									'$Surname',
									'$Firstname',
									'$Middlename',
									'$NameExtension',
									'$DateOfBirth',
									'$PlaceOfBirth',
									'$Sex',
									'$CivilStatus',
									'$Height',
									'$Weight',
									'$BloodType',
									'$GSIS',
									'$PAGIBIG',
									'$PHILHEALTH',
									'$SSS',
									'$TIN',
									'$AgencyEmployment',
									'$Citizenship',
									'$DualC',
									'$Country',
									'$Rhouse',
									'$Rstreet',
									'$Rsubd',
									'$Rbrgy',
									'$Rcity',
									'$Rprovince',
									'$RZipCode',
									'$Phouse',
									'$Pstreet',
									'$Psubd',
									'$Pbrgy',
									'$Pcity',
									'$Pprovince',
									'$PZipCode',
									'$Telephone',
									'$Mobile',
									'$Email',
									'$SSurname',
									'$SFirstname',
									'$SMiddlename',
									'$SNameExtension',
									'$SOccupation',
									'$SEmployer',
									'$SBAddress',
									'$STelephone',
									'$Childname1',
									'$Childname2',
									'$Childname3',
									'$Childname4',
									'$Childname5',
									'$Childname6',
									'$Childname7',
									'$Childname8',
									'$Childname9',
									'$Childname10',
									'$Childname11',
									'$Childname12',
									'$Childbirth1',
									'$Childbirth2',
									'$Childbirth3',
									'$Childbirth4',
									'$Childbirth5',
									'$Childbirth6',
									'$Childbirth7',
									'$Childbirth8',
									'$Childbirth9',
									'$Childbirth10',
									'$Childbirth11',
									'$Childbirth12',
									'$FSurname',
									'$FFirstname',
									'$FMiddlename',
									'$FNameExtension',
									'$MMaidenname',
									'$MSurname',
									'$MFirstname',
									'$MMiddlename'								
									)";
		$sql2 = "INSERT INTO education VALUES ( 
									'$TIN',
									'$ENameOfSchool',
									'$EBasic',
									'$EPeriodFrom',
									'$EPeriodTo',
									'$EHighestLevel',
									'$EYearGraduated',
									'$EScholarshipHonor',
									'$HSNameOfSchool',
									'$HSbasic',
									'$HSPeriodFrom',
									'$HSPeriodTo',
									'$HSHighestLevel',
									'$HSYearGraduated',
									'$HScholarshipHonor',
									'$VNameOfSchool',
									'$VBasic',
									'$VPeriodFrom',
									'$VPeriodTo',
									'$VHighestLevel',
									'$VYearGraduated',
									'$VScholarshipHonor',
									'$CNameOfSchool',
									'$CBasic',
									'$CPeriodFrom',
									'$CPeriodTo',
									'$CHighestLevel',
									'$CYearGraduated',
									'$CScholarshipHonor',
									'$GNameOfSchool',
									'$GBasic',
									'$GPeriodFrom',
									'$GPeriodTo',
									'$GHighestLevel',
									'$GYearGraduated'						
									)";
		$sql3 = "INSERT INTO scholarship VALUES ( 
									'$TIN',
									'$GScholarshipHonor'
									)";
	if($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE){
		header("Location: Lab01_Display.php");
		echo "<script> alert('Submitted Successfully!')</script>";
	}
	else echo "<script> alert('Submission Failed! Data Duplication!<br>Check GSIS NO., PAG-IBIG NO., PHILHEALTH NO., SSS NO., TIN NO., & AGENCY EMPLOYEE NO.')</script>".$conn->error;
		
	$conn->close();
}	
	?>
	
</html>


