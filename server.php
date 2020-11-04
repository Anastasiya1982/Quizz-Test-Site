<?php
$data=file_get_contents('php://input');
//file_put_contents('1.json',$data);

$json=json_decode($data,true);

if($json['step0']['question'] && $json['step0']['answers']){

}else {
 // возвращаем ошибку
 $response=[
 'status'=>'error',
 'message'=>'Что то ошло не так!'
 ];
}

if($json['step1']['question'] && $json['step1']['answers']){
  //  формируем начальное сообщение добавляем строку

}else{
 // возвращаем ошибку
 $response=[
 'status'=>'error',
 'message'=>'Что то ошло не так!'
 ];
}

if($json['step2']['question'] && $json['step2']['answers']){
  //  формируем начальное сообщение добавляем строку

}else{
 // возвращаем ошибку
 $response=[
 'status'=>'error',
 'message'=>'Что то ошло не так!'
 ];
}
if($json['step3']['question'] && $json['step3']['answers']){
  //  формируем начальное сообщение добавляем строку

}else{
 // возвращаем ошибку
 $response=[
 'status'=>'error',
 'message'=>'Что то ошло не так!'
 ];
}
// перебираем массив на пустой элемент

$data_empty=false;

forEach($json['step4'] as $item  ){
if(!$item) $data_empty=true;
}

if(!$data_empty){
  //  формируем начальное сообщение добавляем строку
 $response=[
 'status'=>'ok',
 'message'=>'Спасибо, скоро мы с вами свяжемся!'
 ];
}else{

  if( !$json['step4']['name']){
  $error_message="Введите имя";
  }else if(!$json['step4']['phone']){
  $error_message="Введите телефон";
  }else if(!$json['step4']['email']){
  $error_message='Введите почту';
  }
  else if(!$json['step4']['call']){
  $error_message="Выберите способ связи";
  } else{
  $error_message='Что-то пошло не так!';
  }

 $response=[
 'status'=>'error',
 'message'=>$error_message
 ];

}

header( 'Content-Type:application/json; charset=UTF-8');
echo json_encode($response);


