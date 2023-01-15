<?php

include 'header.php';
include 'function.php';
$balance = balance();
$address = address();

?>

                <!-- content @s -->
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                <div class="nk-block-between-md">

                                </div>
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="nk-block-between-md g-4">
                                    <div class="nk-block-content">
                                        <div class="nk-wg1">
                                            <div class="nk-wg1-group g-2">
                                                <div class="nk-wg1-item mr-xl-4">
                                                    <div class="nk-wg1-title text-soft">Available Balance</div>
                                                    <div class="nk-wg1-amount">
                                                        <div class="amount"><?php echo $balance; ?> <small class="currency currency-usd">BTC</small></div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-content -->
                                    <div class="nk-block-content">
                                        <ul class="nk-block-tools gx-3">
                                            <li class="btn-wrap">
											<a href="#" class="btn btn-icon btn-xl btn-dim btn-outline-light" data-toggle="modal" data-target="#modalForm"><em class="icon ni ni-arrow-up-right"></em></a>
											<span class="btn-extext">Send</span></li>											
                                            <li class="btn-wrap"><a href="#" class="btn btn-icon btn-xl btn-dim btn-outline-light" data-toggle="modal" data-target="#modalFormR"><em class="icon ni ni-arrow-down-left"></em></a><span class="btn-extext">Recive</span></li>
                                        </ul>
                                    </div><!-- .nk-block-content -->
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block -->

                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="nk-block-title">Transaction History</h4>
                                            </div>
                                        </div>
                                        <div class="card card-bordered card-preview">
                                            <table class="table table-orders">
                                                <thead class="tb-odr-head">
                                                    <tr class="tb-odr-item">
                                                        <th class="tb-odr-info">
                                                            <span class="tb-odr-id">TYPE</span>
														</th>
														<th class="tb-odr-info">
                                                            <span class="tb-odr-date d-none d-md-inline-block">Date</span>
                                                        </th>
                                                        <th class="tb-odr-amount">
                                                            <span class="tb-odr-total">Amount</span>
														</th>
														<th class="tb-odr-info">
                                                            <span class="tb-odr-status d-none d-md-inline-block">Status</span>
                                                        </th>
                                                        <th class="tb-odr-action">&nbsp;</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="tb-odr-body">

                                                    <tr class="tb-odr-item">
														<td class="tb-odr-info">
                                                            <span class="tb-odr-date">

                                                            </span>
                                                        </td>
                                                        <td class="tb-odr-info">
                                                            <span class="tb-odr-date">
                                                                
                                                            </span>
                                                        </td>
                                                        <td class="tb-odr-amount">
                                                            <span class="tb-odr-total">
                                                                <span class="amount">
                                                                   
                                                                
                                                                </span>
                                                            </span>
														</td>
														<td class="tb-odr-amount">
                                                            <span class="tb-odr-status">
                                                                <span class="badge badge-dot badge-success">

                                                                </span>
                                                            </span>
                                                        </td>
                                                        <td class="tb-odr-action">
                                                            <div class="tb-odr-btns d-none d-md-inline">
                                                                <a href="" target="_blank" class="btn btn-sm btn-primary">View in Blockchain</a>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- .card-preview -->
                                    </div><!-- nk-block -->
                        </div>
                    </div>
                </div>
                <!-- content @e -->
	<!-- Modal Send-->
    <div class="modal fade" tabindex="-1" id="modalForm">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                        <div class="nk-wgwh">
                            <img src="images/btc.png">
                            <div class="nk-wgwh-title h5 pl-2"> Send Bitcoin</div>
                        </div>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="#" class="form-validate is-alter">
                        <div class="form-group">
                            <label class="form-label" for="btc_address">BTC Address</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="btc_address" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="btc_amount" id="sample">BTC Amount</label><br>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="btc_amount" required>
                            </div>
							<!-- <label for="name" id="rates">0</label> -->
                        </div>
						<!-- <div class="form-group">
                            <ul class="custom-control-group g-3 align-center">
                                <li>
                                    <button type="button" class="btn btn-outline-light" onClick="btc_all()">All</button>           
                                </li>
                                <li>
									<button type="button" class="btn btn-outline-light" onClick="btc_haft()">Haft</button>           
                                </li>
                            </ul>
                        </div> -->
                        <!-- <div class="form-group">
                            <label class="form-label">Fees | Balance</label>
                            <ul class="custom-control-group g-3 align-center">
                                <li>
                                    <label for="name">BTC Fees : </label>
									<label for="name"><strong>
                                      
                                    </strong></label>
                                </li>
                                <li>
                                    <label for="name">=  </label>
									<label for="name"><strong>$ 
                                        
                                    </strong></label>
                                </li>
                            </ul>
                        </div> -->

						<p id="send_message"></p>
						<div class="form-group">
                            <button type="submit" id="send_btn" class="btn btn-lg btn-primary" onClick="withdrawBTC()">Send</button>
							<span class="withdrawal-status"></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
					    <!-- Modal RECEIVE-->
    <div class="modal fade" tabindex="-1" id="modalFormR">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                        <div class="nk-wgwh">
                            <img src="images/btc.png">
                            <div class="nk-wgwh-title h5 pl-2"> Recive Bitcoin</div>
                        </div>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
					<div class="card card-bordered center">
                    <img src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=<?php echo $address; ?>&choe=UTF-8" class="card-img-top" style="width: 300px; height:300px;">
								<input type="text" id="btc_addy" class="copy_txt" style="width:80%; text-align: center;" value="<?php echo $address; ?>" readonly/>
						<p id="message"></p>
						<div class="form-group center">
                                <button class="btn btn-outline-light" onClick="copy()">Copy</button>
                        </div>
							<div class="card-inner">
								<p class="card-text">Please scan qr code to receive Bitcoin</p>
							</div>
					</div>
                </div>
            </div>
        </div>
    </div>
                <!-- footer @s -->
                <div class="nk-footer nk-footer-fluid">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright">Copyright by © </a>
                            </div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="assets/js/bundle.js?ver=1.1.0"></script>
    <script src="assets/js/scripts.js?ver=1.1.0"></script>
    <script src="assets/js/crypto-chart.js?ver=1.1.0"></script>

</body>
</html>

	<script>
        function copy() {
            var copyText = document.getElementById("btc_addy");
            copyText.select();
            copyText.setSelectionRange(0, 99999)
            document.execCommand("copy");
        }
        function withdrawBTC() {
            $(".withdrawal-status").html('<br><br><i>Processing Transaction..</i>');
            $("#eth_address").prop('disabled', true);
            $("#eth_amount").prop('disabled', true);
            $("#send_btn").prop('disabled', true);

            $res = send()
            $.post('send_btc.php',
                {
                    wallet: $("#btc_address").val(),
                    value: $("#btc_amount").val(),
                },
                function(data, status){
                    response = jQuery.parseJSON(data);
                    
                    if(response.success === true){
                        $("#btc_address").val('');
                        $("#btc_amount").val('');
                        $(".withdrawal-status").html('<br><br><i style="color: green;">Transaction Done!</i>');
                        setInterval(function(){ location.reload() }, 3000);
                    }else{
                        $(".withdrawal-status").html('<br><br><i style="color: red;">Transaction Failed,'+response.error+'</i>');
                    }
                    $("#btc_address").prop('disabled', false);
                    $("#btc_amount").prop('disabled', false);
                    $("#send_btn").prop('disabled', false);
                });
            
        }
	</script>