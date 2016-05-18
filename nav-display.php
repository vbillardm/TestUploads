<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href=\"http://localhost:8000/?p="<?=$nav->slug?>">WtfWeb"</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php
                    var_dump($nav);
                    while($row = $nav->fetchObject()) {
                        echo "<li><a href=\"http://localhost:8000/?p=".$row->slug."\">".$row->title."</a></li>";
                    }

                ?>
            </ul>
        </div>
    </div>
</nav>
