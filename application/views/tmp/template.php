<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <?php
            foreach ($styles as $value_style) {
                echo HTML::style($value_style);
            }
        ?>
        
        <?php
            foreach ($scripts as $value_script) {
                echo HTML::script($value_script);
            }
        ?>
    </head>
    <body>
        <div class="wrp">
        <img class="img-wrp" src="/design/img/rg_bg.png" alt="" width="100%" height="100%" />
        <div class="top"></div>
        <div class="header">
            <h1>SIMPLE TODO LISTS</h1>
            <span>FROM RUBY GARAGE</span>
        </div>
        <?php
            echo $content;
        ?>
        <div class="clear"></div>
        <div class="add-project">
            <button class="btn-large btlist" type="button">Add TODO List</button>
        </div>
        </div>
    </body>
</html>
