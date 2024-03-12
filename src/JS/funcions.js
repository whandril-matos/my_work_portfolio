// let arr = []

// let i = 16
// while (i>0){
//     arr.push("/src/assets/works/a("+i+").png")
//     --i
// }

// console.log(arr)

document.addEventListener("DOMContentLoaded", function () {
    const image = [
        "/src/assets/works/a (16).png",
        "/src/assets/works/a (15).png",
        "/src/assets/works/a (14).png",
        "/src/assets/works/a (13).png",
        "/src/assets/works/a (12).png",
        "/src/assets/works/a (11).png",
        "/src/assets/works/a (10).png",
        "/src/assets/works/a (9).png",
        "/src/assets/works/a (8).png",
        "/src/assets/works/a (7).png",
        "/src/assets/works/a (6).png",
        "/src/assets/works/a (5).png",
        "/src/assets/works/a (4).png",
        "/src/assets/works/a (3).png",
        "/src/assets/works/a (2).png",
        "/src/assets/works/a (1).png"
    ]
    
    
    

    
    const rob = document.getElementById("imgs")
    console.log(rob)
    // Loop sobre o array de URLs das imagens
    image.forEach(function(url) {
        const div =  document.createElement("div")
        div.classList.add('bz')
        
        // Cria um elemento <img>
        const img = document.createElement('img');
        // Define o atributo src com a URL da imagem
        img.src = url;
        img.classList.add('artWork')
        
        rob.appendChild(img)
        

    });
    console.log()

})
