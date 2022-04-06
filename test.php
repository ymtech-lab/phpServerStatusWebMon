<?php
        $output = '';
        $str='lscpu';
        if (isset($str) && $str != '') {
                ob_start();
                passthru($str);
                $output = ob_get_clean();
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8" />
        <title>command test</title>
</head>
<body>
        <pre>
<?php echo htmlspecialchars($output); ?>
        </pre>
</body>
