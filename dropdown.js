let cat_btn = document.querySelector('.catalog_btn')
let dropdown = document.querySelector('.dropdown')
let catalog_btn_img = document.querySelector('.catalog_btn_img')

cat_btn.onclick = function drop_menu(){
    if (dropdown.style.display == "none"){
        dropdown.style.display = "block"
        catalog_btn_img.src = 'images/line.png'
    } else{
        dropdown.style.display = "none"
        catalog_btn_img.src = 'images/catalog.png'
    }
}