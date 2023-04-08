<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>{{ $site_info->title ?? env('APP_NAME') }} </title>
    <base />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{ $site_info->logo }}" rel="icon" />
    {{-- <link rel="stylesheet" href="{{ asset('/css/style.css') }}"> --}}
    <style>
@import url('https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap');

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    font-family: 'Hind Siliguri', sans-serif;
}
a{
    text-decoration: none;
}
/* Common, Custom and reuseable css  */
    .title1{
        background: blue;
        margin-top: 73px;
        height: 53px;
        text-align: center;
        font-size: 32px;
        font-weight: bolder;
        color: white;
        border-radius: 8px;
    }
    .w90{
        width: 90%;
    }
    .mx-auto {
        margin-right: auto!important;
        margin-left: auto!important;
    }
    .flex{
        display: flex;
    }
    .bg-color{
        background-color: #f4e386bd !important;
    }
    .white{
        color: white !important;
    }
    .bg-s{
        background-color: #0f8f0f2b;
    }
    .border-ra{
        border-radius: 10px;
    }
    .text-yellow{
        color: yellow;
    }
    .box-shadow{
        box-shadow: 0px 6px 10px 0px rgb(0 0 0 / 50%) !important;
    }
    .border{
        border-style: solid !important;
        border-width: 2px 2px 2px 2px !important;
        border-color: #05A400 !important;
    }
/* EndCommon, Custom and reuseable css  */
.flex-column{
    display: flex;
    flex-wrap: wrap;
    flex-direction: row !important;
}
.container{
    max-width: 1080px;
    padding: 0 30px;
    margin: 0 auto;
}
.btn-column {
    text-align: center ;
    margin-top: 45px;
}
.btn-column a{
    font-family: "Hind Siliguri", Sans-serif;
    font-size: 18px;
    font-weight: bold;
    border-radius: 50px 50px 50px 50px;
    box-shadow: 0px 5px 15px -5px #000000;
    padding: 10px 70px 10px 70px;
    color: #fff;
    background: #076c07;
}

.btn-column:hover{
    animation-name:animation-pulse;
animation-duration: 1s;
animation-timing-function: linear;
animation-iteration-count: infinite;
}

@keyframes animation-pulse {
    25% {
        transform: scale(1.1);
      }
    75% {
        transform: scale(0.9);
      }
  }
                                        /*=======Header section start=========*/
.header-section{
    padding:10px 0;
    background: white;
}
.header-main-column{
    padding: 14px 0px 14px 0px;
    background-color: #167ac6;
    border-style: solid;
    border-color: #FF0000;
    border-radius: 10px;
    color: white;
}
.header-section .header-main-column .header-title{
    color: #068D0E;
    font-family: "Hind Siliguri", Sans-serif;
    font-size: 47px;
    font-weight: 600;
    text-align: center;
    color: white;
    line-height: 57px;
}
.header-section .extra-title{
    color: #090909;
    font-family: "Hind Siliguri", Sans-serif;
    font-size: 19px;
    font-weight: 600;
    line-height: 30px;
    max-width: 1000px;
    margin: 0 auto;
    margin-top: 15px;
    text-align: center;
    text-decoration: underline;
}
.hlight{
    color: #8affb3;
}
.div-btn {
    background: blue;
    margin-top: 73px;
    height: 53px;
    text-align: center;
    font-size: 32px;
    font-weight: bolder;
    color: white;
    border-radius: 34px;
}
.text-red{
    color: #f00;
}
                                        /*=======Header section end=========*/

                                        /*=======video-section start=========*/

