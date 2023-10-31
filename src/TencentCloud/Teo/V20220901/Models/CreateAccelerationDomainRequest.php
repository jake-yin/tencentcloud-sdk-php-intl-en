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
 * CreateAccelerationDomain request structure.
 *
 * @method string getZoneId() Obtain ID of the site related with the acceleration domain name.
 * @method void setZoneId(string $ZoneId) Set ID of the site related with the acceleration domain name.
 * @method string getDomainName() Obtain Acceleration domain name
 * @method void setDomainName(string $DomainName) Set Acceleration domain name
 * @method OriginInfo getOriginInfo() Obtain Details of the origin.
 * @method void setOriginInfo(OriginInfo $OriginInfo) Set Details of the origin.
 * @method string getOriginProtocol() Obtain 
 * @method void setOriginProtocol(string $OriginProtocol) Set 
 * @method integer getHttpOriginPort() Obtain 
 * @method void setHttpOriginPort(integer $HttpOriginPort) Set 
 * @method integer getHttpsOriginPort() Obtain 
 * @method void setHttpsOriginPort(integer $HttpsOriginPort) Set 
 * @method string getIPv6Status() Obtain 
 * @method void setIPv6Status(string $IPv6Status) Set 
 */
class CreateAccelerationDomainRequest extends AbstractModel
{
    /**
     * @var string ID of the site related with the acceleration domain name.
     */
    public $ZoneId;

    /**
     * @var string Acceleration domain name
     */
    public $DomainName;

    /**
     * @var OriginInfo Details of the origin.
     */
    public $OriginInfo;

    /**
     * @var string 
     */
    public $OriginProtocol;

    /**
     * @var integer 
     */
    public $HttpOriginPort;

    /**
     * @var integer 
     */
    public $HttpsOriginPort;

    /**
     * @var string 
     */
    public $IPv6Status;

    /**
     * @param string $ZoneId ID of the site related with the acceleration domain name.
     * @param string $DomainName Acceleration domain name
     * @param OriginInfo $OriginInfo Details of the origin.
     * @param string $OriginProtocol 
     * @param integer $HttpOriginPort 
     * @param integer $HttpsOriginPort 
     * @param string $IPv6Status 
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

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("OriginInfo",$param) and $param["OriginInfo"] !== null) {
            $this->OriginInfo = new OriginInfo();
            $this->OriginInfo->deserialize($param["OriginInfo"]);
        }

        if (array_key_exists("OriginProtocol",$param) and $param["OriginProtocol"] !== null) {
            $this->OriginProtocol = $param["OriginProtocol"];
        }

        if (array_key_exists("HttpOriginPort",$param) and $param["HttpOriginPort"] !== null) {
            $this->HttpOriginPort = $param["HttpOriginPort"];
        }

        if (array_key_exists("HttpsOriginPort",$param) and $param["HttpsOriginPort"] !== null) {
            $this->HttpsOriginPort = $param["HttpsOriginPort"];
        }

        if (array_key_exists("IPv6Status",$param) and $param["IPv6Status"] !== null) {
            $this->IPv6Status = $param["IPv6Status"];
        }
    }
}
