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
 * IP blocklist/allowlist path-based configuration
 *
 * @method string getFilterType() Obtain 
 * @method void setFilterType(string $FilterType) Set 
 * @method array getFilters() Obtain 
 * @method void setFilters(array $Filters) Set 
 * @method string getRuleType() Obtain 
 * @method void setRuleType(string $RuleType) Set 
 * @method array getRulePaths() Obtain 
 * @method void setRulePaths(array $RulePaths) Set 
 */
class IpFilterPathRule extends AbstractModel
{
    /**
     * @var string 
     */
    public $FilterType;

    /**
     * @var array 
     */
    public $Filters;

    /**
     * @var string 
     */
    public $RuleType;

    /**
     * @var array 
     */
    public $RulePaths;

    /**
     * @param string $FilterType 
     * @param array $Filters 
     * @param string $RuleType 
     * @param array $RulePaths 
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
        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = $param["Filters"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RulePaths",$param) and $param["RulePaths"] !== null) {
            $this->RulePaths = $param["RulePaths"];
        }
    }
}
