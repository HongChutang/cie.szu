<body bgcolor="#F7F7F7">


<!--图片漂浮广告代码开始-->

<div id="www_qpsh_com" style="position:absolute;z-index=2000;">
<!--链接地址--><a href="#" target="_blank">
<!--图片地址--><img src="<?php $this->options->themeUrl('image/logo.png'); ?>" border="0">
</a>
</div>
<script> 
var x = 50,y = 60 
var xin = true, yin = true 
var step = 1 
var delay = 10 
var obj=document.getElementById("www_qpsh_com") 
function floatwww_qpsh_com() { 
var L=T=0
//by www.qpsh.com
var R= document.body.clientWidth-obj.offsetWidth 
var B = document.body.clientHeight-obj.offsetHeight 
obj.style.left = x + document.body.scrollLeft 
obj.style.top = y + document.body.scrollTop 
x = x + step*(xin?1:-1) 
if (x < L) { xin = true; x = L} 
if (x > R){ xin = false; x = R} 
y = y + step*(yin?1:-1) 
if (y < T) { yin = true; y = T } 
if (y > B) { yin = false; y = B } 
} 
var itl= setInterval("floatwww_qpsh_com()", delay) 
obj.onmouseover=function(){clearInterval(itl)} 
obj.onmouseout=function(){itl=setInterval("floatwww_qpsh_com()", delay)} 
</script>

<!--图片漂浮广告代码结束-->


</body>
本代码由<a href=http://www.qpsh.com>网页特效网</a>提供