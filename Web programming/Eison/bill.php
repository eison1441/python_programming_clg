
<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill Calculator</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #dbeafe, #eff6ff);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px 15px;
        }

        .container {
            width: 100%;
            max-width: 550px;
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.12);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header .icon {
            font-size: 45px;
            margin-bottom: 10px;
        }

        h2 {
            color: #1e40af;
            font-size: 27px;
            margin-bottom: 8px;
        }

        .header p {
            color: #64748b;
            font-size: 14px;
        }

        label {
            display: block;
            font-weight: 600;
            color: #334155;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 13px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 15px;
            margin-bottom: 20px;
            outline: none;
            transition: 0.3s;
        }

        input:focus {
            border-color: #2563eb;
            box-shadow: 0 0 5px rgba(37,99,235,0.3);
        }

        input[type="submit"] {
            width: 100%;
            padding: 14px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background: #1e40af;
        }

        .bill {
            margin-top: 30px;
            padding: 22px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
        }

        .bill h3 {
            text-align: center;
            color: #1e40af;
            margin-bottom: 20px;
            font-size: 22px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 12px 8px;
            border-bottom: 1px solid #e2e8f0;
            color: #334155;
            font-size: 14px;
        }

        td:last-child {
            text-align: right;
            font-weight: 600;
        }

        .total td {
            color: #1e40af;
            font-size: 17px;
            font-weight: bold;
            border-bottom: none;
            padding-top: 18px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #94a3b8;
            font-size: 12px;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">
        <div class="icon">⚡</div>
        <h2>Electricity Bill Calculator</h2>
        <p>Enter customer details to calculate your electricity bill</p>
    </div>

    <form method="post">

        <label>Customer Name</label>
        <input type="text" name="cname" placeholder="Enter customer name" required>

        <label>Consumer Number</label>
        <input type="text" name="cno" placeholder="Enter consumer number" required>

        <label>Units Consumed</label>
        <input type="number" name="units" min="0" placeholder="Enter units consumed" required>

        <input type="submit" value="Generate Bill">

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $cname = htmlspecialchars($_POST["cname"]);
        $cno   = htmlspecialchars($_POST["cno"]);
        $units = (int)$_POST["units"];

        $fixed = 50;

        if ($units <= 100) {
            $energy = $units * 2.50;
        }
        elseif ($units <= 200) {
            $energy = 100 * 2.50 + ($units - 100) * 3.50;
        }
        elseif ($units <= 300) {
            $energy = 100 * 2.50 + 100 * 3.50 + ($units - 200) * 5.00;
        }
        else {
            $energy = 100 * 2.50 + 100 * 3.50 + 100 * 5.00 + ($units - 300) * 7.00;
        }

        $tax = $energy * 0.05;
        $total = $energy + $fixed + $tax;
    ?>

    <div class="bill">

        <h3>⚡ Electricity Bill</h3>

        <table>
            <tr>
                <td>Customer Name</td>
                <td><?php echo $cname; ?></td>
            </tr>

            <tr>
                <td>Consumer Number</td>
                <td><?php echo $cno; ?></td>
            </tr>

            <tr>
                <td>Units Consumed</td>
                <td><?php echo $units; ?> Units</td>
            </tr>

            <tr>
                <td>Energy Charge</td>
                <td>Rs. <?php printf("%.2f", $energy); ?></td>
            </tr>

            <tr>
                <td>Fixed Charge</td>
                <td>Rs. <?php printf("%.2f", $fixed); ?></td>
            </tr>

            <tr>
                <td>Tax (5%)</td>
                <td>Rs. <?php printf("%.2f", $tax); ?></td>
            </tr>

            <tr class="total">
                <td>Total Amount</td>
                <td>Rs. <?php printf("%.2f", $total); ?></td>
            </tr>
        </table>

    </div>

    <?php } ?>

    <div class="footer">
        Electricity Bill Management System
    </div>

</div>

</body>
</html>
