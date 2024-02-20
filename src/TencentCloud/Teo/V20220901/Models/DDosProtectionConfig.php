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
 * Exclusive DDoS protection specifications configuration applicable to Layer 4 proxy or web site service.
 *
 * @method string getLevelMainland() Obtain Exclusive DDoS protection specifications in the Chinese mainland. For details, see [Dedicated DDoS Mitigation Fee (Pay-as-You-Go)] (https://intl.cloud.tencent.com/document/product/1552/94162?from_cn_redirect=1).<li>PLATFORM: Default protection of the platform, i.e., Exclusive DDoS protection is not enabled;</li>
<li>BASE30_MAX300: Exclusive DDoS protection enabled, providing a baseline protection bandwidth of 30 Gbps and an elastic protection bandwidth of up to 300 Gbps;</li><li>BASE60_MAX600: Exclusive DDoS protection enabled, providing a baseline protection bandwidth of 60 Gbps and an elastic protection bandwidth of up to 600 Gbps.</li>If no parameters are filled, the default value PLATFORM is used.
 * @method void setLevelMainland(string $LevelMainland) Set Exclusive DDoS protection specifications in the Chinese mainland. For details, see [Dedicated DDoS Mitigation Fee (Pay-as-You-Go)] (https://intl.cloud.tencent.com/document/product/1552/94162?from_cn_redirect=1).<li>PLATFORM: Default protection of the platform, i.e., Exclusive DDoS protection is not enabled;</li>
<li>BASE30_MAX300: Exclusive DDoS protection enabled, providing a baseline protection bandwidth of 30 Gbps and an elastic protection bandwidth of up to 300 Gbps;</li><li>BASE60_MAX600: Exclusive DDoS protection enabled, providing a baseline protection bandwidth of 60 Gbps and an elastic protection bandwidth of up to 600 Gbps.</li>If no parameters are filled, the default value PLATFORM is used.
 * @method integer getMaxBandwidthMainland() Obtain Configuration of elastic protection bandwidth for exclusive DDoS protection in the Chinese mainland.Valid only when exclusive DDoS protection in the Chinese mainland is enabled (refer to the LevelMainland parameter configuration), and the value has the following limitations:<li>When exclusive DDoS protection is enabled in the Chinese mainland and the 30 Gbps baseline protection bandwidth is used (the LevelMainland parameter value is BASE30_MAX300): the value range is 30 to 300 in Gbps;</li><li>When exclusive DDoS protection is enabled in the Chinese mainland and the 60 Gbps baseline protection bandwidth is used (the LevelMainland parameter value is BASE60_MAX600): the value range is 60 to 600 in Gbps;</li><li>When the default protection of the platform is used (the LevelMainland parameter value is PLATFORM): configuration is not supported, and the value of this parameter is invalid.</li>
 * @method void setMaxBandwidthMainland(integer $MaxBandwidthMainland) Set Configuration of elastic protection bandwidth for exclusive DDoS protection in the Chinese mainland.Valid only when exclusive DDoS protection in the Chinese mainland is enabled (refer to the LevelMainland parameter configuration), and the value has the following limitations:<li>When exclusive DDoS protection is enabled in the Chinese mainland and the 30 Gbps baseline protection bandwidth is used (the LevelMainland parameter value is BASE30_MAX300): the value range is 30 to 300 in Gbps;</li><li>When exclusive DDoS protection is enabled in the Chinese mainland and the 60 Gbps baseline protection bandwidth is used (the LevelMainland parameter value is BASE60_MAX600): the value range is 60 to 600 in Gbps;</li><li>When the default protection of the platform is used (the LevelMainland parameter value is PLATFORM): configuration is not supported, and the value of this parameter is invalid.</li>
 * @method string getLevelOverseas() Obtain Exclusive DDoS protection specifications in the worldwide region (excluding the Chinese mainland).<li>PLATFORM: Default protection of the platform, i.e., Exclusive DDoS protection is not enabled;</li><li>ANYCAST300: Exclusive DDoS protection enabled, offering a total maximum protection bandwidth of 300 Gbps;</li>
<li>ANYCAST_ALLIN: Exclusive DDoS protection enabled, utilizing all available protection resources for protection.</li>When no parameters are filled, the default value PLATFORM is used.
 * @method void setLevelOverseas(string $LevelOverseas) Set Exclusive DDoS protection specifications in the worldwide region (excluding the Chinese mainland).<li>PLATFORM: Default protection of the platform, i.e., Exclusive DDoS protection is not enabled;</li><li>ANYCAST300: Exclusive DDoS protection enabled, offering a total maximum protection bandwidth of 300 Gbps;</li>
<li>ANYCAST_ALLIN: Exclusive DDoS protection enabled, utilizing all available protection resources for protection.</li>When no parameters are filled, the default value PLATFORM is used.
 */
class DDosProtectionConfig extends AbstractModel
{
    /**
     * @var string Exclusive DDoS protection specifications in the Chinese mainland. For details, see [Dedicated DDoS Mitigation Fee (Pay-as-You-Go)] (https://intl.cloud.tencent.com/document/product/1552/94162?from_cn_redirect=1).<li>PLATFORM: Default protection of the platform, i.e., Exclusive DDoS protection is not enabled;</li>
<li>BASE30_MAX300: Exclusive DDoS protection enabled, providing a baseline protection bandwidth of 30 Gbps and an elastic protection bandwidth of up to 300 Gbps;</li><li>BASE60_MAX600: Exclusive DDoS protection enabled, providing a baseline protection bandwidth of 60 Gbps and an elastic protection bandwidth of up to 600 Gbps.</li>If no parameters are filled, the default value PLATFORM is used.
     */
    public $LevelMainland;

    /**
     * @var integer Configuration of elastic protection bandwidth for exclusive DDoS protection in the Chinese mainland.Valid only when exclusive DDoS protection in the Chinese mainland is enabled (refer to the LevelMainland parameter configuration), and the value has the following limitations:<li>When exclusive DDoS protection is enabled in the Chinese mainland and the 30 Gbps baseline protection bandwidth is used (the LevelMainland parameter value is BASE30_MAX300): the value range is 30 to 300 in Gbps;</li><li>When exclusive DDoS protection is enabled in the Chinese mainland and the 60 Gbps baseline protection bandwidth is used (the LevelMainland parameter value is BASE60_MAX600): the value range is 60 to 600 in Gbps;</li><li>When the default protection of the platform is used (the LevelMainland parameter value is PLATFORM): configuration is not supported, and the value of this parameter is invalid.</li>
     */
    public $MaxBandwidthMainland;

    /**
     * @var string Exclusive DDoS protection specifications in the worldwide region (excluding the Chinese mainland).<li>PLATFORM: Default protection of the platform, i.e., Exclusive DDoS protection is not enabled;</li><li>ANYCAST300: Exclusive DDoS protection enabled, offering a total maximum protection bandwidth of 300 Gbps;</li>
<li>ANYCAST_ALLIN: Exclusive DDoS protection enabled, utilizing all available protection resources for protection.</li>When no parameters are filled, the default value PLATFORM is used.
     */
    public $LevelOverseas;

    /**
     * @param string $LevelMainland Exclusive DDoS protection specifications in the Chinese mainland. For details, see [Dedicated DDoS Mitigation Fee (Pay-as-You-Go)] (https://intl.cloud.tencent.com/document/product/1552/94162?from_cn_redirect=1).<li>PLATFORM: Default protection of the platform, i.e., Exclusive DDoS protection is not enabled;</li>
<li>BASE30_MAX300: Exclusive DDoS protection enabled, providing a baseline protection bandwidth of 30 Gbps and an elastic protection bandwidth of up to 300 Gbps;</li><li>BASE60_MAX600: Exclusive DDoS protection enabled, providing a baseline protection bandwidth of 60 Gbps and an elastic protection bandwidth of up to 600 Gbps.</li>If no parameters are filled, the default value PLATFORM is used.
     * @param integer $MaxBandwidthMainland Configuration of elastic protection bandwidth for exclusive DDoS protection in the Chinese mainland.Valid only when exclusive DDoS protection in the Chinese mainland is enabled (refer to the LevelMainland parameter configuration), and the value has the following limitations:<li>When exclusive DDoS protection is enabled in the Chinese mainland and the 30 Gbps baseline protection bandwidth is used (the LevelMainland parameter value is BASE30_MAX300): the value range is 30 to 300 in Gbps;</li><li>When exclusive DDoS protection is enabled in the Chinese mainland and the 60 Gbps baseline protection bandwidth is used (the LevelMainland parameter value is BASE60_MAX600): the value range is 60 to 600 in Gbps;</li><li>When the default protection of the platform is used (the LevelMainland parameter value is PLATFORM): configuration is not supported, and the value of this parameter is invalid.</li>
     * @param string $LevelOverseas Exclusive DDoS protection specifications in the worldwide region (excluding the Chinese mainland).<li>PLATFORM: Default protection of the platform, i.e., Exclusive DDoS protection is not enabled;</li><li>ANYCAST300: Exclusive DDoS protection enabled, offering a total maximum protection bandwidth of 300 Gbps;</li>
<li>ANYCAST_ALLIN: Exclusive DDoS protection enabled, utilizing all available protection resources for protection.</li>When no parameters are filled, the default value PLATFORM is used.
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
        if (array_key_exists("LevelMainland",$param) and $param["LevelMainland"] !== null) {
            $this->LevelMainland = $param["LevelMainland"];
        }

        if (array_key_exists("MaxBandwidthMainland",$param) and $param["MaxBandwidthMainland"] !== null) {
            $this->MaxBandwidthMainland = $param["MaxBandwidthMainland"];
        }

        if (array_key_exists("LevelOverseas",$param) and $param["LevelOverseas"] !== null) {
            $this->LevelOverseas = $param["LevelOverseas"];
        }
    }
}
