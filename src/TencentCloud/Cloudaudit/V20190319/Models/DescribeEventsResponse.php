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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEvents response structure.
 *
 * @method boolean getListOver() Obtain Whether the logset ends.
 * @method void setListOver(boolean $ListOver) Set Whether the logset ends.
 * @method integer getNextToken() Obtain Credential for viewing more logs.
 * @method void setNextToken(integer $NextToken) Set Credential for viewing more logs.
 * @method array getEvents() Obtain Logset.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setEvents(array $Events) Set Logset.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Total number of events.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total number of events.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeEventsResponse extends AbstractModel
{
    /**
     * @var boolean Whether the logset ends.
     */
    public $ListOver;

    /**
     * @var integer Credential for viewing more logs.
     */
    public $NextToken;

    /**
     * @var array Logset.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $Events;

    /**
     * @var integer Total number of events.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param boolean $ListOver Whether the logset ends.
     * @param integer $NextToken Credential for viewing more logs.
     * @param array $Events Logset.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param integer $TotalCount Total number of events.
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("ListOver",$param) and $param["ListOver"] !== null) {
            $this->ListOver = $param["ListOver"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("Events",$param) and $param["Events"] !== null) {
            $this->Events = [];
            foreach ($param["Events"] as $key => $value){
                $obj = new Event();
                $obj->deserialize($value);
                array_push($this->Events, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
