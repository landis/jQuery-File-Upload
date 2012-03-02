<div class="container">
	<div class="page-header">
		<h1>Byte me</h1>
		<h4 class="aka">Because space IS cheap.  Time is not.</h4>	
	</div>
	<div class="well">	
		<h3>Notes</h3>
		<ul>
			<ul class="boldital">This space is for the IRIS team to load data for intensive reporting needs within the IRISPROTOTYPE Schema</ul>
			<ul class="ital">All trespassers will be politely asked to leave</ul>
			<br />
			<ul>Site designed by Jim Landritsi to help ease the monkey work.</ul>
			<ul>If you need to add an ETL table, find him.  Candy is suggested.</ul>
	</div>
	<div class="well">
		<h3>Process</h3>
			<ul>
				<ul>
					<li>Save your data file as a CSV</li>
					<li>Click on your name at the top</li>
					<li>Add your file to the proper loading zone</li>
					<li>Upload</li>
					<li>Wait a few mins</li>
					<li>Report in style against your oracle backed table</li>
				</ul>
			</ul>
	</div>
	<div class="well">
		<h3>What the hell is going on?</h3>
			<ul>
				<ul>
					<li>Your file is being uploaded to the desktop <i>"server"</i></li>
					<li>As soon as it's done, the file is checked to make sure it's a CSV</li>
					<li>If so, the Oracle program SQLLoader is called on the file, against a pre-programmed script</li>
					<li>The file is loaded into the database stupid fast, using multiple parallel processes.</li>
					<br />
					<li>If there are any errors, the file is not loaded <b>at all</b>, and the log file will reflect Oracle's anger with you.</li>
				</ul>
			</ul>
	</div>
</div>