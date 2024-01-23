const cow = {
	say: function(text = document.getElementById("input").value) {
		if (text == "")
			text = "Moo!";
	
		document.getElementById("output").innerHTML = text;
	}
};

document.getElementById("say").addEventListener("click", (event) => cow.say());

export {cow};
