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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getResourceType() Obtain Type of the resources associated with the tags. Currently only "instance" and "host" are supported.
 * @method void setResourceType(string $ResourceType) Set Type of the resources associated with the tags. Currently only "instance" and "host" are supported.
 * @method array getTags() Obtain List of tags
 * @method void setTags(array $Tags) Set List of tags
 */

/**
 *Description of tags associated with resource instances during instance creation.
 */
class TagSpecification extends AbstractModel
{
    /**
     * @var string Type of the resources associated with the tags. Currently only "instance" and "host" are supported.
     */
    public $ResourceType;

    /**
     * @var array List of tags
     */
    public $Tags;
    /**
     * @param string $ResourceType Type of the resources associated with the tags. Currently only "instance" and "host" are supported.
     * @param array $Tags List of tags
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
