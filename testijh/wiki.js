/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction(id) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
            }
    }
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

$('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
      })

$(window).load(function(){
        $(window).load(function() { // 確認整個頁面讀取完畢再將這三個div隱藏起來
                $("#status").delay(5000).fadeOut(3000); //delay --> 延遲幾秒才fadeOut
                $("#preloader").delay(7000).fadeOut(3000);
        })
})
        

