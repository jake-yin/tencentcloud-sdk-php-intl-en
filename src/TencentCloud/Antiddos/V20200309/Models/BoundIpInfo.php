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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP bound to the Anti-DDoS Pro instance
 *
 * @method string getIp() Obtain IP address
 * @method void setIp(string $Ip) Set IP address
 * @method string getBizType() Obtain Category of product that can be bound. Valid values: `public` (CVM and CLB), `bm` (BM), `eni` (ENI), `vpngw` (VPN gateway), `natgw` (NAT gateway), `waf` (WAF), `fpc` (financial products), `gaap` (GAAP), and `other` (hosted IP).
 * @method void setBizType(string $BizType) Set Category of product that can be bound. Valid values: `public` (CVM and CLB), `bm` (BM), `eni` (ENI), `vpngw` (VPN gateway), `natgw` (NAT gateway), `waf` (WAF), `fpc` (financial products), `gaap` (GAAP), and `other` (hosted IP).
 * @method string getInstanceId() Obtain Anti-DDoS instance ID of the IP. This field is required if the instance ID is bound to a new IP. For example, this field InstanceId will be `eni-*` if the instance ID is bound to an ENI IP; `none` if there is no instance ID to bind to a hosted IP.
 * @method void setInstanceId(string $InstanceId) Set Anti-DDoS instance ID of the IP. This field is required if the instance ID is bound to a new IP. For example, this field InstanceId will be `eni-*` if the instance ID is bound to an ENI IP; `none` if there is no instance ID to bind to a hosted IP.
 * @method string getDeviceType() Obtain Sub-product category. Valid values: `cvm` (CVM), `lb` (Load balancer), `eni` (ENI), `vpngw` (VPN gateway), `natgw` (NAT gateway), `waf` (WAF), `fpc` (financial products), `gaap` (GAAP), `eip` (BM EIP) and `other` (hosted IP).
 * @method void setDeviceType(string $DeviceType) Set Sub-product category. Valid values: `cvm` (CVM), `lb` (Load balancer), `eni` (ENI), `vpngw` (VPN gateway), `natgw` (NAT gateway), `waf` (WAF), `fpc` (financial products), `gaap` (GAAP), `eip` (BM EIP) and `other` (hosted IP).
 * @method integer getIspCode() Obtain ISP. Valid values: `0` (China Telecom), `1` (China Unicom), `2` (China Mobile),`5` (BGP).
 * @method void setIspCode(integer $IspCode) Set ISP. Valid values: `0` (China Telecom), `1` (China Unicom), `2` (China Mobile),`5` (BGP).
 */
class BoundIpInfo extends AbstractModel
{
    /**
     * @var string IP address
     */
    public $Ip;

    /**
     * @var string Category of product that can be bound. Valid values: `public` (CVM and CLB), `bm` (BM), `eni` (ENI), `vpngw` (VPN gateway), `natgw` (NAT gateway), `waf` (WAF), `fpc` (financial products), `gaap` (GAAP), and `other` (hosted IP).
     */
    public $BizType;

    /**
     * @var string Anti-DDoS instance ID of the IP. This field is required if the instance ID is bound to a new IP. For example, this field InstanceId will be `eni-*` if the instance ID is bound to an ENI IP; `none` if there is no instance ID to bind to a hosted IP.
     */
    public $InstanceId;

    /**
     * @var string Sub-product category. Valid values: `cvm` (CVM), `lb` (Load balancer), `eni` (ENI), `vpngw` (VPN gateway), `natgw` (NAT gateway), `waf` (WAF), `fpc` (financial products), `gaap` (GAAP), `eip` (BM EIP) and `other` (hosted IP).
     */
    public $DeviceType;

    /**
     * @var integer ISP. Valid values: `0` (China Telecom), `1` (China Unicom), `2` (China Mobile),`5` (BGP).
     */
    public $IspCode;

    /**
     * @param string $Ip IP address
     * @param string $BizType Category of product that can be bound. Valid values: `public` (CVM and CLB), `bm` (BM), `eni` (ENI), `vpngw` (VPN gateway), `natgw` (NAT gateway), `waf` (WAF), `fpc` (financial products), `gaap` (GAAP), and `other` (hosted IP).
     * @param string $InstanceId Anti-DDoS instance ID of the IP. This field is required if the instance ID is bound to a new IP. For example, this field InstanceId will be `eni-*` if the instance ID is bound to an ENI IP; `none` if there is no instance ID to bind to a hosted IP.
     * @param string $DeviceType Sub-product category. Valid values: `cvm` (CVM), `lb` (Load balancer), `eni` (ENI), `vpngw` (VPN gateway), `natgw` (NAT gateway), `waf` (WAF), `fpc` (financial products), `gaap` (GAAP), `eip` (BM EIP) and `other` (hosted IP).
     * @param integer $IspCode ISP. Valid values: `0` (China Telecom), `1` (China Unicom), `2` (China Mobile),`5` (BGP).
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("IspCode",$param) and $param["IspCode"] !== null) {
            $this->IspCode = $param["IspCode"];
        }
    }
}
