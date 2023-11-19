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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCDNDomains response structure.
 *
 * @method array getDomainSet() Obtain Domain information list.
 * @method void setDomainSet(array $DomainSet) Set Domain information list.
 * @method integer getTotalCount() Obtain The total number of CDN domains under the current application.
 * @method void setTotalCount(integer $TotalCount) Set The total number of CDN domains under the current application.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeCDNDomainsResponse extends AbstractModel
{
    /**
     * @var array Domain information list.
     */
    public $DomainSet;

    /**
     * @var integer The total number of CDN domains under the current application.
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $DomainSet Domain information list.
     * @param integer $TotalCount The total number of CDN domains under the current application.
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
        if (array_key_exists("DomainSet",$param) and $param["DomainSet"] !== null) {
            $this->DomainSet = [];
            foreach ($param["DomainSet"] as $key => $value){
                $obj = new CDNDomainInfo();
                $obj->deserialize($value);
                array_push($this->DomainSet, $obj);
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
