


function ticketTotalPersonUpdate(totalPerson){
    let ticketTotalPersonElement = document.getElementsByClassName("ticket-total-person");
    for(let n = 0; n<ticketTotalPersonElement.length; n++){
        ticketTotalPersonElement[n].innerText = totalPerson;
    }
}


let addPerson = document.getElementsByClassName("person-add");
let subtractPerson = document.getElementsByClassName("person-subtract");

let adultPersonElement = document.getElementById("adult_person");
let childPersonElement = document.getElementById("child_person");
let infantPersonElement = document.getElementById("infant_person");

let adultPersonNumber = parseInt(adultPersonElement.innerText);
let childPersonNumber = parseInt(childPersonElement.innerText);
let infantPersonNumber = parseInt(infantPersonElement.innerText);


let ticketTotalPerson = 1;

for(let n = 0; n<addPerson.length; n++){
    addPerson[n].addEventListener("click", ()=>{
        let attribute = addPerson[n].getAttribute("for");
        if(attribute=="adult"){
            adultPersonNumber++;
            adultPersonElement.innerText = adultPersonNumber;
            ticketTotalPerson = adultPersonNumber+childPersonNumber+infantPersonNumber;
            ticketTotalPersonUpdate(ticketTotalPerson);
        }
        if(attribute=="child"){
            childPersonNumber++;
            childPersonElement.innerText = childPersonNumber;
            ticketTotalPerson = adultPersonNumber+childPersonNumber+infantPersonNumber;
            ticketTotalPersonUpdate(ticketTotalPerson);
        }
        if(attribute=="infant"){
            infantPersonNumber++;
            infantPersonElement.innerText = infantPersonNumber;
            ticketTotalPerson = adultPersonNumber+childPersonNumber+infantPersonNumber;
            ticketTotalPersonUpdate(ticketTotalPerson);
        }
    })
}

for(let n = 0; n<subtractPerson.length; n++){
    subtractPerson[n].addEventListener("click", ()=>{
        let attribute = addPerson[n].getAttribute("for");
        if(attribute=="adult"){
            if(adultPersonNumber!=0){
                adultPersonNumber--
            }
            adultPersonElement.innerText = adultPersonNumber;
            ticketTotalPerson = adultPersonNumber+childPersonNumber+infantPersonNumber;
            ticketTotalPersonUpdate(ticketTotalPerson);
        }
        if(attribute=="child"){
            if(childPersonNumber!=0){
                childPersonNumber--;
            }
            childPersonElement.innerText = childPersonNumber;
            ticketTotalPerson = adultPersonNumber+childPersonNumber+infantPersonNumber;
            ticketTotalPersonUpdate(ticketTotalPerson);
        }
        if(attribute=="infant"){
            if(infantPersonNumber!=0){
                infantPersonNumber--;
            }
            infantPersonElement.innerText = infantPersonNumber;
            ticketTotalPerson = adultPersonNumber+childPersonNumber+infantPersonNumber;
            ticketTotalPersonUpdate(ticketTotalPerson);
        }
    })
}


let class_selection = document.getElementById("class_selection");
let classDetails = document.getElementsByClassName("class-details");

class_selection.addEventListener("change", (e)=>{
    for(let n = 0; n<classDetails.length; n++){
        classDetails[n].innerText = e.target.value;
    }
})


