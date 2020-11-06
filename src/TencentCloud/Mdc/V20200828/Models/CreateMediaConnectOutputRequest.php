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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMediaConnectOutput request structure.
 *
 * @method string getFlowId() Obtain Flow ID.
 * @method void setFlowId(string $FlowId) Set Flow ID.
 * @method CreateOutput getOutput() Obtain Output configuration of flow.
 * @method void setOutput(CreateOutput $Output) Set Output configuration of flow.
 */
class CreateMediaConnectOutputRequest extends AbstractModel
{
    /**
     * @var string Flow ID.
     */
    public $FlowId;

    /**
     * @var CreateOutput Output configuration of flow.
     */
    public $Output;

    /**
     * @param string $FlowId Flow ID.
     * @param CreateOutput $Output Output configuration of flow.
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new CreateOutput();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
