/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function hide_bar(id) {
    document.getElementById(id).classList.remove('show');
} 
function show_bar(id) {
    // var dropdowns = document.getElementsByClassName("dropdown-content");
    // var i;
    // for (i = 0; i < dropdowns.length; i++) {
    //     var openDropdown = dropdowns[i];
    //     if (openDropdown.classList.contains('show')) {
    //         openDropdown.classList.remove('show');
    //     }
    // }
    document.getElementById(id).classList.toggle("show");
}
 
// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                                openDropdown.classList.remove('show');
                        }
                }
        }
}

//loading
function loadingFunction(){
        $(".loading").delay(1000).fadeOut();
      }

//RWD button
$(document).ready(() => {
  $('.hamBar').click(function(){
    //避免 a 標籤會觸發
    event.preventDefault();
    //觸發展開收起來
    $('.dropdown').toggleClass('show');  
  })
  $('.dropdown li a').click(function(){
    event.preventDefault();
    //移除class，才會讓 menu 消失
    $('.dropdown').removeClass('show');
    //以下是滾動動畫
    var sectionTitle = this.title;
    console.log(sectionTitle);
    var sectionId = "#myDropdown--" + sectionTitle;
    console.log(sectionId);
    var scrollPoint = $(sectionId).offset().top;
    var lastScrollPoint = scrollPoint - 100;
    $("html,body").animate({ scrollTop: lastScrollPoint }, 800);
  })
});

//header隱藏
document.addEventListener('DOMContentLoaded', function(){
  
        jQuery(function($){
            var myWindow = $(window); 
            var myPosition = myWindow.scrollTop(); 
            myWindow.scroll(function(){
            if (myPosition > 50) {
              if (myWindow.scrollTop() > myPosition) {
                $("#navbar").addClass("header-hide");
              } else {
                $("#navbar").removeClass("header-hide");
              }
            }
          myPosition = myWindow.scrollTop();
          }); 
        });  
    });