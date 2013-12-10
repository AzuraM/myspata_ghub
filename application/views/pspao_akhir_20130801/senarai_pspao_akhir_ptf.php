
     <div class="widget-body">
                  <ul class="breadcrumb-beauty">
                    <li>
                      <a href="<?php echo site_url('main')?>">
                        Fungsi
                      </a> 
                    </li>
                    <li>
                      <a href="#">
                        Perangcangan
                      </a>  
                    </li>
                    <li>
                      <a href="#">
                        Pelan
                      </a> 
                    </li>
                    <li>
                      <a href="#">
                        PSPA(O)
                      </a>   
                    </li>
                  </ul>
    </div>
    <!--END breadcrumb-->
    <br />
		<div class="widget-body">
                    <ul class="nav nav-tabs no-margin myTabBeauty">
                    <li class="active"><a href="<?php echo site_url('pspao/senarai_pspao_akhir_ptf')?>" data-original-title="">PSPA(O)</a></li>
                    <li class=""><a href="<?php echo site_url('ptra/senarai_ptf_ptra')?>" data-original-title="">PTRA</a></li>
                    <li class=""><a href="<?php echo site_url('popa/senarai_ptf_popa')?>">POPA</a></li>
                    <li class=""><a href="<?php echo site_url('pnpa/senarai_ptf_pnpa')?>">PNPA</a></li>
                    <li class=""><a href="<?php echo site_url('ppun/senarai_ptf_ppun')?>">PPUN</a></li>
                    <li class=""><a href="<?php echo site_url('pla/senarai_ptf_pla')?>">PLA</a></li>
                  </ul>
                  
          <!--start div tab -->
          <div class="tab-content" id="myTabContent">
            <div id="home" class="tab-pane fade active in">
                <p> 
                    
                    <?php 
                    $attributes = array(
                        'class' => 'form-horizontal no-margin', 
                         'name' => 'senarai_pspao_akhir_ptf',
                           'id' => 'senarai_pspao_akhir_ptf',
                        );
                    echo form_open('pspao/senarai_pspao_akhir_ptf',$attributes); ?>
                    
                    
                 <!--start div panel PSPAO -->
                  <div class="row-fluid">
                    <div class="span12">
                    <div class="widget">
                      <div class="widget-header">
                      <div class="title">
                      <span class="fs1" aria-hidden="true" data-icon="&#xe022;"></span> Pelan Strategi Pengurusan Aset (PSPAO) Akhir
                      </div>
                      </div> 
                      <form class="form-horizontal no-margin">
                      <div class="widget-body">
                        <div class="control-group">
                        <label class="control-label">Tahun</label>
                         <div class="controls">
                         <?php echo form_error('tahun'); ?> 
                         <?php echo form_dropdown('tahun', $year_list, 'id="tempoh_mula"');?>
                      </div></div>

<?php /*
                        <div class="control-group">
                        <label class="control-label">Kementerian</label>
                        <div class="controls"><?php
                          
                          $data = array(
                            'name'        => 'kementerian',
                            'id'          => 'kementerian',
                            'value'       => '',
                            'maxlength'   => '100',
                            'size'        => '50',
                            'class'       => 'input-large',
                            'placeholder' =>  'Kementerian Kerja Raya',
                          );

                          echo form_input($data);
                          
                          ?></div>
                        </div>
*/?>
                   
                        <div class="control-group">
                        <label class="control-label">Jabatan/Agensi</label>
                        <div class="controls">
                            <?php echo form_error('jabatan'); ?> 
                          <?php echo form_dropdown('jabatan', $jabatan, 'id="jabatan"');?>                    
                        </div>
                        </div>
                    
<?php /*
                        <div class="control-group">
                          <label class="control-label">Premis</label>
                        <div class="controls">
                            <?php echo form_error('premis'); ?>
                          <?php
                          
                          $data = array(
                            'name'        => 'premis',
                            'id'          => 'premis',
                            'value'       => '',
                            'maxlength'   => '100',
                            'size'        => '50',
                            'class'       => 'input-large',
                            'placeholder' =>  '',
                          );

                          echo form_input($data);
                          
                          ?>
                        </div>
                        </div>

                        <div class="control-group">
                          <label class="control-label">No DPA</label>
                        <div class="controls">
                            <?php echo form_error('no_dpa'); ?>
                         <?php
                          
                          $data = array(
                            'name'        => 'no_dpa',
                            'id'          => 'noDPA',
                            'value'       => '',
                            'maxlength'   => '100',
                            'size'        => '50',
                            'class'       => 'input-large',
                            'placeholder' =>  '',
                          );

                          echo form_input($data);
                          
                          ?>
                        </div>
                        </div>
*/?>
                    
                        <div class="control-group">
                          <label class="control-label">Status</label>
                        <div class="controls">
                          <?php echo form_error('status'); ?> 
                          <?php echo form_dropdown('status', $status, 'id="status_id"');?>
                        </div>
                        </div>
                    
                      <div class="control-group">
                        <label class="control-label">Kata Carian</label>
                      <div class="controls">
                          <?php echo form_error('katacarian'); ?> 
                         <?php
                          
                          $data = array(
                            'name'        => 'katacarian',
                            'id'          => 'katacarian',
                            'value'       => '',
                            'maxlength'   => '100',
                            'size'        => '50',
                            'class'       => 'input-large',
                            'placeholder' =>  '',
                          );

                          echo form_input($data);
                          
                          ?>
                      </div>
                      </div>
                 
                      <div class="control-group ">
                          <?php
        $seterusnya = array(
            'name'    => '',
            'id'      => '',
            'class'   => 'rounded pull-right ',
            'value'   => '',
            'content' => ' Carian',
            'type'    => 'submit',
            'data-icon' => '&#xe07f;'
        );

        echo form_button($seterusnya);
        
        ?>
                       
                      </div>
</div>
 <?php  echo form_close();?>
                    <!--end panel PSPAO -->
                    
                    
                    
                    </div></div></div>

              <!--start panel Senarai -->
                <div class="row-fluid">
                <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                  <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Senarai PSPA(O)
                  </div>
                  </div>
                <div class="widget-body">
                        <div class="widget-body">
                           
                      <ul class="icomoon-icons-container">
                      	<a href="<?php echo site_url('pspao/pspao_akhir_baru') ?>"><li>
                      	  <span class="fs1" aria-hidden="true" data-icon="&#xe102;"></span>
                      	</li></a>
                      </ul><label class="tambah">Tambah PSPA(O) Baru</label>                      

                      <div id="dt_example" class="example_alt_pagination">

                      <?php echo $this->table->generate($dataku); ?>
                       <div id="data-table_info" class="dataTables_info">Memaparkan <?php echo $this->uri->segment(3)+5; ?> dari <?php echo count($this->pspao_akhir_model->get_data_dummy()) ?> senarai
                       </div><?php echo $this->pagination->create_links(); ?>
 </div>
                  
                <!--end panel Senarai --> 
                 <div class="clearfix"></div>
                </div>
                </div>
                </div> 
                    

               <!--end div tab -->
                </div>  
                </div>

              <!--end widget-body -->
                </div>
          </div>

      

      