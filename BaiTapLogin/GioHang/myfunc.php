<?php
function showcart($cart){
    $total=0;
    $kq=" ";
    foreach($cart as $sp){
        $stt=1;
        $ttien=$sp[3]*$sp[4];
        $total +=$ttien;
        $kq.='  <tr>
        <td>'.$stt.'</td>
        <td><img src="'.$sp[1].'" width="100px" ></td>
        <td>'.$sp[2].'</td>
        <td>'.$sp[3].'</td>
        <td>'.$sp[4].'</td>
        <td>'.number_format($ttien,0,',','.').'</td>
        <td style="text-align: center"><a href="">xoa</a></td>
    </tr>';
    $stt++;

    }
    $kq.='  <tr>
    <td colspan="5" >Tong down hang</td>
    <td style="background-color:#CCC;">'.number_format($total,0,',','.').'</td>
    <td></td>


</tr>';
    return $kq;

}

?>