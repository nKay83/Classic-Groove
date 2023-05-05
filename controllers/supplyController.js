let suggestionsAlbum;
let rawSuggestionsAlbum;
const updateSuggestionsAlbum = async () => {
  rawSuggestionsAlbum = JSON.parse(await getAllAlbum());
  suggestionsAlbum = rawSuggestionsAlbum.map(
    (album) => album.maAlbum + "-" + album.tenAlbum
  );
};
const suggestAlbum = () => {
  const currentValue = event.target.value.toLowerCase();
  if (!currentValue) {
    document.getElementById("suggestion-list").innerHTML = "";
    return;
  }
  const containingStrings = [];
  console.log(suggestionsAlbum);
  for (let i = 0; i < suggestionsAlbum.length; i++) {
    if (suggestionsAlbum[i].toLowerCase().includes(currentValue)) {
      containingStrings.push(suggestionsAlbum[i]);
    }
  }
  displaySuggestionsAlbum(containingStrings);
};
function displaySuggestionsAlbum(suggestions) {
  let suggestionList = document.getElementById("suggestion-list");
  suggestionList.innerHTML = "";
  suggestions.forEach(function (suggestion) {
    suggestionList.innerHTML += `<li onclick="chooseSuggestion(this)">${suggestion}</li>`;
  });
}

const addExistingAlbum = () => {
  let albumString = document.querySelector("#my-input").value;
  if (albumString == "") {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Please enter album ID or album name!"
    );
    return;
  }
  if (!suggestionsAlbum.includes(albumString)) {
    customNotice("fa-sharp fa-light fa-circle-exclamation", "album not found");
    return;
  }
  let albumID = albumString.split("-")[0];
  let inputAlbum = document.querySelectorAll(
    "#new-supply .list .placeholder .info .item:nth-child(2)"
  );
  for (let i = 0; i < inputAlbum.length; i++) {
    if (parseInt(inputAlbum[i].innerHTML) == parseInt(albumID)) {
      customNotice(
        "fa-sharp fa-light fa-circle-exclamation",
        "album already exists"
      );
      return;
    }
  }
  let albumObj = rawSuggestionsAlbum.find((album) => album.maAlbum == albumID);
  let input = document.querySelector(".modal-right .list");
  let newPlaceholder = document.createElement("div");
  newPlaceholder.classList.add("placeholder");
  input.appendChild(newPlaceholder);
  newPlaceholder.innerHTML = `
      <div class="info">
          <div class="item"></div>
          <div class="item">${albumObj.maAlbum}</div>
          <div class="item"><input type="text" oninput="updateTotalCost()"></div>
          <div class="item"><input type="text" oninput="updateTotalCost()"></div>
          <div class="item" onclick="deleteRowAlbum(this)"><i class="fa-solid fa-xmark-large fa-sm" style="color: #f2623e;"></i></div>
      </div>
  `;
  formatNumberOrder();
  closeAddAlbum();
  document.querySelector("#my-input").value = "";
};

const deleteRowAlbum = (input) => {
  input.closest(".placeholder").remove();
  formatNumberOrder();
};
const updateTotalCost = () => {
  let totalCost = 0;
  let input = document.querySelectorAll(
    ".modal-right .list .placeholder .info"
  );
  for (let i = 0; i < input.length; i++) {
    let cost = input[i].querySelector(".item:nth-of-type(3) input").value;
    let quantity = input[i].querySelector(".item:nth-of-type(4) input").value;
    if (cost == "" || quantity == "") continue;
    if (isNaN(cost) || isNaN(quantity)) continue;
    totalCost += parseFloat(cost) * parseInt(quantity);
  }
  document.querySelector("#new-supply .total-cost").value = totalCost;
};
