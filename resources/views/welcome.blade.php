<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Insuarance</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <!-- boostrap css -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
         <!-- font awesome -->
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
        <!-- metirial icons -->
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
        
        

        <style>       
        /* search bar */
        #topbarsearch .input-field .prefix { 
            width:0rem !important;    
            }        
        #topbarsearch nav ul li:hover, nav ul li.active {
                background-color: none !important;
            }
        .input-field .prefix ~ input, .input-field .prefix ~ textarea, .input-field .prefix ~ label, .input-field .prefix ~ .validate ~ label, .input-field .prefix ~ .autocomplete-content{
            margin-left: 1rem !important;
            }
        </style>   
        <style>
            body {
                font-family: 'Nunito';
                
            }
        </style>
    </head>
    <body >

    <div id="app">
        <mainapp></mainapp>
    </div>
    
    
    <script src="{{mix('/js/app.js')}}"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-material-components/0.3.4/vue-material-components.min.js" integrity="sha512-DF/UrMtH39isqomodbs+uxWrpTNpOR21xmw0malqFvd7jA5z4AEah7G4qHDG2yNujrm9qutVGf9fQN7PiGpRNw==" crossorigin="anonymous"></script>        
    <script>
    $(document).ready(function(){

      $('#app .sidenav').sidenav();
      $('#app .materialboxed').materialbox();
      $('#app .parallax').parallax();
      $('#app .tabs').tabs();
      $('#app .datepicker').datepicker({
        disableWeekends: true,
        yearRange: 1
      });
      $('#app .tooltipped').tooltip();
      $('#app .scrollspy').scrollSpy();

    });
  </script>
   
   
       
    </body>
</html>
