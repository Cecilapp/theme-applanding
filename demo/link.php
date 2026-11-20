<?php
// Links the repository as `demo/themes/applanding`, so the demo site uses the theme under development.
$target = dirname(__DIR__);
$link = __DIR__ . DIRECTORY_SEPARATOR . 'themes' . DIRECTORY_SEPARATOR . 'applanding';
if (file_exists($link)) {
    echo "Link already exists: $link\n";
    exit(0);
}
@mkdir(dirname($link), 0777, true);
if (PHP_OS_FAMILY === 'Windows') {
    exec(sprintf('mklink /J %s %s', escapeshellarg($link), escapeshellarg($target)), $output, $code);
} else {
    $code = symlink('../..', $link) ? 0 : 1;
}
echo $code === 0 ? "Linked $link -> $target\n" : "Unable to create $link\n";
exit($code);
