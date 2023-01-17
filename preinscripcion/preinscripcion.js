/* JS - preinscripcion */


// organizacion juridica
let sOrganizacionJuridica = document.getElementById('organizacionJuridica');    // campo select
let tOrganizacionJuridica = document.getElementById('organizacionJuridica-1');  // campo input de organizacion juridica
//
function hOrganizacionJuridica(){
    console.log(this.value);
    switch (this.value){
        case '10':
            tOrganizacionJuridica.disabled = false;
            tOrganizacionJuridica.focus();
            break;
        default:
            tOrganizacionJuridica.disabled = true;
    }
}
sOrganizacionJuridica.addEventListener("change", hOrganizacionJuridica, false);
//
//