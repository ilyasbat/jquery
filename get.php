<html>
	<head>
		<title>Jquery Giriş</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body>
		<div id="sonuc"></div>
		<form id="form">
			<input type="text" name="ad"/><br/>
			<input type="text" name="soyad"/><br/>
			<input type="text" name="no"/><br/>
			<input type="button" id="gonder" value="Gönder"/>
		</form>
		<script>
			/*$.get('gettest.php',{'ad':'ilyas','soyad':'bat','no':'546'},
				function(data){
					$('#sonuc').html(data);
			});*/
			/*$.get('gettest.php?ad=ilyas&soyad=bat&no=546',
				function(data){
					$('#sonuc').html(data);
			});*/
			$('#gonder').click(function()
				{
					$('#sonuc').html("Yükleniyor...");
					$.get('gettest.php',$('#form').serialize(),function(data){
						$('#sonuc').html(data);
					});
				});
		</script>
	</body>
</html>