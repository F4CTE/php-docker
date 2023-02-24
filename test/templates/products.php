<?php
$Title = 'Products';
require_once __DIR__.'/../file-inclusion/layout/head.php';
require_once __DIR__.'/../file-inclusion/layout/header.php';
require_once __DIR__.'/../file-inclusion/data/products.php';

$html = '<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>';
        $arrayKeys = array_keys($products[0]);
        foreach ($arrayKeys as $key) {
            $html .= '<th>' . $key . '</th>';
        }
$html.='</tr>
    </thead>
    <tbody>';
    foreach ($products as $product) {
        $html .= '<tr>';
        foreach ($product as $key => $value) {
            if ($key === 'promo') {
                $value = $value ? 'Yes' : 'No';
            }
            $html .= '<td>' . $value . '</td>';
        }
        $html .= '</tr>';
    }
    $html.= '</tbody>
</table>';

$html = '<div class="container">'.$html.'</div>';
echo $html;

require_once __DIR__.'../file-inclusion/layout/footer.php';