<?php
// Seznam platných kódů a odpovědí
$validCodes = array(
    'test1' => 'a',
    'test2' => 'b',
    'test3' => 'c',
    'test4' => 'd'
    // Přidejte další kódy a odpovědi dle potřeby
);

// Získání kódu z POST požadavku
$inputCode = $_POST['code'];

// Kontrola kódu
if (array_key_exists($inputCode, $validCodes)) {
    // Vytvoření odpovědi ve formátu JSON
    $response = array(
        'success' => true,
        'message' => $validCodes[$inputCode]
    );
} else {
    $response = array('success' => false);
}

// Odeslání odpovědi zpět klientovi
header('Content-Type: application/json');
echo json_encode($response);
?>
