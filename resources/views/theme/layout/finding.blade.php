<div class="rehomes-search-form-area">
    <div class="container">
        <div class="rehomes-search-form">
            <form action="search" method="get">
                @csrf
                <div class="row">
                    <div class="col-12 col-lg-10">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-3">
                                <select name="types" id="types" class="form-control">
                                    <option value="">Loại phòng</option>
                                    @foreach ($Type_room as $item)
                                        <option value="{{$item->id}}">{{$item->type}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <select name="district" id="district" class="form-control">
                                    <option value="">Quận</option>
                                    @foreach ($district_share as $item)
                                        <option value="{{$item->id}}">{{$item->districtName}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3" id="ward1">
                                <select name="ward" id="ward" class="form-control">
                                    <option value="">Phố</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <select name="people" id="people" class="form-control">
                                    <option value="">Số người ở ghép</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">>= 4</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <select name="price" id="price" class="form-control">
                                    <option value="">Giá Phòng</option>
                                    <option value="500000-1000000">500,000 - 1,000,000 VND</option>
                                    <option value="1000001-2000000">1,000,001 - 2,000,000 VND</option>
                                    <option value="2000001-3000000">2,000,001 - 3,000,000 VND</option>
                                    <option value="3000001-9000000">Trên 3,000,000</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <select name="area" id="area" class="form-control">
                                    <option value="">Diện Tích</option>
                                    <option value="5-15">5 - 15 m2</option>
                                    <option value="16-25">16 - 25 m2</option>
                                    <option value="26-35">26 - 35 m2</option>
                                    <option value="36-45">Trên 35 m2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2">
                        <button type="submit" class="btn rehomes-search-btn">Tìm Kiếm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
