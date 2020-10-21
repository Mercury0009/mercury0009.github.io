<?php include 'header.php'; ?>

   <div class="grid_4">
		<div class="container"> 
			<h1 class="blog_head">Контакты</h1>
		    <div class="map">
			  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
			</div>
			<div class="contact">
				<div class="col-md-4 contact_left">
					<h3>Контактная информация</h3>
					<p>Адрес такой-то</p>
				    <p> Номера для связи такие-то</p>
				</div>
				<div class="col-md-8 contact_right">
					<h3>Форма для связи</h3>
					<form>
						<div class="text">
							<div class="text-fild">
								<span>Имя:</span>
								<input type="text" class="text" value="Your Name here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name here';}">
							</div>
							<div class="text-fild">
								<span>Email:</span>
								<input type="text" class="text" value="Your Email here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email here';}">
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="msg-fild">
								<span>Тема:</span>
								<input type="text" class="text" value="Your Subject here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Subject here';}">
						</div>
						<div class="message-fild">
								<span>Текст сообщения:</span>
								<textarea> </textarea>
						</div>
						<label class="btn1 btn2 btn-8 btn-8c"><input type="submit" value="Отправить"></label>
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		 </div>
	</div>
	 <?php include 'footer.php'; ?>	