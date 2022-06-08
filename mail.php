<?php

require_once './vendor/autoload.php';
 
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;


$contact_name = $_POST['first_name'];
$contact_email = $_POST['email'];
$contact_phone = $_POST['phone'];
$contact_message = $_POST['custom_1'];

$sender = $contact_email;

	
	
	$email_body = '<table style="width: 100%;margin-bottom: 20px;">
    <tr style="text-align: left;">
        <td>
            <img src="https://awais.quraneducator.net/mikasmarcinkus/images/logo.png" width="200" />
        </td>
    </tr>
</table>
<table>
    <tr>
    <td width="100">Name :</td>
    <td>'.$contact_name.'</td>
    </tr>
    <tr>
    <td>Email :</td>
    <td>'.$contact_email.'</td>
    </tr>
    <tr>
    <td>Phone :</td>
    <td>'.$contact_phone.'</td>
    <tr>
    <td valign="top">Message :</td>
    <td>'.$contact_message.'</td>
    </tr>
</table>
<br>
<table>
    <tr>
        <td>Tel: (370) 655 62966</td>
    </tr>
    <tr>
    <td>Email: <a href="mailto:info@apliuslangai.lt">info@apliuslangai.lt</a></td>
    </tr>
    <tr>
    <td>Web: <a href="https://www.apliuslangai.eu/">https://www.apliuslangai.eu/</a></td>
    </tr>  
	<tr>
    <td>Address: Butrimonių g. 5, Kaunas</td>
    </tr>  
</table>
</body>
</html>
';
 
// Create a Transport object
$transport = Transport::fromDsn('smtp://mikas.marcinkus@gmail.com:seouftucjmockvds@smtp.gmail.com:587');
 
// Create a Mailer object
$mailer = new Mailer($transport); 
 
// Create an Email object
$email = (new Email());
 
// Set the "From address"
$email->from($sender);

$email->replyTo($sender);
 
// Set the "From address"
$email->to('elena@apliuslangai.lt');

$email->cc('psljuda@gmail.com');
 
// Set a "subject"
$email->subject('Apliuslangai Contact Form - '.$contact_name);
 
// Set HTML "Body"
$email->html($email_body);
 
