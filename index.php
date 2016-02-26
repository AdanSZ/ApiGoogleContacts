<?php
  /*
   * Template Name: Google_contactos
  */
// require_once("../../../wp-load.php");
get_header();

// if ( is_user_logged_in() ){             
//     if (current_user_can('edit_page', get_the_ID())){ 

//         <!-- <h1><php the_title();></h1> -->
        // <!-- <p>Eres admin, no puedes acumular puntos, favor de logeaerte con usuario no admin</p> -->
//     exit();
//     }
// }

// global $wpdb;
// $id_mision = $wpdb->get_results("SELECT id from wp_mision_misiones where extra = 'donar_contactos_hotmail' ");

// $current_user = wp_get_current_user();
// // $all_info = select_info_desde_email($current_user->user_email);
// $all_info = $wpdb->get_results("SELECT * FROM wp_mision_users where wp_user_id =".$current_user->ID);        
// $fb_id = $all_info[0]->fb_id;

// $misiones_realizadas = $all_info[0]->ids_misiones_realizadas;
// $misiones_realizadas .= ",".$id_mision[0]->id;

// echo "</pre>";
// print_r($misiones_realizadas);
// echo "</pre>";
?>

   <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

        <body>            
            <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
            <!--
            <script src="<?=get_template_directory_uri();?>/hotmail/hotmail/js/json2.js"></script>
            <script src="<?=get_template_directory_uri();?>/hotmail/hotmail/js/script.js"></script>-->
            <script>
               
            </script>
            <div id="pupop">
                 <b>Estamos guardando la informacion, espera un momento...</b><br>
                <img src="<?=get_template_directory_uri();?>/imagenes/buffer-loading.gif" alt="Loading">
            </div>               
        </body>
    </html>

<style>
    body{
        background-color: #BDC4C7;
    }

    #pupop{
        font-family: sans-serif;
        padding-top: 78px;
        text-align: center;
        height: 242px;
        width: 500px;
        background-color: white;
        margin:70px auto;
        -webkit-box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.75);
        box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.75);
    }
    #pupop img{
        width: 200px;
        margin-top: 9px;
    }
</style>