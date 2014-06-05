<?php
//define placeholder based on odd or even minute
    $min = intval(date('i'));

    if ($min % 2 == 0) {
      $setName = "CampaignA";
    } else {
      $setName = "CampaignB";
    }

$modx->setPlaceholder('campaign', $setName);