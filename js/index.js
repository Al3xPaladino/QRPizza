	  	function RadioCheck() {
	  		let obje = document.getElementsByName("pasta");
			for(i = 0; i < obje.length; i++){
				if(obje[i].checked) obje[i].value = 1;
				else obje[i].value = 0;
			}
		}

	  	function OnOff(tag) {
	  		let of = tag.value;
	  		if(of == 0) of = 1;
	  		else of = 0;
	  		tag.value = of;
	  	}

	  	function CreateCode(){
	  		let inputs = document.getElementsByTagName("input");

	  		for(let i=0; i<inputs.length; i++){
				if((inputs[i].getAttribute("type")=="checkbox" || inputs[i].getAttribute("type")=="radio") && inputs[i].getAttribute("value")==1){
					document.getElementById("textCode").value += inputs[i].getAttribute("id") + ";";
				}
			}
	  	}

	    function generateQRCode() {
	      document.getElementById("textCode").value = "";
	      CreateCode();
	      let website = document.getElementById("textCode").value;
	      if (website) {
	        /*let qrcodeContainer = document.getElementById("qrcode");
	        qrcodeContainer.innerHTML = "";
	        new QRious({
	          element: qrcodeContainer,
	          value: website
	        });*/
	        /*With some styles*/
	        let qrcodeContainer2 = document.getElementById("qrcode-2"); 
	        qrcodeContainer2.innerHTML = "";
	        new QRious({
	          element: qrcodeContainer2, 
	          background: '#ffffff',
	          backgroundAlpha: 1,
	          foreground: '#5868bf',
	          foregroundAlpha: 1,
	          level: 'H',
	          padding: 0,
	          size: 200,
	          value: website
	        });
	        document.getElementById("qrcode-container").style.display = "block";
	      } else {
	        alert("Please enter a valid Code");
	      }
	    }