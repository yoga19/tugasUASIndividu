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
                                            <a class="thumb" name="A53SV-1" href="/dpw2/images/ori/2/1.JPG" title="ASUS LAMBORGHINI">
                                                <img src="/dpw2/images/thumb/2/1.JPG"alt="ASUS LAMBORGHINI" />
                                            </a>
                                            <div class="caption">
                                                <div class="download">                                                
                                                </div>
                                                <div class="image-title">ASUS LAMBORGHINI</div>
                                                <div class="image-desc">Laptop kelas premium </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="thumb" name="A53SV-2" href="/dpw2/images/ori/2/2.JPG" title="ASUS LAMBORGHINI">
                                                <img src="/dpw2/images/thumb/2/2.JPG"alt="ASUS LAMBORGHINI" />
                                            </a>
                                            <div class="caption">
                                                <div class="download">                                                
                                                </div>
                                                <div class="image-title">ASUS LAMBORGHINI</div>
                                                <div class="image-desc">Laptop kelas premium.</div>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="thumb" name="A53SV-3" href="/dpw2/images/ori/2/3.JPG" title="ASUS LAMBORGHINI">
                                                <img src="/dpw2/images/thumb/2/3.JPG"alt="ASUS LAMBORGHINI" />
                                            </a>
                                            <div class="caption">
                                                <div class="download">                                                
                                                </div>
                                                <div class="image-title">ASUS LAMBORGHINI</div>
                                                <div class="image-desc">Laptop kelas premium.</div>
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
                                        <td>Intel® Core™ i7 2670QM/2630QM Processor</td>
                                    </tr>
                                    <tr>
                                        <td>Chipset</td>
                                        <td>Intel® HM65 Express Chipset</td>
                                    </tr>
                                    <tr>
                                        <td>Memori</td>
                                        <td>DDR3 1333 MHz SDRAM, 8 GB, 4 x SO-DIMM socket for expansion up to 16 G SDRAM</td>
                                    </tr>
                                    <tr>
                                        <td>Display </td>
                                        <td>15.6" 16:9 Full HD (1920x1080) LED Backlight</td>
                                    </tr>
                                    <tr>
                                        <td>Grafis  </td>
                                        <td>NVIDIA® GeForce® GTX 560M dengan 3GB GDDR5 VRAM</td>
                                    </tr>
                                    <tr>
                                        <td>Storage</td>
                                        <td>2.5" 9.5mm SATA 1TB SSH</td>
                                    </tr>
                                    <tr>
                                        <td>Drive Optik </td>
                                        <td>Blu-Ray DVD Combo</td>
                                    </tr>
                                    <tr>
                                        <td>Card Reader </td>
                                        <td>5 -in-1 card reader ( SD/ MS/ MS Pro/ xD/ MMC)</td>
                                    </tr>
                                    <tr>
                                        <td>Kamera  </td>
                                        <td>2 Mega Pixel web camera</td>
                                    </tr>                                    
                                    <tr>
                                        <td>Networking  </td>
                                        <td>10/100/1000 Base T<br>
                                            Terintegrasi Bluetooth™ V2.1+EDR (Optional) <br>                                                                                       
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Interface</td>
                                        <td>1 x Microphone-in jack <br>
                                            1 x Headphone-out jack (SPDIF)<br>
                                            1 x VGA port/Mini D-sub 15-pin for external monitor<br>                                            
                                            1 x USB 3.0 port(s) <br>
                                            3 x USB 2.0 port(s) <br>
                                            1 x RJ45 LAN Jack for LAN insert <br>
                                            1 x HDMI <br>                                             
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Audio   </td>
                                        <td>Built-in Speakers And Microphone<br>
                                            Terintegrasi Azalia compliant audio chip, dengan efek 3D<br>                                                                                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Baterai </td>
                                        <td>Baterai 8Cells : 5200 mAh 75 Whrs</td>
                                    </tr>
                                    <tr>
                                        <td>Adaptor Daya    </td>
                                        <td>Output :19.5 V DC, 7.7 A, 150 W<br>
                                            Input : 100 -240 V AC, 50/60 Hz universal
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dimensi </td>
                                        <td>40.2 x 30.9 x 5 ~5.79 cm (WxDxH)</td>
                                    </tr>
                                    <tr>
                                        <td>Berat   </td>
                                        <td>3.82 kg (dengan baterai 8 cell)</td>
                                    </tr>
                                </table>                                                                 
                            </div>
                            <div id="ulasan">
                               <h2>30 Days Bright Dot Return</h2>
                               <p>
                                   Video Magic membuat tampilan visual menjadi lebih baik dengan kualitas panel LCD terbaik yang tersedia, dibuat, dites dan djual kepada standar ASUS yang super tinggi, sehingga kualitas gambar yang absolut terbaik dapat diberikan.

                                    *ASUS sangat percaya dengan kualitas panel LCD notebooknya, menawarkan servis/penggantian dari panel 30 hari sejak tanggal pembelian apabila ada bright-dot.
                               </p>
                               <h2>Nikmati kecepatan dalam gaya baru dengan ASUS-Automobili Lamborghini VX7</h2>
                               <p>
                                   Desain sangat mewah yang terinspirasi dari mobil super Italia yang terkenal di dunia kini berpadu dengan keahlian teknologi ASUS. Notebook ASUS paling bertenaga saat ini, siap untuk menemani Anda mencapai tujuan.  
                               </p>
                               <h2>Kekuatan Terdepan</h2>
                               <p>
                                   Kini memimpin jajaran eksklusif seri joint-venture ASUS-Automobili Lamborghini, VX7 memberikan keceriaan komputasi yang belum pernah ada sebelumnya, penuh dengan teknologi termutakhir dan kekuatan yang memukau untuk multimedia, bermain game, dan produktivitas. Ditambah lagi, tampilannya yang begitu seksi! 
                               </p>
                               <h2>Tampil Memukau</h2>
                               <p>Dengan arahan desain dari Automobili Lamborghini dan Murcielago LP640. VX7 mempertahankan aerodinamika dan kesan agresif sebagai gaya yang tampil beda dari yang lain. Menarik perhatian bagi masyarakat. Bahan baku premium, tekstur ramping dan warna berani melengkapi notebook ini, meningkatkan kecepatan komputasi kelas tinggi Anda. </p>
                            </div>
                        </div>              
        
   
        
        <div class="clear"></div>
        </div>
              
      
      
    
    </div>

