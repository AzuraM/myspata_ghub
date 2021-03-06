    <!--breadcrumb-->
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
                    <li>
                      <a href="#">
                        PTRA
                      </a>   
                    </li>
                  </ul>
    </div>
    <!--END breadcrumb-->
    <br />
    <!--tab navigation--> 
    <div class="widget-body">
                  <ul class="nav nav-tabs no-margin myTabBeauty">
                    <li class=""><a href="#profile" data-original-title="">PSPA(O)</a></li>
                    <li class="active"><a href="#profile" data-original-title="">PTRA</a></li>
                    <li class=""><a href="<?php echo site_url('main/senarai_ptf_popa')?>">POPA</a></li>
                    <li class=""><a href="<?php echo site_url('main/senarai_ptf_pnpa')?>">PNPA</a></li>
                    <li class=""><a href="<?php echo site_url('main/senarai_ptf_ppun')?>">PPUN</a></li>
                    <li class=""><a href="<?php echo site_url('main/senarai_ptf_pla')?>">PLA</a></li>
                  </ul>
                  
  <!--tab section-->
  <div class="tab-content" id="myTabContent">
    <div id="home" class="tab-pane fade active in">
    <!--status info-->
    <div class="alert alert-block alert-info fade in">
            <button data-dismiss="alert" class="close" type="button">
              ×
            </button>
              <h5 style="color:#FF0000">90%
              <a class="alert-heading">dokumen ini telah dilengkapkan</a>
              </h5>
    </div>
    <!--/.END status info-->
      <!--main container-->
      <div class="main-container">

        <?php 
                    $attributes = array(
                        'class' => 'form-horizontal no-margin', 
                         'name' => 'summary_pp_ppun',
                           'id' => 'summary_pp_ppun',
                        );
                    echo form_open('main/summary_pp_ppun',$attributes); ?>
      	 <!--panel 1-->  
         <div class="row-fluid">
            <div class="span12">
              <div class="widget">
                <div class="widget-header">
                  <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe022;"></span> Pelan Penerimaan Aset (PTRA)
                  </div>
                </div>
                <div class="widget-body">
                  
                  <div class="control-group">
                      <label class="control-label" for="tahun">
                        Tahun
                      </label>
                      <div class="controls controls-row">
                        <?php echo form_error('tahun'); ?> 
                        <?php echo form_dropdown('tahun', $year_list, 'id="tahun"')?>
                      </div>
                    </div>
                  
                    <div class="control-group">
                      <label class="control-label">
                        Kementerian
                      </label>
                      <div class="controls">
                        <input class="input-xlarge" type="text" placeholder="Kementerian Kerja Raya" disabled name="kementerian" id="kementerian">
                      </div>
                    </div>                   
                    <div class="control-group">
                      <label class="control-label">
                        Jabatan/Agensi
                      </label>
                      <div class="controls">
                        <input class="input-xlarge" type="text" placeholder="Jabatan Kerja Raya" disabled name="jab_agensi" id="jab_agensi">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">
                        Premis
                      </label>
                      <div class="controls">
                        <input class="input-xlarge" type="text" placeholder="Pejabat Kerajaan" disabled name="premis" id="premis">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">
                        No DPA
                      </label>
                      <div class="controls">
                        <input class="input-large" type="text" placeholder="1101MYS.050700.BB0001" disabled name="nodpa" id="nodpa">
                      </div>
                    </div>                    
                  <?php  echo form_close();?> 
                </div>
              </div>
            </div>
         </div>
         <!--/.END panel 1-->

    <!--panel 2-->  
        <div class="row-fluid">
          <div class="span12">
            <div class="widget">
                <div class="widget-header">
                <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Sila Kemaskini Maklumat Pra Pendaftaran Premis</div>
              </div>
                <!--table section-->              
                <div class="widget-body"> 
              <!--table-->
                  <table class="table table-condensed table-striped table-bordered table-hover no-margin">
                    <thead>
                      <tr>
                        <th style="width:2%">
                          Bil
                        </th>
                        <th style="width:25%" class="hidden-phone">Nama Borang</th>
                        <th style="width:8%" class="hidden-phone">Tindakan</th>
                        <th style="width:8%" class="hidden-phone">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <span class="name">
                            1.0</span>
                        </td>
                        <td class="hidden-phone">Pra Pendaftaran Premis</td>
                        <td class="hidden-phone">                       
                        <ul class="icomoon-icons-container">
                        <li class="rounded"><a href="<?php echo site_url('main/status_premis_ptra')?>"><span class="fs1" aria-hidden="true" data-icon="&#xe005;"></span></a></li></ul>                
                        <td class="hidden-phone">
                          <span class="badge badge-success">
                            Lengkap
                          </span>
                        </td>                    
                      </td>
                      </tr>
                    </tbody>
                  </table>
                  <!--/.END table-->               
            </div>
                <!--/.END table section-->
            </div>
          </div>
        </div>
        <!--/.END panel 2-->

		<!--panel 3-->  
        <div class="row-fluid">
          <div class="span12">
            <div class="widget">
                <div class="widget-header">
                <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Sila Kemaskini Maklumat Berikut</div>
              </div>
              	<!--table section-->            	
                <div class="widget-body"> 
              <!--table-->
                  <table class="table table-condensed table-striped table-bordered table-hover no-margin">
                    <thead>
                      <tr>
                        <th style="width:2%">
                          Bil
                        </th>
                        <th style="width:25%" class="hidden-phone">Kandungan</th>
                        <th style="width:8%" class="hidden-phone">Tindakan</th>
                        <th style="width:8%" class="hidden-phone">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <span class="name">
                            1.0</span>
                        </td>
                        <td class="hidden-phone">Pendahuluan</td>
                        <td class="hidden-phone">                       
                        <ul class="icomoon-icons-container">
                        <li class="rounded"><span class="fs1" aria-hidden="true" data-icon="&#xe005;"></span></li></ul>                
                        <td class="hidden-phone">
                          <span class="badge badge-success">
                            Lengkap
                          </span>
                        </td>                    
                      </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="name">
                            2.0</span></td>
                        <td class="hidden-phone">Objektif</td>
                        <td class="hidden-phone">                         
                        <ul class="icomoon-icons-container">
                        <li class="rounded"><span class="fs1" aria-hidden="true" data-icon="&#xe005;"></span></li></ul>
                        <td class="hidden-phone">
                          <span class="badge badge-success">
                            Lengkap
                          </span>
                        </td>
                      </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="name">
                            3.0</span></td>
                        <td class="hidden-phone">Carta Organisasi dan Pelan Komunikasi</td>
                        <td class="hidden-phone">                         
                        <ul class="icomoon-icons-container">
                        <li class="rounded"><span class="fs1" aria-hidden="true" data-icon="&#xe005;"></span></li></ul> 
                        <td class="hidden-phone">
                          <span class="badge badge-success">
                            Lengkap
                          </span>
                        </td>                   
                      </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="name">
                            4.0</span></td>
                        <td class="hidden-phone">Skop dan Aktiviti Penerimaan Aset</td>
                        <td class="hidden-phone">                         
                        <ul class="icomoon-icons-container">
                        <li class="rounded"><span class="fs1" aria-hidden="true" data-icon="&#xe005;"></span></li></ul>  
                        <td class="hidden-phone">
                          <span class="badge badge-success">
                            Lengkap
                          </span>
                        </td>                  
                      </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="name">
                            5.0</span></td>
                        <td class="hidden-phone">Penyediaan Keperluan Sumber Aktiviti Penerimaan Aset</td>
                        <td class="hidden-phone">                         
                        <ul class="icomoon-icons-container">
                        <li class="rounded"><span class="fs1" aria-hidden="true" data-icon="&#xe005;"></span></li></ul>
                        <td class="hidden-phone">
                          <span class="badge badge-success">
                            Lengkap
                          </span>
                        </td>                    
                      </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="name">
                            6.0</span></td>
                        <td class="hidden-phone">Kawalan Rekod Penerimaan Aset</td>
                        <td class="hidden-phone">                         
                        <ul class="icomoon-icons-container">
                        <li class="rounded"><span class="fs1" aria-hidden="true" data-icon="&#xe005;"></span></li></ul> 
                        <td class="hidden-phone">
                          <span class="badge">
                            Deraf
                          </span>
                        </td>                   
                      </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="name">
                            7.0</span></td>
                        <td class="hidden-phone">Rujukan</td>
                        <td class="hidden-phone">                         
                        <ul class="icomoon-icons-container">
                        <li class="rounded"><span class="fs1" aria-hidden="true" data-icon="&#xe005;"></span></li></ul> 
                        <td class="hidden-phone">
                          <span class="badge">
                            Deraf
                          </span>
                        </td>                   
                      </td>
                      </tr>
                    </tbody>
                  </table>
                  <!--/.END table-->               
            </div>
                <!--/.END table section-->
            </div>
          </div>
        </div>
        <!--/.END panel 3-->
        
        <!--panel 4-->  
        <div class="row-fluid">
          <div class="span12">
            <div class="widget">
                <div class="widget-header">
                <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Sila Kemaskini Borang Berikut</div>
              </div>
              	<!--table section-->            	
                <div class="widget-body"> 
              <!--table-->
                  <table class="table table-condensed table-striped table-bordered table-hover no-margin">
                    <thead>
                      <tr>
                        <th style="width:2%">
                          Bil
                        </th>
                        <th style="width:25%" class="hidden-phone">Nama Borang</th>
                        <th style="width:8%" class="hidden-phone">Tindakan</th>
                        <th style="width:8%" class="hidden-phone">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <span class="name">
                            1</span>
                        </td>
                        <td class="hidden-phone">JKR.PATA.F6/1a</td>
                        <td class="hidden-phone">                       
                        <ul class="icomoon-icons-container">
                        <li class="rounded"><span class="fs1" aria-hidden="true" data-icon="&#xe005;"></span></li></ul>                
                        <td class="hidden-phone">
                          <span class="badge badge-success">
                            Lengkap
                          </span>
                        </td>                    
                      </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="name">
                            2</span></td>
                        <td class="hidden-phone">JKR.PATA.F6/1b</td>
                        <td class="hidden-phone">                         
                        <ul class="icomoon-icons-container">
                        <li class="rounded"><span class="fs1" aria-hidden="true" data-icon="&#xe005;"></span></li></ul>
                        <td class="hidden-phone">
                          <span class="badge badge-success">
                            Lengkap
                          </span>
                        </td>
                      </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="name">
                            3</span></td>
                        <td class="hidden-phone">JKR.PATA.F6/1c</td>
                        <td class="hidden-phone">                         
                        <ul class="icomoon-icons-container">
                        <li class="rounded"><span class="fs1" aria-hidden="true" data-icon="&#xe005;"></span></li></ul> 
                        <td class="hidden-phone">
                          <span class="badge badge-success">
                            Lengkap
                          </span>
                        </td>                   
                      </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="name">
                            4</span></td>
                        <td class="hidden-phone">JKR.PATA.F6/1d</td>
                        <td class="hidden-phone">                         
                        <ul class="icomoon-icons-container">
                        <li class="rounded"><span class="fs1" aria-hidden="true" data-icon="&#xe005;"></span></li></ul>  
                        <td class="hidden-phone">
                          <span class="badge">
                            Deraf
                          </span>
                        </td>                  
                      </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="name">
                            5</span></td>
                        <td class="hidden-phone">JKR.PATA.F6/1e</td>
                        <td class="hidden-phone">                         
                        <ul class="icomoon-icons-container">
                        <li class="rounded"><span class="fs1" aria-hidden="true" data-icon="&#xe005;"></span></li></ul>
                        <td class="hidden-phone">  
                          <span class="badge">
                            Deraf
                          </span>
                        </td>                   
                      </td>
                      </tr>
                    </tbody>
                  </table>
                  <!--/.END table-->               
            </div>
                <!--/.END table section-->
            </div>
          </div>
        </div>
        <!--/.END panel 4-->

   		          <!--buttons--> 
                <div class="next-prev-btn-container ">
                <div class="widget-body" align="right">
                    <a class="btn btn-danger input-top-margin" href="#" id="error">
                    Batal
                  </a>
                    <a href="<?php echo site_url('main/dokumen_rujukan_ptra')?>" class="btn btn-primary input-top-margin" id="button">
                    Sebelum
                  </a>
                  <a class="btn btn-warning2 input-top-margin" href="#" id="keep">
                    Simpan Deraf
                  </a>
                  <a class="btn btn-success input-top-margin" href="#" id="confirm">
                    Hantar
                  </a>
                </div>
                <!--/.END buttons-->     

      </div>  
      <!--/.END main-container-->               
    </div>                  
  </div>
  <!--/.END tab section-->
    </div>  
    <!--/.END tab navigation-->