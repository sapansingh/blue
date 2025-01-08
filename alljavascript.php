<script>
 
$(document).ready(function(){
  $('a[itemprop="url2"]').click(function(e) {
    e.preventDefault();  // Prevent the default link behavior

    var submenu = $(this).siblings('.sub-menu2');  // Get the <ul> sibling of the clicked <a>

    // Slide toggle with animation
    submenu.stop(true, true).slideToggle(300);  // 300ms for animation duration
  });
  $('a[itemprop="feat"]').click(function(e) {
    e.preventDefault();  // Prevent the default link behavior

    var submenu = $(this).siblings('.sub-menu');  // Get the <ul> sibling of the clicked <a>

    // Slide toggle with animation
    submenu.stop(true, true).slideToggle(300);  // 300ms for animation duration
  });
  $(".search-button").click(function(){
    $(".search-container-overlay").toggleClass("search-container-overlay-show");
  });
  $(".search-container-close").click(function(){
    $(".search-container-overlay").toggleClass("search-container-overlay-show");
  });

 $(".dark-toggle").click(function(){
    $("#mainContent").toggleClass("dark");
  });
 
  $(".show-SpeedL-container").click(function(){
    $("#mainContent").toggleClass("light-open");
  });
   $(".hide-LSpeed-filter").click(function(){
    $("#mainContent").toggleClass("light-open");
  });
});
var items = document.getElementsByClassName('tickerNews');

// Initialize index for tracking active item
var currentIndex = 0;

// Function to toggle active class
function toggleActive() {
    // Remove active class from all items
    for (var j = 0; j < items.length; j++) {
        items[j].classList.remove('active');
    }
    // Add active class to the item at currentIndex
    items[currentIndex].classList.add('active');
    // Increment currentIndex for the next item
    currentIndex = (currentIndex + 1) % items.length;
}

// Set interval to toggle active class every 4 seconds
setInterval(toggleActive, 4000);

</script>

