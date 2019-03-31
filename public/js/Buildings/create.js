$(document).ready(function(){

    $('#nombre').keyup(function(){
      if($(this).val().trim().length > 0){
        $('#title-create').empty();
        $('#title-create').append($(this).val());
      }else{
        $('#title-create').empty();
        $('#title-create').append("Nuevo registro");
      }
    });
    
});
