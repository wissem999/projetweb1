<?php
// Inclure la classe TCPDF
require_once('tcpdf/tcpdf.php');

// Créer une instance de TCPDF
$pdf = new TCPDF();

// Définir les informations du document PDF
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Votre Nom');
$pdf->SetTitle('Votre CV');
$pdf->SetSubject('CV');

// Ajouter une page
$pdf->AddPage();

// Charger le contenu HTML de votre CV
ob_start();
include 'cv template 2.php';
$content = ob_get_clean();

// Intégrer le CSS dans le HTML
$html = '<style>' . file_get_contents('css\cv1.css') . '</style>' . $content;

// Ajouter le contenu de cv template 2.php au PDF
$pdf->writeHTML($html);

// Rendre le PDF téléchargeable
$pdf->Output('cv2fr.pdf', 'D');

// Terminer le script pour éviter toute sortie supplémentaire
exit;
?>
