let itemsList = [
    { "name": "Cake0", "image": "./img/flavours/CHOCO.jpg" },
    { "name": "ButterScotch Cake", "image": "./img/flavours/butterscotch.jpg" },
    { "name": "Chocolate Cake", "image": "/img/flavours/CHOCO.jpg" },
    { "name": "Truffle Chocolate Cake", "image": "./img/flavours/Depadya Cake.svg" },
    { "name": "Honey Almond Cake", "image": "./img/flavours/HONEY.jpg" },
    { "name": "Strawberry Cake", "image": "./img/flavours/straw.jpg" },
    { "name": "Rasmalai Cake", "image": "./img/flavours/rasamalai.jpg" },
    { "name": "White Chocolate Cake", "image": "./img/flavours/whitechoc.jpg" },
    { "name": "Lotusbiscoff Cake", "image": "./img/flavours/lotus.jpg" },
    { "name": "Kit-Kat", "image": "./img/flavours/kitcat.jpg" },
    { "name": "Unicorn", "image": "./img/flavours/Unicon.jpg" },
    { "name": "Boss Baby", "image": "./img/flavours/BossBaby.jpg" },
    { "name": "Jungle Cake", "image": "./img/flavours/Jungle.jpg" },
    { "name": "Cars", "image": "./img/flavours/cars.jpg" },
    { "name": "Mickey Mouse", "image": "./img/flavours/Mickey.jpg" },
    { "name": "Shinchan", "image": "./img/flavours/Shinchan.jpg" },
    { "name": "Cocomelon", "image": "./img/flavours/Cocomelon.jpg" },
    { "name": "Baribe", "image": "./img/flavours/Barbie.jpg" },
    { "name": "Little Princess", "image": "./img/flavours/Little.jpg" },
    { "name": "Pokémon", "image": "./img/flavours/pokemon.jpg" },
    { "name": "Cricket", "image": "./img/flavours/Cricket.jpg" },
    { "name": "Chota Bheem", "image": "./img/flavours/chotabhem.jpg" },
    { "name": "Spiderman", "image": "./img/flavours/spider.jpg" },
    { "name": "Disney Frozen", "image": "./img/flavours/Frozen.jpg" },
    { "name": "Mixed Fruit Cake", "image": "./img/flavours/MixedFru.jpg" },
    { "name": "BTS", "image": "./img/flavours/BTS.jpg" },
    { "name": "Emoji", "image": "./img/flavours/Emoji.jpg" },
    { "name": "Doremon", "image": "./img/flavours/Doremon.jpg" },
    { "name": "Engagement Rings", "image": "./img/flavours/rings.jpg" },
    { "name": "Couple Cake", "image": "./img/flavours/Marriage.jpg" },
    { "name": "Peppa Pig Cake", "image": "./img/flavours/Peppa pig.jpg" },
    { "name": "Astronut", "image": "./img/flavours/Astronut.jpg" },
    { "name": "Super Mario", "image": "./img/flavours/mario.jpg" },
    { "name": "Pokémon Cake", "image": "./img/flavours/pokemon.jpg" },
    { "name": "Teddy Bear", "image": "./img/flavours/Teddy.jpg" },
    { "name": "Winnie the Pooh Cake", "image": "./img/flavours/Winnie.jpg" },
    { "name": "Avengers", "image": "./img/flavours/Avengers.jpg" },
    { "name": "Baby Shark Cake", "image": "./img/flavours/babyshark.jpg" },
    { "name": "Panda Cake", "image": "./img/flavours/Panda.jpg" },
    
    


];

function handleBuyNowAndRedirect(id) {
    window.location.href = `buyoption.html?id=${id}`; // Redirect with cake ID
}

function getItemHandler() {
    const urlParams = new URLSearchParams(window.location.search);
    let itemId = urlParams.get("id"); // Get the cake ID from URL

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

function displaySelectedCake() {
    let selectedItem = getItemHandler();
    document.getElementById("cakeLabel").textContent = selectedItem.name;
    document.getElementById("cakeImage").src = selectedItem.image;
}

function displayCakeList() {
    let cakeListDiv = document.getElementById("cakeList");
    itemsList.forEach((item, index) => {
        let cakeDiv = document.createElement("div");
        cakeDiv.innerHTML = `
            <p>${item.name}</p>
            <img src="${item.image}" alt="${item.name}" width="100">
            <button onclick="handleBuyNowAndRedirect(${index})">Buy Now</button>
        `;
        cakeListDiv.appendChild(cakeDiv);
    });
}

window.onload = function () {
    displaySelectedCake();
    displayCakeList();
};