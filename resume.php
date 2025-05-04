<?php

$file = 'assets/Ezedin_Kedir_CV.pdf';

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="Ezedin_Kedir_CV.pdf"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    
    ob_clean();
    flush();
    readfile($file);
    exit;
} 
else {
    header('Location: index.php');
    exit;
}
?>
