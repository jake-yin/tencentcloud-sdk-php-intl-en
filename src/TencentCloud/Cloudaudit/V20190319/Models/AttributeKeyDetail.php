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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * `AttributeKey` value details
 *
 * @method string getLabel() Obtain Tag
 * @method void setLabel(string $Label) Set Tag
 * @method string getLabelType() Obtain Input box type
 * @method void setLabelType(string $LabelType) Set Input box type
 * @method integer getOrder() Obtain Display sort order
 * @method void setOrder(integer $Order) Set Display sort order
 * @method string getStarter() Obtain Initial display
 * @method void setStarter(string $Starter) Set Initial display
 * @method string getValue() Obtain `AttributeKey` value
 * @method void setValue(string $Value) Set `AttributeKey` value
 */
class AttributeKeyDetail extends AbstractModel
{
    /**
     * @var string Tag
     */
    public $Label;

    /**
     * @var string Input box type
     */
    public $LabelType;

    /**
     * @var integer Display sort order
     */
    public $Order;

    /**
     * @var string Initial display
     */
    public $Starter;

    /**
     * @var string `AttributeKey` value
     */
    public $Value;

    /**
     * @param string $Label Tag
     * @param string $LabelType Input box type
     * @param integer $Order Display sort order
     * @param string $Starter Initial display
     * @param string $Value `AttributeKey` value
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("LabelType",$param) and $param["LabelType"] !== null) {
            $this->LabelType = $param["LabelType"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Starter",$param) and $param["Starter"] !== null) {
            $this->Starter = $param["Starter"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
