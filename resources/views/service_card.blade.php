@extends('layouts.appviidia')

@section('head')
    <title>{{$service['title']}} | ВИИДИА</title>
    <meta name="description" content="{{$service['description']}}">
@endsection

@section('content')
    <section id="content">

        <div class='col-md-11 col-md-offset-1 topmargin chek-serv-card '>

                <p><a href="/">Главная </a><i class="fa fa-chevron-right"></i> <a href="/services">Услуги</a> <i class="fa fa-chevron-right"></i>   <span>{{$service['title']}}</span></p>
                <h1>{{$service['title']}}</h1>

        </div>
        <div class="wrapMaskCard">

        </div>
        <section id="page-title" class="page-title-parallax" style="background-image: url('{{asset('images/parallax/9.jpg')}}'); padding: 40px 0; z-index: 1;" data-stellar-background-ratio="0.3">

            <div class="container clearfix" style="height:340px">

            </div>

        </section><!-- #page-title end -->


        <div class="content-wrap">

            <div class="row topmargin-lg">
                <div class="col-md-11 col-md-offset-1">
                                    <?=$service['big-description']?>

                </div>
            </div>

            @if($service['id']==3)
            <div class='section'>
                <div class="col-md-12 center titl-dow">
                    <h4>Скачайте каталог продукции</h4>
                 </div>
                    <div class="col-md-8 col-md-offset-2">
                        <form id="show_catalog_on_mail">
                           {{csrf_field()}}
                            <input type="hidden" name='catalog' value='1'>
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group materail-input-block materail-input-block_success here-id">
                                    <input type="email" name="email" required class="form-control materail-input email-input" placeholder="E-mail*" style="background-color: transparent;">
                                    <span class="materail-input-block__line"></span>
                                </div>
                            </div>
                            <div class="col-md-6 here-id2">
                                <input type="checkbox" required checked name="apruve" class="form-control materail-input apruve-input" style="width: 31px; float:left">
                                <span>Отправляя форму, вы даете свое согласие на обработку персональных данных</span></div>
                            </div>
                            <br>
                            <div class="col-md-12 center">
                                <input type="submit" class="long-btn-down" value>
                                  <p id='msg-catalog-is'></p>
                            </div>
                          
                        </form>
                    </div>
            </div>
            <div class="container topmargin-lg">
                    <div class="row center services-viidia-card ">
                        <div class="col-md-4">
                            <img src='{{asset('images/services/hang/5.png')}}'/>
                            <h3>Цена под ключ</h3>
                            <p>Ваш личный менеджер представит вам готовое предложение с учетом всех расходов, в том числе по разрешительной документации и таможенным платежам.</p>
                        </div>
                        <div class="col-md-4">
                            <img src='{{asset('images/services/hang/2.png')}}'/>
                            <h3>Мы сделаем дешевле</h3>
                            <p>Мы понимаем, что значит слово «бюджет» для клиента, и поэтому предлагаем самые низкие цены.</p>
                        </div>
                        <div class="col-md-4">
                            <img src='{{asset('images/services/hang/3.png')}}'/>
                            <h3>Доставка в любой
                                регион России</h3>
                            <p>После прохождения таможни контейнер отгружается на платформу или автоприцеп и отправляется в любой регион России.</p>
                        </div>
                    </div>
                    <div class="row center services-viidia-card">
                        <div class="col-md-4">
                            <img src='{{asset('images/services/hang/4.png')}}'/>
                            <h3>Время доставки</h3>
                            <p>Ориентировочный срок <br>
                                35 —45 дней.</p>
                        </div>
                        <div class="col-md-4">
                            <img src='{{asset('images/services/hang/1.png')}}'/>
                            <h3>Неизменность цены</h3>
                            <p>Вы получаете окончательную сумму к оплате, все непредвиденные расходы мы берем на себя.</p>
                        </div>
                    </div>
                </div>
            @endif

            @endsection


            @section('js')
<script>

$('#show_catalog_on_mail').submit(function(e){
    e.preventDefault();
    
   $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
});
 
 
$.ajax({
  url: "/mailsave",
  type: "POST",
  data: {'email':$('#show_catalog_on_mail .email-input').val(), 'apruve':$('#show_catalog_on_mail .apruve-input').val(),'catalog':1},
  success: onAjaxSuccess
});
 
function onAjaxSuccess(data)
{
  $('#msg-catalog-is').html('Каталог успешно отправлен на указанную почту');

}
});
</script>
@endsection
