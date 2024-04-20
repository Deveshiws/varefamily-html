Fancybox.defaults.compact = true;


ScrollTrigger.batch('.stagger', {
    onEnter: batch => {    
      gsap.to(batch, {delay:0.5, duration: 1, opacity: 1, stagger: 0.3, ease: "power2.out", onComplete: function(){
        $(batch).addClass("staggered");
      }})
    },
});

  $(".animFade").each(function () {  
    let triggerPos =  $(this).data("trigger-pos") || "90%";
    gsap.to($(this), {
      scrollTrigger: {
        trigger: $(this),
        start: `top ${triggerPos}`,
      },
      duration: 1,
      opacity: 1,
      ease: "power1.inOut",
    });
  });  


ScrollTrigger.create({
  trigger: ".header-main",
  start: ()=>`${$(".header-main").outerHeight()} top`,
  end: "100% 0%",  
  endTrigger: "html",
  toggleClass: "header-fixed"
});

let mm = gsap.matchMedia();

mm.add(
  "(min-width: 1200px)", function () {
     ScrollTrigger.create({
        trigger: ".home-page .section-hero .booking-form-wrapper",
        start: ()=>`top ${$(".header-main").outerHeight() - 2}`, 
        pin: true,     
        // markers: true,
        end: "bottom top",
        endTrigger: "html",
        pinSpacing: false,           
        toggleClass: "booking-form-fixed",
        onToggle: function(){
          $(".home-page .header-main").toggleClass("header-fixed-form")
        }
    });


    ScrollTrigger.create({
        trigger: ".header-pad-top",
        start:'top top', 
        pin: true,     
        // markers: true,
        end: "bottom top",
        endTrigger: "html",
        pinSpacing: false,  
        onToggle: function(){
          //$(".home-page .header-main").toggleClass("header-fixed-form")
        }
    });

    ScrollTrigger.create({
      trigger: ".sidebar-outer",
      start:()=>`top ${$(".header-pad-top").outerHeight() + 15}`, 
      pin: true,     
      // markers: true,
      end: "bottom bottom",
      endTrigger: ".page-detail-column"
    });
});
  
mm.add("(max-width: 991px)", () => {  
 let tabsSlider = new Swiper(".tabs-slider", {
      speed: 700,
      grabCursor: true,    
      slidesPerView: "auto",   
      roundLengths: true,      
      navigation: {
          nextEl: $(".section-invitations .cs-next").get(0),
          prevEl: $(".section-invitations .cs-prev").get(0)
      },
  });

  if(tabsSlider.isLocked){
    $(".section-invitations .swiper-track").hide();
  }else{
    $(".section-invitations .swiper-track").show();
  }

  let blogSlider = new Swiper(".blog-swiper", {
      speed: 700,  
      slidesPerView: 1.2,       
      navigation: {
          nextEl: $(".section-blog .cs-next").get(0),
          prevEl: $(".section-blog .cs-prev").get(0)
      },
  });

  if(blogSlider.isLocked){
    $(".section-blog .swiper-track").hide();
  }else{
    $(".section-blog .swiper-track").show();
  }


  let instaSlider = new Swiper(".insta-swiper", {
      speed: 700,  
      slidesPerView: 1.2,      
      navigation: {
          nextEl: $(".section-insta .cs-next").get(0),
          prevEl: $(".section-insta .cs-prev").get(0)
      },
  });

  if(instaSlider.isLocked){
    $(".section-insta .swiper-track").hide();
  }else{
    $(".section-insta .swiper-track").show();
  }

  return () => {     
    // if($(tabsSlider.el).length){
    //   tabsSlider.destroy();    
    // }
  };

});


mm.add("(max-width: 1199px)", () => {  
    ScrollTrigger.create({
      trigger: ".key-features-wrap",
      start: "bottom bottom-=100%", 
      // markers: true,
      endTrigger: "html",   
      onToggle: function(){
        console.log("hello");
        $(".m-fixed-info").toggleClass("active");
      }
  });
});



window.cardSlider = function(){
  $(".card-slider:not(.swiper-initialized)").each(function(){
      var $this = $(this);
      new Swiper(this, {  
          speed: 1000,
          loop: true,
          lazyPreloadPrevNext:2,
          navigation: {
              nextEl: $this.find(".cs-next").get(0),
              prevEl: $this.find(".cs-prev").get(0)
          },
          pagination: {
              el: $this.find(".swiper-pagination").get(0),
              clickable: true,
              dynamicBullets: true
          }
      });
  });
}

cardSlider();



let tabsSlider = new Swiper(".team-slider", {
  speed: 700,
  grabCursor: true,    
  slidesPerView: "auto",   
  roundLengths: true,      
  navigation: {
      nextEl: $(".team-slide-track .cs-next").get(0),
      prevEl: $(".team-slide-track .cs-prev").get(0)
  },
});



