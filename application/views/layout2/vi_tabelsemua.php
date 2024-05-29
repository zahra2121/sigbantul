        <!-- TABEL BLACKSPOT -->
        <div class="card-deck">   
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <div class="card-body">
                  <a href="<?= base_url() ?>index.php/laporanfpdf">
                  <button type="button" class="btn btn-dark btn-icon-text float-right">
                    Print Blackspot
                    <i class="mdi mdi-printer btn-icon-append"></i>                                                                              
                  </button></a>

                  <a href="<?= base_url() ?>index.php/kasusfpdf">
                  <button type="button" class="btn btn-success btn-icon-text float-right">
                    Print Kasus
                    <i class="mdi mdi-printer btn-icon-append"></i>                                                                              
                  </button></a>
                  
                  <div class="demo-table-responsive"><br>
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                      <thead class="bg-dark text-white">
                        <tr>
                          <th>No.</th>
                          <th>Tahun</th>
                          <th>Kecamatan</th>
                          <th>Alamat</th>
                          <th>Status Area</th>
                          <th>Detail</th>
                        </tr>
                      </thead>
                      <tbody>
                            <?Php 
                              $Count = 0;
                              foreach ($tabelsemua as $Row) {
                                  $Count = $Count + 1;
                            ?>
                        <Tr>
                            <Td><?php echo $Count?></Td>
                            <Td><?Php echo $Row->tahun ?></Td>
                            <Td><?Php echo $Row->kecamatan ?></Td>
                            <Td><?Php echo $Row->daerah_jalan ?></Td>
                            <Td>
                                <?Php
                                  if($Row->status == '0' or $Row->aek > $Row->ucl){
                                    echo "<label class='badge badge-danger' name='0'>DAERAH RAWAN</label>";
                                  }
                                  elseif($Row->status == '1' or $Row->aek < $Row->ucl){
                                    echo "<label class='badge badge-success' name='1'>BUKAN DAERAH RAWAN</label>";
                                  }else{
                                    echo "<label class='badge badge-warning' name='2'>HATI-HATI</label>";
                                  }
                                ?>
                                <!-- 
                                  EAK > UCL Rawan
                                  EAK < UCL Tidak Rawan-->
                            </Td>
                            <Td>
                                <a href="<?= base_url('index.php/user/detail/' . $Row->idkasus)?>"><button type="button" class="btn btn-warning">Detail Jalan</button></a>
                                <input type="hidden" name="idkasus" value="<?=$Row->idkasus;?>">
                            </Td>
                        </Tr>
                          <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                </div>
              </div>
            </div>
        </div>