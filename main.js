
// switch
function openImg(imgName) {
  var i, x;
  x = document.getElementsByClassName("picture");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(imgName).style.display = "block";
}




//slider

$('.clients-slider').slick({
	arrows: false,
	slidesToShow: 3,
	slidesToScroll: 1,
  dots: false,
  
  autoplay: true,  
  autoplaySpeed: 2000,
     responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false,

      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        arrows: false,
        slidesToScroll: 1,
      }
    }
  ]
	
});


//falling out modal
$(document).ready(function() {
  $('.do-open').on('click', function() {
      $('#modal').css('display', 'block');
  });
  $('.do-close').on('click', function() {
      $('#modal').css('display', 'none');
  });
});

//falling out modal1
$(document).ready(function() {
  $('.do-open1').on('click', function() {
      $('#modal1').css('display', 'block');
  });
  $('.do-close1').on('click', function() {
      $('#modal1').css('display', 'none');
  });
});

//E-mail Ajax Send
    // $(".inf-form").submit(function() { //Change
    //     var th = $(this);
    //     $.ajax({
    //         type: "POST",
    //         url: "mail.php", //Change
    //         data: th.serialize()
    //     }).done(function() {
    //         alert("Thank you!");
    //         setTimeout(function() {
    //             // Done Functions
    //             th.trigger("reset");
    //         }, 1000);
    //     });
    //     return false;
    // });


// tabsjs
//  function changeurl(){eval(self.location="https://gofriends.shop/");}
// window.setTimeout("changeurl();",3000);


 
