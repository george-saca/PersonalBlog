(() =>
{
	loadCustomTitle();
	loadAutoTyping();
	  
	var greetings = document.getElementsByClassName('yuki-site-branding yuki_header_el_logo')[0];
	//Create_img();
	
	function Create_img() {
		var img = document.createElement('img');
		img.width = 150;
		img.height = 132;
		img.style.cssText = 'margin-right: 100px;'
		img.src = '/wp-content/uploads/2023/03/small_laptop.png';
	//   img.src =
	// 	'https://media.geeksforgeeks.org/wp-content/uploads/20190529122828/bs21.png';
		greetings.insertBefore(img, greetings.firstChild);
	}
}
)();