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
                                            <a class="thumb" name="A53SV-1" href="/dpw2/images/ori/1/1.JPG" title="ASUS A53SV">
                                                <img src="/dpw2/images/thumb/1/1.JPG"alt="ASUS A53SV" />
                                            </a>
                                            <div class="caption">
                                                <div class="download">                                                
                                                </div>
                                                <div class="image-title">ASUS A53SV</div>
                                                <div class="image-desc">Laptop Gaming dengan harga yang terjangkau. </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="thumb" name="A53SV-2" href="/dpw2/images/ori/1/2.JPG" title="ASUS A53SV">
                                                <img src="/dpw2/images/thumb/1/2.JPG"alt="ASUS A53SV" />
                                            </a>
                                            <div class="caption">
                                                <div class="download">                                                
                                                </div>
                                                <div class="image-title">ASUS A53SV</div>
                                                <div class="image-desc">Laptop Gaming dengan harga yang terjangkau. </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="thumb" name="A53SV-3" href="/dpw2/images/ori/1/3.JPG" title="ASUS A53SV">
                                                <img src="/dpw2/images/thumb/1/3.JPG"alt="ASUS A53SV" />
                                            </a>
                                            <div class="caption">
                                                <div class="download">                                                
                                                </div>
                                                <div class="image-title">ASUS A53SV</div>
                                                <div class="image-desc">Laptop Gaming dengan harga yang terjangkau.</div>
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
                                        <td>Intel® Core™ i5 2430M 2.4 GHz ~ 2.9 GHz Processor</td>
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
                                        <td>15.6" 16:9 HD (1366x768) LED Backlight</td>
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
                                        <td>Super-Multi DVD</td>
                                    </tr>
                                    <tr>
                                        <td>Card Reader </td>
                                        <td>4 -in-1 card reader ( SD/ MS/ MS Pro/ MMC)</td>
                                    </tr>
                                    <tr>
                                        <td>Kamera  </td>
                                        <td>0.3 Mega Pixel Fixed web camera</td>
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
                                            Speaker Altec Lansing®<br>                                                                                        
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
                                        <td>37.8 x 25.3 x 2.83 ~3.49 cm (WxDxH)</td>
                                    </tr>
                                    <tr>
                                        <td>Berat   </td>
                                        <td>2.6 kg (dengan baterai 6 cell)</td>
                                    </tr>
                                </table>                                                                 
                            </div>
                            <div id="ulasan">
                               <h2>Desain metalik yang berkelas</h2>
                               <p>
                                   Dilengkapi dengan prosesor Intel® Core™ generasi ke-2 dan warna yang elegan dengan tekstur alumunium premium, seri A terbaru menawarkan kombinasi terbaik dari gaya dan teknologi. Bahan bertekstur alumunium premium yang berkualitas tinggi membuatnya selalu terlihat berkualitas walaupun dalam penggunaan dalam jangka panjang, membuat anda bisa melakukan apa saja pada seri A dengan penuh kepercayaan diri.
                               </p>
                               <h2>Kemampuan prosesor yang luar biasa</h2>
                               <p>
                                   Seri A terbaru datang dengan dilengkapi prosesor Intel® Core™ generasi ke-2, yang sangat optimal untuk digunakan pada notebook dengan kemampuan komputasi yang luar biasa, CPU mobile terbaru ini meningkatkan kinerja multitasking, sehingga anda bisa menyelesaikan perkerjaan lebih banyak pada saat bersamaan, dengan lebih lancar. 
                               </p>
                               <h2>Grafis Super</h2>
                               <p>
                                   Untuk gaming dan grafis, notebook seri A terbaru manghantarkan performa grafis terdedikasi dari NVIDIA®. ASUS A43SA datang dengan NVIDIA® GT 540M yang tersedia untuk output multimedia dan gaming yang mengesankan, dengan memori video 2GB DDR3 untuk visual yang tajam.
                               </p>
                               <h2>Teknologi IceCool membuat tangan anda tetap sejuk</h2>
                               <p>Teknologi IceCool membuat pengalaman komputasi anda selelu terasa nyaman dan dingin walaupun dalam penggunaan jangka panjang. Desain dua sisi motherboard yang eksklusif meletakkan bagian komponen yang panas dibagian bawah dan jauh dari anda. Dikombinasikan dengan ventilasi dan pipa pendingin, membuat telapak tangan dan permukaan mengetik selalu tetap dingin. </p>
                            </div>
                        </div>              
        
   
        
        <div class="clear"></div>
        </div>
              
      
      
    
    </div>

