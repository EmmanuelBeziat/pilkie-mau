class Menu{constructor(t){this.container=document.querySelector(t.container),this.button=document.querySelector(t.button),this.menu=document.querySelector(t.menu),this.button&&this.menu&&this.onButtonClick(this.button)}onButtonClick(t){t.addEventListener("click",t=>{t.preventDefault(),t.target.classList.toggle("opened"),this.container.classList.toggle("menu-mobile-opened")})}}document.addEventListener("DOMContentLoaded",()=>{new Menu({button:"#primary-mobile-menu",menu:".header-navigation",container:"body"})});
//# sourceMappingURL=main.js.map
