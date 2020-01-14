@extends('welcome')
@section('pageBody')
     <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card">
                                <div class="user-bg"> <img width="100%" alt="user" src="{{asset('images/users/2.jpg')}}"> </div>
                                <div class="card-body">
                                    <!-- .row -->
                                    <div class="row text-center m-t-10">
                                        <div class="col-md-12 border-bottom m-b-20 p-b-20">
                                            <h5 class="card-title"><a href="javascript:void(0)" data-toggle="modal"
                                                data-target="#titleModal"><i class="fa fa-pencil-square-o"></i></a> Artemis Fowl</h5>
                                            <!--Title Modal -->
                                            <div id="titleModal" class="modal fade in" tabindex="-1" role="dialog"
                                            aria-labelledby="titleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Edit Title</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <from class="form-horizontal">
                                                            <div class="form-group">
                                                                <label class="col-md-12">Name of Label</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="type name"> </div>
                                                            </div>
                                                           
                                                        </from>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-info waves-effect"
                                                            data-dismiss="modal">Save</button>
                                                        <button type="button" class="btn btn-default waves-effect"
                                                            data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                                <!-- /.modal-content -->
                                            <h6><a href="javascript:void(0)" data-toggle="modal"
                                                data-target="#talentModal"><i class="fa fa-pencil-square-o"></i></a> Singer and artist</h6>
                                             <!--talent Modal -->
                                             <div id="talentModal" class="modal fade in" tabindex="-1" role="dialog"
                                             aria-labelledby="talentModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <h4 class="modal-title" id="myModalLabel">Edit Talent</h4>
                                                         <button type="button" class="close" data-dismiss="modal"
                                                             aria-hidden="true">×</button>
                                                     </div>
                                                     <div class="modal-body">
                                                         <from class="form-horizontal">
                                                             <div class="form-group">
                                                                 <label class="col-md-12">Name of Label</label>
                                                                 <div class="col-md-12">
                                                                     <input type="text" class="form-control"
                                                                         placeholder="type name"> </div>
                                                             </div>
                                                            
                                                         </from>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button type="button" class="btn btn-info waves-effect"
                                                             data-dismiss="modal">Save</button>
                                                         <button type="button" class="btn btn-default waves-effect"
                                                             data-dismiss="modal">Cancel</button>
                                                     </div>
                                                 </div>
                                             </div>
                                             </div>
                                                 <!-- /.modal-content -->
                                        </div>
                                        <div class="col-md-6 border-right">
                                            <strong>Last Release</strong>
                                            <p>October 3, 2017</p>
                                        </div>
                                        <div class="col-md-6"><strong>Genre</strong>
                                            <p><a href="javascript:void(0)" data-toggle="modal"
                                                data-target="#genreModal"><i class="fa fa-pencil-square-o"></i></a> Edm, Raper, Rock</p>
                                              <!--Genre Modal -->
                                              <div id="genreModal" class="modal fade in" tabindex="-1" role="dialog"
                                              aria-labelledby="genreModalLabel" aria-hidden="true">
                                              <div class="modal-dialog">
                                                  <div class="modal-content">
                                                      <div class="modal-header">
                                                          <h4 class="modal-title" id="myModalLabel">Edit Genre</h4>
                                                          <button type="button" class="close" data-dismiss="modal"
                                                              aria-hidden="true">×</button>
                                                      </div>
                                                      <div class="modal-body">
                                                          <from class="form-horizontal">
                                                             
                                                                 <div class="form-group">
                                                                     <label class="col-md-12">Select Genre</label>
                                                                     <div class="col-md-12">
                                                                         <select class="form-control">
                                                                             <option>All Contacts</option>
                                                                             <option>10</option>
                                                                             <option>20</option>
                                                                             <option>30</option>
                                                                             <option>40</option>
                                                                             <option>Custome</option>
                                                                         </select>
                                                                     </div>
                                                                 </div>
                                                             
                                                             
                                                          </from>
                                                         </div>
                                                      <div class="modal-footer">
                                                          <button type="button" class="btn btn-info waves-effect"
                                                              data-dismiss="modal">Save</button>
                                                          <button type="button" class="btn btn-default waves-effect"
                                                              data-dismiss="modal">Cancel</button>
                                                      </div>
                                                  </div>
                                              </div>
                                              </div>
                                                  <!-- /.modal-content -->
                                        </div>
                                    </div>
                                    <hr>
                                    <!-- /.row -->
                                    <!-- .row -->
                                    <div class="row text-center m-t-10">
                                        <div class="col-md-6 border-right"><strong>Albums</strong>
                                            <p>15</p>
                                        </div>
                                        <div class="col-md-6"><strong>Singles</strong>
                                            <p>15</p>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                    <hr>
                                    <!-- .row -->
                                    <div class="row text-center m-t-10">
                                        <div class="col-md-12"><strong>Address</strong>
                                            <p><a href="javascript:void(0)" data-toggle="modal"
                                                data-target="#addressModal"><i class="fa fa-pencil-square-o"></i></a> E104, Dharti-2, Chandlodia Ahmedabad
                                                <br> Gujarat, India.</p>
                                                <div id="addressModal" class="modal fade in" tabindex="-1" role="dialog"
                                                aria-labelledby="addressModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Edit Address</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <from class="form-horizontal">
                                                               
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Name of Label</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="type name"> </div>
                                                                </div>
                                                               
                                                               
                                                            </from>
                                                           </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-info waves-effect"
                                                                data-dismiss="modal">Save</button>
                                                            <button type="button" class="btn btn-default waves-effect"
                                                                data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                    <!-- /.modal-content -->
                                        </div>
                                    </div>
                                    <hr>
                                    <br>
                                    <div class="row m-t-15">
                                        <div class="col-md-4 col-sm-4 text-center">
                                            <p class="text-purple"><i class="ti-facebook"></i></p>
                                            <h1>258</h1> </div>
                                        <div class="col-md-4 col-sm-4 text-center">
                                            <p class="text-blue"><i class="ti-twitter"></i></p>
                                            <h1>125</h1> </div>
                                        <div class="col-md-4 col-sm-4 text-center">
                                            <p class="text-danger"><i class="ti-google"></i></p>
                                            <h1>140</h1> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. </p>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Songs (Singles)</p>
                                    <button type="submit" class="btn btn-info m-l-15"><i class="fa fa-pencil"></i> Edit Description</button>
                                <p></p>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th></th>
                                                <th>Title</th>
                                                <th>Artist</th>
                                                <th>Duration</th>
                                                <th class="text-nowrap">Download</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><i class="fa fa-heart-o" aria-hidden="true"></i></td>
                                                <td>The song of ice and fire</td>
                                                <td>Lord Stark</td>
                                                <td>04:48</td>
                                                <td class="text-nowrap">
                                                    <a href="#" data-toggle="tooltip" data-original-title="Download" class="link"> <i class="fa fa-download m-r-10"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Bookmark" class="link"> <i class="fa fa-bookmark m-r-10"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Remove" class="link"> <i class="fa fa-times"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Playing" class="link"> <i class="fa fa-pause-circle-o text-danger"></i> </a>
                                                </td>
                                                <td><i class="fa fa-heart-o" aria-hidden="true"></i></td>
                                                <td>Blackwood</td>
                                                <td>T. Lannister</td>
                                                <td>03:33</td>
                                                <td class="text-nowrap">
                                                    <a href="#" data-toggle="tooltip" data-original-title="Download" class="link"> <i class="fa fa-download m-r-10"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Bookmark" class="link"> <i class="fa fa-bookmark m-r-10"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Remove" class="link"> <i class="fa fa-times"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><i class="fa fa-heart-o" aria-hidden="true"></i></td>
                                                <td>Shut Up Society</td>
                                                <td>M. Murdock</td>
                                                <td>04:22</td>
                                                <td class="text-nowrap">
                                                    <a href="#" data-toggle="tooltip" data-original-title="Download" class="link"> <i class="fa fa-download m-r-10"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Bookmark" class="link"> <i class="fa fa-bookmark m-r-10"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Remove" class="link"> <i class="fa fa-times"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td><i class="fa fa-heart-o" aria-hidden="true"></i></td>
                                                <td>The Silent Nature</td>
                                                <td>The Sourcerer</td>
                                                <td>02:58</td>
                                                <td class="text-nowrap">
                                                    <a href="#" data-toggle="tooltip" data-original-title="Download" class="link"> <i class="fa fa-download m-r-10"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Bookmark" class="link"> <i class="fa fa-bookmark m-r-10"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Remove" class="link"> <i class="fa fa-times"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td><i class="fa fa-heart-o" aria-hidden="true"></i></td>
                                                <td>Suger-Salt</td>
                                                <td>The Pianist</td>
                                                <td>03:25</td>
                                                <td class="text-nowrap">
                                                    <a href="#" data-toggle="tooltip" data-original-title="Download" class="link"> <i class="fa fa-download m-r-10"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Bookmark" class="link"> <i class="fa fa-bookmark m-r-10"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Remove" class="link"> <i class="fa fa-times "></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td><i class="fa fa-heart-o" aria-hidden="true"></i></td>
                                                <td>Pathetic Human</td>
                                                <td>Philanthrophobia</td>
                                                <td>07:58</td>
                                                <td class="text-nowrap">
                                                    <a href="#" data-toggle="tooltip" data-original-title="Download" class="link"> <i class="fa fa-download m-r-10"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Bookmark" class="link"> <i class="fa fa-bookmark m-r-10"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Remove" class="link"> <i class="fa fa-times"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td><i class="fa fa-heart-o" aria-hidden="true"></i></td>
                                                <td>The Nuke Zoned</td>
                                                <td>Martian Metal</td>
                                                <td>06:48</td>
                                                <td class="text-nowrap">
                                                    <a href="#" data-toggle="tooltip" data-original-title="Download" class="link"> <i class="fa fa-download m-r-10"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Bookmark" class="link"> <i class="fa fa-bookmark m-r-10"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Remove" class="link"> <i class="fa fa-times"></i> </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <button type="submit" class="btn btn-info m-l-15"><i class="fa fa-plus-circle"></i> Add New</button>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
@endsection