<table class="table table-hover">
    <thead>
      <tr>
        <th style="width:20%"></th>
        <th style="width:10%"></th>
        <th style="width:30%"></th>
        <th style="width:30%"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> 
          <input type="hidden" id="wayflight" value="1">
          <strong>Giá vé</strong>
        </td>
      </tr>
      <?php
                                    $so_luong_adult = $_GET['adult'];
                                    $so_luong_child = $_GET['child'];
                                    $so_luong_baby = $_GET['baby'];
                                    $price = $_GET['money']; 
                                    $total_adult = $so_luong_adult * $price;
                                    $total_child = $so_luong_child * $price;
                                    echo "<tr>";
                                        echo "<td>Người lớn:</td>";
                                        echo "<td><b>".$_GET['adult']."</b>x</td>";
                                        echo "<td>".displayVNMoney($_GET['money'])."&nbsp;VND=</td>";
                                        echo "<td>".displayVNMoney($total_adult)."&nbsp;VND</td>";
                                        echo "</tr>";
                                        if ($_GET['child'] > 0){
                                            echo "<tr class='calcuprice'>";
                                             // echo "<td><strong>Trẻ em:</strong></td>
                                            echo "<td align='right'><b>".$_GET['child']."</b>x</td>
                                            <td style='text-align: right'>".displayVNMoney($_GET['money'])."&nbsp;VND</td>
                                            <td style='padding-right:2px;padding-left:2px;text-align:center'>=</td>
                                            <td style='text-align: right'>".displayVNMoney($total_child)."&nbsp;VND</td>";
                                        echo "</tr>";
                                        }
                                        if ($_GET['baby'] > 0){
                                            
                                            echo "<p><strong>Em bé:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='margin-left:3px; margin-right: 3px'>".$_GET['baby']."</span>x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0&nbsp&nbsp;VND</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;0&nbsp;VND</strong></p>";
                                        }
                                    // echo "</tr>";
                                    ?>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>













  <!-- <tr>
                                    <td colspan="5"><strong>Thuế và phí</strong></td>
                                </tr> -->
                                <?php
                                    $fee_adult = getTaxFee_adult($_GET['money'], $_GET['airlinecode']);
                                    $fee_child = getTaxFee_child($_GET['money'], $_GET['airlinecode']);
                                    $fee_baby = getTaxFee_infant($_GET['money'], $_GET['airlinecode']);
                                    $total_fee_adult = $so_luong_adult * $fee_adult;
                                    $total_fee_child = $so_luong_child * $fee_child;
                                    $total_fee_baby = $so_luong_baby * $fee_baby;
                                    echo "<tr>";
                                    echo "<td>";
                                        echo "<p><strong>Người lớn:&nbsp;&nbsp;&nbsp;<b><span style='margin-left:3px; margin-right: 3px'>".$_GET['adult']."</span>x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".displayVNMoney(getTaxFee_adult($_GET['money'],$_GET['airlinecode']))."&nbsp;VND</b>&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;".displayVNMoney($total_fee_adult)."&nbsp;VND</strong></p>";
                                        if ($_GET['child'] > 0){
                                            echo "<p><strong>Trẻ em:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>&nbsp;&nbsp;&nbsp;<span style='margin-left:3px; margin-right: 3px'>".$_GET['child']."</span>x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".displayVNMoney(getTaxFee_child($_GET['money'],$_GET['airlinecode']))."&nbsp;VND</b>&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;".displayVNMoney($total_fee_child)."&nbsp;VND</strong></p>";
                                        }
                                        if ($_GET['baby'] > 0){
                                            echo "<p><strong>Em bé:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>&nbsp;&nbsp;&nbsp;<span style='margin-left:3px; margin-right: 3px'>".$_GET['baby']."</span>x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".displayVNMoney(getTaxFee_infant($_GET['money'],$_GET['airlinecode']))."&nbsp;VND</b>&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;".displayVNMoney($total_fee_baby)
                                            ."&nbsp;VND</strong></p>";
                                        }
                                    echo "</td>";
                                    echo "</tr>";
                                    ?>
                                <tr>
                                    <td colspan="5" style="border-top:1px solid #DDD"></td>
                                </tr>
                                <tr>
                                    <?php 
                                        $total = $total_adult + $total_child + $total_fee_adult + $total_fee_baby + $total_fee_baby;
                                        ?>
                                    <td colspan="2">Tổng giá</td>
                                    <td colspan="3" style="text-align: right;" class="config-color-total">
                                        <b id='total' ><?php echo displayVNMoney($total); ?>VND</b>
                                        <?php 
                                            echo "<input type='hidden' id='detail_total' value='".$total."' />";
                                            ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Hành lý thêm</td>
                                    <td colspan="3" style="text-align: right;"><b><span id="dep_pricebaggage">0</span></b>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5" style="border-top:1px solid #DDD;text-align: right">
                                        <p style="color:#777;font-size:11px;padding: 5px 0;" class="config-color-dep">Lượt
                                            đi tổng cộng
                                        </p>
                                        <strong style="font-size:15px;" class="config-color-total"><span id="dep_total">
                                        </span>
                                        VND</strong>
                                        <input type="hidden" id="hddeptotalprice" value="">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </fieldset>
                    <div class="total">
                        <div class="cont">Tổng cộng</div>
                        <p><span id="amounttotal"></span>VND</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>