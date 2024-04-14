<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
         <?php
         $goods_dates = [ '名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

 foreach ($goods_dates as $key => $goods_date) {
  echo "{$key}：{$goods_date}<br>";
 }

         ?>

 </body>
 
 </html>