.video-section{

}
.video-section .video-main-column{
    padding: 20px 20px;
    background-color: white;
    box-shadow: 0px 6px 10px 0px rgba(0,0,0,0.5);
    border-style: solid;
    border-width: 2px 2px 2px 2px;
    border-color: #05A400;
    border-radius: 25px;
}
.video-section .video-title{
    text-align: center;
    font-family: "Hind Siliguri", Sans-serif;
    font-size: 26px;
    font-weight: 600;
    margin-bottom: 10px;
}
.video-section .video-title span{
    color: #10F418;
}
.video-section .video-column .video{
	border-radius:15px;
}
.video-section .video-column iframe{
    width: 100%;
    height: 400px;
}

                                        /*=======video section end=========*/

                                        /*=======service section end=========*/
.service-section{
    padding: 30px 0;
    padding-bottom: 60px;
    position: relative;
}
.service-section::after{
    content: "";
    position: absolute;
    background-image: url("../img/Wave.svg");
    width: calc(100%);
    height: 222px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    top: -30px;
    left: auto;
    z-index: -11;
}
.service-section .service-main-column{
    padding: 5px 25px 40px 25px;
    margin-top: 50px;
}
.service-section .service-main-column .service-title{
    padding: 7px 0px 7px 0px;
    background-color: #E8FFE9;
    border-style: solid;
    border-color: #0D7E73;
    text-align: center;
    margin-top: 50px;
}
.service-section .service-main-column .service-title h2{
    color: #068D0E;
    font-family: "Hind Siliguri", Sans-serif;
    font-size: 20px;
    font-weight: 700;
}
.service-section .flex-column{
    row-gap: 20px;
    column-gap: 4%;
    margin-top: 30px;
}
.service-section .service-single-column{
    border-style: solid;
    border-width: 2px 2px 2px 2px;
    border-color: #05A400;
    border-radius: 30px 30px 30px 30px;
    box-shadow: 0px 6px 10px 0px rgba(0,0,0,0.5);
    width: 45%;
    background: #fff;
    padding: 30px;
    box-sizing: border-box;
    transition: 0.4s;
}
.service-section .service-single-column:hover{
    background: #10F418;
    color: red !important;
}
.service-section .service-single-column .content{
    text-align: center;
}
.service-section .service-single-column .content h2{
    font-size: 20px;
    line-height: 24px;
    margin-bottom: 10px;
    color: #068D0E;
    text-align: justify;
}
.service-section .service-single-column .content p{
    font-size: 16px;
    letter-spacing: 0.7px;
    line-height: 22px;
}
.service-section .service-single-column .fa-sharp{
    font-size: 39px;
    color: #068D0E;
    padding-bottom: 15px;
}
.service-section .service-single-column .service-img img{
    width: 100%;
}
                                      /*=======service section end=========*/

                                      /*=======delevery section start=========*/
.delevery-charg-section .container{
    background: #416D4A;
    padding: 30px 0px;
    border-radius: 10px;
}
.delevery-charg-section .title{
    color: #FFFFFF;
    font-size: 50px;
    font-weight: 500;
    max-width: 280px;
    margin: 0 auto;
    position: relative;
    margin-bottom: 20px;
}
.delevery-charg-section .title::after{
    content: "";
    position: absolute;
    background-color: #fff;
    width: 260px;
    height: 1px;
    left: 50%;
    bottom: 10px;
    transform: translateX(-50%);
}
.delevery-charg-section .left-col{
    width: 50%;
}
.delevery-charg-section .left-col h2{
    color: #fff;
    font-family: sans-serif;
    font-size:40px;
    line-height: 1.2;
    font-weight: 500;
    text-align: center;
}
.delevery-charg-section .left-col h2 span{
    color:#10F418;
}
                                      /*=======delevery section end=========*/

                                    /*=======why-choose-section start=========*/
.why-choose-section{
    padding-bottom: 30px;
}
 .why-choose-section .main{
    background: #416D4A;
    padding: 30px 0;
    border-radius: 10px;
    margin-top: 50px;
}

