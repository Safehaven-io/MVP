<?php

?>

<script type="text/javascript" src="<?php echo $rootadmin; ?>js/safeshare.min.js"></script>
<script type="text/javascript" src="<?php echo $rootadmin; ?>js/tfc-init.js"></script>
<script type="text/javascript" src="<?php echo $root; ?>assets/widgets/wizard/wizard.js"></script>
<script type="text/javascript" src="<?php echo $rootadmin; ?>js/widgets/wizard-sha.js"></script>

<div id="page-title">
	<h2>The Family Cirle - Initiator</h2>
	<p>With the TFC plan, you can split your shares through your relatives.</p>
</div>

<div class="panel" ng-controller="tfcInitCtrl">
    <div class="panel-body">
		<div class="example-box-wrapper">
            <div id="form-wizard" class="form-wizard">
                <ul>
                    <li>
                        <a href="#step-1" data-toggle="tab">
                            <label class="wizard-step">1</label>
							<span class="wizard-description">
								Data to secure
								<small>Data to encrypt in shares</small>
							</span>
                        </a>
                    </li>
                    <li>
                        <a href="#step-2" data-toggle="tab">
                            <label class="wizard-step">2</label>
							<span class="wizard-description">
								Stakeholders
								<small>Number of stakeholders</small>
							</span>
                        </a>
                    </li>
					<li>
                        <a href="#step-3" data-toggle="tab">
                            <label class="wizard-step">3</label>
							<span class="wizard-description">
								Validator
								<small>Use of a validator</small>
							</span>
                        </a>
                    </li>
                    <li>
                        <a href="#step-4" data-toggle="tab">
                            <label class="wizard-step">4</label>
						    <span class="wizard-description">
								Summarize
								<small>Confirm your selection</small>
							</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="step-1">
                        <div class="content-box">
                            <h3 class="content-box-header bg-primary">
                                Step 1: Data to secure
                            </h3>
							<div class="content-box-wrapper">
								<h4>
									Fill in your private key, seed, password, passphrase that you want to divide between your relatives, heirs,..
								</h4>
								<hr>
								<form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="col-sm-2 control-label">Data to secure</label>
												<div class="col-sm-10">
													<input type="text" ng-model="data_to_secure" placeholder="Enter Data to secure..." required class="form-control">
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
                                Step 2: Stakeholders
                            </h3>
                            <div class="content-box-wrapper">
                                <h4>
									How many stakeholders do you want to divide your ID to your digital assets?
								</h4>
								<hr>
								<form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="col-sm-2 control-label">Number of stakeholders</label>
												<div class="col-sm-10">
													<select class="form-control" ng-model="number_of_stakeholders" ng-change="number_of_stakeholders_change()">
														<?php
														$iMaxStakeholders = 4;
														$defaultShares = 4;
														for($i=1; $i<=$iMaxStakeholders; $i++){
															$selected = "";
															if($i == $defaultShares){
																$selected = " selected";
															}
															echo "<option value='".$i."'".$selected.">".$i."</option>";
														}
														?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Minimum number of stakeholders</label>
												<div class="col-sm-10">
													<select class="form-control" ng-model="min_number_of_stakeholders">
														<?php
														$defaultShares = 4;
														for($i=1; $i<=$iMaxStakeholders - 1; $i++){
															$selected = "";
															if($i == $defaultShares){
																$selected = " selected";
															}
															echo "<option value='".$i."'".$selected.">".$i."</option>";
														}
														?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Backup shares</label>
												<div class="col-sm-10">
													<div class="checkbox">
														<label>
															<input type="checkbox" ng-model="backup_shares" ng-change="backup_shares_change()">
														</label>
														<span>{{number_of_backup_shares}}</span>
													</div>
												</div>
											</div>
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
                                Step 3: Validator
                            </h3>
                            <div class="content-box-wrapper">
                                <h4>
									How many stakeholders do you want to divide your ID to your digital assets?
								</h4>
								<hr>
								<form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="col-sm-2 control-label">Use validator</label>
												<div class="col-sm-10">
													<div class="checkbox">
														<label>
															<input type="checkbox" ng-model="use_validator" ng-change="use_validator_change()">
														</label>
														<span>{{number_of_validator}}</span>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Select validator</label>
												<div class="col-sm-10">
													<select class="form-control" ng-model="validator" ng-change="updateValidator(validator)">
														<option ng-repeat="legalentity in legalEntities" value='{{legalentity.ID}}'>
															{{legalentity.ID}} - {{legalentity.firstname}} {{legalentity.lastname}} |
															{{legalentity.zip}} {{legalentity.city}} ({{legalentity.country}})
														</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Backup validator</label>
												<div class="col-sm-10">
													<div class="checkbox">
														<label>
															<input type="checkbox" ng-model="backup_validator" ng-change="backup_validator_change()">
														</label>
														<span>{{number_of_backup_validator}}</span>
													</div>
												</div>
											</div>
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
                                Step 4: Summarize
                            </h3>
                            <div class="content-box-wrapper">
                                <h4>
									Check and confirm your data.
								</h4>
								<hr>
								<form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="col-sm-2 control-label">Data to secure</label>
												<div class="col-sm-10">
													<input type="text" disabled required class="form-control" value="{{data_to_secure}}">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Number of stakeholders</label>
												<div class="col-sm-10">
													<input type="text" disabled required class="form-control" value="{{number_of_stakeholders}}">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Backup shares</label>
												<div class="col-sm-10">
													<div class="checkbox">
														<label>
															<input type="checkbox" ng-checked="backup_shares" disabled>
														</label>
														<span>{{number_of_backup_shares}}</span>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Minimum number of stakeholders</label>
												<div class="col-sm-10">
													<input type="text" disabled required class="form-control" value="{{min_number_of_stakeholders}}">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Use validator</label>
												<div class="col-sm-10">
													<div class="checkbox">
														<label>
															<input type="checkbox" ng-checked="use_validator" disabled>
														</label>
														<span>{{number_of_validator}}</span>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Select validator</label>
												<div class="col-sm-10">
													<select class="form-control" ng-model="validator">
														<option ng-repeat="legalentity in legalEntities" value='{{legalentity.ID}}' ng-disabled="true">
															{{legalentity.ID}} - {{legalentity.firstname}} {{legalentity.lastname}} |
															{{legalentity.zip}} {{legalentity.city}} ({{legalentity.country}})
														</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Backup validator</label>
												<div class="col-sm-10">
													<div class="checkbox">
														<label>
															<input type="checkbox" ng-checked="backup_validator" disabled>
														</label>
														<span>{{number_of_backup_validator}}</span>
													</div>
												</div>
											</div>
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
												<button class="btn btn-primary" ng-click="generate()">Generate</button>
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
			<!--
			<p>users: {{users}}</p>											
			---<br>			
			<p>shareGroups: {{shareGroups}}</p>
			---<br>
			<ul ng-repeat="share in summarize">
				<li>{{share.shareTypeName}}({{share.shareTypeID}}): {{share.share}}</li>
			</ul>
			---<br>-->
			<br>
			<div class="row">
				<div class="col-md-3" ng-repeat="shareGroup in shareGroups">
					<div ng-switch="shareGroup.shareTypeID" class="content-box pad20A">
						<div class="ribbon">
							<div ng-switch-when="1" class="bg-green">{{shareGroup.shareTypeName | capitalize}}</div>
							<div ng-switch-when="2" class="bg-red">{{shareGroup.shareTypeName | capitalize}}</div>
							<div ng-switch-when="3" class="bg-orange">{{shareGroup.shareTypeName | capitalize}}</div>
							<div ng-switch-when="4" class="bg-blue-alt">{{shareGroup.shareTypeName | capitalize}}</div>							
						</div>
						<div class="pad10A" ng-repeat="shares in shareGroup.shares">
							<!--class="content-box"<p style="word-wrap: break-word;">{{shares}}</p>-->
							<textarea type="text" ng-model="shares" required class="form-control"></textarea>
						</div>
						<div ng-switch-when="1" class="form-group">
							<select class="form-control" ng-model="shareGroup.userID" ng-change="updateUser(shareGroup)">
								<option ng-repeat="user in users" value='{{user.ID}}'>
									{{user.ID}} - {{user.firstname}} {{user.lastname}}
								</option>
							</select>
							<div ng-if="shareGroup.userImg != ''">
								<br>
								<img src="../users/{{shareGroup.userImg}}"/>
							</div>
						</div>
						<div ng-switch-when="2" class="form-group">
							<select class="form-control" ng-model="validator" ng-change="updateValidator(validator)">
								<option ng-repeat="legalentity in legalEntities" value='{{legalentity.ID}}'>
									{{legalentity.ID}} - {{legalentity.firstname}} {{legalentity.lastname}} |
									{{legalentity.zip}} {{legalentity.city}} ({{legalentity.country}})
								</option>
							</select>
							<div ng-if="shareGroup.userImg != ''">
								<br>
								<img src="../legal_entities/{{shareGroup.userImg}}"/>
							</div>
						</div>
						<!--<input ng-switch-when="1" type="text" ng-model="shareGroup.userName" placeholder="Enter user..." required class="form-control"/>-->
					</div>					
                </div>
				<div style='float: right;'>
					<button class="btn btn-primary" ng-click="save()">Save</button>
				</div>
			</div>
			<p>Output: {{result}}</p>
		</div>
    </div>
</div>