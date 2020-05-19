function testing() {
      		var person = prompt ("Please enter your name", "Harry Potter");

      		if (person !=null){
      			pesan = "Hello " + person + "! How are you today!";
      			//alert(pesan);
      			document.getElementById("txtinfo").innerHTML = pesan;
      		}
      	}