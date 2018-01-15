 var like=false;
 function  Toblue() {
    if(like == false)
        document.getElementById('hand').src="/Public/images/passage/havegood.png";
}
function  Togray() {
    if(like == false)
        document.getElementById('hand').src="/Public/images/passage/good.png";
}

function  likeit() {
    if(like == false) {
        document.getElementById('like_number').innerText = parseInt(document.getElementById('like_number').innerText) + 1;
        Toblue();
        like = true;
    }
}

function imgwidth(){
	var open=document.getElementById("head_img");
	open.style.display="block";
}