.why-choose-section .flex-column{
    padding: 0px 20px;
}
.why-choose-section .title{
    color: #FFFFFF;
    font-size: 28px;
    font-weight: 500;
    text-align: center;
    margin-bottom: 20px;
    line-height: 45px;
}
.why-choose-section .left-col{
    width: 50%;
}
.why-choose-section .left-col h2{
    color: #fff;
    font-size:16px;
    line-height: 1.7;
    font-weight: 500;
    max-width: 550px;
    font-family: sans-serif;
}
.why-choose-section  .title span{
    color:#10F418;
}

                                      /*=======why-choose-section end=========*/

                                        /*=======sefty-device-section start=========*/

.sefty-device-section{
    padding: 50px 0;
}
.sefty-device-main{
    padding: 30px;
}
.sefty-device-section .flex-column{
    align-items: center;
    column-gap: 4%;
}
.sefty-device-section .product-column{
    width: 48%;
}
.sefty-device-section .product-details-column{
    width: 48%;
}
.sefty-device-section .product-details-column h2{
    font-size: 45px;
    line-height: 55px;
}
.sefty-device-section .product-details-column p{
    font-size: 23px;
    line-height: 28px;
    margin-top: 15px;
}
.sefty-device-section .product-details-column h2 span{
    color: #10F122;
}
.sefty-device-section img{
    width: 100%;
	border-radius:15px;
}
                                        /*=======sefty-device-section end=========*/

                                        /*=======sefty-product-section start=========*/
.sefty-product-section{
    padding-bottom:30px ;
}
.sefty-product-section .flex-column{
    align-items: center;
    column-gap: 4%;
}
.sefty-product-section .product-details-column{
    width: 48%;
    text-align: center;
}
.sefty-product-section .product-column{
    width: 48%;
}
.sefty-product-section .product-column img{
    width: 100%;
	border-radius:15px;
}
                                        /*=======sefty-device-section end=========*/

                                        /*=======order-section start=========*/
.order-section{
    padding: 30px 0;
}
.order-section .order-title{
    text-align: center;
    color: #416D4A;
    font-size: 27px;
    font-weight: 600;
    line-height: 39px;
    padding-bottom: 25px;
}
.order-section .order-main{
    border: 2px solid #076c07;
    border-top: 18px solid #076c07;
    border-radius: 35px;
   padding: 40px 15px;
}
.order-section .billing-details-column{
    width: 60%;
}
.order-section .billing-details-column .billing-form{
    width: 80%;
    margin: 0 auto;
}
.order-section .billing-details-column input{
    width: 100%;
    box-sizing: border-box;
    padding: 12px;
    margin-bottom: 20px;
    margin-top: 8px;
    outline: none;
    border:1px solid #D4D4D4 !important;
    border-radius: 5px;
}
.order-section .billing-details-column label .required{
    text-decoration: none;
}
.order-section .your-order-column{
    width: 40%;
}
.order-section .your-order-column .main-title, .order-section .billing-details-column .main-title{
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 20px;
    color: #333333;
}
.order-section .your-order-column table{
    border-collapse: collapse;
    text-align: left;
}
.order-section .your-order-column .order-heading th{
    padding-top: 0;
}
.order-section .your-order-column table h3{
    font-weight: 500;
    font-size: 20px;
    color: #834040;
}
.order-section .your-order-column table h4{
    font-weight: 300;
}
.order-section .your-order-column .shipping-td{
    vertical-align: baseline;
}
.order-section .your-order-column .total-bill h4{
    padding-bottom: 20px;
}
.order-section .your-order-column td:nth-child(odd){
    width: 75%;
 }
 .order-section .your-order-column td, th{
    padding: 10px 0;
 }
