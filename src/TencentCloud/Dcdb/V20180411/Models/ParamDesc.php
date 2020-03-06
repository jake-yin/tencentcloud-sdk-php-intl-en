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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getParam() Obtain Parameter name
 * @method void setParam(string $Param) Set Parameter name
 * @method string getValue() Obtain Current parameter value
 * @method void setValue(string $Value) Set Current parameter value
 * @method string getSetValue() Obtain Previously set value, which is the same as `value` after the parameter takes effect. If no value has been set, this field will not be returned.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSetValue(string $SetValue) Set Previously set value, which is the same as `value` after the parameter takes effect. If no value has been set, this field will not be returned.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDefault() Obtain Default value
 * @method void setDefault(string $Default) Set Default value
 * @method ParamConstraint getConstraint() Obtain Parameter constraint
 * @method void setConstraint(ParamConstraint $Constraint) Set Parameter constraint
 */

/**
 *DB parameter description
 */
class ParamDesc extends AbstractModel
{
    /**
     * @var string Parameter name
     */
    public $Param;

    /**
     * @var string Current parameter value
     */
    public $Value;

    /**
     * @var string Previously set value, which is the same as `value` after the parameter takes effect. If no value has been set, this field will not be returned.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SetValue;

    /**
     * @var string Default value
     */
    public $Default;

    /**
     * @var ParamConstraint Parameter constraint
     */
    public $Constraint;
    /**
     * @param string $Param Parameter name
     * @param string $Value Current parameter value
     * @param string $SetValue Previously set value, which is the same as `value` after the parameter takes effect. If no value has been set, this field will not be returned.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Default Default value
     * @param ParamConstraint $Constraint Parameter constraint
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
        if (array_key_exists("Param",$param) and $param["Param"] !== null) {
            $this->Param = $param["Param"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("SetValue",$param) and $param["SetValue"] !== null) {
            $this->SetValue = $param["SetValue"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("Constraint",$param) and $param["Constraint"] !== null) {
            $this->Constraint = new ParamConstraint();
            $this->Constraint->deserialize($param["Constraint"]);
        }
    }
}
