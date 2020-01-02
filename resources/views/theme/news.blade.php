@extends('theme.layout.index')
@section('content')

 <!-- **** Breadcrumb Area Start **** -->
 <div class="breadcrumb-area bg-img bg-overlay-3 wow fadeInUp" data-wow-delay="200ms" style="background-image: url(theme/img/bg-img/30.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Đánh giá</li>
                        </ol>
                    </nav>
                    <h2 class="page-title">Trang đăng tin</h2>
                </div>
            </div>
        </div>
    </div>
 </div>
    <!-- **** Breadcrumb Area End **** -->
<br>
<br>
<br>

<!-- Page Content -->
<div class="container">
    <!-- slider -->
    <div class="row carousel-holder">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="border: 1px solid #00800030;
            padding-top: 20px;
            padding-bottom: 20px; border-radius: 10px; margin: 20px 0 55px 0; padding-right: 0px;
    padding-left: 0px;-webkit-box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75);">
                <div class="panel-heading" style="font-weight: bold;font-size: 23px;width: 100%;background-color: #92c800;padding: 10px 0 6px 0px;margin-top: -20px; text-align: center; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                    <h4 style=" color: white;">Đăng tin Phòng trọ</h4>
                </div>
            <div class="panel panel-default" style="margin-top: 25px; padding: 10px;">

                    <div class="panel-body">
                    @if(session('thongbao'))
                    <div class="alert bg-success" style="color: white;">
                        <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                        <span class="text-semibold">Well done!</span>  {{session('thongbao')}}
                    </div>
                    @endif
                    <form action="user/news" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label>Tiêu đề bài đăng:</label>
                            <input type="text" class="form-control" placeholder="Tiêu đề" name="title" value="" required>
                        </div>
                        <br>
                        <div class="form-group">
							          <label>Địa chỉ phòng trọ:</label>
							          <input type="text" id="location-text-box" name="txtaddress" class="form-control" value="" required>
                            <p><i class="fa fa-bell"></i> Nếu địa chỉ hiển thị bên bản đồ không đúng bạn có thể điều chỉnh bằng cách kéo điểm màu xanh trên bản đồ tới vị trí chính xác.</p>
                            <input type="hidden" id="txtaddress" name="txtaddress" value=""  class="form-control"  />
                            <input type="hidden" id="txtlat" value="" name="txtlat"  class="form-control"  />
                            <input type="hidden" id="txtlng"  value="" name="txtlng" class="form-control" />
                        </div>
                        <div id="map-canvas" style="width: auto; height: 400px;"></div>
                        <div>
                            <label>Giá:</label>
                            <input type="number" class="form-control" placeholder="Giá phòng" name="txtprice"  value="" required>
                        </div>
                        <br>
                        <div>
                            <label>Diện tích:</label>
                            <input type="number" class="form-control" placeholder="Diện tích" name="txtacreage"  value="" required>
                        </div>
                        <br>
                        <div>
                            <label>Số lượng người ở:</label>
                              <br>
                              <select name="numberpeople" id="" required class="form-control">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="3">4</option>
                              </select>
                        </div>
                        <br>
                        <br>
                        <div >
                            <label>Loại phòng:</label>
                            <br>
                            <select name="roomType" id="" required class="form-control" multiple>
                                @foreach ($roomType as $item)
                                    <option value="{{$item->id}}">{{$item->type}}</option>
                                @endforeach

                            </select>
                        </div>
                        <br>
                        <br>
                        <div id="hslt">
                            <!-- ************** Max Items Demo ************** -->
                            <label>Các tiện ích có trong phòng trọ:</label>
                            <br>
                            <select name="tienich[]" multiple="multiple"  placeholder="Chọn các tiện ích phòng trọ" required class="selectpicker form-control" multiple data-live-search="true">
                                @foreach ($service as $item)
                                    <option value="{{$item->id}}">{{$item->service}}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                       
                        <div>
                            <label>Quận:</label>
                            <br>
                            <select name="district1" id="district1" class="form-control">
                                @foreach ($district_share as $item)
                                    <option value="{{$item->id}}">{{$item->districtName}}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <br>
                        <div id="ward3">
                            <label>Phố:</label>
                            <br>
                            <select name="ward1" id="ward2" class="form-control">

                            </select>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="comment">Thêm hình ảnh:</label>
                            <div class="file-loading">
                                <input id="file-5" type="file" class="file" name="hinhanh[]" multiple data-preview-file-type="any" data-upload-url="#" required>
                                <div id="myImg">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div>
                            <label>Mô tả:</label>
                            <textarea class="form-control" name="description" id="demo" cols="30" rows="10" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success" style=" margin-top: 20px; padding: 10px 40px;margin-left: 290px;">Đăng tin</button>
                    </form>
                    </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <!-- end slide -->
</div>
<!-- end Page Content -->
@endsection
@section('script')
<script>
    console.log('xxx');
    $("#district1").change(function(){
        var idDistrict = $(this).val();
        $.get("ward/"+idDistrict,function(data){
        $('#ward2').html(data);
        });
    });
