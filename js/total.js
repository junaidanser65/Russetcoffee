<script>
  function display_total(){
    var num1 = parseInt(document.getElementById("CAFFE_LATTE").value);
    var num2 = parseInt(document.getElementById("COFFEE_MOCHA").value);
    var num3 = parseInt(document.getElementById("WHITE_CHOCOLATE_MOCHA").value);
    var num4 = parseInt(document.getElementById("AMERICAN_COFFEE").value);

    var total = ((num1)*10+(num2)*9+(num3)*11+(num4)*15);

    document.getElementById("total_price").innerHTML = "Total:    $" + total;

	}
</script>