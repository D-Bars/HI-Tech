class Slider {

    pointer = 1;

    constructor(sliderId,dotSlider){
        this.slider = jQuery('#' + sliderId);

        this.sliderLine = this.slider.children().first();
        this.sliderNavigation = this.slider.children().last();

        this.sliderItems = this.sliderLine.children();
        this.sliderItemWidth = this.sliderItems.first().outerWidth(true);
        this.sliderItemsCount = this.sliderItems.length;
        this.dotSlider = dotSlider;
        this.setNavigation();
        
    }

    sliderGo(positionNum, itemNum){
        this.sliderLine.animate({'left': '-' + (positionNum * this.sliderItemWidth)}, 500, () => {
            this.pointer = itemNum;
            console.log('itemWidth-' + this.sliderItemWidth);
            console.log(this.pointer);
        });
    }

    setNavigation(){
        if(this.dotSlider){
            var sliderDots = this.sliderNavigation.children();
            sliderDots.click( (event) =>{
                var currentDot = jQuery(event.currentTarget);
                this.setActiveDot(sliderDots, currentDot);
                this.sliderGo(currentDot.data('id') - 1);
            })
        }
    }

    setActiveDot(allDots, currentDot){
        allDots.removeClass('active__slider__dot');
        currentDot.addClass('active__slider__dot');
    }
}

jQuery(document).ready(function($) {
        dotSlider = new Slider('SliderDot', true);
});