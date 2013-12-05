<?php //include('isLoggedin.php'); ?>

<script type="text/javascript">getMessageTable();</script>


<div class="pageWrapper">


	<div class="adminpagesTitleBar"><p class="adminpagesTitle">Messages</p></div>

			
	<input type="text" id="searchWord" onchange="getMessageTable($('#searchField').val(), $('#searchWord').val())">
	<select id="searchField">
		<option value="name">Name</option>
		<option value="email">Email</option>
		<option value="subject">Subject</option>
		<option value="date">Date</option>
	</select>
	<button onclick="getMessageTable($('#searchField').val(), $('#searchWord').val())">search</button>
	<button onclick="getMessageTable();">Reset</button>
	<button onclick="deleteMessages();">Delete</button>
	
	

	<table id="table" border=1></table>
	


</div>
