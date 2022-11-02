
// here are all the function 


function changeTab(tabName, className, isTitle = false, titleId = "", title = "Welcome to our Website" ) {

    // This block of code hide all the div with name of single tab 
    let content = document.getElementsByClassName(className);
    for (let a = 0; a < content.length; a++) {
        content[a].classList.add("d-none")
    }

    // This block of code show the particular view 
    let tabId = "tab_" + tabName;
    let tab = document.getElementById(tabId);
    tab.classList.remove("d-none");

    // change the title
    if(isTitle==true){
        let htmlTitle = document.getElementById(titleId);
        htmlTitle.innerText = title;
    }
    

}

function changeTabBtn(btn, className, activeClassName) {
    let tab_buttons = document.getElementsByClassName(className);
    for (let n = 0; n < tab_buttons.length; n++) {
        tab_buttons[n].classList.remove(activeClassName);
    }
    btn.classList.add(activeClassName);
}


function textLimit(className, limit){
    let text = document.getElementsByClassName(className);

    for(let n = 0; n<text.length; n++){
        var oldText = text[n].innerText;
        if(oldText.length>limit){
            text[n].innerText = oldText.substring(0,limit) + "...."
        }
        
    }
    
}


