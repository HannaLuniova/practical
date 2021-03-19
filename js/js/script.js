// console.log('Я учу JS');
// let $a;
// $a = "123";
// console.log($a);
let myName="Фрилансер по жизни",
myAge=36,
myMessage="Живи,а работай в свободное время!";

// гамбургер
$(function () {
    $(".hamdurger").click(function () {
        $(this).toggleClass("is-active");
        if ($(this).hasClass("is-active")) {
            $(".menu__top").slideDown(300);
        } else {
            $(".menu__top").slideUp(300);
        }
    });
});
/* .hamburger{
    display: none;
}
.hamburger .line{
    width: 24px;
    height: 3px;
    background-color: rgb(231, 34, 34);
    display: block;
    margin: 6px auto;
    transition: all 0.3s ease-in-out;
    border-radius: 5px;
}
.hamburger:hover{
    cursor: pointer;
}
#hamburger-1.is-active .line:nth-child(2){
    opacity: 0;
}
#hamburger-1.is-active .line:nth-child(1){
  transform: translateY(9px) rotate(45deg);
}
#hamburger-1.is-active .line:nth-child(3){
  transform: translateY(-9px) rotate(-45deg);
}
    header {
        position: relative;
    }
    .menu__top{
        display: none;
        position: absolute;
        width: 100%;
        left: 0;
        top: 70px;
        z-index: 10;
        background-color: #fff;
        box-shadow: 0 3px 6px rgba(0, 0, 0, .16);
    }
    .menu__top li{
        display: block;
        margin: 10px;
        width: 100%;
    }
    .hamburger{
        display: block;
    } */