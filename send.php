<?
if((isset($_POST['names'])&&$_POST['names']!="")&&(isset($_POST['phone'])&&$_POST['phone']!=""))&&(isset($_POST['console'])&&$_POST['console']!=""))&&(isset($_POST['days'])&&$_POST['days']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'playbox_by@mail.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Заказ приставки'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['names'].'</p>
                        <p>Телефон: '.$_POST['phone'].'</p>
                        <p>Приставка: '.$_POST['console'].'</p>
                        <p>Срок: '.$_POST['days'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>

<!-- Pl94bxo1620 -->
