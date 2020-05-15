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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillBandwidthAndFluxList response structure.
 *
 * @method string getPeakBandwidthTime() Obtain Time point of peak bandwidth value in the format of yyyy-mm-dd HH:MM:SS.
 * @method void setPeakBandwidthTime(string $PeakBandwidthTime) Set Time point of peak bandwidth value in the format of yyyy-mm-dd HH:MM:SS.
 * @method float getPeakBandwidth() Obtain Bandwidth in Mbps.
 * @method void setPeakBandwidth(float $PeakBandwidth) Set Bandwidth in Mbps.
 * @method string getP95PeakBandwidthTime() Obtain Time point of the 95th percentile bandwidth value in the format of yyyy-mm-dd HH:MM:SS.
 * @method void setP95PeakBandwidthTime(string $P95PeakBandwidthTime) Set Time point of the 95th percentile bandwidth value in the format of yyyy-mm-dd HH:MM:SS.
 * @method float getP95PeakBandwidth() Obtain 95th percentile bandwidth in Mbps.
 * @method void setP95PeakBandwidth(float $P95PeakBandwidth) Set 95th percentile bandwidth in Mbps.
 * @method float getSumFlux() Obtain Total traffic in MB.
 * @method void setSumFlux(float $SumFlux) Set Total traffic in MB.
 * @method array getDataInfoList() Obtain Detailed data information.
 * @method void setDataInfoList(array $DataInfoList) Set Detailed data information.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeBillBandwidthAndFluxListResponse extends AbstractModel
{
    /**
     * @var string Time point of peak bandwidth value in the format of yyyy-mm-dd HH:MM:SS.
     */
    public $PeakBandwidthTime;

    /**
     * @var float Bandwidth in Mbps.
     */
    public $PeakBandwidth;

    /**
     * @var string Time point of the 95th percentile bandwidth value in the format of yyyy-mm-dd HH:MM:SS.
     */
    public $P95PeakBandwidthTime;

    /**
     * @var float 95th percentile bandwidth in Mbps.
     */
    public $P95PeakBandwidth;

    /**
     * @var float Total traffic in MB.
     */
    public $SumFlux;

    /**
     * @var array Detailed data information.
     */
    public $DataInfoList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $PeakBandwidthTime Time point of peak bandwidth value in the format of yyyy-mm-dd HH:MM:SS.
     * @param float $PeakBandwidth Bandwidth in Mbps.
     * @param string $P95PeakBandwidthTime Time point of the 95th percentile bandwidth value in the format of yyyy-mm-dd HH:MM:SS.
     * @param float $P95PeakBandwidth 95th percentile bandwidth in Mbps.
     * @param float $SumFlux Total traffic in MB.
     * @param array $DataInfoList Detailed data information.
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
        if (array_key_exists("PeakBandwidthTime",$param) and $param["PeakBandwidthTime"] !== null) {
            $this->PeakBandwidthTime = $param["PeakBandwidthTime"];
        }

        if (array_key_exists("PeakBandwidth",$param) and $param["PeakBandwidth"] !== null) {
            $this->PeakBandwidth = $param["PeakBandwidth"];
        }

        if (array_key_exists("P95PeakBandwidthTime",$param) and $param["P95PeakBandwidthTime"] !== null) {
            $this->P95PeakBandwidthTime = $param["P95PeakBandwidthTime"];
        }

        if (array_key_exists("P95PeakBandwidth",$param) and $param["P95PeakBandwidth"] !== null) {
            $this->P95PeakBandwidth = $param["P95PeakBandwidth"];
        }

        if (array_key_exists("SumFlux",$param) and $param["SumFlux"] !== null) {
            $this->SumFlux = $param["SumFlux"];
        }

        if (array_key_exists("DataInfoList",$param) and $param["DataInfoList"] !== null) {
            $this->DataInfoList = [];
            foreach ($param["DataInfoList"] as $key => $value){
                $obj = new BillDataInfo();
                $obj->deserialize($value);
                array_push($this->DataInfoList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
