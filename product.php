<?php
include 'lib/Cart/Db/cart_db.php';
include 'lib/Cart/App/cart_app.php';
include 'lib/Cart/View/cart_view.php';

use function Cart\View\display;

$view_vars = \Cart\App\get_item($cart, $_GET['id'] ?? 0);
?>


<!doctype html>
<html>
<head><title>Shopping Cart</title></head>
<body>

<h1>Shopping Cart</h1>

<?php echo display('item', $view_vars); ?>

</body>
</html>
