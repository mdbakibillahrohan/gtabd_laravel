

// here started the code
document.addEventListener("DOMContentLoaded", function (event) {
    console.log(event)
    let tab_buttons = document.getElementsByClassName('tab-btn');
    for (let n = 0; n < tab_buttons.length; n++) {
        tab_buttons[n].addEventListener("click", () => {
            if (tab_buttons[n].getAttribute('for') == "visa") {
                changeTab("visa", "single-tab", true, "tabs-title", `Best Visa Processing Agency in Bangladesh`);
                changeTabBtn(tab_buttons[n], "tab-btn", 'tab-active');
            } if (tab_buttons[n].getAttribute("for") == "flight") {
                changeTab("flight", "single-tab", true, "tabs-title", `Welcome to GTA! Find Flights, Hotels & Tour Packages`);
                changeTabBtn(tab_buttons[n], "tab-btn", 'tab-active');
            } if (tab_buttons[n].getAttribute("for") == "hotel") {
                changeTab("hotel", "single-tab", true, "tabs-title", `Find Best Rated Deals on GTA Hotels`);
                changeTabBtn(tab_buttons[n], "tab-btn", 'tab-active');
            }
        })
    }


    let flight_tab_buttons = document.getElementsByClassName("flight-header-single-tab");
    
    for(let e = 0; e<flight_tab_buttons.length; e++){
        flight_tab_buttons[e].addEventListener("click", ()=>{
            if(flight_tab_buttons[e].getAttribute('for')=="one way"){
                changeTabBtn(flight_tab_buttons[e], "flight-header-single-tab","active")
                changeTab("one_way", "flight-single-tab");
            }
            if(flight_tab_buttons[e].getAttribute('for')=="round trip"){
                changeTabBtn(flight_tab_buttons[e], "flight-header-single-tab","active")
                changeTab("round_trip", "flight-single-tab");
            }
            if(flight_tab_buttons[e].getAttribute('for')=="multi city"){
                changeTabBtn(flight_tab_buttons[e], "flight-header-single-tab", "active")
                changeTab("multi_city", "flight-single-tab");
            }
            
        })
    }

    textLimit("search-limit-details", 25);
    
    
});

