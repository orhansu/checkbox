<!DOCTYPE html>
<html>

	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>Checkbox İşlemler</title>
	  <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
	  <style>
	    #liste_goster{
	    background: lightgray;
	    border: 1px solid;
	    border-radius: 5px;
	    width: %100;
	    height: auto;
	    padding: 10px;}
	  </style>
	</head>

	<body>	

		<input type="checkbox" id="cbgrup_master" onchange="togglecheckboxes(this,'cbgrup')">Tümünü Seç<hr>

		<?php 

			for ($i=0; $i<10 ; $i++)
			{ 
			echo ($i.". kayıt");
			?>
			<input type="checkbox" id="cb_<?=$i?>" class="cbgrup" value="<?=$i?>" >
			<br>
			<?php
			}

		?>

		<hr><input type="submit" id="gonder"><hr>

		<div id="liste_goster">
		<label>Liste Boş</label>
		</div>


	</body>

	<script>

		$(function()
		{
		var degerler = [];

		$('#gonder').click(function()
		{
		document.getElementById("liste_goster").innerHTML="";		
		var secililer = document.getElementsByClassName('cbgrup');

		for(let i=0; i<secililer.length; i++)
		{
		if (secililer[i].checked)
		{
		degerler[i]=secililer[i].value;
		$('#liste_goster').append("<li>"+degerler[i]+"</li>");
		}
		}		
		})

		})

		function togglecheckboxes(tumunu_sec,cbgrup)
		{
		var cb_dizi = document.getElementsByClassName(cbgrup);
		for(var i=0; i<cb_dizi.length; i++)
		{
		var cb =document.getElementById(cb_dizi[i].id);
		cb.checked = tumunu_sec.checked;
		}
		}


	</script>
</html>
