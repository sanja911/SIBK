<!-- /**
 * @Author: Moch Faizal Ansyori
 * @Date:   2017-06-12 20:26:50
 * @Last Modified by:   Moch Faizal Ansyori
 * @Last Modified time: 2017-06-13 22:07:28
 */
 -->
<!-- Modal -->
<form class="cmxform form-horizontal" id="commentForm" method="post" action="<?php echo site_url('pelanggaran/update'); ?>">
<div id="update" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="color: white;background-color:#fb9800">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
         <!-- BEGIN FORM-->
            <div class="control-group ">
                <label for="firstname" class="control-label">Nama Kategori</label>
                <div class="controls">
                    <input class="span12 " value="<?php echo $row['nama_pelanggaran']; ?>" name="nama" type="text" autocomplete="off" required />
                </div>
            </div>

             <div class="control-group">
                <label class="control-label">Kategori</label>
                <div class="controls">
                    <select required data-placeholder="- Pilih Kategori - " class="chzn-select-deselect span12" tabindex="-1" id="selCSI" name="idkategori">
                        <option value=""></option>
                        <?php foreach ($kategori as $record) { ?>
                          <option <?php if ($row['id_kategori_pelanggaran']==$record->id_kategori_pelanggaran) {
                            echo "selected";
                          } ?>
                          value="<?php echo $record->id_kategori_pelanggaran; ?>" 
                          ><?php echo $record->nama_kategori_kategori_pelanggaran; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="control-group ">
                <label for="firstname" class="control-label">Point</label>
                <div class="controls">
                    <input required class="span2" style="text-align: right;" value="<?php echo $row['point_pelanggaran']; ?>" name="point" type="text" autocomplete="off" onkeypress="return hanyaAngka(event)" required />
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