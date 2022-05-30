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

function loadingFunction(){
        $(".loading").delay(1000).fadeOut();
      }

