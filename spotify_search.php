<?php
// Spotify API credentials
$client_id = 'df4b79efda1c4f76b4691547292810f0d';
$client_secret = 'c01d2b0ac67149f3b018c9f7934a7dceet';

// Function to fetch access token
function getAccessToken($client_id, $client_secret) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://accounts.spotify.com/api/token');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'grant_type=client_credentials');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Basic ' . base64_encode("$client_id:$client_secret")
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $response_data = json_decode($response, true);
    return $response_data['access_token'] ?? null;
}

// Fetch access token
$token = getAccessToken($client_id, $client_secret);
if (!$token) {
    echo json_encode(['error' => 'Failed to fetch access token']);
    exit;
}

// Handle query
$query = $_GET['query'] ?? '';
if (!$query) {
    echo json_encode(['error' => 'No query provided']);
    exit;
}

// Perform search on Spotify API
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.spotify.com/v1/search?type=track&q=' . urlencode($query));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer $token"
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Return response
header('Content-Type: application/json');
echo $response;
?>
