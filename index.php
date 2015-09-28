<?php
ini_set('display_errors', 1);

require "vendor/autoload.php";

use Emeka\Todo\Model\Todo;
use Emeka\Todo\Database\Driver;
use Emeka\Todo\Database\Connect;
use Emeka\Todo\Database\Migrations\CreateItemTable as Post;

$todolist = new Todo();

?>


<!DOCTYPE html>
<html>
<head>
    <title>Todo</title>
    <link rel="stylesheet" type="text/css" href="asset/css.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
</head>
<body>
    <div class="row">
      <div class="col s6">
        <table>
            <thead>
              <tr>
                  <th data-field="id">Title</th>
                  <th data-field="name">Message</th>
                  <th data-field="price">Created Date</th>
                  <th data-field="price">Delivary Date</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    $data = $todolist->GetTodoList('ITEM');
                    foreach ($data as $key => $value)
                    {
                        echo "<tr>";
                        echo "<td>"; echo $value['title']; "</td>";
                        echo "<td>"; echo $value['message']; "</td>";
                        echo "<td>"; echo $value['created_at']; "</td>";
                        echo "<td>"; echo $value['updated_at']; "</td>";
                    }
                ?>
            </tbody>
        </table>

      </div>
    </div>
</body>
</html>