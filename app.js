const btnMenu = document.querySelector(".bouton-rond");
const nav = document.querySelector(".nav-gauche");
const allItemNav = document.querySelectorAll(".nav-menu-item");
const ligne = document.querySelector(".cont-ligne");

btnMenu.addEventListener("click", () => {
  ligne.classList.toggle("active");
  nav.classList.toggle("menu-visible");
});

if (window.matchMedia("(max-width : 800px)")) {
  allItemNav.forEach((item) => {
    item.addEventListener("click", () => {
      nav.classList.toggle("menu-visible");
      ligne.classList.toggle("active");
    });
  });
}

//-------------------- Inscription--------------------//
// const inputsValidity = {
//   user: false,
//   email: false,
//   password: false,
//   passwordConfirmation: false,
// };

// const form = document.querySelector("form");
// const container = document.querySelector(".container");

// form.addEventListener("submit", handleForm);

// let isAnimating = false;
// function handleForm(e) {
//   e.preventDefault();

//   const keys = Object.keys(inputsValidity);
//   const failedInputs = keys.filter((key) => !inputsValidity[key]);

//   if (failedInputs.length && !isAnimating) {
//     isAnimating = true;
//     container.classList.add("shake");

//     setTimeout(() => {
//       container.classList.remove("shake");
//       isAnimating = false;
//     }, 400);

//     failedInputs.forEach((input) => {
//       const index = keys.indexOf(input);
//       showValidation({ index: index, validation: false });
//     });
//   } else {
//     alert("Données envoyées avec succès.");
//   }
// }

// function showValidation({ index, validation }) {
//   if (validation) {
//     validationIcons[index].style.display = "inline";
//     validationIcons[index].src = "ressources/check.svg";
//     if (validationTexts[index]) validationTexts[index].style.display = "none";
//   } else {
//     validationIcons[index].style.display = "inline";
//     validationIcons[index].src = "ressources/error.svg";
//     if (validationTexts[index]) validationTexts[index].style.display = "block";
//   }
// }

// const validationIcons = document.querySelectorAll(".icone-verif");
// const validationTexts = document.querySelectorAll(".error-msg");

// const userInput = document.querySelector(".input-group:nth-child(1) input");

// userInput.addEventListener("blur", userValidation);
// userInput.addEventListener("input", userValidation);

// function userValidation() {
//   if (userInput.value.length >= 3) {
//     showValidation({ index: 0, validation: true });
//     inputsValidity.user = true;
//   } else {
//     showValidation({ index: 0, validation: false });
//     inputsValidity.user = false;
//   }
// }

// const mailInput = document.querySelector(".input-group:nth-child(2) input");

// mailInput.addEventListener("blur", mailValidation);
// mailInput.addEventListener("input", mailValidation);

// const regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

// function mailValidation() {
//   if (regexEmail.test(mailInput.value)) {
//     showValidation({ index: 1, validation: true });
//     inputsValidity.email = true;
//   } else {
//     showValidation({ index: 1, validation: false });
//     inputsValidity.email = false;
//   }
// }
