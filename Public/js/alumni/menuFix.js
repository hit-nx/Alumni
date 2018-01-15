function menuFix() {
    var changeFix = document.getElementById("menuUl").getElementsByTagName("li");
    for(var i = 0; i < changeFix.length; i++) {
        changeFix[i].onmouseover = function () {
            this.className += (this.className.length >0?" ":"") + "listshow";
        }
        changeFix[i].onmouseout = function () {
            this.className = this.className.replace("listshow","");
        }
    }
}

window.onload = menuFix;