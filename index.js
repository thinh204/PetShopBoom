let list = document.querySelector('.slider .list');
let items = document.querySelectorAll('.slider .list .item');
let dots = document.querySelectorAll('.slider .dots li');
let prev = document.getElementById('prev');
let next = document.getElementById('next');

let active = 0;
let lengthItems = items.length - 1;

document.addEventListener("DOMContentLoaded", function() {
    // Lấy tham chiếu đến phần tử DOM
    var next = document.getElementById("next");

    // Kiểm tra nếu phần tử tồn tại trước khi gán sự kiện onclick
    if (next) {
        next.onclick = function() {
            // Xử lý sự kiện onclick
            if (active + 1 > lengthItems) {
                active = 0;
            } else {
                active = active + 1;
            }
            reloadSlider();
        };
    }
});
prev.onclick = function() {
    if (active -1 < 0) {
        active = lengthItems;
    } else {
        active = active - 1;
    }
    reloadSlider();
}

let refreshSlider = setInterval(() => {next.click()}, 3000);
function reloadSlider() {
    let checkLeft = active * items[0].offsetWidth; // Thay đổi ở đây
    list.style.transform = `translateX(-${checkLeft}px)`; // Thay đổi ở đây

    let lastActiveDot = document.querySelector('.slider .dots li.active');
    lastActiveDot.classList.remove('active');
    dots[active].classList.add('active');
    clearInterval(refreshSlider);
    refreshSlider = setInterval(() => {next.click()}, 5000);
}
dots.forEach((li, key) => {
    li.addEventListener('click', function(){
        active = key;
        reloadSlider();
    })    
})
const dropdown = document.querySelector('.dropdown');
const searchWith = document.querySelector('.search-with');

dropdown.addEventListener('mouseover', function() {
    searchWith.style.display = 'none';
});

dropdown.addEventListener('mouseout', function() {
    searchWith.style.display = 'flex';
});



let availablekeyKeywords = [
    'All Categories',
    'Chó Bichon',
    'Dây Vòng Cổ',
    'Mèo Anh (Dài + Ngắn)',
    'Mèo Chân Ngắn',
    'Mèo Tai Cụp',
    'Chó Alaska Malamute',
    'Chó Bắc Kinh',
    'Chó Beagle',
    'Chó Corgi',
]
const resultsBox = document.querySelector(".result-box");
const searchInput = document.getElementById("search-input");
searchInput.onkeyup = function(){
    let result = [];
    let search = searchInput.value;
    if(search.length){
        result = availableKeywords.filter((keyword)=>{
            return keyword.toLowerCase().includes(search.toLoweCase());
        });
        console.log(result);
    }
    display(result);
    if(!result.length){
        resultsBox.innerHTML = '';
    }
};
function display(result){
    const content = result.map((list)=>{
        return "<li onclick=selectInput(this)>" + list + "</li>";
    });
    resultsBox.innerHTML = "<ul>" + content.join('') + "</ul>";
};
function selectInput(list) {
    inputBox.value = list.innerHTML;
    resultsBox.innerHTML = '';
};



