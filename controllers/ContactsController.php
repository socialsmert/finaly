<?php
function indexAction($smarty){


   
        $smarty->assign('pageTitle', 'КОНТАКТИ');
        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'contacts');
   
 
}
