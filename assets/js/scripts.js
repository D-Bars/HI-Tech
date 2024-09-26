class Slider {

    pointer = 1;
    autoSlideBlock = false;

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
        this.sliderLine.animate({ 'left': '-' + (positionNum * this.sliderItemWidth) }, 500, () => {
            this.pointer = itemNum;
            this.setActiveDot();
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
        if(dotPointer != 1){
            this.sliderGo(dotPointer - 1, dotPointer);
        }else{
            this.sliderGo(dotPointer - 2, dotPointer);
        }
    }

    autoSwitchDot(dotPointer) {
        if(dotPointer > 1){
            this.sliderGo(dotPointer - 1, dotPointer + 1);
        }else{
            this.sliderGo(dotPointer, dotPointer + 1);
        }
    }

    setActiveDot() {
        var pointer = this.pointer;
        var currentDotObj = this.sliderDots.filter('[data-id="'+ pointer +'"]');
        this.sliderDots.removeClass('active__slider__dot');
        currentDotObj.addClass('active__slider__dot');
    }

    autoScroll() {
        setInterval(() => {
            if (this.dotSlider && this.pointer <= this.sliderItemsCount) {
                if (this.autoSlideBlock == false) {
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