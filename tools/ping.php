<html>
  <head>

  </head>
  <script>
    function encode() {
      const str = document.getElemntById("ping").value;
      console.log(str)
      return str;
    }
</script>

  <form class="form-inline" action="" method="GET">
    <label for="ping">What do you want to ping?</label>
    <input type="ping" id="ping" placeholder="127.0.0.1" name="ping">
    <input type="hidden" name="form_submitted" value="1" />
    <button type="submit">Submit</button>
  </form>
<pre>
    <?php if (isset($_GET['ping'])): ?>
    <?php
$ping = $_GET['ping'];
echo "Running ping -c 2 " .$ping . ": \n";
system("ping -c 2 $ping");
echo "Done Running"
    ?>
    <?php endif; ?>
</pre>
</html>
