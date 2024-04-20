<div class="booking-form">
    <form action="">
        <div class="row ff-row g-0">
            <div class="col-12 col-xl">
                <div class="dropdown dropdown-select">
                    <input type="text" name="destination" class="d-none select-input">
                    <button class="btn destination-btn btn-control" type="button"  data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,5"  data-bs-display="static">
                        <span class="data-text">Destination</span>
                        <i class="icon-location"></i>
                    </button>                               
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0)" data-value="Mussoorie">Mussoorie</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0)" data-value="Nainital Hills">Nainital Hills</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0)" data-value="Kasauli Hills">Kasauli Hills</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0)" data-value="Goa">Goa</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0)" data-value="Tarudhan Valley">Tarudhan Valley</a></li>
                    </ul>                                
                </div>
            </div>

            <div class="col-12 col-xl-auto calendar-column dropdown">
                <div class="row g-0">
                    <div class="col-6 col-xl">   
                        <button class="btn btn-start-date btn-control toggle-date" type="button">
                            <span>Arrival</span>
                            <i class="icon-calendar-start"></i>
                        </button> 
                    </div>

                    <div class="col-6 col-xl">
                        <button class="btn btn-end-date btn-control toggle-date" type="button">
                            <span>Departure</span>
                            <i class="icon-calendar-end"></i>
                        </button>
                    </div>
                </div>
                <button class="w-100 d-none calendar-btn" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,5" data-bs-auto-close="outside" data-bs-reference="parent" type="button"></button>
                <div class="dropdown-menu p-0">
                    <input id="input-calendar" type="text" class="d-none">
                </div>
            </div>

            <div class="col-12 col-xl">
                <div class="dropdown dropdown-guests">
                    <button class="btn guests-btn btn-control" type="button"  data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,5"  data-bs-auto-close="outside"  data-bs-display="static" type="button">
                        <span>Guests</span>
                        <i class="icon-guests"></i>
                    </button>    
                    
                    <div class="dropdown-menu dropdown-menu-end">
                        <ul class="list-unstyled m-0 guestCounter">
                            <li>
                                <div class="row flex-nowrap align-items-center">
                                    <div class="col">
                                        <div class="guests-title">
                                            <strong>Adults</strong>
                                            <small>Ages 18+</small>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="counter">
                                            <a href="javascript:void(0)" class="btn counter-col c-minus">
                                                <span class="icon-minus"></span>
                                            </a>
                                            <div class="counter-col">
                                                <input type="hidden" class="counter-input" name="no_of_adults" data-counter-type="adults" max="8" value="3">
                                                <strong class="count-val">0</strong>
                                            </div>
                                            <a href="javascript:void(0)" class="btn counter-col c-plus">
                                                <span class="icon-plus"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row flex-nowrap align-items-center">
                                    <div class="col">
                                        <div class="guests-title">
                                        <strong>Children</strong>
                                        <small>Ages 6 -17</small>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="counter">
                                            <a href="javascript:void(0)" class="btn counter-col c-minus">
                                                <span class="icon-minus"></span>
                                            </a>
                                            <div class="counter-col">
                                                <input type="hidden" class="counter-input" name="no_of_kids" data-counter-type="children" max="3" value="2">
                                                <strong class="count-val">0</strong>
                                            </div>
                                            <a href="javascript:void(0)" class="btn counter-col c-plus">
                                                <span class="icon-plus"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row flex-nowrap align-items-center">
                                    <div class="col">
                                        <div class="guests-title">
                                            <strong>Infants</strong>
                                            <small>Under 5</small>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="counter">
                                            <a href="javascript:void(0)" class="btn counter-col c-minus">
                                                <span class="icon-minus"></span>
                                            </a>
                                            <div class="counter-col">
                                                <input type="hidden" class="infants-count counter-input" name="no_of_infants" max="2" value="2" data-total-guests="false">
                                                <strong class="count-val">0</strong>
                                            </div>
                                            <a href="javascript:void(0)" class="btn counter-col c-plus">
                                                <span class="icon-plus"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="dropdown-action">
                            <a href="javascript:void(0)" class="clear-btn">Clear guests</a>
                            <!-- <a href="javascript:void(0)" class="close-dropdown"><i class="bi bi-x-lg"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-auto d-none d-xl-block">
                <div class="submit-wrap">
                    <button class="btn p-xl-0 btn-secondary">
                        <i class="icon-search"></i>
                    </button>                
                </div>
            </div>
            <div class="col-12 col-xl-auto d-none d-xl-block">
                <div class="btn-call-wrap">
                    <a class="btn border-0 btn-control" href="tel:+91 98100 74777"><i class="icon-phone-call"></i> +91 98100 74777</a>  
                </div>
            </div>
        </div>


        <div class="submit-wrap submit-wrap-mob pe-0 d-xl-none">
            <button class="btn py-3 btn-secondary">
                <i class="icon-search"></i> SEARCH
            </button>                
        </div>
    </form>
