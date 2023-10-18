$(document).ready(function() {
    // Obtiene todos los elementos con la clase "option"
    const options = $(".option");
  
    // Obtiene todos los elementos con la clase "content"
    const contents = $(".content");
  
    // Agrega un evento de clic a cada elemento "option"
    options.on("click", function() {
      // Elimina la clase "border-start" de todos los elementos "option"
      options.removeClass("border-start");
  
      // Agrega la clase "border-start" al elemento "option" que fue cliqueado
      $(this).addClass("border-start");
  
      // Oculta todos los elementos "content"
      contents.addClass("d-none");
  
      // Muestra el elemento "content" que corresponde al elemento "option" que fue cliqueado
      $("#content" + $(this).attr("aria-content")).removeClass("d-none");
    });
  
    // Muestra el primer elemento "option" y el primer elemento "content"
    $("#option1").addClass("border-start");
    $("#content1").removeClass("d-none");
  });
  



/* 

$(document).ready(function(){
    $('#option1').click(function(){
       document.getElementById('option1').classList.add('border-start');
       document.getElementById('option2').classList.remove('border-start');
       document.getElementById('option3').classList.remove('border-start');
       document.getElementById('option4').classList.remove('border-start');
       document.getElementById('option5').classList.remove('border-start');
       // 
       document.getElementById('content1').classList.remove('d-none');
       document.getElementById('content2').classList.add('d-none');
       document.getElementById('content3').classList.add('d-none');
       document.getElementById('content4').classList.add('d-none');
       document.getElementById('content5').classList.add('d-none');
    });

    $('#option2').click(function(){
       document.getElementById('option1').classList.remove('border-start');
       document.getElementById('option2').classList.add('border-start');
       document.getElementById('option3').classList.remove('border-start');
       document.getElementById('option4').classList.remove('border-start');
       document.getElementById('option5').classList.remove('border-start');
       //
       document.getElementById('content1').classList.add('d-none');
       document.getElementById('content2').classList.remove('d-none');
       document.getElementById('content3').classList.add('d-none');
       document.getElementById('content4').classList.add('d-none');
       document.getElementById('content5').classList.add('d-none');
    });

    $('#option3').click(function(){
       document.getElementById('option1').classList.remove('border-start');
       document.getElementById('option2').classList.remove('border-start');
       document.getElementById('option3').classList.add('border-start');
       document.getElementById('option4').classList.remove('border-start');
       document.getElementById('option5').classList.remove('border-start');
       //
       document.getElementById('content1').classList.add('d-none');
       document.getElementById('content2').classList.add('d-none');
       document.getElementById('content3').classList.remove('d-none');
       document.getElementById('content4').classList.add('d-none');
       document.getElementById('content5').classList.add('d-none');
    });

    $('#option4').click(function(){
       document.getElementById('option1').classList.remove('border-start');
       document.getElementById('option2').classList.remove('border-start');
       document.getElementById('option3').classList.remove('border-start');
       document.getElementById('option4').classList.add('border-start');
       document.getElementById('option5').classList.remove('border-start');
       //
       document.getElementById('content1').classList.add('d-none');
       document.getElementById('content2').classList.add('d-none');
       document.getElementById('content3').classList.add('d-none');
       document.getElementById('content4').classList.remove('d-none');
       document.getElementById('content5').classList.add('d-none');
    });

    $('#option5').click(function(){
       document.getElementById('option1').classList.remove('border-start');
       document.getElementById('option2').classList.remove('border-start');
       document.getElementById('option3').classList.remove('border-start');
       document.getElementById('option4').classList.remove('border-start');
       document.getElementById('option5').classList.add('border-start');
       //
       document.getElementById('content1').classList.add('d-none');
       document.getElementById('content2').classList.add('d-none');
       document.getElementById('content3').classList.add('d-none');
       document.getElementById('content4').classList.add('d-none');
       document.getElementById('content5').classList.remove('d-none');
    });

    // muestra primer opcion al ingresar a la pagina
    document.getElementById('option1').classList.add('border-start');
    document.getElementById('content1').classList.remove('d-none');
  });


  */