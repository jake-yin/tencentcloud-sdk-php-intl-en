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
 * The custom log field in a real-time log delivery task
 *
 * @method string getName() Obtain Extracts data from specified positions in HTTP requests and responses. Valid values:
<li>ReqHeader: Extract a specified field value from an HTTP request header;</li>
<li>RspHeader: Extract a specified field value from an HTTP response header;</li>
<li>cookie: Extract a specified field value from a cookie.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Extracts data from specified positions in HTTP requests and responses. Valid values:
<li>ReqHeader: Extract a specified field value from an HTTP request header;</li>
<li>RspHeader: Extract a specified field value from an HTTP response header;</li>
<li>cookie: Extract a specified field value from a cookie.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getValue() Obtain Indicates the name of the parameter from which a value needs to be extracted, such as Accept-Language.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValue(string $Value) Set Indicates the name of the parameter from which a value needs to be extracted, such as Accept-Language.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getEnabled() Obtain Indicates whether to deliver this field. If not filled in, this field will not be delivered.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnabled(boolean $Enabled) Set Indicates whether to deliver this field. If not filled in, this field will not be delivered.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CustomField extends AbstractModel
{
    /**
     * @var string Extracts data from specified positions in HTTP requests and responses. Valid values:
<li>ReqHeader: Extract a specified field value from an HTTP request header;</li>
<li>RspHeader: Extract a specified field value from an HTTP response header;</li>
<li>cookie: Extract a specified field value from a cookie.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Indicates the name of the parameter from which a value needs to be extracted, such as Accept-Language.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Value;

    /**
     * @var boolean Indicates whether to deliver this field. If not filled in, this field will not be delivered.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Enabled;

    /**
     * @param string $Name Extracts data from specified positions in HTTP requests and responses. Valid values:
<li>ReqHeader: Extract a specified field value from an HTTP request header;</li>
<li>RspHeader: Extract a specified field value from an HTTP response header;</li>
<li>cookie: Extract a specified field value from a cookie.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Value Indicates the name of the parameter from which a value needs to be extracted, such as Accept-Language.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Enabled Indicates whether to deliver this field. If not filled in, this field will not be delivered.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
