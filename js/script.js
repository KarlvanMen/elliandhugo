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
                images2[i].className += " wider-image";
        }
}

function selectChange(){
        var sel = document.getElementById("size-select").value;
        document.getElementById("price").innerHTML = "<strong>" + sel + "</strong> €";
}