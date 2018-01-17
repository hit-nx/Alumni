$(document).ready(function (){

	$('.son').hover(function(){
		$(this).find('ul').css("display","block");
	},function(){
		$(this).find('ul').css("display","none");
	});
	// $(".son").hover(function(){
	// 	$(this).find("ul").slideDown("1000");
	// });

	// $(".son").mouseleave(function (){
	// 	$(this).find("ul").slideUp("slow");
	// });
});
$(document).ready(function (){
	$('.otherweb').hover(function(){
		$(this).find("ul").show();
	},function(){
		$(this).find("ul").hide();
	});
});
// 宽度适应
// window.onresize= function(){
// 	var wides=document.getElementsByName("fixwide");
// 	for(i=0;i<3;i++)
// 	{
// 		if (wides[i].style.width="100%"&&wides[i].style.width<"1303px") 
// 		{
// 			wides[i].style.width="1303px"
// 		}
// 	}
// }
// window.onload= function(){
// var wides=document.getElementsByName("fixwide");
// 	for(i=0;i<3;i++)
// 	{
// 		if (wides[i].style.width="100%"&&wides[i].style.width<"1303px") 
// 		{
// 			wides[i].style.width="1303px"
// 		}
// 	}
// }

// function change(){
// 	//var tltle=document.getElementById("title");
// 	var fa=document.getElementById("word1");
// 	// for(i=1;i<=6;i++)
// 	// {
// 	// 	title[i-1].innerText="标题"+i;
// 	// }
// 	for(i=1;i<=6;i++)
// 	{
// 		fa[i-1].childNodes[1].innerHTML="内容"+i;
// 	}
// 	for(i=1;i<=6;i++)
// 	{
// 		fa[i-1].childNodes[2].innerHTML="标签"+i;
// 	}



// }