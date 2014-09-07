<?php
if(isset($error))
    foreach($error as $item){
    echo '<p style="color:red">'.$item.'</p>';
}
?>
<script src="//ulogin.ru/js/ulogin.js"></script>
<div class="well span10">
<h3>PayPal, eBay &amp; Social Networks</h3>
<div class="row">
<div class="span4">&nbsp;</div>
</div>
<p>Please select the social network profile you wish to connect this account to, only <strong>VERIFIED PayPal accounts</strong> with minimum age of <strong>3 months</strong> will be accepted.</p>
<span  style="margin-left:10px;margin-right:10px">
<span id="uLogin" data-ulogin="display=panel;fields=first_name,last_name;providers=linkedin,twitter,facebook;hidden=;redirect_uri=http://btc/network"></span>
</span>
<span style="margin-left:10px;margin-right:10px">
    <span id="myContainer"></span>

</span>
<div class="row">
<div class="span4">&nbsp;</div>
<div class="span4">&nbsp;</div>
</div>
<table class="table">
<thead>
<tr>
<th>Name</th>
<th>User ID</th>
<th>Creation Date</th>
</tr>
</thead>
<?php
foreach($items as $item){
?>
    <tr>
    <td><?php echo Model_Network::getNetworkType($item->type); ?></td>
    <td><?php echo $item->code; ?></td>
    <td><?php echo date('Y-m-d H:i:s', $item->date_create); ?></td>
    </tr>
<?php }
?>



</table>
</div>


<script src="https://www.paypalobjects.com/js/external/api.js"></script>
<script>
paypal.use( ["login"], function(login) {
  login.render ({
    "appid": "AaoO5hAzvFRhdQI4aSfVIRcQnAaMndjkOZKFjwuQDa6nRfw8_qVmla7E3VkT",
    "authend": "sandbox",
    "scopes": "openid",
    "containerid": "myContainer",
    "locale": "en-us",
    "returnurl": "http://btc/network"
  });
});
</script>