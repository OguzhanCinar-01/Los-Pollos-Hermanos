<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Ödeme </title>
	<link rel="stylesheet" type="text/css" href="ödeme.css">
</head>
<body>
	<div class="bg"></div>
	<div class="bg bg2"></div>
	<div class="bg bg3"></div>
	<form class="credit-card" action="connection.php" method="post">
		<div class="form-header">
			<h4 class="title"> Sipariş Detayları </h4>
		</div>

		<div class="form-body">
			<div style="margin-bottom: 20px;">
				Sipariş Edilen Ürün:<input type="text" id="orderinput" value="" name="orderedfood" class="orderinput" readonly> <span id="first-item" hidden></span>
			</div>
			<div style="margin-bottom: 20px">
				Ürün Ücreti:<input type="text" id="priceinput" value="" name="orderedfoodprice" class="priceinput" readonly> <span id="second-item" hidden></span>
				<label>₺</label>
			</div>

			<div class="drink">
				<label> İçecek: </label>
				<br>
				<select name="drink">
					<option value="Yok"> Yok </option>
					<option value="Kola"> Kola: 15₺ </option>
					<option value="Meyve Suyu"> Meyve Suyu: 12₺ </option>
					<option value="Su"> Su: 5₺ </option>
					<option value="Ayran"> Ayran: 10₺ </option>
				</select>
			</div>

			<label for="tel"> İletişim Tel No: </label>
			<input type="tel" name="telno" class="card-number" inputmode="numeric" 
			pattern="[0-9\s]{14}" placeholder="05xx xxx xx xx" maxlength="14" required/>
			<br>

			<div class="table">
				<label> Masa No: </label>
				<br>
				<select name="tableno">
					<option value="1.masa"> 1 </option>
					<option value="2.masa"> 2 </option>
					<option value="3.masa"> 3 </option>
					<option value="4.masa"> 4 </option>
					<option value="5.masa"> 5 </option>
					<option value="6.masa"> 6 </option>
					<option value="7.masa"> 7 </option>
					<option value="8.masa"> 8 </option>
					<option value="9.masa"> 9 </option>
					<option value="10.masa"> 10 </option>
					<option value="11.masa"> 11 </option>
					<option value="12.masa"> 12 </option>
					<option value="13.masa"> 13 </option>
					<option value="14.masa"> 14 </option>
					<option value="15.masa"> 15 </option>
					<option value="16.masa"> 16 </option>
				</select>
				<br>
			</div>

			<label for="ccn"> Kredi Kartı Numarası: </label>
			<input name="ccn" type="text" id="ccn" class="card-number" inputmode="numeric" pattern="[0-9\s]{13,20}" autocomplete="cc-number" maxlength="20" placeholder="xxxx xxxx xxxx xxxx" required/>
			<br>

			<div class="month">
				<label> Kredi Kartı Son Kullanma Tarihi: </label>
				<select name="ay" required>
					<option value="1"> 1 </option>
					<option value="2"> 2 </option>
					<option value="3"> 3 </option>
					<option value="4"> 4 </option>
					<option value="5"> 5 </option>
					<option value="6"> 6 </option>
					<option value="7"> 7 </option>
					<option value="8"> 8 </option>
					<option value="9"> 9 </option>
					<option value="10"> 10 </option>
					<option value="11"> 11 </option>
					<option value="12"> 12 </option>
				</select>
			</div>

			<div class="year">
				<select name="yıl" required>
					<option value="2024"> 2024 </option>
					<option value="2025"> 2025 </option>
					<option value="2026"> 2026 </option>
					<option value="2027"> 2027 </option>
					<option value="2028"> 2028 </option>
					<option value="2029"> 2029 </option>
					<option value="2030"> 2030 </option>
					<option value="2031"> 2031 </option>
				</select>
				<br>
			</div>

			<div class="card-verification">
				<label for="cvv"> CVV: </label>
				<div class="cvv-input">
					<input type="nubmer" name="cvv" class="cvv-input" inputmode="numeric" pattern="[0-9\s]{3}" maxlength="3" placeholder="xxx" required>
				</div>
			</div>

			<button type="submit" class="proceed-btn" name="submit"> Onayla </button>
		</div>
		
	</form>

	<script src="ödeme.js"></script>
	<script>

		var burger = sessionStorage.getItem('first-item');
		var burgerPrice = sessionStorage.getItem('second-item');

		document.getElementById('first-item').textContent = burger;
		document.getElementById('second-item').textContent = burgerPrice;

	</script>

	<script>
		document.getElementById("orderinput").value = document.getElementById("first-item").textContent;
	</script>

	<script>
		document.getElementById("priceinput").value = document.getElementById("second-item").textContent;
	</script>

</body>
</html>

