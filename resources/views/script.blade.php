<script>
// Accordion 
// function myAccFunc() {
//   var x = document.getElementById("demoAcc");
//   if (x.className.indexOf("w3-show") == -1) {
//     x.className += " w3-show";
//   } else {
//     x.className = x.className.replace(" w3-show", "");
//   }
// }

// // Click on the "Jeans" link on page load to open the accordion for demo purposes
// document.getElementById("myBtn").click();


// // Open and close sidebar
// // function w3_open() {
// //   document.getElementById("mySidebar").style.display = "block";
// //   document.getElementById("myOverlay").style.display = "block";
// // }
 
// // function w3_close() {
// //   document.getElementById("mySidebar").style.display = "none";
// //   document.getElementById("myOverlay").style.display = "none";
// // }

// var slideIndex = 1;
// showSlides(slideIndex);

// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }

// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }

// function showSlides(n) {
//   var i;
//   var slides = document.getElementsByClassName("mySlides");
//   var dots = document.getElementsByClassName("dot");
//   if (n > slides.length) {slideIndex = 1}    
//   if (n < 1) {slideIndex = slides.length}
//   for (i = 0; i < slides.length; i++) {
//       slides[i].style.display = "none";  
//   }
//   for (i = 0; i < dots.length; i++) {
//       dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";  
//   dots[slideIndex-1].className += " active";
// }

// function getPoision() {
//     sessionStorage.setItem("poision",25000);
// }

// if (sessionStorage.getItem("poision")) {
//     window.scrollTo(0, sessionStorage.getItem("poision"));
//     sessionStorage.setItem("poision",0);
// }
// function showOverview() {
//   document.getElementById("overview").style.display = "block";
// }
// function closeOverview(){
//   document.getElementById("overview").style.display = "none";
// }


// var temp =0;

// function Reply(i) {
//   if(temp==0){
//     document.getElementsById(i).style.display = 'block';
//     temp=1;
//   }else{
//     document.getElementsById(i).style.display = 'none';
//     temp=0;
//   }
// }
// When the user scrolls down 50px from the top of the document, resize the header's font size
window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                document.getElementById("header").style.backgroundColor = "#2b2b2b";
                document.getElementById("header").style.boxShadow = "5px 5px 10px grey";
            } else {
                document.getElementById("header").style.backgroundColor = "transparent";
                document.getElementById("header").style.boxShadow = "none";
            }
        }
        // function getSearch() {
            
        //     document.getElementById("keyword").innerHTML = document.getElementById("search").value;
            
        // }
</script>