var fc = document.getElementById("flecheorange");
function fleche() {
    document.querySelector(".bloc_footer").addEventListener("mouseover", function(){
	    fc.setAttribute("style", "display:none;");
	    document.querySelector("#menu_footer:hover").setAttribute("style", "height:15%;")
		});
}
