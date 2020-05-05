function changeUrl(){
	var url=location.href;
	var s = url.indexOf("?");
	if(s!=-1){
		var getStr=url.substr(s);
		var arr=document.getElementsByTagName("a");
		for(var i=0;i<arr.length;i++){
			var href=arr[i].getAttribute("href");
			if(href.indexOf("?")==-1){
				arr[i].setAttribute("href",href+getStr);
			}else{
				arr[i].setAttribute("href",href+getStr.replace("?","&"));
			}
			
		}
	}
}