//This function takes some parameter and bind the data with the intended HTML element
function deleteDataBind(id, name, url, messageElementId, anchorElementId) {
    let deleteMessageElement = document.getElementById(messageElementId);
    let deletAnchor = document.getElementById(anchorElementId);
    deleteMessageElement.innerHTML = `Do you really want to delete <b>${name}</b>`;
    let path = url + "/" + id;
    deletAnchor.setAttribute("href", path);
}
