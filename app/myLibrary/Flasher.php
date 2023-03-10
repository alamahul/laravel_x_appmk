<?php

namespace myFlasher;

session_start();
class Flasher {
     public static function setFlash($pesan, $aksi, $type, $fungsi)
     {
          $_SESSION['flash'] = [
               'pesan' => $pesan,
               'aksi' => $aksi,
               'type' => $type,
               'fungsi' => $fungsi
               ];
     }
     public static function setFlash2($pesan, $aksi, $type, $fungsi, $method)
     {
          $_SESSION['flash'] = [
               'pesan' => $pesan,
               'aksi' => $aksi,
               'type' => $type,
               'fungsi' => $fungsi,
               'method' => $method
               ];
     }
     public static function flash()
     {
           if (isset($_SESSION['flash'])) { 
          $pesan = $_SESSION['flash']['pesan'];
          $aksi = $_SESSION['flash']['aksi'];
          $type = $_SESSION['flash']['type'];
          $fungsi = $_SESSION['flash']['fungsi'];
         ?>
               
               <div class="modal" tabindex="-1" id="messageModal">
                    <div class="modal-dialog modal-dialog-centered">
                         <div class="modal-content border-2 border-<?= $type ?>">
                              <div class="modal-header bg-<?= $type ?>">
                                   <h5 class="modal-title">Pesan</h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                   </button>
                              </div>
                              <div class="modal-body">
                                   <div class="alert alert-dismissible fade show" role="alert"><?= $fungsi ?>
                                   <strong><?= $pesan ?></strong> <?= $aksi ?>
                                   </div>
                              </div>
                              <div class="modal-footer">
                                   <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Tutup</button>
                              </div>
                         </div>
                    </div>
               </div>
             
        <?php 
          echo "<script>
          $(document).ready(function(){
               $('#messageModal').modal('toggle');
          });
        </script>";
       
     }else{ ?>

      <?php  }
        unset($_SESSION['flash']);
     }
     public static function flash2()
     {
           if (isset($_SESSION['flash'])) { 
          $pesan = $_SESSION['flash']['pesan'];
          $aksi = $_SESSION['flash']['aksi'];
          $type = $_SESSION['flash']['type'];
          $fungsi = $_SESSION['flash']['fungsi'];
          $method = $_SESSION['flash']['method'];
         ?>
               
               <div class="modal" tabindex="-1" id="messageModal">
                    <div class="modal-dialog modal-dialog-centered">
                         <div class="modal-content border-2 border-<?= $type ?>">
                              <div class="modal-header bg-<?= $type ?>">
                                   <h5 class="modal-title">Pesan</h5>
                              </div>
                              <div class="modal-body">
                                   <div class="alert alert-dismissible fade show" role="alert"><?= $fungsi ?>
                                   <strong><?= $pesan ?></strong> <?= $aksi ?>
                                   </div>
                              </div>
                              <div class="modal-footer">
                                   <a class="btn btn-primary btn-block" href="<?= BASEURL ?>/Logout">LOGOUT</a>
                              </div>
                         </div>
                    </div>
               </div>
             
        <?php 
          echo "<script>
          $(document).ready(function(){
               $('#messageModal').modal('toggle');
          });
        </script>";
     }else{ ?>

      <?php  }
        unset($_SESSION['flash']);
     }
}