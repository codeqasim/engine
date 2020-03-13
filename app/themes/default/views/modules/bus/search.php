<div class="tab fade">
<div class="row">
    <div class="c12">
        <div class="options">
        <input type="radio" name="trip" checked id="one-way" hidden>
            <label for="one-way">One Way</label>
            <input type="radio" name="trip" id="round-trip" hidden>
            <label for="round-trip"> Round Trip</label>
        </div>
    </div>
</div>
<div class="row no-gutters row-rtl">
    <div class="c3 data-input">
        <div class="input-wrapper">
            <span class="input-label"><i class="mdi mdi-flight-takeoff"></i> From Origin</span>
            <div class="input-items">
                <input type="text" placeholder="Origin" />
            </div>
        </div>
    </div>
    <div class="c3 data-input">
        <div class="input-wrapper">
            <span class="input-label"><i class="mdi mdi-flight-land"></i> To Destination</span>
            <div class="input-items">
                <input type="text" placeholder="Destination" />
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
                            type="date"
                            placeholder=""
                            value="12-01-2020"
                            />
                    </div>
                </div>
                <div class="c6 c-sm-6">
                    <span class="input-label"><i class="mdi mdi-calendar"></i> Return</span>
                    <div class="input-items">
                        <span class="dashed hide show-md">-</span>
                        <input
                            type="date"
                            placeholder=""
                            value="12-01-2020"
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
</div>