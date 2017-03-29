<?php
// Free html5 templates : www.zerotheme.com

$text = "<span style='color:red; font-size: 20px;'>Ocorreu um erro! Por favor, tente novamente.</span>";

if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['comments'];

    $subject=$_POST['subject'];
    

	$to = "rafaelp.delfino@gmail.com";	
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "ContatoSite";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:#26b864; font-size: 20px;'>Sua mensagem foi enviada com sucesso!</span>";
	}
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>HD Distribuidora</title>
    <meta name="description" content="">
<!--

Sprint Template

http://www.templatemo.com/tm-401-sprint

-->
<meta name="viewport" content="width=device-width">

<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/normalize.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/templatemo_misc.css">
<link rel="stylesheet" href="css/templatemo_style.css">
<link rel="stylesheet" href="css/timeline.css">
<script src="js/vendor/modernizr-2.6.2.min.js"></script>

</head>
<body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    <div id="front">
        <div class="site-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div id="templatemo_logo">

                            <h1><a href="#"></a></h1>
                        </div> <!-- /.logo -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-8 col-sm-6 col-xs-6">
                        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                        <div class="main-menu">
                            <ul>
                                <li><a href="#front">Home</a></li>
                                <li><a href="#product-promotion">Institucional</a></li>
                                <li><a href="#products">Produtos</a></li>
                                <li><a href="#contact">Contato</a></li>
                            </ul>
                        </div> <!-- /.main-menu -->
                    </div> <!-- /.col-md-8 -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="responsive">
                            <div class="main-menu">
                                <ul>
                                    <li><a href="#front">Home</a></li>
                                    <li><a href="#product-promotion">Institucional</a></li> <!--id="product-promotion"-->
                                    <li><a href="#products">Produtos</a></li>
                                    <li><a href="#contact">Contato</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.container -->
        </div> <!-- /.site-header -->
    </div> <!-- /#front -->

    <div class="site-slider">
        <ul class="bxslider">
            <li>
                <img src="images/slider/slide1.jpg" alt="slider image 1">
            </li>
            <li>
                <img src="images/slider/slide2.jpg" alt="slider image 2">
            </li>
            <li>
                <img src="images/slider/slide3.jpg" alt="slider image 3">
            </li>
           <li>
                <img src="images/slider/slide4.jpg" alt="slider image 4">
            </li>
        </ul> <!-- /.bxslider -->
    </div> <!-- /.site-slider -->


    <div id="product-promotion" class="content-section">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-title">Nossa História</h1>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
      
    <div class="row">

              <!-- STEPS -->
        <section id="Steps" class="steps-section">

              <!--   <h2 class="steps-header">
                    HD DISTRIBUIDORA ATACADISTA
                </h2> -->

                <div class="steps-timeline">

                    <div class="steps-one">
                        <img class="steps-img" src="images/image.jpg" alt="" />
                        <h3 class="steps-name">2015</h3>
                            <p class="steps-description">
                             HD inicia suas operações na região do interior do Rio de Janeiro com 10 veículos pronta entrega.
                            </p>
                    </div>

                    <div class="steps-two">
                        <img class="steps-img" src="images/image.jpg" alt="" />
                            <h3 class="steps-name">2016</h3>
                             <p class="steps-description">
                            HD é convidada a dobrar de tamanho e ampliar sua área de atuação, passando atender a região Serrana do Rio de Janeiro.</p>
                    </div>

                    <div class="steps-three">
                        <img class="steps-img" src="images/image.jpg" alt="" />
                        <h3 class="steps-name">
                          2017
                      </h3>
                      <p class="steps-description">
                       Mais um convite da Mondelez para a HD, agora para assumir a macro região de Rio de Janeiro. Mais uma vez ampliando sua frota e operando acima de 30 veículos pronta entrega, com perspectivas de ultrapassar os 50 veículos em operação e mais de 5.000 pontos de vendas atendidos.
                    </div>
                
                </div><!-- /.steps-timeline -->
        </section>
    </div> <!-- /.row -->

    <div class="row">
            <div class="col-md-2 col-sm-3">
                <div class="item-small"> <!--rafael <div class="item-small"> -->
                    <img src="images/promotion/promotion1.jpg" alt="Product 1">
                    <h4>Distribuidor Oficial</h4>
                </div> <!-- /.item-small -->
            </div> <!-- /.col-md-2 -->  
            
            <div class="col-md-8 col-sm-6">
                    <div class="item-large">
                            <img src="images/promotion/promotion2.jpg" alt="Product 2">
                            <div class="item-large-content">
                                <div class="item-header">
                                    <h2 class="pull-left">HD Distribuidora Exclusivo Mondelez</h2>
                                    <div class="clearfix"></div>
                                </div> <!-- /.item-header -->
                                    <p>Pela consciente necessidade e importância da higiene e limpeza de ambientes para as empresas e para as pessoas, a HD Distribuidora traz para o mercado corporativo o que há de mais completo e moderno neste segmento.<br>
                                    Em parceria com a Mondelez, a HD Distribuidora é sinônimo de agilidade e qualidade nos produtos e serviços oferecidos.<br>
                                    A marca HD Distribuidora é sustentada pelo Compromisso com o atendimento na medida exata de cada cliente. Através da construção de um relacionamento sólido, firmamos compromisso com a sua real necessidade.<br</p>
                            </div> <!-- /.item-large-content -->
                        </div> <!-- /.item-large -->
            </div> <!-- /.col-md-8 -->  

              <div class="col-md-2 col-sm-3">
                        <div class="item-small">
                            <img src="images/promotion/promotion3.jpg" alt="Product 3">
                            <h4>Rede Hiper Doce</h4>
                        </div> <!-- /.item-small -->
                </div> <!-- /.col-md-2 -->

            </div> <!-- /.container -->
    </div> <!-- /#product-promotion -->



        <div id="services" class="content-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="service-item">
                            <span class="service-icon first"></span>
                            <h3>Missão</h3>
                            <p>Oferecer o que há de melhor a seus clientes; o ponto certo, com o produto certo, na visão certa, e o posicionamento certo. Obtendo dia-a-dia não só a venda, mas a fidelização e a satisfação do consumidor.</p>
                        </div> <!-- /.service-item -->
                    </div> <!-- /.col-md-3 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="service-item">
                            <span class="service-icon second"></span>
                            <h3>Visão</h3>
                            <p>Ser uma empresa reconhecida pela sua inovação, criatividade e respeito pelos seus funcionários, clientes e produtos. Construir um relacionamento de amizade e resultado com cada ponto de venda a fim de que nosso cliente sempre prefira a compra através do nosso sistema de pronta-entrega.</p>
                        </div> <!-- /.service-item -->
                    </div> <!-- /.col-md-3 -->
                    <!--<div class="col-md-3 col-sm-6"> -->
                    <div class="col-md-4 col-sm-6">
                        <div class="service-item">
                            <span class="service-icon third"></span>
                            <h3>Valores</h3>
                            <p>Ética. Confiança. Transparência. Respeito. Agilidade.</p>
                        </div> <!-- /.service-item -->
                    </div>    
            </div> <!-- /.row --> 

        </div> <!-- /.container -->
    </div> <!-- /#services -->

