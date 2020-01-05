<base href="{{asset('')}}">
<div marginheight="0" marginwidth="0" style="background:#f0f0f0">
    <div id="wrapper" style="background-color:#f0f0f0">
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="margin:0 auto;width:600px!important;min-width:600px!important" class="container">
            <tbody>
                <tr>
                    <td align="center" valign="middle" style="background:#ffffff; padding: 20px;">
                        <table style="width:580px;border-bottom:1px solid #ff3333" cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <div style="font-size: 40px;float: left;"> <text>Our</text><text style="color: #92c800;">Home</text></div><div style="margin-top: 16px;font-size: 24px;color: #0300c8;"> Tìm phòng ở ghép</div>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="middle" style="background:#ffffff">
                        <table style="width:580px" cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <td align="left" valign="middle" style="font-family:Arial,Helvetica,sans-serif;font-size:24px;color:#ff3333;text-transform:uppercase;font-weight:bold;padding:25px 10px 15px 10px">
                                        Thông báo lịch hẹn gặp xem phòng
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="middle" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;padding:0 10px 20px 10px;line-height:17px">
                                        Chào {{$maildetail['name']}},
                                        <br> Cám ơn bạn đã tìm kiếm phòng ở ghép tại OurHome
                                        <br>
                                        <br> Gần đây bạn đã tìm kiếm phòng ở ghép 
                                        <b>trên trang web của chúng tôi</b> <br> 
                                        sau khi xem xét các thông tin của bạn<br> 
                                        <b>chủ phòng ở ghép thấy rất phù hợp</b> với các tiêu chí của họ.
                                        <br> Chủ phòng muốn hẹn gặp bạn để trao đổi chi tiết hơn theo thông tin sau:</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="middle" style="background:#ffffff">
                        <table style="width:580px;border:1px solid #ff3333;border-top:3px solid #ff3333" cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <td colspan="2" align="left" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#666666;padding:10px 10px 7px 15px;line-height:17px"> 
                                        <b>Chủ phòng: </b> 
                                        <b  style="color:#ed2324;font-weight:bold;text-decoration:none" target="_blank"> {{$maildetail['nameSend']}}
                                        </b>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="left" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#666666;padding:10px 10px 7px 15px;line-height:17px"> 
                                        <b>Email: </b> 
                                        <b  style="color:#ed2324;font-weight:bold;text-decoration:none" target="_blank"> {{$maildetail['emailSend']}}
                                        </b>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="left" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#666666;padding:10px 10px 7px 15px;line-height:17px"> 
                                        <b>Số điện thoại: </b> 
                                        <b href="#" style="color:#ed2324;font-weight:bold;text-decoration:none" target="_blank"> {{$maildetail['phone']}}
                                        </b>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="left" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#666666;padding:10px 10px 7px 15px;line-height:17px"> 
                                        <b>Địa chỉ: </b> 
                                        <b  style="color:#ed2324;font-weight:bold;text-decoration:none" target="_blank"> {{$maildetail['address']}}
                                        </b>
                                        
                                    </td>
                                </tr>
                                <!-- <tr>
                                    <td colspan="2" align="left" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#666666;padding:10px 10px 7px 15px;line-height:17px"> 
                                        <b>Nội dung: </b> 
                                        
                                    </td>
                                </tr> -->
                                <tr>
                                    <td colspan="2" align="left" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#666666;padding:10px 10px 7px 15px;line-height:17px"> 
                                        <b>Nội dung: </b> 
                                        <P>{{$maildetail['content']}}</P>
                                        <p>Mình xin phép hẹn gặp bạn lúc : <b style="color: red">{{$maildetail['schedule']}}</b></p>
                                        <p>Tại địa chỉ: <b style="color: red">{{$maildetail['address']}}</b></p>
                                        <b>Mình xin cám ơn!</b>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="middle" style="background:#ffffff;padding-top:20px">
                        <table style="width:500px" cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <td align="center" valign="middle" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;line-height:20px;padding-bottom:5px"> 
                                        Đây là thư tự động từ hệ thống. Vui lòng không trả lời email này.
                                        <br> Nếu có bất kỳ thắc mắc hay cần giúp đỡ, Bạn vui lòng ghé thăm 
                                        <b style="font-family:Arial,Helvetica,sans-serif;font-size:13px;text-decoration:none;font-weight:bold">Trung tâm trợ giúp</b> của chúng tôi tại địa chỉ: 
                                        <a href="#" style="font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#0066cc;text-decoration:none;font-weight:bold" target="_blank">
                                            duongbinh@gmail.com
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div> 
</div>