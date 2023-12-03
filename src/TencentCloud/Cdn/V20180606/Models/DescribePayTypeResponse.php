<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePayType response structure.
 *
 * @method string getPayType() Obtain Billing type
`flux`: Bill by traffic
`bandwidth`: Bill by bandwidth
`request`: Bill by the number of requests
`flux_sep`: Bill by dynamic and static traffic separately 
`bandwidth_sep`: Bill by dynamic and static bandwidth separately
If you incur any usage when switching the billing mode, the new mode will take effect the next day. If no usage is incurred, the new mode takes effect immediately.
 * @method void setPayType(string $PayType) Set Billing type
`flux`: Bill by traffic
`bandwidth`: Bill by bandwidth
`request`: Bill by the number of requests
`flux_sep`: Bill by dynamic and static traffic separately 
`bandwidth_sep`: Bill by dynamic and static bandwidth separately
If you incur any usage when switching the billing mode, the new mode will take effect the next day. If no usage is incurred, the new mode takes effect immediately.
 * @method string getBillingCycle() Obtain Billing cycle
`day`: Daily
`month`: Monthly
`hour`: Hourly
 * @method void setBillingCycle(string $BillingCycle) Set Billing cycle
`day`: Daily
`month`: Monthly
`hour`: Hourly
 * @method string getStatType() Obtain Statistic data
`monthMax`: Billed monthly based on the monthly average daily peak traffic
`day95`: Billed monthly based on the daily 95th percentile bandwidth
`month95`: Billed monthly based on the monthly 95th percentile bandwidth
`sum`: Billed daily/monthly based on the total traffic or requests
`max`: Billed daily based on the peak bandwidth
 * @method void setStatType(string $StatType) Set Statistic data
`monthMax`: Billed monthly based on the monthly average daily peak traffic
`day95`: Billed monthly based on the daily 95th percentile bandwidth
`month95`: Billed monthly based on the monthly 95th percentile bandwidth
`sum`: Billed daily/monthly based on the total traffic or requests
`max`: Billed daily based on the peak bandwidth
 * @method string getRegionType() Obtain Regionl billing
`all`: Unified billing for all regions
`multiple`: Region-specific billing
 * @method void setRegionType(string $RegionType) Set Regionl billing
`all`: Unified billing for all regions
`multiple`: Region-specific billing
 * @method string getCurrentPayType() Obtain Current billing mode
`flux`: Bill by traffic
`bandwidth`: Bill by bandwidth
`request`: Bill by the number of requests
`flux_sep`: Bill by dynamic and static traffic separately 
`bandwidth_sep`: Bill by dynamic and static bandwidth separately
 * @method void setCurrentPayType(string $CurrentPayType) Set Current billing mode
`flux`: Bill by traffic
`bandwidth`: Bill by bandwidth
`request`: Bill by the number of requests
`flux_sep`: Bill by dynamic and static traffic separately 
`bandwidth_sep`: Bill by dynamic and static bandwidth separately
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribePayTypeResponse extends AbstractModel
{
    /**
     * @var string Billing type
`flux`: Bill by traffic
`bandwidth`: Bill by bandwidth
`request`: Bill by the number of requests
`flux_sep`: Bill by dynamic and static traffic separately 
`bandwidth_sep`: Bill by dynamic and static bandwidth separately
If you incur any usage when switching the billing mode, the new mode will take effect the next day. If no usage is incurred, the new mode takes effect immediately.
     */
    public $PayType;

    /**
     * @var string Billing cycle
`day`: Daily
`month`: Monthly
`hour`: Hourly
     */
    public $BillingCycle;

    /**
     * @var string Statistic data
`monthMax`: Billed monthly based on the monthly average daily peak traffic
`day95`: Billed monthly based on the daily 95th percentile bandwidth
`month95`: Billed monthly based on the monthly 95th percentile bandwidth
`sum`: Billed daily/monthly based on the total traffic or requests
`max`: Billed daily based on the peak bandwidth
     */
    public $StatType;

    /**
     * @var string Regionl billing
`all`: Unified billing for all regions
`multiple`: Region-specific billing
     */
    public $RegionType;

    /**
     * @var string Current billing mode
`flux`: Bill by traffic
`bandwidth`: Bill by bandwidth
`request`: Bill by the number of requests
`flux_sep`: Bill by dynamic and static traffic separately 
`bandwidth_sep`: Bill by dynamic and static bandwidth separately
     */
    public $CurrentPayType;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $PayType Billing type
`flux`: Bill by traffic
`bandwidth`: Bill by bandwidth
`request`: Bill by the number of requests
`flux_sep`: Bill by dynamic and static traffic separately 
`bandwidth_sep`: Bill by dynamic and static bandwidth separately
If you incur any usage when switching the billing mode, the new mode will take effect the next day. If no usage is incurred, the new mode takes effect immediately.
     * @param string $BillingCycle Billing cycle
`day`: Daily
`month`: Monthly
`hour`: Hourly
     * @param string $StatType Statistic data
`monthMax`: Billed monthly based on the monthly average daily peak traffic
`day95`: Billed monthly based on the daily 95th percentile bandwidth
`month95`: Billed monthly based on the monthly 95th percentile bandwidth
`sum`: Billed daily/monthly based on the total traffic or requests
`max`: Billed daily based on the peak bandwidth
     * @param string $RegionType Regionl billing
`all`: Unified billing for all regions
`multiple`: Region-specific billing
     * @param string $CurrentPayType Current billing mode
`flux`: Bill by traffic
`bandwidth`: Bill by bandwidth
`request`: Bill by the number of requests
`flux_sep`: Bill by dynamic and static traffic separately 
`bandwidth_sep`: Bill by dynamic and static bandwidth separately
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("BillingCycle",$param) and $param["BillingCycle"] !== null) {
            $this->BillingCycle = $param["BillingCycle"];
        }

        if (array_key_exists("StatType",$param) and $param["StatType"] !== null) {
            $this->StatType = $param["StatType"];
        }

        if (array_key_exists("RegionType",$param) and $param["RegionType"] !== null) {
            $this->RegionType = $param["RegionType"];
        }

        if (array_key_exists("CurrentPayType",$param) and $param["CurrentPayType"] !== null) {
            $this->CurrentPayType = $param["CurrentPayType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
