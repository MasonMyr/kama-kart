<footer>
    <a href="<?php
                $sql = 'SELECT `Link` FROM `links` WHERE `id` = 1';
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo ($row['Link']);
                }
                ?>" class="fa fa-vk"></a>
    <a href="<?php
                $sql = 'SELECT `Link` FROM `links` WHERE `id` = 2';
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo ($row['Link']);
                }
                ?>" class="fa fa-instagram"></a>
</footer>
