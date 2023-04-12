const loadCustomTitle = () => {
    if(!document.getElementsByClassName('yuki-posts-container')[0])
    {
        document.getElementsByClassName('yuki-header-row-primary_navbar')[0].remove();
        const targets = document.getElementsByClassName('yuki-builder-column-0')[2];
        const newElement = document.createElement('h1');
        newElement.style.cssText = 'font-weight: bold; font-size: large;'
        newElement.innerText = "Hi, I'm George 👋💻";
        newElement.id="custom-title"
        targets.appendChild(newElement);
    }
}