<div class="tab fade">
<!-- <form action="<?php echo base_url(); ?>flights/" method="GET"> -->
<!-- <form action="#"> -->

<div class="row no-gutters row-rtl search_area">
    <div class="options c12 input-wrapper flight_types" style="position:relative;top:0px;color:#000;right:0px">
        <div class="c12">
            <input type="radio" name="trip" checked id="one-way" hidden>
            <label for="one-way" onclick="FlighType('oneway')">
                <div class="resize"><i class="icon mdi mdi-arrow-missed"></i> One Way</div>
            </label>
            <input type="radio" name="trip" id="round-trip" hidden>
            <label for="round-trip" onclick="FlighType('return')">
                <div class="resize"><i class="icon mdi mdi-import-export"></i> Round Trip</div>
            </label>
            <input type="radio" name="trip" id="multi-trip" hidden>
            <label for="multi-trip" onclick="FlighType('multi')">
                <div class="resize"><i class="icon mdi mdi-arrow-split"></i> Multi Trip</div>
            </label>
            <div class="c3 f-right">
                <div class="row">
                    <label for="direct" class="direct f-left btn m">Type</label>
                    <select name="" id="" class="c8 flight_type">
                        <option>Economy</option>
                        <option>Premium</option>
                        <option>Business</option>
                        <option>First</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row"></div>
    <div class="row">
        <div class="c6 data-input">
            <div class="input-wrapper">
                <span class="input-label"><i class="mdi mdi-flight-takeoff"></i> From Origin</span>
                <div class="input-items">
                    <input autocomplete="off" type="text" placeholder="Origin" onfocus="this.value=''" name="from" id="autocomplete" class="autocomplete-airport"/>
                </div>
            </div>
        </div>
        <div class="c6 data-input">
            <div class="input-wrapper">
                <span class="input-label"><i class="mdi mdi-flight-land"></i> To Destination</span>
                <div class="input-items">
                    <input autocomplete="off" type="text" onfocus="this.value=''" name="to" id="autocomplete2" class="autocomplete-airport" placeholder="Destination" />
                </div>
            </div>
        </div>
        <div class="c12 data-input">
            <div class="input-wrapper">
                <div class="row no-gutters items-center">
                    <div class="c3 c-sm-3">
                        <span class="input-label"><i class="mdi mdi-calendar"></i> Departure</span>
                        <div class="input-items">
                            <input
                                id="departure"
                                name="depart"
                                class="depart"
                                type="text"
                                placeholder="19/03/2020"
                                value="19/04/2020"
                                />
                        </div>
                    </div>
                    <div class="c3 c-sm-3">
                        <span class="input-label"><i class="mdi mdi-calendar"></i> Return</span>
                        <div class="input-items">
                            <span class="dashed hide show-md">-</span>
                            <input
                                name="return"
                                class="returning"
                                id="return"
                                type="text"
                                placeholder="20/03/2020"
                                value="20/04/2020"
                                />
                        </div>
                    </div>
                    <div class="c6 row-rtl pt-25">
                        <div class="row">
                            <div class="c4 room-row flex-content-between row-rtl text-center">
                                <div class="passenger-dropdown-left">
                                    <span><i class="mdi mdi-directions-walk"></i> Adults </span>
                                    <span class="text-muted ml-5"> <small>(+12)</small></span>
                                </div>
                                <div class="passenger-dropdown-right">
                                    <button class="decrease" id="decrease">-</button>
                                    <span id="adult">1</span>
                                    <button class="increase" id="increase">+</button>
                                </div>
                            </div>
                            <div class="c4 room-row flex-content-between items-center row-rtl text-center">
                                <div class="passenger-dropdown-left">
                                    <span><i class="mdi mdi-directions-walk"></i> Children</span>
                                    <span class="text-muted ml-5"><small>(+2/+11)</small></span>
                                </div>
                                <div class="passenger-dropdown-right">
                                    <button class="decrease" id="decreasee">-</button>
                                    <span id="children">0</span>
                                    <button class="increase" id="increasee">+</button>
                                </div>
                            </div>
                            <div class="c4 room-row flex-content-between items-center row-rtl text-center">
                                <div class="passenger-dropdown-left">
                                    <span><i class="mdi mdi-directions-walk"></i> Infant</span>
                                    <span class="text-muted ml-5"><small>(+0/+2)</small></span>
                                </div>
                                <div class="passenger-dropdown-right">
                                    <button class="decrease" id="decreasee">-</button>
                                    <span id="intant">0</span>
                                    <button class="increase" id="increasee">+</button>
                                </div>
                            </div>
                            <!--<div class="dropshow">
                                <div class="input-wrapper travelers drophover">
                                                <span class="input-label"><i class="mdi mdi-directions-walk"></i> Travelers</span>
                                                <div class="input-items passenger-info rtl-align-right">
                                                <input type="" value="1 Traveler, Economy" id="travelers" readonly />
                                                </div>
                                </div>
                                                </div>-->
                            <div class="passenger-dropdown pb-20">
                                <div class="passenger-dropdown-head rtl-align-right">
                                    <span >Options</span>
                                </div>
                                <div class="class_type">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search_bottom">
        <div class="c12">
            <button type="submit" id="submit" class="f-right btn prime m"><i class="mdi mdi-search"></i> Search Flights</button>
            <label for="direct" class="direct f-right btn m"><input type="checkbox" id="direct" class="mr-10">Direct Flights</label>
        </div>
    </div>
</div>
</div>