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
            console.log('after: ' + this.slideBlocker);
            this.pointer = itemNum;
            this.setActiveDot();
            console.log('pointer:' + this.pointer);
            console.log('position:' + positionNum);
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
    dotSlider = new Slider('SliderDot', true);
});