<!-- DataTales Example -->
<div class="card shadow mb-5">
    <div class="card-header py-3">
    
<div class="p-3">
<div class="row row-cols-1 row-cols-md-3 g-4 pt-3">
  <?php
  validation_errors();
  if($detailaduan[0]['status']=='0'){
    $status='menunggu';
  }else{
    $status=$detailaduan[0]['status'];
  }

      echo '
      <div class="card">
        <img src="'.base_url('img/').$detailaduan[0]['foto'].'" class="card-img-top" alt="foto">
        <div class="card-body">
          <h5 class="card-title">Laporan :</h5>
          <p class="card-text">'.$detailaduan[0]['isi_laporan'].'</p>
          <p class="card-text">Status : '.$status.'</p></div>';
          foreach($tampil_tanggapan as $tt){
            echo'<div class="card-footer">
          <p>'.$tt['tgl_tanggapan'].'</p>
          <p>'.$tt['tanggapan'].'</p>
          </div>
          </div>';
          }
    ?>
  </div>
  </div>
</div>
</div>