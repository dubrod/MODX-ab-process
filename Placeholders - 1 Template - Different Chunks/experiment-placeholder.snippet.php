<?php
//define property set based on randomization
    $min = intval(date('i'));

    if ($min % 2 == 0) {
      $setName = "CampaignA";
    } else {
      $setName = "CampaignB";
    }

$modx->setPlaceholder('campaign', $setName);