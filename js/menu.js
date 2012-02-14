if (window.attachEvent) {
        var sfhover = function(n) {
                var i, s=document.getElementById(n).getElementsByTagName('li'), l=s.length;
                for (i=0; i<l; i++) {
                        s[i].onmouseover=function() {this.classList.add('sfhover');}
                        s[i].onmouseout=function() {this.classList.remove('sfhover');}
                }
        };
        window.attachEvent('onload', sfhover('menu'));
        window.attachEvent('onload', sfhover('menuA'));
}