new Swiper(".hero-slides", { 
  speed: 3000,
  effect: "fade",
  crossFade: true,
  loop: true,
  autoplay:{
     delay: 7000,
     disableOnInteraction: false
  }, 
  pagination: {
    el: ".hero-slides .swiper-pagination",
    clickable: true,
  },
});


// experience slides
let experienceSlides = new Swiper(".experience-slides", { 
  speed: 3000,
  effect: "fade",
  crossFade: true,
  // loop: true,
  // autoplay:{
  //    delay: 7000,
  //    disableOnInteraction: false
  // }, 
  pagination: {
    el: ".section-experience .swiper-pagination",
    clickable: true,
  },
});


new Swiper(".detail-image-slider", {
    speed: 1000,
    grabCursor: true,
    // spaceBetween: 0,
    slidesPerView: "auto",
    centeredSlides: true,
    roundLengths: true,
    loop: true,
    lazyPreloadPrevNext:2,
    navigation: {
        nextEl: $(".detail-image-slider .cs-next").get(0),
        prevEl: $(".detail-image-slider .cs-prev").get(0)
    },
});



// comments thumb slides
let commentsThumbSlides = new Swiper(".comments-thumb-slider", { 
  effect: "fade",
  fadeEffect: {
    crossFade: true
  },
  loop: true,
});


// comments slides
let commentsSlides = new Swiper(".comments-slider", { 
  effect: "fade",
  fadeEffect: {
    crossFade: true
  },
  loop: true,
  // autoplay:{
  //   delay: 7000,
  //   disableOnInteraction: false
  // }, 
  navigation: {
    nextEl: $(".section-guests-comments .cs-next").get(0),
    prevEl: $(".section-guests-comments .cs-prev").get(0)
},
});

commentsSlides.controller.control = commentsThumbSlides;
commentsThumbSlides.controller.control = commentsSlides;


$(".accordionbox li h4").on('click', function(){
  $(this).next('.content').slideDown();
  $(this).addClass('active');
  $(this).parent().siblings().find('h4').removeClass('active');
  $(this).parent().siblings().find('.content').slideUp();
})


function collapseTabs(el, type = false){
  $(el).next(".collapse-text").stop().slideDown(500).parent().addClass("active").siblings().removeClass("active").find(".collapse-text").stop().slideUp(500);
  if(type){
    $(`.section-experience .swiper-pagination-bullet:eq(${$(el).parent().index()})`).trigger("click");
  }
}


$(".collapsible-wrapper>ul>li>h3").on("click", function(e){ 
  collapseTabs(this, true);  
  console.log("hello world")
})

$(".section-experience .swiper-pagination-bullet").on("click", function(){   
  let el = $(`.collapsible-wrapper>ul>li:eq(${$(this).index()})>h3`).get(0);
  collapseTabs(el);  
})





$(document).on("click", "[data-scrollto]", function(e) {
    e.preventDefault();
    let scrollToElm = $(this).data("scrollto");
    let scrollPos =
        $('[data-scroll-id="' + scrollToElm + '"]').offset().top -
        $(".header-main").outerHeight();
    $("html,body").stop().animate({
        scrollTop: scrollPos
    }, 700);
    $(".menu-active .h-active").trigger("click");
});

$(".menu-toggle").on("click", function(event) {
    $("body").toggleClass("menu-active");
});



$(".header-main").on("mouseover mouseout", function(event){
    if (event.type === "mouseover") {
        $(this).addClass("header-bg");
    } else if (event.type === "mouseout") {
        $(this).removeClass("header-bg");
    }
});



// $(".menu-toggle").on("click", function(event) {
//   $("body").toggleClass("menu-active");
// });

$(".hamburger").on("click", function (event) {
  $(this).toggleClass("h-active");
  $("body").toggleClass("menu-active"); 
});


// close dropdown
$('.dropdown').each(function(){
  let menu = new bootstrap.Dropdown($(this).find("[data-bs-toggle]"));
  $(this).find('[data-close-menu]').on("click", function(){
    menu.hide();
  })
})


// expand accordian on details page
let isOpened = true;
$(".expand-btn").on("click", function(){
  let $this = $(this);
  console.log("isOpened", isOpened);
  if(!isOpened){
    $(this).parents(".nav-content").find(".accordion-button.collapsed").trigger("click");
    $this.find("span").text("COLLAPSE ALL");
    isOpened = true;
  }else{
    $(this).parents(".nav-content").find(".accordion-button:not(.collapsed)").trigger("click");
    $this.find("span").text("EXPAND ALL");
    isOpened = false;
  }

 

   
  setTimeout(function(){
    ScrollTrigger.refresh();
  },300)
   
})


Fancybox.bind("[data-fancybox]");