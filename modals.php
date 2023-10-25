<!-- modal -->
			<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header"> 
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							<h4 class="modal-title">Make Your Reservation Now</h4>
						</div> 
						<div class="modal-body book-form">
							<form action="#" method="post">
								<div class="phone_email">
									<label>Full Name : </label>
									<div class="form-text">
										<span class="fa fa-user" aria-hidden="true"></span>
										<input type="text" name="Name" placeholder="Name" required="">
									</div> 
								</div>
								<div class="phone_email phone_email1">
									<label>Email : </label>
									<div class="form-text">
										<span class="fa fa-envelope" aria-hidden="true"></span>
										<input type="text" name="email" placeholder="Email" required="">
									</div>
								</div>
								<div class="phone_email">
									<label>Phone Number : </label>
									<div class="form-text">
										<span class="fa fa-phone" aria-hidden="true"></span>
										<input type="text" name="Phone no" placeholder="Phone no" required="">
									</div> 
								</div> 
								<div class="phone_email phone_email1">
									<label>Address : </label>
									<div class="form-text">
										<span class="fa fa-map-marker" aria-hidden="true"></span>
										<input type="text" name="address" placeholder="Your Address" required="">
									</div> 
								</div> 
								<div class="clearfix"></div>
								<div class="agileits_reservation_grid">
									<div class="span1_of_1">
										<label>Date : </label> 
										<div class="book_date"> 
											<span class="fa fa-calendar" aria-hidden="true"></span>
											<input class="date" id="datepicker" type="text" name="date" placeholder="mm/dd/yyyy" required="">
										</div>					
									</div>
									<div class="span1_of_1">
										<!-- start_section_room -->
										<label>Time : </label>
										<div class="section_room">
											<span class="fa fa-clock-o" aria-hidden="true"></span>
											<select id="country" onchange="change_country(this.value)" class="frm-field required">
												<option value="null">Lunch</option>
												<option value="null">Dinner</option>         
												<option value="AX">Break Fast</option>
											</select>
										</div>	
									</div>
									<div class="span1_of_1">
										<label>No.of People : </label>
										<!-- start_section_room -->
										<div class="section_room">
											<span class="fa fa-users" aria-hidden="true"></span>
											<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
												<option value="null">1 People</option>
												<option value="null">2 People</option>
												<option value="null">3 People</option>         
												<option value="AX">4 People</option>
												<option value="AX">More</option>
											</select>
										</div>	
									</div> 
									<div class="clearfix"></div>
								</div> 
								<input type="submit" value="Book Now" />
							</form>
						</div>
						  
					</div>
				</div>
			</div>
			<!-- //modal --> 