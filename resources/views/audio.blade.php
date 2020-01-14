@extends('welcome')
@section('createNew')
<button type="submit" class="btn btn-info m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
@endsection
@section('pageBody')

      <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row el-element-overlay">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">TRENDING SONGS</h5>
                                <div class="table-responsive">
                                    <table id="artistTable"class="table table-striped" data-paging="true" data-paging-size="7">
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
                                                <td>10</td>
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
                                                <td>11</td>
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
                                                <td>12</td>
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
                                                <td>13</td>
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
                                                <td>14</td>
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
@section('js')
<script>
    $(function () {
        $('#artistTable').footable();
    });
</script>
    
@endsection