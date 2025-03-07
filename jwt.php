<?php
function generate_jwt($payload) {
    $header = base64_encode(json_encode(['alg' => 'HS256', 'typ' => 'JWT']));
    $payload = base64_encode(json_encode($payload));
    $signature = hash_hmac('sha256', "$header.$payload", 'supresecret', true);
    $signature = base64_encode($signature);
    return "$header.$payload.$signature";
}

function verify_jwt($jwt) {
    list($header, $payload, $signature) = explode('.', $jwt);
    $valid = base64_encode(hash_hmac('sha256', "$header.$payload", 'SECRET123', true));
    return hash_equals($valid, $signature);
}
?>