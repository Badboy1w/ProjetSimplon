let regle_name =/^[a-zA-Z-\s]+$/;
let regle_mail =/^[\w-\.]+@([\w-]+\.)+[\w-]{2,3}$/;
let regle_tel =/^(05|07|01)\d{8}$/;
let myform = document.getElementById('myform');
myform.addEventListener('submit', function(e){
   let last_name = document.getElementById("last-name");
   let first_name = document.getElementById("first-name");
   let mail = document.getElementById("mail");
   //let genre = document.getElementById("genre");
   let tel = document.getElementById("tel");
   if (first_name.value.trim() =="") {
        let span_last = document.getElementById("span-first-name");
        span_last.innerHTML = "Champ nom est vide...";
        span_last.style.color="red";
        first_name.style.border="1px solid red";
        e.preventDefault();
   }else if(regle_name.test(first_name.value)==false){
        let span_last = document.getElementById("span-first-name");
        span_last.innerHTML = "Veuillez entrer un nom correct...";
        span_last.style.color="red";
        first_name.style.border="1px solid red";
        e.preventDefault();
   }else{
        let span_last = document.getElementById("span-first-name");
            span_last.innerHTML = ""
            first_name.style.border="1px solid #15f64f";
   }
   if (last_name.value.trim() =="") {
        let span_last = document.getElementById("span-last-name");
        span_last.innerHTML = "Champ Prenom est vide...";
        span_last.style.color="red";
        last_name.style.border="1px solid red";
        e.preventDefault();
   }else if(regle_name.test(last_name.value)==false){
        let span_last = document.getElementById("span-last-name");
        span_last.innerHTML = "Veuillez entrer un Prenom correct...";
        span_last.style.color="red";
        last_name.style.border="1px solid red";
        e.preventDefault();
   }else{
        let span_last = document.getElementById("span-last-name");
        span_last.innerHTML = ""
        last_name.style.border="1px solid #15f64f";
   }
   if (mail.value.trim() =="") {
        let span_mail = document.getElementById("span-mail");
        span_mail.innerHTML = "Champ email est vide...";
        span_mail.style.color="red";
        mail.style.border="1px solid red";
        e.preventDefault();
   }else if(regle_mail.test(mail.value)==false){
        let span_mail = document.getElementById("span-mail");
        span_mail.innerHTML = "Veuillez entrer un mail correct...";
        span_mail.style.color="red";
        mail.style.border="1px solid red";
        e.preventDefault();
   }else{
        let span_mail = document.getElementById("span-mail");
        span_mail.innerHTML = ""
        mail.style.border="1px solid #15f64f";
   }
   /*if (genre.value.trim()=="Aucun") {
        let span_genre = document.getElementById("span-select");
            span_genre.innerHTML = "Veuillez entrer un genre correct...";
            span_genre.style.color="red";
            genre.style.border="1px solid red";
            e.preventDefault();
    }else{
        let span_genre = document.getElementById("span-select");
        span_genre.innerHTML = ""
        genre.style.border="1px solid #15f64f";
    }
    */
    if (tel.value.trim()=="") {
        let span_tel = document.getElementById("span-tel");
        span_tel.innerHTML = "Champ Numero telephone Vide...";
        span_tel.style.color="red";
        tel.style.border="1px solid red";
        e.preventDefault();
   }else if(regle_tel.test(tel.value)==false){
        let span_tel = document.getElementById("span-tel");
        span_tel.innerHTML = "Veuillez entrer un Numero correct...";
        span_tel.style.color="red";
        tel.style.border="1px solid red";
        e.preventDefault();
   }else{
        let span_tel = document.getElementById("span-tel");
        span_tel.innerHTML = ""
        tel.style.border="1px solid #15f64f";
        tel.innerHTML="";
   }
})