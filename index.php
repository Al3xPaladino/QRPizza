<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<title>Order</title>
</head>
<body>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>

	<div class="form">
	  <h1>Che tipo di Pizza vuoi?</h1>
	  <form>
  		<input type="radio" id="0001" name="pasta" value="0" onclick="RadioCheck()">
  		<label for="vehicle1"> Pasta Normale</label><br>
  		<input type="radio" id="0002" name="pasta" value="0" onclick="RadioCheck()">
  		<label for="vehicle1"> Pasta integrale</label><br>
  		<input type="radio" id="0003" name="pasta" value="0" onclick="RadioCheck()">
  		<label for="vehicle1"> Pasta ai Cereali</label><br>

  		<br><br>

  		<h1>Che condimento vuoi sulla tua Pizza?</h1>

  		<input type="checkbox" id="0101" name="condimento" value="0" onclick="OnOff(this)">
  		<label for="vehicle1"> Salsa</label><br>
  		<input type="checkbox" id="0102" name="condimento" value="0" onclick="OnOff(this)">
  		<label for="vehicle1"> Mozzarella</label><br>
  		<input type="checkbox" id="0103" name="condimento" value="0" onclick="OnOff(this)">
  		<label for="vehicle1"> Patatine</label><br>
  		<input type="checkbox" id="0104" name="condimento" value="0" onclick="OnOff(this)">
  		<label for="vehicle1"> Wrustel</label><br>
  		<input type="checkbox" id="0105" name="condimento" value="0" onclick="OnOff(this)">
  		<label for="vehicle1"> Prosciutto</label><br>
  		<input type="checkbox" id="0106" name="condimento" value="0" onclick="OnOff(this)">
  		<label for="vehicle1"> Funghi</label><br>
  		<input type="checkbox" id="0107" name="condimento" value="0" onclick="OnOff(this)">
  		<label for="vehicle1"> Scaglie di Grana</label><br>

  		<br>

	    <input type="text" id="textCode" name="textCode" value="" required />
	    <button type="button" onclick="generateQRCode()">
	      Generate QR Code
	    </button>
	  </form>

	  <div id="qrcode-container">
	    <!--<canvas id="qrcode" class="qrcode"></canvas>
	    <h4>With some styles</h4>-->
	    <canvas id="qrcode-2" class="qrcode"></canvas>
	  </div>

	</div>

</body>
<script type="text/javascript" src="js/index.js"></script>
</html>