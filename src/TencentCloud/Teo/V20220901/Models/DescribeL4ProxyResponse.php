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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeL4Proxy response structure.
 *
 * @method integer getTotalCount() Obtain The number of Layer 4 proxy instances.
 * @method void setTotalCount(integer $TotalCount) Set The number of Layer 4 proxy instances.
 * @method array getL4Proxies() Obtain List of Layer 4 proxy instances.
 * @method void setL4Proxies(array $L4Proxies) Set List of Layer 4 proxy instances.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeL4ProxyResponse extends AbstractModel
{
    /**
     * @var integer The number of Layer 4 proxy instances.
     */
    public $TotalCount;

    /**
     * @var array List of Layer 4 proxy instances.
     */
    public $L4Proxies;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount The number of Layer 4 proxy instances.
     * @param array $L4Proxies List of Layer 4 proxy instances.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("L4Proxies",$param) and $param["L4Proxies"] !== null) {
            $this->L4Proxies = [];
            foreach ($param["L4Proxies"] as $key => $value){
                $obj = new L4Proxy();
                $obj->deserialize($value);
                array_push($this->L4Proxies, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
