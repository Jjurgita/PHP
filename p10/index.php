<!DOCTYPE html>
<html>

<head>
    <title>Hello World</title>
</head>

<body>
    <?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "mysqlroot";
    $dbname = "test";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn)
        die("Connection failed: " . mysqli_connect_error());

    // UPDATE
    if (isset($_POST['create_empl'])) {
        $stmt = $conn->prepare("INSERT INTO test_dml (name, surname, salary) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $name, $surname, $salary);
        $name = $_POST['fname'];
        $surname = $_POST['lname'];
        $salary = $_POST['salary'];
        // var_dump($_POST['salary']);
        $stmt->execute();
        $stmt->close();
        header('Location: ' . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING']);
        die;
    }

    // DELETE
    if (isset($_POST['delete'])) {
        $dlt = $conn->prepare("DELETE FROM test_dml WHERE id = ?");
        $dlt->bind_param("i", $dlt_id);
        $dlt_id = $_POST['id'];
        $dlt->execute();
        $dlt->close();
        // $result = $conn->query($dlt);
        header('Location: ' . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING']);
        die;
    }

    $sql = "SELECT * FROM test_dml";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . " - Name: " . $row["name"] . " " . $row["surname"] . " " . $row["salary"];
            print('<form class="actions" action="" method="POST">
                    <input type="hidden" name="id" value="' . $row['id'] . '">
                    <button type="submit" name="delete" value="' . $row['id'] . '" >Delete</button>
                </form>');
        }
    } else {
        echo "0 results";
    }



    $conn->close();
    ?>
    <br>
    <form action="" method="POST">
        <label for="fname">Name:</label><br>
        <input type="text" id="fname" name="fname" value="John"><br>
        <label for="lname">Surname:</label><br>
        <input type="text" id="lname" name="lname" value="Doe"><br>
        <label for="salary">Salary:</label><br>
        <input type="number" id="salary" name="salary" value="0"><br><br>
        <input type="submit" name="create_empl" value="Submit">
    </form>
</body>

</html>