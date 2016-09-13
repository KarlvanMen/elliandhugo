window.onload = function() { 
        selectChange();     
        var images = document.getElementsByClassName('produkti-image');
        var images2 = document.getElementsByClassName('produkts-top-img');

        for(var i = 0; i < images.length; i++){
                var imageURL = images[i].
                style.
                backgroundImage.
                replace(/url\((['"])?(.*?)\1\)/gi, '$2')
                .split(',')[0];
                var image = new Image();
                image.src = imageURL;

                var width = image.width;
                var height = image.height;

                if(width/height > 1){
                        images[i].className += " wider-image";
                }
        }

        for(var i = 0; i < images2.length; i++){
                var imageURL = images2[i].
                style.
                backgroundImage.
                replace(/url\((['"])?(.*?)\1\)/gi, '$2')
                .split(',')[0];
                var image = new Image();
                image.src = imageURL;

                var width = image.width;
                var height = image.height;

                if(width/height > 1){
                        images2[i].className = "wider-image " + images2[i].className;
                }
        }

        var menuList = document.getElementsByClassName('list');
        for(var i = 0; i < menuList.length; i++){
                if(menuList[i].childNodes.length > 1){
                        menuList[i].childNodes[1].style.display = 'none';
                        menuList[i].onclick=function(){
                                if (this.childNodes[1].style.display == 'none') {
                                        this.childNodes[1].style.display = 'block';
                                } else {
                                        this.childNodes[1].style.display = 'none';
                                }
                        }
                }
                
        }
};


function selectChange(){        
        if (document.body.contains(document.getElementById("size-select"))) {
                var sel = document.getElementById("size-select").value;
                document.getElementById("price").innerHTML = "<strong>" + sel + "</strong> €";
        }
}

function displayMenu(){
        var menu = document.getElementById("menu_nav");
        if (menu.dataset.show == 'true') {
                menu.style.display = "none";
                menu.dataset.show = 'false';
                document.getElementById("drawer").style.minHeight = "auto";
        } else {
                menu.style.display = "block";
                menu.dataset.show = 'true';
                document.getElementById("drawer").style.minHeight = "100vh";
        }
}