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
 * `ListAudits` response parameters structure
 *
 * @method array getAuditSummarys() Obtain Set of queried tracking set summaries
 * @method void setAuditSummarys(array $AuditSummarys) Set Set of queried tracking set summaries
 * @method string getRequestId() Obtain Unique ID of request. Each request returns a unique ID. The `RequestId` is required for troubleshooting.
 * @method void setRequestId(string $RequestId) Set Unique ID of request. Each request returns a unique ID. The `RequestId` is required for troubleshooting.
 */
class ListAuditsResponse extends AbstractModel
{
    /**
     * @var array Set of queried tracking set summaries
     */
    public $AuditSummarys;

    /**
     * @var string Unique ID of request. Each request returns a unique ID. The `RequestId` is required for troubleshooting.
     */
    public $RequestId;

    /**
     * @param array $AuditSummarys Set of queried tracking set summaries
     * @param string $RequestId Unique ID of request. Each request returns a unique ID. The `RequestId` is required for troubleshooting.
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
        if (array_key_exists("AuditSummarys",$param) and $param["AuditSummarys"] !== null) {
            $this->AuditSummarys = [];
            foreach ($param["AuditSummarys"] as $key => $value){
                $obj = new AuditSummary();
                $obj->deserialize($value);
                array_push($this->AuditSummarys, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
