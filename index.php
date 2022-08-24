<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PayPal</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <table border="1">
        <tr>
            <th>Cart Items</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
        </tr>
        <tr>
            <td><img src="images/7239276_R_SET.jpg" alt=""></td>
            <td>HTC LATEST CELL PHONE</td>
            <td>$25</td>
            <td>1</td>
        </tr>
        <tr>
            <td><img src="images/xiaomi-redmi-3s-plus-xxl.jpg" alt=""></td>
            <td>REDMI MI INDIA'S BEST CELL PHONE</td>
            <td>$14</td>
            <td>1</td>
        </tr>
    </table>

    <form action="https://www.sandbox.paypal.com/" method="post">
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="upload" value="1">
        <input type="hidden" name="business" value="sb-bg96418073161@business.example.com">

        <input type="hidden" name="item_name_1" value="HTC LATEST CELL PHONE">
        <input type="hidden" name="amount_1" value="25">
        <input type="hidden" name="quantity_1" value="1">

        <input type="hidden" name="item_name_2" value="REDMI MI INDIA'S BEST CELL PHONE">
        <input type="hidden" name="amount_2" value="14">
        <input type="hidden" name="quantity_2" value="1">
        <input type="submit" value="Pay with paypal">
    </form>

</body>

</html>