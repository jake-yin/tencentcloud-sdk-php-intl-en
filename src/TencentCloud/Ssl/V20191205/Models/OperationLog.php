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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Certificate operation logs
 *
 * @method string getAction() Obtain Action performed on logs
 * @method void setAction(string $Action) Set Action performed on logs
 * @method string getCreatedOn() Obtain Time when the action is performed
 * @method void setCreatedOn(string $CreatedOn) Set Time when the action is performed
 */
class OperationLog extends AbstractModel
{
    /**
     * @var string Action performed on logs
     */
    public $Action;

    /**
     * @var string Time when the action is performed
     */
    public $CreatedOn;

    /**
     * @param string $Action Action performed on logs
     * @param string $CreatedOn Time when the action is performed
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }
    }
}
