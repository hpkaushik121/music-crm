@extends('welcome')
@section('pageBody')
    <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card">
                                <div class="user-bg"> <img width="100%" alt="user" src="{{asset('images/vd1.jpg')}}"> </div>
                                <div class="card-body">
                                    <!-- .row -->
                                    <div class="row text-center m-t-10">
                                        <div class="col-md-12 border-bottom m-b-20 p-b-20">
                                            <h5 class="card-title"><a href="javascript:void(0)" data-toggle="modal"
                                                data-target="#titleModal"><i class="fa fa-pencil-square-o"></i></a> Firepit</h5>
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
                                                <!-- /.modal-content -->
                                            </div>
                                            <h6><a href="javascript:void(0)" data-toggle="modal"
                                                data-target="#subTitleModal"><i class="fa fa-pencil-square-o"></i></a> By Sourcerer of The Blackpool</h6>
                                             <!--sub-title Modal -->
                                             <div id="subTitleModal" class="modal fade in" tabindex="-1" role="dialog"
                                             aria-labelledby="subTitleModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <h4 class="modal-title" id="myModalLabel">Edit Sub Title</h4>
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
                                            <strong>Created Date</strong>
                                            <p>October 3, 2017</p>
                                        </div>
                                        <div class="col-md-6"><strong>Genre</strong>
                                            <p><a href="javascript:void(0)" data-toggle="modal"
                                                data-target="#genreModal"><i class="fa fa-pencil-square-o"></i></a> Hip-Hop</p>

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
                                        <div class="col-md-6 border-right"><strong>Tracks</strong>
                                            <p>15</p>
                                        </div>
                                        <div class="col-md-6"><strong>Run Time</strong>
                                            <p>40:35 Min</p>
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
                                        </div>
                                        <!--address Modal -->
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
                                            <tr>
                                                <td>8</td>
                                                <td><i class="fa fa-heart-o" aria-hidden="true"></i></td>
                                                <td>The Fault In Our Forehead</td>
                                                <td>Artemis Fowl</td>
                                                <td>04:04</td>
                                                <td class="text-nowrap">
                                                    <a href="#" data-toggle="tooltip" data-original-title="Download" class="link"> <i class="fa fa-download m-r-10"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Bookmark" class="link"> <i class="fa fa-bookmark m-r-10"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Remove" class="link"> <i class="fa fa-times"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
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
                                                <td>10</td>
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
                                                <td>11</td>
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
                                                <td>12</td>
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
                                            <tr>
                                                <td>13</td>
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
                                                <td>14</td>
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
                                                <td>15</td>
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
                                                <td>16</td>
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
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
@endsection