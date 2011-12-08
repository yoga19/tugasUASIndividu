
        
        <div class="center_content_pages">
        
              <div class="financial-application-form">
             <h2>Hubungi kami</h2>
             
             <p>
                Silahkan masukkan informasi data anda beserta pesan yang ingin anda tanyakan kepada kami:

             </p>
             
                <div class="form">
                    <div class="form_row">
                        <?php echo form_open('web/message') ?>
                    <label>Nama:</label>
                    <input type="text" name="tNama" class="main_input" required/>
                    </div>
                    
                    <div class="form_row">
                    <label>E-Mail:</label>
                    <input type="email" name="tEmail" class="main_input" required/>
                    </div> 
                    
                    <div class="form_row">
                    <label>Nomor Telepon:</label>
                    <input type="text" name="tTlp" class="main_input" pattern="[0-9.]+" required/>
                    </div> 
                                        
                      
                    <div class="form_row">
                    <label>Pesan:</label>
                    <textarea class="main_textarea" required></textarea>
                    </div> 
                    
                        
                    <div class="form_row">
                     <input type="submit" name=bSubmit"" class="submit" value="Kirim" />
                    </div>
                <?php echo form_close() ?>
                </div>
             </div>
            
            
        
        
        
   
        
        <div class="clear"></div>
        </div>
              
      
      
    
    </div>

