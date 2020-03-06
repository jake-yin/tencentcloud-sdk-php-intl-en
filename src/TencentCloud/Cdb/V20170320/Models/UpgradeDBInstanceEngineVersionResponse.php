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
 * @method string getAsyncRequestId() Obtain Async task ID. The task execution result can be queried using the [async task execution result querying API](https://cloud.tencent.com/document/api/236/20410).
 * @method void setAsyncRequestId(string $AsyncRequestId) Set Async task ID. The task execution result can be queried using the [async task execution result querying API](https://cloud.tencent.com/document/api/236/20410).
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *UpgradeDBInstanceEngineVersion response structure.
 */
class UpgradeDBInstanceEngineVersionResponse extends AbstractModel
{
    /**
     * @var string Async task ID. The task execution result can be queried using the [async task execution result querying API](https://cloud.tencent.com/document/api/236/20410).
     */
    public $AsyncRequestId;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param string $AsyncRequestId Async task ID. The task execution result can be queried using the [async task execution result querying API](https://cloud.tencent.com/document/api/236/20410).
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
        if (array_key_exists("AsyncRequestId",$param) and $param["AsyncRequestId"] !== null) {
            $this->AsyncRequestId = $param["AsyncRequestId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
