(function($) {
    // Define your plugin function
    $.fn.guestCounter = function(options) {
        // Default options
        let settings = $.extend({           
            maxGuests: options.maxGuests || null,
            totalGuests: 0,
            guestsObj: {},
            onInit: function() {},
            onChange: function() {},
            onIncrement: function() {},
            onDecrement: function() {},
            resetCounter: function() {}            
        }, options);

        // Iterate over each element in the jQuery collection
        return this.each(function() {
            let element = $(this);          
            let counter = element.find(".counter");     
            let clearBtn = element.parent().find(".clear-btn"); 
            // Your plugin logic goes here
           
           
            counter.each(function(){
                let counterEl = $(this);
                let incrementBtn = counterEl.find(".c-plus");
                let decrementBtn = counterEl.find(".c-minus");               
                let input = counterEl.find(".counter-input");
                let countText = counterEl.find(".count-val");
                let maxValueCount = parseInt(input.attr("max")) || null;
                let counterType = input.attr("data-counter-type") || null;
                let valueCount = parseInt(input.val()) || 0;
                
                counterEl.find("[data-total-guests]").parents('.counter').addClass("ignore-total");

                countText.text(valueCount);
                if(counterType){
                    settings.guestsObj = {...settings.guestsObj, [counterType]:valueCount};
                }

              
                if(input.attr("data-total-guests") !== "false" || undefined){
                    settings.totalGuests += valueCount;
                }


                // methods
                incrementBtn.on("click", function(){
                    valueCount++;                   

                    if(maxValueCount && valueCount >= maxValueCount){
                        incrementBtn.addClass("disabled");    
                    }

                    if(input.attr("data-total-guests") !== "false" || undefined){
                        settings.totalGuests++;

                        if(settings.totalGuests >= settings.maxGuests){
                            incrementBtn.addClass("disabled");    
                            counter.not('.ignore-total').find(".c-plus").addClass("disabled");
                        }else{
                            incrementBtn.removeClass("disabled");    
                            counter.not('.ignore-total').find(".c-plus").removeClass("disabled");
                        }

                    }
                    if(counterType){
                        settings.guestsObj = {...settings.guestsObj, [counterType]:valueCount};
                    }
                    decrementBtn.removeClass("disabled");
                    input.val(valueCount);
                    countText.text(valueCount);                    
                    settings.onIncrement.call(valueCount);
                    settings.onChange.call(this, element, settings.totalGuests, settings.guestsObj);
                });

                decrementBtn.on("click", function(){
                    valueCount--;  
               
                    if(valueCount <= 0){   
                        valueCount = 0;
                        decrementBtn.addClass("disabled");                         
                    }

                    if(input.attr("data-total-guests") !== "false" || undefined){
                        settings.totalGuests--;

                         if(settings.totalGuests >= settings.maxGuests){
                            incrementBtn.addClass("disabled");    
                            counter.not('.ignore-total').find(".c-plus").addClass("disabled");
                        }else{
                            incrementBtn.removeClass("disabled");    
                            counter.not('.ignore-total').find(".c-plus").removeClass("disabled");
                        }

                    }

                    if(counterType){                        
                        settings.guestsObj = {...settings.guestsObj, [counterType]:valueCount};
                    }
                    incrementBtn.removeClass("disabled");  
                    input.val(valueCount);
                    countText.text(valueCount); 
                    settings.onDecrement.call(element, valueCount);
                    settings.onChange.call(this, element, settings.totalGuests, settings.guestsObj);
                });
               

                clearBtn.on("click", function(){ 
                    console.log("clearBtn clicked");
                    counter.find(".counter-input").val(0);
                    counter.find(".count-val").text(0);
                    settings.guestsObj = {};
                    counter.find(".c-minus").addClass("disabled"); 
                    counter.find(".c-plus").removeClass("disabled");    
                    valueCount = 0;      
                    settings.totalGuests = 0;      
                    settings.onChange.call(this, element, settings.totalGuests, settings.guestsObj);
                }); 
           })
                    
            settings.onInit.call(this, element,  settings.totalGuests, settings.guestsObj);
        });
    };
}(jQuery));






