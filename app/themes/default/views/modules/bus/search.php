<div class="tab fade">
<form action="<?php echo base_url(); ?>bus/" method="GET">
<div class="row">
    <div class="c12">
        <div class="options">
            <label class="pure-material-switch">
            <input type="checkbox">
            <span>Direct</span>
            </label>
            <input type="radio" name="trip" checked id="one-way" hidden>
            <label for="one-way" onclick="oneway()">One Way</label>
            <input type="radio" name="trip" id="round-trip" hidden>
            <label for="round-trip" onclick="returns()"> Round Trip</label>
        </div>
    </div>
</div>
<div class="row no-gutters row-rtl">
    <div class="c3 data-input">
        <div class="input-wrapper">
            <span class="input-label"><i class="mdi mdi-flight-takeoff"></i> From Origin</span>
            <div class="input-items">
                <input autocomplete="off" type="text" placeholder="Origin" />
            </div>
        </div>
    </div>
    <div class="c3 data-input">
        <div class="input-wrapper">
            <span class="input-label"><i class="mdi mdi-flight-land"></i> To Destination</span>
            <div class="input-items">
                <input autocomplete="off" type="text" placeholder="Destination" />
            </div>
        </div>
    </div>
    <div class="c4 data-input">
        <div class="input-wrapper">
            <div class="row no-gutters items-center">
                <div class="c6 c-sm-6">
                    <span class="input-label"><i class="mdi mdi-calendar"></i> Departure</span>
                    <div class="input-items">
                        <input
                            class="busdepart"
                            type="text"
                            placeholder=" "
                            value="20/03/2020"
                            />
                    </div>
                </div>
                <div class="c6 c-sm-6">
                    <span class="input-label"><i class="mdi mdi-calendar"></i> Return</span>
                    <div class="input-items">
                        <span class="dashed hide show-md">-</span>
                        <input
                            id="busreturn"
                            class="busreturning"
                            type="text"
                            placeholder=" "
                            value="28/03/2020"
                            />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="c2 data-input flex row-rtl">
        <div class="searchbutton">
            <button type="submit">
            <span class="icon-search"><i class="mdi mdi-search"></i></span>
            </button>
        </div>
    </div>
</div>
</form>
</div>