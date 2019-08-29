/* collapsibles */
var coll = document.getElementsByClassName("collapsible");
var p;

for (p = 0; p < coll.length; p ++) {
    coll[p].addEventListener("click", function() {
        this.classList.toggle("active1");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }
    });
}