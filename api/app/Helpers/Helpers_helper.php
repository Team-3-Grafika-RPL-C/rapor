<?php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

function generateToken(string $str)
{
    return hash('sha256', uniqid('') . $str);
}

function passwordHash(string $password)
{
    return hash('sha256', 'RAPORTS339' . $password);
}

function getTokenJwt($jwt)
{
    if (!$jwt) return false;
    try {
        $payload = JWT::decode($jwt, new Key(JWT_KEY, 'HS256'));
    } catch (Exception $exception) {
        return false;
    }
    return $payload->token;
}

function setTokenJwt(string $token)
{
    try {
        $jwt = JWT::encode(['token' => $token], JWT_KEY, 'HS256');
    } catch (Exception $exception) {
        return false;
    }
    return $jwt;
}

function addMonths($months, DateTime $dateObject)
{
    $next = new DateTime($dateObject->format('Y-m-d'));
    $next->modify('last day of +' . $months . ' month');

    if ($dateObject->format('d') > $next->format('d')) {
        return $dateObject->diff($next);
    } else {
        return new DateInterval('P' . $months . 'M');
    }
}

function endCycle($d1, $months)
{
    $date = new DateTime($d1);

    // call second function to add the months
    $newDate = $date->add(addMonths($months, $date));

    // goes back 1 day from date, remove if you want same day of month
    $newDate->sub(new DateInterval('P1D'));

    //formats final date to Y-m-d form
    $dateReturned = $newDate->format('Y-m-d');

    return $dateReturned;
}

function generateCode(int $len = 6)
{

    $hex = md5("Guest-Book" . uniqid("", true));

    $pack = pack('H*', $hex);
    $tmp =  base64_encode($pack);

    $uid = preg_replace("#(*UTF8)[^A-Za-z0-9]#", "", $tmp);

    $len = max(4, min(128, $len));

    while (strlen($uid) < $len)
        $uid .= generateCode(22);

    return substr($uid, 0, $len);
}

function encrypt($key, $payload)
{
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted = openssl_encrypt($payload, 'aes-256-cbc', $key, 0, $iv);
    return base64_encode($encrypted . '::' . $iv);
}

function decrypt($key, $garble)
{
    list($encrypted_data, $iv) = explode('::', base64_decode($garble), 2);
    return openssl_decrypt($encrypted_data, 'aes-256-cbc', $key, 0, $iv);
}

function getLanguage()
{
    $language = substr(($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'en'), 0, 2);
    if (!in_array($language, LANGUAGE)) $language = 'en';
    return $language;
}

function generateIdTokenWithId(string $id)
{
    return hash('sha256', uniqid() . $id);
}
