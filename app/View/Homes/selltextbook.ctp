		<script>
 $(document).ready(function(){	
	$("#isbnSearch").validate({
        // Specify the validation rules
        rules: {          
            "data[ibnnumber]": {
                required: true,
				minlength:10,
				maxlength:13,
                number: true
            }
        },
		messages: 
			{
			 "data[ibnnumber]": 
			 {
				required:"Please Enter ISBN",
				minlength:"Please enter at least 10 digit ISBN",
				maxlength:"Maximum length of ISBN can be 13 digit",
				number: "Please enter numeric value"
			 }
			}
   });
      });
</script>
		<div class="yellowBox innerShadow">
        	<h2>Sell Textbooks</h2>
		<?php  	echo $this->Form->create('', array('action'=>'searchresult','type' => 'post','name'=>'isbnSearch','id'=>'isbnSearch'));
				echo $this->Form->input('ibnnumber',array('label' => '','class'=>'textBox','placeholder'=>"Enter your book's ISBN",'div' => false));
				echo $this->Form->button('Find this Book', array('type' => 'submit','class' => 'yellowRealBtn','value'=>'Find this Book'));

		?>
		</form>
        </div>
		
        <div class="wBox innerShadow">
        	<h3>The best way to sell your used books.</h3>
            <ul>
            	<li>
                	<span><?php echo $this->Html->image($this->Html->url('/img/check.png',true)); ?></span> Sell to safe &amp; reliable Verfied Retailers
                </li>
                <li>
	                <span><?php echo $this->Html->image($this->Html->url('/img/dolr.png',true)); ?></span> Compare resale prices across the web
                </li>
                <li>
                	<span><?php echo $this->Html->image($this->Html->url('/img/msg.png',true)); ?></span>Recieve a check by mail quickly
                </li>
            </ul>
        </div>
        
        <div class="grayColm">
        	<ul>
            	<li class="innerShadow"> 
                	<h3>It's easy to sell on Packback!</h3>
					<?php echo $this->Html->image($this->Html->url('/img/img001.png',true)); ?>
                    <h2>Find your Textbook &amp; Choose a Retailer</h2>
                </li>
                <li style="background:#e2e3e5">
				  <?php echo $this->Html->image($this->Html->url('/img/img002.png',true)); ?>
                    <h2>Create your Custom Shipping Label</h2>
                    <h4>Get Free shipping!</h4>
                </li>
                <li>
					    <?php echo $this->Html->image($this->Html->url('/img/img003.png',true)); ?>
                      <h2>Ship your Books &amp; Get Paid Fast</h2>
                </li>
            </ul>        
        </div>
        <div class="ylwbox innerShadow">
        	<h2><span>Packback</span> Verified Retailers</h2>
            <ul>
            	<li><?php echo $this->Html->image($this->Html->url('/img/bokbyte.png',true)); ?></li>
            	<li><?php echo $this->Html->image($this->Html->url('/img/bokbyte.png',true)); ?></li>
            	<li><?php echo $this->Html->image($this->Html->url('/img/bokbyte.png',true)); ?></li>
            	<li><?php echo $this->Html->image($this->Html->url('/img/bokbyte.png',true)); ?></li>
            	<li><?php echo $this->Html->image($this->Html->url('/img/bokbyte.png',true)); ?></li>
				<li><?php echo $this->Html->image($this->Html->url('/img/bokbyte.png',true)); ?></li>
            	<li><?php echo $this->Html->image($this->Html->url('/img/bokbyte.png',true)); ?></li>
            	<li><?php echo $this->Html->image($this->Html->url('/img/bokbyte.png',true)); ?></li>
            </ul>
            <div class="clr"></div>
        </div>