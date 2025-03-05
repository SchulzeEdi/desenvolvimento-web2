<?php

require_once 'vendor/autoload.php';

use Mpdf\Mpdf;

$mpdf = new mPDF();

$html = '
<h1>Gerador de PDF Simples</h1>
<p>Desenvolvimento WEB 2.</p>
<ul>
    <li>Item 1</li>
    <li>Item 2</li>
    <li>Item 3</li>
    <li>Item 4</li>
    <li>Item 5</li>
</ul>
';
$mpdf->WriteHTML($html);

$mpdf->Output('desenvolvimento_web_2.pdf', 'I');
