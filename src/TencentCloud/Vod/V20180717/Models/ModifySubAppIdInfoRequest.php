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
 * @method integer getSubAppId() Obtain Subapplication ID.
 * @method void setSubAppId(integer $SubAppId) Set Subapplication ID.
 * @method string getName() Obtain Subapplication name. Length limit: 40 characters.
 * @method void setName(string $Name) Set Subapplication name. Length limit: 40 characters.
 * @method string getDescription() Obtain Subapplication overview. Length limit: 300 characters.
 * @method void setDescription(string $Description) Set Subapplication overview. Length limit: 300 characters.
 */

/**
 *ModifySubAppIdInfo request structure.
 */
class ModifySubAppIdInfoRequest extends AbstractModel
{
    /**
     * @var integer Subapplication ID.
     */
    public $SubAppId;

    /**
     * @var string Subapplication name. Length limit: 40 characters.
     */
    public $Name;

    /**
     * @var string Subapplication overview. Length limit: 300 characters.
     */
    public $Description;
    /**
     * @param integer $SubAppId Subapplication ID.
     * @param string $Name Subapplication name. Length limit: 40 characters.
     * @param string $Description Subapplication overview. Length limit: 300 characters.
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
