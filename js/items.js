let itemsList = [
    { "name": "Cake0", "image": "./img/cake-1.jpg" },
    { "name": "Cake1", "image": "./img/cake-2.jpg" }
];

function setItemHandler(id) {
    sessionStorage.setItem("selectedItemId", id);
}

function getItemHandler() {
    let itemId = sessionStorage.getItem("selectedItemId");

    if (itemId !== null) {
        itemId = parseInt(itemId);
        return {
            name: itemsList[itemId]?.name || itemsList[0].name,
            image: itemsList[itemId]?.image || itemsList[0].image
        };
    }
    return {
        name: itemsList[0].name,
        image: itemsList[0].image
    };
}

function handleBuyNowAndRedirect(id) {
    setItemHandler(id);
    window.location.href = `buyoption.html?id=${id}`; // Redirect after setting data
}

function displaySelectedCake() {
    let selectedItem = getItemHandler();

    document.getElementById("cakeLabel").textContent = selectedItem.name;
    document.getElementById("cakeImage").src = selectedItem.image;
}

// Run `getItemHandler` on index page load to update UI
window.onload = function () {
    if (document.getElementById("cakeLabel")) {
        let selectedItem = getItemHandler();
        document.getElementById("cakeLabel").textContent = selectedItem.name;
        document.getElementById("cakeImage").src = selectedItem.image;
    }
};
