const loadAutoTyping = () => {
    var siteTaglineElements = document.getElementsByClassName('site-tagline');
	var headerSiteTaglineDesktop = siteTaglineElements[0];
	var headerSiteTaglineLaptop = siteTaglineElements[1];
	headerSiteTaglineDesktop.setAttribute("id", "siteTagline-desktop");
	headerSiteTaglineLaptop.setAttribute("id", "siteTagline-laptop");
	
	const codeSnippetHtml = (resolution) => `<code id="codeSiteTagline-${resolution}" style="font-weight: bold;"></code>`;
	const siteTaglineDesktop = document.getElementById("siteTagline-desktop");
	const siteTaglineLaptop = document.getElementById("siteTagline-laptop");
	siteTaglineDesktop.innerHTML= codeSnippetHtml('Desktop');
	siteTaglineLaptop.innerHTML= codeSnippetHtml('Laptop');
	
	const siteTaglineAutoTypingDesktop = new AutoTyping({
      id: 'codeSiteTagline-Desktop',
      typeText: ['With more than 8 years of experience in designing and implementing distributed systems, libraries, and frameworks in .NET, I blend business acumen with technical depth in a unique way', 'A Text Typing Effect'],
	  
	});
	
	siteTaglineAutoTypingDesktop.init();

	const siteTaglineAutoTypingLaptop = new AutoTyping({
		id: 'codeSiteTagline-Laptop',
		typeText: ['With more than 8 years of experience in designing and implementing distributed systems, libraries, and frameworks in .NET, I blend business acumen with technical depth in a unique way', 'A Text Typing Effect'],
		deleteSpeed: 0
	});

    siteTaglineAutoTypingLaptop.init();
}