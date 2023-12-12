function urlencode() {
	var encode = encodeURIComponent(document.getElementById("urlencode").value);
	document.getElementById("encodingresult").innerHTML = encode;
}
