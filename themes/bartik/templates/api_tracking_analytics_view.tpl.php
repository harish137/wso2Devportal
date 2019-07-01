<div class="api-analytics">
    <div><span class="api-analytics-data"><strong>Context Id :  </strong><?php print $delta['contextId']; ?></span></div>
    <div><span class="api-analytics-data"><strong>Asset Id :  </strong><?php print $delta['assetId']; ?></span></div>
    <div><span class="api-analytics-data"><strong>Analytic Name :  </strong><?php print $delta['orchestrationStepStatus'][0]['analyticName']; ?></span></div>
    <div><span class="api-analytics-data"><strong>Analytic Version :  </strong><?php print $delta['orchestrationStepStatus'][0]['analyticVersion']; ?></span></div>
    <div><span class="api-analytics-data"><strong>Orchestration Step Status :  </strong><?php print $delta['orchestrationStepStatus'][0]['status']; ?></span></div>
</div>