</script>
<script type="text/javascript">
    $('.alert_type').change(function() {
        var selected_value = $(this).val();
        $(".alert_type option[value='"
            + selected_value + "']")
            .not(this.selectedOptions[0]).remove();
    });
    $(function() {
      $(":file").change(function() {
        if (this.files && this.files[0]) {
          for (var i = 0; i < this.files.length; i++) {
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[i]);
          }
        }
      });
    });

    function imageIsLoaded(e) {
      $('#myImg').append('<img src=' + e.target.result + '>');
    };
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzlVX517mZWArHv4Dt3_JVG0aPmbSE5mE&callback=initialize&libraries=geometry,places" async defer></script>
<script>
  var map;
  var marker;
  function initialize() {
    var mapOptions = {
      center: {lat: 16.070372, lng: 108.214388},
      zoom: 12
    };
    map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  // Get GEOLOCATION
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,
        position.coords.longitude);
      var geocoder = new google.maps.Geocoder();
      geocoder.geocode({
        'latLng': pos
      }, function (results, status) {
        if (status ==
          google.maps.GeocoderStatus.OK) {
          if (results[0]) {
            console.log(results[0].formatted_address);
          } else {
            console.log('No results found');
          }
        } else {
          console.log('Geocoder failed due to: ' + status);
        }
      });
      map.setCenter(pos);
      marker = new google.maps.Marker({
        position: pos,
        map: map,
        draggable: true
      });
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }

  function handleNoGeolocation(errorFlag) {
    if (errorFlag) {
      var content = 'Error: The Geolocation service failed.';
    } else {
      var content = 'Error: Your browser doesn\'t support geolocation.';
    }

    var options = {
      map: map,
      zoom: 19,
      position: new google.maps.LatLng(16.070372,108.214388),
      content: content
    };

    map.setCenter(options.position);
    marker = new google.maps.Marker({
      position: options.position,
      map: map,
      zoom: 19,
      icon: "theme/img/core-img/gps.png",
      draggable: true
    });
    /* Dragend Marker */
    google.maps.event.addListener(marker, 'dragend', function() {
      var geocoder = new google.maps.Geocoder();
      geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          if (results[0]) {
            $('#location-text-box').val(results[0].formatted_address);
            $('#txtaddress').val(results[0].formatted_address);
            $('#txtlat').val(marker.getPosition().lat());
            $('#txtlng').val(marker.getPosition().lng());
            infowindow.setContent(results[0].formatted_address);
            infowindow.open(map, marker);
          }
        }
      });
    });
    /* End Dragend */

  }

  // get places auto-complete when user type in location-text-box
  var input = /** @type {HTMLInputElement} */
  (
    document.getElementById('location-text-box'));


  var autocomplete = new google.maps.places.Autocomplete(input);
  autocomplete.bindTo('bounds', map);

  var infowindow = new google.maps.InfoWindow();
  marker = new google.maps.Marker({
    map: map,
    icon: "theme/img/core-img/gps.png",
    anchorPoint: new google.maps.Point(0, -29),
    draggable: true
  });

  google.maps.event.addListener(autocomplete, 'place_changed', function() {
    infowindow.close();
    marker.setVisible(false);
    var place = autocomplete.getPlace();
    if (!place.geometry) {
      return;
    }
    var geocoder = new google.maps.Geocoder();
    geocoder.geocode({'latLng': place.geometry.location}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        if (results[0]) {
          $('#txtaddress').val(results[0].formatted_address);
          infowindow.setContent(results[0].formatted_address);
          infowindow.open(map, marker);
        }
      }
    });
    // If the place has a geometry, then present it on a map.
    if (place.geometry.viewport) {
      map.fitBounds(place.geometry.viewport);
    } else {
      map.setCenter(place.geometry.location);
      map.setZoom(17); // Why 17? Because it looks good.
    }
    marker.setIcon( /** @type {google.maps.Icon} */ ({
      url: "theme/img/core-img/gps.png"
    }));
    document.getElementById('txtlat').value = place.geometry.location.lat();
    document.getElementById('txtlng').value = place.geometry.location.lng();
    console.log(place.geometry.location.lat());
    marker.setPosition(place.geometry.location);
    marker.setVisible(true);

    var address = '';
    if (place.address_components) {
      address = [
      (place.address_components[0] && place.address_components[0].short_name || ''), (place.address_components[1] && place.address_components[1].short_name || ''), (place.address_components[2] && place.address_components[2].short_name || '')
      ].join(' ');
    }
    /* Dragend Marker */
    google.maps.event.addListener(marker, 'dragend', function() {
      var geocoder = new google.maps.Geocoder();
      geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          if (results[0]) {
            $('#location-text-box').val(results[0].formatted_address);
            $('#txtlat').val(marker.getPosition().lat());
            $('#txtlng').val(marker.getPosition().lng());
            infowindow.setContent(results[0].formatted_address);
            infowindow.open(map, marker);
          }
        }
      });
    });
    /* End Dragend */
  });

}


// google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script type="text/javascript" src="assets/js/selectize.js"></script>

<script type="text/javascript">
$(document).ready(function() {
        $('#multiselect').multiselect();
});
</script>
  <link rel="stylesheet" href="theme/bootstrap.min.css">
    <link rel="stylesheet" href="theme/css/bootstrap-select.css">
    <script src="theme/js/bootstrap-select.js"></script>
    <script src="theme/js/bootstrap.min.js"></script>
@endsection
