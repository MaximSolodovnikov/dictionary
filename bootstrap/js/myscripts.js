$(document).ready(function(){

    $("#dictionaryform").validate({
        
       rules:{ 
        
            english_word:{
                required: true,
            },
            
            translating:{
                required: true,
            },
       },
       
       messages:{
        
            english_word:{
                required: "Заполните поле",
            },
            
            translating:{
                required: "Заполните поле",
            },
        
       }
        
    });


}); //end of ready