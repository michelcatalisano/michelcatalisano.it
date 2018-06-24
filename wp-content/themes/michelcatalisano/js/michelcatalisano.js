(function($){
  $(function() {

    $('#fullpage').fullpage({
      onLeave: function(index, nextIndex, direction){
        sectionAnimate(nextIndex);

      }
    });
    sectionAnimate(1);

    function sectionAnimate(nextIndex){
      console.log("animating section "+nextIndex);
      var $section = $("#fullpage > .item:nth-child("+(nextIndex-1)+")");



      var $title = $(".main-title");
      var $subtitle = $(".main-subtitle");
      var $paragraph = $(".paragraph");
      var $image = $(".img-container");

      var tl = new TimelineMax();
      tl.fromTo($subtitle, 0.3, {autoAlpha:0}, {autoAlpha:1}, "+=1");
      tl.fromTo($title, 0.3, {autoAlpha:0}, {autoAlpha:1}, "+=0.2");
      tl.fromTo($paragraph, 0.3, {autoAlpha:0}, {autoAlpha:1}, "+=0.2");
      tl.to($image, 0.5, {autoAlpha:1}, "+=0.2");

    }


  });
})(jQuery);
