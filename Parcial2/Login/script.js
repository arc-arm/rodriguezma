$(document).ready(function()
{
                   $("#validacion").click(function()
                   {
                       var usuario=$('#usuario').val();
                       var pw=$('#pw').val();

                    if( usuario='user' && pw=='2021') 
                    {
                       $('#myModal').modal('show');                                         
                    }
                    else 
                    {
                       $('.modal-body').html("DATOS INCORRECTOS");
                       $('#myModal').modal('show');
                    }
            });
    
        });