<?php
function showTable(){
    require('library/simple_html_dom.php');
    $html = file_get_html('http://www.football.ua/');

    $htmlcontent = $html->find('table[class=tournament-table]',1);
    $rus = array("Арсенал-Киев","Полтава","Гелиос","Оболонь-Бровар","Колос","Ингулец","Десна","Николаев","Балканы","Жемчужина","Авангард","Нафтовик-Укрнафта","Сумы","Горняк-Спорт","Черкасский Днепр","Рух","Кремень","Волынь");
    $ukr = array("Арсенал-Київ", "Полтава","Геліос","Оболонь-Бровар","Колос","Інгулець","Десна","Миколаїв","Балкани","Жемчужина","Авангард","Нафтовик-Укрнафта","Суми","Гірник-Спорт","Черкаський Дніпро","Рух","Кремінь","Волинь");
    $content = str_replace('class="date"','id="date"',$htmlcontent);
    $content = str_replace('th class="games"','th id="games"',$content);
    $content = str_replace('<tr>','<tr class="ars">',$content);
    $content = str_replace('<table','<table cellspacing="0"',$content);
    $content = str_replace($rus,$ukr,$content);
    $content = str_replace('http://s.ill.in.ua/i/football/team/logo_sm/0x20/70.png','/images/logo.png',$content);
    $content = str_replace('<a href="http://football.ua/club/70-arsenal-k.html">Арсенал-Київ</a>','<a href="http://football.ua/club/70-arsenal-k.html" id="myarsenal">Арсенал-Київ</a>',$content);

    return $content;
}


function showTableEng(){
    require('Library/simple_html_dom.php');
    $html = file_get_html('http://www.football.ua/');

    $htmlcontent = $html->find('table[class=tournament-table]',2);
    $rus = array("Арсенал-Киев","Полтава","Гелиос","Оболонь-Бровар","Колос","Ингулец","Десна","Николаев","Балканы","Жемчужина","Авангард","Нафтовик-Укрнафта","Сумы","Горняк-Спорт","Черкасский Днепр","Рух","Кремень","Волынь");
    $ukr = array("Арсенал-Київ", "Полтава","Геліос","Оболонь-Бровар","Колос","Інгулець","Десна","Миколаїв","Балкани","Жемчужина","Авангард","Нафтовик-Укрнафта","Суми","Гірник-Спорт","Черкаський Дніпро","Рух","Кремінь","Волинь");
    $eng = array("Arsenal-Kyiv","Poltava","Gelios","Obolon-Brovar","Kolos","Ingulets","Desna","Mykolayiv","Balkany","Zhemchuzhyna","Avangard","Naftovyk-Ukrnafta","Sumy","Girnyk-Sport","Сherkasʹkyy Dnipro","Rukh","Kremin'","Volyn'");
    $content = str_replace('class="date"','id="date"',$htmlcontent);
    $content = str_replace('th class="games"','th id="games"',$content);
    $content = str_replace('<tr>','<tr class="ars">',$content);
    $content = str_replace('<table','<table cellspacing="0"',$content);
    $content = str_replace($rus,$eng,$content);
    $content = str_replace('http://s.ill.in.ua/i/football/team/logo_sm/0x20/70.png','/images/logo.png',$content);
    $content = str_replace('<a href="http://football.ua/club/70-arsenal-k.html">Арсенал-Київ</a>','<a href="http://football.ua/club/70-arsenal-k.html" id="myarsenal">Арсенал-Київ</a>',$content);

    return $content;
}