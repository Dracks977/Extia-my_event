var fc = document.getElementById("flecheorange");
function fleche() {
    document.getElementById(".bloc_footer").addEventListener("mouseenter", function(){
            fc.setAttribute("style", "display:none");
            document.querySelector("#menu_footer:hover").setAttribute("style", "height:15%;")
                });
    document.querySelector(".bloc_footer").addEventListener("mouseleave", function(){
            fc.setAttribute("style", "visibility:visible");
            document.querySelector("#menu_footer:hover").setAttribute("style", "height:10%;")
                });
}
