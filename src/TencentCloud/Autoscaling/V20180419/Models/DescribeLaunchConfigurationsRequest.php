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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLaunchConfigurations request structure.
 *
 * @method array getLaunchConfigurationIds() Obtain Queries by one or more launch configuration IDs in the format of `asc-ouy1ax38`. The maximum quantity per request is 100. This parameter does not support specifying both `LaunchConfigurationIds` and `Filters` at the same time.
 * @method void setLaunchConfigurationIds(array $LaunchConfigurationIds) Set Queries by one or more launch configuration IDs in the format of `asc-ouy1ax38`. The maximum quantity per request is 100. This parameter does not support specifying both `LaunchConfigurationIds` and `Filters` at the same time.
 * @method array getFilters() Obtain Filters
<li> `launch-configuration-id` - String - Required: No - Filter by launch configuration ID.</li>
<li> `launch-configuration-name` - String - Required: No - Filter by launch configuration name.</li>
<li> `launch-configuration-name` - String - Required: No - Fuzzy search by launch configuration name.</li>
<li> `tag-key` - String - Required: No - Filter by the tag key.</li>
<li> `tag-value` - String - Required: No - Filter by the tag value.</li>
<li>tag:tag-key - String - Optional - Filter by tag key pair. Use a specific tag key to replace `tag-key`. See Example 3 for the detailed usage.</li>
</li>
The maximum number of `Filters` per request is 10. The upper limit for `Filter.Values` is 5. This parameter does not support specifying both `LaunchConfigurationIds` and `Filters` at the same time.
 * @method void setFilters(array $Filters) Set Filters
<li> `launch-configuration-id` - String - Required: No - Filter by launch configuration ID.</li>
<li> `launch-configuration-name` - String - Required: No - Filter by launch configuration name.</li>
<li> `launch-configuration-name` - String - Required: No - Fuzzy search by launch configuration name.</li>
<li> `tag-key` - String - Required: No - Filter by the tag key.</li>
<li> `tag-value` - String - Required: No - Filter by the tag value.</li>
<li>tag:tag-key - String - Optional - Filter by tag key pair. Use a specific tag key to replace `tag-key`. See Example 3 for the detailed usage.</li>
</li>
The maximum number of `Filters` per request is 10. The upper limit for `Filter.Values` is 5. This parameter does not support specifying both `LaunchConfigurationIds` and `Filters` at the same time.
 * @method integer getLimit() Obtain The number of returned results. Default value: `20`. Maximum value: `100`. For more information on `Limit`, see the relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set The number of returned results. Default value: `20`. Maximum value: `100`. For more information on `Limit`, see the relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method integer getOffset() Obtain The offset. Default value: `0`. For more information on `Offset`, see the relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set The offset. Default value: `0`. For more information on `Offset`, see the relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 */
class DescribeLaunchConfigurationsRequest extends AbstractModel
{
    /**
     * @var array Queries by one or more launch configuration IDs in the format of `asc-ouy1ax38`. The maximum quantity per request is 100. This parameter does not support specifying both `LaunchConfigurationIds` and `Filters` at the same time.
     */
    public $LaunchConfigurationIds;

    /**
     * @var array Filters
<li> `launch-configuration-id` - String - Required: No - Filter by launch configuration ID.</li>
<li> `launch-configuration-name` - String - Required: No - Filter by launch configuration name.</li>
<li> `launch-configuration-name` - String - Required: No - Fuzzy search by launch configuration name.</li>
<li> `tag-key` - String - Required: No - Filter by the tag key.</li>
<li> `tag-value` - String - Required: No - Filter by the tag value.</li>
<li>tag:tag-key - String - Optional - Filter by tag key pair. Use a specific tag key to replace `tag-key`. See Example 3 for the detailed usage.</li>
</li>
The maximum number of `Filters` per request is 10. The upper limit for `Filter.Values` is 5. This parameter does not support specifying both `LaunchConfigurationIds` and `Filters` at the same time.
     */
    public $Filters;

    /**
     * @var integer The number of returned results. Default value: `20`. Maximum value: `100`. For more information on `Limit`, see the relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Limit;

    /**
     * @var integer The offset. Default value: `0`. For more information on `Offset`, see the relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @param array $LaunchConfigurationIds Queries by one or more launch configuration IDs in the format of `asc-ouy1ax38`. The maximum quantity per request is 100. This parameter does not support specifying both `LaunchConfigurationIds` and `Filters` at the same time.
     * @param array $Filters Filters
<li> `launch-configuration-id` - String - Required: No - Filter by launch configuration ID.</li>
<li> `launch-configuration-name` - String - Required: No - Filter by launch configuration name.</li>
<li> `launch-configuration-name` - String - Required: No - Fuzzy search by launch configuration name.</li>
<li> `tag-key` - String - Required: No - Filter by the tag key.</li>
<li> `tag-value` - String - Required: No - Filter by the tag value.</li>
<li>tag:tag-key - String - Optional - Filter by tag key pair. Use a specific tag key to replace `tag-key`. See Example 3 for the detailed usage.</li>
</li>
The maximum number of `Filters` per request is 10. The upper limit for `Filter.Values` is 5. This parameter does not support specifying both `LaunchConfigurationIds` and `Filters` at the same time.
     * @param integer $Limit The number of returned results. Default value: `20`. Maximum value: `100`. For more information on `Limit`, see the relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     * @param integer $Offset The offset. Default value: `0`. For more information on `Offset`, see the relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
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
        if (array_key_exists("LaunchConfigurationIds",$param) and $param["LaunchConfigurationIds"] !== null) {
            $this->LaunchConfigurationIds = $param["LaunchConfigurationIds"];
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