.order-section .your-order-column .order-details input{
    width: 18px;
    height: 30px;
    border: none;
    outline: none;
    box-sizing: border-box;
    text-align: center;
    font-size: 16px;
    vertical-align: middle;
}
.order-section .your-order-column .order-details label{
    font-size: 14px;
}
.order-section .your-order-column .order-details label span{
    padding-left: 20px;
}
.order-section .your-order-column tr{
    border-bottom: 1px dashed red;
}
.order-section .your-order-column .order-product span{
    padding-right: 10px;
}
.order-section .your-order-column .order-details .order-product h5{
    font-size: 16px;
}
.order-section .your-order-column .order-details img{
    width: 50px;
    vertical-align: middle;
}
.order-section .payment-column p{
    font-size: 10px;
    color: #777;
    padding: 10px 0;
}
.order-section .payment-column p a{
    color: red;
}
.order-section .payment-column .payment-box{
    background: #F7F7F7;
    padding: 20px 10px;
    margin-top: 20px;
    text-align: center;
    text-align: left;
}
.order-section .payment-column .payment-box .pay{
    background: #EAEAEA;
    padding: 10px;
    margin-top: 25px;
    position: relative;
}
.order-section .payment-column .payment-box .pay::after{
    content: "";
    position: absolute;
    background: #EAEAEA;
    height: 25px;
    width: 25px;
    top: -10px;
    transform: rotate(45deg);
    left: 23px;
}
.order-section .payment-column .payment-box h3{
    font-size: 16px;
    font-weight: 300;
    text-transform: capitalize;
    color: rgb(0, 0, 0);
    margin-right: 10px;
}
.order-section  .payment-column .payment-box select{
    padding: 10px;
    background: none;
    outline: none;
    width: 200px;
    font-size: 16px;
    color: rgb(7, 7, 7);
}
.order-section  .payment-column .payment-box option{
    color: #000;
}
.order-section  .place-order{
    background-color: #416D4A;
    padding: 10px;
    text-align: center;
    margin-top: 10px;
    position: relative;
    border-radius: 50px;
    transition: .3s;
}
/* .order-section  .place-order::before{
    content: "\f023";
    font-family: fontawesome;
    margin-right: 10px;
    font-size: 16px;
    font-weight: 500;
    top: 0px;
    position: relative;
    color: #fff;
} */
.order-section  .place-order:hover{
    background-color: #F16334;
}
.order-section  .place-order button{
    color:#fff;
    font-size: 18px;
    text-transform: capitalize;
    width: 100%;
    background: transparent;
    border: none;
}
.why-order .left-col{
    width: 48% !important;
}
.why-order .option2{
    width: 48% !important;
    margin-left: 4%;
}
.delivery-free {
    margin-top: 0px;
    background: #167ac6;
    padding: 10px;
    font-size: 22px;
    font-weight: bolder;
    color: white;
    line-height: 33px;
    border-radius: 10px;
    display: block;
    width: 75%;
    margin: auto;
}
                                    /* =============Footer-section-start ===========*/
.footer-section{
    background: #0D7E73;
    padding: 30px 0;
}
.mobile-br{
display: none;
}
.footer-section ul{
    list-style: none;
}
.footer-section .flex-column{
    column-gap: 3.3%;
    max-width: 905px;
    margin: 0 auto;
}
.footer-section .footer-widget{
    width: 30%;
}
.footer-section .footer-widget .title{
    font-size: 25px;
}
.footer-section .footer-widget a{
    color: #fff;
    transition: .4s;
}
.footer-section .footer-widget a:hover{
    color: #61CE70;
}
.footer-section .copy-right p{
    font-size: 16px;
    color: #000;
    margin-top: 15px;
}

.bottom-footer{
    background-color: black;
    padding: 10px;
    text-align: center;
    color: white;
}
                                        /*=======order-section end=========*/
