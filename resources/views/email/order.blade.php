<h1>Order from viidia.ru</h1>
<hr>
<b>Имя :</b> {{$request['name']}} <br>
<b>Телефон :</b> {{$request['phone']}} <br>
@if(!empty($request['phone']))
<b>Описание задачи :</b> {{$request['msg']}}
@endif
<hr>
<b>Заявка со страницы:</b> {{$request['pageinfo']}}<br>
<b>Дата заявки:</b> {{date("Y-m-d H:i:s", time())}} (по Московскому времени)