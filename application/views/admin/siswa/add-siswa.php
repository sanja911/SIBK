<!-- /**
 * @Author: Moch Faizal Ansyori
 * @Date:   2017-06-12 20:26:50
 * @Last Modified by:   Moch Faizal Ansyori
 * @Last Modified time: 2017-07-05 18:24:51
 */
 -->
<!-- Modal -->
<?php

    $kelasjurusan = $this->M_main->get_where('kelastetap','id_kelasjurusan',$xyz)->row_array();
?>
<form class="cmxform form-horizontal" id="commentForm" method="post" action="<?php echo site_url('Siswa/add'); ?>">
<input type="hidden" value="<?php echo $xyz; ?>" name="idkelassiswa">
<div id="add" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="color: white;background-color:#87bb33">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">
            Tambah Siswa <i><b>[Kelas 
            <?php 
                echo $kelasjurusan['tingkatan_kelas'].' '.$kelasjurusan['nama_jurusan'].' '.$kelasjurusan['urutan_kelasjurusan'];
            ?>
            ]</b></i>            
        </h4>
      </div>
      <div class="modal-body">
         <!-- BEGIN FORM-->
            <div class="control-group ">
                <label for="firstname" class="control-label">NIS</label>
                <div class="controls">
                    <input class="span12 " onKeyPress="return isNumberKey(this)" name="nis" type="text" autocomplete="off"  />
                </div>
            </div>
            <div class="control-group ">
                <label for="firstname" class="control-label">Nama Siswa</label>
                <div class="controls">
                    <input class="span12 " name="nama" type="text" autocomplete="off" required />
                </div>
            </div>
            <div class="control-group ">
                <label for="firstname" class="control-label">Alamat</label>
                <div class="controls">
                    <input class="span12 " name="alamat" type="text" autocomplete="off" required />
                </div>
            </div>
            <div class="control-group ">
                <label for="firstname" class="control-label">Jenis Kelamin</label>
                <div class="controls">
                    <select required class="chzn-select-deselect span12" tabindex="-1" id="selCSI" name="jenkel">
                        <option value="">- Pilih Jenis Kelamin -</option>
                        <option value="L">Laki - Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="control-group ">
                <label for="firstname" class="control-label">NO HP</label>
                <div class="controls">
                    <input class="span12 " name="hp" type="text" autocomplete="off" required />
                </div>
            </div>

        <!-- END FORM-->
      </div>
      <div class="modal-footer">
      	<button class="btn btn-success" type="submit"><i class="icon-save"></i> Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</form>
<script>
	$(document).ready(function(){
		// $("#commentForm").validate();
	});
</script>