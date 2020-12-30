<!-- Add -->
<div class="modal fade" id="sc_add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"><b>Add Sub Category</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
             
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="subcategory_add.php">
                <input type="hidden" class="subcatid" name="id">
                <div class="form-group">
                    <label for="edit_name" class="col-sm-3 control-label" >Category <span style="color: red;">*</span></label>

                    <div class="col-sm-9">
                      <select class="form-control select2" style="width: 100%;" name="category" id="maincategory" required>
                        <option value="" selected>- Select -</option>

                      </select>
                    </div>

                </div>
                <div class="form-group">
                    <label for="edit_name" class="col-sm-6 control-label">Sub Category <span style="color: red;">*</span></label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="subcat_name" name="subcat_name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_name" class="col-sm-3 control-label">Descriptions</label>

                    <div class="col-sm-9">
                      <!-- <input type="text" class="form-control" id="subcat_name" name="subcat_name"> -->
                      <textarea class="form-control" name="desc_subcat"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="subcat_add"><i class="fa fa-check-square-o"></i> Add</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="sc_edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"><b>Edit Sub Category</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
             
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="subcategory_edit.php">
                <input type="hidden" class="subcatid" name="id">
                <div class="form-group">
                    <label for="edit_name" class="col-sm-3 control-label" >Category</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="cat_name" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_name" class="col-sm-6 control-label">Sub Category</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="sc_name" name="subcat_name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_name" class="col-sm-3 control-label">Descriptions</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="desc_subcat" name="desc_subcat"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="subcat_edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="sc_delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"><b>Deleting...</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
             
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="subcategory_delete.php">
                <input type="hidden" class="subcatid" name="id">
                <div class="text-center">
                    <p>DELETE CATEGORY</p>
                    <h2 class="bold catname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="sc_delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>
