
<!DOCTYPE html>
<html>
<head>
    <title>Indian Cricket Players</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #dcfce7, #f0fdf4);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px 15px;
        }

        .container {
            width: 100%;
            max-width: 750px;
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.12);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .icon {
            font-size: 50px;
            margin-bottom: 10px;
        }

        h2 {
            color: #166534;
            font-size: 28px;
            margin-bottom: 8px;
        }

        .header p {
            color: #64748b;
            font-size: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            overflow: hidden;
            border-radius: 10px;
        }

        th {
            background: #15803d;
            color: white;
            padding: 15px;
            text-align: left;
            font-size: 15px;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #e2e8f0;
            color: #334155;
            font-size: 15px;
        }

        tr:nth-child(even) {
            background: #f0fdf4;
        }

        tr:hover {
            background: #dcfce7;
        }

        .role {
            display: inline-block;
            padding: 6px 12px;
            background: #dcfce7;
            color: #166534;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
        }

        .total {
            margin-top: 25px;
            padding: 18px;
            background: #15803d;
            color: white;
            border-radius: 10px;
            text-align: center;
            font-size: 19px;
            font-weight: bold;
        }

        .footer {
            text-align: center;
            margin-top: 25px;
            color: #94a3b8;
            font-size: 12px;
        }

        @media(max-width: 500px) {
            .container {
                padding: 20px;
            }

            th, td {
                padding: 10px 6px;
                font-size: 13px;
            }

            h2 {
                font-size: 23px;
            }
        }

    </style>
</head>

<body>

<div class="container">

    <div class="header">
        <div class="icon">🏏</div>
        <h2>Indian Cricket Players</h2>
        <p>Details of Indian cricket players and their roles</p>
    </div>

    <?php

    $players = array(
        "Rohit Sharma"    => "Batsman",
        "Jasprit Bumrah"  => "Bowler",
        "Ravindra Jadeja" => "All-rounder",
        "MS Dhoni"        => "Wicket-keeper"
    );

    echo "<table>";

    echo "<tr>
            <th>S.No</th>
            <th>Player Name</th>
            <th>Role</th>
          </tr>";

    $i = 1;

    foreach ($players as $name => $role) {

        echo "<tr>";
        echo "<td>" . $i . "</td>";
        echo "<td><strong>" . htmlspecialchars($name) . "</strong></td>";
        echo "<td><span class='role'>" . htmlspecialchars($role) . "</span></td>";
        echo "</tr>";

        $i++;
    }

    echo "</table>";

    echo "<div class='total'>";
    echo "🏆 Total Players: " . count($players);
    echo "</div>";

    ?>

    <div class="footer">
        Indian Cricket Players Management | PHP Practical
    </div>

</div>

</body>
</html>