<div id="products" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-title">Produtos</h1>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <img src="images/products/product1.jpg" alt="Bala Halls">
                        </div> <!-- /.item-thumb -->
                        <h3>Bala Halls</h3>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <img src="images/products/product2.jpg" alt="Ouro Branco">
                        </div> <!-- /.item-thumb -->
                        <h3>Bom bom Ouro Branco</h3>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <img src="images/products/product3.jpg" alt="Laka">
                        </div> <!-- /.item-thumb -->
                        <h3>Chocolate Laka</h3>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <img src="images/products/product4.jpg" alt="Babbaloo">
                        </div> <!-- /.item-thumb -->
                        <h3>Babbaloo</h3>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <img src="images/products/product5.jpg" alt="Trident">
                        </div> <!-- /.item-thumb -->
                        <h3>Trident</h3>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <img src="images/products/product6.jpg" alt="Trakinas">
                        </div> <!-- /.item-thumb -->
                        <h3>Trakinas</h3>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <img src="images/products/product7.jpg" alt="BelVita">
                        </div> <!-- /.item-thumb -->
                        <h3>Biscoito BelVita</h3>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <img src="images/products/product8.jpg" alt="Club Social">
                        </div> <!-- /.item-thumb -->
                        <h3>Club Social</h3>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /#products -->    


    <div id="contact" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-title">Contato</h1>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-md-offset-2 col-md-8 text-center bigger-text">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div id="map">
                            </div>
                        </div> <!-- /.col-md-6 -->
                        <div class="col-md-6 col-sm-6">                        
                            <div class="row contact-form">

                                <center><?php echo $text;?></center>
                                <form method="post" name="contact_form" action="contacts.php">
                                    <fieldset class="col-md-6 col-sm-6">
                                        <input id="name" type="text" name="name" placeholder="Nome" required="">
                                    </fieldset>
                                    <fieldset class="col-md-6 col-sm-6">
                                        <input type="email" name="email" id="email" placeholder="Email" required="">
                                    </fieldset>
                                    <fieldset class="col-md-12">
                                        <input type="text" name="subject" id="subject" placeholder="Assunto">
                                    </fieldset>
                                    <fieldset class="col-md-12">
                                        <textarea name="comments" id="comments" placeholder="Mensagem" required=""></textarea>
                                    </fieldset>
                                    <fieldset class="col-md-12">
                                        <input type="submit" name="send" value="Enviar Mensagem" id="submit" class="button">
                                    </fieldset>                                        

                                </form>
                            </div> <!-- /.contact-form -->
                        </div> <!-- /.col-md-6 -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /#products -->

            <div class="site-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-6">
                            <span id="copyright">
                             Copyright &copy; 2017 <a href="#">RD Solutions</a>
                         </span>

                     </div> <!-- /.col-md-6 -->
                     <div class="col-md-4 col-sm-6">
                        <ul class="social">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                            <li><a href="#" class="fa fa-rss"></a></li>
                        </ul>
                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.site-footer -->

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/vendor/jquery-1.10.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="js/jquery.easing-1.3.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <script>            
            $(document).ready(function() { 
                window.location.href='#contact';
            });
        </script>
        
        <!-- templatemo 401 sprint -->
    </body>
    </html>