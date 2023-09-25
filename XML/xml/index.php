<?php
$dom_xml = new DOMDocument();
$dom_xml->loadXML('<car><model>Mercedes Bens</model></car>');


/* ДОБАВЛЕНИЯ */

//записываем название моделей в переменную
$mod=$dom_xml->getElementsByTagName("model");

Foreach ($mod as $element){
    $add = $dom_xml->createElement('year','2001'); //создаем элемент
    $element->appendChild($add); //записываем элемент
}
echo $dom_xml->saveXML();

/* ВЫВОД */

$mod=$dom_xml->getElementsByTagName("model");

Foreach ($mod as $element){
    echo $element->nodeValue." ".$element->nodeName." ".'<br />';
}


/* УДАЛЕНИЕ */

$dom_xml= new DomDocument();
$dom_xml->loadXML('<car><model>volvo</model><model>Lada</model></car>');
//записываем название моделей в переменную
$mod=$dom_xml->getElementsByTagName("model");

Foreach ($mod as $element){
    if ($element->nodeValue == "Lada"){
        $del=$element->firstChild;
        $element->removeChild($del);
    }
}
echo $dom_xml->saveXML();

/* СОЗДАНИЕ XML ФАЙЛА */

$path="D:/auto.xml";
echo $dom_xml->save($path);

/* ДОБАВЛЕНИЯ ДАННЫХ В ФАЙЛ XML */

$dom_xml = new DOMDocument();
$dom_xml->load('D:/auto.xml');

$mod=$dom_xml->getElementsByTagName("car");

Foreach ($mod as $element){
    $add = $dom_xml->createElement('year','2001'); //создаем элемент
    $element->appendChild($add); //записываем элемент
}
echo $dom_xml->save('D:/auto.xml');

?>
