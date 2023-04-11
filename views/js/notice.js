const customNotice = async (icon,content) => {
  //random number
  let randomNumber = Math.floor(Math.random() * 1000);
  let alert = htmlToElement(
    `<div class="container"><span class="slide"></span><p class="cart-removing"><i class="${icon}"></i> ${content} </p></div>`
  );
  const notice = document.querySelector("#notice");
  notice.appendChild(alert);
  notice.querySelector(".slide").classList.add("slide");
  await sleep(3000);
  notice.querySelector(".slide").style.width = "0";
  alert.classList.add("fade");
  await sleep(800);
  notice.removeChild(alert);
};

const htmlToElement = (html) => {
  var template = document.createElement("template");
  html = html.trim(); // Never return a text node of whitespace as the result
  template.innerHTML = html;
  return template.content.firstChild;
};

function sleep(ms) {
  return new Promise((resolve) => setTimeout(resolve, ms));
}
