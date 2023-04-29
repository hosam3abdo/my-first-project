if (isset($_POST['enter products'])) {
    $productTable = drawProductsTable();
}
if (isset($_POST['invoice']))
    $invoiceTable = drawInvoiceTable();
function drawProductsTable()
{
    $table = "‹table class='table text-center'>
  <thead>
    <tr>
       ‹th ›Product Name</th›
       <th>Price</th>
       <th ›Quantity</th>
    </tr>
  </thead›
  <tbody>
  ";
    for ($i = -1; $i <= $_POST['number']; $i++) {
        # code...
        $table = "<tr>
    <th ><input type='text' class= 'form-control' name-'product$i' > </th>
    <th ><input type='number' class= 'form-control' name-'Price$i' > </th>
    <th ><input type='number' class= 'form-control' name-'Quantity$i' > </th>
    </tr>";
    }
    $table = "
 </tbody>
</table>
<button class ='btn btn-dark form control' name ='invoice'> view Invoice</button> ";
    return $table;
}
function drawInvoiceTable()
{
    $table .= "<table class = 'table text-center'
    <thead>
    <tr>
    <th>Product Name </th>
    <th>Price </th>
    <th>Quantity </th>
    <th>Subtotal </th>
    </tr>
    </thead>
    
    <tbody>";
    $total = 0;
    for ($i = 1; $i < $_POST['number']; $i++) {
        $subtotal = $_POST['quantity' . $i] * $_POST['price' . $i];
        $total += $subtotal;
        $table .= "<tr>
        <th>{$_Post['product' .$i]}</th>
        <th>{$_Post['price' .$i]}</th>
        <th>{$_Post['quantity' .$i]}</th>
         <th>Subtotal </th>
          </tr>";
    }
    $percentage = calculatediscountpercentage($total);
    $discount = $percentage * $total;
    $priceAfterdiscount = calculatedelivery($_POST['city']);
    $totalafterdelivery = $priceAfterdiscount + $delivery;
    $table .= "<tr>
    <th> client name</th>
    <th>{$_Post['name']}</th>
    </tr>
    <tr>
    <th> city</th>
    <th>{$_Post['cithy']}</th>
    </tr>
    <tr>
    <th> total</th>
    <th>$total EGP</th>
    </tr>
    <tr>
    <th> discount percentage</th>
    <th>" . ($percentage * 100) . "%</th>
    </tr>
    <tr>
    <th> discount value</th>
    <th>$discount EGP</th>
    </tr>
    <tr>
    <th> price after discount</th>
    <th> $priceAfterdiscount</th>
    </tr>
    <tr>
    <th> delivery</th>
    <th>$delivery</th>
    </tr>
    <tr>
    <th>total </th>
    <th class ='text-danger'>$totalafterdelivery</th>
    </tr>
    </tbody>
    </table>
    ";
    return $table;
}
function calculatediscountpercentage($total)
{
    if ($total < 1000) {
        return 0;
    } elseif ($total >= 1000 && $total < 3000) {
        return 0.1;
    } elseif ($total >= 3000 && $total < 4500) {
        return 0.15;
    } else {
        return 0.2;
    }
}
function calculatedelivery($city)
{
    switch ($city) {
        case 'cairo':
            return 0;
        case 'giza':
            return 30;
        case 'alex':
            return 50;
        default:
            return 100;
    }
}