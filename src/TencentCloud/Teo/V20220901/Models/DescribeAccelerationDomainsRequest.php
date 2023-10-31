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
 * DescribeAccelerationDomains request structure.
 *
 * @method string getZoneId() Obtain ID of the site related with the acceleration domain name.
 * @method void setZoneId(string $ZoneId) Set ID of the site related with the acceleration domain name.
 * @method integer getOffset() Obtain Offset for paginated queries. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset for paginated queries. Default value: 0.
 * @method integer getLimit() Obtain Limit on paginated queries. Default value: 20. Maximum value: 200.
 * @method void setLimit(integer $Limit) Set Limit on paginated queries. Default value: 20. Maximum value: 200.
 * @method array getFilters() Obtain Filter conditions. Up to 20 values for each filter. If it is not passed in, all domain names related with the specific zone-id are returned. 
<li>`domain-name`: Acceleration domain name</li>
<li>`origin-type`: Type of the origin</li>
<li>`origin`: Primary origin address</li>
<li>`backup-origin`: Secondary origin address</li>
<li>`domain-cname`: CNAME</li>
<li>`share-cname`: Shared CNAME</li>
 * @method void setFilters(array $Filters) Set Filter conditions. Up to 20 values for each filter. If it is not passed in, all domain names related with the specific zone-id are returned. 
<li>`domain-name`: Acceleration domain name</li>
<li>`origin-type`: Type of the origin</li>
<li>`origin`: Primary origin address</li>
<li>`backup-origin`: Secondary origin address</li>
<li>`domain-cname`: CNAME</li>
<li>`share-cname`: Shared CNAME</li>
 * @method string getOrder() Obtain Sort the returned results according to this field. Values include:
<li>`created_on`: Creation time of the acceleration domain name</li>
<li>`domain-name`: (Default) Acceleration domain name.</li> 
 * @method void setOrder(string $Order) Set Sort the returned results according to this field. Values include:
<li>`created_on`: Creation time of the acceleration domain name</li>
<li>`domain-name`: (Default) Acceleration domain name.</li> 
 * @method string getDirection() Obtain Sort direction. If the field value is number, sort by the numeric value. If the field value is text, sort by the ascill code. Values include:
<li>`asc`: Ascending order.</li>
<li>`desc`: Descending order.</li> Default value: `asc`.
 * @method void setDirection(string $Direction) Set Sort direction. If the field value is number, sort by the numeric value. If the field value is text, sort by the ascill code. Values include:
<li>`asc`: Ascending order.</li>
<li>`desc`: Descending order.</li> Default value: `asc`.
 * @method string getMatch() Obtain The match mode. Values:
<li>`all`: Return all matches.</li>
<li>`any`: Return any match.</li>Default value: `all`.
 * @method void setMatch(string $Match) Set The match mode. Values:
<li>`all`: Return all matches.</li>
<li>`any`: Return any match.</li>Default value: `all`.
 */
class DescribeAccelerationDomainsRequest extends AbstractModel
{
    /**
     * @var string ID of the site related with the acceleration domain name.
     */
    public $ZoneId;

    /**
     * @var integer Offset for paginated queries. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Limit on paginated queries. Default value: 20. Maximum value: 200.
     */
    public $Limit;

    /**
     * @var array Filter conditions. Up to 20 values for each filter. If it is not passed in, all domain names related with the specific zone-id are returned. 
<li>`domain-name`: Acceleration domain name</li>
<li>`origin-type`: Type of the origin</li>
<li>`origin`: Primary origin address</li>
<li>`backup-origin`: Secondary origin address</li>
<li>`domain-cname`: CNAME</li>
<li>`share-cname`: Shared CNAME</li>
     */
    public $Filters;

    /**
     * @var string Sort the returned results according to this field. Values include:
<li>`created_on`: Creation time of the acceleration domain name</li>
<li>`domain-name`: (Default) Acceleration domain name.</li> 
     */
    public $Order;

    /**
     * @var string Sort direction. If the field value is number, sort by the numeric value. If the field value is text, sort by the ascill code. Values include:
<li>`asc`: Ascending order.</li>
<li>`desc`: Descending order.</li> Default value: `asc`.
     */
    public $Direction;

    /**
     * @var string The match mode. Values:
<li>`all`: Return all matches.</li>
<li>`any`: Return any match.</li>Default value: `all`.
     */
    public $Match;

    /**
     * @param string $ZoneId ID of the site related with the acceleration domain name.
     * @param integer $Offset Offset for paginated queries. Default value: 0.
     * @param integer $Limit Limit on paginated queries. Default value: 20. Maximum value: 200.
     * @param array $Filters Filter conditions. Up to 20 values for each filter. If it is not passed in, all domain names related with the specific zone-id are returned. 
<li>`domain-name`: Acceleration domain name</li>
<li>`origin-type`: Type of the origin</li>
<li>`origin`: Primary origin address</li>
<li>`backup-origin`: Secondary origin address</li>
<li>`domain-cname`: CNAME</li>
<li>`share-cname`: Shared CNAME</li>
     * @param string $Order Sort the returned results according to this field. Values include:
<li>`created_on`: Creation time of the acceleration domain name</li>
<li>`domain-name`: (Default) Acceleration domain name.</li> 
     * @param string $Direction Sort direction. If the field value is number, sort by the numeric value. If the field value is text, sort by the ascill code. Values include:
<li>`asc`: Ascending order.</li>
<li>`desc`: Descending order.</li> Default value: `asc`.
     * @param string $Match The match mode. Values:
<li>`all`: Return all matches.</li>
<li>`any`: Return any match.</li>Default value: `all`.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AdvancedFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Match",$param) and $param["Match"] !== null) {
            $this->Match = $param["Match"];
        }
    }
}
