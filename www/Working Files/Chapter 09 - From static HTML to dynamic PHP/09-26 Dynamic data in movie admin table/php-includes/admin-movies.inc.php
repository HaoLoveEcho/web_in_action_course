<?php $dataRow = showMovies('admin'); ?>

<section class="admin">
            <div class="admin_movies">
                <?php
                if (!isset($testMovies) || $testMovies!="no_data") {
                    echo "<h2>Manage movies</h2>";
                }
                ?>
                <table class="admin_table">
                    <tr>
                        <th class="data_col">Title</th>
                        <th class="data_col description">Description</th>
                        <th class="admin_col">Insert/Delete</th>
                    </tr>
                    <?php echo $dataRow; ?>        
                    <tr class='newdatarow'>
                        <td><input class='newdata' type='text' name='title' value=''></td>
                        <td><input class='newdata' type='text' name='description' value=''></td>
                        <td class='insertcell'><div></div></td>
                    </tr>
                </table>
            </div>
        </section>