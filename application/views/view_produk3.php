<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?> </title>
        
        <link href="/dpw2/css/style.css" type = "text/css" rel = "stylesheet">
         <link href="/dpw2/css/jquery-ui-1.8.16.custom.css" type="text/css"  rel="stylesheet" />  
       
       <link href="/dpw2/css/galleriffic-2.css" rel="stylesheet"  type="text/css" />
       <script type="text/javascript" src="/dpw2/js/jquery-1.6.2.min.js"></script>
       <script type="text/javascript" src="/dpw2/js/jquery-ui-1.8.16.custom.min.js"></script>         
       <script type="text/javascript" src="/dpw2/js/jquery.galleriffic.js"></script>
       <script type="text/javascript" src="/dpw2/js/jquery.opacityrollover.js"></script>      
       <script type="text/javascript">        
             $(function(){
                // Tabs                  
                 $('#tabs').tabs();
            });
            
             jQuery(document).ready(function($) {
                // We only want these styles applied when javascript is enabled
                $('div.navigation').css({'width' : '300px', 'float' : 'left'});
                $('div.content').css('display', 'block');

                // Initially set opacity on thumbs and add
                // additional styling for hover effect on thumbs
                var onMouseOutOpacity = 0.67;
                $('#thumbs ul.thumbs li').opacityrollover({
                    mouseOutOpacity:   onMouseOutOpacity,
                    mouseOverOpacity:  1.0,
                    fadeSpeed:         'fast',
                    exemptionSelector: '.selected'
                });
                
                // Initialize Advanced Galleriffic Gallery
                var gallery = $('#thumbs').galleriffic({
                    delay:                     2500,
                    numThumbs:                 15,
                    preloadAhead:              10,
                    enableTopPager:            true,
                    enableBottomPager:         true,
                    maxPagesToShow:            7,
                    imageContainerSel:         '#slideshow',
                    controlsContainerSel:      '#controls',
                    captionContainerSel:       '#caption',
                    loadingContainerSel:       '#loading',
                    renderSSControls:          true,
                    renderNavControls:         true,
                    playLinkText:              'Play Slideshow',
                    pauseLinkText:             'Pause Slideshow',
                    prevLinkText:              '&lsaquo; Previous Photo',
                    nextLinkText:              'Next Photo &rsaquo;',
                    nextPageLinkText:          'Next &rsaquo;',
                    prevPageLinkText:          '&lsaquo; Prev',
                    enableHistory:             false,
                    autoStart:                 false,
                    syncTransitions:           true,
                    defaultTransitionDuration: 900,
                    onSlideChange:             function(prevIndex, nextIndex) {
                        // 'this' refers to the gallery, which is an extension of $('#thumbs')
                        this.find('ul.thumbs').children()
                            .eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
                            .eq(nextIndex).fadeTo('fast', 1.0);
                    },
                    onPageTransitionOut:       function(callback) {
                        this.fadeTo('fast', 0.0, callback);
                    },
                    onPageTransitionIn:        function() {
                        this.fadeTo('fast', 1.0);
                    }
                });
            });
        </script>
    </head>    
    <body>
    <div id="wrap">
        <div class="top_corner"></div>
        <div id="main_container">    
            <div id="header">                       
                <div id="menu">
                    <ul>                                                                                            
                        <li><?php echo anchor('web/index','<span>BERANDA</span>') ?></li>
                        <li><?php echo anchor('web/produk','<span>PRODUK</span>') ?></li>
                        <li><?php echo anchor('web/contact','<span>KONTAK</span>') ?></li>
                    </ul>
                </div>                    
            </div>
        
        <div class="center_content_pages">
        
            
                    
             </div>
        
        <div id="tabs">
                            <ul>
                                <li><a href="#gambar"> Gambar </a></li>
                                <li><a href="#spesifikasi"> Spesifikasi</a></li>
                                <li><a href="#ulasan"> Ulasan</a></li>
                            </ul>
                            <div id="gambar">
                                <div id="gallery" class="content">
                                    <div id="controls" class="controls"></div>
                                    <div class="slideshow-container">
                                        <div id="loading" class="loader"></div>
                                        <div id="slideshow" class="slideshow"></div>
                                    </div>
                                    <div id="caption" class="caption-container"></div>  
                                </div>
                                <div id="thumbs" class="navigation">
                                    <ul class="thumbs noscript">
                                        <li>
                                            <a class="thumb" name="A53SV-1" href="/dpw2/images/ori/3/1.JPG" title="ASUS N43SL">
                                                <img src="/dpw2/images/thumb/3/1.JPG"alt="ASUS N43SL" />
                                            </a>
                                            <div class="caption">
                                                <div class="download">                                                
                                                </div>
                                                <div class="image-title">ASUS N43SL</div>
                                                <div class="image-desc">Laptop Multimedia</div>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="thumb" name="A53SV-2" href="/dpw2/images/ori/3/2.JPG" title="ASUS N43SL">
                                                <img src="/dpw2/images/thumb/3/2.JPG"alt="ASUS N43SL" />
                                            </a>
                                            <div class="caption">
                                                <div class="download">                                                
                                                </div>
                                                <div class="image-title">ASUS N43SL</div>
                                                <div class="image-desc">Laptop Multimedia</div>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="thumb" name="A53SV-3" href="/dpw2/images/ori/3/3.JPG" title="ASUS N43SL">
                                                <img src="/dpw2/images/thumb/3/3.JPG"alt="ASUS N43SL" />
                                            </a>
                                            <div class="caption">
                                                <div class="download">                                                
                                                </div>
                                                <div class="image-title">ASUS N43SL</div>
                                                <div class="image-desc">Laptop Multimedia</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div style="clear: both;"></div>
                            </div>
                            <div id="spesifikasi">
                                <table>
                                    <tr>
                                        <td>Prosesor</td>
                                        <td>Intel® Core™ i7 2670QM 2.2 GHz ~ 2.9 GHz Processo</td>
                                    </tr>
                                    <tr>
                                        <td>Chipset</td>
                                        <td>Intel® HM65 Express Chipset</td>
                                    </tr>
                                    <tr>
                                        <td>Memori</td>
                                        <td>DDR3 1333 MHz SDRAM, 2 x SO-DIMM socket for expansion up to 8 G SDRAM</td>
                                    </tr>
                                    <tr>
                                        <td>Display </td>
                                        <td>14.0" 16:9 HD (1366x768) LED Backlight Asus Splendid Video Intelligent Technology </td>
                                    </tr>
                                    <tr>
                                        <td>Grafis  </td>
                                        <td>NVIDIA® GeForce® GT 540M dengan 2GB DDR3 VRAM</td>
                                    </tr>
                                    <tr>
                                        <td>Storage</td>
                                        <td>2.5" SATA 640GB 5400rpm</td>
                                    </tr>
                                    <tr>
                                        <td>Drive Optik </td>
                                        <td>Super-Multi Combo</td>
                                    </tr>
                                    <tr>
                                        <td>Card Reader </td>
                                        <td>7 -in-1 card reader ( SD/ SDHC/ SDXC/ MS/ MS Pro/ MS Duo/ MMC)</td>
                                    </tr>
                                    <tr>
                                        <td>Kamera  </td>
                                        <td>2 Mega Pixel Fixed web camera. VGA Web Camera </td>
                                    </tr>                            
                                    <tr>
                                        <td>Networking  </td>
                                        <td>Terintegrasi 802.11 b/g/n <br>
                                            Terintegrasi Bluetooth™ V2.1+EDR (Optional) <br>
                                            10/100/1000 Base T <br>                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Interface</td>
                                        <td>1 x Microphone-in jack <br>
                                            1 x Microphone-in jack <br>
                                            1 x Headphone-out jack <br>
                                            1 x VGA port/Mini D-sub 15-pin for external monitor <br>
                                            1 x USB 3.0 port(s) <br>
                                            3 x USB 2.0 port(s) <br>
                                            1 x RJ45 LAN Jack for LAN insert <br>
                                            1 x HDMI <br>                                             
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Audio   </td>
                                        <td>Built-in Speakers And Microphone<br>
                                            Bang & Olufsen ICEpower® <br>
                                            SonicFocus<br>                                                                                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Baterai </td>
                                        <td>6Cells : 5200 mAh 56 Whrs</td>
                                    </tr>
                                    <tr>
                                        <td>Adaptor Daya    </td>
                                        <td>Output :19 V DC, 4.74 A, 90 W ((Dual Core)) , 120 W ((Quad Core))<br>
                                            Input : 100 -240 V AC, 50/60 Hz universal
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dimensi </td>
                                        <td>35 x 24 x 3.3 cm (WxDxH) </td>
                                    </tr>
                                    <tr>
                                        <td>Berat   </td>
                                        <td>2.4 kg (dengan baterai 6 cell)</td>
                                    </tr>
                                </table>                                                                 
                            </div>
                            <div id="ulasan">
                               <h2>Performa Komputasi Super</h2>
                               <p>
                                   Prosesor terkuat dari Intel menghadirkan berbagai petualangan menarik, produktivitas tinggi dan momen-momen berkesan. Dengan prosesor Intel® Core™ generasi ke-2 didalamnya, seri N memiliki kekuatan dan kemampuan sempurna untuk mencapai dan menikmati lebih banyak, dengan efisiensi daya yang mengagumkan dan pengalaman pengguna yang istimewa. 
                               </p>
                               <h2>Rasakan hiburan audio terbaik melalui teknologi SonicMaster</h2>
                               <p>
                                   SonicMaster eksklusif dari ASUS dilengkapi teknologi yang dikembangkan bersama dengan Bang & Olufsen ICEpower yang telah terkenal di dunia, menghadirkan audio yang begitu hidup ke PC notebook, menggunakan protokol dan codec untuk pemrosesan suara yang paling akurat, konstruksi speaker istimewa dan ruang resonansi yang lebih besar untuk hasil yang tak tertandingi – bagaikan pergi ke sebuah konser, ketepatan suaranya menghidupkan kembali setiap vokal melalui teknologi pemerkaya suara yang canggih. 
                               </p>
                               <h2>GeForce Terdedikasi!</h2>
                               <p>
                                   Grafis terdedikasi NVIDIA® GeForce® GT 540M terbaru membuat perbedaan yang sangat besar dalam kelancaran visual. Meningkatkan performa, menampilkan gambar yang lebih detil untuk judul-judul game terbaru di PC, ditambah lagi dengan akselerasi video berdefinisi tinggi. Dengan mengambil alih beban CPU dan menyediakan tenaga untuk memproses grafis, GPU DirectX 11 yang berbasiskan Fermi ini meningkatkan pengalaman anda lebih daripada PC portabel biasa. 
                               </p>
                               <h2>USB 3.0 - 10x lebih cepat</h2>
                               <p>Kini dilengkapi dengan USB 3.0 untuk kecepatan sepuluh kali lipat USB 2.0, sehingga seluruh file dan konten Anda dapat dikelola dan backup dengan cepat dan lancar. Ucapkan selamat tinggal pada waktu menunggu yang membosankan, bahkan film Blu-ray 25GB hanya memerlukan waktu tak lebih dari 70 detik untuk diproses.
*Kecepatan USB 3.0 yang ditampilkan adalah spesifikasi komponen. Kecepatan sebenarnya tergantung pada konfigurasi spesifik dan alat yang digunakan. </p>
                            </div>
                        </div>              
        
   
        
        <div class="clear"></div>
        </div>
              
      
      
    
    </div>

