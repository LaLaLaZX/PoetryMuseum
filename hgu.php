<?php
                        $authors = mysqli_query($connect, query: "SELECT * FROM Authors, Type_of_authors WHERE Authors.ID_Type_of_authors = Type_of_authors.ID_Type_of_authors");
                        $authors = mysqli_fetch_all($authors);
                        foreach ($authors as $author) {
                        ?>
                            <tr>
                                <td><?= $author[0] ?></td>
                                <td><?= $author[1] ?></td>
                                <td><?= $author[2] ?></td>
                                <td><?= $author[3] ?></td>
                                <td><?= $author[4]?></td>
                                <td><a href="php/php-handler/update_authors.php?ID_Authors=<?= $author[0] ?>">Изменить</a></td>
                                <td><a href="php/php-handler/delete_authors.php?ID_Authors=<?= $author[0] ?>">Удалить</a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
                <div class="add-one">
                    <form class="add_collections" action="php/php-handler/create_authors.php" method="post">
                        <input type="text" name="authors_surname" class="authors_surname" placeholder="Фамилия"> <br>
                        <input type="text" name="authors_name" class="authors_name" placeholder="Имя"> <br>
                        <input type="text" name="authors_patronymic" class="authors_patronymic" placeholder="Отчество"> <br>
                        <input type="text" name="type_of_authors" class="type_of_authors" placeholder="Тип автора"> <br>
                        <button class="add-but" type="submit">Добавить</button>
                    </form>
                </div>









                <?php
                        if (isset($_GET['ID_Authors'])) {
                            $trackD = $_GET['ID_Authors'];
                            $qDeleteTrack = "DELETE FROM Authors WHERE ID_Authors='$trackD'";
                            addslashes($qDeleteTrack);
                            $resDeleteTrack = mysqli_query($connect, $qDeleteTrack) or die(mysqli_error($connect));
                        }

                        $qInfoTrack = "SELECT *
                    FROM Authors, Type_of_authors
                    WHERE Authors.ID_Type_of_authors = Type_of_authors.ID_Type_of_authors";
                        addslashes($qInfoTrack);
                        $resInfoTrack = mysqli_query($connect, $qInfoTrack) or die(mysqli_error($connect));
                        while ($InfoTrack = mysqli_fetch_object($resInfoTrack)) {
                            echo "
    <div class=\"body-table\">
        <div class=\"admin-container\">
            <div class=\"admin_table_row\">
                <div class=\"admin_table_cell_first admin_projects_table_id\">
                    <p>$InfoTrack->ID_Authors</p>
                </div>
                <div class=\"admin_table_cell admin_projects_table_name\">
                    <p class=\"admin_table_cell-text\">$InfoTrack->Surname</p>
                </div>
                <div class=\"admin_table_cell admin_projects_table_id_order\">
                    <p class=\"admin_table_cell-text\">$InfoTrack->Name</p>
                </div>
                <div class=\"admin_table_cell admin_projects_table_id_order\">
                    <p class=\"admin_table_cell-text\">$InfoTrack->Patronymic</p>
                </div>
                <div class=\"admin_table_cell admin_projects_table_id_order\">
                    <p class=\"admin_table_cell-text\">$InfoTrack->Name</p>
                </div>
                <div class=\"admin_projects_table_act\">
                    <a href=\"edit_track.php?idA=$InfoTrack->ID_Authors\"><img class=\"admin_table_act_image\" src=\"./images/svg/edit_green.svg\"></a>
                <a href=\"?ID_track=$InfoTrack->ID_Authors\"><img class=\"admin_table_act_image\" src=\"./images/svg/delete_green.svg\"></a>
            </div>
        </div>
    </div>
";
                        }
                        ?>
                </div>
            </div>
            <div class="add-one">
                    <form class="add_collections" action="php/php-handler/create_authors.php" method="post">
                        <input type="text" name="authors_surname" class="authors_surname" placeholder="Фамилия"> <br>
                        <input type="text" name="authors_name" class="authors_name" placeholder="Имя"> <br>
                        <input type="text" name="authors_patronymic" class="authors_patronymic" placeholder="Отчество"> <br>
                        <div class="div-input_form-email">
                            <?php
                            $qInfoMusician = "SELECT *
                                            FROM Type_of_authors";
                            addslashes($qInfoMusician);
                            $resInfoMusician = mysqli_query($connect, $qInfoMusician) or die(mysqli_error($connect));
                            echo "<select class=\"select-track\" name=\"typeofauthors\">";
                            while ($InfoMusician = mysqli_fetch_object($resInfoMusician)) {
                                echo "<option name=\"" . $InfoMusician->ID_Type_of_authors . "\" value=\"" . $InfoMusician->ID_Type_of_authors . "\">" . $InfoMusician->Name . "</option>";
                            }
                            echo "</select>";
                            ?>
                        </div> <br>
                        <button class="add-but" type="submit">Добавить</button>
                    </form>
                </div>