document.addEventListener("DOMContentLoaded", function () {
  const chk_matpri = document.querySelectorAll('input[type="checkbox"].mat_pri');
  const res_matpri = {};

  chk_matpri.forEach((checkbox) => {
    checkbox.addEventListener("click", function () {
        res_matpri[this.name] = this.checked;
        console.log(res_matpri);
    });
  });

  // Función para codificar el objeto en una cadena de consulta
  function encodeQueryString(data) {
    return Object.keys(data)
      .map((key) => encodeURIComponent(key) + "=" + encodeURIComponent(data[key]))
      .join("&");
  }

  // Función para enviar la solicitud GET con los datos
  function enviarDatos() {
    const queryString = encodeQueryString(res_matpri);
    const url = "tu_script.php?" + queryString;

    // Realizar la solicitud GET
    fetch(url)
      .then((response) => response.text())
      .then((data) => console.log(data))
      .catch((error) => console.error("Error:", error));
  }

  // Llamar a la función para enviar los datos cuando sea necesario
  // Por ejemplo, podrías llamar a esta función al hacer clic en un botón
//  enviarDatos();
});