.md-ml38{
    margin-left: 38px;
}
.fixed-bottom-right{
    position: fixed;
    bottom: 197px;
    right: 10px;
    z-index: 999;
}
.bg-white{
    background: white;
    color: black;
}
.h800{
    height: 800px;
}

                    /* Responsive design start here */

 @media only screen and (max-width: 1024px){
    .max-md-h500{
        height: 500px;
    }
    .service-section .service-single-column{
        width: 48%;
    }
 }

 @media only screen and (max-width: 989px){
    .header-section .header-main-column .header-title{
        font-size: 23px;
        line-height: 35px;
        padding: 10px 0;
    }
    .video-section .video-main-column .flex-column{
        flex-direction: column;
    }
    .video-section .video-column {
        width: 100%;
    }
    .video-section .video-column .video{
        width: 80%;
       margin: 0 auto;
       display: block;
    }
    .video-section .product-img-column {
        width: 100%;
        margin-top: 30px;
    }
    .video-section .product-img-column .product-img {
        margin: 0 auto;
        width: 349px;
    }.video-section .product-img-column .product-img {

    width: 350px;
    }
    .service-section .service-main-column .service-title {
        font-size: 23px;
    }
    .order-section .order-main .flex-column{
        flex-direction: column;
    }
    .order-section .billing-details-column {
        width: 100%;
    }
    .order-section .your-order-column {
        width: 80%;
        margin: 0 auto;
    }
    .order-section .your-order-column .order-heading th, td {
        padding: 10px 0px;
        width:  149px;
    }
 }
 @media only screen and (max-width: 767px){

    .why-order{
        display: block;
    }
    .md-ml38{
        margin-left: 0px;
    }

    .why-order .left-col{
        width: 100% !important;
    }
    .why-order .option2{
        width: 100% !important;
        margin-left: 0px !important;
        margin-top: 15px;
    }
    .why-order h2{
        margin: auto;
    }

    .container{
        padding: 0 8px;
    }
    .btn-column .order-btn{
        font-size: 20px;
        padding: 6px 38px;
    }
    .service-section .service-main-column .service-title {
        font-size: 18px;
    }
    .service-section .service-single-column {
        width: 100%;
    }
    .sefty-device-section .flex-column {
        flex-direction: column;
    }
    .sefty-product-section .flex-column{
        flex-direction: column;
    }
    .sefty-product-section .product-details-column{
        order: 2;
        margin-top: 30px;
    }
    .sefty-product-section .product-column{
        order: 1;
    }
    .sefty-device-section .product-details-column{
        margin-top: 30px;
    }
    .sefty-product-section {
        padding-bottom: 55px;
    }
    .video-section .video-column .video {
        width: inherit;
    }
    .btn-column {
        margin-top: 60px;
    }
    .sefty-device-section .product-column{
        width: 100%;
    }
    .sefty-device-section .product-details-column {
        width: 100%;
    }
 }
@media only screen and (max-width: 640px){
    .max-sm-h300{
        height: 300px;
    }
    .order-section .billing-details-column .billing-form {
    width: 95%;
    margin: 0 auto;
    }
    .mobile-br{
        display: block !important;
    }
    .order-section .your-order-column {
        width: 95%;
    }
    .footer-section .footer-widget {
        width: 100%;
        text-align: center;
    }
}
@media only screen and (max-width: 460px){

    .order-section .your-order-column td:nth-child(2n+1) {
	width: 70%;
}
}
@media only screen and (max-width: 414px){
    .order-section .your-order-column {
    width: 100%;
    }
}
@media only screen and (max-width: 380px){
    .order-section .your-order-column td:nth-child(2n+1) {
        width: 60%;
    }
    .order-section .order-main {
        padding: 25px 10px;
    }
    .order-section .order-title {
        font-size: 22px;
        line-height: 32px;
    }
    .btn-column .except-btn{
        display: block;
        padding: 20px 6px 7px 5px !important;
    }
}

/* Animation  */

.animation-pulse{
    animation-name:animation-pulse;
    animation-duration: 1s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
}

@keyframes animation-pulse {
    25% {
        transform: scale(1);
      }
    75% {
        transform: scale(0.9);
      }
  }

    </style>

    @stack('custom-css')
    <meta name="facebook-domain-verification" content="n7ryv20nu2zmxsjz0k38c6liioz7i3" />

    <!-- Meta Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '752338423062152');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=752338423062152&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Meta Pixel Code -->

  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MZ23H78');</script>
    <!-- End Google Tag Manager -->
</head>
