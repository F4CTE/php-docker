<?php
$Title = 'Home';
require_once __DIR__.'/file-inclusion/layout/head.php';
require_once __DIR__.'/file-inclusion/layout/header.php';


function roundToUpperHalf(int|float $num): int|float{
    return round($num * 2) / 2;
}

?>

<main class="d-flex align-items-center justify-content-center">
    <?php echo roundToUpperHalf(1.25); ?>
</main>

<?php
require_once __DIR__.'/file-inclusion/layout/footer.php';
?>