// Send the message
$mailer->send($email);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("head.php") ?>
</head>
<body>

    <div style="height:0px;width:0px;opacity:0;position:fixed" class="js_kartra_trackable_object" data-kt-type="kartra_page_tracking" data-kt-value="L3f0RHxhTea4" data-kt-owner="GrXZNRGg">
    </div>
    <div id="page" class="page container-fluid">
        <div id="page_background_color" class="row">
            <div class="content content--popup-overflow-visible dark" style="background-color:rgba(255,255,255,1)" id="_widsasqe5">
                <style id="pagesInternalCSS">
                    .kartra_element_bg--margin-left-30p{
                        margin-left: 30% !important;
                    }
                    .kartra_element_bg--margin-right-30p{
                        margin-right: 30% !important;
                    }
                    .kartra_image--padding-left-extra-small{
                        padding-left: 20px;
                    }
                    .kartra_image--padding-right-extra-small{
                        padding-right: 20px;
                    }

                    @media(max-width: 991px){
                        .kartra_element_bg--sm-inline-block-center{
                            margin-left: auto !important;
                            margin-right: auto !important;
                        }
                        .column--sm-padding-bottom-none-important{
                            padding-bottom: 0px !important;
                        }
                    }   
                </style>
                <div class="overflow_background_wrapper">
                    <div class="background_changer"></div>
                    <div class="background_changer_overlay"></div>
                </div>
                <nav class="navbar navbar-inverse navbar-light">
                    <div class="container nav-elem-wrapper nav-elem-wrapper--md-sm-flex nav-elem-wrapper--md-sm-vertical-center nav-elem-wrapper--md-sm-justify-content-space-between">
                        <div class="navbar-header nav-elem-col">
                            <div data-component="image">
                                <a href="index.php" data-frame-id="_widsasqe5" target="_parent">
                                    <picture>
                                        <img class="kartra_image kartra_image--logo kartra_image--margin-bottom-none pull-left background_changer--blur0" src="images/logo.png" alt="" style="border: 0px none rgb(35, 82, 124); margin: 0px; opacity: 1; width: 162px; max-width: 100%; height: auto;">
                                    </picture>
                                </a>
                            </div>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar_7FX5Y09WDo" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="navbar_7FX5Y09WDo" class="navbar-collapse collapse nav-elem-col navbar-collapse--md-sm-padding-right-none js_kartra_component_holder">
                            <div class="navbar-collapse__inner navbar-collapse__inner--sm-padding-top-big-tiny navbar-collapse__inner--sm-padding-bottom-big-tiny navbar-collapse__inner--md-vertical-center navbar-collapse__inner--md-row-reverse js_kartra_component_holder">
                                <ul class="nav navbar-nav navbar-right navbar-nav--bottom-border-menu">
                                    <li class="propClone">
                                        <a class="nav__link--padding-top-bottom-extra-medium nav__link--only-sm-padding-top-bottom-special-medium nav__link--rounded-none nav__link--padding-left-right-none nav__link--md-margin-left-right-15px nav__link--style-dark nav__link--style-two toggle_section" href="#_g5k7ep43m" data-color="rgb(66, 66, 66)" data-frame-id="_widsasqe5" onmouseover="this.style.color='rgb(255, 195, 0)';this.style.borderColor='rgb(255, 195, 0)'" onmouseout="this.style.color='rgb(66, 66, 66)';this.style.borderColor='transparent'" style="color: rgb(66, 66, 66); font-weight: 400; font-family: Montserrat; border-color: transparent;" target="_self">Apie</a>
                                    </li>
                                    <li class="propClone">
                                        <a class="nav__link--padding-top-bottom-extra-medium nav__link--only-sm-padding-top-bottom-special-medium nav__link--rounded-none nav__link--padding-left-right-none nav__link--md-margin-left-right-15px nav__link--style-dark nav__link--style-two toggle_section" href="#_dk94gtkbz" data-color="rgb(66, 66, 66)" data-frame-id="_widsasqe5" onmouseover="this.style.color='rgb(255, 195, 0)';this.style.borderColor='rgb(255, 195, 0)'" onmouseout="this.style.color='rgb(66, 66, 66)';this.style.borderColor='transparent'" style="color: rgb(66, 66, 66); font-weight: 400; font-family: Montserrat; border-color: transparent;" target="_self">Langai</a>
                                    </li>
                                    <li class="propClone">
                                        <a class="nav__link--padding-top-bottom-extra-medium nav__link--only-sm-padding-top-bottom-special-medium nav__link--rounded-none nav__link--padding-left-right-none nav__link--md-margin-left-right-15px nav__link--style-dark nav__link--style-two toggle_pagelink" href="doors.php" data-color="rgb(66, 66, 66)" data-frame-id="_widsasqe5" onmouseover="this.style.color='rgb(255, 195, 0)';this.style.borderColor='rgb(255, 195, 0)'" onmouseout="this.style.color='rgb(66, 66, 66)';this.style.borderColor='transparent'" style="color: rgb(66, 66, 66); font-weight: 400; font-family: Montserrat; border-color: transparent;" data-project-id="1" data-page-id="8" target="_parent">Durys</a>
                                    </li>
                                    <li class="propClone">
                                        <a class="nav__link--padding-top-bottom-extra-medium nav__link--only-sm-padding-top-bottom-special-medium nav__link--rounded-none nav__link--padding-left-right-none nav__link--md-margin-left-right-15px nav__link--style-dark nav__link--style-two toggle_pagelink" href="blog.php" data-color="rgb(66, 66, 66)" data-frame-id="_widsasqe5" onmouseover="this.style.color='rgb(255, 195, 0)';this.style.borderColor='rgb(255, 195, 0)'" onmouseout="this.style.color='rgb(66, 66, 66)';this.style.borderColor='transparent'" style="color: rgb(66, 66, 66); border-color: transparent; font-weight: 400; font-family: Montserrat;" data-project-id="1" data-page-id="9" target="_parent">Naujienos</a>
                                    </li>


                                    <li class="propClone">
                                        <a class="nav__link--padding-top-bottom-extra-medium nav__link--only-sm-padding-top-bottom-special-medium nav__link--rounded-none nav__link--padding-left-right-none nav__link--md-margin-left-right-15px nav__link--style-dark nav__link--style-two toggle_pagelink hover" href="contact.php" data-color="rgb(66, 66, 66)" data-frame-id="_widsasqe5" onmouseover="this.style.color='rgb(255, 195, 0)';this.style.borderColor='rgb(255, 195, 0)'" onmouseout="this.style.color='rgb(66, 66, 66)';this.style.borderColor='transparent'" style="color: rgb(255, 195, 0); font-weight: 400; font-family: Montserrat; border-color: rgb(255, 195, 0);" data-project-id="1" data-page-id="2" target="_parent">Susisiekite</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </nav>
            </div>
            <div class="content content--padding-none" style="background-color: rgb(255, 253, 253); padding: 0px;" id="_dbpof9ia8">
                <style id="pagesInternalCSS">
                    .typ-3-kartra_icon--top-adjust{
                        top: -10px;
                    }	
                </style>
                <div class="background_changer background_changer--blur0" style="background-image: none; opacity: 1;"></div>
                <div class="background_changer_overlay" style="background-image: none;"></div>
                <div class="container-fluid">
                    <div class="row row--equal row--full-screen row--sm-min-height-auto" data-component="grid" style="min-height: 608px; height: auto;">
                        <div class="col-md-6 column--padding-small column--vertical-center column--adjust-height" id="tMTlW4bB1U" style="margin-top: 0px; margin-bottom: 0px; padding: 25px;">
                            <div style="background-color: rgba(0, 0, 0, 0); border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; border: 0px none rgb(51, 51, 51); opacity: 1;" class="background-item background_changer--blur0" alt="" data-bg='url("https://d1aettbyeyfilo.cloudfront.net/aplius/25226207_1641713098Za7Langai.png")'></div>
                        </div>
                        <div class="col-md-6 column--vertical-center column--padding-small" style="margin-top: 0px; margin-bottom: 0px; padding: 40px 25px;">
                            <div style="background-color: rgb(250, 250, 250); border-radius: 0px; border-color: rgb(51, 51, 51); border-style: none; border-width: 0px; background-image: none; opacity: 1;" class="background-item background_changer--blur0"></div>
                            <div class="row row--equal row--full-width" data-component="grid">
                                <div class="column--sm-padding-left-right-big-tiny-important background_changer--blur0 col-md-10 col-md-offset-1" style="background-color: rgba(0, 0, 0, 0); border-radius: 0px; border-style: none; border-width: 0px; padding: 0px 20px 0px 15px; background-image: none; opacity: 1;" id="gxXZsn6nfr"><div class="js_kartra_component_holder">

                                    <div data-component="headline" id="X8ljnzOwLJ">
                                        <div class="kartra_headline kartra_headline--montserrat-font kartra_headline--text-center kartra_headline--size-giant kartra_headline--dim-black kartra_headline--font-weight-bold" style="position: relative;" aria-controls="cke_78" aria-activedescendant="" aria-autocomplete="list" aria-expanded="false">
                                            <p style="font-size: 1.6rem; line-height: 1.2em;"><span style="font-size: 1.6rem; color: rgb(255, 160, 0); font-family: montserrat; line-height: 1.2em;">Dėkojame už užklausą!</span></p>
                                        </div>
                                    </div>
                                    <div data-component="text" id="QyLe10K40S">
                                        <div class="kartra_text kartra_text--text-center kartra_text--light-grey kartra_text--extra-small kartra_text--margin-bottom-medium" style="position: relative; margin-top: 0px; margin-bottom: 50px;" aria-controls="cke_2110" aria-activedescendant="" aria-autocomplete="list" aria-expanded="false">
                                            <p><font color="#696969"><span style="caret-color: rgb(105, 105, 105);">Kontaktinę Jūsų informaciją gavome! Netrukus su Jumis susisieksime!</span></font></p>
                                        </div>
                                    </div>
                                    <div data-component="list" id="8GcjiChSRa">
                                        <ul class="kartra_list">
                                            <li class="kartra_list__item kartra_list__item--flex" href="javascript: void(0);">
                                                <div class="kartra_icon kartra_icon--negative-margin-left-tiny-important kartra_icon--no-shrink kartra_icon--light-orange-two typ-3-kartra_icon--top-adjust kartra_icon--large" id="1552468911568_formbutton" style="background-color: rgba(0, 0, 0, 0);margin: 0px auto;">
                                                    <span style="color: rgb(23, 188, 241);" class="kartra_icon__icon fa fa-inbox"></span>
                                                </div>
                                                <div class="kartra_item_info kartra_item_info--padding-left-tiny kartra_item_info--flex-1">
                                                    <div class="kartra_item_info__headline kartra_item_info__headline--white kartra_item_info__headline--roboto-condensed-font kartra_item_info__headline--h5 kartra_item_info__headline--margin-bottom-extra-small" style="margin-top: 0px; margin-bottom: 6px; position: relative;" tabindex="0" spellcheck="true" role="textbox" aria-label="Rich Text Editor, editor2" title="Rich Text Editor, editor2" aria-describedby="cke_345" aria-controls="cke_3718" aria-activedescendant="" aria-autocomplete="list" aria-expanded="false">
                                                        <p><span style='color: rgb(0, 0, 0); font-family: "roboto condensed";'>1. </span><strong><span style='font-family: "roboto condensed";'><span style='color: rgb(23, 188, 241); font-family: "roboto condensed";'>Patikrinkite </span></span></strong><span style='color: rgb(0, 0, 0); font-family: "roboto condensed";'>savo elektroninį paštą.</span></p>
                                                    </div>
                                                    <div class="kartra_item_info__text kartra_item_info__text--lato-font kartra_item_info__text--font-weight-regular kartra_item_info__text--white-dim-grey kartra_item_info__text--md-margin-bottom-medium" style="margin-top: 0px; margin-bottom: 30px; position: relative;" aria-controls="cke_5285" aria-activedescendant="" aria-autocomplete="list" aria-expanded="false">
                                                        <p><font color="#696969"><span style="caret-color: rgb(105, 105, 105);">Atsiųsime Jums klausimus, reikalingus tiksliam sąmatos parengimui. </span></font></p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kartra_list__item kartra_list__item--flex" href="javascript: void(0);" id="JJVFkDCHJu">
                                                <div class="kartra_icon kartra_icon--negative-margin-left-tiny-important kartra_icon--no-shrink kartra_icon--light-orange-two typ-3-kartra_icon--top-adjust kartra_icon--large" id="1552468911568_formbutton" style="background-color: rgba(0, 0, 0, 0);margin: 0px auto;">
                                                    <span style="color: rgb(244, 164, 102);" class="kartra_icon__icon fa fa-envelope-o"></span>
                                                </div>
                                                <div class="kartra_item_info kartra_item_info--padding-left-tiny kartra_item_info--flex-1">
                                                    <div class="kartra_item_info__headline kartra_item_info__headline--white kartra_item_info__headline--roboto-condensed-font kartra_item_info__headline--h5 kartra_item_info__headline--margin-bottom-extra-small" style="margin-top: 0px; margin-bottom: 6px; position: relative;" aria-controls="cke_6630" aria-activedescendant="" aria-autocomplete="list" aria-expanded="false">
                                                        <p><span style="color:#000000;">2. </span><strong><span><span style="color: rgb(244, 164, 102);">Kuo tiksliau atsakysite </span></span></strong> <font color="#000000"><span style="caret-color: rgb(0, 0, 0);">į klausimus, tuo tikslesnę sąmatą parengsime.</span></font></p>
                                                    </div>
                                                    <div class="kartra_item_info__text kartra_item_info__text--lato-font kartra_item_info__text--font-weight-regular kartra_item_info__text--white-dim-grey kartra_item_info__text--md-margin-bottom-medium" style="margin-top: 0px; margin-bottom: 30px; position: relative;" aria-controls="cke_10087" aria-activedescendant="" aria-autocomplete="list" aria-expanded="false">
                                                        <p><span style="color:#696969;">Nepamirškite įtraukti gaminių matmetenų, spalvos, varstymų ir šiluminės varžos reikalavimų.</span></p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kartra_list__item kartra_list__item--flex" href="javascript: void(0);">
                                                <div class="kartra_icon kartra_icon--negative-margin-left-tiny-important kartra_icon--no-shrink kartra_icon--light-orange-two typ-3-kartra_icon--top-adjust kartra_icon--large" id="1552468911568_formbutton" style="background-color: rgba(0, 0, 0, 0);margin: 0px auto;">
                                                    <span style="color: rgb(15, 225, 169);" class="kartra_icon__icon fa fa-hand-o-up"></span>
                                                </div>
                                                <div class="kartra_item_info kartra_item_info--padding-left-tiny kartra_item_info--flex-1">
                                                    <div class="kartra_item_info__headline kartra_item_info__headline--white kartra_item_info__headline--roboto-condensed-font kartra_item_info__headline--h5 kartra_item_info__headline--margin-bottom-extra-small" style="margin-top: 0px; margin-bottom: 6px; position: relative;" aria-controls="cke_11201" aria-activedescendant="" aria-autocomplete="list" aria-expanded="false">
                                                        <p><span style="color:#000000;">3.</span><strong><span style="color: rgb(15, 225, 169);">Išanalizuokite </span></strong><span style="color:#000000;">geriausią mūsų pasiūlymą ir sutarkime dėl paslaugų suteikimo terminų bei sąlygų! </span></p>
                                                    </div>

                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                    <div data-component="divider">                            
                                        <hr class="kartra_divider kartra_divider--border-extra-tiny kartra_divider--border-dim-black-opaque-25 pull-center kartra_divider--full" style="border-color: rgba(33, 33, 33, 0.15); border-top-style: solid; border-top-width: 1px; margin: 20px auto;">
                                    </div>





                                </div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content content--padding-extra-small content--padding-top-none" style="background-color: rgb(238, 239, 242); padding: 50px 0px 0px;" id="_628be179dbb1e">
                <style id="pagesInternalCSS">
                    .kartra_element_bg--margin-left-30p{
                        margin-left: 30% !important;
                    }
                    .kartra_element_bg--margin-right-30p{
                        margin-right: 30% !important;
                    }
                    .kartra_image--padding-left-extra-small{
                        padding-left: 20px;
                    }
                    .kartra_image--padding-right-extra-small{
                        padding-right: 20px;
                    }

                    @media(max-width: 991px){
                        .kartra_element_bg--sm-inline-block-center{
                            margin-left: auto !important;
                            margin-right: auto !important;
                        }
                        .column--sm-padding-bottom-none-important{
                            padding-bottom: 0px !important;
                        }
                    }	
                </style>
                <div class="background_changer background_changer--blur0" style="background-image: none; opacity: 1;"></div>
                <div class="background_changer_overlay" style="background-image: none;"></div>
                <div> <?php include("footer.php") ?></div>
            </div>
        </div>
    </div>


</body>
</html>
 



        
    
     


