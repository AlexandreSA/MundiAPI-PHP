<?php

$apiClient = new \MundiAPILib\MundiAPIClient(
    $testSecretKey,
    ''
);

$chargesController = $apiClient->getCharges();

$chargeId = "ch_8YQ1JeTLzF8zlqWy";
$request = new \MundiAPILib\Models\CreateCaptureChargeRequest();
$request->code = "new_code";

$result = $chargesController->captureCharge($chargeId, $request);

return $result;

