<?php
$name = $_GET["name"];
$id = $_GET["id"];
$price = $_GET["price"];
$num = $_GET["num"];

$text = 'السلام عليكم ورحمة الله 
هلا والله  '.$name.' 🤍✨  
شكرا  😍✨  

نظراً لما يترتب علينا من خسائر تكاليف الشحن للطلبات الغير جادة فاننا نتواصل معك لتاكيد الطلب رقم ('.$id.') بمبلغ ('.$price.') ريال 

وبتاكيد الطلب فانك تتعهد وتقر في حال عدم استلام الطلب بدفع قيمة الشحن سوف تكون مسؤولاً عنها امام الله ❤️✨ 

لتاكيد الطلب يرجى ارسال كلمة "تاكيد" او لالغاء الطلب ارسل "الغاء"';
$text = urlencode($text);
#echo '<META http-equiv="refresh" content="0;URL=https://wa.me/'.$num.'/?text=%D8%A7%D9%84%D8%B3%D9%84%D8%A7%D9%85+%D8%B9%D9%84%D9%8A%D9%83%D9%85+%D9%88%D8%B1%D8%AD%D9%85%D8%A9+%D8%A7%D9%84%D9%84%D9%87%0D%D9%87%D9%84%D8%A7+%D9%88%D8%A7%D9%84%D9%84%D9%87++'.urlencode($name).'+%F0%9F%A4%8D%E2%9C%A8+%0D%D8%B4%D9%83%D8%B1%D8%A7+%D9%84%D8%A7%D8%AE%D8%AA%D9%8A%D8%A7%D8%B1%D9%83+%D9%85%D8%AA%D8%AC%D8%B1+%D8%A8%D9%8A+%D8%B3%D8%AA%D9%88%D8%B1+%F0%9F%98%8D%E2%9C%A8%0D%0D%D9%86%D8%B8%D8%B1%D8%A7%D9%8B+%D9%84%D9%85%D8%A7+%D9%8A%D8%AA%D8%B1%D8%AA%D8%A8+%D8%B9%D9%84%D9%8A%D9%86%D8%A7+%D9%85%D9%86+%D8%AE%D8%B3%D8%A7%D8%A6%D8%B1+%D8%AA%D9%83%D8%A7%D9%84%D9%8A%D9%81+%D8%A7%D9%84%D8%B4%D8%AD%D9%86+%D9%84%D9%84%D8%B7%D9%84%D8%A8%D8%A7%D8%AA+%D8%A7%D9%84%D8%BA%D9%8A%D8%B1+%D8%AC%D8%A7%D8%AF%D8%A9+%D9%81%D8%A7%D9%86%D9%86%D8%A7+%D9%86%D8%AA%D9%88%D8%A7%D8%B5%D9%84+%D9%85%D8%B9%D9%83+%D9%84%D8%AA%D8%A7%D9%83%D9%8A%D8%AF+%D8%A7%D9%84%D8%B7%D9%84%D8%A8+%D8%B1%D9%82%D9%85+%28'.$id.'%29+%D8%A8%D9%85%D8%A8%D9%84%D8%BA+%28'.$price.'%29+%D8%B1%D9%8A%D8%A7%D9%84+%0D%0D%D9%88%D8%A8%D8%AA%D8%A7%D9%83%D9%8A%D8%AF+%D8%A7%D9%84%D8%B7%D9%84%D8%A8+%D9%81%D8%A7%D9%86%D9%83+%D8%AA%D8%AA%D8%B9%D9%87%D8%AF+%D9%88%D8%AA%D9%82%D8%B1+%D9%81%D9%8A+%D8%AD%D8%A7%D9%84+%D8%B9%D8%AF%D9%85+%D8%A7%D8%B3%D8%AA%D9%84%D8%A7%D9%85+%D8%A7%D9%84%D8%B7%D9%84%D8%A8+%D8%A8%D8%AF%D9%81%D8%B9+%D9%82%D9%8A%D9%85%D8%A9+%D8%A7%D9%84%D8%B4%D8%AD%D9%86+%D8%B3%D9%88%D9%81+%D8%AA%D9%83%D9%88%D9%86+%D9%85%D8%B3%D8%A4%D9%88%D9%84%D8%A7%D9%8B+%D8%B9%D9%86%D9%87%D8%A7+%D8%A7%D9%85%D8%A7%D9%85+%D8%A7%D9%84%D9%84%D9%87+%E2%9D%A4%EF%B8%8F%E2%9C%A8%0D%0D%D9%84%D8%AA%D8%A7%D9%83%D9%8A%D8%AF+%D8%A7%D9%84%D8%B7%D9%84%D8%A8+%D9%8A%D8%B1%D8%AC%D9%89+%D8%A7%D8%B1%D8%B3%D8%A7%D9%84+%D9%83%D9%84%D9%85%D8%A9+%22%D8%AA%D8%A7%D9%83%D9%8A%D8%AF%22+%D8%A7%D9%88+%D9%84%D8%A7%D9%84%D8%BA%D8%A7%D8%A1+%D8%A7%D9%84%D8%B7%D9%84%D8%A8+%D8%A7%D8%B1%D8%B3%D9%84+%22%D8%A7%D9%84%D8%BA%D8%A7%D8%A1%22">';
echo '<META http-equiv="refresh" content="0;URL=https://wa.me/'.$num.'/?text='.$text.'">';

?>