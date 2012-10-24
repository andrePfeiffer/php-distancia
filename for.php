<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form>
            <select name="dia">
                <?php for($i = 1; $i <= 31; $i++): ?>
                    <option value="<?php print $i; ?>"><?php print $i; ?></option>
                <?php endfor; ?>
            </select>
            /
            <select name="mes">
                <?php for($i = 1; $i <= 12; $i++): ?>
                    <option value="<?php print $i; ?>"><?php print $i; ?></option>
                <?php endfor; ?>
            </select>
            /
            <select name="ano">
                <?php for($i = 1900; $i <= 2012; $i++): ?>
                    <option value="<?php print $i; ?>"><?php print $i; ?></option>
                <?php endfor; ?>
            </select>
        </form>
    </body>
</html>
