
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Work Tasks</h2>
    <table border = "1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Priority</th>
            <th>Notes</th>
            <th>Status</th>
        </tr>
        <?php
            $fileName = "worktasks.txt";
            $file = file($fileName, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($file as $line){
                list($id, $name, $description, $priority, $notes, $status) = explode("|", $line);
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$name</td>";
                echo "<td>$description</td>";
                echo "<td>$priority</td>";
                echo "<td>$notes</td>";
                echo "<td>$status</td>";
                echo "</tr>";
            }
        ?>
    </table>

    <?php
        $fileName = "worktasks.txt";

        $file = file($fileName, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        if (isset($_POST["add"])){
            $id = $_POST["id"];
            $name = $_POST["name"];
            $description = $_POST["description"];
            $priority = $_POST["priority"];
            $notes = $_POST["notes"];
            $status = $_POST["status"];

            $file[] = "$id|$name|$description|$priority|$notes|$status";

            file_put_contents($fileName, implode("\n", $file));
        }


    ?>

    <h2>Add Work Tasks</h2>
    <form action ="index.php" method = "post">
        <label>ID</label>
        <input type="text" name="id"><br><br>
        <label>Name</label>
        <input type="text" name="name"><br><br>
        <label>Description</label>
        <input type="text" name="description"><br><br>
        <label>Priority</label>
        <select name="priority">
            <option value="low">Low</option>
            <option value="high">High</option>
        </select><br><br>
        <label>Notes</label>
        <input type="text" name="notes"><br><br>
        <label>Status</label>
        <select name="status">
            <option value="not">Not Started</option>
            <option value="progress">In Progress</option>
            <option value ="complete">Completed</option>
        </select><br><br>

        <input type="submit" name = "add" value="add">

    </form>

    <?php

        if (isset($_POST["edit"])){
            $id = $_POST["id"];
            $name = $_POST["name"];
            $description = $_POST["description"];
            $priority = $_POST["priority"];
            $notes = $_POST["notes"];
            $status = $_POST["status"];

            $file = file($fileName, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

            foreach ($file as $index => $line){
                list($id2, $name2, $description2, $priority2, $notes2, $status2) = explode("|", $line);
                if ($id2 == $id){
                    $file[$index] = "$id|$name|$description|$priority|$notes|$status";
                    break;
                }
            }

            file_put_contents($fileName, implode("\n", $file));
        }

    ?>
    <h2>Edit Work Tasks</h2>
    <form action = "index.php" method = "post">
        <label>ID</label>
        <input type="text" name="id"><br><br>
        <label>Name</label>
        <input type="text" name="name"><br><br>
        <label>Description</label>
        <input type="text" name="description"><br><br>
        <label>Priority</label>
        <select name="priority">
            <option value="low">Low</option>
            <option value="high">High</option>
        </select><br><br>
        <label>Notes</label>
        <input type="text" name="notes"><br><br>
        <label>Status</label>
        <select name="status">
            <option value="not">Not Started</option>
            <option value="progress">In Progress</option>
            <option value ="complete">Completed</option>
        </select><br><br>
        <input type="submit" name = "edit" value="edit">
    </form>

</body>
</html>