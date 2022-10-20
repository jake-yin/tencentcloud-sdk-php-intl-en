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
 * CLB information
 *
 * @method string getLoadBalancingId() Obtain The load balancer ID.
 * @method void setLoadBalancingId(string $LoadBalancingId) Set The load balancer ID.
 * @method string getZoneId() Obtain The site ID.
 * @method void setZoneId(string $ZoneId) Set The site ID.
 * @method string getHost() Obtain Subdomain name. You can use @ to represent the root domain.
 * @method void setHost(string $Host) Set Subdomain name. You can use @ to represent the root domain.
 * @method string getType() Obtain The proxy mode. Values:
<li>`dns_only`: Only DNS</li>
<li>`proxied`: Proxied</li>
 * @method void setType(string $Type) Set The proxy mode. Values:
<li>`dns_only`: Only DNS</li>
<li>`proxied`: Proxied</li>
 * @method integer getTTL() Obtain The cache time of DNS records when `Type=dns_only`.
 * @method void setTTL(integer $TTL) Set The cache time of DNS records when `Type=dns_only`.
 * @method string getStatus() Obtain The load balancer status. Values:
<li>`online`: Deployed</li>
<li>`process`: Deployment in progress</li>
 * @method void setStatus(string $Status) Set The load balancer status. Values:
<li>`online`: Deployed</li>
<li>`process`: Deployment in progress</li>
 * @method string getCname() Obtain Schedules domain names.
 * @method void setCname(string $Cname) Set Schedules domain names.
 * @method string getOriginGroupId() Obtain The ID of the primary origin group.
 * @method void setOriginGroupId(string $OriginGroupId) Set The ID of the primary origin group.
 * @method string getBackupOriginGroupId() Obtain The ID of the secondary origin group. If not specified, it indicates that secondary origins are not used.
 * @method void setBackupOriginGroupId(string $BackupOriginGroupId) Set The ID of the secondary origin group. If not specified, it indicates that secondary origins are not used.
 * @method string getUpdateTime() Obtain The update time.
 * @method void setUpdateTime(string $UpdateTime) Set The update time.
 * @method string getOriginType() Obtain 
 * @method void setOriginType(string $OriginType) Set 
 * @method array getAdvancedOriginGroups() Obtain 
 * @method void setAdvancedOriginGroups(array $AdvancedOriginGroups) Set 
 */
class LoadBalancing extends AbstractModel
{
    /**
     * @var string The load balancer ID.
     */
    public $LoadBalancingId;

    /**
     * @var string The site ID.
     */
    public $ZoneId;

    /**
     * @var string Subdomain name. You can use @ to represent the root domain.
     */
    public $Host;

    /**
     * @var string The proxy mode. Values:
<li>`dns_only`: Only DNS</li>
<li>`proxied`: Proxied</li>
     */
    public $Type;

    /**
     * @var integer The cache time of DNS records when `Type=dns_only`.
     */
    public $TTL;

    /**
     * @var string The load balancer status. Values:
<li>`online`: Deployed</li>
<li>`process`: Deployment in progress</li>
     */
    public $Status;

    /**
     * @var string Schedules domain names.
     */
    public $Cname;

    /**
     * @var string The ID of the primary origin group.
     */
    public $OriginGroupId;

    /**
     * @var string The ID of the secondary origin group. If not specified, it indicates that secondary origins are not used.
     */
    public $BackupOriginGroupId;

    /**
     * @var string The update time.
     */
    public $UpdateTime;

    /**
     * @var string 
     */
    public $OriginType;

    /**
     * @var array 
     */
    public $AdvancedOriginGroups;

    /**
     * @param string $LoadBalancingId The load balancer ID.
     * @param string $ZoneId The site ID.
     * @param string $Host Subdomain name. You can use @ to represent the root domain.
     * @param string $Type The proxy mode. Values:
<li>`dns_only`: Only DNS</li>
<li>`proxied`: Proxied</li>
     * @param integer $TTL The cache time of DNS records when `Type=dns_only`.
     * @param string $Status The load balancer status. Values:
<li>`online`: Deployed</li>
<li>`process`: Deployment in progress</li>
     * @param string $Cname Schedules domain names.
     * @param string $OriginGroupId The ID of the primary origin group.
     * @param string $BackupOriginGroupId The ID of the secondary origin group. If not specified, it indicates that secondary origins are not used.
     * @param string $UpdateTime The update time.
     * @param string $OriginType 
     * @param array $AdvancedOriginGroups 
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
        if (array_key_exists("LoadBalancingId",$param) and $param["LoadBalancingId"] !== null) {
            $this->LoadBalancingId = $param["LoadBalancingId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("OriginGroupId",$param) and $param["OriginGroupId"] !== null) {
            $this->OriginGroupId = $param["OriginGroupId"];
        }

        if (array_key_exists("BackupOriginGroupId",$param) and $param["BackupOriginGroupId"] !== null) {
            $this->BackupOriginGroupId = $param["BackupOriginGroupId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("AdvancedOriginGroups",$param) and $param["AdvancedOriginGroups"] !== null) {
            $this->AdvancedOriginGroups = [];
            foreach ($param["AdvancedOriginGroups"] as $key => $value){
                $obj = new AdvancedOriginGroup();
                $obj->deserialize($value);
                array_push($this->AdvancedOriginGroups, $obj);
            }
        }
    }
}
