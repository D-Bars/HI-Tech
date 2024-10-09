class Slider {

    pointer = 1;
    slideBlocker = false;

    constructor(sliderId, dotSlider) {
        this.slider = jQuery('#' + sliderId);
        this.dotSlider = dotSlider;

        this.sliderLine = this.slider.children().first();
        this.sliderNavigation = this.slider.children().last();

        this.sliderDots = this.sliderNavigation.children();
        this.sliderItems = this.sliderLine.children();
        this.sliderItemWidth = this.sliderItems.first().outerWidth(true);
        this.sliderItemsCount = this.sliderItems.length;

        this.setNavigation();
        this.autoScroll();
    }

    sliderGo(positionNum, itemNum) {
        this.slideBlocker = true;
        this.sliderLine.animate({ 'left': '-' + (positionNum * this.sliderItemWidth) }, 1000, () => {
            this.pointer = itemNum;
            this.setActiveDot();
            this.slideBlocker = false;
        });
    }

    setNavigation() {
        if (this.dotSlider) {
            this.sliderDots.click((event) => {
                var currentDotObj = jQuery(event.currentTarget);
                var dotPointer = currentDotObj.data('id');
                this.switchDot(dotPointer);
            })
        }
    }

    switchDot(dotPointer) {
        if(this.slideBlocker == false){
            this.sliderGo(dotPointer - 1, dotPointer);
            clearInterval(this.intervalId);
            this.autoScroll();
        }
    }

    autoSwitchDot(dotPointer) {
        this.sliderGo(dotPointer, dotPointer + 1);
    }

    setActiveDot() {
        var pointer = this.pointer;
        var currentDotObj = this.sliderDots.filter('[data-id="'+ pointer +'"]');
        this.sliderDots.removeClass('active__slider__dot');
        currentDotObj.addClass('active__slider__dot');
    }

    autoScroll() {
        this.intervalId = setInterval(() => {
            if (this.dotSlider && this.pointer < this.sliderItemsCount) {
                if (this.slideBlocker == false) {
                    this.autoSwitchDot(this.pointer);
                }
            }else{
                this.pointer = 0;
                this.autoSwitchDot(this.pointer);
            }
        }, 5000);
    }
}



jQuery(document).ready(function ($) {
    class PhotoGallery{
        constructor(objId){
          this.objBody = $('#' + objId);
          this.sliderMask = this.objBody.find('.photo__gallery__mask__box');
          this.scrollLine = this.objBody.find('.photo__gallery__mask__scroll__line__box');
          this.quantitySlide = this.objBody.find('.photo__gallery__quantity__box');
          this.addClick();
          this.addClose();
          $(window).on('mousewheel', (event) => {
            this.scrollGallery(event);
          });
          this.windowAddClick();
        }
      
        windowAddClick(){
          this.scrollLine.find('.photo__gallery__main__wrapper__img').on('click', (event) => {
            this.openPhoto($(event.delegateTarget));
          });
        }
      
        addClick(){
          this.objBody.find('.photo__gallery__main__box').find('.photo__gallery__main__wrapper__img').on('click', (event) => {
            this.openWindow(event.delegateTarget);
          });
        }
      
        addClose(){
          this.sliderMask.find('.photo__gallery__closer__wrapper').on('click', () => {
            this.closeMask();
          })
        }
      
        closeMask(){
          this.sliderMask.animate({'left': '-100vw'}, 1000);
          $('BODY').css('overflow-y', 'auto');
          this.block = true;
        }
        
        openWindow(el){
          this.sliderMask.animate({'left': 0}, 1000);
          this.findPhoto(el);
          $('BODY').css('overflow-y', 'hidden');
          this.block = false;
        }
      
        scrollGallery(event){
          if(this.block == false){
            if (event.originalEvent.deltaY > 0) {
              var newPhoto = this.actuall.next();
            }else{
              var newPhoto = this.actuall.prev();
            }
            if(newPhoto.is('.photo__gallery__main__wrapper__img')){
              this.openPhoto(newPhoto);
            }
          }
        }
        
        openPhoto(obj){
          this.pointer = $(obj).attr('img_pointer');
          this.actuall = obj;
          let src = obj.find('img').attr('src');
          $('.photo__gallery__active').removeClass('photo__gallery__active');
          obj.addClass('photo__gallery__active');
          this.sliderMask.find('.photo__gallery__last').find('img').attr('src', src);
          this.scrollThisLine();
          this.setQuant();
        }
        
        
        findPhoto(obj){
          this.pointer = $(obj).attr('img_pointer');
          let actuall = this.scrollLine.find('[img_pointer="' + this.pointer + '"]');
          if(actuall.is('.photo__gallery__main__wrapper__img')){
            this.openPhoto(actuall);
          }
        }
      
        setQuant(){
          this.quantitySlide.find('.photo__gallery__actuall__img').html(this.pointer);
        }
      
        scrollThisLine(){
          let itemPos = this.actuall.position();
          let topPos = itemPos.top;
          let position = (topPos - (($('.photo__gallery__mask__scroll__line__block').outerHeight() / 2) - (this.actuall.outerHeight() / 2)));
        
        if(position > 0){
          position = '-' + position;
        }
        else{
          position = (($('.photo__gallery__mask__scroll__line__block').outerHeight() / 2) - (this.actuall.outerHeight() / 2)) - topPos;
        }
        
        if(topPos <= 0){
          position = ($('.photo__gallery__mask__scroll__line__block').outerHeight() / 2) - (this.actuall.outerHeight());
        }
        
          this.scrollLine.animate({'top':  position}, 100);
      
        }
      }

    dotSlider = new Slider('SliderDot', true);
    photoGallery = new PhotoGallery('gallery1');
});