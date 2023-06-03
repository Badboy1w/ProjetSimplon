let table =document.getElementById("table");
let lignes = table.getElementsByTagName('tr');
for (let i = 1; i < lignes.length; i++) {
    if (i % 2 === 0) {
      lignes[i].style.backgroundColor = "#b7a0f0";
    }
  }
let modal = document.getElementById("Modal_")
let closeButton = document.querySelector('button')

function OpenModal() {
    modal.style.display="block"
}
