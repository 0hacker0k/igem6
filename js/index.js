/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function out_bar(id) {
    if(document.documentElement.scrollWidth<=1332){
        return ;
    }
    document.getElementById(id).classList.remove('show');
} 
function in_bar(id) {
    // var dropdowns = document.getElementsByClassName("dropdown-content");
    // var i;
    // for (i = 0; i < dropdowns.length; i++) {
    //     var openDropdown = dropdowns[i];
    //     if (openDropdown.classList.contains('show')) {
    //         openDropdown.classList.remove('show');
    //     }
    // }
    if(document.documentElement.scrollWidth<=1332){
        return ;
    }
    document.getElementById(id).classList.toggle("show");
}
function click_bar(id) {
    if(document.documentElement.scrollWidth>1332){
        return ;
    }
    if(document.getElementById(id).classList.contains('show')){
        document.getElementById(id).classList.remove('show');
    }else{
        document.getElementById(id).classList.toggle("show");
    }
}
 
// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
        // if(document.documentElement.scrollWidth>1332){
        //     return ;
        // }
        console.log(event.target);
        if (!event.target.matches('.click')) {
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

function loadingFunction(){
    $(".loading").delay(1000).fadeOut();
}

// $(document).ready(() => {
//   $('.hamBar').click(function(){
//     //避免 a 標籤會觸發
//     event.preventDefault();
//     //展開或收起來
//     $('.dropbtn').slideToggle(600);
    
//   })
//   $('.dropdown li a').click(function(){
//     event.preventDefault();
//     //收起來
//     $('.dropdown').slideUp(600);
//     //以下是滾動動畫
//     var sectionTitle = this.title;
//     console.log(sectionTitle);
//     var sectionId = "#myDropdown--" + sectionTitle;
//     console.log(sectionId);
//     var scrollPoint = $(sectionId).offset().top;
//     var lastScrollPoint = scrollPoint - 100;
//     $("html,body").animate({ scrollTop: lastScrollPoint }, 800);
//   })
// });

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