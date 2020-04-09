<div class="tab fade">
<!-- <form action="<?php echo base_url(); ?>flights/" method="GET"> -->
<!-- <form action="#"> -->
<div class="row">
    <div class="c12">
        <div class="options"> 
            <label class="pure-material-switch">
            <input type="checkbox">
            <span>Direct</span>
            </label>
            <input type="radio" name="trip" checked id="one-way" hidden>
            <label for="one-way" onclick="FlighType('oneway')">One Way</label>
            <input type="radio" name="trip" id="round-trip" hidden>
            <label for="round-trip" onclick="FlighType('return')"> Round Trip</label>
        </div>
    </div>
</div>
<div class="row no-gutters row-rtl">
    <div class="c3 data-input">
        <div class="input-wrapper">
            <span class="input-label"><i class="mdi mdi-flight-takeoff"></i> From Origin</span>
            <div class="input-items">
                <input autocomplete="off" type="text" placeholder="Origin" onfocus="this.value=''" name="from" id="autocomplete" class="autocomplete-airport"/>
            </div>
        </div>
    </div>
    <div class="c3 data-input">
        <div class="input-wrapper">
            <span class="input-label"><i class="mdi mdi-flight-land"></i> To Destination</span>
            <div class="input-items">
                <input autocomplete="off" type="text" onfocus="this.value=''" name="to" id="autocomplete2" class="autocomplete-airport" placeholder="Destination" />
            </div>
        </div>
    </div>
    <div class="c3 data-input">
        <div class="input-wrapper">
            <div class="row no-gutters items-center">
                <div class="c6 c-sm-6">
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
                <div class="c6 c-sm-6">
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
            </div>
        </div>
    </div>
    <div class="c3 data-input flex row-rtl">
    <div class="dropshow">

    <div class="input-wrapper travelers drophover">
        <span class="input-label"><i class="mdi mdi-directions-walk"></i> Travelers</span>
        <div class="input-items passenger-info rtl-align-right">
        <input type="" value="1 Traveler, Economy" id="travelers" readonly />
        </div>
    </div>
        </div>
        <div class="passenger-dropdown pb-20">
        <div class="passenger-dropdown-head rtl-align-right">
            <span >Options</span>
        </div>
        <div class="flex room-row flex-content-between row-rtl">
            <div class="passenger-dropdown-left">
                <span>Adult </span>
                <span class="text-muted ml-5"> ( +12 )</span>
            </div>
            <div class="passenger-dropdown-right">
                <button class="decrease" id="decrease">-</button>
                <span id="adult">1</span>
                <button class="increase" id="increase">+</button>
            </div>
        </div>
        <div class="flex room-row flex-content-between items-center row-rtl">
            <div class="passenger-dropdown-left">
                <span>Children</span>
                <span class="text-muted ml-5">( 2y to 11y )</span>
            </div>
             <div class="passenger-dropdown-right">
                <button class="decrease" id="decreasee">-</button>
                <span id="children">1</span>
                <button class="increase" id="increasee">+</button>
            </div>
        </div>
        <div class="class_type">
        <select name="" id="">
            <option>Economy</option>
            <option>Premium</option>
            <option>Business</option>
            <option>First</option>
        </select>
        </div>
        <!-- <button class="add-room mt-20" type="button">Add room +</button> -->
    </div>
        <div class="searchbutton">
            <button type="submit" id="submit">
            <span class="icon-search"><i class="mdi mdi-search"></i></span>
            </button>
        </div>
    </div>
</div>
</form>
</div>