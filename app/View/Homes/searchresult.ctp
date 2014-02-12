
<script>
$(document).ready(function(){
  $(".hideAction").click(function(){
    $(".hiddenColom").slideToggle();
  });
});
</script>
<div class="yellowBox innerShadow minPAdding">
    <p>Sell Textbooks > Search Results</p>
  </div>
  <div class="wBox">
    <div class="innerColom">
      <div class="prodctDetails"> <img src="images/product001.png" alt="">
        <p> <strong>Adaptive Web Design</strong>: Craft
          Rich Experiences with
          Progressive Enhancement</p>
        <p> John Smith </p>
        <p> ISBN: 123456789123 </p>
        <div class="clr"></div>
      </div>
      <div class="priceTag"> <img src="images/priceImg.png"> </div>
      <div class="hiddenColom">
      	<ul>
        	<li><strong>Valorebooks.com </strong><span><strong>$50.28</strong></span></li>
            <li>Valorebooks.com <span>$50.28</span></li>
            <li>Valorebooks.com <span>$50.28</span></li>
            <li>Valorebooks.com <span>$50.28</span></li>
            <li>Valorebooks.com <span>$50.28</span></li>
        </ul>
      </div>
            <div class="hideAction">
      	Hide all retailers’ prices
      </div>
      <input type="button" value="Continue" class="yellowRealBtn yellowPure">
      <p class="centerTxt"><strong>Not your Textbook?</strong> <a href="">Try Searching Again</a></p>
    </div>
  </div>