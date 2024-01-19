function cowsay(text) {
	let text = document.getElementById("input").value;
	if (text == "")
		text = "Moo!";

	document.getElementById("output").innerHTML = text;
}
