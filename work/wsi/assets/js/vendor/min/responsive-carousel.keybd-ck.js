!function(e){var o="carousel",t="."+o,n="."+o+"-nav a",c,u=function(n){clearTimeout(c),c=setTimeout(function(){var c=e(n.target).closest(t);39===n.keyCode||40===n.keyCode?c[o]("next"):(37===n.keyCode||38===n.keyCode)&&c[o]("prev")},200),37<=n.keyCode<=40&&n.preventDefault()};e(document).on("click",n,function(o){e(o.target)[0].focus()}).on("keydown",n,u)}(jQuery);
