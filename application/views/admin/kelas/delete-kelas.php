<!-- /**
 * @Author: Moch Faizal Ansyori
 * @Date:   2017-06-13 14:23:14
 * @Last Modified by:   Moch Faizal Ansyori
 * @Last Modified time: 2017-06-18 11:58:56
 */
 -->
<!-- Modal -->
<form class="cmxform form-horizontal" id="commentForm" method="post" action="<?php echo site_url('Kelas/delete'); ?>">
<div id="delete" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="color: white;background-color:#F13F3F">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
         <!-- BEGIN FORM-->
            <div class="control-group ">
                <label for="firstname" class="control-label">Tingkatan Kelas</label>
                <div class="controls">
                    <label class="control-label" style="font-weight: bold;">: <?php echo $row['tingkatan_kelas']; ?></label>
                    <input type="hidden" value="<?php echo $row['id_kelas']; ?>" name="id_">
                </div>
            </div>
            <div class="control-group ">
                <label for="firstname" class="control-label">Nama Kelas</label>
                <div class="controls">
                    <label class="control-label" style="font-weight: bold;">: <?php echo $row['nama_kelas']; ?></label>
                </div>
            </div>
        <!-- END FORM-->
      </div>
      <div class="modal-footer">
      	<button class="btn btn-danger" type="submit"><i class="icon-trash"></i> Hapus</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</form>