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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInvocations request structure.
 *
 * @method array getInvocationIds() Obtain List of execution activity IDs. Up to 100 IDs are allowed for each request. `InvocationIds` and `Filters` cannot be specified at the same time.
 * @method void setInvocationIds(array $InvocationIds) Set List of execution activity IDs. Up to 100 IDs are allowed for each request. `InvocationIds` and `Filters` cannot be specified at the same time.
 * @method array getFilters() Obtain Filter conditions.<br> <li> `invocation-id` - String - Required: No - (Filter condition) Filter by the execution activity ID.<br> 
<li> `command-id` - String - Required: No - (Filter condition) Filter by the command ID. 
<li> `command-created-by` - String - Required: No - (Filter condition) Filter by the command type. Valid values: `TAT` (public commands) or `USER` (custom commands).
<li> `instance-kind` - String - Required: No - (Filter condition) Filter by the instance type. Valid values: `CVM` or `LIGHTHOUSE`. 
<br>Up to 10 `Filters` are allowed for each request. Each filter can have up to five `Filter.Values`. `InvocationIds` and `Filters` cannot be specified at the same time.
 * @method void setFilters(array $Filters) Set Filter conditions.<br> <li> `invocation-id` - String - Required: No - (Filter condition) Filter by the execution activity ID.<br> 
<li> `command-id` - String - Required: No - (Filter condition) Filter by the command ID. 
<li> `command-created-by` - String - Required: No - (Filter condition) Filter by the command type. Valid values: `TAT` (public commands) or `USER` (custom commands).
<li> `instance-kind` - String - Required: No - (Filter condition) Filter by the instance type. Valid values: `CVM` or `LIGHTHOUSE`. 
<br>Up to 10 `Filters` are allowed for each request. Each filter can have up to five `Filter.Values`. `InvocationIds` and `Filters` cannot be specified at the same time.
 * @method integer getLimit() Obtain Number of returned results. It defaults to `20`. The maximum is 100. For more information on `Limit`, see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set Number of returned results. It defaults to `20`. The maximum is 100. For more information on `Limit`, see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method integer getOffset() Obtain Offset. The default value is `0`. For more information on `Offset`, see the relevant section in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset. The default value is `0`. For more information on `Offset`, see the relevant section in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 */
class DescribeInvocationsRequest extends AbstractModel
{
    /**
     * @var array List of execution activity IDs. Up to 100 IDs are allowed for each request. `InvocationIds` and `Filters` cannot be specified at the same time.
     */
    public $InvocationIds;

    /**
     * @var array Filter conditions.<br> <li> `invocation-id` - String - Required: No - (Filter condition) Filter by the execution activity ID.<br> 
<li> `command-id` - String - Required: No - (Filter condition) Filter by the command ID. 
<li> `command-created-by` - String - Required: No - (Filter condition) Filter by the command type. Valid values: `TAT` (public commands) or `USER` (custom commands).
<li> `instance-kind` - String - Required: No - (Filter condition) Filter by the instance type. Valid values: `CVM` or `LIGHTHOUSE`. 
<br>Up to 10 `Filters` are allowed for each request. Each filter can have up to five `Filter.Values`. `InvocationIds` and `Filters` cannot be specified at the same time.
     */
    public $Filters;

    /**
     * @var integer Number of returned results. It defaults to `20`. The maximum is 100. For more information on `Limit`, see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Limit;

    /**
     * @var integer Offset. The default value is `0`. For more information on `Offset`, see the relevant section in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @param array $InvocationIds List of execution activity IDs. Up to 100 IDs are allowed for each request. `InvocationIds` and `Filters` cannot be specified at the same time.
     * @param array $Filters Filter conditions.<br> <li> `invocation-id` - String - Required: No - (Filter condition) Filter by the execution activity ID.<br> 
<li> `command-id` - String - Required: No - (Filter condition) Filter by the command ID. 
<li> `command-created-by` - String - Required: No - (Filter condition) Filter by the command type. Valid values: `TAT` (public commands) or `USER` (custom commands).
<li> `instance-kind` - String - Required: No - (Filter condition) Filter by the instance type. Valid values: `CVM` or `LIGHTHOUSE`. 
<br>Up to 10 `Filters` are allowed for each request. Each filter can have up to five `Filter.Values`. `InvocationIds` and `Filters` cannot be specified at the same time.
     * @param integer $Limit Number of returned results. It defaults to `20`. The maximum is 100. For more information on `Limit`, see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     * @param integer $Offset Offset. The default value is `0`. For more information on `Offset`, see the relevant section in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
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
        if (array_key_exists("InvocationIds",$param) and $param["InvocationIds"] !== null) {
            $this->InvocationIds = $param["InvocationIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
