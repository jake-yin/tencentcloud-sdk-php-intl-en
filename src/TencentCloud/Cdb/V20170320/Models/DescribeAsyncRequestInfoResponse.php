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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getStatus() Obtain Task execution result. Valid values: INITIAL, RUNNING, SUCCESS, FAILED, KILLED, REMOVED, PAUSED.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Task execution result. Valid values: INITIAL, RUNNING, SUCCESS, FAILED, KILLED, REMOVED, PAUSED.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInfo() Obtain Task execution information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInfo(string $Info) Set Task execution information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeAsyncRequestInfo response structure.
 */
class DescribeAsyncRequestInfoResponse extends AbstractModel
{
    /**
     * @var string Task execution result. Valid values: INITIAL, RUNNING, SUCCESS, FAILED, KILLED, REMOVED, PAUSED.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Task execution information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Info;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param string $Status Task execution result. Valid values: INITIAL, RUNNING, SUCCESS, FAILED, KILLED, REMOVED, PAUSED.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Info Task execution information.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = $param["Info"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