</div>

<script>
     document.addEventListener("DOMContentLoaded", function () {
         // Booking form scripts
         // destination button
        $(".dropdown-select .dropdown-item").on("click", function(){
            let el = $(this).parents(".dropdown").find(".btn");    
            let dataText = $(this).data("value");   
            if(el.find(".data-text").length){
                el.find(".data-text").text(dataText);               
            }else{
                el.text(dataText); 
            }
            $(this).parents(".dropdown").find(".select-input").val(dataText);
        });

        function resetDateInput(){
            $(".btn-start-date span").text("Arrival Date");
            $(".btn-end-date span").text("Departure Date");
        }

        let destinationBtn = new bootstrap.Dropdown(".destination-btn");
        let calendarBtn = new bootstrap.Dropdown(".calendar-btn");
        let guestsBtn = new bootstrap.Dropdown(".guests-btn");
        

        let inputCalendar = document.getElementById('input-calendar');
        window.datepicker = new HotelDatepicker(inputCalendar, {
            inline: true,
            moveBothMonths: true,
            clearButton: true,
            // minNights: 4,
            topbarPosition: 'bottom',
            onSelectRange: function() {
                let startDate = fecha.format(this.start, `Do MMM`);
                let endDate = fecha.format(this.end, `Do MMM`);
                $(".btn-start-date span").text(startDate);
                $(".btn-end-date span").text(endDate);   
                calendarBtn.toggle();             
            } ,
            onDayClick: function() {                
                if(this.start){
                    $(".btn-end-date span").text("Departure");
                    let startDate = fecha.format(this.start, `Do MMM`);
                    $(".btn-start-date span").text(startDate);
                }
                if(this.end){
                    let endDate = fecha.format(this.end, `Do MMM`);
                    $(".btn-end-date span").text(endDate); 
                }

                if(!this.start && !this.end){
                    resetDateInput()
                }


            }         
        });

        //console.log("datepicker", datepicker)

        $("#clear-input-calendar").on("click",function(){
            $(".btn-start-date span").text("Arrival");
            $(".btn-end-date span").text("Departure");
        });


        $(".toggle-date").on("click", function(e){
            e.stopPropagation();    
            destinationBtn.hide();    
            guestsBtn.hide();    
            calendarBtn.toggle();
        })




        
        // Counter
        $('.guestCounter').guestCounter({
            maxGuests: 8,
            onInit: function(element, totalGuests) {
                console.log("onInit totalGuests", totalGuests);
            element.parents('.dropdown-guests').find(".guests-btn span").text(totalGuests === 0 ? "Guests" : totalGuests === 1 ? `${totalGuests} Guest`:`${totalGuests} Guests`);
            },
            onChange: function(element,totalGuests,guestsObj) {         
            element.parents('.dropdown-guests').find(".guests-btn span").text(totalGuests === 0 ? "Guests" : totalGuests === 1 ? `${totalGuests} Guest`:`${totalGuests} Guests`);
            },
            onIncrement: function(v){
            // console.log("onIncrement ", v);
            }
        });







    });
</script>