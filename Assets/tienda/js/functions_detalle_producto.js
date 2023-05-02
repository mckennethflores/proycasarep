let url = window.location.href;

texto = "https://api.whatsapp.com/send?phone=51"+celular+"&text=Hola%20deseo%20mas%20informaci%C3%B3n:"+ "Pagina: "+ url;

let destino = document.querySelector("#divWhatsapp");
destino.href = texto;