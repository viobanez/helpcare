<!-- service -->
<div class="modal fade" id="service">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"><b>Service Offered</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <b>Email Address: </b><p id="email"></p>
                <b>Service: </b><p id="serv"></p>
                <b>Category and Rate: </b><p id="desc"></p>
                <b>Date Added: </b><p id="date"></p>
            </div>
            
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"><b>Add New User</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
             
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="users_add.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Age</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="age" name="age" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="address" name="address"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Contact Info</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="contact" name="contact">
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>
<!-- Add Provider -->
<div class="modal fade" id="addnewp">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">
            <b>Add New Provider </b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form role="form" method="POST" action="provider_add.php" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Email <span style="color: red;">*</span></label>
                        <input type="text" class="form-control" name="email" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Password <span style="color: red;">*</span></label>
                        <input type="password" class="form-control" name="password" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Firstname <span style="color: red;">*</span></label>
                        <input type="text" class="form-control" name="firstname" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Lastname <span style="color: red;">*</span></label>
                        <input type="text" class="form-control" name="lastname" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Barangay <span style="color: red;">*</span></label>
                        <input type="text" class="form-control" name="brgy" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <div class="form-group">
                          <label>Street Name <span style="color: red;">*</span></label>
                          <input type="text" class="form-control" name="street_name" required>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>City Name <span style="color: red;">*</span></label>
                        <input type="text" class="form-control" name="city" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <div class="form-group">
                          <label>Birthday <span style="color: red;">*</span></label>
                          <input type="date" class="form-control" id="birthInput" name="birthday" required>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <div class="form-group">
                          <label>Age <span style="color: red;">*</span></label>
                          <input type="text" class="form-control" onclick="calDate()" id="getAge" name="age" required>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Contact Info <span style="color: red;">*</span></label>
                        <input type="text" class="form-control" name="contact" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Provider Photo <span style="color: red;">*</span></label>
                        <input type="file" class="form-control" name="photo" required>
                        <span> - Upload JPEG, PNG File only</span>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Category <span style="color: red;">*</span></label>
                        <!-- <input type="text" class="form-control" name=""> -->.
                        <select class="form-control" name="category" required>
                        <option value="0">-- Select --</option>
                          <?php
                              $conn = $pdo->open();
                              try{
                                $stmt = $conn->prepare("SELECT * FROM category");
                                $stmt->execute();
                                foreach($stmt as $row){
                                  echo "
                                      <option value='".$row['name']."'>".$row['name']."</option>
                                  ";
                                }
                              }
                              catch(PDOException $e){
                                echo $e->getMessage();
                              }
                              $pdo->close();
                            ?>
                          </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Service Offered <span style="color: red;">*</span></label>
                        <input type="text" class="form-control" name="service_cat" required>
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Charge Rate (&#8369;) <span style="color: red;">*</span></label>
                        <input type="text" class="form-control" name="rate" value="" required>
                        <span> - plus 20% for the admin maintenance fee</span>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Service Photo <span style="color: red;">*</span></label>
                        <input type="file" class="form-control" name="service_photo" required>
                        <span> - Upload JPEG, PNG File only</span>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Service Certificate(TESDA or other certificate) <span style="color: red;">*</span></label>
                        <input type="file" class="form-control" name="certificates_photo" required>
                        <span> - Upload JPEG, PNG or PDF File only</span>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Government ID (Indentification Card) <span style="color: red;">*</span></label>
                        <input type="file" class="form-control" name="govid_photo" required>
                        <span> - Upload JPEG, PNG or PDF File only</span>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="addprovider"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit User -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"><b>Edit User</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
             
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="users_edit.php">
                <input type="hidden" class="userid" name="id">
                <div class="form-group">
                    <label for="edit_email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="edit_email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="edit_password" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_firstname" name="firstname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_lastname" name="lastname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_address" class="col-sm-3 control-label">Age</label>

                    <div class="col-sm-9">
                     <input type="text" class="form-control" id="edit_age" name="age">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_address" class="col-sm-3 control-label">Address</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="edit_address" name="address"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_contact" class="col-sm-3 control-label">Contact Info</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_contact" name="contact">
                    </div>
                </div>
              
                

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Provider-->
<div class="modal fade editservice_catserv" id="editservice_cats">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"><b>Edit Provider</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form role="form" method="POST" action="provider_edit.php" enctype="multipart/form-data">
              <input type="hidden" class="userid" name="id">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" id="editmail" name="email">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id="editpassword" name="password">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Firstname</label>
                        <input type="text" class="form-control" id="editfirstname" name="firstname">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Lastname</label>
                        <input type="text" class="form-control" id="editlastname" name="lastname">
                      </div>
                    </div>
                  </div>

                  <!-- <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control"  id="editaddress" name="address"></textarea>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <div class="form-group">
                          <label>Age</label>
                          <input type="text" class="form-control" id="editage" name="age">
                        </div>
                      </div>
                    </div>
                  </div> -->

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Barangay</label>
                        <input type="text" class="form-control" id="editbrgy" name="brgy">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <div class="form-group">
                          <label>Street Name</label>
                          <input type="text" class="form-control"  id="editstreet" name="street_name">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>City Name</label>
                        <input type="text" class="form-control" name="city">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <div class="form-group">
                          <label>Birthday</label>
                          <input type="date" class="form-control editbirth" id="editbirthInput" name="birthday">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <div class="form-group">
                          <label>Age</label>
                          <input type="text" class="form-control editage" onclick="editcalDate()" id="editgetAge" name="age">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Contact Info</label>
                        <input type="text" class="form-control" id="editcontact" name="contact_info">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Service Offered</label>
                        <input type="text" class="form-control" id="editservice" name="service">
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Category</label>
                        <input type="text" class="form-control"  id="service_cate" name="service_cat">
                        <!-- <select class="form-control service_cate" name="category" id="service_catee">
                        <option value="0" id="">-- Select --</option>
                          <//?php
                              $conn = $pdo->open();
                              try{
                                $stmt = $conn->prepare("SELECT * FROM category");
                                $stmt->execute();
                                foreach($stmt as $row){
                                  echo "
                                      <option value='".$row['name']."'>".$row['name']."</option>
                                  ";
                                }
                              }
                              catch(PDOException $e){
                                echo $e->getMessage();
                              }
                              $pdo->close();
                            ?>
                          </select> -->
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Charge Rate (&#8369;)</label>
                        <input type="text" class="form-control" id="editrate" name="rate" value="">
                        <span> - plus 20% for the admin maintenance fee</span>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="editprovi"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"><b>Deleting...</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
             
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="users_delete.php">
                <input type="hidden" class="userid" name="id">
                <div class="text-center">
                    <p>DELETE USER</p>
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Pro Delete -->
<div class="modal fade" id="prodelete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"><b>Deleting...</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
             
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="provider_delete.php">
                <input type="hidden" class="userid" name="id">
                <div class="text-center">
                  
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="prdelete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
             
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="users_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="userid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div> 

<!-- Update Provider Photo -->
<div class="modal fade" id="edit_providerphoto">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
             
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="provider_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="userid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="uploadprovider"><i class="fa fa-check-square-o"></i> Update Provider</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Service Provider Photo -->
<div class="modal fade" id="edit_providerphotoservice">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"><b>Update Service Image</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
             
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="provider_photoservice.php" enctype="multipart/form-data">
                <input type="hidden" class="userid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Service Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="service_photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="uploadproviderservice"><i class="fa fa-check-square-o"></i> Save Image</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Certificate Photo -->
<div class="modal fade" id="edit_providerphotocert">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"><b>Update Certificate</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
             
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="provider_photocert.php" enctype="multipart/form-data">
                <input type="hidden" class="userid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Certificate</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="certificates_photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="uploadprovidercert"><i class="fa fa-check-square-o"></i> Save Image</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Gov ID -->
<div class="modal fade" id="edit_providerphotogov">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"><b>Update Government ID</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
             
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="provider_photogov.php" enctype="multipart/form-data">
                <input type="hidden" class="userid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Government ID</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="govid_photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="uploadprovidergov"><i class="fa fa-check-square-o"></i> Save Image</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Provider Activate -->
<div class="modal fade" id="proactivate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"><b>Application Status</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="users_proactivate.php">
                <input type="hidden" class="userid" name="id">
                <div class="text-center">
                  
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="proactivate"><i class="fa fa-check"></i> Accept</button>
              </form>
            </div>
        </div>
    </div>
</div> 

<!-- Provider Deactivate -->
<div class="modal fade" id="prodeactivate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"><b>Application Status</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="users_prodeactivate.php">
                <input type="hidden" class="userid" name="id">
                <div class="text-center">
                  <input type="text" class="" name="status" value="Rejected">
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="prodeactivate"><i class="fa fa-times"></i> Reject</button>
              </form>
            </div>
        </div>
    </div>
</div> 

<!-- Provider Application Status -->
<div class="modal fade" id="prostatus">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"><b>Application Status</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="users_status.php">
                <input type="hidden" class="userid" name="id">
                <b>Name :</b><h5 class="bold fullname"></h5>

                <div class="text-center">
                  <select class="form-control col-sm-6" name="status">
                    <option value="Processing"> Processing </option>
                    <option value="Rejected"> Rejected </option>
                    <option value="Accepted"> Accepted </option>
                  </select>
                <br>
                    
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="provider_status"><i class="fa fa-times"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div> 

<!-- User activate -->
<div class="modal fade" id="activate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"><b>Activating...</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="users_activate.php">
                <input type="hidden" class="userid" name="id">
                <div class="text-center">
                   
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="activate"><i class="fa fa-check"></i> Activate</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- User deactivate -->
<div class="modal fade" id="deactivate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"><b>Deactivating...</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="users_deactivate.php">
                <input type="hidden" class="userid" name="id">
                <div class="text-center">
                   
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="deactivate"><i class="fa fa-times"></i> Deactivate</button>
              </form>
            </div>
        </div>
    </div>
</div>

<script>

  function calDate(name, name2) {
      document.getElementById("getAge").value = getAge(document.getElementById("birthInput").value);
  }

  function editcalDate(name, name2) {
      document.getElementById("editgetAge").value = editgetAge(document.getElementById("editbirthInput").value);
  }

  
  function getAge(dateString) {
      var today = new Date();
      var birthDate = new Date(dateString);
      var age = today.getFullYear() - birthDate.getFullYear();
      var m = today.getMonth() - birthDate.getMonth();

      if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
          age--;
      }
      return age;
  }


  function editgetAge(dateString) {
      var today = new Date();
      var birthDate = new Date(dateString);
      var age = today.getFullYear() - birthDate.getFullYear();
      var m = today.getMonth() - birthDate.getMonth();

      if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
          age--;
      }
      return age;
  }

</script>


     