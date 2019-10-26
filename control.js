<script type="text/javascript">

			function colorChange(formName,elementName){
				document.forms[formName][elementName].style.color = "white";
				document.forms[formName][elementName].style.backgroundColor = "red";

			}

			function isValid()
			{
				
				var tf = true;
				if (document.getElementsByName("seri-no")[0].value == "") {
					colorChange("ekle","seri-no");
					tf = false;
				}
				if (document.getElementsByName("ariza-baslik")[0].value == "")  {
					colorChange("ekle","ariza-baslik");
					tf =  false;
				}
				if (document.getElementsByName("servis-bolumu")[0].value == "")  {
					colorChange("ekle","servis-bolumu");
					tf =  false;
				}
				if (document.getElementsByName("gelis-tarihi")[0].value == "")  {
					colorChange("ekle","gelis-tarihi");
					tf =  false;
				}
				if (document.getElementsByName("marka")[0].value == "")  {
					colorChange("ekle","marka");
					tf =  false;
				}
				if (document.getElementsByName("model")[0].value == "")  {
					colorChange("ekle","model");
					tf =  false;
				}
				if (document.getElementsByName("musteri-adi")[0].value == "")  {
					colorChange("ekle","musteri-adi");
					tf =  false;
				}
				if (document.getElementsByName("musteri-soyadi")[0].value == "")  {
					colorChange("ekle","musteri-soyadi");
					tf =  false;
				}
				if (document.getElementsByName("musteri-tel")[0].value == "")  {
					colorChange("ekle","musteri-tel");
					tf =  false;
				}
				if (document.getElementsByName("durum")[0].value == "")  {
					colorChange("ekle","durum");
					tf =  false;
				}
				 return tf;
			}

		</script>