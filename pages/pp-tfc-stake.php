<?php

?>

<script type="text/javascript" src="<?php echo $rootadmin; ?>js/tfc-sta.js"></script>
<script type="text/javascript" src="<?php echo $root; ?>assets/widgets/wizard/wizard.js"></script>
<script type="text/javascript" src="<?php echo $rootadmin; ?>js/widgets/wizard-sha.js"></script>

<div id="page-title">
	<h2>The Family Cirle - Stakeholder</h2>
	<p>With the TFC plan, you can split your shares through your relatives.</p>
</div>


<div class="panel" ng-controller="tfcStaCtrl">
    <div class="panel-body">
		<div class="example-box-wrapper">
            <div id="form-wizard-tfc-stake" class="form-wizard">
			<ul>
                    <li>
                        <a href="#step-1" data-toggle="tab">
                            <label class="wizard-step">1</label>
							<span class="wizard-description">
								Own shares
								<small>Capture own shares</small>
							</span>
                        </a>
                    </li>
                    <li>
                        <a href="#step-2" data-toggle="tab">
                            <label class="wizard-step">2</label>
							<span class="wizard-description">
								Legal Entity
								<small>Contact legal entity</small>
							</span>
                        </a>
                    </li>
                    <li>
                        <a href="#step-3" data-toggle="tab">
                            <label class="wizard-step">3</label>
							<span class="wizard-description">
								Other stakeholders
								<small>Capture other shares</small>
							</span>
                        </a>
                    </li>
					<li>
                        <a href="#step-4" data-toggle="tab">
                            <label class="wizard-step">4</label>
							<span class="wizard-description">
								Unlock stored data
								<small>Unlock encrypted data</small>
							</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="step-1">
						<div class="content-box">
                            <h3 class="content-box-header bg-primary">
                                Step 1: Own stakeholder shares
                            </h3>
							<div class="content-box-wrapper">
								<h4>
									Fill in your {{shares.length}} shares:
								</h4>
								<hr>
								<form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="">
									<div class="row" ng-repeat="share in shares">
										<div class="col-md-12">
											<div class="form-group">
												<label class="col-sm-2 control-label">{{share.name}}:</label>
												<div class="col-sm-10">
													<input type="text" ng-model="share.value" placeholder="Enter your share..." required class="form-control">
													<font style="color:gray;">Example: E9873D79C6D87DC0FB6A5778633389F4453213303DA61F20BD67FC233AA33262</font>
												</div>
											</div>
										</div>
									</div>
								</form>
								<hr>
								<div class="bg-default">
									<div class="row">
										<div class="col-md-12">
											<div style='float: right;'>
											    <button class="btn btn-primary" ng-click="check()">Check</button>
												<button class="btn btn-primary button-next" id="next">Next</button>
												<button class="btn btn-primary button-last" id="last">Last</button>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                    <div class="tab-pane" id="step-2">
						<div class="content-box">
                            <h3 class="content-box-header bg-primary">
                                Step 2: Legal entity
                            </h3>
							<div class="content-box-wrapper">
								<h4>
									Contact your legal entity:
								</h4>
								<hr>
								<form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="">
									<div class="row" ng-repeat="share in shares">
										<div class="col-md-12">
											<!--<div class="form-group">
												<label class="col-sm-2 control-label">Share {{$index + 1}}:</label>
												<div class="col-sm-10">
													<input type="text" ng-model="share[$index]" placeholder="Enter your share..." required class="form-control">
													<font style="color:gray;">Example: E9873D79C6D87DC0FB6A5778633389F4453213303DA61F20BD67FC233AA33262</font>
												</div>
											</div>-->
										</div>
									</div>
								</form>
								<hr>
								<div class="bg-default">
									<div class="row">
										<div class="col-md-12">
											<div style='float: left;'>
												<button class="btn btn-primary button-first">First</button>
												<button class="btn btn-primary button-previous">Previous</button>
											</div>
											<div style='float: right;'>
												<button class="btn btn-primary button-next" id="next">Next</button>
												<button class="btn btn-primary button-last" id="last">Last</button>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                    <div class="tab-pane" id="step-3">
					<div class="content-box">
                            <h3 class="content-box-header bg-primary">
                                Step 3: Other stakeholders
                            </h3>
							<div class="content-box-wrapper">
								<h4>
									Contact the other stakeholders to submit their shares:
								</h4>
								<hr>
								<form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="">
									<div class="row" ng-repeat="share in shares">
										<div class="col-md-12">
											<!--<div class="form-group">
												<label class="col-sm-2 control-label">Share {{$index + 1}}:</label>
												<div class="col-sm-10">
													<input type="text" ng-model="share[$index]" placeholder="Enter your share..." required class="form-control">
													<font style="color:gray;">Example: E9873D79C6D87DC0FB6A5778633389F4453213303DA61F20BD67FC233AA33262</font>
												</div>
											</div>-->
										</div>
									</div>
								</form>
								<hr>
								<div class="bg-default">
									<div class="row">
										<div class="col-md-12">
											<div style='float: left;'>
												<button class="btn btn-primary button-first">First</button>
												<button class="btn btn-primary button-previous">Previous</button>
											</div>
											<div style='float: right;'>
												<button class="btn btn-primary button-next" id="next">Next</button>
												<button class="btn btn-primary button-last" id="last">Last</button>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                    <div class="tab-pane" id="step-4">
					<div class="content-box">
                            <h3 class="content-box-header bg-primary">
                                Step 4: Unlock stored data
                            </h3>
							<div class="content-box-wrapper">
								<h4>
									Unlock the stored data from the initiator:
								</h4>
								<hr>
								<form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="">
									<div class="row" ng-repeat="share in shares">
										<div class="col-md-12">
											<!--<div class="form-group">
												<label class="col-sm-2 control-label">Share {{$index + 1}}:</label>
												<div class="col-sm-10">
													<input type="text" ng-model="share[$index]" placeholder="Enter your share..." required class="form-control">
													<font style="color:gray;">Example: E9873D79C6D87DC0FB6A5778633389F4453213303DA61F20BD67FC233AA33262</font>
												</div>
											</div>-->
										</div>
									</div>
								</form>
								<hr>
								<div class="bg-default">
									<div class="row">
										<div class="col-md-12">
											<div style='float: left;'>
												<button class="btn btn-primary button-first">First</button>
												<button class="btn btn-primary button-previous">Previous</button>
											</div>
											<div style='float: right;'>
												<button class="btn btn-primary" ng-click="unlock()">Unlock</button>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<button class="btn btn-primary" ng-click="test()">Load shares</button>
		<!--1 Stakeholder:
		<button class="btn btn-primary" ng-click="test(1)">Test 1</button>
		<button class="btn btn-primary" ng-click="test(2)">Test 2</button>
		<button class="btn btn-primary" ng-click="test(3)">Test 3</button><br>
		2 Stakeholders:<button class="btn btn-primary" ng-click="test(4)">Test 4</button>
		<button class="btn btn-primary" ng-click="test(5)">Test 5</button>
		<button class="btn btn-primary" ng-click="test(6)">Test 6</button><br>
		3 Stakeholders:<button class="btn btn-primary" ng-click="test(7)">Test 7</button>
		<button class="btn btn-primary" ng-click="test(8)">Test 8</button>
		<button class="btn btn-primary" ng-click="test(9)">Test 9</button><br>
		4 Stakeholders:<button class="btn btn-primary" ng-click="test(10)">Test 10</button>
		<button class="btn btn-primary" ng-click="test(11)">Test 11</button>
		<button class="btn btn-primary" ng-click="test(12)">Test 12</button>-->
		<div>
			<p>{{summarize}}</p>
		</div>
    </div>
</div>