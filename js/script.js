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
                var imageURL = images2[i].style.backgroundImage.replace(/url\((['"])?(.*?)\1\)/gi, '$2').split(',')[0];
                var image = new Image();
                image.src = imageURL;

                var width = image.width;
                var height = image.height;

                if(width/height > 1){
                        images2[i].className = "wider-image " + images2[i].className;
                }

                images2[i].onclick=function(){
                        document.getElementById('main-img').src = this.style.backgroundImage.replace(/url\((['"])?(.*?)\1\)/gi, '$2').split(',')[0];
                }
        }

        var menuList = document.getElementsByClassName('list');
        for(var i = 0; i < menuList.length; i++){
                if(menuList[i].childNodes.length > 1){
                        console.log(menuList[i].childNodes[0]);
                        console.log(menuList[i].childNodes);
                        menuList[i].childNodes[2].style.display = 'none';
                        menuList[i].childNodes[0].innerHTML += " +";
                        menuList[i].onclick=function(){
                                if (this.childNodes[2].style.display == 'none') {
                                        var temp = this.childNodes[0].innerHTML;
                                        temp = temp.substring(0, temp.length-1);
                                        this.childNodes[0].innerHTML = temp + "-";
                                        this.childNodes[2].style.display = 'block';
                                } else {
                                        var temp = this.childNodes[0].innerHTML;
                                        temp = temp.substring(0, temp.length-1);
                                        this.childNodes[0].innerHTML = temp + "+";         
                                        this.childNodes[2].style.display = 'none';
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
        } else {
                menu.style.display = "block";
                menu.dataset.show = 'true';
        }
}