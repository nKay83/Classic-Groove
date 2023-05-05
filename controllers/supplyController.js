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
